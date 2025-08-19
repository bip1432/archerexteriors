<?php
// Set Meta Tags
$this->set('title', 'Get a Free Estimate | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Get a Free Estimate');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Get a Free Estimate, Archer Exteriors');
$this->set('ogTitle', 'Get a Free Estimate | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Get a Free Estimate');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/get-estimate');
?>

<!-- Hero-section -->
<section class="page_hero get_estimate">
  <div class="auto-container">
    <div class="contents text-center">
      <h1 class="title">Get A Free Estimate</h1>
      <p class="desc">Start with a Free Estimate. Finish with a Home You’ll Love — No Surprises, Just Transparent Estimates and Quality Work.</p>
    </div>
  </div>
</section>
<!-- Hero-section end -->

<!-- Statistics Section Start  -->
<section class="funfact-section light">
  <?= $this->element('company_statistics') ?>
</section>
<!-- Statistics Section End  -->


<!-- Start Project Section Start -->
<section class="section light get_estimate" id="getFreeEstimate">
  <div class="container">
    <div class="row gx-lg-5 gy-5">
      <div class="col-lg-7 text-md-start text-center">
        <!-- <div class="sec-title mb-2">
            <h2>Archer Exterior’s <span>New Construction</span></h2>
          </div> -->

        <div class="archie_circle_badge justify-content-center justify-content-md-start my-4">
          <div class="image">
            <?= $this->Html->image('about/about-badge.png', ['alt' => 'about-badge', 'class' => 'rotate-me']) ?>
            <?= $this->Html->image('about/archie.png', ['alt' => 'archie', 'class' => 'archie']) ?>
          </div>
          <div class="content">
            <h4><?= YEARS_OF_EXPERIENCE ?> Years of Excellence. <br> A Legacy of Trust.</h4>
          </div>
        </div>

        <p>For over <?= YEARS_OF_EXPERIENCE ?> years, Archer Exteriors has been at the forefront of the remodeling industry, setting new
          standards in quality, craftsmanship, and customer care. Founded on the principles of integrity, exceptional
          work, and fair pricing, we remain committed to exceeding expectations-one project at a time.</p>


        <div class="roof_badge my-4">
          <span class="img">
            <?= $this->Html->image('home-white.svg', ['alt' => 'home-white', 'class' => 'svg']) ?>
          </span>
          <div class="content">
            <?= $this->element('jobs_strength') ?>
          </div>
        </div>

        <p>What started as a small roofing and siding business in South Jersey has grown into a nationwide leader in
          home renovations. Tom Archer, our founder and visionary, built this company with a relentless dedication to
          superior workmanship and 100% client satisfaction.</p>

        <p class="mt-3">His deep expertise-spanning contractors, homeowners, suppliers, and estimators-has fueled
          Archer Exteriors' expansion, reaching communities from the mountains of Colorado to the Florida Panhandle.
          Through decades of experience and a deep understanding of industry regulations and best practices, Tom has
          shaped Archer Exteriors into a trusted name in roofing, siding, gutters, and remodeling. His commitment to
          excellence drives us forward as we continue to serve homeowners with unparalleled service and expert
          craftsmanship.</p>
      </div>

      <div class="col-lg-5">
        <?= $this->element('forms/form_free_estimate') ?>
      </div>
    </div>
  </div>
</section>
<!-- Start Project Section End -->

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

