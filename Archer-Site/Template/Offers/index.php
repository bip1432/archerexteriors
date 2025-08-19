<?php
$this->set('title', 'Events & Offers | Current Activities | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Events & Offers | Current Activities');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Events & Offers, Archer Exteriors');
$this->set('ogTitle', 'Events & Offers | Current Activities | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Events & Offers | Current Activities');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/current-activities'); // TODO: Change to the current page URL
?>

<!-- banner-section -->
<section class="banner-section community_impact current_activities">
  <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
    <div class="slide-item one">
      <div class="image-layer">
      </div>
      <div class="auto-container">
        <div class="row flex-lg-row flex-column-reverse gx-lg-5 gy-4 text-center text-lg-start">
          <div class="col-lg-6 align-self-center">
            <div class="content-box">
              <h1 style="color: var(--header);" class="title">Color the World <br> with Archie!</h1>
              <p style="color: #0a5d8b;" class="desc mb-4">An exciting national art contest for creative kids and teens, brought to you by Archer Exteriors.</p>
              <div class="btn-box mt-4">
                <?= $this->Html->link(
                  'Learn More<i class="flaticon-login"></i>',
                  ['controller' => 'Communities', 'action' => 'artContest'],
                  ['class' => 'theme-btn sm', 'escape' => false]
                ) ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <?= $this->Html->image('current-activities/hero-banners/hero-art-contest.png', [
              'class' => 'img-fluid position-relative',
              'style' => 'width: 450px;margin: 0 auto;',
              'alt' => 'Color the World with Archie!',
              'title' => 'Color the World with Archie!'
            ]) ?>
          </div>
        </div>
      </div>
    </div>

    <div class="slide-item two">
      <div class="image-layer">
      </div>
      <div class="auto-container">
        <div class="row gx-lg-5 gy-4 text-center text-lg-start">
          <div class="col-lg-6">
            <?= $this->Html->image('current-activities/hero-banners/hero-golden-ticket.png', [
              'class' => 'img-fluid position-relative',
              'style' => 'max-height: 400px; width: auto; max-width: 100%;',
              'alt' => 'Snag Your Golden Ticket – Save Big on Home Upgrades!',
              'title' => 'Snag Your Golden Ticket – Save Big on Home Upgrades!'
            ]) ?>
          </div>

          <div class="col-lg-6 align-self-center">
            <div class="content-box">
              <h1 class="title">Snag Your Golden Ticket</h1>
              <p class="desc mb-4">Save Big on Home Upgrades!</p>
              <?= $this->Html->link(
                'Learn More<i class="flaticon-login"></i>',
                ['controller' => 'Offers', 'action' => 'goldenTicket'],
                ['class' => 'theme-btn', 'escape' => false]
              ) ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="slide-item three">
      <div class="image-layer">
      </div>
      <div class="auto-container">
        <div class="row flex-lg-row flex-column-reverse gx-lg-5 gy-4 text-center text-lg-start">
          <div class="col-lg-6 align-self-center">
            <div class="content-box">
              <h1 class="title">Phillies Ticket Giveway</h1>
              <p class="desc mb-4">Archer Exteriors is giving away Philadelphia Phillies tickets EVERY MONTH through September</p>
              <?= $this->Html->link(
              'Learn More<i class="flaticon-login"></i>',
              ['controller' => 'Communities', 'action' => 'philliesTickets'],
              ['class' => 'theme-btn', 'escape' => false]
            ) ?>
            </div>
          </div>

          <div class="col-lg-6">
            <?= $this->Html->image('current-activities/hero-banners/hero-phillies-ticket.png', [
            'class' => 'img-fluid position-relative',
            'style' => 'width: 450px;margin: 0 auto;',
            'alt' => 'Catch a Game With Archer',
            'title' => 'Catch a Game With Archer'
          ]) ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- banner-section end -->

