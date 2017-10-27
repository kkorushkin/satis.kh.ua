//force to add dynamic data to contact form7
function addDynamicToCF7(d,dt,i){
    var input = $('input[name="' + i + '"]');
    setTimeout(function(){
        input.val(d);
        $('#' + dt).find('span').text(d);
    },300);
}
// check whenever .blockz is seen on the screen, css it's href
function isVisible( row, container ){
    var elementTop = $(row).offset().top,
        elementHeight = $(row).height(),
        containerTop = container.scrollTop(),
        containerHeight = container.height();
    return ((((elementTop - containerTop) + elementHeight) > 0) && ((elementTop - containerTop) < containerHeight/2));
}
(function($){"use strict";

    var $blocks = $('.blockz');
    //$blocks.css('min-height',$(window).height() + 'px');

    //to-top button appearance
    var r = $("#to-top");
    $(document).scroll(function() {
        if($(document).scrollTop() > 50) r.fadeIn();
        if($(document).scrollTop() < 50) r.fadeOut();
        //
        $blocks.each(function(){
            $('a[href=#'+ $(this).attr('id') +']').removeClass('active-nav');
            if(isVisible($(this), $(window))){
                $('a[href=#'+ $(this).attr('id') +']').addClass('active-nav');
            }
        });
    });
    r.on('click', function(event){
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $('html').offset().top
        }, 500);
    });
    //плавно к якорю
    $('a:not(.emodal-close)').click(function(){
        var anch = $(this).data('to');
        //var correction = ($('header').hasClass('header-fixed'))? 0: 50;
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href')).offset().top //- correction
        }, 1000, function(){
            $('.section').removeClass('active');
            $('#'+anch).addClass('active');
        });
        return false;
    });
    // fullPage.js init
    if($(window).width() > 888){

        /*$('#fullpage').fullpage({
            scrollBar:true
        });*/

        new WOW().init();
    }
    //
    $('.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
    //
    $(document).bind('DOMSubtreeModified',function(){
        if($('.wpcf7-mail-sent-ok').length > 0){
            setTimeout(function(){
                $('.wpcf7-form').reset();
            },5000);

        }
    });
    //
    setTimeout(function(){
        $('#imageGallery').lightSlider({
            gallery:true,
            item:1,
            loop:true,
            thumbItem:3,
            slideMargin:0,
            enableDrag: false,
            currentPagerPosition:'left',
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:1,
                        slideMove:1,
                        slideMargin:6
                    }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:1,
                        slideMove:1
                    }
                }
            ]
        });
    },1000);
    //
    $('.wpcf7-response-output').on('click',function(){
        $(this).hide();
    });
})(jQuery);
