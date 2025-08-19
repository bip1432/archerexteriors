<?php
// Set Meta Tags
$this->set('title', 'Elmer Little League | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Elmer Little League');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Elmer Little League, Archer Exteriors');
$this->set('ogTitle', 'Elmer Little League | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Elmer Little League');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/elmer-little-league');
?>

<!-- Hero-section -->
<section class="page_hero little_league">
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
                <h4 class="title_3 mb-2">Cheering on Elmer Little League</h4>
                <p>As a proud sponsor of Elmer Little League, Archer Exteriors was thrilled to take part in their Opening Day celebration—a day full of energy, smiles, and community spirit. We set up a booth packed with free goodies for the kids, including custom water bottles, sweet treats, and other fun giveaways that kept spirits high throughout the event.</p>
                <p class="mt-3">In addition to a special raffle giveaway, we proudly showed our support not just for youth sports, but also for the surrounding schools and families that make our community strong. Events like these remind us why we do what we do—because building homes also means building connections.</p>
                <p class="mt-3">It was a true home run of a day, and we’re honored to keep showing up for the neighborhoods we’re proud to serve.</p>

                <h4 class="title_3 mt-4 mb-3">Our community impact initiatives</h4>
                <?= $this->Html->link('Learn More<i class="flaticon-login"></i>', ['controller' => 'Communities', 'action' => 'index'], ['class' => 'theme-btn sm', 'escape' => false]) ?>
            </div>

            <div class="col-lg-6 col-md-12 image-column">
                <?= $this->Html->image('community-impact/elmer-little-league/elmer-little-league-banner1.jpg', [
                    'class' => 'rad_4',
                    'alt' => 'Cheering on Elmer Little League',
                    'title' => 'Cheering on Elmer Little League'
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