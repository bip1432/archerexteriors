<?php
$this->set('title', 'Thank You for Your Referral | Archer Exteriors');
$this->set('metaDescription', 'Thank you for your referral submission to Archer Exteriors');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Thank You, Referral, Archer Exteriors');
$this->set('ogTitle', 'Thank You for Your Referral | Archer Exteriors');
$this->set('ogDescription', 'Thank you for your referral submission to Archer Exteriors');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website');
$this->set('ogUrl', DOMAIN . '/refers/thank-you');
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
            <h2>Your referral has been submitted successfully.</h2>
        </div>
        <div class="sub_header">
            <?= $this->Html->image('thank-you/thumbs-up.svg', ['alt' => 'Thank you for contacting Archer Exteriors!', 'title' => 'Thank you for contacting Archer Exteriors!']) ?>
            <h4>Thank you for referring Archer Exteriors!</h4>
        </div>
        <p class="desc">We have received your referral submission and our team will review it shortly.</p>

        <div class="mt-5">
            <?= $this->Html->link('Go to Home Page <i class="flaticon-login"></i>', ['controller' => 'Pages', 'action' => 'display', 'home'], ['class' => 'theme-btn sm', 'escape' => false]) ?>
        </div>
    </div>
</section>