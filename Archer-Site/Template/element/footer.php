    <!-- main-footer -->
    <footer class="main-footer">
      <div class="footer-top bg_secondary">
        <div class="image-layer wow slideInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
          <?= $this->Html->image('footer-bg-house.png', ['alt' => 'footer-bg-house']) ?>
        </div>
        <div class="container">
          <div class="widget-section">
            <div class="pattern-scale" style="background-image: url(<?= $this->Url->image('shape-7.png') ?>);"></div>
            <div class="row justify-content-center clearfix">
              <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                <div class="footer-widget logo-widget">
                  <div class="footer-logo">
                    <div class="logo">
                      <?= $this->Html->link(
                        $this->Html->image('archer-exteriors-logo-white.png', ['alt' => 'archer-exteriors-logo-white']),
                        ['controller' => 'Pages', 'action' => 'display', 'home'],
                        ['escape' => false]
                      ) ?>
                    </div>
                  </div>
                  <div class="text">
                    <p>At Archer Exteriors, we understand that your house is more than just a building; it's your home. As
                      local roofers, we take immense pride in our work and are dedicated to providing our clients with the
                      best possible service. With decades of expertise and skill, we ensure your project is completed
                      right the first time. We are committed to being with you every step of the way, combining our
                      knowledge and dedication to achieve outstanding results.</p>
                  </div>
                  <div class="gurantee-box text-center">
                    <?= $this->Html->link(
                      $this->Html->image('price-match-guarantee.png', [
                        'style' => 'width: 120px;',
                        'alt' => 'Archer Price Match Guarantee',
                        'title' => 'Archer Price Match Guarantee'
                      ]),
                      ['controller' => 'Financings', 'action' => 'priceMatchGuarantee'],
                      ['escape' => false]
                    ) ?>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-6 col-sm-12 footer-column">
                <div class="footer-widget links-widget">
                  <div class="widget-title">
                    <div class="pattern-layer"></div>
                    <h3>Useful Links</h3>
                  </div>
                  <div class="widget-content clearfix">
                    <ul class="list clearfix">
                      <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'display', 'home']) ?></li>
                      <li><?= $this->Html->link('About Us', ['controller' => 'Companies', 'action' => 'aboutUs']) ?></li>
                      <li><?= $this->Html->link('Why Choose Archer', ['controller' => 'Companies', 'action' => 'whyChooseUs']) ?></li>
                      <li><?= $this->Html->link('Our Process', ['controller' => 'Companies', 'action' => 'ourProcess']) ?></li>
                      <li><?= $this->Html->link('Reviews', ['controller' => 'Reviews', 'action' => 'index']) ?></li>
                      <li><?= $this->Html->link('Recent Work', ['controller' => 'Companies', 'action' => 'recentWork']) ?></li>
                      <li><?= $this->Html->link('Financing', ['controller' => 'Financings', 'action' => 'index']) ?></li>
                      <li><?= $this->Html->link('Community Impact', ['controller' => 'Communities', 'action' => 'index']) ?></li>
                      <!-- <li><?= $this->Html->link('Guides', 'https://www.archerexteriors.com/guides', ['target' => '_blank']) ?></li> -->
                      <li><?= $this->Html->link('Refer & Earn', ['controller' => 'Refers', 'action' => 'index']) ?></li>
                      <li><?= $this->Html->link('Contact Us', ['controller' => 'Contacts', 'action' => 'index']) ?></li>
                    </ul>
                    <ul class="list clearfix">
                      <li>
                        <?= $this->Html->link('New Construction', ['controller' => 'Companies', 'action' => 'newConstruction'], ['class' => 'link']) ?>
                      </li>
                      <li>
                        <?= $this->Html->link('Roofing', ['controller' => 'Services', 'action' => 'roofing'], ['class' => 'link']) ?>
                      </li>
                      <li>
                        <?= $this->Html->link('Siding', ['controller' => 'Services', 'action' => 'siding'], ['class' => 'link']) ?>
                      </li>
                      <li>
                        <?= $this->Html->link('Windows', ['controller' => 'Services', 'action' => 'windows'], ['class' => 'link']) ?>
                      </li>
                      <li>
                        <?= $this->Html->link('Doors', ['controller' => 'Services', 'action' => 'doors'], ['class' => 'link']) ?>
                      </li>
                      <li>
                        <?= $this->Html->link('Gutters', ['controller' => 'Services', 'action' => 'gutters'], ['class' => 'link']) ?>
                      </li>
                      <!-- <li><?= $this->Html->link('Fascia and Soffit', ['controller' => 'Services', 'action' => 'other-services']) ?></li>
                      <li><?= $this->Html->link('Flashing and Trim', ['controller' => 'Services', 'action' => 'other-services']) ?></li> -->
                      <li><?= $this->Html->link('Other Services', ['controller' => 'Services', 'action' => 'other-services']) ?></li>
                      <li>
                        <?= $this->Html->link('All Services', ['controller' => 'Services', 'action' => 'index'], ['class' => 'link']) ?>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                <div class="footer-widget office-widget">
                  <div class="widget-title">
                    <div class="pattern-layer"></div>
                    <h3>Working Hours</h3>
                  </div>
                  <div class="widget-content">
                    <div class="office-hour">
                      <div class="item">
                        <span class="date">Monday</span>
                        <span class="time">8 AM - 7 PM</span>
                      </div>
                      <div class="item">
                        <span class="date">Tuesday</span>
                        <span class="time">8 AM - 7 PM</span>
                      </div>
                      <div class="item">
                        <span class="date">Wednesday</span>
                        <span class="time">8 AM - 7 PM</span>
                      </div>
                      <div class="item">
                        <span class="date">Thursday</span>
                        <span class="time">8 AM - 7 PM</span>
                      </div>
                      <div class="item">
                        <span class="date">Friday</span>
                        <span class="time">8 AM - 7 PM</span>
                      </div>
                      <!-- <div class="item">
                        <span class="date">Saturday</span>
                        <span class="time">9 AM - 3 PM</span>
                      </div> -->
                    </div>

                    <div class="btn-wrap mt-5">
                      <?= $this->Html->link(
                        'Join our team',
                        ['controller' => 'Careers', 'action' => 'index'],
                        ['class' => 'theme-btn']
                      ) ?>
                      <?= $this->Html->link(
                        'Service Area',
                        ['controller' => 'ServiceAreas', 'action' => 'index'],
                        ['class' => 'theme-btn']
                      ) ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="inner-box clearfix">
            <div class="copyright pull-left">
              <div class="links">
                <?= $this->Html->link('PRIVACY POLICY', ['controller' => 'Pages', 'action' => 'privacyPolicy']) ?> |
                <?= $this->Html->link('TERMS AND CONDITIONS', ['controller' => 'Pages', 'action' => 'termsAndConditions']) ?> |
                <?= $this->Html->link('SITEMAP', ['controller' => 'Pages', 'action' => 'sitemap']) ?>
              </div>
              <p>Copyright &copy; <?= date('Y') ?> All Rights Reserved by
                <?= $this->Html->link('Archer Exteriors Inc', 'https://www.archerexteriors.com/') ?>.</p>
            </div>
            <ul class="social-links pull-right">
              <li><?= $this->Html->link(
                    '<i class="fab fa-facebook-f"></i>',
                    'http://www.facebook.com/archerexteriors',
                    ['escape' => false, 'target' => '_blank']
                  ) ?></li>
              <li><?= $this->Html->link(
                    '<i class="fab fa-instagram"></i>',
                    'https://www.instagram.com/archerexteriors/',
                    ['escape' => false, 'target' => '_blank']
                  ) ?></li>
              <li><?= $this->Html->link(
                    '<i class="fab fa-tiktok"></i>',
                    'https://www.tiktok.com/@archerexteriors',
                    ['escape' => false, 'target' => '_blank']
                  ) ?></li>
              <li><?= $this->Html->link(
                    '<i class="fab fa-linkedin-in"></i>',
                    'https://www.linkedin.com/company/archer-exteriors-inc/',
                    ['escape' => false, 'target' => '_blank']
                  ) ?></li>
              <li><?= $this->Html->link(
                    '<i class="fab fa-youtube"></i>',
                    'https://www.youtube.com/@archerexteriors',
                    ['escape' => false, 'target' => '_blank']
                  ) ?></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- main-footer end -->