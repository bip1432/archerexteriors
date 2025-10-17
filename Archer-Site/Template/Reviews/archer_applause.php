<?php
// Set Meta Tags
$this->set('title', 'Build on Trust: Archer Exteriors Customer Testimonials & Success Stories | Archer Applause');
$this->set('metaDescription', 'Discover real homeowner stories in our Archer Applause video testimonials. See how Archer Exteriors delivers quality roofing, siding, and window solutions — backed by trust, results, and satisfaction.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', archer applause, archer exteriors testimonials, roofing reviews, customer testimonial videos, archer exteriors success stories, home remodeling testimonials, roofing siding windows reviews, real customer experiences');
$this->set('ogTitle', 'Build on Trust: Archer Exteriors Customer Testimonials & Success Stories | Archer Applause');
$this->set('ogDescription', 'Discover real homeowner stories in our Archer Applause video testimonials. See how Archer Exteriors delivers quality roofing, siding, and window solutions — backed by trust, results, and satisfaction.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/archer-applause'); // TODO: Change to the current page URL
?>

<!-- Hero-section -->
<section class="page_hero archer_applause">
  <div class="auto-container">
    <div class="contents text-center">
      <?= $this->Html->image('archer-applause/logo-archer-applause.png', [
        'class' => 'img-fluid',
        'alt' => 'Archer Applause',
        'title' => 'Archer Applause'
      ]) ?>
      <h1 class="title mt-4">Real Homes. Real Results. Real Stories.</h1>
    </div>
  </div>
</section>
<!-- Hero-section end -->

<!-- <section class="section">
  <div class="container">
    <div class="sec-title text-center mb-0">
      <h6><i class="flaticon-roof"></i>Archer Applause</h6>
      <h2>Build on Trust, <span>Proven by Stories</span></h2>
    </div>

    <div class="d-flex justify-content-center mt-5">
      <div id="applause-gallery-container" class="inline-gallery-container"></div>
    </div>

  </div>
</section> -->


<section class="section">
  <div class="container">
    <div class="row gy-5 gy-lg-0">
      <div class="col-lg-8 text-center text-lg-start">
        <div class="sec-title mb-0">
          <h6><i class="flaticon-roof"></i>Archer Applause</h6>
          <h2>Build on Trust, <span>Proven by Stories</span></h2>
          <p class="section_desc">At Archer Exteriors, every project is more than just craftsmanship — it’s a promise delivered. Don’t just take our word for it — hear directly from homeowners who’ve experienced the Archer difference. Our <b>Archer Applause</b> testimonial videos feature real customers sharing their genuine stories of trust, quality, and transformation. From first call to final walkthrough, their words reflect what we’re most proud of — homes built to last and relationships built on trust.</p>
        </div>
      </div>

      <div class="col-lg-4 my-lg-auto text-end">
        <p class="mb-2">Select service based applause</p>
        <!-- use meaningful values (lowercase) matching data-service attributes below -->
        <select style="max-width: 220px;" name="applause" class="form-select ms-auto" id="applause"
          aria-describedby="applause" aria-invalid="false" data-validation-type="select">
          <option value="*">All Services</option>
          <option value=".roofing">Roofing</option>
          <option value=".siding">Siding</option>
          <option value=".door">Door</option>
          <option value=".window">Window</option>
          <option value=".deck">Deck</option>
        </select>
      </div>
    </div>

    <div class="applause_items_wrap mt-5">
      <!-- grid will be the isotope container -->
      <div class="row justify-content-center gy-4 applause-grid">


        <!-- IMPORTANT: add a class on the column wrapper and a service class (match values above) -->
        <div class="col-xl-4 col-md-6 applause-item siding">
          <a class="item" href="javascript:void(0)" onclick="openDVInNewWindow('https://www.archerexteriors.com/archer-applause/from-aluminum-to-amazing')">
            <div class="thumbnail">
              <?= $this->Html->image('archer-applause/thumbnails/from-aluminum-to-amazing.jpg', [
                'alt' => 'Archer Applause',
                'title' => 'Archer Applause'
              ]) ?>
            </div>
            <div class="contents">
              <h4 class="title">From Aluminum to Amazing - A Flawless Vinyl Siding Transformation | Archer Applause</h4>
              <div class="mt-4 service_details">
                <h5>Siding</h5>
                <p>Berlin, NJ</p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-xl-4 col-md-6 applause-item siding door">
          <a class="item" href="javascript:void(0)" onclick="openDVInNewWindow('https://www.archerexteriors.com/archer-applause/stunning-home-makeover-siding-door')">
            <div class="thumbnail">
              <?= $this->Html->image('archer-applause/thumbnails/stunning-home-makeover.jpg', [
                'alt' => 'Archer Applause',
                'title' => 'Archer Applause'
              ]) ?>
            </div>
            <div class="contents">
              <h4 class="title">Stunning Home Makeover! Midnight Blue Siding + New ProVia Entry Door | Archer Applause</h4>
              <div class="mt-4 service_details">
                <h5>Siding & Doors</h5>
                <p>Pilesgrove, NJ</p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-xl-4 col-md-6 applause-item siding">
          <a class="item" href="javascript:void(0)" onclick="openDVInNewWindow('https://www.archerexteriors.com/archer-applause/stunning-maroon-siding-makeover')">
            <div class="thumbnail">
              <?= $this->Html->image('archer-applause/thumbnails/stunning-maroon-siding-makeover.jpg', [
                'alt' => 'Archer Applause',
                'title' => 'Archer Applause'
              ]) ?>
            </div>
            <div class="contents">
              <h4 class="title">Stunning Maroon Siding Makeover | Archer Applause</h4>
              <div class="mt-4 service_details">
                <h5>Siding</h5>
                <p>Vineland, NJ</p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-xl-4 col-md-6 applause-item siding">
          <a class="item" href="javascript:void(0)" onclick="openDVInNewWindow('https://www.archerexteriors.com/archer-applause/oceans-edge-gets-a-stunning-makeover')">
            <div class="thumbnail">
              <?= $this->Html->image('archer-applause/thumbnails/oceans-edge-gets-a-stunning-makeover.jpg', [
                'alt' => 'Archer Applause',
                'title' => 'Archer Applause'
              ]) ?>
            </div>
            <div class="contents">
              <h4 class="title">Ocean’s Edge Gets a Stunning Makeover | Archer Exteriors Delivers Excellence</h4>
              <div class="mt-4 service_details">
                <h5>Siding</h5>
                <p>Sea Isle City, NJ</p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-xl-4 col-md-6 applause-item roofing">
          <a class="item" href="javascript:void(0)" onclick="openDVInNewWindow('https://www.archerexteriors.com/archer-applause/honest-roof-repair-you-can-trust')">
            <div class="thumbnail">
              <?= $this->Html->image('archer-applause/thumbnails/honest-roof-repair-you-can-trust.jpg', [
                'alt' => 'Archer Applause',
                'title' => 'Archer Applause'
              ]) ?>
            </div>
            <div class="contents">
              <h4 class="title">Honest Roof Repair You Can Trust | Archer Exteriors Customer Applause</h4>
              <div class="mt-4 service_details">
                <h5>Roofing</h5>
                <p>Cedarville, NJ</p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-xl-4 col-md-6 applause-item siding window door">
          <a class="item" href="javascript:void(0)" onclick="openDVInNewWindow('https://www.archerexteriors.com/archer-applause/stunning-home-makeover-siding-window-door')">
            <div class="thumbnail">
              <?= $this->Html->image('archer-applause/thumbnails/stunning-home-makeover-new-siding-windows.jpg', [
                'alt' => 'Archer Applause',
                'title' => 'Archer Applause'
              ]) ?>
            </div>
            <div class="contents">
              <h4 class="title">Stunning Home Makeover: New Siding, Windows & Entry Door | Archer Applause</h4>
              <div class="mt-4 service_details">
                <h5>Siding, Windows, Door</h5>
                <p>Bridgeton, NJ</p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-xl-4 col-md-6 applause-item window">
          <a class="item" href="javascript:void(0)" onclick="openDVInNewWindow('https://www.archerexteriors.com/archer-applause/how-new-windows-transformed-our-home')">
            <div class="thumbnail">
              <?= $this->Html->image('archer-applause/thumbnails/we-didnt-realize-how-much-new-windows-could-transform.jpg', [
                'alt' => 'Archer Applause',
                'title' => 'Archer Applause'
              ]) ?>
            </div>
            <div class="contents">
              <h4 class="title">We didn’t realize how much new windows could transform our home | Archer Applause</h4>
              <div class="mt-4 service_details">
                <h5>Windows</h5>
                <p>Monroe, NJ</p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-xl-4 col-md-6 applause-item roofing">
          <a class="item" href="javascript:void(0)" onclick="openDVInNewWindow('https://www.archerexteriors.com/archer-applause/new-roof-zero-mess')">
            <div class="thumbnail">
              <?= $this->Html->image('archer-applause/thumbnails/new-roof-zero-mess-replacing-roofs.jpg', [
                'alt' => 'Archer Applause',
                'title' => 'Archer Applause'
              ]) ?>
            </div>
            <div class="contents">
              <h4 class="title">New Roof, Zero Mess — Replacing Roofs, Not Wrecking Gardens | Archer Applause</h4>
              <div class="mt-4 service_details">
                <h5>Roofing</h5>
                <p>Franklinville, NJ</p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-xl-4 col-md-6 applause-item deck">
          <a class="item" href="javascript:void(0)" onclick="openDVInNewWindow('https://www.archerexteriors.com/archer-applause/our-new-deck-is-a-backyard-paradise')">
            <div class="thumbnail">
              <?= $this->Html->image('archer-applause/thumbnails/our-new-deck-is-a-backyard-paradise.jpg', [
                'alt' => 'Archer Applause',
                'title' => 'Archer Applause'
              ]) ?>
            </div>
            <div class="contents">
              <h4 class="title">Our New Deck Is a Backyard Paradise - Built By Archer Exteriors | Archer Applause</h4>
              <div class="mt-4 service_details">
                <h5>Deck</h5>
                <p>Elmer, NJ</p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-xl-4 col-md-6 grid-sizer"></div>

        <!-- add more items (ensure appropriate service classes like "roofing", "siding", etc.) -->
      </div>
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

<!-- Reviews section Start  -->
<section class="section light reviews">
  <?= $this->element('reviews') ?>
</section>
<!-- Reviews section End  -->

<!-- Activities section Start  -->
<section class="section activities">
  <?= $this->element('community_impact') ?>
</section>
<!-- Activities section End  -->


<!-- <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script> -->
<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var gridElem = document.querySelector('.applause-grid');
    if (!gridElem) return;

    // initialize Isotope after images loaded to avoid jumpy layout
    imagesLoaded(gridElem, function() {
      // create Isotope instance
      var iso = new Isotope(gridElem, {
        itemSelector: '.applause-item',
        percentPosition: true,
        masonry: {
          columnWidth: '.grid-sizer', // <- use grid-sizer (matches Bootstrap column)
          // gutter: 16 // optional numeric gutter if you want to control it via Isotope
        },
        transitionDuration: '550ms'
      });

      // Filter select handler
      var select = document.getElementById('applause');
      if (select) {
        select.addEventListener('change', function(e) {
          var val = e.target.value;
          // If user selected '*' (All) -> show all
          var filterValue = val === '*' ? '*' : val;
          iso.arrange({
            filter: filterValue
          });

          // After arranging, re-layout to ensure smooth transitions
          imagesLoaded(gridElem, function() {
            iso.layout();
          });
        });

        // Optional: support keyboard change (accessibility)
        select.addEventListener('keyup', function(e) {
          if (e.key === 'Enter') {
            select.dispatchEvent(new Event('change'));
          }
        });
      }

      // when window resizes, trigger layout for Isotope
      var resizeDebounce;
      window.addEventListener('resize', function() {
        clearTimeout(resizeDebounce);
        resizeDebounce = setTimeout(function() {
          iso.layout();
        }, 150);
      });
    });
  });
</script>

<script>
  function openDVInNewWindow(videoPageUrl) {
    // Calculate 80% of the screen width and height
    var w = Math.floor(window.screen.width * 0.8);
    var h = Math.floor(window.screen.height * 0.8);
    var left = Math.floor((window.screen.width - w) / 2);
    var top = Math.floor((window.screen.height - h) / 2);

    window.open(
      videoPageUrl,
      '_blank',
      `toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=${w},height=${h},left=${left},top=${top}`
    );
  }
</script>