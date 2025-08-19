<?php
// Set Meta Tags
$this->set('title', 'Meals on Wheels of Salem County | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Meals on Wheels of Salem County');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Meals on Wheels of Salem County, Archer Exteriors');
$this->set('ogTitle', 'Meals on Wheels of Salem County | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Meals on Wheels of Salem County');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/salem-county-meals-on-wheels');
?>

<!-- Hero-section -->
<section class="page_hero meals_on_wheels">
    <div class="auto-container">
    </div>
</section>
<!-- Hero-section end -->


<!-- Community Events Section Start  -->
<section class="section light">
    <div class="container">
        <div class="sec-title text-center">
            <h6><i class="flaticon-roof"></i>Community Impact</h6>
            <h2>Giving Back <span>With Purpose</span></h2>
            <p class="desc"
                style="font-size: 18px; max-width: 1000px; margin-left: auto;margin-right: auto; color: var(--font);">At
                Archer Exteriors, building strong communities is just as important as building strong homes. That’s why we
                actively support local causes and organizations that make a difference.</p>
        </div>

        <div class="row gx-lg-5 gy-5 mt-2 text-center text-lg-start flex-column-reverse flex-lg-row">
            <div class="col-lg-6 col-md-12 align-self-center">
                <h4 class="title_3 mb-3">Supporting Meals on Wheels of Salem County</h4>
                <p>When Meals on Wheels of Salem County needed help honoring their incredible volunteers, we stepped in with a
                    $1,500 donation toward their appreciation dinner. These volunteers deliver more than just meals — they
                    deliver hope. We’re proud to support their mission of care and connection.</p>

                <h4 class="title_3 mt-5 mb-3">Our community impact initiatives</h4>
                <?= $this->Html->link('Learn More<i class="flaticon-login"></i>', ['controller' => 'Communities', 'action' => 'index'], ['class' => 'theme-btn sm', 'escape' => false]) ?>
            </div>

            <div class="col-lg-6 col-md-12 image-column">
                <?= $this->Html->image('community-impact/meals-on-wheels/supporting-meals-on-wheels-of-salem-county-1.jpg', [
                    'class' => 'rad_4',
                    'alt' => 'Supporting Meals on Wheels of Salem County',
                    'title' => 'Supporting Meals on Wheels of Salem County'
                ]) ?>
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

<!-- Reviews section Start  -->
<section class="section light reviews">
    <?= $this->element('reviews') ?>
</section>
<!-- Reviews section End  -->

<!-- Activities Slider Section Start  -->
<section class="section">
    <?= $this->element('current_activities') ?>
</section>
<!-- Activities Slider Section End  -->