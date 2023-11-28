$('.header__burger').click(function (event) {
    $('.header__burger,.header__menu').toggleClass('active');
    $('body').toggleClass('lock')
}); 

var lazyBgImg = function( el ) {
    var lazyBgImgs = $(el).find('.lazy-bg-img');
    lazyBgImgs.each(function(i) {
        var el = $(this);
        if ( !el.hasClass('is-lazy-loaded') ) {
            el.addClass('is-lazy-loaded');
        }
    });
}
s.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
    if ( currentSlide !== nextSlide ) {
        lazyBgImg( $(slick.$slides.get(nextSlide)) );
    }
});