<?php
// Set dynamic meta tags for state-specific page
$hasService = isset($serviceName) && !empty($serviceName);

if ($hasService) {
  // Service-based page meta tags
  $this->set('title', $serviceName . ' Services in ' . $stateName . ' | Archer Exteriors');
  $this->set('metaDescription', 'Professional ' . $serviceName . ' services throughout ' . $stateName . '. Trusted local contractors with years of experience.');
  $this->set('metaKeywords', STATIC_KEYWORDS . ', ' . $serviceName . ', ' . $stateName . ', roofing, siding, contractors');
  $this->set('ogTitle', $serviceName . ' Services in ' . $stateName . ' | Archer Exteriors');
  $this->set('ogDescription', 'Professional ' . $serviceName . ' services throughout ' . $stateName . '. Get your free estimate today!');
} else {
  // Geographic page meta tags
  $this->set('title', 'Service Areas in ' . $stateName . ' | Archer Exteriors');
  $this->set('metaDescription', 'Professional exterior services throughout ' . $stateName . '. Roofing, siding, windows, doors, and more by trusted local contractors.');
  $this->set('metaKeywords', STATIC_KEYWORDS . ', ' . $stateName . ', service areas, roofing, siding, contractors');
  $this->set('ogTitle', 'Service Areas in ' . $stateName . ' | Archer Exteriors');
  $this->set('ogDescription', 'Professional exterior services throughout ' . $stateName . '. Get your free estimate today!');
}

$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website');
$this->set('ogUrl', DOMAIN . $this->request->getRequestTarget());
?>

<!-- banner-section -->
<section class="serviceAreaDetails_hero state">
  <div class="container h-100">
    <div class="content-box">
      <h2 class="title"><?= $stateName ?></h2>
    </div>
  </div>
</section>
<!-- banner-section end -->

<!-- Breadcrumb Section Start  -->
<section class="breadcrumb_section">
  <div class="container">
    <div class="breadcrumb_wrap">
      <?= $this->Html->link('Home', '/', ['class' => 'item']) ?>
      <?= $this->Html->link('Service Areas', ['controller' => 'ServiceAreas', 'action' => 'index'], ['class' => 'item']) ?>
      <span class="item"><?= h($stateName) ?></span>
    </div>
  </div>
</section>
<!-- Breadcrumb Section End  -->

<!-- Serving Areas Section Start  -->
<section class="section light">
  <div class="container">
    <div class="row gx-lg-5 gy-5">
      <div class="col-lg-7">
        <div class="sec-title">
          <h2><span>Roofing, Siding, Window, Door & Gutter Replacement Services in</span> <?= $stateName ?></h2>
        </div>

        <h4 class="title-3 mb-4">Family-Owned. Community-Focused. Built on Trust.</h4>
        <p>With over <?= YEARS_OF_EXPERIENCE ?> years of experience, Archer Exteriors is a trusted name in home exterior services. As a family-owned company, we take pride in delivering expert craftsmanship, clear communication, and a five-star experience from start to finish. From residential upgrades to large-scale commercial projects, we treat every home like it's our own.</p>

        <h4 class="title-3 my-4">Other states that we serve: </h4>

        <ul class="state_lists" style="display: flex;flex-wrap: wrap; gap: 8px;">
          <?php if (!empty($otherStates)): ?>
            <?php foreach ($otherStates as $state): ?>
              <li>
                <a href="javascript:void(0)"><?= h($state->state_name) ?></a>
                <?php /* $this->Html->link(
                                    h($state->state_name),
                                    [
                                        'controller' => 'ServiceAreas',
                                        'action' => 'dynamicGeographicState',
                                        strtolower(str_replace(' ', '-', $state->state_name))
                                    ]
                                ) */ ?>
              </li>
            <?php endforeach; ?>
          <?php else: ?>
            <li><span>No other states available</span></li>
          <?php endif; ?>
        </ul>

        <div class="mt-4">
          <?= $this->Html->link(
            'View all service area<i class="flaticon-login"></i>',
            ['controller' => 'ServiceAreas', 'action' => 'index'],
            ['class' => 'theme-btn sm', 'escape' => false]
          ) ?>
        </div>

        <div class="contact_info_box mt-4">
          <h4 class="title_3 mb-4">Local Branches Near You - <?= h($stateName) ?></h4>
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
            <p>No branches found for <?= h($stateName) ?></p>
          <?php endif; ?>
        </div>

      </div>

      <div class="col-lg-5">
        <?= $this->element('forms/form_free_estimate', ['formId' => '11', 'formKey' => 'servarea76788d097d18d4fab590d7da9d1e2e5f']) ?>
      </div>
    </div>
  </div>
