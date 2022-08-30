(function($){
    // mobile nav 관련
    $(document).on('click', '.btn-nav', function(){
        $('body').addClass('opened');
        setTimeout(function(){
            $('#nav').addClass('active');
        }, 500);
    });
    $(document).on('click', '.btn-nav-close', function(){
        $('body').removeClass('opened');
    });
    
    
    // header gnb menu click event
    var $link = $('#gnb > ul > li > a, .nav-content ul > li > a');
    
    $link.on('click',function(e){
        var target = $($(this).attr('href')); 
        $('#gnb > ul > li').removeClass('active');
        target.parent().addClass('active');
        $('html, body').animate({
            scrollTop: target.offset().top - 75
        }, 400);
        $(this).parent().addClass('active');
        $('body').removeClass('opened');
        e.preventDefault();
    });
    
    // header scroll
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 0) {
            $('body').addClass('scrolled');
        } else {
            $('body').removeClass('scrolled');
            $link.parent().removeClass('active');
        }
    });
})(jQuery);