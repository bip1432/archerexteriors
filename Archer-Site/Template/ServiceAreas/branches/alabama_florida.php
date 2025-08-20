<?php
$this->set('title', 'Alabama & Florida | Roofing & Siding | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Alabama & Florida');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Alabama & Florida | Roofing & Siding | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Alabama & Florida');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/service-areas/alabama-florida'); // TODO: Change to the current page URL
?>
<?php
$branch = $branchLocations[0];
$newConstructionPhone = preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2 $3', h($branch->phone));
$map_location = $branch->address . ', ' . $branch->city . ', ' . $branch->state . ' ' . $branch->zip;
?>
<!-- banner-section -->
<section class="serviceAreaDetails_hero branch">
    <div class="container h-100">
        <div class="content-box">
            <h2 class="title">
                ALABAMA & FLORIDA</h2>
        </div>
    </div>
</section>
<!-- banner-section end -->

<!-- Breadcrumb Section -->
<section class="breadcrumb_section">
    <div class="container">
        <div class="breadcrumb_wrap">
            <a class="item" href="<?= DOMAIN ?>/">Home</a>
            <a class="item" href="<?= DOMAIN ?>/service-area">Service Area</a>
            <a class="item" href="#">Alabama & Florida</a>
        </div>
    </div>
</section>
<!-- Breadcrumb Section end -->

<!-- Branch Location Details Section -->
<section class="section light">
    <div class="container">
        <div class="row gx-lg-5 gy-5">
            <div class="col-lg-7">
                <div class="sec-title">
                    <h6><i class="flaticon-roof"></i> Headquarters</h6>
                    <h2><span>ALABAMA & FLORIDA</span></h2>
                </div>

                <?= $this->Html->image('service-area/national-headquarters.jpg', [
                    'class' => 'img-fluid',
                    'style' => 'max-height: 300px;',
                    'alt' => 'National Headquarters',
                    'title' => 'National Headquarters'
                ]) ?>

                <div class="mt-4">
                    <h4 class="title_3 mb-1">Available Services</h4>
                    <div class="service_type d-flex gap-4 flex-wrap">
                        <div class="type_btn">
                            <?= $this->Html->image('service-area/icon-construction.png', [
                                'style' => 'position: relative; top: -2px;',
                                'width' => '24',
                                'alt' => 'New Construction',
                                'title' => 'New Construction'
                            ]) ?> <?= $this->Html->link('New Construction', ['controller' => 'Companies', 'action' => 'newConstruction'], ['class' => 'font_link', 'target' => '_blank']) ?>
                        </div>
                        <div class="type_btn">
                            <?= $this->Html->image('service-area/icon-remodelling.png', [
                                'style' => 'position: relative; top: -2px;',
                                'width' => '24',
                                'alt' => 'Remodeling',
                                'title' => 'Remodeling'
                            ]) ?> <?= $this->Html->link('Remodeling', ['controller' => 'Estimates', 'action' => 'index'], ['class' => 'font_link', 'target' => '_blank']) ?>
                        </div>
                    </div>
                    <div class="service_list_wrap mt-2">
                        <?php if (!empty($branch->service_names)): ?>
                            <?php foreach ($branch->service_names as $serviceName): ?>
                                <span class="list_item"><?= h($serviceName) ?></span>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="contact_info_box mt-4">
                    <h4 class="title_3 mb-1">Contact Information</h4>
                    <div class="item">
                        <?= $this->Html->image('service-area/map-marker.svg', [
                            'class' => 'img-fluid',
                            'width' => '20',
                            'alt' => 'Location'
                        ]) ?> <a class="location font_link" href="https://www.google.com/maps/search/?api=1&query=<?= urlencode($map_location) ?>" target="_blank"> <?= h($map_location) ?></a>
                    </div>
                    <div class="item">
                        <?= $this->Html->image('service-area/call.svg', [
                            'class' => 'img-fluid',
                            'width' => '20',
                            'alt' => 'Location'
                        ]) ?> <span><b>New Construction Call:</b> <?= $this->Html->link($newConstructionPhone, 'tel:+1' . h($branch->phone), ['class' => 'font_link']) ?></span>
                    </div>
                    <div class="item">
                        <?= $this->Html->image('service-area/call.svg', [
                            'class' => 'img-fluid',
                            'width' => '20',
                            'alt' => 'Location'
                        ]) ?> <span><b>Remodeling Call:</b> <?= $this->Html->link(COMPANY_PHONE, 'tel:' . COMPANY_PHONE_TEL, ['class' => 'font_link']) ?></span>
                    </div>
                    <!-- <div class="item">
                        <?= $this->Html->image('service-area/license.svg', [
                            'class' => 'img-fluid',
                            'width' => '20',
                            'alt' => 'Location'
                        ]) ?> NJ LIC#13VH01492600, PA LIC#PA082127, DE LIC#1998205023
                    </div> -->
                </div>
            </div>

            <div class="col-lg-5">
                <?= $this->element('forms/form_free_estimate', ['formId' => '11', 'formKey' => 'servarea76788d097d18d4fab590d7da9d1e2e5f']) ?>
            </div>
        </div>
    </div>
</section>

<!-- Map Section Start  -->
<section class="section ">
    <div class="container">
        <div class="row gy-5 text-center text-lg-start">
            <div class="col-lg-6 align-self-center">
                <!-- Map Container: Alabama & Florida Counties -->
                <div class="mapapi-app" data-map-slug="alabama-florida-counties" data-map-domain="<?= h(DOMAIN) ?>" data-mapapi-app-lazy data-height="400px"></div>
            </div>

            <div class="col-lg-6 align-self-center">
                <div class="sec-title">
                    <h2>Transform Your Home <span>With Trusted Experts</span></h2>
                </div>
                <p class="mb-4">Discover the best roofing, siding, and window replacement services in Alabama & Florida. Archer
                    Exteriors provides expert solutions tailored to your needs.</p>
                <p>At Archer Exteriors, we take pride in providing our expert services to a wide range of communities near Alabama & Florida. Whether you reside in a bustling city or a quaint town, our team is dedicated to delivering
                    top-notch services to enhance your home.</p>
            </div>

        </div>
    </div>
</section>
<!-- Map Section End  -->

<!-- Serving Areas Section Start  -->
<section class="section light">
    <?= $this->element('serving_areas_accordion', ['branchLocations' => $branchLocations]) ?>
</section>
<!-- Serving Areas Section End  -->

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

<!-- Activities section Start  -->
<section class="section activities">
    <?= $this->element('community_impact') ?>
</section>
<!-- Activities section End  -->