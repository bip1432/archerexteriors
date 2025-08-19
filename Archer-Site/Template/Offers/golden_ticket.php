<?php
$this->set('title', 'Golden Ticket Offer | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Golden Ticket Offer');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Golden Ticket Offer, Archer Exteriors');
$this->set('ogTitle', 'Golden Ticket Offer | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Golden Ticket Offer');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/golden-ticket'); // TODO: Change to the current page URL
?>

<!-- banner-section -->
<section class="join_team_hero text-center">
    <?= $this->Html->image('golden-ticket/hero-banner-golden-ticket.jpg', [
        'class' => 'img-fluid w-100 d-none d-sm-block',
        'alt' => 'Archer Exteriors Golden Ticket Offer',
        'title' => 'Archer Exteriors Golden Ticket Offer'
    ]) ?>
    <?= $this->Html->image('golden-ticket/golden-ticket-banner.png', [
        'class' => 'img-fluid d-sm-none',
        'alt' => 'Archer Exteriors Golden Ticket Offer',
        'title' => 'Archer Exteriors Golden Ticket Offer'
    ]) ?>
</section>
<!-- banner-section end -->

<!-- Advertisement  -->
<section>
  <div class="container">
    <?= $this->element('advertisement') ?>
  </div>
</section>



<!-- Start Project Section Start -->
<section class="section light service_details" style="padding-bottom: 255px; position: relative;">
    <div class="container">
        <div class="row gx-lg-5 gy-5">
            <div class="col-xl-7 text-md-start text-center">
                <div class="sec-title mb-4">
                    <h2>Snag Your Golden Ticket <span>– Save Big on Home Upgrades!</span></h2>
                </div>

                <p class="mb-4">The secret’s out — our Golden Ticket promotion is here and the savings are too good to miss.
                    For a limited time, you can lock in major discounts on roofing, siding, windows, and doors with Archer
                    Exteriors. </p>

                <p>Whether you’re fixing a worn-out roof, giving your home a fresh new look, or boosting your energy savings
                    with new windows — now’s the perfect time to get it done. </p>
                <p class="mt-4">Hurry! Golden Ticket savings are only available for new estimates during this special
                    promotion. When it’s
                    gone, it’s gone!</p>


                <ul class="check_list my-4">
                    <li><?= $this->Html->image('check.svg', [
                            'alt' => 'Check',
                            'width' => '20'
                        ]) ?> <b>25% OFF in Roofing</b></li>
                    <li><?= $this->Html->image('check.svg', [
                            'alt' => 'Check',
                            'width' => '20'
                        ]) ?> <b>25% OFF in Siding</b></li>
                    <li><?= $this->Html->image('check.svg', [
                            'alt' => 'Check',
                            'width' => '20'
                        ]) ?> <b>$250 OFF per Window</b></li>
                    <li><?= $this->Html->image('check.svg', [
                            'alt' => 'Check',
                            'width' => '20'
                        ]) ?> <b>$250 OFF per Door</b></li>
                </ul>

                <p style="font-size: 14px; font-style: italic;">The Golden Ticket cannot be applied to previously quoted or
                    signed projects.</p>

            </div>

            <div class="col-xl-5">
                <?= $this->element('forms/form_free_estimate') ?>
            </div>
        </div>
    </div>
</section>
<!-- Start Project Section End -->


<!-- Statistics Section Start  -->
<section class="funfact-section">
    <?= $this->element('company_statistics') ?>
</section>
<!-- Statistics Section End  -->

