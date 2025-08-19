// Megamenu Tabs

$(document).ready(function () {
  $("#megaTab .nav-link").hover(function () {
    // Remove active class from all tabs
    $("#megaTab .nav-link").removeClass("active");
    $("#megaTabContent .tab-pane").removeClass("show active");

    // Add active class to hovered tab and related content
    $(this).addClass("active");
    $($(this).attr("data-bs-target")).addClass("show active");
  });

  // Allow links to navigate on click
  $("#megaTab .nav-link").click(function (e) {
    let link = $(this).attr("href");
    if (link && link !== "#") {
      window.location.href = link;
    }
  });
});


// Navbar click/hover functions

$(document).ready(function () {
  function toggleDropdown(event) {
    if ($(window).width() < 992) { // Mobile screens only
      event.preventDefault(); // Prevent immediate link navigation
      let $this = $(this);

      // Close other open dropdowns
      $(".dropdown-menu").not($this.next()).slideUp();

      // Toggle current dropdown
      $this.next(".dropdown-menu").slideToggle();
    }
  }

  $(".navbar .dropdown-toggle").on("click", function (event) {
    if ($(window).width() < 992) { // Mobile screens only
      toggleDropdown.call(this, event);
    } else {
      // Allow default navigation on desktop
      window.location.href = $(this).attr("href");
    }
  });

  // Close dropdown when clicking outside
  $(document).click(function (e) {
    if (!$(e.target).closest('.navbar').length) {
      $(".dropdown-menu").slideUp();
    }
  });

  // Enable hover dropdowns for desktop
  $(".navbar .dropdown").hover(
    function () {
      if ($(window).width() >= 992) {
        $(this).find(".dropdown-menu").stop(true, true).fadeIn();
      }
    },
    function () {
      if ($(window).width() >= 992) {
        $(this).find(".dropdown-menu").stop(true, true).fadeOut();
      }
    }
  );
});



// Responsive Menu

document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menuToggle");
  const sidebar = document.getElementById("navbarNav");
  const overlay = document.getElementById("sidebarOverlay");
  const closeSidebar = document.getElementById("closeSidebar");
  const dropdowns = document.querySelectorAll(".dropdown-toggle");

  function toggleSidebar() {
    sidebar.classList.toggle("show");
    overlay.classList.toggle("show");
    menuToggle.classList.toggle("open"); // Change navbar-toggler icon
  }

  menuToggle.addEventListener("click", function () {
    toggleSidebar();
  });

  closeSidebar.addEventListener("click", function () {
    toggleSidebar();
  });

  overlay.addEventListener("click", function () {
    toggleSidebar();
  });

  // Close sidebar when clicking a menu item (except dropdowns)
  document.querySelectorAll("#navbarNav .nav-link:not(.dropdown-toggle)").forEach((item) => {
    item.addEventListener("click", function () {
      toggleSidebar();
    });
  });

  // Prevent sidebar from closing when opening dropdown
  dropdowns.forEach((dropdown) => {
    dropdown.addEventListener("click", function (event) {
      event.stopPropagation();
    });
  });
});





// Sticky Navbar

$(window).scroll(function () {
  if ($(this).scrollTop() > 10) {
    $('.menu_sticky').addClass('sticky-nav');
  } else {
    $('.menu_sticky').removeClass('sticky-nav');
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


// Initialize counter animation

$(document).ready(function () {
  function animateCounter(counter) {
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
        let counter = entry.target;
        animateCounter(counter);
        observer.unobserve(counter); // Stop observing after animation starts
      }
    });
  }, { root: null, threshold: 0.3 }); // Adjusted threshold for better detection

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


// Accolade Slider JS

$('#accoladeSlider').owlCarousel({
  loop: true,
  margin: 30,
  dots: true,
  nav: false,

  autoplay: true,
  autoplayTimeout: 2000,
  autoplayHoverPause: true,

  responsive: {
    0: {
      items: 3,
    },
    575: {
      items: 4,
    },
    992: {
      items: 6,
    },
    1200: {
      items: 8,
    }
  }
})



//Image change on Hover

$(document).ready(function () {
  $(".imgHoverTransform .item img").hover(
    function () {
      $(this).attr("src", $(this).attr("data-hover"));
    },
    function () {
      $(this).attr("src", $(this).attr("data-original"));
    }
  );
});



// Gallery Slider JS

$(document).ready(function () {
  function isMobile() {
    return window.innerWidth <= 991;
  }

  if (!isMobile()) {
    lightGallery(document.getElementById('galleryCarousel'), {
      selector: '.item .expand',
      subHtmlSelectorRelative: true
    });
  }

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

  // Handle touch events for mobile devices
  if (isMobile()) {
    let touchMoved = false;

    $(".gallery_slider .item").on("touchstart", function () {
      touchMoved = false; // Reset movement flag
    });

    $(".gallery_slider .item").on("touchmove", function () {
      touchMoved = true; // User is swiping, not tapping
    });

    $(".gallery_slider .item").on("touchend", function (e) {
      if (!touchMoved) {
        e.preventDefault(); // Prevent default touch behavior (fix iOS issue)
        e.stopPropagation();

        var $this = $(this);
        var $layer = $this.find(".item_layer");

        // Toggle visibility
        if ($layer.css("opacity") == 0) {
          $(".gallery_slider .item .item_layer").css({ opacity: 0, visibility: "hidden" });
          $layer.css({ opacity: 1, visibility: "visible" });
        } else {
          $layer.css({ opacity: 0, visibility: "hidden" });
        }
      }
    });

    // Close .item_layer when tapping outside
    $(document).on("touchend", function (e) {
      if (!$(e.target).closest(".gallery_slider .item").length) {
        $(".gallery_slider .item .item_layer").css({ opacity: 0, visibility: "hidden" });
      }
    });
  }
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
      992: { items: 3.5 },
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


// Back to Top
$(document).ready(function () {
  var backToTopBtn = $('#backToTop');

  $(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
      backToTopBtn.addClass('show');
    } else {
      backToTopBtn.removeClass('show');
    }
  });

  backToTopBtn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, '500');
  });

});



