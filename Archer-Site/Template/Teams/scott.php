<?php
// Set Meta Tags
$this->set('title', 'Scott Minghenelli | Your Trusted Exterior Home Improvement Specialist | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Your Trusted Exterior Home Improvement Specialist');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Scott Minghenelli | Your Trusted Exterior Home Improvement Specialist | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Your Trusted Exterior Home Improvement Specialist');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/scott'); // TODO: Change to the current page URL
?>

<!-- Hero-section -->
<section class="salesman_hero">
  <div class="auto-container">

  </div>
</section>
<!-- Hero-section end -->

<!-- Salesman Details Section Start  -->
<section class="section light" style="padding-bottom: 255px;">
  <div class="auto-container">
    <div class="salesman_details_box">
      <div class="row gx-lg-4 gy-5">
        <div class="col-lg-7">
          <div class="left">
            <div class="bio mb-4">
              <div class="img">
                <?= $this->Html->image('salesmans/scott-minghenelli.png', [
                  'class' => 'img-fluid',
                  'alt' => 'Scott Minghenelli',
                  'title' => 'Scott Minghenelli'
                ]) ?>
              </div>
              <div class="desc">
                <h2>Meet <br> <b>Scott Minghenelli</b></h2>
                <h5>Home Exterior Specialist</h5>
                <p>More Than Exteriors — Helping Homeowners Make Smarter Decisions.</p>

                <ul class="social-links mt-3">
                  <li>
                    <?= $this->Html->link(
                      $this->Html->tag('i', '', ['class' => 'fab fa-facebook-f']),
                      'http://www.facebook.com/archerexteriors',
                      ['escape' => false, 'target' => '_blank', 'title' => 'Facebook']
                    ) ?>
                  </li>
                  <li>
                    <?= $this->Html->link(
                      $this->Html->tag('i', '', ['class' => 'fab fa-instagram']),
                      'https://www.instagram.com/archerexteriors/',
                      ['escape' => false, 'target' => '_blank', 'title' => 'Instagram']
                    ) ?>
                  </li>
                  <li>
                    <?= $this->Html->link(
                      $this->Html->tag('i', '', ['class' => 'fab fa-tiktok']),
                      'https://www.tiktok.com/@archerexteriors',
                      ['escape' => false, 'target' => '_blank', 'title' => 'Tiktok']
                    ) ?>
                  </li>
                  <li>
                    <?= $this->Html->link(
                      $this->Html->tag('i', '', ['class' => 'fab fa-linkedin-in']),
                      'https://www.linkedin.com/company/archer-exteriors-inc/',
                      ['escape' => false, 'target' => '_blank', 'title' => 'Linkedin']
                    ) ?>
                  </li>
                  <li>
                    <?= $this->Html->link(
                      $this->Html->tag('i', '', ['class' => 'fab fa-youtube']),
                      'https://www.youtube.com/@archerexteriors',
                      ['escape' => false, 'target' => '_blank', 'title' => 'YouTube']
                    ) ?>
                  </li>
                </ul>
              </div>
            </div>

            <h3 class="title_3 mb-4">Not Just a Quote— <br>A Real Conversation About Your Home.</h3>

            <p>Hi, I’m Scott, your Home Exterior Specialist at Archer Exteriors.</p>
            <p class="mt-4">With over 8 years of experience in the window and door industry, I’ve always had a passion for giving homeowners more options to improve their homes. Today, I’m able to go beyond windows and doors, helping families design their entire exterior for both protection and beauty. At every home show, curb appeal is highlighted as one of the most important aspects of a property — and now, I get to help you build the kind of home you’re proud to showcase.</p>
            <p class="mt-4">On a personal note, I’m married with three grown children, a wonderful granddaughter, and two more grandchildren on the way. Family means everything to me, and they’re a big part of why I love helping other families create homes they can enjoy for generations. In my spare time, I enjoy traveling, boating, and golfing — though I’ll admit I’m far better at boating than golf! Either way, both keep me grounded and remind me that life, much like a home, should be built for enjoyment.</p>
          </div>
        </div>

        <div class="col-lg-5">
          <?= $this->element('forms/form_free_estimate', ['formId' => '14', 'formKey' => 'erickac99713c3638e0e2ef29c3825bbe9048']) ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Salesman Details Section End  -->

