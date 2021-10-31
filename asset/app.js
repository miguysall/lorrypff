jQuery(document).ready(function($) {
    // Header transparent
    $(window).scroll(function() {

        var wScroll = $(this).scrollTop();
        if (wScroll > 100) {
            $('.bgnav').removeClass('header-white');
        } else {
            $('.bgnav').addClass('header-white');
        }
    });
});