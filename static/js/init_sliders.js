$(document).ready(function () {
        $('.main_slider-wrapper').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,  
            autoplay: true,
            autoplaySpeed: 3000,
            lazyLoad: 'ondemand',
        }); 
    
        $('.main_price-table-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },                
            ],
        });     
    
        $('.testimonials_slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: true,            
        }); 
    
        $('.about_slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },                
            ],
        });
    
        $('.main_price-collect-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            autoplay:true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },                
            ],
        });   
    
        // $('.testimonials_slider').slick({
        //     slidesToShow: 1,
        //     slidesToScroll: 1,
        //     arrows: true,
        //     dots: true,  
        //     autoplay:true
        // }); 
        $('.acts-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: true,    
            autoplay:true
        }); 
        
        $('.post_gallery-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            autoplay:true,
            responsive: [
                {
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },     
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                }, 
                {
                    breakpoint: 400,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }, 
            ],           
        }); 
    
        // Initialize
        var bLazy = new Blazy({ 
            container: '.main_slider-wrapper' // Default is window
        });


        $('.main_slider-wrapper').on('afterChange', function(event, slick, direction){
        bLazy.revalidate();
        // left
        });
});