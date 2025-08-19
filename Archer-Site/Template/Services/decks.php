<?php
// Set Meta Tags
$this->set('title', 'Decks | Custom Decks Installed | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Your trusted partner for premium deck solutions.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Decks, Custom Decks Installed, Deck Installation, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Decks | Custom Decks Installed | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Your trusted partner for premium deck solutions.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/services/decks'); // TODO: Change to the current page URL
?>

<!-- banner-section -->
<section class="banner-section decks">
  <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
    <div class="slide-item one bg-left">
      <div class="image-layer">
      </div>
      <div class="auto-container">
        <div class="row clearfix">
          <div class="col-xl-8 col-lg-12 col-md-12 content-column">
            <div class="content-box">
              <h6>Built for Everyday Living</h6>
              <h1>Picture It. Build It. <br>Love It</h1>
              <p>From cozy spaces to multi-level layouts, we design and build decks that bring your outdoor vision to
                life.</p>
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
              <h6>Built for Everyday Living</h6>
              <h1>Expert Installation <br>You Can Trust</h1>
              <p>Our skilled team ensures precise construction, safety, and a flawless finish for your new deck.</p>
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
              <h6>Built for Everyday Living</h6>
              <h1>Custom Decks Made <br>for Comfort and Style</h1>
              <p>Choose from durable wood, composite, or PVC decking for a beautiful surface that stands up to the elements.</p>
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
          <h2>Custom Decks <span>Designed For Everyday Living</span></h2>
        </div>

        <p class="mb-4">A well-built deck adds more than just square footage to your home. It creates a space for
          relaxing, entertaining, and enjoying the outdoors in comfort. At Archer Exteriors, we design and install
          custom decks that fit your lifestyle and enhance your property. Our team brings the experience and attention
          to detail your project deserves.</p>

        <p>We use high-quality, low-maintenance materials that offer long-lasting performance and style. From
          composite options to traditional wood finishes, every deck is tailored to meet your needs and blend with
          your home's exterior. We aim to create a space that feels like a natural extension of your home and gives
          you years of worry-free enjoyment.</p>

        <div class="mt-4">
          <a class="theme-btn sm" href="<?= $this->Url->build(['controller' => 'Financings', 'action' => 'index']) ?>">Financing Options Available<i class="flaticon-login"></i></a>
        </div>

        <h3 class="title_3 mt-4 mb-4">Why us for decks service?</h3>

        <div class="box-style-two for_window mt-5">
          <div class="row gy-4 justify-content-center justify-content-md-start">
            <div class="col-xl-4 col-lg-4 col-sm-6">
              <div class="single-item">
                <div class="inner-box">
                  <div class="content-box">
                    <div class="icon-box">
                      <div class="line" style="background-image: url(<?= $this->Url->image('line-2.png') ?>);"></div>
                      <?= $this->Html->image('deck-service/why-replace/weather-proof.svg', [
                        'alt' => 'Weatherproof decking material',
                        'title' => 'Weatherproof decking material'
                      ]) ?>
                    </div>
                    <h3>Weatherproof Decking Material</h3>
                  </div>
                  <div class="overlay-box">
                    <div class="icon-box">
                      <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                      <?= $this->Html->image('deck-service/why-replace/white/weather-proof.svg', [
                        'style' => 'width: 44px',
                        'alt' => 'Weatherproof decking material',
                        'title' => 'Weatherproof decking material'
                      ]) ?>
                    </div>
                    <p>Enjoy durable, low-maintenance decks that stand up to sun, rain, and snow.</p>
                    <h3>Weatherproof decking material</h3>
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
                      <?= $this->Html->image('deck-service/why-replace/custumer-satisfaction.svg', [
                        'alt' => 'Customer Satisfaction',
                        'title' => 'Customer Satisfaction'
                      ]) ?>
                    </div>
                    <h3>Customer Satisfaction</h3>
                  </div>
                  <div class="overlay-box">
                    <div class="icon-box">
                      <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                      <?= $this->Html->image('deck-service/why-replace/white/custumer-satisfaction.svg', [
                        'style' => 'width: 44px',
                        'alt' => 'Customer Satisfaction',
                        'title' => 'Customer Satisfaction'
                      ]) ?>
                    </div>
                    <p>We’re dedicated to delivering a smooth experience and a deck you’ll love.</p>
                    <h3>Customer Satisfaction</h3>
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
                      <?= $this->Html->image('deck-service/why-replace/expert-installation.svg', [
                        'alt' => 'Expert Installation',
                        'title' => 'Expert Installation'
                      ]) ?>
                    </div>
                    <h3>Expert Installation</h3>
                  </div>
                  <div class="overlay-box">
                    <div class="icon-box">
                      <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                      <?= $this->Html->image('deck-service/why-replace/white/expert-installation.svg', [
                        'style' => 'width: 44px',
                        'alt' => 'Expert Installation',
                        'title' => 'Expert Installation'
                      ]) ?>
                    </div>
                    <p>Our skilled team ensures precise, high-quality craftsmanship for lasting results.</p>
                    <h3>Expert Installation</h3>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

      <div class="col-xl-5">
        <?= $this->element('forms/form_free_estimate', ['formId' => '7', 'formKey' => 'decksdec54d8e44fd3e0c1c62bb1e680cc7b5']) ?>
      </div>
    </div>
  </div>
