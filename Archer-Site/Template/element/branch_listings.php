<?php
// Load MapStatesTable directly for modal content
use Cake\ORM\TableRegistry;

$mapStatesTable = TableRegistry::getTableLocator()->get('MapStates');
?>
<ul class="branches_wrap">
  <?php if (!empty($branchLocations)): ?>
    <?php foreach ($branchLocations as $branch):
      // Get branch action using the BranchActions helper
      $branchAction = $this->BranchActions->getActionByName($branch->branch_name);

      $map_location = $branch->address . ', ' . $branch->city . ', ' . $branch->state . ' ' . $branch->zip;
    ?>
      <li class="item">
        <div class="left">
          <div class="img">
            <?php if (!empty($branch->main_branch_flag) && $branch->main_branch_flag == 1): ?>
              <?php if ($branchAction): ?>
                <?= $this->Html->link(
                  $this->Html->image('service-area/archer-exteriors-hq.jpg', ['class' => 'img-fluid', 'alt' => h($branch->branch_name)]),
                  [
                    'controller' => 'ServiceAreas',
                    'action' => $branchAction
                  ],
                  ['escape' => false, 'target' => '_blank']
                ) ?>
              <?php else: ?>
                <?= $this->Html->link(
                  $this->Html->image('service-area/archer-exteriors-hq.jpg', ['class' => 'img-fluid', 'alt' => h($branch->branch_name)]),
                  ['controller' => 'Companies', 'action' => 'newConstruction'],
                  ['escape' => false, 'target' => '_blank']
                ) ?>
              <?php endif; ?>
            <?php else: ?>
              <?php if ($branchAction): ?>
                <?= $this->Html->link(
                  $this->Html->image('service-area/archer-exteriors-archie.jpg', ['class' => 'img-fluid', 'alt' => h($branch->branch_name)]),
                  [
                    'controller' => 'ServiceAreas',
                    'action' => $branchAction
                  ],
                  ['escape' => false, 'target' => '_blank']
                ) ?>
              <?php else: ?>
                <?= $this->Html->link(
                  $this->Html->image('service-area/archer-exteriors-archie.jpg', ['class' => 'img-fluid', 'alt' => h($branch->branch_name)]),
                  ['controller' => 'Companies', 'action' => 'newConstruction'],
                  ['escape' => false, 'target' => '_blank']
                ) ?>
              <?php endif; ?>
            <?php endif; ?>
          </div>
          <div class="details">
            <div>
              <h2 class="name"><?php if ($branchAction): ?>
                  <?= $this->Html->link(
                                    strtoupper(html_entity_decode($branch->branch_name)),
                                    [
                                      'controller' => 'ServiceAreas',
                                      'action' => $branchAction
                                    ],
                                    ['class' => 'font_link', 'target' => '_blank']
                                  ) ?>
                <?php else: ?>
                  <?= $this->Html->link(
                                    strtoupper(html_entity_decode($branch->branch_name)),
                                    ['controller' => 'Companies', 'action' => 'newConstruction'],
                                    ['class' => 'font_link', 'target' => '_blank']
                                  ) ?>
                <?php endif; ?></h2>
              <a class="location" href="https://www.google.com/maps/search/?api=1&query=<?= urlencode($map_location) ?>" target="_blank">
                <?= $this->Html->image('map-marker.svg', ['class' => 'img-fluid svg', 'alt' => 'Location', 'title' => 'Location']) ?>
                <?= h($branch->address) ?>
                <?php if (!empty($branch->address2)): ?>, <?= h($branch->address2) ?><?php endif; ?>
                <?php if (!empty($branch->city)): ?>, <?= h($branch->city) ?><?php endif; ?>
                <?php if (!empty($branch->state)): ?>, <?= h($branch->state) ?><?php endif; ?>
                <?php if (!empty($branch->zip)): ?> <?= h($branch->zip) ?><?php endif; ?>
              </a>
            </div>

            <div>
              <div class="service_type">
                <?php if (!empty($branch->services_offered)): ?>
                  <?php $servicesOffered = explode(',', $branch->services_offered); ?>
                  <?php foreach ($servicesOffered as $serviceType): ?>
                    <div class="type_btn">
                      <?php if (trim($serviceType) === '1'): ?>
                        <?= $this->Html->image('service-area/icon-construction.png', ['width' => '24', 'alt' => 'New Construction', 'title' => 'New Construction']) ?>
                        <?= $this->Html->link('New Construction', ['controller' => 'Companies', 'action' => 'newConstruction'], ['class' => 'font_link', 'target' => '_blank']) ?>
                      <?php endif; ?>
                      <?php if (trim($serviceType) === '2'): ?>
                        <?= $this->Html->image('service-area/icon-remodelling.png', ['width' => '24', 'alt' => 'Remodeling', 'title' => 'Remodeling']) ?>
                        <?= $this->Html->link('Remodeling', ['controller' => 'Estimates', 'action' => 'index'], ['class' => 'font_link', 'target' => '_blank']) ?>
                      <?php endif; ?>
                    </div>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
              <div class="service_lists">
                <?php if (!empty($branch->service_names)): ?>
                  <?php foreach ($branch->service_names as $serviceName): ?>
                    <a href="<?= $this->Url->build(['controller' => 'Services', 'action' => strtolower(h($serviceName))]) ?>" class="list_item font_link" target="_blank"><?= h($serviceName) ?></a>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
            </div>

            <?php /* if (!empty($branch->licenses)): ?>
              <h6 class="license"><?= h($branch->licenses) ?></h6>
            <?php endif; */ ?>
          </div>
        </div>

        <div class="middle">
          <?php if (!empty($branch->county_names)): ?>
            <div class="counties">
              <h4 class="title">Areas We Serve <i class="fi fi-rr-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Below are the list of counties we serve"></i></h4>
              <div class="county_lists">
                <?php
                $countyCount = 0;
                foreach ($branch->county_names as $countyNames):
                  if ($countyCount >= 6) break;

                  $countyName = '';
                  $stateIso = '';
                  $countyNameArray = explode('-', $countyNames);
                  if (count($countyNameArray) > 1) {
                    $countyName = $countyNameArray[1];
                    $stateIso = $countyNameArray[0];
                    $stateName = $mapStatesTable->getStateNameByIso($stateIso);
                  } else {
                    $countyName = $countyNameArray[0];
                  }
                  $countyCount++;
                ?>
                  <span class="county_lists_item" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Serving <?= h($countyName) ?> in <?= h($stateName) ?>">
                    <?= $this->Html->link(
                      h($stateIso),
                      [
                        'controller' => 'ServiceAreas',
                        'action' => 'dynamicGeographicState',
                        strtolower(str_replace(' ', '-', $stateName))
                      ],
                      ['class' => 'state', 'target' => '_blank']
                    ) ?>
                    <?= $this->Html->link(
                      h($countyName),
                      [
                        'controller' => 'ServiceAreas',
                        'action' => 'dynamicGeographicCounty',
                        strtolower(str_replace(' ', '-', $stateName)),
                        strtolower(str_replace(' ', '-', $countyName))
                      ],
                      ['class' => 'county', 'target' => '_blank']
                    ) ?>
                  </span>
                <?php endforeach; ?>
              </div>
              <a class="see_more" data-bs-toggle="modal" data-bs-target="#countyModal<?= h($branch->id) ?>" href="javascript:void(0)"><i
                  class="fi fi-rs-arrow-right"></i> See all servicing areas</a>
            </div>
          <?php else: ?>
            <div class="counties" style="justify-content: center;">
              <h4 class="title">Areas We Serve</h4>
              <div class="mt-2">
                For information on where we operate, please connect with our New Construction Division.
              </div>
            </div>
          <?php endif; ?>
        </div>

        <div class="right">
          <div class="contact_details">
            <div class="phn_block_wrap">
              <?php if (!empty($branch->services_offered)): ?>
                <?php $servicesOffered = explode(',', $branch->services_offered); ?>
                <?php foreach ($servicesOffered as $serviceType): ?>

                  <?php if (trim($serviceType) === '1'): ?>
                    <div class="phn_block">
                      <div>
                        <?= $this->Html->image('service-area/icon-construction.png', ['width' => '24', 'alt' => 'New Construction', 'title' => 'New Construction']) ?>
                        New Construction
                      </div>
                      <div>Call: <?= preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2 $3', h($branch->phone)) ?></div>
                    </div>
                  <?php endif; ?>

                  <?php if (trim($serviceType) === '2'): ?>
                    <div class="phn_block">
                      <div>
                        <?= $this->Html->image('service-area/icon-remodelling.png', ['width' => '24', 'alt' => 'Remodeling', 'title' => 'Remodeling']) ?>
                        Remodeling
                      </div>
                      <div>Call: <?php echo COMPANY_PHONE; ?></div>
                    </div>
                  <?php endif; ?>

                <?php endforeach; ?>
              <?php endif; ?>
            </div>

            <div class="text-start text-xl-end">
              <?php if ($branchAction): ?>
                <?= $this->Html->link(
                  'Contact<i class="flaticon-login"></i>',
                  [
                    'controller' => 'ServiceAreas',
                    'action' => $branchAction
                  ],
                  ['class' => 'theme-btn sm mt-2', 'target' => '_blank', 'escape' => false]
                ) ?>
              <?php else: ?>
                <?= $this->Html->link('Contact<i class="flaticon-login"></i>', ['controller' => 'Companies', 'action' => 'newConstruction'], ['class' => 'theme-btn sm mt-2', 'target' => '_blank', 'escape' => false]) ?>
              <?php endif; ?>
            </div>

          </div>
        </div>
      </li>

      <!-- County Modal Start  -->
      <div class="modal modal-lg fade modal_v1" id="countyModal<?= h($branch->id) ?>" tabindex="-1" aria-labelledby="countyModalLabel"
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
                <h1 class="modal-title fs-5" id="countyModalLabel"><?= ucwords(strtolower($branch->branch_name)) ?></h1>
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                  class="fi fi-rr-cross"></i></button>
            </div>
            <div class="modal-body">
              <h4 class="mb-2">We serve following counties in <?= ucwords(strtolower($branch->branch_name)) ?>.</h4>
              <p>Archer Exteriors provides roofing, siding, windows and exterior services across multiple counties. See below for our complete service area.</p>
              <?php if (!empty($branch->county_names)): ?>
                <div>
                  <?php
                  // Group counties by state
                  $countiesByState = [];
                  foreach ($branch->county_names as $countyName) {
                    $parts = explode('-', $countyName);
                    $stateIso = $parts[0];
                    $county = $parts[1];
                    $stateName = $mapStatesTable->getStateNameByIso($stateIso);

                    if (!isset($countiesByState[$stateName])) {
                      $countiesByState[$stateName] = [];
                    }
                    $countiesByState[$stateName][] = $county;
                  }

                  // Display counties grouped by state
                  foreach ($countiesByState as $stateName => $counties): ?>
                    <h4 class="mb-2 mt-4"><?= $this->Html->link(
                                            h($stateName),
                                            [
                                              'controller' => 'ServiceAreas',
                                              'action' => 'dynamicGeographicState',
                                              strtolower(str_replace(' ', '-', $stateName))
                                            ],
                                            ['class' => 'header_link', 'target' => '_blank']
                                          ) ?></h4>
                    <div class="county_lists m-0">
                      <?php foreach ($counties as $county): ?>
                        <?= $this->Html->link(
                          h($county),
                          [
                            'controller' => 'ServiceAreas',
                            'action' => 'dynamicGeographicCounty',
                            strtolower(str_replace(' ', '-', $stateName)),
                            strtolower(str_replace(' ', '-', $county))
                          ],
                          ['class' => 'county', 'target' => '_blank']
                        ) ?>
                      <?php endforeach; ?>
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>

            </div>
          </div>
        </div>
      </div>
      <!-- County Modal End  -->
    <?php endforeach; ?>
  <?php else: ?>
    <li class="item">
      <div class="left">
        <div class="details">
          <div>
            <h2 class="name">No branch locations found</h2>
            <h4 class="location">Please check back later for available locations.</h4>
          </div>
        </div>
      </div>
    </li>
  <?php endif; ?>
