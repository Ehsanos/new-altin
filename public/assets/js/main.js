$('#main-slider').owlCarousel({
    center: true,
    items:1,
     dots:false,
    loop:true,
    margin:10,
    autoplay:true,
    rtl:true,
   animateOut: 'slideOutDown',
    autoplayTimeout:3000,
});
$('#products').owlCarousel({
    center: false,
    autoplayTimeout:3000,
    loop:true,
    margin:0,
    autoplay:true,
    rtl:true,
     dots:true,
    mouseDrag:true,
    responsive:{
        0:{
            items:2,
             center: false,
        },
        600:{
            items:3
        },
        1024:{
            items:4
        },
        1366:{
            items:4
        }
    }
});

$('#sections').owlCarousel({
    center: false,
    autoplayTimeout:3000,

    loop:true,
    margin:10,
    autoplay:true,
    rtl:true,
    mouseDrag:true,
    responsive:{
        0:{
            items:2,
             center: false,
             dots:true,

        },
        600:{
            items:3,
             dots:true,
        },
        1024:{
            items:4,
             dots:true,
        },

    }
});

$('#relative_products').owlCarousel({
    center: false,

    loop:true,
    margin:10,
    autoplay:true,
    rtl:true,
    autoplayTimeout:5000,
    mouseDrag:true,
    responsive:{
        0:{
            items:2,
             center: false,
             dots:true,

        },
        600:{
            items:4,
             dots:true,
        },
        1024:{
            items:6,
             dots:true,
        },

    }
});



$('#news').owlCarousel({
    autoplayTimeout:3000,

   center: false,
    loop:true,
    margin:0,
    autoplay:true,
    rtl:true,
     dots:true,
    mouseDrag:true,
    responsive:{
        0:{
            items:2,
             center: false,
        },
        600:{
            items:3,
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
    if(!isOpen)return false

  });

})


$('.hero-slider').owlCarousel({});
