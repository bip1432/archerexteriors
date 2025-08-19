<?php
// Set Meta Tags
$this->set('title', 'Professional Siding Installation & Replacement | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Your trusted partner for premium siding solutions.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Siding, Siding Installation, Siding Repair, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Professional Siding Installation & Replacement | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Your trusted partner for premium siding solutions.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/siding-service'); // TODO: Change to the current page URL
?>

<!-- banner-section -->
<section class="page_hero_v2 lp siding bg_right">
  <div class="inner_content">
    <div class="image-layer">
    </div>
    <?= $this->Html->image('landing-pages/siding/archer-exteriors-hero-banner-siding-mobile.jpg', [
      'class' => 'img-fluid d-lg-none mb-4',
      'alt' => 'Built to Protect. Designed to Impress',
      'title' => 'Built to Protect. Designed to Impress'
    ]) ?>
    <div class="auto-container">
      <div class="row clearfix">
        <div class="col-lg-7 col-md-12 offset-lg-5 content-column">
          <div class="content-box">

            <h1>Built to Protect. Designed to Impress</h1>
            <p class="mb-0">From classic vinyl lap and board and batten to elegant shake siding, we bring your vision
              to life with the perfect style.</p>
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
          <h2>Durable, stylish, and weather <span>- resistant siding with warranties</span></h2>
        </div>

        <p>Siding is your home's first impression-make it last. Our durable, insulated options come in a wide range of
          styles and colors, built to withstand the elements while enhancing curb appeal.</p>

        <div class="mt-4">
          <?= $this->Html->link(
            'Financing Options Available <i class="flaticon-login"></i>',
            ['controller' => 'Financings', 'action' => 'index'],
            ['class' => 'theme-btn sm', 'escape' => false]
          ) ?>
        </div>

        <h3 class="title_3 mt-4 mb-3">6 Benefits of Regular Siding Maintenance</h3>

        <div class="box-style-two mt-4">
          <div class="row gy-4">
            <div class="col-xl-4 col-lg-4 col-sm-6">
              <div class="single-item">
                <div class="inner-box">
                  <div class="content-box">
                    <div class="icon-box">
                      <div class="line" style="background-image: url(<?= $this->Url->image('line-2.png') ?>);"></div>
                      <?= $this->Html->image('siding-service/benifits/enhance-structural.svg', [
                        'alt' => 'Enhanced Structural Integrity',
                        'title' => 'Enhanced Structural Integrity'
                      ]) ?>
                    </div>
                    <h3>Enhanced Structural Integrity</h3>
                  </div>
                  <div class="overlay-box">
                    <div class="icon-box">
                      <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                      <?= $this->Html->image('siding-service/benifits/white/enhance-structural.svg', [
                        'alt' => 'Enhanced Structural Integrity',
                        'title' => 'Enhanced Structural Integrity'
                      ]) ?>
                    </div>
                    <p>A Strong Foundation for Your Home</p>
                    <h3>Enhanced Structural Integrity</h3>
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
                      <?= $this->Html->image('siding-service/benifits/energy-efficient.svg', [
                        'alt' => 'Energy-Efficiency Boost',
                        'title' => 'Energy-Efficiency Boost'
                      ]) ?>
                    </div>
                    <h3>Energy-Efficiency Boost</h3>
                  </div>
                  <div class="overlay-box">
                    <div class="icon-box">
                      <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                      <?= $this->Html->image('siding-service/benifits/white/energy-efficient.svg', [
                        'alt' => 'Energy-Efficiency Boost',
                        'title' => 'Energy-Efficiency Boost'
                      ]) ?>
                    </div>
                    <p>Keeping Your Home Comfortable</p>
                    <h3>Energy-Efficiency Boost</h3>
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
                      <?= $this->Html->image('siding-service/benifits/prevention-costly.svg', [
                        'alt' => 'Prevention of Costly Repairs',
                        'title' => 'Prevention of Costly Repairs'
                      ]) ?>
                    </div>
                    <h3>Prevention of Costly Repairs</h3>
                  </div>
                  <div class="overlay-box">
                    <div class="icon-box">
                      <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                      <?= $this->Html->image('siding-service/benifits/white/prevention-costly.svg', [
                        'alt' => 'Prevention of Costly Repairs',
                        'title' => 'Prevention of Costly Repairs'
                      ]) ?>
                    </div>
                    <p>Saving You From Financial Burden</p>
                    <h3>Prevention of Costly Repairs</h3>
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
                      <?= $this->Html->image('siding-service/benifits/preserving-property-value.svg', [
                        'alt' => 'Preserving Property Value',
                        'title' => 'Preserving Property Value'
                      ]) ?>
                    </div>
                    <h3>Preserving Property Value</h3>
                  </div>
                  <div class="overlay-box">
                    <div class="icon-box">
                      <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                      <?= $this->Html->image('siding-service/benifits/white/preserving-property-value.svg', [
                        'alt' => 'Preserving Property Value',
                        'title' => 'Preserving Property Value'
                      ]) ?>
                    </div>
                    <p>A Wise Investment</p>
                    <h3>Preserving Property Value</h3>
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
                      <?= $this->Html->image('siding-service/benifits/healthier-living.svg', [
                        'alt' => 'Healthier Living Environment',
                        'title' => 'Healthier Living Environment'
                      ]) ?>
                    </div>
                    <h3>Healthier Living Environment</h3>
                  </div>
                  <div class="overlay-box">
                    <div class="icon-box">
                      <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                      <?= $this->Html->image('siding-service/benifits/white/healthier-living.svg', [
                        'alt' => 'Healthier Living Environment',
                        'title' => 'Healthier Living Environment'
                      ]) ?>
                    </div>
                    <p>Mitigating Mold and Allergens</p>
                    <h3>Healthier Living Environment</h3>
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
                      <?= $this->Html->image('siding-service/benifits/aesthetically-pleasing.svg', [
                        'alt' => 'Aesthetically Pleasing Exterior',
                        'title' => 'Aesthetically Pleasing Exterior'
                      ]) ?>
                    </div>
                    <h3>Aesthetically Pleasing Exterior</h3>
                  </div>
                  <div class="overlay-box">
                    <div class="icon-box">
                      <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                      <?= $this->Html->image('siding-service/benifits/white/aesthetically-pleasing.svg', [
                        'alt' => 'Aesthetically Pleasing Exterior',
                        'title' => 'Aesthetically Pleasing Exterior'
                      ]) ?>
                    </div>
                    <p>Boosting Curb Appeal</p>
                    <h3>Aesthetically Pleasing Exterior</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="col-xl-5">
        <?= $this->element('forms/form_free_estimate', ['formId' => '22', 'formKey' => 'lpsiding027f1e24efbcf0a3c0f057c36b20fc64']) ?>
      </div>
    </div>
  </div>
