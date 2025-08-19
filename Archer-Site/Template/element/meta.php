<!-- Standard HTML Meta Tags for SEO -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!-- CSRF Token for AJAX requests -->
<?= $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken')) ?>

<title><?= $title ?? 'Local Roofing Company & Home Exteriors Services | Archer Exteriors' ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv='content-language' content='en-gb'>
<meta name="description" content="<?= $metaDescription ?? 'Archer Exteriors - Your trusted partner for premium roofing, siding, and exterior solutions.' ?>">
<meta name="keywords" content="<?= $metaKeywords ?? 'Roofing, Siding, Windows, Doors, Decks, Gutters, 8662724398, archerexteriors.com, Archer Exteriors' ?>">
<meta name="author" content="Archer Exteriors" />
<meta name="publish_date" content="2025-07-17" />
<meta name="language" content="English">

<!-- Open Graph Meta Tags for Social Media -->
<meta property="og:title" content="<?= $ogTitle ?? $title ?>" />
<meta property="og:description" content="<?= $ogDescription ?? $metaDescription ?>" />
<meta property="og:image" content="<?= $ogImage ?? DOMAIN . '/img/archerexteriors-insignia.png?' . time() ?>" />
<meta property="og:type" content="<?= $ogType ?? 'website' ?>" />
<meta property="og:url" content="<?= $ogUrl ?? DOMAIN ?>" />
<meta property="og:site_name" content="<?= DOMAIN_NAME ?? 'Archer Exteriors' ?>">
<meta property="og:locale" content="en_US">

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= $ogTitle ?? $title ?>">