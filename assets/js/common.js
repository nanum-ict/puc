(function($){
    // mobile gnb 메뉴 메뉴관련
    $(document).on('click','.nav-open', function(){
        $('body').addClass('opened');
    });
    $(document).on('click','.nav-close, .backdrop', function(){
        $('body').removeClass('opened');
    });
    $(document).on('click', '.opened .nav-body > ul > li > a', function(){
        if($(this).parent().hasClass('active')){
            $(this).parent().removeClass('active');
        } else {
            $(this).parent().addClass('active').siblings().removeClass('active');
        }
    });
    
    // web gnb 메뉴 관련
    $(document).on('mouseenter', '.responsive-gnb .nav-body > ul > li > a', function(){
        $(this).parent().addClass('on')
        $('#gnb').addClass('open');
    });
    $(document).on('mouseleave', '.responsive-gnb .nav-body > ul > li', function(){
        $(this).removeClass('on');
        $('#gnb').removeClass('open');
    });

    // 1200 nav class 제거
    $(window).on('load resize', function(){
        if ($('body').width() > 1199) {
            $('body').removeClass('opened, hidden-screen');
            $('.nav-body > ul > li').removeClass('active');
            $('#gnb').addClass('responsive-gnb');
            $('.quick').removeClass('open');
        } else {
            $('#gnb').removeClass('responsive-gnb');
        }
    });
    
    // quick menu 관련
    $(document).on('click','.btn-quick', function(){
        if($('.quick').hasClass('open')){
            $('body').removeClass('hidden-screen');
            $('.quick').removeClass('open');
        } else {
            $('.quick').addClass('open');
            $('body').addClass('hidden-screen');
        }
    });
    $(document).on('click','.backdrop', function(){
        $('body').removeClass('hidden-screen');
        $('.quick').removeClass('open');
    });
    
})(jQuery);