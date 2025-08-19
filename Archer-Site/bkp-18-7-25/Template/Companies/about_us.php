<?php
// Set Meta Tags
$this->set('title', 'Local Roofing Company & Home Exterior Services | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Local Roofing Company & Home Exterior Services');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Local Roofing Company & Home Exterior Services | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Local Roofing Company & Home Exterior Services');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/about-us'); // TODO: Change to the current page URL
?>

<!-- Hero-section -->
<section class="page_hero about">
  <div class="auto-container">
    <div class="contents text-center">
      <h1 class="title">40 Years of Excellence. <br> A Legacy of Trust.</h1>
      <p class="desc">Quality Craftsmanship Done Right the First Time.</p>
    </div>
  </div>
</section>
<!-- Hero-section end -->

<!-- Statistics Section Start  -->
<section class="funfact-section light">
  <?= $this->element('company_statistics') ?>
</section>
<!-- Statistics Section End  -->

<!-- About Company Section Start  -->
<section class="section light about-section" style="padding-bottom: 90px;">
  <div class="image-layer"></div>
  <div class="container">
    <div class="row clearfix">
      <div class="col-lg-6 col-md-12 col-sm-12 image-column">
        <div class="about-image-block">
          <div class="image-box">
            <div class="pattern-layer" style="background-image: url(<?= $this->Url->image('shape-1.png') ?>);"></div>
            <div class="image image-1">
              <?= $this->Html->image('about/about-1.jpg', ['alt' => '']) ?>
            </div>
            <div class="image image-2">
              <?= $this->Html->image('about/about-2.jpg', ['alt' => '']) ?>
            </div>
            <div class="image image-3">
              <?= $this->Html->image('about/about-badge.png', ['alt' => '', 'class' => 'rotate-me']) ?>
              <?= $this->Html->image('about/archie.png', ['alt' => '', 'class' => 'archie']) ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 content-column">
        <div class="about-content-block">
          <div class="content-box">
            <div class="sec-title">
              <h6><i class="flaticon-roof"></i>About Company</h6>
              <h2>Family-Owned. <br> <span>Community-Focused. <br> Built on Trust.</span></h2>
            </div>
            <div class="text">
              <p>With over 40 years of experience, Archer Exteriors is a trusted name in home exterior services. As a
                family-owned company, we take pride in delivering expert craftsmanship, clear communication, and a
                five-star experience from start to finish. From residential upgrades to large-scale commercial
                projects, we treat every home like it's our own.</p>
              <p>At Archer Exteriors, we understand that your house is more than just a building; it's your home. As
                local roofers, we take immense pride in our work and are dedicated to providing our clients with the
                best possible service. With decades of expertise and skill, we ensure your project is completed right
                the first time. </p>
              <p>We are committed to being with you every step of the way, combining our knowledge and dedication to
                achieve outstanding results.</p>
            </div>
            <div class="btn-box clearfix">
              <?= $this->Html->link(
                '<i class="fi fi-ss-play"></i> Video About <br> Our Journey & Story',
                'https://youtu.be/_bREIin0Rwk',
                [
                  'class' => 'lightbox-image video-btn',
                  'data-caption' => '',
                  'escape' => false
                ]
              ) ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About Company Section End  -->

<!-- Our Story Section Start  -->
<section class="section bg_secondary">
  <div class="container">
    <div class="sec-title text-center light">
      <h6><i class="flaticon-roof"></i>Our Story</h6>
      <h2>Improving Home Exteriors<br> <span> With Pride & Expertise</span></h2>
    </div>

    <div class="row gy-5 mt-4 text-center text-lg-start">
      <div class="col-lg-6 col-md-12 align-self-center">
        <?= $this->Html->image('about-us/our-story-banner.jpg', [
          'class' => 'rad_4',
          'alt' => 'Our Story',
          'title' => 'Our Story'
        ]) ?>
      </div>

      <div class="col-lg-6 col-md-12">
        <p class="mb-3" style="color: var(--font-light);">For over 40 years, Archer Exteriors has been at the
          forefront of the remodeling industry, setting new
          standards in quality, craftsmanship, and customer care. Founded on the principles of integrity, exceptional
          work, and fair pricing, we remain committed to exceeding expectations-one project at a time.</p>
        <p class="mb-3" style="color: var(--font-light);">Through decades of experience and a deep understanding of
          industry regulations and best practices, Tom has
          shaped Archer Exteriors into a trusted name in roofing, siding, gutters, and remodeling. His commitment to
          excellence drives us forward as we continue to serve homeowners with unparalleled service and expert
          craftsmanship.</p>
        <p style="color: var(--font-light);">What started as a small roofing and siding business in South Jersey has
          grown into a nationwide leader in
          home renovations. Tom Archer, our founder and visionary, built this company with a relentless dedication to
          superior workmanship and 100% client satisfaction. His deep expertise-spanning contractors, homeowners,
          suppliers, and estimators-has fueled Archer Exteriors' expansion, reaching communities from the mountains of
          Colorado to the Florida Panhandle.</p>
      </div>
    </div>
  </div>
</section>
<!-- Our Story Section End  -->

<!-- Why Choose Us Section Start  -->
<section class="chooseus-section">
  <?= $this->element('why_choose_us') ?>
</section>
<!-- Why Choose Us Section End -->


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

<!-- clients-section -->
<section class="section clients-section text-center">
  <?= $this->element('our_partners') ?>
</section>
<!-- clients-section end -->

<!-- Activities section Start  -->
<section class="section light activities">
  <?= $this->element('community_impact') ?>
</section>
<!-- Activities section End  -->