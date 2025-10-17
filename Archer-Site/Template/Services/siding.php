<?php
// Set Meta Tags
$this->set('title', 'Siding Installation & Replacement | Archer Exteriors – Durable, Stylish Home Upgrades');
$this->set('metaDescription', 'Looking for siding installation or replacement? Archer Exteriors offers durable, low-maintenance siding in vinyl, fiber cement & more. Transform curb appeal, boost energy efficiency, and get a free estimate today.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', siding installation, New Jersey siding contractor, NJ siding installation, siding company near me, siding replacement, exterior siding services, residential siding, durable siding, vinyl siding, fiber cement siding, board and batten siding, shake siding, lap siding, coastal siding styles');
$this->set('ogTitle', 'Siding Installation & Replacement | Archer Exteriors – Durable, Stylish Home Upgrades');
$this->set('ogDescription', 'Looking for siding installation or replacement? Archer Exteriors offers durable, low-maintenance siding in vinyl, fiber cement & more. Transform curb appeal, boost energy efficiency, and get a free estimate today.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/services/siding'); // TODO: Change to the current page URL
?>

<!-- banner-section -->
<section class="banner-section siding">
  <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
    <div class="slide-item one">
      <div class="image-layer">
      </div>
      <div class="auto-container">
        <div class="row clearfix">
          <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column">
            <div class="content-box">
              <h6>Built to Protect and Impress</h6>
              <h1>Durable Siding in Styles You’ll Love</h1>
              <p>We install top-quality vinyl and fiber cement siding using materials from James Hardie, CertainTeed, and Alside.</p>
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
              <h6>Built to Protect and Impress</h6>
              <h1>Built to Protect. Designed to Impress.</h1>
              <p>From classic vinyl lap and board and batten to elegant shake siding, we bring your vision to life with the perfect style.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slide-item three">
      <div class="image-layer"></div>
      <div class="auto-container">
        <div class="row clearfix">
          <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column">
            <div class="content-box">
              <h6>Built to Protect and Impress</h6>
              <h1>Transform Your Curb Appeal</h1>
              <p>Modern siding that enhances your home’s style, value, and efficiency.</p>
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
              'src' => 'https://player.vimeo.com/video/1116884993?h=9af9d35db4',
              'frameborder' => '0',
              'allowfullscreen' => true,
              'webkitallowfullscreen' => true,
              'mozallowfullscreen' => true
            ]) ?>
          </div>
        </div>

        <h2 class="title_2 mb-2"><b>Built to Protect.</b> Designed to Impress.</h2>
        <p>Siding is your home's first impression-make it last. Our durable, insulated options come in a wide range of
          styles and colors, built to withstand the elements while enhancing curb appeal.</p>


        <div class="service_key_points mt-4">
          <div id="serviceKeyPoints" class="owl-carousel owl-theme our_service golden_ticket service_key_points_slider">
            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/siding/big-boost.svg', [
                  'class' => 'svg',
                  'alt' => 'Boost Your Home’s Curb Appeal',
                  'title' => 'Boost Your Home’s Curb Appeal'
                ]) ?>
              </div>
              <h4 style="font-size: 15px;">Boost Your Home’s Curb Appeal</h4>
            </div>


            <div class="item">
              <div class="icon protects_your_home">
                <?= $this->Html->image('golden-ticket/siding/protects-your-home.svg', [
                  'class' => 'svg',
                  'alt' => 'Protect What’s Inside',
                  'title' => 'Protect What’s Inside'
                ]) ?>
              </div>
              <h4 style="font-size: 15px;">Protect What’s Inside</h4>
            </div>

             <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/siding/better-energy.svg', [
                  'class' => 'svg',
                  'alt' => 'Improve Energy Efficiency',
                  'title' => 'Improve Energy Efficiency'
                ]) ?>
              </div>
              <h4 style="font-size: 15px;">Improve Energy Efficiency</h4>
            </div>


            <div class="item">
              <div class="icon">
                <?= $this->Html->image('golden-ticket/siding/less-maintenance.svg', [
                  'class' => 'svg',
                  'alt' => 'Increase Property Value',
                  'title' => 'Increase Property Value'
                ]) ?>
              </div>
              <h4 style="font-size: 15px;">Increase Property Value</h4>
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
        <?= $this->element('forms/form_free_estimate', ['formId' => '4', 'formKey' => 'siding3f79dbc66e267e7ccf5b88fd431f64c9']) ?>
      </div>

      <div class="col-12" style="margin-top: 60px;">
        <div class="row gy-4 text-center text-xxl-start">
          <div class="col-xxl-6">
            <div class="limited_offer_banner">
              <?= $this->Html->image('golden-ticket/banner-sm/archer-exteriors-offer-banner-siding-sm.jpg', [
                'class' => 'img-fluid rad_4',
                'alt' => 'Wrap it right - 25% off siding today',
                'title' => 'Wrap it right - 25% off siding today'
              ]) ?>
            </div>
          </div>

          <div class="col-xxl-6">
            <div class="partner_slider_wrap">
              <h4 class="title_3 mb-3">Partnering With The Best</h4>
              <div id="partnerSlider" class="owl-carousel owl-theme parner_slider">
                <div class="item">
                  <?= $this->Html->link(
                    $this->Html->image('siding-service/partners/logo-alside.png', [
                      'alt' => 'Alside',
                      'title' => 'Alside'
                    ]),
                    'https://www.alside.com/',
                    ['target' => '_blank', 'escape' => false]
                  ) ?>
                </div>
                <div class="item">
                  <?= $this->Html->link(
                    $this->Html->image('siding-service/partners/logo-certainteed.png', [
                      'alt' => 'Certainteed',
                      'title' => 'Certainteed'
                    ]),
                    'https://www.certainteed.com/',
                    ['target' => '_blank', 'escape' => false]
                  ) ?>
                </div>
                <div class="item">
                  <?= $this->Html->link(
                    $this->Html->image('siding-service/partners/logo-james-hardie.png', [
                      'alt' => 'James Hardie',
                      'title' => 'James Hardie'
                    ]),
                    'https://www.jameshardie.com/',
                    ['target' => '_blank', 'escape' => false]
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
<section class="section working-section siding text-center">
  <div class="large-container">
    <div class="sec-title light">
      <h6><i class="flaticon-roof"></i>How it’s Work</h6>
      <h2>Top 4 Factors to Help You <br><span>Choose the Right Siding for Your Home</span></h2>
    </div>
    <div class="inner-content">
      <div class="row clearfix">
        <div class="col-xxl-3 col-md-6 col-sm-12 process-block">
          <div class="process-block-item">
            <div class="inner-box">
              <div class="icon-box">
                <span class="count-box counted">01</span>
                <div class="icon">
                  <?= $this->Html->image('siding-service/big-boost.svg', [
                    'alt' => 'Boost Your Home’s Curb Appeal',
                    'title' => 'Boost Your Home’s Curb Appeal',
                    'class' => 'img-fluid'
                  ]) ?>
                </div>
              </div>
              <div class="lower-content">
                <h3>Boost Your Home’s Curb Appeal</h3>
                <div class="pattern-layer"></div>
                <p>Fresh siding instantly transforms how your home looks. The right color and style can turn an outdated exterior into a stunning statement — making your property stand out for all the right reasons.</p>
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
                  <?= $this->Html->image('siding-service/protects-your-home.svg', [
                    'alt' => 'Protect What’s Inside',
                    'title' => 'Protect What’s Inside',
                    'class' => 'img-fluid'
                  ]) ?>
                </div>
              </div>
              <div class="lower-content">
                <h3>Protect What’s Inside</h3>
                <div class="pattern-layer"></div>
                <p>Quality siding acts as your home’s first line of defense against wind, rain, and extreme temperatures. It shields your walls from moisture damage and keeps your home strong through every season.</p>
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
                  <?= $this->Html->image('siding-service/better-energy.svg', [
                    'alt' => 'Improve Energy Efficiency',
                    'title' => 'Improve Energy Efficiency',
                    'class' => 'img-fluid'
                  ]) ?>
                </div>
              </div>
              <div class="lower-content">
                <h3>Improve Energy Efficiency</h3>
                <div class="pattern-layer"></div>
                <p>Modern siding materials help regulate indoor temperature by adding an extra layer of insulation. That means a more comfortable home — and potentially lower energy bills all year long.</p>
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
                  <?= $this->Html->image('siding-service/less-maintenance.svg', [
                    'alt' => 'Increase Property Value',
                    'title' => 'Increase Property Value',
                    'class' => 'img-fluid'
                  ]) ?>
                </div>
              </div>
              <div class="lower-content">
                <h3>Increase Property Value</h3>
                <div class="pattern-layer"></div>
                <p>Upgraded siding isn’t just cosmetic — it’s an investment. A well-maintained exterior signals lasting quality and boosts your home’s resale appeal when it’s time to move.</p>
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

<!-- Visualize Sec Start  -->
<!-- <section class="section light visualize_tool">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Siding types</h6>
      <h2>Visualize your siding <br> <span> using our interactive tool</span></h2>
    </div>

    <div class="row mt-4 gy-4 service-selector flex-column-reverse flex-lg-row" data-service="siding">
      <div class="col-lg-6">
        <h3 class="title_4 mb-3">Select Type of <span class="service-name">Siding</span></h3>
        <div class="options" id="serviceOptions">
          <div class="item selected" data-type="shingle" data-bs-toggle="tooltip" data-bs-title="Hardie Siding">
            <?= $this->Html->image('siding-service/siding-type/hardie-shingles.png', [
              'class' => 'img-fluid',
              'alt' => 'Hardie Siding',
              'title' => 'Hardie Siding'
            ]) ?>
            <span class="name">Hardie Siding</span>
          </div>
          <div class="item" data-type="fishscale" data-bs-toggle="tooltip" data-bs-title="Blue fishscale vinyl siding">
            <?= $this->Html->image('siding-service/siding-type/blue-fishscale-vinyl-siding.png', [
              'class' => 'img-fluid',
              'alt' => 'Blue fishscale vinyl siding',
              'title' => 'Blue fishscale vinyl siding'
            ]) ?>
            <span class="name">Blue fishscale vinyl siding</span>
          </div>
          <div class="item" data-type="board" data-bs-toggle="tooltip" data-bs-title="Board and batten siding">
            <?= $this->Html->image('siding-service/siding-type/board-and-batten-siding.png', [
              'class' => 'img-fluid',
              'alt' => 'Board and batten siding',
              'title' => 'Board and batten siding'
            ]) ?>
            <span class="name">Board and batten siding</span>
          </div>
          <div class="item" data-type="ceder" data-bs-toggle="tooltip" data-bs-title="Cedar shake grey">
            <?= $this->Html->image('siding-service/siding-type/cedar-shake-grey.png', [
              'class' => 'img-fluid',
              'alt' => 'Cedar shake grey',
              'title' => 'Cedar shake grey'
            ]) ?>
            <span class="name">Cedar shake grey</span>
          </div>
          <div class="item" data-type="lap" data-bs-toggle="tooltip" data-bs-title="Dutch lap vinyl siding">
            <?= $this->Html->image('siding-service/siding-type/dutch-lap-vinyl-siding.png', [
              'class' => 'img-fluid',
              'alt' => 'Dutch lap vinyl siding',
              'title' => 'Dutch lap vinyl siding'
            ]) ?>
            <span class="name">Dutch lap vinyl siding</span>
          </div>
        </div>

        <div class="material_colors mt-5">
          <h3 class="title_4 mb-3">Select Texture / Color</h3>

          <div class="color-options" id="shingleColorOptions">
            <div class="item arctic-white selected" data-color="arctic-white" data-bs-toggle="tooltip" data-bs-title="Arctic White" data-bs-placement="bottom"><span></span></div>
            <div class="item cobble-stone" data-color="cobble-stone" data-bs-toggle="tooltip" data-bs-title="Cobble Stone" data-bs-placement="bottom"><span></span></div>
            <div class="item navajo-beige" data-color="navajo-beige" data-bs-toggle="tooltip" data-bs-title="Navajo Beige" data-bs-placement="bottom"><span></span></div>
            <div class="item khaki-brown" data-color="khaki-brown" data-bs-toggle="tooltip" data-bs-title="Khaki Brown" data-bs-placement="bottom"><span></span></div>
            <div class="item monterey-taupe" data-color="monterey-taupe" data-bs-toggle="tooltip" data-bs-title="Monterey Taupe" data-bs-placement="bottom"><span></span></div>
            <div class="item timber-bark" data-color="timber-bark" data-bs-toggle="tooltip" data-bs-title="Timber Bark" data-bs-placement="bottom"><span></span></div>
            <div class="item rich-espresso" data-color="rich-espresso" data-bs-toggle="tooltip" data-bs-title="Rich Espresso" data-bs-placement="bottom"><span></span></div>
            <div class="item mountain-sage" data-color="mountain-sage" data-bs-toggle="tooltip" data-bs-title="Mountain Sage" data-bs-placement="bottom"><span></span></div>
            <div class="item light-mist" data-color="light-mist" data-bs-toggle="tooltip" data-bs-title="Light Mist" data-bs-placement="bottom"><span></span></div>
            <div class="item pearl-gray" data-color="pearl-gray" data-bs-toggle="tooltip" data-bs-title="Pearl Gray" data-bs-placement="bottom"><span></span></div>
          </div>

          <div class="color-options" id="fishscaleColorOptions">
            <div class="item arctic-white selected" data-color="arctic-white" data-bs-toggle="tooltip" data-bs-title="Arctic White" data-bs-placement="bottom"><span></span></div>
            <div class="item cobble-stone" data-color="cobble-stone" data-bs-toggle="tooltip" data-bs-title="Cobble Stone" data-bs-placement="bottom"><span></span></div>
            <div class="item navajo-beige" data-color="navajo-beige" data-bs-toggle="tooltip" data-bs-title="Navajo Beige" data-bs-placement="bottom"><span></span></div>
            <div class="item khaki-brown" data-color="khaki-brown" data-bs-toggle="tooltip" data-bs-title="Khaki Brown" data-bs-placement="bottom"><span></span></div>
            <div class="item monterey-taupe" data-color="monterey-taupe" data-bs-toggle="tooltip" data-bs-title="Monterey Taupe" data-bs-placement="bottom"><span></span></div>
            <div class="item timber-bark" data-color="timber-bark" data-bs-toggle="tooltip" data-bs-title="Timber Bark" data-bs-placement="bottom"><span></span></div>
          </div>

          <div class="color-options" id="boardColorOptions">
            <div class="item arctic-white selected" data-color="arctic-white" data-bs-toggle="tooltip" data-bs-title="Arctic White" data-bs-placement="bottom"><span></span></div>
            <div class="item khaki-brown" data-color="khaki-brown" data-bs-toggle="tooltip" data-bs-title="Khaki Brown" data-bs-placement="bottom"><span></span></div>
            <div class="item monterey-taupe" data-color="monterey-taupe" data-bs-toggle="tooltip" data-bs-title="Monterey Taupe" data-bs-placement="bottom"><span></span></div>
            <div class="item timber-bark" data-color="timber-bark" data-bs-toggle="tooltip" data-bs-title="Timber Bark" data-bs-placement="bottom"><span></span></div>
          </div>

          <div class="color-options" id="cederColorOptions">
            <div class="item arctic-white selected" data-color="arctic-white" data-bs-toggle="tooltip" data-bs-title="Arctic White" data-bs-placement="bottom"><span></span></div>
            <div class="item cobble-stone" data-color="cobble-stone" data-bs-toggle="tooltip" data-bs-title="Cobble Stone" data-bs-placement="bottom"><span></span></div>
            <div class="item navajo-beige" data-color="navajo-beige" data-bs-toggle="tooltip" data-bs-title="Navajo Beige" data-bs-placement="bottom"><span></span></div>
            <div class="item khaki-brown" data-color="khaki-brown" data-bs-toggle="tooltip" data-bs-title="Khaki Brown" data-bs-placement="bottom"><span></span></div>
          </div>

          <div class="color-options" id="lapColorOptions">
            <div class="item arctic-white selected" data-color="arctic-white" data-bs-toggle="tooltip" data-bs-title="Arctic White" data-bs-placement="bottom"><span></span></div>
            <div class="item cobble-stone" data-color="cobble-stone" data-bs-toggle="tooltip" data-bs-title="Cobble Stone" data-bs-placement="bottom"><span></span></div>
            <div class="item navajo-beige" data-color="navajo-beige" data-bs-toggle="tooltip" data-bs-title="Navajo Beige" data-bs-placement="bottom"><span></span></div>
            <div class="item khaki-brown" data-color="khaki-brown" data-bs-toggle="tooltip" data-bs-title="Khaki Brown" data-bs-placement="bottom"><span></span></div>
            <div class="item monterey-taupe" data-color="monterey-taupe" data-bs-toggle="tooltip" data-bs-title="Monterey Taupe" data-bs-placement="bottom"><span></span></div>
            <div class="item timber-bark" data-color="timber-bark" data-bs-toggle="tooltip" data-bs-title="Timber Bark" data-bs-placement="bottom"><span></span></div>
          </div>
        </div>

      </div>
      <div class="col-lg-6">
        <div class="preview">
          <?= $this->Html->image('siding-service/siding-preview/shingle-arctic-white.png', [
            'id' => 'serviceImage',
            'class' => 'img-fluid serviceImageSelector',
            'alt' => 'Preview'
          ]) ?>
          <h4 id="previewTitle" class="text-center mt-3 mb-0 title_5">Shingle - Arctic-white</h4>
        </div>
      </div>
    </div>

  </div>
</section> -->
<!-- Visualize Sec End -->

<!-- Types Sec Start  -->
<section class="section">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Siding Types</h6>
      <h2>Types <span>of Siding Products</span></span></h2>
      <p style="font-size: 18px; max-width: 1200px; margin-left: auto;margin-right: auto; color: var(--font);"
        class="desc">Elevate the beauty—and durability—of your home with our wide range of exterior siding products.
      </p>
    </div>

    <div class="window_types siding">
      <div class="row mt-4 gy-4 justify-content-center">
        <div class="col-lg-4 col-sm-6">
          <div class="item">
            <div class="item_inner">
              <?= $this->Html->image('siding-service/siding-type/hardie-plank-siding.jpg', [
                'alt' => 'Hardie Siding',
                'title' => 'Hardie Siding'
              ]) ?>

              <div class="captions">
                <p class="desc">Durable, non-combustible fiber cement siding in colors and styles that resist weather, fading, and pests for long-lasting beauty.</p>
                <div class="heading">
                  <h4 class="title_4">Hardie Siding</h4>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6">
          <div class="item">
            <div class="item_inner">
              <?= $this->Html->image('siding-service/siding-type/board-and-batten-siding.jpg', [
                'alt' => 'Board and batten siding',
                'title' => 'Board and batten siding'
              ]) ?>

              <div class="captions">
                <p class="desc">The distinct vertical lines of board and batten vinyl siding make it a versatile
                  design option for home exteriors, offering a unique, one-of-a-kind look for your home. Board 'n
                  batten is commonly paired with horizontal siding, shake and shingle, or manufactured stone to add
                  distinctive accents to exterior areas such as entryways, gables, porches, dormers and build-outs.
                </p>
                <div class="heading">
                  <h4 class="title_4">Board and batten siding</h4>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6">
          <div class="item">
            <div class="item_inner">
              <?= $this->Html->image('siding-service/siding-type/dutch-lap-vinyl-siding.jpg', [
                'alt' => 'Dutch lap vinyl siding',
                'title' => 'Dutch lap vinyl siding'
              ]) ?>

              <div class="captions">
                <p class="desc">Create classic shadow lines and depth with Dutch lap siding, a timeless choice for traditional and colonial-style homes.</p>
                <div class="heading">
                  <h4 class="title_4">Dutch lap vinyl siding</h4>
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


<!-- Keep in Mind Section Start  -->
<section class="section bg_secondary">
  <div class="auto-container">
    <div class="sec-title text-center light">
      <h6><i class="flaticon-roof"></i>Keep in mind</h6>
      <h2>4 Things to Consider <br> <span> When Choosing the Best Siding for Your Home</span></h2>
    </div>

    <div class="row gy-5 mt-5">
      <div class="col-xl-6 col-md-6">
        <div class="service-block-item h-100 wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
          <div class="inner-box h-100">
            <div class="image-box">
              <?= $this->Html->image('siding-service/durability-banner.png', [
                'alt' => 'Durability',
                'title' => 'Durability'
              ]) ?>
            </div>
            <div class="lower-content">
              <div class="icon-box">
                <?= $this->Html->image('siding-service/durability.svg', [
                  'alt' => 'Durability',
                  'class' => 'svg'
                ]) ?>
              </div>
              <div class="shap-box"></div>
              <h3>Durability</h3>
              <p class="mb-0">When it comes to siding, durability is one of the most important factors for protecting your home. High-quality siding materials are designed to withstand harsh weather, resist fading, and hold up against impacts from wind, rain, and debris. Durable siding not only maintains its appearance over time but also helps prevent costly repairs by shielding your home’s structure from moisture and pests. Choosing siding known for its strength and longevity ensures your home stays beautiful and protected for years to come, giving you peace of mind and lasting value.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-md-6">
        <div class="service-block-item h-100 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
          <div class="inner-box h-100">
            <div class="image-box">
              <?= $this->Html->image('siding-service/cost-banner.png', [
                'alt' => 'Cost',
                'title' => 'Cost'
              ]) ?>
            </div>
            <div class="lower-content">
              <div class="icon-box">
                <?= $this->Html->image('siding-service/cost.svg', [
                  'alt' => 'Cost',
                  'class' => 'svg'
                ]) ?>
              </div>
              <div class="shap-box"></div>
              <h3>Cost</h3>
              <p class="mb-0">Siding costs can vary based on material, style, and the size of your home, but investing in quality siding is often more cost-effective in the long run. While some options may have a higher upfront price, they can offer better durability, energy efficiency, and lower maintenance costs over time. It’s important to consider not just the initial expense but also the long-term value and protection that good siding provides for your home.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-md-6">
        <div class="service-block-item h-100 wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
          <div class="inner-box h-100">
            <div class="image-box">
              <?= $this->Html->image('siding-service/maintenance-banner.png', [
                'alt' => 'Maintenance',
                'title' => 'Maintenance'
              ]) ?>
            </div>
            <div class="lower-content">
              <div class="icon-box">
                <?= $this->Html->image('siding-service/maintenance.svg', [
                  'alt' => 'Maintenance',
                  'class' => 'svg'
                ]) ?>
              </div>
              <div class="shap-box"></div>
              <h3>Maintenance</h3>
              <p class="mb-0">Modern siding materials are designed for low maintenance, making it easier than ever to keep your home looking great. Many options resist fading, cracking, and pests, so they require little more than occasional cleaning to maintain their appearance. Choosing siding with minimal upkeep means saving time, reducing costs, and avoiding the hassle of frequent repairs or repainting.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-md-6">
        <div class="service-block-item h-100 wow fadeInUp animated" data-wow-delay="900ms" data-wow-duration="1500ms">
          <div class="inner-box h-100">
            <div class="image-box">
              <?= $this->Html->image('siding-service/style-banner.png', [
                'alt' => 'Style',
                'title' => 'Style'
              ]) ?>
            </div>
            <div class="lower-content">
              <div class="icon-box">
                <?= $this->Html->image('siding-service/style.svg', [
                  'alt' => 'Style',
                  'class' => 'svg'
                ]) ?>
              </div>
              <div class="shap-box"></div>
              <h3>Style</h3>
              <p class="mb-1">Siding plays a huge role in your home’s curb appeal, offering countless styles, colors, and textures to suit any taste. Whether you prefer the classic charm of traditional lap siding, the rustic look of shakes, or sleek, modern panels, there’s a siding option that can bring your vision to life. With so many choices available, you can customize your exterior to reflect your personal style while enhancing your home’s overall value and beauty.</p>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- Keep in Mind Section End  -->


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
          'alt' => 'Before Siding Project',
          'title' => 'Before Siding Project'
        ]) ?>
        <div class="before_label" data-content="Before"></div>
      </div>

      <div id="after-image">
        <?= $this->Html->image('siding-service/siding-after.jpg', [
          'alt' => 'After Siding Project',
          'title' => 'After Siding Project'
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


    <div id="roofingGallery" class="projects_gallery mt-5">
      <?= $this->Html->link(
        $this->Html->image('siding-service/gallery/archer-siding-project-1.jpg', [
          'alt' => 'Archer Siding Project',
          'title' => 'Archer Siding Project',
          'class' => 'img-fluid'
        ]),
        '/img/siding-service/gallery/archer-siding-project-1.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>

      <?= $this->Html->link(
        $this->Html->image('siding-service/gallery/archer-siding-project-2.jpg', [
          'alt' => 'Archer Siding Project',
          'title' => 'Archer Siding Project',
          'class' => 'img-fluid'
        ]),
        '/img/siding-service/gallery/archer-siding-project-2.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>

      <?= $this->Html->link(
        $this->Html->image('siding-service/gallery/archer-siding-project-3.jpg', [
          'alt' => 'Archer Siding Project',
          'title' => 'Archer Siding Project',
          'class' => 'img-fluid'
        ]),
        '/img/siding-service/gallery/archer-siding-project-3.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>

      <?= $this->Html->link(
        $this->Html->image('siding-service/gallery/archer-siding-project-4.jpg', [
          'alt' => 'Archer Siding Project',
          'title' => 'Archer Siding Project',
          'class' => 'img-fluid'
        ]),
        '/img/siding-service/gallery/archer-siding-project-4.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>

      <?= $this->Html->link(
        $this->Html->image('siding-service/gallery/archer-siding-project-5.jpg', [
          'alt' => 'Archer Siding Project',
          'title' => 'Archer Siding Project',
          'class' => 'img-fluid'
        ]),
        '/img/siding-service/gallery/archer-siding-project-5.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>

      <?= $this->Html->link(
        $this->Html->image('siding-service/gallery/archer-siding-project-6.jpg', [
          'alt' => 'Archer Siding Project',
          'title' => 'Archer Siding Project',
          'class' => 'img-fluid'
        ]),
        '/img/siding-service/gallery/archer-siding-project-6.jpg',
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
      <?= $this->element('faq/siding') ?>
    </div>
  </div>
</section>
<!-- FAQ Section End -->

<!-- Activities section Start  -->
<section class="section light activities">
  <?php echo $this->element('community_impact') ?>
</section>
<!-- Activities section End  -->