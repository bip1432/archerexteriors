$(window).scroll(function () {
  if ($(this).scrollTop() > 10) {
    $('.menu_sticky').addClass('sticky-nav');
  } else {
    $('.menu_sticky').removeClass('sticky-nav');
  }
});


// nav active
var sections = $('.page_section'),
  nav = $('.navbar'),
  nav_height = 150;

$(window).on('scroll', function () {
  var cur_pos = $(this).scrollTop();

  sections.each(function () {
    var sectionTop = $(this).offset().top - nav_height;
    var sectionBottom = sectionTop + $(this).outerHeight();
    var viewportHeight = $(window).height();

    // Calculate the height of the viewport
    var customViewportHeight = (1 / 3) * viewportHeight;

    // Check if at least 1/3 of the section is visible in the viewport
    if ((cur_pos + customViewportHeight >= sectionTop) && (cur_pos <= sectionBottom)) {
      nav.find('.nav-link').removeClass('active');
      nav.find('.nav-link[href="#' + $(this).attr('id') + '"]').addClass('active');
    } else {
      // If the section is not visible, remove the 'active' class
      nav.find('.nav-link[href="#' + $(this).attr('id') + '"]').removeClass('active');
    }
  });
});

// Sidebar Mobile menu

document.addEventListener("DOMContentLoaded", function () {
  const sidebar = document.getElementById("mobileSidebar");
  const overlay = document.getElementById("sidebarOverlay");
  const openBtn = document.getElementById("sidebarToggle");
  const closeBtn = document.getElementById("closeSidebar");

  function openSidebar() {
    sidebar.classList.add("active");
    overlay.classList.add("active");
  }

  function closeSidebar() {
    sidebar.classList.remove("active");
    overlay.classList.remove("active");
  }

  openBtn.addEventListener("click", openSidebar);
  closeBtn.addEventListener("click", closeSidebar);
  overlay.addEventListener("click", closeSidebar);

});


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


// Clients Slider

document.addEventListener("DOMContentLoaded", () => {
  const sliderInner = document.querySelector(".logo_slider_inner");
  const slider = document.querySelector(".logo_slider");

  // Duplicate content for seamless scrolling
  const duplicate = sliderInner.innerHTML;
  sliderInner.innerHTML += duplicate; // Append duplicate content

  let scrollAmount = 0;
  const speed = 1;
  let isPaused = false;

  function scrollSlider() {
    if (!isPaused) {
      scrollAmount -= speed;

      // Reset scroll position to the start when fully scrolled
      if (Math.abs(scrollAmount) >= sliderInner.scrollWidth / 2) {
        scrollAmount = 0;
      }

      sliderInner.style.transform = `translateX(${scrollAmount}px)`;
    }

    requestAnimationFrame(scrollSlider);
  }

  // Pause scrolling on hover
  slider.addEventListener("mouseenter", () => {
    isPaused = true;
  });

  // Resume scrolling when hover ends
  slider.addEventListener("mouseleave", () => {
    isPaused = false;
  });

  scrollSlider();
});


// Scroll to a Specific Div

$(document).ready(function () {
  if ($('.scroll-to-target').length) {
    $(".scroll-to-target").on('click', function () {
      var target = $(this).attr('data-target');
      // animate
      $('html, body').animate({
        scrollTop: $(target).offset().top
      }, 1000);

    });
  }
});

// Elements Animation
$(document).ready(function () {
  if ($('.wow').length) {
    new WOW({
      mobile: false // optional
    }).init();
  }
});


// Testimonial Slider

$(document).ready(function () {
  $(".testimonialSlider").owlCarousel({
    loop: true,
    margin: 20,
    dots: true,
    nav: false,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsive: {
      0: { items: 1 },
      768: { items: 2 },
      1024: { items: 3 }
    }
  });
});


// Contact form

const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});


// Back to Top
  $(document).ready(function() {
    var backToTopBtn = $('#backToTop');

    $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
        backToTopBtn.addClass('show');
      } else {
        backToTopBtn.removeClass('show');
      }
    });

    backToTopBtn.on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: 0
      }, '500');
    });

  });