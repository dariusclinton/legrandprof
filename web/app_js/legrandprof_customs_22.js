/*------------------------------------------------------------------
 * Author:         Legrandprof
 * URL:            http://legrandprof.com
 * Version:        1.0.0
 -------------------------------------------------------------------*/

$(function () {

    "use strict";


    /**
     * introLoader - Preloader
     */
    /*$("#introLoader").introLoader({
     animation: {
     name: 'gifLoader',
     options: {
     ease: "easeInOutCirc",
     style: 'dark bubble',
     delayBefore: 500,
     delayAfter: 0,
     exitTime: 300
     }
     }
     });
     */


    /**
     * Sticky Header

     $(".container-wrapper").waypoint(function () {
        $(".navbar").toggleClass("navbar-sticky-function");
        $(".navbar").toggleClass("navbar-sticky");
        return false;
    }, {offset: "-20px"});



     /**
     * Main Menu Slide Down Effect
     */

    // Mouse-enter dropdown
    $('#navbar li').on("mouseenter", function () {
        $(this).find('ul').first().stop(true, true).delay(350).slideDown(500, 'easeInOutQuad');
    });

    // Mouse-leave dropdown
    $('#navbar li').on("mouseleave", function () {
        $(this).find('ul').first().stop(true, true).delay(100).slideUp(150, 'easeInOutQuad');
    });

    /**
     * Header Dashboard slide Down
     */

    // Mouse-enter dropdown
    $('#dash li').on("mouseenter", function () {
        $(this).find('ul').first().stop(true, true).delay(150).slideDown(300, 'easeInOutQuad');
    });

    // Mouse-leave dropdown
    $('#dash li').on("mouseleave", function () {
        $(this).find('ul').first().stop(true, true).delay(100).slideUp(150, 'easeInOutQuad');
    });


    /**
     * Effect to Bootstrap Dropdown
     */
    $('.bt-dropdown-click').on('show.bs.dropdown', function (e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(500, 'easeInOutQuad');
    });
    $('.bt-dropdown-click').on('hide.bs.dropdown', function (e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(250, 'easeInOutQuad');
    });


    /**
     * Icon Change on Collapse
     */
    $('.collapse.in').prev('.panel-heading').addClass('active');
    $('.bootstarp-accordion, .bootstarp-toggle').on('show.bs.collapse', function (a) {
        $(a.target).prev('.panel-heading').addClass('active');
    })
        .on('hide.bs.collapse', function (a) {
            $(a.target).prev('.panel-heading').removeClass('active');
        });


    /**
     * Slicknav - a Mobile Menu
     */
    $('#responsive-menu').slicknav({
        duration: 300,
        easingOpen: 'easeInExpo',
        easingClose: 'easeOutExpo',
        closedSymbol: '<i class="fa fa-plus"></i>',
        openedSymbol: '<i class="fa fa-minus"></i>',
        prependTo: '#slicknav-mobile',
        allowParentLinks: true,
        label: ""
    });


    /**
     * Smooth scroll to anchor
     */
    $('a.anchor[href*=#]:not([href=#])').on("click", function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: (target.offset().top - 120) // 70px offset for navbar menu
                }, 1000);
                return false;
            }
        }
    });


    /**
     * Sign-in Modal
     */
    var $formLogin = $('#login-form');
    var $formLost = $('#lost-form');
    var $formRegister = $('#register-form');
    var $divForms = $('#modal-login-form-wrapper');
    var $modalAnimateTime = 300;

    $('#login_register_btn').on("click", function () {
        modalAnimate($formLogin, $formRegister)
    });
    $('#register_login_btn').on("click", function () {
        modalAnimate($formRegister, $formLogin);
    });
    $('#login_lost_btn').on("click", function () {
        modalAnimate($formLogin, $formLost);
    });
    $('#lost_login_btn').on("click", function () {
        modalAnimate($formLost, $formLogin);
    });
    $('#lost_register_btn').on("click", function () {
        modalAnimate($formLost, $formRegister);
    });

    function modalAnimate($oldForm, $newForm) {
        var $oldH = $oldForm.height();
        var $newH = $newForm.height();
        $divForms.css("height", $oldH);
        $oldForm.fadeToggle($modalAnimateTime, function () {
            $divForms.animate({height: $newH}, $modalAnimateTime, function () {
                $newForm.fadeToggle($modalAnimateTime);
            });
        });
    }


    /**
     * select2 - custom select

     $(".select2-single").select2({allowClear: true});
     $(".select2-no-search").select2({dropdownCssClass: 'select2-no-search', allowClear: true});
     $(".select2-multi").select2({});



     /**
     * Show more-less button
     */
    $('.btn-more-less').on("click", function () {
        $(this).text(function (i, old) {
            return old == 'Show more' ? 'Show less' : 'Show more';
        });
    });


    /**
     *  Arrow for Menu has sub-menu
     */
    $(".navbar-arrow > ul > li").has("ul").children("a").append("<i class='arrow-indicator fa fa-angle-down'></i>");
    $(".navbar-arrow ul ul > li").has("ul").children("a").append("<i class='arrow-indicator fa fa-angle-right'></i>");


    /**
     *  Placeholder
     */
    $("input, textarea").placeholder();


    /**
     * Bootstrap tooltips
     */
    $('[data-toggle="tooltip"]').tooltip();


    /**
     * responsivegrid - layout grid
     */
    $('.grid').responsivegrid({
        gutter: '0',
        itemSelector: '.grid-item',
        'breakpoints': {
            'desktop': {
                'range': '1200-',
                'options': {
                    'column': 20,
                }
            },
            'tablet-landscape': {
                'range': '1000-1200',
                'options': {
                    'column': 20,
                }
            },
            'tablet-portrate': {
                'range': '767-1000',
                'options': {
                    'column': 20,
                }
            },
            'mobile-landscape': {
                'range': '-767',
                'options': {
                    'column': 10,
                }
            },
            'mobile-portrate': {
                'range': '-479',
                'options': {
                    'column': 10,
                }
            },
        }
    });


    /**
     * Payment Option
     */
    $("div.payment-option-form").hide();
    $("input[name$='payments']").on("click", function () {
        var test = $(this).val();
        $("div.payment-option-form").hide();
        $("#" + test).show();
    });


    /**
     * Raty - Rating Star
     */
    $.fn.raty.defaults.path = 'images/raty';

    // Default size star 
    $('.star-rating').raty({
        round: {down: .2, full: .6, up: .8},
        half: true,
        space: false,
        score: function () {
            return $(this).attr('data-rating-score');
        }
    });

    // Read onlu default size star
    $('.star-rating-read-only').raty({
        readOnly: true,
        round: {down: .2, full: .6, up: .8},
        half: true,
        space: false,
        score: function () {
            return $(this).attr('data-rating-score');
        }
    });

    // Smaller size star
    $('.star-rating-12px').raty({
        path: 'images/raty',
        starHalf: 'star-half-sm.png',
        starOff: 'star-off-sm.png',
        starOn: 'star-on-sm.png',
        readOnly: true,
        round: {down: .2, full: .6, up: .8},
        half: true,
        space: false,
        score: function () {
            return $(this).attr('data-rating-score');
        }
    });

    // White color default size star
    $('.star-rating-white').raty({
        path: 'images/raty',
        starHalf: 'star-half-white.png',
        starOff: 'star-off-white.png',
        starOn: 'star-on-white.png',
        readOnly: true,
        round: {down: .2, full: .6, up: .8},
        half: true,
        space: false,
        score: function () {
            return $(this).attr('data-rating-score');
        }
    });


    /**
     * readmore - read more/less

     $('.read-more-div').readmore({
        speed: 220,
        moreLink: '<a href="#" class="read-more-div-open">Read More</a>',
        lessLink: '<a href="#" class="read-more-div-close">Read less</a>',
        collapsedHeight: 45,
        heightMargin: 25
    });



     /**
     * ionRangeSlider - range slider
     */

    // Price Range Slider
    $("#price_range").ionRangeSlider({
        type: "double",
        grid: false,
        min: 0,
        max: 100000,
        from: 0,
        to: 100000,
        postfix: 'Fcfa',
        interval: 100,

    });

    // Star Range Slider
    $("#star_range").ionRangeSlider({
        type: "double",
        grid: false,
        from: 1,
        to: 2,
        values: [
            "<i class='fa fa-star'></i>",
            "<i class='fa fa-star'></i> <i class='fa fa-star'></i>",
            "<i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i>",
            "<i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i>",
            "<i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i>"
        ]
    });


    /**
     * slick
     */
    $('.gallery-slideshow').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 500,
        arrows: true,
        fade: true,
        asNavFor: '.gallery-nav'
    });
    $('.gallery-nav').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        speed: 500,
        asNavFor: '.gallery-slideshow',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        infinite: true,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 7,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 5,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 5,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                }
            }
        ]
    });


    /**
     * Back To Top
     */
    $(window).scroll(function () {
        if ($(window).scrollTop() > 500) {
            $("#back-to-top").fadeIn(200);
        } else {
            $("#back-to-top").fadeOut(200);
        }
    });
    $('#back-to-top').on("click", function () {
        $('html, body').animate({scrollTop: 0}, '800');
        return false;
    });


    /**
     * Instagram
     */
    function createPhotoElement(photo) {
        var innerHtml = $('<img>')
            .addClass('instagram-image')
            .attr('src', photo.images.thumbnail.url);

        innerHtml = $('<a>')
            .attr('target', '_blank')
            .attr('href', photo.link)
            .append(innerHtml);

        return $('<div>')
            .addClass('instagram-placeholder')
            .attr('id', photo.id)
            .append(innerHtml);
    }

