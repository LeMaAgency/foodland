$(document).ready(function () {
    _resize.init();
    coreJs.init();
    coreJsResize.init();
    header_fix.init();
    /* Пренос блоков соглана размеру экрана
     * Откуда : data-resize="logo" data-resize-width="1000"
     * Куда   : data-resize-after="logo"
     */

    $('.slider__carousel').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        dotsClass: 'dots'
    });

    $('.recommendation-carousel').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: "<svg class='arrows arrows--prev' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z'/></svg>",
        nextArrow: "<svg class='arrows arrows--next' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z'/></svg>",
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.popular__carousel').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: "<svg class='arrows arrows--prev' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z'/></svg>",
        nextArrow: "<svg class='arrows arrows--next' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z'/></svg>",
        responsive: [
            {
                breakpoint: 990,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.recommendation-slider').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        variableWidth: true,
        arrows: true,
        prevArrow: "<svg class='arrows arrows--prev' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z'/></svg>",
        nextArrow: "<svg class='arrows arrows--next' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z'/></svg>",
        responsive: [
            {
                breakpoint: 990,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.random__carousel').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: "<svg class='random__arrows random__arrows--prev' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z'/></svg>",
        nextArrow: "<svg class='random__arrows random__arrows--next' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z'/></svg>",
    });
    $('.clients__carousel').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        centerMode: true,
        variableWidth: true,
        prevArrow: "<svg class='arrows arrows--prev' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z'/></svg>",
        nextArrow: "<svg class='arrows arrows--next' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z'/></svg>",
        responsive: [
            {
                breakpoint: 990,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.category-carousel').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: "<svg class='arrows arrows--prev' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z'/></svg>",
        nextArrow: "<svg class='arrows arrows--next' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z'/></svg>",
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 758,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.tm-carousel__carousel').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: "<svg class='arrows arrows--prev' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z'/></svg>",
        nextArrow: "<svg class='arrows arrows--next' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z'/></svg>",
        vertical: true
    });

    $('.tm-carousel-horizontal__carousel').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: "<svg class='arrows arrows--prev' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z'/></svg>",
        nextArrow: "<svg class='arrows arrows--next' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z'/></svg>",
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.analog-carousel__carousel').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: "<svg class='arrows arrows--prev' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z'/></svg>",
        nextArrow: "<svg class='arrows arrows--next' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z'/></svg>",
        vertical: true
    });

    $('.block-product-img__carousel').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: "<svg class='arrows arrows--prev' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z'/></svg>",
        nextArrow: "<svg class='arrows arrows--next' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z'/></svg>"
    });
    $('.product-use-carousel_4__carousel').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: "<svg class='arrows arrows--prev' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z'/></svg>",
        nextArrow: "<svg class='arrows arrows--next' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z'/></svg>",
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 758,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.product-use-carousel__carousel').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: "<svg class='random__arrows random__arrows--prev' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z'/></svg>",
        nextArrow: "<svg class='random__arrows random__arrows--next' width='42' height='42' viewBox='0 0 477.175 477.175'><path d='M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z'/></svg>"
    });


    $('.header__nav-btn').on('click', function () {
        var $parent = $(this).closest('.header'),
            $menu = $parent.find('.header__modal');
        $menu.toggleClass('active');
    });
    $('.header__modal__close').on('click', function () {
        var $parent = $(this).closest('.header__modal');
        $parent.removeClass('active');
    });
});


var _resize = {
    init: function () {
        this.width = 0;
        this.arElements = $('[data-resize]');
        this.arResize = [];

        this.load();
    },
    load: function () {

        this.arElements.each(function (index, element) {
            _resize.arResize[index] = [element];
        });

        this.resize();
        $(window).resize(this.resize);
    },
    resize: function () {
        _resize.width = $(document).width() + 5;
        // console.log(_resize.width);
        for (var i in _resize.arResize) {
            var _this = _resize.arResize[i];

            var name = $(_this).attr('data-resize');
            var size = $(_this).attr('data-resize-width');

            var before = $('[data-resize=' + name + ']');
            var after = $('[data-resize-after=' + name + ']');

            if ($(after).children().length < 1) {}

            if (_resize.width < size) {
                var block = before.children();
                //  console.log(block);

                block.detach();
                after.prepend(block);
            } else {
                var block = after.children();

                block.detach();
                before.prepend(block);
            }
        };
    }
};
// - coreJs -
var coreJs = {
    menu: $('.core__menu-nav__ul'),
    width: null,

    init: function () {
        this.resize();
    },
    active: function ($this) {
        $this.addClass('active');
    },
    activeRemove: function ($this) {
        $this.removeClass('active');
    },
    activeToggle: function ($this){
        $this.toggleClass('active');
    },
    delete: function ($this) {
        $this.remove();
    },
    resize: function () {
        coreJs.width = $(document).width();

        $(window).resize(function () {
            coreJs.width = $(document).width();
        });
    },
    put: function ($element,$to) {
        $element.detach();
        $to.append($element);
    }
};
var coreJsResize = {
    // Переменные
    // ...
    $arElements : $('[data-js-core-resize]'),
    width : null,

    //...
    init: function () {
        this.load();
    },
    load: function () {
        // Переменные
        this.$arElements.each(function () {
            var $this = $(this),
                $name = $this.data('js-core-resize'),
                $size = $this.data('js-core-resize-width');

            $this.data({
                status: false,
                name:   $name,
                size:   $size,
                before: $('[data-js-core-resize=' + $name + ']'),
                after:  $('[data-js-core-resize-after=' + $name + ']'),
            });

            //$this.children().addClass('js-core-resize-element');
        });
        this.resize();
        $(window).resize(this.resize);
    },
    resize: function() {
        coreJsResize.$arElements.each(function () {
            var $this = $(this);

            if($this.data().size === 'xl') $this.data().size = '1200';
            if($this.data().size === 'lg') $this.data().size = '1000';
            if($this.data().size === 'md') $this.data().size = '758';
            if($this.data().size === 'sm') $this.data().size = '576';
            if($this.data().size === 'xs') $this.data().size = '360';


            if(coreJs.width <= $this.data().size){
                if(!$this.data().status) {
                    $this.wrap('<div data-js-core-resize-before="' + $this.data().name + '"></div>');
                    $this.data().before = $('[data-js-core-resize-before=' + $this.data().name + ']');
                    $this.data().before.css('display','none');
                    coreJs.put(
                        $this,
                        $this.data().after
                    );
                    $this.data().status = true;
                }
            }else{
                if($this.data().status) {
                    coreJs.put(
                        $this.data().after.find('[data-js-core-resize=' + $this.data().name + ']'),
                        $this.data().before
                    );
                    $this.unwrap();

                    $this.data().status = false;
                }
            }
        });
    }
};

var header_fix = {
    init: function () {
        var header = $('.header');


        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.header').addClass('fixed');
            } else if ($(this).scrollTop() < 100) {
                $('.header').removeClass('fixed');
            }
        });


    }
}

