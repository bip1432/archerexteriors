<?php
$this->set('title', 'Contact | Roofing, Siding, Windows | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Contact');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Contact | Roofing, Siding, Windows | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Contact');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/contact'); // TODO: Change to the current page URL
?>

<!-- Hero-section -->
<section class="page_hero_v2 contact">
  <div class="inner_content">
    <div class="image-layer">
    </div>
    <div class="auto-container">
      <div class="row clearfix">
        <div class="col-xl-8 col-lg-12 col-md-12 content-column">
          <div class="content-box">
            <h6>get in touch with us</h6>
            <h1>Contact <br> Archer Exteriors</h1>
            <p>Get Your FREE Estimate Today! <br>
              Fill out the form, or call us <b><?= COMPANY_PHONE ?></b> <br>
              to set up a free in-home consultation.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Hero-section end -->

<!-- Statistics Section Start  -->
<section class="funfact-section pb-5 light">
  <?= $this->element('company_statistics') ?>
</section>
<!-- Statistics Section End  -->

<!-- Advertisement  -->
<section>
  <div class="container">
    <?= $this->element('advertisement') ?>
  </div>
</section>


<!-- Headquarters Section Start  -->
<section class="section light">
  <div class="container">
    <div class="row gx-lg-5 gy-5">
      <div class="col-xl-7">
        <div class="sec-title mb-3">
          <h6><i class="flaticon-roof"></i> Headquarters</h6>
          <h2>Archer Exteriors' <br> <span>National Headquarters</span></h2>
        </div>

        <div class="roof_badge justify-content-center justify-content-xl-start my-4">
          <span class="img">
            <?= $this->Html->image('home-white.svg', [
              'class' => 'svg',
              'alt' => 'Executing 400+ jobs every week',
              'title' => 'Executing 400+ jobs every week'
            ]) ?>
          </span>
          <div class="content">
            <?= $this->element('jobs_strength') ?>
          </div>
        </div>

        <p>Contact us for <b>Home Remodeling</b> including roofing, siding, and window replacements. We also provide
          <b>New Construction & Commercial services</b> <?= $this->Html->link('nationwide!', ['controller' => 'ServiceAreas', 'action' => 'index']) ?>
        </p>

        <div class="our_service service-area mt-4">
          <div class="row" style="gap: 20px 0;">
            <div class="col-xl-4 col-lg-4 col-sm-6">
              <div class="item">
                <div class="icon">
                  <?= $this->Html->image('service-area/map-marker.svg', [
                    'class' => 'img-fluid svg',
                    'alt' => 'Headquarters Location'
                  ]) ?>
                </div>
                <h4 class="item_title"><?= COMPANY_ADDRESS1 ?><br><?= COMPANY_ADDRESS2 ?></h4>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6">
              <div class="item">
                <div class="icon">
                  <?= $this->Html->image('service-area/call.svg', [
                    'class' => 'img-fluid svg',
                    'alt' => 'Call'
                  ]) ?>
                </div>
                <h4 class="item_title"><?= COMPANY_PHONE ?> <br> Mon-Fri: 8am- 5pm</h4>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6">
              <div class="item">
                <div class="icon">
                  <?= $this->Html->image('service-area/license.svg', [
                    'class' => 'img-fluid svg',
                    'alt' => 'License'
                  ]) ?>
                </div>
                <h4 class="item_title">NJ LIC#13VH01492600 <br> PA LIC#PA082127</h4>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-4">
          <?= $this->Html->link('Get a Free Estimate <i class="flaticon-login"></i>', ['controller' => 'Estimates', 'action' => 'index'], ['class' => 'theme-btn sm', 'escape' => false]) ?>
        </div>
      </div>

      <div class="col-xl-5">
        <?= $this->element('forms/form_contact_us', ['formId' => '17', 'formKey' => 'contact93f9e5ef743f4530931f447b4ca370b3']) ?>
      </div>
    </div>
  </div>
</section>
<!-- Headquarters Section End  -->

<!-- Location Section Start  -->
<section class="section">
  <div class="container">
    <div class="row gy-4">
      <div class="col-xl-8">
        <div class="sec-title mb-0">
          <h6><i class="flaticon-roof"></i>Location</h6>
          <h2>National Headquarter’s <span>Location</span></h2>
          <p class="desc">Proudly serving in following areas <br> AL, CO, DE, FL, GA, MA, MD, NJ, OH, PA, SC, VA and
            adding more...</p>
        </div>
      </div>

      <div class="col-xl-4 my-xl-auto text-xl-end">
        <?= $this->Html->link(
          'Check Other Locations<i class="flaticon-login"></i>',
          ['controller' => 'ServiceAreas', 'action' => 'index'],
          ['class' => 'theme-btn', 'escape' => false]
        ) ?>
      </div>
    </div>

    <div class="mt-5">
      <!-- Elfsight Google Maps | National Headquarters -->
      <script src="https://static.elfsight.com/platform/platform.js" async></script>
      <div class="elfsight-app-faf0d89c-5509-4122-a21c-11431d37cd7d" data-elfsight-app-lazy></div>
    </div>
  </div>
</section>
<!-- Location Section End  -->

<!-- Archie Section Start  -->
<section class="archie_section">
  <?= $this->element('archie_section') ?>
</section>
<!-- Archie Section End  -->

<!-- Why Choose Us Section Start  -->
<section class="chooseus-section">
  <?= $this->element('why_choose_us') ?>
</section>
<!-- Why Choose Us Section End -->

<!-- clients-section -->
<section class="section clients-section text-center">
  <?= $this->element('our_partners') ?>
</section>
<!-- clients-section end -->

<!-- Financing Options Available Section Start -->
<section class="section light finance_options_sec">
  <?= $this->element('finance_section') ?>
</section>
<!-- Financing Options Available Section End -->