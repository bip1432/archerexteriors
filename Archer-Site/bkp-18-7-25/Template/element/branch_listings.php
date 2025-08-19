<?php
// Load MapStatesTable directly for modal content
use Cake\ORM\TableRegistry;

$mapStatesTable = TableRegistry::getTableLocator()->get('MapStates');
?>
<ul class="branches_wrap">
  <?php if (!empty($branchLocations)): ?>
    <?php foreach ($branchLocations as $branch): ?>
      <li class="item">
        <div class="left">
          <div class="img">
            <?php if (!empty($branch->main_branch_flag) && $branch->main_branch_flag == 1): ?>
              <?= $this->Html->image('service-area/archer-exteriors-hq.jpg', ['class' => 'img-fluid', 'alt' => h($branch->branch_name)]) ?>
            <?php else: ?>
              <?= $this->Html->image('service-area/archer-exteriors-archie.jpg', ['class' => 'img-fluid', 'alt' => h($branch->branch_name)]) ?>
            <?php endif; ?>
          </div>
          <div class="details">
            <div>
              <h2 class="name"><?= h($branch->branch_name) ?></h2>
              <h4 class="location">
                <?= h($branch->address) ?>
                <?php if (!empty($branch->address2)): ?>, <?= h($branch->address2) ?><?php endif; ?>
                <?php if (!empty($branch->city)): ?>, <?= h($branch->city) ?><?php endif; ?>
                <?php if (!empty($branch->state)): ?>, <?= h($branch->state) ?><?php endif; ?>
                <?php if (!empty($branch->zip)): ?> <?= h($branch->zip) ?><?php endif; ?>
              </h4>
            </div>

            <div>
              <div class="service_type">
                <?php if (!empty($branch->services_offered)): ?>
                  <?php $servicesOffered = explode(',', $branch->services_offered); ?>
                  <?php foreach ($servicesOffered as $serviceType): ?>
                    <div class="type_btn">
                      <?php if (trim($serviceType) === '1'): ?>
                        <?= $this->Html->image('service-area/icon-construction.png', ['width' => '24', 'alt' => 'New Construction', 'title' => 'New Construction']) ?>
                        New Construction
                      <?php endif; ?>
                      <?php if (trim($serviceType) === '2'): ?>
                        <?= $this->Html->image('service-area/icon-remodelling.png', ['width' => '24', 'alt' => 'Remodeling', 'title' => 'Remodeling']) ?>
                        Remodeling
                      <?php endif; ?>
                    </div>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
              <div class="service_lists">
                <?php if (!empty($branch->service_names)): ?>
                  <?php foreach ($branch->service_names as $serviceName): ?>
                    <span class="list_item"><?= h($serviceName) ?></span>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
            </div>

            <?php if (!empty($branch->licenses)): ?>
              <h6 class="license"><?= h($branch->licenses) ?></h6>
            <?php endif; ?>
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
                  if ($countyCount >= 8) break;

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
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Serving <?= h($countyName) ?> County in <?= h($stateName) ?>"><span class="state"><?= h($stateIso) ?></span><span class="county"><?= h($countyName) ?></span></a>
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
            <div class="phn_block">
              <div>
                <?= $this->Html->image('service-area/icon-construction.png', ['width' => '24', 'alt' => 'New Construction', 'title' => 'New Construction']) ?>
                New Construction
              </div>
              <div>Call: <?= preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2 $3', h($branch->phone)) ?></div>
            </div>
            <div class="phn_block">
              <div>
                <?= $this->Html->image('service-area/icon-remodelling.png', ['width' => '24', 'alt' => 'Remodeling', 'title' => 'Remodeling']) ?>
                Remodeling
              </div>
              <div>Call: <?php echo COMPANY_PHONE; ?></div>
            </div>

            <?= $this->Html->link('Contact<i class="flaticon-login"></i>', ['controller' => 'Estimates', 'action' => 'index'], ['class' => 'theme-btn sm mt-2', 'escape' => false]) ?>
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
                    <h4 class="mb-2 mt-4"><?= h($stateName) ?></h4>
                    <div class="county_lists m-0">
                      <?php foreach ($counties as $county): ?>
                        <a href="javascript:void(0)"><?= h($county) ?></a>
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
      if (isset($filters) && !empty($filters['service'])) {
        $filterParams['service'] = $filters['service'];
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