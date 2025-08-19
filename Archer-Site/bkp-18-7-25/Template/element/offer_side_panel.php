<div id="offer-panel">
  <div class="close-btn" id="close-panel">&times;</div>
  <?= $this->Html->image('golden-ticket/golden-ticket-banner.png', [
    'class' => 'img-fluid mt-5',
    'alt' => 'Exclusive Savings for a Limited Time!',
    'title' => 'Exclusive Savings for a Limited Time!'
  ]) ?>
  <h2 class="title_3">Exclusive Savings for a Limited Time!</h2>
  <p class="mb-2">Our Golden Ticket promotion is here — and it's one of our best deals yet. For a limited time, Archer
    Exteriors is offering major savings on roofing, siding, windows, and doors.</p>
  <p class="mb-2">Whether you're replacing a worn-out roof, upgrading curb appeal with new siding, or installing
    energy-efficient windows, now is the time to save. This limited-time offer is only available for new estimates
    during the promotional period.</p>
  <p class="mb-4">The Golden Ticket cannot be applied to previously quoted or signed projects.</p>

  <?= $this->Html->link(
    'Learn More<i class="flaticon-login"></i>',
    ['controller' => 'Offers', 'action' => 'golden-ticket'],
    ['class' => 'theme-btn sm', 'target' => '_blank', 'escape' => false]
  ) ?>
</div>