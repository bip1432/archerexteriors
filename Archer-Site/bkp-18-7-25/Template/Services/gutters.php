<?php
// Set Meta Tags
$this->set('title', 'Gutters | Gutter Installation | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Your trusted partner for gutter installation services.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Gutters, Gutter Installation, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Gutters | Gutter Installation | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Your trusted partner for gutter installation services.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/services/gutters'); // TODO: Change to the current page URL
?>

<!-- banner-section -->
<section class="banner-section gutter">
  <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
    <div class="slide-item one">
      <div class="image-layer">
      </div>
      <div class="auto-container">
        <div class="row clearfix">
          <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-6 content-column">
            <div class="content-box">
              <h6>Small Detail, Big Protection</h6>
              <h1>Seamless Gutters. <br>Stress-Free Living</h1>
              <p>Quality gutters help prevent foundation issues, roof leaks, and landscape erosion.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slide-item bg-left two">
      <div class="image-layer">
      </div>
      <div class="auto-container">
        <div class="row clearfix">
          <div class="col-xl-8 col-lg-12 col-md-12 content-column">
            <div class="content-box">
              <h6>Small Detail, Big Protection</h6>
              <h1>Gutter Installation and Repair You Can Trust</h1>
              <p>Protect your home from water damage with properly installed, low-maintenance gutter systems.</p>
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
              <h6>Small Detail, Big Protection</h6>
              <h1>A Smart Investment <br>for Your Home</h1>
              <p>We create gutters to fit your home perfectly, using quality materials that stand up to weather and time.</p>
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

<!-- Start Project Section Start -->
<section class="section light get_estimate" id="getFreeEstimate">
  <div class="container">
    <div class="row gx-lg-5 gy-5">
      <div class="col-xl-7 text-md-start text-center">
        <div class="sec-title mb-4">
          <h2>Understanding <span>the Importance of Gutter Services</span></h2>
        </div>

        <p class="mb-4">Clogged or overflowing gutters can lead to costly damage to your roof, siding, and foundation.
          With over 40 years of expertise, Archer Exteriors delivers top-quality gutter protection, installation, and
          repair using premium materials and expert craftsmanship.</p>

        <div class="roof_badge mb-4">
          <span class="img">
            <?= $this->Html->image('roofing-service/roof-white.svg', [
              'class' => 'svg',
              'alt' => 'Jobs Strength'
            ]) ?>
          </span>
          <div class="content">
            <?= $this->element('jobs_strength') ?>
          </div>
        </div>

        <p>Understanding the importance of gutter services is key to protecting your home. Gutters direct rainwater away from your roof, walls, and foundation, helping prevent costly water damage, mold growth, and erosion around your property. Regular cleaning, proper installation, and quality materials ensure your gutters work efficiently year-round. At Archer Exteriors, we offer seamless gutter systems, gutter guards, and expert installation to keep your home safe and dry.</p>

        <div class="mt-4">
          <a class="theme-btn sm" href="<?= $this->Url->build(['controller' => 'Financings', 'action' => 'index']) ?>">Financing Options Available<i class="flaticon-login"></i></a>
        </div>
      </div>

      <div class="col-xl-5">
        <?= $this->element('form_free_estimate') ?>
      </div>
    </div>
  </div>
</section>
<!-- Start Project Section End -->

