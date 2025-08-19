<?php
// Set Meta Tags
$this->set('title', 'Archer Exteriors Community Impact | Giving Back Through Local Support & Service');
$this->set('metaDescription', 'Archer Exteriors - Community Impact | Giving Back Through Local Support & Service');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Community Impact, Archer Exteriors, Giving Back Through Local Support & Service');
$this->set('ogTitle', 'Archer Exteriors Community Impact | Giving Back Through Local Support & Service');
$this->set('ogDescription', 'Archer Exteriors - Community Impact | Giving Back Through Local Support & Service');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/community-impact');
?>

<!-- banner-section -->
<section class="banner-section community_impact">
  <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
    <div class="slide-item one">
      <div class="image-layer">
      </div>
      <div class="auto-container">
        <div class="content-box">
          <h4>A Roof Over Their Heads – The Atlas Family</h4>
          <div class="btn-box">
            <?= $this->Html->link('Watch the Surprise<i class="flaticon-login"></i>', ['controller' => 'Communities', 'action' => 'jeremyAtlas'], ['class' => 'theme-btn', 'escape' => false]) ?>
          </div>
        </div>
      </div>
    </div>
    <div class="slide-item two">
      <div class="image-layer">
      </div>
      <div class="auto-container">
        <div class="content-box">
          <h4>Helping Little Fighters, One Gift at a Time.</h4>
          <div class="btn-box">
            <?= $this->Html->link('CHOP Fundraiser<i class="flaticon-login"></i>', ['controller' => 'Communities', 'action' => 'helpingLittleFighters'], ['class' => 'theme-btn', 'escape' => false]) ?>
          </div>
        </div>
      </div>
    </div>
    <div class="slide-item three">
      <div class="image-layer">
      </div>
      <div class="auto-container">
        <div class="content-box">
          <h4>Cheering on Elmer Little League</h4>
          <div class="btn-box">
            <?= $this->Html->link('Little League, Big Smiles<i class="flaticon-login"></i>', ['controller' => 'Communities', 'action' => 'elmerLittleLeague'], ['class' => 'theme-btn', 'escape' => false]) ?>
          </div>
        </div>
      </div>
    </div>
    <div class="slide-item four">
      <div class="image-layer">
      </div>
      <div class="auto-container">
        <div class="content-box">
          <h4 style="color: var(--grad-dark);">Supporting Meals on Wheels of Salem County</h4>
          <div class="btn-box">
            <?= $this->Html->link('More Than a Meal<i class="flaticon-login"></i>', ['controller' => 'Communities', 'action' => 'salemCountyMealsOnWheels'], ['class' => 'theme-btn', 'escape' => false]) ?>
          </div>
        </div>
      </div>
    </div>
    <div class="slide-item five">
      <div class="image-layer">
      </div>
      <div class="auto-container">
        <div class="content-box">
          <h4>Support for Gloucester County Animal Shelter</h4>
          <div class="btn-box">
            <?= $this->Html->link('A Truckload of Love<i class="flaticon-login"></i>', ['controller' => 'Communities', 'action' => 'gloucesterCountyAnimalShelter'], ['class' => 'theme-btn', 'escape' => false]) ?>
          </div>
        </div>
      </div>
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
        style="font-size: 18px; max-width: 1200px; margin-left: auto;margin-right: auto; color: var(--font);">At
        Archer Exteriors, building strong communities is just as important as building strong homes. That’s why we
        actively support local causes and organizations that make a difference.</p>
    </div>

    <div class="community_events_wrap">
      <!-- <div class="community_events_filter text-end">
          <select id="yearFilter">
            <option selected value="2025">2025</option>
            <option value="2024">2024</option>
          </select>
        </div> -->

      <div class="service_types_wrap community_events active" data-year="2025">
        <div class="row justify-content-center gy-5 mt-2">
          <div class="col-xl-4 col-md-6 col-sm-8">
            <div class="service-block-item wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
              <div class="inner-box">
                <div class="image-box">
                  <?= $this->Html->link(
                    $this->Html->image('community-impact/v2/helping-little-fighters.jpg', [
                      'alt' => 'Helping Little Fighters, One Gift at a Time.',
                      'title' => 'Helping Little Fighters, One Gift at a Time.'
                    ]),
                    ['controller' => 'Communities', 'action' => 'helpingLittleFighters'],
                    ['escape' => false]
                  ) ?>
                </div>
                <div class="lower-content">
                  <div class="shap-box"></div>
                  <h3><?= $this->Html->link('Helping Little Fighters, One Gift at a Time.', ['action' => 'helping-little-fighters']) ?></h3>
                  <p class="line_clamp_4">We were honored to host a fundraiser in support of Children’s Hospital of Philadelphia!</p>
                  <div class="link">
                    <?= $this->Html->link('CHOP Fundraiser<i class="flaticon-login"></i>', ['action' => 'helping-little-fighters'], ['escape' => false]) ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 col-sm-8">
            <div class="service-block-item wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
              <div class="inner-box">
                <div class="image-box">
                  <?= $this->Html->link(
                    $this->Html->image('community-impact/v2/national-art-content.jpg', [
                      'alt' => 'Color the World with Archie',
                      'title' => 'Color the World with Archie'
                    ]),
                    ['controller' => 'Communities', 'action' => 'artContest'],
                    ['escape' => false]
                  ) ?>
                </div>
                <div class="lower-content">
                  <div class="shap-box"></div>
                  <h3><?= $this->Html->link('Color the World with <br> Archie', ['action' => 'artContest'], ['escape' => false]) ?></h3>
                  <p class="line_clamp_4">An exciting national art contest for creative kids and teens, brought to you by Archer Exteriors.</p>

                  <div class="link">
                    <?= $this->Html->link('Learn More<i class="flaticon-login"></i>', ['action' => 'artContest'], ['escape' => false]) ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 col-sm-8">
            <div class="service-block-item wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
              <div class="inner-box">
                <div class="image-box">
                  <?= $this->Html->link(
                    $this->Html->image('community-impact/v2/a-roof-over-their-heads copy.jpg', [
                      'alt' => 'A Roof Over Their Heads – The Atlas Family',
                      'title' => 'A Roof Over Their Heads – The Atlas Family'
                    ]),
                    ['controller' => 'Communities', 'action' => 'jeremyAtlas'],
                    ['escape' => false]
                  ) ?>
                </div>
                <div class="lower-content">
                  <div class="shap-box"></div>
                  <h3><?= $this->Html->link('A Roof Over Their Heads – The Atlas Family', ['action' => 'jeremy-atlas']) ?></h3>
                  <p class="line_clamp_4">Jeremy Atlas is a dedicated special education teacher and father of two, working tirelessly to provide for his family. When we learned his roof desperately needed replacement and finances were tight, we stepped in to give his family a brand-new roof, completely free of charge. It was our honor to help someone who gives so much to others.</p>
                  <div class="link">
                    <?= $this->Html->link('Watch the Surprise<i class="flaticon-login"></i>', ['action' => 'jeremy-atlas'], ['escape' => false]) ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 col-sm-8">
            <div class="service-block-item wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
              <div class="inner-box">
                <div class="image-box">
                  <?= $this->Html->link(
                    $this->Html->image('community-impact/v2/rallying-support-for-gloucester-county-animal-shelter.jpg', [
                      'alt' => 'Rallying Support for Gloucester County Animal Shelter',
                      'title' => 'Rallying Support for Gloucester County Animal Shelter'
                    ]),
                    ['controller' => 'Communities', 'action' => 'gloucesterCountyAnimalShelter'],
                    ['escape' => false]
                  ) ?>
                </div>
                <div class="lower-content">
                  <div class="shap-box"></div>
                  <h3><?= $this->Html->link('Support for Gloucester County Animal Shelter', ['action' => 'gloucester-county-animal-shelter']) ?></h3>
                  <p class="line_clamp_4">What began as a simple office collection for the Gloucester County Animal Shelter turned into something extraordinary. With overwhelming community support and a generous $1,000 supplier donation, we delivered a truckload of supplies to help local animals in need. This effort reminded us how small acts can spark a big impact.</p>
                  <div class="link">
                    <?= $this->Html->link('A Truckload of Love<i class="flaticon-login"></i>', ['action' => 'gloucester-county-animal-shelter'], ['escape' => false]) ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 col-sm-8">
            <div class="service-block-item wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
              <div class="inner-box">
                <div class="image-box">
                  <?= $this->Html->link(
                    $this->Html->image('community-impact/v2/cheering-on-elmer-little-league.jpg', [
                      'alt' => 'Cheering on Elmer Little League',
                      'title' => 'Cheering on Elmer Little League'
                    ]),
                    ['controller' => 'Communities', 'action' => 'elmerLittleLeague'],
                    ['escape' => false]
                  ) ?>
                </div>
                <div class="lower-content">
                  <div class="shap-box"></div>
                  <h3><?= $this->Html->link('Cheering on Elmer Little League', ['action' => 'elmer-little-league']) ?></h3>
                  <p class="line_clamp_4">As a proud sponsor of Elmer Little League, we joined their Opening Day celebration with a booth full of free goodies for the kids and a special raffle giveaway. Supporting youth sports is one way we stay connected to the families and neighborhoods we serve, and it was a home run of a day.</p>
                  <div class="link">
                    <?= $this->Html->link('Little League, Big Smiles<i class="flaticon-login"></i>', ['action' => 'elmer-little-league'], ['escape' => false]) ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 col-sm-8">
            <div class="service-block-item wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
              <div class="inner-box">
                <div class="image-box">
                  <?= $this->Html->link(
                    $this->Html->image('community-impact/v2/salem-county-meals-on-wheels copy.jpg', [
                      'alt' => 'Supporting Meals on Wheels of Salem County',
                      'title' => 'Supporting Meals on Wheels of Salem County'
                    ]),
                    ['controller' => 'Communities', 'action' => 'salemCountyMealsOnWheels'],
                    ['escape' => false]
                  ) ?>
                </div>
                <div class="lower-content">
                  <div class="shap-box"></div>
                  <h3><?= $this->Html->link('Supporting Meals on Wheels of Salem County', ['action' => 'salem-county-meals-on-wheels']) ?></h3>
                  <p class="line_clamp_4">When Meals on Wheels of Salem County needed help honoring their incredible volunteers, we stepped in with a $1,500 donation toward their appreciation dinner. These volunteers deliver more than just meals — they deliver hope. We're proud to support their mission of care and connection.</p>
                  <div class="link">
                    <?= $this->Html->link('More Than a Meal<i class="flaticon-login"></i>', ['action' => 'salem-county-meals-on-wheels'], ['escape' => false]) ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="service_types_wrap community_events" data-year="2024">
          2024 Events
        </div> -->

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

<!-- clients-section -->
<section class="section clients-section text-center">
  <?= $this->element('our_partners') ?>
</section>
<!-- clients-section end -->