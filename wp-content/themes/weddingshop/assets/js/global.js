jQuery(document).ready(function ($) {
    "use strict";

    /** To Top button **/
    if ($('html').offset().top < 100) {
        $("#to-top").hide().addClass("off");
    }
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $("#to-top").removeClass("off").addClass("on");
        } else {
            $("#to-top").removeClass("on").addClass("off");
        }
    });
    $('#to-top .scroll-button').click(function () {
        $('body,html').animate({
            scrollTop: '0px'
        }, 1000);
        return false;
    });


    $(".menu-ftc a").click(function () {
        $('#primary-menu').slideToggle("fast");
    });

    /*** Brands Slider shortcode ***/
    $('.ftc-brand-slider-block.loading').each(function () {
        var margin = $(this).data('margin');
        var nav = ($(this).data('nav') == false) ? false : true;
        var auto_play = ($(this).data('auto_play') == false) ? false : true;
        var desksmall_items = $(this).data('desksmall_items');
        var tabletmini_items = $(this).data('tabletmini_items');
        var tablet_items = $(this).data('tablet_items');
        var mobile_items = $(this).data('mobile_items');
        var mobilesmall_items = $(this).data('mobilesmall_items');
        $(this).addClass('loaded').removeClass('loading');

        $(this).find('.brands').owlCarousel({
            loop: true
            , nav: nav
            , navText: [, ]
            , dots: false
            , navSpeed: 1000
            , rtl: $('body').hasClass('rtl')
            , margin: margin
            , autoplay: auto_play
            , autoplayTimeout: 5000
            , responsiveBaseElement: $('body')
            , responsiveRefreshRate: 400
            , responsive: {
                0: {
                    items: mobilesmall_items
                    , margin: 30
                },
                330: {
                    items: mobile_items
                    , margin: 30
                },
                430: {
                    items: tabletmini_items
                    , margin: 30
                },
                700: {
                    items: tablet_items
                    , margin: 30
                },
                1024: {
                    items: desksmall_items
                }
            }
        });
    });


    /*** Blog Shortcode ***/
    $('.ftc-sb-blogs').each(function () {
        var margin = $(this).data('margin');
        var columns = $(this).data('columns');
        var nav = $(this).data('nav') == 1;
        var auto_play = $(this).data('auto_play') == 1;
        var slider = $(this).data('slider') == 1;
        var desksmall_items = $(this).data('desksmall_items');
        var tabletmini_items = $(this).data('tabletmini_items');
        var tablet_items = $(this).data('tablet_items');
        var mobile_items = $(this).data('mobile_items');
        var mobilesmall_items = $(this).data('mobilesmall_items');

        if (slider) {
            $(this).addClass('loaded').removeClass('loading');
            $(this).find('.meta-slider > .blogs').owlCarousel({
                loop: true
                , nav: nav
                , dots: false
                , navSpeed: 1000
                , navText: [, ]
                , rtl: $('body').hasClass('rtl')
                , margin: margin
                , autoplay: auto_play
                , autoplayTimeout: 5000
                , autoplaySpeed: 1000
                , responsiveBaseElement: $('body')
                , responsiveRefreshRate: 400
                , responsive: {
                    0: {
                        items: mobilesmall_items
                    },
                    480: {
                        items: mobile_items
                    },
                    640: {
                        items: tabletmini_items
                    },
                    768: {
                        items: tablet_items
                    },
                    991: {
                        items: desksmall_items
                    },
                    1199: {
                        items: columns
                    }
                }
            });
        }

    });

    /*** Fix min-height of Visual Composer's tab ***/
    $(window).bind('load resize', function () {
        ftc_update_tab_min_height();
    });

    $('.vc_tta-tabs .vc_tta-tabs-list .vc_tta-tab').bind('click', function () {
        ftc_update_tab_min_height();
    });

    function ftc_update_tab_min_height() {
        setTimeout(function () {
            $('.vc_tta-tabs .vc_tta-panels').each(function () {
                $(this).find('.vc_tta-panel').css('min-height', 0);
                var min_height = $(this).find('.vc_tta-panel.vc_active').height();
                $(this).find('.vc_tta-panel').css('min-height', min_height);
            });
        }, 800);
    }

    /*** Remove Hash Url ***/
    $('.vc_tta-tabs .vc_tta-tabs-list .vc_tta-tab a, .vc_tta-accordion .vc_tta-panel-title a').bind('click', function () {
        if (history.pushState) {
            setTimeout(function () {
                history.pushState(null, null, ' ');
            }, 0);
        }
    });

    /*** Counter ***/
    function ftc_counter(elements) {
        if (elements.length > 0) {
            var interval = setInterval(function () {
                elements.each(function (index, element) {
                    var day = 0;
                    var hour = 0;
                    var minute = 0;
                    var second = 0;

                    var delta = 0;
                    var time_day = 60 * 60 * 24;
                    var time_hour = 60 * 60;
                    var time_minute = 60;

                    var wrapper = $(element);

                    wrapper.find('.days .number-wrapper .number').each(function (i, e) {
                        day = parseInt($(e).text());
                    });
                    wrapper.find('.hours .number-wrapper .number').each(function (i, e) {
                        hour = parseInt($(e).text());
                    });
                    wrapper.find('.minutes .number-wrapper .number').each(function (i, e) {
                        minute = parseInt($(e).text());
                    });
                    wrapper.find('.seconds .number-wrapper .number').each(function (i, e) {
                        second = parseInt($(e).text());
                    });

                    if (day != 0 || hour != 0 || minute != 0 || second != 0) {
                        delta = (day * time_day) + (hour * time_hour) + (minute * time_minute) + second;
                        delta--;

                        day = Math.floor(delta / time_day);
                        delta -= day * time_day;

                        hour = Math.floor(delta / time_hour);
                        delta -= hour * time_hour;

                        minute = Math.floor(delta / time_minute);
                        delta -= minute * time_minute;

                        if (delta > 0) {
                            second = delta;
                        } else {
                            second = '0';
                        }

                        day = (day < 10) ? zeroise(day, 2) : day.toString();
                        hour = (hour < 10) ? zeroise(hour, 2) : hour.toString();
                        minute = (minute < 10) ? zeroise(minute, 2) : minute.toString();
                        second = (second < 10) ? zeroise(second, 2) : second.toString();

                        wrapper.find('.days .number-wrapper .number').each(function (i, e) {
                            $(e).text(day);
                        });

                        wrapper.find('.hours .number-wrapper .number').each(function (i, e) {
                            $(e).text(hour);
                        });

                        wrapper.find('.minutes .number-wrapper .number').each(function (i, e) {
                            $(e).text(minute);
                        });

                        wrapper.find('.seconds .number-wrapper .number').each(function (i, e) {
                            $(e).text(second);
                        });
                    }

                });
            }, 1000);
        }
    }

    ftc_counter($('.product .counter-wrapper, .ftc-countdown .counter-wrapper'));

    /*** Reload SoundClound Iframe ***/
    $(window).bind('load', function () {
        $('.owl-item .ftc-soundcloud iframe').each(function () {
            var iframe = $(this);
            var src = iframe.attr('src');
            iframe.attr('src', src);
        });
    });

    /*** Milestone ***/
    if (typeof $.fn.waypoint == 'function' && typeof $.fn.countTo == 'function') {
        $('.ftc-milestone').waypoint(function () {
            if (typeof this.disable == 'function') {
                this.disable();
                var element = $(this.element);
                var end_num = element.data('number');
            } else { /* Fix for old version of waypoint */
                var element = $(this);
                var end_num = element.data('number');
            }

            element.find('.number').countTo({
                from: 0
                , to: end_num
                , speed: 1500
                , refreshInterval: 30
            });
        }, {offset: '105%', triggerOnce: true});
    }

    /*** Button Popup ***/
    if (typeof $.fn.prettyPhoto == 'function') {
        $('.ftc-button.ftc-button-popup').prettyPhoto({
            theme: 'ftc-lightbox'
            , social_tools: false
            , show_title: false
            , default_width: 680
            , default_height: 315
            , deeplinking: false
            , changepicturecallback: function () {
                $('.pp_pic_holder.ftc-lightbox').addClass('loaded');
            }
        });
    }

    /*** Google Map ***/
    function ftc_gmap_initialize(map_content_obj, address, zoom, map_type, title) {
        var geocoder, map;
        geocoder = new google.maps.Geocoder();

        geocoder.geocode({'address': address}, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                var _ret_array = new Array(results[0].geometry.location.lat(), results[0].geometry.location.lng());
                map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map
                    , title: title
                    , position: results[0].geometry.location
                });
            }
        });

        var mapCanvas = map_content_obj.get(0);
        var mapOptions = {
            center: new google.maps.LatLng(44.5403, -78.5463)
            , zoom: zoom
            , mapTypeId: google.maps.MapTypeId[map_type]
            , scrollwheel: false
            , zoomControl: true
            , panControl: true
            , scaleControl: true
            , streetViewControl: false
            , overviewMapControl: true
            , disableDoubleClickZoom: false
        }
        map = new google.maps.Map(mapCanvas, mapOptions)
    }

    $(window).bind('load resize', function () {
        $('.google-map-container').each(function () {
            var element = $(this);
            var map_content = $(this).find('> div');
            var address = element.data('address');
            var zoom = element.data('zoom');
            var map_type = element.data('map_type');
            var title = element.data('title');
            ftc_gmap_initialize(map_content, address, zoom, map_type, title);
        });
    });

    /*** Product Slider shortcode ***/
    $('.ftc-product-slider').each(function () {
        var slider = $(this).data('slider') == 1;
        if (slider) {
            var columns = 5;
            var margin = 0;
            var nav = $(this).data('nav') == 1;
            var desksmall_items = $(this).data('desksmall_items');
            var tabletmini_items = $(this).data('tabletmini_items');
            var tablet_items = $(this).data('tablet_items');
            var mobile_items = $(this).data('mobile_items');
            var mobilesmall_items = $(this).data('mobilesmall_items');
            if ($(this).data('columns')) {
                columns = $(this).data('columns');
            }

            if ($(this).data('margin')) {
                margin = $(this).data('margin');
            }

            var _ftc_slider = {
                loop: true
                , nav: nav
                , navText: [, ]
                , dots: true
                , navSpeed: 1000
                , rtl: $('body').hasClass('rtl')
                , margin: margin
                , autoplayTimeout: 5000
                , responsiveBaseElement: $('body')
                , responsiveRefreshRate: 400
                , responsive: {
                    0: {
                        items: mobilesmall_items
                    },
                    300: {
                        items: mobilesmall_items
                    },
                    420: {
                        items: tabletmini_items
                        ,margin: 20
                    },
                    700: {
                        items: tablet_items
                    },
                    880: {
                        items: desksmall_items
                    },
                    1030: {
                        items: columns
                    }
                }
            };
            if (columns == 1) {
                _ftc_slider.responsive = {0: {items: 1}};
            }
            $(this).find('.products').owlCarousel(_ftc_slider);

        }
    });



    /* Related - Upsell - Crosssell products slider */
    $('.single-product .related .products, .single-product .upsells .products, .woocommerce .cross-sells .products').each(function () {
        var _this = $(this);
        if (_this.find('.product').length > 1) {
            _this.owlCarousel({
                loop: true
                , nav: true
                , navText: [, ]
                , dots: false
                , navSpeed: 1000
                , rtl: $('body').hasClass('rtl')
                , margin: 30
                , navRewind: false
                , responsiveBaseElement: _this
                , responsiveRefreshRate: 1000
                , responsive: {
                    0: {
                        items: 1
                    },
                    400: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    880: {
                        items: 4
                    }
                }
            });
        }
    });

    /* Custom WP Widget Categories Dropdown */
    $('.widget_categories > ul').each(function (index, ele) {
        var _this = $(ele);
        var icon_toggle_html = '<span class="icon-toggle"></span>';
        var ul_child = _this.find('ul.children');
        ul_child.hide();
        ul_child.closest('li').addClass('cat-parent');
        ul_child.before(icon_toggle_html);
    });

    $('.widget_categories span.icon-toggle').bind('click', function () {
        var parent_li = $(this).parent('li.cat-parent');
        if (!parent_li.hasClass('active')) {
            parent_li.find('ul.children:first').slideDown();
            parent_li.addClass('active');
        } else {
            parent_li.find('ul.children').slideUp();
            parent_li.removeClass('active');
            parent_li.find('li.cat-parent').removeClass('active');
        }
    });

    $('.widget_categories li.current-cat').parents('ul.children').siblings('.icon-toggle').trigger('click');

    /* Product Categories widget */
    $('.widget-container.ftc-product-categories-widget .icon-toggle').bind('click', function () {
        var parent_li = $(this).parent('li.cat-parent');
        if (!parent_li.hasClass('active')) {
            parent_li.addClass('active');
            parent_li.find('ul.children:first').slideDown();
        } else {
            parent_li.find('ul.children').slideUp();
            parent_li.removeClass('active');
            parent_li.find('li.cat-parent').removeClass('active');
        }
    });

    $('.widget-container.ftc-product-categories-widget').each(function () {
        var element = $(this);

        var parent_li = element.find('ul.children').parent('li');
        parent_li.addClass('cat-parent');

        element.find('li.current').parents('ul.children').siblings('.icon-toggle').trigger('click');
    });

    /* Product thumbnails slider */
    if ($('.single-product').length > 0) {
        /* Horizontal slider */
        var wrapper = $('.single-product .product:not(.vertical-thumbnail) .images-thumbnails .thumbnails.loading');
        wrapper.find('.product-thumbnails').owlCarousel({
            loop: true
            , nav: true
            , navText: [, ]
            , dots: false
            , navSpeed: 1000
            , rtl: $('body').hasClass('rtl')
            , margin: 10
            , navRewind: false
            , autoplay: true
            , autoplayHoverPause: true
            , autoplaySpeed: 1000
            , responsiveBaseElement: wrapper
            , responsiveRefreshRate: 1000
            , responsive: {
                0: {
                    items: 1
                },
                100: {
                    items: 2
                },
                200: {
                    items: 3
                }
            }
            , onInitialized: function () {
                wrapper.addClass('loaded').removeClass('loading');
            }
        });

        /* Vertical slider */
        var wrapper = $('.single-product .product.vertical-thumbnail .images-thumbnails .thumbnails.loading');

        if (wrapper.length > 0 && typeof $.fn.carouFredSel == 'function') {
            var items = 4;
            if ($('#left-sidebar').length > 0 || $('#right-sidebar').length > 0) {
                items = 3;
            }
            if ($('#left-sidebar').length > 0 && $('#right-sidebar').length > 0) {
                items = 4;
            }

            var _slider_data = {
                items: items
                , direction: 'up'
                , width: 'auto'
                , height: '150px'
                , infinite: true
                , prev: wrapper.find('.owl-prev').selector
                , next: wrapper.find('.owl-next').selector
                , auto: {
                    play: true
                    , timeoutDuration: 5000
                    , duration: 800
                    , delay: 3000
                    , items: 1
                    , pauseOnHover: true
                }
                , scroll: {
                    items: 1
                }
                , swipe: {
                    onTouch: true
                    , onMouse: true
                }
                , onCreate: function () {
                    wrapper.addClass('loaded').removeClass('loading');
                }
            };

            wrapper.find('.product-thumbnails').carouFredSel(_slider_data);

            $(window).bind('load', function () {
                $(window).trigger('resize');
            });

            $(window).bind('resize orientationchange', $.debounce(250, function () {
                if ($(window).width() < 420) {
                    _slider_data.items = 2;
                } else if ($(window).width() < 500) {
                    _slider_data.items = 3;
                } else if ($(window).width() < 768) {
                    _slider_data.items = 4;
                } else {
                    _slider_data.items = items;
                }
                wrapper.find('.product-thumbnails').trigger('configuration', _slider_data);
            }));
        }
    }
