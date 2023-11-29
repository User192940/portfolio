$(function () {

    "use strict";

    function initMap() {
        const myLatLng = {
          lat: 44.513458251953125,
          lng: -88.0158920288086
        };
        const map = new google.maps.Map(document.getElementById("gmp-map"), {
          zoom: 14,
          center: myLatLng,
          fullscreenControl: false,
          zoomControl: true,
          streetViewControl: false
        });
        new google.maps.Marker({
          position: myLatLng,
          map,
          title: "My location"
        });
      }
    /***************************

    anchor scroll

    ***************************/
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        var target = $($.attr(this, 'href'));
        var offset = 90;

        $('html, body').animate({
            scrollTop: target.offset().top - offset
        }, 400);
    });
    /***************************

    back to top

    ***************************/
    const btt = document.querySelector(".mil-back-to-top .mil-link");

    const appearance = document.querySelectorAll(".mil-up");

    const rotate = document.querySelectorAll(".mil-rotate");


    const progGo = document.querySelectorAll(".mil-circular-progress");

    /***************************

    counter

    ***************************/
    const number = $(".mil-counter");

    const width = document.querySelectorAll(".mil-bar");

    /***************************

    navigation

    ***************************/
    $(".mil-menu-btn").on("click", function () {
        $(this).toggleClass('mil-active');
        $('.mil-navigation').toggleClass('mil-active');
    });

    function createAnimation(element) {
        let menu = element.querySelector(".mil-accordion-menu");
        let title = element.querySelector(".mil-accordion-menu h6");
        let box = element.querySelector(".mil-accordion-content");
        let minusElement = element.querySelector(".mil-minus");
        let plusElement = element.querySelector(".mil-plus");


        return function (clickedMenu) {
            if (clickedMenu === menu) {
                animation.reversed(!animation.reversed());
            } else {
                animation.reverse();
            }
        };
    }


    /*----------------------------------------------------------
    ------------------------------------------------------------

    REINIT

    ------------------------------------------------------------
    ----------------------------------------------------------*/
    document.addEventListener("swup:contentReplaced", function () {

        $(".mil-navigation , .mil-menu-btn").removeClass('mil-active');
        $(".mil-navigation , .about-anchor").removeClass('mil-active');
        $(".mil-navigation , .projects-anchor").removeClass('mil-active');
        $(".mil-navigation , .contact-anchor").removeClass('mil-active');


        /***************************

        back to top

        ***************************/
        const btt = document.querySelector(".mil-back-to-top .mil-link");

        const appearance = document.querySelectorAll(".mil-up");

        const rotate = document.querySelectorAll(".mil-rotate");

        const progGo = document.querySelectorAll(".mil-circular-progress");

        const number = $(".mil-counter");

        const width = document.querySelectorAll(".mil-bar");

        var swiper = new Swiper('.mil-reviews-slider', {
            spaceBetween: 30,
            speed: 800,
            parallax: true,
            navigation: {
                nextEl: '.mil-reviews-next',
                prevEl: '.mil-reviews-prev',
            },
            pagination: {
                el: '.swiper-reviews-pagination',
                clickable: true,
            },
        });

        /***************************

        portfolio carousel

        ***************************/
        var swiper = new Swiper('.mil-portfolio-carousel', {
            spaceBetween: 90,
            speed: 800,
            parallax: true,
            mousewheel: {
                enable: true
            },
            navigation: {
                nextEl: '.mil-portfolio-next',
                prevEl: '.mil-portfolio-prev',
            },
            pagination: {
                el: '.mil-portfolio-pagination',
                type: 'fraction',
            },
        });

        function createAnimation(element) {
            let menu = element.querySelector(".mil-accordion-menu");
            let title = element.querySelector(".mil-accordion-menu h6");
            let box = element.querySelector(".mil-accordion-content");
            let minusElement = element.querySelector(".mil-minus");
            let plusElement = element.querySelector(".mil-plus");

            return function (clickedMenu) {
                if (clickedMenu === menu) {
                    animation.reversed(!animation.reversed());
                } else {
                    animation.reverse();
                }
            };
        }

    });

});
