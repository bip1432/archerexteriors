<?php
// Set Meta Tags
$this->set('title', 'Roof Installation & Replacement | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Your trusted partner for premium roofing solutions.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roof Replacement, Roof Installation');
$this->set('ogTitle', 'Roof Installation & Replacement | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Your trusted partner for premium roofing solutions.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/services/roofing'); // TODO: Change to the current page URL
?>

<!-- banner-section -->
<section class="banner-section roofing">
  <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
    <div class="slide-item one bg-left">
      <div class="image-layer">
      </div>
      <div class="auto-container">
        <div class="row clearfix">
          <div class="col-xl-8 col-lg-12 col-md-12 content-column">
            <div class="content-box">
              <h6>Built to Last</h6>
              <h1>Roofing Done Right <br>the First Time</h1>
              <p>Count on precision installs and quality materials that stand up to the elements.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slide-item two">
      <div class="image-layer">
      </div>
      <div class="auto-container">
        <div class="row clearfix">
          <div class="col-xl-7 col-lg-12 col-md-12 offset-xl-5 content-column">
            <div class="content-box">
              <h6>Built to Last</h6>
              <h1>Trusted by Leading Manufacturers</h1>
              <p>Our GAF Master Elite® status means proven expertise and exclusive warranty options for your roof.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slide-item three bg-left">
      <div class="image-layer"></div>
      <div class="auto-container">
        <div class="row clearfix">
          <div class="col-xl-8 col-lg-12 col-md-12 content-column">
            <div class="content-box">
              <h6>Built to Last</h6>
              <h1>Custom Solutions <br>for Every Home</h1>
              <p>We listen to your needs and recommend roofing systems designed to fit your style and budget.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- banner-section end -->

<!-- Statistics Section Start  -->
<section class="funfact-section light">
  <?= $this->element('company_statistics') ?>
</section>
<!-- Statistics Section End  -->

<!-- Advertisement  -->
<section>
  <div class="container">
    <?= $this->element('advertisement') ?>
  </div>
</section>

<!-- Start Project Section Start -->
<section class="section light get_estimate" id="getFreeEstimate">
  <div class="container">
    <div class="row gx-xl-5 gy-5">
      <div class="col-xl-7 text-md-start text-center">
        <div class="text-lg-end mb-3">
          <?= $this->Html->link(
            'Watch Next Round of Applause<i class="flaticon-login"></i>',
            ['controller' => 'Reviews', 'action' => 'archerApplause'],
            ['class' => 'theme-btn sm', 'target' => '_blank', 'escape' => false]
          ) ?>
        </div>
        <div class="video-wrapper mx-auto mx-xl-0 mb-4">
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

        <h2 class="title_2">A <b>Solid Roof</b> Starts with a Solid Team.</h2>
        <p>At Archer Exteriors, we bring <?= YEARS_OF_EXPERIENCE ?>+ years of experience to ensure your roof replacement is smooth,
          efficient, and built to last. From selecting the perfect roof to navigating financing, we're with you
          every step of the way.</p>

        <div class="service_key_points mt-4">
          <div id="serviceKeyPoints" class="owl-carousel owl-theme our_service service_key_points_slider">
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

        <div class="our_strength my-4">
          <span class="img">
            <?= $this->Html->image('roofing-service/archie-sm.png', [
              'alt' => 'Archer Exteriors Jobs Strength',
              'title' => 'Archer Exteriors Jobs Strength',
              'class' => 'img-fluid'
            ]) ?>
          </span>
          <div class="content">
            <?= $this->element('jobs_strength') ?>
          </div>
        </div>




        <!-- <div class="mt-3">
          <?= $this->Html->link(
            'Financing Options Available <i class="flaticon-login"></i>',
            ['controller' => 'Financings', 'action' => 'index'],
            ['class' => 'theme-btn sm', 'escape' => false]
          ) ?>
        </div> -->

      </div>

      <div class="col-xl-5">
        <?= $this->element('forms/form_free_estimate', ['formId' => '3', 'formKey' => 'roofing9ae8612082376a3aed0eaf1b7b498d64']) ?>
      </div>

      <div class="col-12 mt-4">
        <h3 class="title_3 mb-2" style="line-height: 30px;">Replacing Your Roof Doesn’t Have to Be Overwhelming—We’ve Perfected It Over 40 Years and Thousands of Roofs.</h3>
        <p>We understand that replacing your home's roof can feel daunting. With over 40 years of experience, Archer Exteriors is your trusted roofing contractor and roofing installer. At Archer Exteriors, we know that your house is more than just a building—it’s where life happens. That’s why we’re committed to providing top-tier craftsmanship, exceptional service, and long-lasting solutions for your home.</p>
      </div>

      <div class="col-12 mt-5">
        <div class="row gy-4">
          <div class="col-lg-6">
            <?= $this->Html->image('roofing-service/archer-exteriors-metal-roof-banner.jpg', [
              'class' => 'img-fluid rad_4 banner_hover',
              'alt' => 'Strength you can see. A metal roof you can trust.',
              'title' => 'Strength you can see. A metal roof you can trust.'
            ]) ?>
          </div>
          <div class="col-lg-6">
            <?= $this->Html->image('roofing-service/archer-exteriors-flat-roof-banner.jpg', [
              'class' => 'img-fluid rad_4 banner_hover',
              'alt' => 'Commercial flat roofing solutions you can count on.',
              'title' => 'Commercial flat roofing solutions you can count on.'
            ]) ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Start Project Section End -->