//    function didLoadInstagram(event, response) {
//        var that = this;
//        $.each(response.data, function (i, photo) {
//            $(that).append(createPhotoElement(photo));
//        });
//    }

//    $(document).ready(function () {
//
//        $('#instagram').on('didLoadInstagram', didLoadInstagram);
//        $('#instagram').instagram({
//            count: 20,
//            userId: 3301700665,
//            accessToken: '3301700665.4445ec5.c3ba39ad7828412286c1563cac3f594b'
//        });
//
//    });

    $("#btn-leave-avis").click(function () {
//        alert('test '+$("#leave-avis").hasClass('test'));

        if ($("#leave-avis").hasClass('test')) {
            $("#leave-avis").slideDown('500');
            $("#leave-avis-text").text("Annuler");
            $("#leave-avis").removeClass('test');

        } else {

            $("#leave-avis").slideUp(500);
            $("#leave-avis").addClass('test');
            $("#leave-avis-text").text("Laisser un avis");

        }
    });

    $("#confirmation-avis").slideDown('500');

    // /* for paiement frequence choice */
    // $("#paiement-frequence").change(function (event) {
    //     event.preventDefault();
    //     $("#paiementForm").submit();
    // });

    $("#lieuDeCours").on('change', function (event) {
        event.preventDefault();
        var lieu = $("#lieuDeCours option:selected").val();

        if (lieu == "Chez le prof") {
            var prof_ville = $("#prof_ville").val();

            $("#ville_detail").attr("disabled", "disabled");
            $("#ville_detail").removeAttr("required");
            $("#quartier_detail").attr("disabled", "disabled");
            $("#quartier_detail").removeAttr("required");

            $('#ville_detail').append('<option value="' + prof_ville + '" selected>' + prof_ville + '</option>');
        }
        else {
            $("#ville_detail").removeAttr("disabled");
            $("#quartier_detail").removeAttr("disabled");
        }
    });

    $("#form-search-course-city-submit").click(function (event) {
        event.preventDefault();
        var intitule = $("#cours_search_course_city_intitule").val();
        var city = $("#cours_search_course_city_quartier option:selected").val();

        if (intitule == null || intitule == "" || city == null || city == "") {
            $("#form-search-course-city-error").attr("display:none");
            $("#form-search-course-city-error").fadeIn(3000);
        }
        else {
            $("#cours_search_course_city").submit();
        }
    });

    // definir les valeurs par défaut pour la recherche
    // pour selectionner par defaut l'option dont la ville est définie
    $("#cours_search_course_city_quartier option").each(function () {
        if ($(this).val() != "" && $(this).val() == $("#search_city_name").val()) {
            $(this).attr("selected", "selected");
        }
    });
    $("#cours_search_course_city_intitule").val($("#search_course_intitule").val());
    // alert($("#search_city_name").val());

    // refine search default value
    var r_quarter = $("#refine_search_default_quarter").val();
    if(r_quarter != ""){
        $("#refine_form_quartier option").each(function () {
            if ($(this).val() != "" && $(this).text() == r_quarter) {
                $(this).attr("selected", "selected");
            }
        });
    }

    var r_minPrice = $("#refine_search_default_min_price").val();
    var r_maxPrice = $("#refine_search_default_max_price").val();
    if (r_minPrice != "" && r_maxPrice != ""){
        $("#refine_form_min_price").val(r_minPrice);
        $("#refine_form_max_price").val(r_maxPrice);
    }

    // for custom select box
    $('.selectpicker').selectpicker({
        style: 'btn-default',
        size: 7
    });
});