// Активный элемент по умолчанию под номером 2

$(document).ready(function () {
    // $('[data-number="item2"]').addClass('active');

    $('.icon').hover(function () {
        var number = $(this).data('number');

        $('.icon[data-number="' + number + '"]').addClass('hover');

        $(this).mouseout(function () {
            $('.icon[data-number="' + number + '"]').removeClass('hover')
        });

    });

    if($.fn.jScrollPane) {
        $('.scroll-pane').jScrollPane({
        verticalDragMinHeight: 15,
        verticalDragMaxHeight: 15
    });
    }

    $('.icon').on('click', function () {

        var number = $(this).data('number');

        if ($('[data-number="' + number + '"]').hasClass('active')) {
            $('[data-type="piece"]').removeClass('active');
        } else {
            $('[data-type="piece"]').removeClass('active');
            $('[data-number="' + number + '"]').addClass('active');

        }

        $('[data-cheese="content"]').removeClass('active');
        $('[data-cheese-index="' + number + '"]').addClass('active');

        var $tempArray = $('.icon[data-number]'),
            tempStatus = false;
            tempScroll = $('[data-cheese-index="' + number + '"]');

        $tempArray.each(function () {
            var $this = $(this);
            if($this.hasClass('active')) {
                tempStatus = true;
            }
        });

        if(tempStatus === false) {
            $('[data-cheese="content"]').removeClass('active');
            $('[data-cheese-index="default"]').addClass('active');
            tempScroll = $('[data-cheese-index="default"]');
        }

        console.log(tempStatus);

       tempScroll.find('.scroll-pane').jScrollPane({
            verticalDragMinHeight: 15,
            verticalDragMaxHeight: 15
        });

        // Чтобы добавить анимацию, связанную с кликом по куску сыра, необходимо добавить
        // data-type="piece"
        // 
        // и присвоить порядковый номер, соответствующий номеру куска
        // data-number="item(порядковый номер)"
    });
});
$(document).ready(function () {

    var rotate = 0,
        active = 1,
        to = 0;

    $('.circle').on('click', function (e) {
        e.preventDefault();
        var $this = $(this),
            index = $this.attr('data-index');


        if (active == 3 && index == 1) rotate -= 120;
        if (active == 3 && index == 2) rotate += 120;

        if (active == 2 && index == 1) rotate += 120;
        if (active == 2 && index == 3) rotate -= 120;

        if (active == 1 && index == 2) rotate -= 120;
        if (active == 1 && index == 3) rotate += 120;


        //console.log('актимнам' + active + ' тек ' + index);

        if($(document).width() >= 1000) {
            anime({
                targets: '#spinner .rotate-wrap',
                rotate: rotate + 'deg',
                duration: 0,
                easing: 'easeInOutSine'

            });
        }

        if (active != index) {
            if (active == 3 && index == 1) to -= -120;
            if (active == 3 && index == 2) to += -120;

            if (active == 2 && index == 1) to += -120;
            if (active == 2 && index == 3) to -= -120;

            if (active == 1 && index == 2) to -= -120;
            if (active == 1 && index == 3) to += -120;


            if($(document).width() >= 1000) {
                anime({
                    targets: '.circle',
                    rotate: +to + 'deg',
                    duration: 50,
                    easing: 'easeInOutSine'
                });
            }
        }

        active = index;
        $('.circle').removeClass('active');
        $this.addClass('active');

        $('[data-spinner="content"]').removeClass('active')
        $('[data-index="' + index + '"]').addClass('active')


        // var index = $(this).data('index'),
        //     current = $(this).parent().attr('data-current'),
        //     destination = $(this).parent().attr('data-to');
        //
        //
        // if (index != destination || destination) {
        //     $('.circle').removeClass('active')
        //     $this = $(this).addClass('active').parent();
        //
        //     if($this.attr('data-to') === 'num3') {index = 'num1'}
        //
        //     $this.attr('data-current', index);
        //     $this.attr('data-to', index);
        //     $this.attr('data-from', current);
        //
        //     $('[data-spinner="content"]').removeClass('active')
        //     $('[data-index="'+ index +'"]').addClass('active')
        // }

        // Для элементов контента, связанных с вращением изображений, необходимо добавить этим элементам
        // data-spinner="content"
        //
        // и присвоить соответствующий порядковый номер
        // data-index="num(порядковый номер)"

    })

    //   Выпадающие меню

});
(function () {
    [].slice.call(document.querySelectorAll('select.cs-select')).forEach(function (el) {
        new SelectFx(el);
    });
})();
$(document).ready(function () {
    //обработка click выбора маршрута и способа добраться
    var routeBy = $('.route__by'),
        routeByFoot = $('.route__by_foot'),
        routeByCar = $('.route__by_car'),
        routeByPublic = $('.route__by_public'),
        routeMetro = $('.route__metro'),
        metroTS = $('.route__metro_ts'),
        metroYZ = $('.route__metro_yz'),
        iframe = $('iframe');

    //обработка click по метро
    metroTS.click(function () {
        if (metroTS.hasClass('active')) {
            return;
        } else {
            routeMetro.removeClass('active');
            metroTS.addClass('active');
            if (routeByFoot.hasClass('active')) {
                iframe.attr('src', 'https://yandex.ru/map-widget/v1/-/CBUDeBC6gB');
            } else if (routeByCar.hasClass('active')) {
                iframe.attr('src', 'https://yandex.ru/map-widget/v1/-/CBUDe4glcC');
            } else {
                iframe.attr('src', 'https://yandex.ru/map-widget/v1/-/CBUD4SfGlD');
            }
        }
    });

    //обработка click по метро
    metroYZ.click(function () {
        if (metroYZ.hasClass('active')) {
            return;
        } else {
            routeMetro.removeClass('active');
            metroYZ.addClass('active');
            if (routeByFoot.hasClass('active')) {
                iframe.attr('src', 'https://yandex.ru/map-widget/v1/-/CBUDiSAKXA');
            } else if (routeByCar.hasClass('active')) {
                iframe.attr('src', 'https://yandex.ru/map-widget/v1/-/CBUDiWeDCB');
            } else {
                iframe.attr('src', 'https://yandex.ru/map-widget/v1/-/CBUDiWT01A');
            }
        }
    });

    //обработка click по способу добаться
    routeByFoot.click(function () {
        if (routeByFoot.hasClass('active')) {
            return;
        } else {
            routeBy.removeClass('active');
            routeByFoot.addClass('active');
            if (metroTS.hasClass('active')) {
                iframe.attr('src', 'https://yandex.ru/map-widget/v1/-/CBUDeBC6gB');
            } else {
                iframe.attr('src', 'https://yandex.ru/map-widget/v1/-/CBUDiSAKXA');
            }
        }
    });

    //обработка click по способу добаться
    routeByCar.click(function () {
        if (routeByCar.hasClass('active')) {
            return;
        } else {
            routeBy.removeClass('active');
            routeByCar.addClass('active');
            if (metroTS.hasClass('active')) {
                iframe.attr('src', 'https://yandex.ru/map-widget/v1/-/CBUDe4glcC');
            } else {
                iframe.attr('src', 'https://yandex.ru/map-widget/v1/-/CBUDiWeDCB');
            }
        }
    });

    //обработка click по способу добаться
    routeByPublic.click(function () {
        if (routeByPublic.hasClass('active')) {
            return;
        } else {
            routeBy.removeClass('active');
            routeByPublic.addClass('active');
            if (metroTS.hasClass('active')) {
                iframe.attr('src', 'https://yandex.ru/map-widget/v1/-/CBUD4SfGlD');
            } else {
                iframe.attr('src', 'https://yandex.ru/map-widget/v1/-/CBUDiWT01A');
            }
        }
    });
});

