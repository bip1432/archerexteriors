(function ($) {

  "use strict";

  //Hide Loading Box (Preloader)
  function handlePreloader() {
    if ($('.loader-wrap').length) {
      $('.loader-wrap').delay(1000).fadeOut(500);
    }
  }

  //Update Header Style and Scroll to Top
  function headerStyle() {
    if ($('.main-header').length) {
      var windowpos = $(window).scrollTop();
      var siteHeader = $('.main-header');
      var scrollLink = $('.scroll-top');
      if (windowpos >= 110) {
        siteHeader.addClass('fixed-header');
        scrollLink.addClass('open');
      } else {
        siteHeader.removeClass('fixed-header');
        scrollLink.removeClass('open');
      }
    }
  }

  headerStyle();


  //Submenu Dropdown Toggle
  if ($('.main-header li.dropdown ul').length) {
    $('.main-header .navigation li.dropdown').append('<div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>');

  }

  //Mobile Nav Hide Show
  if ($('.mobile-menu').length) {

    $('.mobile-menu .menu-box').mCustomScrollbar();

    var mobileMenuContent = $('.main-header .menu-area .main-menu').html();
    $('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);
    $('.sticky-header .main-menu').append(mobileMenuContent);

    //Dropdown Button
    $('.mobile-menu li.dropdown .dropdown-btn').on('click', function () {
      $(this).toggleClass('open');
      $(this).prev('ul').slideToggle(500);
    });
    //Dropdown Button
    $('.mobile-menu li.dropdown .dropdown-btn').on('click', function () {
      $(this).prev('.megamenu').slideToggle(900);
    });
    //Menu Toggle Btn
    $('.mobile-nav-toggler').on('click', function () {
      $('body').addClass('mobile-menu-visible');
    });

    //Menu Toggle Btn
    $('.mobile-menu .menu-backdrop,.mobile-menu .close-btn').on('click', function () {
      $('body').removeClass('mobile-menu-visible');
    });
  }

  // Megamenu Tabs

  // $(document).ready(function () {
  //   $("#megaTab .nav-link").hover(function () {
  //     // Remove active class from all tabs
  //     $("#megaTab .nav-link").removeClass("active");
  //     $("#megaTabContent .tab-pane").removeClass("show active");

  //     // Add active class to hovered tab and related content
  //     $(this).addClass("active");
  //     $($(this).attr("data-bs-target")).addClass("show active");
  //   });

  //   // Allow links to navigate on click
  //   $("#megaTab .nav-link").click(function (e) {
  //     let link = $(this).attr("href");
  //     if (link && link !== "#") {
  //       window.location.href = link;
  //     }
  //   });
  // });

  $(document).on("mouseenter", ".mega-tab-nav .nav-link[data-tab]", function () {
    const $link = $(this);
    const $wrapper = $link.closest(".megaTab_wrap");
    const tabName = $link.data("tab");

    // Remove active from all nav-links in this group
    $wrapper.find(".nav-link").removeClass("active");
    // Add active to hovered
    $link.addClass("active");

    // Hide all tab panes in this group
    $wrapper.find(".tab-pane").removeClass("show active");
    // Show the corresponding tab
    $wrapper.find(`.tab-pane[data-tab-content="${tabName}"]`).addClass("show active");
  });

  $(document).on("click", ".mega-tab-nav .nav-link[href]", function (e) {
    const link = $(this).attr("href");
    if (link && link !== "#") {
      // Let it navigate normally
      window.location.href = link;
    }
  });



  //  Replace all SVG images with inline SVG

  $(document).ready(function () {
    jQuery('img.svg').each(function () {
      var $img = jQuery(this);
      var imgURL = $img.attr('src');

      jQuery.get(imgURL, function (data) {
        // Get the SVG tag, ignore the rest
        var $svg = jQuery(data).find('svg');

        // Set the replaced image's classes to the new SVG
        $svg.attr('class', $img.attr('class'));

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg.removeAttr('xmlns:a');

        // Replace image with new SVG
        $img.replaceWith($svg);

      }, 'xml');
    });

  });



  // Scroll to a Specific Div
  if ($('.scroll-to-target').length) {
    $(".scroll-to-target").on('click', function () {
      var target = $(this).attr('data-target');
      // animate
      $('html, body').animate({
        scrollTop: $(target).offset().top
      }, 1000);

    });
  }

  // Elements Animation
  if ($('.wow').length) {
    new WOW({
      mobile: false // optional
    }).init();
  }



  //LightBox / Fancybox
  if ($('.lightbox-image').length) {
    $('.lightbox-image').fancybox({
      openEffect: 'fade',
      closeEffect: 'fade',
      helpers: {
        media: {}
      }
    });
  }


  //Tabs Box
  if ($('.tabs-box').length) {
    $('.tabs-box .tab-buttons .tab-btn').on('click', function (e) {
      e.preventDefault();
      var target = $($(this).attr('data-tab'));

      if ($(target).is(':visible')) {
        return false;
      } else {
        target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
        $(this).addClass('active-btn');
        target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
        target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
        $(target).fadeIn(300);
        $(target).addClass('active-tab');
      }
    });
  }



  //Accordion Box
  if ($('.accordion-box').length) {
    $(".accordion-box").on('click', '.acc-btn', function () {

      var outerBox = $(this).parents('.accordion-box');
      var target = $(this).parents('.accordion');

      if ($(this).hasClass('active') !== true) {
        $(outerBox).find('.accordion .acc-btn').removeClass('active');
      }

      if ($(this).next('.acc-content').is(':visible')) {
        return false;
      } else {
        $(this).addClass('active');
        $(outerBox).children('.accordion').removeClass('active-block');
        $(outerBox).find('.accordion').children('.acc-content').slideUp(300);
        target.addClass('active-block');
        $(this).next('.acc-content').slideDown(300);
      }
    });
  }


  // banner-carousel
  if ($('.banner-carousel').length) {
    $('.banner-carousel').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      active: true,
      smartSpeed: 2000,
      autoplay: 6000,
      navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        800: {
          items: 1
        },
        1024: {
          items: 1
        }
      }
    });
  }


  // clients-carousel
  if ($('.clients-carousel').length) {
    $('.clients-carousel').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      smartSpeed: 3000,
      autoplay: true,
      navText: ['<span class="flaticon-left"></span>', '<span class="flaticon-right"></span>'],
      responsive: {
        0: {
          items: 1
        },
        480: {
          items: 2
        },
        600: {
          items: 3
        },
        800: {
          items: 4
        },
        1200: {
          items: 5
        }

      }
    });
  }

  // clients-carousel v2
  if ($('.clients-carousel-v2').length) {
    $('.clients-carousel-v2').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      smartSpeed: 3000,
      autoplay: true,
      navText: ['<span class="flaticon-left"></span>', '<span class="flaticon-right"></span>'],
      responsive: {
        0: {
          items: 1
        },
        480: {
          items: 2
        },
        600: {
          items: 3
        },
        800: {
          items: 4
        },
        1200: {
          items: 5
        },
        1400: {
          items: 4
        }

      }
    });
  }


  //Jquery Spinner / Quantity Spinner
  if ($('.quantity-spinner').length) {
    $("input.quantity-spinner").TouchSpin({
      verticalbuttons: true
    });
  }


  // File Upload Script
  // $(document).ready(function () {
  //   $('#fileInput').on('change', function (event) {
  //     const files = event.target.files;
  //     const $list = $('.file__list');

  //     for (let i = 0; i < files.length; i++) {
  //       const fileName = files[i].name;

  //       const fileBlock = $(`
  //         <div class="file__value">
  //           <span class="file__value--text">${fileName}</span>
  //           <span class="file__value--remove">X</span>
  //         </div>
  //       `);

  //       $list.append(fileBlock);
  //     }

  //     // Optional: reset input so same file can be reselected
  //     $(this).val('');
  //   });

  //   $(document).on('click', '.file__value--remove', function () {
  //     $(this).closest('.file__value').remove();
  //   });
  // });


  /* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */


  $(window).on('scroll', function () {
    headerStyle();
  });




  //Sortable Masonary with Filters
  function enableMasonry() {
    if ($('.sortable-masonry').length) {

      var winDow = $(window);
      // Needed variables
      var $container = $('.sortable-masonry .items-container');
      var $filter = $('.filter-btns');

      $container.isotope({
        filter: '*',
        masonry: {
          columnWidth: '.masonry-item.small-column'
        },
        animationOptions: {
          duration: 500,
          easing: 'linear'
        }
      });


      // Isotope Filter
      $filter.find('li').on('click', function () {
        var selector = $(this).attr('data-filter');

        try {
          $container.isotope({
            filter: selector,
            animationOptions: {
              duration: 500,
              easing: 'linear',
              queue: false
            }
          });
        } catch (err) {

        }
        return false;
      });


      winDow.on('resize', function () {
        var selector = $filter.find('li.active').attr('data-filter');

        $container.isotope({
          filter: selector,
          animationOptions: {
            duration: 500,
            easing: 'linear',
            queue: false
          }
        });
      });


      var filterItemA = $('.filter-btns li');

      filterItemA.on('click', function () {
        var $this = $(this);
        if (!$this.hasClass('active')) {
          filterItemA.removeClass('active');
          $this.addClass('active');
        }
      });
    }
  }

  enableMasonry();


  /* ==========================================================================
   When document is loaded, do
   ========================================================================== */

  $(window).on('load', function () {
    handlePreloader();
    enableMasonry();
  });


})(window.jQuery);


