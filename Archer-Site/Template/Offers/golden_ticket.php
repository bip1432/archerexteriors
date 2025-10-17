<?php
$this->set('title', 'Golden Ticket Offer | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Golden Ticket Offer');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Golden Ticket Offer, Archer Exteriors');
$this->set('ogTitle', 'Golden Ticket Offer | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Golden Ticket Offer');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/golden-ticket'); // TODO: Change to the current page URL
?>

<!-- banner-section -->
<section class="join_team_hero text-center">
  <?= $this->Html->image('golden-ticket/hero-banner-golden-ticket.jpg', [
    'class' => 'img-fluid w-100 d-none d-sm-block',
    'alt' => 'Archer Exteriors Golden Ticket Offer',
    'title' => 'Archer Exteriors Golden Ticket Offer'
  ]) ?>
  <?= $this->Html->image('golden-ticket/golden-ticket-banner.png', [
    'class' => 'img-fluid d-sm-none',
    'alt' => 'Archer Exteriors Golden Ticket Offer',
    'title' => 'Archer Exteriors Golden Ticket Offer'
  ]) ?>
</section>
<!-- banner-section end -->

<!-- Advertisement  -->
<section>
  <div class="container">
    <?= $this->element('advertisement') ?>
  </div>
</section>



<!-- Start Project Section Start -->
<section class="section light service_details" style="padding-bottom: 255px; position: relative;">
  <div class="container">
    <div class="row gx-lg-5 gy-5">
      <div class="col-xl-7 text-md-start text-center">
        <div class="sec-title mb-4">
          <h2>Snag Your Golden Ticket <span>– Save Big on Home Upgrades!</span></h2>
        </div>

        <p>The secret’s out — our Golden Ticket promotion is here and the savings are too good to miss.
          For a limited time, you can lock in major discounts on roofing, siding, windows, and doors with Archer
          Exteriors. Whether you’re fixing a worn-out roof, giving your home a fresh new look, or boosting your energy savings
          with new windows — now’s the perfect time to get it done.</p>

        <p class="mt-3">Hurry! Golden Ticket savings are only available for new estimates during this special
          promotion. When it’s
          gone, it’s gone!</p>


        <div class="row mb-4">
          <div class="col-md-6" style="margin-top: 70px;">
            <div class="gt_offer_box">
              <?= $this->Html->image('golden-ticket/off-25-percent.png', [
                'class' => 'img-fluid offer_img',
                'alt' => '25% off roofing & siding',
                'title' => '25% off roofing & siding'
              ]) ?>

              <div class="text-end">
                <div class="icon">
                  <?= $this->Html->image('services/icons/roof.svg', [
                    'class' => 'svg',
                    'alt' => 'Roofing & Siding',
                    'title' => 'Roofing & Siding'
                  ]) ?>
                </div>
              </div>

              <h4>Roofing & Siding</h4>
            </div>
          </div>
          <div class="col-md-6" style="margin-top: 70px;">
            <div class="gt_offer_box">
              <?= $this->Html->image('golden-ticket/off-250-dollar.png', [
                'class' => 'img-fluid offer_img',
                'alt' => '$250 off per window & door',
                'title' => '$250 off per window & door'
              ]) ?>

              <div class="text-end">
                <div class="icon">
                  <?= $this->Html->image('services/icons/window.svg', [
                    'class' => 'svg',
                    'alt' => 'Window & Door',
                    'title' => 'Window & Door'
                  ]) ?>
                </div>
              </div>

              <h4>Per Window & Door</h4>
            </div>
          </div>
        </div>

        <p style="font-size: 14px; font-style: italic; line-height: 1.4;">The Golden Ticket cannot be applied to previously quoted or
          signed projects. Offer valid only on new replacement and installation projects. Excludes all repair jobs.</p>

        <div class="col-12 mt-4">
          <div class="fortyYrs_batch for_desktop">
            <div class="inner">
              <div class="img">
                <?= $this->Html->image('40-years-badge/40-years.png', [
                  'alt' => '40 Years of Excellence',
                  'title' => '40 Years of Excellence'
                ]) ?>
              </div>
              <div class="contents">
                <div class="content_inner">
                  <h4>Exteriors That Elevate <br> Service That Stands Out</h4>
                  <p>Excellence in Exterior Home Remodeling. <br> Local to You. Family Owned.</p>
                </div>
              </div>
            </div>
            <div class="all_services">
              <?= $this->Html->link(
                '<span>Check all our services <i class="flaticon-login"></i></span>',
                ['controller' => 'Services', 'action' => 'index'],
                ['class' => 'theme-btn', 'escape' => false]
              ) ?>
            </div>
          </div>

          <div class="fortyYrs_batch for_mobile">
            <div class="text-center">
              <?= $this->Html->image('40-years-badge/40-years.png', [
                'alt' => '40 Years of Excellence',
                'title' => '40 Years of Excellence'
              ]) ?>

              <h4>Exteriors That Elevate <br> Service That Stands Out</h4>
              <p>Excellence in Exterior Home Remodeling. <br> Local to You. Family Owned.</p>

              <div class="mt-4">
                <?= $this->Html->link(
                  'Check all our services <i class="flaticon-login"></i>',
                  ['controller' => 'Services', 'action' => 'index'],
                  ['class' => 'theme-btn sm', 'escape' => false]
                ) ?>
              </div>
            </div>

          </div>

        </div>

      </div>

      <div class="col-xl-5">
        <?= $this->element('forms/form_free_estimate', ['formId' => '13', 'formKey' => 'goldticf6dee4c8369e9fa3bec44e5cd1e741c7']) ?>
      </div>
    </div>

  </div>