<!-- Working Process Section Start  -->
<section class="section working-section text-center">
  <div class="large-container">
    <div class="sec-title light">
      <h6><i class="flaticon-roof"></i>Our process</h6>
      <h2>Get roofing service <span> in 4 steps</span></h2>
    </div>
    <div class="inner-content">
      <div class="row clearfix">
        <div class="col-xxl-3 col-md-6 col-sm-12 process-block">
          <div class="process-block-item">
            <div class="inner-box">
              <div class="icon-box">
                <span class="count-box counted">01</span>
                <div class="icon">
                  <?= $this->Html->image('roofing-service/initial-contact.svg', [
                    'alt' => 'Initial Contact',
                    'title' => 'Initial Contact'
                  ]) ?>
                </div>
              </div>
              <div class="lower-content">
                <h3>Initial Contact</h3>
                <div class="pattern-layer"></div>
                <p>When you reach out to Archer Exteriors, we promptly schedule an in-home consultation. During this
                  visit, a member of our team conducts a thorough inspection of your roof. We discuss various roofing
                  options and styles, providing expert guidance to help you make informed decisions.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xxl-3 col-md-6 col-sm-12 process-block">
          <div class="process-block-item">
            <div class="inner-box">
              <div class="icon-box">
                <span class="count-box counted">02</span>
                <div class="icon">
                  <?= $this->Html->image('roofing-service/visualize-roof.svg', [
                    'alt' => 'Visualize Your New Roof',
                    'title' => 'Visualize Your New Roof'
                  ]) ?>
                </div>
              </div>
              <div class="lower-content">
                <h3>Visualize Your New Roof</h3>
                <div class="pattern-layer"></div>
                <p>Utilizing our specialized program, you can visualize exactly how your new roof will look. We
                  prioritize your satisfaction and confidence in the decisions made, encouraging active participation
                  in selecting the roofing options that best suit your preferences and needs.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xxl-3 col-md-6 col-sm-12 process-block">
          <div class="process-block-item">
            <div class="inner-box">
              <div class="icon-box">
                <span class="count-box counted">03</span>
                <div class="icon">
                  <?= $this->Html->image('roofing-service/new-roof-1day.svg', [
                    'alt' => 'New Roof in ONE DAY',
                    'title' => 'New Roof in ONE DAY'
                  ]) ?>
                </div>
              </div>
              <div class="lower-content">
                <h3>New Roof in ONE DAY</h3>
                <div class="pattern-layer"></div>
                <p>Efficiency is key at Archer Exteriors. We aim to complete most roofing projects in just one day,
                  minimizing disruption to your routine. Our dedicated team ensures swift installation while
                  prioritizing cleanliness and safety. A background-checked site supervisor oversees the process and
                  addresses any concerns promptly.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xxl-3 col-md-6 col-sm-12 process-block">
          <div class="process-block-item">
            <div class="inner-box">
              <div class="icon-box">
                <span class="count-box counted">04</span>
                <div class="icon">
                  <?= $this->Html->image('roofing-service/best-warranty.svg', [
                    'alt' => 'Best Warranty Available',
                    'title' => 'Best Warranty Available'
                  ]) ?>
                </div>
              </div>
              <div class="lower-content">
                <h3>Best Warranty Available</h3>
                <div class="pattern-layer"></div>
                <p>We stand behind the quality of our work with the best warranty available. Partnering with top
                  roofing suppliers, we guarantee premium materials and expert installation supported by experienced
                  professionals from the Archer Exteriors team.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Working Process Section End  -->

