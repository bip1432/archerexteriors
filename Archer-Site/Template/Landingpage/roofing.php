<?php
// Set Meta Tags
$this->set('title', 'Expert Roofing Services | Roof Installation & Replacement | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Your trusted partner for premium roofing solutions.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Roofing Repairs, Roof Replacement, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Expert Roofing Services | Roof Installation & Replacement | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Your trusted partner for premium roofing solutions.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/roofing-service'); // TODO: Change to the current page URL
?>


<!-- banner-section -->
<section class="page_hero_v2 lp roofing bg_right">
  <div class="inner_content">
    <div class="image-layer">
    </div>
    <?= $this->Html->image('landing-pages/roofing/archer-exteriors-hero-banner-roofing-mobile.jpg', [
      'class' => 'img-fluid d-lg-none mb-4',
      'alt' => 'A Solid Roof Starts with a Solid Team.',
      'title' => 'A Solid Roof Starts with a Solid Team.'
    ]) ?>
    <div class="auto-container">
      <div class="row clearfix">
        <div class="col-lg-7 col-md-12 offset-lg-5 content-column">
          <div class="content-box">
            <h1>A Solid Roof Starts with a Solid Team.</h1>
            <?= $this->Html->image('landing-pages/roofing/archer-forty-years.png', [
              'class' => 'img-fluid mt-4',
              'alt' => 'Your trusted partner in roofing and exterior excellence.',
              'title' => 'Your trusted partner in roofing and exterior excellence.'
            ]) ?>
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
    <div class="row gx-lg-5 gy-5">
      <div class="col-lg-7 text-md-start text-center">
        <h2 class="title_2">A Solid Roof Starts with a Solid Team.</h2>
        <p>At Archer Exteriors, we bring <?= YEARS_OF_EXPERIENCE ?>+ years of experience to ensure your roof replacement is smooth,
          efficient, and built to last. From selecting the perfect roof to navigating financing, we're with you
          every step of the way.</p>

        <div class="roof_layer_wrap mt-4 mb-5">
          <div class="img">
            <?= $this->Html->image('roofing-service/Roofing-Layer-GAF.png', [
              'class' => 'img-fluid',
              'alt' => 'Parts of a GAF Roofing System',
              'title' => 'Parts of a GAF Roofing System'
            ]) ?>
          </div>
          <div class="content">
            <h3 class="title_3">Parts of a GAF Roofing System</h3>
            <p>A residential roofing system has multiple layers that work together to create a durable system. Explore the key layers below.</p>
            <div class="mt-3">
              <a style="padding: 6px 20px; font-size: 16px;" class="theme-btn" href="https://www.archerexteriors.com/parts-of-a-roof" target="_blank">Learn More <i class="flaticon-login"></i></a>
            </div>
          </div>
        </div>

        <div class="roof_badge mb-5">
          <span class="img">
            <?= $this->Html->image('roofing-service/roof-white.svg', [
              'alt' => 'Roofing Icon',
              'class' => 'svg'
            ]) ?>
          </span>
          <div class="content">
            <?= $this->element('jobs_strength') ?>
          </div>
        </div>

        <h3 class="title_3 mb-2">We use the best roofing products in the industry and installed by skilled roofing
          experts.</h3>
        <p>We understand that replacing your home's roof can feel daunting. With over <?= YEARS_OF_EXPERIENCE ?> years of experience, Archer
          Exteriors is your trusted roofing contractor and roofing installer. We're here to support you every step of
          the way, from choosing the right roof system to exploring budgeting and financing options. As a family-owned
          roofing company, we prioritize building relationships with our customers. When you choose Archer Exteriors
          for your roofing project, you become part of our family. Contact us today to learn more about how we can
          handle your large roofing projects and large roofing jobs with expertise and care.</p>

        <div class="mt-4">
          <?= $this->Html->link(
            'Financing Options Available <i class="flaticon-login"></i>',
            ['controller' => 'Financings', 'action' => 'index'],
            ['class' => 'theme-btn sm', 'escape' => false]
          ) ?>
        </div>
      </div>

      <div class="col-lg-5">
        <?= $this->element('forms/form_free_estimate', ['formId' => '21', 'formKey' => 'lproofing4af7b690f2e72aa8612bb292aeae0e2e']) ?>
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

<!-- Why Choose Us Section Start  -->
<section class="chooseus-section" style="padding-top: 350px;">
  <?= $this->element('why_choose_us') ?>
</section>
<!-- Why Choose Us Section End -->

<!-- Types Sec Start  -->
<section class="section light">
  <div class="large-container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Roofing Types</h6>
      <h2>Types <span>of Roofing Material</span></span></h2>
      <p style="font-size: 18px; max-width: 1200px; margin-left: auto;margin-right: auto; color: var(--font);"
        class="desc">We offers you a full line of roofing system solutions, including single-ply membrane, asphaltic coatings, and liquid-applied roofing, as well as waterproofing, polyiso insulation, and a complete line of innovative adhesives and accessories.</p>
    </div>

    <div class="window_types roofing">
      <div class="row mt-4 gy-4 justify-content-center">
        <div class="col-xl-3 col-lg-6 col-sm-6">
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
        <div class="col-xl-3 col-lg-6 col-sm-6">
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
        <div class="col-xl-3 col-lg-6 col-sm-6">
          <div class="item">
            <div class="item_inner">
              <?= $this->Html->image('roofing-service/roof-type/cedar-roof.jpg', [
                'alt' => 'Cedar Roof',
                'title' => 'Cedar Roof'
              ]) ?>

              <div class="captions">
                <p class="desc">Cedar roofs are made from natural cedar wood, offering a classic, rustic appearance that enhances a home's curb appeal. They provide excellent insulation and can last for decades when properly maintained, though they require regular upkeep to prevent moisture and insect damage.</p>
                <div class="heading">
                  <h4 class="title_4">Cedar Roof</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-sm-6">
          <div class="item">
            <div class="item_inner">
              <?= $this->Html->image('roofing-service/roof-type/flat-roof.jpg', [
                'alt' => 'Flat Roof',
                'title' => 'Flat Roof'
              ]) ?>

              <div class="captions">
                <p class="desc">Galvanized Flat Sheet - the ultimate product for custom fittings and great for general needs. Make your own custom fittings using these galvanized sheets. The 30-gauge galvanized steel can easily be cut to size for any application.</p>
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

  <!-- Golden Ticket Block Start  -->
  <div class="container golden_ticket_add_box">
    <?= $this->element('golden_ticket') ?>
  </div>
  <!-- Golden Ticket Block End  -->

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
          'alt' => 'We are GAF Master Elite® Certified and Members of the GAF President’s Club',
          'title' => 'We are GAF Master Elite® Certified and Members of the GAF President’s Club'
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

<!-- Activities section Start  -->
<section class="section activities">
  <?php echo $this->element('community_impact') ?>
</section>
<!-- Activities section End  -->