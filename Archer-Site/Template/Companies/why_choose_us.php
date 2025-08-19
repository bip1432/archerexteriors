<?php
// Set Meta Tags
$this->set('title', 'The Best Exterior Contractor Choice | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - The Best Exterior Contractor Choice');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'The Best Exterior Contractor Choice | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - The Best Exterior Contractor Choice');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/why-choose-us'); // TODO: Change to the current page URL
?>

<!-- Hero-section -->
<section class="page_hero why_choose_us">
  <div class="auto-container">
    <div class="contents text-center">
      <h1 class="title">Why Homeowners <br> Choose Archer Exteriors</h1>
      <p class="desc">Trusted craftsmanship, quality materials, and service you can count on</p>
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

<!-- FAQ Section Start  -->
<section class="section light">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Our Speciality</h6>
      <h2>Red Flags <span>to Watch Out for When Comparing Contractors</span></h2>
      <p class="section_desc">Not all companies are created equal. See how Archer Exteriors outperforms the
        competition in roofing, siding, windows, doors, decking, gutters, and repairs for home and commercial
        projects.</p>
    </div>

    <div class="faq_wrap mt-5">
      <div class="accordion" id="faqSpecialityAccordion">

        <div class="accordion-item">
          <h2 id="faqSpecialityAccordionH1" class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
              data-bs-target="#faqSpecialityAccordion1" aria-expanded="true" aria-controls="faqSpecialityAccordion1">
              Unclear or Nonexistent Warranties
            </button>
          </h2>
          <div id="faqSpecialityAccordion1" class="accordion-collapse collapse show"
            aria-labelledby="faqSpecialityAccordionH1" data-bs-parent="#faqSpecialityAccordion">
            <div class="accordion-body">
              <ul class="check_list mt-2 list-style-disc" style="list-style: disc; padding-left: 20px;">
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Get written warranties:</b> Ensure
                    your contractor provides clear, written warranties to protect your investment.</span></li>
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Ensure third-party registration:</b>
                    Archer Exteriors registers your warranty with a reputable company like GAF, guaranteeing your
                    coverage is supported by an industry leader.</span></li>
                <li>
                  <?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?>
                  <span><b>Avoid internal warranties:</b> Be cautious of competitors who keep warranties in-house; you risk losing coverage if they go out of business.</span>
                </li>
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Trust Archer Exteriors:</b> Our roofing
                    warranties are backed by GAF, a company with over 100 years of reliability, ensuring your investment
                    is secure.</span></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="faqSpecialityAccordionH2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#faqSpecialityAccordion2" aria-expanded="false" aria-controls="faqSpecialityAccordion2">
              Vague or Incomplete Quotes
            </button>
          </h2>
          <div id="faqSpecialityAccordion2" class="accordion-collapse collapse"
            aria-labelledby="faqSpecialityAccordionH2" data-bs-parent="#faqSpecialityAccordion">
            <div class="accordion-body">
              <ul class="check_list mt-2 list-style-disc" style="list-style: disc; padding-left: 20px;">
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Request detailed quotes:</b> Always
                    ask for quotes that list all materials and details of what will be used in your project.</span>
                </li>
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Archer Exteriors specifies
                      everything:</b> We clearly outline every material, including high-quality products like GAF
                    shingles and premium accessories.</span></li>
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Beware of competitors cutting
                      corners:</b> Some contractors may use GAF shingles but save costs by using lower-quality
                    accessories, which could compromise your project.</span></li>
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Transparency ensures quality:</b> With
                    Archer Exteriors, you know exactly what's going into your home, ensuring it's built to last with
                    the best materials.</span></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="faqSpecialityAccordionH3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#faqSpecialityAccordion3" aria-expanded="false" aria-controls="faqSpecialityAccordion3">
              Unrealistically Low Bids
            </button>
          </h2>
          <div id="faqSpecialityAccordion3" class="accordion-collapse collapse"
            aria-labelledby="faqSpecialityAccordionH3" data-bs-parent="#faqSpecialityAccordion">
            <div class="accordion-body">
              <ul class="check_list mt-2 list-style-disc" style="list-style: disc; padding-left: 20px;">
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Be cautious of low bids:</b> A
                    significantly lower price might seem tempting, but it often signals compromised quality.</span>
                </li>
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Quality over price:</b> When making
                    permanent changes to your home, it's essential to prioritize quality materials and
                    craftsmanship.</span></li>
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Watch for shortcuts:</b> Low bids can
                    mean the use of substandard materials or shortcuts that reduce the durability and aesthetic of
                    your home.</span></li>
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Archer Exteriors ensures quality:</b>
                    We believe in doing the job right the first time, using top-quality materials and expert
                    craftsmanship to ensure your home not only looks great but stands the test of time.</span></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="faqSpecialityAccordionH4">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#faqSpecialityAccordion4" aria-expanded="false" aria-controls="faqSpecialityAccordion4">
              Lack of Proper Licensing and Insurance
            </button>
          </h2>
          <div id="faqSpecialityAccordion4" class="accordion-collapse collapse"
            aria-labelledby="faqSpecialityAccordionH4" data-bs-parent="#faqSpecialityAccordion">
            <div class="accordion-body">
              <ul class="check_list mt-2 list-style-disc" style="list-style: disc; padding-left: 20px;">
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Verify licensing and
                      insurance:</b> Ensure your contractor is fully licensed and insured to protect yourself and your
                    property.</span>
                </li>
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Risks of unlicensed contractors:</b>
                    Without proper credentials, you risk poor workmanship and could be held liable for accidents or
                    damages on your property.</span></li>
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Avoid legal and financial
                      pitfalls:</b> Unlicensed contractors may leave you vulnerable to significant financial and legal
                    issues.</span></li>
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Archer Exteriors offers full
                      protection:</b> We are fully licensed and insured, safeguarding you and your investment
                    throughout the entire project.</span></li>
              </ul>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- FAQ Section End -->

<!-- Activities Slider Section Start  -->
<section class="section">
  <?= $this->element('current_activities') ?>
</section>
<!-- Activities Slider Section End  -->

<!-- Reviews section Start  -->
<section class="section light reviews">
  <?= $this->element('reviews') ?>
</section>
<!-- Reviews section End  -->

<!-- clients-section -->
<section class="section clients-section text-center">
  <?= $this->element('our_partners') ?>
</section>
<!-- clients-section end -->