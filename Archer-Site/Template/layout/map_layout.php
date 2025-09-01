<?php

use Cake\Core\Configure;
?>
<?= $this->Html->css('maps') ?>

<?= $this->fetch('content') ?>

<script>
    // Load Google Maps API
    function loadGoogleMaps() {
        const script = document.createElement('script');
        script.src = 'https://maps.googleapis.com/maps/api/js?key=<?= h(Configure::read('GoogleMaps.api_key')) ?>&callback=initMap';
        script.async = true;
        script.onerror = function() {
            console.error('Failed to load Google Maps API');
            const mapDiv = document.getElementById('county-map');
            mapDiv.innerHTML = '<div style="padding: 20px; background-color: #ffebee; border: 1px solid #ffcdd2; border-radius: 4px;">Error loading Google Maps. Please try refreshing the page.</div>';
        };
        document.body.appendChild(script);
    }

    // Start loading when document is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', loadGoogleMaps);
    } else {
        loadGoogleMaps();
    }
</script>