<!-- Current Activities Section Start  -->
<section class="section light">
  <div class="container">
    <div class="sec-title text-center mb-5">
      <h6><i class="flaticon-roof"></i>Current Activities</h6>
      <h2>Archer Exteriors <span>Events & Offers</span></h2>
    </div>

    <div class="row gy-5 justify-content-center current_activities">
      <div class="col-xl-4 col-md-6 col-sm-8">
        <div class="service-block-item light wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
          <div class="inner-box bg-white">
            <div class="image-box">
              <?= $this->Html->link(
                $this->Html->image('current-activities/national-art-content.jpg', [
                  'alt' => 'National Art Contest',
                  'title' => 'National Art Contest'
                ]),
                ['controller' => 'Communities', 'action' => 'artContest'],
                ['escape' => false]
              ) ?>
            </div>
            <div class="lower-content">
              <div class="shap-box"></div>
              <h3><?= $this->Html->link('National Art Contest', ['controller' => 'Communities', 'action' => 'artContest']) ?></h3>
              <p>An exciting national art contest for creative kids and teens, brought to you by Archer Exteriors.</p>
              <div class="link">
                <?= $this->Html->link(
                  'Learn More<i class="flaticon-login"></i>',
                  ['controller' => 'Communities', 'action' => 'artContest'],
                  ['escape' => false]
                ) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-8">
        <div class="service-block-item light wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
          <div class="inner-box bg-white">
            <div class="image-box">
              <?= $this->Html->link(
                $this->Html->image('current-activities/helping-little-fighters.jpg', [
                  'alt' => 'Helping Little Fighters',
                  'title' => 'Helping Little Fighters'
                ]),
                ['controller' => 'Communities', 'action' => 'helpingLittleFighters'],
                ['escape' => false]
              ) ?>
            </div>
            <div class="lower-content">
              <div class="shap-box"></div>
              <h3><?= $this->Html->link('Helping Little Fighters', ['controller' => 'Communities', 'action' => 'helpingLittleFighters']) ?></h3>
              <p>What an unforgettable day at Archer Exteriors! We were honored to host a fundraiser in support of the incredible kids at the Children's Hospital of Philadelphia (CHOP).</p>
              <div class="link">
                <?= $this->Html->link(
                  'Learn More<i class="flaticon-login"></i>',
                  ['controller' => 'Communities', 'action' => 'helpingLittleFighters'],
                  ['escape' => false]
                ) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-8">
        <div class="service-block-item light wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
          <div class="inner-box bg-white">
            <div class="image-box">
              <?= $this->Html->link(
                $this->Html->image('current-activities/golden-ticket.jpg', [
                  'alt' => 'Golden Ticket',
                  'title' => 'Golden Ticket'
                ]),
                ['controller' => 'Offers', 'action' => 'goldenTicket'],
                ['escape' => false]
              ) ?>
            </div>
            <div class="lower-content">
              <div class="shap-box"></div>
              <h3><?= $this->Html->link('Golden Ticket', ['controller' => 'Offers', 'action' => 'goldenTicket']) ?></h3>
              <p>The secret's out — our Golden Ticket promotion is here and the savings are too good to miss. For a
                limited time, you can lock in major discounts on roofing, siding, windows, and doors with Archer
                Exteriors. </p>
              <div class="link">
                <?= $this->Html->link(
                  'Learn More<i class="flaticon-login"></i>',
                  ['controller' => 'Offers', 'action' => 'goldenTicket'],
                  ['escape' => false]
                ) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-8">
        <div class="service-block-item light wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
          <div class="inner-box bg-white">
            <div class="image-box">
              <?= $this->Html->link(
                $this->Html->image('current-activities/phillis-ticket.jpg', [
                  'alt' => 'Phillies tickets',
                  'title' => 'Phillies tickets'
                ]),
                ['controller' => 'Communities', 'action' => 'philliesTickets'],
                ['escape' => false]
              ) ?>
            </div>
            <div class="lower-content">
              <div class="shap-box"></div>
              <h3><?= $this->Html->link('Phillies tickets', ['controller' => 'Communities', 'action' => 'philliesTickets']) ?></h3>
              <p>Archer Exteriors is giving away Philadelphia Phillies tickets EVERY MONTH through September, and it
                starts NOW!</p>
              <div class="link">
                <?= $this->Html->link(
                  'Learn More<i class="flaticon-login"></i>',
                  ['controller' => 'Communities', 'action' => 'philliesTickets'],
                  ['escape' => false]
                ) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-8">
        <div class="service-block-item light wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
          <div class="inner-box bg-white">
            <div class="image-box">
              <?= $this->Html->link(
                $this->Html->image('current-activities/project-home-strong.jpg', [
                  'alt' => 'Project Home Strong',
                  'title' => 'Project Home Strong'
                ]),
                ['controller' => 'Communities', 'action' => 'jeremyAtlas'],
                ['escape' => false]
              ) ?>
            </div>
            <div class="lower-content">
              <div class="shap-box"></div>
              <h3><?= $this->Html->link('Project Home Strong', ['controller' => 'Communities', 'action' => 'projectHomeStrong']) ?></h3>
              <p>At Archer Exteriors, we believe in caring for the communities that support us. We are honored to be
                able to give back to the Atlas Family. Jeremy Atlas is a special education teacher at Pennsville
                Middle School who selflessly gives everything he has to his students and family.</p>
              <div class="link">
                <?= $this->Html->link(
                  'Learn More<i class="flaticon-login"></i>',
                  ['controller' => 'Communities', 'action' => 'jeremyAtlas'],
                  ['escape' => false]
                ) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-8">
        <div class="service-block-item light wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
          <div class="inner-box bg-white">
            <div class="image-box">
              <?= $this->Html->link(
                $this->Html->image('current-activities/cheering-on-elmer.jpg', [
                  'alt' => 'Cheering on Elmer Little League',
                  'title' => 'Cheering on Elmer Little League'
                ]),
                ['controller' => 'Communities', 'action' => 'elmerLittleLeague'],
                ['escape' => false]
              ) ?>
            </div>
            <div class="lower-content">
              <div class="shap-box"></div>
              <h3><?= $this->Html->link('Cheering on Elmer Little League', ['controller' => 'Communities', 'action' => 'elmerLittleLeague']) ?></h3>
              <p>As a proud sponsor of Elmer Little League, Archer Exteriors was thrilled to take part in their
                Opening Day celebration—a day full of energy, smiles, and community spirit. We set up a booth packed
                with free goodies for the kids, including custom water bottles, sweet treats, and other fun giveaways
                that kept spirits high throughout the event.</p>
              <div class="link">
                <?= $this->Html->link(
                  'Learn More<i class="flaticon-login"></i>',
                  ['controller' => 'Communities', 'action' => 'elmerLittleLeague'],
                  ['escape' => false]
                ) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-8">
        <div class="service-block-item light wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
          <div class="inner-box bg-white">
            <div class="image-box">
              <?= $this->Html->link(
                $this->Html->image('current-activities/meals-on-wheels.jpg', [
                  'alt' => 'Meals on Wheels of Salem County',
                  'title' => 'Meals on Wheels of Salem County'
                ]),
                ['controller' => 'Communities', 'action' => 'salemCountyMealsOnWheels'],
                ['escape' => false]
              ) ?>
            </div>
            <div class="lower-content">
              <div class="shap-box"></div>
              <h3><?= $this->Html->link('Meals on Wheels of Salem County', ['controller' => 'Communities', 'action' => 'mealsOnWheels']) ?></h3>
              <p>When Meals on Wheels of Salem County needed help honoring their incredible volunteers, we stepped in
                with a $1,500 donation toward their appreciation dinner. These volunteers deliver more than just meals
                — they deliver hope. We're proud to support their mission of care and connection.</p>
              <div class="link">
                <?= $this->Html->link(
                  'Learn More<i class="flaticon-login"></i>',
                  ['controller' => 'Communities', 'action' => 'salemCountyMealsOnWheels'],
                  ['escape' => false]
                ) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-8">
        <div class="service-block-item light wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
          <div class="inner-box bg-white">
            <div class="image-box">
              <?= $this->Html->link(
                $this->Html->image('current-activities/animal-shelter.jpg', [
                  'alt' => 'Animal Shelter',
                  'title' => 'Animal Shelter'
                ]),
                ['controller' => 'Communities', 'action' => 'gloucesterCountyAnimalShelter'],
                ['escape' => false]
              ) ?>
            </div>
            <div class="lower-content">
              <div class="shap-box"></div>
              <h3><?= $this->Html->link('Animal Shelter', ['controller' => 'Communities', 'action' => 'animalShelter']) ?></h3>
              <p>When our team at Archer Exteriors decided to gather a few items for the Gloucester County Animal
                Shelter, we had no idea how big it would become. Word spread, and soon our employees, customers, and
                local partners joined in.</p>
              <div class="link">
                <?= $this->Html->link(
                  'Learn More<i class="flaticon-login"></i>',
                  ['controller' => 'Communities', 'action' => 'gloucesterCountyAnimalShelter'],
                  ['escape' => false]
                ) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- Community Events Section End  -->


