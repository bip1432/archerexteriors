<?php
// Set Meta Tags
$this->set('title', 'Energy-Efficient Window Installation & Replacement | Archer Exteriors');
$this->set('metaDescription', 'Upgrade your home with premium, energy-efficient windows from Archer Exteriors. We install OKNA and ProVia windows, including double-hung, casement, bay, and bow styles—crafted for durability, comfort, and savings.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', window installation, window replacement, energy-efficient windows, vinyl windows, OKNA windows, ProVia windows, double-hung windows, casement windows, black frame windows, bay windows, bow windows, home window upgrades, window contractors, NJ window installers, replacement windows near me, affordable windows');
$this->set('ogTitle', 'Energy-Efficient Window Installation & Replacement | Archer Exteriors');
$this->set('ogDescription', 'Upgrade your home with premium, energy-efficient windows from Archer Exteriors. We install OKNA and ProVia windows, including double-hung, casement, bay, and bow styles—crafted for durability, comfort, and savings.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/services/windows'); // TODO: Change to the current page URL
?>
<!-- banner-section -->
<section class="banner-section windows">
  <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
    <div class="slide-item one bg-left">
      <div class="image-layer">
      </div>
      <div class="auto-container">
        <div class="row clearfix">
          <div class="col-xl-8 col-lg-12 col-md-12 content-column">
            <div class="content-box">
              <h6>Efficiency Meets Style</h6>
              <h1>Energy-Efficient Windows Installed Right</h1>
              <p>Choose from OKNA and ProVia windows, custom-fit for your home and expertly installed for lasting
                comfort.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slide-item two ">
      <div class="image-layer">
      </div>
      <div class="auto-container">
        <div class="row clearfix">
          <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-6 content-column">
            <div class="content-box">
              <h6>Efficiency Meets Style</h6>
              <h1>The Power Behind Your Savings.</h1>
              <p>We leverage our national buying power to deliver top-tier materials at unbeatable value. You’ll love the craftsmanship—and the savings.</p>
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
              <h6>Efficiency Meets Style</h6>
              <h1>Expand Your Space with Bay and Bow Windows</h1>
              <p>Add natural light and a spacious feel to any room with beautiful bay and bow window designs.</p>
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
<section class="section light service_details" id="getFreeEstimate">
  <div class="container">
    <div class="row gx-lg-5 gy-5">
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
              'src' => 'https://player.vimeo.com/video/1115476739?h=48dde1876e',
              'frameborder' => '0',
              'allowfullscreen' => true,
              'webkitallowfullscreen' => true,
              'mozallowfullscreen' => true
            ]) ?>
          </div>
        </div>

        <h2 class="title_2"><b>High-Performance Windows</b> at Competitive Prices</h2>
        <p class="mb-4">Upgrade your view with Archer Exteriors. We offer a wide range of window options to match your
          style and needs. From classic double-hung to sleek casement and energy-efficient Energy Star windows, find
          the perfect fit for your home.</p>


        <div class="service_key_points mt-4">
          <div id="serviceKeyPoints" class="owl-carousel owl-theme our_service service_key_points_slider">
            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/window/style-that-elevates.svg', [
                  'class' => 'svg',
                  'alt' => 'Style That Elevates Every Room',
                  'title' => 'Style That Elevates Every Room'
                ]) ?>
              </div>
              <h4 style="font-size: 15px;">Style That Elevates Every Room</h4>
            </div>

            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/window/energy-efficiency.svg', [
                  'class' => 'svg',
                  'alt' => 'Energy Efficiency You Can Feel',
                  'title' => 'Energy Efficiency You Can Feel'
                ]) ?>
              </div>
              <h4 style="font-size: 15px;">Energy Efficiency You Can Feel</h4>
            </div>

            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/window/built-to-last.svg', [
                  'class' => 'svg',
                  'alt' => 'Built to Last. Designed for Quiet.',
                  'title' => 'Built to Last. Designed for Quiet.'
                ]) ?>
              </div>
              <h4 style="font-size: 15px;">Built to Last. Designed for Quiet.</h4>
            </div>

            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/window/value-you-will-see.svg', [
                  'class' => 'svg',
                  'alt' => 'Value You’ll See Inside and Out',
                  'title' => 'Value You’ll See Inside and Out'
                ]) ?>
              </div>
              <h4 style="font-size: 15px;">Value You’ll See Inside and Out</h4>
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
      </div>

      <div class="col-xl-5">
        <?= $this->element('forms/form_free_estimate', ['formId' => '5', 'formKey' => 'windows8283f9ee421c148ca0176baea307414f']) ?>
      </div>

      <div class="col-12" style="margin-top: 60px;">
        <div class="row gy-4 text-center text-xxl-start">
          <div class="col-xxl-6">
            <div class="limited_offer_banner">
              <?= $this->Html->image('golden-ticket/banner-sm/archer-exteriors-offer-banner-window-sm.jpg', [
                'class' => 'img-fluid rad_4',
                'alt' => 'Brighten your home - $250 off per window',
                'title' => 'Brighten your home - $250 off per window'
              ]) ?>
            </div>
          </div>
          <div class="col-xxl-6">
            <div class="parts_of_roof_box window">
              <div class="img">
                <?= $this->Html->image('window-service/archer-exteriors-partners-windows.jpg', [
                  'class' => 'img-fluid',
                  'style' => 'max-width: 200px;',
                  'alt' => 'Partnering With The Best',
                  'title' => 'Partnering With The Best'
                ]) ?>
              </div>
              <div class="content">
                <h3 class="title_3">Partnering With The Best</h3>
                <p>We work with top brands like MI, OKNA and Provia to ensure the highest quality products for our customers.</p>
                <div class="partners_logo mt-3 d-flex flex-wrap gap-2">
                  <?= $this->Html->link(
                    $this->Html->image('window-service/partners/partner-logo-mi.png', [
                      'class' => 'img-fluid',
                      'alt' => 'MI Windows And Doors',
                      'title' => 'MI Windows And Doors'
                    ]),
                    'https://miwindows.com/',
                    ['escape' => false, 'target' => '_blank']
                  ) ?>

                  <?= $this->Html->link(
                    $this->Html->image('window-service/partners/partner-logo-pro-via.png', [
                      'class' => 'img-fluid',
                      'alt' => 'ProVia',
                      'title' => 'ProVia'
                    ]),
                    'https://www.provia.com/',
                    ['escape' => false, 'target' => '_blank']
                  ) ?>

                  <?= $this->Html->link(
                    $this->Html->image('window-service/partners/partner-logo-okna.png', [
                      'class' => 'img-fluid',
                      'alt' => 'OKNA',
                      'title' => 'OKNA'
                    ]),
                    'https://www.oknawindows.com/',
                    ['escape' => false, 'target' => '_blank']
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
<!-- Start Project Section End -->

<!-- Working Process Section Start  -->
<section class="section working-section window text-center">
  <div class="large-container">
    <div class="sec-title light">
      <h6><i class="flaticon-roof"></i>Window Replacement</h6>
      <h2>Why Replace Window <span>Instead of Repair?</span></h2>
    </div>
    <div class="inner-content">
      <div class="row clearfix">
        <div class="col-xxl-3 col-md-6 col-sm-12 process-block">
          <div class="process-block-item">
            <div class="inner-box">
              <div class="icon-box">
                <span class="count-box counted">01</span>
                <div class="icon">
                  <?= $this->Html->image('window-service/style-that-elevates.svg', [
                    'class' => 'img-fluid',
                    'alt' => 'Style That Elevates Every Room',
                    'title' => 'Style That Elevates Every Room'
                  ]) ?>
                </div>
              </div>
              <div class="lower-content">
                <h3>Style That Elevates Every Room</h3>
                <div class="pattern-layer"></div>
                <p>Transform your home with beautifully crafted windows that blend timeless design and modern functionality. From classic double-hungs to sleek black frames, every style we install enhances your home’s character and curb appeal.</p>
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
                  <?= $this->Html->image('window-service/energy-efficiency.svg', [
                    'class' => 'img-fluid',
                    'alt' => 'Energy Efficiency You Can Feel',
                    'title' => 'Energy Efficiency You Can Feel'
                  ]) ?>
                </div>
              </div>
              <div class="lower-content">
                <h3>Energy Efficiency You Can Feel</h3>
                <div class="pattern-layer"></div>
                <p>Our energy-efficient windows from Okna & ProVia help keep your home comfortable year-round—warm in winter, cool in summer. Advanced insulation and low-E glass technology reduce drafts and help lower energy bills, so your investment pays you back over time.</p>
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
                  <?= $this->Html->image('window-service/built-to-last.svg', [
                    'class' => 'img-fluid',
                    'alt' => 'Built to Last. Designed for Quiet.',
                    'title' => 'Built to Last. Designed for Quiet.'
                  ]) ?>
                </div>
              </div>
              <div class="lower-content">
                <h3>Built to Last. Designed for Quiet.</h3>
                <div class="pattern-layer"></div>
                <p>Durable materials and precision installation ensure your new windows stand up to the elements while keeping outside noise where it belongs—outside. Enjoy long-lasting performance, security, and peace of mind for years to come.</p>
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
                  <?= $this->Html->image('window-service/value-you-will-see.svg', [
                    'class' => 'img-fluid',
                    'alt' => 'Value You’ll See Inside and Out',
                    'title' => 'Value You’ll See Inside and Out'
                  ]) ?>
                </div>
              </div>
              <div class="lower-content">
                <h3>Value You’ll See Inside and Out</h3>
                <div class="pattern-layer"></div>
                <p>As part of our strong partnerships with leading manufacturers, we deliver exceptional quality at a competitive price. You get premium windows that elevate your home’s look, comfort, and value—without stretching your budget.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Working Process Section End  -->


<!-- Why Choose Us Section Start  -->
<section class="chooseus-section" style="padding-top: 255px; position: relative;">
  <?= $this->element('why_choose_us') ?>
</section>
<!-- Why Choose Us Section End -->

<!-- Types Sec Start  -->
<section class="section">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Window Types</h6>
      <h2>Types <span>of Windows Offered</span></span></h2>
      <p style="font-size: 18px; max-width: 1200px; margin-left: auto;margin-right: auto; color: var(--font);"
        class="desc">No matter the type of window you choose, our expert window contractors will ensure a
        professional installation for long-lasting performance and aesthetic appeal. Upgrade your home with our
        high-quality windows today.</p>
    </div>

    <div class="window_types">
      <div class="row mt-4 gy-4 justify-content-center">
        <div class="col-lg-4 col-sm-6">
          <div class="item">
            <div class="item_inner">
              <?= $this->Html->image('window-service/double-hung-window.jpg', [
                'alt' => 'Double-hung Windows',
                'title' => 'Double-hung Windows'
              ]) ?>

              <div class="captions">
                <p class="desc">At Archer Exteriors, we offer various window options to suit your preferences and
                  needs. Our selection includes double-hung windows, a popular choice due to their classic design and
                  ease of operation. We also provide slider windows, which offer a contemporary look and smooth
                  sliding functionality.</p>
                <div class="heading">
                  <h4 class="title_4">Double-hung Windows</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item">
            <div class="item_inner">
              <?= $this->Html->image('window-service/casement-window.jpg', [
                'alt' => 'Casement Windows',
                'title' => 'Casement Windows'
              ]) ?>

              <div class="captions">
                <p class="desc">Our casement windows are a great option if you're looking for windows that provide
                  excellent ventilation and energy efficiency. These windows open fully, allowing for maximum airflow
                  and improved energy efficiency. We offer bay and bow windows for homeowners who want to add elegance
                  and space to their homes. These windows create a beautiful focal point and provide an expanded view
                  of the outdoors.</p>
                <div class="heading">
                  <h4 class="title_4">Casement Windows</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item">
            <div class="item_inner">
              <?= $this->Html->image('window-service/energy-star-window.jpg', [
                'alt' => 'Energy Star Windows',
                'title' => 'Energy Star Windows'
              ]) ?>

              <div class="captions">
                <p class="desc">At Archer Exteriors, we also prioritize energy efficiency. That's why we offer Energy
                  Star windows from OKNA that meet strict energy efficiency guidelines set by the Environmental
                  Protection Agency. These windows help reduce energy consumption and lower utility bills while
                  keeping your home comfortable throughout the year.</p>
                <div class="heading">
                  <h4 class="title_4">Energy Star Windows</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Types Sec End  -->

<!-- Visual Guide Section Start  -->
<section class="section bg_secondary">
  <div class="large-container">
    <div class="sec-title text-center light">
      <h6><i class="flaticon-roof"></i>Visual Guide</h6>
      <h2>When <span>to Replace Window?</span></h2>
      <p style="font-size: 18px; max-width: 1200px; margin-left: auto;margin-right: auto; color: var(--font-light);"
        class="desc">Your windows may be costing you money each month if they are more than ten years old, only have
        single-pane glass, or are builder-grade windows. We install windows at Archer Exteriors that are especially
        made to offer optimal energy efficiency, enhance the appearance of your home, and raise its value without
        costing you a fortune.</p>
    </div>

    <div class="row gy-5 mt-5">
      <div class="col-xl-3 col-lg-6">
        <div class="service-block-item h-100 wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
          <div class="inner-box h-100">
            <div class="image-box">
              <?= $this->Html->image('window-service/when-to-replace/cracked-window-frame.jpg', [
                'alt' => 'Cracked or Wrapped Frames',
                'title' => 'Cracked or Wrapped Frames'
              ]) ?>
            </div>
            <div class="lower-content">
              <div class="icon-box">
                <?= $this->Html->image('window-service/window-replace.svg', [
                  'alt' => 'Cracked or Wrapped Frames',
                  'class' => 'svg'
                ]) ?>
              </div>
              <div class="shap-box"></div>
              <h3>Cracked or Wrapped Frames</h3>
              <p class="mb-0">Check for visible damage to window frames, such as cracks or warping. Over time,
                exposure to weather elements can cause structural issues, compromising the window's integrity and
                efficiency. </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="service-block-item h-100 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
          <div class="inner-box h-100">
            <div class="image-box">
              <?= $this->Html->image('window-service/when-to-replace/condensation-pane.jpg', [
                'alt' => 'Condensation Between Panes',
                'title' => 'Condensation Between Panes'
              ]) ?>
            </div>
            <div class="lower-content">
              <div class="icon-box">
                <?= $this->Html->image('window-service/window-replace.svg', [
                  'alt' => 'Condensation Between Panes',
                  'class' => 'svg'
                ]) ?>
              </div>
              <div class="shap-box"></div>
              <h3>Condensation Between Panes</h3>
              <p class="mb-0">If you notice fog or condensation between the glass panes, it's a sign that the window
                seal is failing. Not only does this impact visibility, but reduces insulation, leading to energy loss.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="service-block-item h-100 wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
          <div class="inner-box h-100">
            <div class="image-box">
              <?= $this->Html->image('window-service/when-to-replace/difficulty-opening.jpg', [
                'alt' => 'Difficulty Opening/Closing',
                'title' => 'Difficulty Opening/Closing'
              ]) ?>
            </div>
            <div class="lower-content">
              <div class="icon-box">
                <?= $this->Html->image('window-service/window-replace.svg', [
                  'alt' => 'Difficulty Opening/Closing',
                  'class' => 'svg'
                ]) ?>
              </div>
              <div class="shap-box"></div>
              <h3>Difficulty Opening/Closing</h3>
              <p class="mb-0">Windows should open and close smoothly. If you find it difficult to operate your
                windows, it could indicate wear and tear on the moving parts. </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="service-block-item h-100 wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
          <div class="inner-box h-100">
            <div class="image-box">
              <?= $this->Html->image('window-service/when-to-replace/drafty-window.jpg', [
                'alt' => 'Drafty Windows',
                'title' => 'Drafty Windows'
              ]) ?>
            </div>
            <div class="lower-content">
              <div class="icon-box">
                <?= $this->Html->image('window-service/window-replace.svg', [
                  'alt' => 'Drafty Windows',
                  'class' => 'svg'
                ]) ?>
              </div>
              <div class="shap-box"></div>
              <h3>Drafty Windows</h3>
              <p class="mb-0">Feeling drafts around your windows is a clear sign of an air leakage. Drafts make your
                home less comfortable and contribute to increased energy costs. </p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- Visual Guide Section End  -->


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
        <?= $this->Html->image('window-service/archer-exteriors-window-before.jpg', [
          'alt' => 'Before',
          'class' => 'img-fluid'
        ]) ?>

        <div class="before_label" data-content="Before"></div>
      </div>

      <div id="after-image">
        <?= $this->Html->image('window-service/archer-exteriors-window-after.jpg', [
          'alt' => 'After',
          'class' => 'img-fluid'
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
      <h2>Proof <span>in Every Project</span></h2>
    </div>


    <div id="roofingGallery" class="projects_gallery mt-5">
      <?= $this->Html->link(
        $this->Html->image('window-service/gallery/archer-window-project-1.jpg', [
          'alt' => 'Archer Window Project',
          'title' => 'Archer Window Project'
        ]),
        '/img/window-service/gallery/archer-window-project-1.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('window-service/gallery/archer-window-project-2.jpg', [
          'alt' => 'Archer Window Project',
          'title' => 'Archer Window Project'
        ]),
        '/img/window-service/gallery/archer-window-project-2.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('window-service/gallery/archer-window-project-3.jpg', [
          'alt' => 'Archer Window Project',
          'title' => 'Archer Window Project'
        ]),
        '/img/window-service/gallery/archer-window-project-3.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('window-service/gallery/archer-window-project-4.jpg', [
          'alt' => 'Archer Window Project',
          'title' => 'Archer Window Project'
        ]),
        '/img/window-service/gallery/archer-window-project-4.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('window-service/gallery/archer-window-project-5.jpg', [
          'alt' => 'Archer Window Project',
          'title' => 'Archer Window Project'
        ]),
        '/img/window-service/gallery/archer-window-project-5.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('window-service/gallery/archer-window-project-6.jpg', [
          'alt' => 'Archer Window Project',
          'title' => 'Archer Window Project'
        ]),
        '/img/window-service/gallery/archer-window-project-6.jpg',
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
      <?= $this->element('faq/windows') ?>
    </div>
  </div>
</section>
<!-- FAQ Section End -->

<!-- Activities section Start  -->
<section class="section light activities">
  <?= $this->element('community_impact') ?>
</section>
<!-- Activities section End  -->