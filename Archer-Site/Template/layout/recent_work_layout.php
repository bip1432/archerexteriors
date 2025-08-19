<!DOCTYPE html>
<html lang="en">

<head>
  <?= $this->element('meta') ?>
  <?= $this->Html->meta('icon') ?>

  <!-- Stylesheets -->
  <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css', ['rel' => 'stylesheet']) ?>
  <?= $this->Html->css('flaticon') ?>
  <?php /* <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet"> */ ?>

  <?= $this->Html->css('plugins/owl.carousel.min') ?>
  <?= $this->Html->css('plugins/owl.theme.default.min') ?>
  <?= $this->Html->css('plugins/bootstrap.min') ?>
  <?= $this->Html->css('plugins/jquery.fancybox.min') ?>
  <?= $this->Html->css('plugins/animate.min') ?>
  <?= $this->Html->css('plugins/lightgallery/lightgallery.min') ?>

  <!-- Lightgallery Plugins  -->
  <?= $this->Html->css('plugins/lightgallery/lg-zoom') ?>
  <?= $this->Html->css('plugins/lightgallery/lg-thumbnail') ?>
  <?= $this->Html->css('plugins/lightgallery/lg-video') ?>
  <?= $this->Html->css('plugins/lightgallery/justifiedGallery') ?>

  <?= $this->Html->css('theme') ?>
  <?= $this->Html->css('style') ?>
  <?= $this->Html->css('responsive') ?>

  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
</head>

<!-- page wrapper -->

<body class="boxed_wrapper">
  <?= $this->element('header'); ?>

  <?= $this->Flash->render() ?>
  <?= $this->fetch('content') ?>

  <?= $this->element('footer'); ?>

  <!--Scroll to top-->
  <button class="scroll-top scroll-to-target" data-target="html">
    <span class="flaticon-up-arrow"></span>
  </button>

  <!-- Offer Button -->
  <div id="special-offer-btn">Archer in Action</div>
  <!-- Overlay -->
  <div id="offer-panel-overlay"></div>

  <!-- Offer Panel -->
  <?= $this->element('offer_side_panel'); ?>


  <!-- jquery plugins -->
  <?= $this->Html->script('plugins/jquery.min') ?>
  <?= $this->Html->script('plugins/popper.min') ?>
  <?= $this->Html->script('plugins/bootstrap.min') ?>
  <?= $this->Html->script('plugins/owl.carousel.min') ?>
  <?= $this->Html->script('plugins/wow.min') ?>
  <?= $this->Html->script('plugins/jquery.fancybox.min') ?>
  <?= $this->Html->script('plugins/scrollbar') ?>
  <?= $this->Html->script('plugins/nav-tool') ?>
  <?= $this->Html->script('plugins/lightgallery/lightgallery.umd.min') ?>
  <?= $this->Html->script('plugins/isotope') ?>

  <!-- Lightgallery Plugins  -->
  <?= $this->Html->script('plugins/lightgallery/lg-zoom.umd') ?>
  <?= $this->Html->script('plugins/lightgallery/lg-thumbnail.umd') ?>
  <?= $this->Html->script('plugins/lightgallery/lg-video.umd') ?>
  <?= $this->Html->script('plugins/lightgallery/jquery.justifiedGallery') ?>


  <!-- main-js -->
  <?= $this->Html->script('script') ?>

  <?= $this->fetch('script') ?>

  <script>
    const $lgInlineVideoContainer = document.getElementById('inline-video-gallery-container');

    if ($lgInlineVideoContainer) {
      const _inlineGallery = lightGallery($lgInlineVideoContainer, {
        licenseKey: '267782B7-5F41-4D8A-829A-E3902A493098', // License key
        container: $lgInlineVideoContainer,
        dynamic: true,
        thumbnail: true,
        swipeToClose: false,
        mode: 'lg-scale-up',
        slideShowAutoplay: false,
        hash: false,
        pager: false,
        closable: false,
        showMaximizeIcon: true,
        rotate: false,
        download: false,
        slideDelay: 400,
        plugins: [lgThumbnail, lgVideo],
        dynamicEl: [{
            src: 'https://youtu.be/PU725CymUso',
            subHtml: `<h4>'Completed Roofing Projects in Florida | Archer Exteriors</h4>`,
            video: {
              source: [{
                src: 'https://youtu.be/PU725CymUso',
                type: 'youtube',
              }, ],
              autoplay: false,
            },
          },
          {
            src: 'https://youtu.be/FeZlXzrwoIA',
            subHtml: `<h4>Free Shore Shuttles in Wildwood, NJ with Archer Exteriors</h4>`,
            thumb: 'https://img.youtube.com/vi/ttLu7ygaN6I/mqdefault.jpg',
            video: {
              source: [{
                src: 'https://youtu.be/FeZlXzrwoIA',
                type: 'youtube',
              }, ],
              autoplay: false,
            },
          },
          {
            src: 'https://youtu.be/QUAVk-gPy8Q',
            subHtml: `<h4>MAJOR House Exterior Upgrades in the Jersey Shore | Archer Exteriors</h4>`,
            video: {
              source: [{
                src: 'https://youtu.be/QUAVk-gPy8Q',
                type: 'youtube',
              }, ],
              autoplay: false,
            },
          },
          {
            src: 'https://youtu.be/AVU2QAEMM4A',
            subHtml: `<h4>Florida’s Best Roofing and Siding Installers | Archer Exteriors Florida</h4>`,
            video: {
              source: [{
                src: 'https://youtu.be/AVU2QAEMM4A',
                type: 'youtube',
              }, ],
              autoplay: false,
            },
          },
        ],
      });

      _inlineGallery.openGallery(0);
    }
  </script>

</body><!-- End of .page_wrapper -->

</html>