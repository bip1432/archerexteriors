  <!-- Hero Section Start -->
  <section class="under_construction_hero gap_for_sticky_nav">
      <div class="container">
          <div class="contents">
              <h1 class="title_1 text-center">This page is for "<?= $pageTitle ?>"</h1>
          </div>
      </div>
  </section>
  <!-- Hero Section End -->

  <section class="section under_construction" style="padding: 150px 0;">
      <div class="container">
          <div class="row gy-5">
              <div class="col-lg-5 text-center">
                  <div class="img">
                      <?= $this->Html->image('comming-soon/comming-soon.png', [
                            'class' => 'img-fluid',
                            'alt' => 'Something awesome is on its way!',
                            'title' => 'Something awesome is on its way!'
                        ]) ?>
                  </div>
              </div>
              <div class="col-lg-7 align-self-center">
                  <h2 class="title_2 section_title">Something awesome is on its way!</h2>
                  <p class="lead mb-0">We're currently crafting something special just for you! Our dedicated team is working diligently behind the scenes to create an exceptional experience. Thank you for your patience as we perfect every detail to ensure we deliver the quality you deserve.</p>
                  <p class="section_desc mt-4 mb-0">Stay tuned - we'll be launching soon!</p>
              </div>
          </div>
      </div>
  </section>