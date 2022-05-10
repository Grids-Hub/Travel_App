jQuery(function($){
    $(document).ready(function () {
        $('.first-button').on('click', function () {
            $('.animated-icon1').toggleClass('open');
        });
    });
    $('#demo').find('.carousel-item').each(function() {
        var imgContainer = $(this);
        bkImg = imgContainer.find('img').attr('src');
        imgContainer.css("background-image", 'url("' + bkImg + '")');
      });
})
