<?php
// Set Meta Tags
$this->set('title', 'Other Services | Fascia, Soffit, Skylight, Flashing and Trim | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Your trusted partner for premium roofing, siding, and window solutions. Fascia, Soffit, Skylight, Flashing and Trim.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Fascia, Soffit, Skylight, Flashing and Trim, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Other Services | Fascia, Soffit, Skylight, Flashing and Trim | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Your trusted partner for premium roofing, siding, and window solutions. Fascia, Soffit, Skylight, Flashing and Trim.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/services/other-services'); // TODO: Change to the current page URL
?>

<!-- banner-section -->
<section class="banner-section other_services">
    <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
        <div class="slide-item one">
            <div class="image-layer">
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column">
                        <div class="content-box">
                            <h6>Other Services</h6>
                            <h1>Fascia and Soffit Installation</h1>
                            <p>The fascia is the board along the bottom edge of your roof that holds the gutters in place.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item two bg-left">
            <div class="image-layer">
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 col-md-12 content-column">
                        <div class="content-box">
                            <h6>Other Services</h6>
                            <h1>Flashing and Trim Installation</h1>
                            <p>We install flashing and trim to protect your roof and make your home look great.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item three">
            <div class="image-layer"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column">
                        <div class="content-box">
                            <h6>Other Services</h6>
                            <h1>Skylight Installation and Repair</h1>
                            <p>Skylights are a great way to bring in natural light, reduce energy costs, and add a fresh look to
                                your home.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- banner-section end -->

<!-- Statistics Section Start  -->
<section class="funfact-section light">
    <?= $this->element('company_statistics') ?>
</section>
<!-- Statistics Section End  -->

<!-- Start Project Section Start -->
<section class="section light get_estimate" id="getFreeEstimate">
    <div class="container">
        <div class="row gx-lg-5 gy-5">
            <div class="col-lg-7">
                <div class="sec-title">
                    <h2>The Small Details <span>That Make a Big Difference</span></h2>
                </div>

                <div class="roof_badge mb-5">
                    <span class="img">
                        <?= $this->Html->image('home-white.svg', [
                            'class' => 'svg',
                            'alt' => 'Executing 400+ jobs every week — that\'s our strength.'
                        ]) ?>
                    </span>
                    <div class="content">
                        <?= $this->element('jobs_strength') ?>
                    </div>
                </div>

                <h3 class="title_3 d-flex gap-2 mb-2">
                    <?= $this->Html->image('other-services/fascia-soffit.svg', [
                        'alt' => 'Fascia and Soffit Installation',
                        'title' => 'Fascia and Soffit Installation'
                    ]) ?>
                    Fascia and Soffit Installation
                </h3>

                <p>Fascia and soffit installation protects the roof structure and improves ventilation in the attic. Fascia
                    boards run along the roof edge and support gutters, while soffits cover the underside of roof overhangs.
                    Together, they enhance curb appeal and defend against moisture and pests.</p>

                <h3 class="title_3 d-flex gap-2 mt-4 mb-2">
                    <?= $this->Html->image('other-services/flashing-trim.svg', [
                        'alt' => 'Flashing and Trim Installation',
                        'title' => 'Flashing and Trim Installation'
                    ]) ?>
                    Flashing and Trim Installation
                </h3>

                <p>Flashing and trim are essential for directing water away from critical areas of a roof, such as valleys,
                    chimneys, and vents. Proper installation prevents leaks and prolongs the life of your roofing system. Trim
                    adds a finished look while providing additional protection at edges and corners.</p>

                <h3 class="title_3 d-flex gap-2 mt-4 mb-2">
                    <?= $this->Html->image('other-services/skylight.svg', [
                        'alt' => 'Skylight Installation',
                        'title' => 'Skylight Installation'
                    ]) ?>
                    Skylight Installation
                </h3>

                <p>Skylight installation involves cutting an opening in the roof and securely fitting a window unit to bring
                    natural light into your space. A properly installed skylight is sealed to prevent leaks and improve energy
                    efficiency. It enhances indoor brightness and can increase property value.</p>
            </div>

            <div class="col-lg-5">
                <?= $this->element('form_free_estimate') ?>
            </div>
        </div>
    </div>
</section>
<!-- Start Project Section End -->

<!-- Working Process Section Start  -->
<section class="section working-section text-center">
    <div class="large-container">
        <div class="sec-title light">
            <h6><i class="flaticon-roof"></i>How it’s Work</h6>
            <h2>Standard <span>Working Process</span></h2>
        </div>
        <div class="inner-content">
            <div class="row clearfix">
                <div class="col-xxl-3 col-md-6 col-sm-12 process-block">
                    <div class="process-block-item">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="count-box counted">01</span>
                                <div class="icon">
                                    <?= $this->Html->image('our-process/common icons/initial-contact.svg', [
                                        'alt' => 'Initial Consultation'
                                    ]) ?>
                                </div>
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
                                <div class="icon">
                                    <?= $this->Html->image('our-process/common icons/onsite-assessment.svg', [
                                        'alt' => 'On-Site Assessment'
                                    ]) ?>
                                </div>
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
                                <div class="icon">
                                    <?= $this->Html->image('our-process/common icons/project-execution.svg', [
                                        'alt' => 'Project Execution'
                                    ]) ?>
                                </div>
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
                                <div class="icon">
                                    <?= $this->Html->image('our-process/common icons/final-inspection-approval.svg', [
                                        'alt' => 'Final Inspection and Approval'
                                    ]) ?>
                                </div>
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

