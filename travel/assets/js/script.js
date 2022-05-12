jQuery(function ($) {
    $(document).ready(function () {
        $('.first-button').on('click', function () {
            $('.animated-icon1').toggleClass('open');
        });
    });
    $('#demo').find('.carousel-item').each(function () {
        var imgContainer = $(this);
        bkImg = imgContainer.find('img').attr('src');
        imgContainer.css("background-image", 'url("' + bkImg + '")');
    });

    $(document).on('click', '.navbar-toggler', function(){
        $('.navbar-nav').addClass('bglist');
        if ($('#nav').find('.navbar-toggler').hasClass('collapsed')) {
            $('.navbar-nav').removeClass('bglist');
        }
    
     })
})//Backround Color on Navlist

// var navlist = document.querySelector('.navbar-toggler');
// window.addEventListener('click', function () {
//     if (window.outerWidth <= 1024) {
//     navlist.classList.add('bglist')
// } else {
//     navlist.classList.remove('bglist')
// }
// })