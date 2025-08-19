<?php
// Set Meta Tags
$this->set('title', 'GAF Master Elite® | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - GAF Master Elite®');
$this->set('metaKeywords', STATIC_KEYWORDS . ', GAF Master Elite®, Archer Exteriors');
$this->set('ogTitle', 'GAF Master Elite® | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - GAF Master Elite®');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/gaf-master-elite');
?>

<!-- Hero-section -->
<section class="page_hero gaf_hero">
  <div class="auto-container">
    <div class="contents text-center">
      <?= $this->Html->image('gaf-master/logo-gaf-master-elite.png', [
        'class' => 'img-fluid mb-3',
        'alt' => 'GAF Master Elite®',
        'title' => 'GAF Master Elite®',
        'width' => '250'
      ]) ?>
      <h1 class="title">Archer Exteriors is a Certified <br>GAF Master Elite® Contractor </h1>
    </div>
  </div>
</section>
<!-- Hero-section end -->

<!-- Advertisement  -->
<section>
  <div class="container">
    <?= $this->element('advertisement') ?>
  </div>
</section>


<!-- GAF Master Elite® Section Start  -->
<section class="section light">
  <div class="container">
    <div class="row gx-lg-5 gy-5 text-center text-lg-start flex-column-reverse flex-lg-row">
      <div class="col-lg-6 col-md-12 align-self-center">
        <div class="sec-title">
          <h2>Archer Exteriors - <span>GAF’s top standard as GAF Master Elite® Contractors.</span></h2>
        </div>

        <p>Archer Exteriors takes pride in being apart of the <a
            href="https://www.gaf.com/en-us/blog/your-home/gaf-presidents-club-the-best-of-the-best-281474980238937"
            target="_blank">top 2% of roofing contractors</a> in America who is held to GAF’s top standard as GAF
          Master Elite® Contractors. </p>
        <p class="mt-4"><a href="https://www.gaf.com/en-us/plan-design/homeowner-education/choose-gaf-roofer"
            target="_blank">GAF’s Master Elite® Contractors</a> are the only people allowed to offer GAF’s strongest
          warranties like their Golden Pledge® Limited Warranty.</p>
        <p class="mt-4">What’s even more impressive is that less than half of Master Elite® Contractors qualify for
          GAF’s President’s Club award. To qualify, contractors must be GAF Master Elite® and show excellence in three
          categories: Performance, Reliability, and Service.</p>

      </div>

      <div class="col-lg-6 col-md-12 align-self-center">
        <?= $this->Html->image('gaf-master/gaf-master-banner.png', [
          'class' => 'rad_4',
          'alt' => 'Archer Exteriors - GAF’s top standard as GAF Master Elite® Contractors.',
          'title' => 'Archer Exteriors - GAF’s top standard as GAF Master Elite® Contractors.'
        ]) ?>
      </div>
    </div>
  </div>
</section>
<!-- GAF Master Elite® Section End  -->

<!-- GAF Master Elite® Certified Roofers Section Start  -->
<section class="section text-center">
  <div class="auto-container">
    <?= $this->Html->image('gaf-master/logo-master-elite-roofing.png', [
      'class' => 'img-fluid',
      'alt' => 'GAF Master Elite Certified Roofers',
      'title' => 'GAF Master Elite Certified Roofers'
    ]) ?>
    <div class="sec-title mt-3">
      <h2>GAF Master Elite <span>Certified Roofers</span></h2>
    </div>
    <p>Looking for top-tier roofing professionals who meet GAF's highest standards? Look no further than Archer
      Exteriors! As proud members of the elite group of GAF Master Elite® Contractors, we bring unmatched expertise,
      reliability, and service to every roofing project.</p>
    <p class="mt-4">At Archer Exteriors, excellence isn't just a goal; it's our standard. Choose us for your roofing
      needs and
      experience the difference that comes with being among the elite in the roofing industry.</p>

    <div class="mt-5">
      <?= $this->Html->link('Get a Free Estimate <i class="flaticon-login"></i>', ['controller' => 'Estimates', 'action' => 'index'], ['class' => 'theme-btn sm', 'escape' => false]) ?>
    </div>
  </div>
</section>
<!-- GAF Master Elite® Certified Roofers Section End  -->

<!-- Why Are These Badges Important? Section Start  -->
<section class="section light">
  <div class="container">
    <div class="row gx-lg-5 gy-5 text-center text-lg-start">
      <div class="col-lg-6 col-md-12 align-self-center">
        <?= $this->Html->image('gaf-master/why-badge-important.jpg', [
          'class' => 'rad_4',
          'alt' => 'Why Are GAF Master Elite Badges Important?',
          'title' => 'Why Are GAF Master Elite Badges Important?'
        ]) ?>
      </div>
      <div class="col-lg-6 col-md-12 align-self-center">
        <h2 class="title_2 mb-4">Why Are These Badges Important?</h2>

        <p>Archer Exterior is committed to upholding these prestigious credentials to ensure our customers receive the
          highest quality service and protection for their roofing investments. As a GAF Master Elite® Contractor and
          a member of the President’s Club, we demonstrate unparalleled performance, reliability, and service in every
          project we undertake.</p>
        <p class="mt-4">These badges of honor signify not only our dedication to superior craftsmanship but also our
          unwavering commitment to customer satisfaction. When you <?= $this->Html->link('choose Archer Exteriors', ['controller' => 'Companies', 'action' => 'whyChooseUs']) ?>, you're not just getting a roof; you're investing in peace of mind, knowing that your home
          is protected by the best in the industry.</p>
        <p class="mt-4">With our expertise and GAF's top-tier warranties, such as the Golden Pledge® Limited Warranty,
          you can trust that your roof will stand the test of time, backed by the strongest protection available.</p>
      </div>

    </div>
  </div>
