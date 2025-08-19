<?php
// Set Meta Tags
$this->set('title', 'Thank You for Your Job Application | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Your trusted partner for premium roofing, siding, and exterior solutions.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Thank You for Your Job Application | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Your trusted partner for premium roofing, siding, and exterior solutions.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/careers/thank-you'); // TODO: Change to the current page URL
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
            <h2>Your job application has been submitted successfully.</h2>
        </div>
        <div class="sub_header">
            <?= $this->Html->image('thank-you/thumbs-up.svg', ['alt' => 'Thank you for contacting Archer Exteriors!', 'title' => 'Thank you for contacting Archer Exteriors!']) ?>
            <h4>Thank you for your job application!</h4>
        </div>
        <p class="desc">We appreciate your interest in our company.</p>

        <div class="mt-5">
            <?= $this->Html->link('Go to Home Page <i class="flaticon-login"></i>', ['controller' => 'Pages', 'action' => 'display', 'home'], ['class' => 'theme-btn sm', 'escape' => false]) ?>
        </div>
    </div>
</section>