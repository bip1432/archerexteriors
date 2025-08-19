<?php
// Set Meta Tags
$this->set('title', 'Exterior Door Installation & Replacement | Secure & Stylish | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Your trusted partner for premium doors solutions.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Doors, Doors Installation, Door Replacement, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Exterior Door Installation & Replacement | Secure & Stylish | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Your trusted partner for premium doors solutions.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/door-service'); // TODO: Change to the current page URL
?>

<!-- banner-section -->
<section class="page_hero_v2 lp door bg_right">
  <div class="inner_content">
    <div class="image-layer">
    </div>
    <?= $this->Html->image('landing-pages/door/archer-exteriors-hero-banner-doors-mobile.jpg', [
      'class' => 'img-fluid d-lg-none mb-4',
      'alt' => 'Doors That Welcome with Style & Security',
      'title' => 'Doors That Welcome with Style & Security'
    ]) ?>
    <div class="auto-container">
      <div class="row clearfix">
        <div class="col-lg-7 col-md-12 offset-lg-5 content-column">
          <div class="content-box">
            <h1>Doors That Welcome with Style & Security</h1>
            <p class="mb-0">We install premium front and patio doors designed for durability, curb appeal, and energy
              savings.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- banner-section end -->

<!-- Statistics Section Start  -->
<section class="funfact-section light pb-5">
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
        <div class="sec-title mb-4">
          <h2>Doors That Make <span>a Strong First Impression</span></h2>
        </div>

        <p class="mb-4">Your front door is more than just an entryway - it sets the tone for your home. Whether you're
          looking for classic elegance, modern design, or enhanced security, we offer a variety of high-quality entry
          doors to suit your style and needs.</p>

        <p>Explore our selection of high-quality entry doors, meticulously created for exceptional structural
          integrity, security, and energy efficiency. Our doors provide peace of mind, ensuring your home remains safe
          and comfortable while reducing energy costs. With a focus on sophistication and style, choose from a wide
          variety of options to suit your preferences. Trust us to enhance your home's entryway with
          professional-grade solutions.</p>

        <div class="mt-4">
          <a class="theme-btn sm" href="<?= $this->Url->build(['controller' => 'Financings', 'action' => 'index']) ?>">Financing Options Available<i class="flaticon-login"></i></a>
        </div>

        <h3 class="title_3 mt-4 mb-4">Why Replace Your Doors</h3>

        <div class="box-style-two for_window mt-5">
          <div class="row gy-4">
            <div class="col-xl-4 col-lg-4 col-sm-6">
              <div class="single-item">
                <div class="inner-box">
                  <div class="content-box">
                    <div class="icon-box">
                      <div class="line" style="background-image: url(<?= $this->Url->image('line-2.png') ?>);"></div>
                      <?= $this->Html->image('door-service/why-replace/energy-efficient.svg', [
                        'alt' => 'Energy efficiency',
                        'title' => 'Energy efficiency'
                      ]) ?>
                    </div>
                    <h3>Energy efficiency</h3>
                  </div>
                  <div class="overlay-box">
                    <div class="icon-box">
                      <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                      <?= $this->Html->image('door-service/why-replace/white/energy-efficient.svg', [
                        'alt' => 'Energy efficiency',
                        'title' => 'Energy efficiency'
                      ]) ?>
                    </div>
                    <p>Enjoy peace of mind with advanced locking mechanisms and sturdy materials.</p>
                    <h3>Energy efficiency</h3>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-sm-6">
              <div class="single-item">
                <div class="inner-box">
                  <div class="content-box">
                    <div class="icon-box">
                      <div class="line" style="background-image: url(<?= $this->Url->image('line-2.png') ?>);"></div>
                      <?= $this->Html->image('door-service/why-replace/enhance-security.svg', [
                        'alt' => 'Enhanced Security',
                        'title' => 'Enhanced Security'
                      ]) ?>
                    </div>
                    <h3>Enhanced Security</h3>
                  </div>
                  <div class="overlay-box">
                    <div class="icon-box">
                      <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                      <?= $this->Html->image('door-service/why-replace/white/enhance-security.svg', [
                        'alt' => 'Enhanced Security',
                        'title' => 'Enhanced Security'
                      ]) ?>
                    </div>
                    <p>Replace your door to improve insulation, reduce energy consumption, and lower utility bills.</p>
                    <h3>Enhanced Security</h3>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-sm-6">
              <div class="single-item">
                <div class="inner-box">
                  <div class="content-box">
                    <div class="icon-box">
                      <div class="line" style="background-image: url(<?= $this->Url->image('line-2.png') ?>);"></div>
                      <?= $this->Html->image('door-service/why-replace/crub-appeal.svg', [
                        'alt' => 'Increased Curb Appeal',
                        'title' => 'Increased Curb Appeal'
                      ]) ?>
                    </div>
                    <h3>Increased Curb Appeal</h3>
                  </div>
                  <div class="overlay-box">
                    <div class="icon-box">
                      <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                      <?= $this->Html->image('door-service/why-replace/white/crub-appeal.svg', [
                        'alt' => 'Increased Curb Appeal',
                        'title' => 'Increased Curb Appeal'
                      ]) ?>
                    </div>
                    <p>Choose from various styles, finishes, and decorative features to complement your home's architecture.</p>
                    <h3>Increased Curb Appeal</h3>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

      <div class="col-xl-5">
        <?= $this->element('forms/form_free_estimate', ['formId' => '24', 'formKey' => 'lpdoor7b4f073c06fd7dcd561c733cc232b9de']) ?>
      </div>
    </div>
  </div>