</section>
<!-- Start Project Section End -->

<!-- Service Types Section Start  -->
<section class="section bg_secondary">
  <div class="large-container">
    <div class="sec-title text-center light">
      <h6><i class="flaticon-roof"></i>Types</h6>
      <h2>Types <span>of Decks</span></h2>
    </div>

    <div class="row justify-content-center gy-5 mt-5">
      <div class="col-xl-3 col-md-6 col-sm-8">
        <div class="service-block-item h-100 wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
          <div class="inner-box h-100">
            <div class="image-box">
              <?= $this->Html->image('deck-service/types/composite-deck.jpg', [
                'alt' => 'Composite Decking',
                'title' => 'Composite Decking'
              ]) ?>
            </div>
            <div class="lower-content">
              <div class="icon-box">
                <?= $this->Html->image('services/icons/deck.svg', [
                  'alt' => 'Composite Decking',
                  'class' => 'svg'
                ]) ?>
              </div>
              <div class="shap-box"></div>
              <h3>Composite Decking</h3>
              <p class="mb-0">Composite decking offers the beauty of wood with incredible durability and minimal upkeep. It resists fading, staining, and splintering, making it perfect for busy outdoor spaces.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 col-sm-8">
        <div class="service-block-item h-100 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
          <div class="inner-box h-100">
            <div class="image-box">
              <?= $this->Html->image('deck-service/types/wooden-deck.jpg', [
                'alt' => 'Wood Decking',
                'title' => 'Wood Decking'
              ]) ?>
            </div>
            <div class="lower-content">
              <div class="icon-box">
                <?= $this->Html->image('services/icons/deck.svg', [
                  'alt' => 'Wood Decking',
                  'class' => 'svg'
                ]) ?>
              </div>
              <div class="shap-box"></div>
              <h3>Wood Decking</h3>
              <p class="mb-0">Wood decking brings timeless charm and a natural feel to your backyard. It can be stained or painted in endless colors to match your style.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 col-sm-8">
        <div class="service-block-item h-100 wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
          <div class="inner-box h-100">
            <div class="image-box">
              <?= $this->Html->image('deck-service/types/cedar-deck.jpg', [
                'alt' => 'Cedar Decking',
                'title' => 'Cedar Decking'
              ]) ?>
            </div>
            <div class="lower-content">
              <div class="icon-box">
                <?= $this->Html->image('services/icons/deck.svg', [
                  'alt' => 'Cedar Decking',
                  'class' => 'svg'
                ]) ?>
              </div>
              <div class="shap-box"></div>
              <h3>Cedar Decking</h3>
              <p class="mb-0">Cedar decking is naturally resistant to insects and decay, offering both beauty and longevity. Its warm tones and distinctive grain add elegance to any outdoor area.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 col-sm-8">
        <div class="service-block-item h-100 wow fadeInUp animated" data-wow-delay="900ms" data-wow-duration="1500ms">
          <div class="inner-box h-100">
            <div class="image-box">
              <?= $this->Html->image('deck-service/types/fiber-glass-deck.jpg', [
                'alt' => 'Fiberglass Decking',
                'title' => 'Fiberglass Decking'
              ]) ?>
            </div>
            <div class="lower-content">
              <div class="icon-box">
                <?= $this->Html->image('services/icons/deck.svg', [
                  'alt' => 'Fiberglass Decking',
                  'class' => 'svg'
                ]) ?>
              </div>
              <div class="shap-box"></div>
              <h3>Fiberglass Decking</h3>
              <p class="mb-0">Fiberglass decking is exceptionally strong and waterproof, ideal for modern outdoor living. It requires little maintenance and provides a smooth, sleek finish.</p>
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
  <div class="auto-container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Our Partners</h6>
      <h2>Partnering <br> <span>With The Best</span></h2>
    </div>


    <div class="row gy-4 mt-5">
      <div class="col-lg-6">
        <div class="text-center text-lg-start">
          <h3 class="title_3">We install custom decking options including the latest products by Trex</h3>

          <p class="mt-3">Transforming your outdoor space into a haven of elegance and functionality begins with us.
            Our expert builders are dedicated to crafting a custom deck that seamlessly complements your home's
            aesthetic while reflecting your unique style and fulfilling your every desire. Utilizing only premium
            materials and innovative techniques, we're committed to delivering nothing short of excellence. Schedule
            your complimentary deck design consultation today and our expert team will build a deck of your dreams!
          </p>
        </div>
      </div>

      <div class="col-lg-6 align-self-center">
        <div class="partner-wrap align-items-center">
          <div class="clients-logo-box">
            <a href="https://www.trex.com/" target="_blank">
              <?= $this->Html->image('deck-service/partners/company-logo-trex.png', [
                'style' => 'max-width: 200px',
                'alt' => 'Trex',
                'title' => 'Trex'
              ]) ?>
            </a>
          </div>
          <div class="clients-logo-box">
            <a href="https://www.wolfhomeproducts.com/" target="_blank">
              <?= $this->Html->image('deck-service/partners/company-logo-wolf.png', [
                'style' => 'max-width: 200px',
                'alt' => 'Wolf Home Products',
                'title' => 'Wolf Home Products'
              ]) ?>
            </a>
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