<!-- Statistics Section Start  -->
<section class="funfact-section light">
  <?= $this->element('company_statistics') ?>
</section>
<!-- Statistics Section End  -->

<!-- Service Area Section Start  -->
<section class="section" style="position: relative; margin-top: -120px; padding-top: 250px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center">
        <div class="about-image-block">
          <div class="image-box pb-0">
            <div class="pattern-layer" style="background-image: url(<?= $this->Url->image('shape-1.png') ?>);"></div>
            <div class="image">
              <?= $this->Html->image('salesmans/rooted-in-south-jersey.jpg', [
                'alt' => "Proudly Serving Walton to Gulf County",
                'title' => "Proudly Serving Walton to Gulf County"
              ]) ?>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 align-self-center">
        <div class="sec-title">
          <h6><i class="flaticon-roof"></i>Service Area</h6>
          <h2><span>Rooted in South Jersey</span> — Helping Families Across:</h2>
        </div>

        <ul class="check_list serving_area_list mt-3">
          <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Walton County (FL)</li>
          <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Holmes County (FL)</li>
          <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Washington County (FL)</li>
          <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Bay County (FL)</li>
          <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Gulf County (FL)</li>
        </ul>

        <div class="mt-4">
          <?= $this->Html->link(
            'Check Other Locations<i class="flaticon-login"></i>',
            ['controller' => 'ServiceAreas', 'action' => 'index'],
            ['class' => 'theme-btn sm', 'escape' => false]
          ) ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Service Area Section End  -->

<!-- Working Process Section Start  -->
<section class="section working-section text-center" style="padding-bottom: 90px;">
  <div class="container">
    <div class="sec-title light">
      <h6><i class="flaticon-roof"></i>Expertise</h6>
      <h2>My <span>Expertise</span></h2>
    </div>
    <div class="inner-content" style="margin: 0;">
      <div class="row justify-content-center clearfix">
        <div class="col-xl-4 col-md-6 col-sm-12 process-block">
          <div class="process-block-item">
            <div class="inner-box">
              <div class="icon-box">
                <span class="count-box counted">01</span>
                <div class="icon">
                  <?= $this->Html->image('salesmans/clear-simple.svg', [
                    'alt' => 'Clear, Simple Communication',
                    'title' => 'Clear, Simple Communication'
                  ]) ?>
                </div>
              </div>
              <div class="lower-content">
                <h3>Clear, Simple <br> Communication</h3>
                <div class="pattern-layer"></div>
                <p>I believe in making things easy to understand. No industry jargon or confusing terms—just honest,
                  clear explanations so you know exactly what to expect.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 process-block">
          <div class="process-block-item">
            <div class="inner-box">
              <div class="icon-box">
                <span class="count-box counted">02</span>
                <div class="icon">
                  <?= $this->Html->image('salesmans/value-oriented.svg', [
                    'alt' => 'Value-Oriented Guidance',
                    'title' => 'Value-Oriented Guidance'
                  ]) ?>
                </div>
              </div>
              <div class="lower-content">
                <h3>Value-Oriented <br> Guidance</h3>
                <div class="pattern-layer"></div>
                <p>Whether you're repairing storm damage or planning a full exterior upgrade, I'll walk you through
                  your best options based on your needs, budget, and vision. I'm here to add value—not upsell.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 process-block">
          <div class="process-block-item">
            <div class="inner-box">
              <div class="icon-box">
                <span class="count-box counted">03</span>
                <div class="icon">
                  <?= $this->Html->image('salesmans/service-with-integrity.svg', [
                    'alt' => 'Service with Integrity',
                    'title' => 'Service with Integrity'
                  ]) ?>
                </div>
              </div>
              <div class="lower-content">
                <h3>Service with <br> Integrity</h3>
                <div class="pattern-layer"></div>
                <p>My goal is simple: do right by every homeowner I work with. That means honest advice, transparent
                  pricing, and treating your home with the same care I'd give my own.</p>
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
<section class="chooseus-section">
  <?= $this->element('why_choose_us') ?>
