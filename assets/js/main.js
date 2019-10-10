$('.header-wrap').height(innerHeight - 80);

$(window).resize(function () {
    $('.header-wrap').height(innerHeight - 80);
});

const wow = new WOW(
    {
        boxClass: 'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 0,          // distance to the element when triggering the animation (default is 0)
        mobile: true,       // trigger animations on mobile devices (default is true)
        live: true,       // act on asynchronously loaded content (default is true)
        scrollContainer: null,    // optional scroll container selector, otherwise use window,
        resetAnimation: true,     // reset animation on end (default is true)
    }
);
wow.init();

let owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    margin:10,
    autoplay:false,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 3,
        }
    }
});


function scrollToAnchor(anchorName) {
    $('html, body').stop().animate({scrollTop: $(anchorName).offset().top}, 1000);
}

const text = "время и деньги";
let writerCount = 0;
let typeWriterInterval;
let typeCleanerInterval;
function typeWriter() {
    typeWriterInterval = setInterval(function () {
        if(writerCount >= text.length) {
            setTimeout(function () {
                typeCleaner();
            }, 2000);
            clearInterval(typeWriterInterval);
            return;
        }
        $('.typewriter').text($('.typewriter').text() + text[writerCount]);
        writerCount++;
    },100);
}

function typeCleaner() {
    clearInterval(typeWriterInterval);
    typeCleanerInterval = setInterval(function () {
        if(writerCount <= 0) {
            setTimeout(function () {
                typeWriter();
            }, 2000);
            clearInterval(typeCleanerInterval);
            return;
        }

        $('.typewriter').text($('.typewriter').text().slice(0, -1));
        writerCount--;
    },100);
}

(function () {
    typeWriter();
}());