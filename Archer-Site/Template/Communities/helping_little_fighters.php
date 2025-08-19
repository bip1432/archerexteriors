<?php
// Set Meta Tags
$this->set('title', 'Helping Little Fighters at Children\'s Hospital of Philadelphia | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Helping Little Fighters at Children\'s Hospital of Philadelphia');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Helping Little Fighters, Archer Exteriors, Children\'s Hospital of Philadelphia');
$this->set('ogTitle', 'Helping Little Fighters at Children\'s Hospital of Philadelphia | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Helping Little Fighters at Children\'s Hospital of Philadelphia');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/helping-little-fighters');
?>

<!-- banner-section -->
<section class="banner-section community_impact_details little_fighters">
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
    <div class="slide-item ten">
      <div class="image-layer"></div>
    </div>
    <div class="slide-item eleven">
      <div class="image-layer"></div>
    </div>
    <div class="slide-item twelve">
      <div class="image-layer"></div>
    </div>
    <div class="slide-item thirteen">
      <div class="image-layer"></div>
    </div>
    <div class="slide-item fourteen">
      <div class="image-layer"></div>
    </div>
    <div class="slide-item fifteen">
      <div class="image-layer"></div>
    </div>
  </div>
</section>
<!-- banner-section end -->

<div class="strip" style="background: #FDB316; padding: 20px 0;">
  <div class="auto-container">
    <?= $this->Html->image('community-impact/helping-little-fighters/CHOP-strip.png', [
      'class' => 'img-fluid',
      'alt' => ''
    ]) ?>
  </div>
</div>

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
      <div class="text-center">
        <!-- <video style="width: auto; max-height: 600px;" controls="">
            <source src="./img/community-impact/helping-little-fighters/Coop-Video.mp4" type="video/mp4">
            Your browser does not support HTML video.
          </video> -->
      </div>
      <div class="video-wrapper">
        <div class="responsive-video">
          <?= $this->Html->tag('iframe', '', [
            'src' => 'https://player.vimeo.com/video/1094038777?h=6c1014996b',
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

<!-- Miles for Miracles Section Start  -->
<section class="section ">
  <div class="container">
    <div class="row gx-xl-5 gy-5 mt-2 text-center text-xl-start flex-column-reverse flex-xl-row">
      <div class="col-xl-6 col-md-12 align-self-center">
        <div class="sec-title">
          <h6><i class="flaticon-roof"></i>Our Activity</h6>
          <h2>Miles for Miracles <span>– Walking Together for Little Fighters</span></span></h2>
        </div>

        <p class="mb-3">What an unforgettable day at Archer Exteriors! We were honored to host a fundraiser in support
          of the incredible kids at the <b>Children’s Hospital of Philadelphia (CHOP).</b></p>
        <p class="mb-3">A heartfelt thank you to CHOP and Audacy for making this event possible—and a HUGE shoutout to
          COOP from BIG 98.1 for showing up with so much heart and dedication. His energy helped power the day and
          raise funds for the little fighters who inspire us every single day. </p>
        <p class="mb-3">To everyone who donated, stopped by, or simply helped spread the word—thank you. You made this
          more than just an event… you made it a moment of community, compassion, and love.</p>

        <h4 class="title_3 mt-5 mb-3">Our community impact initiatives</h4>
        <?= $this->Html->link('Learn More<i class="flaticon-login"></i>', ['controller' => 'Communities', 'action' => 'index'], ['class' => 'theme-btn sm', 'escape' => false]) ?>
      </div>

      <div class="col-xl-6 col-md-12 align-self-center">
        <?= $this->Html->image('community-impact/helping-little-fighters/helping-little-fighters-banner.png', [
          'class' => 'rad_4',
          'alt' => 'Miles for Miracles – Walking Together for Little Fighters',
          'title' => 'Miles for Miracles – Walking Together for Little Fighters'
        ]) ?>
      </div>
    </div>
  </div>
</section>
<!-- Miles for Miracles Section End  -->

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