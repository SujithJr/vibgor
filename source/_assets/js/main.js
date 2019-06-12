// Import
import '../../../node_modules/jquery-viewport-checker/src/jquery.viewportchecker';

// JS

$(document).ready(function () {

    // var src = '../../assets/images/icon-2.png';
    // setTimeout(() => {
    //     $('.js-logo').attr('src', src);
    // }, 2000);
    // console.log($('.s-header').offset().top);
    

    // changePrint(1);

    // Printing Content Links
    $('.js-process-print-link .js-process-anchor').click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        // console.log($(this).attr('data-id'));
        var el = $(this).attr('data-id')
        changePrint(el);
    });
    
    // Press Content Links
    $('.js-process-press-link .js-process-anchor').click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        // console.log($(this).attr('data-id'));
        var el = $(this).attr('data-id')
        changePress(el);
    });

    // Design and Logo Content Links
    $('.js-process-design-link .js-process-anchor').click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        // console.log($(this).attr('data-id'));
        var el = $(this).attr('data-id')
        changeDesign(el);
    });
    
    // Packaging and Gift Content Links
    $('.js-process-pkg-link .js-process-anchor').click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        // console.log($(this).attr('data-id'));
        var el = $(this).attr('data-id')
        changePkg(el);
    });

    // Printing Content Height
    setContHeight($('.js-process-print-cont'), $('.js-process-print-cont div'));

    // Pre Press Content Height
    setContHeight($('.js-process-press-cont'), $('.js-process-press-cont div'));

    // Logo Design Content Height
    setContHeight($('.js-process-design-cont'), $('.js-process-design-cont div'));
    
    // Packaging and Gift Content Height
    setContHeight($('.js-process-pkg-cont'), $('.js-process-pkg-cont div'));

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

    var bannerHeight = $('.js-banner-content').height();
    $('.js-stripe').height(bannerHeight + 40);

    // $(window).scroll(function() {
    //     var scrollAbove = $(window).scrollTop();
    //     moveBanner(scrollAbove);
    // });
    // $('.l-main').on('mousewheel', function(e) {
    //     e.preventDefault();
    // });

});

function changePrint(show) {

    $('.js-process-print-link li').removeClass('is-active');
    $('.js-process-print div').removeClass('is-shown');
    $('.js-process-print-cont div').removeClass('is-shown');

    $('.js-process-print-link li:nth-child(' + show + ')').addClass('is-active');
    $('.js-process-print div:nth-child(' + show + ')').addClass('is-shown');
    $('.js-process-print-cont div:nth-child(' + show + ')').addClass('is-shown');

}

function changePress(show) {

    $('.js-process-press-link li').removeClass('is-active');
    $('.js-process-press div').removeClass('is-shown');
    $('.js-process-press-cont div').removeClass('is-shown');

    $('.js-process-press-link li:nth-child(' + show + ')').addClass('is-active');
    $('.js-process-press div:nth-child(' + show + ')').addClass('is-shown');
    $('.js-process-press-cont div:nth-child(' + show + ')').addClass('is-shown');

}

function changeDesign(show) {

    $('.js-process-design-link li').removeClass('is-active');
    $('.js-process-design div').removeClass('is-shown');
    $('.js-process-design-cont div').removeClass('is-shown');

    $('.js-process-design-link li:nth-child(' + show + ')').addClass('is-active');
    $('.js-process-design div:nth-child(' + show + ')').addClass('is-shown');
    $('.js-process-design-cont div:nth-child(' + show + ')').addClass('is-shown');

}

function changePkg(show) {

    $('.js-process-pkg-link li').removeClass('is-active');
    $('.js-process-pkg div').removeClass('is-shown');
    $('.js-process-pkg-cont div').removeClass('is-shown');

    $('.js-process-pkg-link li:nth-child(' + show + ')').addClass('is-active');
    $('.js-process-pkg div:nth-child(' + show + ')').addClass('is-shown');
    $('.js-process-pkg-cont div:nth-child(' + show + ')').addClass('is-shown');

}

function setContHeight(el, tgt) {

    var contentData = tgt;
    var finalHeight = [];
    for (let i = 0; i < contentData.length; i++) {
        finalHeight.push($(contentData[i]).outerHeight());
    }
    el.height(Math.max(...finalHeight));
    $(contentData).outerHeight(Math.max(...finalHeight));

}

// function moveBanner(data) {
//     console.log('Scrolls', 'translateY(-' + data + 'px)');
//     // $('.js-banner').css('transform', function (data) {
//     //     return translateY(-data);
//     // });
//     $('.js-banner').css('transform', 'translateY(-' + data + 'px) translateZ(0)')
// }