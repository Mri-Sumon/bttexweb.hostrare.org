    /*----------------------------------------
                        Preloader
    ------------------------------------------*/
    // $('.js-preloader').preloadinator({
    //     minTime: 2000,
    //     scroll: false

    // });

    $(document).ready(function() {
        /*----------------------------------------
                                Tooltip
        ------------------------------------------*/

        // $('[data-toggle="tooltip"]').tooltip();
        


        /*----------------------------------------
              Scroll to top
        ----------------------------------------*/
        function BackToTop() {
            $('.scrolltotop').on('click', function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });

            $(document).scroll(function() {
                var y = $(this).scrollTop();
                if (y > 600) {
                    $('.scrolltotop').fadeIn();
                } else {
                    $('.scrolltotop').fadeOut();
                }
            });
            $(document).scroll(function() {
                var m = $(this).scrollTop();
                if (m > 400) {
                    $('.chat-popup').fadeIn();
                } else {
                    $('.chat-popup').fadeOut();
                }
            });
        }
        BackToTop();

        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 100) {
                $(".header-top-section").addClass("header-top-none");
            } else {
                $(".header-top-section").removeClass("header-top-none");
            }
        });
        /* -------------------------------------
                   Responsive menu
           -------------------------------------- */
        var siteMenuClone = function() {

            $('.js-clone-nav').each(function() {
                var $this = $(this);
                $this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
            });

            setTimeout(function() {

                var counter = 0;
                $('.site-mobile-menu .has-children').each(function() {
                    var $this = $(this);

                    $this.prepend('<span class="arrow-collapse collapsed">');

                    $this.find('.arrow-collapse').attr({
                        'data-toggle': 'collapse',
                        'data-target': '#collapseItem' + counter,
                    });

                    $this.find('> ul').attr({
                        'class': 'collapse',
                        'id': 'collapseItem' + counter,
                    });

                    counter++;

                });

            }, 1000);

            $('body').on('click', '.js-menu-toggle', function(e) {
                var $this = $(this);
                e.preventDefault();

                if ($('body').hasClass('offcanvas-menu')) {
                    $('body').removeClass('offcanvas-menu');
                    $this.removeClass('active');
                } else {
                    $('body').addClass('offcanvas-menu');
                    $this.addClass('active');
                }
            })

        };
        siteMenuClone();

        /* ----------------------------------------
                     Hero slider 
        ------------------------------------------*/
        $(".hero_slider").owlCarousel({
            items: 1,
            nav: false,
            dot: true,
            autoplay: true,
            autoplayTimeout: 4500,
            loop: false,
            margin: 0,
            navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
            smartSpeed: 2000,
        });

        /*------------------------------------------
                         Product quantity
        --------------------------------------------*/

        var quantitiy = 0;
        $('.quantity-right-plus').on("click", function(e) {
            e.preventDefault();
            id = $(this).data('id');
            var quantity = parseInt($(this).parent().siblings("input.input-number").val()) + 1;
            $(this).parent().siblings("input.input-number").val(quantity);
            $('#'+id).val(quantity);
            rowindex = $(this).closest('tr').index();
            unit_price = $('table.cart-table tbody tr:nth-child(' + (rowindex + 1) + ')').find('.unit-price').text();
            total_price = quantity * unit_price;
            $('table.cart-table tbody tr:nth-child(' + (rowindex + 1) + ')').find('.total-price').text(total_price);

            subTotal = 0;
            $(".total-price").each(function() {
                subTotal += parseFloat($(this).text());
            });
            $(".cart-subtotal").text(subTotal);
        });
        $('.quantity-left-minus').on("click", function(e) {
            e.preventDefault();
            id = $(this).data('id');
            var quantity = parseInt($(this).parent().siblings("input.input-number").val());
            if (quantity > 0) {
                $(this).parent().siblings("input.input-number").val(--quantity);
                $('#'+id).val(quantity);
                rowindex = $(this).closest('tr').index();
                unit_price = $('table.cart-table tbody tr:nth-child(' + (rowindex + 1) + ')').find('.unit-price').text();
                total_price = quantity * unit_price;
                $('table.cart-table tbody tr:nth-child(' + (rowindex + 1) + ')').find('.total-price').text(total_price);

                subTotal = 0;
                $(".total-price").each(function() {
                    subTotal += parseFloat($(this).text());
                });
                $(".cart-subtotal").text(subTotal);
            }
        });
        /*------------------------------------------
                    Show/hide Panel
         --------------------------------------------*/
        $("#flip").click(function() {
            $("#panel").slideToggle("slow");
        });
        $(".filter_bar").click(function() {
            $(".sidebar_wrapper").slideToggle("slow");
        });

          /*------------------------------------------
                    Order status bar
         --------------------------------------------*/
         $('.order-tracking').on('click',function(){
                $(this).toggleClass('completed');
         });
        

        /*--------------------------------------------
                  Upload image
        ---------------------------------------------*/
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });


        /*---------------------------------------------
                     price range slider
         ---------------------------------------------*/
        /*$("#slider-range").slider({
            range: true,
            min: 0,
            max: 500,
            values: [75, 300],
            slide: function(event, ui) {
                $("#amount").val("৳ " + ui.values[0] + " - ৳ " + ui.values[1]);
            }
        });
        $("#amount").val("৳ " + $("#slider-range").slider("values", 0) +
            "  -  ৳ " + $("#slider-range").slider("values", 1));*/

        

        /*--------------------------------------------
                   Category menu Dropdown
                -------------------------------------*/
        $('.category-sub-menu li.has-sub a').on('click', function() {
            $(this).removeAttr('href');
            var element = $(this).parent('li');
            if (element.hasClass('open')) {
                element.removeClass('open');
                element.find('li').removeClass('open');
                element.find('ul').slideUp();
            } else {
                element.addClass('open');
                element.children('ul').slideDown();
                element.siblings('li').children('ul').slideUp();
                element.siblings('li').removeClass('open');
                element.siblings('li').find('li').removeClass('open');
                element.siblings('li').find('ul').slideUp();
            }
        });

        /*----------------------------------------
                   Nice select
        ----------------------------------------*/
        $('select').niceSelect();

        /*-----------------------------------------
            Slick Slider With Product Zoom
        ----------------------------------------------*/
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            margin: 5,
            focusOnSelect: true,
            nextArrow: '<i class="ion-ios-arrow-right slick-next"></i>',
            prevArrow: '<i class="ion-ios-arrow-left  slick-prev"></i>',

        });

        // ZOOM
        $('.ex1').zoom();

        // STYLE GRAB
        $('.ex2').zoom({
            on: 'grab'
        });

        // STYLE CLICK
        $('.ex3').zoom({
            on: 'click'
        });

        // STYLE TOGGLE
        $('.ex4').zoom({
            on: 'toggle'
        });


    });