</section>
<!-- Start Project Section End -->


<!-- Statistics Section Start  -->
<section class="funfact-section">
  <?= $this->element('company_statistics') ?>
</section>
<!-- Statistics Section End  -->

<!-- Roofing Section Start  -->
<section class="section text-center text-xl-start" style="margin-top: -135px; padding-top: 255px;">
  <div class="container">
    <div class="row gy-5 flex-column-reverse flex-xl-row">
      <div class="col-xl-6 col-md-12 align-self-center">
        <?= $this->Html->image('golden-ticket/archer-exteriors-roofing-banner.jpg', [
          'class' => 'rad_4',
          'alt' => 'A Solid Roof Starts with a Solid Team.',
          'title' => 'A Solid Roof Starts with a Solid Team.'
        ]) ?>

        <div class="gt_roof_partner mt-4">
          <h5 class="mb-3">Partnering with the Best</h5>
          <div class="d-flex gap-3 text-center text-sm-start justify-content-center justify-content-xl-start flex-wrap flex-sm-nowrap mx-auto mx-xl-0" style="max-width: 500px;">
            <?= $this->Html->image('golden-ticket/logos/logo-gaf.png', [
              'class' => 'rad_4',
              'alt' => 'GAF',
              'title' => 'GAF'
            ]) ?>
            <p class="lead">We are <b>GAF Master Elite®</b> Certified and Members of the GAF President’s Club</p>
          </div>
        </div>

      </div>

      <div class="col-xl-6 col-md-12 align-self-center">
        <div class="sec-title mb-2">
          <h6><i class="flaticon-roof"></i>Roofing</h6>
          <h2>A Solid Roof <span>Starts with a Solid Team.</span></h2>
        </div>

        <p class="mb-4">With over 40 years of experience, we make your roof replacement smooth, efficient, and built to last. From selecting the perfect roof to navigating financing options, we’re with you every step of the way.</p>

        <div class="row our_service golden_ticket justify-content-center justify-content-xl-start mt-5" style="gap: 20px 0;">
          <div class="col-md-5">
            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/roof/initial-contact.svg', [
                  'class' => 'svg',
                  'alt' => 'Initial Contact',
                  'title' => 'Initial Contact'
                ]) ?>
              </div>
              <h4>Initial Contact</h4>
            </div>
          </div>
          <div class="col-md-5">
            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/roof/visualize-roof.svg', [
                  'class' => 'svg',
                  'alt' => 'Visualize New Roof',
                  'title' => 'Visualize New Roof'
                ]) ?>
              </div>
              <h4>Visualize New Roof</h4>
            </div>
          </div>
          <div class="col-md-5">
            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/roof/new-roof-1day.svg', [
                  'class' => 'svg',
                  'alt' => 'New Roof in One Day',
                  'title' => 'New Roof in One Day'
                ]) ?>
              </div>
              <h4>New Roof in One Day</h4>
            </div>
          </div>
          <div class="col-md-5">
            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/roof/best-warranty.svg', [
                  'class' => 'svg',
                  'alt' => 'Best Warranty Available',
                  'title' => 'Best Warranty Available'
                ]) ?>
              </div>
              <h4>Best Warranty Available</h4>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>
</section>
<!-- Roofing Section End  -->

