$('#main-slider').owlCarousel({
    center: true,
    items:1,
     dots:true,
    loop:true,
    margin:10,
    autoplay:true,
    rtl:true,
   animateOut: 'slideOutDown',
});
$('#products').owlCarousel({
    center: false,
    
    loop:true,
    margin:0,
    autoplay:true,
    rtl:true,
     dots:true,
    mouseDrag:true,
    responsive:{
        0:{
            items:1,
             center: false,
        },
        600:{
            items:2
        },
        1024:{
            items:3
        },
        1366:{
            items:4
        }
    }
});

$('#sections').owlCarousel({
    center: false,
   
    loop:true,
    margin:10,
    autoplay:true,
    rtl:true,
    mouseDrag:true,
    responsive:{
        0:{
            items:1,
             center: false,
             dots:true,
            
        },
        600:{
            items:2,
             dots:true,
        },
        1024:{
            items:3,
             dots:true,
        },
       
    }
});
$('#news').owlCarousel({
   
   center: false,
    loop:true,
    margin:0,
    autoplay:true,
    rtl:true,
     dots:true,
    mouseDrag:true,
    responsive:{
        0:{
            items:1,
             center: false,
        },
        600:{
            items:2
        },
     
    }
});

$(function() {
  $('.srch-button').click(function(){
    var $wrapper = $('.srch-wrapper'), 
        isOpen = $wrapper.hasClass('open');
    $wrapper.toggleClass('open')
      .find('.srch-input')[isOpen ? 'blur' : 'focus']();
    // remove this - onyl for demo
    return false;
  });
  
})


$('.hero-slider').owlCarousel({});
    