<!-- Service Types Section Start  -->
<section class="section bg_secondary">
  <div class="large-container">
    <div class="sec-title text-center light">
      <h6><i class="flaticon-roof"></i>Gutter Issues</h6>
      <h2>When to <span>repair or replace your gutters</span></h2>
    </div>
    <div class="row justify-content-center gy-5 mt-5">
      <div class="col-xl-3 col-md-6 col-sm-8">
        <div class="service-block-item h-100 wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
          <div class="inner-box h-100">
            <div class="image-box">
              <?= $this->Html->image('gutter-service/when-to-replace/archer-gutter-service-sagging-gutters.jpg', [
                'alt' => 'Sagging Gutters',
                'title' => 'Sagging Gutters'
              ]) ?>
            </div>
            <div class="lower-content">
              <div class="icon-box">
                <?= $this->Html->image('services/icons/gutter.svg', [
                  'alt' => 'Sagging Gutters',
                  'class' => 'svg'
                ]) ?>
              </div>
              <div class="shap-box"></div>
              <h3>Sagging Gutters</h3>
              <p class="mb-0">Repair if it’s a minor issue; replace if it’s extensive or recurring.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 col-sm-8">
        <div class="service-block-item h-100 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
          <div class="inner-box h-100">
            <div class="image-box">
              <?= $this->Html->image('gutter-service/when-to-replace/archer-gutter-service-visible-cracks.jpg', [
                'alt' => 'Visible Cracks Or Holes',
                'title' => 'Visible Cracks Or Holes'
              ]) ?>
            </div>
            <div class="lower-content">
              <div class="icon-box">
                <?= $this->Html->image('services/icons/gutter.svg', [
                  'alt' => 'Visible Cracks Or Holes',
                  'class' => 'svg'
                ]) ?>
              </div>
              <div class="shap-box"></div>
              <h3>Visible Cracks Or Holes</h3>
              <p class="mb-0">Repair small cracks; replace if multiple or large.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 col-sm-8">
        <div class="service-block-item h-100 wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
          <div class="inner-box h-100">
            <div class="image-box">
              <?= $this->Html->image('gutter-service/when-to-replace/archer-gutter-service-peeling-rust.jpg', [
                'alt' => 'Peeling Paint Or Rust',
                'title' => 'Peeling Paint Or Rust'
              ]) ?>
            </div>
            <div class="lower-content">
              <div class="icon-box">
                <?= $this->Html->image('services/icons/gutter.svg', [
                  'alt' => 'Peeling Paint Or Rust',
                  'class' => 'svg'
                ]) ?>
              </div>
              <div class="shap-box"></div>
              <h3>Peeling Paint Or Rust</h3>
              <p class="mb-0">Sand, repaint, and repair small rust spots; replace if extensive rust.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 col-sm-8">
        <div class="service-block-item h-100 wow fadeInUp animated" data-wow-delay="900ms" data-wow-duration="1500ms">
          <div class="inner-box h-100">
            <div class="image-box">
              <?= $this->Html->image('gutter-service/when-to-replace/archer-gutter-service-water-damage.jpg', [
                'alt' => 'Water Damage',
                'title' => 'Water Damage'
              ]) ?>
            </div>
            <div class="lower-content">
              <div class="icon-box">
                <?= $this->Html->image('services/icons/gutter.svg', [
                  'alt' => 'Water Damage',
                  'class' => 'svg'
                ]) ?>
              </div>
              <div class="shap-box"></div>
              <h3>Water Damage</h3>
              <p class="mb-0">Repair any damaged fascia or soffit; replace gutters if damage is severe.</p>
            </div>
          </div>
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

<!-- clients-section -->
<section class="section partner-section" style="padding-top: 255px; position: relative;">
  <div class="container">
    <div class="row justify-content-center gy-4 mt-5">
      <div class="col-lg-5 align-self-center text-center">
        <?= $this->Html->image('gutter-service/gutter-guards.jpg', [
          'alt' => 'Gutter Guards',
          'title' => 'Gutter Guards'
        ]) ?>
      </div>

      <div class="col-lg-6 align-self-center text-center text-lg-start">
        <div class="sec-title">
          <h6><i class="flaticon-roof"></i>Guards</h6>
          <h2>Gutter <span>Guards</span></h2>
        </div>
        <div class="">
          <h3 class="title_3">Understanding the significance of gutter guards</h3>
          <p class="mt-3">Gutter guards protect the gutter system from damage, debris, and rust making your gutters
            last longer. Archer Exteriors recommends and installs a range of gutter guards. Your choice of make and
            model will depend on factors such as the pitch of your roof.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- clients-section end -->

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