</section>
<!-- Why Choose Us Section End -->

<!-- Archie Section Start  -->
<section class="archie_section">
  <?= $this->element('archie_section') ?>
</section>
<!-- Archie Section End  -->

<!-- Reviews section Start  -->
<section class="section light reviews">
  <div class="container">
    <div class="row gy-5">
      <div class="col-xl-6 text-center align-self-center">
        <?= $this->Html->image('salesmans/love-from-local-home-owner.jpg', [
          'class' => 'img-fluid',
          'alt' => 'Love from Local Homeowners',
          'title' => 'Love from Local Homeowners'
        ]) ?>
      </div>
      <div class="col-xl-6 align-self-center">
        <div class="sec-title">
          <h6><i class="flaticon-roof"></i> Reviews</h6>
          <h2>Love from <span>Local Homeowners</span></h2>
        </div>

        <div class="roof_badge">
          <span class="img">
            <?= $this->Html->image('salesmans/quote-left.svg', [
              'style' => 'width: 24px;height: 24px;',
              'alt' => 'From the First Call to the Final Walkthrough—They Were Amazing'
            ]) ?>
          </span>
          <div class="content">
            <h4 style="font-size: 18px;">From the First Call to the Final Walkthrough—They Were Amazing</h4>
          </div>
        </div>

        <div class="my-4">
          <?= $this->Html->link(
            $this->Html->image('salesmans/star.svg', [
              'style' => 'position: relative; top: -3px; margin-right: 5px;width: 24px;',
              'alt' => 'Write a Review'
            ]) . ' Write a Review',
            'https://g.page/r/CQhxOFye5mQmEBM/review',
            [
              'class' => 'theme-btn sm',
              'target' => '_blank',
              'escape' => false
            ]
          ) ?>
        </div>

        <div class="review_slider mt-4">
          <div id="SalesmanReviewSlider" class="owl-carousel owl-theme reviews_slider">

            <div class="item">
              <div class="header">
                <div class="left">
                  <span class="img">LB</span>
                  <div class="details">
                    <h6>Lulzime Bruci</h6>
                  </div>
                </div>
                <div class="right">
                  <?= $this->Html->image('reviews/google-g.png', [
                    'alt' => 'Google',
                    'title' => 'Google'
                  ]) ?>
                </div>
              </div>

              <div class="item_body">
                <ul class="ratings">
                  <li><i class="fi fi-ss-star"></i></li>
                  <li><i class="fi fi-ss-star"></i></li>
                  <li><i class="fi fi-ss-star"></i></li>
                  <li><i class="fi fi-ss-star"></i></li>
                  <li><i class="fi fi-ss-star"></i></li>
                </ul>
                <p class="desc">Storm Guard Roofing did such a marvelous job with my home! I could not be happier with
                  the end result. They made sure everything was perfect and were very meticulous throughout the
                  process. They were extremely thorough, they cleaned everything and removed even the bees nests! I am
                  truly appreciative of the work they did, my home looks brand new! I would recommend this company to
                  anyone and everyone! 100 out of 10! THANK YOU SO MUCH STORM GUARD ROOFING!!!</p>
              </div>
            </div>

            <div class="item">
              <div class="header">
                <div class="left">
                  <span class="img">IC</span>
                  <div class="details">
                    <h6>Island Chef</h6>
                  </div>
                </div>
                <div class="right">
                  <?= $this->Html->image('reviews/google-g.png', [
                    'alt' => 'Google',
                    'title' => 'Google'
                  ]) ?>
                </div>
              </div>

              <div class="item_body">
                <ul class="ratings">
                  <li><i class="fi fi-ss-star"></i></li>
                  <li><i class="fi fi-ss-star"></i></li>
                  <li><i class="fi fi-ss-star"></i></li>
                  <li><i class="fi fi-ss-star"></i></li>
                  <li><i class="fi fi-ss-star"></i></li>
                </ul>
                <p class="desc">We had a good experience with the work promised and the work done ivan Rivera our
                  project manager coordinated with us and his crew will to get the job done in 2 days only the test of
                  time can challenge there work which will be back up by a life time warranty which gives peace of
                  mind for the company and the project manager Ivan Rivera . Thank you guys from AE &TBE Enterprise
                  LLC.</p>
              </div>
            </div>

            <div class="item">
              <div class="header">
                <div class="left">
                  <span class="img">DK</span>
                  <div class="details">
                    <h6>D. Kneller</h6>
                  </div>
                </div>
                <div class="right">
                  <?= $this->Html->image('reviews/google-g.png', [
                    'alt' => 'Google',
                    'title' => 'Google'
                  ]) ?>
                </div>
              </div>

              <div class="item_body">
                <ul class="ratings">
                  <li><i class="fi fi-ss-star"></i></li>
                  <li><i class="fi fi-ss-star"></i></li>
                  <li><i class="fi fi-ss-star"></i></li>
                  <li><i class="fi fi-ss-star"></i></li>
                  <li><i class="fi fi-ss-star"></i></li>
                </ul>
                <p class="desc">After a storm the process of replacing our asphalt shingles was a seamless one. Always
                  returned your call and answered our questions. Their process entailed a final roof inspection and
                  our guy pointed out a missing end cap on a gutter and sprayed a wasp nest for me. That's friendly,
                  great service.</p>
              </div>
            </div>

            <div class="item">
              <div class="header">
                <div class="left">
                  <span class="img">DH</span>
                  <div class="details">
                    <h6>David Hitchner</h6>
                  </div>
                </div>
                <div class="right">
                  <?= $this->Html->image('reviews/google-g.png', [
                    'alt' => 'Google',
                    'title' => 'Google'
                  ]) ?>
                </div>
              </div>

              <div class="item_body">
                <ul class="ratings">
                  <li><i class="fi fi-ss-star"></i></li>
                  <li><i class="fi fi-ss-star"></i></li>
                  <li><i class="fi fi-ss-star"></i></li>
                  <li><i class="fi fi-ss-star"></i></li>
                  <li><i class="fi fi-ss-star"></i></li>
                </ul>
                <p class="desc">Archers has completed numerous roofing and siding jobs for me and It has always been a
                  great experience. Most importantly jobs are finished on time in the agreed time . They do an
                  excellent job !!!</p>
              </div>
            </div>

            <div class="item">
              <div class="header">
                <div class="left">
                  <span class="img">LL</span>
                  <div class="details">
                    <h6>Leah Larson</h6>
                  </div>
                </div>
                <div class="right">
                  <?= $this->Html->image('reviews/google-g.png', [
                    'alt' => 'Google',
                    'title' => 'Google'
                  ]) ?>
                </div>
              </div>

              <div class="item_body">
                <ul class="ratings">
                  <li><i class="fi fi-ss-star"></i></li>
                  <li><i class="fi fi-ss-star"></i></li>
                  <li><i class="fi fi-ss-star"></i></li>
                  <li><i class="fi fi-ss-star"></i></li>
                  <li><i class="fi fi-ss-star"></i></li>
                </ul>
                <p class="desc">Archer's Exteriors replaced my 2 doors, replaced my garage & sunroom roofs. I'm very
                  pleased with the quality of the work they have done & have contacted them about replacing 4 basement
                  windows.</p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

  </div>
</section>
<!-- Reviews section End  -->