</section>
<!-- Start Project Section End -->

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
          <h3 class="title_3 mb-4 text-white">Explore secure options from entry doors to storm and sliding glass doors.</h3>
          <p style="color: var(--font-light);">We offer a wide range of doors to match your home’s style and needs. From elegant entry doors that make a statement to storm doors that add protection, our team helps you choose the perfect fit.</p>
          <p style="color: var(--font-light);" class="my-4">Our experts handle every detail of installation with care and precision. We ensure your doors operate smoothly, seal properly, and enhance your home’s energy efficiency and security.</p>
          <p style="color: var(--font-light);">At Archer Exteriors, we focus on quality service and clear communication. We’re here to answer your questions, share options, and make your door replacement project easy and stress-free.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="wow fadeInRight animated" data-wow-delay="300ms" data-wow-duration="1500ms">
          <?= $this->Html->image('door-service/archer-door-services.jpg', [
            'alt' => 'Top-notch Door Services',
            'title' => 'Top-notch Door Services'
          ]) ?>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- Types Section End  -->

<!-- Why Choose Us Section Start  -->
<section class="chooseus-section">
  <?= $this->element('why_choose_us') ?>
</section>
<!-- Why Choose Us Section End -->

<!-- Working Process Section Start  -->
<section class="section working-section text-center">
  <div class="large-container">
    <div class="sec-title light">
      <h6><i class="flaticon-roof"></i>How it’s Work</h6>
      <h2>Standard <span>Working Process</span></h2>
    </div>
    <div class="inner-content">
      <div class="row clearfix">
        <div class="col-xxl-3 col-md-6 col-sm-12 process-block">
          <div class="process-block-item">
            <div class="inner-box">
              <div class="icon-box">
                <span class="count-box counted">01</span>
                <div class="icon"><i class="flaticon-consulting"></i></div>
              </div>
              <div class="lower-content">
                <h3>Initial Consultation</h3>
                <div class="pattern-layer"></div>
                <p>Your journey with Archer Exteriors begins with a call to our experienced Customer Service
                  Representative. During this initial consultation, we will discuss your project goals and schedule a
                  free estimate.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xxl-3 col-md-6 col-sm-12 process-block">
          <div class="process-block-item">
            <div class="inner-box">
              <div class="icon-box">
                <span class="count-box counted">02</span>
                <div class="icon"><i class="flaticon-paper"></i></div>
              </div>
              <div class="lower-content">
                <h3>On-Site Assessment</h3>
                <div class="pattern-layer"></div>
                <p>Our professionals visit your property to evaluate the project, take necessary measurements, and
                  understand your specific needs. This detailed assessment allows us to go over product choices,
                  colors, and more while providing an accurate estimate with an exact price while at your home. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xxl-3 col-md-6 col-sm-12 process-block">
          <div class="process-block-item">
            <div class="inner-box">
              <div class="icon-box">
                <span class="count-box counted">03</span>
                <div class="icon"><i class="flaticon-steel"></i></div>
              </div>
              <div class="lower-content">
                <h3> Project Execution</h3>
                <div class="pattern-layer"></div>
                <p>Once the plan is set, our dedicated supervisor for your area oversees the entire project. From
                  material procurement to installation, every detail is managed meticulously to ensure high-quality
                  results.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xxl-3 col-md-6 col-sm-12 process-block">
          <div class="process-block-item">
            <div class="inner-box">
              <div class="icon-box">
                <span class="count-box counted">04</span>
                <div class="icon"><i class="flaticon-parcel"></i></div>
              </div>
              <div class="lower-content">
                <h3>Final Inspection and Approval</h3>
                <div class="pattern-layer"></div>
                <p>Upon completion, we conduct a thorough inspection to ensure the work meets our high standards and
                  your expectations. We walk you through the finished project, ensuring you are completely satisfied
                  with the results.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Working Process Section End  -->

<!-- Golden Ticket Section Start  -->
<section class="section" style="padding-top: 255px; position: relative;">
  <div class="container">
    <?= $this->element('golden_ticket') ?>
  </div>
</section>
<!-- Golden Ticket Section End  -->

<!-- clients-section -->
<section class="section light partner-section">
  <div class="auto-container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Our Partners</h6>
      <h2>Partnering <br> <span>With The Best</span></h2>
    </div>

    <div class="row gy-4 mt-5">
      <div class="col-lg-6">
        <div class="text-center text-lg-start">
          <h3 class="title_3">Archer Door Replacement</h3>

          <p class="mt-3">Elevate your home with high-quality entry doors designed for strength, security, and energy
            efficiency. Crafted with sophistication and style, our selection offers the perfect blend of durability
            and elegance to match your needs.</p>
        </div>
      </div>

      <div class="col-lg-6 align-self-center">
        <div class="partner-wrap align-items-center">
          <div class="clients-logo-box">
            <?= $this->Html->link(
              $this->Html->image('window-service/partners/partner-logo-okna.png', [
                'alt' => 'OKNA',
                'title' => 'OKNA'
              ]),
              'https://www.oknawindows.com/',
              ['target' => '_blank', 'escape' => false]
            ) ?>
          </div>
          <div class="clients-logo-box">
            <?= $this->Html->link(
              $this->Html->image('window-service/partners/partner-logo-pro-via.png', [
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
</section>
<!-- clients-section end -->

<!-- Archie Section Start  -->
<section class="archie_section">
  <?php echo $this->element('archie_section') ?>
</section>
<!-- Archie Section End  -->

<!-- Reviews section Start  -->
<section class="section light reviews">
  <?= $this->element('reviews') ?>
</section>
<!-- Reviews section End  -->

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

<!-- Activities section Start  -->
<section class="section activities">
  <?= $this->element('community_impact') ?>
</section>
<!-- Activities section End  -->