<!-- Roofing Section Start  -->
<section class="section text-center text-lg-start" style="margin-top: -135px; padding-top: 255px;">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6 col-md-12 align-self-center">
                <?= $this->Html->image('golden-ticket/archer-exteriors-roofing-banner.jpg', [
                    'class' => 'rad_4',
                    'alt' => 'A Solid Roof Starts with a Solid Team.',
                    'title' => 'A Solid Roof Starts with a Solid Team.'
                ]) ?>
            </div>

            <div class="col-lg-6 col-md-12 align-self-center">
                <div class="sec-title mb-2">
                    <h6><i class="flaticon-roof"></i>Roofing</h6>
                    <h2>A Solid Roof <span>Starts with a Solid Team.</span></h2>
                </div>

                <p class="mb-4">With over 40 years of experience, we make your roof replacement smooth, efficient, and built to last. From selecting the perfect roof to navigating financing options, we’re with you every step of the way.</p>

                <div class="box-style-four top clearfix">
                    <div class="single-item">
                        <div class="inner-box">
                            <div class="content-box">
                                <div class="icon-box">
                                    <?= $this->Html->image('golden-ticket/icons/roof/initial-contact.svg', [
                                        'alt' => 'Initial Contact',
                                        'title' => 'Initial Contact'
                                    ]) ?>
                                </div>
                                <h4>Initial Contact</h4>
                            </div>
                            <div class="overlay-box">
                                <div class="icon-box">
                                    <?= $this->Html->image('golden-ticket/icons/roof/initial-contact.svg', [
                                        'alt' => 'Initial Contact',
                                        'title' => 'Initial Contact'
                                    ]) ?>
                                </div>
                                <p>When you reach out to Archer Exteriors, we promptly schedule an in-home consultation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="inner-box">
                            <div class="content-box">
                                <div class="icon-box">
                                    <?= $this->Html->image('golden-ticket/icons/roof/visualize-roof.svg', [
                                        'alt' => 'Visualize New Roof',
                                        'title' => 'Visualize New Roof'
                                    ]) ?>
                                </div>
                                <h4>Visualize New Roof</h4>
                            </div>
                            <div class="overlay-box">
                                <div class="icon-box">
                                    <?= $this->Html->image('golden-ticket/icons/roof/visualize-roof.svg', [
                                        'alt' => 'Visualize New Roof',
                                        'title' => 'Visualize New Roof'
                                    ]) ?>
                                </div>
                                <p>Utilizing our specialized program, you can visualize exactly how your new roof will look.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-style-four bottom clearfix">
                    <div class="single-item">
                        <div class="inner-box">
                            <div class="content-box">
                                <div class="icon-box">
                                    <?= $this->Html->image('golden-ticket/icons/roof/new-roof-1day.svg', [
                                        'alt' => 'New Roof in One Day',
                                        'title' => 'New Roof in One Day'
                                    ]) ?>
                                </div>
                                <h4>New Roof in One Day</h4>
                            </div>
                            <div class="overlay-box">
                                <div class="icon-box">
                                    <?= $this->Html->image('golden-ticket/icons/roof/new-roof-1day.svg', [
                                        'alt' => 'New Roof in One Day',
                                        'title' => 'New Roof in One Day'
                                    ]) ?>
                                </div>
                                <p>At Archer Exteriors, we get the job done fast—most roofs are completed in just one day, minimizing
                                    disruption to your routine.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="inner-box">
                            <div class="content-box">
                                <div class="icon-box">
                                    <?= $this->Html->image('golden-ticket/icons/roof/best-warranty.svg', [
                                        'alt' => 'Best Warranty Available',
                                        'title' => 'Best Warranty Available'
                                    ]) ?>
                                </div>
                                <h4>Best Warranty Available</h4>
                            </div>
                            <div class="overlay-box">
                                <div class="icon-box">
                                    <?= $this->Html->image('golden-ticket/icons/roof/best-warranty.svg', [
                                        'alt' => 'Best Warranty Available',
                                        'title' => 'Best Warranty Available'
                                    ]) ?>
                                </div>
                                <p>We stand behind the quality of our work with one of the best warranties available in the industry.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Roofing Section End  -->

<!-- Siding Section Start  -->
<section class="section light text-center text-lg-start">
    <div class="container">
        <div class="row gx-lg-5 gy-5 flex-column-reverse flex-lg-row">
            <div class="col-lg-6 col-md-12 align-self-center">
                <div class="sec-title mb-3">
                    <h6><i class="flaticon-roof"></i>Siding</h6>
                    <h2>Built to <span>Protect and Impress</span></h2>
                </div>

                <p>Siding is your home's first impression-make it last. Our durable, insulated options come in a wide range of
                    styles and colors, built to withstand the elements while enhancing curb appeal.</p>

                <h4 class="title_3 mt-4 mb-2">Lasting Beauty, Unmatched Durability.</h4>
                <p>A stone facade isn't just an upgrade-it's a
                    statement of strength and style. With natural
                    elegance and unmatched durability, stone brings
                    depth, texture, and timeless sophistication to any
                    home.</p>

                <h4 class="title_3 mt-4 mb-3">Types of Siding</h4>

                <div class="d-flex gap-3 flex-wrap justify-content-center justify-content-lg-start">
                    <div class="text-center">
                        <?= $this->Html->image('siding-service/siding-type/dutch-lap-vinyl-siding.jpg', [
                            'style' => 'width: 100px; height: 100px; border-radius: 50%; margin-bottom: 5px;',
                            'alt' => 'Vinyl siding',
                            'title' => 'Vinyl siding'
                        ]) ?>
                        <h6>Vinyl</h6>
                    </div>
                    <div class="text-center">
                        <?= $this->Html->image('siding-service/siding-type/hardie-plank-siding.jpg', [
                            'style' => 'width: 100px; height: 100px; border-radius: 50%; margin-bottom: 5px;',
                            'alt' => 'Hardie plank siding',
                            'title' => 'Hardie plank siding'
                        ]) ?>
                        <h6>Hardie plank</h6>
                    </div>
                    <div class="text-center">
                        <?= $this->Html->image('siding-service/siding-type/board-and-batten-siding.jpg', [
                            'style' => 'width: 100px; height: 100px; border-radius: 50%; margin-bottom: 5px;',
                            'alt' => 'Board and batten siding',
                            'title' => 'Board and batten siding'
                        ]) ?>
                        <h6>Board and batten</h6>
                    </div>
                    <div class="text-center">
                        <?= $this->Html->image('siding-service/siding-type/cedar-shake-grey.jpg', [
                            'style' => 'width: 100px; height: 100px; border-radius: 50%; margin-bottom: 5px;',
                            'alt' => 'Cedar siding',
                            'title' => 'Cedar siding'
                        ]) ?>
                        <h6>Cedar</h6>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-md-12 align-self-center">
                <?= $this->Html->image('golden-ticket/archer-exteriors-siding-banner.jpg', [
                    'class' => 'rad_4',
                    'alt' => 'Built to Protect and Impress',
                    'title' => 'Built to Protect and Impress'
                ]) ?>
            </div>
        </div>
    </div>
