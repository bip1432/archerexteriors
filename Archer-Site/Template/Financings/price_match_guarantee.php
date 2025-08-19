<?php
// Set Meta Tags
$this->set('title', 'Price Match Guarantee | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Your trusted partner for premium roofing, siding, and exterior solutions.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Price Match Guarantee | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Your trusted partner for price match guarantee.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/price-match-guarantee'); // TODO: Change to the current page URL
?>

<!-- Hero-section -->
<section class="page_hero price_match_guarantee">
  <div class="auto-container">
    <div class="contents text-center">
      <h1 class="title">Price Match Guarantee</h1>
      <p class="desc">Your home deserves the best at the right price.</p>
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
      <p class="desc mx-auto" style="max-width: 1000px;">We believe in fair prices and honest comparisons, ensuring you get quality service at the right cost.</p>
    </div>

    <div class="row justify-content-center clearfix">
      <div class="col-xl-4 col-md-6 col-sm-12 process-block" style="margin-top: 120px;">
        <div class="process-block-item">
          <div class="inner-box" style="min-height: auto;">
            <div class="icon-box">
              <span class="count-box counted">01</span>
              <div class="icon">
                <?= $this->Html->image('price-match-guaratee/item-for-item.svg', [
                  'alt' => 'Item-for-Item, Product-for-Product Match'
                ]) ?>
              </div>
            </div>
            <div class="lower-content">
              <div class="pattern-layer"></div>
              <h4 class="mb-2">Item-for-Item, Product-for-Product Match</h4>
              <p>We'll match the price of any competitor for the same materials and services. Simply provide us with
                an itemized quote for comparison.</p>
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
                <?= $this->Html->image('price-match-guaratee/quality-first.svg', [
                  'alt' => 'Quality First'
                ]) ?>
              </div>
            </div>
            <div class="lower-content">
              <div class="pattern-layer"></div>
              <h4 class="mb-2">Quality First</h4>
              <p>Please note that Archer Exteriors reserves the right to refuse a job if the competitor's products or
                workmanship do not meet quality and building standards. We believe in using only the best materials,
                like GAF roofing, to ensure that your home is protected by products with amazing warranties.</p>
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
                <?= $this->Html->image('price-match-guaratee/no-corner-cut.svg', [
                  'alt' => 'No Corners Cut'
                ]) ?>
              </div>
            </div>
            <div class="lower-content">
              <div class="pattern-layer"></div>
              <h4 class="mb-2">No Corners Cut</h4>
              <p>This is not a marketing gimmick. At Archer Exteriors, we genuinely want to ensure you get the best
                price without compromising on quality. We understand that every project is unique, and what sets us
                apart is our commitment to superior materials, expert craftsmanship, and industry-leading warranties.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- How It Works Section End  -->

<!-- Price Match Guarantee Section Start  -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 image-column">
        <div class="about-image-block">
          <div class="image-box pb-0">
            <div class="pattern-layer" style="background-image: url(<?= $this->Url->image('shape-1.png') ?>);"></div>
            <div class="image">
              <?= $this->Html->image('finance-options/archer-exterior-price-match-guarantee.jpg', [
                'alt' => 'Archer Exteriors\' Price Match Guarantee',
                'title' => 'Archer Exteriors\' Price Match Guarantee'
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
          <h3 class="title_2">We Offer <br> <b>Price Match Guarantee</b></h3>
        </div>
        <p class="price_match_batch_desc">At Archer Exteriors, we are committed to providing our customers with the
          best quality and value for their
          home improvement projects. That's why we're excited to offer our Price Match Guarantee on all our services.
        </p>
      </div>
    </div>
  </div>
</section>
<!-- Price Match Guarantee Section End  -->

<!-- Archie Section Start  -->
<section class="archie_section">
  <?= $this->element('archie_section') ?>
</section>
<!-- Archie Section End  -->

<!-- Finance Options Section Start  -->
<section class="section finance_options_sec">
  <?= $this->element('finance_section') ?>
</section>
<!-- Finance Options Section End  -->

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