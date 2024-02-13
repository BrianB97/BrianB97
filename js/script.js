$(document).ready(function () {



    $(".mainMenu > li").mouseenter(function () {
        if ($(window).width() >= 1024) {
            if ($(this).children('div').length > 0) {
                $(this).addClass('open');
                $('header').addClass('open');
                $('body').addClass('open-submenu');
            }
        }
    });
    $(".mainMenu > li").mouseleave(function () {
        $(this).removeClass('open');
        $('header').removeClass('open');
        $('body').removeClass('open-submenu');
    });

    $('h3#more-about').click(function (e) {
       $(this).next().slideToggle(300);
       $(this).toggleClass('active');

    })
    $('.show-menu ').click(function (e) {
        $('body').addClass('open-mobile-menu');
        e.preventDefault()
    });
    $('.CloseMenu').click(function (e) {
        $('body').removeClass('open-mobile-menu');
        e.preventDefault();
    });
    $('.flash svg').click(function () {
        $('.flash').slideUp(500);
    });

    try {

        $('#background').mouseParallax({moveFactor: 5});
        $('#foreground').mouseParallax({moveFactor: 1});
    } catch (ex) {
    }

    //contact form
    var $input;

    function onInputFocus(event) {
        var $target = $(event.target);
        var $parent = $target.parent();
        $parent.addClass('input--filled');
    };

    function onInputBlur(event) {
        var $target = $(event.target);
        var $parent = $target.parent();

        if (event.target.value.trim() === '') {
            $parent.removeClass('input--filled');
        }
    };


    $input = $('.input-field');

    // in case there is any value already
    $input.each(function () {
        if ($input.val().trim() !== '') {
            var $parent = $input.parent();
            $parent.addClass('input--filled');
        }
    });

    $input.on('focus', onInputFocus);
    $input.on('blur', onInputBlur);


    //end contact form

    $('.video-overlay').on('click', function (ev) {
        $(this).parent().addClass('play');

        $("#video")[0].src += "&autoplay=1";
        ev.preventDefault();


    });


    $('.search').click(function (e) {
        $('body').toggleClass('open-search')
        e.preventDefault()
    })
    $('.featuredStories .Links ul').slick({
        slidesToShow: 1,
        dots: false,
        infinite: true,
        navigation: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
    });

    $(window).resize(function () {
        check_plugins();
    });
        check_plugins();
    function check_plugins() {
        if ($(window).width() <= 786-16 ) {
            if (!$('.homePage .resports-publications.Links ul,.homePage .services ul,.homePage .featuredStories ul').hasClass('slick-initialized')) {
                try {
                    $('.homePage .resports-publications.Links ul,.homePage .services ul,.homePage .featuredStories ul').slick({
//                        rtl: true,
                        slidesToShow: 1,
                        dots: true,
                        infinite: true,
                        navigation: false,
                        arrows: false,
                    });
                } catch (e) {

                }
            }


        } else {
            if ($('.homePage .resports-publications.Links ul,.homePage .services ul,.homePage .featuredStories ul').hasClass('slick-initialized'))
                $('.homePage .resports-publications.Links ul,.homePage .services ul,.homePage .featuredStories ul').slick('unslick');
        }


    }


});