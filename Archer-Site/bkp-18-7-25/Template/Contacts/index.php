<?php
$this->set('title', 'Contact | Roofing, Siding, Windows | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Contact');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Contact | Roofing, Siding, Windows | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Contact');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/contact'); // TODO: Change to the current page URL
?>

<!-- Hero-section -->
<section class="page_hero_v2 contact">
  <div class="inner_content">
    <div class="image-layer">
    </div>
    <div class="auto-container">
      <div class="row clearfix">
        <div class="col-xl-8 col-lg-12 col-md-12 content-column">
          <div class="content-box">
            <h6>get in touch with us</h6>
            <h1>Contact <br> Archer Exteriors</h1>
            <p>Get Your FREE Estimate Today! <br>
              Fill out the form, or call us <b><?= COMPANY_PHONE ?></b> <br>
              to set up a free in-home consultation.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Hero-section end -->

<!-- Statistics Section Start  -->
<section class="funfact-section light">
  <?= $this->element('company_statistics') ?>
</section>
<!-- Statistics Section End  -->

<!-- Headquarters Section Start  -->
<section class="section light">
  <div class="container">
    <div class="row gx-lg-5 gy-5">
      <div class="col-xl-7">
        <div class="sec-title mb-3">
          <h6><i class="flaticon-roof"></i> Headquarters</h6>
          <h2>Archer Exteriors' <br> <span>National Headquarters</span></h2>
        </div>

        <div class="roof_badge justify-content-center justify-content-xl-start my-4">
          <span class="img">
            <?= $this->Html->image('home-white.svg', [
              'class' => 'svg',
              'alt' => 'Executing 400+ jobs every week',
              'title' => 'Executing 400+ jobs every week'
            ]) ?>
          </span>
          <div class="content">
            <?= $this->element('jobs_strength') ?>
          </div>
        </div>

        <p>Contact us for <b>Home Remodeling</b> including roofing, siding, and window replacements. We also provide
          <b>New Construction & Commercial services</b> <?= $this->Html->link('nationwide!', ['controller' => 'ServiceAreas', 'action' => 'index']) ?>
        </p>

        <div class="our_service service-area mt-4">
          <div class="row" style="gap: 20px 0;">
            <div class="col-xl-4 col-lg-4 col-sm-6">
              <div class="item">
                <div class="icon">
                  <?= $this->Html->image('service-area/map-marker.svg', [
                    'class' => 'img-fluid svg',
                    'alt' => 'Headquarters Location'
                  ]) ?>
                </div>
                <h4 class="item_title"><?= COMPANY_ADDRESS ?></h4>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6">
              <div class="item">
                <div class="icon">
                  <?= $this->Html->image('service-area/call.svg', [
                    'class' => 'img-fluid svg',
                    'alt' => 'Call'
                  ]) ?>
                </div>
                <h4 class="item_title"><?= COMPANY_PHONE ?> <br> Mon-Fri: 8am- 5pm</h4>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6">
              <div class="item">
                <div class="icon">
                  <?= $this->Html->image('service-area/license.svg', [
                    'class' => 'img-fluid svg',
                    'alt' => 'License'
                  ]) ?>
                </div>
                <h4 class="item_title">NJ LIC#13VH01492600 <br> PA LIC#PA082127</h4>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-4">
          <a href="/archerexteriors/pages/free-estimate" class="theme-btn sm">Get a Free Estimate <i class="flaticon-login"></i></a>
        </div>
      </div>

      <div class="col-xl-5">
        <div class="estimateForm_wrap">
          <div class="header">
            <h4>Contact Us</h4>
            <span class="icon"><i class="fi fi-rr-list-check"></i></span>
          </div>

          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="First name" required="">
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Last name" required="">
              </div>
              <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Email" required="">
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Phone" required="">
              </div>

              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="State" required="">
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="County" required="">
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="City" required="">
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Zip" required="">
              </div>

              <div class="col-12">
                <select class="form-select">
                  <option selected="">Subject</option>
                  <option>Google Search</option>
                  <option>Bing Search</option>
                  <option>Social media (Facebook, Instagram, etc.)</option>
                  <option>Printed Flyer or Mailer</option>
                  <option>Referred by Someone</option>
                  <option>Online Forum / Community Event</option>
                  <option>Saw a Sign/Billboard</option>
                  <option>Trade Shows</option>
                  <option>YouTube / Video Content</option>
                  <option>Newsletter or Email Campaign</option>
                  <option>Other - Please Specify Below</option>
                </select>
              </div>

              <div class="col-12">
                <textarea class="form-control" id="" rows="3"
                  placeholder="Message"></textarea>
              </div>

              <div class="col-12 mt-4">
                <button type="submit" class="theme-btn sm"> Submit </button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Headquarters Section End  -->

