<div class="image-layer"></div>
<div class="container">
  <div class="row clearfix">
    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
      <div class="about-image-block">
        <div class="image-box">
          <div class="pattern-layer" style="background-image: url(<?= $this->Url->image('shape-1.png') ?>);"></div>
          <div class="image image-1">
            <?= $this->Html->image('about/about-1.jpg', [
              'alt' => 'About Archer Exteriors',
              'class' => 'img-fluid'
            ]) ?>
          </div>
          <div class="image image-2">
            <?= $this->Html->image('about/about-2.jpg', [
              'alt' => 'Our Work',
              'class' => 'img-fluid'
            ]) ?>
          </div>
          <div class="image image-3">
            <?= $this->Html->image('about/about-badge.png', [
              'alt' => 'Quality Badge',
              'class' => 'rotate-me'
            ]) ?>
            <?= $this->Html->image('about/archie.png', [
              'alt' => 'Archie',
              'class' => 'archie'
            ]) ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
      <div class="about-content-block">
        <div class="content-box">
          <div class="sec-title">
            <h6><i class="flaticon-roof"></i>About Company</h6>
            <h2>Family-Owned.<br><span>Community-Focused. <br>Built on Trust.</span></h2>
          </div>
          <div class="text">
            <p>With over 40 years of experience, Archer Exteriors is a trusted name in home exterior services. As a family-owned company, we take pride in delivering expert craftsmanship, clear communication, and a five-star experience from start to finish. From residential upgrades to large-scale commercial projects, we treat every home like it's our own.</p>
            <p>At Archer Exteriors, we understand that your house is more than just a building; it's your home. As
              local roofers, we take immense pride in our work and are dedicated to providing our clients with the
              best possible service. With decades of expertise and skill, we ensure your project is completed right
              the first time. </p>
          </div>
          <!-- <div class="area-code">
                  <?= $this->Form->create(null, [
                    'url' => ['controller' => 'Services', 'action' => 'checkAvailability'],
                    'class' => 'check-form'
                  ]) ?>
                  <div class="form-group">
                    <?= $this->Form->text('area_code', [
                      'placeholder' => 'Enter Area Code ...',
                      'required' => true,
                      'class' => 'form-control'
                    ]) ?>
                    <?= $this->Form->button('Check Availability', ['class' => 'btn']) ?>
                  </div>
                  <?= $this->Form->end() ?>
                </div>
                <h4>or make a call to <?= $this->Html->link(
                                        COMPANY_PHONE,
                                        'tel:' . COMPANY_PHONE_TEL,
                                        ['escape' => false]
                                      ) ?></h4> -->
          <div class="btn-box clearfix">
            <?= $this->Html->link(
              'Read More<i class="flaticon-login"></i>',
              ['controller' => 'Companies', 'action' => 'aboutUs'],
              ['class' => 'theme-btn', 'escape' => false]
            ) ?>
            <?= $this->Html->link(
              '<i class="fi fi-ss-play"></i> Video About <br> Our Journey & Story',
              'https://youtu.be/_bREIin0Rwk',
              [
                'class' => 'lightbox-image video-btn',
                'data-caption' => '',
                'escape' => false
              ]
            ) ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>