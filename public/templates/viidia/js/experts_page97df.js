(function ($) {

    (function () {
        $('.experts-list.jcarousel')
            .on('jcarousel:reload jcarousel:create', function () {
                var carousel = $(this),
                    width = ($(window).width()>1007) ? Math.round((carousel.innerWidth() / 4)) + 'px' : '';
                carousel.jcarousel('items').css('width', width);
            })
            .on('jcarousel:visiblein', 'li', function(event, carousel) {
                $(this).css('opacity', 1)
            })
            .on('jcarousel:visibleout', 'li', function(event, carousel) {
                $(this).css('opacity', 0)
            })
            .jcarousel({
                wrap: 'circular'
            })
            .jcarouselSwipe();

        $('.experts-list__pagination')
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