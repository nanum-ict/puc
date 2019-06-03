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
})(jQuery);