</ul>

<div class="row gy-4 mt-0">
  <div class="col-lg-5 text-center text-lg-start">
    <h4>
      <?php
      $pagingInfo = $this->Paginator->counter('Showing {{end}} out of {{count}} records');
      echo $pagingInfo;
      ?>
    </h4>
  </div>
  <!-- Pagination start -->
  <div class="col-lg-7 text-center text-lg-end">
    <?php if ($this->Paginator->total() > 1): ?>
      <?php
      // Prepare filter parameters for pagination URLs
      $filterParams = [];
      if (isset($filters) && !empty($filters['state'])) {
        $filterParams['state'] = $filters['state'];
      }
      if (isset($filters) && !empty($filters['county'])) {
        $filterParams['county'] = $filters['county'];
      }
      if (isset($filters) && !empty($filters['dept'])) {
        $filterParams['dept'] = $filters['dept'];
      }
      ?>
      <ul class="pagination_list">
        <?php
        $this->Paginator->setTemplates([
          'first' => '<li class="page-item first"><a class="page-link pagination-link" href="{{url}}" data-bs-toggle="tooltip" rel="first" aria-label="FIRST" data-bs-original-title="FIRST">{{text}}</a></li>',
          'firstDisabled' => ''
        ]);
        echo $this->Paginator->first('<i class="fa fa-angle-double-left" aria-hidden="true"></i>', [
          'escape' => false,
          '?' => $filterParams
        ]);
        ?>

        <?php
        $this->Paginator->setTemplates([
          'prevActive' => '<li class="page-item previous"><a class="page-link pagination-link" href="{{url}}" data-bs-toggle="tooltip" rel="prev" aria-label="PREVIOUS" data-bs-original-title="PREVIOUS">{{text}}</a></li>',
          'prevDisabled' => ''
        ]);
        echo $this->Paginator->prev('<i class="fa fa-angle-left" aria-hidden="true"></i>', [
          'escape' => false,
          '?' => $filterParams
        ]);
        ?>

        <?= $this->Paginator->numbers([
          'modulus' => 4,
          'first' => false,
          'last' => false,
          'before' => '',
          'after' => '',
          'templates' => [
            'number' => '<li class="page-item"><a class="pagination-link" href="{{url}}">{{text}}</a></li>',
            'current' => '<li class="page-item"><a class="active">{{text}}</a></li>'
          ],
          '?' => $filterParams
        ]) ?>

        <?php
        $this->Paginator->setTemplates([
          'nextActive' => '<li class="page-item next"><a class="page-link pagination-link" href="{{url}}" data-bs-toggle="tooltip" rel="next" aria-label="NEXT" data-bs-original-title="NEXT">{{text}}</a></li>',
          'nextDisabled' => ''
        ]);
        echo $this->Paginator->next('<i class="fa fa-angle-right" aria-hidden="true"></i>', [
          'escape' => false,
          '?' => $filterParams
        ]);
        ?>

        <?php
        $this->Paginator->setTemplates([
          'last' => '<li class="page-item last"><a class="page-link pagination-link" href="{{url}}" data-bs-toggle="tooltip" rel="last" aria-label="LAST" data-bs-original-title="LAST">{{text}}</a></li>',
          'lastDisabled' => ''
        ]);
        echo $this->Paginator->last('<i class="fa fa-angle-double-right" aria-hidden="true"></i>', [
          'escape' => false,
          '?' => $filterParams
        ]);
        ?>
      </ul>
    <?php endif; ?>
  </div>
  <!-- Pagination end -->
</div>