//----------------------
//  карта регионов
//----------------------
if(typeof ymaps !== 'undefined') {
    ymaps.ready(function () {

    geoMap = new ymaps.Map('map', {
        center: [62.788252602236476, 88.50848728079634],
        type: "yandex#map",
        // убрать все элементы control на карте
        controls: [],
        zoom: 2
    });

    var lastCollection = 0;

    if (lastCollection) {
        geoMap.geoObjects.remove(lastCollection);
    }

    ymaps.regions.load('RU', {
        lang: 'ru',
        quality: 0
    }).then(function (result) {
        lastCollection = result.geoObjects;
        //  осноыной цвет регионов
        lastCollection.options.set('fillColor', '#fff145');
        //  цвет границ
        lastCollection.options.set('preset', {
            strokeWidth: 1,
            strokeColor: 'ffd13b'
        });
        lastCollection.each(function (reg) {
            switch (reg.properties.get('osmId')) {
                case '191706':
                    {
                        reg.options.set(
                            'fillColor',
                            '#159d40');
                        reg.options.set('preset', {
                            strokeWidth: 1,
                            strokeColor: '0f7120'
                        });
                        break;
                    }

                case '190090':
                    {
                        reg.options.set(
                            'fillColor',
                            '#159d40');
                        reg.options.set('preset', {
                            strokeWidth: 1,
                            strokeColor: '0f7120'
                        });
                        break;
                    }
                case '145454':
                    {
                        reg.options.set(
                            'fillColor',
                            '#159d40');
                        reg.options.set('preset', {
                            strokeWidth: 1,
                            strokeColor: '0f7120'
                        });
                        break;
                    }
            }
        });


        geoMap.geoObjects.add(lastCollection);


        // Создание макета балуна
        MapBalloonLayout = ymaps.templateLayoutFactory.createClass(
                '<div class="map-balloon">' +
                '<a class="map-balloon__close" href="#">&#9587;</a>' +
                '<div class="map-balloon__arrow"></div>' +
                '<div class="map-balloon__inner">' +
                '$[[options.contentLayout observeSize minWidth=235 maxWidth=235 maxHeight=350]]' +
                '</div>' +
                '</div>', {
                    /**
                     * Строит экземпляр макета на основе шаблона и добавляет его в родительский HTML-элемент.
                     * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/layout.templateBased.Base.xml#build
                     * @function
                     * @name build
                     */
                    build: function () {
                        this.constructor.superclass.build.call(this);

                        this._$element = $('.map-balloon', this.getParentElement());

                        this.applyElementOffset();

                        this._$element.find('.map-balloon__close')
                            .on('click', $.proxy(this.onCloseClick, this));
                    },

                    /**
                     * Удаляет содержимое макета из DOM.
                     * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/layout.templateBased.Base.xml#clear
                     * @function
                     * @name clear
                     */
                    clear: function () {
                        this._$element.find('.map-balloon__close')
                            .off('click');

                        this.constructor.superclass.clear.call(this);
                    },

                    /**
                     * Метод будет вызван системой шаблонов АПИ при изменении размеров вложенного макета.
                     * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/IBalloonLayout.xml#event-userclose
                     * @function
                     * @name onSublayoutSizeChange
                     */
                    onSublayoutSizeChange: function () {
                        MapBalloonLayout.superclass.onSublayoutSizeChange.apply(this, arguments);

                        if (!this._isElement(this._$element)) {
                            return;
                        }

                        this.applyElementOffset();

                        this.events.fire('shapechange');
                    },

                    /**
                     * Сдвигаем балун, чтобы "хвостик" указывал на точку привязки.
                     * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/IBalloonLayout.xml#event-userclose
                     * @function
                     * @name applyElementOffset
                     */
                    applyElementOffset: function () {
                        this._$element.css({
                            left: -(this._$element[0].offsetWidth / 2),
                            top: -(this._$element[0].offsetHeight + this._$element.find('.map-balloon__arrow')[0].offsetHeight)
                        });
                    },

                    /**
                     * Закрывает балун при клике на крестик, кидая событие "userclose" на макете.
                     * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/IBalloonLayout.xml#event-userclose
                     * @function
                     * @name onCloseClick
                     */
                    onCloseClick: function (e) {
                        e.preventDefault();

                        this.events.fire('userclose');
                    },

                    /**
                     * Используется для автопозиционирования (balloonAutoPan).
                     * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/ILayout.xml#getClientBounds
                     * @function
                     * @name getClientBounds
                     * @returns {Number[][]} Координаты левого верхнего и правого нижнего углов шаблона относительно точки привязки.
                     */
                    getShape: function () {
                        if (!this._isElement(this._$element)) {
                            return MapBalloonLayout.superclass.getShape.call(this);
                        }

                        var position = this._$element.position();

                        return new ymaps.shape.Rectangle(new ymaps.geometry.pixel.Rectangle([
                    [position.left, position.top], [
                        position.left + this._$element[0].offsetWidth,
                        position.top + this._$element[0].offsetHeight + this._$element.find('.map-balloon__arrow')[0].offsetHeight
                    ]
                ]));
                    },

                    /**
                     * Проверяем наличие элемента (в ИЕ и Опере его еще может не быть).
                     * @function
                     * @private
                     * @name _isElement
                     * @param {jQuery} [element] Элемент.
                     * @returns {Boolean} Флаг наличия.
                     */
                    _isElement: function (element) {
                        return element && element[0] && element.find('.map-balloon__arrow')[0];
                    }
                }),
            MapBalloonContentLayout = ymaps.templateLayoutFactory.createClass(
                '<div class="map-balloon__inner__content">$[properties.balloonContent]</div>'
            );

        //  создание меток

        placemarkFactory = new ymaps.Placemark([55.61414730895103, 37.47190599999999], {
            balloonContent: '142771, Москва, пос. Мосрентген, ПП «Автострой»'
        }, {
            // Опции.
            balloonShadow: false,
            balloonLayout: MapBalloonLayout,
            balloonContentLayout: MapBalloonContentLayout,
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: '../images/icons/fact-sh.png',
            // Размеры метки.
            iconImageSize: [41, 37]
        });
        placemarkFactory2 = new ymaps.Placemark([64.9614028569075, 62.40949755273436], {
            balloonContent: '142771, Москва, пос. Мосрентген, ПП «Автострой»'
        }, {
            // Опции.
            balloonShadow: false,
            balloonLayout: MapBalloonLayout,
            balloonContentLayout: MapBalloonContentLayout,
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: '../images/icons/fact-sh.png',
            // Размеры метки.
            iconImageSize: [41, 37]
        });
        placemarkFactory3 = new ymaps.Placemark([58.55266732499611, 84.33820849023435], {
            balloonContent: '142771, Москва, пос. Мосрентген, ПП «Автострой»'
        }, {
            // Опции.
            balloonShadow: false,
            balloonLayout: MapBalloonLayout,
            balloonContentLayout: MapBalloonContentLayout,
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: '../images/icons/fact-sh.png',
            // Размеры метки.
            iconImageSize: [41, 37]
        });
        placemarkFactory4 = new ymaps.Placemark([58.73593601918061, 67.15559130273435], {
            balloonContent: '142771, Москва, пос. Мосрентген, ПП «Автострой»'
        }, {
            // Опции.
            balloonShadow: false,
            balloonLayout: MapBalloonLayout,
            balloonContentLayout: MapBalloonContentLayout,
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: '../images/icons/fact-sh.png',
            // Размеры метки.
            iconImageSize: [41, 37]
        });
        placemarkFactory5 = new ymaps.Placemark([58.09025713015575, 55.20246630273436], {
            balloonContent: '142771, Москва, пос. Мосрентген, ПП «Автострой»'
        }, {
            // Опции.
            balloonShadow: false,
            balloonLayout: MapBalloonLayout,
            balloonContentLayout: MapBalloonContentLayout,
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: '../images/icons/fact-sh.png',
            // Размеры метки.
            iconImageSize: [41, 37]
        });
        placemarkOffice = new ymaps.Placemark([52.9244134978265, 39.64582567773435], {
            balloonContent: '142771, Москва, пос. Мосрентген, ПП «Автострой»'
        }, {
            // Опции.
            balloonShadow: false,
            balloonLayout: MapBalloonLayout,
            balloonContentLayout: MapBalloonContentLayout,
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: '../images/icons/office-sh.png',
            // Размеры метки.
            iconImageSize: [41, 37]
        });
        placemarkFilial = new ymaps.Placemark([47.786119567765326, 40.524731927734344], {
            balloonContent: '142771, Москва, пос. Мосрентген, ПП «Автострой»'
        }, {
            // Опции.
            balloonShadow: false,
            balloonLayout: MapBalloonLayout,
            balloonContentLayout: MapBalloonContentLayout,
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: '../images/icons/filial-sh.png',
            // Размеры метки.
            iconImageSize: [41, 37]
        });
        placemarkFilial2 = new ymaps.Placemark([51.58964143433744, 45.138989740234344], {
            balloonContent: '142771, Москва, пос. Мосрентген, ПП «Автострой»'
        }, {
            // Опции.
            balloonShadow: false,
            balloonLayout: MapBalloonLayout,
            balloonContentLayout: MapBalloonContentLayout,
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: '../images/icons/filial-sh.png',
            // Размеры метки.
            iconImageSize: [41, 37]
        });
        geoMap.geoObjects.add(placemarkFactory)
            .add(placemarkFactory2)
            .add(placemarkFactory3)
            .add(placemarkFactory4)
            .add(placemarkFactory5)
            .add(placemarkOffice)
            .add(placemarkFilial)
            .add(placemarkFilial2);


    }, function () {
        //alert('no response');
    });


    //----------------------------------------------------
    //   mask
    //----------------------------------------------------


    ymaps.modules.require('RS.RegionSelector', function (RegionSelector) {
        new RegionSelector(geoMap, $(), $(), $());
    });

    (function (global) {
        var ym = {
            modules: global.ymaps.modules
        };

        (function (modules) {
            var project = {
                DEBUG: false
            };
            if (typeof modules == 'undefined' && typeof require == 'function') {
                var modules = require('ym');
            }

            modules.define('util.providePackage', ['system.mergeImports'], function (provide, mergeImports) {
                provide(function (srcPackage, packageArgs) {
                    var packageProvide = packageArgs[0],
                        packageModules = Array.prototype.slice.call(packageArgs, 1),
                        ns = mergeImports.joinImports(srcPackage.name, {}, srcPackage.deps, packageModules);

                    packageProvide(ns);
                });
            });
        })(ym.modules);

        ym.modules.define('RS.MaskOverlay', [
          'util.defineClass',
          'overlay.Polygon',
          'geometry.pixel.Polygon'
        ], function (provide, defineClass, OverlayPolygon, GeometryPixelPolygon) {

            /**
             * Класс оверлея маски.
             * @class
             * @name MaskOverlay
             * @param {ymaps.geometry.pixel.Polygon} geometry Пиксельная геометкрия полигона.
             * @param {Object} data Данные.
             * @param {Object} options Опции.
             */
            var MaskOverlay = defineClass(function (geometry, data, options) {
                MaskOverlay.superclass.constructor.call(this, geometry, data, options);
            }, OverlayPolygon, /** @lends MaskOverlay.prototype */ {
                /**
                 * Перекрываем публичный метод.
                 * @function
                 * @name MaskOverlay.setGeometry
                 * @param {ymaps.geometry.pixel.Polygon} geometry Пиксельная геометрия полигона.
                 */

                setGeometry: function (geometry) {
                    MaskOverlay.superclass.setGeometry.call(
                        this,
                        this.getMap() ? this._createGeometry(geometry) : geometry
                    );
                },
                /**
                 * Создание пиксельной геометрии.
                 * @function
                 * @private
                 * @name MaskOverlay._createGeometry
                 * @returns {ymaps.geometry.pixel.Polygon} Пиксельная геометрия полигона.
                 */
                _createGeometry: function (geometry) {
                    var lineCoordinates = geometry.getCoordinates().slice(0),
                        map = this.getMap(),
                        center = map.getGlobalPixelCenter(),
                        size = map.container.getSize(),
                        d = 512;

                    lineCoordinates.push([
            [center[0] - size[0] - d, center[1] - size[1] - d],
            [center[0] + size[0] + d, center[1] - size[1] - d],
            [center[0] + size[0] + d, center[1] + size[1] + d],
            [center[0] - size[0] - d, center[1] + size[1] + d],
            [center[0] - size[0] - d, center[1] - size[1] - d]
        ]);

                    return new GeometryPixelPolygon(lineCoordinates, 'evenOdd');
                }
            });

            provide(MaskOverlay);

        });

        ym.modules.define('RS.ListView', [
          'util.defineClass',
        ], function (provide, defineClass) {

            /**
             * Класс-отображение списка регионов.
             * @class
             * @name RegionSelector.ListView
             * @param {jQuery} container Родительский элемент списка.
             */
            var ListView = defineClass(function (container) {
                this._container = container;
                this._template = '<li><a href="#">%s</a></li>';
                this._activeItem = null;
                this.events = $({});
            }, /** @lends RegionSelector.ListView.prototype */ {
                /**
                 * Отображение данных в DOM-дереве.
                 * @function
                 * @name RegionSelector.ListView.render
                 * @param {ymaps.data.Manager} data Данные регионов.
                 * @returns {RegionSelector.ListView} Возвращает ссылку на себя.
                 */
                render: function (data) {
                    data.get('regions')
                        .each(this._onEveryRegion, this);

                    this._sortItems();
                    this._attachHandlers();

                    return this;
                },
                /**
                 * Удаление данных из DOM-дерева.
                 * @function
                 * @name RegionSelector.ListView.clear
                 * @returns {RegionSelector.ListView} Возвращает ссылку на себя.
                 */
                clear: function () {
                    this._detachHandlers();
                    this._container.empty();

                    return this;
                },
                /**
                 * Сортировка DOM-элементов списка в алфавитном порядке.
                 * @function
                 * @private
                 * @name RegionSelector.ListView._sortItems
                 */
                _sortItems: function () {
                    this._container.append(
                        this._container.children().sort(function (a, b) {
                            return $(a).find('a').text() > $(b).find('a').text() ? 1 : -1;
                        })
                    );
                },
                /**
                 * Добавление обработчиков событий.
                 * @function
                 * @private
                 * @name RegionSelector.ListView._attachHandlers
                 */
                _attachHandlers: function () {
                    this._container.on('click', 'li', $.proxy(this._onItemSelected, this));
                },
                /**
                 * Удаление обработчиков событий.
                 * @function
                 * @private
                 * @name RegionSelector.ListView._detachHandlers
                 */
                _detachHandlers: function () {
                    this._container.off('click');
                },
                /**
                 * Обработчик клика на элементе списка.
                 * @function
                 * @private
                 * @name RegionSelector.ListView._onItemSelected
                 * @param {jQuery.Event} e Объект-событие.
                 */
                _onItemSelected: function (e) {
                    e.preventDefault();

                    var index = $(e.currentTarget).data('index');

                    this.unsetActiveItem()
                        .setActiveItem(index);
                    this.events.trigger($.Event('itemselected', {
                        itemIndex: index
                    }));
                },
                /**
                 * Выделить элемент списка.
                 * @function
                 * @name RegionSelector.ListView.setActiveItem
                 * @param {Number} index Порядковый номер элемента в списке.
                 * @returns {RegionSelector.ListView} Возвращает ссылку на себя.
                 */
                setActiveItem: function (index) {
                    this._activeItem = this._findItem(index)
                        .addClass('active');

                    return this;
                },
                /**
                 * Снять выделение элемента списка.
                 * @function
                 * @name RegionSelector.ListView.unsetActiveItem
                 * @returns {RegionSelector.ListView} Возвращает ссылку на себя.
                 */
                unsetActiveItem: function () {
                    if (this._activeItem) {
                        this._activeItem
                            .removeClass('active');
                        this._activeItem = null;
                    }

                    return this;
                },
                /**
                 * Скроллим список к выбранному элементу.
                 * @function
                 * @name RegionSelector.ListView.scrollToItem
                 * @param {Number} index Порядковый номер элемента в списке.
                 * @returns {RegionSelector.ListView} Возвращает ссылку на себя.
                 */
                scrollToItem: function (index) {
                    var item = this._findItem(index),
                        position = item.offset().top - this._container.offset().top;

                    this._container.parent()
                        .scrollTop(position);

                    return this;
                },
                /**
                 * Поиск (фильтрация) выбранного элемента в списке по индексу.
                 * @function
                 * @private
                 * @name RegionSelector.ListView._findItem
                 * @param {Number} index Порядковый номер элемента в списке.
                 * @returns {RegionSelector.ListView} Возвращает ссылку на себя.
                 */
                _findItem: function (index) {
                    return this._container.children()
                        .filter(function () {
                            return $(this).data('index') == index;
                        });
                },
                /**
                 * Итератор по элементам геоколлекции.
                 * @function
                 * @private
                 * @name RegionSelector.ListView._onEveryRegion
                 * @param {ymaps.Polygon} region Геообъект региона.
                 * @param {Number} index Порядковый номер элемента в геоколлекции.
                 */
                _onEveryRegion: function (region, index) {
                    this._container.append(
                        $(
                            this._template
                            .replace('%s', region.properties.get('hintContent'))
                        ).data('index', index)
                    );
                }
            });
            provide(ListView);

        });

        ym.modules.define('RS.MapMaskView', [
          'util.defineClass',
          'geometry.Polygon',
          'RS.MaskOverlay'
        ], function (provide, defineClass, GeometryPolygon, MaskOverlay) {

            /**
             * Класс-отображение данных на карте ввиде маски.
             * @class
             * @name RegionSelector.MapMaskView
             * @param {ymaps.Map} map Карта.
             */
            var MapMaskView = defineClass(function (map) {
                this._map = map;
                this._overlay = null;
                this._geometry = null;
            }, /** @lends RegionSelector.MapMaskView.prototype */ {
                /**
                 * Отображение данных на карте.
                 * @function
                 * @name RegionSelector.MapMaskView.render
                 * @param {ymaps.data.Manager} data Менеджер данных.
                 * @returns {RegionSelector.MapMaskView} Возвращает ссылку на себя.
                 */
                render: function (data) {
                    var coordinates = [];

                    data.get('regions')
                        .each(function (geoObject) {
                            coordinates.push.apply(coordinates, geoObject.geometry.getCoordinates());
                        });

                    this._createGeometry(coordinates);
                    this._createOverlay(this._geometry.getPixelGeometry());
                    this._attachHandlers();

                    return this;
                },
                /**
                 * Удаление данных с карты.
                 * @function
                 * @name RegionSelector.MapMaskView.clear
                 * @returns {RegionSelector.MapMaskView} Возвращает ссылку на себя.
                 */
                clear: function () {
                    if (this._geometry) {
                        this._detachHandlers();
                        this._geometry.setMap(null);
                        this._overlay.setMap(null);
                    }
                    this._geometry = this._overlay = null;

                    return this;
                },
                /**
                 * Добавление обработчиков событий.
                 * @function
                 * @private
                 * @name RegionSelector.MapMaskView._attachHandlers
                 */
                _attachHandlers: function () {
                    this._geometry.events
                        .add('pixelgeometrychange', this._onPixelGeometryChange, this);
                    this._map.events
                        .add('boundschange', this._onBoundsChange, this);
                },
                /**
                 * Удаление обработчиков событий.
                 * @function
                 * @private
                 * @name RegionSelector.MapMaskView._detachHandlers
                 */
                _detachHandlers: function () {
                    this._map.events
                        .remove('boundschange', this._onBoundsChange, this);
                    this._geometry.events
                        .remove('pixelgeometrychange', this._onPixelGeometryChange, this);
                },
                /**
                 * Обработчик события изменения пискельной геометрии.
                 * @function
                 * @private
                 * @name RegionSelector.MapMaskView._onPixelGeometryChange
                 * @param {ymaps.data.Manager} e Менеджер данных.
                 */
                _onPixelGeometryChange: function (e) {
                    this._createOverlay(e.get('pixelGeometry'));
                },
                /**
                 * Обработчик события смены центра/масштаба карты.
                 * @function
                 * @private
                 * @name RegionSelector.MapMaskView._onBoundsChange
                 */
                _onBoundsChange: function (e) {
                    if (e.get('oldZoom') !== e.get('newZoom')) {
                        this._createOverlay(this._geometry.getPixelGeometry());
                    }
                },
                /**
                 * Создание геометрии типа "Polygon".
                 * @function
                 * @private
                 * @name RegionSelector.MapMaskView._createGeometry
                 * @param {Number[][]} coordinates Координаты вершин ломаных, определяющих внешнюю и внутренние границы многоугольника.
                 */
                _createGeometry: function (coordinates) {
                    this._geometry = new GeometryPolygon(coordinates, 'evenOdd', {
                        projection: this._map.options.get('projection')
                    });
                    this._geometry.setMap(this._map);
                },
                /**
                 * Создание оверлея.
                 * @function
                 * @private
                 * @name RegionSelector.MapMaskView._createOverlay
                 * @param {ymaps.geometry.pixel.Polygon} geometry Пиксельная геометрия полигона.
                 */
                _createOverlay: function (geometry) {
                    if (!this._overlay) {
                        this._overlay = new MaskOverlay(geometry, null, this.getDefaults());
                    }
                    this._overlay.setMap(this._map);
                    this._overlay.setGeometry(geometry);
                },
                /**
                 * Опции по-умолчанию.
                 * @function
                 * @name RegionSelector.MapMaskView.getDefaults
                 * @returns {Object} Опции.
                 */
                getDefaults: function () {
                    return {
                        zIndex: 1,
                        stroke: false,
                        strokeColor: false,
                        fillColor: 'fff'
                    };
                }
            });

            provide(MapMaskView);

        });

        ym.modules.define('RS.MapView', [
          'util.defineClass',
          'util.bind',
          'event.Manager',
        ], function (provide, defineClass, bind, EventManager) {

            /**
             * Цвет областей региона.
             * @static
             * @constant
             */
            var COLOR = 'rgba(0,102,255,0.6)';
            /**
             * Цвет выделенной области.
             * @static
             * @constant
             */
            var SELECTED_COLOR = 'rgba(255,153,153,1)';

            /**
             * Класс-отображение регионов на карте.
             * @class
             * @name RegionSelector.MapView
             * @param {ymaps.Map} map Карта.
             */
            var MapView = defineClass(function (map) {
                this._map = map;
                this._regions = null;
                this._activeItem = null;
                this.events = new EventManager();
            }, /** @lends RegionSelector.MapView.prototype */ {
                /**
                 * Добавление обработчиков событий.
                 * @function
                 * @private
                 * @name RegionSelector.MapView._attachHandlers
                 */
                _attachHandlers: function () {
                    this._regions.events.add('click', this._onClick, this);
                    this._regions.events.add('mouseenter', this._onMouseEnter, this);
                },
                /**
                 * Удаление обработчиков событий.
                 * @function
                 * @private
                 * @name RegionSelector.MapView._detachHandlers
                 */
                _detachHandlers: function () {
                    this._regions.events.remove('mouseenter', this._onMouseEnter, this);
                    this._regions.events.remove('click', this._onClick, this);
                },
                /**
                 * Обработчик клика на области региона.
                 * @function
                 * @private
                 * @name RegionSelector.MapView._onClick
                 * @param {ymaps.data.Manager} e Менеджер данных.
                 */
                _onClick: function (e) {
                    var region = e.get('target'),
                        index = this._regions.indexOf(region);

                    this
                        .unsetActiveItem()
                        .setActiveItem(index);

                    this.events.fire('itemselected', {
                        index: index
                    });
                },
                /**
                 * Отображение данных на карте.
                 * @function
                 * @name RegionSelector.MapView.render
                 * @param {ymaps.data.Manager} data Менеджер данных.
                 * @returns {RegionSelector.MapView} Возвращает ссылку на себя.
                 */
                render: function (data) {
                    this._map.geoObjects.add(
                        this._regions = data.get('regions')
                    );
                    this.setFocusOnRegions();
                    this._regions.options.set({
                        zIndex: 1,
                        zIndexHover: 1,
                        fillColor: COLOR,
                        strokeColor: COLOR,
                        strokeWidth: 1
                    });
                    this._attachHandlers();

                    return this;
                },
                /**
                 * Удаление данных с карты.
                 * @function
                 * @name RegionSelector.MapView.clear
                 * @returns {RegionSelector.MapView} Возвращает ссылку на себя.
                 */
                clear: function () {
                    if (this._regions) {
                        this._detachHandlers();
                        this._map.geoObjects.remove(this._regions);
                        this._regions = null;
                        this._activeItem = null;
                    }

                    return this;
                },
                /**
                 * Выделяем активный регион.
                 * @function
                 * @name RegionSelector.MapView.setActiveItem
                 * @param {Number} index Индекс региона в коллекции.
                 * @returns {RegionSelector.MapView} Возвращает ссылку на себя.
                 */
                setActiveItem: function (index) {
                    var region = this._activeItem = this._regions.get(index);

                    region.options.set({
                        fillColor: SELECTED_COLOR,
                        strokeColor: SELECTED_COLOR
                    });

                    return this;
                },
                /**
                 * Снимаем выделение активного региона.
                 * @function
                 * @name RegionSelector.MapView.unsetActiveItem
                 * @returns {RegionSelector.MapView} Возвращает ссылку на себя.
                 */
                unsetActiveItem: function () {
                    if (this._activeItem) {
                        this._activeItem.options.set({
                            fillColor: COLOR,
                            strokeColor: COLOR
                        });
                        this._activeItem = null;
                    }

                    return this;
                },
                /**
                 * Выставляем карте область видимости на определенный регион.
                 * @function
                 * @name RegionSelector.MapView.setFocusOnRegion
                 * @param {Number} index Порядковый номер региона в геоколлекции.
                 * @returns {RegionSelector.MapView} Возвращает ссылку на себя.
                 */
                setFocusOnRegion: function (index) {
                    this._map.setBounds(
                        this._regions.get(index).geometry.getBounds(), {
                            checkZoomRange: true
                            //, duration: 1000
                        }
                    );

                    return this;
                },
                /**
                 * Выставляем карте область видимости по всем регионам.
                 * @function
                 * @name RegionSelector.MapView.setFocusOnRegions
                 * @returns {RegionSelector.MapView} Возвращает ссылку на себя.
                 */
                setFocusOnRegions: function () {
                    this._map.options.set('restrictMapArea', false);

                    this._map.setBounds(this._regions.getBounds(), {
                        callback: bind(function () {
                            this._map.options.set('restrictMapArea', this._map.getBounds())
                        }, this)
                    });

                    return this;
                }
            });

            provide(MapView);

        });

        ym.modules.define('RS.Model', [
          'util.defineClass',
          'util.bind',
          'Monitor',
          'option.Manager',
          'event.Manager',
          'regions'
          ], function (provide, defineClass, bind, Monitor, OptionManager, EventManager, Regions) {

            /**
             * Класс-модель
             * @class
             * @name RegionSelector.Model
             */
            var Model = defineClass(function () {
                this.events = new EventManager();
                this.options = new OptionManager({
                    preset: this.getDefaults()
                });
                this._monitor = new Monitor(this.options);

                this._setupMonitor();
            }, /** @lends RegionSelector.Model.prototype */ {
                /**
                 * Используем ymaps.Monitor для наблюдения за изменениями опций модели.
                 * @function
                 * @private
                 * @name RegionSelector.Model._setupMonitor
                 */
                _setupMonitor: function () {
                    this._monitor
                        .add(['country', 'lang', 'quality'], function (newValues, oldValues) {
                            /**
                             * Хак для смены языка при смене страны.
                             */
                            if (newValues.country !== oldValues.country) {
                                this.options.unset('lang');
                            }
                            this.load();
                        }, this, this.getDefaults());
                },
                /**
                 * Отключение мониторинга опций модели.
                 * @function
                 * @private
                 * @name RegionSelector.Model._clearMonitor
                 */
                _clearMonitor: function () {
                    this._monitor
                        .removeAll();
                },
                /**
                 * Загружаем данные.
                 * @function
                 * @name RegionSelector.Model.load
                 */
                load: function () {
                    Regions.load(
                        this.options.get('country'), {
                            lang: this.options.get('lang'),
                            quality: this.options.get('quality')
                        }
                    ).then(
                        bind(this._onDataLoaded, this)
                    );
                },
                /**
                 * Обработчик загрузки данных.
                 * @function
                 * @private
                 * @name RegionSelector.Model._onDataLoaded
                 * @param {Object} data Данные региона.
                 */
                _onDataLoaded: function (data) {
                    this.events.fire('load', {
                        regions: data.geoObjects,
                        target: this
                    });
                },
                /**
                 * Опции модели по-умолчанию.
                 * @function
                 * @name RegionSelector.Model.getDefaults
                 * @returns {Object} Опции модели.
                 */
                getDefaults: function () {
                    return {
                        country: 'RU',
                        lang: 'ru',
                        quality: 0
                    };
                }
            });

            provide(Model);

        });

        ym.modules.define('RS.OptsView', [
          'util.defineClass'
        ], function (provide, defineClass) {

            /**
             * Заголовки контролов.
             * @static
             * @constant
             */
            var LABELS = {
                country: {
                    label: 'Страна',
                    values: {
                        RU: 'Россия',
                        UA: 'Украина',
                        BY: 'Белоруссия',
                        KZ: 'Казахстан'
                    }
                },
                lang: {
                    label: 'Язык',
                    RU: {
                        label: 'Язык',
                        values: {
                            ru: 'русский'
                        }
                    },
                    UA: {
                        label: 'Язык',
                        values: {
                            uk: 'украинский',
                            ru: 'русский'
                        }
                    },
                    BY: {
                        label: 'Язык',
                        values: {
                            be: 'белорусский',
                            ru: 'русский'
                        }
                    },
                    KZ: {
                        label: 'Язык',
                        values: {
                            ru: 'русский'
                        }
                    }
                },
                quality: {
                    label: 'Уровень качества',
                    values: [
            'низкий',
            'средний',
            'высокий',
            'максимальный'
        ]
                }
            };

            /**
             * Класс-отображения контролов настроек.
             * @class
             * @name RegionSelector.OptsView
             * @param {jQuery} container Родительский элемент контролов настроек.
             */
            var OptsView = defineClass(function (container) {
                this._container = container;
                this._btnTemplate = [
                '<div class="btn-group">',
                '<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">',
                '%s',
                '&nbsp;<span class="caret"></span>',
                '</a>',
                '<ul class="dropdown-menu"></ul>',
                '</div>'
                ].join('');
                this._itemTemplate = '<li><a href="#">%s</a></li>';
                this._activeIconTemplate = '<i class="icon-ok"></i>';
                this.events = $({});
            }, /** @lends RegionSelector.OptsView.prototype */ {
                /**
                 * Отображение контролов настроек в DOM-дереве.
                 * @function
                 * @name RegionSelector.OptsView.render
                 * @param {ymaps.data.Manager} data Менеджер данных.
                 * @returns {RegionSelector.OptsView} Возвращает ссылку на себя.
                 */
                render: function (data) {
                    var options = data.get('regions').properties.getAll();

                    for (var key in LABELS) {
                        var option = key === 'lang' ? // Хак для списка доступных языков.
                            LABELS[key][options.country] :
                            LABELS[key],
                            btn = $(
                                this._btnTemplate
                                .replace('%s', option.label)
                            );

                        for (var value in option.values) {
                            var label = option.values[value],
                                item = $(
                                    this._itemTemplate
                                    .replace('%s', label)
                                )
                                .data(key, value);

                            if (options[key] == value) {
                                item.find('a')
                                    .prepend(this._activeIconTemplate);
                            }

                            btn.find('ul')
                                .append(item);
                        }
                        this._container
                            .append(btn);
                    }

                    this._attachHandlers();

                    return this;
                },
                /**
                 * Удаление контролов настроек из DOM-дерева.
                 * @function
                 * @name RegionSelector.OptsView.clear
                 * @returns {RegionSelector.OptsView} Возвращает ссылку на себя.
                 */
                clear: function () {
                    this._detachHandlers();
                    this._container.empty();

                    return this;
                },
                /**
                 * Добавление обработчиков событий.
                 * @function
                 * @private
                 * @name RegionSelector.OptsView._attachHandlers
                 */
                _attachHandlers: function () {
                    this._container.on('click', 'li', $.proxy(this._onItemClick, this));
                },
                /**
                 * Удаление обработчиков событий.
                 * @function
                 * @private
                 * @name RegionSelector.OptsView._detachHandlers
                 */
                _detachHandlers: function () {
                    this._container.off();
                },
                /**
                 * Обработчик клика на конроле настроек.
                 * @function
                 * @name RegionSelector.OptsView._onItemClick
                 * @param {jQuery.Event} e Объект-событие.
                 */
                _onItemClick: function (e) {
                    e.preventDefault();

                    var item = $(e.currentTarget);

                    this.unsetActiveItem(item.parent())
                        .setActiveItem(item);

                    this.events.trigger($.Event('optionschange', {
                        options: item.data()
                    }));
                },
                /**
                 * Выделить элемент списка контрола.
                 * @function
                 * @name RegionSelector.OptsView.setActiveItem
                 * @param {jQuery} item Элемент списка контрола.
                 * @returns {RegionSelector.OptsView} Возвращает ссылку на себя.
                 */
                setActiveItem: function (item) {
                    item.find('a')
                        .prepend($(this._activeIconTemplate));

                    return this;
                },
                /**
                 * Снять выделение элемента списка контрола.
                 * @function
                 * @name RegionSelector.OptsView.unsetActiveItem
                 * @param {jQuery} container Родительский элемент.
                 * @returns {RegionSelector.OptsView} Возвращает ссылку на себя.
                 */
                unsetActiveItem: function (container) {
                    container.find('.icon-ok')
                        .remove();

                    return this;
                }
            });

            provide(OptsView);

        });

        ym.modules.define('RS.TitleView', [
          'util.defineClass'],
            function (provide, defineClass) {
                /**
                 * Класс-отображение заголовка.
                 * @class
                 * @name RegionSelector.TitleView
                 * @param {jQuery} container Родителький элемент контрола.
                 */
                var TitleView = defineClass(function (container) {
                    this._container = container;
                    this._template = '<p><a href="#">%s</a></p>';
                    this.events = $({});
                }, /** @lends RegionSelector.TitleView.prototype */ {
                    /**
                     * Отображение данных в DOM-дереве.
                     * @function
                     * @name RegionSelector.TitleView.render
                     * @param {ymaps.data.Manager} data Данные регионов.
                     * @returns {RegionSelector.TitleView} Возвращает ссылку на себя.
                     */
                    render: function (data) {
                        var title = data.get('regions').properties.get('hintContent');

                        this._container
                            .append(this._template.replace('%s', title));
                        this._attachHandlers();

                        return this;
                    },
                    /**
                     * Удаление данных из DOM-дерева.
                     * @function
                     * @name RegionSelector.TitleView.clear
                     * @returns {RegionSelector.TitleView} Возвращает ссылку на себя.
                     */
                    clear: function () {
                        this._detachHandlers();
                        this._container.empty();

                        return this;
                    },
                    /**
                     * Добавление обработчиков событий.
                     * @function
                     * @private
                     * @name RegionSelector.TitleView._attachHandlers
                     */
                    _attachHandlers: function () {
                        this._container.on('click', 'a', $.proxy(this._onTitleClick, this));
                    },
                    /**
                     * Удаление обработчиков событий.
                     * @function
                     * @private
                     * @name RegionSelector.TitleView._detachHandlers
                     */
                    _detachHandlers: function () {
                        this._container.off('click');
                    },
                    /**
                     * Обработчик клика на заголовке.
                     * @function
                     * @private
                     * @name RegionSelector.TitleView._onTitleClick
                     * @param {jQuery.Event} e Объект-событие.
                     */
                    _onTitleClick: function (e) {
                        e.preventDefault();

                        this.events.trigger($.Event('titleclick'));
                    }
                });

                provide(TitleView);

            });

        ym.modules.define('RS.RegionSelector', [
          'util.defineClass',
          'RS.Model',
          'RS.OptsView',
          'RS.TitleView',
          'RS.MapView',
          'RS.MapMaskView',
          'RS.ListView'
        ], function (provide, defineClass, Model, OptsView, TitleView, MapView, MapMaskView, ListView) {

            /**
             * Класс-контрол выбора региона
             * @class
             * @name RegionSelector
             * @param {ymaps.Map} map Карта.
             * @param {jQuery} listContainer Контейнер списка областей.
             * @param {jQuery} optContainer Контейнер для настроек.
             * @param {jQuery} titleContainer Контейнер заголовка.
             */
            var RegionSelector = defineClass(function (map, listContainer, optContainer, titleContainer) {
                this._model = new Model();
                this._views = [
        this._listView = new ListView(listContainer),
        this._optsView = new OptsView(optContainer),
        this._titleView = new TitleView(titleContainer),
        this._mapView = new MapView(map),
        this._mapMaskView = new MapMaskView(map)
    ];

                this._attachHandlers();
                this._model.load();
            }, /** @lends RegionSelector.prototype */ {
                /**
                 * Добавление обработчиков событий.
                 * @function
                 * @private
                 * @name RegionSelector._attachHandlers
                 */
                _attachHandlers: function () {
                    this._model.events.add('load', this._onRegionsLoaded, this);
                    this._mapView.events.add('itemselected', this._onMapItemSelected, this);
                    this._listView.events.on('itemselected', $.proxy(this._onListItemSelected, this));
                    this._optsView.events.on('optionschange', $.proxy(this._onOptionsChange, this));
                    this._titleView.events.on('titleclick', $.proxy(this._onTitleClick, this));
                },
                /**
                 * Удаление обработчиков событий.
                 * @function
                 * @private
                 * @name RegionSelector._detachHandlers
                 */
                _detachHandlers: function () {
                    this._titleView.events.off();
                    this._optsView.events.off();
                    this._listView.events.off();
                    this._mapView.events.remove('regionselected', this._onRegionSelected, this);
                    this._model.events.remove('load', this._onRegionsLoaded, this);
                },
                /**
                 * Обработчик события загрузки данных о регионах.
                 * @function
                 * @private
                 * @name RegionSelector._onRegionsLoaded
                 * @param {ymaps.data.Manager} data Менеджер данных.
                 */
                _onRegionsLoaded: function (data) {
                    for (var i = 0, len = this._views.length; i < len; i++) {
                        this._views[i]
                            .clear()
                            .render(data);
                    }
                },
                /**
                 * Обработчик выбора региона на карте.
                 * @function
                 * @private
                 * @name RegionSelector._onMapItemSelected
                 * @param {ymaps.data.Manager} e Менеджер данных.
                 */
                _onMapItemSelected: function (e) {
                    var index = e.get('index');

                    this._listView
                        .unsetActiveItem()
                        .setActiveItem(index)
                        .scrollToItem(index);
                },
                /**
                 * Обработчик выбора региона в списке.
                 * @function
                 * @private
                 * @name RegionSelector._onListItemSelected
                 * @param {jQuery.Event} e Объект-событие.
                 */
                _onListItemSelected: function (e) {
                    var index = e.itemIndex;

                    this._mapView
                        .unsetActiveItem()
                        .setActiveItem(index)
                        .setFocusOnRegion(index);
                },
                _onTitleClick: function (e) {
                    this._mapView
                        .unsetActiveItem()
                        .setFocusOnRegions();

                    this._listView
                        .unsetActiveItem();
                },
                /**
                 * Обработчик смены настроек.
                 * @function
                 * @private
                 * @name RegionSelector._onOptionsChange
                 * @param {jQuery.Event} e Объект-событие.
                 */
                _onOptionsChange: function (e) {
                    this._model.options.set(e.options);
                }
            });

            provide(RegionSelector);

        });
    })(this);



});
}