<!-- Siding Section Start  -->
<section class="section light text-center text-xl-start">
  <div class="container">
    <div class="row gx-xl-5 gy-5">
      <div class="col-xl-6 col-md-12 align-self-center">
        <div class="sec-title mb-3">
          <h6><i class="flaticon-roof"></i>Siding</h6>
          <h2>Built to Protect. <span>Designed to Impress.</span></h2>
        </div>

        <p>Siding is your home's first impression-make it last. Our durable, insulated options come in a wide range of
          styles and colors, built to withstand the elements while enhancing curb appeal.</p>

        <div class="row our_service golden_ticket justify-content-center justify-content-xl-start mt-5" style="gap: 20px 0;">
          <div class="col-md-5">
            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/siding/big-boost.svg', [
                  'class' => 'svg',
                  'alt' => 'Boost Your Home\'s Curb Appeal',
                  'title' => 'Boost Your Home\'s Curb Appeal'
                ]) ?>
              </div>
              <h4>Boost Your Home’s Curb Appeal</h4>
            </div>
          </div>

          <div class="col-md-5">
            <div class="item">
              <div class="icon protects_your_home">
                <?= $this->Html->image('golden-ticket/siding/protects-your-home.svg', [
                  'class' => 'svg',
                  'alt' => 'Protect What’s Inside',
                  'title' => 'Protect What’s Inside'
                ]) ?>
              </div>
              <h4>Protect What’s Inside</h4>
            </div>
          </div>

          <div class="col-md-5">
            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/siding/better-energy.svg', [
                  'class' => 'svg',
                  'alt' => 'Improve Energy Efficiency',
                  'title' => 'Improve Energy Efficiency'
                ]) ?>
              </div>
              <h4>Improve Energy Efficiency</h4>
            </div>
          </div>

          <div class="col-md-5">
            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/siding/less-maintenance.svg', [
                  'class' => 'svg',
                  'alt' => 'Increase Property Value',
                  'title' => 'Increase Property Value'
                ]) ?>
              </div>
              <h4>Increase Property Value</h4>
            </div>
          </div>

        </div>

      </div>
      <div class="col-xl-6 col-md-12 align-self-center">
        <?= $this->Html->image('golden-ticket/archer-exteriors-siding-banner.jpg', [
          'class' => 'rad_4',
          'alt' => 'Built to Protect and Impress',
          'title' => 'Built to Protect and Impress'
        ]) ?>

        <div class="gt_partner_logos mt-4">
          <h5 class="mb-3">Partnering with the Best</h5>
          <div class="d-flex gap-3 text-center text-xl-start justify-content-center justify-content-xl-start flex-wrap">
            <?= $this->Html->image('golden-ticket/logos/logo-alside.png', [
              'class' => 'img-fluid rad_4',
              'style' => 'height: 45px;',
              'alt' => 'Alside',
              'title' => 'Alside'
            ]) ?>
            <?= $this->Html->image('golden-ticket/logos/logo-certainteed.png', [
              'class' => 'img-fluid rad_4',
              'style' => 'height: 45px;',
              'alt' => 'Certainteed',
              'title' => 'Certainteed'
            ]) ?>
            <?= $this->Html->image('golden-ticket/logos/logo-james-hardy.png', [
              'class' => 'img-fluid rad_4',
              'style' => 'height: 45px;',
              'alt' => 'James Hardie',
              'title' => 'James Harie'
            ]) ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Siding Section End  -->

<!-- Archie Section Start  -->
<section class="archie_section">
  <?= $this->element('archie_section') ?>
</section>
<!-- Archie Section End  -->