<section class="section light" style="padding-top: 280px; position: relative;">
  <div class="container">
    <div class="row gy-4 text-center text-xxl-start">
      <div class="col-xxl-6">
        <div class="limited_offer_banner">
          <?= $this->Html->image('roofing-service/archer-exteriors-offer-banner-roofing.jpg', [
            'class' => 'img-fluid rad_4',
            'alt' => 'Roof Replacement: 25% off your new roof',
            'title' => 'Roof Replacement: 25% off your new roof'
          ]) ?>
        </div>
      </div>

      <div class="col-xxl-6">
        <div class="parts_of_roof_box">
          <div class="img">
            <?= $this->Html->image('roofing-service/banner-parts-of-gaf-roofing-system.jpg', [
              'class' => 'img-fluid',
              'alt' => 'Parts of a GAF Roofing System',
              'title' => 'Parts of a GAF Roofing System'
            ]) ?>
          </div>
          <div class="content">
            <h3 class="title_3">Parts of a GAF Roofing System</h3>
            <p>A residential roofing system has multiple layers that work together to create a durable system. Explore the key layers below.</p>
            <div class="mt-3">
              <a style="padding: 6px 20px; font-size: 16px;" class="theme-btn" href="https://www.archerexteriors.com/parts-of-a-roof" target="_blank">How We Build Roofs - Step by Step <i class="flaticon-login"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Why Choose Us Section Start  -->
<section class="chooseus-section">
  <?= $this->element('why_choose_us') ?>
</section>
<!-- Why Choose Us Section End -->


