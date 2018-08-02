(function ($) {
    $('.video-carousel ul li span').on('click', function () {
        $('#big-video').html($(this).prev('div').html())
    });

    $('.video-carousel')
        .on('jcarousel:targetin', 'li', function() {
            if($(window).width()>1007)
                $(this).find('span').trigger('click')
        })
        .on('jcarousel:targetout', 'li', function() {
            if($(window).width()<=1007)
                $(this).find('.video-wrap').html($(this).find('.video-wrap').html())
        })
        .mousewheel(function (event) {
            if (event.deltaX > 0 || event.deltaY < 0) {
                $(this).jcarousel('scroll', '+=1');
            } else if (event.deltaX < 0 || event.deltaY > 0) {
                $(this).jcarousel('scroll', '-=1');
            }
            event.preventDefault()
        })
        .jcarousel({
            vertical: true,
            wrap: 'circular'
        })
        .jcarouselSwipe();

    $('.video-carousel-pagination')
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

    $('.video-carousel-up')
        .on('jcarouselcontrol:active', function() {
            $(this).removeClass('inactive');
        })
        .on('jcarouselcontrol:inactive', function() {
            $(this).addClass('inactive');
        })
        .jcarouselControl({
            target: '-=1'
        });

    $('.video-carousel-down')
        .on('jcarouselcontrol:active', function() {
            $(this).removeClass('inactive');
        })
        .on('jcarouselcontrol:inactive', function() {
            $(this).addClass('inactive');
        })
        .jcarouselControl({
            target: '+=1'
        });


})(jQuery);