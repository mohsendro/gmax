// menu script
jQuery(document).ready(function($) {
    jQuery('.stellarnav').stellarNav({
        theme: 'plain',
        breakpoint: 1199.98,
        position: 'right',
        menuLabel: 'فهرست',
        closeBtn: false,
        closeLabel: 'بستن',
        openingSpeed: 250,
        closingDelay: 250,
        // theme: 'plain', // adds default color to nav. (light, dark)
        // breakpoint: 768, // number in pixels to determine when the nav should turn mobile friendly
        // menuLabel: 'Menu', // label for the mobile nav
        // sticky: false, // makes nav sticky on scroll (desktop only)
        // position: 'static', // 'static', 'top', 'left', 'right' - when set to 'top', this forces the mobile nav to be placed absolutely on the very top of page
        // openingSpeed: 250, // how fast the dropdown should open in milliseconds
        // closingDelay: 250, // controls how long the dropdowns stay open for in milliseconds
        // showArrows: true, // shows dropdown arrows next to the items that have sub menus
        // phoneBtn: '', // adds a click-to-call phone link to the top of menu - i.e.: "18009084500"
        // phoneLabel: 'Call Us', // label for the phone button
        // locationBtn: '', // adds a location link to the top of menu - i.e.: "/location/", "http://site.com/contact-us/"
        // locationLabel: 'Location', // label for the location button
        // closeBtn: false, // adds a close button to the end of nav
        // closeLabel: 'Close', // label for the close button
        // mobileMode: false,
        // scrollbarFix: false // fixes horizontal scrollbar issue on very long navs
    });
});

// swipers script
var swiper = new Swiper(".sliderSwiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    // pagination: {
    //     el: ".swiper-pagination",
    //     clickable: true,
    // },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        576: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        768: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        992: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        1200: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        1400: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
    },
    scrollbar: {
      el: ".slider-swiper-scrollbar",
      hide: true,
    },
});

var swiper = new Swiper(".infoBoxSwiper", {
    slidesPerView: 1,
    spaceBetween: 15,
    slidesPerGroup: 1,
    centeredSlides: true,
    loop: true,
    loopFillGroupWithBlank: true,
    // pagination: {
    //     el: ".swiper-pagination",
    //     clickable: true,
    // },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 15,
        },
        576: {
            slidesPerView: 1.2,
            spaceBetween: 15,
        },
        768: {
            slidesPerView: 1.4,
            spaceBetween: 15,
        },
        992: {
            slidesPerView: 2.4,
            spaceBetween: 15,
        },
        1200: {
            slidesPerView: 2.6,
            spaceBetween: 15,
        },
        1400: {
            slidesPerView: 2.6,
            spaceBetween: 15,
        },
    },
});

var swiper = new Swiper(".blogSwiper", {
    slidesPerView: 1,
    spaceBetween: 15,
    slidesPerGroup: 1,
    // centeredSlides: true,
    loop: true,
    loopFillGroupWithBlank: true,
    // pagination: {
    //     el: ".blog-swiper-pagination",
    //     clickable: true,
    // },
    navigation: {
        nextEl: ".blogswiper-button-next",
        prevEl: ".blogswiper-button-prev",
    },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    mousewheel: {
        forceToAxis: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        576: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 15,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
        1400: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
    },
});


// newsletter animation script
const bodymovinDiv = document.querySelector('.bodymovin');
const zone = document.querySelector('.zone');
let animationRunning = false;
const animData = {
    container: bodymovinDiv,
    renderer: 'svg',
    loop: false,
    autoplay: false,
    path: 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/49240/stick-man.json'
};

const anim = lottie.loadAnimation(animData);
anim.setSpeed(2.6);

zone.addEventListener('mouseenter', mouseEnter);
zone.addEventListener('mouseleave', mouseLeave);

function mouseEnter() {
    if (!animationRunning) {
        animationRunning = true;
        bodymovinDiv.classList.remove('bodymovin--hidden');
        anim.loop = false;
        anim.setDirection(1);
        anim.playSegments([0, 8], true);
        anim.addEventListener('complete', startLoop);
    }
}

function mouseLeave() {
    // anim.stop();
    bodymovinDiv.classList.add('bodymovin--hidden');
    animationRunning = false;
    anim.removeEventListener('complete', startLoop); // If we leave before the loop starts we want to make sure to clear it
}

function startLoop() {
    anim.loop = true;
    anim.removeEventListener('complete', startLoop);
    anim.playSegments([9, 13], true);
}