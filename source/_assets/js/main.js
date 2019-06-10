// Import
import '../../../node_modules/jquery-viewport-checker/src/jquery.viewportchecker';

// JS

$(document).ready(function () {

    // var src = '../../assets/images/icon-2.png';
    // setTimeout(() => {
    //     $('.js-logo').attr('src', src);
    // }, 2000);

    $('.js-banner-content').viewportChecker({
        callbackFunction: function () {

            var timer = 0;
            var interval = 300;

            $('.js-banner-content .js-banner-items').each(function (index, value) {
                setTimeout(function () {
                    $(value).addClass('active');
                }, timer);
                timer += interval;
            });

        }
    });

    $('.js-stripe').viewportChecker({
        classToAdd: 'opacity-low',
        offset: 100
    });

    console.log($('.js-banner-content').height());
    var bannerHeight = $('.js-banner-content').height();
    $('.js-stripe').height(bannerHeight + 40);

    // $(window).scroll(function() {
    //     var scrollAbove = $(window).scrollTop();
    //     moveBanner(scrollAbove);
    // });

});

// function moveBanner(data) {
//     console.log('Scrolls', 'translateY(-' + data + 'px)');
//     // $('.js-banner').css('transform', function (data) {
//     //     return translateY(-data);
//     // });
//     $('.js-banner').css('transform', 'translateY(-' + data + 'px) translateZ(0)')
// }