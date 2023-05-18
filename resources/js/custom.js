import.meta.glob([
    '../assets/img/**',
    '../assets/fonts/**',
]);

import '../sass/app.scss'
import '../sass/global.scss'

import ClipboardJS from "clipboard";

import * as Popper from '@popperjs/core'
window.Popper = Popper

import jQuery from 'jquery';

window.$ = jQuery;
import * as bootstrap from 'bootstrap'

window.bootstrap = bootstrap;

import slick from 'slick-carousel'

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')

let count = 0;

$(document).ready(function () {

    $(".nav-link").click(function () {
        $('.category-slider').slick('refresh');
    });

    $('.choose-slider, .category-slider').slick({
        dots: false,
        infinite: false,
        speed: 200,
        slidesToShow: 4,
        slidesToScroll: 2,
        responsive: [
            {
                breakpoint: 1500,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2.4,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1.5,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 500,
                settings: {
                    centerMode: true,
                    dots: false,
                    infinite: true,
                    speed: 100,
                    slidesToShow: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $('.customers-slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 2,
        responsive: [
            {
                breakpoint: 1500,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2.4,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1.2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 500,
                settings: {
                    centerMode: true,
                    dots: false,
                    infinite: true,
                    speed: 100,
                    slidesToShow: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });


    // Clipboard

    const clipboard = new ClipboardJS('.btn-clipboard')

    clipboard.on('success', function (e) {

        $('.tooltip-inner').html('Copied')
        $(e.trigger).tooltip('update')

        e.clearSelection()
    })

    clipboard.on('error', function (e) {
        var fallbackMsg = /Mac/i.test(navigator.userAgent) ? 'Press \u2318 to copy' : 'Press Ctrl-C to copy'

        $('.tooltip-inner').html(fallbackMsg)
        $(e.trigger).tooltip('update')
    })

    count = $('input[type=checkbox]:checked').length;
    displayCount();

    $('.category-slider').on('click', '.product-card', function () {
        let product_id = $(this).data('id');
        let count = $(this).data('count');
        let default_price = $(this).data('price');
        let discount_price = parseFloat($(this).data('discount_price')) - parseFloat($(this).data('price'));
        let basket_block = $(this).parents('.tab-pane').find('.product_basket');
        basket_block.find('.product_id').val(product_id);
        basket_block.find('.product_count').val(count);
        basket_block.find('.basket_price').html(default_price);
        basket_block.find('.basket_discount_price').html(discount_price);
    });

    $('input[type=checkbox]').bind('click', function (e, a) {
        if (this.checked) {
            count += a ? -1 : 1;
        } else {
            count += a ? 1 : -1;
        }
        displayCount();
    });
    $('#count-post__reset').click(function (e) {
        $('#count-post, #count-post-2').text(0);
        $('input[type=checkbox]').removeAttr("checked");
        count = 0;
    });
});


$(window).on('load resize', function () {
    if ($(window).width() < 991) {
        $('#mobile-slider:not(.slick-initialized)').slick({
            centerMode: true,
            dots: false,
            infinite: true,
            speed: 100,
            slidesToShow: 1
        });
    } else {
        $("#mobile-slider.slick-initialized").slick("unslick");
    }
});

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('.navbar .dropdown').forEach(function (everydropdown) {
        everydropdown.addEventListener('shown.bs.dropdown', function () {
            let el_overlay = document.createElement('span');
            el_overlay.className = 'screen-darken';
            document.body.appendChild(el_overlay)
        });

        everydropdown.addEventListener('hide.bs.dropdown', function () {
            document.body.removeChild(document.querySelector('.screen-darken'));
        });
    });

});

function displayCount() {
    $('#count-post, #count-post-2').text(count);
}

$(document).ready(function () {
    $('.influencer-slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        responsive: [{
            breakpoint: 1500,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                centerMode: false
            }
        },

            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                    centerMode: false
                }
            }
        ]
    });

    $(".dropdown-item").hover(function () {
        $(this).tab('show');
    });

    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(
        tooltipTriggerEl));

    const btn = document.querySelector(".btn-change-theme, .btn-change-theme--mobile");
    const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

    btn.addEventListener("click", function () {
        if (prefersDarkScheme.matches) {
            document.body.classList.toggle("light-mode");
            var theme = document.body.classList.contains("light-mode") ? "light" : "dark";
        } else {
            document.body.classList.toggle("dark-mode");
            var theme = document.body.classList.contains("dark-mode") ? "dark" : "light";
        }
        document.cookie = "theme=" + theme;
    });


    const anchors = document.querySelectorAll('a.link-scroll')

    for (let anchor of anchors) {
        anchor.addEventListener('click', function (e) {
            e.preventDefault()

            const blockID = anchor.getAttribute('href').substr(1)

            document.getElementById(blockID).scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            })
        })
    }

    var count = 0;
    $(function () {
        count = $('input[type=checkbox]:checked').length;
        displayCount();

        $('input[type=checkbox]').bind('click', function (e, a) {
            if (this.checked) {
                count += a ? -1 : 1;
            } else {
                count += a ? 1 : -1;
            }
            displayCount();
        });
        $('#count-post__reset').click(function (e) {
            $('#count-post, #count-post-2').text(0);
            $('input[type=checkbox]').removeAttr("checked");
            count = 0;
        });
    });

    function displayCount() {
        $('#count-post, #count-post-2').text(count);
    }

    // Gets the video src from the data-src on each button

    var $videoSrc;
    $('.ucard-video').click(function () {
        $videoSrc = $(this).data("src");
    });
    console.log($videoSrc);
    // when the modal is opened autoplay it
    $('#videoModal').on('shown.bs.modal', function (e) {

        // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
        $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");

    })

    // stop playing the youtube video when I close the modal
    $('#videoModal').on('hide.bs.modal', function (e) {
        // a poor man's stop video
        $("#video").attr('src', $videoSrc);
    })
    // document ready
});
