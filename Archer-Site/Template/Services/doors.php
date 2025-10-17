<?php
// Set Meta Tags
$this->set('title', 'Door Replacement & Installation Experts | Archer Exteriors');
$this->set('metaDescription', 'Upgrade your home with durable, energy-efficient entry and patio doors. Expert installation and trusted quality — built to perform, backed by Archer.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', exterior door installation, Provia Entry Door, entry door replacement, patio door installation, sliding patio doors, French doors installation, front door installers near me, energy efficient doors, residential door replacement, home door installation services, storm doors and entry doors, custom doors for homes, door replacement company, durable exterior doors, professional door installation, Archer Exteriors doors');
$this->set('ogTitle', 'Door Replacement & Installation Experts | Archer Exteriors');
$this->set('ogDescription', 'Upgrade your home with durable, energy-efficient entry and patio doors. Expert installation and trusted quality — built to perform, backed by Archer.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/services/doors'); // TODO: Change to the current page URL
?>

<!-- banner-section -->
<section class="banner-section doors">
  <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
    <div class="slide-item one">
      <div class="image-layer">
      </div>
      <div class="auto-container">
        <div class="row clearfix">
          <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-6 content-column">
            <div class="content-box">
              <h6>Strong First Impressions</h6>
              <h1>Doors That Welcome with Style & Security</h1>
              <p>We install premium front and patio doors designed for durability, curb appeal, and energy savings.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slide-item two bg-left">
      <div class="image-layer">
      </div>
      <div class="auto-container">
        <div class="row clearfix">
          <div class="col-xl-8 col-lg-12 col-md-12 content-column">
            <div class="content-box">
              <h6>Strong First Impressions</h6>
              <h1>Brighten Your Home with Sliding Glass Doors</h1>
              <p>Enjoy natural light and easy outdoor access with smooth-gliding, durable sliding glass doors. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slide-item three">
      <div class="image-layer"></div>
      <div class="auto-container">
        <div class="row clearfix">
          <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-6 content-column">
            <div class="content-box">
              <h6>Strong First Impressions</h6>
              <h1>Custom Doors to <br>Match Your Style</h1>
              <p>Choose from options like French doors, storm doors, and fiberglass for the perfect fit.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- banner-section end -->

<!-- Statistics Section Start  -->
<section class="funfact-section pb-5 light">
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
              'src' => 'https://player.vimeo.com/video/1124821265',
              'frameborder' => '0',
              'allowfullscreen' => true,
              'webkitallowfullscreen' => true,
              'mozallowfullscreen' => true
            ]) ?>
          </div>
        </div>

        <h2 class="title_2">Doors That Make a <b> Strong First Impression</b></h2>

        <p class="mb-4">Your front door is more than just an entryway - it sets the tone for your home. Whether you're looking for classic elegance, modern design, or enhanced security, we offer a variety of high-quality entry doors to suit your style and needs.</p>

        <div class="service_key_points mt-4">
          <div id="serviceKeyPoints" class="owl-carousel owl-theme our_service service_key_points_slider">
            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/door/style-secured-door.svg', [
                  'class' => 'svg',
                  'alt' => 'Style & Security in Every Door',
                  'title' => 'Style & Security in Every Door'
                ]) ?>
              </div>
              <h4 style="font-size: 15px;">Style & Security in Every Door</h4>
            </div>

            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/door/built-for-beauty.svg', [
                  'class' => 'svg stroke_hover',
                  'alt' => 'Built for Beauty and Performance',
                  'title' => 'Built for Beauty and Performance'
                ]) ?>
              </div>
              <h4 style="font-size: 15px;">Built for Beauty and Performance</h4>
            </div>

            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/door/custom-fit.svg', [
                  'class' => 'svg',
                  'alt' => 'Custom-Fit for Your Home',
                  'title' => 'Custom-Fit for Your Home'
                ]) ?>
              </div>
              <h4 style="font-size: 15px;">Custom-Fit for Your Home</h4>
            </div>

            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/door/expertly-installed.svg', [
                  'class' => 'svg',
                  'alt' => 'Expertly Installed. Archer Guaranteed.',
                  'title' => 'Expertly Installed. Archer Guaranteed.'
                ]) ?>
              </div>
              <h4 style="font-size: 15px;">Expertly Installed. Archer Guaranteed.</h4>
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
        <?= $this->element('forms/form_free_estimate', ['formId' => '6', 'formKey' => 'doorsf8240effedf5c5231d3199d2e26158c1']) ?>
      </div>

      <div class="col-12" style="margin-top: 60px;">
        <div class="row gy-4 text-center text-xxl-start">
          <div class="col-xxl-6">
            <div class="limited_offer_banner">
              <?= $this->Html->image('golden-ticket/banner-sm/archer-exteriors-offer-banner-door-sm.jpg', [
                'class' => 'img-fluid rad_4',
                'alt' => 'Open in style -  $250 off per door',
                'title' => 'Open in style -  $250 off per door'
              ]) ?>
            </div>
          </div>

          <div class="col-xxl-6">
            <div class="door_partner_box">
              <div class="contents">
                 <?= $this->Html->image('door-service/archer-exteriors-partners-door-sm.png', [
                'class' => 'img-fluid mb-3 rad_4 d-md-none',
                'width' => '200',
                'alt' => 'Archer Exteriors Door Replacement',
                'title' => 'Archer Exteriors Door Replacement'
              ]) ?>
                <h4>Partnering With The Best</h4>
                <p>Archer Exteriors Door Replacement</p>

                <?= $this->Html->link(
                  $this->Html->image('door-service/logo-provia.png', [
                    'class' => 'logo_img',
                    'alt' => 'ProVia',
                    'title' => 'ProVia'
                  ]),
                  'https://www.provia.com/',
                  ['target' => '_blank', 'escape' => false]
                ) ?>
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
<section class="section working-section door text-center">
  <div class="large-container">
    <div class="sec-title light">
      <h6><i class="flaticon-roof"></i>Door Replacement</h6>
      <h2>Why Replace Door <span>Instead of Repair?</span></h2>
    </div>
    <div class="inner-content">
      <div class="row clearfix">
        <div class="col-xxl-3 col-md-6 col-sm-12 process-block">
          <div class="process-block-item">
            <div class="inner-box">
              <div class="icon-box">
                <span class="count-box counted">01</span>
                <div class="icon">
                  <?= $this->Html->image('door-service/style-secured-door.svg', [
                  'class' => 'img-fluid',
                  'alt' => 'Style & Security in Every Door',
                  'title' => 'Style & Security in Every Door'
                ]) ?>
                </div>
              </div>
              <div class="lower-content">
                <h3>Style & Security in Every Door</h3>
                <div class="pattern-layer"></div>
                <p>Your entryway sets the tone for your home. Archer’s expertly installed doors combine lasting craftsmanship, timeless design, and top-tier security — making every arrival feel inviting and every exit feel secure.</p>
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
                  <?= $this->Html->image('door-service/built-for-beauty.svg', [
                  'class' => 'img-fluid',
                  'alt' => 'Built for Beauty and Performance',
                  'title' => 'Built for Beauty and Performance'
                ]) ?>
                </div>
              </div>
              <div class="lower-content">
                <h3>Built for Beauty and Performance</h3>
                <div class="pattern-layer"></div>
                <p>From elegant entry doors to smooth-gliding patio systems, our doors are engineered to perform through every season. Enjoy superior insulation, quieter interiors, and energy efficiency that helps lower your utility costs.</p>
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
                  <?= $this->Html->image('door-service/custom-fit.svg', [
                  'class' => 'img-fluid',
                  'alt' => 'Custom-Fit for Your Home',
                  'title' => 'Custom-Fit for Your Home'
                ]) ?>
                </div>
              </div>
              <div class="lower-content">
                <h3>Custom-Fit for Your Home</h3>
                <div class="pattern-layer"></div>
                <p>No two homes are alike — and your door shouldn’t be either. We offer a wide range of materials, finishes, and glass styles to complement your home’s architecture and reflect your personal taste.</p>
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
                  <?= $this->Html->image('door-service/expertly-installed.svg', [
                  'class' => 'img-fluid',
                  'alt' => 'Expertly Installed. Archer Guaranteed.',
                  'title' => 'Expertly Installed. Archer Guaranteed.'
                ]) ?>
                </div>
              </div>
              <div class="lower-content">
                <h3>Expertly Installed. Archer Guaranteed.</h3>
                <div class="pattern-layer"></div>
                <p>Our expert installers ensure a perfect fit every time, enhancing both appearance and performance. Backed by Archer’s commitment to quality and service, your new door is built to last for years to come.</p>
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


