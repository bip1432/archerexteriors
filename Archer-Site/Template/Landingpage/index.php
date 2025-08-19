<?php
// Set Meta Tags
$this->set('title', 'Services | Roofing, Siding, Windows | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Your trusted partner for premium roofing, siding, and window solutions.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Services | Roofing, Siding, Windows | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Your trusted partner for premium roofing, siding, and window solutions.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/services'); // TODO: Change to the current page URL
?>

<!-- banner-section -->
<section class="banner-section services">
  <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
    <div class="slide-item roofing bg-left">
      <div class="image-layer">
      </div>
      <div class="auto-container">
        <div class="row clearfix">
          <div class="col-xl-8 col-lg-12 col-md-12 content-column">
            <div class="content-box">
              <h6>Built to Last</h6>
              <h1>Roofing Done Right <br> the First Time</h1>
              <p>Local experts with over <?= YEARS_OF_EXPERIENCE ?>+ years of family-run experience.</p>
              <div class="btn-box">
                <a href="<?= $this->Url->build(['controller' => 'Services', 'action' => 'roofing']) ?>" class="theme-btn">Learn More<i class="flaticon-login"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slide-item siding">
      <div class="image-layer"></div>
      <div class="auto-container">
        <div class="row clearfix">
          <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column">
            <div class="content-box">
              <h6>Built to Protect and Impress</h6>
              <h1>Durable Siding in Styles You’ll Love</h1>
              <p>We install vinyl, fiber cement, and stone veneer using materials from James Hardie, CertainTeed, and
                Alside.</p>
              <div class="btn-box">
                <a href="<?= $this->Url->build(['controller' => 'Services', 'action' => 'siding']) ?>" class="theme-btn">Learn More<i class="flaticon-login"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="slide-item window bg-left">
      <div class="image-layer"></div>
      <div class="auto-container">
        <div class="row clearfix">
          <div class="col-xl-8 col-lg-12 col-md-12 content-column">
            <div class="content-box">
              <h6>Efficiency Meets Style</h6>
              <h1>Energy-Efficient Windows Installed Right</h1>
              <p>Choose from OKNA and ProVia windows, custom-fit for your home and expertly installed for lasting
                comfort.</p>
              <div class="btn-box">
                <a href="<?= $this->Url->build(['controller' => 'Services', 'action' => 'windows']) ?>" class="theme-btn">Learn More<i class="flaticon-login"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="slide-item door">
      <div class="image-layer"></div>
      <div class="auto-container">
        <div class="row clearfix">
          <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column">
            <div class="content-box">
              <h6>Strong First Impressions</h6>
              <h1>Doors That Welcome with Style & Security</h1>
              <p>We install premium doors, designed for durability, curb appeal, and energy savings.</p>
              <div class="btn-box">
                <a href="<?= $this->Url->build(['controller' => 'Services', 'action' => 'doors']) ?>" class="theme-btn">Learn More<i class="flaticon-login"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="slide-item deck bg-left">
      <div class="image-layer"></div>
      <div class="auto-container">
        <div class="row clearfix">
          <div class="col-xl-8 col-lg-12 col-md-12 content-column">
            <div class="content-box">
              <h6>Built for Everyday Living</h6>
              <h1>Picture It. Build It. <br>Love It</h1>
              <p>From cozy spaces to multi-level layouts, we design and build decks that bring your outdoor vision to
                life.</p>
              <div class="btn-box">
                <a href="<?= $this->Url->build(['controller' => 'Services', 'action' => 'decks']) ?>" class="theme-btn">Learn More<i class="flaticon-login"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="slide-item gutter">
      <div class="image-layer"></div>
      <div class="auto-container">
        <div class="row clearfix">
          <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column">
            <div class="content-box">
              <h6>Small Detail, Big Protection</h6>
              <h1>Seamless Gutters. Stress-Free Living</h1>
              <p>Quality gutters help prevent foundation issues, roof leaks, and landscape erosion.</p>
              <div class="btn-box">
                <a href="<?= $this->Url->build(['controller' => 'Services', 'action' => 'gutters']) ?>" class="theme-btn">Learn More<i class="flaticon-login"></i></a>
              </div>
            </div>
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

<!-- Service Types Section Start  -->
<section class="section light">
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
          <div class="service-block-item wow fadeInUp animated animated" data-wow-delay="500ms"
            data-wow-duration="1500ms">
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
</section>
<!-- Service Types Section End  -->

<!-- Archie Section Start  -->
<section class="archie_section">
  <?= $this->element('archie_section') ?>
