(function ($) {
    $(".gallery-album").on("click", function () {
        var gallery = $("[data-fancybox=gallery"+$(this).data('gallery')+"]");
        if(gallery.length> 0) {
            gallery.eq(0).trigger("click");
        }

        return false;
    });

    $('.types').on('click', 'a', function () {
        var target = $(this).data('target');
        $('a[data-target='+target+']').addClass('active').siblings('.active').removeClass('active');

        $('[data-type]').hide();
        $('[data-type='+target+']').show();
        return false;
    })
})(jQuery);