/* Product Widget sidebar */
    $('.widget-container .ftc-products-widget-wrapper.ftc-slider').each(function () {
        var element = $(this);
        var show_nav = element.data('show_nav') == 1;
        var auto_play = element.data('auto_play') == 1;
        var columns = $(this).data('columns');
        var margin = $(this).data('margin');

        element.owlCarousel({
            loop: true
            , items: 1
            , nav: show_nav
            , navText: [, ]
            , dots: false
            , navSpeed: 1000
            , slideBy: 1
            , margin: margin
            , rtl: $('body').hasClass('rtl')
            , navRewind: false
            , autoplay: auto_play
            , autoplayTimeout: 5000
            , autoplayHoverPause: true
            , autoplaySpeed: false
            , mouseDrag: true
            , touchDrag: true
            , responsiveRefreshRate: 1000
            , responsive: {/* Fix for mobile */
                0: {
                    items: columns
                }
            }
            , onInitialized: function () {
                element.addClass('loaded').removeClass('loading');
            }
        });
    });

    /* Product Widget */
    $('.ftc-products-widget-wrapper.ftc-slider').each(function () {
        var element = $(this);
        var show_nav = element.data('show_nav') == 1;
        var auto_play = element.data('auto_play') == 1;
        var columns = $(this).data('columns');
        var margin = $(this).data('margin');

        element.owlCarousel({
            loop: true
            , items: 1
            , nav: show_nav
            , navText: [, ]
            , dots: false
            , navSpeed: 1000
            , slideBy: 1
            , margin: margin
            , rtl: $('body').hasClass('rtl')
            , navRewind: false
            , autoplay: auto_play
            , autoplayTimeout: 5000
            , autoplayHoverPause: true
            , autoplaySpeed: false
            , mouseDrag: true
            , touchDrag: true
            , responsiveRefreshRate: 1000
            , responsive: {/* Fix for mobile */
                0: {
                    items: 1
                },
                450: {
                    items: 3
                },
                768: {
                    items: columns
                },
                1024: {
                    items: columns
                }
            }
            , onInitialized: function () {
                element.addClass('loaded').removeClass('loading');
            }
        });
    });
    
    
    

    $(document).on('click', '.plus, .minus', function () {

        // Get values
        var $qty = $(this).closest('.quantity').find('.qty'),
                currentVal = parseFloat($qty.val()),
                max = parseFloat($qty.attr('max')),
                min = parseFloat($qty.attr('min')),
                step = $qty.attr('step');

        // Format values
        if (!currentVal || currentVal === '' || currentVal === 'NaN')
            currentVal = 0;
        if (max === '' || max === 'NaN')
            max = '';
        if (min === '' || min === 'NaN')
            min = 0;
        if (step === 'any' || step === '' || step === undefined || parseFloat(step) === 'NaN')
            step = 1;

        // Change the value
        if ($(this).is('.plus')) {

            if (max && (max == currentVal || currentVal > max)) {
                $qty.val(max);
            } else {
                $qty.val(currentVal + parseFloat(step));
            }

        } else {

            if (min && (min == currentVal || currentVal < min)) {
                $qty.val(min);
            } else if (currentVal > 0) {
                $qty.val(currentVal - parseFloat(step));
            }

        }

        // Trigger change event
        $qty.trigger('change');

    });

    $(window).bind('load', function () {
        $('img.ftc-lazy-load').bind('load', function () {
            $(this).parents('.lazy-loading').removeClass('lazy-loading').addClass('lazy-loaded');
        });

        $('img.ftc-lazy-load:not(.product-image-back):not(.ftc_thumb_list_hover)').each(function () {
            if ($(this).data('src')) {
                $(this).attr('src', $(this).data('src'));
            }
        });

        /* Load back image after */
        $('img.ftc-lazy-load.product-image-back').each(function () {
            if ($(this).data('src')) {
                $(this).attr('src', $(this).data('src'));
            }
        });
    });

    /** Quickshop **/
    ftc_quickshop_handle();


    /** Wishlist **/
    $('body').bind('added_to_wishlist', function () {
        ftc_update_tini_wishlist();
        $('.yith-wcwl-wishlistaddedbrowse.show, .yith-wcwl-wishlistexistsbrowse.show').closest('.yith-wcwl-add-to-wishlist').addClass('added');
    });

    $(document).on('click', '#yith-wcwl-form table tbody tr td a.remove, #yith-wcwl-form table tbody tr td a.add_to_cart_button', function () {
        var old_num_product = $('#yith-wcwl-form table tbody tr[id^="yith-wcwl-row"]').length;
        var count = 1;
        var time_interval = setInterval(function () {
            count++;
            var new_num_product = $('#yith-wcwl-form table tbody tr[id^="yith-wcwl-row"]').length;
            if (old_num_product != new_num_product || count == 20) {
                clearInterval(time_interval);
                ftc_update_tini_wishlist();
            }
        }, 500);
    });

    /** Compare **/
    setTimeout(function () {
        ftc_compare_change_scroll_bar();
    }, 1000);

    /*** Set Cloud Zoom ***/
    ftc_set_cloud_zoom();

    if ($('.cloud-zoom, .cloud-zoom-gallery').length > 0) {
        $('form.variations_form').live('found_variation', function (event, variation) {
            $('.cloud-zoom, .cloud-zoom-gallery').CloudZoom({});
        }).live('reset_image', function () {
            $('.cloud-zoom, .cloud-zoom-gallery').CloudZoom({});
        });
    }

    /*** Product Stock - Variable Product ***/
    $('form.variations_form').live('found_variation', function (event, variation) {
        var wrapper = $(this).parents('.summary');
        if (wrapper.find('.single_variation .stock').length > 0) {
            var stock_html = wrapper.find('.single_variation .stock').html();
            var classes = '';
            if (wrapper.find('.single_variation .stock').hasClass('in-stock')) {
                classes = 'in-stock';
            }
            if (wrapper.find('.single_variation .stock').hasClass('out-of-stock')) {
                classes = 'out-of-stock';
            }
            wrapper.find('p.availability span').html(stock_html);
            wrapper.find('p.availability').removeClass('in-stock out-of-stock').addClass(classes);
        } else {
            var stock_html_original = wrapper.find('p.availability').data('original');
            var classes = wrapper.find('p.availability').data('class');
            if (classes == '') {
                classes = 'in-stock';
            }
            wrapper.find('p.availability span').html(stock_html_original);
            wrapper.find('p.availability').removeClass('in-stock out-of-stock').addClass(classes);
        }
    }).live('reset_image', function () {
        var wrapper = $(this).parents('.summary');
        var stock_html_original = wrapper.find('p.availability').data('original');
        var classes = wrapper.find('p.availability').data('class');
        if (classes == '') {
            classes = 'in-stock';
        }
        wrapper.find('p.availability span').html(stock_html_original);
        wrapper.find('p.availability').removeClass('in-stock out-of-stock').addClass(classes);
    });

    /*** Custom Orderby on Product Page ***/
    $('form.woocommerce-ordering ul.orderby ul a').bind('click', function (e) {
        e.preventDefault();
        if ($(this).hasClass('current')) {
            return;
        }
        var form = $(this).closest('form.woocommerce-ordering');
        var data = $(this).attr('data-orderby');
        form.find('select.orderby').val(data);
        form.submit();
    });

    /*** Select2 - Search by Category ***/
    if (typeof $.fn.select2 == 'function') {
        $('.ftc-search-by-category select.select-category').select2();

        var MutationObserver = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;

        $.fn.attrchange = function (callback) {
            if (MutationObserver) {
                var options = {
                    subtree: false,
                    attributes: true
                };

                var observer = new MutationObserver(function (mutations) {
                    mutations.forEach(function (e) {
                        callback.call(e.target, e.attributeName);
                    });
                });

                return this.each(function () {
                    observer.observe(this, options);
                });
            }
        }

        $('.header-ftc .ftc-search-by-category .select2-container').attrchange(function (attrName) {
            if (attrName == 'class') {
                if ($(this).hasClass('select2-dropdown-open')) {
                    $('.select2-drop').addClass('category-dropdown');
                } else {
                    $('.select2-drop').removeClass('category-dropdown');
                }
            }
        });

        /** Fix for IE9 - IE10 **/
        if ($.browser.msie) {
            var ie_version = parseInt($.browser.version);
            if (ie_version == 9 || ie_version == 10) {
                var search_object = $('.header-ftc .ftc-search-by-category .select2-container').get(0);
                if (search_object != undefined && search_object.addEventListener) {
                    search_object.addEventListener('DOMAttrModified', ftc_search_by_category_change_attr, false);
                }
            }
        }

    }

    var on_touch = ftc_is_touch_device();

    /*** Widget toggle ***/
    $('.widget-title-wrapper a.block-control').bind('click', function (e) {
        e.preventDefault();
        $(this).parent().siblings().slideToggle(400);
        $(this).toggleClass('active');
    });

    ftc_widget_toggle();
    if (!on_touch) {
        $(window).bind('resize', $.throttle(250, function () {
            ftc_widget_toggle();
        }));
    }

    /* Compatible with YITH Infinite Scrolling */
    $(document).bind('yith_infs_added_elem', function () {
        ftc_quickshop_handle();
    });
});


