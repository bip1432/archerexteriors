<?php
// Set Meta Tags
$this->set('title', 'See Our Recent Work | Roofing & siding| Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - See Our Recent Work');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'See Our Recent Work | Roofing siding, windows, doors, decks, gutters | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - See Our Recent Work');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/recent-work'); // TODO: Change to the current page URL
?>

<!-- Hero-section -->
<section class="page_hero recent_work">
  <div class="auto-container">
    <div class="contents text-center">
      <h1 class="title">Recent Work</h1>
      <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, quam!</p>
    </div>
  </div>
</section>
<!-- Hero-section end -->

<!-- Statistics Section Start  -->
<section class="funfact-section light">
  <?= $this->element('company_statistics') ?>
</section>
<!-- Statistics Section End  -->

<!-- Project Videos start  -->
<section class="section light project_videos">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Project Videos</h6>
      <h2>Home Exterior <span>Project Videos</span></h2>
    </div>

    <div class="d-flex justify-content-center mt-5">
      <div id="inline-video-gallery-container" class="inline-gallery-container"></div>
    </div>

  </div>
</section>
<!-- Project Videos end -->

<!-- project-section -->
<section class="section project-section ">
  <div class="auto-container">
    <div class="sortable-masonry">
      <div class="filters">
        <ul class="filter-tabs filter-btns centred clearfix">
          <li class="active filter" data-role="button" data-filter=".all">View All</li>
          <li class="filter" data-role="button" data-filter=".roofingSiding">Roofing/Siding</li>
          <li class="filter" data-role="button" data-filter=".doorWindow">Door/Window</li>
        </ul>
      </div>
      <div class="items-container row clearfix">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work1.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work1.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work2.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Siding Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work2.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all doorWindow">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work21.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Window Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work21.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work3.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work3.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work4.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work4.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work5.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Siding Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work5.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all doorWindow">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work15.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Window Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work15.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work6.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing, Siding Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work6.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work7.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work7.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work8.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work8.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all doorWindow">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work37.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Window Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work37.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work9.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work9.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work10.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work10.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all doorWindow">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work38.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Window Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work38.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work11.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Siding Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work11.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work12.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work12.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work13.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work13.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work14.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work14.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all doorWindow">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work39.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Window Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work39.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all doorWindow">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work40.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Window Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work40.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work16.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work16.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work17.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work17.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all doorWindow">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work41.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Window Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work41.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work18.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work18.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work19.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work19.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all doorWindow">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work42.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Window Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work42.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work20.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work20.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work22.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work22.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work23.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work23.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work24.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work24.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work25.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing, Siding Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work25.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work26.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing, Siding Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work26.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work27.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work27.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work28.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work28.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work29.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work29.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work30.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work30.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work31.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work31.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all doorWindow">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work32.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Window Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work32.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all doorWindow">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work33.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Window, Door Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work33.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work34.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work34.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work35.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work35.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 masonry-item small-column all roofingSiding">
          <div class="project-block-four">
            <div class="inner-box">
              <div class="image-box">
                <img src="./img/recent-work/gallery/archer-exteriors-recent-work36.jpg" alt="Archer Recent Work">
              </div>
              <div class="content-box">
                <h3>Roofing Project</h3>
                <a href="./img/recent-work/gallery/archer-exteriors-recent-work36.jpg" class="view-btn lightbox-image"
                  data-fancybox="gallery">+</a>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</section>
<!-- project-section end -->

<!-- Archie Section Start  -->
<section class="archie_section">
  <?= $this->element('archie_section') ?>
</section>
<!-- Archie Section End  -->

<!-- Activities Slider Section Start  -->
<section class="section">
  <?= $this->element('current_activities') ?>
</section>
<!-- Activities Slider Section End  -->