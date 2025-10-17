<?php
// Set Meta Tags
$this->set('title', 'Metal Roofing | Metal Roof Installation | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Your trusted partner for premium roofing solutions.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Metal Roofing, Metal Roof Installation, Metal Roof Replacement');
$this->set('ogTitle', 'Metal Roofing | Metal Roof Installation | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Your trusted partner for premium roofing solutions.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/services/metal-roofing'); // TODO: Change to the current page URL
?>

<!-- banner-section -->
<section class="banner-section metal_roof">
    <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
        <div class="slide-item one bg-left">
            <div class="image-layer">
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 col-md-12 content-column">
                        <div class="content-box">
                            <h6>Metal Roofing</h6>
                            <h1>Modern Metal Roofs for Lasting Protection</h1>
                            <p>Metal roofs offer durable, long-lasting protection against harsh weather while enhancing your home’s
                                style and energy efficiency.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item two">
            <div class="image-layer">
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-4 content-column">
                        <div class="content-box">
                            <h6>Metal Roofing</h6>
                            <h1>Modern Metal Roofs for Lasting Protection</h1>
                            <p>Metal roofs offer durable, long-lasting protection against harsh weather while enhancing your home’s
                                style and energy efficiency.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item three bg-left">
            <div class="image-layer"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 col-md-12 content-column">
                        <div class="content-box">
                            <h6>Metal Roofing</h6>
                            <h1>Modern Metal Roofs for Lasting Protection</h1>
                            <p>Metal roofs offer durable, long-lasting protection against harsh weather while enhancing your home’s
                                style and energy efficiency.</p>
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

<!-- Advertisement  -->
<section>
    <div class="container">
        <?= $this->element('advertisement') ?>
    </div>
</section>
<!-- Advertisement End  -->

<!-- Start Project Section Start -->
<section class="section light get_estimate service_details" id="getFreeEstimate">
    <div class="container">
        <div class="row gx-lg-5 gy-5">
            <div class="col-xl-7 text-md-start text-center">
                <div class="roof_layer_wrap mb-5">
                    <div class="content">
                        <h3 class="title_2">Metal Roofing Solutions</h3>
                        <p>Enhance your property with sleek, durable metal roofs that stand the test of time. Engineered for
                            superior weather resistance and low maintenance, they combine strength and style. Available in various
                            colors and finishes, metal roofing adds modern appeal while improving energy efficiency.</p>
                    </div>
                    <div class="img">
                        <?= $this->Html->image('metal-roof/element-metal-roof.jpg', [
                            'class' => 'img-fluid',
                            'alt' => 'Metal Roofing Solutions',
                            'title' => 'Metal Roofing Solutions'
                        ]) ?>
                    </div>
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

                <h3 class="title_3 mt-4 mb-2">Features & Benefits</h3>
                <p class="mb-5">For those who value both aesthetics and durability, the TimberSteel™ premium metal roofing
                    system was designed with you in mind.</p>

                <div class="box-style-two mt-4">
                    <div class="row gy-4">
                        <div class="col-xl-4 col-lg-4 col-sm-6">
                            <div class="single-item">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <div class="icon-box">
                                            <div class="line" style="background-image: url(<?= $this->Url->image('line-2.png') ?>);"></div>
                                            <?= $this->Html->image('metal-roof/benifits/beauty.svg', [
                                                'alt' => 'Beauty',
                                                'title' => 'Beauty'
                                            ]) ?>
                                        </div>
                                        <h3>Beauty</h3>
                                    </div>
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                                            <?= $this->Html->image('metal-roof/benifits/white/beauty.svg', [
                                                'alt' => 'Beauty',
                                                'title' => 'Beauty'
                                            ]) ?>
                                        </div>
                                        <p>Available in a range of colors to complement your home.</p>
                                        <h3>Beauty</h3>
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
                                            <?= $this->Html->image('metal-roof/benifits/strength.svg', [
                                                'alt' => 'Strength',
                                                'title' => 'Strength'
                                            ]) ?>
                                        </div>
                                        <h3>Strength</h3>
                                    </div>
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                                            <?= $this->Html->image('metal-roof/benifits/white/strength.svg', [
                                                'alt' => 'Strength',
                                                'title' => 'Strength'
                                            ]) ?>
                                        </div>
                                        <p>Engineered to help protect your roof against the elements.</p>
                                        <h3>Strength</h3>
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
                                            <?= $this->Html->image('metal-roof/benifits/affordable.svg', [
                                                'alt' => 'Affordability',
                                                'title' => 'Affordability'
                                            ]) ?>
                                        </div>
                                        <h3>Affordability</h3>
                                    </div>
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <div class="line" style="background-image: url(<?= $this->Url->image('line-1.png') ?>);"></div>
                                            <?= $this->Html->image('metal-roof/benifits/white/affordable.svg', [
                                                'alt' => 'Affordability',
                                                'title' => 'Affordability'
                                            ]) ?>
                                        </div>
                                        <p>A tough metal roof that's not as tough on your budget. </p>
                                        <h3>Affordability</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-5">
                <?= $this->element('forms/form_free_estimate', ['formId' => '28', 'formKey' => 'metalroof39fb2b51017ead38798fb257a70221c9']) ?>
            </div>
        </div>
    </div>