/*** Quickshop Action ***/
function ftc_quickshop_handle() {
    jQuery('a.quickshop').prettyPhoto({
        deeplinking: false
        , opacity: 0.9
        , social_tools: false
        , default_width: 900
        , default_height: 450
        , theme: 'pp_woocommerce'
        , changepicturecallback: function () {
            jQuery('.pp_inline').find('form.variations_form').wc_variation_form();
            jQuery('.pp_inline').find('form.variations_form .variations select').change();
            jQuery('body').trigger('wc_fragments_loaded');

            jQuery('.pp_inline .variations_form').on('click', '.reset_variations', function () {
                jQuery(this).closest('.variations').find('.ftc-product-attribute .option').removeClass('selected');
            });

            jQuery('.pp_woocommerce').addClass('loaded');

            var _this = jQuery('.ftc-quickshop-wrapper .images-slider-wrapper');

            if (_this.find('.image-item').length <= 1) {
                return;
            }

            var owl = _this.find('.image-items').owlCarousel({
                items: 1
                , loop: true
                , nav: true
                , navText: [, ]
                , dots: false
                , navSpeed: 1000
                , slideBy: 1
                , rtl: jQuery('body').hasClass('rtl')
                , margin: 10
                , navRewind: false
                , autoplay: false
                , autoplayTimeout: 5000
                , autoplayHoverPause: false
                , autoplaySpeed: false
                , mouseDrag: true
                , touchDrag: true
                , responsiveBaseElement: _this
                , responsiveRefreshRate: 1000
                , onInitialized: function () {
                    _this.addClass('loaded').removeClass('loading');
                }
            });

        }
    });

}
/*** End Quickshop Action ***/