<!-- Archie Section Start  -->
<section class="archie_section">
  <?= $this->element('archie_section') ?>
</section>
<!-- Archie Section End  -->

<!-- clients-section -->
<section class="section light clients-section text-center">
  <?= $this->element('our_partners') ?>
</section>
<!-- clients-section end -->

<!-- Rewards Section Start  -->
<section class="section text-center text-lg-start">
  <div class="container">
    <div class="row gy-5">
      <div class="col-lg-6 col-md-12 align-self-center">
        <?= $this->Html->image('refer/archer-exteriors-referral-program.jpg', [
          'class' => 'rad_4',
          'alt' => 'Archer Exteriors Referral Program Rewards',
          'title' => 'Archer Exteriors Referral Program Rewards'
        ]) ?>
      </div>

      <div class="col-lg-6 col-md-12 align-self-center">
        <div class="sec-title">
          <h6><i class="flaticon-roof"></i>Referral Rewards</h6>
          <h2>Archer Exteriors <span>Where Trust and Rewards Meet</span></h2>
          <p class="desc">Know someone who needs roofing, siding, windows, or any exterior work? Refer them to Archer
            Exteriors and earn up to $500 when the job closes! Our referral program is our way of saying thank you for
            spreading the word. There’s no limit to how many people you can refer—just fill out our referral form, and
            we’ll take care of the rest.</p>
        </div>

        <div>
          <?= $this->Html->link(
            'Learn More<i class="flaticon-login"></i>',
            ['controller' => 'Refers', 'action' => 'index'],
            ['class' => 'theme-btn sm', 'escape' => false]
          ) ?>
        </div>

      </div>

    </div>
  </div>
</section>
<!-- Rewards Section End  -->