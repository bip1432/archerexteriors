<?php
// Set Meta Tags
$this->set('title', 'New Construction | Roofing & siding| Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - New Construction');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'New Construction | Roofing siding, windows, doors, decks, gutters | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - New Construction');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/new-construction'); // TODO: Change to the current page URL
?>

<!-- Hero-section -->
<section class="page_hero_video">
  <video autoplay muted loop >
    <source src="./img/new-construction/hero-new-construction.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
</section>
<!-- Hero-section end -->

<!-- Statistics Section Start  -->
<section class="funfact-section light">
  <?= $this->element('company_statistics') ?>
</section>
<!-- Statistics Section End  -->

<!-- New Construction Gallery Start -->
<section class="section light">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Our Recent Work</h6>
      <h2>Explore <span>Our Recent New Construction</span></h2>
    </div>

    <div id="newConstructionGallery" class="owl-carousel owl-theme new_construction_gallery mt-5">
      <?= $this->Html->link(
        '<div class="img_box">' .
          $this->Html->image('new-construction/archer-new-construction-suffolk.jpg', [
            'class' => 'img-fluid',
            'alt' => 'The Gallery at Godwin luxury apartments in Suffolk, VA',
            'title' => 'The Gallery at Godwin luxury apartments in Suffolk, VA'
          ]) .
          '<div class="overlay"><i class="fi fi-rr-zoom-in"></i></div></div>' .
          '<h4>The Gallery at Godwin luxury apartments in Suffolk, VA</h4>',
        '#',
        [
          'class' => 'owl-carousel-item item',
          'data-src' => $this->Url->image('new-construction/archer-new-construction-suffolk.jpg'),
          'escape' => false
        ]
      ) ?>

      <?= $this->Html->link(
        '<div class="img_box">' .
          $this->Html->image('new-construction/archer-new-construction-whitehouse.jpg', [
            'class' => 'img-fluid',
            'alt' => 'New Construction Development in Whitehouse, TN',
            'title' => 'New Construction Development in Whitehouse, TN'
          ]) .
          '<div class="overlay"><i class="fi fi-rr-zoom-in"></i></div></div>' .
          '<h4>New Construction Development in Whitehouse, TN</h4>',
        '#',
        [
          'class' => 'owl-carousel-item item',
          'data-src' => $this->Url->image('new-construction/archer-new-construction-whitehouse.jpg'),
          'escape' => false
        ]
      ) ?>

      <?= $this->Html->link(
        '<div class="img_box">' .
          $this->Html->image('new-construction/archer-new-construction-woodbridge.jpg', [
            'class' => 'img-fluid',
            'alt' => 'Ascend Rippon luxury apartments in Woodbridge, VA',
            'title' => 'Ascend Rippon luxury apartments in Woodbridge, VA'
          ]) .
          '<div class="overlay"><i class="fi fi-rr-zoom-in"></i></div></div>' .
          '<h4>Ascend Rippon luxury apartments in Woodbridge, VA</h4>',
        '#',
        [
          'class' => 'owl-carousel-item item',
          'data-src' => $this->Url->image('new-construction/archer-new-construction-woodbridge.jpg'),
          'escape' => false
        ]
      ) ?>
    </div>
  </div>
</section>
<!-- New Construction Gallery End -->

<!-- New Construction Section Start -->
<section class="section" id="startNewConstruction">
  <div class="container">
    <div class="row gx-lg-5 gy-5">
      <div class="col-xl-7">
        <div class="sec-title mb-3">
          <h2>Archer Exterior’s <span>New Construction</span></h2>
        </div>

        <p>At Archer Exteriors, we specialize in building from the ground up, offering full home construction and
          commercial facelifts. Our new construction branches operate in multiple states, ensuring high-quality
          projects nationwide. We utilize advanced technology like Hover software to streamline planning and
          communication, delivering precise and efficient results. In addition to assisting on various projects, we
          proudly operate our own home building company, bringing expertise and dedication to every build.</p>

        <div class="roof_badge justify-content-center justify-content-xl-start my-5">
          <span class="img">
            <?= $this->Html->image('home-white.svg', [
              'class' => 'svg',
              'alt' => 'Executing 400+ jobs every week',
              'title' => 'Executing 400+ jobs every week'
            ]) ?>
          </span>
          <div class="content" style="background: var(--bg-light);">
            <?= $this->element('jobs_strength') ?>
          </div>
        </div>

        <p>Archer Exteriors provides exterior solutions for a wide variety of new construction homes and commercial
          buildings across multiple states, including New Jersey, Tennessee, North Carolina, and Pennsylvania. With
          over <b>15 branches</b>, we handle everything from luxury apartments to large commercial projects, offering
          the exterior expertise to meet the unique needs of each development.</p>

        <div class="mt-4">
          <div class="right">
            <?= $this->Html->link(
              'Explore all Branches <i class="flaticon-login"></i>',
              ['controller' => 'ServiceAreas', 'action' => 'index'],
              [
                'class' => 'theme-btn sm',
                'escape' => false
              ]
            ) ?>
          </div>
        </div>

      </div>

      <div class="col-xl-5">
        <?= $this->element('forms/form_new_construction') ?>
      </div>
    </div>
  </div>
