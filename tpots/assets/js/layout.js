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

function closeNav() {
    document.getElementById("navbarNav").style.width = "0";
    document.getElementById("navbar-fixed").style.marginLeft = "0" ;
    $('#navbarNav').removeClass('show');
    document.getElementById("header-tpots-img").style.display = "block";
    document.getElementById("togglebtn-header").style.display = "block";   


  }

  function openNav() {
    document.getElementById("navbarNav").style.width = "250px";
    document.getElementById("navbar-fixed").style.marginLeft = "250px";
    document.getElementById("header-tpots-img").style.display = "none";
    document.getElementById("togglebtn-header").style.display = "none";   
  }