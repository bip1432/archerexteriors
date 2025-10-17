<?php
// Set Meta Tags
$this->set('title', 'Archer Exteriors Supports Studer Family Children’s Hospital | Community Impact');
$this->set('metaDescription', 'Archer Exteriors proudly supports the Cat Country Cares for Kids Radiothon, raising $301,400 for Studer Family Children’s Hospital. See how we’re making a difference in our community.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Archer Exteriors, community impact, Studer Family Children’s Hospital, Cat Country Radiothon, children’s hospital donation, Pensacola NICU support, AngelEye camera program, local charity, giving back, Florida roofing company community support');
$this->set('ogTitle', 'Archer Exteriors Supports Studer Family Children’s Hospital | Community Impact');
$this->set('ogDescription', 'Archer Exteriors proudly supports the Cat Country Cares for Kids Radiothon, raising $301,400 for Studer Family Children’s Hospital. See how we’re making a difference in our community.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/studer-family-children-hospital');
?>

<!-- Hero-section -->
<section class="page_hero studer_childrens">
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
        <h4 class="title_3 mb-2">Archer Exteriors & the Studer Family Children’s Hospital Radiothon</h4>
        <p>At Archer Exteriors, we believe our strength lies not just in the structures we build, but in the communities we serve. That’s why we are honored to partner with Cat Country 98.7’s annual Cat Country Cares for Kids Radiothon, supporting the Studer Family Children’s Hospital.</p>

        <p class="mt-3">Each year, this one‑day radiothon brings together radio listeners, volunteers, sponsors, and caring neighbors to raise critical funds for children in our region who need it most. Through heartfelt stories from families, medical staff, and community leaders, the radiothon helps turn awareness into action.</p>

        <h4 class="title_3 mt-3 mb-2">Making a Difference Together</h4>

        <p class="mt-3">In 2025, the Radiothon raised an incredible $301,400, setting a new record in support of the region’s only children’s hospital. These funds help expand lifesaving care, enhance patient experiences, and support innovative technology like AngelEye cameras, which let families see and connect with their newborns in the NICU—anytime, anywhere.</p>

        <p class="mt-3">Archer Exteriors is honored to contribute to a cause that touches so many lives. Whether it’s through financial support or simply spreading the word, we’re proud to stand with the families, caregivers, and community members who make events like this possible.</p>
        
        <p class="mt-3">When our neighbors need us most, we show up. That’s who we are—and that’s what community impact means to us.</p>

        <h4 class="title_3 mt-4 mb-3">Our community impact initiatives</h4>
        <?= $this->Html->link('Learn More<i class="flaticon-login"></i>', ['controller' => 'Communities', 'action' => 'index'], ['class' => 'theme-btn sm', 'escape' => false]) ?>
      </div>

      <div class="col-lg-6 col-md-12 image-column">
        <?= $this->Html->image('community-impact/studer-childrens-hospital/archer-exteriors-community-studer-childrens-hospital-banner.jpg', [
          'class' => 'rad_4',
          'alt' => 'Archer Exteriors & the Studer Family Children’s Hospital Radiothon',
          'title' => 'Archer Exteriors & the Studer Family Children’s Hospital Radiothon'
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