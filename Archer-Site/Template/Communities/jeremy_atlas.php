<?php
// Set Meta Tags
$this->set('title', 'Project Home Strong: Jeremy Atlas\' Free Roof Story | Archer Exteriors Community Impact');
$this->set('metaDescription', 'Archer Exteriors - Project Home Strong: Jeremy Atlas\' Free Roof Story');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Project Home Strong, Jeremy Atlas, Archer Exteriors');
$this->set('ogTitle', 'Project Home Strong: Jeremy Atlas\' Free Roof Story | Archer Exteriors Community Impact');
$this->set('ogDescription', 'Archer Exteriors - Project Home Strong: Jeremy Atlas\' Free Roof Story');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/jeremy-atlas');
?>

<!-- banner-section -->
<section class="banner-section community_impact_details jeremy_atlas">
  <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
    <div class="slide-item one">
      <div class="image-layer">
      </div>
    </div>
    <div class="slide-item two">
      <div class="image-layer">
      </div>
    </div>
    <div class="slide-item three">
      <div class="image-layer"></div>
    </div>

    <div class="slide-item four">
      <div class="image-layer"></div>
    </div>

    <div class="slide-item five">
      <div class="image-layer"></div>
    </div>

    <div class="slide-item six">
      <div class="image-layer"></div>
    </div>

    <div class="slide-item seven">
      <div class="image-layer"></div>
    </div>

    <div class="slide-item eight">
      <div class="image-layer"></div>
    </div>
    <div class="slide-item nine">
      <div class="image-layer"></div>
    </div>
  </div>
</section>
<!-- banner-section end -->

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

    <div>
      <div class="video-wrapper">
        <div class="responsive-video">
          <?= $this->Html->tag('iframe', '', [
            'src' => 'https://player.vimeo.com/video/1082189923?h=d1c053bb80',
            'frameborder' => '0',
            'allowfullscreen' => true,
            'webkitallowfullscreen' => true,
            'mozallowfullscreen' => true
          ]) ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Community Events Section End  -->


<section class="section ">
  <div class="container">
    <div class="row gx-xl-5 gy-5 mt-2 text-center text-xl-start flex-column-reverse flex-xl-row">
      <div class="col-xl-6 col-md-12 align-self-center">
        <div class="sec-title">
          <h6><i class="flaticon-roof"></i>Our Activity</h6>
          <h2>Supporting <span>a Family in Need</span></h2>
        </div>

        <p class="mb-3">At Archer Exteriors, we believe in caring for the communities that support us. We are honored
          to be able to give back to the Atlas Family. Jeremy Atlas is a special education teacher at Pennsville
          Middle School who selflessly gives everything he has to his students and family.</p>
        <p class="mb-3">When we met Jeremy, we saw not just a homeowner in need but a man working tirelessly to hold
          everything together. That’s when we knew we had to do something. </p>
        <p class="mb-3">Thanks to GAF for generously donating the materials and C&H for the dumpster, we’ll be giving
          Jeremy and his family the peace of mind they deserve.</p>
        <p class="mb-3">This isn’t the first time we’ve stepped in to help. Shirley from Elmer, NJ, was battling
          breast cancer when we provided her with a new roof, ensuring she had a safe home to focus on healing.</p>
        <p class="mb-3">We believe a roof is more than just shingles; it’s security, comfort, and hope. And when we
          can provide that for someone in need, we do.</p>

        <h4 class="title_3 mt-5 mb-3">Our community impact initiatives</h4>
        <?= $this->Html->link('Learn More<i class="flaticon-login"></i>', ['controller' => 'Communities', 'action' => 'index'], ['class' => 'theme-btn sm', 'escape' => false]) ?>
      </div>

      <div class="col-xl-6 col-md-12 align-self-center">
        <?= $this->Html->image('community-impact/jeremy-atlas/jeremy-atlas-banner1.jpg', [
          'class' => 'rad_4',
          'alt' => 'Supporting a Family in Need',
          'title' => 'Supporting a Family in Need'
        ]) ?>
      </div>
    </div>
  </div>
</section>

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