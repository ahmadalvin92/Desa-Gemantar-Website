<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Desa Gemantar</title>

    <link rel="stylesheet" href="{{asset('assets/style/style.css')}}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" />

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/owlcarousel2/dist/assets/owl.carousel.min.css') }}" />
</head>

<body>
   @yield('main')

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/typed-js/typed.js') }}"></script>

    <script type="text/javascript">
        $(function() {
            $('.slide-one-item').owlCarousel({
                center: false,
                autoplayHoverPause: true,
                items: 1,
                loop: true,
                stagePadding: 0,
                margin: 0,
                smartSpeed: 1500,
                autoplay: true,
                pauseOnHover: false,
                dots: true,
                nav: true,
                navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
            });
        });

        $(window).scroll(function() {
            if ($(this).scrollTop() > 1) {
                $("#beranda").addClass("sticky_header");
            } else {
                $("#beranda").removeClass("sticky_header");
            }
        });
    </script>
    <script>
        (function() {
            "use strict"
            /**
             * Easy selector helper function
             */
            const select = (el, all = false) => {
                el = el.trim()
                if (all) {
                    return [...document.querySelectorAll(el)]
                } else {
                    return document.querySelector(el)
                }
            }

            /**
             * Easy event listener function
             */
            const on = (type, el, listener, all = false) => {
                let selectEl = select(el, all)
                if (selectEl) {
                    if (all) {
                        selectEl.forEach((e) => e.addEventListener(type, listener))
                    } else {
                        selectEl.addEventListener(type, listener)
                    }
                }
            }
            /**
             * Hero carousel indicators
             */
            let heroCarouselIndicators = select("#hero-carousel-indicators")
            let heroCarouselItems = select("#heroCarousel .carousel-item", true)

            heroCarouselItems.forEach((item, index) => {
                index === 0 ?
                    (heroCarouselIndicators.innerHTML +=
                        "<li data-bs-target='#heroCarousel' data-bs-slide-to='" +
                        index +
                        "' class='active'></li>") :
                    (heroCarouselIndicators.innerHTML +=
                        "<li data-bs-target='#heroCarousel' data-bs-slide-to='" +
                        index +
                        "'></li>")
            })
            /**
             * Easy on scroll event listener
             */
            const onscroll = (el, listener) => {
                el.addEventListener("scroll", listener)
            }

            /**
             * Toggle .header-scrolled class to #header when page is scrolled
             */
            let selectHeader = select("#header")
            if (selectHeader) {
                const headerScrolled = () => {
                    if (window.scrollY > 100) {
                        selectHeader.classList.add("header-scrolled")
                    } else {
                        selectHeader.classList.remove("header-scrolled")
                    }
                }
                window.addEventListener("load", headerScrolled)
                onscroll(document, headerScrolled)
            }
        })()
    </script>
    <script>
        var typed = new Typed('#animation', {
          strings: [
            "Desa Gemantar, Kec. Mondokan, Kab. Sragen",
            "Website Resmi Desa Gemantar"
          ],
          typeSpeed: 100,
          backSpeed: 50,
          loop: true
        });
    </script>
    <script>
      window.onload = function(){
        document.getElementById("outoplay").play();
      }
    </script>
</body>

</html>
