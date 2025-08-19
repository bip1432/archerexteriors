<?php
// Set Meta Tags
$this->set('title', 'Trusted Home Remodeling Advisors | Archer Exteriors Sales Team');
$this->set('metaDescription', 'Archer Exteriors - Sales Team');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Trusted Home Remodeling Advisors | Archer Exteriors Sales Team');
$this->set('ogDescription', 'Archer Exteriors - Trusted Home Remodeling Advisors');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/sales-team'); // TODO: Change to the current page URL
?>

<!-- Hero-section -->
<section class="page_hero sales_team">
    <div class="auto-container">
        <div class="contents text-center">
            <h1 class="title">Sales Team</h1>
            <p class="desc">The Faces Behind Your Next Build</p>
        </div>
    </div>
</section>
<!-- Hero-section end -->

<!-- Statistics Section Start  -->
<section class="funfact-section light">
    <?= $this->element('company_statistics') ?>
</section>
<!-- Statistics Section End  -->

<!-- Teams  -->
<section class="section light">
    <div class="container">
        <div class="sec-title text-center">
            <h2>Your Neighborhood Experts <br> <span>in All Things Home Exteriors.</span></h2>
            <p class="desc mx-auto" style="max-width: 1200px;">Whether you’re planning a home exterior project, a
                residential upgrade, or a commercial development, our team is here for you. At Archer Exteriors, we’re more
                than contractors — we’re trusted educators, neighbors, and experts in protecting and enhancing what matters
                most: your home. Connect with us for honest advice, personalized support, and a partner you can count on every
                step of the way.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-6 col-sm-12 salesman_profile" style="margin-top: 120px;">
                <div class="salesman_profile_item">
                    <div class="inner-box">
                        <div class="img_box">
                            <div class="img">
                                <?= $this->Html->image('salesmans/erick.png', [
                                    'alt' => 'Erick Perez',
                                    'title' => 'Erick Perez'
                                ]) ?>
                            </div>
                        </div>
                        <div class="contents">
                            <div class="pattern-layer"></div>

                            <h4 class="name">Erick Perez</h4>
                            <h6 class="designation">Home Exterior Specialist</h6>
                            <h6 class="serving"><i class="fi fi-rr-hand-back-point-right"></i> Serving South Jersey</h6>
                            <p class="desc">I treat every home like it's my own— because that's what you deserve.</p>
                        </div>

                        <div class="mt-auto">
                            <?= $this->Html->link(
                                'View Profile<i class="flaticon-login"></i>',
                                ['controller' => 'Teams', 'action' => 'eric'],
                                ['class' => 'theme-btn sm', 'escape' => false]
                            ) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 salesman_profile" style="margin-top: 120px;">
                <div class="salesman_profile_item">
                    <div class="inner-box">
                        <div class="img_box">
                            <div class="img">
                                <?= $this->Html->image('salesmans/dominic.png', [
                                    'alt' => 'Dominic Buonadonna',
                                    'title' => 'Dominic Buonadonna'
                                ]) ?>
                            </div>
                        </div>
                        <div class="contents">
                            <div class="pattern-layer"></div>

                            <h4 class="name">Dominic Buonadonna</h4>
                            <h6 class="designation">Home Exterior Specialist</h6>
                            <h6 class="serving"><i class="fi fi-rr-hand-back-point-right"></i> Serving South Jersey</h6>
                            <p class="desc">Educating you every step of the way — because smart choices build stronger homes.</p>
                        </div>
                        <div class="mt-auto">
                            <?= $this->Html->link(
                                'View Profile<i class="flaticon-login"></i>',
                                ['controller' => 'Teams', 'action' => 'dominic'],
                                ['class' => 'theme-btn sm', 'escape' => false]
                            ) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 salesman_profile" style="margin-top: 120px;">
                <div class="salesman_profile_item">
                    <div class="inner-box">
                        <div class="img_box">
                            <div class="img">
                                <?= $this->Html->image('salesmans/shane.png', [
                                    'alt' => 'Shane Odom',
                                    'title' => 'Shane Odom'
                                ]) ?>
                            </div>
                        </div>
                        <div class="contents">
                            <div class="pattern-layer"></div>

                            <h4 class="name">Shane Odom</h4>
                            <h6 class="designation">Home Exterior Specialist</h6>
                            <h6 class="serving"><i class="fi fi-rr-hand-back-point-right"></i> Serving South Jersey</h6>
                            <p class="desc">I believe the best projects start with honest advice and clear choices.</p>
                        </div>
                        <div class="mt-auto">
                            <?= $this->Html->link(
                                'View Profile<i class="flaticon-login"></i>',
                                ['controller' => 'Teams', 'action' => 'shane'],
                                ['class' => 'theme-btn sm', 'escape' => false]
                            ) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Teams End -->

<!-- Why Choose Us Section Start  -->
<section class="chooseus-section">
    <?= $this->element('why_choose_us') ?>
</section>
<!-- Why Choose Us Section End -->

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