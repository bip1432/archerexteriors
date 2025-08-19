<?php
// Set Meta Tags
$this->set('title', 'Join Archer Exteriors | Careers');
$this->set('metaDescription', 'Archer Exteriors - Your trusted partner for premium roofing, siding, and exterior solutions.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Join Archer Exteriors | Careers');
$this->set('ogDescription', 'Archer Exteriors - Your trusted partner for premium roofing, siding, and exterior solutions.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/careers'); // TODO: Change to the current page URL
?>

<!-- banner-section -->
<section class="join_team_hero">
    <?= $this->Html->image('join-team/archer-career-hero-banner.jpg', [
        'class' => 'img-fluid',
        'alt' => 'Join Archer Exteriors',
        'title' => 'Join Archer Exteriors'
    ]) ?>
</section>
<!-- banner-section end -->


<!-- About Company Section Start  -->
<section class="about-section section">
    <?= $this->element('about_company') ?>
</section>
<!-- About Company Section End  -->

<!-- Statistics Section Start  -->
<section class="funfact-section">
    <?= $this->element('company_statistics') ?>
</section>
<!-- Statistics Section End  -->

<!-- Join With Us Section Start  -->
<section class="section light" style="margin-top: -135px; padding-top: 255px;">
    <div class="auto-container text-center">
        <div class="sec-title">
            <h6><i class="flaticon-roof"></i>Join With Us</h6>
            <h2>Why Join <span>Archer Exteriors?</span></h2>
        </div>
        <p>At Archer Exteriors, you’re not just starting a job—you’re joining a legacy. As a family-owned business with
            over 40 years of experience, we’ve built our name on trust, craftsmanship, and a deep commitment to making homes
            more beautiful—one exterior at a time. Our dedicated team is growing nationwide, but our roots remain grounded
            in the values that set us apart: integrity, teamwork, and genuine care. Here, you’ll be part of a supportive
            culture where your contributions matter and your growth is our priority. Join us and help shape the future of
            exterior remodeling with a company that treats you like family.</p>
    </div>
</section>
<!-- Join With Us Section End  -->

<!-- Benefits Section Start  -->
<section class="section text-center text-lg-start">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6 col-md-12 align-self-center">
                <?= $this->Html->image('join-team/archer-exteriors-benefits.jpg', [
                    'class' => 'rad_4',
                    'alt' => 'Benefits That Support You',
                    'title' => 'Benefits That Support You'
                ]) ?>
            </div>

            <div class="col-lg-6 col-md-12 align-self-center">
                <div class="sec-title">
                    <h6><i class="flaticon-roof"></i>Benefits</h6>
                    <h2>Benefits <span>That Support You</span></h2>
                    <p class="desc">At Archer Exteriors, we believe in taking care of our team—on and off the job. We offer a
                        comprehensive benefits package that includes health, dental, and vision insurance to keep you and your
                        family covered. Plan for your future with our 401(k) program, and enjoy a healthy work-life balance with
                        generous paid time off. Whether you’re on the roof or behind the scenes, we’re committed to supporting
                        your well-being every step of the way.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Benefits Section End  -->

<!-- Current Openings Section Start  -->
<section class="section light">
    <div class="container">
        <div class="sec-title text-center">
            <h6><i class="flaticon-roof"></i>Current Openings</h6>
            <h2>Current Openings</h2>
        </div>

        <div class="table_outer">
            <table class="table table_v1">
                <thead>
                    <tr>
                        <th style="width: 15%; min-width: 180px;">Job Title</th>
                        <th style="width: 10%; min-width: 150px;">Category</th>
                        <th style="width: 45%; min-width: 250px;">Job Description</th>
                        <th style="width: 15%; min-width: 180px;">Location</th>
                        <th style="width: 15%; min-width: 180px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php //pr($jobLists); 
                    ?>
                    <?php //pr($jobLists[0]->job_location); 
                    ?>
                    <?php foreach ($jobLists as $jobList) : ?>
                        <tr>
                            <td><?= $jobList->job_title ?></td>
                            <td><?= $jobList->job_category ?></td>
                            <td class="long"><?= $jobList->job_description ?></td>
                            <td><?= $jobList->job_location ?></td>
                            <td class="text-end"><a class="theme-btn sm" target="_blank" href="<?= $this->Url->build(['controller' => 'Careers', 'action' => 'jobs', $jobList->encrypted_id]) ?>">Apply Now</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- Current Openings Section End  -->

<!-- Activities section Start  -->
<section class="section activities">
    <?= $this->element('community_impact') ?>
</section>
<!-- Activities section End  -->