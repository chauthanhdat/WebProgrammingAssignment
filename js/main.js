$(document).ready(function () {
    /* Language */
    $('.language a').click(function () {
        $('.language a').removeClass('active');
        $(this).addClass('active');
    });
    //moveLanguage();
    $(window).resize(function () {
        //moveLanguage();
    });

    function moveLanguage() {
        if ($(window).width() < 1200) {
            $('.language').insertAfter('.navbar-sub');
        } else {
            $('.shopping-cart').after($('.language'));
        }
    }

    mainBanner();
    slideProduct();

    function mainBanner() {
        /* Slider Banner */
        if ($(".main-banner .bxslider").length > 0) {
            $(".main-banner .bxslider").bxSlider({
                pager: true,
                controls: false,
                auto: true,
                speed: 1000,
                pause: 10000
            });
        }
    }

    function slideProduct(){
        /* Slider Product */
        if ($('.products .bxslider').length > 0) {
            $('.products .bxslider').each(function (index) {
                if ($(this).children('li').length > 1) {
                    var bxSlider = $(this).bxSlider({
                        pager: false,
                        controls: true,
                        auto: false,
                        minSlides: 1,
                        maxSlides: 4,
                        moveSlides: 1,
                        slideWidth: 220,
                        slideMargin: 20,
                    });
                    //bxInit();
                    $(window).resize(function () {
                        bxInit();
                    });

                    function bxInit() {
                        var winSize = $(window).width(),
                            controls, slideWidth, slideMargin;
                        slideWidth = 220;
                        slideMargin = 20;
                        if (winSize < 1200 && winSize >= 768) {
                            controls = false;
                        } else if (winSize < 768) {
                            controls = false;
                        } else {
                            controls = true;
                        }
                        bxSlider.reloadSlider({
                            pager: false,
                            controls: controls,
                            auto: true,
                            minSlides: 1,
                            maxSlides: 4,
                            moveSlides: 1,
                            slideWidth: slideWidth,
                            slideMargin: slideMargin,
                        });
                    }
                }
            });
        }

        /*if ($('.products .bxslider-mobile').length > 0) {
            bxInitM();
            $(window).resize(function () {
                bxInitM();
            });

            function bxInitM() {
                var winSize = $(window).width(),
                    controls, slideWidth, slideMargin;
                slideWidth = 220;
                slideMargin = 20;
                if (winSize <= 375) {
                    slideWidth = 140;
                }else{
                    slideWidth = 150;
                }

                $('.products .bxslider-mobile').bxSlider({
                    pager: false,
                    controls: false,
                    auto: false,
                    minSlides: 1,
                    maxSlides: 2,
                    moveSlides: 1,
                    slideWidth: slideWidth,
                    slideMargin: 15,
                });
            }
        }*/

        $(".slider-mobile").slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            speed: 500
        });
    }



    /* Slider How it work */
    $slick_slider = $('.how-it-work .slider, .environmental .slider');
    settings_slider = {
        dots: false,
        arrows: false,
        speed: 500,
        autoplay: true,
    };
    slick_on_mobile($slick_slider, settings_slider);

    function slick_on_mobile(slider, settings) {
        $(window).on('load resize', function () {
            if ($(window).width() > 767) {
                if (slider.hasClass('slick-initialized')) {
                    slider.slick('unslick');
                }
                return
            }
            if (!slider.hasClass('slick-initialized')) {
                return slider.slick(settings);
            }
        });
    };



    /* Testimonial */
    if ($(".testimonial .slider").length > 0) {
        $(".testimonial .slider").slick({
            arrows: false,
            dots: true,
            infinite: true,
            centerMode: true,
            slidesToShow: 3,
            speed: 500,
            autoplay: true,
            responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    centerMode: false,
                }
            }, {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    centerMode: false,
                }
            }]
        }).magnificPopup({
            type: 'image',
            delegate: 'a:not(.slick-cloned)',
            closeOnContentClick: false
        });
    }

    /* Payment */
    //movePayment();
    $(window).resize(function () {
        //movePayment();
    });

    function movePayment() {
        if ($(window).width() < 768) {
            $('.payment').insertAfter('.box-content .total');
        } else {
            $('.payment-method').append($('.payment'));
        }
    }


    $('#online-support-header').click(function () {
        var url = $(this).attr('data-url');
        if ($('#online-support-body').hasClass('active')){
            $('#online-support-body').removeClass('active')
            ajax.post(url, {support: 0}, function (res) {

            });
        }else{
            $('#online-support-body').addClass('active')
            ajax.post(url, {support: 1}, function (res) {

            });
        }
    });

    $('.testimonial article').click(function (e) {
        var that = $(this);
        //console.log(e.target.tagName);
        if (e.target.tagName != 'A') {
            that.find('a').trigger('click');
        }
    });
});