<!-- Fascia and Soffit Section Start  -->
<section class="section" style="padding-top: 255px; position: relative;">
    <div class="container">
        <div class="row flex-lg-row-reverse gx-lg-5 gy-5">
            <div class="col-lg-6 align-self-center">
                <?= $this->Html->image('other-services/archer-exteriors-fascia-soffit.jpg', [
                    'class' => 'img-fluid rad_6',
                    'alt' => 'Why Install Fascia and Soffit?',
                    'title' => 'Why Install Fascia and Soffit?'
                ]) ?>
            </div>

            <div class="col-lg-6 align-self-center">
                <div class="sec-title mb-3">
                    <h6><i class="flaticon-roof"></i>Fascia and Soffit</h6>
                    <h2>Why Install <span>Fascia and Soffit?</span></h2>
                </div>

                <ul class="check_list mt-3">
                    <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?><span><b>Protect Your Home:</b> Shield your roof and attic from water, pests, and debris with properly installed fascia and soffits.</span></li>
                    <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?><span><b>Boost Ventilation:</b> Soffits promote airflow, minimizing moisture buildup and extending the life of your roof.</span></li>
                    <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?><span><b>Enhance Curb Appeal:</b> Clean, well-finished fascia and soffits give your home a sharp, polished look.</span></li>
                    <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?><span><b>Support Gutters:</b> Durable fascia boards provide a strong anchor for gutters, ensuring effective water drainage.</span></li>
                    <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?><span><b>Low Maintenance:</b> Modern materials like vinyl and aluminum resist rot, cracking, and peeling—making upkeep simple.</span></li>
                    <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?><span><b>Prevent Mold and Rot:</b> By keeping moisture out, they help guard your home against mold growth and structural decay.</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Fascia and Soffit Section End  -->

<!-- Flashing and Trim Section Start  -->
<section class="section light">
    <div class="container">
        <div class="row gx-lg-5 gy-5">
            <div class="col-lg-6 align-self-center">
                <?= $this->Html->image('other-services/archer-exteriors-flashing-trim.jpg', [
                    'class' => 'img-fluid rad_6',
                    'alt' => 'Benefits of Flashing and Trim',
                    'title' => 'Benefits of Flashing and Trim'
                ]) ?>
            </div>

            <div class="col-lg-6 align-self-center">
                <div class="sec-title mb-3">
                    <h6><i class="flaticon-roof"></i>Flashing and Trim</h6>
                    <h2>Benefits of <span>Flashing and Trim</span></h2>
                </div>

                <ul class="check_list mt-3">
                    <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?><span><b>Stops Leaks:</b> Flashing creates a
                            waterproof barrier that prevents water from seeping into your roof.</span></li>
                    <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?><span><b>Enhances Appearance:</b> Trim adds a clean,
                            finished look that elevates your home's curb appeal.</span></li>
                    <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?><span><b>Protects Your Roof:</b> Together, flashing
                            and trim defend against moisture, wind, and structural damage.</span></li>
                    <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?><span><b>Adds Strength:</b> They reinforce vulnerable
                            roof edges, making them more durable and secure.</span></li>
                    <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?><span><b>Reduces Repairs:</b> Proper installation
                            means fewer issues over time, saving you money on costly fixes.</span></li>
                    <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?><span><b>Extends Roof Life:</b> By blocking water and
                            debris, flashing and trim help your roof last longer.</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Flashing and Trim Section End  -->

<!-- Skylight Section Start  -->
<section class="section">
    <div class="container">
        <div class="row flex-lg-row-reverse gx-lg-5 gy-5">
            <div class="col-lg-6 align-self-center">
                <?= $this->Html->image('other-services/archer-exteriors-skylight.jpg', [
                    'class' => 'img-fluid rad_6',
                    'alt' => 'Skylight Installation',
                    'title' => 'Skylight Installation'
                ]) ?>
            </div>

            <div class="col-lg-6 align-self-center">
                <div class="sec-title mb-3">
                    <h6><i class="flaticon-roof"></i>Skylight</h6>
                    <h2>Skylight <span>Installation</span></h2>
                </div>

                <ul class="check_list mt-3">
                    <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?><span><b>Natural Light:</b> Skylights fill your home
                            with daylight, creating brighter, more welcoming spaces.</span></li>
                    <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?><span><b>Energy Efficiency:</b> Reduce your reliance
                            on artificial lighting and enjoy lower electricity bills.</span></li>
                    <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?><span><b>Increased Home Value:</b> Skylights boost
                            visual appeal and can enhance your property's resale value.</span></li>
                    <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?><span><b>Better Ventilation:</b> Venting skylights
                            improve airflow, helping to keep your indoor environment fresh.</span></li>
                    <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?><span><b>Light with Privacy:</b> Ideal for bathrooms
                            and closets, skylights and sun tunnels provide natural light without compromising privacy.</span></li>
                    <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?><span><b>Built to Last:</b> Quality skylights feature
                            durable, weather-resistant materials and strong seals for long-term performance.</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Skylight Section End  -->

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

<!-- clients-section -->
<section class="section clients-section text-center">
    <?= $this->element('our_partners') ?>
</section>
<!-- clients-section end -->

<!-- Activities section Start  -->
<section class="section light activities">
    <?= $this->element('community_impact') ?>
</section>
<!-- Activities section End  -->