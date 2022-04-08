new WOW().init();
jQuery(function($){
    $(document).ready(function () {
        $('.first-button').on('click', function () {
            $('.animated-icon1').toggleClass('open');
        });
    });
})