</section>
<!-- Start Project Section End -->

<!-- Service Types Section Start  -->
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
              <?= $this->Html->image('siding-service/siding-type/blue-fishscale-vinyl-siding.jpg', [
                'alt' => 'Scalloped Siding',
                'title' => 'Scalloped Siding'
              ]) ?>

              <div class="captions">
                <p class="desc">Add character and classic charm with scalloped siding, perfect for gables and accents on Victorian or cottage-style homes.</p>
                <div class="heading">
                  <h4 class="title_4">Scalloped Siding</h4>
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
              <?= $this->Html->image('siding-service/siding-type/cedar-shake-grey.jpg', [
                'alt' => 'Cedar Shake Siding',
                'title' => 'Cedar Shake Siding'
              ]) ?>

              <div class="captions">
                <p class="desc">Bring rustic beauty and natural texture to your home with cedar shake siding, ideal for a timeless, coastal, or craftsman look.</p>
                <div class="heading">
                  <h4 class="title_4">Cedar Shake Siding</h4>
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
<section class="section light partner-section text-center">
  <div class="auto-container">
    <div class="sec-title">
      <h6><i class="flaticon-roof"></i>Our Partners</h6>
      <h2>Partnering <br> <span>With The Best</span></h2>
    </div>
    <div class="partner-wrap mt-5">
      <div class="clients-logo-box">
        <?= $this->Html->link(
          $this->Html->image('siding-service/partners/company-logo-alside.png', [
            'alt' => 'Alside',
            'title' => 'Alside'
          ]),
          'https://www.alside.com/',
          ['target' => '_blank', 'escape' => false]
        ) ?>
      </div>
      <div class="clients-logo-box">
        <?= $this->Html->link(
          $this->Html->image('siding-service/partners/company-logo-certainteed.png', [
            'alt' => 'Certainteed',
            'title' => 'Certainteed'
          ]),
          'https://www.certainteed.com/',
          ['target' => '_blank', 'escape' => false]
        ) ?>
      </div>
      <div class="clients-logo-box">
        <?= $this->Html->link(
          $this->Html->image('siding-service/partners/company-logo-james-hardy.png', [
            'alt' => 'James Hardie',
            'title' => 'James Hardie'
          ]),
          'https://www.jameshardie.com/',
          ['target' => '_blank', 'escape' => false]
        ) ?>
      </div>
    </div>
  </div>
</section>
<!-- clients-section end -->

<!-- Archie Section Start  -->
<section class="archie_section">
  <?= $this->element('archie_section') ?>
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

<!-- Activities section Start  -->
<section class="section activities">
  <?php echo $this->element('community_impact') ?>
</section>
<!-- Activities section End  -->