</section>
<!-- Serving Areas Section End  -->

<!-- Serving Areas Accordion Section Start  -->
<section class="section ">
  <div class="auto-container">
    <div class="sec-title text-center">
      <h2><?= $stateName ?> <span>Coverage Areas</span></h2>
    </div>
    <div>
      <?php if (!empty($counties)): ?>
        <div class="accordion faqServiceArea  mb-5" id="faqServiceArea<?= h(preg_replace('/[^a-zA-Z0-9]/', '', $stateName)) ?>">
          <?php
          $isFirst = true;
          foreach ($counties as $county):
            $countySlug = strtolower(str_replace(' ', '-', $county->county));
            $accordionId = "faqServiceArea" . h(preg_replace('/[^a-zA-Z0-9]/', '', $stateName)) . $county->id;
          ?>
            <div class="accordion-item">
              <div class="accordion-header <?= $isFirst ? 'open' : '' ?>" id="header<?= h($county->id) ?>">
                <div class="d-flex justify-content-between align-items-center">
                  <?= $this->Html->link(
                    h($county->county),
                    [
                      'controller' => 'ServiceAreas',
                      'action' => 'dynamicGeographicCounty',
                      $stateSlug,
                      $countySlug
                    ],
                    [
                      'class' => 'm-0 text-decoration-none county-link',
                      'onclick' => 'event.stopPropagation();'
                    ]
                  ) ?>
                  <button class="icon toggle-btn btn btn-link p-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#<?= h($accordionId) ?>" aria-expanded="<?= $isFirst ? 'true' : 'false' ?>" aria-controls="<?= h($accordionId) ?>">
                    <i class="fa-solid <?= $isFirst ? 'fa-minus' : 'fa-plus' ?>"></i>
                  </button>
                </div>
              </div>
              <div id="<?= h($accordionId) ?>" class="accordion-collapse collapse <?= $isFirst ? 'show' : '' ?>" aria-labelledby="header<?= h($county->id) ?>"
                data-bs-parent="#faqServiceArea<?= h(preg_replace('/[^a-zA-Z0-9]/', '', $stateName)) ?>">
                <div class="accordion-body">
                  <div class="city_lists four_col">
                    <?php
                    // Load cities for this county
                    $citiesTable = \Cake\ORM\TableRegistry::getTableLocator()->get('Cities');
                    $cities = $citiesTable->find()
                      ->where(['county_id' => $county->id, 'status' => 1])
                      ->order(['city' => 'ASC'])
                      ->toArray();

                    foreach ($cities as $city):
                      $citySlug = strtolower(str_replace(' ', '-', $city->city));
                    ?>
                      <?= $this->Html->link(
                        h($city->city),
                        [
                          'controller' => 'ServiceAreas',
                          'action' => 'dynamicGeographicCity',
                          $stateSlug,
                          $countySlug,
                          $citySlug
                        ],
                        [
                          'class' => 'city-link',
                          'onclick' => 'event.stopPropagation();'
                        ]
                      ) ?><br />
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
          <?php
            $isFirst = false;
          endforeach; ?>
        </div>
      <?php else: ?>
        <div class="alert alert-info text-center">
          <h4>Service Areas</h4>
          <p>We provide services throughout <?= h($stateName) ?>. Contact us for specific area availability.</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<!-- Serving Areas Accordion Section End  -->

<!-- Available Services Section Start  -->
<section class="section light available_services">
  <?= $this->element('ServiceAreas/dynamic_state_available_services') ?>
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