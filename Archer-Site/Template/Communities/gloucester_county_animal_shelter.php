<?php
// Set Meta Tags
$this->set('title', 'Gloucester County Animal Shelter | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Gloucester County Animal Shelter');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Gloucester County Animal Shelter, Archer Exteriors');
$this->set('ogTitle', 'Gloucester County Animal Shelter | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Gloucester County Animal Shelter');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/gloucester-county-animal-shelter');
?>

<!-- Hero-section -->
<section class="page_hero animal_shelter">
  <div class="auto-container">
  </div>
</section>
<!-- Hero-section end -->

<!-- Advertisement  -->
<section>
  <div class="container">
    <?= $this->element('advertisement') ?>
  </div>
</section>


<!-- Community Events Section Start  -->
<section class="section light">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Community Impact</h6>
      <h2>Giving Back <span>With Purpose</span></h2>
      <p class="desc"
        style="font-size: 18px; max-width: 1000px; margin-left: auto;margin-right: auto; color: var(--font);">At
        Archer Exteriors, building strong communities is just as important as building strong homes. That’s why we
        actively support local causes and organizations that make a difference.</p>
    </div>

    <div class="row gx-lg-5 gy-5 mt-2 text-center text-lg-start flex-column-reverse flex-lg-row">
      <div class="col-lg-6 col-md-12 align-self-center">
        <h4 class="title_3 mb-2">Rallying Support for Gloucester County Animal Shelter</h4>
        <p>When our team at Archer Exteriors decided to gather a few items for the Gloucester County Animal Shelter,
          we had no idea how big it would become. Word spread, and soon our employees, customers, and local partners
          joined in. Thanks to overwhelming community support and a generous $1,000 donation from one of our
          suppliers, we were able to deliver an entire truckload of much-needed supplies—food, bedding, toys, and
          more—to help care for local animals in need.</p>
        <p class="mt-3">This initiative served as a powerful reminder that even the smallest gestures, when fueled by
          compassion and collective effort, can lead to extraordinary outcomes. At Archer Exteriors, we’re committed
          to giving back to the communities we serve—furry friends included.</p>

        <h4 class="title_3 mt-4 mb-3">Our community impact initiatives</h4>
        <?= $this->Html->link('Learn More<i class="flaticon-login"></i>', ['controller' => 'Communities', 'action' => 'index'], ['class' => 'theme-btn sm', 'escape' => false]) ?>
      </div>

      <div class="col-lg-6 col-md-12">
        <div class="thumbCarousel outer">
          <div class="owl-carousel owl-theme thumbCarouselBig">
            <div class="item">
              <?= $this->Html->image('community-impact/animal-shelter/gloucester-county-animal-shelter-banner1.jpg', [
                'alt' => 'Gloucester County Animal Shelter',
                'class' => 'img-fluid'
              ]) ?>
            </div>
            <div class="item">
              <?= $this->Html->image('community-impact/animal-shelter/gloucester-county-animal-shelter-banner2.jpg', [
                'alt' => 'Gloucester County Animal Shelter',
                'class' => 'img-fluid'
              ]) ?>
            </div>
            <div class="item">
              <?= $this->Html->image('community-impact/animal-shelter/gloucester-county-animal-shelter-banner3.jpg', [
                'alt' => 'Gloucester County Animal Shelter',
                'class' => 'img-fluid'
              ]) ?>
            </div>
            <div class="item">
              <?= $this->Html->image('community-impact/animal-shelter/gloucester-county-animal-shelter-banner4.jpg', [
                'alt' => 'Gloucester County Animal Shelter',
                'class' => 'img-fluid'
              ]) ?>
            </div>
          </div>
          <div class="owl-carousel owl-theme thumbCarouselThumbs">
            <div class="item">
              <?= $this->Html->image('community-impact/animal-shelter/gloucester-county-animal-shelter-banner1.jpg', [
                'alt' => 'Gloucester County Animal Shelter Thumbnail',
                'class' => 'img-fluid'
              ]) ?>
            </div>
            <div class="item">
              <?= $this->Html->image('community-impact/animal-shelter/gloucester-county-animal-shelter-banner2.jpg', [
                'alt' => 'Gloucester County Animal Shelter Thumbnail',
                'class' => 'img-fluid'
              ]) ?>
            </div>
            <div class="item">
              <?= $this->Html->image('community-impact/animal-shelter/gloucester-county-animal-shelter-banner3.jpg', [
                'alt' => 'Gloucester County Animal Shelter Thumbnail',
                'class' => 'img-fluid'
              ]) ?>
            </div>
            <div class="item">
              <?= $this->Html->image('community-impact/animal-shelter/gloucester-county-animal-shelter-banner4.jpg', [
                'alt' => 'Gloucester County Animal Shelter Thumbnail',
                'class' => 'img-fluid'
              ]) ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Community Events Section End  -->

<!-- Archie Section Start  -->
<section class="archie_section">
  <?= $this->element('archie_section') ?>
</section>
<!-- Archie Section End  -->

<!-- Reviews section Start  -->
<section class="section light reviews">
  <?= $this->element('reviews') ?>
</section>
<!-- Reviews section End  -->

<!-- Activities Slider Section Start  -->
<section class="section">
  <?= $this->element('current_activities') ?>
</section>
<!-- Activities Slider Section End  -->