/*** Custom Wishlist ***/
function ftc_update_tini_wishlist() {
    if (typeof ftc_shortcode_params.ajax_uri == 'undefined') {
        return;
    }

    var wishlist_wrapper = jQuery('.my-wishlist-wrapper');
    if (wishlist_wrapper.length == 0) {
        return;
    }

    wishlist_wrapper.addClass('loading');

    jQuery.ajax({
        type: 'POST'
        , url: ftc_shortcode_params.ajax_uri
        , data: {action: 'update_tini_wishlist'}
        , success: function (response) {
            var first_icon = wishlist_wrapper.children('i.fa:first');
            wishlist_wrapper.html(response);
            if (first_icon.length > 0) {
                wishlist_wrapper.prepend(first_icon);
            }
            wishlist_wrapper.removeClass('loading');
        }
    });
}

/*** End Custom Wishlist***/

/*** Custom Compare ***/
function ftc_compare_change_scroll_bar() {
    var yith_compare_wrapper = jQuery('.DTFC_ScrollWrapper');
    if (yith_compare_wrapper.length > 0) {
        var div_html = '<div class="ftc-scroll-wrapper" style="position: fixed; bottom: 0; overflow-x: auto;"><div class="ftc-scroll-content" style="display: inline-block;"></div></div>';
        yith_compare_wrapper.append(div_html);
        var div_temp = yith_compare_wrapper.find(".ftc-scroll-wrapper");
        var left = parseInt(yith_compare_wrapper.find(".dataTables_scroll").css("left").replace(/px/gi, "")) + parseInt(yith_compare_wrapper.parents("body").css("padding-left")) + 3; /* 3px = border of body tag + table tag */
        div_temp.css({
            width: yith_compare_wrapper.find(".dataTables_scroll .dataTables_scrollBody").width()
            , height: ftc_get_scrollbar_width + "px"
            , left: left + "px"
        });
        yith_compare_wrapper.find(".dataTables_scroll .dataTables_scrollBody").css({"overflow": "hidden"});
        div_temp.find(".ftc-scroll-content").css({
            width: yith_compare_wrapper.find(".dataTables_scroll .dataTables_scrollBody table").width()
        });
        div_temp.scroll(function () {
            yith_compare_wrapper.find(".dataTables_scrollBody").scrollLeft(jQuery(this).scrollLeft());
        });
    }
}
/*** End Custom Compare ***/