</section>
<!-- Archie Section End  -->

<!-- Why Choose Us Section Start  -->
<section class="chooseus-section">
  <?= $this->element('why_choose_us') ?>
</section>
<!-- Why Choose Us Section End -->

<!-- clients-section -->
<section class="section clients-section text-center">
  <?= $this->element('our_partners') ?>
</section>
<!-- clients-section end -->

<!-- Working Process Section Start  -->
<section class="section working-section text-center">
  <div class="large-container">
    <div class="sec-title light">
      <h6><i class="flaticon-roof"></i>Our Process</h6>
      <h2>From Start <span>to Finish</span></h2>
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


<!-- Reviews section Start  -->
<section class="section light reviews" style="padding-top: 255px;">
  <?= $this->element('reviews') ?>
</section>
<!-- Reviews section End  -->

<!-- Brochure Section Start  -->
<section class="section brochure-section bg_secondary">
  <?= $this->element('our_brochure') ?>
</section>
<!-- Brochure Section End  -->

<!-- FAQ Section Start  -->
<section class="section faq_sec">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>FAQ</h6>
      <h2>Frequently <span>Asked Questions</span></h2>
    </div>

    <div class="faq_wrap mt-5">
      <ul class="nav nav-tabs" id="faqTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="general_tab" data-bs-toggle="tab" data-bs-target="#general_tab_pane"
            type="button" role="tab" aria-controls="general_tab_pane" aria-selected="true">GENERAL</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="roofing_tab" data-bs-toggle="tab" data-bs-target="#roofing_tab_pane"
            type="button" role="tab" aria-controls="roofing_tab_pane" aria-selected="false"
            tabindex="-1">Roofing</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="siding_tab" data-bs-toggle="tab" data-bs-target="#siding_tab_pane"
            type="button" role="tab" aria-controls="siding_tab_pane" aria-selected="false"
            tabindex="-1">Siding</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="window_tab" data-bs-toggle="tab" data-bs-target="#window_tab_pane"
            type="button" role="tab" aria-controls="window_tab_pane" aria-selected="false"
            tabindex="-1">Windows</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="door_tab" data-bs-toggle="tab" data-bs-target="#door_tab_pane" type="button"
            role="tab" aria-controls="door_tab_pane" aria-selected="false" tabindex="-1">Doors</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="deck_tab" data-bs-toggle="tab" data-bs-target="#deck_tab_pane" type="button"
            role="tab" aria-controls="deck_tab_pane" aria-selected="false" tabindex="-1">Decks</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="gutter_tab" data-bs-toggle="tab" data-bs-target="#gutter_tab_pane"
            type="button" role="tab" aria-controls="gutter_tab_pane" aria-selected="false"
            tabindex="-1">Gutters</button>
        </li>
      </ul>

      <div class="tab-content" id="faqTabContent">
        <!-- General Tab  -->
        <div class="tab-pane fade active show" id="general_tab_pane" role="tabpanel" aria-labelledby="general_tab">
          <?= $this->element('faq/general') ?>
        </div>

        <!-- Roofing Tab  -->
        <div class="tab-pane fade" id="roofing_tab_pane" role="tabpanel" aria-labelledby="roofing_tab">
          <?= $this->element('faq/roofing') ?>
        </div>

        <!-- Siding Tab  -->
        <div class="tab-pane fade" id="siding_tab_pane" role="tabpanel" aria-labelledby="siding_tab">
          <?= $this->element('faq/siding') ?>
        </div>

        <!-- Windows Tab  -->
        <div class="tab-pane fade" id="window_tab_pane" role="tabpanel" aria-labelledby="window_tab">
          <?= $this->element('faq/windows') ?>
        </div>

        <!-- Doors Tab  -->
        <div class="tab-pane fade" id="door_tab_pane" role="tabpanel" aria-labelledby="door_tab">
          <?= $this->element('faq/doors') ?>
        </div>

        <!-- Decks Tab  -->
        <div class="tab-pane fade" id="deck_tab_pane" role="tabpanel" aria-labelledby="deck_tab">
          <?= $this->element('faq/decks') ?>
        </div>

        <!-- Gutters Tab  -->
        <div class="tab-pane fade" id="gutter_tab_pane" role="tabpanel" aria-labelledby="gutter_tab">
          <?= $this->element('faq/gutters') ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- FAQ Section End  -->

<!-- Activities section Start  -->
<section class="section light activities">
  <?= $this->element('community_impact') ?>
</section>
<!-- Activities section End  -->