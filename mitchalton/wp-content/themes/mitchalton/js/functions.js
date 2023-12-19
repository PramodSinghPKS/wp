jQuery(function() {

    if(jQuery(".ma__dark")[0]) {
        jQuery(".ma__header__options-contrast__black").addClass("active");
    } else {
        jQuery(".ma__header__options-contrast__white").addClass("active");
    }

    jQuery(".ma__works__slider").slick({
        prevArrow: jQuery(".ma__works__slider__btn-prev"),
        nextArrow: jQuery(".ma__works__slider__btn-next"),
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    jQuery(".ma__header__options-contrast__white").on("click", function(event) {
        jQuery("body").removeClass("ma__dark");
        jQuery(".ma__header__options-contrast span").removeClass("active");
        jQuery(this).addClass("active");
    });
    jQuery(".ma__header__options-contrast__black").on("click", function(event) {
        jQuery("body").addClass("ma__dark");
        jQuery(".ma__header__options-contrast span").removeClass("active");
        jQuery(this).addClass("active");
    });
});