// Before After Slider

document.querySelectorAll('[data-component="image-comparison-slider"]').forEach((imageComparisonSlider) => {

  function setSliderState(e, element) {
    const sliderRange = element.querySelector('[data-image-comparison-range]');

    if (e.type === 'input') {
      sliderRange.classList.add('image-comparison__range--active');
      return;
    }

    sliderRange.classList.remove('image-comparison__range--active');
    element.removeEventListener('mousemove', moveSliderThumb);
  }

  function moveSliderThumb(e, element) {
    const sliderRange = element.querySelector('[data-image-comparison-range]');
    const thumb = element.querySelector('[data-image-comparison-thumb]');
    let position = e.layerY - 20;

    if (e.layerY <= sliderRange.offsetTop) {
      position = -20;
    }

    if (e.layerY >= sliderRange.offsetHeight) {
      position = sliderRange.offsetHeight - 20;
    }

    thumb.style.top = `${position}px`;
  }

  function moveSliderRange(e, element) {
    const value = e.target.value;
    const slider = element.querySelector('[data-image-comparison-slider]');
    const imageWrapperOverlay = element.querySelector('[data-image-comparison-overlay]');

    slider.style.left = `${value}%`;
    imageWrapperOverlay.style.width = `${value}%`;

    element.addEventListener('mousemove', (event) => moveSliderThumb(event, element));
    setSliderState(e, element);
  }

  function init(element) {
    const sliderRange = element.querySelector('[data-image-comparison-range]');

    if ('ontouchstart' in window === false) {
      sliderRange.addEventListener('mouseup', (e) => setSliderState(e, element));
      sliderRange.addEventListener('mousedown', (e) => moveSliderThumb(e, element));
    }

    sliderRange.addEventListener('input', (e) => moveSliderRange(e, element));
    sliderRange.addEventListener('change', (e) => moveSliderRange(e, element));
  }

  init(imageComparisonSlider);
});




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
    roof: "./assets/img/roofing-service/roof-preview/",
    siding: "./assets/img/siding-service/siding-preview/"
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





// Project Galleries


document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".projects_gallery").forEach(function (gallery) {
    lightGallery(gallery, {
      selector: '.gallery-item',
      subHtmlSelectorRelative: false, // Disable captions
      licenseKey: '267782B7-5F41-4D8A-829A-E3902A493098' // License key
    });
  });
});




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



// Recent Projects Gallery

document.addEventListener("DOMContentLoaded", function () {
  // Init LightGallery
  document.querySelectorAll(".recent_projects").forEach(function (gallery) {
    lightGallery(gallery, {
      selector: '.item',
      subHtmlSelectorRelative: false,
      licenseKey: '267782B7-5F41-4D8A-829A-E3902A493098'
    });
  });

  // Filtering
  const filterButtons = document.querySelectorAll('.filter-btn');
  const galleryItems = document.querySelectorAll('.item');

  filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const filter = btn.getAttribute('data-filter');

      // Toggle active class
      document.querySelector('.filter-btn.active')?.classList.remove('active');
      btn.classList.add('active');

      // Filter logic
      galleryItems.forEach(item => {
        const category = item.getAttribute('data-category') || 'all';
        if (filter === 'all' || category === filter) {
          item.classList.remove('hide');
        } else {
          item.classList.add('hide');
        }
      });
    });
  });
});
