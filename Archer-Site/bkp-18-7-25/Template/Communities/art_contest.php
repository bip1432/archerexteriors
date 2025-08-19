<?php
// Set Meta Tags
$this->set('title', 'Art Contest | Color the World with Archie | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Art Contest');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors, Color the World with Archie');
$this->set('ogTitle', 'Art Contest | Color the World with Archie | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Art Contest');
$this->set('ogImage', $this->Url->assetUrl('/img/archerexteriors-insignia.png', ['fullBase' => true]) . '?' . time());
$this->set('ogType', 'website');
$this->set('ogUrl', $this->Url->build('/art-contest', ['fullBase' => true]));
?>

<!-- banner-section -->
<section class="artContest_hero">
  <div class="auto-container">
    <div class="row flex-lg-row flex-column-reverse gx-lg-5 gy-4 text-center text-lg-start">
      <div class="col-lg-6 align-self-center">
        <div class="contents">
          <h1 class="title">Color the World <br> with Archie!</h1>
          <p class="desc">An exciting art contest for creative kids and teens, brought to you by Archer Exteriors.</p>
        </div>
      </div>

      <div class="col-lg-6">
        <?= $this->Html->image('art-contest/archer-exteriors-art-contest-hero-banner.png', [
          'class' => 'img-fluid banner_img',
          'alt' => 'Color the World with Archie!',
          'title' => 'Color the World with Archie!'
        ]) ?>
      </div>
    </div>
  </div>
</section>
<!-- banner-section end -->


<!-- artContest_categories -->
<section class="section light">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Categories</h6>
      <h2>Contest Categories <br> <span>- By Age Group</span></h2>
    </div>

    <div class="row gy-4 artContest_ageGroup">
      <div class="col-xl-3 col-md-6">
        <div class="item">
          <div class="content_box">
            <h4>Little Scribblers</h4>
            <h2>Ages 5-7</h2>
            <p>For our youngest artists just starting to explore the world of creativity.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="item">
          <div class="content_box">
            <h4>Color Explorers</h4>
            <h2>Ages 8-10</h2>
            <p>Ideal for elementary-age children eager to showcase their growing artistic skills.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="item">
          <div class="content_box">
            <h4>Imagination Architects</h4>
            <h2>Ages 11-13</h2>
            <p>A space for preteens and early teens to show off their unique style and imagination.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="item">
          <div class="content_box">
            <h4>Visioneers</h4>
            <h2>Ages 14-16</h2>
            <p>Bold thinkers turning imagination into inspiration—one sketch at a time.</p>
          </div>
        </div>
      </div>
    </div>


    <div class="artSize_box mt-5">
      <h2>Size/Specs</h2>
      <p>All artwork must be submitted in standard letter size format (11" x 8.5"), preferably in landscape
        orientation.</p>
    </div>
  </div>
</section>
<!-- artContest_categories end -->


