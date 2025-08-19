<?php
// Set Meta Tags
$this->set('title', 'Phillies Tickets | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Phillies Tickets');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Phillies Tickets, Archer Exteriors');
$this->set('ogTitle', 'Phillies Tickets | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Phillies Tickets');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/phillies-tickets');
?>

<!-- Hero-section -->
<section class="page_hero phillies_ticket">
    <div class="auto-container">
        <div class="contents text-center">
            <?= $this->Html->image('phillies-ticket/banner-text-lets-go-phillis.png', [
                'class' => 'img-fluid',
                'alt' => 'Catch a Game With Archer',
                'title' => 'Catch a Game With Archer'
            ]) ?>
        </div>
    </div>
</section>
<!-- Hero-section end -->

<!-- Archie Section Start  -->
<section class="archie_section with_phillies" style="background: #fff;">
    <div class="auto-container" style="max-width: 850px;">
        <div class="inner_row">
            <div class="left">
                <div class="img">
                    <?= $this->Html->image('Archie-Head-2.png', [
                        'alt' => 'Archie',
                        'title' => 'Archie'
                    ]) ?>
                </div>
            </div>

            <div class="right">
                <h2 style="font-size: 26px;line-height: 1.4;">Archer Exteriors is giving away <br> <span
                        style="color: #E81828;">4-pack of Phillies tickets every month</span> <br> - because baseball is better
                    with your crew.</h2>
            </div>
        </div>
    </div>
</section>
<!-- Archie Section End  -->

<!-- Phillies Tickets Section Start  -->
<section class="section light">
    <div class="container">
        <div class="row gx-lg-5 gy-5 flex-column-reverse flex-lg-row">
            <div class="col-lg-6 col-md-12 align-self-center">
                <h2 class="title_2 mb-3">Win 4 tickets to see the <br> <span style="color: #E81828;">Philadelphia
                        Phillies</span></h2>
                <p>Archer Exteriors is giving away Philadelphia Phillies tickets EVERY MONTH through September, and it starts
                    NOW!</p>

                <h4 class="title_3 mt-4 mb-3">TO ENTER THIS MONTH'S GIVEAWAY:</h4>

                <ul class="check_list">
                    <li><?= $this->Html->image('phillies-ticket/facebook.svg', [
                            'alt' => 'Follow our Facebook page',
                            'title' => 'Follow our Facebook page',
                            'width' => '24'
                        ]) ?>Follow our Facebook page</li>
                    <li><?= $this->Html->image('phillies-ticket/share.svg', [
                            'alt' => 'Share our pinned giveaway post',
                            'title' => 'Share our pinned giveaway post',
                            'width' => '20'
                        ]) ?>Share our pinned giveaway post (make sure it’s set to
                        “Public” so we can verify!)</li>
                    <li><?= $this->Html->image('phillies-ticket/tag.svg', [
                            'alt' => 'Tag three friends in the comments',
                            'title' => 'Tag three friends in the comments',
                            'width' => '20'
                        ]) ?>Tag three friends in the comments</li>
                </ul>

                <p class="mt-4 mb-3">We’re celebrating baseball season all summer long — and in September, we’ll be raffling
                    away premium box seats with food to one of our Archer Exteriors customers!</p>

                <p style="color: #E81828; font-size: 14px; line-height: 1.4;">We will not respond to your comment or ask for
                    payment — the winner will be contacted and announced in a public post only. Please be aware of scammers.</p>

            </div>

            <div class="col-lg-6 col-md-12 align-self-center">
                <?= $this->Html->image('phillies-ticket/banner-phillis-ticket.jpg', [
                    'class' => 'rad_4',
                    'alt' => 'Win 4 tickets to see the Philadelphia Phillies',
                    'title' => 'Win 4 tickets to see the Philadelphia Phillies'
                ]) ?>
            </div>
        </div>
    </div>
</section>
<!-- Phillies Tickets Section End  -->

<!-- Phillies Tickets Box Section Start  -->
<section class="section bg_secondary">
    <div class="auto-container">
        <div class="box-style-three">
            <div class="single-item">
                <div class="inner-box">
                    <div class="content-box">
                        <div class="icon-box">
                            <?= $this->Html->image('phillies-ticket/ticket.svg', [
                                'alt' => '4 tickets to the Phillies',
                                'title' => '4 tickets to the Phillies'
                            ]) ?>
                        </div>
                        <h4>4 tickets to the Phillies </h4>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="inner-box">
                    <div class="content-box">
                        <div class="icon-box">
                            <?= $this->Html->image('phillies-ticket/schedule.svg', [
                                'alt' => 'June 22nd, 2025',
                                'title' => 'June 22nd, 2025'
                            ]) ?>
                        </div>
                        <h4>June 22nd, 2025</h4>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="inner-box">
                    <div class="content-box">
                        <div class="icon-box">
                            <?= $this->Html->image('phillies-ticket/two-front-seats.svg', [
                                'alt' => 'Section 120, Seats 5–8',
                                'title' => 'Section 120, Seats 5–8'
                            ]) ?>
                        </div>
                        <h4>Section 120, Seats 5–8</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Activities Slider Section Start  -->
<section class="section">
    <?= $this->element('current_activities') ?>
</section>
<!-- Activities Slider Section End  -->