</section>
<!-- Siding Section End  -->

<!-- Archie Section Start  -->
<section class="archie_section">
    <?= $this->element('archie_section') ?>
</section>
<!-- Archie Section End  -->

<!-- Windows Section Start  -->
<section class="section light text-center text-lg-start">
    <div class="container">
        <div class="row gx-lg-5 gy-5">
            <div class="col-lg-6 col-md-12 align-self-center">
                <?= $this->Html->image('golden-ticket/archer-exteriors-siding-banner.jpg', [
                    'class' => 'rad_4',
                    'alt' => 'Energy-Efficient Windows. Stunning Results.',
                    'title' => 'Energy-Efficient Windows. Stunning Results.'
                ]) ?>
            </div>
            <div class="col-lg-6 col-md-12 align-self-center">
                <div class="sec-title mb-3">
                    <h6><i class="flaticon-roof"></i>Windows</h6>
                    <h2>Energy-Efficient Windows. <span>Stunning Results.</span></h2>
                </div>

                <p>Upgrade your view with Archer Exteriors. We offer a wide range of window options to match your style and
                    needs. From classic double-hung to sleek casement and energy-efficient Energy Star windows, find the perfect
                    fit for your home.</p>

                <?= $this->Html->image('window-service/partners/partner-logo-mi.png', [
                    'class' => 'img-fluid mt-5 mb-3',
                    'alt' => 'MI Windows And Doors',
                    'title' => 'MI Windows And Doors'
                ]) ?>
                <p>Hurricane impact windows are made of highly reinforced glass that can withstand hurricane-force winds
                    without shattering like standard glass might.</p>
            </div>
        </div>
    </div>
</section>
<!-- Windows Section End  -->

<!-- Doors Section Start  -->
<section class="section text-center text-lg-start">
    <div class="container">
        <div class="row gx-lg-5 gy-5 flex-column-reverse flex-lg-row">
            <div class="col-lg-6 col-md-12 align-self-center">
                <div class="sec-title mb-3">
                    <h6><i class="flaticon-roof"></i>Doors</h6>
                    <h2>Doors That Welcome <span>You with Style & Security.</span></h2>
                </div>

                <p>Your front door is more than just an entrywayit sets the tone for your home. Whether you're looking for
                    classic elegance, modern design, or enhanced security, we offer a variety of high-quality entry doors to
                    suit your style and needs.</p>
                <p class="mt-4">Elevate your home with high-quality entry doors designed for strength, security,
                    and energy efficiency. Crafted with sophistication and style, our selection offers
                    the perfect blend of durability and elegance to match your needs.</p>

                <h4 class="title_3 mt-4 mb-3">Partnering with the Best</h4>
                <?= $this->Html->image('window-service/partners/partner-logo-pro-via.png', [
                    'class' => 'img-fluid',
                    'alt' => 'ProVia',
                    'title' => 'ProVia',
                    'width' => '200'
                ]) ?>

            </div>
            <div class="col-lg-6 col-md-12 align-self-center">
                <?= $this->Html->image('golden-ticket/archer-exteriors-door-banner.jpg', [
                    'class' => 'rad_4',
                    'alt' => 'Doors That Welcome You with Style & Security.',
                    'title' => 'Doors That Welcome You with Style & Security.'
                ]) ?>
            </div>
        </div>
    </div>
</section>