<!-- Roofing Visualize Sec Start  -->
<!-- <section class="section light visualize_tool">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Roofing types</h6>
      <h2>Visualize your roof <br> <span> using our interactive tool</span></h2>
    </div>

    <div class="row mt-4 gy-4 service-selector flex-column-reverse flex-lg-row" data-service="roof">
      <div class="col-lg-6">
        <h3 class="title_3 mb-3">Select Type of <span class="service-name">Roof</span></h3>
        <div class="options" id="serviceOptions">
          <div class="item selected" data-type="shingle" data-bs-toggle="tooltip" data-bs-title="Asphalt Shingles">
            <?= $this->Html->image('roofing-service/roof-type/shingle.png', [
              'class' => 'img-fluid',
              'alt' => 'Asphalt Shingles'
            ]) ?>
            <span class="name">Shingle</span>
          </div>
          <div class="item" data-type="metal" data-bs-toggle="tooltip" data-bs-title="Metal Roof">
            <?= $this->Html->image('roofing-service/roof-type/metal.png', [
              'class' => 'img-fluid',
              'alt' => 'Metal'
            ]) ?>
            <span class="name">Metal</span>
          </div>
          <div class="item" data-type="cedar" data-bs-toggle="tooltip" data-bs-title="Cedar Roof">
            <?= $this->Html->image('roofing-service/roof-type/cedar.png', [
              'class' => 'img-fluid',
              'alt' => 'Cedar'
            ]) ?>
            <span class="name">Cedar</span>
          </div>
          <div class="item" data-type="flat" data-bs-toggle="tooltip" data-bs-title="Flat Roof">
            <?= $this->Html->image('roofing-service/roof-type/flat-roof.png', [
              'class' => 'img-fluid',
              'alt' => 'Flat Roof'
            ]) ?>
            <span class="name">Flat Roof</span>
          </div>
        </div>

        <div class="material_colors mt-5">
          <h3 class="title_3 mb-3">Select Texture / Color</h3>

          <div class="color-options" id="shingleColorOptions">
            <div class="item gray selected" data-color="gray" data-bs-toggle="tooltip" data-bs-title="Gray"
              data-bs-placement="bottom"><span></span></div>
            <div class="item brown" data-color="brown" data-bs-toggle="tooltip" data-bs-title="Brown"
              data-bs-placement="bottom"><span></span></div>
            <div class="item hunter-green" data-color="hunter-green" data-bs-toggle="tooltip"
              data-bs-title="Hunter Green" data-bs-placement="bottom"><span></span></div>
            <div class="item hickroy" data-color="hickroy" data-bs-toggle="tooltip" data-bs-title="Hickroy"
              data-bs-placement="bottom"><span></span></div>
            <div class="item shake-wood" data-color="shake-wood" data-bs-toggle="tooltip" data-bs-title="Shake Wood"
              data-bs-placement="bottom"><span></span></div>
            <div class="item slate" data-color="slate" data-bs-toggle="tooltip" data-bs-title="Slate"
              data-bs-placement="bottom"><span></span></div>
          </div>

          <div class="color-options" id="metalColorOptions">
            <div class="item gray selected" data-color="gray" data-bs-toggle="tooltip" data-bs-title="Gray"
              data-bs-placement="bottom"><span></span></div>
            <div class="item hickroy" data-color="hickroy" data-bs-toggle="tooltip" data-bs-title="Hickroy"
              data-bs-placement="bottom"><span></span></div>
            <div class="item shake-wood" data-color="shake-wood" data-bs-toggle="tooltip" data-bs-title="Shake Wood"
              data-bs-placement="bottom"><span></span></div>
            <div class="item slate" data-color="slate" data-bs-toggle="tooltip" data-bs-title="Slate"
              data-bs-placement="bottom"><span></span></div>
          </div>

          <div class="color-options" id="cedarColorOptions">
            <div class="item hickroy" data-color="hickroy" data-bs-toggle="tooltip" data-bs-title="Hickroy"
              data-bs-placement="bottom"><span></span></div>
            <div class="item shake-wood" data-color="shake-wood" data-bs-toggle="tooltip" data-bs-title="Shake Wood"
              data-bs-placement="bottom"><span></span></div>
            <div class="item slate" data-color="slate" data-bs-toggle="tooltip" data-bs-title="Slate"
              data-bs-placement="bottom"><span></span></div>
          </div>

          <div class="color-options" id="flatColorOptions">
            <div class="item hickroy" data-color="hickroy" data-bs-toggle="tooltip" data-bs-title="Hickroy"
              data-bs-placement="bottom"><span></span></div>
            <div class="item shake-wood" data-color="shake-wood" data-bs-toggle="tooltip" data-bs-title="Shake Wood"
              data-bs-placement="bottom"><span></span></div>
            <div class="item slate" data-color="slate" data-bs-toggle="tooltip" data-bs-title="Slate"
              data-bs-placement="bottom"><span></span></div>
          </div>
        </div>

      </div>
      <div class="col-lg-6">
        <div class="preview">
          <?= $this->Html->image('roofing-service/roof-preview/shingle-gray.png', [
            'class' => 'serviceImageSelector img-fluid',
            'alt' => 'Preview'
          ]) ?>
          <h4 id="previewTitle" class="text-center mt-3 mb-0 title_5">Shingle - Gray</h4>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- Roofing Visualize Sec End -->


