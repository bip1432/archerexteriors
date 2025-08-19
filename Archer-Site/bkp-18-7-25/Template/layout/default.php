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
  <div id="special-offer-btn">Golden Ticket Offer</div>
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

  <!-- map script -->
  <?= $this->Html->script('https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU', ['block' => true]) ?>
  <?= $this->Html->script('plugins/gmaps') ?>
  <?= $this->Html->script('plugins/map-helper') ?>

  <!-- main-js -->
  <?= $this->Html->script('script') ?>

  <?= $this->fetch('script') ?>

</body><!-- End of .page_wrapper -->

</html>