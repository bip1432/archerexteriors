<?php
$this->set('title', 'Refer & Earn with Archer Exteriors | Help Friends, Get Rewarded');
$this->set('metaDescription', 'Archer Exteriors - Refer & Earn with Archer Exteriors | Help Friends, Get Rewarded');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Refer & Earn with Archer Exteriors | Help Friends, Get Rewarded');
$this->set('ogDescription', 'Archer Exteriors - Refer & Earn with Archer Exteriors | Help Friends, Get Rewarded');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/refer'); // TODO: Change to the current page URL
?>

<!-- Hero-section -->
<section class="page_hero refer">
  <div class="auto-container">
    <div class="contents text-center">
      <h1 class="title">Refer & Earn</h1>
      <p class="desc">Lorem ipsum dolor sit amet.</p>
    </div>
  </div>
</section>
<!-- Hero-section end -->

<!-- Statistics Section Start  -->
<section class="funfact-section light">
  <?= $this->element('company_statistics') ?>
</section>
<!-- Statistics Section End  -->

<!-- Refer More Earn More Section Start  -->
<section class="section light">
  <div class="container">
    <div class="row gx-lg-5 gy-5 text-center text-lg-start">
      <div class="col-lg-7">
        <?= $this->Html->image('refer/referral-program-sm-banner.png', [
          'class' => 'img-fluid mb-4',
          'alt' => 'Refer More Earn More',
          'title' => 'Refer More Earn More'
        ]) ?>

        <h4 class="title_2 mb-3">Refer More Earn More</h4>
        <p>There's no limit to how much you can earn! With every successful referral, you'll pocket up to $500.
          Whether you choose to treat yourself to something special or pay it forward to someone in need or a cause
          close to your heart, the choice is yours.</p>
        <p class="mt-3">We work incredibly hard for our customers - so we appreciate when our customers tells their
          friends about us. We want to reward you for recommending us - earn up to $500!</p>

        <div class="box_lists d-block mt-4">
          <div class="item d-inline-flex">
            <div class="icon">
              <?= $this->Html->image('refer/spread-the-word.svg', [
                'style' => 'width: 28px;',
                'alt' => 'Spread the word and start earning!',
                'title' => 'Spread the word and start earning!'
              ]) ?>
            </div>
            <div class="contents" style="background: #fff;">
              Spread the word and start earning!
            </div>
          </div>
        </div>

        <p class="mt-4">Your referral rewards are based on the total amount spent by the person you refer. Once their
          remodeling project is completed and fully paid, you'll receive a gift card valued at up to $500 based on our
          reward tier. Referral rewards apply only to new referrals and not to returning customers.</p>
      </div>

      <div class="col-lg-5">
        <div class="estimateForm_wrap refer_form">


          <form>
            <div class="row g-3">
              <div class="col-md-12">
                <h4 class="header_label">Let us connect with your referral</h4>
              </div>

              <div class="col-12">
                <input type="text" class="form-control" placeholder="Your referral name" required="">
              </div>
              <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Email" required="">
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Phone" required="">
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" placeholder="State" required="">
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" placeholder="City" required="">
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Zip" required="">
              </div>

              <div class="col-md-12 mt-4">
                <h4 class="header_label">Tell us about yourself</h4>
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Your name" required="">
              </div>

              <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Email" required="">
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Phone" required="">
              </div>

              <div class="col-12">
                <div class="checkItem">
                  <div class="custom-control custom_checkbox ">
                    <input type="checkbox" name="" id="archerCustomer" class="custom-control-input" value="">
                    <label style="font-size: 16px;" class="custom-control-label" for="archerCustomer">Check if you're
                      an Archer Customer</label>
                  </div>
                </div>
                <!-- <input type="checkbox" name="" id="archerCustomer" class="custom-control-input" value="">
                  <label class="custom-control-label" for="archerCustomer">Check if you're an Archer Customer</label> -->
              </div>

              <div class="col-12">
                <input type="text" class="form-control" placeholder="Other" required="">
              </div>
              <div class="col-12">
                <input type="text" class="form-control" placeholder="Archer representative's name" required="">
              </div>

              <div class="col-12 mt-4">
                <button type="submit" class="theme-btn sm"> Submit </button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Refer More Earn More Section End  -->

