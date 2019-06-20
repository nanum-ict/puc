(function($){
    // gnb 관련
    $(document).on('click','#header .btn-nav', function(){
        $('body').toggleClass('nav-opened');
    });
    $(document).on('click','#gnb .backdrop', function(){
        $('body').removeClass('nav-opened');
    });
    $(document).on('click', '.nav-opened .nav-body > ul > li > a', function(){
        if($(this).parent().hasClass('active')){
            $(this).parent().removeClass('active');
        } else {
            $(this).parent().addClass('active').siblings().removeClass('active');
        }
    });

    // 1200 nav class 제거
    $(window).on('load resize', function(){
        if ($('#gnb').width() == 240) {
            $('#gnb').addClass('responsive-gnb');
            $('body').removeClass('nav-opened');
            $('.nav-body > ul > li').removeClass('active');
        } else {
            $('#gnb').removeClass('responsive-gnb');
        }
    });

    // 1200 gnb 관련
    $(document).on('mouseenter','.responsive-gnb .nav-body > ul > li > a', function(){
        $('.responsive-gnb').addClass('skip-scroll');
        if($(this).parent().hasClass('active')){
            $(this).parent().removeClass('active');
        } else {
            $(this).parent().addClass('active').siblings().removeClass('active');
        }
    });
    $(document).on('mouseleave','.responsive-gnb .nav-body > ul > li', function(){
        $(this).removeClass('active');
        $('.responsive-gnb').removeClass('skip-scroll');
    });
    // gnb scroll
    $(window).on("load",function(){
        $("#gnb").mCustomScrollbar({
            theme: 'minimal-dark'
        });
    });
    
})(jQuery);