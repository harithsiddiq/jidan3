<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class=" overflow-x-hidden"
    dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="{{ asset("/assets/img/favicon.png") }}" type="image/x-icon" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset("assets/css/animate.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/font-awesome-pro.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/flaticon_gerold.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/nice-select.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/backToTop.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/owl.carousel.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/swiper.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/odometer-theme-default.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/magnific-popup.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/nice-select.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/backToTop.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/lightcase.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}" />


    @livewireStyles

    {{ seo()->render() }}

</head>


<body class="font-sora dark:bg-dark-color relative">
    <!-- Preloader Area Start -->
    <div class="preloader">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="preloaderSvg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="preloader-heading">
            <div class="load-text">
                <span>L</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
            </div>
        </div>
    </div>
    <!-- Preloader Area End -->

    <!-- start: Back To Top -->
    <div class="progress-wrap" id="scrollUp">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <x-crm::header />


    <main class="main-wrapper  overflow-hidden">


        {{ $slot }}


    </main>

    <x-crm::footer />

    <!-- JSS here -->
    <script src="{{ asset("assets/js/jquery.min.js") }}"></script>
    <script src="{{ asset("assets/js/gsap.min.js") }}"></script>
    <script src="{{ asset("assets/js/gsap-scroll-to-plugin.min.js") }}"></script>
    <script src="{{ asset("assets/js/gsap-scroll-trigger.min.js") }}"></script>
    <script src="{{ asset("assets/js/gsap-split-text.min.js") }}"></script>
    <script src="{{ asset("assets/js/appear.min.js") }}"></script>
    <script src="{{ asset("assets/js/wow.min.js") }}"></script>
    <script src="{{ asset("assets/js/odometer.min.js") }}"></script>
    <script src="{{ asset("assets/js/imagesloaded-pkgd.js") }}"></script>
    <script src="{{ asset("assets/js/isotope.pkgd.min.js") }}"></script>
    <script src="{{ asset("assets/js/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("assets/js/nice-select.min.js") }}"></script>
    <script src="{{ asset("assets/js/backToTop.js") }}"></script>
    <script src="{{ asset("assets/js/lenis.min.js") }}"></script>
    <script src="{{ asset("assets/js/swiper.min.js") }}"></script>
    <script src="{{ asset("assets/js/vanilla-tilt.min.js") }}"></script>
    <script src="{{ asset("assets/js/sticky.min.js") }}"></script>
    <script src="{{ asset("assets/js/lightcase.js") }}"></script>
    <script src="{{ asset("assets/js/validate.min.js") }}"></script>
    <script src="{{ asset("assets/js/main.js") }}"></script>
    <script src="{{ asset("assets/js/tj-cursor.js") }}">
    </script>

</body>


</html>
