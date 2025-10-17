<div class="container">
  <div class="sec-title text-center">
    <h6><i class="flaticon-roof"></i>Available Services</h6>
    <h2>Professional Exterior Services in <span><?= h($stateName) ?></span></h2>
    <p class="section_desc" style="font-size: 20px;">Local experts with over <?= YEARS_OF_EXPERIENCE ?>+ years of family-run experience.</p>
  </div>

  <!-- Include Service Item  -->
  <div class="service_item odd">
    <div class="service_img wow slideInLeft animated" data-wow-delay="000ms" data-wow-duration="1500ms">

      <div class="vb-slider">
        <div class="vb-carousel owl-carousel">
          <div class="vb-item" data-idx="0"
            data-front="https://archerext.com/archerexteriors/img/service-area/area-services/archer-exteriors-roofing-service1.jpg"></div>
          <div class="vb-item" data-idx="1"
            data-front="https://archerext.com/archerexteriors/img/service-area/area-services/archer-exteriors-roofing-service2.jpg"></div>
          <div class="vb-item" data-idx="2"
            data-front="https://archerext.com/archerexteriors/img/service-area/area-services/archer-exteriors-roofing-service3.jpg"></div>
        </div>

        <div class="vb-nav vb-left"><button class="vb-btn vb-prev" aria-label="prev"><i class="fi fi-br-angle-left"></i></button></div>
        <div class="vb-nav vb-right"><button class="vb-btn vb-next" aria-label="next"><i class="fi fi-br-angle-right"></i></button></div>
      </div>

      <div class="offer_box">
        <?= $this->Html->image('service-area/area-services/discount-25-percent.png', [
          'class' => '',
          'alt' => '25% OFF For all Roof Installation',
          'title' => '25% OFF For all Roof Installation'
        ]) ?>
        <div>
          <h4>For all Roof Installation</h4>
          <p class="mt-1">Limited Time Offer</p>
        </div>
      </div>

    </div>
    <div class="service_details">
      <div class="service_details_inner">
        <h2 class="title"><?= $this->Html->link('Roof Replacement in ' . $stateName, '/service-area/roofing-in-' . $stateSlug, ['class' => 'link']) ?></h2>

        <p>Looking for reliable roof replacement in <?= $stateName ?>? Our expert team provides high-quality roofing solutions to protect your home and enhance curb appeal. We work with durable materials and skilled craftsmanship to ensure long-lasting results. Whether your roof is damaged, aged, or simply in need of an upgrade, we deliver professional service tailored to your needs. Trust us to keep your home safe, energy-efficient, and beautiful year-round.</p>

        <h4 class="title_3 mt-4">A Solid Roof Starts with a Solid Team.</h4>
        <p>At Archer Exteriors, we bring 40+ years of experience to ensure your roof replacement is smooth, efficient, and built to last. From selecting the perfect roof to navigating financing, we're with you every step of the way.</p>

        <div class="mt-4">
          <h5 class="mb-3"><b>Partnering with the Best</b></h5>
          <div class="d-flex gap-3">
            <?= $this->Html->image('golden-ticket/logos/logo-gaf.png', [
              'class' => 'rad_4',
              'alt' => 'GAF',
              'title' => 'GAF'
            ]) ?>
            <p class="lead">We are <b>GAF Master Elite®</b> Certified and Members of the GAF President’s Club</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Include Service Item Reverse -->
  <div class="service_item even">
    <div class="service_img wow slideInRight animated" data-wow-delay="000ms" data-wow-duration="1500ms">
      <div class="vb-slider">
        <div class="vb-carousel owl-carousel">
          <div class="vb-item" data-idx="0"
            data-front="https://archerext.com/archerexteriors/img/service-area/area-services/archer-exteriors-siding-service1.jpg"></div>
          <div class="vb-item" data-idx="1"
            data-front="https://archerext.com/archerexteriors/img/service-area/area-services/archer-exteriors-siding-service2.jpg"></div>
          <div class="vb-item" data-idx="2"
            data-front="https://archerext.com/archerexteriors/img/service-area/area-services/archer-exteriors-siding-service3.jpg"></div>
        </div>

        <div class="vb-nav vb-left"><button class="vb-btn vb-prev" aria-label="prev"><i class="fi fi-br-angle-left"></i></button></div>
        <div class="vb-nav vb-right"><button class="vb-btn vb-next" aria-label="next"><i class="fi fi-br-angle-right"></i></button></div>
      </div>

      <div class="offer_box">
        <?= $this->Html->image('service-area/area-services/discount-25-percent.png', [
          'class' => '',
          'alt' => '25% OFF For all Siding Installation',
          'title' => '25% OFF For all Siding Installation'
        ]) ?>
        <div>
          <h4>For all Siding Installation</h4>
          <p class="mt-1">Limited Time Offer</p>
        </div>
      </div>
    </div>
    <div class="service_details">
      <div class="service_details_inner">
        <h2 class="title"><?= $this->Html->link('Siding Replacement in ' . $stateName, '/service-area/siding-in-' . $stateSlug, ['class' => 'link']) ?></h2>

        <p>Upgrade your home's exterior with professional siding replacement in <?= $stateName ?>. Our team installs durable, weather-resistant siding that not only protects your property but also boosts curb appeal. We offer a wide range of styles and colors to match your home's design. With expert craftsmanship and quality materials, we ensure lasting beauty and performance. Transform your home with siding that's built to stand up to <?= $stateName ?>'s climate.</p>

        <h4 class="title_3 mt-4">Built to Protect and Impress</h4>
        <p>Siding is your home's first impression-make it last. Our durable, insulated options come in a wide range of styles and colors, built to withstand the elements while enhancing curb appeal.</p>

        <div class="mt-4">
          <h5 class="mb-3"><b>Partnering with the Best</b></h5>
          <div class="d-flex gap-3 flex-wrap">
            <?= $this->Html->image('golden-ticket/logos/logo-alside.png', [
              'class' => 'img-fluid rad_4',
              'style' => 'height: 45px;',
              'alt' => 'Alside',
              'title' => 'Alside'
            ]) ?>
            <?= $this->Html->image('golden-ticket/logos/logo-certainteed.png', [
              'class' => 'img-fluid rad_4',
              'style' => 'height: 45px;',
              'alt' => 'Certainteed',
              'title' => 'Certainteed'
            ]) ?>
            <?= $this->Html->image('golden-ticket/logos/logo-james-hardy.png', [
              'class' => 'img-fluid rad_4',
              'style' => 'height: 45px;',
              'alt' => 'James Hardie',
              'title' => 'James Harie'
            ]) ?>
          </div>
        </div>
      </div>

    </div>
  </div>



  <!-- Include Service Item  -->
  <div class="service_item odd">
    <div class="service_img wow slideInLeft  animated" data-wow-delay="000ms" data-wow-duration="1500ms">
      <div class="vb-slider">
        <div class="vb-carousel owl-carousel">
          <div class="vb-item" data-idx="0"
            data-front="https://archerext.com/archerexteriors/img/service-area/area-services/archer-exteriors-windows-service1.jpg"></div>
          <div class="vb-item" data-idx="1"
            data-front="https://archerext.com/archerexteriors/img/service-area/area-services/archer-exteriors-windows-service2.jpg"></div>
          <div class="vb-item" data-idx="2"
            data-front="https://archerext.com/archerexteriors/img/service-area/area-services/archer-exteriors-windows-service3.jpg"></div>
        </div>

        <div class="vb-nav vb-left"><button class="vb-btn vb-prev" aria-label="prev"><i class="fi fi-br-angle-left"></i></button></div>
        <div class="vb-nav vb-right"><button class="vb-btn vb-next" aria-label="next"><i class="fi fi-br-angle-right"></i></button></div>
      </div>

      <div class="offer_box">
        <?= $this->Html->image('service-area/area-services/discount-250-dollar.png', [
          'class' => '',
          'alt' => '250$ OFF Per Window Replacement',
          'title' => '250$ OFF Per Window Replacement'
        ]) ?>
        <div>
          <h4>Per Window Replacement</h4>
          <p class="mt-1">Limited Time Offer</p>
        </div>
      </div>
    </div>

    <div class="service_details">
      <div class="service_details_inner">
        <h2 class="title"><?= $this->Html->link('Window Replacement in ' . $stateName, '/service-area/windows-in-' . $stateSlug, ['class' => 'link']) ?></h2>

        <p>Enhance your home's comfort and efficiency with professional window replacement in <?= $stateName ?>. Our high-quality windows improve insulation, reduce energy costs, and add lasting style to your property. From modern designs to classic styles, we offer options to fit every home. With expert installation and durable materials, we ensure a perfect fit and long-term performance. Trust us to brighten your home with windows that combine beauty, strength, and energy savings.</p>

        <h4 class="title_3 mt-4">Energy-Efficient Windows. Stunning Results.</h4>
        <p>Upgrade your view with Archer Exteriors. We offer a wide range of window options to match your style and needs. From classic double-hung to sleek casement and energy-efficient Energy Star windows, find the perfect fit for your home.</p>

        <div class="mt-4">
          <h5 class="mb-3"><b>Partnering with the Best</b></h5>
          <div class="d-flex gap-3 flex-wrap">
            <?= $this->Html->image('golden-ticket/logos/logo-mi-windows.png', [
              'class' => 'img-fluid rad_4',
              'style' => 'height: 45px;',
              'alt' => 'Mi Windows and Doors',
              'title' => 'Mi Windows and Doors'
            ]) ?>
            <?= $this->Html->image('golden-ticket/logos/logo-provia.png', [
              'class' => 'img-fluid rad_4',
              'style' => 'height: 45px;',
              'alt' => 'Provia',
              'title' => 'Provia'
            ]) ?>
            <?= $this->Html->image('golden-ticket/logos/logo-okna.png', [
              'class' => 'img-fluid rad_4',
              'style' => 'height: 45px;',
              'alt' => 'Okna',
              'title' => 'Okna'
            ]) ?>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Include Service Item Reverse -->
  <div class="service_item even">
    <div class="service_img wow slideInRight animated" data-wow-delay="000ms" data-wow-duration="1500ms">
      <div class="vb-slider">
        <div class="vb-carousel owl-carousel">
          <div class="vb-item" data-idx="0"
            data-front="https://archerext.com/archerexteriors/img/service-area/area-services/archer-exteriors-doors-service1.jpg"></div>
          <div class="vb-item" data-idx="1"
            data-front="https://archerext.com/archerexteriors/img/service-area/area-services/archer-exteriors-doors-service2.jpg"></div>
          <div class="vb-item" data-idx="2"
            data-front="https://archerext.com/archerexteriors/img/service-area/area-services/archer-exteriors-doors-service3.jpg"></div>
        </div>

        <div class="vb-nav vb-left"><button class="vb-btn vb-prev" aria-label="prev"><i class="fi fi-br-angle-left"></i></button></div>
        <div class="vb-nav vb-right"><button class="vb-btn vb-next" aria-label="next"><i class="fi fi-br-angle-right"></i></button></div>
      </div>

      <div class="offer_box">
        <?= $this->Html->image('service-area/area-services/discount-250-dollar.png', [
          'class' => '',
          'alt' => '250$ OFF Per Door Replacement',
          'title' => '250$ OFF Per Door Replacement'
        ]) ?>
        <div>
          <h4>Per Door Replacement</h4>
          <p class="mt-1">Limited Time Offer</p>
        </div>
      </div>
    </div>

    <div class="service_details">
      <div class="service_details_inner">
        <h2 class="title"><?= $this->Html->link('Door Replacement Services ' . $stateName, '/service-area/doors-in-' . $stateSlug, ['class' => 'link']) ?></h2>

        <p>Upgrade your home's security and style with our professional door replacement services in <?= $stateName ?>. We install high-quality entry, patio, and interior doors designed for durability, energy efficiency, and curb appeal. Our wide selection of designs and finishes ensures the perfect match for your home. With expert installation and attention to detail, we provide doors that enhance both function and appearance. Trust us for reliable, long-lasting door replacement solutions.</p>

        <h4 class="title_3 mt-4">Doors That Welcome You with Style & Security.</h4>
        <p>Your front door is more than just an entryway - it sets the tone for your home. Whether you're looking for classic elegance, modern design, or enhanced security, we offer a variety of high-quality entry doors to suit your style and needs.</p>

        <div class="mt-4">
          <h5 class="mb-3"><b>Partnering with the Best</b></h5>
          <div class="d-flex gap-3 flex-wrap">
            <?= $this->Html->image('golden-ticket/logos/logo-provia.png', [
              'class' => 'img-fluid rad_4',
              'style' => 'height: 45px;',
              'alt' => 'Provia',
              'title' => 'Provia'
            ]) ?>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Include Service Item  -->
  <div class="service_item odd">
    <div class="service_img wow slideInLeft animated" data-wow-delay="000ms" data-wow-duration="1500ms">
      <div class="vb-slider">
        <div class="vb-carousel owl-carousel">
          <div class="vb-item" data-idx="0"
            data-front="https://archerext.com/archerexteriors/img/service-area/area-services/archer-exteriors-gutters-service1.jpg"></div>
          <div class="vb-item" data-idx="1"
            data-front="https://archerext.com/archerexteriors/img/service-area/area-services/archer-exteriors-gutters-service2.jpg"></div>
          <div class="vb-item" data-idx="2"
            data-front="https://archerext.com/archerexteriors/img/service-area/area-services/archer-exteriors-gutters-service3.jpg"></div>
        </div>

        <div class="vb-nav vb-left"><button class="vb-btn vb-prev" aria-label="prev"><i class="fi fi-br-angle-left"></i></button></div>
        <div class="vb-nav vb-right"><button class="vb-btn vb-next" aria-label="next"><i class="fi fi-br-angle-right"></i></button></div>
      </div>
    </div>
    <div class="service_details">
      <div class="service_details_inner">
        <h2 class="title"><?= $this->Html->link('Gutter Replacement Services ' . $stateName, '/service-area/gutters-in-' . $stateSlug, ['class' => 'link']) ?></h2>

        <p>Clogged or overflowing gutters can lead to costly damage to your roof, siding, and foundation. With over 40 years of expertise, Archer Exteriors delivers top-quality gutter protection, installation using premium materials and expert craftsmanship.</p>

        <h4 class="title_3 mt-4">Seamless Gutters. Stress-Free Living</h4>
        <p>Understanding the importance of gutter services is key to protecting your home. Gutters direct rainwater away from your roof, walls, and foundation, helping prevent costly water damage, mold growth, and erosion around your property. Regular cleaning, proper installation, and quality materials ensure your gutters work efficiently year-round. At Archer Exteriors, we offer seamless gutter systems, gutter guards, and expert installation to keep your home safe and dry.</p>
      </div>
    </div>
  </div>

</div>

<!-- Plugin for slider  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>