// Initialize tooltip
document.addEventListener("DOMContentLoaded", function () {
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });
});



// Offer Side Panel

const offerBtn = document.getElementById('special-offer-btn');
const overlay = document.getElementById('offer-panel-overlay');
const panel = document.getElementById('offer-panel');
const closeBtn = document.getElementById('close-panel');

function openPanel() {
  panel.classList.add('active');
  overlay.style.display = 'block';
}

function closePanel() {
  panel.classList.remove('active');
  overlay.style.display = 'none';
}

offerBtn.addEventListener('click', openPanel);
closeBtn.addEventListener('click', closePanel);
overlay.addEventListener('click', closePanel);



// Initialize counter animation

$(document).ready(function () {
  function animateCounter(counter) {
    if ($(counter).hasClass('animated')) return;

    $(counter).addClass('animated');
    $(counter).prop('Counter', 0).animate({
      Counter: $(counter).text()
    }, {
      duration: 3000,
      easing: 'swing',
      step: function (now) {
        $(this).text(Math.ceil(now));
      }
    });
  }

  let observer = new IntersectionObserver(function (entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        observer.unobserve(entry.target); // Stop observing after animation starts
      }
    });
  }, { root: null, threshold: 0.3 });

  $('.counter').each(function () {
    observer.observe(this);
  });

  // Check if any counter is already in view on page load
  $(window).on("load", function () {
    $(".counter").each(function () {
      if ($(this).is(":visible") && $(this).offset().top < $(window).scrollTop() + $(window).height()) {
        animateCounter(this);
      }
    });
  });
});