<!-- Types Sec Start  -->
<section class="section light">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Roofing Types</h6>
      <h2>Types <span>of Roofing Material</span></span></h2>
      <p style="font-size: 18px; max-width: 1200px; margin-left: auto;margin-right: auto; color: var(--font);"
        class="desc">At Archer Exteriors, we believe your roof should combine strength, beauty, and lasting value. That’s why we proudly install premium GAF asphalt shingles, known for their durability, weather resistance, and wide range of styles. Our in-house metal roofing offers strength that lasts a lifetime.</p>
    </div>

    <div class="window_types roofing">
      <div class="row mt-4 gy-4 justify-content-center">
        <div class="col-xl-4 col-lg-6 col-sm-6">
          <div class="item">
            <div class="item_inner">
              <?= $this->Html->image('roofing-service/roof-type/shingle-roof.jpg', [
                'alt' => 'Asphalt Shingles',
                'title' => 'Asphalt Shingles'
              ]) ?>

              <div class="captions">
                <p class="desc">GAF shingles and roof accessories are made to work together. They provide a system that's built to protect homes — so the people who live inside them can enjoy what matters most.</p>
                <div class="heading">
                  <h4 class="title_4">Asphalt Shingles</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-sm-6">
          <div class="item">
            <div class="item_inner">
              <?= $this->Html->image('roofing-service/roof-type/metal-roof.jpg', [
                'alt' => 'Metal Roof',
                'title' => 'Metal Roof'
              ]) ?>

              <div class="captions">
                <p class="desc">We manufacture our own metal roofing in-house to ensure top quality and precision. Metal roofing is more durable than asphalt, offering long-lasting protection, energy efficiency, and a beautiful look for your home.</p>
                <div class="heading">
                  <h4 class="title_4">Metal Roof</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-sm-6">
          <div class="item">
            <div class="item_inner">
              <?= $this->Html->image('roofing-service/roof-type/flat-roof.jpg', [
                'alt' => 'Metal Roof',
                'title' => 'Metal Roof'
              ]) ?>

              <div class="captions">
                <p class="desc">Expert commercial flat roof installation. We specialize in TPO and EPDM systems designed for performance, efficiency, and long-term protection. We install flat roofing systems for warehouses, office buildings, and residential complexes — built to perform and made to last.</p>
                <div class="heading">
                  <h4 class="title_4">Flat Roof</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Timberline HDZ Shingles Widget -->
  <div class="auto-container" style="margin-top: 80px;">
    <div class="gaf_shingle_types">
      <div class="gaf_shingle_types_inner" id="experience-65522efd35fdc" data-aspectRatio="1.20430108">
        <iframe allowfullscreen src='https://view.ceros.com/gaf/widget-1-timberline-hdz-shingles-1-1-1-2'
          frameborder='0' class='ceros-experience' title='GAF Timberline HDZ Shingles Types'
          scrolling='no'></iframe>
      </div>
      <script type="text/javascript" src="https://view.ceros.com/scroll-proxy.min.js"
        data-ceros-origin-domains="view.ceros.com"></script>
    </div>
  </div>
</section>
<!-- Types Sec End  -->

<!--GAF Section Start  -->
<section class="section single_service">
  <div class="container">
    <div class="row gy-4 flex-column-reverse flex-lg-row">
      <div class="col-lg-6 align-self-center">
        <div class="sec-title mb-3">
          <h6><i class="flaticon-roof"></i>Our Partners</h6>
          <h2 class=""><span>We are</span> GAF Master Elite® <span>Certified and Members of the GAF President’s Club</span></h2>
        </div>
        <h4 class="title_3"></h4>
        <p class="">When you install any GAF Lifetime Shingle and at least 3 qualifying GAF accessories, you'll
          automatically get a Lifetime limited warranty on shingles and qualifying GAF accessories. Work with the
          roofing professionals and you'll notice the difference for years to come.</p>

        <h3 class="title_3 mt-4">Our Awards</h3>

        <ul class="d-flex flex-wrap gap-3 mt-3">
          <li>
            <?= $this->Html->image('roofing-service/gaf-master-elite.png', [
              'width' => '100',
              'alt' => 'Gaf Master Elite',
              'title' => 'Gaf Master Elite'
            ]) ?>
          </li>
          <li>
            <?= $this->Html->image('roofing-service/gaf-president-club.png', [
              'width' => '100',
              'alt' => 'Gaf President Club',
              'title' => 'Gaf President Club'
            ]) ?>
          </li>
          <li>
            <?= $this->Html->image('roofing-service/gaf-golden-pledge.png', [
              'width' => '100',
              'alt' => 'Gaf Golden Pledge',
              'title' => 'Gaf Golden Pledge'
            ]) ?>
          </li>
          <li>
            <?= $this->Html->image('roofing-service/gaf-silver-pledge.png', [
              'width' => '100',
              'alt' => 'Gaf Silver Pledge',
              'title' => 'Gaf Silver Pledge'
            ]) ?>
          </li>
        </ul>

        <div class="mt-4">
          <?= $this->Html->link(
            'Learn More<i class="flaticon-login"></i>',
            ['controller' => 'Companies', 'action' => 'gafMasterElite'],
            ['class' => 'theme-btn sm', 'escape' => false]
          ) ?>
        </div>
      </div>

      <div class="col-lg-6 text-center align-items-center">
        <?= $this->Html->image('roofing-service/banner-gaf-award.jpg', [
          'class' => 'img-fluid rad_10',
          'alt' => 'We use the best roofing products in the industry',
          'title' => 'We use the best roofing products in the industry'
        ]) ?>
      </div>
    </div>
  </div>
