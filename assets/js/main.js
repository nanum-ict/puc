(function($){
    // 메인 및 배너 슬라이드
    $(document).ready(function(){
        $('.main-slider, .banner-slider').bxSlider({
            auto: true,
            autoControls: true,
            autoControlsCombine: true,
            controls: false,
            infiniteLoop: true
        });
    });
    setTimeout(function(){
        $('.jumbotron, .banner-slider').addClass('action');
    }, 100);
    
})(jQuery);