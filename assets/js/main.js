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
    loop: true,
    margin: 10,
    autoplay: false,
    autoplayTimeout: 1000,
    autoplayHoverPause: true,
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
        if (writerCount >= text.length) {
            setTimeout(function () {
                typeCleaner();
            }, 2000);
            clearInterval(typeWriterInterval);
            return;
        }
        $('.typewriter').text($('.typewriter').text() + text[writerCount]);
        writerCount++;
    }, 100);
}

function typeCleaner() {
    clearInterval(typeWriterInterval);
    typeCleanerInterval = setInterval(function () {
        if (writerCount <= 0) {
            setTimeout(function () {
                typeWriter();
            }, 2000);
            clearInterval(typeCleanerInterval);
            return;
        }

        $('.typewriter').text($('.typewriter').text().slice(0, -1));
        writerCount--;
    }, 100);
}

(function () {
    typeWriter();
}());

function calcCount() {
    for (let i = 0; i < $('.item-count').length; i++) {
        let start = $('.item-count').eq(i).attr('data-min');
        let end = $('.item-count').eq(i).attr('data-max');
        let delay = $('.item-count').eq(i).attr('data-delay');
        countStart(start, end, i, delay);
    }
}

function countStart(start, end, i, delay) {
    let interval = setInterval(function () {
        $('.item-count').eq(i).text(++start);
        if (start == end) {
            clearInterval(interval);
        }
    }, delay);
}

$(function() {
    const blockTop = $('.doubt').offset().top;
    let CountUpFlag = false;
    const $window = $(window);
    $window.on('load scroll', function() {
        const top = $window.scrollTop();
        const height = $window.height();
        if (top + height >= blockTop && CountUpFlag === false) {
            calcCount();
            CountUpFlag = true;
        }
    });
});

$('#faq-list').on('show.bs.collapse', function (e) {
    let elem = $(e.target).siblings('.card-header');
    $(elem).css('background', '#f5914f');
    $(elem).find('button').css('color', '#fff');
});

$('#faq-list').on('hide.bs.collapse', function (e) {
    let elem = $(e.target).siblings('.card-header');
    $(elem).css('background', '#fff');
    $(elem).find('button').css('color', '#f5914f');

});

