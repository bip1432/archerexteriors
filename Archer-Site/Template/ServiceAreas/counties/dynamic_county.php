<?php
// Set dynamic meta tags for county-specific page
$this->set('title', 'Services in ' . $countyName . ' County, ' . $stateName . ' | Archer Exteriors');
$this->set('metaDescription', 'Professional exterior services in ' . $countyName . ' County, ' . $stateName . '. Roofing, siding, windows, doors, and more.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', ' . $countyName . ' County, ' . $stateName . ', roofing, siding, contractors');
$this->set('ogTitle', 'Services in ' . $countyName . ' County, ' . $stateName . ' | Archer Exteriors');
$this->set('ogDescription', 'Professional exterior services in ' . $countyName . ' County, ' . $stateName . '. Get your free estimate today!');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website');
$this->set('ogUrl', DOMAIN . $this->request->getRequestTarget());
?>

<!-- banner-section -->
<section class="serviceAreaDetails_hero branch" style="background-image: url('https://archerext.com/design/v2/img/service-area/county-pages/countyname-hero-banner.jpg');">
  <div class="container h-100">
    <div class="content-box">
      <h2 class="title"><?= h($countyName) ?>, <?= h($stateIso) ?></h2>
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
      <span class="item"><?= h($countyName) ?></span>
    </div>
  </div>
</section>


<section class="section light">
  <div class="container">
    <div class="row gx-lg-5 gy-5">
      <div class="col-lg-7">
        <div class="sec-title">
          <h2>Serving Areas in <span><?= h($countyName) ?>, <?= h($stateIso) ?> and beyond</span></h2>
        </div>

        <!-- <div class="county_lists_v1 mb-4">
          <?php if (!empty($cities)): ?>
            <?php foreach ($cities as $city): ?>
              <?= $this->Html->link(
                h($city->city),
                ['action' => 'dynamicGeographicCity', $stateSlug, $countySlug, strtolower(str_replace(' ', '-', $city->city))],
                ['class' => 'city-link']
              ) ?>
            <?php endforeach; ?>

          <?php else: ?>
            <p>No cities found</p>
          <?php endif; ?>
        </div> -->

        <div class="county_lists_v1 mb-4">
          <?php
          $visibleLimit = 15;
          ?>

          <?php if (!empty($cities)): ?>
            <?php foreach ($cities as $i => $city): ?>
              <?php if ($i < $visibleLimit): ?>
                <?= $this->Html->link(
                  h($city->city),
                  ['action' => 'dynamicGeographicCity', $stateSlug, $countySlug, strtolower(str_replace(' ', '-', $city->city))],
                  ['class' => 'city-link']
                ) ?>
              <?php endif; ?>
            <?php endforeach; ?>

            <?php if (count($cities) > $visibleLimit): ?>
              <button type="button" class="see_all_cities_btn" data-bs-toggle="modal" data-bs-target="#cityListModal"><i class="fi fi-rr-plus"></i> See All</button>

              <!-- City Modal Start  -->
              <div class="modal modal-lg fade modal_v1" id="cityListModal" tabindex="-1" aria-labelledby="cityListModal"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="modal-header-inner">
                        <?= $this->Html->image('archer-icon-a-white.png', [
                          'class' => 'img-fluid',
                          'width' => '40',
                          'alt' => 'Archer Exteriors',
                          'title' => 'Archer Exteriors'
                        ]) ?>
                        <h1 class="modal-title fs-5" id="cityListModal">Serving Areas in <span><?= h($countyName) ?>, <?= h($stateIso) ?> and beyond</span></h1>
                      </div>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                          class="fi fi-rr-cross"></i></button>
                    </div>
                    <div class="modal-body">
                      <h4 class="mb-4">We serve following cities in <?= h($countyName) ?>, <?= h($stateIso) ?>.</h4>

                      <div class="faqServiceArea">
                        <div class="city_lists">
                          <?php foreach ($cities as $city): ?>
                            <?= $this->Html->link(
                              h($city->city),
                              ['action' => 'dynamicGeographicCity', $stateSlug, $countySlug, strtolower(str_replace(' ', '-', $city->city))],
                              ['class' => 'city-link light']
                            ) ?>
                          <?php endforeach; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- City Modal End  -->


            <?php endif; ?>
          <?php else: ?>
            <p>No cities found</p>
          <?php endif; ?>
        </div>


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
          <h4 class="title_3 mb-4">Local Branches Near You - <?= h($countyName) ?>, <?= h($stateIso) ?></h4>
          <?php if (!empty($stateBranches)): ?>
            <div class="nearest_branches">
              <?php foreach ($stateBranches as $branch): ?>
                <?php
                // Check if this county is associated with this branch
                $countyIds = !empty($branch->counties) ? explode(',', $branch->counties) : [];
                $isCountyAssociated = in_array($countyId, $countyIds);

                // Only show branch if this county is associated with it
                if (!$isCountyAssociated) {
                  continue;
                }
                ?>
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
                        <?= strtoupper(html_entity_decode($branch->branch_name)) ?>
                      <?php endif; ?>
                    </h4>

                    <?php if ($branchAction): ?>
                      <div class="location">
                        <!-- <img class="img-fluid" src="<?= DOMAIN ?>/img/service-area/map-marker.svg" alt="Location" width="20"> -->
                        <?= $this->Html->link(
                          h($map_location),
                          'https://www.google.com/maps/place/' . urlencode($map_location),
                          [
                            'class' => 'location font_link',
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

            <p>No branches found for <?= h($countyName) ?>, <?= h($stateIso) ?></p>
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
  <?= $this->element('ServiceAreas/dynamic_county_available_services') ?>
</section>
<!-- Available Services Section End  -->

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

<!-- Activities section Start  -->
<section class="section activities">
  <?= $this->element('community_impact') ?>
</section>
<!-- Activities section End  -->