</section>
<!-- GAF Section End  -->

<!-- Reviews section Start  -->
<section class="section light reviews">
  <?= $this->element('reviews') ?>
</section>
<!-- Reviews section End  -->

<!-- Archie Section Start  -->
<section class="archie_section">
  <?= $this->element('archie_section') ?>
</section>
<!-- Archie Section End  -->

<!-- Before/After Section Start  -->
<section class="section before-after-gallery">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Our Work</h6>
      <h2>The Archer Touch <span>- Transformations <br> That Deliver the Wow Factor</span></h2>
    </div>

    <div id="before-after-slider">
      <div id="before-image">
        <?= $this->Html->image('roofing-service/roofing-before.jpg', [
          'alt' => 'Before Roofing Project',
          'title' => 'Before Roofing Project'
        ]) ?>
        <div class="before_label" data-content="Before"></div>
      </div>

      <div id="after-image">
        <?= $this->Html->image('roofing-service/roofing-after.jpg', [
          'alt' => 'After Roofing Project',
          'title' => 'After Roofing Project'
        ]) ?>
        <div class="after_label" data-content="After"></div>
      </div>
      <div id="resizer"></div>
    </div>

  </div>
</section>
<!-- Before/After Section End  -->

<!-- Project Gallery Start -->
<section class="section light completed_projects">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Work Gallery</h6>
      <h2>Proof <span>in Every Roof</span></h2>
    </div>
    <div id="roofingGallery" class="projects_gallery mt-5">
      <?= $this->Html->link(
        $this->Html->image('roofing-service/gallery/archer-roofing-project-1.jpg', [
          'alt' => 'Roofing Project',
          'title' => 'Roofing Project',
          'class' => 'img-fluid'
        ]),
        '/img/roofing-service/gallery/archer-roofing-project-1.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('roofing-service/gallery/archer-roofing-project-2.jpg', [
          'alt' => 'Roofing Project',
          'title' => 'Roofing Project',
          'class' => 'img-fluid'
        ]),
        '/img/roofing-service/gallery/archer-roofing-project-2.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('roofing-service/gallery/archer-roofing-project-3.jpg', [
          'alt' => 'Roofing Project',
          'title' => 'Roofing Project',
          'class' => 'img-fluid'
        ]),
        '/img/roofing-service/gallery/archer-roofing-project-3.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('roofing-service/gallery/archer-roofing-project-4.jpg', [
          'alt' => 'Roofing Project',
          'title' => 'Roofing Project',
          'class' => 'img-fluid'
        ]),
        '/img/roofing-service/gallery/archer-roofing-project-4.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('roofing-service/gallery/archer-roofing-project-5.jpg', [
          'alt' => 'Roofing Project',
          'title' => 'Roofing Project',
          'class' => 'img-fluid'
        ]),
        '/img/roofing-service/gallery/archer-roofing-project-5.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('roofing-service/gallery/archer-roofing-project-6.jpg', [
          'alt' => 'Roofing Project',
          'title' => 'Roofing Project',
          'class' => 'img-fluid'
        ]),
        '/img/roofing-service/gallery/archer-roofing-project-6.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
    </div>
  </div>
</section>
<!-- Project Gallery End -->

<!-- Brochure Section Start  -->
<section class="section brochure-section bg_secondary">
  <?= $this->element('our_brochure') ?>
</section>
<!-- Brochure Section End  -->

<!-- FAQ Section Start  -->
<section class="section">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>FAQ</h6>
      <h2>Frequently <span>asked questions</span></h2>
    </div>

    <div class="faq_wrap mt-5">
      <?= $this->element('faq/roofing') ?>
    </div>
  </div>
</section>
<!-- FAQ Section End -->

<!-- Activities section Start  -->
<section class="section light activities">
  <?php echo $this->element('community_impact') ?>
</section>
<!-- Activities section End  -->