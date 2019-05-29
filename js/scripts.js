$(document).ready(function () {

    $("#main-menu .nav-link, .more, .more2").on("click", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1000);
    });

    // back to top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
        event.preventDefault();          
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });


    $('.main-slider').slick({

    });

    $('.character-slider').slick({
        fade: true,
        prevArrow: $(".slick-prev-c"),
        nextArrow: $(".slick-next-c")
    });

    $('.toys-slider').slick({
        dots: true
    });

    $('.partners-slider').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
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

    $(".slide-characters .img-link").click(function(event) {
        event.preventDefault();
        $(".slide-characters .character-img").children().not("#"+this.id).addClass('d-none');
        $(".slide-characters .character-img").children("#"+this.id).removeClass('d-none');
        $(".slide-characters .character-wrapper").children(".info").not('#'+this.id).addClass('d-none');
        $(".slide-characters .character-wrapper").children(".info#"+this.id).removeClass('d-none');
    });

    $(".slide-kits .img-link").click(function(event) {
        event.preventDefault();
        $(".slide-kits .character-img").children().not("#"+this.id).addClass('d-none');
        $(".slide-kits .character-img").children("#"+this.id).removeClass('d-none');
        $(".slide-kits .character-wrapper").children(".info").not('#'+this.id).addClass('d-none');
        $(".slide-kits .character-wrapper").children(".info#"+this.id).removeClass('d-none');
    });


});