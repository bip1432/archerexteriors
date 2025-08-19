<?php
// Set Meta Tags
$this->set('title', 'Home Repair | Roof & Siding Repairs | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Your trusted partner for home repair and replacement services.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Repairs, Home Repair, Home Replacement, Roof & Siding Repairs, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Home Repair | Roof & Siding Repairs | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Your trusted partner for home repair and replacement services.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/services/repairs'); // TODO: Change to the current page URL
?>

<!-- banner-section -->
<section class="banner-section repairs">
  <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
    <div class="slide-item bg-left one">
      <div class="image-layer">
      </div>
      <div class="auto-container">
        <div class="row clearfix">
          <div class="col-xl-8 col-lg-12 col-md-12 content-column">
            <div class="content-box">
              <h6>Home Repair</h6>
              <h1>Quick Repairs. <br>Expert Replacements.</h1>
              <p>Leaks, missing shingles, or storm damage? Our team fixes roofing issues fast to protect your home.</p>
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
          <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-6 content-column">
            <div class="content-box">
              <h6>Home Repair</h6>
              <h1>Restore Your <br>Exterior’s Strength.</h1>
              <p>Quality siding repair that fixes cracks, warping, and weather damage, improving curb appeal.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slide-item bg-left three">
      <div class="image-layer"></div>
      <div class="auto-container">
        <div class="row clearfix">
          <div class="col-xl-8 col-lg-12 col-md-12 content-column">
            <div class="content-box">
              <h6>Home Repair</h6>
              <h1>Affordable <br>Local Repairs.</h1>
              <p>Get trusted, high-quality home repairs from local experts at prices that fit your budget.</p>
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
        <div class="sec-title mb-4">
          <h2>Experience Unmatched Quality <span>in Replacements and Repairs</span></h2>
        </div>

        <p class="mb-4">At Archer Exteriors, we provide prompt, high-quality repairs and replacements for your roof,
          siding, gutters, and decks-ensuring long-lasting durability and enhanced curb appeal. Whether you're looking
          for a complete upgrade or expert repairs, our team delivers precision craftsmanship and reliable solutions
          tailored to your home.</p>


        <div class="roof_badge mb-4">
          <span class="img">
            <?= $this->Html->image('home-white.svg', [
              'class' => 'svg',
              'alt' => 'Jobs Strength'
            ]) ?>
          </span>
          <div class="content">
            <?= $this->element('jobs_strength') ?>
          </div>
        </div>

        <h3 class="title_3 mb-2">Enhance your home's allure with our professional & reliable replacements.</h3>

        <p>When storms strike, your roof takes the hit-high winds, heavy rain, hail, and debris can cause costly
          damage. Archer Exteriors specializes in storm damage roof repair, delivering fast, reliable, and expert
          solutions to protect your home from further harm. From minor leaks to major structural damage, our team is
          ready to restore your roof's strength and durability using premium materials and precision craftsmanship.
        </p>

        <div class="mt-4">
          <a class="theme-btn sm" href="<?= $this->Url->build(['controller' => 'Financings', 'action' => 'index']) ?>">Financing Options Available<i class="flaticon-login"></i></a>
        </div>

      </div>

      <div class="col-xl-5">
        <?= $this->element('forms/form_free_estimate') ?>
      </div>
    </div>
  </div>
</section>
<!-- Start Project Section End -->

