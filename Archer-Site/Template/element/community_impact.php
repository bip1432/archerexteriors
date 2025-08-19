<div class="container">
  <div class="row gy-4">
    <div class="col-lg-4 left-content">
      <div class="sec-title mb-3">
        <h6><i class="flaticon-roof"></i>Community Impact</h6>
        <h2>Giving <span> Back With Purpose</span></span></h2>

        <p class="section_desc mt-4">At Archer Exteriors, building strong communities is just as important as building strong homes. That’s why we actively support local causes and organizations that make a difference.</p>
      </div>

      <?= $this->Html->link('Learn More<i class="flaticon-login"></i>', ['controller' => 'Communities', 'action' => 'index'], ['class' => 'theme-btn sm', 'escape' => false]) ?>

      <!-- Custom Carousel Controls -->
      <div class="owl-carousel__nav mt-4">
        <div class="control owl-carousel__prev"><i class="fi fi-br-angle-left"></i></div>
        <div class="control owl-carousel__next"><i class="fi fi-br-angle-right"></i></div>
      </div>
    </div>

    <div class="col-lg-8 align-self-center">
      <div class="activities_slider_wrapper">
        <div id="activitiesCarousel" class="owl-carousel owl-theme activities_slider">
          <div class="item">
            <div class="item_img">
              <?= $this->Html->image('community-impact/national-art-contest.jpg', [
                'alt' => 'National Art Contest',
                'title' => 'National Art Contest'
              ]) ?>
            </div>

            <div class="item_layer">
              <div class="contents">
                <h4>National Art Contest</h4>
                <p>An exciting national art contest for creative kids and teens, brought to you by Archer Exteriors.</p>
                <?= $this->Html->link(
                  '<i class="flaticon-login"></i>',
                  ['controller' => 'Communities', 'action' => 'artContest'],
                  ['class' => 'link', 'escape' => false]
                ) ?>
              </div>
            </div>
          </div>

          <!-- <div class="item">
            <div class="item_img">
              <?= $this->Html->image('community-impact/golden-ticket.jpg', [
                'alt' => 'Golden Ticket',
                'title' => 'Golden Ticket'
              ]) ?>
            </div>

            <div class="item_layer">
              <div class="contents">
                <h4>Golden Ticket</h4>
                <p>The secret's out — our Golden Ticket promotion is here and the savings are too good to miss. For a limited time, you can lock in major discounts on roofing, siding, windows, and doors with Archer Exteriors.</p>
                <?= $this->Html->link(
                  '<i class="flaticon-login"></i>',
                  ['controller' => 'Offers', 'action' => 'goldenTicket'],
                  ['class' => 'link', 'escape' => false]
                ) ?>
              </div>
            </div>
          </div> -->

          <div class="item">
            <div class="item_img">
              <?= $this->Html->image('community-impact/phillies-ticket.jpg', [
                'alt' => 'Phillies tickets',
                'title' => 'Phillies tickets'
              ]) ?>
            </div>

            <div class="item_layer">
              <div class="contents">
                <h4>Phillies tickets</h4>
                <p>Archer Exteriors is giving away Philadelphia Phillies tickets EVERY MONTH through September, and it starts NOW!</p>
                <?= $this->Html->link(
                  '<i class="flaticon-login"></i>',
                  ['controller' => 'Communities', 'action' => 'philliesTickets'],
                  ['class' => 'link', 'escape' => false]
                ) ?>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="item_img">
              <?= $this->Html->image('community-impact/helping-little-fighters-chop.jpg', [
                'alt' => 'Helping Little Fighters, One Gift at a Time.',
                'title' => 'Helping Little Fighters, One Gift at a Time.'
              ]) ?>
            </div>

            <div class="item_layer">
              <div class="contents">
                <h4>Helping Little Fighters, One Gift at a Time.</h4>
                <p>We were honored to host a fundraiser in support of Children’s Hospital of Philadelphia!</p>
                <?= $this->Html->link(
                  '<i class="flaticon-login"></i>',
                  ['controller' => 'Communities', 'action' => 'helping-little-fighters'],
                  ['class' => 'link', 'escape' => false]
                ) ?>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="item_img">
              <?= $this->Html->image('community-impact/supporting-meals-on-wheels.jpg', [
                'alt' => 'Supporting Meals on Wheels of Salem County',
                'title' => 'Supporting Meals on Wheels of Salem County'
              ]) ?>
            </div>

            <div class="item_layer">
              <div class="contents">
                <h4>Supporting Meals on Wheels of Salem County</h4>
                <p>When Meals on Wheels of Salem County needed help honoring their incredible volunteers, we stepped in with a $1,500 donation toward their appreciation dinner. These volunteers deliver more than just meals — they deliver hope. We’re proud to support their mission of care and connection.</p>
                <?= $this->Html->link(
                  '<i class="flaticon-login"></i>',
                  ['controller' => 'Communities', 'action' => 'salemCountyMealsOnWheels'],
                  ['class' => 'link', 'escape' => false]
                ) ?>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="item_img">
              <?= $this->Html->image('community-impact/supporting-family-need.jpg', [
                'alt' => 'Project Home Strong',
                'title' => 'Project Home Strong'
              ]) ?>
            </div>

            <div class="item_layer">
              <div class="contents">
                <h4>Project Home Strong</h4>
                <p>Jeremy Atlas is a dedicated special education teacher and father of two, working tirelessly to provide for his family. When we learned his roof desperately needed replacement and finances were tight, we stepped in to give his family a brand-new roof, completely free of charge. It was our honor to help someone who gives so much to others.</p>
                <?= $this->Html->link(
                  '<i class="flaticon-login"></i>',
                  ['controller' => 'Communities', 'action' => 'jeremyAtlas'],
                  ['class' => 'link', 'escape' => false]
                ) ?>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="item_img">
              <?= $this->Html->image('community-impact/supporting-animal-shelter.jpg', [
                'alt' => 'Rallying Support for Gloucester County Animal Shelter',
                'title' => 'Rallying Support for Gloucester County Animal Shelter'
              ]) ?>
            </div>

            <div class="item_layer">
              <div class="contents">
                <h4>Rallying Support for Gloucester County Animal Shelter</h4>
                <p>What began as a simple office collection for the Gloucester County Animal Shelter turned into something extraordinary. With overwhelming community support and a generous $1,000 supplier donation, we delivered a truckload of supplies to help local animals in need. This effort reminded us how small acts can spark a big impact.</p>
                <?= $this->Html->link(
                  '<i class="flaticon-login"></i>',
                  ['controller' => 'Communities', 'action' => 'gloucesterCountyAnimalShelter'],
                  ['class' => 'link', 'escape' => false]
                ) ?>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="item_img">
              <?= $this->Html->image('community-impact/cheering-on-elmer-little-league.jpg', [
                'alt' => 'Cheering on Elmer Little League',
                'title' => 'Cheering on Elmer Little League'
              ]) ?>
            </div>

            <div class="item_layer">
              <div class="contents">
                <h4>Cheering on Elmer Little League</h4>
                <p>As a proud sponsor of Elmer Little League, we joined their Opening Day celebration with a booth full of free goodies for the kids and a special raffle giveaway. Supporting youth sports is one way we stay connected to the families and neighborhoods we serve, and it was a home run of a day.</p>
                <?= $this->Html->link(
                  '<i class="flaticon-login"></i>',
                  ['controller' => 'Communities', 'action' => 'elmerLittleLeague'],
                  ['class' => 'link', 'escape' => false]
                ) ?>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>