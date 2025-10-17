<?php
// Set Meta Tags
$this->set('title', 'Thank You for Your Art Submission | Art Contest | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors : Art Contest : Thank You');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors, Color the World with Archie');
$this->set('ogTitle', 'Thank You for Your Art Submission | Art Contest | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors : Art Contest : Thank You');
$this->set('ogImage', $this->Url->assetUrl('/img/archerexteriors-insignia.png', ['fullBase' => true]) . '?' . time());
$this->set('ogType', 'website');
$this->set('ogUrl', $this->Url->build('/communities/thank-you', ['fullBase' => true]));
?>

<!-- banner-section -->
<section class="page_hero thank_you">
    <div class="auto-container">
        <div class="contents text-center">
            <h1 class="title">Thank You!</h1>
        </div>
    </div>
</section>
<!-- banner-section end -->


<section class="section light text-center thank_you_contents">
    <div class="auto-container">
        <div class="header">
            <?= $this->Html->image('thank-you/check-blue.svg', ['alt' => 'Your message has been sent successfully!', 'title' => 'Your message has been sent successfully!']) ?>
            <h2>Your brand ambassador signup form has been submitted successfully.</h2>
        </div>
        <div class="sub_header">
            <?= $this->Html->image('thank-you/thumbs-up.svg', ['alt' => 'Thank you for contacting Archer Exteriors!', 'title' => 'Thank you for contacting Archer Exteriors!']) ?>
            <h4>Thank you for contacting Archer Exteriors!</h4>
        </div>
        <p class="desc">We appreciate your interest in the Brand Ambassador Program.</p>

        <div class="mt-5">
            <?= $this->Html->link('Go to Home Page <i class="flaticon-login"></i>', ['controller' => 'Pages', 'action' => 'display', 'home'], ['class' => 'theme-btn sm', 'escape' => false]) ?>
        </div>
    </div>
</section>