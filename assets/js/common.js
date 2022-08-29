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
    
    // header scroll
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 0) {
            $('body').addClass('scrolled');
        } else {
            $('body').removeClass('scrolled');
        }
    });
    
    // header gnb menu click event
    var $link = $('#gnb > ul > li > a, .nav-content ul > li > a');
    
    $link.on('click',function(e){
        var target = $($(this).attr('href')); 
        $('html, body').animate({
            scrollTop: target.offset().top - 75
        }, 400);
        $(this).parent().addClass('active');
        $('body').removeClass('opened');
        e.preventDefault();
    });
    
    $(document).on('click', '.home', function(){
        $('html, body').animate({
            scrollTop: 0
        }, 400);
        $('body').removeClass('opened');
    });
})(jQuery);