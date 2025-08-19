

<div class="py-5">
  <?= $this->Html->link(
    $this->Html->image('advertisement/hero-banner-art-contest.png', [
        'class' => 'img-fluid d-none d-sm-block',
        'alt' => 'Color the World with Archie!',
        'title' => 'Color the World with Archie!'
    ]),
    ['controller' => 'Communities', 'action' => 'artContest'],
    ['escape' => false, 'target' => '_blank']
) ?>
    <?= $this->Html->link(
        $this->Html->image('advertisement/hero-banner-art-contest-sm.png', [
            'class' => 'img-fluid d-sm-none',
            'alt' => 'Color the World with Archie!',
            'title' => 'Color the World with Archie!'
        ]),
        ['controller' => 'Communities', 'action' => 'artContest'],
        ['escape' => false, 'target' => '_blank']
    ) ?>
</div>