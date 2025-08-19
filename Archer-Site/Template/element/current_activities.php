<div class="container">
  <div class="sec-title text-center">
    <h6><i class="flaticon-roof"></i>Current Activities</h6>
    <h2>Whats Going On <span>at Archer Exteriors</span></h2>
  </div>

  <div id="currentActivitiesSlider" class="owl-carousel owl-theme current_activities">
    <div class="service-block-item light wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
      <div class="inner-box">
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
          <div class="link"><?= $this->Html->link('Learn More<i class="flaticon-login"></i>', ['controller' => 'Communities', 'action' => 'artContest'], ['escape' => false]) ?></div>
        </div>
      </div>
    </div>

    <div class="service-block-item light wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
      <div class="inner-box">
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
          <p>What an unforgettable day at Archer Exteriors! We were honored to host a fundraiser in support of the incredible kids at the Children’s Hospital of Philadelphia (CHOP).</p>
          <div class="link"><?= $this->Html->link('Learn More<i class="flaticon-login"></i>', ['controller' => 'Communities', 'action' => 'helpingLittleFighters'], ['escape' => false]) ?></div>
        </div>
      </div>
    </div>

    <div class="service-block-item light wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
      <div class="inner-box">
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
          <p>The secret's out — our Golden Ticket promotion is here and the savings are too good to miss. For a limited time, you can lock in major discounts on roofing, siding, windows, and doors with Archer Exteriors. </p>
          <div class="link"><?= $this->Html->link('Learn More<i class="flaticon-login"></i>', ['controller' => 'Offers', 'action' => 'goldenTicket'], ['escape' => false]) ?></div>
        </div>
      </div>
    </div>

    <div class="service-block-item light wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
      <div class="inner-box">
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
          <h3><?= $this->Html->link('Phillies tickets', ['controller' => 'Offers', 'action' => 'philliesTickets']) ?></h3>
          <p>Archer Exteriors is giving away Philadelphia Phillies tickets EVERY MONTH through September, and it starts NOW!</p>
          <div class="link"><?= $this->Html->link('Learn More<i class="flaticon-login"></i>', ['controller' => 'Communities', 'action' => 'philliesTickets'], ['escape' => false]) ?></div>
        </div>
      </div>
    </div>

    <div class="service-block-item light wow fadeInUp animated" data-wow-delay="900ms" data-wow-duration="1500ms">
      <div class="inner-box">
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
          <h3><?= $this->Html->link('Project Home Strong', ['controller' => 'Communities', 'action' => 'jeremyAtlas']) ?></h3>
          <p>At Archer Exteriors, we believe in caring for the communities that support us. We are honored to be able to give back to the Atlas Family. Jeremy Atlas is a special education teacher at Pennsville Middle School who selflessly gives everything he has to his students and family.</p>
          <div class="link"><?= $this->Html->link('Learn More<i class="flaticon-login"></i>', ['controller' => 'Communities', 'action' => 'jeremyAtlas'], ['escape' => false]) ?></div>
        </div>
      </div>
    </div>

    <div class="service-block-item light wow fadeInUp animated" data-wow-delay="1200ms" data-wow-duration="1500ms">
      <div class="inner-box">
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
          <p>As a proud sponsor of Elmer Little League, Archer Exteriors was thrilled to take part in their Opening Day celebration—a day full of energy, smiles, and community spirit. We set up a booth packed with free goodies for the kids, including custom water bottles, sweet treats, and other fun giveaways that kept spirits high throughout the event.</p>
          <div class="link"><?= $this->Html->link('Learn More<i class="flaticon-login"></i>', ['controller' => 'Communities', 'action' => 'elmerLittleLeague'], ['escape' => false]) ?></div>
        </div>
      </div>
    </div>

    <div class="service-block-item light wow fadeInUp animated" data-wow-delay="1500ms" data-wow-duration="1500ms">
      <div class="inner-box">
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
          <h3><?= $this->Html->link('Meals on Wheels of Salem County', ['controller' => 'Communities', 'action' => 'salemCountyMealsOnWheels']) ?></h3>
          <p>When Meals on Wheels of Salem County needed help honoring their incredible volunteers, we stepped in with a $1,500 donation toward their appreciation dinner. These volunteers deliver more than just meals — they deliver hope. We're proud to support their mission of care and connection.</p>
          <div class="link"><?= $this->Html->link('Learn More<i class="flaticon-login"></i>', ['controller' => 'Communities', 'action' => 'salemCountyMealsOnWheels'], ['escape' => false]) ?></div>
        </div>
      </div>
    </div>

    <div class="service-block-item light wow fadeInUp animated" data-wow-delay="1800ms" data-wow-duration="1500ms">
      <div class="inner-box">
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
          <h3><?= $this->Html->link('Animal Shelter', ['controller' => 'Communities', 'action' => 'gloucesterCountyAnimalShelter']) ?></h3>
          <p>When our team at Archer Exteriors decided to gather a few items for the Gloucester County Animal Shelter, we had no idea how big it would become. Word spread, and soon our employees, customers, and local partners joined in.</p>
          <div class="link"><?= $this->Html->link('Learn More<i class="flaticon-login"></i>', ['controller' => 'Communities', 'action' => 'gloucesterCountyAnimalShelter'], ['escape' => false]) ?></div>
        </div>
      </div>
    </div>
  </div>
</div>