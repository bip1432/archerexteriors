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
  <?= $this->Html->css('maps') ?>
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
  <!-- Map Script - Load once at the bottom -->
  <script src="<?= $this->Url->build('/mapapi/platform.js', ['fullBase' => true]) ?>" async></script>

  <!-- main-js -->
  <?= $this->Html->script('script') ?>

  <!-- Service Area Branch Accordion -->
  <script>
    $(document).ready(function() {
      $('.faqServiceArea').each(function() {
        var $accordion = $(this);

        $accordion.find('.accordion-collapse').on('show.bs.collapse', function() {
          var $header = $(this).prev('.accordion-header');
          $header.addClass('open');

          $header.find('.toggle-btn i')
            .removeClass('fa-solid fa-plus')
            .addClass('fa-solid fa-minus');
        });

        $accordion.find('.accordion-collapse').on('hide.bs.collapse', function() {
          var $header = $(this).prev('.accordion-header');
          $header.removeClass('open');

          $header.find('.toggle-btn i')
            .removeClass('fa-solid fa-minus')
            .addClass('fa-solid fa-plus');
        });

        // Set initial states on page load
        $accordion.find('.accordion-collapse.show').each(function() {
          var $header = $(this).prev('.accordion-header');
          $header.addClass('open');
          $header.find('.toggle-btn i')
            .removeClass('fa-solid fa-plus')
            .addClass('fa-solid fa-minus');
        });

        // Prevent toggling on header except icon click
        $accordion.find('.accordion-header').on('click', function(e) {
          if (!$(e.target).closest('.toggle-btn').length) {
            e.preventDefault();
            e.stopPropagation();
          }
        });
      });
    });
  </script>

  <?= $this->fetch('script') ?>

</body><!-- End of .page_wrapper -->

</html>