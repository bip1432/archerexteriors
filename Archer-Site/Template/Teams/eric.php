<?php
// Set Meta Tags
$this->set('title', 'Erick Perez | Archer Exteriors Home Exterior Specialist');
$this->set('metaDescription', 'Meet Erick Perez, your South Jersey Home Exterior Specialist with 16 years of remodeling experience. Honest advice, tailored solutions, and quality workmanship.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Erick Perez, Archer Exteriors Specialist, South Jersey exterior specialist, home exterior expert South Jersey, exterior remodeling, Erick Perez Archer Exteriors, exterior advisor South Jersey');
$this->set('ogTitle', 'Erick Perez | Archer Exteriors Home Exterior Specialist');
$this->set('ogDescription', 'Meet Erick Perez, your South Jersey Home Exterior Specialist with 16 years of remodeling experience. Honest advice, tailored solutions, and quality workmanship.');
$this->set('ogImage', DOMAIN . '/img/salesmans/erick.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/erick'); // TODO: Change to the current page URL
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
          <?= $this->Html->image('salesmans/erick.png', [
            'class' => 'img-fluid',
            'alt' => 'Erick Perez',
            'title' => 'Erick Perez'
          ]) ?>
        </div>
        <div class="contents">
          <div class="desc">
            <h2>Meet <br> <b>Erick Perez</b></h2>
            <h5>Home Exterior Specialist</h5>
            <div class="quote">I treat every home like it’s my own— because that’s what you deserve.</div>
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
              data-modal-description="Your home means the world to you—and so does your opinion to us. If you’ve had a great experience with <b>Erick Perez</b> and the Archer Exteriors team, we’d be honored if you recommended us to your network. "
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
          <h3 class="title_2 mb-3"><b>Not Just a Quote—</b> <br>A Real Conversation About Your Home.</h3>

          <p>Hi, I’m Erick Perez. I’ve spent the past 16 years serving the remodeling industry and my local
            community, and I believe every homeowner deserves to feel confident in who they hire.</p>
          <p class="mt-3">I take the time to truly listen to my customers—their needs, their wants, and their
            vision. With hands-on experience and a problem-solving mindset, I approach every project with care and a
            commitment to finding the right solution. Whether it’s a small update or a major renovation, I aim to
            create lasting improvements that enhance the way people live. My approach is simple - no surprises, no
            shortcuts—just honest work done right. Helping people is my passion. It’s never about the sale—it’s
            about that moment when a customer looks at their finished project and says, “I’m proud of this.” That
            smile, that satisfaction—that’s what drives me.</p>

          <div class="salesman_serving_area_box mt-4">
            <h2 class="title_3"><b>Rooted in South Jersey — </b> Helping Families Across:</h2>

            <div class="location mt-3">
              <h4>
                <?= $this->Html->image('service-area/map-marker.svg', [
                  'class' => 'img-fluid',
                  'alt' => 'location',
                  'width' => '20'
                ]) ?>
                New Jersey (SOUTH)
              </h4>

              <ul>
                <li>Cape May County (NJ)</li>
                <li>Cumberland County (NJ)</li>
                <li>Salem County (NJ)</li>
                <li>Atlantic County (NJ)</li>
                <li>Gloucester County (NJ)</li>
                <li>Camden County (NJ)</li>
                <li>Burlington County (NJ)</li>
                <li>Ocean County (NJ)</li>
              </ul>
            </div>

            <div class="location mt-3">
              <h4>
                <?= $this->Html->image('service-area/map-marker.svg', [
                  'class' => 'img-fluid',
                  'alt' => 'location',
                  'width' => '20'
                ]) ?>
                Pennsylvania
              </h4>

              <ul>
                <li>Delaware County (PA)</li>
                <li>Chester County (PA)</li>
                <li>Bucks County (PA)</li>
              </ul>
            </div>

            <div class="location mt-3">
              <h4>
                <?= $this->Html->image('service-area/map-marker.svg', [
                  'class' => 'img-fluid',
                  'alt' => 'location',
                  'width' => '20'
                ]) ?>
                Delaware
              </h4>

              <ul>
                <li>New Castle County(DE)</li>
              </ul>
            </div>
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
                  <span class="img">MS</span>
                  <div class="details">
                    <h6>MaryAnn Sheridan</h6>

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
                <p class="desc">Erick Perez was the best explained in full detail everything we needed to know about
                  exterior doors he was extremely knowledgeable and courteous , he will get the job done right so
                  excited for our new doors ty again Erick Perez and Dave Colligan and his partner that put the doors
                  on today was the best so friendly and informative no worry's here I will share with all my friends
                  about Archers Exteriors specialist ty again guys.</p>
              </div>


            </div>

            <div class="item">
              <div class="header">
                <div class="left">
                  <span class="img">TW</span>
                  <div class="details">
                    <h6>Toby Woods</h6>
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
                <p class="desc">Eric did a fantastic job putting together a quote for new siding with new garage
                  windows and back garage door. He took what I was thinking and was able to piece together a beautiful
                  color combination for my house. Highly recommend Eric for any of your home improvement ideas.</p>


              </div>

            </div>

            <div class="item">
              <div class="header">
                <div class="left">
                  <span class="img">EH</span>
                  <div class="details">
                    <h6>Edward Holmes</h6>
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
                <p class="desc">Although they haven't started the roof yet we had an exceptional experience from the
                  first phone call to the consultation with Eric Perez. Eric was extremely personable and
                  professional. Thank you.</p>

              </div>


            </div>

            <div class="item">
              <div class="header">
                <div class="left">
                  <span class="img">NL</span>
                  <div class="details">
                    <h6>Nola Lorincz</h6>
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
                <p class="desc">Erick was extremely professional, and did an amazing job explaining the differences in
                  the quality of the many siding materials, and attention to detail. Archer Exteriors is affordable,
                  trustworthy, and very professional. Thank you Erick for making our home project go so smoothly. N.&
                  F. Lorincz</p>
              </div>


            </div>

            <div class="item">
              <div class="header">
                <div class="left">
                  <span class="img">LP</span>
                  <div class="details">
                    <h6>Lauren Parker</h6>
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
                <p class="desc">Erick spent time hearing our concerns about our existing gutters. He walked us through
                  the quote, expectations, and answered all our questions. Looking forward to having the job done in a
                  few weeks.</p>
              </div>


            </div>

            <div class="item">
              <div class="header">
                <div class="left">
                  <span class="img">MM</span>
                  <div class="details">
                    <h6>Monique Mihlebach</h6>
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
                <p class="desc">We have had a great experience with Eric from Archer Exteriors on 3 different
                  property's over the years. Eric is very thorough. He explains all the details clearly and answered
                  any questions we had. The roofs have been completed in a timely manor and clean up has been
                  excellent. We are very impressed with their work and would highly recommend Eric to anyone .</p>


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
                  our
                  guy pointed out a missing end cap on a gutter and sprayed a wasp nest for me. That's friendly, great
                  service.</p>
              </div>


            </div>

          </div>
        </div>

      </div>
    </div>

  </div>
</section>
<!-- Reviews section End  -->

