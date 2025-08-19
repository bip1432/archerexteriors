<div class="container">
    <div class="sec-title text-center">
        <h6><i class="flaticon-roof"></i>Available Services</h6>
        <h2>Exterior Installation <span>& Replacement Services</span></h2>
        <p class="section_desc" style="font-size: 20px;">Local experts with over <?= YEARS_OF_EXPERIENCE ?>+ years of family-run experience.</p>
    </div>

    <!-- Include Service Item  -->
    <div class="service_item odd">
        <div class="service_img">
            <?= $this->Html->image('service-area/area-services/roofing.jpg', [
                'alt' => 'Roof Replacement in ' . $stateName,
                'title' => 'Roof Replacement in ' . $stateName
            ]) ?>
        </div>
        <div class="service_details">
            <div class="service_details_inner">
                <h2 class="title"><?= $this->Html->link('Roof Replacement in ' . $stateName, ['action' => 'dynamicServiceState', 'roofing', $stateSlug], ['class' => 'link']) ?></h2>

                <p>Looking for reliable roof replacement in New Jersey? Our expert team provides high-quality roofing solutions to protect your home and enhance curb appeal. We work with durable materials and skilled craftsmanship to ensure long-lasting results. Whether your roof is damaged, aged, or simply in need of an upgrade, we deliver professional service tailored to your needs. Trust us to keep your home safe, energy-efficient, and beautiful year-round.</p>
            </div>
        </div>
    </div>

    <!-- Include Service Item Reverse -->
    <div class="service_item even">
        <div class="service_img">
            <?= $this->Html->image('service-area/area-services/siding.jpg', [
                'alt' => 'Siding Replacement in ' . $stateName,
                'title' => 'Siding Replacement in ' . $stateName
            ]) ?>
        </div>
        <div class="service_details">
            <div class="service_details_inner">
                <h2 class="title"><?= $this->Html->link('Siding Replacement in ' . $stateName, ['action' => 'dynamicServiceState', 'siding', $stateSlug], ['class' => 'link']) ?></h2>

                <p>Upgrade your home’s exterior with professional siding replacement in New Jersey. Our team installs durable, weather-resistant siding that not only protects your property but also boosts curb appeal. We offer a wide range of styles and colors to match your home’s design. With expert craftsmanship and quality materials, we ensure lasting beauty and performance. Transform your home with siding that’s built to stand up to New Jersey’s climate.</p>
            </div>
        </div>
    </div>

    <!-- Include Service Item  -->
    <div class="service_item odd">
        <div class="service_img">
            <?= $this->Html->image('service-area/area-services/windows.jpg', [
                'alt' => 'Window Replacement in ' . $stateName,
                'title' => 'Window Replacement in ' . $stateName
            ]) ?>
        </div>
        <div class="service_details">
            <div class="service_details_inner">
                <h2 class="title"><?= $this->Html->link('Window Replacement in ' . $stateName, ['action' => 'dynamicServiceState', 'window', $stateSlug], ['class' => 'link']) ?></h2>

                <p>Enhance your home’s comfort and efficiency with professional window replacement in New Jersey. Our high-quality windows improve insulation, reduce energy costs, and add lasting style to your property. From modern designs to classic styles, we offer options to fit every home. With expert installation and durable materials, we ensure a perfect fit and long-term performance. Trust us to brighten your home with windows that combine beauty, strength, and energy savings.</p>
            </div>
        </div>
    </div>

    <!-- Include Service Item Reverse -->
    <div class="service_item even">
        <div class="service_img">
            <?= $this->Html->image('service-area/area-services/doors.jpg', [
                'alt' => 'Door Replacement Services ' . $stateName,
                'title' => 'Door Replacement Services ' . $stateName
            ]) ?>
        </div>
        <div class="service_details">
            <div class="service_details_inner">
                <h2 class="title"><?= $this->Html->link('Door Replacement Services ' . $stateName, ['action' => 'dynamicServiceState', 'door', $stateSlug], ['class' => 'link']) ?></h2>

                <p>Upgrade your home’s security and style with our professional door replacement services in New Jersey. We install high-quality entry, patio, and interior doors designed for durability, energy efficiency, and curb appeal. Our wide selection of designs and finishes ensures the perfect match for your home. With expert installation and attention to detail, we provide doors that enhance both function and appearance. Trust us for reliable, long-lasting door replacement solutions.</p>
            </div>
        </div>
    </div>

    <!-- Include Service Item  -->
    <div class="service_item odd">
        <div class="service_img">
            <?= $this->Html->image('service-area/area-services/gutters.jpg', [
                'alt' => 'Gutter Replacement Services ' . $stateName,
                'title' => 'Gutter Replacement Services ' . $stateName
            ]) ?>
        </div>
        <div class="service_details">
            <div class="service_details_inner">
                <h2 class="title"><?= $this->Html->link('Gutter Replacement Services ' . $stateName, ['action' => 'dynamicServiceState', 'gutter', $stateSlug], ['class' => 'link']) ?></h2>

                <p>Protect your home from water damage with our expert gutter replacement services in New Jersey. We install durable, high-performing gutters that ensure proper drainage and safeguard your roof, siding, and foundation. Available in various styles and materials, our gutters are built to handle New Jersey’s weather conditions. With professional installation and quality craftsmanship, we provide long-lasting solutions that keep your home safe and looking great.</p>
            </div>
        </div>
    </div>

</div>