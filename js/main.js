$(function(){
    var current = location.pathname.split("/")[1];
    $('nav li a').each(function(){
        var $this = $(this);
        if($this.attr('href').indexOf(current) !== -1){
            $this.addClass('active');
        }
    })
})   
$(document).ready(function () {
    slideProduct();
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
    
    
});
