<?= $this->Html->link(
    $this->Html->image('golden-ticket/hero-banner-golden-ticket.jpg', [
        'class' => 'img-fluid d-none d-sm-block',
        'alt' => 'Archer Exteriors Golden Ticket Offer',
        'title' => 'Archer Exteriors Golden Ticket Offer'
    ]),
    ['controller' => 'Offers', 'action' => 'goldenTicket'],
    ['escape' => false]
) ?>
    <?= $this->Html->link(
        $this->Html->image('golden-ticket/golden-ticket-banner.png', [
            'class' => 'img-fluid d-sm-none',
            'alt' => 'Archer Exteriors Golden Ticket Offer',
            'title' => 'Archer Exteriors Golden Ticket Offer'
        ]),
        ['controller' => 'Offers', 'action' => 'goldenTicket'],
        ['escape' => false]
    ) ?>