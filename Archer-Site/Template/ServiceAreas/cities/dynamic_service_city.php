<?php
// Set dynamic meta tags for service city page
$this->set('title', h($serviceName) . ' Services in ' . h($cityName) . ', ' . h($stateName) . ' | Archer Exteriors');
$this->set('metaDescription', 'Professional ' . h($serviceName) . ' services in ' . h($cityName) . ', ' . h($stateName) . '. Local contractors providing expert installation, repair, and maintenance.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', ' . h($serviceName) . ', ' . h($cityName) . ', ' . h($countyName) . ' County, ' . h($stateName) . ', contractors');
$this->set('ogTitle', h($serviceName) . ' Services in ' . h($cityName) . ', ' . h($stateName) . ' | Archer Exteriors');
$this->set('ogDescription', 'Professional ' . h($serviceName) . ' services in ' . h($cityName) . ', ' . h($stateName) . '. Get your free estimate today!');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website');
$this->set('ogUrl', DOMAIN . $this->request->getRequestTarget());
?>

<!-- Hero Section -->
<section class="hero-section section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12">
        <div class="hero-content">
          <h1><?= h($serviceName) ?> Services in <?= h($cityName) ?>, <?= h($stateName) ?></h1>
          <p class="lead">Your trusted local <?= h($serviceName) ?> contractor in <?= h($cityName) ?> providing expert installation, repair, and maintenance services for residential and commercial properties.</p>

          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><?= $this->Html->link('Home', '/') ?></li>
              <li class="breadcrumb-item"><?= $this->Html->link('Service Areas', ['controller' => 'ServiceAreas', 'action' => 'index']) ?></li>
              <li class="breadcrumb-item"><?= $this->Html->link($stateName, ['action' => 'dynamicGeographicState', $stateSlug]) ?></li>
              <li class="breadcrumb-item"><?= $this->Html->link($serviceName . ' in ' . $stateName, ['action' => 'dynamicServiceState', $serviceSlug, $stateSlug]) ?></li>
              <li class="breadcrumb-item"><?= $this->Html->link($countyName . ' County', ['action' => 'dynamicServiceCounty', $stateSlug, $serviceSlug, $countySlug]) ?></li>
              <li class="breadcrumb-item active" aria-current="page"><?= h($cityName) ?></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Local Service Overview -->
<section class="section light">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-location"></i> Local <?= h($serviceName) ?> Services</h6>
      <h2>Expert <?= h($serviceName) ?> in <span><?= h($cityName) ?></span></h2>
    </div>

    <div class="row gy-4">
      <div class="col-lg-8">
        <div class="local-service-content">
          <h3>Professional <?= h($serviceName) ?> Services for <?= h($cityName) ?> Residents</h3>
          <p>
            Archer Exteriors is proud to serve the <?= h($cityName) ?> community with top-quality <?= h($serviceName) ?> services. Our local team understands the specific needs of <?= h($cityName) ?> homeowners and businesses, from historic properties to modern developments.
          </p>

          <p>
            Whether you're dealing with storm damage, planning a home improvement project, or need emergency repairs, our <?= h($cityName) ?> <?= h($serviceName) ?> specialists are here to help with fast, reliable service and guaranteed workmanship.
          </p>

          <div class="local-advantages mt-4">
            <h4>Why Choose Local <?= h($serviceName) ?> Contractors in <?= h($cityName) ?>?</h4>
            <div class="row gy-3">
              <div class="col-md-6">
                <div class="advantage-item">
                  <i class="flaticon-fast"></i>
                  <div>
                    <h5>Rapid Response</h5>
                    <p>Quick response times for <?= h($cityName) ?> residents</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="advantage-item">
                  <i class="flaticon-knowledge"></i>
                  <div>
                    <h5>Local Knowledge</h5>
                    <p>Familiar with <?= h($cityName) ?> building codes and climate</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="advantage-item">
                  <i class="flaticon-community"></i>
                  <div>
                    <h5>Community Focused</h5>
                    <p>Supporting the <?= h($cityName) ?> community for over 40 years</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="advantage-item">
                  <i class="flaticon-reference"></i>
                  <div>
                    <h5>Local References</h5>
                    <p>Hundreds of satisfied customers in <?= h($cityName) ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="city-service-info">
          <h4><?= h($serviceName) ?> Services in <?= h($cityName) ?></h4>
          <div class="service-highlights">
            <div class="highlight-item">
              <i class="flaticon-new"></i>
              <span>New <?= h($serviceName) ?> Installation</span>
            </div>
            <div class="highlight-item">
              <i class="flaticon-repair"></i>
              <span><?= h($serviceName) ?> Repair & Restoration</span>
            </div>
            <div class="highlight-item">
              <i class="flaticon-maintenance"></i>
              <span>Preventive Maintenance</span>
            </div>
            <div class="highlight-item">
              <i class="flaticon-emergency"></i>
              <span>Emergency <?= h($serviceName) ?> Service</span>
            </div>
            <div class="highlight-item">
              <i class="flaticon-inspection"></i>
              <span>Free <?= h($serviceName) ?> Inspections</span>
            </div>
            <div class="highlight-item">
              <i class="flaticon-warranty"></i>
              <span>Comprehensive Warranties</span>
            </div>
          </div>

          <div class="contact-info mt-4">
            <h5>Contact Our <?= h($cityName) ?> Team</h5>
            <div class="contact-item">
              <i class="flaticon-phone"></i>
              <span><?= COMPANY_PHONE ?></span>
            </div>
            <div class="contact-item">
              <i class="flaticon-location"></i>
              <span>Serving <?= h($cityName) ?>, <?= h($stateName) ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Service Details -->
<section class="section">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-tools"></i> Service Details</h6>
      <h2>Comprehensive <?= h($serviceName) ?> <span>Solutions</span></h2>
    </div>

    <div class="row gy-4">
      <div class="col-lg-6 col-md-6">
        <div class="service-detail-card">
          <div class="service-icon">
            <i class="flaticon-installation"></i>
          </div>
          <div class="service-content">
            <h4>New <?= h($serviceName) ?> Installation</h4>
            <p>Complete <?= h($serviceName) ?> installation services for new construction and replacement projects in <?= h($cityName) ?>.</p>
            <ul class="service-features">
              <li>Premium material selection</li>
              <li>Professional installation techniques</li>
              <li>Code compliance guarantee</li>
              <li>Extended warranty protection</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-6">
        <div class="service-detail-card">
          <div class="service-icon">
            <i class="flaticon-repair-tools"></i>
          </div>
          <div class="service-content">
            <h4><?= h($serviceName) ?> Repair Services</h4>
            <p>Expert <?= h($serviceName) ?> repair services to restore functionality and extend the life of your existing system.</p>
            <ul class="service-features">
              <li>Storm damage restoration</li>
              <li>Leak detection and repair</li>
              <li>Structural damage assessment</li>
              <li>Insurance claim assistance</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-6">
        <div class="service-detail-card">
          <div class="service-icon">
            <i class="flaticon-maintenance-tools"></i>
          </div>
          <div class="service-content">
            <h4>Maintenance Programs</h4>
            <p>Preventive maintenance services to keep your <?= h($serviceName) ?> in optimal condition year-round.</p>
            <ul class="service-features">
              <li>Annual inspection services</li>
              <li>Preventive cleaning and care</li>
              <li>Minor repair services</li>
              <li>Maintenance scheduling</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-6">
        <div class="service-detail-card">
          <div class="service-icon">
            <i class="flaticon-emergency-call"></i>
          </div>
          <div class="service-content">
            <h4>Emergency Services</h4>
            <p>24/7 emergency <?= h($serviceName) ?> services for urgent repairs and storm damage in <?= h($cityName) ?>.</p>
            <ul class="service-features">
              <li>Same-day emergency response</li>
              <li>Temporary damage mitigation</li>
              <li>Emergency weatherproofing</li>
              <li>Insurance documentation</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Local Expertise -->
<section class="section light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="local-expertise-content">
          <h3>Local <?= h($serviceName) ?> Expertise in <?= h($cityName) ?></h3>
          <p>
            Our <?= h($cityName) ?> team brings decades of experience working on diverse properties throughout the area. From historic homes to modern developments, we understand the unique <?= h($serviceName) ?> challenges that <?= h($cityName) ?> properties face.
          </p>

          <div class="expertise-stats">
            <div class="row gy-3">
              <div class="col-md-6">
                <div class="stat-item">
                  <div class="stat-number">40+</div>
                  <div class="stat-label">Years Serving <?= h($cityName) ?></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="stat-item">
                  <div class="stat-number">1000+</div>
                  <div class="stat-label">Projects Completed</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="stat-item">
                  <div class="stat-number">5★</div>
                  <div class="stat-label">Average Customer Rating</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="stat-item">
                  <div class="stat-number">24/7</div>
                  <div class="stat-label">Emergency Service</div>
                </div>
              </div>
            </div>
          </div>

          <div class="credentials mt-4">
            <h5>Licensed & Certified</h5>
            <p>Fully licensed, bonded, and insured for all <?= h($serviceName) ?> work in <?= h($stateName) ?>. Our team maintains current certifications and stays updated on the latest industry standards and local building codes.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <?= $this->Html->image('service-area/' . h($citySlug) . '-team.jpg', [
          'class' => 'img-fluid rounded',
          'alt' => 'Archer Exteriors Team in ' . h($cityName),
          'title' => 'Local ' . h($serviceName) . ' Contractors in ' . h($cityName),
          'style' => 'height: 400px; object-fit: cover; width: 100%;'
        ]) ?>
      </div>
    </div>
  </div>
</section>

<!-- Customer Testimonials -->
<section class="section">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-review"></i> Customer Reviews</h6>
      <h2><?= h($cityName) ?> <span>Customer Testimonials</span></h2>
    </div>

    <div class="row gy-4">
      <div class="col-lg-4">
        <div class="testimonial-card">
          <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <p>"Excellent <?= h($serviceName) ?> work in <?= h($cityName) ?>! The team was professional, punctual, and delivered exactly what they promised. Highly recommend!"</p>
          <div class="reviewer">
            <h5>John D.</h5>
            <span><?= h($cityName) ?> Resident</span>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="testimonial-card">
          <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <p>"Outstanding <?= h($serviceName) ?> service! They completed our project on time and within budget. The quality of work exceeded our expectations."</p>
          <div class="reviewer">
            <h5>Lisa M.</h5>
            <span><?= h($cityName) ?> Homeowner</span>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="testimonial-card">
          <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <p>"Fast emergency <?= h($serviceName) ?> response in <?= h($cityName) ?>! They were at our property within hours and fixed our problem professionally."</p>
          <div class="reviewer">
            <h5>Michael R.</h5>
            <span><?= h($cityName) ?> Business Owner</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="section light">
  <div class="container">
    <div class="sec-title text-center">
      <h6><i class="flaticon-question"></i> Frequently Asked Questions</h6>
      <h2><?= h($serviceName) ?> <span>FAQ</span></h2>
    </div>

    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="faq-accordion">
          <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="faq1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                  How long does a typical <?= h($serviceName) ?> project take in <?= h($cityName) ?>?
                </button>
              </h2>
              <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Project timelines vary depending on the scope and complexity of the work. Most <?= h($serviceName) ?> projects in <?= h($cityName) ?> are completed within 1-3 days, though larger or complex projects may take longer. We'll provide a detailed timeline during your consultation.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="faq2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                  Do you offer emergency <?= h($serviceName) ?> services in <?= h($cityName) ?>?
                </button>
              </h2>
              <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes! We provide 24/7 emergency <?= h($serviceName) ?> services throughout <?= h($cityName) ?>. Our emergency response team can typically reach your property within a few hours of your call to assess damage and provide temporary solutions.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="faq3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                  What warranties do you offer on <?= h($serviceName) ?> work?
                </button>
              </h2>
              <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  We offer comprehensive warranties on all <?= h($serviceName) ?> work, including both labor and materials. Warranty terms vary by service type and materials used, but typically range from 5-25 years. We'll explain all warranty details during your consultation.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="faq4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                  Are you licensed and insured in <?= h($stateName) ?>?
                </button>
              </h2>
              <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Absolutely! Archer Exteriors is fully licensed, bonded, and insured for all <?= h($serviceName) ?> work throughout <?= h($stateName) ?>. We maintain current certifications and carry comprehensive liability insurance for your protection.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="section" style="background: var(--secondary);">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <div class="cta-content">
          <h3 class="text-white">Ready for Professional <?= h($serviceName) ?> Services in <?= h($cityName) ?>?</h3>
          <p class="text-white">Contact our local <?= h($cityName) ?> team today for your free estimate and consultation. We're here to help with all your <?= h($serviceName) ?> needs!</p>
        </div>
      </div>
      <div class="col-lg-4 text-end">
        <div class="cta-buttons">
          <?= $this->Html->link('Get Free Estimate', ['controller' => 'Estimates', 'action' => 'index'], ['class' => 'theme-btn']) ?>
          <p class="text-white mt-2"><i class="fa fa-phone"></i> <?= COMPANY_PHONE ?></p>
        </div>
      </div>
    </div>
  </div>
</section>