</section>
<!-- New Construction Section End -->


<section class="section light clients-section text-center">
  <div class="auto-container">
    <div class="sec-title">
      <h6><i class="flaticon-roof"></i>Builders</h6>
      <h2>Building <br> <span>With Trusted Partners</span></h2>
    </div>
    <div class="clients-carousel owl-carousel owl-theme owl-nav-none mt-5">
      <div class="clients-logo-box">
        <?= $this->Html->link(
          $this->Html->image('partners/builders/pulte-homes.png', ['alt' => 'Pulte Homes', 'title' => 'Pulte Homes', 'style' => 'height: auto;']),
          'https://www.pulte.com/',
          ['target' => '_blank', 'escape' => false]
        ) ?>
      </div>
      <div class="clients-logo-box">
        <?= $this->Html->link(
          $this->Html->image('partners/builders/dr-horton.png', ['alt' => 'D.R. Horton ', 'title' => 'D.R. Horton', 'style' => 'height: auto;']),
          'https://www.drhorton.com/',
          ['target' => '_blank', 'escape' => false]
        ) ?>
      </div>
      <div class="clients-logo-box">
        <?= $this->Html->link(
          $this->Html->image('partners/builders/lennar-homes.png', ['alt' => 'Lennar Homes', 'title' => 'Lennar Homes', 'style' => 'height: auto;']),
          'https://www.lennar.com/',
          ['target' => '_blank', 'escape' => false]
        ) ?>
      </div>
      <div class="clients-logo-box">
        <?= $this->Html->link(
          $this->Html->image('partners/builders/toll-brothers.png', ['alt' => 'Toll Brothers', 'title' => 'Toll Brothers', 'style' => 'height: auto;']),
          'https://www.tollbrothers.com/',
          ['target' => '_blank', 'escape' => false]
        ) ?>
      </div>
      <div class="clients-logo-box">
        <?= $this->Html->link(
          $this->Html->image('partners/builders/beazer-homes.png', ['alt' => 'Beazer Homes', 'title' => 'Beazer Homes', 'style' => 'height: auto;']),
          'https://www.beazer.com/',
          ['target' => '_blank', 'escape' => false]
        ) ?>
      </div>
      <div class="clients-logo-box">
        <?= $this->Html->link(
          $this->Html->image('partners/builders/ryan-homes.png', ['alt' => 'Ryan Homes', 'title' => 'Ryan Homes', 'style' => 'height: auto;']),
          'https://www.ryanhomes.com/',
          ['target' => '_blank', 'escape' => false]
        ) ?>
      </div>

    </div>
  </div>
</section>


<!-- Our Approach Section Start -->
<section class="section">
  <div class="container">
    <div class="row gx-lg-5 gy-5">
      <div class="col-lg-6 align-self-center">
        <div class="sec-title mb-3">
          <h6><i class="flaticon-roof"></i>Our approach</h6>
          <h2>Our Approach <span>to New Construction</span></h2>
        </div>
        <p>At Archer Exteriors, we understand that no two construction projects are the same. Whether
          it's a new residential development in New Jersey or a commercial building in Colorado, we tailor our
          exterior solutions to suit the scope and requirements of each project.</p>

        <p class="mt-3">We have experience working on a wide range of new construction projects, including:</p>

        <ul class="check_list mt-3">
          <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> New construction homes in growing residential areas</li>
          <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Large-scale apartment construction developments</li>
          <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> High rise apartments in urban settings</li>
          <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Major commercial buildings for various industries</li>
        </ul>
      </div>

      <div class="col-lg-6 align-self-center">
        <?= $this->Html->image('new-construction/our-approach.jpg', [
          'class' => 'img-fluid rad_6',
          'alt' => 'Our Approach to New Construction',
          'title' => 'Our Approach to New Construction'
        ]) ?>
      </div>
    </div>
  </div>
