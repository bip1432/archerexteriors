<?php
// Set Meta Tags
$this->set('title', 'Financing Options | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Flexible payment solutions to fit your budget.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Financing Options | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Flexible payment solutions to fit your budget.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN); // TODO: Change to the current page URL
?>

<!-- Hero-section -->
<section class="page_hero financing">
  <div class="auto-container">
    <div class="contents text-center">
      <h1 class="title">Financing Options</h1>
      <p class="desc">Flexible payment solutions to fit your budget.</p>
    </div>
  </div>
</section>
<!-- Hero-section end -->

<!-- Statistics Section Start  -->
<section class="funfact-section pb-5 light">
  <?= $this->element('company_statistics') ?>
</section>
<!-- Statistics Section End  -->

<!-- Advertisement  -->
<section>
  <div class="container">
    <?= $this->element('advertisement') ?>
  </div>
</section>


<!-- How It Works Section Start  -->
<section class="section light">
  <div class="container">
    <div class="sec-title text-center">
      <h2>How <span>It Works</span></h2>
      <p class="desc mx-auto" style="max-width: 600px;">We walk you through everything during your
        estimate. We want to help you get what you need.</p>
    </div>

    <div class="row clearfix">
      <div class="col-xl-4 col-md-6 col-sm-12 process-block" style="margin-top: 120px;">
        <div class="process-block-item">
          <div class="inner-box" style="min-height: auto;">
            <div class="icon-box">
              <span class="count-box counted">01</span>
              <div class="icon">
                <?= $this->Html->image('finance-options/get-prequalified.svg', [
                  'alt' => 'Get pre-qualified without any impact on your credit'
                ]) ?>
              </div>
            </div>
            <div class="lower-content">
              <div class="pattern-layer"></div>
              <p>Get pre-qualified without any impact on your credit.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-12 process-block" style="margin-top: 120px;">
        <div class="process-block-item">
          <div class="inner-box" style="min-height: auto;">
            <div class="icon-box">
              <span class="count-box counted">02</span>
              <div class="icon">
                <?= $this->Html->image('finance-options/browse-offers.svg', [
                  'alt' => 'Browse offers tailor made for you'
                ]) ?>
              </div>
            </div>
            <div class="lower-content">
              <div class="pattern-layer"></div>
              <p>Browse offers tailor made for you (based on your credit).</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-12 process-block" style="margin-top: 120px;">
        <div class="process-block-item">
          <div class="inner-box" style="min-height: auto;">
            <div class="icon-box">
              <span class="count-box counted">03</span>
              <div class="icon">
                <?= $this->Html->image('finance-options/choose-the-fixed.svg', [
                  'alt' => 'Choose the fixed term and monthly payment that fits your needs.'
                ]) ?>
              </div>
            </div>
            <div class="lower-content">
              <div class="pattern-layer"></div>
              <p>Choose the fixed term and monthly payment that fits your needs.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- How It Works Section End  -->

<!-- Finance Section Start  -->
<section class="section finance_options_sec">
  <div class="auto-container">
    <div class="finance_options_box mb-4">
      <div class="left">
        <?= $this->Html->image('finance-options/financing-options-available-insignia.png', [
          'alt' => 'Financing Options Available',
          'title' => 'Financing Options Available'
        ]) ?>
      </div>
      <div>
        <div class="sec-title mb-0">
          <h2>Financing <span>Options Available</span></h2>
          <p class="sec_desc lead mt-3">For qualified applicants based on individual credit scores. Archer Exterior is
            neither a lender nor broker. Lender approves applicants.*</p>
        </div>
      </div>
    </div>
    <p style="font-size: 15px; max-width: 1000px; margin: 0 auto;">*Archer Exterior is neither a lender nor a broker.
      All financing is provided by 3rd party lending institutions under the terms and conditions of each lender. All
      applications are subject to approval through credit, income, and residency verification. All advertised finance
      terms, rates and payments are subject to change without notice. Advertised terms are solely to be used as
      estimating tools, actual terms will be disclosed at time of approval. Not all applications will be approved for
      all programs. Archer Exteriors does not assist with, counsel, or negotiate financing other than submitting
      credit applications on behalf of our customers to the lender. Approved applications become customers of the
      lender and will make payments directly to lender. Lender has final say to approve or decline of an application
      based on fair lending guidelines.</p>
  </div>
</section>
<!-- Finance Section End  -->

<!-- Working Process Section Start  -->
<section class="section working-section text-center">
  <div class="large-container">
    <div class="sec-title light">
      <h6><i class="flaticon-roof"></i>Our Process</h6>
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


<!-- Price Match Guarantee Section Start  -->
<section class="section" style="padding-top: 255px; position: relative;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 image-column">
        <div class="about-image-block">
          <div class="image-box pb-0">
            <div class="pattern-layer" style="background-image: url(<?= $this->Url->image('shape-1.png') ?>);"></div>
            <div class="image">
              <?= $this->Html->image('finance-options/archer-exterior-price-match-guarantee.jpg', [
                'alt' => "Archer Exteriors' Price Match Guarantee",
                'title' => "Archer Exteriors' Price Match Guarantee"
              ]) ?>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-12 align-self-center">
        <div class="price_match_batch mb-4">
          <div class="img">
            <?= $this->Html->image('price-match-guarantee.png', [
              'alt' => 'Price Match Guarantee',
              'title' => 'Price Match Guarantee'
            ]) ?>
          </div>
          <h3 class="title_2">Archer Exteriors' <b>Price Match Guarantee</b></h3>
        </div>
        <p class="price_match_batch_desc">At Archer Exteriors, we are committed to providing our customers with the
          best quality and value for their
          home improvement projects. That's why we're excited to offer our Price Match Guarantee on all our services.
        </p>
        <div class="mt-4">
          <?= $this->Html->link(
            'Learn More<i class="flaticon-login"></i>',
            ['controller' => 'Financings', 'action' => 'priceMatchGuarantee'],
            ['class' => 'theme-btn sm', 'escape' => false]
          ) ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Price Match Guarantee Section End  -->

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


<!-- clients-section -->
<section class="section clients-section text-center">
  <?= $this->element('our_partners') ?>
</section>
<!-- clients-section end -->