<!-- Windows Section Start  -->
<section class="section light text-center text-xl-start">
  <div class="container">
    <div class="row flex-xl-row-reverse gx-xl-5 gy-5">
      <div class="col-xl-6 col-md-12 align-self-center">
        <div class="sec-title mb-3">
          <h6><i class="flaticon-roof"></i>Windows</h6>
          <h2><span>Energy-Efficient Windows.</span> Stunning Results.</h2>
        </div>

        <p>Upgrade your view with Archer Exteriors. We offer a wide range of window options to match your style and needs. From classic double-hung to sleek casement and energy-efficient Energy Star windows, find the perfect fit for your home.</p>

        <div class="row our_service golden_ticket justify-content-center justify-content-xl-start mt-5" style="gap: 20px 0;">
          <div class="col-md-5">
            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/window/style-that-elevates.svg', [
                  'class' => 'svg',
                  'alt' => 'Style That Elevates Every Room',
                  'title' => 'Style That Elevates Every Room'
                ]) ?>
              </div>
              <h4>Style That Elevates Every Room</h4>
            </div>
          </div>
          <div class="col-md-5">
            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/window/energy-efficiency.svg', [
                  'class' => 'svg',
                  'alt' => 'Energy Efficiency You Can Feel',
                  'title' => 'Energy Efficiency You Can Feel'
                ]) ?>
              </div>
              <h4>Energy Efficiency You Can Feel</h4>
            </div>
          </div>
          <div class="col-md-5">
            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/window/built-to-last.svg', [
                  'class' => 'svg',
                  'alt' => 'Built to Last. Designed for Quiet.',
                  'title' => 'Built to Last. Designed for Quiet.'
                ]) ?>
              </div>
              <h4>Built to Last. Designed for Quiet.</h4>
            </div>
          </div>
          <div class="col-md-5">
            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/window/value-you-will-see.svg', [
                  'class' => 'svg',
                  'alt' => 'Value You’ll See Inside and Out',
                  'title' => 'Value You’ll See Inside and Out'
                ]) ?>
              </div>
              <h4>Value You’ll See Inside and Out</h4>
            </div>
          </div>

        </div>

      </div>
      <div class="col-xl-6 col-md-12 align-self-center">
        <?= $this->Html->image('golden-ticket/archer-exteriors-window-banner.jpg', [
          'class' => 'rad_4',
          'alt' => 'Energy-Efficient Windows. Stunning Results.',
          'title' => 'Energy-Efficient Windows. Stunning Results.'
        ]) ?>

        <div class="gt_partner_logos mt-4">
          <h5 class="mb-3">Partnering with the Best</h5>
          <div class="d-flex gap-3 text-center text-xl-start justify-content-center justify-content-xl-start flex-wrap">
            <?= $this->Html->image('golden-ticket/logos/logo-mi-windows.png', [
              'class' => 'img-fluid rad_4',
              'style' => 'height: 45px;',
              'alt' => 'Mi Windows and Doors',
              'title' => 'Mi Windows and Doors'
            ]) ?>
            <?= $this->Html->image('golden-ticket/logos/logo-provia.png', [
              'class' => 'img-fluid rad_4',
              'style' => 'height: 45px;',
              'alt' => 'Provia',
              'title' => 'Provia'
            ]) ?>
            <?= $this->Html->image('golden-ticket/logos/logo-okna.png', [
              'class' => 'img-fluid rad_4',
              'style' => 'height: 45px;',
              'alt' => 'Okna',
              'title' => 'Okna'
            ]) ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Windows Section End  -->

<!-- Doors Section Start  -->
<section class="section text-center text-xl-start">
  <div class="container">
    <div class="row gx-xl-5 gy-5">
      <div class="col-xl-6 col-md-12 align-self-center">
        <div class="sec-title mb-3">
          <h6><i class="flaticon-roof"></i>Doors</h6>
          <h2><span>Doors That Make a</span>  Strong First Impression</h2>
        </div>

        <p>Your front door is more than just an entryway - it sets the tone for your home. Whether you're looking for classic elegance, modern design, or enhanced security, we offer a variety of high-quality entry doors to suit your style and needs.</p>

        <div class="row our_service golden_ticket justify-content-center justify-content-xl-start mt-5" style="gap: 20px 0;">
          <div class="col-md-5">
            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/door/style-secured-door.svg', [
                  'class' => 'svg',
                  'alt' => 'Style & Security in Every Door',
                  'title' => 'Style & Security in Every Door'
                ]) ?>
              </div>
              <h4>Style & Security in Every Door</h4>
            </div>
          </div>
          <div class="col-md-5">
            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/door/built-for-beauty.svg', [
                  'class' => 'svg stroke_hover',
                  'alt' => 'Built for Beauty and Performance',
                  'title' => 'Built for Beauty and Performance'
                ]) ?>
              </div>
              <h4>Built for Beauty and Performance</h4>
            </div>
          </div>
          <div class="col-md-5">
            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/door/custom-fit.svg', [
                  'class' => 'svg',
                  'alt' => 'Custom-Fit for Your Home',
                  'title' => 'Custom-Fit for Your Home'
                ]) ?>
              </div>
              <h4>Custom-Fit for Your Home</h4>
            </div>
          </div>
          <div class="col-md-5">
            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/door/expertly-installed.svg', [
                  'class' => 'svg',
                  'alt' => 'Expertly Installed. Archer Guaranteed.',
                  'title' => 'Expertly Installed. Archer Guaranteed.'
                ]) ?>
              </div>
              <h4>Expertly Installed. Archer Guaranteed.</h4>
            </div>
          </div>

        </div>

      </div>
      <div class="col-xl-6 col-md-12 align-self-center">
        <?= $this->Html->image('golden-ticket/archer-exteriors-door-banner.jpg', [
          'class' => 'rad_4',
          'alt' => 'Doors That Make a Strong First Impression',
          'title' => 'Doors That Make a Strong First Impression'
        ]) ?>

        <div class="gt_partner_logos mt-4">
          <h5 class="mb-3">Partnering with the Best</h5>
          <div class="d-flex gap-3 text-center text-xl-start justify-content-center justify-content-xl-start flex-wrap">
            <?= $this->Html->image('golden-ticket/logos/logo-provia.png', [
              'class' => 'img-fluid rad_4',
              'style' => 'height: 45px;',
              'alt' => 'Provia',
              'title' => 'Provia'
            ]) ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>