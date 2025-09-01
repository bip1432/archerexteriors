<?php

use Cake\Core\Configure;

// Get the webroot URL using CakePHP's URL helper
$geojsonUrl = $this->Url->build('/geojson/all_branch_counties.geojson', ['fullBase' => false]);
$markerIconUrl = $this->Url->build('/img/map/marker/icon-archer.png', ['fullBase' => true]);
$markerIconRemodelingUrl = $this->Url->build('/img/map/marker/icon-archer-remodeling.png', ['fullBase' => true]);
$markerIconUrlHQ = $this->Url->build('/img/map/marker/icon-archi-hq.png', ['fullBase' => true]);
$markerIconUrlLight = $this->Url->build('/img/map/marker/icon-archer-light.png', ['fullBase' => true]);
?>

<!-- <style>
  /* Override maps.css for proper layout with legend stripe */

  body{
    margin: 0;
  }
  .map-container {
    position: relative !important;
    width: 100% !important;
    height: 70vh !important;
    min-height: 500px !important;
    max-height: 800px !important;
    margin: 0 !important;
    padding: 0 !important;
    z-index: auto !important;
  }

  #county-map {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 0;
    margin: 0;
    padding: 0;
  }

  /* Legend Stripe Design */
  .marker-legend-stripe {
    background: #eceff5;
    margin: 0;
    padding: 20px 0;
    position: relative;
    z-index: 1;
  }

  .legend-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  .legend-items-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 40px;
    flex-wrap: wrap;
  }

  .marker-legend-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 20px;
    background: white;
    border-radius: 6px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    border: 2px solid transparent;
    position: relative;
    overflow: hidden;
    font-family: 'Roboto', sans-serif;
  }

  .marker-legend-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
    transition: left 0.5s ease;
  }

  .marker-legend-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    border-color: #0d6efd;
  }

  .marker-legend-item:hover::before {
    left: 100%;
  }

  .marker-legend-icon {
    width: 32px !important;
    height: 32px !important;
    object-fit: contain;
    filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
    transition: transform 0.3s ease;
  }

  .marker-legend-item:hover .marker-legend-icon {
    transform: scale(1.1);
  }

  .marker-legend-label {
    font-size: 15px;
    font-weight: 600;
    color: #2c3e50;
    white-space: nowrap;
    letter-spacing: 0.5px;
    transition: color 0.3s ease;
  }

  .marker-legend-item:hover .marker-legend-label {
    color: #0d6efd;
  }

  /* Responsive adjustments */
  @media (max-width: 992px) {
    .legend-items-wrapper {
      gap: 25px;
    }

    .marker-legend-item {
      padding: 10px 16px;
    }

    .marker-legend-icon {
      width: 28px !important;
      height: 28px !important;
    }

    .marker-legend-label {
      font-size: 14px;
    }
  }

  @media (max-width: 768px) {
    .map-container {
      height: 60vh !important;
      min-height: 400px !important;
    }

    .marker-legend-stripe {
      padding: 15px 0;
    }

    .legend-container {
      padding: 0 15px;
    }

    .legend-items-wrapper {
      gap: 20px;
    }

    .marker-legend-item {
      padding: 8px 14px;
    }

    .marker-legend-icon {
      width: 26px !important;
      height: 26px !important;
    }

    .marker-legend-label {
      font-size: 13px;
    }
  }

  @media (max-width: 576px) {
    .legend-items-wrapper {
      gap: 15px;
    }

    .marker-legend-item {
      padding: 8px 12px;
      gap: 8px;
    }

    .marker-legend-icon {
      width: 24px !important;
      height: 24px !important;
    }

    .marker-legend-label {
      font-size: 12px;
    }
  }

  @media (max-width: 480px) {
    .map-container {
      height: 50vh !important;
      min-height: 350px !important;
    }

    .legend-items-wrapper {
      flex-direction: column;
      gap: 12px;
    }

    .marker-legend-item {
      width: auto;
      justify-content: center;
    }
  }

  @media (min-width: 1200px) {
    .map-container {
      height: 75vh !important;
      max-height: 900px !important;
    }

    .legend-items-wrapper {
      gap: 50px;
    }

    .marker-legend-item {
      padding: 14px 24px;
    }
  }
