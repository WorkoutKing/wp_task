(function ($) {
  $(document).ready(function () {
    /* Navigation mobile script */
    jQuery(document).ready(function () {
      var $mobileNav = jQuery("#mobile-nav");
      var $toggleButton = jQuery(".header__toggle-button");

      $toggleButton.on("click", function () {
        $mobileNav.toggleClass("active");
        if ($mobileNav.hasClass("active")) {
          $mobileNav.slideDown(300);
        } else {
          $mobileNav.slideUp(300);
        }
      });
    });

    /* Slick slider script */
    function updateArrowStates(slider, prevButton, nextButton) {
      const $slider = jQuery(slider);
      const $prevButton = jQuery(prevButton);
      const $nextButton = jQuery(nextButton);

      $slider.on("init afterChange", function (event, slick, currentSlide) {
        const slideIndex = currentSlide || 0;
        const slideCount = slick.slideCount;
        const slidesToShow = slick.options.slidesToShow;

        if (slideIndex === 0) {
          $prevButton.addClass("not-active");
        } else {
          $prevButton.removeClass("not-active");
        }

        if (slideIndex >= slideCount - slidesToShow) {
          $nextButton.addClass("not-active");
        } else {
          $nextButton.removeClass("not-active");
        }
      });
    }

    jQuery(".follow-slider-first__slides").slick({
      arrows: false,
      dots: false,
      infinite: false,
      slidesToShow: 3.5,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1300,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 1025,
          settings: {
            slidesToShow: 3.2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 2.4,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1.7,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 500,
          settings: {
            slidesToShow: 1.1,
            slidesToScroll: 1,
          },
        },
      ],
    });

    updateArrowStates(
      ".follow-slider-first__slides",
      ".slick-prev-first",
      ".slick-next-first"
    );

    jQuery(".slick-prev-first").click(function () {
      jQuery(".follow-slider-first__slides").slick("slickPrev");
    });
    jQuery(".slick-next-first").click(function () {
      jQuery(".follow-slider-first__slides").slick("slickNext");
    });

    jQuery(".follow-slider-second__slides").slick({
      arrows: false,
      dots: false,
      infinite: false,
      slidesToShow: 2.2,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1300,
          settings: {
            slidesToShow: 1.8,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 1.1,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 500,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });

    updateArrowStates(
      ".follow-slider-second__slides",
      ".slick-prev-second",
      ".slick-next-second"
    );

    jQuery(".slick-prev-second").click(function () {
      jQuery(".follow-slider-second__slides").slick("slickPrev");
    });
    jQuery(".slick-next-second").click(function () {
      jQuery(".follow-slider-second__slides").slick("slickNext");
    });
  });
})(jQuery);
