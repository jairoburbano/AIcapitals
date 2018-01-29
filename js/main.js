(function($) {
    // Tamaño de la pantalla
    var $window = $(window),
        windowSize	= $window.width();
    if(windowSize > 1025) {
        $('.menu-item-has-children > a').append('<svg version="1.1" x="0px" y="0px" width="11.4px" height="5.7px" viewBox="0 0 11.4 5.7" enable-background="new 0 0 11.4 5.7" xml:space="preserve"><polygon fill="#FFFFFF" points="11.4,0 5.7,5.7 0,0 "/></svg>')
        if($('.current_page_ancestor, .current-page-ancestor').length) {
            $('.header').addClass('has-child');
        }
    }
    function menuMobile() {
        var icon = $('.header__icon'),
            body = $('body, html');
        icon.on('click', function() {
            $(this).toggleClass('open');
            $('.header').toggleClass('open-menu');
            body.toggleClass('no-scroll');
        });
    }
    function footer() {
        var btn = $('.footer__accordeon__icon'),
            target = $('.item__accordeon');
        $('.accoredeon--more').hide();
        btn.on('click', function() {
            target.slideDown(300, function() {
                stickyFooter();
            });
            $(this).slideUp();
        });
    }
    function form() {
        var input = $('.input-group input, .input-group textarea'),
            selector = $('.select-group select');
        input.focus(function() {
            $(this).parent().addClass('focusin');
        });
        input.blur(function() {
            if(!$(this).val()) {
                $(this).parent().removeClass('focusin');
            }
        });
        $('.select-group').addClass('focusin');
        $('select').select2();
        var hash = window.location.hash.replace('#','');
        console.log(hash);
        if(hash.length > 0) {
            $('#subject option').filter(function() {
                console.log($(this).val());
                if($(this).attr('data-slug') == hash) {
                    var valor = $(this).val();
                    $(this).attr("selected","selected");
                    $(this).parents('.select-group').addClass('focusin');
                    $(this).parents('.select-group').find('.select2-selection__rendered').text(valor);
                }
            }).prop('selected', true);
        }
        selector.on('change', function() {
            var valor = $(this).val();
            $(this).parent().addClass('focusin');
            $(this).parents('.select-group').find('.text-dummy').text(valor);
        });
    }
    function searchDesktop() {
        var btn = $('.search-group'),
            box = $('.header__search'),
            close = $('.search__close');
        btn.on('click', function() {
            box.addClass('active');
            setTimeout(function() {
                $('#header-search').focus();
            }, 300)
        });
        close.on('click', function() {
            box.removeClass('active');
            setTimeout(function() {
                $('#header-search').val('');
            }, 300)
        });
    }
    function select() {
        var box = $('.select-dummy'),
            text = box.find('p'),
            select = box.find('select');
        text.text(select.find('option:selected').data('name'));
        select.change(function() {
            var valor = $(this).find('option:selected').data('name'); 
            text.text(valor);
        });
    }
    function preguntas() {
        var title = $('.preguntas__title');
        title.on('click', function() {
            $(this).parent().toggleClass('open');
            $(this).parent().find('.preguntas__content').stop().slideToggle(300, function() {
                $('html, body').animate({
                    scrollTop: $(this).parent().offset().top - 20
                }, 600);
            });
            $(this).parent().siblings().find('.preguntas__content').slideUp();
            $(this).parent().siblings().removeClass('open');
        });
    }
    function videoContent() {
        var video = $('.content iframe');
        video.wrap('<div class="video--wrap"></div>');
    }
    function slide() {
        var slider = $('.single__slide');
        slider.each(function() {
            var $this = $(this),
                texto = $('.text__gallery');
            $this.flexslider({
                animation: 'slide',
                touch: $this.find('li').length > 1,
                controlsContainer: $this.find(".custom--controls"),
                prevText: '<svg><use xlink:href="#shape-flex-prev" /></svg>',
                nextText: '<svg><use xlink:href="#shape-flex-next" /></svg>',
                start: function(slider) {
                    var title = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('alt');
                    texto.empty();
                    texto.text(title);
                },
                after: function(slider) {
                    var title = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('alt');
                    texto.empty();
                    texto.text(title);
                }
            });
            if($this.find('.flex-disabled').length) {
                $this.addClass('one-slide');
            }
        });
    }
    function content() {
        $('blockquote').each(function() {
            $(this).prepend('<svg><use xlink:href="#shape-icon-quote" /></svg>');
        });
    }
    function tabs() {
        var select = $('.tab__selector').find('select'),
            btn = $('.tab__box__item');
        select.change(function() {
            var valor = $(this).find('option:selected').data('target');
            $('.tab__item').slideUp();
            $('.tab__item#'+valor).delay(300).slideDown();
        });
        btn.on('click', function() {
            var valor = $(this).data('target');
            if(!$(this).hasClass('active')) {
                $('.tab__item').slideUp();
                $('.tab__item#'+valor).delay(300).slideDown();
                $(this).addClass('active');
                $(this).siblings().removeClass('active');
            }
        });
    }
    function partner() {
        var slides = $('.partner__slide'),
            ancho = slides.width();
        if(windowSize > 740) {
            ancho = slides.width() / 2;
        }
        if(windowSize > 980) {
            ancho = slides.width() / 3;
        }
        slides.flexslider({
            animation: 'slide',
            prevText: '<svg><use xlink:href="#shape-flex-prev" /></svg>',
            nextText: '<svg><use xlink:href="#shape-flex-next" /></svg>',
            controlNav: false,
            move: 1,
            itemWidth : ancho
        });
    }
    function timeline() {
        var slides = $('.time-line__slide'),
            ancho = slides.width();
        if(windowSize > 740) {
            ancho = slides.width() / 3;
        }
        if(windowSize > 1025) {
            ancho = slides.width() / 4;
        }
        slides.flexslider({
            animation: 'slide',
            slideshow: false,
            animationLoop: false,
            prevText: '<svg><use xlink:href="#shape-flex-prev" /></svg>',
            nextText: '<svg><use xlink:href="#shape-flex-next" /></svg>',
            controlNav: false,
            move: 1,
            itemWidth : ancho
        });

        var btn = $('.area');
        btn.on('click', function() {
            var valor = $(this).data('content');
            if(!$(this).parent().hasClass('active')) {
                $('.time__item').slideUp();
                $('.time__item#'+valor).delay(300).slideDown();
                $(this).parent().addClass('active');
                $(this).parent().siblings().removeClass('active');
            }
        });
    }
    function registro() {
        var btn = $('.title__tab');
        $('.menu__top a').on('click', function() {
            $('.registro').slideToggle();
            $(this).toggleClass('active');
        });
        btn.on('click', function() {
            var tab = $(this).data('tab');
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
            if(tab == 'acceso') {
                $('.scrollable').addClass('active');
            } else {
                $('.scrollable').removeClass('active');
            }
        });
    }
    function experienciaAnim() {
        var item = $('.experience__item');
        if(item.length) {
            var box = $('.experience').offset().top,
                altura = box - $window.height() / 2,
                scroll = $window.scrollTop();
            if(scroll > altura) {
                item.each(function(index) {
                    $(this).find('span').delay(250*index).animate({opacity: 1}, 300);
                    $(this).find('p').delay(300*index).animate({opacity: 1}, 300);
                });
            }
        }
    }
    function timelineAnim() {
        var item = $('.timeline__item');
        if(item.length) {
            item.each(function() {
                var box = $(this).offset().top,
                    alto = $window.height() - 150,
                    altura = box - alto,
                    scroll = $window.scrollTop();
                if(scroll > altura) {
                    $(this).find('.timeline__step span').animate({opacity: 1}, 300);
                    $(this).find('.timeline__step img').delay(300).animate({opacity: 1}, 300);
                    $(this).find('.timeline__content').delay(600).animate({opacity: 1}, 300);
                    $(this).addClass('active');
                    $(this).siblings().removeClass('active');
                }
            });
        }
    }
    function singleFlex() {
        if ($('.single--flex').length && windowSize > 1025) {
            var pos = $('.autor--flex').position(),
                box = $('.team__item'),
                start = $('.single--flex').offset().top,
                scroll = $window.scrollTop();
            if(scroll > start) {
                box.css({
                    left: pos.left,
                    top: 30,
                    position: 'fixed'
                });
            } else {
                box.css({
                    left: 'auto',
                    top: 'auto',
                    position: 'relative'
                });
            }
        }
    }
    function stickyFooter() {
        var target = $('.footer, .push'),
            wrapper = $('.page-wrap'),
            footer = $('footer').outerHeight();
        target.css('height', 'auto');
        target.css('height', $('footer').outerHeight());
        wrapper.css('marginBottom', - $('footer').outerHeight());
    }
    function times() {
        /* Guia Slides */
        var carousel = $('.times__guides'),
            ancho = carousel.width() - 80;
        if(windowSize > 740) {
            ancho = parseInt(carousel.width() - 80) / 2;
        }
        if(windowSize > 980) {
            ancho = parseInt(carousel.width() - 80) / 4;
        }
        carousel.flexslider({
            animation: 'slide',
            prevText: '<svg><use xlink:href="#shape-flex-prev" /></svg>',
            nextText: '<svg><use xlink:href="#shape-flex-next" /></svg>',
            controlNav: false,
            move: 1,
            asNavFor: '.times__content',
            animationLoop: false, 
            slideshow: false,
            itemWidth : ancho,
            start: function(){
                /* Tamaño guia */
                var group = $('.times__guides'),
                    i = 1,
                    slideGroup = group.find('.slides'),
                    itemGroup = $('.times__item'),
                    itemWidth = itemGroup.width(),
                    itemLenght = itemGroup.length,
                    groupWidth = itemWidth * itemLenght,
                    initWidth = itemWidth / 2;
                slideGroup.append('<div class="start__bar"></div><div class="times__bar"></div>');
                var bar = $('.times__bar');
                bar.css('width', initWidth);
                itemGroup.each(function() {
                    $(this).attr('data-slide', i);
                    i++;
                })
                itemGroup.on('click', function() {
                    var dataSlide = $(this).data('slide'),
                        changeWidth = parseInt(dataSlide * itemWidth) - initWidth;
                    bar.css('width', changeWidth);
                });
            },
            after: function(slider) {
                var selectItem = $('.flex-viewport .slides').find('.flex-active-slide');

                /* Tamaño guia */
                var group = $('.times__guides'),
                    i = 1,
                    slideGroup = group.find('.slides'),
                    itemGroup = $('.times__item'),
                    itemWidth = itemGroup.width(),
                    itemLenght = itemGroup.length,
                    groupWidth = itemWidth * itemLenght,
                    initWidth = itemWidth / 2;
                var bar = $('.times__bar');
                bar.css('width', initWidth);
                var dataSlide = selectItem.data('slide'),
                    changeWidth = parseInt(dataSlide * itemWidth) - initWidth;
                bar.css('width', changeWidth);
            }
        });
        /* Contenido Slides */
        var slides = $('.times__content');
        slides.flexslider({
            animation: 'slide',
            directionNav: false,
            controlNav: false,
            slideshow: false,
            animationLoop: false
        });
    }
    function popupLinks(){
        var $trigger = $('.popup');
        $trigger.on('click', function(e) {
            e.preventDefault();
            var width  = 575,
                height = 400,
                left   = ($window.width()  - width)  / 2,
                top    = ($window.height() - height) / 2,

                opts   = 'status=1' +
                ',width='  + width  +
                ',height=' + height +
                ',top='    + top    +
                ',left='   + left;

            window.open(this.href,'compartir', opts);
        });
    }
    function testimonio() {
        var btn = $('.testimonio--video'),
            light = $('.light--test'),
            lightContent = light.find('.light__content iframe'),
            close = $('.light__close');
        btn.on('click', function() {
            var $this = $(this),
                type = $this.attr('data-type'),
                url = $this.attr('data-id');
            light.fadeIn();
            if(type == 'youtube') {
                lightContent.attr('src', 'https://www.youtube.com/embed/'+url);
            } else {
                lightContent.attr('src', 'https://player.vimeo.com/video/'+url);
            }
        });
        close.on('click', function() {
            lightContent.attr('src', '');
            light.fadeOut();
        });
    }
    if(windowSize < 1025) {
        menuMobile();
        footer();
    }
    if(windowSize > 1025) {
        searchDesktop();
    }
    form();
    select();
    preguntas();
    videoContent();
    slide();
    content();
    tabs();
    partner();
    timeline();
    registro();
    experienciaAnim();
    timelineAnim();
    singleFlex();
    times();
    popupLinks();
    testimonio();
    $(window).scroll(function() {
        experienciaAnim();
        timelineAnim();
        singleFlex();
    });
    $(window).ready(function() {
        stickyFooter();
    });
})(jQuery);