<!-- Location Section Start  -->
<section class="section">
  <div class="container">
    <div class="row gy-4">
      <div class="col-xl-8">
        <div class="sec-title mb-0">
          <h6><i class="flaticon-roof"></i>Location</h6>
          <h2>National Headquarter’s <span>Location</span></h2>
          <p class="desc">Proudly serving in following areas <br> AL, CO, DE, FL, GA, MA, MD, NJ, OH, PA, SC, VA and
            adding more...</p>
        </div>
      </div>

      <div class="col-xl-4 my-xl-auto text-xl-end">
        <?= $this->Html->link(
          'Check Other Locations<i class="flaticon-login"></i>',
          ['controller' => 'ServiceAreas', 'action' => 'index'],
          ['class' => 'theme-btn', 'escape' => false]
        ) ?>
      </div>
    </div>

    <div class="mt-5">
      <!-- Elfsight Google Maps | National Headquarters -->
      <script src="https://static.elfsight.com/platform/platform.js" async></script>
      <div class="elfsight-app-faf0d89c-5509-4122-a21c-11431d37cd7d" data-elfsight-app-lazy></div>
    </div>
  </div>
</section>
<!-- Location Section End  -->

<!-- Archie Section Start  -->
<section class="archie_section">
  <?= $this->element('archie_section') ?>
</section>
<!-- Archie Section End  -->

<!-- Why Choose Us Section Start  -->
<section class="chooseus-section">
  <?= $this->element('why_choose_us') ?>
</section>
<!-- Why Choose Us Section End -->

<!-- clients-section -->
<section class="section clients-section text-center">
  <?= $this->element('our_partners') ?>
</section>
<!-- clients-section end -->

<!-- Special Financing Available Section Start  -->
<section class="section light text-center text-lg-start">
  <div class="container">
    <div class="row gy-5">
      <div class="col-lg-6 col-md-12 image-column">
        <?= $this->Html->image('finance-options/special-finance-available.jpg', [
          'class' => 'rad_4',
          'alt' => 'Special Financing Available',
          'title' => 'Special Financing Available'
        ]) ?>
      </div>

      <div class="col-lg-6 col-md-12 align-self-center">
        <div class="sec-title mb-4">
          <h2>Special <span>Financing Available</span></h2>
        </div>
        <p>For qualified applicants based on individual credit scores. Archer Exterior is neither a lender nor broker.
          Lender approves applicants.</p>

        <p class="mt-4" style="font-size: 12px; line-height: 20px;">*Archer Exterior is neither a lender nor a broker.
          All financing is provided by 3rd party lending institutions under the terms and conditions of each lender.
          All applications are subject to approval through credit, income, and residency verification. All advertised
          finance terms, rates and payments are subject to change without notice. Advertised terms are solely to be
          used as estimating tools, actual terms will be disclosed at time of approval. Not all applications will be
          approved for all programs. Archer Exteriors does not assist with, counsel, or negotiate financing other than
          submitting credit applications on behalf of our customers to the lender. Approved applications become
          customers of the lender and will make payments directly to lender. Lender has final say to approve or
          decline of an application based on fair lending guidelines.</p>
      </div>
    </div>
  </div>
</section>
<!-- Special Financing Available Section End  -->