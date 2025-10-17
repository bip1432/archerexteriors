<?php
// Set dynamic meta tags for city-specific page
$this->set('title', 'Services in ' . $cityName . ', ' . $stateName . ' | Archer Exteriors');
$this->set('metaDescription', 'Professional exterior services in ' . $cityName . ', ' . $stateName . '. Local roofing, siding, windows, and door contractors.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', ' . $cityName . ', ' . $countyName . ' County, ' . $stateName . ', roofing, siding, contractors');
$this->set('ogTitle', 'Services in ' . $cityName . ', ' . $stateName . ' | Archer Exteriors');
$this->set('ogDescription', 'Professional exterior services in ' . $cityName . ', ' . $stateName . '. Get your free estimate today!');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website');
$this->set('ogUrl', DOMAIN . $this->request->getRequestTarget());
?>

<!-- banner-section -->
<section class="serviceAreaDetails_hero branch" style="background-image: url('https://archerext.com/design/v2/img/service-area/city-pages/cityname-hero-banner.jpg');">
  <div class="container h-100">
    <div class="content-box">
      <h2 class="title"><?= h($cityName) ?>, <?= h($stateIso) ?></h2>
    </div>
  </div>
</section>
<!-- banner-section end -->


<section class="breadcrumb_section">
  <div class="container">
    <div class="breadcrumb_wrap">
      <?= $this->Html->link('Home', '/', ['class' => 'item']) ?>
      <?= $this->Html->link('Service Areas', ['controller' => 'ServiceAreas', 'action' => 'index'], ['class' => 'item']) ?>
      <?= $this->Html->link($stateName, ['action' => 'dynamicGeographicState', $stateSlug], ['class' => 'item']) ?>
      <?= $this->Html->link($countyName, ['action' => 'dynamicGeographicCounty', $stateSlug, $countySlug], ['class' => 'item']) ?>
      <span class="item"><?= h($cityName) ?></span>
    </div>
  </div>
</section>


<section class="section light">
  <div class="container">
    <div class="row gx-lg-5 gy-5">
      <div class="col-lg-7">
        <div class="sec-title">
          <h2>Transform your Home <span>with Trusted Experts in <?= h($cityName) ?>, <?= h($stateIso) ?></span></h2>
        </div>

        <p class="mt-4">With over <?= YEARS_OF_EXPERIENCE ?>+ years of experience, Archer Exteriors is a trusted name in home exterior services. As a
          family-owned company, we take pride in delivering expert craftsmanship, clear communication, and a five-star
          experience from start to finish. From residential upgrades to large-scale commercial projects, we treat
          every home like it's our own.</p>

        <div class="applause_slider_wrap mt-4">
          <div id="appVideoSlider" class="owl-carousel owl-theme our_service applause_slider">
            <div class="item roofing">
              <div class="responsive-video">
                <?= $this->Html->tag('iframe', '', [
                  'src' => 'https://player.vimeo.com/video/1115474503?h=cf4764085c',
                  'frameborder' => '0',
                  'allowfullscreen' => true,
                  'webkitallowfullscreen' => true,
                  'mozallowfullscreen' => true
                ]) ?>
              </div>
            </div>


            <div class="item siding">
              <div class="responsive-video">
                <?= $this->Html->tag('iframe', '', [
                  'src' => 'https://player.vimeo.com/video/1116884993?h=9af9d35db4',
                  'frameborder' => '0',
                  'allowfullscreen' => true,
                  'webkitallowfullscreen' => true,
                  'mozallowfullscreen' => true
                ]) ?>
              </div>
            </div>

            <div class="item window">
              <div class="responsive-video">
                <?= $this->Html->tag('iframe', '', [
                  'src' => 'https://player.vimeo.com/video/1115476739?h=48dde1876e',
                  'frameborder' => '0',
                  'allowfullscreen' => true,
                  'webkitallowfullscreen' => true,
                  'mozallowfullscreen' => true
                ]) ?>
              </div>
            </div>

            <div class="item deck">
              <div class="responsive-video">
                <?= $this->Html->tag('iframe', '', [
                  'src' => 'https://player.vimeo.com/video/1106252349?h=f5ae25e248',
                  'frameborder' => '0',
                  'allowfullscreen' => true,
                  'webkitallowfullscreen' => true,
                  'mozallowfullscreen' => true
                ]) ?>
              </div>
            </div>
          </div>
        </div>

        <div class="contact_info_box mt-4">
          <h4 class="title_3 mb-4">Local Branches Near You - <?= h($cityName) ?>, <?= h($stateIso) ?></h4>
          <?php if (!empty($stateBranches)): ?>
            <div class="nearest_branches">
              <?php foreach ($stateBranches as $branch): ?>
                <div class="nearest_branches_item">
                  <div class="icon">
                    <i class="fi fi-rs-city"></i>
                  </div>
                  <div class="details">
                    <h4 class="branch_name">
                      <?php
                      // Map branch slugs to controller actions
                      $branchActions = [
                        'southern-jersey-delaware-valley' => 'southernJerseyDelawareValley',
                        'northern-central-new-jersey' => 'northernCentralNewJersey',
                        'alabama-florida' => 'alabamaFlorida',
                        'lynn-haven-florida' => 'lynnHavenFlorida'
                      ];

                      $branchSlug = strtolower(str_replace(' ', '-', str_replace([' &', ','], '', $branch->branch_name)));
                      $branchAction = $branchActions[$branchSlug] ?? null;

                      $map_location = $branch->address . ', ' . $branch->city . ', ' . $branch->state . ' ' . $branch->zip;
                      ?>

                      <?php if ($branchAction): ?>
                        <?= $this->Html->link(
                          strtoupper(html_entity_decode($branch->branch_name)),
                          [
                            'controller' => 'ServiceAreas',
                            'action' => $branchAction
                          ]
                        ) ?>
                      <?php else: ?>
                        <?php /* echo strtoupper(html_entity_decode($branch->branch_name)) */ ?>
                      <?php endif; ?>
                    </h4>

                    <?php if ($branchAction): ?>
                      <div class="location">
                        <!-- <img class="img-fluid" src="<?= DOMAIN ?>/img/service-area/map-marker.svg" alt="Location" width="20"> -->
                        <?= $this->Html->link(
                          h($map_location),
                          'https://www.google.com/maps/place/' . urlencode($map_location),
                          [
                            'class' => 'font_link',
                            'target' => '_blank',
                            'rel' => 'noopener noreferrer'
                          ]
                        ) ?>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          <?php else: ?>
            <p>No branches found for <?= h($cityName) ?>, <?= h($stateIso) ?></p>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-lg-5">
        <?= $this->element('forms/form_free_estimate', ['formId' => '11', 'formKey' => 'servarea76788d097d18d4fab590d7da9d1e2e5f']) ?>
      </div>
    </div>
  </div>
</section>

<!-- Available Services Section Start  -->
<section class="section available_services">
  <?= $this->element('ServiceAreas/dynamic_city_available_services') ?>
</section>
<!-- Available Services Section End  -->


<!-- Reviews section Start  -->
<section class="section light reviews">
  <?= $this->element('reviews') ?>
</section>
<!-- Reviews section End  -->


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


<!-- Activities section Start  -->
<section class="section activities">
  <?= $this->element('community_impact') ?>
</section>
<!-- Activities section End  -->