<!-- Service Types Section Start  -->
<section class="section bg_secondary">
  <div class="large-container">
    <div class="sec-title text-center light">
      <h6><i class="flaticon-roof"></i>Home Repair</h6>
      <h2>Hassle-Free <span>Solutions for Your Home's Exterior Needs</span></h2>
    </div>

    <div class="row justify-content-center gy-5 mt-5">
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
        <div class="service-block-item h-100 wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
          <div class="inner-box h-100">
            <div class="image-box">
              <?= $this->Html->image('repair-service/archer-exteriors-roof-replacement.jpg', [
                'alt' => 'Roof Replacement & Repair',
                'title' => 'Roof Replacement & Repair'
              ]) ?>
            </div>
            <div class="lower-content">
              <div class="icon-box">
                <?= $this->Html->image('services/icons/roof.svg', [
                  'class' => 'svg',
                  'alt' => 'Roof Replacement & Repair'
                ]) ?>
              </div>
              <div class="shap-box"></div>
              <h3>Roof Replacement & Repair</h3>
              <p class="mb-0">Roof replacements and roof repairs backed by an insured and experienced installation team.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
        <div class="service-block-item h-100 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
          <div class="inner-box h-100">
            <div class="image-box">
              <?= $this->Html->image('repair-service/archer-exteriors-siding-replacement.jpg', [
                'alt' => 'Siding Replacement & Repair',
                'title' => 'Siding Replacement & Repair'
              ]) ?>
            </div>
            <div class="lower-content">
              <div class="icon-box">
                <?= $this->Html->image('services/icons/siding.svg', [
                  'class' => 'svg siding',
                  'alt' => 'Siding Replacement & Repair'
                ]) ?>
              </div>
              <div class="shap-box"></div>
              <h3>Siding Replacement & Repair</h3>
              <p class="mb-0">Our top rated design & installation siding teams will provide you with a wow factor transformation!</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
        <div class="service-block-item h-100 wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
          <div class="inner-box h-100">
            <div class="image-box">
              <?= $this->Html->image('repair-service/archer-exteriors-window-replacement.jpg', [
                'alt' => 'Window Replacement',
                'title' => 'Window Replacement'
              ]) ?>
            </div>
            <div class="lower-content">
              <div class="icon-box">
                <?= $this->Html->image('services/icons/window.svg', [
                  'class' => 'svg',
                  'alt' => 'Window Replacement'
                ]) ?>
              </div>
              <div class="shap-box"></div>
              <h3>Window Replacement</h3>
              <p class="mb-0">Popular window brands installed by experienced and insured window installers.</p>
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

