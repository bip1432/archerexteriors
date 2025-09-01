    <!-- Preloader -->
    <!-- <div class="loader-wrap">
      <div class="preloader">
        <div class="preloader-close">Preloader Close</div>
      </div>
      <div class="layer layer-one"><span class="overlay"></span></div>
      <div class="layer layer-two"><span class="overlay"></span></div>
      <div class="layer layer-three"><span class="overlay"></span></div>
    </div> -->


    <!-- sidebar cart item -->
    <div class="xs-sidebar-group info-group info-sidebar">
      <div class="xs-overlay xs-bg-black"></div>
      <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
          <div class="widget-heading">
            <a href="#" class="close-side-widget">X</a>
          </div>
          <div class="sidebar-textwidget">
            <div class="sidebar-info-contents">
              <div class="content-inner">
                <div class="logo">
                  <?= $this->Html->link(
                    $this->Html->image('archer-exteriors-logo-white.png', ['alt' => 'Archer Exteriors', 'title' => 'Archer Exteriors']),
                    ['controller' => 'Pages', 'action' => 'display', 'home'],
                    ['escape' => false]
                  ) ?>
                </div>
                <div class="content-box">
                  <h4>About Us</h4>
                  <p>With a dedication to excellence, we go the extra mile to provide unparalleled service, ensuring your
                    satisfaction at every step of the way. Let us be your trusted partner in transforming your home into
                    the haven you've always dreamed of.</p>
                  <?= $this->Html->link(
                    'About Us<i class="flaticon-login"></i>',
                    ['controller' => 'Companies', 'action' => 'aboutUs'],
                    ['class' => 'theme-btn sm', 'escape' => false]
                  ) ?>

                </div>
                <div class="contact-info">
                  <h4>National Headquarters</h4>
                  <ul>
                    <li><?php echo COMPANY_ADDRESS1; ?></li>
                    <li><?php echo COMPANY_ADDRESS2; ?></li>
                    <li><a href="tel:<?php echo COMPANY_PHONE_TEL; ?>"><?php echo COMPANY_PHONE; ?></a></li>
                  </ul>
                </div>
                <ul class="social-box">
                  <li><a href="http://www.facebook.com/archerexteriors" target="_blank"><i
                        class="fab fa-facebook-f"></i></a></li>
                  <li><a href="https://www.instagram.com/archerexteriors/" target="_blank"><i
                        class="fab fa-instagram"></i></a></li>
                  <li><a href="https://www.tiktok.com/@archerexteriors" target="_blank"><i class="fab fa-tiktok"></i></a>
                  </li>
                  <li><a href="https://www.linkedin.com/company/archer-exteriors-inc/" target="_blank"><i
                        class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="https://www.youtube.com/@archerexteriors" target="_blank"><i
                        class="fab fa-youtube"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END sidebar widget item -->


    <!-- main header -->
    <header class="main-header">
      <div class="header-top">
        <div class="large-container">
          <div class="top-inner clearfix">
            <div class="top-left pull-left">
              <p><i class="flaticon-home"></i>No Order Too Tall!</p>
            </div>
            <div class="top-right pull-right">
              <ul class="social-links clearfix d-none d-lg-inline-block">
                <li><a href="http://www.facebook.com/archerexteriors" target="_blank"><i
                      class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://www.instagram.com/archerexteriors/" target="_blank"><i
                      class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.tiktok.com/@archerexteriors" target="_blank"><i class="fab fa-tiktok"></i></a>
                </li>
                <li><a href="https://www.linkedin.com/company/archer-exteriors-inc/" target="_blank"><i
                      class="fab fa-linkedin-in"></i></a></li>
                <li><a href="https://www.youtube.com/@archerexteriors" target="_blank"><i class="fab fa-youtube"></i></a>
                </li>
              </ul>

              <div class="logo d-inline-block d-md-none">
                <?= $this->Html->link(
                  $this->Html->image('Archer-Exteriors-Logo.png', ['style' => 'width: 180px;', 'alt' => 'Archer Exteriors', 'title' => 'Archer Exteriors']),
                  ['controller' => 'Pages', 'action' => 'display', 'home'],
                  ['escape' => false]
                ) ?>
              </div>

              <div class="btn-box">
                <?= $this->Html->link(
                  'Get a Free Estimate<i class="flaticon-login"></i>',
                  ['controller' => 'Estimates', 'action' => 'index'],
                  ['class' => 'theme-btn', 'escape' => false]
                ) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-upper">
        <div class="large-container">
          <div class="outer-box clearfix">
            <div class="logo-box d-none d-md-block">
              <div class="logo">
                <?= $this->Html->link(
                  $this->Html->image('Archer-Exteriors-Logo.png', ['alt' => 'Archer Exteriors', 'title' => 'Archer Exteriors']),
                  ['controller' => 'Pages', 'action' => 'display', 'home'],
                  ['escape' => false]
                ) ?>
              </div>
            </div>
            <div class="menu-area">
              <!--Mobile Navigation Toggler-->
              <div class="mobile-nav-toggler">
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
              </div>
              <nav class="main-menu navbar-expand-md navbar-light">
                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                  <ul class="navigation clearfix">
                    <li class="dropdown">
                      <?= $this->Html->link(
                        'Services',
                        ['controller' => 'Services', 'action' => 'index'],
                        ['escape' => false]
                      ) ?>
                      <div class="megamenu">
                        <div class="megaTab_wrap">
                          <ul class="nav nav-tabs mega-tab-nav" role="tablist">
                            <li class="nav-item" role="presentation">
                              <?= $this->Html->link(
                                $this->Html->image('services/icons/roof.svg', ['class' => 'icon', 'alt' => 'Roofing', 'title' => 'Roofing']) . 'Roofing',
                                ['controller' => 'Services', 'action' => 'roofing'],
                                ['class' => 'nav-link active', 'data-tab' => 'roofing', 'role' => 'tab', 'escape' => false]
                              ) ?>
                            </li>
                            <li class="nav-item" role="presentation">
                              <?= $this->Html->link(
                                $this->Html->image('services/icons/siding.svg', ['class' => 'icon', 'alt' => 'Siding', 'title' => 'Siding']) . 'Siding',
                                ['controller' => 'Services', 'action' => 'siding'],
                                ['class' => 'nav-link', 'data-tab' => 'siding', 'role' => 'tab', 'escape' => false]
                              ) ?>
                            </li>
                            <li class="nav-item" role="presentation">
                              <?= $this->Html->link(
                                $this->Html->image('services/icons/window.svg', ['class' => 'icon', 'alt' => 'Windows', 'title' => 'Windows']) . 'Windows',
                                ['controller' => 'Services', 'action' => 'windows'],
                                ['class' => 'nav-link', 'data-tab' => 'windows', 'role' => 'tab', 'escape' => false]
                              ) ?>
                            </li>
                            <li class="nav-item" role="presentation">
                              <?= $this->Html->link(
                                $this->Html->image('services/icons/door.svg', ['class' => 'icon', 'alt' => 'Doors', 'title' => 'Doors']) . ' Doors',
                                ['controller' => 'Services', 'action' => 'doors'],
                                ['class' => 'nav-link', 'data-tab' => 'doors', 'role' => 'tab', 'escape' => false]
                              ) ?>
                            </li>
                            <li class="nav-item" role="presentation">
                              <?= $this->Html->link(
                                $this->Html->image('services/icons/gutter.svg', ['class' => 'icon', 'alt' => 'Gutters', 'title' => 'Gutters']) . 'Gutters',
                                ['controller' => 'Services', 'action' => 'gutters'],
                                ['class' => 'nav-link', 'data-tab' => 'gutters', 'role' => 'tab', 'escape' => false]
                              ) ?>
                            </li>
                            <li class="nav-item" role="presentation">
                              <?= $this->Html->link(
                                $this->Html->image('services/icons/other-services.svg', ['class' => 'icon', 'alt' => 'Other Services', 'title' => 'Other Services']) . 'Other Services',
                                ['controller' => 'Services', 'action' => 'other-services'],
                                ['class' => 'nav-link', 'data-tab' => 'otherServices', 'role' => 'tab', 'escape' => false]
                              ) ?>
                            </li>
                            <!-- services/icons/others.svg -->
                            <li class="nav-item">
                              <?= $this->Html->link(
                                $this->Html->image('services/icons/services-all.svg', ['class' => 'icon', 'alt' => 'Roofing', 'title' => 'Roofing']) . 'All Services',
                                ['controller' => 'Services', 'action' => 'index'],
                                ['class' => 'nav-link', 'data-tab' => 'all-service', 'role' => 'tab', 'escape' => false]
                              ) ?>
                            </li>
                          </ul>
                          <div class="tab-content mega-tab-content" id="megaTabContent">
                            <div class="tab-pane fade show active tab-pane-roofing" data-tab-content="roofing">
                              <div class="content_inner">

                                <div class="subMenu_list">
                                  <h4 class="title_4">A Solid Roof Starts with a Solid Team</h4>
                                  <p>We provide professional roof replacements, installations, and repairs using high-quality materials. Our team is trained to handle everything from storm damage to aging shingles. Get peace of mind with a roof built to last.</p>
                                  <div class="my-auto">
                                    <?= $this->Html->image('menu/offers/archer-exteriors-offer-banner-menu-roofing.jpg', ['class' => 'img-fluid', 'alt' => '25% OFF for all roof installation and replacement', 'title' => '25% OFF for all roof installation and replacement']) ?>
                                  </div>
                                  <div class="mt-auto">
                                    <?= $this->Html->link(
                                      $this->Html->image('check-specials.svg', [
                                        'style' => 'position: relative; top: -2px; margin-right: 5px;',
                                        'alt' => 'Check Specials'
                                      ]) . 'Check Specials',
                                      ['controller' => 'Offers', 'action' => 'goldenTicket'],
                                      ['class' => 'theme-btn sm', 'escape' => false]
                                    ) ?>
                                  </div>
                                </div>
                                <div class="mega_award_wrap">
                                  <div class="banner">
                                    <?= $this->Html->image('menu/roofing-banner.jpg', ['class' => 'img-fluid', 'alt' => 'A Solid Roof Starts with a Solid Team', 'title' => 'A Solid Roof Starts with a Solid Team']) ?>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="tab-pane fade tab-pane-siding" data-tab-content="siding">
                              <div class="content_inner">
                                <div class="subMenu_list">
                                  <h4 class="title_4">Built to Protect. Designed to Impress</h4>
                                  <p>Enhance your home’s curb appeal with durable, low-maintenance siding. We offer a wide selection of styles and colors to match your vision. Every siding job is installed with expert precision.</p>
                                  <div class="my-auto">
                                    <?= $this->Html->image('menu/offers/archer-exteriors-offer-banner-menu-siding.jpg', ['class' => 'img-fluid', 'alt' => '25% OFF for all siding installation', 'title' => '25% OFF for all siding installation']) ?>
                                  </div>
                                  <div class="mt-auto">
                                    <?= $this->Html->link(
                                      $this->Html->image('check-specials.svg', [
                                        'style' => 'position: relative; top: -2px; margin-right: 5px;',
                                        'alt' => 'Check Specials'
                                      ]) . 'Check Specials',
                                      ['controller' => 'Offers', 'action' => 'goldenTicket'],
                                      ['class' => 'theme-btn sm', 'escape' => false]
                                    ) ?>
                                  </div>
                                </div>
                                <div class="mega_award_wrap">
                                  <div class="banner">
                                    <?= $this->Html->image('menu/siding-banner.jpg', ['class' => 'img-fluid', 'alt' => 'Siding', 'title' => 'Siding']) ?>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="tab-pane fade tab-pane-windows" data-tab-content="windows">
                              <div class="content_inner">
                                <div class="subMenu_list">
                                  <h4 class="title_4">Energy-Efficient Windows, Stunning Results</h4>
                                  <p>Upgrade to energy-efficient windows that look great and help lower utility bills. We custom-fit each window for a seamless installation. Choose from trusted brands like OKNA and ProVia.</p>
                                  <div class="my-auto">
                                    <?= $this->Html->image('menu/offers/archer-exteriors-offer-banner-menu-window.jpg', ['class' => 'img-fluid', 'alt' => '$250 OFF per window for installation and replacement', 'title' => '$250 OFF per window for installation and replacement']) ?>
                                  </div>
                                  <div class="mt-auto">
                                    <?= $this->Html->link(
                                      $this->Html->image('check-specials.svg', [
                                        'style' => 'position: relative; top: -2px; margin-right: 5px;',
                                        'alt' => 'Check Specials'
                                      ]) . 'Check Specials',
                                      ['controller' => 'Offers', 'action' => 'goldenTicket'],
                                      ['class' => 'theme-btn sm', 'escape' => false]
                                    ) ?>
                                  </div>
                                </div>
                                <div class="mega_award_wrap">
                                  <div class="banner">
                                    <?= $this->Html->image('menu/windows-banner.jpg', ['class' => 'img-fluid', 'alt' => 'Energy-Efficient Windows, Stunning Results', 'title' => 'Energy-Efficient Windows, Stunning Results']) ?>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="tab-pane fade tab-pane-doors" data-tab-content="doors">
                              <div class="content_inner">
                                <div class="subMenu_list">
                                  <h4 class="title_4">Doors That Welcome with Style & Security</h4>
                                  <p>We install front, storm, and patio doors that combine style with security. Each door is made to withstand the elements and elevate your home’s entry. Our team ensures a clean and proper fit every time.</p>
                                  <div class="my-auto">
                                    <?= $this->Html->image('menu/offers/archer-exteriors-offer-banner-menu-door.jpg', ['class' => 'img-fluid', 'alt' => '$250 OFF per door for installation and replacement', 'title' => '$250 OFF per door for installation and replacement']) ?>
                                  </div>
                                  <div class="mt-auto">
                                    <?= $this->Html->link(
                                      $this->Html->image('check-specials.svg', [
                                        'style' => 'position: relative; top: -2px; margin-right: 5px;',
                                        'alt' => 'Check Specials'
                                      ]) . 'Check Specials',
                                      ['controller' => 'Offers', 'action' => 'goldenTicket'],
                                      ['class' => 'theme-btn sm', 'escape' => false]
                                    ) ?>
                                  </div>
                                </div>
                                <div class="mega_award_wrap">
                                  <div class="banner">
                                    <?= $this->Html->image('menu/doors-banner.jpg', ['class' => 'img-fluid', 'alt' => 'Doors That Welcome with Style & Security', 'title' => 'Doors That Welcome with Style & Security']) ?>
                                  </div>
                                </div>
                              </div>
                            </div>


                            <div class="tab-pane fade tab-pane-gutter" data-tab-content="gutters">
                              <div class="content_inner">
                                <div class="subMenu_list">
                                  <h4 class="title_4">Seamless Gutters. Stress-Free Living</h4>
                                  <p>Protect your home from water damage with seamless gutters and guards. We install systems that are built to perform and blend in. Keep water flowing and your foundation safe.</p>
                                  <div class="mt-auto">
                                    <?= $this->Html->link(
                                      $this->Html->image('check-specials.svg', [
                                        'style' => 'position: relative; top: -2px; margin-right: 5px;',
                                        'alt' => 'Check Specials'
                                      ]) . 'Check Specials',
                                      ['controller' => 'Offers', 'action' => 'goldenTicket'],
                                      ['class' => 'theme-btn sm', 'escape' => false]
                                    ) ?>
                                  </div>
                                </div>
                                <div class="mega_award_wrap">
                                  <div class="banner">
                                    <?= $this->Html->image('menu/gutters-banner.jpg', ['class' => 'img-fluid', 'alt' => 'Seamless Gutters. Stress-Free Living', 'title' => 'Seamless Gutters. Stress-Free Living']) ?>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="tab-pane fade tab-pane-others" data-tab-content="otherServices">
                              <div class="content_inner">
                                <div class="subMenu_list">
                                  <h4 class="title_4">Fascia, Soffit, Flashing, Trim and Skylight Installation</h4>
                                  <p>Our services include installing and repairing fascia, soffit, flashing, trim, and skylights to keep your exterior secure, weather-resistant, and visually appealing. Trust our experienced team to ensure every part of your home’s exterior looks great and performs its best.</p>
                                  <div class="mt-auto">
                                    <?= $this->Html->link(
                                      $this->Html->image('check-specials.svg', [
                                        'style' => 'position: relative; top: -2px; margin-right: 5px;',
                                        'alt' => 'Check Specials'
                                      ]) . 'Check Specials',
                                      ['controller' => 'Offers', 'action' => 'goldenTicket'],
                                      ['class' => 'theme-btn sm', 'escape' => false]
                                    ) ?>
                                  </div>
                                </div>
                                <div class="mega_award_wrap">
                                  <div class="banner">
                                    <?= $this->Html->image('menu/other-services-banner.jpg', ['class' => 'img-fluid', 'alt' => 'Fascia, Soffit, Flashing, Trim and Skylight Installation', 'title' => 'Fascia, Soffit, Flashing, Trim and Skylight Installation']) ?>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="tab-pane fade tab-pane-all-service" data-tab-content="all-service">
                              <div class="content_inner">
                                <div class="subMenu_list">
                                  <h4 class="title_4">40 Years of Excellence. A Legacy of Trust.</h4>
                                  <p>Archer Exteriors offers full-service solutions for your home’s exterior. We handle roofing, siding, windows, doors, gutters and more. One trusted team for everything you need.</p>
                                  <div class="mt-auto">
                                    <?= $this->Html->link(
                                      $this->Html->image('check-specials.svg', [
                                        'style' => 'position: relative; top: -2px; margin-right: 5px;',
                                        'alt' => 'Check Specials'
                                      ]) . 'Check Specials',
                                      ['controller' => 'Offers', 'action' => 'goldenTicket'],
                                      ['class' => 'theme-btn sm', 'escape' => false]
                                    ) ?>
                                  </div>
                                </div>
                                <div class="mega_award_wrap">
                                  <div class="banner">
                                    <?= $this->Html->image('menu/all-services.jpg', ['class' => 'img-fluid', 'alt' => 'All Services', 'title' => 'All Services']) ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <ul class="for_mobile_menu">
                        <li><?= $this->Html->link('Roofing', ['controller' => 'Services', 'action' => 'roofing']) ?></li>
                        <li><?= $this->Html->link('Siding', ['controller' => 'Services', 'action' => 'siding']) ?></li>
                        <li><?= $this->Html->link('Windows', ['controller' => 'Services', 'action' => 'windows']) ?></li>
                        <li><?= $this->Html->link('Doors', ['controller' => 'Services', 'action' => 'doors']) ?></li>
                        <li><?= $this->Html->link('Gutters', ['controller' => 'Services', 'action' => 'gutters']) ?></li>
                        <li><?= $this->Html->link('Other Services', ['controller' => 'Services', 'action' => 'other-services']) ?></li>
                        <li><?= $this->Html->link('All Services', ['controller' => 'Services', 'action' => 'index']) ?></li>
                      </ul>
                    </li>

                    <li><?= $this->Html->link('Financing', ['controller' => 'Financings', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link('Service Area', ['controller' => 'ServiceAreas', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link('Community Impact', ['controller' => 'Communities', 'action' => 'index']) ?></li>

                    <li class="dropdown">
                      <?= $this->Html->link('Company', ['controller' => 'Companies', 'action' => 'aboutUs']) ?>
                      <ul>
                        <li><?= $this->Html->link('About Us', ['controller' => 'Companies', 'action' => 'aboutUs']) ?></li>
                        <li><?= $this->Html->link('Our Process', ['controller' => 'Companies', 'action' => 'ourProcess']) ?></li>
                        <li><?= $this->Html->link('Why Choose Archer', ['controller' => 'Companies', 'action' => 'whyChooseUs']) ?></li>
                        <li><?= $this->Html->link('Reviews', ['controller' => 'Reviews', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link('See Our Recent Work', ['controller' => 'Companies', 'action' => 'recentWork']) ?></li>
                        <li><?= $this->Html->link('Archer in Action', ['controller' => 'Offers', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link('New construction', ['controller' => 'Companies', 'action' => 'newConstruction']) ?></li>
                        <li><?= $this->Html->link('Refer & Earn', ['controller' => 'Refers', 'action' => 'index']) ?></li>
                        <li><?= $this->Html->link('Archie\'s Corner', ['controller' => 'Companies', 'action' => 'archieCorner']) ?></li>
                      </ul>
                    </li>
                    <li><?= $this->Html->link('Contact', ['controller' => 'Contacts', 'action' => 'index']) ?></li>

                  </ul>
                </div>
              </nav>
              <div class="menu-right-content clearfix pull-left">
                <div class="info-box">
                  <div class="box">
                    <i class="flaticon-clock"></i>
                    <h5><a href="tel:<?php echo COMPANY_PHONE_TEL; ?>"><?php echo COMPANY_PHONE; ?></a></h5>
                    <!-- <span>Mon - Fri: 8am to 5pm (EST)</span> -->
                  </div>
                </div>
                <div class="nav-box">
                  <div class="nav-btn nav-toggler navSidebar-button clearfix">
                    <i class="flaticon-sort"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--sticky Header-->
      <div class="sticky-header">
        <div class="large-container">
          <div class="outer-box clearfix">
            <div class="logo-box pull-left">
              <div class="logo">
                <?= $this->Html->link(
                  $this->Html->image('Archer-Exteriors-Logo-Samll.png', ['alt' => 'Archer Exteriors', 'title' => 'Archer Exteriors']),
                  ['controller' => 'Pages', 'action' => 'display', 'home'],
                  ['escape' => false]
                ) ?>
              </div>
            </div>
            <div class="menu-area">
              <nav class="main-menu clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
              </nav>
              <div class="menu-right-content clearfix pull-left">
                <div class="info-box">
                  <div class="box">
                    <i class="flaticon-clock"></i>
                    <h5><a href="tel:<?php echo COMPANY_PHONE_TEL; ?>"><?php echo COMPANY_PHONE; ?></a></h5>
                    <!-- <span>Mon - Fri: 8am to 5pm (EST)</span> -->
                  </div>
                </div>

                <div class="nav-box">
                  <div class="nav-btn nav-toggler navSidebar-button clearfix">
                    <i class="flaticon-sort"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
      <div class="menu-backdrop"></div>
      <div class="close-btn"><i class="fas fa-times"></i></div>

      <nav class="menu-box">
        <div class="nav-logo">
          <?= $this->Html->link(
            $this->Html->image('archer-exteriors-logo-white.png', ['alt' => 'Archer Exteriors', 'title' => 'Archer Exteriors']),
            ['controller' => 'Pages', 'action' => 'display', 'home'],
            ['escape' => false]
          ) ?>
        </div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
          <h4>National Headquarters</h4>
          <ul>
            <li><?php echo COMPANY_ADDRESS1; ?></li>
            <li><?php echo COMPANY_ADDRESS2; ?></li>
            <li><a href="tel:<?php echo COMPANY_PHONE_TEL; ?>"><?php echo COMPANY_PHONE; ?></li>
          </ul>
        </div>
        <div class="social-links">
          <ul class="clearfix">
            <li><a href="http://www.facebook.com/archerexteriors" target="_blank"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li><a href="https://www.instagram.com/archerexteriors/" target="_blank"><i
                  class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.tiktok.com/@archerexteriors" target="_blank"><i class="fab fa-tiktok"></i></a>
            </li>
            <li><a href="https://www.linkedin.com/company/archer-exteriors-inc/" target="_blank"><i
                  class="fab fa-linkedin-in"></i></a></li>
            <li><a href="https://www.youtube.com/@archerexteriors" target="_blank"><i class="fab fa-youtube"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </div><!-- End Mobile Menu -->