<!-- Expertise Section Start  -->
<section class="section bg_secondary ">
  <div class="container">
    <div class="sec-title text-center light">
      <h6><i class="flaticon-roof"></i>Our expertise</h6>
      <h2>Doors That <span>Welcome You Home</span></h2>
    </div>

    <div class="row g-5 gy-5 text-center text-lg-start">
      <div class="col-lg-6 align-self-center">
        <div class="wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms">
          <h3 class="title_3 mb-4 text-white">Explore secure options from entry doors to patio sliding doors.</h3>
          <p style="color: var(--font-light);">We offer a wide range of doors to match your home’s style and needs. From elegant entry doors that make a statement to storm doors that add protection, our team helps you choose the perfect fit.</p>
          <p style="color: var(--font-light);" class="my-4">Our experts handle every detail of installation with care and precision. We ensure your doors operate smoothly, seal properly, and enhance your home’s energy efficiency and security.</p>
          <p style="color: var(--font-light);">At Archer Exteriors, we focus on quality service and clear communication. We’re here to answer your questions, share options, and make your door replacement project easy and stress-free.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="wow fadeInRight animated" data-wow-delay="300ms" data-wow-duration="1500ms">
          <?= $this->Html->image('door-service/archer-door-services.jpg', [
            'class' => 'img-fluid rad_4',
            'alt' => 'Top-notch Door Services',
            'title' => 'Top-notch Door Services'
          ]) ?>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- Types Section End  -->


