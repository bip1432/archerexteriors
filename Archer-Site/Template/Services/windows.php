<?php
// Set Meta Tags
$this->set('title', 'Windows | Windows Installation | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Your trusted partner for premium windows solutions.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Windows, Windows Installation, Window Replacement, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Windows | Windows Installation | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Your trusted partner for premium windows solutions.');
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
              <h1>Competitive Pricing Through Buying Power</h1>
              <p>Our strong relationships with manufacturers mean we secure the best prices, passing the savings on to you without sacrificing quality.</p>
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
          <h2>High-Performance <span>Windows at Competitive Prices</span></h2>
        </div>

        <p class="mb-4">Upgrade your view with Archer Exteriors. We offer a wide range of window options to match your
          style and needs. From classic double-hung to sleek casement and energy-efficient Energy Star windows, find
          the perfect fit for your home.</p>
        <p>You can expect superior craftsmanship and attention to detail with our window services. We work with top
          brands like OKNA and Provia to ensure the highest quality products for our customers. Our team is skilled in
          installing various types of windows, including double-hung windows, slider windows, casement windows, bay
          and bow windows, and Energy Star windows. We have the perfect windows for you, no matter your style
          preferences or budget.</p>

        <div class="mt-4">
          <a class="theme-btn sm" href="<?= $this->Url->build(['controller' => 'Financings', 'action' => 'index']) ?>">Financing Options Available<i class="flaticon-login"></i></a>
        </div>


        <h3 class="title_3 mt-4 mb-4">Why Replace Your Windows</h3>

        <div class="box-style-two for_window mt-5">
          <div class="row gy-4">
            <div class="col-xl-4 col-lg-4 col-sm-6">
              <div class="single-item">
                <div class="inner-box">
                  <div class="content-box">
                    <div class="icon-box">
                      <div class="line" style="background-image: url(<?= $this->Url->image('line-2.png') ?>);"></div>
                      <?= $this->Html->image('window-service/why-replace/energy-efficiency.svg', [
                        'alt' => 'Energy efficiency',
                        'title' => 'Energy efficiency'
                      ]) ?>
                    </div>
                    <h3>Energy efficiency</h3>
                  </div>
                  <div class="overlay-box">
                    <div class="icon-box">
                      <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                      <?= $this->Html->image('window-service/why-replace/white/energy-efficiency.svg', [
                        'alt' => 'Energy efficiency',
                        'title' => 'Energy efficiency'
                      ]) ?>
                    </div>
                    <p>Cut your energy consumption helping to save energy and money.</p>
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
                      <?= $this->Html->image('window-service/why-replace/durability.svg', [
                        'alt' => 'Durability',
                        'title' => 'Durability'
                      ]) ?>
                    </div>
                    <h3>Durability</h3>
                  </div>
                  <div class="overlay-box">
                    <div class="icon-box">
                      <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                      <?= $this->Html->image('window-service/why-replace/white/durability.svg', [
                        'alt' => 'Durability',
                        'title' => 'Durability'
                      ]) ?>
                    </div>
                    <p>Protect your home against weather extremes. Hurricane rated windows available in Florida and the shore.</p>
                    <h3>Durability</h3>
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
                      <?= $this->Html->image('window-service/why-replace/home-value.svg', [
                        'alt' => 'Increased home value',
                        'title' => 'Increased home value'
                      ]) ?>
                    </div>
                    <h3>Increased home value</h3>
                  </div>
                  <div class="overlay-box">
                    <div class="icon-box">
                      <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                      <?= $this->Html->image('window-service/why-replace/white/home-value.svg', [
                        'alt' => 'Increased home value',
                        'title' => 'Increased home value'
                      ]) ?>
                    </div>
                    <p>Increase your home's resell value and curb appeal with upgraded windows.</p>
                    <h3>Increased home value</h3>
                  </div>
                </div>
              </div>
            </div>

          </div>
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
<!-- Types Section End  -->

<!-- Why Choose Us Section Start  -->
<section class="chooseus-section">
  <?= $this->element('why_choose_us') ?>
</section>
<!-- Why Choose Us Section End -->

<!-- Types Sec Start  -->
<section class="section light">
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
  <div class="auto-container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Our Partners</h6>
      <h2>Partnering <br> <span>With The Best</span></h2>
    </div>

    <div class="row gy-4 mt-5">
      <div class="col-lg-6">
        <div class="text-center text-lg-start">
          <?= $this->Html->link(
            $this->Html->image('window-service/partners/partner-logo-mi.png', [
              'class' => 'img-fluid',
              'alt' => 'MI Windows And Doors',
              'title' => 'MI Windows And Doors'
            ]),
            'https://miwindows.com/',
            ['escape' => false, 'target' => '_blank']
          ) ?>

          <p class="mt-4">Hurricane impact windows are made of highly reinforced glass that can withstand
            hurricane-force winds without shattering like standard glass might.</p>
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
              ['escape' => false, 'target' => '_blank']
            ) ?>
          </div>
          <div class="clients-logo-box">
            <?= $this->Html->link(
              $this->Html->image('window-service/partners/partner-logo-pro-via.png', [
                'alt' => 'ProVia',
                'title' => 'ProVia'
              ]),
              'https://www.provia.com/',
              ['escape' => false, 'target' => '_blank']
            ) ?>
          </div>
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

<!-- Before/After Section Start  -->
<section class="section before-after-gallery">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Our Work</h6>
      <h2>The Archer Touch <span>- Transformations <br> That Deliver the Wow Factor</span></h2>
    </div>

    <div id="before-after-slider">
      <div id="before-image">
        <?= $this->Html->image('siding-service/siding-before.jpg', [
          'alt' => 'Before',
          'class' => 'img-fluid'
        ]) ?>

        <div class="before_label" data-content="Before"></div>
      </div>

      <div id="after-image">
        <?= $this->Html->image('siding-service/siding-after.jpg', [
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