<?php
// Set Meta Tags
$this->set('title', 'Your Appointment is Confirmed - Let\'s Build Something Great Together with Archer Exteriors');
$this->set('metaDescription', 'Your appointment with Archer Exteriors is confirmed! Count on ' . YEARS_OF_EXPERIENCE . '+ years of trusted roofing, siding, and other exterior remodeling expertise across ' . STATES_SERVED . ' states.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', roof replacement experts, professional roof installation, roof repair and replacement services, residential roofing contractors, siding installation experts, exterior home remodeling, home exterior services, siding replacement company, window installation services, energy-efficient windows, exterior door replacement, gutter installation, roofing contractors near me, siding contractors near me, exterior remodeling company, local roofing company');
$this->set('ogTitle', 'Your Appointment is Confirmed - Let\'s Build Something Great Together with Archer Exteriors');
$this->set('ogDescription', 'Your appointment with Archer Exteriors is confirmed! Count on ' . YEARS_OF_EXPERIENCE . '+ years of trusted roofing, siding, and other exterior remodeling expertise across ' . STATES_SERVED . ' states.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/appointment-confirmation'); // TODO: Change to the current page URL
?>


<!-- Hero-section -->
<section class="ebook_hero">
  <div class="container">
    <div class="row">
      <div class="col-xl-5">
        <div class="contents">
          <h1 class="title text-white mb-4">Archer Truck <br> is on your way</h1>
          <p class="desc text-white mb-4">Excellence in Exterior Home Remodeling. Local to You. Family Owned.</p>
          <?= $this->Html->image('e-book/forty-years-celebration.png', [
            'alt' => 'Forty Years Celebration',
            'title' => 'Forty Years Celebration'
          ]) ?>
        </div>
      </div>

      <div class="col-lg-7 mx-auto">
        <div class="archer_truck">
          <?= $this->Html->image('e-book/archer-exteriors-ebook-hero-banner-full.png', [
            'class' => 'img-fluid wow slideInRight animated',
            'data-wow-delay' => '300ms',
            'data-wow-duration' => '1500ms',
            'alt' => 'Archer Truck is on your way',
            'title' => 'Archer Truck is on your way'
          ]) ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Hero-section end -->

<!-- Why Choose Us Section Start  -->
<section class="section light ebook_why_choose" style="padding-bottom: 255px;">
  <div class="container">
    <div class="row gx-lg-5 gy-5">
      <div class="col-lg-5 text-center text-lg-start">
        <?= $this->Html->image('e-book/five-reasons.png', [
          'class' => 'img-fluid',
          'width' => '400',
          'alt' => 'Five Reasons Why People Choose Us',
          'title' => 'Five Reasons Why People Choose Us'
        ]) ?>
        <p class="mt-3">At Archer Exteriors, we know that your house is more than just a building—it's where life
          happens. That's why we're committed to providing top-tier craftsmanship, exceptional service, and
          long-lasting solutions for your home.</p>
      </div>
      <div class="col-lg-7">
        <div class="items_wrap">
          <div class="item wow slideInUp animated" data-wow-delay="000ms" data-wow-duration="1500ms">
            <div class="icon">
              <?= $this->Html->image('e-book/icons/family-owned.png', [
                'alt' => 'Family Owned & Operated',
                'title' => 'Family Owned & Operated'
              ]) ?>
            </div>
            <p>From first handshake to final walkthrough, we bring personal care, responsibility, and craftsmanship to
              every home—because that's what we'd expect for our own.</p>
          </div>
          <div class="item mt-2 wow slideInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="icon">
              <?= $this->Html->image('e-book/icons/certified-and-awarded.png', [
                'alt' => 'Certified and Awarded',
                'title' => 'Certified and Awarded'
              ]) ?>
            </div>
            <p>As a GAF Master Elite® Contractor and recipient of multiple industry awards, we are proud to deliver
              proven quality and unmatched professionalism.</p>
          </div>
          <div class="item mt-2 wow slideInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
            <div class="icon">
              <?= $this->Html->image('e-book/icons/premium-materials.png', [
                'alt' => 'Premium Materials',
                'title' => 'Premium Materials'
              ]) ?>
            </div>
            <p>We proudly use only top-performing products from trusted brands like GAF, James Hardie, OKNA, Alside,
              and ProVia—because your home deserves nothing but the best.</p>
          </div>
          <div class="item mt-2 wow slideInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
            <div class="icon">
              <?= $this->Html->image('e-book/icons/competitive-price.png', [
                'alt' => 'Competitive Prices',
                'title' => 'Competitive Prices'
              ]) ?>
            </div>
            <p>We believe in fair, transparent pricing and use our buying power to give you the best value—without
              ever cutting corners on quality.</p>
          </div>
          <div class="item mt-2 wow slideInUp animated" data-wow-delay="800ms" data-wow-duration="1500ms">
            <div class="icon">
              <?= $this->Html->image('e-book/icons/over-40-years.png', [
                'alt' => 'Over 40 Years of Experience',
                'title' => 'Over 40 Years of Experience'
              ]) ?>
            </div>
            <p>With over four decades of hands-on experience and family values at our core, we treat every project
              like it's our own—earning trust through real results and meaningful, lasting relationships.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Why Choose Us Section End  -->

<!-- Applause Carousel Div  -->
<div class="position-relative">
  <div class="container">
    <div style="z-index: 1;margin-top: -135px;" id="carouselApplause" class="carousel slide offer_ad_carousel" data-bs-ride="carousel" data-bs-touch="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselApplause" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselApplause" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselApplause" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselApplause" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <a class="d-none d-md-block" href="javascript:void(0)" onclick="openDVInNewWindow('https://www.archerexteriors.com/archer-applause/new-roof-zero-mess')">
            <img src="https://www.archerexteriors.com/img/archer-applause/promote-banners/archer-exteriors-applause-banner-roofing-lg.jpg" class="img-fluid" alt="Real Homes. Real Results. Real Stories." title="Real Homes. Real Results. Real Stories.">
          </a>
          <a class="d-bock d-md-none" href="javascript:void(0)" onclick="openDVInNewWindow('https://www.archerexteriors.com/archer-applause/new-roof-zero-mess')">
            <img src="https://www.archerexteriors.com/img/archer-applause/promote-banners/archer-exteriors-applause-banner-roofing-sm.jpg" class="img-fluid" alt="Real Homes. Real Results. Real Stories." title="Real Homes. Real Results. Real Stories.">
          </a>
        </div>
        <div class="carousel-item">
          <a class="d-none d-md-block" href="javascript:void(0)" onclick="openDVInNewWindow('https://www.archerexteriors.com/archer-applause/from-aluminum-to-amazing')">
            <img src="https://www.archerexteriors.com/img/archer-applause/promote-banners/archer-exteriors-applause-banner-siding-lg.jpg" class="img-fluid" alt="Real Homes. Real Results. Real Stories." title="Real Homes. Real Results. Real Stories.">
          </a>
          <a class="d-bock d-md-none" href="javascript:void(0)" onclick="openDVInNewWindow('https://www.archerexteriors.com/archer-applause/from-aluminum-to-amazing')">
            <img src="https://www.archerexteriors.com/img/archer-applause/promote-banners/archer-exteriors-applause-banner-siding-sm.jpg" class="img-fluid" alt="Real Homes. Real Results. Real Stories." title="Real Homes. Real Results. Real Stories.">
          </a>
        </div>
        <div class="carousel-item">
          <a class="d-none d-md-block" href="javascript:void(0)" onclick="openDVInNewWindow('https://www.archerexteriors.com/archer-applause/how-new-windows-transformed-our-home')">
            <img src="https://www.archerexteriors.com/img/archer-applause/promote-banners/archer-exteriors-applause-banner-windows-lg.jpg" class="img-fluid" alt="Real Homes. Real Results. Real Stories." title="Real Homes. Real Results. Real Stories.">
          </a>
          <a class="d-bock d-md-none" href="javascript:void(0)" onclick="openDVInNewWindow('https://www.archerexteriors.com/archer-applause/how-new-windows-transformed-our-home')">
            <img src="https://www.archerexteriors.com/img/archer-applause/promote-banners/archer-exteriors-applause-banner-windows-sm.jpg" class="img-fluid" alt="Real Homes. Real Results. Real Stories." title="Real Homes. Real Results. Real Stories.">
          </a>
        </div>
        <div class="carousel-item">
          <a class="d-none d-md-block" href="javascript:void(0)" onclick="openDVInNewWindow('https://www.archerexteriors.com/archer-applause/stunning-home-makeover-siding-door')">
            <img src="https://www.archerexteriors.com/img/archer-applause/promote-banners/archer-exteriors-applause-banner-doors-lg.jpg" class="img-fluid" alt="Real Homes. Real Results. Real Stories." title="Real Homes. Real Results. Real Stories.">
          </a>
          <a class="d-bock d-md-none" href="javascript:void(0)" onclick="openDVInNewWindow('https://www.archerexteriors.com/archer-applause/stunning-home-makeover-siding-door')">
            <img src="https://www.archerexteriors.com/img/archer-applause/promote-banners/archer-exteriors-applause-banner-doors-sm.jpg" class="img-fluid" alt="Real Homes. Real Results. Real Stories." title="Real Homes. Real Results. Real Stories.">
          </a>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- Appointment Process Section Start  -->
<section class="section chooseus-section appoinment_process" style="margin-top: -105px; padding-top: 240px;">
  <div class="image-layer wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
    <?= $this->Html->image('tommy-archer-web-photo.png', [
      'alt' => 'Archer Exteriors Home Exterior Specialist',
      'title' => 'Archer Exteriors Home Exterior Specialist'
    ]) ?>
  </div>

  <div class="container">
    <div class="sec-title mb-5 text-center text-xxl-start">
      <h2>What Happens <br> <span>During Your Appointment</span></h2>
    </div>

    <div class="row">
      <div class="col-xxl-7">
        <div class="item">
          <div class="icon">
            <?= $this->Html->image('e-book/on-site-assessment.svg', [
              'alt' => 'On-Site Assessment',
              'title' => 'On-Site Assessment'
            ]) ?>
          </div>
          <div>
            <h4 class="title_4 mb-1">On-Site Assessment</h4>
            <p>Our Home Exteriors Specialist will visit your property to assess the project, take precise
              measurements, and discuss your unique needs. They'll walk you through product options, color selections,
              and more-then provide a detailed quote. To ensure a productive appointment, we kindly ask that all
              decision-makers be present.</p>
          </div>
        </div>
        <div class="item">
          <div class="icon">
            <?= $this->Html->image('e-book/project-execution.svg', [
              'alt' => 'Project Execution',
              'title' => 'Project Execution'
            ]) ?>
          </div>
          <div>
            <h4 class="title_4 mb-1">Project Execution</h4>
            <p>Once the plan is finalized, your dedicated local supervisor takes the lead-managing everything from
              material delivery to installation. We handle every detail with precision and a strong commitment to
              quality craftsmanship.</p>
          </div>
        </div>
        <div class="item">
          <div class="icon">
            <?= $this->Html->image('e-book/final-inspection.svg', [
              'alt' => 'Final Inspection and Approval',
              'title' => 'Final Inspection and Approval'
            ]) ?>
          </div>
          <div>
            <h4 class="title_4 mb-1">Final Inspection and Approval</h4>
            <p>Once the work is complete, we perform a detailed inspection to ensure everything meets our high
              standards - and yours. We'll walk you through the finished project to confirm your satisfaction before
              we
              officially wrap up.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Appointment Process Section End  -->

<!-- Price Match Strip Section Start  -->
<section class="price_match_strip">
  <div class="container">
    <div class="inner_row">
      <div class="img wow slideInLeft animated" data-wow-delay="000ms" data-wow-duration="1500ms">
        <?= $this->Html->image('price-match-guarantee.png', [
          'alt' => 'Price Match Guarantee',
          'title' => 'Price Match Guarantee'
        ]) ?>
      </div>
      <h4 class="title_3">What to Expect When You're Expecting… A Better Home</h4>
    </div>
  </div>
</section>
<!-- Price Match Stirp Section End  -->

<!-- Service Types Section Start  -->
<section class="section light" style="padding-bottom: 255px;">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Our Services</h6>
      <h2>Expert Exterior Services <br> <span>With a Local Touch And National Presence.</span></h2>
    </div>

    <div class="service_types_wrap">
      <div class="row justify-content-center gy-5 mt-5">
        <div class="col-xl-4 col-md-6 col-sm-8">
          <div class="service-block-item wow fadeInUp animated animated" data-wow-delay="00ms"
            data-wow-duration="1500ms">
            <div class="inner-box">
              <div class="image-box">
                <?= $this->Html->link(
                  $this->Html->image('services/archer-exteriors-roofing.jpg', [
                    'alt' => 'Roofing Service',
                    'title' => 'Roofing Service'
                  ]),
                  ['controller' => 'Services', 'action' => 'roofing'],
                  ['escape' => false]
                ) ?>
              </div>
              <div class="lower-content">
                <div class="icon-box">
                  <?= $this->Html->image('services/icons/roof.svg', [
                    'class' => 'svg',
                    'alt' => 'Roofing Service'
                  ]) ?>
                </div>
                <div class="shap-box"></div>
                <h3><?= $this->Html->link('Roofing', ['controller' => 'Services', 'action' => 'roofing']) ?></h3>
                <p>We provide professional roof replacements, installations, and repairs using high-quality materials. Our team is trained to handle everything from storm damage to aging shingles. Get peace of mind with a roof built to last.</p>
                <div class="link">
                  <?= $this->Html->link(
                    'Get Started<i class="flaticon-login"></i>',
                    ['controller' => 'Services', 'action' => 'roofing'],
                    ['escape' => false]
                  ) ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-md-6 col-sm-8">
          <div class="service-block-item wow fadeInUp animated animated" data-wow-delay="300ms"
            data-wow-duration="1500ms">
            <div class="inner-box">
              <div class="image-box">
                <?= $this->Html->link(
                  $this->Html->image('services/archer-exteriors-siding.jpg', [
                    'alt' => 'Siding Service',
                    'title' => 'Siding Service'
                  ]),
                  ['controller' => 'Services', 'action' => 'siding'],
                  ['escape' => false]
                ) ?>
              </div>
              <div class="lower-content">
                <div class="icon-box">
                  <?= $this->Html->image('services/icons/siding.svg', [
                    'class' => 'svg siding',
                    'alt' => 'Siding Service'
                  ]) ?>
                </div>
                <div class="shap-box"></div>
                <h3><?= $this->Html->link('Siding', ['controller' => 'Services', 'action' => 'siding']) ?></h3>
                <p>Enhance your home’s curb appeal with durable, low-maintenance siding. We offer a wide selection of styles and colors to match your vision. Every siding job is installed with expert precision.</p>
                <div class="link">
                  <?= $this->Html->link(
                    'Get Started<i class="flaticon-login"></i>',
                    ['controller' => 'Services', 'action' => 'siding'],
                    ['escape' => false]
                  ) ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-md-6 col-sm-8">
          <div class="service-block-item wow fadeInUp animated animated" data-wow-delay="300ms"
            data-wow-duration="1500ms">
            <div class="inner-box">
              <div class="image-box">
                <?= $this->Html->link(
                  $this->Html->image('services/archer-exteriors-windows.jpg', [
                    'alt' => 'Window Service',
                    'title' => 'Window Service'
                  ]),
                  ['controller' => 'Services', 'action' => 'windows'],
                  ['escape' => false]
                ) ?>
              </div>
              <div class="lower-content">
                <div class="icon-box">
                  <?= $this->Html->image('services/icons/window.svg', [
                    'class' => 'svg',
                    'alt' => 'Window Service'
                  ]) ?>
                </div>
                <div class="shap-box"></div>
                <h3><?= $this->Html->link('Windows', ['controller' => 'Services', 'action' => 'windows']) ?></h3>
                <p>Upgrade to energy-efficient windows that look great and help lower utility bills. We custom-fit each window for a seamless installation. Choose from trusted brands like OKNA and ProVia.</p>
                <div class="link">
                  <?= $this->Html->link(
                    'Get Started<i class="flaticon-login"></i>',
                    ['controller' => 'Services', 'action' => 'windows'],
                    ['escape' => false]
                  ) ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-md-6 col-sm-8">
          <div class="service-block-item wow fadeInUp animated animated" data-wow-delay="400ms"
            data-wow-duration="1500ms">
            <div class="inner-box">
              <div class="image-box">
                <?= $this->Html->link(
                  $this->Html->image('services/archer-exteriors-doors.jpg', [
                    'alt' => 'Door Service',
                    'title' => 'Door Service'
                  ]),
                  ['controller' => 'Services', 'action' => 'doors'],
                  ['escape' => false]
                ) ?>
              </div>
              <div class="lower-content">
                <div class="icon-box">
                  <?= $this->Html->image('services/icons/door.svg', [
                    'class' => 'svg',
                    'alt' => 'Door Service'
                  ]) ?>
                </div>
                <div class="shap-box"></div>
                <h3><?= $this->Html->link('Doors', ['controller' => 'Services', 'action' => 'doors']) ?></h3>
                <p>We install front, storm, and patio doors that combine style with security. Each door is made to withstand the elements and elevate your home’s entry. Our team ensures a clean and proper fit every time.</p>
                <div class="link">
                  <?= $this->Html->link(
                    'Get Started<i class="flaticon-login"></i>',
                    ['controller' => 'Services', 'action' => 'doors'],
                    ['escape' => false]
                  ) ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-md-6 col-sm-8">
          <div class="service-block-item wow fadeInUp animated animated" data-wow-delay="600ms"
            data-wow-duration="1500ms">
            <div class="inner-box">
              <div class="image-box">
                <?= $this->Html->link(
                  $this->Html->image('services/archer-exteriors-gutters.jpg', [
                    'alt' => 'Gutter Service',
                    'title' => 'Gutter Service'
                  ]),
                  ['controller' => 'Services', 'action' => 'gutters'],
                  ['escape' => false]
                ) ?>
              </div>
              <div class="lower-content">
                <div class="icon-box">
                  <?= $this->Html->image('services/icons/gutter.svg', [
                    'class' => 'svg',
                    'alt' => 'Gutter Service'
                  ]) ?>
                </div>
                <div class="shap-box"></div>
                <h3><?= $this->Html->link('Gutters', ['controller' => 'Services', 'action' => 'gutters']) ?></h3>
                <p>Protect your home from water damage with seamless gutters and guards. We install systems that are built to perform and blend in. Keep water flowing and your foundation safe.</p>
                <div class="link">
                  <?= $this->Html->link(
                    'Get Started<i class="flaticon-login"></i>',
                    ['controller' => 'Services', 'action' => 'gutters'],
                    ['escape' => false]
                  ) ?>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- Types Section End  -->

<!-- Statistics Section Start  -->
<section class="funfact-section light">
  <?= $this->element('company_statistics') ?>
</section>
<!-- Statistics Section End  -->

<!-- National Strength Section Start  -->
<section class="section" style="position: relative; margin-top: -120px; padding-top: 250px;">
  <div class="container">
    <div class="row gy-4 gx-lg-5">
      <div class="col-lg-6">
        <div class="about-image-block">
          <div class="image-box pb-0">
            <div class="pattern-layer" style="background-image: url(<?= $this->Url->image('shape-1.png') ?>);"></div>
            <div class="image">
              <?= $this->Html->image('e-book/national-strength.jpg', [
                'alt' => 'National Strength. Local Commitment. Exceptional Exteriors.',
                'title' => 'National Strength. Local Commitment. Exceptional Exteriors.'
              ]) ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 text-center text-lg-start">
        <h2 class="title_2 mb-3"><b>National Strength.</b> Local Commitment. Exceptional Exteriors.</h2>
        <p>For over 40 years, Archer Exteriors has been at the forefront of the remodeling industry, setting new
          standards in quality, craftsmanship, and customer care. Founded on the principles of integrity, exceptional
          work, and fair pricing, we remain committed to exceeding expectations—one project at a time. With a growing
          national presence and deep local roots, we combine the strength of a large-scale operation with the
          personalized service homeowners deserve.</p>

        <h4 class="title_3 mt-4 mb-3">40 Years of Excellence. A Legacy of Trust.</h4>
        <ul class="award_list_two justify-content-center justify-content-lg-start">
          <li>
            <?= $this->Html->image('e-book/logo/elite-service.png', [
              'alt' => 'Elite Service Home Advisor',
              'title' => 'Elite Service Home Advisor'
            ]) ?>
          </li>
          <li>
            <?= $this->Html->image('e-book/logo/gaf-master-elite.png', [
              'alt' => 'GAF Master Elite',
              'title' => 'GAF Master Elite'
            ]) ?>
          </li>
          <li>
            <?= $this->Html->image('e-book/logo/gaf-president.png', [
              'alt' => 'GAF Presidents',
              'title' => 'GAF Presidents'
            ]) ?>
          </li>
          <li>
            <?= $this->Html->image('e-book/logo/bbb-rating.png', [
              'alt' => 'BBB A+ Rating',
              'title' => 'BBB A+ Rating'
            ]) ?>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- National Strength Section End  -->

<!-- Warranty Section Start  -->
<section class="section light chooseus-section v2">
  <div class="image-layer wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
    <?= $this->Html->image('e-book/archer-exteriors-supervisor.png', [
      'alt' => 'Archer Exteriors Home Exterior Specialist',
      'title' => 'Archer Exteriors Home Exterior Specialist'
    ]) ?>
  </div>

  <div class="container text-center text-xxl-start">
    <div class="row">
      <div class="col-xxl-7 offset-xxl-5">
        <div class="mb-5">
          <div class="sec-title">
            <h6 class="mb-2"><i class="flaticon-roof"></i>Warranty</h6>
            <h2 style="font-size: 36px;">Not Just a Warranty — <span>A Commitment.</span></h2>

            <p class="section_desc mt-3">At Archer Exteriors, we stand behind our work with industry-leading
              warranties that offer true peace of mind. Our warranties are not just promises—they're our commitment to
              long-lasting quality, durability, and your complete satisfaction. From top-tier materials to expert
              craftsmanship, we ensure that your investment is protected well into the future. When you choose Archer,
              you're covered by some of the strongest warranties in the industry.</p>
          </div>
        </div>

        <!-- clients-section -->
        <div class="clients-section">
          <div class="sec-title">
            <h6 class="mb-2"><i class="flaticon-roof"></i>Our Partners</h6>
            <h2 style="font-size: 36px;">Partnering <span>With The Best</span></h2>
          </div>

          <div class="clients-carousel-v2 owl-carousel owl-theme owl-nav-none mt-4">
            <div class="clients-logo-box">
              <?= $this->Html->link(
                $this->Html->image('partners/company-logo-alside.png', [
                  'alt' => 'Alside',
                  'title' => 'Alside'
                ]),
                'https://www.alside.com/',
                ['escape' => false, 'target' => '_blank']
              ) ?>
            </div>
            <div class="clients-logo-box">
              <?= $this->Html->link(
                $this->Html->image('partners/company-logo-certainteed.png', [
                  'alt' => 'Certainteed',
                  'title' => 'Certainteed'
                ]),
                'https://www.certainteed.com/',
                ['escape' => false, 'target' => '_blank']
              ) ?>
            </div>
            <div class="clients-logo-box">
              <?= $this->Html->link(
                $this->Html->image('partners/company-logo-gaf.png', [
                  'alt' => 'GAF',
                  'title' => 'GAF'
                ]),
                'https://www.gaf.com/',
                ['escape' => false, 'target' => '_blank']
              ) ?>
            </div>
            <div class="clients-logo-box">
              <?= $this->Html->link(
                $this->Html->image('partners/company-logo-james-hardy.png', [
                  'alt' => 'James Hardie',
                  'title' => 'James Hardie'
                ]),
                'https://www.jameshardie.com/',
                ['escape' => false, 'target' => '_blank']
              ) ?>
            </div>
            <div class="clients-logo-box">
              <?= $this->Html->link(
                $this->Html->image('partners/company-logo-okna.png', [
                  'alt' => 'Okna Windows',
                  'title' => 'Okna Windows'
                ]),
                'https://www.oknawindows.com/',
                ['escape' => false, 'target' => '_blank']
              ) ?>
            </div>
            <div class="clients-logo-box">
              <?= $this->Html->link(
                $this->Html->image('partners/company-logo-provia.png', [
                  'alt' => 'Provia',
                  'title' => 'Provia'
                ]),
                'https://www.provia.com/',
                ['escape' => false, 'target' => '_blank']
              ) ?>
            </div>
            <div class="clients-logo-box">
              <?= $this->Html->link(
                $this->Html->image('partners/company-logo-trex.png', [
                  'alt' => 'Trex',
                  'title' => 'Trex'
                ]),
                'https://www.trex.com/',
                ['escape' => false, 'target' => '_blank']
              ) ?>
            </div>
            <div class="clients-logo-box">
              <?= $this->Html->link(
                $this->Html->image('partners/company-logo-wolf.png', [
                  'alt' => 'Wolf Home Products',
                  'title' => 'Wolf Home Products'
                ]),
                'https://www.wolfhomeproducts.com/',
                ['escape' => false, 'target' => '_blank']
              ) ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Warranty Section End  -->

<!-- Financing Section Start  -->
<section class="section finance_options_sec">
  <?= $this->element('finance_section') ?>
</section>
<!-- Financing Section End  -->

<!-- Activities section Start  -->
<section class="section light activities">
  <?= $this->element('community_impact') ?>
</section>
<!-- Activities section End  -->


<script>
  function openDVInNewWindow(videoPageUrl) {
    // Calculate 80% of the screen width and height
    var w = Math.floor(window.screen.width * 0.8);
    var h = Math.floor(window.screen.height * 0.8);
    var left = Math.floor((window.screen.width - w) / 2);
    var top = Math.floor((window.screen.height - h) / 2);

    window.open(
      videoPageUrl,
      '_blank',
      `toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=${w},height=${h},left=${left},top=${top}`
    );
  }
</script>