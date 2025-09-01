<?php
// Get the webroot URL using CakePHP's URL helper
$geojsonUrl = $this->Url->build('/geojson/lynn_haven_florida_counties.geojson', ['fullBase' => false]);
$markerIconUrl = $this->Url->build('/img/map/marker/icon-archer.png', ['fullBase' => true]);
?>

<div class="map-container">
    <div id="county-map"></div>
</div>

<!-- Load Google Maps JavaScript API -->
<script>
    // Store the GeoJSON URL from PHP
    const geojsonUrl = '<?= $geojsonUrl ?>';

    // Initialize map when Google Maps API is loaded
    function initMap() {

        const map = new google.maps.Map(document.getElementById("county-map"), {
            zoom: 7,
            center: {
                lat: 30.24085,
                lng: -85.649007
            },
            mapTypeControl: true,
            streetViewControl: false
        });

        // Add loading indicator
        const loadingDiv = document.createElement('div');
        loadingDiv.className = 'map-loading';
        loadingDiv.style.display = 'none';
        loadingDiv.innerHTML = 'Loading counties...';
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(loadingDiv);

        // Keep track of the currently open InfoWindow
        let currentInfoWindow = null;

        // Add custom marker for Archer Exteriors location
        const geocoder = new google.maps.Geocoder();

        // Define all branch locations with their details
        const branchLocations = [{
            id: 'florida_lynn_haven',
            title: 'LYNN HAVEN, FLORIDA',
            branch_name: 'Lynn Haven, Florida',
            address: '1120 Ohio Avenue, Lynn Haven, FL 32444',
            color: '#ff8503',
            counties: 'FL: Okaloosa, Walton, Holmes, Washington, Bay, Gulf',
            license: 'FL ROOFING LIC#CCC1327720',
            services_offered: '1,2',
            main_branch_flag: 0
        }];

        geocoder.geocode({
            address: branchLocations[0].address
        }, (results, status) => {
            if (status === 'OK') {
                const location = results[0].geometry.location;

                // Create marker with custom icon
                const marker = new google.maps.Marker({
                    map: map,
                    position: location,
                    icon: {
                        url: '<?= $markerIconUrl ?>',
                        scaledSize: new google.maps.Size(40, 40),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(20, 40)
                    },
                    animation: google.maps.Animation.DROP,
                    optimized: true,
                    title: branchLocations[0].title
                });

                // Function to build services/departments HTML based on services_offered
                function buildDepartmentsHTML(servicesOffered) {
                    if (!servicesOffered) return '';

                    const servicesArray = servicesOffered.split(',').map(s => s.trim());
                    let servicesHTML = '<div class="info-window-services">';

                    servicesArray.forEach(serviceType => {
                        if (serviceType === '1') {
                            servicesHTML += `
                                <div class="service-item">
                                    <img src="<?= $this->Url->build('/img/service-area/icon-construction.png', ['fullBase' => true]) ?>" alt="New Construction" class="img-fluid">
                                    <a href="<?= $this->Url->build(['controller' => 'Companies', 'action' => 'newConstruction'], ['fullBase' => true]) ?>" target="_blank">New Construction</a>
                                </div>
                            `;
                        } else if (serviceType === '2') {
                            servicesHTML += `
                                <div class="service-item">
                                    <img src="<?= $this->Url->build('/img/service-area/icon-remodelling.png', ['fullBase' => true]) ?>" alt="Remodeling" class="img-fluid">
                                    <a href="<?= $this->Url->build(['controller' => 'Estimates', 'action' => 'index'], ['fullBase' => true]) ?>" target="_blank">Remodeling</a>
                                </div>
                            `;
                        }
                    });

                    servicesHTML += '</div>';
                    return servicesHTML;
                }

                // Create InfoWindow for the marker
                const markerInfo = new google.maps.InfoWindow({
                    content: `<div class="custom-info-window">
                        <div class="info-window-header-image">
                            <?= $this->Html->image('map/archer-archie-branch.png', [
                                'alt' => '${branchLocations[0].title}'
                            ]) ?>
                        </div>
                        <div class="info-window-content">
                            <div class="info-window-title">${branchLocations[0].title}</div>
                            <div class="info-window-address">
                            <a href="https://www.google.com/maps/search/?api=1&query=${encodeURIComponent(branchLocations[0].address)}" target="_blank">
                                <?= $this->Html->image('map-marker.svg', ['class' => 'img-fluid svg', 'alt' => 'Location']) ?>
                                ${branchLocations[0].address}
                            </a>
                            </div>
                            <div class="info-window-services">
                                ${buildDepartmentsHTML(branchLocations[0].services_offered)}
                            </div>
                            <div class="info-window-counties" style="margin: 12px 0; padding: 8px; background: #f8f9fa; border-radius: 4px; font-size: 12px; color: #666;">
                                <strong>Service Counties:</strong><br>${branchLocations[0].counties}
                            </div>
                            <div class="other-locations">
                                <a href="<?= $this->Url->build(['controller' => 'Maps', 'action' => 'index']) ?>" target="_blank">See other locations</a>
                            </div>
                        </div>
                    </div>`,
                    maxWidth: 350
                });

                // Add click listener to marker
                marker.addListener('click', () => {
                    if (currentInfoWindow) {
                        currentInfoWindow.close();
                    }
                    markerInfo.open(map, marker);
                    currentInfoWindow = markerInfo;
                });
            }
        });
        // End Add custom marker for Archer Exteriors location

        // Function to load and display counties
        function loadCounties() {
            // Show loading indicator
            loadingDiv.style.display = 'block';
            let countiesLoaded = false;

            // Add cache-busting parameter and error handling
            fetch(geojsonUrl + '?' + new Date().getTime())
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    if (!data.features || !Array.isArray(data.features)) {
                        throw new Error('Invalid GeoJSON format');
                    }

                    // Set flag that counties are starting to load
                    countiesLoaded = true;

                    data.features.forEach(feature => {
                        try {
                            const paths = feature.geometry.coordinates[0].map(coord => ({
                                lat: coord[1],
                                lng: coord[0]
                            }));

                            // Get state and county info
                            const stateCode = feature.properties.STATEFP;
                            const countyName = feature.properties.NAME;
                            const color = `${branchLocations[0].color}`;

                            const polygon = new google.maps.Polygon({
                                paths: paths,
                                strokeColor: color,
                                strokeOpacity: 0.8,
                                strokeWeight: 2,
                                fillColor: color,
                                fillOpacity: 0.35,
                                map: map
                            });

                            // Create InfoWindow with county information
                            const stateName = stateCode === '01' ? 'Alabama' :
                                stateCode === '12' ? 'Florida' : 'Unknown State';

                            const info = new google.maps.InfoWindow({
                                content: `<div class="custom-info-window">
                                    <div class="info-window-title">${countyName} County</div>
                                    <div class="info-window-address">${stateName}</div>
                                    <div class="info-window-branch" style="margin-top: 8px; font-weight: 600; font-size: 13px;">
                                        Branch: ${branchLocations[0].branch_name}
                                    </div>
                                </div>`
                            });

                            // Add click listener
                            polygon.addListener("click", (e) => {
                                // Close the currently open InfoWindow if there is one
                                if (currentInfoWindow) {
                                    currentInfoWindow.close();
                                }

                                // Open the new InfoWindow
                                info.setPosition(e.latLng);
                                info.open(map);

                                // Update the reference to the currently open InfoWindow
                                currentInfoWindow = info;
                            });

                            // Add click listener to close InfoWindow when clicking on the map
                            map.addListener("click", () => {
                                if (currentInfoWindow) {
                                    currentInfoWindow.close();
                                    currentInfoWindow = null;
                                }
                            });

                        } catch (err) {
                            console.error('Error processing feature:', err, feature);
                        }
                    });
                })
                .catch(error => {
                    console.error('Error loading counties:', error);
                    // Only show error if counties haven't loaded
                    if (!countiesLoaded) {
                        loadingDiv.style.backgroundColor = 'rgba(255, 200, 200, 0.9)';
                        loadingDiv.innerHTML = `Error loading county data: ${error.message}. Please try refreshing the page.`;
                    }
                })
                .finally(() => {
                    // Hide loading indicator only if counties were loaded successfully
                    if (countiesLoaded) {
                        // Add a small delay to ensure all polygons are rendered
                        setTimeout(() => {
                            loadingDiv.style.display = 'none';
                        }, 500);
                    }
                });
        }

        // Load counties when map is ready
        loadCounties();
    }
</script>