// Gallery Slider JS

// $(document).ready(function () {
//   function isMobile() {
//     return window.innerWidth <= 300;
//   }

//   if (!isMobile()) {
//     lightGallery(document.getElementById('galleryCarousel'), {
//       selector: '.item .expand',
//       subHtmlSelectorRelative: true,
//       licenseKey: '267782B7-5F41-4D8A-829A-E3902A493098' // License key
//     });
//   }

//   $('#galleryCarousel').owlCarousel({
//     loop: true,
//     margin: 30,
//     dots: true,
//     nav: false,
//     autoplay: true,
//     autoplayTimeout: 3000,
//     autoplayHoverPause: true,
//     center: true,
//     stagePadding: 100,
//     responsive: {
//       0: { items: 1, stagePadding: 50 },
//       575: { items: 2, stagePadding: 80 },
//       768: { items: 3, stagePadding: 100 },
//       992: { items: 3, stagePadding: 120 },
//       1200: { items: 3, stagePadding: 150 }
//     }
//   });

//   // Handle touch events for mobile devices
//   if (isMobile()) {
//     let touchMoved = false;

//     $(".gallery_slider .item").on("touchstart", function () {
//       touchMoved = false; // Reset movement flag
//     });

//     $(".gallery_slider .item").on("touchmove", function () {
//       touchMoved = true; // User is swiping, not tapping
//     });

