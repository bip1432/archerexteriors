<?php
// Set Meta Tags
$this->set('title', 'Siding Installation & Repair | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Your trusted partner for premium siding solutions.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Siding, Siding Installation, Siding Repair, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Siding Installation & Repair | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Your trusted partner for premium siding solutions.');
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
              <p>We install vinyl, fiber cement, and stone veneer using materials from James Hardie, CertainTeed, and
                Alside.</p>
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
              <h1>Built to Protect. Designed to Impress</h1>
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
              <p>Our siding upgrades bring modern style and boost your home’s value and energy efficiency.</p>
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
<section class="section light service_details" id="getFreeEstimate">
  <div class="container">
    <div class="row gx-lg-5 gy-5">
      <div class="col-xl-7 text-md-start text-center">
        <div class="sec-title mb-4">
          <h2>Durable, stylish, and weather <span>- resistant siding with warranties</span></h2>
        </div>

        <p>Siding is your home's first impression-make it last. Our durable, insulated options come in a wide range of
          styles and colors, built to withstand the elements while enhancing curb appeal.</p>

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
        <?= $this->element('form_free_estimate') ?>
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
              <p class="mb-0">New Jersey has a diverse climate, ranging from hot and humid summers to cold and snowy winters. That means your siding needs to withstand temperature fluctuations, moisture, wind, hail, and UV rays. Some of the most durable siding materials are fiber cement, metal, and brick. These materials can last decades without cracking, fading, warping, or rotting. However, they are also more expensive and heavier than other options.</p>
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
              <p class="mb-0">The cost of siding depends on several factors, such as the type and quality of the material, the size and shape of your house, the amount of labor and preparation required, and the warranty and installation fees. Generally speaking, vinyl siding is the most affordable option, followed by wood and engineered wood. Fiber cement, metal, and brick are more expensive options. However, it would help to consider the long-term maintenance and repair costs when choosing siding.</p>
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
              <p class="mb-0">Different types of siding require different levels of care. Vinyl siding is the easiest to maintain, as it only needs an occasional wash with a hose or a soft brush. Wood siding requires more maintenance, such as painting or staining every few years to prevent fading and decay. Fiber cement siding is relatively low-maintenance but may need repainting every 10 to 15 years. Metal siding is also low-maintenance, but it may dent or scratch easily. Brick siding is virtually maintenance-free but may need tuck-pointing every 20 to 30 years.</p>
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
              <p class="mb-1">The style of your siding should match the architectural style of your home and your personal preference. You can choose from various colors, textures, and patterns to create a unique look for your home. Some of the most popular styles are:</p>
              <ul>
                <li>- Clapboard: Horizontal planks that overlap each other.</li>
                <li>- Shingle: Small pieces that resemble roof shingles.</li>
                <li>- Board-and-batten: Vertical planks with narrow strips covering the seams.</li>
                <li>- Shake: Rough-cut pieces that create a rustic look.</li>
                <li>- Stone or brick veneer: Thin layers that mimic the look of natural stone or brick.</li>
                </ul>
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

<!-- clients-section -->
<section class="section partner-section text-center" style="padding-top: 255px; position: relative;">
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