/*** Set Cloud Zoom ***/
function ftc_set_cloud_zoom() {
    jQuery('.cloud-zoom-wrap .cloud-zoom-big').remove();
    jQuery('.cloud-zoom, .cloud-zoom-gallery').unbind('click');
    var clz_width = jQuery('.cloud-zoom, .cloud-zoom-gallery').width();
    var clz_img_width = jQuery('.cloud-zoom, .cloud-zoom-gallery').children('img').width();
    var cl_zoom = jQuery('.cloud-zoom, .cloud-zoom-gallery').not('.on_pc');
    var temp = (clz_width - clz_img_width) / 2;
    if (cl_zoom.length > 0) {
        cl_zoom.data('zoom', null).siblings('.mousetrap').unbind().remove();
        cl_zoom.CloudZoom({
            adjustX: temp
        });
    }
}

/*** Widget toggle ***/
function ftc_widget_toggle() {
    if (typeof ftc_shortcode_params._ftc_enable_responsive != 'undefined' && !ftc_shortcode_params._ftc_enable_responsive) {
        return;
    }
    jQuery('.wpb_widgetised_column .widget-title-wrapper a.block-control, .footer-container .widget-title-wrapper a.block-control').remove();
    var window_width = jQuery(window).width();
    window_width += ftc_get_scrollbar_width();
    if (window_width >= 768) {
        jQuery('.widget-title-wrapper a.block-control').removeClass('active').hide();
        jQuery('.widget-title-wrapper a.block-control').parent().siblings().show();
    } else {
        jQuery('.widget-title-wrapper a.block-control').removeClass('active').show();
        jQuery('.widget-title-wrapper a.block-control').parent().siblings().hide();
        jQuery('.wpb_widgetised_column .widget-title-wrapper, .footer-container .widget-title-wrapper').siblings().show();
    }
}

