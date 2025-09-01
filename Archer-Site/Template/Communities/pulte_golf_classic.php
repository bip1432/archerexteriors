<?php
// Set Meta Tags
$this->set('title', 'From Roofs to Playgrounds | Archer Exteriors & Ron Jaworski Community Impact');
$this->set('metaDescription', 'Archer Exteriors partners with Ron Jaworski to build stronger communities. From roofs to playgrounds, we’re proud to support children and families.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Archer Exteriors community impact, Archer Exteriors and Ron Jaworski, roofing company giving back, Pulte Golf Classic playground fundraiser, building stronger communities, home exterior company charity work, local children’s nonprofit support, roofing company community involvement, Philadelphia Eagles Ron Jaworski charity, Archer Exteriors sponsorships and donations');
$this->set('ogTitle', 'From Roofs to Playgrounds | Archer Exteriors & Ron Jaworski Community Impact');
$this->set('ogDescription', 'Archer Exteriors partners with Ron Jaworski to build stronger communities. From roofs to playgrounds, we’re proud to support children and families.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/pulte-golf-classic');
?>

<!-- banner-section -->
<section class="page_hero pulte_golf_classic">
  <div class="auto-container">

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
            'src' => 'https://player.vimeo.com/video/1111782074?h=851d292ed6',
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
          <h2>Partnering with <br> <span>Ron Jaworski to Build Stronger Communities</span></h2>
        </div>

        <p class="mb-3">At Archer Exteriors, we’re proud to support <b>Ron Jaworski</b>, former Philadelphia Eagles quarterback and dedicated community leader. Through his nonprofit organization, Ron works tirelessly to improve the lives of local children. Each year, we participate in and sponsor the <b>Pulte Golf Classic</b>, an event that raises funds to build safe and inspiring playgrounds for kids in our communities. Beyond replacing Ron’s own roof, we’re honored to stand alongside him in giving back and creating brighter futures for families.</p>

        <h4 class="title_3 mt-5 mb-3">Our community impact initiatives</h4>
        <?= $this->Html->link('Learn More<i class="flaticon-login"></i>', ['controller' => 'Communities', 'action' => 'index'], ['class' => 'theme-btn sm', 'escape' => false]) ?>
      </div>

      <div class="col-xl-6 col-md-12 align-self-center">
        <?= $this->Html->image('community-impact/pulte-golf-classic/archer-exterior-ron-jaworski-community-banner.jpg', [
          'class' => 'rad_4',
          'alt' => 'Partnering with Ron Jaworski to Build Stronger Communities',
          'title' => 'Partnering with Ron Jaworski to Build Stronger Communities'
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