<section class="section">
  <div class="auto-container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Testimonials</h6>
      <h2>Archer <span>Applause</span></h2>
    </div>

    <div class="video-wrapper">
        <div class="responsive-video">
          <?= $this->Html->tag('iframe', '', [
            'src' => 'https://player.vimeo.com/video/1106252349?h=f5ae25e248',
            'frameborder' => '0',
            'allowfullscreen' => true,
            'webkitallowfullscreen' => true,
            'mozallowfullscreen' => true
          ]) ?>
        </div>
      </div>
  </div>
</section>


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
        <?= $this->Html->image('deck-service/deck-before.jpg', [
          'alt' => 'Before'
        ]) ?>
        <div class="before_label" data-content="Before"></div>
      </div>

      <div id="after-image">
        <?= $this->Html->image('deck-service/deck-after.jpg', [
          'alt' => 'After'
        ]) ?>
        <div class="after_label" data-content="After"></div>
      </div>

      <div id="resizer"></div>
    </div>
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

    <div class="projects_gallery mt-5">
      <?= $this->Html->link(
        $this->Html->image('deck-service/gallery/archer-deck-project-1.jpg', [
          'alt' => 'Archer Deck Project',
          'title' => 'Archer Deck Project'
        ]),
        '/img/deck-service/gallery/archer-deck-project-1.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('deck-service/gallery/archer-deck-project-2.jpg', [
          'alt' => 'Archer Deck Project',
          'title' => 'Archer Deck Project'
        ]),
        '/img/deck-service/gallery/archer-deck-project-2.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('deck-service/gallery/archer-deck-project-3.jpg', [
          'alt' => 'Archer Deck Project',
          'title' => 'Archer Deck Project'
        ]),
        '/img/deck-service/gallery/archer-deck-project-3.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('deck-service/gallery/archer-deck-project-4.jpg', [
          'alt' => 'Archer Deck Project',
          'title' => 'Archer Deck Project'
        ]),
        '/img/deck-service/gallery/archer-deck-project-4.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('deck-service/gallery/archer-deck-project-5.jpg', [
          'alt' => 'Archer Deck Project',
          'title' => 'Archer Deck Project'
        ]),
        '/img/deck-service/gallery/archer-deck-project-5.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('deck-service/gallery/archer-deck-project-6.jpg', [
          'alt' => 'Archer Deck Project',
          'title' => 'Archer Deck Project'
        ]),
        '/img/deck-service/gallery/archer-deck-project-6.jpg',
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
      <?= $this->element('faq/decks') ?>
    </div>
  </div>
</section>
<!-- FAQ Section End -->

<!-- Activities section Start  -->
<section class="section light activities">
  <?= $this->element('community_impact') ?>
</section>
<!-- Activities section End  -->