/*** WooCommerce Quantity Increment ***/
function ftc_woocommerce_quantity_increment($) {
    $(document).on('click', '.plus, .minus', function () {

        // Get values
        var $qty = $(this).closest('.quantity').find('.qty'),
                currentVal = parseFloat($qty.val()),
                max = parseFloat($qty.attr('max')),
                min = parseFloat($qty.attr('min')),
                step = $qty.attr('step');

        // Format values
        if (!currentVal || currentVal === '' || currentVal === 'NaN')
            currentVal = 0;
        if (max === '' || max === 'NaN')
            max = '';
        if (min === '' || min === 'NaN')
            min = 0;
        if (step === 'any' || step === '' || step === undefined || parseFloat(step) === 'NaN')
            step = 1;

        // Change the value
        if ($(this).is('.plus')) {

            if (max && (max == currentVal || currentVal > max)) {
                $qty.val(max);
            } else {
                $qty.val(currentVal + parseFloat(step));
            }

        } else {

            if (min && (min == currentVal || currentVal < min)) {
                $qty.val(min);
            } else if (currentVal > 0) {
                $qty.val(currentVal - parseFloat(step));
            }

        }

        // Trigger change event
        $qty.trigger('change');

    });
}

(function (a) {
    jQuery.browser.ftc_mobile = /android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))
})(navigator.userAgent || navigator.vendor || window.opera);
function ftc_is_touch_device() {
    var is_touch = !!("ontouchstart" in window) ? true : false;
    if (jQuery.browser.ftc_mobile) {
        is_touch = true;
    }
    return is_touch;
}

