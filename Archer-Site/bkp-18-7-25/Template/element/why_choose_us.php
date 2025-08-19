<div class="container">
    <div class="row gy-5">
        <div class="col-lg-6">
            <div class="img_block_with_batch">
                <span class="batch">
                    <?= $this->Html->image('trusted-icon.png', [
                        'alt' => 'Trusted by ' . HAPPY_CUSTOMERS . '+ happy customers',
                        'title' => 'Trusted by ' . HAPPY_CUSTOMERS . '+ happy customers'
                    ]) ?>
                    Trusted by <?= HAPPY_CUSTOMERS ?>+ happy customers
                </span>
                <?= $this->Html->image('why-choose-us.png', [
                    'class' => 'block_img img-fluid',
                    'alt' => 'Local experts, with over 40 years of family run',
                    'title' => 'Local experts, with over 40 years of family run'
                ]) ?>
            </div>
        </div>

        <div class="col-lg-6">
            <h6 class="subheader">why choose us</h6>
            <h2 class="title_2 section_title">Local experts, with over <?php echo YEARS_OF_EXPERIENCE; ?> years of family run</h2>

            <p class="lead mt-3 mb-0">With a dedication to excellence, we go the extra mile to provide unparalleled
                service, ensuring your satisfaction at every step of the way. Let us be your trusted partner in transforming
                your home into the haven you've always dreamed of.</p>

            <div class="row gy-4 mt-4">
                <div class="col-sm-6">
                    <div class="item">
                        <div class="icon">
                            <?= $this->Html->image('local-service.svg', [
                                'alt' => 'Local service',
                                'title' => 'Local service'
                            ]) ?>
                        </div>
                        <div class="detail">
                            <h4>Local service </h4>
                            <p><?php echo YEARS_OF_EXPERIENCE; ?>+ Years of experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="item">
                        <div class="icon">
                            <?= $this->Html->image('premium-material.svg', [
                                'alt' => 'Premium materials',
                                'title' => 'Premium materials'
                            ]) ?>
                        </div>
                        <div class="detail">
                            <h4>Premium materials</h4>
                            <p>Award Winning Services</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="item">
                        <div class="icon">
                            <?= $this->Html->image('skilled-workers.svg', [
                                'alt' => 'Skilled workers',
                                'title' => 'Skilled workers'
                            ]) ?>
                        </div>
                        <div class="detail">
                            <h4>Skilled workers</h4>
                            <p>Experienced & trained</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="item">
                        <div class="icon">
                            <?= $this->Html->image('easy-finance.svg', [
                                'alt' => 'Easy Financing',
                                'title' => 'Easy Financing'
                            ]) ?>
                        </div>
                        <div class="detail">
                            <h4>Easy Financing</h4>
                            <p>Licensed & Insured</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>