//     $(".gallery_slider .item").on("touchend", function (e) {
//       if (!touchMoved) {
//         e.preventDefault(); // Prevent default touch behavior (fix iOS issue)
//         e.stopPropagation();

//         var $this = $(this);
//         var $layer = $this.find(".item_layer");

//         // Toggle visibility
//         if ($layer.css("opacity") == 0) {
//           $(".gallery_slider .item .item_layer").css({ opacity: 0, visibility: "hidden" });
//           $layer.css({ opacity: 1, visibility: "visible" });
//         } else {
//           $layer.css({ opacity: 0, visibility: "hidden" });
//         }
//       }
//     });

//     // Close .item_layer when tapping outside
//     $(document).on("touchend", function (e) {
//       if (!$(e.target).closest(".gallery_slider .item").length) {
//         $(".gallery_slider .item .item_layer").css({ opacity: 0, visibility: "hidden" });
//       }
//     });
//   }
// });


//Gallery Slider JS

$(document).ready(function () {
  const screenWidth = window.innerWidth;

  $('.gallery_slider .item').each(function () {
    const $outerExpand = $(this).children('a.expand');
    const $innerExpand = $(this).find('.item_layer .expand');

    if (screenWidth >= 992) {
      // On desktop: remove outer expand (around image)
      $outerExpand.removeClass('expand').attr('data-lg-exclude', 'true');
    } else {
      // On mobile/tablet: remove inner expand (inside item_layer)
      $innerExpand.removeClass('expand').attr('data-lg-exclude', 'true');
    }
  });


  lightGallery(document.getElementById('galleryCarousel'), {
    thumbnail: true,
    pager: true,
    plugins: [],
    hash: true,
    preload: 0,
    selector: '.item .expand',
    // subHtmlSelectorRelative: true,
    licenseKey: '267782B7-5F41-4D8A-829A-E3902A493098', // License key
  });

  $('#galleryCarousel').owlCarousel({
    loop: true,
    margin: 30,
    dots: true,
    nav: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    center: true,
    stagePadding: 100,
    responsive: {
      0: { items: 1, stagePadding: 50 },
      575: { items: 2, stagePadding: 80 },
      768: { items: 3, stagePadding: 100 },
      992: { items: 3, stagePadding: 120 },
      1200: { items: 3, stagePadding: 150 }
    }
  });
});



// Review Slider JS

$('#reviewSlider').owlCarousel({
  loop: true,
  margin: 30,
  dots: true,
  nav: false,

  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,


  responsive: {
    0: {
      items: 1,
    },
    575: {
      items: 1,
    },
    992: {
      items: 2,
    },
    1200: {
      items: 3,
    }
  }
})


// Review Slider JS

$('#SalesmanReviewSlider').owlCarousel({
  loop: true,
  margin: 30,
  dots: true,
  nav: false,

  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,

  items: 1
})


// Activities Slider

$(document).ready(function () {
  var $activitiesCarousel = $('#activitiesCarousel');

  $activitiesCarousel.owlCarousel({
    loop: true,
    margin: 30,
    dots: false,
    nav: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,

    responsive: {
      0: { items: 1.5 },
      575: { items: 2.5 },
      992: { items: 2.5 },
      1200: { items: 3.5 }
    }
  });

  // Custom Navigation for this carousel
  $('.owl-carousel__next').click(function () {
    $activitiesCarousel.trigger('next.owl.carousel');
  });

  $('.owl-carousel__prev').click(function () {
    $activitiesCarousel.trigger('prev.owl.carousel');
  });
});


// Service Slider

