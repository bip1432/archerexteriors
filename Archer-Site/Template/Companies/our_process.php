<?php
$this->set('title', 'Our Process | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Our Process');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Our Process | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Our Process');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/our-process'); // TODO: Change to the current page URL
?>

<!-- Hero-section -->
<section class="page_hero our_process">
    <div class="auto-container">
        <div class="contents text-center">
            <h1 class="title">Our Process</h1>
            <p class="desc">Fast quotes, clear communication, and expert <br class="d-none d-md-block">installation every step of the way.</p>
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


<!-- Start Project Section Start -->
<section class="section light get_estimate" id="getFreeEstimate">
    <div class="container">
        <div class="row gx-lg-5 gy-5">
            <div class="col-lg-7 text-md-start text-center">
                <div class="sec-title mb-2">
                    <h2><span>From Start to Finish</span></h2>
                </div>

                <p>From the moment you contact us to the final inspection of your completed project, our dedicated team
                    ensures that every step is handled with precision, transparency, and care.</p>

                <div class="roof_badge my-5">
                    <span class="img">
                        <?= $this->Html->image('roofing-service/roof-white.svg', ['class' => 'svg', 'alt' => 'roof-white']) ?>
                    </span>
                    <div class="content">
                        <?= $this->element('jobs_strength') ?>
                    </div>
                </div>

                <h3 class="title_2 mb-2">Enhancing Your Experience with Advanced Software</h3>

                <p>We utilize advanced home construction and renovation software that plays a crucial role in our project
                    planning and execution.</p>

                <div class="box-style-two for_window mt-5">
                    <div class="row gy-4">
                        <div class="col-xl-4 col-lg-4 col-sm-6">
                            <div class="single-item">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <div class="icon-box">
                                            <div class="line" style="background-image: url(<?= $this->Url->image('line-2.png') ?>);"></div>
                                            <?= $this->Html->image('our-process/detailed-project.svg', ['alt' => 'Detailed Project Planning', 'title' => 'Detailed Project Planning']) ?>
                                        </div>
                                        <h3>Detailed Project Planning</h3>
                                    </div>
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                                            <?= $this->Html->image('our-process/white/detailed-project.svg', ['alt' => 'Detailed Project Planning', 'title' => 'Detailed Project Planning']) ?>
                                        </div>
                                        <p>Every step is carefully organized to keep your project on track.</p>
                                        <h3>Detailed Project Planning</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-sm-6">
                            <div class="single-item">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <div class="icon-box">
                                            <div class="line" style="background-image: url(<?= $this->Url->image('line-2.png') ?>);"></div>
                                            <?= $this->Html->image('our-process/accurate-estimate.svg', ['alt' => 'Accurate Estimates and Clear Communication', 'title' => 'Accurate Estimates and Clear Communication']) ?>
                                        </div>
                                        <h3>Accurate Estimates and Clear Communication</h3>
                                    </div>
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                                            <?= $this->Html->image('our-process/white/accurate-estimate.svg', ['alt' => 'Accurate Estimates and Clear Communication', 'title' => 'Accurate Estimates and Clear Communication']) ?>
                                        </div>
                                        <p>Know exactly what to expect with precise pricing and updates.</p>
                                        <h3>Accurate Estimates and Clear Communication</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-sm-6">
                            <div class="single-item">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <div class="icon-box">
                                            <div class="line" style="background-image: url(<?= $this->Url->image('line-2.png') ?>);"></div>
                                            <?= $this->Html->image('our-process/efficiency-time.svg', ['alt' => 'Efficiency and Time Savings', 'title' => 'Efficiency and Time Savings']) ?>
                                        </div>
                                        <h3>Efficiency and Time Savings</h3>
                                    </div>
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                                            <?= $this->Html->image('our-process/white/efficiency-time.svg', ['alt' => 'Efficiency and Time Savings', 'title' => 'Efficiency and Time Savings']) ?>
                                        </div>
                                        <p>We work swiftly without sacrificing quality, saving you time.</p>
                                        <h3>Efficiency and Time Savings</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <?= $this->element('forms/form_free_estimate') ?>
            </div>
        </div>
    </div>
</section>
<!-- Start Project Section End -->

<!-- Working Process Section Start  -->
<section class="section working-section text-center">
    <div class="large-container">
        <div class="sec-title light">
            <h6><i class="flaticon-roof"></i>Our Process</h6>
            <h2>From Start  <span>to Finish</span></h2>
        </div>
        <div class="inner-content">
            <div class="row clearfix">
                <div class="col-xxl-3 col-md-6 col-sm-12 process-block">
                    <div class="process-block-item">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="count-box counted">01</span>
                                <div class="icon"><i class="flaticon-consulting"></i></div>
                            </div>
                            <div class="lower-content">
                                <h3>Initial Consultation</h3>
                                <div class="pattern-layer"></div>
                                <p>Your journey with Archer Exteriors begins with a call to our experienced Customer Service
                                    Representative. During this initial consultation, we will discuss your project goals and schedule a
                                    free estimate.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6 col-sm-12 process-block">
                    <div class="process-block-item">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="count-box counted">02</span>
                                <div class="icon"><i class="flaticon-paper"></i></div>
                            </div>
                            <div class="lower-content">
                                <h3>On-Site Assessment</h3>
                                <div class="pattern-layer"></div>
                                <p>Our professionals visit your property to evaluate the project, take necessary measurements, and
                                    understand your specific needs. This detailed assessment allows us to go over product choices,
                                    colors, and more while providing an accurate estimate with an exact price while at your home. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6 col-sm-12 process-block">
                    <div class="process-block-item">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="count-box counted">03</span>
                                <div class="icon"><i class="flaticon-steel"></i></div>
                            </div>
                            <div class="lower-content">
                                <h3> Project Execution</h3>
                                <div class="pattern-layer"></div>
                                <p>Once the plan is set, our dedicated supervisor for your area oversees the entire project. From
                                    material procurement to installation, every detail is managed meticulously to ensure high-quality
                                    results.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6 col-sm-12 process-block">
                    <div class="process-block-item">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="count-box counted">04</span>
                                <div class="icon"><i class="flaticon-parcel"></i></div>
                            </div>
                            <div class="lower-content">
                                <h3>Final Inspection and Approval</h3>
                                <div class="pattern-layer"></div>
                                <p>Upon completion, we conduct a thorough inspection to ensure the work meets our high standards and
                                    your expectations. We walk you through the finished project, ensuring you are completely satisfied
                                    with the results.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Working Process Section End  -->

<!-- Reviews section Start  -->
<section class="section light reviews" style="padding-top: 255px;">
    <?= $this->element('reviews') ?>
</section>
<!-- Reviews section End  -->

<!-- Archie Section Start  -->
<section class="archie_section">
    <?= $this->element('archie_section') ?>
</section>
<!-- Archie Section End  -->

<!-- clients-section -->
<section class="section clients-section text-center">
    <?= $this->element('our_partners') ?>
</section>
<!-- clients-section end -->

<!-- Recent Project section Start  -->
<section class="section light recent_project">
    <?= $this->element('our_recent_work') ?>
</section>
<!-- Recent Project section End  -->