<!-- Causes section -->
<section class="section partner-section" style="padding-top: 255px; position: relative;">
  <div class="auto-container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Causes</h6>
      <h2>Common Causes <span>for Roof Repairs</span></h2>
      <p class="desc"
        style="font-size: 18px; max-width: 1200px; margin-left: auto;margin-right: auto; color: var(--font);">
        Identifying common causes for a roof repair can help homeowners address issues promptly and
        prevent further damage.</p>
    </div>

    <div class="box-style-two mt-5">
      <div class="row gy-4">
        <div class="col-xl-4 col-lg-4 col-sm-6">
          <div class="single-item">
            <div class="inner-box">
              <div class="content-box">
                <div class="icon-box">
                  <div class="line" style="background-image: url(<?= $this->Url->image('line-2.png') ?>);"></div>
                  <?= $this->Html->image('repair-service/causes/weather-damage.svg', [
                    'alt' => 'Weather Damage',
                    'title' => 'Weather Damage'
                  ]) ?>
                </div>
                <h3> Weather Damage</h3>
              </div>
              <div class="overlay-box">
                <div class="icon-box">
                  <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                  <?= $this->Html->image('repair-service/causes/white/weather-damage.svg', [
                    'alt' => 'Weather Damage',
                    'title' => 'Weather Damage'
                  ]) ?>
                </div>
                <p>Strong winds, hail, and heavy rain can loosen shingles and cause leaks or structural damage</p>
                <h3> Weather Damage</h3>
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
                  <?= $this->Html->image('repair-service/causes/poor-installation.svg', [
                    'alt' => 'Poor Installation',
                    'title' => 'Poor Installation'
                  ]) ?>
                </div>
                <h3>Poor Installation</h3>
              </div>
              <div class="overlay-box">
                <div class="icon-box">
                  <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                  <?= $this->Html->image('repair-service/causes/white/poor-installation.svg', [
                    'alt' => 'Poor Installation',
                    'title' => 'Poor Installation'
                  ]) ?>
                </div>
                <p>Improper techniques during roof installation can lead to leaks, weak spots, and premature failures.</p>
                <h3>Poor Installation</h3>
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
                  <?= $this->Html->image('repair-service/causes/animal-damage.svg', [
                    'alt' => 'Animal Damage',
                    'title' => 'Animal Damage'
                  ]) ?>
                </div>
                <h3>Animal Damage</h3>
              </div>
              <div class="overlay-box">
                <div class="icon-box">
                  <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                  <?= $this->Html->image('repair-service/causes/white/animal-damage.svg', [
                    'alt' => 'Animal Damage',
                    'title' => 'Animal Damage'
                  ]) ?>
                </div>
                <p>Squirrels, birds, and other animals can chew, peck, or nest on your roof, creating holes and damage.</p>
                <h3>Animal Damage</h3>
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
                  <?= $this->Html->image('repair-service/causes/flashing-home.svg', [
                    'alt' => 'Flashing Issues',
                    'title' => 'Flashing Issues'
                  ]) ?>
                </div>
                <h3>Flashing Issues</h3>
              </div>
              <div class="overlay-box">
                <div class="icon-box">
                  <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                  <?= $this->Html->image('repair-service/causes/white/flashing-home.svg', [
                    'alt' => 'Flashing Issues',
                    'title' => 'Flashing Issues'
                  ]) ?>
                </div>
                <p>Damaged or improperly installed flashing allows water to seep into vulnerable areas of your roof</p>
                <h3>Flashing Issues</h3>
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
                  <?= $this->Html->image('repair-service/causes/poor-ventilation.svg', [
                    'alt' => 'Poor Roof Ventilation',
                    'title' => 'Poor Roof Ventilation'
                  ]) ?>
                </div>
                <h3>Poor Roof Ventilation</h3>
              </div>
              <div class="overlay-box">
                <div class="icon-box">
                  <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                  <?= $this->Html->image('repair-service/causes/white/poor-ventilation.svg', [
                    'alt' => 'Poor Roof Ventilation',
                    'title' => 'Poor Roof Ventilation'
                  ]) ?>
                </div>
                <p>Inadequate ventilation traps heat and moisture, which can warp shingles and weaken your roof structure.</p>
                <h3>Poor Roof Ventilation</h3>
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
                  <?= $this->Html->image('repair-service/causes/low-quality-material.svg', [
                    'alt' => 'Low Quality Materials',
                    'title' => 'Low Quality Materials'
                  ]) ?>
                </div>
                <h3>Low Quality Materials</h3>
              </div>
              <div class="overlay-box">
                <div class="icon-box">
                  <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                  <?= $this->Html->image('repair-service/causes/white/low-quality-material.svg', [
                    'alt' => 'Low Quality Materials',
                    'title' => 'Low Quality Materials'
                  ]) ?>
                </div>
                <p>Cheaper roofing materials wear out faster, leaving your home vulnerable to leaks and costly repairs.</p>
                <h3>Low Quality Materials</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- Causes section end -->

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