function ftc_get_scrollbar_width() {
    var $inner = jQuery('<div style="width: 100%; height:200px;">test</div>'),
            $outer = jQuery('<div style="width:200px;height:150px; position: absolute; top: 0; left: 0; visibility: hidden; overflow:hidden;"></div>').append($inner),
            inner = $inner[0],
            outer = $outer[0];

    jQuery('body').append(outer);
    var width1 = inner.offsetWidth;
    $outer.css('overflow', 'scroll');
    var width2 = outer.clientWidth;
    $outer.remove();

    return (width1 - width2);
}

/*** Ajax search ***/
function ftc_ajax_search() {
    var search_string = '';
    var search_previous_string = '';
    var search_timeout;
    var search_delay = 500;
    var search_input;
    var search_cache_data = {};
    jQuery('body').append('<div id="ftc-ajax-search-result"></div>');
    var ftc_ajax_search_result = jQuery('#ftc-ajax-search-result');

    jQuery('.header-ftc:not(.header-vertical) .ajax-search-content input[name="s"]').bind('keyup', function (e) {
        search_input = jQuery(this);
        ftc_ajax_search_result.hide();

        search_string = jQuery.trim(jQuery(this).val());
        if (search_string.length < 2) {
            search_input.parents('.ajax-search-content').removeClass('loading');
            return;
        }

        if (search_cache_data[search_string]) {
            ftc_ajax_search_result.html(search_cache_data[search_string]);
            ftc_ajax_search_result.show();
            search_previous_string = '';
            search_input.parents('.ajax-search-content').removeClass('loading');

            ftc_ajax_search_result.find('.view-all-wrapper a').bind('click', function (e) {
                e.preventDefault();
                search_input.parents('form').submit();
            });

            return;
        }

        clearTimeout(search_timeout);
        search_timeout = setTimeout(function () {
            if (search_string == search_previous_string || search_string.length < 2) {
                return;
            }

            search_previous_string = search_string;

            search_input.parents('.ajax-search-content').addClass('loading');

            /* check category */
            var category = '';
            var select_category = search_input.parents('.ajax-search-content').siblings('.select-category');
            if (select_category.length > 0) {
                category = select_category.find(':selected').val();
            }

            jQuery.ajax({
                type: 'POST'
                , url: ftc_shortcode_params.ajax_uri
                , data: {action: 'ftc_ajax_search', search_string: search_string, category: category}
                , error: function (xhr, err) {
                    search_input.parents('.ajax-search-content').removeClass('loading');
                }
                , success: function (response) {
                    if (response != '') {
                        response = JSON.parse(response);
                        if (response.search_string == search_string) {
                            ftc_ajax_search_result.html(response.html);
                            search_cache_data[search_string] = response.html;

                            var top = search_input.offset().top + search_input.outerHeight(true);
                            var left = Math.ceil(search_input.offset().left);
                            var width = search_input.outerWidth(true);
                            var border_width = parseInt(search_input.parent('.ajax-search-content').css('border-left-width'));
                            left -= border_width;
                            width += border_width;
                            if (width < 300) {
                                width = 300;
                            }

                            window_width = jQuery(window).width(); /* Overflow window */
                            if ((left + width) > window_width) {
                                left -= (width - search_input.outerWidth(true));
                            }

                            ftc_ajax_search_result.css({
                                'position': 'absolute'
                                , 'top': top
                                , 'left': left
                                , 'width': width + 10
                                , 'display': 'block'
                            });

                            search_input.parents('.ajax-search-content').removeClass('loading');

                            ftc_ajax_search_result.find('.view-all-wrapper a').bind('click', function (e) {
                                e.preventDefault();
                                search_input.parents('form').submit();
                            });
                        }
                    } else {
                        search_input.parents('.ajax-search-content').removeClass('loading');
                    }
                }
            });
        }, search_delay);
    });

    ftc_ajax_search_result.hover(function () {}, function () {
        ftc_ajax_search_result.hide();
    });

    jQuery('body').bind('click', function () {
        ftc_ajax_search_result.hide();
    });

    jQuery('.ftc-search-by-category select.select-category').bind('change', function () {
        search_previous_string = '';
        search_cache_data = {};
        jQuery(this).parents('.ftc-search-by-category').find('.ajax-search-content input[name="s"]').trigger('keyup');
    });
}

