<div class="auto-container">
    <div class="inner_row">
        <div class="left">
            <div class="img">
                <?= $this->Html->image('Archie-Head-2.png', [
                    'alt' => 'Archie',
                    'title' => 'Archie',
                    'class' => 'img-fluid'
                ]) ?>
            </div>
            <h4 class="title_3">Let's build something great together!</h4>
        </div>

        <div class="right">
            <?= $this->Html->link(
                'Let\'s start a project <i class="flaticon-login"></i>',
                ['controller' => 'Estimates', 'action' => 'index'],
                [
                    'class' => 'theme-btn sm',
                    'escape' => false
                ]
            ) ?>
        </div>
    </div>
</div>