$('#serviceSlider').owlCarousel({
  loop: true,
  margin: 30,
  dots: true,
  nav: false,

  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,


  responsive: {
    0: {
      items: 1,
    },
    575: {
      items: 1,
    },
    768: {
      items: 2,
    },
    1200: {
      items: 3,
    }
  }
})


// recentActivitiesSlider Slider

$('#currentActivitiesSlider').owlCarousel({
  loop: true,
  margin: 30,
  dots: true,
  nav: false,

  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,


  responsive: {
    0: {
      items: 1,
    },
    575: {
      items: 1,
    },
    768: {
      items: 2,
    },
    1200: {
      items: 3,
    }
  }
})



// ArtContest Creativity Slider
$(document).ready(function () {

  lightGallery(document.getElementById('artContestCreativity_slider'), {
    selector: '.item .art-gallery',
    subHtmlSelectorRelative: true,
    licenseKey: '267782B7-5F41-4D8A-829A-E3902A493098' // License key
  });

  $('#artContestCreativity_slider').owlCarousel({
    loop: true,
    margin: 30,
    dots: true,
    nav: false,

    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,


    responsive: {
      0: {
        items: 1,
      },
      1200: {
        items: 1,
      }
    }
  })
});

// Service Page key points
$('#serviceKeyPoints').owlCarousel({
  loop: true,
  margin: 10,
  dots: true,
  nav: false,

  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,


  responsive: {
    0: {
      items: 1,
    },
    575: {
      items: 2,
    },
    992: {
      items: 3,
    },
    1400: {
      items: 4,
      loop: false,
    }
  }
})



// Visualize Tool

function initServiceSelector(container) {
  const serviceType = container.dataset.service;
  const serviceName = serviceType.charAt(0).toUpperCase() + serviceType.slice(1);

  container.querySelector(".service-name").textContent = serviceName;

  const serviceOptions = container.querySelectorAll(".options .item");
  const serviceImage = container.querySelector(".serviceImageSelector");

  let selectedType = serviceOptions[0].getAttribute("data-type");
  let selectedColor = "gray";

  // Define manual paths for images
  const servicePaths = {
    roof: "../img/roofing-service/roof-preview/",
    siding: "../img/siding-service/siding-preview/"
  };

  function updateColorOptions() {
    // Hide all color options
    container.querySelectorAll(".color-options").forEach(div => div.style.display = "none");

    // Show the correct color options for the selected type
    const activeColorOptions = container.querySelector(`#${selectedType}ColorOptions`);
    if (activeColorOptions) {
      activeColorOptions.style.display = "flex";

      // Auto-select the first available color
      const firstColor = activeColorOptions.querySelector(".item");
      if (firstColor) {
        container.querySelectorAll(".color-options .selected").forEach(el => el.classList.remove("selected"));
        firstColor.classList.add("selected");
        selectedColor = firstColor.getAttribute("data-color");
      }
    }
  }

  // Type selection event
  serviceOptions.forEach(option => {
    option.addEventListener("click", () => {
      container.querySelector(".options .selected")?.classList.remove("selected");
      option.classList.add("selected");
      selectedType = option.getAttribute("data-type");
      updateColorOptions();
      updateImage();
    });
  });

  // Color selection event
  container.querySelectorAll(".color-options .item").forEach(color => {
    color.addEventListener("click", () => {
      container.querySelector(".color-options .selected")?.classList.remove("selected");
      color.classList.add("selected");
      selectedColor = color.getAttribute("data-color");
      updateImage();
    });
  });

  function updateImage() {
    if (!serviceImage) return; // Prevent error if element not found

    if (servicePaths[serviceType]) {
      const imageName = `${selectedType}-${selectedColor}`;
      serviceImage.src = `${servicePaths[serviceType]}${imageName}.png`;
      serviceImage.alt = `${selectedType} ${selectedColor}`;

      const previewTitle = container.querySelector("#previewTitle");
      if (previewTitle) {
        previewTitle.textContent = `${selectedType.charAt(0).toUpperCase() + selectedType.slice(1)} - ${selectedColor.charAt(0).toUpperCase() + selectedColor.slice(1)}`;
      }
    }
  }



  updateColorOptions(); // Initialize color options based on the default selection
}

