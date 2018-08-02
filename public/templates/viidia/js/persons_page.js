(function ($) {
    var connector = function(itemNavigation, carouselStage) {
        return carouselStage.jcarousel('items').eq(itemNavigation.index());
    };



    (function () {
        var carouselStage = $('.expert-carousel.jcarousel')
            .on('jcarousel:reload jcarousel:create', function () {
                var carousel = $(this);
                carousel.jcarousel('items').css('width', carousel.innerWidth());
            })
            .jcarousel()
            .jcarouselSwipe();

        var carouselNavigation = $('.experts-list.jcarousel')
            .on('jcarousel:reload jcarousel:create', function () {
                var carousel = $(this),
                    width = ($(window).width()>1007) ? Math.round((carousel.innerWidth() / 4)-0.5) + 'px' : '';
                carousel.jcarousel('items').css('width', width);
            })
            .jcarousel()
            .jcarouselSwipe();

        carouselNavigation.jcarousel('items').each(function() {
            var item = $(this);

            // This is where we actually connect to items.
            var target = connector(item, carouselStage);

            item
                .on('jcarouselcontrol:active', function() {
                    carouselNavigation.jcarousel('scrollIntoView', this);
                    item.find('a').addClass('active');
                })
                .on('jcarouselcontrol:inactive', function() {
                    item.find('a').removeClass('active');
                })
                .jcarouselControl({
                    target: target,
                    carousel: carouselStage
                });
        });



        $('.expert-carousel__pagination')
            .on('jcarouselpagination:active', 'a', function () {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function () {
                $(this).removeClass('active');
            })
            .on('click', function (e) {
                e.preventDefault();
            })
            .jcarouselPagination({
                item: function (page) {
                    return '<a href="#' + page + '">' + page + '</a>';
                }
            });

        $('.expert-carousel__control-prev')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '-=1'
            });

        $('.expert-carousel__control-next')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '+=1'
            });



        $('.experts-list__control-prev')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '-=1'
            });

        $('.experts-list__control-next')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '+=1'
            });
    })();



})(jQuery);