<!-- Keep in Mind Section Start  -->
<section class="section">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i> Keep in Mind</h6>
      <h2>Common <span>Repair Issues</span></h2>
    </div>

    <div class="row gy-4 mt-4">
      <div class="col-lg-6 text-center align-self-center">
        <?= $this->Html->image('repair-service/coomon-issues-with-roofs.jpg', [
          'class' => 'img-fluid rad_6',
          'alt' => 'Common Issues with Roofs, Siding and Windows works',
          'title' => 'Common Issues with Roofs, Siding and Windows works'
        ]) ?>
      </div>

      <div class="col-lg-6 align-self-center">
        <!-- <h4 class="title_3 mb-3">Common Issues with Roofs, Siding and Windows works</h4> -->
        <p class="mb-3">Keeping your home exterior in good shape often means addressing small problems before they become big ones. Common repair issues we handle include damaged or missing shingles, leaks, flashing failures, and siding cracks or warping caused by weather, age, or impact. Whether it’s a minor roof repair or fixing damaged siding panels, our team knows how to restore the integrity and look of your home efficiently and professionally.</p>

        <p>While we’re experts in repairing roofing and siding, it’s important to know that we do not offer window repairs. If a window seal is broken or glass is cracked, we replace the entire unit to ensure proper function, energy efficiency, and appearance. Our goal is to provide lasting solutions that protect your home and maintain its value, so you can feel confident in every repair we complete.</p>

      </div>
    </div>

    <div class="row mt-5 gy-4 flex-lg-row-reverse">
      <div class="col-lg-6 text-center align-self-center">
        <?= $this->Html->image('repair-service/benefits-of-hiring-professional.jpg', [
          'class' => 'img-fluid rad_6',
          'alt' => 'Benefits of Hiring a Professional for Roof and Siding Repairs',
          'title' => 'Benefits of Hiring a Professional for Roof and Siding Repairs'
        ]) ?>
      </div>

      <div class="col-lg-6 align-self-center">
        <h4 class="title_3 mb-3">Benefits of Hiring a Professional for Roof and Siding Repairs</h4>
        <p class="mb-3">When it comes to roof and siding repairs, hiring a professional is highly beneficial.
          Professionals have the expertise and experience to accurately assess the issues and provide effective
          solutions. They can identify underlying problems that may not be immediately apparent and address them
          accordingly. Additionally, professionals have access to specialized equipment and materials that may not be
          readily available to homeowners.</p>

        <p class="">Another benefit of hiring a professional is the time and convenience it provides. Roof and siding
          repairs can be time-consuming and physically demanding. By hiring a professional, you can save yourself the
          hassle and ensure that the repairs are done efficiently. Professionals also have the necessary safety
          measures in place to prevent accidents and injuries during the repair process.</p>

      </div>
    </div>
  </div>
</section>
<!-- Keep in Mind Section End  -->

<!-- Project Gallery Start -->
<section class="section light completed_projects">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Work Gallery</h6>
      <h2>Proof <span>in Every Project</span></h2>
    </div>

    <div class="projects_gallery mt-5">
      <?= $this->Html->link(
        $this->Html->image('repair-service/gallery/archer-exterior-home-repair1.jpg', [
          'alt' => 'Repair Project',
          'title' => 'Repair Project'
        ]),
        '/img/repair-service/gallery/archer-exterior-home-repair1.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('repair-service/gallery/archer-exterior-home-repair2.jpg', [
          'alt' => 'Repair Project',
          'title' => 'Repair Project'
        ]),
        '/img/repair-service/gallery/archer-exterior-home-repair2.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('repair-service/gallery/archer-exterior-home-repair3.jpg', [
          'alt' => 'Repair Project',
          'title' => 'Repair Project'
        ]),
        '/img/repair-service/gallery/archer-exterior-home-repair3.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('repair-service/gallery/archer-exterior-home-repair4.jpg', [
          'alt' => 'Repair Project',
          'title' => 'Repair Project'
        ]),
        '/img/repair-service/gallery/archer-exterior-home-repair4.jpg',
        ['class' => 'gallery-item', 'data-lg-id' => 'c243f37f-563a-43b2-a311-ac8681ca984b', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('repair-service/gallery/archer-exterior-home-repair5.jpg', [
          'alt' => 'Repair Project',
          'title' => 'Repair Project'
        ]),
        '/img/repair-service/gallery/archer-exterior-home-repair5.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('repair-service/gallery/archer-exterior-home-repair6.jpg', [
          'alt' => 'Repair Project',
          'title' => 'Repair Project'
        ]),
        '/img/repair-service/gallery/archer-exterior-home-repair6.jpg',
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