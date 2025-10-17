<?php
// Set Meta Tags
$this->set('title', 'Archer Exteriors Supports Operation Homefront | Building Stronger Communities');
$this->set('metaDescription', 'Archer Exteriors is proud to sponsor Operation Homefront and support military families across the nation. Learn how we build stronger communities through giving back, meaningful partnerships, and community impact initiatives.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Archer Exteriors Operation Homefront, Archer Exteriors community impact, Archer Exteriors giving back, Archer Exteriors sponsorships, Operation Homefront support, military family support programs, Archer Exteriors partnerships, Archer Exteriors charity, Archer Exteriors community service');
$this->set('ogTitle', 'Archer Exteriors Supports Operation Homefront | Building Stronger Communities');
$this->set('ogDescription', 'Archer Exteriors is proud to sponsor Operation Homefront and support military families across the nation. Learn how we build stronger communities through giving back, meaningful partnerships, and community impact initiatives.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/operation-homefront');
?>

<!-- Hero-section -->
<section class="page_hero operation_homefront">
  <div class="auto-container">
  </div>
</section>
<!-- Hero-section end -->

<!-- Advertisement  -->
<section>
  <div class="container">
    <?= $this->element('advertisement') ?>
  </div>
</section>

<!-- Community Events Section Start  -->
<section class="section light">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Community Impact</h6>
      <h2>Giving Back <span>With Purpose</span></h2>
      <p class="desc"
        style="font-size: 18px; max-width: 1000px; margin-left: auto;margin-right: auto; color: var(--font);">At
        Archer Exteriors, building strong communities is just as important as building strong homes. That’s why we
        actively support local causes and organizations that make a difference.</p>
    </div>

    <div class="row gx-lg-5 gy-5 mt-2 text-center text-lg-start flex-column-reverse flex-lg-row">
      <div class="col-lg-6 col-md-12 align-self-center">
        <h4 class="title_3 mb-2">Standing Strong with Operation Homefront</h4>
        <p>At Archer Exteriors, community impact is more than a mission—it’s a mindset. That’s why we’re honored to support <a href="https://operationhomefront.org/" target="_blank">Operation Homefront</a>, a national nonprofit serving America’s military families in their times of need.</p>

        <p class="mt-3">Recently, our team had the privilege of participating in a heartfelt vendor thank-you event at <b>Lorson Ranch, Colorado</b>. The day was filled with inspiring conversations and connections with industry leaders, including <b>VP of Operations Matt Larsen, Robert Steel, and Carmen in Purchasing</b>. A special thank-you goes out to <b>Division President Fei Xue</b> for the meaningful dialogue and valuable insights that left us energized and motivated.</p>

        <p class="mt-3">Events like these are a powerful reminder of why relationships matter—not just in business, but in the way we lift each other up as a community. We walked away encouraged by the partnerships we’re building and the collective impact we can create together.</p>

        <p class="mt-3">Operation Homefront provides critical assistance to military families—everything from housing and financial aid to programs that help veterans thrive long-term. Their mission aligns with our values: strong foundations, lasting impact, and doing the right thing for those who serve.</p>

        <h4 class="title_3 mt-4 mb-3">Our community impact initiatives</h4>
        <?= $this->Html->link('Learn More<i class="flaticon-login"></i>', ['controller' => 'Communities', 'action' => 'index'], ['class' => 'theme-btn sm', 'escape' => false]) ?>
      </div>

      <div class="col-lg-6 col-md-12 image-column">
        <?= $this->Html->image('community-impact/operation-homefront/archer-exteriors-community-operation-homefront-banner.jpg', [
          'class' => 'rad_4',
          'alt' => 'Standing Strong with Operation Homefront',
          'title' => 'Standing Strong with Operation Homefront'
        ]) ?>
      </div>
    </div>
  </div>
</section>
<!-- Community Events Section End  -->

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

<!-- Activities Slider Section Start  -->
<section class="section">
  <?= $this->element('current_activities') ?>
</section>
<!-- Activities Slider Section End  -->