<!-- artContest_creativity -->
<section class="section artContest_creativity">
  <div class="auto-container" style="max-width: 1000px;">
    <div class="sec-title light text-center">
      <h2>Let your creativity <span>bring Archie to life!</span></h2>
      <p class="section_desc">Here are a few fun examples we've put together to inspire you.</p>
    </div>

    <div id="artContestCreativity_slider" class="owl-carousel owl-theme artContestCreativity_slider mt-5">
      <div class="item wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
        <div class="inner-box">
          <div class="image-box">
            <a href="<?= $this->Url->image('art-contest/gallery/building.jpg') ?>" class="art-gallery" data-sub-html="<h4 class='artContestCreativity_slider_data_title'>Archie Builds a Home</h4><p class='artContestCreativity_slider_data_desc'>With help from his little friends, Archie builds the perfect home — complete with a strong roof, stylish siding, and plenty of fun along the way.</p>">
              <?= $this->Html->image('art-contest/gallery/building.jpg', [
                'class' => 'rad_4',
                'alt' => 'Archie Builds a Home',
                'title' => 'Archie Builds a Home'
              ]) ?>
              <div class="item_layer">
                <div class="contents">
                  <div class="icons">
                    <i class="fi fi-rr-zoom-in"></i>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="contents">
            <h3>Archie Builds a Home</h3>
            <p>With help from his little friends, Archie builds the perfect home — complete with a strong roof, stylish siding, and plenty of fun along the way.</p>
          </div>
        </div>
      </div>
      <div class="item wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
        <div class="inner-box">
          <div class="image-box">
            <a href="<?= $this->Url->image('art-contest/gallery/super-hero.jpg') ?>" class="art-gallery" data-sub-html="<h4 class='artContestCreativity_slider_data_title'>Super Archie to the Rescue!</h4><p class='artContestCreativity_slider_data_desc'>Archie becomes a superhero, helping out in the neighborhood — this time, he's rescuing a kitty stuck in a tall tree, proving that even a big giraffe can lend a helping hoof.</p>">
              <?= $this->Html->image('art-contest/gallery/super-hero.jpg', [
                'class' => 'rad_4',
                'alt' => 'Super Archie to the Rescue!',
                'title' => 'Super Archie to the Rescue!'
              ]) ?>
              <div class="item_layer">
                <div class="contents">
                  <div class="icons">
                    <i class="fi fi-rr-zoom-in"></i>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="contents">
            <h3>Super Archie to the Rescue!</h3>
            <p>Archie becomes a superhero, helping out in the neighborhood — this time, he's rescuing a kitty stuck in a tall tree, proving that even a big giraffe can lend a helping hoof.</p>
          </div>
        </div>
      </div>
      <div class="item wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
        <div class="inner-box">
          <div class="image-box">
            <a href="<?= $this->Url->image('art-contest/gallery/museum.jpg') ?>" class="art-gallery" data-sub-html="<h4 class='artContestCreativity_slider_data_title'>Archie at the Museum of Imaginations</h4><p class='artContestCreativity_slider_data_desc'>Archie explores towering dinosaurs, roof-shaped sculptures, and even a room made of crayons! It's a day full of fun, curiosity, and wild imagination at the most creative museum ever.</p>">
              <?= $this->Html->image('art-contest/gallery/museum.jpg', [
                'class' => 'rad_4',
                'alt' => 'Archie at the Museum of Imaginations',
                'title' => 'Archie at the Museum of Imaginations'
              ]) ?>
              <div class="item_layer">
                <div class="contents">
                  <div class="icons">
                    <i class="fi fi-rr-zoom-in"></i>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="contents">
            <h3>Archie at the Museum of Imaginations</h3>
            <p>Archie explores towering dinosaurs, roof-shaped sculptures, and even a room made of crayons! It's a day full of fun, curiosity, and wild imagination at the most creative museum ever.</p>
          </div>
        </div>
      </div>
      <div class="item wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
        <div class="inner-box">
          <div class="image-box">
            <a href="<?= $this->Url->image('art-contest/gallery/beach.jpg') ?>" class="art-gallery" data-sub-html="<h4 class='artContestCreativity_slider_data_title'>Beach Day with Archie & Friends</h4><p class='artContestCreativity_slider_data_desc'>Archie is having fun on the beach with his little friends in a sunny, action-packed scene — building sandcastles, playing with beach balls, and splashing in the waves. Let the summer adventure begin!</p>">
              <?= $this->Html->image('art-contest/gallery/beach.jpg', [
                'class' => 'rad_4',
                'alt' => 'Beach Day with Archie & Friends',
                'title' => 'Beach Day with Archie & Friends'
              ]) ?>
              <div class="item_layer">
                <div class="contents">
                  <div class="icons">
                    <i class="fi fi-rr-zoom-in"></i>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="contents">
            <h3>Beach Day with Archie & Friends</h3>
            <p>Archie is having fun on the beach with his little friends in a sunny, action-packed scene — building sandcastles, playing with beach balls, and splashing in the waves. Let the summer adventure begin!</p>
          </div>
        </div>
      </div>
      <div class="item wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
        <div class="inner-box">
          <div class="image-box">
            <a href="<?= $this->Url->image('art-contest/gallery/school.jpg') ?>" class="art-gallery" data-sub-html="<h4 class='artContestCreativity_slider_data_title'>A Day at Giraffe School with Archie</h4><p class='artContestCreativity_slider_data_desc'>Archie is in fun art class with his little friends, painting, coloring, and letting their imaginations soar. It's a creative day full of laughter, tall ideas, and colorful masterpieces.</p>">
              <?= $this->Html->image('art-contest/gallery/school.jpg', [
                'class' => 'rad_4',
                'alt' => 'A Day at Giraffe School with Archies',
                'title' => 'A Day at Giraffe School with Archie'
              ]) ?>
              <div class="item_layer">
                <div class="contents">
                  <div class="icons">
                    <i class="fi fi-rr-zoom-in"></i>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="contents">
            <h3>A Day at Giraffe School with Archie</h3>
            <p>Archie is in fun art class with his little friends, painting, coloring, and letting their imaginations soar. It's a creative day full of laughter, tall ideas, and colorful masterpieces.</p>
          </div>
        </div>
      </div>
      <div class="item wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
        <div class="inner-box">
          <div class="image-box">
            <a href="<?= $this->Url->image('art-contest/gallery/camping.jpg') ?>" class="art-gallery" data-sub-html="<h4 class='artContestCreativity_slider_data_title'>Camping with Archie Under the Stars</h4><p class='artContestCreativity_slider_data_desc'>Archie is super excited for a camping adventure with his little friends! As the stars twinkle above, they gather around the campfire, roasting marshmallows, sharing stories, and enjoying the magic of the great outdoors.</p>">
              <?= $this->Html->image('art-contest/gallery/camping.jpg', [
                'class' => 'rad_4',
                'alt' => 'Camping with Archie Under the Stars',
                'title' => 'Camping with Archie Under the Stars'
              ]) ?>
              <div class="item_layer">
                <div class="contents">
                  <div class="icons">
                    <i class="fi fi-rr-zoom-in"></i>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="contents">
            <h3>Camping with Archie Under the Stars</h3>
            <p>Archie is super excited for a camping adventure with his little friends! As the stars twinkle above, they gather around the campfire, roasting marshmallows, sharing stories, and enjoying the magic of the great outdoors.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- artContest_creativity end -->


