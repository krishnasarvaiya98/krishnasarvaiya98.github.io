$('.testimonial').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    responsive:{
        0:{
            items:1
        }
    }
})

$('.header-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:true,
    responsive:{
        0:{
            items:1
        }
    }
})