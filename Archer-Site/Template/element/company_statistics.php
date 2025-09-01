<div class="container">
  <div class="inner-container clearfix wow fadeInLeft animated animated" data-wow-delay="00ms"
    data-wow-duration="1500ms">
    <div class="counter-block-item">
      <div class="inner-box">
        <div class="shap-box"></div>
        <div class="icon-box">
          <?= $this->Html->image('calendar-white.svg', [
            'class' => 'svg',
            'alt' => 'Years of experience',
            'title' => 'Years of experience'
          ]) ?>
        </div>
        <span class="number"><span class="counter"><?php echo YEARS_OF_EXPERIENCE; ?></span>+</span>
        <h3>Years of experience</h3>
      </div>
    </div>
    <div class="counter-block-item">
      <div class="inner-box">
        <div class="shap-box"></div>
        <div class="icon-box">
          <?= $this->Html->image('states-primary.svg', [
            'class' => 'svg',
            'alt' => 'States served',
            'title' => 'States served'
          ]) ?>
        </div>
        <span class="number"><span class="counter"><?php echo STATES_SERVED; ?></span>+</span>
        <h3>States served</h3>
      </div>
    </div>
    <div class="counter-block-item">
      <div class="inner-box">
        <div class="shap-box"></div>
        <div class="icon-box">
          <?= $this->Html->image('home-primary.svg', [
            'class' => 'svg',
            'alt' => 'Projects completed',
            'title' => 'Projects completed'
          ]) ?>
        </div>
        <span class="number"><span class="counter"><?php echo PROJECTS_COMPLETED; ?></span>M+</span>
        <h3>Projects completed</h3>
      </div>
    </div>
    <div class="counter-block-item">
      <div class="inner-box">
        <div class="shap-box"></div>
        <div class="icon-box">
          <?= $this->Html->image('costumer-white.svg', [
            'class' => 'svg',
            'alt' => 'Clients who love us',
            'title' => 'Clients who love us'
          ]) ?>
        </div>
        <span class="number"><span class="counter"><?php echo CLIENTS_LOVE_US; ?></span>k+</span>
        <h3>Clients who love us</h3>
      </div>
    </div>
  </div>
</div>