<!-- artContest_prizes -->
<section class="section">
  <div class="container">
    <div class="row gx-lg-5 gy-5">
      <div class="col-lg-6">
        <h4 class="title_2 mb-3">Prizes</h4>
        <p>Each age group will have <b>three winners</b>, selected based on <b>originality, imagination,</b> and
          <b>creativity</b> (not just technical skill). Prizes for chosen winners will be shipped to a valid
          residential address within the United States. P.O. Boxes are not eligible for delivery.
        </p>

        <div class="price_list mt-5">
          <div class="left">
            <div class="item one">
              <h4>Group: Little Scribblers</h4>
              <h4>Ages 5-7:</h4>

              <ul class="check_list mt-2">
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>First Place:</b> iPad</li>
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>Second Place:</b> Kindle Fire</li>
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>Third Place:</b> Art Supplies</li>
              </ul>
            </div>

            <div class="item two mt-4">
              <h4>Group: Color Explorers</h4>
              <h4>Ages 8-10:</h4>

              <ul class="check_list mt-2">
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>First Place:</b> iPad</li>
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>Second Place:</b> Kindle Fire</li>
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>Third Place:</b> Art Supplies</li>
              </ul>
            </div>

            <div class="item three mt-4">
              <h4>Group: Imagination Architects</h4>
              <h4>Ages 11-13:</h4>

              <ul class="check_list mt-2">
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>First Place:</b> Laptop</li>
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>Second Place:</b> iPad</li>
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>Third Place:</b> Kindle Fire</li>
              </ul>
            </div>

            <div class="item four mt-4">
              <h4>Group: Visioneers</h4>
              <h4>Ages 14-16:</h4>

              <ul class="check_list mt-2">
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>First Place:</b> Laptop</li>
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>Second Place:</b> iPad</li>
                <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> <b>Third Place:</b> Kindle Fire</li>
              </ul>
            </div>
          </div>

          <div class="right">
            <div class="mb-4">
              <?= $this->Html->image('art-contest/laptop.png', [
                'class' => 'img-fluid',
                'alt' => 'Laptop',
                'title' => 'Laptop'
              ]) ?>
            </div>
            <div class="mb-4">
              <?= $this->Html->image('art-contest/ipad.png', [
                'class' => 'img-fluid',
                'alt' => 'iPad',
                'title' => 'iPad'
              ]) ?>
            </div>
            <div class="mb-4">
              <?= $this->Html->image('art-contest/kindle-fire.png', [
                'class' => 'img-fluid',
                'alt' => 'Kindle Fire',
                'title' => 'Kindle Fire'
              ]) ?>
            </div>
            <div class="mb-4">
              <?= $this->Html->image('art-contest/art-supplies.png', [
                'class' => 'img-fluid',
                'alt' => 'Art Supplies',
                'title' => 'Art Supplies'
              ]) ?>
            </div>
          </div>
        </div>

        <div class="d-flex gap-3 mt-4 align-items-center">
          <?= $this->Html->image('art-contest/svg/post-it.svg', [
            'alt' => 'All prizes are selected to support and encourage continued creativity and education.',
            'title' => 'All prizes are selected to support and encourage continued creativity and education.',
            'width' => '54'
          ]) ?>
          <p style="line-height: 1.4;">All prizes are selected to support and encourage continued creativity and
            education.</p>
        </div>

        <div class="mt-5">
          <a href="/price-match-guarantee" class="theme-btn sm" data-bs-toggle="modal" data-bs-target="#contestTermsModal" href="javascript:void(0)"><?= $this->Html->image('art-contest/svg/alert-sign.svg', ['alt' => 'Terms and Conditions of the Contest', 'width' => '24']) ?> Terms and Conditions of the Contest</a>
        </div>
      </div>

      <div class="col-lg-6 position-relative">
        <?= $this->Html->image('art-contest/splash-orange.png', [
          'class' => 'artContest_form_splash',
          'alt' => ''
        ]) ?>
        <div class="artContest_form">
          <h2 class="title">Color the World with Archie <br> - Registration Form</h2>
          <p class="desc">Please complete the form below to register your child for the contest. One entry per child.
          </p>

          <!-- Embed Code  -->
          <iframe
            data-tally-src="https://tally.so/embed/wkjB9R?alignLeft=1&hideTitle=1&transparentBackground=1&dynamicHeight=1"
            loading="lazy" width="100%" height="1036" frameborder="0" marginheight="0" marginwidth="0"
            title="Art Contest 2025"></iframe>
          <script>
            var d = document,
              w = "https://tally.so/widgets/embed.js",
              v = function() {
                "undefined" != typeof Tally ? Tally.loadEmbeds() : d.querySelectorAll("iframe[data-tally-src]:not([src])").forEach((function(e) {
                  e.src = e.dataset.tallySrc
                }))
              };
            if ("undefined" != typeof Tally) v();
            else if (d.querySelector('script[src="' + w + '"]') == null) {
              var s = d.createElement("script");
              s.src = w, s.onload = v, s.onerror = v, d.body.appendChild(s);
            }
          </script>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- artContest_prizes end -->


