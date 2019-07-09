(function($){
    // 메인 슬라이드
    $(document).ready(function(){
        $('.main-slider > ul').bxSlider({
            auto: true,
            autoControls: true,
            autoControlsCombine: true,
            controls: false,
            infiniteLoop: true,
            onSliderLoad: function(currentIndex) {
                $('.main-slider').find('.bx-viewport').find('ul').children().eq(currentIndex + 1).addClass('active');
            },
            onSlideBefore: function($slideElement){
                $('.main-slider').find('.bx-viewport').find('ul').children().removeClass('active');
                $slideElement.addClass('active');
            }
        });
    });
    // 배너 슬라이드
    $(document).ready(function(){
        $('.banner-slider > ul').bxSlider({
            auto: true,
            autoControls: true,
            autoControlsCombine: true,
            controls: false,
            touchEnabled : false,
            infiniteLoop: true
        });
    });
    setTimeout(function(){
        $('.main-slider, .banner-slider').addClass('action');
    }, 100);
})(jQuery);