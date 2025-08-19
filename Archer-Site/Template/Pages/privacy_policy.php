<?php
// Set Meta Tags
$this->set('title', 'Privacy Policy | Archer Exteriors');
$this->set('metaDescription', 'Archer Exteriors - Privacy Policy');
$this->set('metaKeywords', STATIC_KEYWORDS . ', Privacy Policy, archerexteriors.com, Archer Exteriors');
$this->set('ogTitle', 'Privacy Policy | Archer Exteriors');
$this->set('ogDescription', 'Archer Exteriors - Privacy Policy');
$this->set('ogImage', DOMAIN . '/img/archerexteriors-insignia.png?' . time());
$this->set('ogType', 'website'); // For general info pages
$this->set('ogUrl', DOMAIN . '/privacy-policy'); // TODO: Change to the current page URL
?>

<section class="cms_hero">
    <div class="auto-container">
        <div class="contents text-center">
            <h1 class="title">PRIVACY POLICY</h1>
        </div>
    </div>
</section>

<section class="section">
    <div class="auto-container">
        <h4 class="title_3 mb-1">Archer Exteriors Statement of Privacy.</h4>
        <h4 class="title_3 mb-4">This privacy notice applies solely to information collected by this web site.</h4>

        <p class=" mb-2">It details our commitment to your privacy . . .</p>
        <ul class="list-style-disc ps-5">
            <li class="">What personally identifiable information is collected from you through the web site, how it is
                used and with whom it may be shared.</li>
            <li class="">What choices are available to you regarding the use of your data.</li>
            <li class="">The security procedures in place to protect the misuse of your information.</li>
            <li class="">How you can correct any inaccuracies in the information.</li>
            <li class="">Information Collection, Use, and Sharing</li>
        </ul>

        <p class=" mt-4 mb-3">We are the sole owners of the information collected on this site. We only have access
            to/collect information that you voluntarily give us via email or other direct contacts from you. </p>
        <p class=" mb-3">We will not sell or rent this information to anyone.</p>
        <p class=" mb-3">We will use your information to respond to you, regarding the reason you contacted us. We
            will not share your information with any third party outside of our organization, other than as necessary to
            fulfill your request, e.g. to ship an order.</p>
        <p class=" mb-3">Unless you ask us not to, we may contact you via email in the future to tell you about
            specials, new products or services, or changes to this privacy policy.</p>

        <h4 class="title_3 mt-5 mb-3">Your Access to and Control Over Information</h4>
        <p class=" mb-2">You may opt out of any future contacts from us at any time. You can do the following at any
            time by contacting us via the email address or phone number given on our website:</p>
        <ul class="list-style-disc ps-5">
            <li class="">See what data we have about you if any.</li>
            <li class="">Change/correct any data we have about you.</li>
            <li class="">Have us delete any data we have about you.</li>
            <li class="">Express any concern you have about our use of your data.</li>
        </ul>

        <h4 class="title_3 mt-5 mb-3">Security</h4>
        <p class=" mb-3">We take precautions to protect your information. When you submit sensitive information via
            the website, your information is protected both online and offline.</p>
        <p class=" mb-3">Wherever we collect sensitive information (such as credit card data), that information is
            encrypted and transmitted to us in a secure manner. You can verify this by looking for a closed lock icon at the
            bottom of your web browser, or looking for "https" at the beginning of the address of the web page.</p>
        <p class=" mb-3">While we use encryption to protect sensitive information transmitted online, we also protect
            your information offline. </p>
        <p class=" mb-3">Only employees who need the information to perform a specific job (for example, billing or
            customer service) are granted access to personally identifiable information. The computers/servers in which we
            store personally identifiable information are kept in a secure environment.</p>
        <p class=" mb-3">If you feel that we are not abiding by this privacy policy, you should contact us immediately
            via telephone or email.</p>

        <div class="mt-5 text-center">
            <a href="<?= $this->Url->build(['controller' => 'Contacts', 'action' => 'index']) ?>" class="theme-btn sm">Contact Us <i class="flaticon-login"></i></a>
        </div>
    </div>
</section>