</style> -->

<div class="map-container">
  <div id="county-map"></div>
</div>

<!-- Marker Reference Legend Stripe -->
<!-- <div class="marker-legend-stripe">
  <div class="legend-container">
    <div class="legend-items-wrapper">

      <div class="marker-legend-item">
        <?= $this->Html->image('map/marker/icon-archi-hq.png', [
          'alt' => 'Archer Headquarters Marker',
          'class' => 'marker-legend-icon'
        ]) ?>
        <span class="marker-legend-label">Archer Headquarters</span>
      </div>

      <div class="marker-legend-item">
        <?= $this->Html->image('map/marker/icon-archer.png', [
          'alt' => 'New Construction Marker',
          'class' => 'marker-legend-icon'
        ]) ?>
        <span class="marker-legend-label">New Construction</span>
      </div>

      <div class="marker-legend-item">
        <?= $this->Html->image('map/marker/icon-archer-remodeling.png', [
          'alt' => 'Remodeling Marker',
          'class' => 'marker-legend-icon'
        ]) ?>
        <span class="marker-legend-label">Remodeling</span>
      </div>

      <div class="marker-legend-item">
        <?= $this->Html->image('map/marker/icon-archer-light.png', [
          'alt' => 'Coming Soon Marker',
          'class' => 'marker-legend-icon'
        ]) ?>
        <span class="marker-legend-label">Coming Soon</span>
      </div>
    </div>
  </div>
</div> -->