<!-- Service Types Section Start  -->
<section class="section light" style="padding-top: 255px; position: relative;">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Our Services</h6>
      <h2>Expert Exterior Services <br> <span>With a Local Touch And National Presence.</span></h2>
    </div>

    <div class="service_types_wrap">
      <div class="row justify-content-center gy-5 mt-5">
        <div class="col-xl-4 col-md-6 col-sm-8">
          <div class="service-block-item wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
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
          <div class="service-block-item wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
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
          <div class="service-block-item wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
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
          <div class="service-block-item wow fadeInUp animated" data-wow-delay="900ms" data-wow-duration="1500ms">
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
          <div class="service-block-item wow fadeInUp animated" data-wow-delay="1200ms" data-wow-duration="1500ms">
            <div class="inner-box">
              <div class="image-box">
                <?= $this->Html->link(
                  $this->Html->image('services/archer-exteriors-decks.jpg', [
                    'alt' => 'Deck Service',
                    'title' => 'Deck Service'
                  ]),
                  ['controller' => 'Services', 'action' => 'decks'],
                  ['escape' => false]
                ) ?>
              </div>
              <div class="lower-content">
                <div class="icon-box">
                  <?= $this->Html->image('services/icons/deck.svg', [
                    'class' => 'svg',
                    'alt' => 'Deck Service'
                  ]) ?>
                </div>
                <div class="shap-box"></div>
                <h3><?= $this->Html->link('Decks', ['controller' => 'Services', 'action' => 'decks']) ?></h3>
                <p>Create a beautiful, functional outdoor space with a custom-built deck. We use long-lasting, low-maintenance materials for every lifestyle. Enjoy a space made for relaxing, entertaining, and everything in between.</p>
                <div class="link">
                  <?= $this->Html->link(
                    'Get Started<i class="flaticon-login"></i>',
                    ['controller' => 'Services', 'action' => 'decks'],
                    ['escape' => false]
                  ) ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-md-6 col-sm-8">
          <div class="service-block-item wow fadeInUp animated" data-wow-delay="1500ms" data-wow-duration="1500ms">
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
        <div class="col-xl-4 col-md-6 col-sm-8">
          <div class="service-block-item wow fadeInUp  animated" data-wow-delay="700ms"
            data-wow-duration="1500ms">
            <div class="inner-box">
              <div class="image-box">
                <?= $this->Html->link(
                  $this->Html->image('services/archer-exteriors-fascia-soffit.jpg', [
                    'alt' => 'Fascia and Soffit',
                    'title' => 'Fascia and Soffit'
                  ]),
                  ['controller' => 'Services', 'action' => 'otherServices'],
                  ['escape' => false]
                ) ?>
              </div>
              <div class="lower-content">
                <div class="icon-box">
                  <?= $this->Html->image('services/icons/fascia-soffit.svg', [
                    'class' => 'svg',
                    'alt' => 'Fascia and Soffit'
                  ]) ?>
                </div>
                <div class="shap-box"></div>
                <h3><?= $this->Html->link('Fascia and Soffit', ['controller' => 'Services', 'action' => 'otherServices']) ?></h3>
                <p>Fascia and soffit installation protects the roof structure and improves ventilation in the attic. Fascia boards run along the roof edge and support gutters, while soffits cover the underside of roof overhangs. Together, they enhance curb appeal and defend against moisture and pests.</p>
                <div class="link">
                  <?= $this->Html->link(
                    'Get Started<i class="flaticon-login"></i>',
                    ['controller' => 'Services', 'action' => 'otherServices'],
                    ['escape' => false]
                  ) ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-md-6 col-sm-8">
          <div class="service-block-item wow fadeInUp animated" data-wow-delay="800ms"
            data-wow-duration="1500ms">
            <div class="inner-box">
              <div class="image-box">
                <?= $this->Html->link(
                  $this->Html->image('services/archer-exteriors-flashing-trim.jpg', [
                    'alt' => 'Flashing and Trim',
                    'title' => 'Flashing and Trim'
                  ]),
                  ['controller' => 'Services', 'action' => 'otherServices'],
                  ['escape' => false]
                ) ?>
              </div>
              <div class="lower-content">
                <div class="icon-box">
                  <?= $this->Html->image('services/icons/flashing-trim.svg', [
                    'class' => 'svg',
                    'alt' => 'Flashing and Trim'
                  ]) ?>
                </div>
                <div class="shap-box"></div>
                <h3><?= $this->Html->link('Flashing and Trim', ['controller' => 'Services', 'action' => 'otherServices']) ?></h3>
                <p>Flashing and trim are essential for directing water away from critical areas of a roof, such as valleys, chimneys, and vents. Proper installation prevents leaks and prolongs the life of your roofing system. Trim adds a finished look while providing additional protection at edges and corners.</p>
                <div class="link">
                  <?= $this->Html->link(
                    'Get Started<i class="flaticon-login"></i>',
                    ['controller' => 'Services', 'action' => 'otherServices'],
                    ['escape' => false]
                  ) ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-md-6 col-sm-8">
          <div class="service-block-item wow fadeInUp animated" data-wow-delay="900ms"
            data-wow-duration="1500ms">
            <div class="inner-box">
              <div class="image-box">
                <?= $this->Html->link(
                  $this->Html->image('services/archer-exteriors-skylight.jpg', [
                    'alt' => 'Skylight',
                    'title' => 'Skylight'
                  ]),
                  ['controller' => 'Services', 'action' => 'otherServices'],
                  ['escape' => false]
                ) ?>
              </div>
              <div class="lower-content">
                <div class="icon-box">
                  <?= $this->Html->image('services/icons/skylight.svg', [
                    'class' => 'svg',
                    'alt' => 'Skylight'
                  ]) ?>
                </div>
                <div class="shap-box"></div>
                <h3><?= $this->Html->link('Skylight', ['controller' => 'Services', 'action' => 'otherServices']) ?></h3>
                <p>Skylight installation involves cutting an opening in the roof and securely fitting a window unit to bring natural light into your space. A properly installed skylight is sealed to prevent leaks and improve energy efficiency. It enhances indoor brightness and can increase property value.</p>
                <div class="link">
                  <?= $this->Html->link(
                    'Get Started<i class="flaticon-login"></i>',
                    ['controller' => 'Services', 'action' => 'otherServices'],
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
  </div>
</section>
<!-- Types Section End  -->


<!-- Why Choose Us Section Start  -->
<section class="chooseus-section">
  <?= $this->element('why_choose_us') ?>
</section>
<!-- Why Choose Us Section End -->


<!-- Archie Section Start  -->
<section class="archie_section">
  <?= $this->element('archie_section') ?>
</section>
<!-- Archie Section End  -->

<!-- Benefits Section Start  -->
<section class="section">
  <div class="container">
    <div class="row gy-5">
      <div class="col-xl-6 col-md-12 align-self-center text-center text-xl-left">
        <?= $this->Html->image('get-estimate/benefits-of-hiring-archer-team.jpg', [
          'class' => 'rad_4',
          'alt' => 'Benefits of Hiring an expert  Professional from Archer team',
          'title' => 'Benefits of Hiring an expert  Professional from Archer team'
        ]) ?>
      </div>

      <div class="col-xl-6 col-md-12 align-self-center">
        <div class="sec-title mb-4">
          <h6><i class="flaticon-roof"></i>Benefits</h6>
          <h2>Benefits of <span> Hiring an expert Professional from Archer team</span></h2>
        </div>
        <p class="mt-3">When it comes to roof and siding repairs, hiring a professional is highly beneficial.
          Professionals have the expertise and experience to accurately assess the issues and provide effective
          solutions. They can identify underlying problems that may not be immediately apparent and address them
          accordingly. Additionally, professionals have access to specialized equipment and materials that may not be
          readily available to homeowners.</p>
      </div>

    </div>
  </div>
</section>
<!-- Benefits Section End  -->

<!-- Reviews section Start  -->
<section class="section light reviews">
  <?= $this->element('reviews') ?>
</section>
<!-- Reviews section End  -->

<!-- clients-section -->
<section class="section clients-section text-center">
  <?= $this->element('our_partners') ?>
</section>
<!-- clients-section end -->

<!-- Finance Section Start  -->
<section class="section light finance_options_sec">
  <?= $this->element('finance_section') ?>
</section>
<!-- Finance Section End  -->