<?php
// Set Meta Tags
$this->set('title', 'Thank You | Art Contest | Color the World with Archie | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors : Art Contest : Thank You');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors, Color the World with Archie');
$this->set('ogTitle', 'Thank You | Art Contest | Color the World with Archie | Archer Exteriors');
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
      <?= $this->Html->image('thank-you/check-blue.svg', ['alt' => 'Thank you for submitting your artwork to the Color the World with Archie Art Contest!', 'title' => 'Thank you for submitting your artwork to the Color the World with Archie Art Contest!']) ?>
      <h2>Thank you for submitting your artwork to the <br> <b>Color the World with Archie Art Contest!</b></h2>
    </div>
    <div class="sub_header mt-4">
      <?= $this->Html->image('thank-you/thumbs-up.svg', ['alt' => 'We’re thrilled to have your young artist’s creativity as part of this colorful celebration.', 'title' => 'We’re thrilled to have your young artist’s creativity as part of this colorful celebration.']) ?>
      <h4>We’re thrilled to have your young artist’s creativity as part of this colorful celebration.</h4>
    </div>
    <p class="desc">Our team will review all submissions, and winners will be notified after the contest deadline. Be sure to follow us on social media for updates, featured entries, and prize announcements!</p>
    <p class="desc mt-3">From all of us at <b>Archer Exteriors</b> — thank you for being part of our community and helping us inspire the next generation of artists!</p>

    <div class="mt-5">
      <?= $this->Html->link('Go to Home Page <i class="flaticon-login"></i>', ['controller' => 'Pages', 'action' => 'display', 'home'], ['class' => 'theme-btn sm', 'escape' => false]) ?>
    </div>
  </div>
</section>