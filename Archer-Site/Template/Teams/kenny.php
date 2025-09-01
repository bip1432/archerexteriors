<?php
// Set Meta Tags
$this->set('title', 'Kenny Fowler | Trusted Exterior Expert in Walton to Gulf County, FL');
$this->set('metaDescription', 'Meet Kenny Fowler, your trusted Home Exterior Specialist with 15+ years’ experience. Serving Walton to Gulf County, FL with honest advice, value, and integrity.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Kenny Fowler, Kenneth Fowler, Home Exterior Specialist Florida, Archer Exteriors Kenny Fowler, Emerald Coast exterior expert, Walton County FL exterior services, Gulf County FL home improvement, honest exterior guidance FL');
$this->set('ogTitle', 'Kenny Fowler | Trusted Exterior Expert in Walton to Gulf County, FL');
$this->set('ogDescription', 'Meet Kenny Fowler, your trusted Home Exterior Specialist with 15+ years’ experience. Serving Walton to Gulf County, FL with honest advice, value, and integrity.');
$this->set('ogImage', DOMAIN . '/img/salesmans/kenny-fowler.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/kenny'); // TODO: Change to the current page URL
?>

<!-- Hero-section -->
<section class="salesman_hero">
  <div class="auto-container">

  </div>
</section>
<!-- Hero-section end -->

<!-- Salesman Details Section Start  -->
<section class="section light">
  <div class="auto-container">
    <div class="salesman_profile_box">
      <div class="bio mb-4">
        <div class="img">
          <?= $this->Html->image('salesmans/kenny-fowler.png', [
            'class' => 'img-fluid',
            'alt' => 'Kenny Fowler',
            'title' => 'Kenny Fowler'
          ]) ?>
        </div>
        <div class="contents">
          <div class="desc">
            <h2>Meet <br> <b>Kenny Fowler</b></h2>
            <h5>Home Exterior Specialist</h5>
            <div class="quote">Transparency That Builds More Than Homes — It Builds Trust.</div>
          </div>

          <div class="social_wrap">
            <p>We're Social</p>
            <ul class="social-links">
              <li>
                <a href="http://www.facebook.com/archerexteriors" target="_blank" title="Facebook">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li><a href="https://www.instagram.com/archerexteriors/" target="_blank" title="Instagram"><i
                    class="fab fa-instagram"></i></a></li>
              <li><a href="https://www.tiktok.com/@archerexteriors" target="_blank" title="Tiktok"><i
                    class="fab fa-tiktok"></i></a>
              </li>
              <li><a href="https://www.linkedin.com/company/archer-exteriors-inc/" target="_blank" title="Linkedin"><i
                    class="fab fa-linkedin-in"></i></a></li>
              <li><a href="https://www.youtube.com/@archerexteriors" target="_blank" title="YouTube"><i
                    class="fab fa-youtube"></i></a>
              </li>
            </ul>
          </div>

          <div class="profile_share">
            <span class="profile_share_btn" id="btn-share"
              data-modal-title="We’d Love Your Recommendation"
              data-modal-description="Your home means the world to you—and so does your opinion to us. If you’ve had a great experience with <b>Kenny Fowler</b> and the Archer Exteriors team, we’d be honored if you recommended us to your network. "
              data-facebook-label="Share on Facebook"
              data-twitter-label="Share on Twitter"
              data-twitter-text="Twitter Text"
              data-linkedin-label="Share on LinkedIn"
              data-linkedin-title="LinkedIn Title"
              data-linkedin-summary="LinkedIn Summary"
              title="We’d Love Your Recommendation">
              <i class="fi fi-rr-arrow-up-from-square"></i> Share
            </span>
          </div>

        </div>
      </div>
    </div>


    <div class="salesman_details_box">
      <div class="row gx-lg-4 gy-5">
        <div class="col-lg-7">
          <h3 class="title_2 mb-4"><b>Not Just a Quote—</b> <br>A Real Conversation About Your Home.</h3>

          <p>Hi, I’m Kenny, your local Home Exterior Specialist at Archer Exteriors. With more than 15 years in the industry, I bring a blend of hands-on experience, professionalism, and genuine care to every project. I started my career at the ground level and worked my way into a management role at a major building materials company, gaining the knowledge and insight to help homeowners choose the right products and plans to protect what matters most — their home.</p>
          <p class="mt-4">Beyond work, I’m a proud father of two. My family means the world to me, and when I’m not serving homeowners, you’ll likely find me coaching little league, out fishing, or spending quality time with my loved ones. Those moments keep me grounded and fuel my dedication to giving every customer the same care and attention I would give my own family.</p>

          <div class="salesman_serving_area_box mt-4">
            <h2 class="title_3"><b>Proudly Serving Walton to Gulf County</b> — And Every Home in Between.</h2>

            <div class="location mt-4">
              <h4>
                <?= $this->Html->image('service-area/map-marker.svg', [
                  'class' => 'img-fluid',
                  'alt' => 'location',
                  'width' => '20'
                ]) ?>
                Serving Florida
              </h4>

              <ul>
                <li>Walton County (FL)</li>
                <li>Holmes County (FL)</li>
                <li>Washington County (FL)</li>
                <li>Bay County (FL)</li>
                <li>Gulf County (FL)</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-5">
          <?= $this->element('forms/form_free_estimate', ['formId' => '29', 'formKey' => 'kenny60985244d6216506576a050eaf1dc39a']) ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Salesman Details Section End  -->


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