<?php
// Load MapStatesTable directly for modal content
use Cake\ORM\TableRegistry;

$mapStatesTable = TableRegistry::getTableLocator()->get('MapStates');
$citiesTable = TableRegistry::getTableLocator()->get('Cities');
?>
<div class="auto-container">
  <div class="sec-title text-center">
    <h6><i class="flaticon-roof"></i> Areas</h6>
    <h2>Serving Areas</h2>
  </div>

  <!-- Accordion Start -->
  <div class="row justify-content-center">
    <?php if (!empty($branchLocations)):
      $branch = $branchLocations[0];
      if (!empty($branch->county_names)):
        // Group counties by state
        $countiesByState = [];
        foreach ($branch->county_names as $countyId => $countyName) {
          $parts = explode('-', $countyName);
          $stateIso = $parts[0];
          $county = $parts[1];
          $stateName = $mapStatesTable->getStateNameByIso($stateIso);

          if (!isset($countiesByState[$stateName])) {
            $countiesByState[$stateName] = [];
          }
          $countiesByState[$stateName][$countyId] = [
            'name' => $county,
            'iso' => $stateIso
          ];
        }

        // Display counties grouped by state
        foreach ($countiesByState as $stateName => $counties):
          $stateId = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $stateName)); ?>
          <div class="col-lg-10">
            <h2 class="title_2 mb-4">Areas under <b><?= $this->Html->link(
                                                      h($stateName),
                                                      [
                                                        'controller' => 'ServiceAreas',
                                                        'action' => 'dynamicGeographicState',
                                                        strtolower(str_replace(' ', '-', $stateName))
                                                      ],
                                                      ['class' => 'state-link']
                                                    ) ?></b></h2>

            <div class="accordion faqServiceArea mb-5" id="accordion<?= h($stateId) ?>">
              <?php
              $isFirst = true;
              foreach ($counties as $countyId => $county):
                $countyName = $county['name'];
                $stateIso = $county['iso'];
                $accordionId = "accordion_{$stateId}_{$countyId}";
              ?>
                <div class="accordion-item">
                  <div class="accordion-header <?= $isFirst ? 'open' : '' ?>" id="heading_<?= h($accordionId) ?>">
                    <div class="d-flex justify-content-between align-items-center">
                      <?= $this->Html->link(
                        h($countyName),
                        [
                          'controller' => 'ServiceAreas',
                          'action' => 'dynamicGeographicCounty',
                          strtolower(str_replace(' ', '-', $stateName)),
                          strtolower(str_replace(' ', '-', $countyName))
                        ],
                        [
                          'class' => 'm-0 text-decoration-none county-link',
                          'onclick' => 'event.stopPropagation();'
                        ]
                      ) ?>
                      <button class="icon toggle-btn btn btn-link p-0" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse_<?= h($accordionId) ?>"
                        aria-expanded="<?= $isFirst ? 'true' : 'false' ?>"
                        aria-controls="collapse_<?= h($accordionId) ?>">
                        <i class="fa-solid <?= $isFirst ? 'fa-minus' : 'fa-plus' ?>"></i>
                      </button>
                    </div>
                  </div>
                  <div id="collapse_<?= h($accordionId) ?>"
                    class="accordion-collapse collapse <?= $isFirst ? 'show' : '' ?>"
                    aria-labelledby="heading_<?= h($accordionId) ?>"
                    data-bs-parent="#accordion<?= h($stateId) ?>">
                    <div class="accordion-body">
                      <div class="city_lists">
                        <?php
                        //Display cities for the county
                        $cities = $citiesTable->loadCities($stateIso, $countyId);
                        foreach ($cities as $city): ?>
                          <?= $this->Html->link(
                            h($city),
                            [
                              'controller' => 'ServiceAreas',
                              'action' => 'dynamicGeographicCity',
                              strtolower(str_replace(' ', '-', $stateName)),
                              strtolower(str_replace(' ', '-', $countyName)),
                              strtolower(str_replace(' ', '-', $city))
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
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    <?php endif; ?>
  </div>
  <!-- Accordion End -->
</div>