document.querySelectorAll(".service-selector").forEach(initServiceSelector);




// Before/After Slider

document.addEventListener("DOMContentLoaded", function () {
  const slider = document.getElementById('before-after-slider');
  const before = document.getElementById('before-image');
  const resizer = document.getElementById('resizer');

  if (slider && before && resizer) {
    const beforeImage = before.getElementsByTagName('img')[0];
    let active = false;

    let width = slider.offsetWidth;
    beforeImage.style.width = width + 'px';

    window.addEventListener('resize', function () {
      let width = slider.offsetWidth;
      beforeImage.style.width = width + 'px';
    });

    resizer.addEventListener('mousedown', function () {
      active = true;
      resizer.classList.add('resize');
    });

    document.body.addEventListener('mouseup', function () {
      active = false;
      resizer.classList.remove('resize');
    });

    document.body.addEventListener('mouseleave', function () {
      active = false;
      resizer.classList.remove('resize');
    });

    document.body.addEventListener('mousemove', function (e) {
      if (!active) return;
      let x = e.pageX;
      x -= slider.getBoundingClientRect().left;
      slideIt(x);
      pauseEvent(e);
    });

    resizer.addEventListener('touchstart', function () {
      active = true;
      resizer.classList.add('resize');
    });

    document.body.addEventListener('touchend', function () {
      active = false;
      resizer.classList.remove('resize');
    });

    document.body.addEventListener('touchcancel', function () {
      active = false;
      resizer.classList.remove('resize');
    });

    document.body.addEventListener('touchmove', function (e) {
      if (!active) return;
      let x;
      for (let i = 0; i < e.changedTouches.length; i++) {
        x = e.changedTouches[i].pageX;
      }
      x -= slider.getBoundingClientRect().left;
      slideIt(x);
      pauseEvent(e);
    });

    function slideIt(x) {
      let transform = Math.max(0, Math.min(x, slider.offsetWidth));
      before.style.width = transform + "px";
      resizer.style.left = transform + "px";
    }

    function pauseEvent(e) {
      if (e.stopPropagation) e.stopPropagation();
      if (e.preventDefault) e.preventDefault();
      e.cancelBubble = true;
      e.returnValue = false;
      return false;
    }
  }

  // Initialize project gallery (always)
  document.querySelectorAll(".projects_gallery").forEach(function (gallery) {
    lightGallery(gallery, {
      selector: '.gallery-item',
      subHtmlSelectorRelative: false,
      licenseKey: '267782B7-5F41-4D8A-829A-E3902A493098'
    });
  });
});


jQuery(document).ready(function () {
  let owl = jQuery('#newConstructionGallery');
  owl.on('initialized.owl.carousel', function (event) {
    const container = document.querySelector('.owl-stage');
    lightGallery(container, {
      thumbnail: true,
      pager: true,
      plugins: [],
      hash: true,
      preload: 0,
      selector: '.owl-item:not(.cloned) .img_item',
      licenseKey: '267782B7-5F41-4D8A-829A-E3902A493098' // License key
    });
  });
  owl.owlCarousel({
    items: 2,
    margin: 20,
    loop: true,
    dots: true,
    smartSpeed: 3000,
    autoplay: 6000,

    responsive: {
      0: {
        items: 1,
      },
      992: {
        items: 2,
      }
    }
  });
});






// Thumb Carousel