</section>
<!-- Start Project Section End -->

<!-- Panels Section Start  -->
<section class="section text-center">
    <div class="auto-container">
        <div class="sec-title">
            <h6><i class="flaticon-roof"></i>Panels</h6>
            <h2>We Produce <span>Metal Panels</span></h2>
            <p class="section_desc">Looking for metal roofing built to last? We produce our own metal panels in-house for
                residential homes, offering durable and beautiful options for roofing, all while saving you money. Contact us
                for a free estimate and see how metal can transform your home</p>
        </div>

        <div class="youtube-embed">
            <iframe width="600" height="800" src="https://www.youtube.com/embed/m0FK1a2_JxA"
                title="Inside Archer Metal Roofing Manufacturing Facility From Factory Floor to Flawless Installation"
                frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</section>
<!-- Panels Section End  -->

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

<!-- Why Choose Us Section Start  -->
<section class="chooseus-section" style="padding-top: 350px;">
    <?= $this->element('why_choose_us') ?>
</section>
<!-- Why Choose Us Section End -->

<!-- Archie Section Start  -->
<section class="archie_section">
    <?= $this->element('archie_section') ?>
</section>
<!-- Archie Section End  -->

<!-- Types Sec Start  -->
<section class="section">
    <div class="large-container">
        <div class="sec-title text-center">
            <h6><i class="flaticon-roof"></i>Types</h6>
            <h2>Types of<span> Metal Roofing</span></h2>
            <p style="font-size: 18px; max-width: 1200px; margin-left: auto;margin-right: auto; color: var(--font);"
                class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, aperiam numquam? Architecto rem
                minus ipsam eum fugit eius recusandae soluta, hic dolor voluptatem animi, quibusdam dolores magni harum.
                Blanditiis, cupiditate.</p>
        </div>

        <div class="window_types roofing">
            <div class="row mt-4 gy-4 justify-content-center">
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="item">
                        <div class="item_inner">
                            <?= $this->Html->image('metal-roof/types/standing-seam-panels.jpg', [
                                'alt' => 'Standing Seam Panels',
                                'title' => 'Standing Seam Panels'
                            ]) ?>

                            <div class="captions">
                                <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis aspernatur dolores,
                                    facere eos omnis exercitationem nemo laudantium error? Consequatur, maiores.</p>
                                <div class="heading">
                                    <h4 class="title_4">Standing Seam Panels</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="item">
                        <div class="item_inner">
                            <?= $this->Html->image('metal-roof/types/metal-shingles.jpg', [
                                'alt' => 'Metal Shingles',
                                'title' => 'Metal Shingles'
                            ]) ?>

                            <div class="captions">
                                <p class="desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur harum ullam
                                    vitae distinctio, eos mollitia ad recusandae aliquam reprehenderit, omnis aut necessitatibus impedit
                                    pariatur veritatis numquam, autem provident cumque sed!</p>
                                <div class="heading">
                                    <h4 class="title_4">Metal Shingles</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="item">
                        <div class="item_inner">
                            <?= $this->Html->image('metal-roof/types/corrugated-metal.jpg', [
                                'alt' => 'Corrugated Metal',
                                'title' => 'Corrugated Metal'
                            ]) ?>

                            <div class="captions">
                                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam quod laboriosam,
                                    commodi, maiores minus tenetur debitis molestiae provident voluptatibus minima voluptate nobis est
                                    velit non, sed fuga illo! Vero, assumenda.</p>
                                <div class="heading">
                                    <h4 class="title_4">Corrugated Metal</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="item">
                        <div class="item_inner">
                            <?= $this->Html->image('metal-roof/types/stone-coated-steel.jpg', [
                                'alt' => 'Stone-Coated Steel',
                                'title' => 'Stone-Coated Steel'
                            ]) ?>

                            <div class="captions">
                                <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia illo repellat
                                    necessitatibus. Dolore inventore ipsum beatae. Quos odit repellendus veritatis sunt quaerat ab
                                    voluptatum, expedita quas mollitia id debitis earum.</p>
                                <div class="heading">
                                    <h4 class="title_4">Stone-Coated Steel</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Types Sec End  -->

