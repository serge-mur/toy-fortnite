$(document).ready(function () {

    $('.main-slider').slick({

    });

    $('.responsive-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 6,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
    });

    if (window.matchMedia("screen and (min-width: 1px) and (max-width:575px)").matches) {
        console.log('mobile');
    }

});