$(document).ready(function () {
  var bigimage = $(".thumbCarouselBig");
  var thumbs = $(".thumbCarouselThumbs");
  var syncedSecondary = true;
  var syncing = false; // Add this flag

  bigimage
    .owlCarousel({
      items: 1,
      slideSpeed: 2000,
      nav: true,
      autoplay: true,
      dots: false,
      loop: true,
      responsiveRefreshRate: 200,
      navText: [
        '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
        '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
      ]
    })
    .on("changed.owl.carousel", function (el) {
      if (!syncing) {
        syncing = true;
        syncPosition(el);
        syncing = false;
      }
    });

  thumbs
    .on("initialized.owl.carousel", function () {
      thumbs.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
      items: 3,
      loop: false,
      dots: false,
      nav: true,
      navText: [
        '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
        '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
      ],
      slideSpeed: 500,
      margin: 10,
      slideBy: 4,
      responsiveRefreshRate: 100
    })
    .on("changed.owl.carousel", function (el) {
      if (!syncing) {
        syncing = true;
        syncPosition2(el);
        syncing = false;
      }
    });

  function syncPosition(el) {
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

    if (current < 0) {
      current = count;
    }
    if (current > count) {
      current = 0;
    }

    thumbs.find(".owl-item").removeClass("current").eq(current).addClass("current");

    var onscreen = thumbs.find(".owl-item.active").length - 1;
    var start = thumbs.find(".owl-item.active").first().index();
    var end = thumbs.find(".owl-item.active").last().index();

    if (current > end) {
      thumbs.data("owl.carousel").to(current, 100, true);
    }
    if (current < start) {
      thumbs.data("owl.carousel").to(current - onscreen, 100, true);
    }
  }

  function syncPosition2(el) {
    if (syncedSecondary) {
      var number = el.item.index;
      bigimage.data("owl.carousel").to(number, 100, true);
    }
  }

  thumbs.on("click", ".owl-item", function (e) {
    e.preventDefault();
    var number = $(this).index();
    bigimage.data("owl.carousel").to(number, 300, true);
  });
});




// Community Events Filter



document.addEventListener('DOMContentLoaded', function () {
  const yearFilter = document.getElementById('yearFilter');
  if (!yearFilter) return; // exit if element doesn't exist

  yearFilter.addEventListener('change', function () {
    const selectedYear = this.value;
    document.querySelectorAll('.service_types_wrap.community_events').forEach(function (wrap) {
      if (wrap.getAttribute('data-year') === selectedYear) {
        wrap.classList.add('active');
      } else {
        wrap.classList.remove('active');
      }
    });
  });
});




// Profile share script



document.addEventListener("DOMContentLoaded", function () {
    const btnShare = document.getElementById("btn-share");
    if (!btnShare) return; // stops if element doesn't exist

    btnShare.addEventListener("click", function () {
        // Remove old modal if it exists
        const oldModal = document.getElementById("modal-share");
        if (oldModal) oldModal.remove();

        const el = this;
        const pageUrl = encodeURIComponent(window.location.href);
        const shareModalTitle = el.getAttribute("data-modal-title");
        const shareModalDescription = el.getAttribute("data-modal-description");
        const shareFacebookLabel = el.getAttribute("data-facebook-label");
        const shareTwitterLabel = el.getAttribute("data-twitter-label");
        const shareTwitterText = el.getAttribute("data-twitter-text");
        const shareLinkedInLabel = el.getAttribute("data-linkedin-label");

        // Build modal HTML
        const shareHtml = `
            <div class="modal fade" id="modal-share" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header border-0 pb-0">
                            <h5 class="modal-title">${shareModalTitle}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body pt-0 text-center">
                            ${shareModalDescription ? `<p>${shareModalDescription}</p>` : ""}
                            <ul class="list-unstyled">
                                ${shareFacebookLabel ? `<li><a href="https://www.facebook.com/sharer/sharer.php?u=${pageUrl}" target="_blank" class="btn btn-facebook">${shareFacebookLabel}</a></li>` : ""}
                                ${shareTwitterLabel ? `<li><a href="https://twitter.com/intent/tweet?text=${encodeURIComponent(shareTwitterText)}&url=${pageUrl}" target="_blank" class="btn btn-twitter">${shareTwitterLabel}</a></li>` : ""}
                                ${shareLinkedInLabel ? `<li><a href="https://www.linkedin.com/sharing/share-offsite/?url=${pageUrl}" target="_blank" class="btn btn-linkedin">${shareLinkedInLabel}</a></li>` : ""}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Append modal to body
        document.body.insertAdjacentHTML("beforeend", shareHtml);

        // Show modal using Bootstrap 5
        const modalEl = document.getElementById("modal-share");
        const modal = new bootstrap.Modal(modalEl);
        modal.show();
    });
});