<!-- Reviews section Start  -->
<section class="section light reviews">
    <?= $this->element('reviews') ?>
</section>
<!-- Reviews section End  -->

<!-- Brochure Section Start  -->
<section class="section brochure-section bg_secondary">
    <?= $this->element('our_brochure') ?>
</section>
<!-- Brochure Section End  -->

<!-- Project Gallery Start -->
<section class="section light completed_projects">
    <div class="container">
        <div class="sec-title text-center">
            <h6><i class="flaticon-roof"></i>Work Gallery</h6>
            <h2>Proof <span>in Every Project</span></h2>
        </div>

        <div class="projects_gallery mt-5">
            <?= $this->Html->link(
                $this->Html->image('metal-roof/gallery/archer-exteriors-metal-roof-gallery1.jpg', [
                    'alt' => 'Archer Metal Roofing Project',
                    'title' => 'Archer Metal Roofing Project',
                    'class' => 'img-fluid'
                ]),
                '/img/metal-roof/gallery/archer-exteriors-metal-roof-gallery1.jpg',
                ['class' => 'gallery-item', 'escape' => false]
            ) ?>
            <?= $this->Html->link(
                $this->Html->image('metal-roof/gallery/archer-exteriors-metal-roof-gallery2.jpg', [
                    'alt' => 'Archer Metal Roofing Project',
                    'title' => 'Archer Metal Roofing Project',
                    'class' => 'img-fluid'
                ]),
                '/img/metal-roof/gallery/archer-exteriors-metal-roof-gallery2.jpg',
                ['class' => 'gallery-item', 'escape' => false]
            ) ?>
            <?= $this->Html->link(
                $this->Html->image('metal-roof/gallery/archer-exteriors-metal-roof-gallery3.jpg', [
                    'alt' => 'Archer Metal Roofing Project',
                    'title' => 'Archer Metal Roofing Project',
                    'class' => 'img-fluid'
                ]),
                '/img/metal-roof/gallery/archer-exteriors-metal-roof-gallery3.jpg',
                ['class' => 'gallery-item', 'escape' => false]
            ) ?>
            <?= $this->Html->link(
                $this->Html->image('metal-roof/gallery/archer-exteriors-metal-roof-gallery4.jpg', [
                    'alt' => 'Archer Metal Roofing Project',
                    'title' => 'Archer Metal Roofing Project',
                    'class' => 'img-fluid'
                ]),
                '/img/metal-roof/gallery/archer-exteriors-metal-roof-gallery4.jpg',
                ['class' => 'gallery-item', 'escape' => false]
            ) ?>
            <?= $this->Html->link(
                $this->Html->image('metal-roof/gallery/archer-exteriors-metal-roof-gallery5.jpg', [
                    'alt' => 'Archer Metal Roofing Project',
                    'title' => 'Archer Metal Roofing Project',
                    'class' => 'img-fluid'
                ]),
                '/img/metal-roof/gallery/archer-exteriors-metal-roof-gallery5.jpg',
                ['class' => 'gallery-item', 'escape' => false]
            ) ?>
            <?= $this->Html->link(
                $this->Html->image('metal-roof/gallery/archer-exteriors-metal-roof-gallery6.jpg', [
                    'alt' => 'Archer Metal Roofing Project',
                    'title' => 'Archer Metal Roofing Project',
                    'class' => 'img-fluid'
                ]),
                '/img/metal-roof/gallery/archer-exteriors-metal-roof-gallery6.jpg',
                ['class' => 'gallery-item', 'escape' => false]
            ) ?>
        </div>
    </div>
    </div>
</section>
<!-- Project Gallery End -->

<!-- Activities section Start  -->
<section class="section activities">
    <?php echo $this->element('community_impact') ?>
</section>
<!-- Activities section End  -->