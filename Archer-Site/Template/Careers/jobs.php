<?php
// Set Meta Tags
$this->set('title', 'Join Archer Exteriors | Job Details');
$this->set('metaDescription', 'Archer Exteriors - Your trusted partner for premium roofing, siding, and exterior solutions.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Join Archer Exteriors | Careers');
$this->set('ogDescription', 'Archer Exteriors - Your trusted partner for premium roofing, siding, and exterior solutions.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/jobs'); // TODO: Change to the current page URL
?>

<!-- banner-section -->
<section class="join_team_hero">
  <?= $this->Html->image('join-team/archer-career-hero-banner.jpg', [
    'class' => 'img-fluid w-100',
    'alt' => 'Join Archer Exteriors',
    'title' => 'Join Archer Exteriors'
  ]) ?>
</section>
<!-- banner-section end -->

<!-- Advertisement  -->
<section>
  <div class="container">
    <?= $this->element('advertisement') ?>
  </div>
</section>



<!-- Job Details Section Start  -->
<section class="section light">
  <div class="auto-container">
    <div class="row gx-lg-5 gy-5">
      <div class="col-lg-7">
        <!-- <h2 class="title_2"><?= $jobList->job_title ?></h2>
        <h5 class="mt-3 mb-2"><?= $jobList->job_location ?></h5>
        <p><?= $jobList->job_category ?></p>

        <h4 class="title_4 mt-4 mb-2">Job Description</h4>
        <p><?= $jobList->job_description ?></p> -->


        <h2 class="title_2">Home Exteriors - <br> Sales Specialist</h2>
        <h5 class="mt-3 mb-2">Manalapan, NJ 07726</h5>
        <p>$100,000 - $250,000 a year - Full-time</p>

        <h4 class="title_3 mt-5 mb-1">Benefits</h4>
        <p style="font-size: 14px;">Pulled from the full job description</p>

        <ul class="check_list mt-4">
          <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Vision insurance</li>
          <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Dental insurance</li>
          <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Life insurance</li>
          <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> 401(k)</li>
          <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Health insurance</li>
          <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Paid time off</li>
        </ul>



        <div class="mt-5">
          <a href="<?= $this->Url->build(['controller' => 'Careers', 'action' => 'index']) ?>" target="_blank" class="theme-btn sm">View All Openings<i
              class="flaticon-login"></i></a>
        </div>
      </div>

      <div class="col-lg-5">
        <?= $this->element('forms/form_job_application', ['jobList' => $jobList]) ?>
      </div>
    </div>
  </div>
</section>
<!-- Job Details Section End  -->


<section class="section">
  <div class="auto-container">
    <h2 class="title_2 mb-4">Full job description</h2>
    <h4 class="title_4 mb-4">Join Archer Exteriors as a Home Exterior Sales Specialist – Grow with a 40-Year Industry
      Leader</h4>
    <h4 class="title_4 mb-4">Hiring Immediately | $1000 Sign-On Bonus | Career Growth Starts Here</h4>
    <h4 class="title_4 mb-4">Location: Manalapan, NJ </h4>

    <p>We’re not just in the remodeling business—we’re in the people business. Our culture is built on trust, growth,
      and a commitment to excellence. That’s why we don’t just offer a job—we offer a path. One that’s built on
      purpose, performance, and people-first values. Whether you're just starting out or looking to take your sales
      career to the next level, we’ll give you the tools, training, and support to thrive. Archer Exteriors is growing
      fast and currently operating in 22 states—offering more opportunities, more markets, and more room to build a
      future you can be proud of. We don’t just hand you a job—we set you up to win.</p>

    <h4 class="title_4 mt-5 mb-3">The Role</h4>
    <p>As a Full-Time Home Exterior Sales Specialist, you’ll master our industry-leading products and deliver dynamic,
      interactive presentations that help homeowners transform their spaces. You’ll learn communication skills,
      strategic planning, and more—foundational skills that will serve you for life.</p>

    <h4 class="title_4 mt-5 mb-3">What You'll Do:</h4>
    <ul class="check_list ps-3">
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Present top tier exterior remodeling solutions to
        homeowners</li>
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Participate in ongoing sales training, coaching, and
        mentorship</li>
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Build a rewarding career in a high-energy, supportive
        team environment</li>
    </ul>

    <h4 class="title_4 mt-5 mb-3">What You Bring:</h4>
    <ul class="check_list ps-3">
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Strong communication skills and confidence in public
        speaking</li>
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> A self-driven, goal-oriented mindset</li>
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> A love of learning, personal development, and working
        with people</li>
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> A passion for creating real impact, one home at a time
      </li>
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> High School Equivalent. Bachelor’s degree preferred, but
        not required</li>
    </ul>

    <h4 class="title_4 mt-5 mb-3">What You’ll Earn:</h4>
    <ul class="check_list ps-3">
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> $1000 Sign-On Bonus (paid in weekly installments during
        training)</li>
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Base + uncapped commission + bonuses</li>
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Company Vehicle Provided</li>
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Average Earning Potential: $100,000 - $250,000/year</li>
    </ul>

    <h4 class="title_4 mt-5 mb-3">Benefits That Work for You:</h4>
    <ul class="check_list ps-3">
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Medical, Dental, Vision Insurance and 401(k)</li>
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Performance-Based Rewards, Year-Round Training &
        Leadership Development</li>
    </ul>

    <h4 class="title_4 mt-5 mb-3">Think you're a great fit?</h4>
    <p>We'd love to hear from you! Email your resume</p>

    <p class="my-4">Job Type: Full-time</p>
    <p class="my-4">Pay: $100,000.00 - $250,000.00 per year</p>

    <p class="mt-4 mb-3">Benefits:</p>
    <ul class="check_list mt-3 ps-3">
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> 401(k)</li>
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Dental insurance</li>
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Health insurance</li>
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Life insurance</li>
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Paid time off</li>
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Vision insurance</li>
    </ul>

    <p class="mt-4 mb-3">Compensation Package:</p>
    <ul class="check_list mt-3 ps-3">
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Bonus opportunities</li>
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Commission pay</li>
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Signing bonus</li>
    </ul>

    <p class="mt-4 mb-3">Schedule:</p>
    <ul class="check_list mt-3 ps-3">
      <li><?= $this->Html->image('check.svg', ['alt' => 'Check', 'width' => '20']) ?> Monday to Friday</li>
    </ul>

    <p class="mt-4">Work Location: On the road</p>

  </div>
</section>