</section>
<!-- Why Are These Badges Important? Section End  -->

<!-- Archie Section Start  -->
<section class="archie_section">
  <?= $this->element('archie_section') ?>
</section>
<!-- Archie Section End  -->

<!-- Reviews section Start  -->
<section class="section light reviews">
  <?= $this->element('reviews') ?>
</section>
<!-- Reviews section End  -->

<!-- FAQ Section Start  -->
<section class="section">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>FAQ</h6>
      <h2>FAQ: <span>GAF Master Elite®</span></h2>
    </div>

    <div class="faq_wrap mt-5">
      <div class="accordion" id="faqGafMaster">
        <div class="accordion-item">
          <h2 id="faqGafMasterH1" class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
              data-bs-target="#faqGafMaster1" aria-expanded="true" aria-controls="faqGafMaster1">
              What is GAF Master Elite®?
            </button>
          </h2>
          <div id="faqGafMaster1" class="accordion-collapse collapse show"
            aria-labelledby="faqGafMasterH1" data-bs-parent="#faqGafMaster">
            <div class="accordion-body">
              A GAF Master Elite® Contractor is a mark of roofing excellence, earned by only 2% of roofers in North America. It cannot be bought; it can only be earned through a stringent evaluation process by GAF. Choosing a Master Elite® Contractor provides homeowners with peace of mind, knowing they have selected a roofing professional who has demonstrated exceptional skill and dedication.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="faqGafMasterH2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#faqGafMaster2" aria-expanded="false" aria-controls="faqGafMaster2">
              What are the GAF Master Elite® Benefits?
            </button>
          </h2>
          <div id="faqGafMaster2" class="accordion-collapse collapse" aria-labelledby="faqGafMasterH2"
            data-bs-parent="#faqGafMaster">
            <div class="accordion-body">
              The GAF Master Elite Benefits include your connection to stronger GAF warranties. This encompasses the GAF Shingle & Accessory Limited Warranty with a Lifetime limited warranty term and a 10-year 100% coverage period. During this period, GAF covers both installation labor costs and replacement GAF products necessary to repair your roof due to a manufacturing defect. Additionally, a GAF Master Elite® Contractor can offer the GAF System Plus Limited Warranty, extending your Smart Choice® Protection Period from 10 to 50 years and including tear-off services.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="faqGafMasterH3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#faqGafMaster3" aria-expanded="false" aria-controls="faqGafMaster3">
              What is GAF's President's Club Award?
            </button>
          </h2>
          <div id="faqGafMaster3" class="accordion-collapse collapse" aria-labelledby="faqGafMasterH3"
            data-bs-parent="#faqGafMaster">
            <div class="accordion-body">
              The GAF President's Club Award is a prestigious award reserved for roofing contractors who stand out amongst GAF's Master Elite®, Master Select™, and Premium Coating Systems Contractors. This exclusive group represents the best of the best, having demonstrated exceptional performance, reliability, and service. To earn this outstanding honor, contractors must meet stringent requirements in these categories, showcasing their commitment to excellence within the roofing industry.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="faqGafMasterH4">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#faqGafMaster4" aria-expanded="false" aria-controls="faqGafMaster4">
              What is GAF's Golden Pledge® Warranty & Silver Pledge® Warranty?
            </button>
          </h2>
          <div id="faqGafMaster4" class="accordion-collapse collapse" aria-labelledby="faqGafMasterH4"
            data-bs-parent="#faqGafMaster">
            <div class="accordion-body">
              The Golden Pledge® and Silver Pledge™ are premium warranties from GAF, covering certain roofing products against manufacturing defects. Available exclusively through GAF Master Elite® Contractors, these warranties provide comprehensive protection, with the Golden Pledge® offering a 50-year coverage, including workmanship, and the Silver Pledge™ covering material defects for 50 years. For more details on each warranty, <a href="<?= DOMAIN . '/contact'; ?>">contact us for more information.</a>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="faqGafMasterH5">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#faqGafMaster5" aria-expanded="false" aria-controls="faqGafMaster5">
              Is GAF's Golden Pledge Warranty Worth It?
            </button>
          </h2>
          <div id="faqGafMaster5" class="accordion-collapse collapse" aria-labelledby="faqGafMasterH5"
            data-bs-parent="#faqGafMaster">
            <div class="accordion-body">
              The GAF Golden Pledge Warranty is considered one of the industry's most comprehensive warranties. It provides homeowners with the ultimate peace of mind, covering both material defects and the contractor's workmanship. While the upfront cost may be higher, the long-term protection and assurance make it a valuable investment in the longevity and performance of your roof. <a href="<?= DOMAIN . '/price-match-guarantee'; ?>">Find out what warranty is best for you.</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- FAQ Section End -->

<!-- Activities Slider Section Start  -->
<section class="section light">
  <?= $this->element('current_activities') ?>
</section>
<!-- Activities Slider Section End  -->