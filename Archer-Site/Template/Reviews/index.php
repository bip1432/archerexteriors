<?php
// Set Meta Tags
$this->set('title', 'Reviews | Roofing, siding, windows| Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Reviews');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Reviews | Roofing, siding, windows | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Reviews');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/reviews'); // TODO: Change to the current page URL
?>

<!-- Hero-section -->
<section class="page_hero reviews">
    <div class="auto-container">
        <div class="contents text-center">
            <h1 class="title">Customer Reviews</h1>
            <p class="desc">Find out why people call us "The Best Roofing and Siding Company" in New Jersey and Northwest
                Florida. We love our customers and we appreciate it when they take the time to leave us great reviews!</p>
        </div>
    </div>
</section>
<!-- Hero-section end -->

<!-- Statistics Section Start  -->
<section class="funfact-section pb-5 light">
    <?= $this->element('company_statistics') ?>
</section>
<!-- Statistics Section End  -->

<!-- Advertisement  -->
<section>
  <div class="container">
    <?= $this->element('advertisement') ?>
  </div>
</section>


<!-- Testimonial Section Start  -->
<section class="section light">
    <div class="container">
        <div class="row justify-content-center gx-lg-5 gy-5">
            <div class="col-lg-6 align-self-center">
                <?= $this->Html->image('reviews/archer-review-1.png', ['class' => 'img-fluid', 'alt' => 'Archer reviews', 'title' => 'Archer reviews']) ?>
            </div>

            <div class="col-lg-6">
                <div class="testimonial_box">
                    <div class="quote">
                        <i class="flaticon-quote"></i>
                    </div>
                    <div class="contents">
                        <p class="mb-3">We could not be happier with our new roof, trim and gutters installed by Archer! As stated
                            in our
                            review provided last year, Erick did a phenomenal job consulting with us to select a charcoal roof,
                            black trim and black gutters (very sharp look!) and quote a fair price. The estimated start date was
                            quick and spot on.</p>
                        <p class="mb-3">The installation of the new roof by you and your team was efficient and the work site very
                            organized
                            and left clean at the end of each day. The team was respectful, pleasant and very hard working. We rate
                            your technical expertise and managerial skills highly. The minor follow-up requests to you were promptly
                            and effectively addressed.</p>
                        <p class="mb-3">You are a very valuable Archer asset and one that the company should be very proud to
                            employ! We will
                            highly recommend Archer to anyone in need of a roof and other home improvements.</p>

                        <h5 class="title_4">- Luann and John Maloney</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->

<!-- Google Reviews Section Start  -->
<section class="section">
    <div class="auto-container">
        <!-- Elfsight Google Reviews | Google Reviews Main -->
        <script src="https://static.elfsight.com/platform/platform.js" async></script>
        <div class="elfsight-app-bbd25d51-fe84-4747-951b-7f94e8fc5fe7" data-elfsight-app-lazy></div>
    </div>
</section>
<!-- Google Reviews Section End  -->

<!-- Archie Section Start  -->
<section class="archie_section">
    <?= $this->element('archie_section') ?>
</section>
<!-- Archie Section End  -->

<!-- Other reviews Section Start  -->
<section class="section light">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h6><i class="flaticon-roof"></i>Other reviews</h6>
            <h2>More Reviews <span>From</span></h2>
        </div>

        <div class="other_reviews mt-5">
            <?= $this->Html->link(
                $this->Html->image('reviews/others/logo-yelp.png', [
                    'class' => 'img-fluid',
                    'alt' => 'Yelp',
                    'title' => 'Yelp'
                ]),
                'https://www.yelp.com/biz/archer-exteriors-pittsgrove?utm_campaign=www_business_share_popup&utm_medium=copy_link&utm_source=(direct)',
                ['escape' => false, 'target' => '_blank']
            ) ?>
            <?= $this->Html->link(
                $this->Html->image('reviews/others/logo-home-advisor.png', [
                    'class' => 'img-fluid',
                    'alt' => 'Home Advisor',
                    'title' => 'Home Advisor'
                ]),
                'https://www.homeadvisor.com/rated.ArcherExteriorsInc.18856060.html',
                ['escape' => false, 'target' => '_blank']
            ) ?>
            <?= $this->Html->link(
                $this->Html->image('reviews/others/logo-gaf.png', [
                    'class' => 'img-fluid',
                    'alt' => 'GAF',
                    'title' => 'GAF'
                ]),
                'https://www.gaf.com/en-us/roofing-contractors/residential/archer-exteriors-inc-1001524',
                ['escape' => false, 'target' => '_blank']
            ) ?>
            <?= $this->Html->link(
                $this->Html->image('reviews/others/logo-bbb.png', [
                    'class' => 'img-fluid',
                    'alt' => 'BBB A+ Rating',
                    'title' => 'BBB A+ Rating'
                ]),
                'https://www.bbb.org/us/nj/pittsgrove/profile/home-improvement/archer-exteriors-inc-0221-29005397',
                ['escape' => false, 'target' => '_blank']
            ) ?>
            <?= $this->Html->link(
                $this->Html->image('reviews/others/logo-angi.png', [
                    'class' => 'img-fluid',
                    'alt' => 'Angi',
                    'title' => 'Angi'
                ]),
                'https://www.angi.com/companylist/us/nj/pittsgrove/archer-exteriors-inc-reviews-1.htm?page=5&featuredReviewsLimit=18&featuredReviewsOffset=100',
                ['escape' => false, 'target' => '_blank']
            ) ?>
        </div>
    </div>
</section>
<!-- Other reviews Section End -->

<!-- Activities Slider Section Start  -->
<section class="section">
    <?= $this->element('current_activities') ?>
</section>
<!-- Activities Slider Section End  -->