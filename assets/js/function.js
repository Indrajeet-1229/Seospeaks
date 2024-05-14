(function ($) {
  "use strict";
  $(document).ready(function () {
    //fixed menu
    var fixed_top = $(".main-menu");
    var scroll_top_open = $(".page-scroll");
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        fixed_top.addClass("animated fadeInDown menu-fixed");
      } else {
        fixed_top.removeClass("animated fadeInDown menu-fixed");
      }

      if ($(this).scrollTop() > 500) {
        scroll_top_open.addClass("open");
      } else {
        scroll_top_open.removeClass("open");
      }
    });

    //menu search
    $(function () {
      $(".search-icon").on("click", function (e) {
        $(".menu-search-form").toggleClass("open");
        e.stopPropagation();
      });
      $(document).on("click", function (e) {
        if (
          $(e.target).is(".menu-search-form input, .menu-search-form form") ===
          false
        ) {
          $(".menu-search-form").removeClass("open");
        }
      });
    });

    $(".has-sub-menu").on("click", function () {
      $(this).toggleClass("open");
    });

    $(".menu-icon").on("click", function () {
      $(".mob-menu-content").addClass("open");
      $(".wrapper").addClass("mm-open");
    });

    $(".mob-menu-close").on("click", function () {
      $(".mob-menu-content").removeClass("open");
      $(".wrapper").removeClass("mm-open");
    });

    //jQuery for page scrolling feature - requires jQuery Easing plugin
    $("a.page-scroll").on("click", function (event) {
      var $anchor = $(this);
      $("html, body")
        .stop()
        .animate(
          {
            scrollTop: $($anchor.attr("href")).offset().top,
          },
          1500,
          "easeInOutExpo"
        );
      event.preventDefault();
    });

    //counterup count jquery
    jQuery(function () {
      $(".counter").counterUp({
        delay: 10,
        time: 1000,
      });
    });

    jQuery(document).ready(function () {
      var swiper = new Swiper(".banner-slider", {
        slidesPerView: 1,
        // autoplay: 5000,
        effect: "fade",
        rtl: "true",
        loop: "true",
      });
    });

    var swiper = new Swiper(".testimonial-container", {
      slidesPerView: 2,
      spaceBetween: 30,
      freeMode: true,
      //autoplay: 3500,
      //loop: 'true',
      spaceBetween: 30,
      breakpoints: {
        768: {
          slidesPerView: 1,
          spaceBetween: 30,
        },
      },
    });

    var swiper = new Swiper(".sr-testimonial-slider", {
      slidesPerView: 1,
      pagination: ".swiper-pagination",
      paginationClickable: true,
      freeMode: true,
      autoplay: 3500,
      loop: "true",
    });

    //Circle Progress bar
    $(".first.circle")
      .circleProgress({
        value: 0.99,
        fill: { gradient: ["#f99f1c"] },
      })
      .on("circle-animation-progress", function (event, progress) {
        $(this)
          .find("strong")
          .html(Math.round(99 * progress) + "<i>%</i>");
      });

    $(".second.circle")
      .circleProgress({
        value: 0.7,
        fill: { gradient: ["#f99f1c"] },
      })
      .on("circle-animation-progress", function (event, progress) {
        $(this)
          .find("strong")
          .html(Math.round(70 * progress) + "<i>%</i>");
      });

    $(".third.circle")
      .circleProgress({
        value: 0.5,
        fill: { gradient: ["#f99f1c"] },
      })
      .on("circle-animation-progress", function (event, progress) {
        $(this)
          .find("strong")
          .html(Math.round(50 * progress) + "<i>%</i>");
      });

    $(".fourth.circle")
      .circleProgress({
        value: 0.9,
        fill: { gradient: ["#f99f1c"] },
      })
      .on("circle-animation-progress", function (event, progress) {
        $(this)
          .find("strong")
          .html(Math.round(90 * progress) + "<i>%</i>");
      });

    // counter up
    $(".number").counterUp({
      delay: 10,
      time: 2000,
    });

    $(document).ready(function () {
      $(".control-area, .documentation-main-area").theiaStickySidebar({
        additionalMarginTop: 30,
      });
    });

    var $gellary_img = $(".portfolio_items-two").isotope({
      itemSelector: ".portfolio_item",
      percentPosition: true,
      transitionDuration: "0.5s",
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: ".portfolio_item",
        gutter: 30,
      },
      getSortData: {
        name: ".name",
        symbol: ".symbol",
        number: ".number parseInt",
        category: "[data-category]",
        weight: function (itemElem) {
          var weight = $(itemElem).find(".weight").text();
          return parseFloat(weight.replace(/[\(\)]/g, ""));
        },
      },
    });

    //Isotope activation js codes
    var $gellary_img = $(".portfolio_items").isotope({
      itemSelector: ".portfolio_item",
      percentPosition: true,
      transitionDuration: "0.5s",
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: ".portfolio_item",
        gutter: 15,
      },
      getSortData: {
        name: ".name",
        symbol: ".symbol",
        number: ".number parseInt",
        category: "[data-category]",
        weight: function (itemElem) {
          var weight = $(itemElem).find(".weight").text();
          return parseFloat(weight.replace(/[\(\)]/g, ""));
        },
      },
    });

    // filter functions
    var filterFns = {
      // show if number is greater than 50
      numberGreaterThan50: function () {
        var number = $(this).find(".number").text();
        return parseInt(number, 10) > 50;
      },
      // show if name ends with -ium
      ium: function () {
        var name = $(this).find(".name").text();
        return name.match(/ium$/);
      },
    };

    // bind filter button click
    $(".portfolio_menu").on("click", "li", function () {
      var filterValue = $(this).attr("data-filter");
      // use filterFn if matches value
      filterValue = filterFns[filterValue] || filterValue;
      $gellary_img.isotope({ filter: filterValue });
    });

    // change is-checked class on buttons
    $(".portfolio_menu").each(function (i, liList) {
      var $liList = $(liList);
      $liList.on("click", "li ", function () {
        $liList.find(".active").removeClass("active");
        $(this).addClass("active");
      });
    });

    //lightcase
    $("a[data-rel^=lightcase]").lightcase();

    //nst slider
    $(".nstSlider").nstSlider({
      rounding: {
        100: "1000",
        1000: "10000",
        10000: "100000",
      },
      left_grip_selector: ".leftGrip",
      right_grip_selector: ".rightGrip",
      value_bar_selector: ".bar",
      value_changed_callback: function (cause, leftValue, rightValue) {
        var $container = $(this).parent();
        $container.find(".leftLabel").text(leftValue);
        $container.find(".rightLabel").text(rightValue);
      },
    });

    //flex slider
    $(window).load(function () {
      // The slider being synced must be initialized first
      $("#carousel").flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 84,
        itemMargin: 4,
        asNavFor: "#slider",
      });

      $("#slider").flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
      });
    });

    //Product list grid view
    var list = $("#list");
    var grid = $("#grid");
    list.on("click", function () {
      $(".product-item-grid").animate({ opacity: 0 }, function () {
        $(".grid").removeClass("grid-active");
        $(".list").addClass("list-active");
        $(".product-item-grid").attr("class", "product-item-list");
        $(".product-item-list").stop().animate({ opacity: 1 });
      });
    });

    grid.on("click", function () {
      $(".product-item-list").animate({ opacity: 0 }, function () {
        $(".list").removeClass("list-active");
        $(".grid").addClass("grid-active");
        $(".product-item-list").attr("class", "product-item-grid");
        $(".product-item-grid").stop().animate({ opacity: 1 });
      });
    });
  });
})(jQuery);