<!-- Gutter Replace Section Start  -->
<section class="section">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i> Gutter Replace</h6>
      <h2>Minor problems <span>can lead to major damage</span></h2>
    </div>

    <div class="row gy-4 mt-4">
      <div class="col-lg-6 text-center align-self-center">
        <?= $this->Html->image('gutter-service/archer-exterior-gutter-repair.jpg', [
          'class' => 'img-fluid rad_6',
          'alt' => 'Gutter Repair',
          'title' => 'Gutter Repair'
        ]) ?>
      </div>

      <div class="col-lg-6 align-self-center">
        <h4 class="title_2 mb-4">Gutter Repair</h4>
        <p class="mb-3">Over time, gutters may develop various issues that require repair. From small leaks and loose
          gutter sections to sagging gutters and damaged downspouts, these issues can compromise the functionality of
          your gutters and put your home at risk.</p>
        <p class="mb-3">Professional gutter repair services can address these issues promptly and effectively. Experts
          can ensure that your gutters are working correctly to protect your home from water damage by repairing a ny
          leaks or damages. </p>
        <p>They can also identify any underlying problems and provide the necessary solutions to preserve
          the structural integrity of your home. With professional gutter repair, you can have peace of mind knowing
          that your gutters are in good hands and that your home is well-protected from potential water-related
          issues.</p>
      </div>
    </div>

    <div class="row mt-5 gy-4 flex-lg-row-reverse">
      <div class="col-lg-6 text-center align-self-center">
        <?= $this->Html->image('gutter-service/archer-exterior-gutter-install.jpg', [
          'class' => 'img-fluid rad_6',
          'alt' => 'Gutter Installation',
          'title' => 'Gutter Installation'
        ]) ?>
      </div>

      <div class="col-lg-6 align-self-center">
        <h4 class="title_2 mb-4">Gutter Installation</h4>
        <p class="mb-3">If you're building a new home or need to replace your existing gutters, professional gutter
          installation services are essential. Properly installed gutters ensure optimal functionality and efficient
          water drainage, preventing water damage and maintaining the structural integrity of your home.</p>
        <p class="mb-3">Experts in gutter installation have the knowledge and experience to determine the right gutter
          size, shape, and material for your specific needs. They can ensure that the gutters are securely fastened
          and adequately sloped to facilitate water flow. Additionally, professional installation can help prevent
          issues such as gutter overflow, leaks, and inadequate water drainage.</p>
        <p class="">By relying on professional gutter companies, you can have confidence in the functionality and
          durability of your gutters, providing long-lasting protection for your home.</p>
      </div>
    </div>
  </div>
</section>
<!-- Gutter Replace Section End  -->

<!-- Project Gallery Start -->
<section class="section light completed_projects">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Work Gallery</h6>
      <h2>Proof <span>in Every Project</span></h2>
    </div>

    <div class="projects_gallery mt-5">
      <?= $this->Html->link(
        $this->Html->image('gutter-service/gallery/archer-exterior-gutters-service1.jpg', [
          'alt' => 'Archer Gutter Project',
          'title' => 'Archer Gutter Project'
        ]),
        '/img/gutter-service/gallery/archer-exterior-gutters-service1.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('gutter-service/gallery/archer-exterior-gutters-service2.jpg', [
          'alt' => 'Archer Gutter Project',
          'title' => 'Archer Gutter Project'
        ]),
        '/img/gutter-service/gallery/archer-exterior-gutters-service2.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('gutter-service/gallery/archer-exterior-gutters-service3.jpg', [
          'alt' => 'Archer Gutter Project',
          'title' => 'Archer Gutter Project'
        ]),
        '/img/gutter-service/gallery/archer-exterior-gutters-service3.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('gutter-service/gallery/archer-exterior-gutters-service4.jpg', [
          'alt' => 'Archer Gutter Project',
          'title' => 'Archer Gutter Project'
        ]),
        '/img/gutter-service/gallery/archer-exterior-gutters-service4.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('gutter-service/gallery/archer-exterior-gutters-service5.jpg', [
          'alt' => 'Archer Gutter Project',
          'title' => 'Archer Gutter Project'
        ]),
        '/img/gutter-service/gallery/archer-exterior-gutters-service5.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('gutter-service/gallery/archer-exterior-gutters-service6.jpg', [
          'alt' => 'Archer Gutter Project',
          'title' => 'Archer Gutter Project'
        ]),
        '/img/gutter-service/gallery/archer-exterior-gutters-service6.jpg',
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
      <?= $this->element('faq/gutters') ?>
    </div>
  </div>
</section>
<!-- FAQ Section End -->

<!-- Activities section Start  -->
<section class="section light activities">
  <?= $this->element('community_impact') ?>
</section>
<!-- Activities section End  -->