</section>
<!-- Our Approach Section End -->

<!-- Builder Section Start -->
<section class="section bg_secondary">
  <div class="container">
    <div class="sec-title text-center light">
      <h6><i class="flaticon-roof"></i>Partner with us</h6>
      <h2>Are you <span>a Builder?</span></h2>
      <p class="section_desc" style="color: var(--font-light);">Partner With Us and Let’s Build Something Great
        Together</p>
    </div>

    <div class="row gx-xl-5 gy-5 mt-2">
      <div class="col-xl-6 align-self-center">
        <div class="wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms">
          <h3 class="title_3 mb-4 text-white">Are you a builder working on a large-scale construction project?</h3>

          <p style="color: var(--font-light);">We're a passionate, quality-driven home exterior company specializing
            in roofing, siding, windows, gutters, and complete exterior solutions.</p>

          <p style="color: var(--font-light);" class="my-3">As a growing company, we occasionally collaborate with
            reputable builders to jointly execute new construction projects. By joining forces, we combine your
            project scope with our skilled craftsmanship and dedication to excellence—delivering outstanding results,
            on time and on budget.</p>

          <h3 class="title_3 text-light mt-4">Why Partner With Us?</h3>

          <ul class="check_list mt-3" style="color: var(--font-light);">
            <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Experienced in residential & light commercial
              exteriors</li>
            <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Flexible & scalable team for big projects</li>
            <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Transparent collaboration & timelines</li>
            <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Fully licensed and insured</li>
            <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Strong track record of quality workmanship</li>
          </ul>

        </div>
      </div>
      <div class="col-xl-6 align-self-center">
        <div class="wow fadeInRight animated" data-wow-delay="300ms" data-wow-duration="1500ms">
          <?= $this->Html->image('new-construction/banner-builder.jpg', [
            'alt' => 'Are you a builder working on a large-scale construction project?',
            'title' => 'Are you a builder working on a large-scale construction project?'
          ]) ?>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- Builder Section End -->

<!-- Why Choose Us Section Start  -->
<section class="chooseus-section">
  <?= $this->element('why_choose_us') ?>
</section>
<!-- Why Choose Us Section End -->

<!-- Archie Section Start  -->
<section class="archie_section">
  <div class="auto-container">
    <div class="inner_row">
      <div class="left">
        <div class="img">
          <?= $this->Html->image('Archie-Head-2.png', [
            'alt' => 'Archie',
            'title' => 'Archie',
            'class' => 'img-fluid'
          ]) ?>
        </div>
        <h4 class="title_3">Let's build something great together!</h4>
      </div>

      <div class="right">
        <a href="#startNewConstruction" class="theme-btn sm">Let's start a project <i class="flaticon-login"></i></a>
      </div>
    </div>
  </div>
</section>
<!-- Archie Section End  -->

<!-- Managing the Cost of New Construction Section Start -->
<section class="section light text-center text-lg-start">
  <div class="container">
    <div class="row gy-5">
      <div class="col-lg-6 col-md-12 align-self-center">
        <?= $this->Html->image('new-construction/managing-cost.jpg', [
          'class' => 'rad_4',
          'alt' => 'Managing the Cost of New Construction',
          'title' => 'Managing the Cost of New Construction'
        ]) ?>
      </div>

      <div class="col-lg-6 col-md-12 align-self-center">
        <div class="sec-title mb-4">
          <h6><i class="flaticon-roof"></i>Cost of new construction</h6>
          <h2>Managing the Cost <span>of New Construction</span> </h2>
        </div>

        <p>When it comes to the cost of new construction, many factors come into play, including the size of the
          project, materials used, and labor requirements. We work with builders and developers to provide exterior
          solutions that are both high-quality and cost-effective.</p>
        <p class="mt-4">For every project, from new construction roofing to complete exterior installations, we offer
          competitive pricing and detailed estimates to help you stay within budget.</p>
      </div>
    </div>
  </div>
</section>
<!-- Managing the Cost of New Construction Section End -->


<!-- clients-section -->
<section class="section clients-section text-center">
  <?= $this->element('our_partners') ?>
</section>
<!-- clients-section end -->