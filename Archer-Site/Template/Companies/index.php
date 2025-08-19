<?php
$this->set('title', 'Local Roofing Company & Home Exterior Services | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Local Roofing Company & Home Exterior Services');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Local Roofing Company & Home Exterior Services | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Local Roofing Company & Home Exterior Services');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/about-us'); // TODO: Change to the current page URL
?>

<section class="estimate-form-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <?php echo $this->element('comming_soon'); ?>
        </div>
    </div>
</section>