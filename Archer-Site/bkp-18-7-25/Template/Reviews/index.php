<?php
// Set Meta Tags
$this->set('title', 'Archer Exteriors | Reviews');
$this->set('metaDescription', 'Archer Exteriors - Your trusted partner for premium roofing, siding, and exterior solutions.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Archer Exteriors | Reviews');
$this->set('ogDescription', 'Archer Exteriors - Your trusted partner for premium roofing, siding, and exterior solutions.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/reviews'); // TODO: Change to the current page URL
?>

<section class="estimate-form-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <?php echo $this->element('comming_soon'); ?>
        </div>
    </div>
</section>