<div id="offer-panel">
  <div class="close-btn" id="close-panel">&times;</div>

  <div class="panel_wrap mt-5">
    <div class="item">
      <div class="img">
        <?= $this->Html->image('current-activities/eagles-ticket.jpg', [
          'class' => 'img-fluid rad_4',
          'alt' => 'October Eagles Tickets',
          'title' => 'October Eagles Tickets'
        ]) ?>
      </div>
      <div class="contents">
        <h3>October Eagles Tickets</h3>
        <p>Archer Exteriors is giving you the chance to go see the birds this football season.</p>
        <div class="mt-3">
          <?= $this->Html->link(
            'Learn More<i class="flaticon-login"></i>',
            ['controller' => 'Communities', 'action' => 'goBirds'],
            ['class' => 'theme-btn sm', 'target' => '_blank', 'escape' => false]
          ) ?>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="img">
        <?= $this->Html->image('current-activities/national-art-content.jpg', [
          'class' => 'img-fluid rad_4',
          'alt' => 'National Art Contest',
          'title' => 'National Art Contest'
        ]) ?>
      </div>
      <div class="contents">
        <h3>National Art Contest</h3>
        <p>The imagination and talent blew us away this year. We can’t wait to see what next year’s artists will create!</p>
        <div class="mt-3">
          <?= $this->Html->link(
            'Learn More<i class="flaticon-login"></i>',
            ['controller' => 'Communities', 'action' => 'artContest'],
            ['class' => 'theme-btn sm', 'target' => '_blank', 'escape' => false]
          ) ?>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="img">
        <?= $this->Html->image('current-activities/golden-ticket.jpg', [
          'class' => 'img-fluid rad_4',
          'alt' => 'Golden Ticket',
          'title' => 'Golden Ticket'
        ]) ?>
      </div>
      <div class="contents">
        <h3>Golden Ticket</h3>
        <p>The secret's out — our Golden Ticket promotion is here and the savings are too good to miss. For a limited time, you can lock in major discounts on roofing, siding, windows, and doors with Archer Exteriors.</p>
        <div class="mt-3">
          <?= $this->Html->link(
            'Learn More<i class="flaticon-login"></i>',
            ['controller' => 'Offers', 'action' => 'goldenTicket'],
            ['class' => 'theme-btn sm', 'target' => '_blank', 'escape' => false]
          ) ?>
        </div>
      </div>
    </div>
  </div>
</div>