<!-- Reviews section Start  -->
<section class="section light reviews">
  <?= $this->element('reviews') ?>
</section>
<!-- Reviews section End  -->

<!-- Archie Section Start  -->
<section class="archie_section">
  <?php echo $this->element('archie_section') ?>
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
        <?= $this->Html->image('door-service/archer-door-before.jpg', [
          'alt' => 'Before',
          'class' => 'img-fluid'
        ]) ?>
        <div class="before_label" data-content="Before"></div>
      </div>

      <div id="after-image">
        <?= $this->Html->image('door-service/archer-door-after.jpg', [
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
        $this->Html->image('door-service/gallery/archer-door-project-1.jpg', [
          'alt' => 'Archer Door Project',
          'title' => 'Archer Door Project'
        ]),
        '/img/door-service/gallery/archer-door-project-1.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('door-service/gallery/archer-door-project-2.jpg', [
          'alt' => 'Archer Door Project',
          'title' => 'Archer Door Project'
        ]),
        '/img/door-service/gallery/archer-door-project-2.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('door-service/gallery/archer-door-project-3.jpg', [
          'alt' => 'Archer Door Project',
          'title' => 'Archer Door Project'
        ]),
        '/img/door-service/gallery/archer-door-project-3.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('door-service/gallery/archer-door-project-4.jpg', [
          'alt' => 'Archer Door Project',
          'title' => 'Archer Door Project'
        ]),
        '/img/door-service/gallery/archer-door-project-4.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('door-service/gallery/archer-door-project-5.jpg', [
          'alt' => 'Archer Door Project',
          'title' => 'Archer Door Project'
        ]),
        '/img/door-service/gallery/archer-door-project-5.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('door-service/gallery/archer-door-project-6.jpg', [
          'alt' => 'Archer Door Project',
          'title' => 'Archer Door Project'
        ]),
        '/img/door-service/gallery/archer-door-project-6.jpg',
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

<!-- Activities section Start  -->
<section class="section light activities">
  <?= $this->element('community_impact') ?>
</section>
<!-- Activities section End  -->