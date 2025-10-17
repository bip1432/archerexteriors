<?php
// Set Meta Tags
$this->set('title', 'Archie\'s Corner | Archer Exteriors — Our Mascot, Mission & Gallery');
$this->set('metaDescription', 'Welcome to Archie\'s Corner by Archer Exteriors — meet our giraffe mascot “Archie,” explore our gallery, and learn how we support giraffe conservation through our partnership with GCF. Discover the face behind our commitment to trust, craftsmanship, and community.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Archie\'s Corner, Archer Exteriors mascot, Archie giraffe mascot, Archer Exteriors gallery, giraffe conservation partnership, GCF partnership, Archer Exteriors brand story, about Archie mascot, Archer Exteriors community impact, “Archie the giraffe” Archer, Archer Exteriors mascot page');
$this->set('ogTitle', 'Archie\'s Corner | Archer Exteriors — Our Mascot, Mission & Gallery');
$this->set('ogDescription', 'Welcome to Archie\'s Corner by Archer Exteriors — meet our giraffe mascot “Archie,” explore our gallery, and learn how we support giraffe conservation through our partnership with GCF. Discover the face behind our commitment to trust, craftsmanship, and community.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/archie-the-giraffe'); // TODO: Change to the current page URL
?>

<!-- Hero-section -->
<section class="archie_hero_v2">
  <div class="container h-100">
    <div class="row h-100">
      <div class="col-lg-7 col-md-10 offset-lg-5 offset-md-2 align-self-center">
        <div class="content_wrap">
          <div class="archie_left">
            <?= $this->Html->image('40-years-badge/40-years.png', [
              'class' => 'img-fluid',
              'alt' => '40 Years of Excellence',
              'title' => '40 Years of Excellence'
            ]) ?>
          </div>
          <div class="archie_right">
            <h4>Celebrating 40 Years.</h4>
            <h5>Local to You. Family Owned.</h5>
          </div>
        </div>
      </div>
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


