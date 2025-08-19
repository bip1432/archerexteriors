<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Archer Exteriors Appointment e-Book</title>
  <meta name="author" content="Archer Exteriors" />
  <meta property="og:image" content="https://www.archerexteriors.com/img/Archer-Exteriors-Logo.png" />
  <meta property="og:type" content="https://www.archerexteriors.com/" />


  <link rel="stylesheet" href="./build/css/flipbook.min.css">
  <link rel="stylesheet" href="./css/playbook.css">



  <script src="https://code.jquery.com/jquery-3.6.3.js" crossorigin="anonymous"></script>
  <script src="build/js/flipbook.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {

      $('#flipBook_container').flipBook({

        pages: [

          {

            src: './images/catalog/archer-catalog-1.jpg',

            thumb: './images/catalog/archer-catalog-1.jpg',

            title: 'Archer Truck is on Your Way',

          },

          {

            src: './images/catalog/archer-catalog-2.jpg',

            thumb: './images/catalog/archer-catalog-2.jpg',

            title: 'Why Choose Archer Exteriors',

          },

          {

            src: './images/catalog/archer-catalog-3.jpg',

            thumb: './images/catalog/archer-catalog-3.jpg',

            title: 'A Better Home',

          },

          {

            src: './images/catalog/archer-catalog-4.jpg',

            thumb: './images/catalog/archer-catalog-4.jpg',

            title: 'Archer Exteriors Services',

          },

          {

            src: './images/catalog/archer-catalog-5.jpg',

            thumb: './images/catalog/archer-catalog-5.jpg',

            title: 'National Strength',

          },

          {

            src: './images/catalog/archer-catalog-6.jpg',

            thumb: './images/catalog/archer-catalog-6.jpg',

            title: 'Archer Exteriors Commitment',

          },

          {

            src: './images/catalog/archer-catalog-7.jpg',

            thumb: './images/catalog/archer-catalog-7.jpg',

            title: 'Archer Exteriors Community Impact',

          },



          {

            src: './images/catalog/archer-catalog-8.jpg',

            thumb: './images/catalog/archer-catalog-8.jpg',

            title: 'Contact Archer Exteriors',

          },


        ],


        viewMode: '3d',

        btnDownloadPages: {
          enabled: true,
          title: "Download appointment e-book",
          iconFA: "flipbook-icon-download",
          iconM: "flipbook-icon-file_download",
          url: "images/pages.zip",
          name: "Download appointment e-book"
        },

        btnDownloadPdf: {
          forceDownload: false,
          enabled: true,
          title: "Download PDF",
          url: "pdf/archer-truck-on-your-way-low-res.pdf",
          openInNewWindow: true,
          name: "Download PDF"
        },

        // preloader

        fillPreloader: {
          enabled: true,
          imgEmpty: "../../img/loader.gif",
          imgFull: "../../img/loader.gif",
        },

        assets: {
          preloader: "../../img/loader.gif",
          spinner: "../../img/loader.gif",
        },

        shareTitle: "Check out this archer exteriors appointment e-book",


      });

    });
  </script>

</head>



<body>


  <section class="flipBook_section">
    <div id="flipBook_container"></div>
  </section>


</body>

</html>