<!-- Working Process Section Start  -->
<section class="section working-section text-center">
  <div class="container">
    <div class="sec-title light">
      <h6><i class="flaticon-roof"></i>Referral Program</h6>
      <h2>How <span>It Works</span></h2>
      <p style="font-size: 18px; max-width: 1200px; margin-left: auto;margin-right: auto; color: var(--font-light);" class="desc">When you refer a friend, family member, or anyone in your network to us, and they choose to work with us, both you and your referral will reap the benefits. Not only will they receive our top-notch service and expertise, but you'll also earn up to $500 as a heartfelt thank-you from us!</p>
    </div>
    <div class="inner-content">
      <div class="row clearfix justify-content-center">
        <div class="col-xxl-4 col-md-6 col-sm-12 process-block">
          <div class="process-block-item">
            <div class="inner-box">
              <div class="icon-box">
                <span class="count-box counted">01</span>
                <div class="icon">
                  <?= $this->Html->image('refer/help-someone.svg', [
                    'alt' => 'Help Someone Get a Better Roof!',
                    'title' => 'Help Someone Get a Better Roof!'
                  ]) ?>
                </div>
              </div>
              <div class="lower-content">
                <h3>Help Someone Get a Better Roof!</h3>
                <div class="pattern-layer"></div>
                <p>Think of someone who could benefit from our outstanding services.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-md-6 col-sm-12 process-block">
          <div class="process-block-item">
            <div class="inner-box">
              <div class="icon-box">
                <span class="count-box counted">02</span>
                <div class="icon">
                  <?= $this->Html->image('refer/refer-via-form.svg', [
                    'alt' => 'Refer via Form or Call Us!',
                    'title' => 'Refer via Form or Call Us!'
                  ]) ?>
                </div>
              </div>
              <div class="lower-content">
                <h3>Refer via Form or Call Us!</h3>
                <div class="pattern-layer"></div>
                <p>Share your referral's name with us through our dedicated referral form below or by contacting our friendly team at <?= COMPANY_PHONE ?>.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-md-6 col-sm-12 process-block">
          <div class="process-block-item">
            <div class="inner-box">
              <div class="icon-box">
                <span class="count-box counted">03</span>
                <div class="icon">
                  <?= $this->Html->image('refer/relax-we-will.svg', [
                    'alt' => 'Relax, We\'ll Wow Your Referral.',
                    'title' => 'Relax, We\'ll Wow Your Referral.'
                  ]) ?>
                </div>
              </div>
              <div class="lower-content">
                <h3>Relax, We'll Wow Your Referral.</h3>
                <div class="pattern-layer"></div>
                <p>Sit back and relax as we take it from there. We'll reach out to your referral, provide them with an exceptional experience, and ensure they feel welcomed into our growing family.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Working Process Section End  -->

<!-- Rewards Section Start  -->
<section class="section text-center text-lg-start" style="padding-top: 255px; position: relative;">
  <div class="container">
    <div class="row gy-5">
      <div class="col-lg-6 col-md-12 align-self-center">
        <?= $this->Html->image('refer/refer-earn-reward-diagram.jpg', [
          'class' => 'rad_4',
          'alt' => 'Special Financing Available',
          'title' => 'Special Financing Available'
        ]) ?>
      </div>

      <div class="col-lg-6 col-md-12 align-self-center">
        <div class="sec-title">
          <h6><i class="flaticon-roof"></i>Rewards</h6>
          <h2>Archer Exteriors <br> <span>Where Trust and Rewards Meet</span></h2>
          <p class="desc">Our referral program is about building a community of satisfied
            customers who trust and rely on us. So, join our Referral Program today and help us spread the word!
            Together, we can make a difference, one referral at a time. Thank you for being a valued member of our
            extended family, and we can't wait to see who you'll bring into the fold next!</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Rewards Section End  -->

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