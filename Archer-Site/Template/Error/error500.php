<?php

/**
 * @var \App\View\AppView $this
 * @var string $message
 * @var string $url
 */

use Cake\Core\Configure;
use Cake\Error\Debugger;

$this->set('title', 'Oops! An Internal Error Has Occurred | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Your trusted partner for premium roofing, siding, and exterior solutions.');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Oops! An Internal Error Has Occurred | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Your trusted partner for premium roofing, siding, and exterior solutions.');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/error'); // TODO: Change to the current page URL

?>
<!-- <h2><?= __d('cake', 'An Internal Error Has Occurred.') ?></h2>
<p class="error">
    <strong><?= __d('cake', 'Error') ?>: </strong>
    <?= h($message) ?>
</p> -->

<section class="_404_hero">
    <div class="auto-container">
        <img class="img-fluid" src="<?= $this->Url->image('404/archer-500.png') ?>" alt="Oops! An Internal Error Has Occurred." title="Oops! An Internal Error Has Occurred.">
        <h4 class="title_2 text-center mt-5 mb-3">Oops! An Internal Error Has Occurred.</h4>
        <p class="lead">We apologize for the inconvenience. We are working to fix the issue as soon as possible.</p>

        <div class="divider" style="background-color: var(--alert);; height: 1px; width: 200px; margin: 50px auto;">

        </div>

        <div class="_404_footer mt-5">
            <div class="left">
                <img class="img-fluid" src="<?= $this->Url->image('404/archie-for-404.png') ?>" alt="Archer Exteriors" title="Archer Exteriors">
            </div>
            <div class="right pb-5">
                <h4 class="title_3 mb-2">Here’s what you can do:</h4>
                <ul>
                    <li><img src="<?= $this->Url->image('404/check.svg') ?>" alt="Check" width="20"> Check the URL for any typing mistakes</li>
                    <li><img src="<?= $this->Url->image('404/check.svg') ?>" alt="Check" width="20"> Return to the <a href="<?= $this->Url->build('/') ?>">Home Page</a></li>
                    <li><img src="<?= $this->Url->image('404/check.svg') ?>" alt="Check" width="20"> <a href="<?= $this->Url->build('/contact') ?>">Contact us</a> for any detailed information</li>
                    <li><img src="<?= $this->Url->image('404/check.svg') ?>" alt="Check" width="20"> Call <a href="tel:<?= COMPANY_PHONE_TEL ?>"><?= COMPANY_PHONE ?></a> if you need help finding something</li>
                </ul>

                <h3 class="title_3 mt-5 mb-2">Archie is here to help you improve your home</h3>
                <a class="theme-btn sm" href="<?= $this->Url->build('/get-estimate') ?>">Get a Free Estimate</a>
            </div>
        </div>
    </div>
</section>