//preloader
window.requestAnimFrame = (function () {
  return (
    window.requestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    window.mozRequestAnimationFrame ||
    window.oRequestAnimationFrame ||
    window.msRequestAnimationFrame ||
    function (callback) {
      window.setTimeout(callback, 1000 / 60);
    }
  );
})();

var preloader = {
  animationStart: null,
  animationDuration: 5000, // the length of the (simulated) animation
  progressTextContainer: null,
  progressTicks: null,
  preloaderOverlay: null,
  previousProgressCount: -1,

  initialize: function () {
    this.progressTextContainer = document.getElementById(
      "preloader-progress-text"
    );
    this.progressTicks = document.querySelectorAll(
      '[data-role="preloader"] use'
    );
    this.preloaderOverlay = document.getElementsByClassName(
      "js-preloader-overlay"
    );
    this.simulateLoad(); // for demonstration purposes
    document.body.classList.add("js-preloader-is-running");
    // var btnRerunAnimation = document.querySelectorAll('.js-btn-rerun-animation');
    // btnRerunAnimation[0].addEventListener("click",
    //   function (event) {
    //     window.location = location;
    //   },
    //   false);
  },

  updateProgress: function (progress) {
    if (progress > this.previousProgressCount) {
      for (var i = 0; i < progress; i++) {
        var tick = this.progressTicks[i].classList.add("active");
        preloader.previousProgressCount = progress;
      }
      if (progress < 100) {
        preloader.progressTextContainer.innerHTML = progress;
      } else {
        // hide the preloader
        preloader.progressTextContainer.innerHTML = "GO!";
        document.body.classList.remove("js-preloader-is-running"); // let the body scroll
        this.preloaderOverlay[0].classList.add("closed"); // hide the preloader
      }
    }
  },

  simulateLoad: function (timestamp) {
    if (!this.animationStart) this.animationStart = timestamp;
    var progress = timestamp - this.animationStart;
    if (isNaN(progress)) {
      progress = 0;
    }
    progress = Math.round((progress / preloader.animationDuration) * 100);
    preloader.updateProgress(progress);

    if (progress < 100) {
      window.requestAnimFrame(preloader.simulateLoad);
    } else {
      this.animationStart = null;
    }
  },
};

preloader.initialize();