<!-- drawing_medium -->
<section class="section drawing_medium">
  <div class="container">
    <div class="row gy-4 gx-lg-5 text-center text-lg-start">
      <div class="col-lg-6 align-self-center">
        <?= $this->Html->image('art-contest/banner-drawing-medium.jpg', [
          'class' => 'rad_4',
          'alt' => 'Drawing Medium',
          'title' => 'Drawing Medium'
        ]) ?>
      </div>

      <div class="col-lg-6 align-self-center">
        <h2 class="text-white title_2">Drawing Medium</h2>
        <p class="text-white mt-3">Submissions must be created using <b>traditional drawing or coloring tools</b> such
          as crayons, colored pencils, watercolor, or oil paint.</p>
        <p class="text-white mt-4"><b>Digital artwork or AI-generated images will not be accepted.</b> Only
          hand-drawn, original entries are eligible.</p>

        <div class="mt-5">
          <h4 class="text-white mb-3">
            <?= $this->Html->image('art-contest/svg/warning.svg', [
              'alt' => 'Exclusion',
              'title' => 'Exclusion',
              'width' => '28',
              'style' => 'position: relative;top: -2px;'
            ]) ?> Exclusion
          </h4>
          <p class="text-white">Due to conflict of interest, employees and family members of Archer Exteriors, as well
            as immediate or direct business partners and affiliates, are not eligible to participate in the contest.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row flex-lg-row-reverse gy-4 gx-lg-5">
      <div class="col-lg-6 align-self-center text-center text-lg-start">
        <?= $this->Html->image('art-contest/banner-comntest-guideline.jpg', [
          'class' => 'rad_4',
          'alt' => 'Contest Guidelines',
          'title' => 'Contest Guidelines'
        ]) ?>
      </div>

      <div class="col-lg-6 align-self-center">
        <h2 class="title_2">Contest Guidelines</h2>
        <h4 class="title_4 mt-2">Let your imagination take center stage and have fun with your artwork!</h4>

        <h4 class="title_4 mt-4">Here's what to keep in mind:</h4>
        <ul class="check_list mt-3">
          <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Make sure to include Archie wearing his yellow Archer
            hard hat in your drawing!</li>
          <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Archie is a gentle, friendly, and fun-loving giraffe
            who loves meeting new people and going on adventures.</li>
          <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Be as creative and imaginative as you like — there's
            no limit to where Archie can go or what he can do!</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section drawing_medium">
  <div class="container">
    <div class="row gy-4 gx-lg-5">
      <div class="col-lg-6 align-self-center text-center text-lg-start">
        <?= $this->Html->image('art-contest/banner-judging-criteria.jpg', [
          'class' => 'rad_4',
          'alt' => 'Judging Criteria',
          'title' => 'Judging Criteria'
        ]) ?>
      </div>

      <div class="col-lg-6 align-self-center">
        <h2 class="text-white title_2">Judging Criteria</h2>

        <h4 class="title_4 text-white mt-4">Submissions will be judged based on:</h4>
        <ul class="check_list text-white mt-3">
          <li><?= $this->Html->image('check-white.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Creativity & Imagination</b> – How
              original and imaginative the concept and scene are.</span></li>
          <li><?= $this->Html->image('check-white.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Originality</b> – Unique ideas that
              stand out from the crowd.</span></li>
          <li><?= $this->Html->image('check-white.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Visual Impact</b> – Overall appeal and
              how striking or memorable the artwork is.</span></li>
          <li><?= $this->Html->image('check-white.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Theme Alignment (Archie & his
                world)</b> – How well the drawing incorporates Archie and fits the contest theme.</span></li>
          <li><?= $this->Html->image('check-white.svg', ['alt' => 'Check', 'width' => '20']) ?> <span><b>Use of Color</b> – Thoughtful and
              creative use of color to enhance the artwork.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- drawing_medium end -->


<!-- artContest_rules -->
<section class="section light">
  <div class="auto-container" style="max-width: 1000px;">
    <div class="sec-title text-center">
      <h6><i class="flaticon-roof"></i>Process</h6>
      <h2>Submission <span>Process</span></h2>
    </div>

    <h4 class="title_3 mt-5">To enter, follow both steps below:</h4>
    <ul class="check_list mt-3 submission_process">
      <li class="one mb-3"><span class="number">1</span> Take a clear photo or scan of your child's artwork. <br>
        Include Child's First Name, Group Name & Age</li>
      <li class="two mb-3"><span class="number">2</span> <span>Post the artwork photo on your Facebook profile. Make
          sure to tag <b style="color: #ff5c5c;">@ArcherExteriors</b> and use the hashtag <b
            style="color: #ff5c5c;">#ColorTheWorldWithArchie.</b> <i>(This helps us find and feature your
            submission!)</i></span></li>
      <li class="three mb-3"><span class="number">3</span> <span>Add a title and a brief description of the artwork,
          written by the child. Let it be original and from their heart! <i>Encourage your network to Like & Share the
            post.</i></span></li>
      <li class="four"><span class="number">4</span> <span>After posting on Facebook, please make sure to complete the
          official contest submission form available at <b
            style="color: #2076be;">[ArcherExteriors.com/ArtContest]</b> to record your participation
          officially.</span></li>
    </ul>

    <div class="deadline_box mt-5">
      <h4 class="title">Entry Deadline:</h4>
      <?= $this->Html->image('art-contest/svg/sept-one.svg', [
        'alt' => '1st September 2025',
        'title' => '1st September 2025'
      ]) ?>
      <p class="desc">1st September 2025 – Entries must be received by this date.</p>
    </div>
  </div>
</section>
<!-- artContest_rules end -->


<!-- artContest_announcement -->
<section class="two_col_section">
  <div class="outer_container">
    <div class="col left_col" style="background: #008C99;">
      <div class="col_inner">
        <h2 class="mb-3 text-white">
          <?= $this->Html->image('art-contest/svg/announcement.svg', [
            'width' => '36',
            'class' => 'me-2',
            'alt' => 'Winners Announcement',
            'title' => 'Winners Announcement'
          ]) ?>Winners Announcement
        </h2>
        <p class="text-white">Winners will be announced on <b>1st October 2025</b> via <b><?= $this->Html->link('archerexteriors.com', '/', ['class' => 'link_reverse']) ?></b> and
          our social media platforms.</p>
        <ul class="check_list text-white mt-3">
          <li class="mb-3"><?= $this->Html->image('check-white.svg', ['alt' => 'Check', 'width' => '20']) ?> <span>Parents/Guardians of winners
              will be contacted directly via email or phone.</span></li>
          <li class="mb-3"><?= $this->Html->image('check-white.svg', ['alt' => 'Check', 'width' => '20']) ?> <span>All selected winners will be
              required to mail the original artwork to our corporate headquarters in New Jersey. </span></li>
          <li class="mb-3"><?= $this->Html->image('check-white.svg', ['alt' => 'Check', 'width' => '20']) ?> <span>Only original, hand-drawn
              artwork is eligible—no digital prints or computer-generated art will be accepted.</span></li>
          <li class="mb-3"><?= $this->Html->image('check-white.svg', ['alt' => 'Check', 'width' => '20']) ?> <span>A valid age verification
              document will be required for all winners.</span></li>
          <li class="mb-3"><?= $this->Html->image('check-white.svg', ['alt' => 'Check', 'width' => '20']) ?> <span>All winning artwork will be
              showcased across our platforms and proudly featured in our upcoming <b>"Color the World with Archie"</b>
              coloring book, to be shared with businesses, communities, charities, and families nationwide.</span>
          </li>
        </ul>
      </div>
    </div>

    <div class="col right_col" style="background: #fff;">
      <div class="col_inner">
        <h2 class="mb-3">
          <?= $this->Html->image('art-contest/svg/alert-sign.svg', [
            'width' => '36',
            'class' => 'me-2',
            'alt' => 'Legal & Usage Note',
            'title' => 'Legal & Usage Note'
          ]) ?>Legal & Usage Note
        </h2>
        <p class="mb-3">All artwork submissions become the property of Archer Exteriors and may be used for marketing
          purposes, printed materials, promotional campaigns, and future brand-related content, including but not
          limited to coloring books, social media posts, TV commercials and community outreach materials.</p>
        <p>By submitting artwork, participants and their guardians acknowledge that:</p>
        <ul class="check_list mt-3">
          <li class="mb-3"><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Archer Exteriors retains the right to
            reproduce, publish, and distribute the artwork in any format.</li>
          <li class="mb-3"><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> The usage of submitted artwork does not
            constitute any financial royalty, compensation, or ownership rights now or in the future.</li>
          <li class="mb-3"><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Participation in the contest implies
            acceptance of these terms.</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- artContest_announcement end -->


<!-- Modal -->
<div class="modal modal-lg fade modal_v1" id="contestTermsModal" tabindex="-1" aria-labelledby="contestTermsModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-header-inner">
          <img class="img-fluid" src="./img/archer-icon-a-white.png" width="40" alt="Archer Exteriors"
            title="Archer Exteriors">
          <h1 class="modal-title fs-5" id="contestTermsModalLabel">Terms and Conditions of the Contest</h1>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
            class="fi fi-rr-cross"></i></button>
      </div>
      <div class="modal-body">
        <h4 class="mb-2">Legal & Usage Note:</h4>
        <p>All artwork submissions become the property of Archer Exteriors and may be used for marketing purposes, printed materials, promotional campaigns, and future brand-related content, including but not limited to coloring books, social media posts, TV commercials and community outreach materials.</p>

        <p class="mt-3">By submitting artwork, participants and their guardians acknowledge that:</p>

        <ul class="check_list mt-3">
          <li class="mb-3"><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Archer Exteriors retains the right to
            reproduce, publish, and distribute the artwork in any format.</li>
          <li class="mb-3"><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> The usage of submitted artwork does not
            constitute any financial royalty, compensation, or ownership rights now or in the future.</li>
          <li class="mb-3"><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Participation in the contest implies
            acceptance of these terms.</li>
        </ul>
      </div>
    </div>
  </div>
</div>