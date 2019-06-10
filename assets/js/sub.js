(function($){
    // accordion
    $(document).on('click','.question', function(){
        if ($(this).parents('.item').hasClass('active')) {
            $(this).parents('.item').removeClass('active');
        } else {
            $('.item').removeClass('active');
            $(this).parents('.item').addClass('active');
        }
    });
    
    // body 관련 min-height
    /*
    $(window).on('load resize', function(){
        var $height = $('.sub-content').height();
        if($('body').width() > 1199) {
            $('html, body').css('min-height', $height);
        } else {
            $('html, body').css('min-height', '100%');
        }
    });
    */
})(jQuery);