<!-- Archie is more than just a giraffe section start -->
<section class="section light">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i> Archie</h6>
      <h2>Archie <span>is more than just a giraffe</span></h2>
      <p style="max-width: 1000px;" class="section_desc">Acrchie is the symbol of reliability, trustworthiness, and
        expertise that defines Archer
        Exteriors. With his friendly personality, Archie welcomes customers into our world of exceptional home
        exterior services.
      </p>
    </div>

    <div class="text-center">
      <div class="video-wrapper">
        <div class="responsive-video">
          <?= $this->Html->tag('iframe', '', [
            'src' => 'https://player.vimeo.com/video/1102888780?h=734a2b619b',
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
<!-- Archie is more than just a giraffe section end -->

<!-- Project Gallery Start -->
<section class="section completed_projects">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Gallery</h6>
      <h2>Archie’s <span>album</span></h2>
    </div>


    <div id="roofingGallery" class="projects_gallery mt-5">
      <?= $this->Html->link(
        $this->Html->image('archie-page/gallery/thumb/archer-archie-gallery1.jpg', [
          'alt' => 'Archie\'s album',
          'title' => 'Archie\'s album'
        ]),
        '/img/archie-page/gallery/archer-archie-gallery1.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('archie-page/gallery/thumb/archer-archie-gallery2.jpg', [
          'alt' => 'Archie\'s album',
          'title' => 'Archie\'s album'
        ]),
        '/img/archie-page/gallery/archer-archie-gallery2.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('archie-page/gallery/thumb/archer-archie-gallery3.jpg', [
          'alt' => 'Archie\'s album',
          'title' => 'Archie\'s album'
        ]),
        '/img/archie-page/gallery/archer-archie-gallery3.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('archie-page/gallery/thumb/archer-archie-gallery4.jpg', [
          'alt' => 'Archie\'s album',
          'title' => 'Archie\'s album'
        ]),
        '/img/archie-page/gallery/archer-archie-gallery4.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('archie-page/gallery/thumb/archer-archie-gallery5.jpg', [
          'alt' => 'Archie\'s album',
          'title' => 'Archie\'s album'
        ]),
        '/img/archie-page/gallery/archer-archie-gallery5.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('archie-page/gallery/thumb/archer-archie-gallery6.jpg', [
          'alt' => 'Archie\'s album',
          'title' => 'Archie\'s album'
        ]),
        '/img/archie-page/gallery/archer-archie-gallery6.jpg',
        ['class' => 'gallery-item', 'escape' => false]
      ) ?>

      <?= $this->Html->link(
        $this->Html->image('archie-page/gallery/thumb/archer-exteriors-archie-billboard-brigantine.jpg', [
          'alt' => 'Archie\'s album',
          'title' => 'Archie\'s album'
        ]),
        '/img/archie-page/gallery/archer-exteriors-archie-billboard-brigantine.jpg',
        ['class' => 'gallery-item col_two', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image('archie-page/gallery/thumb/archer-exteriors-archie-billboard-elmer.jpg', [
          'alt' => 'Archie\'s album',
          'title' => 'Archie\'s album'
        ]),
        '/img/archie-page/gallery/archer-exteriors-archie-billboard-elmer.jpg',
        ['class' => 'gallery-item col_two', 'escape' => false]
      ) ?>
    </div>
  </div>
</section>
<!-- Project Gallery End -->


<section>
  <div class="container text-center">
    <div>
      <?= $this->Html->link(
        $this->Html->image(
          'archie-page/archie-corner-art-contest-banner.jpg',
          [
            'class' => 'img-fluid',
            'alt' => 'Color the World with Archie!',
            'title' => 'Color the World with Archie!'
          ]
        ),
        ['controller' => 'Communities', 'action' => 'artContest'],
        ['class' => 'd-none d-md-block banner_hover', 'style' => 'margin-bottom: 90px;', 'target' => '_blank', 'escape' => false]
      ) ?>
      <?= $this->Html->link(
        $this->Html->image(
          'archie-page/archie-corner-art-contest-banner-sm.jpg',
          [
            'class' => 'img-fluid',
            'alt' => 'Color the World with Archie!',
            'title' => 'Color the World with Archie!'
          ]
        ),
        ['controller' => 'Communities', 'action' => 'artContest'],
        ['class' => 'd-block d-md-none banner_hover', 'style' => 'margin-bottom: 90px;', 'target' => '_blank', 'escape' => false]
      ) ?>
    </div>
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

<!-- Archie's Conservation Mission Section Start  -->
<section class="section light text-center text-lg-start">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>GCF</h6>
      <h2>Archie's <span>Conservation Mission</span></h2>
      <p class="section_desc">Archer Exteriors is proud to partner with the <a href="https://adopt.giraffeconservation.org/" target="_blank">Giraffe Conservation Foundation</a> (GCF), the only NGO in the world dedicated solely to conserving and managing giraffes in the wild throughout Africa. Through our collaboration with GCF, we are supporting vital research, habitat protection, and community outreach programs to secure a future for wild giraffe populations.</p>
    </div>

    <div class="row gy-4 mt-4">
      <div class="col-lg-6 col-md-12 align-self-center">
        <?= $this->Html->image('archie-page/our-impact-archer-exteriors-archie.jpg', [
          'class' => 'rad_4',
          'alt' => 'Archer Exteriors Impact',
          'title' => 'Archer Exteriors Impact'
        ]) ?>
      </div>

      <div class="col-lg-6 col-md-12 align-self-center">
        <h2 class="title_2 mb-3">Our Impact</h2>
        <p>Every donation to the Giraffe Conservation Foundation supports their work with local and international partners, affecting over 100 million acres of giraffe habitat. GCF's conservation story began in Namibia, where they have studied several giraffe populations for over two decades. Their pioneering work has directly impacted the global understanding of giraffes and led to the recognition of giraffe's silent extinction on the IUCN Red List of Threatened Species.</p>
      </div>
    </div>

    <div class="row flex-lg-row-reverse gy-4 mt-4">
      <div class="col-lg-6 col-md-12 align-self-center">
        <?= $this->Html->image('archie-page/adoption-story-archer-exteriors-archie.jpg', [
          'class' => 'rad_4',
          'alt' => 'Archer Exteriors Adoption Story',
          'title' => 'Archer Exteriors Adoption Story'
        ]) ?>
      </div>

      <div class="col-lg-6 col-md-12 align-self-center">
        <h2 class="title_2 mb-3">Adoption Story</h2>
        <p>Meet Monkey, the Guardian Giraffe of Archer Exteriors! Monkey is an adult female desert-dwelling giraffe located in northwest Namibia. In partnership with the Giraffe Conservation Foundation, we have adopted Monkey, providing essential support for GCF's conservation efforts.</p>
      </div>
    </div>
  </div>
</section>
<!-- Archie's Conservation Mission Section End  -->