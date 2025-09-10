<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="overflow-x-hidden"
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

    {{-- {{ seo()->render() }} --}}

</head>


<body class="font-sora dark:bg-dark-color relative">
    <!-- Preloader Area Start -->
    <div class="preloader ">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="preloaderSvg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="preloader-heading ">
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
    <div class="progress-wrap bg-primary-color text-center justify-content-center items-center" id="scrollUp">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
            </svg>
    </div>

  <div class="bg-primary-color text-white text-sm fixed top-0 left-0 right-0 z-50 py-5">
        <div class="container mx-auto px-4 py-5">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 items-center">

                <div class="flex flex-col sm:flex-row justify-center md:justify-end items-center space-y-2 sm:space-y-0 sm:space-x-6">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-phone-alt text-gray-400"></i>
                        <a href="tel:+1234567890" class="hover:text-white transition duration-300">+1 234 567 890</a>
                    </div>
                     <div class="flex items-center space-x-2">
                        <i class="fas fa-envelope text-gray-400"></i>
                        <a href="mailto:info@example.com" class="hover:text-white transition duration-300">info@example.com</a>
                    </div>
                     <div class="flex items-center space-x-2">
                        <i class="fas fa-map-marker-alt text-gray-400"></i>
                        <span>New York, USA</span>
                    </div>
                </div>

                <div class="flex justify-center md:justify-start space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <x-crm::header />


    <main class="main-wrapper  overflow-hidden">


        {{ $slot }}


    </main>

    <div class="fixed bottom-4 left-4 z-50 flex flex-col space-y-4">
        <a href="#"
            class="bg-primary-color text-center hover:bg-primary-color-700 border-1 border-white text-white rounded-full shadow-lg transition-transform duration-300 transform hover:scale-110 animate-shake">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28" stroke-width="2.0"
                stroke="currentColor" class="size-8 w-23 h-32">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
            </svg>
        </a>
    </div>

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