/*** Related posts  ***/

if (jQuery('.single-post .related-posts.loading').length > 0) {
    var _this = jQuery('.single-post .related-posts.loading');
    var slider_data = {
        loop: true
        , nav: false
        , navText: [, ]
        , dots: false
        , navSpeed: 1000
        , slideBy: 1
        , rtl: jQuery('body').hasClass('rtl')
        , margin: 30
        , navRewind: false
        , autoplay: false
        , autoplayTimeout: 5000
        , autoplayHoverPause: true
        , autoplaySpeed: false
        , mouseDrag: true
        , touchDrag: true
        , responsiveBaseElement: _this
        , responsiveRefreshRate: 400
        , responsive: {
            0: {
                items: 1
            },
            640: {
                items: 2
            },
            768: {
                items: 2
            },
            1400: {
                items: 3
            }
        }
        , onInitialized: function () {
            _this.addClass('loaded').removeClass('loading');
        }
    };
    _this.find('.meta-slider .blogs').owlCarousel(slider_data);
}


/*** Trigger Search By Category Change Attribute - Used for IE9-IE10 ***/
function ftc_search_by_category_change_attr(event) {
    if ('attrChange' in event) {
        if (event.attrName == 'class') {
            if (jQuery('.header-ftc .ftc-search-by-category .select2-container').hasClass('select2-dropdown-open')) {
                jQuery('.select2-drop').addClass('category-dropdown');
            } else {
                jQuery('.select2-drop').removeClass('category-dropdown');
            }
        }
    }
}
function zeroise(str, max) {
    str = str.toString();
    return str.length < max ? zeroise('0' + str, max) : str;
}

jQuery(document).ready(function ($) {
    // Show hide popover
    $(".dropdown-menu").click(function () {
        $(this).find("#dropdown-list").slideToggle("fast");
    });
});