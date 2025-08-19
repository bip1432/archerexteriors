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
<section class="serviceAreaDetails_hero branch" style="background-image: url('https://archerext.com/design/v2/img/service-area/state-pages/statename-hero-banner.jpg');">
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
          <h2>Serving Areas in <span><?= $stateName ?></span></h2>
        </div>

        <?php if (!empty($counties)): ?>
          <div class="accordion faqServiceArea mb-5" id="faqServiceArea<?= h(preg_replace('/[^a-zA-Z0-9]/', '', $stateName)) ?>">
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
                    <div class="city_lists">
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

        <div class="contact_info_box mt-5">
          <h4 class="title_3 mb-1">Contact Information</h4>
          <div class="item">
            <img class="img-fluid" src="<?= DOMAIN ?>/img/service-area/map-marker.svg" alt="Location" width="20"> <a
              class="location font_link" href="#"> 341 Harding Hwy, Pittsgrove, NJ 08318</a>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <?= $this->element('forms/form_free_estimate', ['formId' => '11', 'formKey' => 'servarea76788d097d18d4fab590d7da9d1e2e5f']) ?>
      </div>
    </div>
  </div>
</section>
<!-- Serving Areas Section End  -->

<!-- Available Services Section Start  -->
<section class="section available_services">
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