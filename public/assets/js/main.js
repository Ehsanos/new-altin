$('#main-slider').owlCarousel({
    center: true,
    items: 1,
    dots: false,
    loop: true,
    margin: 10,
    autoplay: true,
    rtl: true,
    animateOut: 'slideOutDown',
    autoplayTimeout: 4000,
});
$('#products').owlCarousel({
    center: false,
    autoplayTimeout: 7000,
    loop: true,
    margin: 0,
    autoplay: true,
    rtl: true,
    dots: true,
    mouseDrag: true,
    responsive: {
        0: {
            items: 2,
            center: false,
        },
        600: {
            items: 3
        },
        1024: {
            items: 4
        },
        1366: {
            items: 4
        }
    }
});

$('#sections-slider').owlCarousel({
    center: false,
    autoplayTimeout: 7000,
    loop: true,
    autoplay: true,
    rtl: true,
    dots:false,
    mouseDrag: true,
    responsive: {
        0: {
            items: 2,
        },
        600: {
            items: 3
        },
        1024: {
            items: 4
        },
        1366: {
            items: 4
        }
    }
});

$('#sections').owlCarousel({
    center: false,
    autoplayTimeout: 7000,
    dots: false,
    loop: true,
    autoplay: true,
    rtl: true,
    mouseDrag: true,
    responsive: {
        0: {
            items: 2,
padding:0,
            margin:0

        },
        600: {
            items: 3,
        },
        1024: {
            items: 4,
        },

    }
});

$('#sections-2').owlCarousel({
    center: false,
    autoplayTimeout: 6000,

    loop: true,
    autoplay: true,
    rtl: true,
    mouseDrag: true,
    responsive: {
        0: {
            items: 2,
            center: false,

        },
        600: {
            items: 3,
        },
        1024: {
            items: 4,
        },

    }
});

$('#relative_products').owlCarousel({
    loop: true,
    autoplay: true,
    rtl: true,
    dots:false,
    autoplayTimeout: 7000,
    mouseDrag: true,
    responsive: {
        0: {
            items: 2,

        },
        600: {
            items: 4,
        },
        1024: {
            items: 5,
        },

    }
});


$('#news').owlCarousel({
    autoplayTimeout: 6000,

    center: false,
    loop: true,
    margin: 3,
    autoplay: true,
    rtl: true,
    mouseDrag: true,
    responsive: {
        0: {
            items: 1,
            center: false,
        },
        600: {
            items: 2,
        },

    }
});

$(function () {
    $('.srch-button').click(function () {
        var $wrapper = $('.srch-wrapper'),
            isOpen = $wrapper.hasClass('open');
        $wrapper.toggleClass('open')
            .find('.srch-input')[isOpen ? 'blur' : 'focus']();
        // remove this - onyl for demo
        if (!isOpen) return false

    });

})


$('.hero-slider').owlCarousel({});


var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
    return new bootstrap.Dropdown(dropdownToggleEl)
})

const nav = document.querySelector('#nav-product');
const products_div = document.querySelector('#products_div');
const close = document.querySelector('#close');

const nav1 = document.querySelector('#nav1');
const nav2 = document.querySelector('#nav2');
const nav3 = document.querySelector('#nav3');
const nav4 = document.querySelector('#nav4');
const nav5 = document.querySelector('#nav5');

nav1.addEventListener('mousemove', () => {
    products_div.classList.remove("products-show")
    products_div.classList.add("products-div")
})
nav2.addEventListener('mousemove', () => {
    products_div.classList.remove("products-show")
    products_div.classList.add("products-div")
})
nav3.addEventListener('mousemove', () => {
    products_div.classList.remove("products-show")
    products_div.classList.add("products-div")
})
nav4.addEventListener('mousemove', () => {
    products_div.classList.remove("products-show")
    products_div.classList.add("products-div")
})

nav.addEventListener('mousemove', (eo) => {

    products_div.classList.add("products-show")

})

nav.addEventListener('mouseleave', () => {
    products_div.classList.remove("products-div")

})


products_div.addEventListener('mouseleave', () => {
    products_div.classList.remove("products-show")
    products_div.classList.add("products-div")
})


function show(x) {

    x.firstElementChild.classList.add('adding-show')
    x.firstElementChild.classList.remove('adding-hidden')
    x.firstElementChild.load = fadeTime
}

function showsmall(x) {

    x.firstElementChild.classList.add('adding-show-small')
    x.firstElementChild.classList.remove('adding-hidden')
    x.firstElementChild.load = fadeTime
}

function hide(x) {
    x.firstElementChild.classList.add('adding-hidden')
    x.firstElementChild.classList.remove('adding-show')

}

function hide2(x) {
    x.firstElementChild.classList.add('adding-hidden')
    x.firstElementChild.classList.remove('adding-show-small')

}

const cnt=document.getElementById('cnt')
const loader=document.getElementById('loader')

window.onload=function (){

    setTimeout(function (){
        cnt.style.display='block';
        loader.style.display='none';
    },1000)



}

let icon=document.getElementById('serach-top-icon');
var under=document.getElementById('under-nav')

icon.addEventListener('click',()=>{
    under.classList.toggle('top-div-under-nav')
})