<!-- Load Google Maps JavaScript API -->
<script>
  // Store the GeoJSON URL from PHP
  const geojsonUrl = '<?= $geojsonUrl ?>';

  // Initialize map when Google Maps API is loaded
  function initMap() {

    const map = new google.maps.Map(document.getElementById("county-map"), {
      zoom: 4,
      center: {
        lat: 39.8283,
        lng: -98.5795
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

    // Array to store all markers for bounds calculation
    const allMarkers = [];
    let markersProcessed = 0;

    // Define all branch locations with their details
    const branchLocations = [{
        id: 'southern_jersey',
        title: 'SOUTHERN JERSEY & DELAWARE VALLEY',
        address: '341 Harding Hwy, Pittsgrove, NJ 08318',
        color: '#5d04d0',
        counties: 'NJ: Atlantic, Burlington, Camden, Cape May, Cumberland, Gloucester, Salem, Ocean | PA: Bucks, Chester, Delaware | DE: New Castle | MD: Cecil',
        license: 'NJ LIC#13VH09651200, PA LIC#129503',
        services_offered: '1,2',
        main_branch_flag: 1,
        coming_soon_flag: 0
      },
      {
        id: 'northern_jersey',
        title: 'NORTHERN & CENTRAL NEW JERSEY',
        address: '77 Pension Road, Suites 5&6, Manalapan, NJ 07726',
        color: '#bf0000',
        counties: 'NJ: Essex, Hunterdon, Mercer, Middlesex, Warren, Monmouth, Morris, Somerset, Union',
        license: 'NJ LIC#13VH09651200',
        services_offered: '1,2',
        main_branch_flag: 0,
        coming_soon_flag: 0
      },
      {
        id: 'alabama_florida',
        title: 'ALABAMA & PENSACOLA, FLORIDA',
        address: '1727 Creighton Rd, Pensacola, FL 32504',
        color: '#006400',
        counties: 'AL: Baldwin, Mobile | FL: Escambia, Okaloosa, Santa Rosa',
        license: 'AL LIC#26647, FL ROOFING LIC#CCC1327720',
        services_offered: '1,2',
        main_branch_flag: 0,
        coming_soon_flag: 0
      },
      {
        id: 'florida_lynn_havens',
        title: 'LYNN HAVEN, FLORIDA',
        address: '1120 Ohio Avenue, Lynn Haven, FL 32444',
        color: '#ff8503',
        counties: 'FL: Okaloosa, Walton, Holmes, Washington, Bay, Gulf',
        license: 'FL ROOFING LIC#CCC1327720',
        services_offered: '1,2',
        main_branch_flag: 0,
        coming_soon_flag: 0
      },
      {
        id: 'pittsburgh',
        title: 'PITTSBURGH',
        address: '279 Steuben St , Pittsburgh , PA 15205',
        color: '#01579b',
        counties: '',
        license: 'PA LIC#PA082127',
        services_offered: '1',
        main_branch_flag: 0,
        coming_soon_flag: 0
      },
      {
        id: 'virginia',
        title: 'VIRGINIA',
        address: '6290 Old Warwick Rd , Suite A , Richmond , VA 23224',
        color: '#01579b',
        counties: '',
        license: 'VA LIC#2705052330',
        services_offered: '1',
        main_branch_flag: 0,
        coming_soon_flag: 0
      },
      {
        id: 'new_england',
        title: 'NEW ENGLAND',
        address: '155 Memorial Drive , Suite B , Shrewsbury , MA 01545',
        color: '#01579b',
        counties: '',
        license: 'MA LIC#158356, RI LIC#21453, CT LIC#HIC.0619633',
        services_offered: '1',
        main_branch_flag: 0,
        coming_soon_flag: 0
      },
      {
        id: 'delaware',
        title: 'DELAWARE',
        address: '28524 DuPont Boulevard , Millsboro , DE 19966',
        color: '#01579b',
        counties: '',
        license: 'DE LIC#1998205023',
        services_offered: '1',
        main_branch_flag: 0,
        coming_soon_flag: 0
      },
      {
        id: 'florida_lakeland',
        title: 'LAKELAND, FLORIDA',
        address: '2500 Drane Field Road , Suite 108 , Lakeland , FL 33811',
        color: '#01579b',
        counties: '',
        license: 'FL ROOFING LIC#CCC1327720, FL SPECIALTY LIC#SCC131151513',
        services_offered: '1',
        main_branch_flag: 0,
        coming_soon_flag: 0
      },
      {
        id: 'maryland',
        title: 'MARYLAND',
        address: '11436 Cronridge Drive , Suite K , Owings Mills , MD 21117',
        color: '#01579b',
        counties: '',
        license: 'MD LIC#22479361',
        services_offered: '1',
        main_branch_flag: 0,
        coming_soon_flag: 0
      },
      {
        id: 'tennessee',
        title: 'TENNESSEE',
        address: '475 Metroplex Drive , Suite 403, Nashville , TN 37211',
        color: '#01579b',
        counties: '',
        license: '',
        services_offered: '1',
        main_branch_flag: 0,
        coming_soon_flag: 0
      },
      {
        id: 'colorado',
        title: 'COLORADO',
        address: '7338 S Alton Way , Unit 16G , Centennial , CO 80112',
        color: '#01579b',
        counties: '',
        license: 'CO LIC#00251915',
        services_offered: '1',
        main_branch_flag: 0,
        coming_soon_flag: 0
      },
      {
        id: 'south_carolina',
        title: 'SOUTH CAROLINA',
        address: '625 Treeland Drive , Unit C , Ladson , SC 29456',
        color: '#01579b',
        counties: '',
        license: 'SC ROOFING LIC#G119249PA, SC SPECIALTY LIC#53306',
        services_offered: '1',
        main_branch_flag: 0,
        coming_soon_flag: 0
      },
      {
        id: 'georgia',
        title: 'GEORGIA',
        address: '1811 US Hwy 80 W , Garden City , GA 31408',
        color: '#01579b',
        counties: '',
        license: 'GA LIC#31405239983',
        services_offered: '1',
        main_branch_flag: 0,
        coming_soon_flag: 0
      },
      {
        id: 'ohio',
        title: 'OHIO',
        address: '7205 Babbert Place , Canal Winchester , OH 43110',
        color: '#01579b',
        counties: '',
        license: '',
        services_offered: '1',
        main_branch_flag: 0,
        coming_soon_flag: 0
      },
      {
        id: 'north_carolina',
        title: 'NORTH CAROLINA',
        address: '540 N Timberlea St, Liberty, NC 27298',
        color: '#01579b',
        counties: '',
        license: '',
        services_offered: '1',
        main_branch_flag: 0,
        coming_soon_flag: 1
      },
      {
        id: 'cincinnati_ohio',
        title: 'CINCINNATI, OHIO',
        address: '709 Avon Fields Ln, Cincinnati, OH 45229',
        color: '#01579b',
        counties: '',
        license: '',
        services_offered: '1',
        main_branch_flag: 0,
        coming_soon_flag: 1
      },
      {
        id: 'florida_naples',
        title: 'NAPLES, FLORIDA',
        address: '2446 Orchard ST, NAPLES, FL 34120',
        color: '#01579b',
        counties: '',
        license: '',
        services_offered: '1',
        main_branch_flag: 0,
        coming_soon_flag: 1
      },
      {
        id: 'indiana',
        title: 'INDIANA',
        address: '1587 County 77 Rd, Butler, IN 46721',
        color: '#01579b',
        counties: '',
        license: '',
        services_offered: '1',
        main_branch_flag: 0,
        coming_soon_flag: 1
      },
      {
        id: 'nebraska',
        title: 'NEBRASKA',
        address: '1201 W Main St, Sargent, NE 68874',
        color: '#01579b',
        counties: '',
        license: '',
        services_offered: '1',
        main_branch_flag: 0,
        coming_soon_flag: 1
      },
      {
        id: 'texas',
        title: 'TEXAS',
        address: '7600 County Road 200, Brownwood, TX 76801',
        color: '#01579b',
        counties: '',
        license: '',
        services_offered: '1',
        main_branch_flag: 0,
        coming_soon_flag: 1
      }

    ];

    // Get branch locations data dynamically from DB MapsController action allBranches()
    /* const branchLocations = <?php //echo json_encode($branchLocationsForMap, JSON_HEX_APOS | JSON_HEX_QUOT)
                                ?>; */

    // Function to fit map to show all markers
    function fitMapToAllMarkers() {
      if (allMarkers.length > 0) {
        const bounds = new google.maps.LatLngBounds();
        allMarkers.forEach(marker => {
          bounds.extend(marker.getPosition());
        });
        map.fitBounds(bounds, {
          padding: 50 // Add 50px padding around the bounds
        });
      }
    }

    // Add custom markers for all branch locations
    const geocoder = new google.maps.Geocoder();

    branchLocations.forEach((branch, index) => {
      // Add delay to prevent geocoding API rate limits
      setTimeout(() => {
        geocoder.geocode({
          address: branch.address
        }, (results, status) => {
          if (status === 'OK') {
            const location = results[0].geometry.location;

            // Create marker with custom icon
            const marker = new google.maps.Marker({
              map: map,
              position: location,
              icon: {
                url: branch.main_branch_flag == 1 ? '<?= $markerIconUrlHQ ?>' : branch.coming_soon_flag == 1 ? '<?= $markerIconUrlLight ?>' : branch.services_offered == '1,2' ? '<?= $markerIconRemodelingUrl ?>' : '<?= $markerIconUrl ?>',
                scaledSize: new google.maps.Size(40, 40),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(20, 40)
              },
              animation: google.maps.Animation.DROP,
              optimized: true,
              title: branch.title
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
                                    ${branch.main_branch_flag == 1 ? `
                                        <picture>
                                            <source media="(min-width: 500px)" srcset="<?= $this->Url->image('map/archer-head-quarter-lg.png', ['fullBase' => true]) ?>">
                                            <source media="(max-width: 499px)" srcset="<?= $this->Url->image('map/archer-head-quarter-sm.png', ['fullBase' => true]) ?>">
                                            <img src="<?= $this->Url->image('map/archer-head-quarter-lg.png', ['fullBase' => true]) ?>" alt="${branch.title}" style="width: 100%; height: auto;">
                                        </picture>
                                    ` : branch.coming_soon_flag == 1 ? `
                                        <picture>
                                            <source media="(min-width: 500px)" srcset="<?= $this->Url->image('map/archer-coming-soon-lg.png', ['fullBase' => true]) ?>">
                                            <source media="(max-width: 499px)" srcset="<?= $this->Url->image('map/archer-coming-soon-sm.png', ['fullBase' => true]) ?>">
                                            <img src="<?= $this->Url->image('map/archer-coming-soon-lg.png', ['fullBase' => true]) ?>" alt="${branch.title}" style="width: 100%; height: auto;">
                                        </picture>
                                    ` : `
                                        <picture>
                                            <source media="(min-width: 500px)" srcset="<?= $this->Url->image('map/archer-archie-branch-lg.png', ['fullBase' => true]) ?>">
                                            <source media="(max-width: 499px)" srcset="<?= $this->Url->image('map/archer-archie-branch-sm.png', ['fullBase' => true]) ?>">
                                            <img src="<?= $this->Url->image('map/archer-archie-branch-lg.png', ['fullBase' => true]) ?>" alt="${branch.title}" style="width: 100%; height: auto;">
                                        </picture>
                                    `}
                                </div>
                                ${branch.coming_soon_flag == 0 ? `
                                <div class="info-window-content">
                                    <div class="info-window-title">${branch.title}</div>
                                    <div class="info-window-address">
                                        <a href="https://www.google.com/maps/search/?api=1&query=${encodeURIComponent(branch.address)}" target="_blank">
                                            <?= $this->Html->image('map-marker.svg', ['class' => 'img-fluid svg', 'alt' => 'Location']) ?>
                                            ${branch.address}
                                        </a>
                                    </div>
                                    ${buildDepartmentsHTML(branch.services_offered)}
                                    ${branch.counties ? `
                                    <div class="info-window-counties" style="margin: 12px 0; padding: 8px; background: #f8f9fa; border-radius: 4px; font-size: 12px; color: #666;">
                                        <strong>Service Counties:</strong><br>${branch.counties}
                                    </div>
                                    ` : ''}
                                </div>
                                ` : `
                                <div class="info-window-content">
                                    <div class="info-window-title">Archer's Next Stop</div>
                                    <div class="info-window-address">
                                    <strong>${branch.title}</strong>
                                    </div>
                                    ${buildDepartmentsHTML(branch.services_offered)}
                                </div>
                                `}
                            </div>`
            });

            // Add click listener to marker
            marker.addListener('click', () => {
              if (currentInfoWindow) {
                currentInfoWindow.close();
              }
              markerInfo.open(map, marker);
              currentInfoWindow = markerInfo;
            });

            // Store marker for bounds calculation
            allMarkers.push(marker);

            // Check if all markers have been processed
            markersProcessed++;
            if (markersProcessed === branchLocations.length) {
              // Calculate bounds and fit map after all markers are placed
              fitMapToAllMarkers();
            }
          } else {
            console.error(`Geocoding failed for ${branch.title}: ${status}`);

            // Still increment counter even on failure
            markersProcessed++;
            if (markersProcessed === branchLocations.length) {
              // Calculate bounds and fit map after all processing is complete
              fitMapToAllMarkers();
            }
          }
        });
      }, index * 200); // 200ms delay between geocoding requests
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

          // Define branch-wise color mapping
          /* const branchColors = {
              // Branch 1: SOUTHERN JERSEY & DELAWARE VALLEY
              'southern_nj': '#5d04d0', // New Jersey counties - purple
              'southern_pa': '#5d04d0', // Pennsylvania counties - purple
              'southern_de': '#5d04d0', // Delaware counties - purple
              'southern_md': '#5d04d0', // Maryland counties - purple

              // Branch 2: NORTHERN & CENTRAL NEW JERSEY
              'northern_nj': '#bf0000', // New Jersey counties - red

              // Branch 3: ALABAMA & FLORIDA
              'alabama': '#006400', // Alabama counties - green
              'florida_branch3': '#006400', // Florida counties (Branch 3) - green

              // Branch 4: FLORIDA
              'florida_branch4': '#ff8503' // Florida counties (Branch 4) - orange
          }; */

          // Define county-to-branch mapping
          function getCountyBranch(countyName, stateCode) {
            // Branch 1: SOUTHERN JERSEY & DELAWARE VALLEY
            const southernNJCounties = ['Atlantic', 'Burlington', 'Camden', 'Cape May', 'Cumberland', 'Gloucester', 'Salem', 'Ocean'];
            const southernPACounties = ['Bucks', 'Chester', 'Delaware'];
            const southernDECounties = ['New Castle'];
            const southernMDCounties = ['Cecil'];
            // Branch 2: NORTHERN & CENTRAL NEW JERSEY
            const northernNJCounties = ['Essex', 'Hunterdon', 'Mercer', 'Middlesex', 'Warren', 'Monmouth', 'Morris', 'Somerset', 'Union'];

            // Branch 3: ALABAMA & FLORIDA
            const alabamaCounties = ['Baldwin', 'Mobile'];
            const floridaBranch3Counties = ['Escambia', 'Okaloosa', 'Santa Rosa'];

            // Branch 4: FLORIDA
            const floridaBranch4Counties = ['Walton', 'Holmes', 'Washington', 'Bay', 'Gulf']; // Removed Okaloosa - moved to Branch 3

            if (stateCode === '34') { // New Jersey
              if (southernNJCounties.includes(countyName)) {
                return 'southern_nj';
              } else if (northernNJCounties.includes(countyName)) {
                return 'northern_nj';
              }
            } else if (stateCode === '42' && southernPACounties.includes(countyName)) { // Pennsylvania
              return 'southern_pa';
            } else if (stateCode === '10' && southernDECounties.includes(countyName)) { // Delaware
              return 'southern_de';
            } else if (stateCode === '24' && southernMDCounties.includes(countyName)) { // Maryland
              return 'southern_md';
            } else if (stateCode === '01' && alabamaCounties.includes(countyName)) { // Alabama
              return 'alabama';
            } else if (stateCode === '12') { // Florida - check both branches
              if (floridaBranch4Counties.includes(countyName)) {
                return 'florida_branch4'; // Branch 4 takes precedence for overlapping counties
              } else if (floridaBranch3Counties.includes(countyName)) {
                return 'florida_branch3';
              }
            }

            return null; // County not in any branch
          }

          data.features.forEach(feature => {
            try {
              const paths = feature.geometry.coordinates[0].map(coord => ({
                lat: coord[1],
                lng: coord[0]
              }));

              // Get state and county info
              const stateCode = feature.properties.STATEFP;
              const countyName = feature.properties.NAME;

              // Get branch-specific color
              const branchKey = getCountyBranch(countyName, stateCode);
              /* const color = branchKey ? branchColors[branchKey] : '#808080'; // Default gray if county not in any branch

              const polygon = new google.maps.Polygon({
                  paths: paths,
                  strokeColor: color,
                  strokeOpacity: 0.8,
                  strokeWeight: 2,
                  fillColor: color,
                  fillOpacity: 0.35,
                  map: map
              }); */

              // Create InfoWindow with county and branch information
              const stateName = stateCode === '01' ? 'Alabama' :
                stateCode === '12' ? 'Florida' :
                stateCode === '34' ? 'New Jersey' :
                stateCode === '42' ? 'Pennsylvania' :
                stateCode === '10' ? 'Delaware' :
                stateCode === '24' ? 'Maryland' : 'Unknown State';

              // Get branch name for display
              const branchName = branchKey === 'southern_nj' || branchKey === 'southern_pa' || branchKey === 'southern_de' || branchKey === 'southern_md' ?
                'Southern Jersey & Delaware Valley' :
                branchKey === 'northern_nj' ?
                'Northern & Central New Jersey' :
                branchKey === 'alabama' || branchKey === 'florida_branch3' ?
                'Alabama & Florida' :
                branchKey === 'florida_branch4' ?
                'Florida' :
                'Not in Service Area';

              const info = new google.maps.InfoWindow({
                content: `<div class="custom-info-window">
                                    <div class="info-window-title">${countyName} County</div>
                                    <div class="info-window-address">${stateName}</div>
                                    <div class="info-window-branch" style="margin-top: 8px; font-weight: 600; font-size: 13px;">
                                        Branch: ${branchName}
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