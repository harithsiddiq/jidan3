<!DOCTYPE html>
<html lang="ar" dir="rtl" class="dark overflow-x-hidden">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>جيديان للحلول</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="{{ asset("assets/img/favicon.png") }}" type="image/x-icon" />
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

    @vite(['resources/css/app.css', 'resources/js/app.js'])

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

    <!-- header area  -->
    <header class="header-area header-absolute  header-6">
        <div class=" relative  border-b border-border-coloer dark:border-bg-color-2 ">
            <div class="px-15px xl:px-35px 2xl:px-65px">
                <div class="flex flex-wrap justify-between items-stretch">
                    <!-- logo and contact email -->
                    <div
                        class="max-w-140px sm:max-w-210px flex items-center h-75px sm:h-85px md:h-[103px]  border-r border-border-coloer dark:border-bg-color-2 w-full leading-1 pr-15px sm:pr-0">
                        <ul class="flex items-center gap-x-15px xl:gap-x-35px leading-1">
                            <li class="leading-1">
                                <a href="{{ url("index.html") }}" class="logo ">
                                    <span
                                        class="text-2xl font-bold text-primary-color dark:text-white-color">jidan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- main menu -->
                    <nav>
                        <ul class="nav flex items-center gap-x-5 xl:gap-x-30px 2xl:gap-x-45px">
                            <li class="nav_item group relative hidden lg:block">
                                <a href="{{ url("#services") }}"
                                    class="text-size-15 font-medium text-seondary-color dark:text-gray-color-4 hover:text-primary-color dark:hover:text-white-color [.nav_item.active_&]:text-primary-color dark:[.nav_item.active_&]:text-white-color capitalize py-10 relative z-0 after:w-0 after:h-0.5 after:bg-primary-color after:absolute after:right-0 hover:after:left-0 after:-bottom-0 after:transition-all after:duration-500 group-hover:after:w-full">الخدمات
                                </a>
                            </li>
                            <li class="nav_item group relative hidden lg:block">
                                <a href="{{ url("#portfolio") }}"
                                    class="text-size-15 font-medium text-seondary-color dark:text-gray-color-4 hover:text-primary-color dark:hover:text-white-color [.nav_item.active_&]:text-primary-color dark:[.nav_item.active_&]:text-white-color capitalize py-10 relative z-0 after:w-0 after:h-0.5 after:bg-primary-color after:absolute after:right-0 hover:after:left-0 after:-bottom-0 after:transition-all after:duration-500 group-hover:after:w-full">المشاريع
                                </a>
                            </li>
                            <li class="nav_item group relative hidden lg:block">
                                <a href="{{ url("#resume") }}"
                                    class="text-size-15 font-medium text-seondary-color dark:text-gray-color-4 hover:text-primary-color dark:hover:text-white-color [.nav_item.active_&]:text-primary-color dark:[.nav_item.active_&]:text-white-color capitalize py-10 relative z-0 after:w-0 after:h-0.5 after:bg-primary-color after:absolute after:right-0 hover:after:left-0 after:-bottom-0 after:transition-all after:duration-500 group-hover:after:w-full">السيرة
                                    الذاتية
                                </a>
                            </li>
                            <li class="nav_item group relative hidden lg:block">
                                <a href="{{ url("#skills") }}"
                                    class="text-size-15 font-medium text-seondary-color dark:text-gray-color-4 hover:text-primary-color dark:hover:text-white-color [.nav_item.active_&]:text-primary-color dark:[.nav_item.active_&]:text-white-color capitalize py-10 relative z-0 after:w-0 after:h-0.5 after:bg-primary-color after:absolute after:right-0 hover:after:left-0 after:-bottom-0 after:transition-all after:duration-500 group-hover:after:w-full">المهارات
                                </a>
                            </li>
                            <li class="nav_item group relative hidden lg:block">
                                <a href="{{ url("#testimonials") }}"
                                    class="text-size-15 font-medium text-seondary-color dark:text-gray-color-4 hover:text-primary-color dark:hover:text-white-color [.nav_item.active_&]:text-primary-color dark:[.nav_item.active_&]:text-white-color capitalize py-10 relative z-0 after:w-0 after:h-0.5 after:bg-primary-color after:absolute after:right-0 hover:after:left-0 after:-bottom-0 after:transition-all after:duration-500 group-hover:after:w-full">آراء
                                    العملاء
                                </a>
                            </li>

                            <li class="nav_item group relative hidden lg:block">
                                <a href="{{ url("#contact") }}"
                                    class="text-size-15 font-medium text-seondary-color dark:text-gray-color-4 hover:text-primary-color dark:hover:text-white-color [.nav_item.active_&]:text-primary-color dark:[.nav_item.active_&]:text-white-color capitalize py-10 relative z-0 after:w-0 after:h-0.5 after:bg-primary-color after:absolute after:right-0 hover:after:left-0 after:-bottom-0 after:transition-all after:duration-500 group-hover:after:w-full">تواصل
                                    معنا
                                </a>
                            </li>

                        </ul>
                    </nav>

                    <!-- social button -->
                    <div
                        class="lg:pl-30px flex items-center  h-75px sm:h-85px md:h-[103px] gap-25px  lg:border-l border-border-coloer dark:border-bg-color-2">


                        <div class="hidden sm:block">
                            <a href="{{ url("./index.html#contact") }}"
                                class="text-size-15 font-bold text-white-color capitalize py-17px px-35px bg-200 bg-gradient-secondary hover:bg-[-100%] rounded-full inline-flex gap-10px items-center leading-1 transition-all duration-300 group">
                                لنتحدث <i
                                    class="fa-regular fa-arrow-right transition-all duration-300 -rotate-45 group-hover:rotate-0"></i></a>
                        </div>


                        <div class="menu-bar block lg:hidden ">
                            <div class="menu-bar">
                                <button>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile menu -->
            <!-- scale-y-0 transition-all duration-500 hover:scale-y-100 -->
            <div
                class="mobile-menu absolute left-0 top-full min-h-screen-90 w-full bg-seondary-color block origin-top-left lg:hidden">
                <div class="container py-5">
                    <ul class="ml-4">
                        <li>
                            <a class="text-size-25 text-white-color uppercase leading-1.2 py-15px"
                                href="{{ url("#services") }}">
                                الخدمات
                            </a>
                        </li>
                        <li>
                            <a class="text-size-25 text-white-color uppercase leading-1.2 py-15px"
                                href="{{ url("#portfolio") }}">
                                المشاريع
                            </a>
                        </li>
                        <li>
                            <a class="text-size-25 text-white-color uppercase leading-1.2 py-15px"
                                href="{{ url("#resume") }}">
                                السيرة الذاتية
                            </a>
                        </li>
                        <li>
                            <a class="text-size-25 text-white-color uppercase leading-1.2 py-15px"
                                href="{{ url("#skills") }}">
                                المهارات
                            </a>
                        </li>
                        <li>
                            <a class="text-size-25 text-white-color uppercase leading-1.2 py-15px"
                                href="{{ url("#testimonials") }}">
                                آراء العملاء
                            </a>
                        </li>

                        <li>
                            <a class="text-size-25 text-white-color uppercase leading-1.2 py-15px"
                                href="{{ url("#contact") }}">
                                تواصل معنا
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- header area  -->
    <header class="header-area  header-6 header-2 header-sticky">
        <div class=" relative  border-b border-border-coloer dark:border-bg-color-2 ">
            <div class="px-15px xl:px-35px 2xl:px-65px">
                <div class="flex flex-wrap justify-between items-stretch">
                    <!-- logo and contact email -->
                    <div
                        class="max-w-140px sm:max-w-210px flex items-center h-75px sm:h-85px md:h-[103px]  border-r border-border-coloer dark:border-bg-color-2 w-full leading-1 pr-15px sm:pr-0">
                        <ul class="flex items-center gap-x-15px xl:gap-x-35px leading-1">
                            <li class="leading-1">
                                <a href="{{ url("index.html") }}" class="logo">
                                    <span
                                        class="text-2xl font-bold text-primary-color dark:text-white-color">jidan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- main menu -->
                    <nav>
                        <ul class="nav flex items-center gap-x-5 xl:gap-x-30px 2xl:gap-x-45px">
                            <li class="nav_item group relative hidden lg:block">
                                <a href="{{ url("#services") }}"
                                    class="text-size-15 font-medium text-seondary-color dark:text-gray-color-4 hover:text-primary-color dark:hover:text-white-color [.nav_item.active_&]:text-primary-color dark:[.nav_item.active_&]:text-white-color capitalize py-10 relative z-0 after:w-0 after:h-0.5 after:bg-primary-color after:absolute after:right-0 hover:after:left-0 after:-bottom-0 after:transition-all after:duration-500 group-hover:after:w-full">الخدمات
                                </a>
                            </li>
                            <li class="nav_item group relative hidden lg:block">
                                <a href="{{ url("#portfolio") }}"
                                    class="text-size-15 font-medium text-seondary-color dark:text-gray-color-4 hover:text-primary-color dark:hover:text-white-color [.nav_item.active_&]:text-primary-color dark:[.nav_item.active_&]:text-white-color capitalize py-10 relative z-0 after:w-0 after:h-0.5 after:bg-primary-color after:absolute after:right-0 hover:after:left-0 after:-bottom-0 after:transition-all after:duration-500 group-hover:after:w-full">المشاريع
                                </a>
                            </li>
                            <li class="nav_item group relative hidden lg:block">
                                <a href="{{ url("#resume") }}"
                                    class="text-size-15 font-medium text-seondary-color dark:text-gray-color-4 hover:text-primary-color dark:hover:text-white-color [.nav_item.active_&]:text-primary-color dark:[.nav_item.active_&]:text-white-color capitalize py-10 relative z-0 after:w-0 after:h-0.5 after:bg-primary-color after:absolute after:right-0 hover:after:left-0 after:-bottom-0 after:transition-all after:duration-500 group-hover:after:w-full">السيرة
                                    الذاتية
                                </a>
                            </li>
                            <li class="nav_item group relative hidden lg:block">
                                <a href="{{ url("#skills") }}"
                                    class="text-size-15 font-medium text-seondary-color dark:text-gray-color-4 hover:text-primary-color dark:hover:text-white-color [.nav_item.active_&]:text-primary-color dark:[.nav_item.active_&]:text-white-color capitalize py-10 relative z-0 after:w-0 after:h-0.5 after:bg-primary-color after:absolute after:right-0 hover:after:left-0 after:-bottom-0 after:transition-all after:duration-500 group-hover:after:w-full">المهارات
                                </a>
                            </li>
                            <li class="nav_item group relative hidden lg:block">
                                <a href="{{ url("#testimonials") }}"
                                    class="text-size-15 font-medium text-seondary-color dark:text-gray-color-4 hover:text-primary-color dark:hover:text-white-color [.nav_item.active_&]:text-primary-color dark:[.nav_item.active_&]:text-white-color capitalize py-10 relative z-0 after:w-0 after:h-0.5 after:bg-primary-color after:absolute after:right-0 hover:after:left-0 after:-bottom-0 after:transition-all after:duration-500 group-hover:after:w-full">آراء
                                    العملاء
                                </a>
                            </li>

                            <li class="nav_item group relative hidden lg:block">
                                <a href="{{ url("#contact") }}"
                                    class="text-size-15 font-medium text-seondary-color dark:text-gray-color-4 hover:text-primary-color dark:hover:text-white-color [.nav_item.active_&]:text-primary-color dark:[.nav_item.active_&]:text-white-color capitalize py-10 relative z-0 after:w-0 after:h-0.5 after:bg-primary-color after:absolute after:right-0 hover:after:left-0 after:-bottom-0 after:transition-all after:duration-500 group-hover:after:w-full">تواصل
                                    معنا
                                </a>
                            </li>

                        </ul>
                    </nav>

                    <!-- social button -->
                    <div
                        class="lg:pl-30px flex items-center  h-75px sm:h-85px md:h-[103px] gap-25px  lg:border-l border-border-coloer dark:border-bg-color-2">


                        <div class="hidden sm:block">
                            <a href="{{ url("./index.html#contact") }}"
                                class="text-size-15 font-bold text-white-color capitalize py-17px px-35px bg-200 bg-gradient-secondary hover:bg-[-100%] rounded-full inline-flex gap-10px items-center leading-1 transition-all duration-300 group">
                                Lets Talk <i
                                    class="fa-regular fa-arrow-right transition-all duration-300 -rotate-45 group-hover:rotate-0"></i></a>
                        </div>


                        <div class="menu-bar block lg:hidden ">
                            <div class="menu-bar">
                                <button>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile menu -->
            <!-- scale-y-0 transition-all duration-500 hover:scale-y-100 -->
            <div
                class="mobile-menu absolute left-0 top-full min-h-screen-90 w-full bg-seondary-color block origin-top-left lg:hidden">
                <div class="container py-5">
                    <ul class="ml-4">
                        <li>
                            <a class="text-size-25 text-white-color uppercase leading-1.2 py-15px"
                                href="{{ url("#services") }}">
                                الخدمات
                            </a>
                        </li>
                        <li>
                            <a class="text-size-25 text-white-color uppercase leading-1.2 py-15px"
                                href="{{ url("#portfolio") }}">
                                المشاريع
                            </a>
                        </li>
                        <li>
                            <a class="text-size-25 text-white-color uppercase leading-1.2 py-15px"
                                href="{{ url("#resume") }}">
                                السيرة الذاتية
                            </a>
                        </li>
                        <li>
                            <a class="text-size-25 text-white-color uppercase leading-1.2 py-15px"
                                href="{{ url("#skills") }}">
                                المهارات
                            </a>
                        </li>
                        <li>
                            <a class="text-size-25 text-white-color uppercase leading-1.2 py-15px"
                                href="{{ url("#testimonials") }}">
                                آراء العملاء
                            </a>
                        </li>

                        <li>
                            <a class="text-size-25 text-white-color uppercase leading-1.2 py-15px"
                                href="{{ url("#contact") }}">
                                تواصل معنا
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>


    <main class="main-wrapper  overflow-hidden">
        <!-- hero banner  -->
        <section class="hero-section relative h-screen overflow-hidden">
            <!-- bg video -->
            <video autoplay muted loop class="top-0 left-0 w-full h-screen object-cover z-10">
                <source src="{{ asset("assets/video/hero.mp4") }}" type="video/mp4">
            </video>
            <!-- overlay -->
            <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-30 z-20"></div>


            <div class="container relative z-10 hidden">
                <div class="grid lg:grid-cols-2 gap-y-[180px] sm:gap-y-[100px] md:gap-y-20 lg:gap-y-0">
                    <div class="lg:pl-30px xl:pl-15px 2xl:pl-0">
                        <h4
                            class="text-gray-color-2 text-lg  leading-1.5  font-semibold flex items-center gap-10px mb-5 lg:mb-30px">

                            <span><img class="origin-[70%_70%] animate-weave"
                                    src="{{ asset("assets/img/icons/hero-h8-1.png") }}" alt="Icons">
                            </span> مرحباً بكم في <span class="text-primary-color dark:text-white-color  ">مكتب
                                جديان</span>
                        </h4>

                        <h1
                            class="text-size-38 sm:text-size-45 md:text-size-50 xl:text-size-65  text-primary-color  dark:text-white-color leading-1.1 lg:leading-1.1  mb-5  tracking-[-0.02em] font-semibold uppercase ">
                            للحلول الهندسية المتكاملة والمساندة.

                        </h1>

                        <p class="leading-1.5 text-gray-color-2 dark:text-gray-color-2 max-w-420px">
                            مكتب هندسي افتراضي متخصص في تصميم أنظمة MEP والحسابات الهندسية وحصر الكميات، نقدم خدمات
                            المكتب الفني المساندة بجودة عالية ومرونة تامة.
                        </p>
                        <!-- action and social -->
                        <div class="mt-30px md:mt-10">
                            <a href="{{ url("/#contact") }}"
                                class="text-size-15 font-bold text-white-color capitalize py-17px px-35px bg-200 bg-gradient-secondary hover:bg-[-100%] rounded-full inline-flex gap-10px items-center leading-1 transition-all duration-300 group">
                                تواصل معنا <i
                                    class="fa-regular fa-arrow-right transition-all duration-400 -rotate-45 group-hover:rotate-0"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="relative ">

                            <div
                                class="relative w-full max-w-[750px] h-[285px] sm:h-[435px] md:h-[510px] lg:h-[400px] xl:h-[475px] 2xl:h-[510px] 3xl:h-[525px] inline-flex items-end justify-center  hero-mask-img-2">
                                <img class="w-full h-full  object-cover "
                                    src="{{ asset("assets/img/hero/hero-10.png") }}" alt="Images">
                            </div>
                            <!-- review area -->
                            <div
                                class=" absolute w-full max-w-[220px] md:max-w-[250px] lg:max-w-[220px] xl:max-w-[250px] left-5 top-[-130px] sm:top-[-45px] sm:left-0 md:left-20  lg:left-0 xl:left-[15px] animate-move-hor">
                                <div
                                    class="w-full p-5 md:p-30px lg:p-5 xl:p-30px   rounded-10px  bg-bg-color-2 backdrop-blur-[100px] dark:backdrop-blur-[41px] z-1">
                                    <ul class="flex items-center mb-6 md:mb-35px">
                                        <li class="-ml-4 first:ml-0">
                                            <img class="w-11 sm:w-55px lg:w-11 xl:w-55px h-11 sm:h-55px lg:h-11 xl:h-55px border-[3px] border-primary-color dark:border-dark-color rounded-100%"
                                                src="{{ asset("assets/img/hero/hero-4-review-img1.png") }}" alt="">
                                        </li>
                                        <li class="-ml-4 first:ml-0">
                                            <img class="w-11 sm:w-55px lg:w-11 xl:w-55px h-11 sm:h-55px lg:h-11 xl:h-55px border-[3px] border-primary-color dark:border-dark-color rounded-100%"
                                                src="{{ asset("assets/img/hero/hero-4-review-img2.png") }}" alt="">
                                        </li>
                                        <li class="-ml-4 first:ml-0">
                                            <img class="w-11 sm:w-55px lg:w-11 xl:w-55px h-11 sm:h-55px lg:h-11 xl:h-55px border-[3px] border-primary-color dark:border-dark-color rounded-100%"
                                                src="{{ asset("assets/img/hero/hero-4-review-img3.png") }}" alt="">
                                        </li>
                                        <li class="-ml-4 first:ml-0">
                                            <div
                                                class="w-11 sm:w-55px lg:w-11 xl:w-55px h-11 sm:h-55px lg:h-11 xl:h-55px border-[3px] border-primary-color dark:border-dark-color rounded-100% bg-primary-color flex justify-center items-center text-center text-white ">
                                                2K</div>

                                        </li>

                                    </ul>

                                    <div class="testimonial-rating mb-2">
                                        <div
                                            class="star-ratings relative text-lg  tracking-[5px]  leading-none text-transparent stroke-[1px] drop-shadow-[1px_1px_0_var(--tj-theme-primary)]  stroke-primary-color mb-1.5 ">
                                            <div class="fill-ratings absolute top-0 left-0 z-1 overflow-hidden text-primary-color "
                                                style="width: 86%">
                                                <span class="inline-block">★★★★★</span>
                                            </div>
                                            <div class="empty-ratings block z-0 text-black-color">
                                                <span class="inline-block">★★★★★</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-seondary-color dark:text-white-color text-sm  md:text-size-15">
                                        1.8K+
                                        تقييم 5 نجوم</p>


                                </div>


                            </div>
                            <!-- consulation area -->
                            <div
                                class=" absolute w-full max-w-[260px] left-[15%]  bottom-0 sm:right-0  sm:left-auto md:left-[40%] md:right-auto lg:left-auto lg:right-0  2xl:right-[-15px] 2xl:left-auto 3xl:right-auto 3xl:left-[40%] sm:bottom-5  animate-move-var">
                                <div
                                    class="w-full px-15px py-5  rounded-lg bg-bg-color-2 backdrop-blur-[100px] dark:backdrop-blur-[41px] z-1 flex items-center gap-15px text-seondary-color dark:text-white-color font-medium">

                                    <div
                                        class="w-10 h-10  rounded-100% text-white-color bg-primary-color flex justify-center items-center text-center">
                                        ?</div>




                                    <p class="5">
                                        تحتاج استشارة؟</p>


                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- hero socials -->
            <div
                class="absolute bottom-20 sm:bottom-[85px] lg:bottom-auto lg:top-1/2  left-1/2 lg:left-[10px]  3xl:left-[50px]  -translate-x-1/2 lg:translate-x-0 lg:-translate-y-1/2">
                <ul class="nav flex flex-row lg:flex-col items-center    gap-5">

                    <li class="nav_item group relative ">
                        <a href="{{ url("#") }}"
                            class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize flex gap-2 items-center ">
                            <span
                                class="text-dark-color group-hover:text-white-color dark:text-white-color
   border border-border-color dark:border-border-color-3 group-hover:border-transparent dark:group-hover:border-transparent w-35px h-35px rounded-full flex items-center justify-center overflow-hidden relative z-0 after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:w-full after:h-full after:scale-0 after:bg-gradient-primary-8 group-hover:after:scale-105 after:transition-all after:duration-300 after:z-[-1] after:rounded-full"><i
                                    class="fa-brands fa-behance "></i></span>
                        </a>
                    </li>
                    <li class="nav_item group relative ">
                        <a href="{{ url("#") }}"
                            class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize flex gap-2 items-center ">
                            <span
                                class="text-dark-color group-hover:text-white-color dark:text-white-color
   border border-border-color dark:border-border-color-3 group-hover:border-transparent dark:group-hover:border-transparent w-35px h-35px rounded-full flex items-center justify-center overflow-hidden relative z-0 after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:w-full after:h-full after:scale-0 after:bg-gradient-primary-8 group-hover:after:scale-105 after:transition-all after:duration-300 after:z-[-1] after:rounded-full"><i
                                    class="fa-light fa-basketball"></i></span>


                        </a>
                    </li>
                    <li class="nav_item group relative ">
                        <a href="{{ url("#") }}"
                            class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize flex gap-2 items-center ">
                            <span
                                class="text-dark-color group-hover:text-white-color dark:text-white-color
   border border-border-color dark:border-border-color-3 group-hover:border-transparent dark:group-hover:border-transparent w-35px h-35px rounded-full flex items-center justify-center overflow-hidden relative z-0 after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:w-full after:h-full after:scale-0 after:bg-gradient-primary-8 group-hover:after:scale-105 after:transition-all after:duration-300 after:z-[-1] after:rounded-full"><i
                                    class="fa-brands fa-instagram"></i></span>

                        </a>
                    </li>
                    <li class="nav_item group relative ">
                        <a href="{{ url("#") }}"
                            class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize flex gap-2 items-center ">
                            <span
                                class="text-dark-color group-hover:text-white-color dark:text-white-color
   border border-border-color dark:border-border-color-3 group-hover:border-transparent dark:group-hover:border-transparent w-35px h-35px rounded-full flex items-center justify-center overflow-hidden relative z-0 after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:w-full after:h-full after:scale-0 after:bg-gradient-primary-8 group-hover:after:scale-105 after:transition-all after:duration-300 after:z-[-1] after:rounded-full"><i
                                    class="fab fa-x-twitter"></i></span>
                        </a>
                    </li>

                </ul>
            </div>

            <!-- scroll -->
            <div class="hero_scroll -left-[15px] lg:-left-[35px] 3xl:left-0 hidden md:block">
                <a class="down" href="{{ url("#scroll-hero") }}"><span><i
                            class="fa-regular fa-arrow-right"></i></span>Scroll Down
                </a>
            </div>
        </section>

        <!-- start:Marque Area -->
        <div
            class="  relative z-0 after:absolute after:left-0 after:top-0 after:h-full after:w-full after:rotate-[-1.09deg] after:bg-bg-color-8 after:-z-1 ">

            <div class="tj-roll-section relative z-[2] ">
                <div>
                    <div class="tj-marquee tj-marquee--1 swiper py-25px md:py-[33px] bg-gradient-secondary-2 ">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="roll-icon w-5 mx-30px lg:mx-60px">
                                    <img class="portal-icon w-full animate-animate-spin-reverse "
                                        src="{{ asset("/assets/img/icons/star.svg") }}" alt="Icon" />

                                </div>
                                <div class="roll-title">
                                    <h5 class="text-white-color title md:text-xl font-extrabold uppercase">
                                        الميكانيكا
                                    </h5>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="roll-icon w-5 mx-30px lg:mx-60px">
                                    <img class="portal-icon w-full animate-animate-spin-reverse "
                                        src="{{ asset("/assets/img/icons/star.svg") }}" alt="Icon" />

                                </div>
                                <div class="roll-title">
                                    <h5 class="text-white-color title md:text-xl font-extrabold uppercase">
                                        الكهرباء
                                    </h5>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="roll-icon w-5 mx-30px lg:mx-60px">
                                    <img class="portal-icon w-full animate-animate-spin-reverse "
                                        src="{{ asset("/assets/img/icons/star.svg") }}" alt="Icon" />

                                </div>
                                <div class="roll-title">
                                    <h5 class="text-white-color title md:text-xl font-extrabold uppercase">
                                        الغازات الطبية
                                    </h5>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="roll-icon w-5 mx-30px lg:mx-60px">
                                    <img class="portal-icon w-full animate-animate-spin-reverse "
                                        src="{{ asset("/assets/img/icons/star.svg") }}" alt="Icon" />

                                </div>
                                <div class="roll-title">
                                    <h5 class="text-white-color title md:text-xl font-extrabold uppercase">
                                        مكافحة الحريق
                                    </h5>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="roll-icon w-5 mx-30px lg:mx-60px">
                                    <img class="portal-icon w-full animate-animate-spin-reverse "
                                        src="{{ asset("/assets/img/icons/star.svg") }}" alt="Icon" />

                                </div>
                                <div class="roll-title">
                                    <h5 class="text-white-color title md:text-xl font-extrabold uppercase">
                                        السباكة
                                    </h5>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="roll-icon w-5 mx-30px lg:mx-60px">
                                    <img class="portal-icon w-full animate-animate-spin-reverse "
                                        src="{{ asset("/assets/img/icons/star.svg") }}" alt="Icon" />

                                </div>
                                <div class="roll-title">
                                    <h5 class="text-white-color title md:text-xl font-extrabold uppercase">
                                        الإنارة
                                    </h5>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="roll-icon w-5 mx-30px lg:mx-60px">
                                    <img class="portal-icon w-full animate-animate-spin-reverse "
                                        src="{{ asset("/assets/img/icons/star.svg") }}" alt="Icon" />

                                </div>
                                <div class="roll-title">
                                    <h5 class="text-white-color title md:text-xl font-extrabold uppercase">
                                        التكييف
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- services -->
        <section id="services">
            <div class=" py-60px md:py-20 lg:py-30 relative ">

                <div class="container">

                    <div class="flex flex-wrap justify-between gap-10px lg:gap-10 xl:gap-35px">
                        <div class="w-full max-w-[425px] md:max-w-full lg:max-w-[360px] xl:max-w-[420px]">
                            <div class=" md:flex gap-30px lg:block mb-10 md:mb-50px lg:mb-0">
                                <div class="md:w-1/2 lg:w-auto">
                                    <div class="mb-25px  ">
                                        <span
                                            class="text-xs  uppercase text-primary-color  font-semibold relative inline-block tracking-0.2em wow fadeInUp"
                                            data-wow-delay=".3s">خدماتنا</span>
                                    </div>
                                    <div x-show="shown" x-transition:enter="transition ease-out duration-500"
                                        x-transition:enter-start="opacity-0 translate-y-4"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        style="transition-delay: 300ms">
                                        <h2 class="block p-4 mt-4 animate-gradient bg-gradient-to-r from-amber-500 via-amber-900 to-amber-700 rounded-xl shadow-md hover:shadow-lg hover:border-stone-500 hover:-translate-y-0.5 transition-all duration-200 text-white text-center"
                                            class="text-3xl md:text-size-35 lg:text-size-40 xl:text-size-45 uppercase font-semibold  leading-1.2 -tracking-0.02em inline-block text-seondary-color dark:text-white-color  max-w-580px w-full wow fadeInUp "
                                            data-wow-delay=".4s">
                                            الحلول الهندسية المتكاملة والمساندة
                                        </h2>
                                    </div>
                                                <div x-data="{ shown: false }" x-intersect.once="shown = true">
                                                    <div x-show="shown" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" style="transition-delay: 300ms">
                                                        <a href="#" rel="noopener" target="_blank" class="block p-4 mt-4 animate-gradient bg-gradient-to-r from-amber-500 via-amber-900 to-amber-700 rounded-xl shadow-md hover:shadow-lg hover:border-stone-500 hover:-translate-y-0.5 transition-all duration-200 text-white text-center">
                                                            <div class="font-bold text-2xl mb-1">Own Your Franchise</div>
                                                            {{-- <div class="text-md opacity-90">امتلك امتيازك التجاري</div> --}}
                                                            <div class="text-sm opacity-90">كن جزءا من نجاح صن رول و امتلك فرعك الخاص</div>
                                                        </a>
                                                    </div>
                                                </div>

                                    <p class="text-gray-color-2 dark:text-gray-color-2 mt-15px wow fadeInUp "
                                        data-wow-delay=".5s">
                                        نقدم خدمات هندسية متخصصة في تصميم أنظمة MEP والحسابات الهندسية المختلفة بأعلى
                                        معايير الجودة والدقة.
                                    </p>
                                    <div class="mt-30px md:mt-35px wow fadeInUp" data-wow-delay=".6s">
                                        <a href="{{ url("#") }}"
                                            class="text-size-15 font-bold text-white-color capitalize py-17px px-35px bg-200 bg-gradient-secondary hover:bg-[-100%] rounded-full inline-flex gap-10px items-center leading-1 transition-all duration-300 group wow fadeInRight"
                                            data-wow-delay=".5s"
                                            style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                                            المزيد من الخدمات <i
                                                class="fa-regular fa-arrow-right transition-all duration-400 -rotate-45 group-hover:rotate-0"></i></a>
                                    </div>

                                </div>

                                <div
                                    class="w-full max-w-[405px] md:w-1/2 lg:w-full lg:mx-auto  mt-60px rounded-10px   relative z-0 after:absolute after:top-[-15px] after:right-[-15px] after:w-full after:h-full after:border after:rounded-10px after:border-body-color dark:after:border-bg-color-2 after:-z-1 ">
                                    <img class="rounded-10px"
                                        src="{{ asset("assets/img/services/services-10-images.png") }}" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- services -->
                        <div
                            class="services-widget services-widget--2 relative w-full max-w-[815px] lg:max-w-[530px] xl:max-w-[655px] 2xl:max-w-[770px] ml-auto  ">
                            <!-- single  item -->
                            <div class="service-item current py-5 md:py-30px px-15px xl:px-30px  border border-body-color dark:border-bg-color-2 mb-30px [.service-item:last-child]:mb-0   rounded-15px  transition-all duration-300 relative overflow-hidden group wow fadeInUp "
                                data-wow-delay=".3s">
                                <div class="flex flex-wrap
                md:flex-nowrap items-center   gap-x-10px gap-y-15px lg:gap-x-5">
                                    <div class=" flex flex-wrap
                  md:flex-nowrap   gap-x-10px gap-y-15px lg:gap-x-5">

                                        <div class=" w-10  flex-shrink-0"><img
                                                class="w-full group-hover:brightness-0 group-hover:invert  [.service-item.current_&]:brightness-0  [.service-item.current_&]:invert  transition-all duration-300 "
                                                src="{{ asset("assets/img/icons/services-10-icons-1.svg") }}" alt="">
                                        </div>

                                        <div>
                                            <h4
                                                class="text-xl leading-1.2  text-primary-color [.service-item.current_&]:text-white-color dark:text-white-color mb-15px md:mb-6 lg:mb-15px xl:mb-6 uppercase font-medium transition-all duration-300 ">

                                                تصميم أنظمة مكافحة الحريق
                                            </h4>

                                            <p
                                                class="   text-gray-color-2 dark:text-gray-color-2 group-hover:text-white-color [.service-item.current_&]:text-white-color font-normal transition-all duration-300">



                                                تصميم وحساب أنظمة مكافحة الحريق المتكاملة وفقاً للمعايير العالمية
                                                والمحلية لضمان أقصى درجات الأمان.

                                            </p>
                                        </div>






                                    </div>

                                    <div class=" flex-shrink-0">
                                        <div
                                            class="text-size-15 md:text-xl w-50px h-50px md:w-70px md:h-70px text-primary-color-light dark:text-white-color [.service-item.current_&]:text-white-color group-hover:text-white-color   bg-transparent group-hover:bg-primary-color outline-1 outline outline-border-color dark:outline-bg-color-2 group-hover:outline-transparent  dark:group-hover:outline-transparent rounded-100% leading-1 md:leading-1  transition-all duration-300  inline-flex justify-center items-center">
                                            <i
                                                class="flaticon-up-right-arrow rotate-0 group-hover:rotate-45 transition-all duration-500 inline-block"></i>
                                        </div>
                                    </div>
                                </div>



                                <a href="{{ url("service-details.html") }}"
                                    class="absolute top-0 left-0 w-full h-full bg-transparent"></a>

                            </div>
                            <!-- single  item -->
                            <div class="service-item  py-5 md:py-30px px-15px xl:px-30px  border border-body-color dark:border-bg-color-2 mb-30px [.service-item:last-child]:mb-0   rounded-15px  transition-all duration-300 relative overflow-hidden group wow fadeInUp "
                                data-wow-delay=".4s">
                                <div class="flex flex-wrap
                md:flex-nowrap items-center   gap-x-10px gap-y-15px lg:gap-x-5">
                                    <div class=" flex flex-wrap
                  md:flex-nowrap   gap-x-10px gap-y-15px lg:gap-x-5">

                                        <div class=" w-10  flex-shrink-0"><img
                                                class="w-full group-hover:brightness-0 group-hover:invert  [.service-item.current_&]:brightness-0  [.service-item.current_&]:invert  transition-all duration-300 "
                                                src="{{ asset("assets/img/icons/services-10-icons-2.svg") }}" alt="">
                                        </div>

                                        <div>
                                            <h4
                                                class="text-xl leading-1.2  text-primary-color [.service-item.current_&]:text-white-color dark:text-white-color mb-15px md:mb-6 lg:mb-15px xl:mb-6 uppercase font-medium transition-all duration-300 ">

                                                أنظمة التكييف والتهوية
                                            </h4>

                                            <p
                                                class="   text-gray-color-2 dark:text-gray-color-2 group-hover:text-white-color [.service-item.current_&]:text-white-color font-normal transition-all duration-300">



                                                تصميم أنظمة التكييف والتهوية الميكانيكية بكفاءة عالية لضمان الراحة
                                                والجودة البيئية المثلى.

                                            </p>
                                        </div>






                                    </div>

                                    <div class=" flex-shrink-0">
                                        <div
                                            class="text-size-15 md:text-xl w-50px h-50px md:w-70px md:h-70px text-primary-color-light dark:text-white-color [.service-item.current_&]:text-white-color group-hover:text-white-color   bg-transparent group-hover:bg-primary-color outline-1 outline outline-border-color dark:outline-bg-color-2 group-hover:outline-transparent  dark:group-hover:outline-transparent rounded-100% leading-1 md:leading-1  transition-all duration-300  inline-flex justify-center items-center">
                                            <i
                                                class="flaticon-up-right-arrow rotate-0 group-hover:rotate-45 transition-all duration-500 inline-block"></i>
                                        </div>
                                    </div>
                                </div>



                                <a href="{{ url("service-details.html") }}"
                                    class="absolute top-0 left-0 w-full h-full bg-transparent"></a>

                            </div>
                            <!-- single  item -->
                            <div class="service-item py-5 md:py-30px px-15px xl:px-30px  border border-body-color dark:border-bg-color-2 mb-30px [.service-item:last-child]:mb-0   rounded-15px  transition-all duration-300 relative overflow-hidden group wow fadeInUp "
                                data-wow-delay=".5s">
                                <div class="flex flex-wrap
                md:flex-nowrap items-center   gap-x-10px gap-y-15px lg:gap-x-5">
                                    <div class=" flex flex-wrap
                  md:flex-nowrap   gap-x-10px gap-y-15px lg:gap-x-5">

                                        <div class=" w-10  flex-shrink-0"><img
                                                class="w-full group-hover:brightness-0 group-hover:invert  [.service-item.current_&]:brightness-0  [.service-item.current_&]:invert  transition-all duration-300 "
                                                src="{{ asset("assets/img/icons/services-10-icons-3.svg") }}" alt="">
                                        </div>

                                        <div>
                                            <h4
                                                class="text-xl leading-1.2  text-primary-color [.service-item.current_&]:text-white-color dark:text-white-color mb-15px md:mb-6 lg:mb-15px xl:mb-6 uppercase font-medium transition-all duration-300 ">

                                                الأنظمة الكهربائية والإنارة
                                            </h4>

                                            <p
                                                class="   text-gray-color-2 dark:text-gray-color-2 group-hover:text-white-color [.service-item.current_&]:text-white-color font-normal transition-all duration-300">



                                                تصميم الأنظمة الكهربائية وأنظمة الإنارة الذكية بأحدث التقنيات لضمان
                                                الكفاءة والأمان.

                                            </p>
                                        </div>






                                    </div>

                                    <div class=" flex-shrink-0">
                                        <div
                                            class="text-size-15 md:text-xl w-50px h-50px md:w-70px md:h-70px text-primary-color-light dark:text-white-color [.service-item.current_&]:text-white-color group-hover:text-white-color   bg-transparent group-hover:bg-primary-color outline-1 outline outline-border-color dark:outline-bg-color-2 group-hover:outline-transparent  dark:group-hover:outline-transparent rounded-100% leading-1 md:leading-1  transition-all duration-300  inline-flex justify-center items-center">
                                            <i
                                                class="flaticon-up-right-arrow rotate-0 group-hover:rotate-45 transition-all duration-500 inline-block"></i>
                                        </div>
                                    </div>
                                </div>



                                <a href="{{ url("service-details.html") }}"
                                    class="absolute top-0 left-0 w-full h-full bg-transparent"></a>

                            </div>
                            <!-- single  item -->
                            <div class="service-item py-5 md:py-30px px-15px xl:px-30px  border border-body-color dark:border-bg-color-2 mb-30px [.service-item:last-child]:mb-0   rounded-15px  transition-all duration-300 relative overflow-hidden group wow fadeInUp "
                                data-wow-delay=".6s">
                                <div class="flex flex-wrap
                md:flex-nowrap items-center   gap-x-10px gap-y-15px lg:gap-x-5">
                                    <div class=" flex flex-wrap
                  md:flex-nowrap   gap-x-10px gap-y-15px lg:gap-x-5">

                                        <div class=" w-10  flex-shrink-0"><img
                                                class="w-full group-hover:brightness-0 group-hover:invert  [.service-item.current_&]:brightness-0  [.service-item.current_&]:invert  transition-all duration-300 "
                                                src="{{ asset("assets/img/icons/services-10-icons-1.svg") }}" alt="">
                                        </div>

                                        <div>
                                            <h4
                                                class="text-xl leading-1.2  text-primary-color [.service-item.current_&]:text-white-color dark:text-white-color mb-15px md:mb-6 lg:mb-15px xl:mb-6 uppercase font-medium transition-all duration-300 ">

                                                أنظمة الصرف الصحي والغازات الطبية
                                            </h4>

                                            <p
                                                class="   text-gray-color-2 dark:text-gray-color-2 group-hover:text-white-color [.service-item.current_&]:text-white-color font-normal transition-all duration-300">



                                                تصميم أنظمة الصرف الصحي والغازات الطبية للمستشفيات والمرافق الطبية وفقاً
                                                للمعايير الصحية.

                                            </p>
                                        </div>






                                    </div>

                                    <div class=" flex-shrink-0">
                                        <div
                                            class="text-size-15 md:text-xl w-50px h-50px md:w-70px md:h-70px text-primary-color-light dark:text-white-color [.service-item.current_&]:text-white-color group-hover:text-white-color   bg-transparent group-hover:bg-primary-color outline-1 outline outline-border-color dark:outline-bg-color-2 group-hover:outline-transparent  dark:group-hover:outline-transparent rounded-100% leading-1 md:leading-1  transition-all duration-300  inline-flex justify-center items-center">
                                            <i
                                                class="flaticon-up-right-arrow rotate-0 group-hover:rotate-45 transition-all duration-500 inline-block"></i>
                                        </div>
                                    </div>
                                </div>



                                <a href="{{ url("service-details.html") }}"
                                    class="absolute top-0 left-0 w-full h-full bg-transparent"></a>

                            </div>

                            <div class="active-bg hidden sm:block rounded-15px !-z-1   wow fadeInUp"
                                data-wow-delay=".3s">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- about area -->
        <section id="about">
            <div class="bg-cream-light-color dark:bg-black-color mx-15px lg:mx-50px rounded-[24px]">
                <div
                    class=" py-60px md:py-20 lg:py-30 bg-[url('../img/shapes/cta-10-shapes.png')] bg-no-repeat bg-cover bg-[center_center] ">
                    <div class="container">




                        <div class="max-w-[1082px] mx-auto text-center">
                            <div class="mb-25px text-center ">
                                <span
                                    class="text-xs  uppercase text-primary-color  font-semibold relative inline-block tracking-0.2em wow fadeInUp"
                                    data-wow-delay=".3s">من نحن</span>
                            </div>

                            <div>
                                <h1 class=" text-size-35 sm:text-size-40 md:text-size-54 lg:text-size-68 text-seondary-color dark:text-white-color  leading-[1.3] -tracking-0.03em  font-semibold  mb-38px uppercase wow fadeInUp "
                                    data-wow-delay=".4s">
                                    مكتب جديان <br>
                                    للحلول الهندسية <br>
                                    المتكاملة والمساندة
                                </h1>
                            </div>

                            <div class="max-w-[800px] mx-auto mb-30px">
                                <p class="text-lg md:text-xl text-primary-color-light dark:text-body-color leading-1.6 mb-20px wow fadeInUp"
                                    data-wow-delay=".5s">
                                    نحن مكتب هندسي متخصص في تقديم الحلول الهندسية المتكاملة والمساندة، نسعى لتحقيق
                                    التميز في جميع مشاريعنا من خلال الالتزام بأعلى معايير الجودة والدقة.
                                </p>
                                <p class="text-base md:text-lg text-primary-color-light dark:text-body-color leading-1.6 wow fadeInUp"
                                    data-wow-delay=".6s">
                                    رؤيتنا: أن نكون الخيار الأول في مجال الاستشارات الهندسية المساندة في المملكة العربية
                                    السعودية.<br>
                                    رسالتنا: تقديم خدمات هندسية عالية الجودة بأسعار عادلة والالتزام بالمواعيد المحددة.
                                </p>
                            </div>

                            <div class="wow fadeInUp " data-wow-delay=".7s">
                                <a href="{{ url("/#contact") }}"
                                    class="text-size-15 font-bold text-white-color capitalize py-17px px-35px bg-200 bg-gradient-secondary hover:bg-[-100%] rounded-full inline-flex gap-10px items-center leading-1 transition-all duration-300 group">
                                    تواصل معنا <i
                                        class="fa-regular fa-arrow-right transition-all duration-400 -rotate-45 group-hover:rotate-0"></i></a>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- start: Brand Marque Area -->
        <div class=" pt-60px md:pt-20 lg:pt-30 overflow-x-hidden wow fadeInUp " data-wow-delay=".3s">

            <div
                class="text-center mb-50px md:mb-60px after:w-full after:h-1px after:bg-body-color dark:after:bg-dark-color-2 after:absolute after:top-1/2 after:left-0 after:-translate-y-1/2 relative z-0 after:-z-1 ">
                <p
                    class="text-size-13 sm:text-base font-semibold uppercase inline-block px-6 bg-white-color dark:bg-primary-color-light text-seondary-color dark:text-white-color">
                    <span class="text-primary-color">
                        100+
                    </span> Trusted Clients Over the world
                </p>
            </div>
            <div class="tj-roll-section ">
                <div class="relative z-0 mask-fade-horizontal-2">
                    <div class="tj-marquee tj-marquee--3 swiper  ">
                        <div class="swiper-wrapper">
                            <div
                                class="swiper-slide cursor-pointer max-w-full !w-[200px] h-[84px] rounded-10px bg-cream-light-color dark:bg-black-color flex items-center justify-center relative z-0 overflow-hidden after:absolute after:left-0 after:right-0 after:w-full after:h-full after:-z-1 after:opacity-0 after:transition-all after:duration-300 after:bg-200 after:bg-gradient-secondary hover:after:opacity-100 group">
                                <div class="max-w-100px md:max-w-full">
                                    <img class="invert dark:invert-0 w-full transition-all duration-300 group-hover:brightness-100  group-hover:invert-0"
                                        src="{{ asset("assets/img/roll/roll-img1.png") }}" alt="Brand" />

                                </div>

                            </div>
                            <div
                                class="swiper-slide cursor-pointer max-w-full !w-[200px] h-[84px] rounded-10px bg-cream-light-color dark:bg-black-color flex items-center justify-center relative z-0 overflow-hidden after:absolute after:left-0 after:right-0 after:w-full after:h-full after:-z-1 after:opacity-0 after:transition-all after:duration-300 after:bg-200 after:bg-gradient-secondary hover:after:opacity-100 group">
                                <div class="max-w-100px md:max-w-full">
                                    <img class="invert dark:invert-0 w-full transition-all duration-300 group-hover:brightness-100  group-hover:invert-0"
                                        src="{{ asset("assets/img/roll/roll-img2.png") }}" alt="Brand" />

                                </div>

                            </div>
                            <div
                                class="swiper-slide cursor-pointer max-w-full !w-[200px] h-[84px] rounded-10px bg-cream-light-color dark:bg-black-color flex items-center justify-center relative z-0 overflow-hidden after:absolute after:left-0 after:right-0 after:w-full after:h-full after:-z-1 after:opacity-0 after:transition-all after:duration-300 after:bg-200 after:bg-gradient-secondary hover:after:opacity-100 group">
                                <div class="max-w-100px md:max-w-full">
                                    <img class="invert dark:invert-0 w-full transition-all duration-300 group-hover:brightness-100  group-hover:invert-0"
                                        src="{{ asset("assets/img/roll/roll-img3.png") }}" alt="Brand" />

                                </div>

                            </div>
                            <div
                                class="swiper-slide cursor-pointer max-w-full !w-[200px] h-[84px] rounded-10px bg-cream-light-color dark:bg-black-color flex items-center justify-center relative z-0 overflow-hidden after:absolute after:left-0 after:right-0 after:w-full after:h-full after:-z-1 after:opacity-0 after:transition-all after:duration-300 after:bg-200 after:bg-gradient-secondary hover:after:opacity-100 group">
                                <div class="max-w-100px md:max-w-full">
                                    <img class="invert dark:invert-0 w-full transition-all duration-300 group-hover:brightness-100  group-hover:invert-0"
                                        src="{{ asset("assets/img/roll/roll-img4.png") }}" alt="Brand" />

                                </div>

                            </div>
                            <div
                                class="swiper-slide cursor-pointer max-w-full !w-[200px] h-[84px] rounded-10px bg-cream-light-color dark:bg-black-color flex items-center justify-center relative z-0 overflow-hidden after:absolute after:left-0 after:right-0 after:w-full after:h-full after:-z-1 after:opacity-0 after:transition-all after:duration-300 after:bg-200 after:bg-gradient-secondary hover:after:opacity-100 group">
                                <div class="max-w-100px md:max-w-full">
                                    <img class="invert dark:invert-0 w-full transition-all duration-300 group-hover:brightness-100  group-hover:invert-0"
                                        src="{{ asset("assets/img/roll/roll-img5.png") }}" alt="Brand" />

                                </div>

                            </div>
                            <div
                                class="swiper-slide cursor-pointer max-w-full !w-[200px] h-[84px] rounded-10px bg-cream-light-color dark:bg-black-color flex items-center justify-center relative z-0 overflow-hidden after:absolute after:left-0 after:right-0 after:w-full after:h-full after:-z-1 after:opacity-0 after:transition-all after:duration-300 after:bg-200 after:bg-gradient-secondary hover:after:opacity-100 group">
                                <div class="max-w-100px md:max-w-full">
                                    <img class="invert dark:invert-0 w-full transition-all duration-300 group-hover:brightness-100  group-hover:invert-0"
                                        src="{{ asset("assets/img/roll/roll-img6.png") }}" alt="Brand" />

                                </div>

                            </div>
                            <div
                                class="swiper-slide cursor-pointer max-w-full !w-[200px] h-[84px] rounded-10px bg-cream-light-color dark:bg-black-color flex items-center justify-center relative z-0 overflow-hidden after:absolute after:left-0 after:right-0 after:w-full after:h-full after:-z-1 after:opacity-0 after:transition-all after:duration-300 after:bg-200 after:bg-gradient-secondary hover:after:opacity-100 group">
                                <div class="max-w-100px md:max-w-full">
                                    <img class="invert dark:invert-0 w-full transition-all duration-300 group-hover:brightness-100  group-hover:invert-0"
                                        src="{{ asset("assets/img/roll/roll-img7.png") }}" alt="Brand" />

                                </div>

                            </div>
                            <div
                                class="swiper-slide cursor-pointer max-w-full !w-[200px] h-[84px] rounded-10px bg-cream-light-color dark:bg-black-color flex items-center justify-center relative z-0 overflow-hidden after:absolute after:left-0 after:right-0 after:w-full after:h-full after:-z-1 after:opacity-0 after:transition-all after:duration-300 after:bg-200 after:bg-gradient-secondary hover:after:opacity-100 group">
                                <div class="max-w-100px md:max-w-full">
                                    <img class="invert dark:invert-0 w-full transition-all duration-300 group-hover:brightness-100  group-hover:invert-0"
                                        src="{{ asset("assets/img/roll/roll-img8.png") }}" alt="Brand" />

                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- features area -->
        <section id="features">
            <div class="py-60px md:py-100px lg:py-30">
                <div class="container">
                    <!-- section heading -->
                    <div class="mb-10 md:mb-50px xl:mb-60px text-center">
                        <div class="mb-25px">
                            <span
                                class="text-xs uppercase text-primary-color font-semibold relative inline-block tracking-0.2em wow fadeInUp"
                                data-wow-delay=".3s">مميزاتنا</span>
                        </div>
                        <h2 class="text-3xl md:text-size-35 lg:text-size-40 xl:text-size-45 uppercase font-semibold leading-1.2 -tracking-0.02em inline-block text-seondary-color dark:text-white-color max-w-580px w-full wow fadeInUp"
                            data-wow-delay=".4s">
                            لماذا تختار مكتب جديان؟
                        </h2>
                    </div>

                    <!-- features grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <!-- feature 1 -->
                        <div class="py-5 md:py-30px px-15px xl:px-30px border border-body-color dark:border-bg-color-2 rounded-15px transition-all duration-300 relative overflow-hidden group hover:bg-gradient-primary wow fadeInUp"
                            data-wow-delay=".3s">
                            <div class="flex flex-wrap md:flex-nowrap items-center gap-x-10px gap-y-15px lg:gap-x-5">
                                <div class="flex flex-wrap md:flex-nowrap gap-x-10px gap-y-15px lg:gap-x-5">
                                    <div class="w-10 flex-shrink-0">
                                        <i
                                            class="flaticon-dollar text-2xl text-primary-color group-hover:text-white-color transition-all duration-300"></i>
                                    </div>
                                    <div>
                                        <h4
                                            class="text-xl leading-1.2 text-primary-color group-hover:text-white-color dark:text-white-color mb-15px md:mb-6 lg:mb-15px xl:mb-6 uppercase font-medium transition-all duration-300">
                                            أسعار عادلة
                                        </h4>
                                        <p
                                            class="text-gray-color-2 dark:text-gray-color-2 group-hover:text-white-color font-normal transition-all duration-300">
                                            نقدم خدماتنا بأسعار تنافسية وعادلة تتناسب مع جودة العمل المقدم
                                        </p>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <div
                                        class="text-size-15 md:text-xl w-50px h-50px md:w-70px md:h-70px text-primary-color-light dark:text-white-color group-hover:text-white-color bg-transparent group-hover:bg-primary-color outline-1 outline outline-border-color dark:outline-bg-color-2 group-hover:outline-transparent dark:group-hover:outline-transparent rounded-100% leading-1 md:leading-1 transition-all duration-300 inline-flex justify-center items-center">
                                        <i
                                            class="flaticon-up-right-arrow rotate-0 group-hover:rotate-45 transition-all duration-500 inline-block"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- feature 2 -->
                        <div class="py-5 md:py-30px px-15px xl:px-30px border border-body-color dark:border-bg-color-2 rounded-15px transition-all duration-300 relative overflow-hidden group hover:bg-gradient-primary wow fadeInUp"
                            data-wow-delay=".4s">
                            <div class="flex flex-wrap md:flex-nowrap items-center gap-x-10px gap-y-15px lg:gap-x-5">
                                <div class="flex flex-wrap md:flex-nowrap gap-x-10px gap-y-15px lg:gap-x-5">
                                    <div class="w-10 flex-shrink-0">
                                        <i
                                            class="flaticon-clock text-2xl text-primary-color group-hover:text-white-color transition-all duration-300"></i>
                                    </div>
                                    <div>
                                        <h4
                                            class="text-xl leading-1.2 text-primary-color group-hover:text-white-color dark:text-white-color mb-15px md:mb-6 lg:mb-15px xl:mb-6 uppercase font-medium transition-all duration-300">
                                            الالتزام بالمواعيد
                                        </h4>
                                        <p
                                            class="text-gray-color-2 dark:text-gray-color-2 group-hover:text-white-color font-normal transition-all duration-300">
                                            نحرص على تسليم جميع المشاريع في المواعيد المحددة دون تأخير
                                        </p>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <div
                                        class="text-size-15 md:text-xl w-50px h-50px md:w-70px md:h-70px text-primary-color-light dark:text-white-color group-hover:text-white-color bg-transparent group-hover:bg-primary-color outline-1 outline outline-border-color dark:outline-bg-color-2 group-hover:outline-transparent dark:group-hover:outline-transparent rounded-100% leading-1 md:leading-1 transition-all duration-300 inline-flex justify-center items-center">
                                        <i
                                            class="flaticon-up-right-arrow rotate-0 group-hover:rotate-45 transition-all duration-500 inline-block"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- feature 3 -->
                        <div class="py-5 md:py-30px px-15px xl:px-30px border border-body-color dark:border-bg-color-2 rounded-15px transition-all duration-300 relative overflow-hidden group hover:bg-gradient-primary wow fadeInUp"
                            data-wow-delay=".5s">
                            <div class="flex flex-wrap md:flex-nowrap items-center gap-x-10px gap-y-15px lg:gap-x-5">
                                <div class="flex flex-wrap md:flex-nowrap gap-x-10px gap-y-15px lg:gap-x-5">
                                    <div class="w-10 flex-shrink-0">
                                        <i
                                            class="flaticon-trophy text-2xl text-primary-color group-hover:text-white-color transition-all duration-300"></i>
                                    </div>
                                    <div>
                                        <h4
                                            class="text-xl leading-1.2 text-primary-color group-hover:text-white-color dark:text-white-color mb-15px md:mb-6 lg:mb-15px xl:mb-6 uppercase font-medium transition-all duration-300">
                                            جودة عالية
                                        </h4>
                                        <p
                                            class="text-gray-color-2 dark:text-gray-color-2 group-hover:text-white-color font-normal transition-all duration-300">
                                            نلتزم بأعلى معايير الجودة في جميع أعمالنا الهندسية والاستشارية
                                        </p>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <div
                                        class="text-size-15 md:text-xl w-50px h-50px md:w-70px md:h-70px text-primary-color-light dark:text-white-color group-hover:text-white-color bg-transparent group-hover:bg-primary-color outline-1 outline outline-border-color dark:outline-bg-color-2 group-hover:outline-transparent dark:group-hover:outline-transparent rounded-100% leading-1 md:leading-1 transition-all duration-300 inline-flex justify-center items-center">
                                        <i
                                            class="flaticon-up-right-arrow rotate-0 group-hover:rotate-45 transition-all duration-500 inline-block"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- feature 4 -->
                        <div class="py-5 md:py-30px px-15px xl:px-30px border border-body-color dark:border-bg-color-2 rounded-15px transition-all duration-300 relative overflow-hidden group hover:bg-gradient-primary wow fadeInUp"
                            data-wow-delay=".6s">
                            <div class="flex flex-wrap md:flex-nowrap items-center gap-x-10px gap-y-15px lg:gap-x-5">
                                <div class="flex flex-wrap md:flex-nowrap gap-x-10px gap-y-15px lg:gap-x-5">
                                    <div class="w-10 flex-shrink-0">
                                        <i
                                            class="flaticon-skill-development text-2xl text-primary-color group-hover:text-white-color transition-all duration-300"></i>
                                    </div>
                                    <div>
                                        <h4
                                            class="text-xl leading-1.2 text-primary-color group-hover:text-white-color dark:text-white-color mb-15px md:mb-6 lg:mb-15px xl:mb-6 uppercase font-medium transition-all duration-300">
                                            برامج حديثة
                                        </h4>
                                        <p
                                            class="text-gray-color-2 dark:text-gray-color-2 group-hover:text-white-color font-normal transition-all duration-300">
                                            نستخدم أحدث البرامج والتقنيات في التصميم والحسابات الهندسية
                                        </p>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <div
                                        class="text-size-15 md:text-xl w-50px h-50px md:w-70px md:h-70px text-primary-color-light dark:text-white-color group-hover:text-white-color bg-transparent group-hover:bg-primary-color outline-1 outline outline-border-color dark:outline-bg-color-2 group-hover:outline-transparent dark:group-hover:outline-transparent rounded-100% leading-1 md:leading-1 transition-all duration-300 inline-flex justify-center items-center">
                                        <i
                                            class="flaticon-up-right-arrow rotate-0 group-hover:rotate-45 transition-all duration-500 inline-block"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- portfolio area -->
        <section id="portfolio" class="portfolio-filter relative z-0  ">
            <div class="py-60px md:py-100px lg:py-30">
                <div class="container">
                    <!-- section heading -->
                    <div
                        class="mb-10 md:mb-50px xl:mb-60px flex flex-wrap gap-25px lg:gap-5 items-end justify-center lg:justify-between ">
                        <div class="max-w-560px text-center lg:text-start">
                            <div class="mb-25px   ">
                                <span
                                    class="text-xs  uppercase text-primary-color  font-semibold relative inline-block tracking-0.2em wow fadeInUp"
                                    data-wow-delay=".3s">
                                    أعمالنا المنجزة</span>
                            </div>
                            <h2 class="text-3xl md:text-size-35 lg:text-size-40 xl:text-size-45 uppercase font-semibold  leading-1.2 -tracking-0.02em inline-block text-seondary-color dark:text-white-color  max-w-580px w-full wow fadeInUp "
                                data-wow-delay=".4s">
                                مشاريعنا الهندسية المتميزة
                            </h2>
                        </div>
                        <!-- controllers -->
                        <div class="wow fadeInUp " data-wow-delay=".5s">

                            <div class="flex items-center" dir="ltr">
                                <div class="button-group button-group--2 filter-button-group max-w-400 mx-auto inline-flex items-center justify-center bg-cream-light-color dark:bg-primary-color rounded-full px-2 py-1 md:py-1.5 relative z-0 wow fadeInUp"
                                    data-wow-delay=".5s">
                                    <button data-filter="*"
                                        class="text-sm md:text-size-15 px-3 md:px-25px py-10px md:py-3 text-primary-color-light dark:text-white-color leading-1 active">
                                        الكل
                                    </button>
                                    <button data-filter=".fire"
                                        class="text-sm md:text-size-15 px-3 md:px-25px py-10px md:py-3 text-primary-color-light dark:text-white-color leading-1">
                                        الامان
                                    </button>
                                    <button data-filter=".hvac"
                                        class="text-sm md:text-size-15 px-3 md:px-25px py-10px md:py-3 text-primary-color-light dark:text-white-color leading-1">
                                        التكييف
                                    </button>
                                    <button data-filter=".electrical"
                                        class="text-sm md:text-size-15 px-3 md:px-25px py-10px md:py-3 text-primary-color-light dark:text-white-color leading-1">
                                        الكهرباء
                                    </button>
                                    <div class="active-bg !-z-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolios -->
                    <div class="portfolio-box portfolio-box--2 mt-10 md:mt-50px ">
                        <div class="portfolio-sizer"></div>
                        <div class="gutter-sizer"></div>
                        <div class="portfolio-item fire  p-5 md:p-25px lg:p-35px bg-cream-light-color dark:bg-black-color border border-body-color dark:border-bg-color-2 rounded-15px group relative float-left wow fadeInLeft "
                            data-wow-delay=".3s">
                            <a href="{{ url("portfolio-details.html") }}"
                                class="mb-25px rounded-15px overflow-hidden"><img
                                    src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                                    class="transition-all duration-400  group-hover:scale-110"
                                    alt="مجمع طبي - الرياض" /></a>

                            <div class="flex items-center gap-25px  justify-between ">
                                <div>
                                    <h4
                                        class="block text-xl text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color   font-bold  mb-1.5">
                                        <a href="{{ url("portfolio-details.html") }}">
                                            مجمع طبي - الرياض
                                        </a>
                                    </h4>

                                    <p class="block text-primary-color-light dark:text-body-color-3">
                                        تصميم أنظمة مكافحة الحريق والإنذار المبكر
                                    </p>
                                </div>

                                <a href="{{ url("portfolio-details.html") }}"
                                    class="flex-shrink-0 text-size-25px w-60px h-60px text-primary-color-light dark:text-white-color group-hover:text-white-color   bg-transparent group-hover:bg-gradient-primary-8 outline-1 outline outline-body-color dark:outline-bg-color-2 group-hover:border-transparent  rounded-100% leading-1 transition-all duration-300  inline-flex justify-center items-center">
                                    <span class="relative overflow-hidden -rotate-45">
                                        <i
                                            class="fa-regular fa-arrow-right  text-lg group-hover:translate-x-150% transition-all duration-500 inline-block"></i>
                                        <i
                                            class="fa-regular fa-arrow-right absolute left-0 top-0 -translate-x-150% text-lg group-hover:-translate-x-0 transition-all duration-500"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-item hvac  p-5 md:p-25px lg:p-35px bg-cream-light-color dark:bg-black-color border border-body-color dark:border-bg-color-2 rounded-15px group relative float-left wow fadeInRight "
                            data-wow-delay=".4s">
                            <a href="{{ url("portfolio-details.html") }}"
                                class="mb-25px rounded-15px overflow-hidden"><img
                                    src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                                    class="transition-all duration-400  group-hover:scale-110"
                                    alt="برج تجاري - جدة" /></a>

                            <div class="flex items-center gap-25px  justify-between ">
                                <div>
                                    <h4
                                        class="block text-xl text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color   font-bold  mb-1.5">
                                        <a href="{{ url("portfolio-details.html") }}">
                                            برج تجاري - جدة
                                        </a>
                                    </h4>

                                    <p class="block text-primary-color-light dark:text-body-color-3">
                                        تصميم أنظمة التكييف والتهوية المركزية
                                    </p>
                                </div>

                                <a href="{{ url("portfolio-details.html") }}"
                                    class="flex-shrink-0 text-size-25px w-60px h-60px text-primary-color-light dark:text-white-color group-hover:text-white-color   bg-transparent group-hover:bg-gradient-primary-8 outline-1 outline outline-body-color dark:outline-bg-color-2 group-hover:border-transparent  rounded-100% leading-1 transition-all duration-300  inline-flex justify-center items-center">
                                    <span class="relative overflow-hidden -rotate-45">
                                        <i
                                            class="fa-regular fa-arrow-right text-lg group-hover:translate-x-150% transition-all duration-500 inline-block"></i>
                                        <i
                                            class="fa-regular fa-arrow-right text-lg absolute left-0 top-0 -translate-x-150% group-hover:-translate-x-0 transition-all duration-500"></i>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="portfolio-item electrical  p-5 md:p-25px lg:p-35px bg-cream-light-color dark:bg-black-color border-2 rder-body-color dark:border-bg-color-2 rounded-15px group relative float-left wow fadeInLeft"
                            data-wow-delay=".5s">
                            <a href="{{ url("portfolio-details.html") }}"
                                class="mb-25px rounded-15px overflow-hidden"><img
                                    src="https://images.unsplash.com/photo-1565008447742-97f6f38c985c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                                    class="transition-all duration-400  group-hover:scale-110"
                                    alt="مصنع - الدمام" /></a>

                            <div class="flex items-center gap-25px  justify-between ">
                                <div>
                                    <h4
                                        class="block text-xl text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color   font-bold  mb-1.5">
                                        <a href="{{ url("portfolio-details.html") }}">
                                            مصنع - الدمام
                                        </a>
                                    </h4>

                                    <p class="block text-primary-color-light dark:text-body-color-3">
                                        تصميم الأنظمة الكهربائية وأنظمة الإنارة
                                    </p>
                                </div>

                                <a href="{{ url("portfolio-details.html") }}"
                                    class="flex-shrink-0 text-size-25px w-60px h-60px text-primary-color-light dark:text-white-color group-hover:text-white-color   bg-transparent group-hover:bg-gradient-primary-8 outline-1 outline outline-body-color dark:outline-bg-color-2 group-hover:border-transparent  rounded-100% leading-1 transition-all duration-300  inline-flex justify-center items-center">
                                    <span class="relative overflow-hidden -rotate-45">
                                        <i
                                            class="fa-regular fa-arrow-right  text-lg group-hover:translate-x-150% transition-all duration-500 inline-block"></i>
                                        <i
                                            class="fa-regular fa-arrow-right text-lg absolute left-0 top-0 -translate-x-150% group-hover:-translate-x-0 transition-all duration-500"></i>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="portfolio-item hvac  p-5 md:p-25px lg:p-35px bg-cream-light-color dark:bg-black-color border border-body-color dark:border-bg-color-2 rounded-15px group relative float-left wow fadeInRight "
                            data-wow-delay=".5s">
                            <a href="{{ url("portfolio-details.html") }}"
                                class="mb-25px rounded-15px overflow-hidden"><img
                                    src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                                    class="transition-all duration-400  group-hover:scale-110"
                                    alt="مستشفى - المدينة المنورة" /></a>

                            <div class="flex items-center gap-25px  justify-between ">
                                <div>
                                    <h4
                                        class="block text-xl text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color   font-bold  mb-1.5">
                                        <a href="{{ url("portfolio-details.html") }}">
                                            مستشفى - المدينة المنورة
                                        </a>
                                    </h4>

                                    <p class="block text-primary-color-light dark:text-body-color-3">
                                        تصميم أنظمة الغازات الطبية والصرف الصحي
                                    </p>
                                </div>

                                <a href="{{ url("portfolio-details.html") }}"
                                    class="flex-shrink-0 text-size-25px w-60px h-60px text-primary-color-light dark:text-white-color group-hover:text-white-color   bg-transparent group-hover:bg-gradient-primary-8 outline-1 outline outline-body-color dark:outline-bg-color-2 group-hover:border-transparent  rounded-100% leading-1 transition-all duration-300  inline-flex justify-center items-center">
                                    <span class="relative overflow-hidden -rotate-45">
                                        <i
                                            class="fa-regular fa-arrow-right text-lg group-hover:translate-x-150% transition-all duration-500 inline-block"></i>
                                        <i
                                            class="fa-regular fa-arrow-right text-lg absolute left-0 top-0 -translate-x-150% group-hover:-translate-x-0 transition-all duration-500"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center mt-10px lg:mt-30px wow fadeInUp " data-wow-delay=".3s">
                        <a href="{{ url("./index.html#contact") }}"
                            class="text-size-15 font-bold text-white-color capitalize py-17px px-35px bg-200 bg-gradient-secondary hover:bg-[-100%] rounded-full inline-flex gap-10px items-center leading-1 transition-all duration-300 group">
                            المزيد من المشاريع <i
                                class="fa-regular fa-arrow-right transition-all duration-300 -rotate-45 group-hover:rotate-0"></i></a>
                    </div>

                </div>
            </div>
        </section>



        <!-- testimonials area -->
        <section id="testimonials">
            <div class="pb-60px md:pb-20 lg:pb-30 overflow-hidden">
                <div class="container">
                    <div class="testimonials ">
                        <!-- section heading -->
                        <div class="mb-10 md:mb-50px xl:mb-60px text-center ">
                            <div>
                                <div class="mb-25px  ">
                                    <span
                                        class="text-xs  uppercase text-primary-color  font-semibold relative inline-block tracking-0.2em wow fadeInUp"
                                        data-wow-delay=".3s">آراء العملاء</span>
                                </div>
                                <h2 class="text-3xl md:text-size-35 lg:text-size-40 xl:text-size-45 uppercase font-semibold  leading-1.2 -tracking-0.02em inline-block text-seondary-color dark:text-white-color  max-w-580px w-full wow fadeInUp "
                                    data-wow-delay=".4s">
                                    ماذا يقول عملاؤنا الكرام
                                </h2>
                            </div>
                        </div>
                        <!-- testimonial single -->
                        <div class=" xl:mx-auto wow fadeInRight relative" data-wow-delay=".5s">
                            <div class="tj-testimonial-7-active swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div
                                            class="flex flex-wrap md:flex-nowrap items-center gap-x-50px gap-y-10 px-5 py-30px md:px-30px bg-cream-light-color dark:bg-black-color backdrop-blur-[40px]  border border-transparent dark:border-bg-color-2 transition-all duration-500 rounded-15px relative z-0 group ">

                                            <div
                                                class="text-primary-color-light dark:text-white-color relative z-10 flex-grow">

                                                <div class="icon-box mb-5 md:mb-30px flex gap-1">
                                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="transition-all duration-300">
                                                        <path
                                                            d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                                            fill="url(#paint6_linear_263_514)"
                                                            class="fill-primary-color"></path>
                                                        <defs>
                                                            <linearGradient x1="-0.0363755" y1="-0.0729998" x2="35.3333"
                                                                y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                                <stop offset="1" stop-color="var(--tj-theme-primary)">
                                                                </stop>
                                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0">
                                                                </stop>
                                                            </linearGradient>
                                                        </defs>
                                                    </svg>
                                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="transition-all duration-300 ml-1">
                                                        <path
                                                            d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                                            fill="url(#paint7_linear_263_515)"
                                                            class="fill-primary-color"></path>
                                                        <defs>
                                                            <linearGradient x1="-0.0363755" y1="-0.0729998" x2="35.3333"
                                                                y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                                <stop offset="1" stop-color="var(--tj-theme-primary)">
                                                                </stop>
                                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0">
                                                                </stop>
                                                            </linearGradient>
                                                        </defs>
                                                    </svg>
                                                </div>

                                                <p
                                                    class="text-primary-color-light dark:text-body-color-3 text-base  lg:text-2xl leading-1.5 sm:leading-1.5 lg:leading-1.5 mb-25px ">
                                                    مكتب جديان قدم لنا حلولاً هندسية متميزة ومتكاملة لمشروعنا. فريق
                                                    العمل محترف جداً
                                                    وقدم خدمات عالية الجودة في أنظمة مكافحة الحريق والتكييف. أنصح
                                                    بالتعامل معهم.
                                                </p>
                                                <div>

                                                    <div>
                                                        <h4
                                                            class="text-lg md:text-xl text-seondary-color dark:text-white-color mb-1.5">
                                                            أحمد السعيد
                                                        </h4>

                                                        <p
                                                            class="text-primary-color-light dark:text-body-color text-sm">

                                                            مدير المشاريع - شركة البناء المتطور

                                                        </p>
                                                    </div>



                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div
                                            class="flex flex-wrap md:flex-nowrap items-center gap-x-50px gap-y-10 px-5 py-30px md:px-30px bg-cream-light-color dark:bg-black-color backdrop-blur-[40px]  border border-transparent dark:border-bg-color-2 transition-all duration-500 rounded-15px relative z-0 group ">

                                            <div
                                                class="text-primary-color-light dark:text-white-color relative z-10 flex-grow">

                                                <div class="icon-box mb-5 md:mb-30px flex gap-1">
                                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="transition-all duration-300">
                                                        <path
                                                            d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                                            fill="url(#paint6_linear_263_514)"
                                                            class="fill-primary-color"></path>
                                                        <defs>
                                                            <linearGradient x1="-0.0363755" y1="-0.0729998" x2="35.3333"
                                                                y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                                <stop offset="1" stop-color="var(--tj-theme-primary)">
                                                                </stop>
                                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0">
                                                                </stop>
                                                            </linearGradient>
                                                        </defs>
                                                    </svg>
                                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="transition-all duration-300 ml-1">
                                                        <path
                                                            d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                                            fill="url(#paint7_linear_263_515)"
                                                            class="fill-primary-color"></path>
                                                        <defs>
                                                            <linearGradient x1="-0.0363755" y1="-0.0729998" x2="35.3333"
                                                                y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                                <stop offset="1" stop-color="var(--tj-theme-primary)">
                                                                </stop>
                                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0">
                                                                </stop>
                                                            </linearGradient>
                                                        </defs>
                                                    </svg>
                                                </div>

                                                <p
                                                    class="text-primary-color-light dark:text-body-color-3 text-base  lg:text-2xl leading-1.5 sm:leading-1.5 lg:leading-1.5 mb-25px ">
                                                    خدمة ممتازة في تصميم الأنظمة الكهربائية والإنارة. تم تسليم المشروع
                                                    في الوقت المحدد
                                                    وبجودة عالية جداً. فريق مكتب جديان يتميز بالخبرة والاحترافية في
                                                    العمل.
                                                </p>
                                                <div>

                                                    <div>
                                                        <h4
                                                            class="text-lg md:text-xl text-seondary-color dark:text-white-color mb-1.5">
                                                            سارة محمد
                                                        </h4>

                                                        <p
                                                            class="text-primary-color-light dark:text-body-color text-sm">

                                                            مهندسة معمارية - مكتب التصميم الحديث

                                                        </p>
                                                    </div>



                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div
                                            class="flex flex-wrap md:flex-nowrap items-center gap-x-50px gap-y-10 px-5 py-30px md:px-30px bg-cream-light-color dark:bg-black-color backdrop-blur-[40px]  border border-transparent dark:border-bg-color-2 transition-all duration-500 rounded-15px relative z-0 group ">

                                            <div
                                                class="text-primary-color-light dark:text-white-color relative z-10 flex-grow">

                                                <div class="icon-box mb-5 md:mb-30px flex gap-1">
                                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="transition-all duration-300">
                                                        <path
                                                            d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                                            fill="url(#paint6_linear_263_514)"
                                                            class="fill-primary-color"></path>
                                                        <defs>
                                                            <linearGradient x1="-0.0363755" y1="-0.0729998" x2="35.3333"
                                                                y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                                <stop offset="1" stop-color="var(--tj-theme-primary)">
                                                                </stop>
                                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0">
                                                                </stop>
                                                            </linearGradient>
                                                        </defs>
                                                    </svg>
                                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="transition-all duration-300 ml-1">
                                                        <path
                                                            d="M0.105431 2.18998C0.0301532 0.988687 1.02531 -0.00647222 2.2266 0.0688056L19.4961 1.15097C21.2148 1.25867 22.0029 3.34358 20.7852 4.56127L4.5979 20.7486C3.3802 21.9663 1.2953 21.1781 1.1876 19.4594L0.105431 2.18998Z"
                                                            fill="url(#paint7_linear_263_515)"
                                                            class="fill-primary-color"></path>
                                                        <defs>
                                                            <linearGradient x1="-0.0363755" y1="-0.0729998" x2="35.3333"
                                                                y2="-0.0729991" gradientUnits="userSpaceOnUse">
                                                                <stop offset="1" stop-color="var(--tj-theme-primary)">
                                                                </stop>
                                                                <stop offset="1" stop-color="#140C1C" stop-opacity="0">
                                                                </stop>
                                                            </linearGradient>
                                                        </defs>
                                                    </svg>
                                                </div>

                                                <p
                                                    class="text-primary-color-light dark:text-body-color-3 text-base  lg:text-2xl leading-1.5 sm:leading-1.5 lg:leading-1.5 mb-25px ">
                                                    تعاملنا مع مكتب جديان في تصميم أنظمة الغازات الطبية والصرف الصحي
                                                    للمستشفى.
                                                    النتائج كانت مذهلة والعمل تم بأعلى معايير الجودة والسلامة المطلوبة.
                                                </p>
                                                <div>

                                                    <div>
                                                        <h4
                                                            class="text-lg md:text-xl text-seondary-color dark:text-white-color mb-1.5">
                                                            خالد العتيبي
                                                        </h4>

                                                        <p
                                                            class="text-primary-color-light dark:text-body-color text-sm">

                                                            مدير المشاريع الطبية - مجموعة المستشفيات المتقدمة

                                                        </p>
                                                    </div>



                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="testimonial-pagination mt-35px lg:mt-50px"></div>
                            </div>

                            <div>
                                <div class="testimonial-navigation hidden 2xl:block ">
                                    <div
                                        class="testimonial-prev slider-prev w-55px h-55px inline-flex justify-center items-center mr-30px border-2 border-border-color absolute top-1/2 right-full -translate-y-1/2  dark:border-bg-color-2  rounded-100%   z-1 group before:absolute before:w-full before:h-full before:top-0 before:left-0 before:bg-gradient-primary  before:rounded-100% before:opacity-0 before:invisible before:transition-all before:duration-[0.6s] before:-z-1 hover:before:opacity-100 hover:before:visible ">
                                        <i
                                            class="fa-regular fa-arrow-left text-primary-color-light  group-hover:text-white-color dark:text-white-color"></i>
                                    </div>
                                    <div
                                        class="testimonial-next slider-next w-55px h-55px inline-flex justify-center items-center  ml-30px absolute top-1/2 left-full -translate-y-1/2  border-2  border-border-color dark:border-bg-color-2  group text-primary-color-light hover:text-white-color dark:text-white-color rounded-100% z-1 before:absolute before:w-full before:h-full before:top-0 before:left-0 before:bg-gradient-primary  before:rounded-100% before:opacity-0 before:invisible before:transition-all before:duration-[0.6s] before:-z-1 hover:before:opacity-100 hover:before:visible">
                                        <i
                                            class="fa-regular fa-arrow-right text-primary-color-light  group-hover:text-white-color dark:text-white-color"></i>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <!-- contact area -->
        <section id="contact">
            <div class="bg-cream-light-color dark:bg-black-color py-60px md:py-20 lg:py-100px xl:py-30">
                <div class="container">
                    <div class="grid lg:grid-cols-12 gap-30px">
                        <!-- experience single area -->
                        <div class="lg:col-start-1 lg:col-span-5 xl:col-span-4">
                            <div class="mb-10 md:mb-50px lg:mb-0">
                                <div class="mb-25px  ">
                                    <span
                                        class="text-xs  uppercase text-primary-color  font-semibold relative inline-block tracking-0.2em wow fadeInUp"
                                        data-wow-delay=".3s">تواصل معنا</span>
                                </div>
                                <h2 class="text-3xl md:text-size-35 lg:text-size-40 xl:text-size-45 uppercase font-semibold  leading-1.2 -tracking-0.02em inline-block text-seondary-color dark:text-white-color  max-w-580px w-full wow fadeInUp "
                                    data-wow-delay=".4s">
                                    ابدأ مشروعك الهندسي معنا اليوم
                                </h2>
                                <p class="text-gray-color-2 dark:text-gray-color-2 mt-15px wow fadeInUp "
                                    data-wow-delay=".5s">
                                    نحن هنا لتقديم أفضل الحلول الهندسية المتكاملة والمساندة لمشروعك. تواصل معنا الآن
                                    للحصول على استشارة مجانية.
                                </p>

                                <!-- contact info -->
                                <div class="mt-30px space-y-4 wow fadeInUp" data-wow-delay=".6s">
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 bg-se rounded-full flex items-center justify-center">
                                            <i class="fa-brands fa-whatsapp text-white-color text-lg"></i>
                                        </div>
                                        <div>
                                            <p class="text-seondary-color dark:text-white-color font-semibold">واتساب
                                            </p>
                                            <a href="https://wa.me/966123456789"
                                                class="text-primary-color hover:text-primary-color-light transition-all duration-300">+966
                                                12 345 6789</a>
                                        </div>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-10 h-10 bg-primary-color rounded-full flex items-center justify-center">
                                            <i class="fa-regular fa-envelope text-white-color text-lg"></i>
                                        </div>
                                        <div>
                                            <p class="text-seondary-color dark:text-white-color font-semibold">البريد
                                                الإلكتروني</p>
                                            <a href="{{ url("mailto:info@jadianoffice.com") }}"
                                                class="text-primary-color hover:text-primary-color-light transition-all duration-300">info@jadianoffice.com</a>
                                        </div>
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-10 h-10 bg-primary-color rounded-full flex items-center justify-center">
                                            <i class="fa-regular fa-clock text-white-color text-lg"></i>
                                        </div>
                                        <div>
                                            <p class="text-seondary-color dark:text-white-color font-semibold">ساعات
                                                العمل</p>
                                            <p class="text-gray-color-2 dark:text-gray-color-2">الأحد - الخميس: 8:00 ص -
                                                6:00 م</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-30px md:mt-35px wow fadeInUp" data-wow-delay=".7s">
                                    <a href="https://wa.me/966123456789"
                                        class="text-size-15 font-bold text-white-color capitalize py-17px px-35px bg-200 bg-gradient-secondary hover:bg-[-100%] rounded-full inline-flex gap-10px items-center leading-1 transition-all duration-300 group wow fadeInRight"
                                        data-wow-delay=".5s">
                                        تواصل عبر الواتساب <i
                                            class="fa-brands fa-whatsapp transition-all duration-400 group-hover:scale-110"></i></a>
                                </div>


                            </div>

                        </div>
                        <div class=" lg:col-start-6  lg:col-span-7">
                            <div class=" wow fadeInRight" data-wow-delay=".3s">
                                <form id="contact-form"
                                    class="contact w-full lg:ml-auto lg:max-w-[645px] px-15px py-30px md:px-5 lg:px-30px lg:py-10 xl:px-10  bg-gradient-16 rounded-15px">

                                    <!-- inputs -->
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-30px gap-x-4">
                                        <!-- first name -->
                                        <div class="sm:mb-5 wow fadeInLeft " data-wow-delay=".3s">
                                            <p class=" mb-15px font-semibold text-white-color uppercase ">
                                                الاسم الأول*
                                            </p>
                                            <input name="conName" id="conName" type="text" placeholder="الاسم الأول"
                                                class="text-white-color bg-bg-color-2 w-full px-5 py-4 border border-transparent focus:border-white-color rounded-lg outline-none focus:outline-none transition-all duration-300 placeholder:text-body-color  leading-1" />
                                        </div>
                                        <!-- Last name -->
                                        <div class="sm:mb-5 wow fadeInRight " data-wow-delay=".4s">
                                            <p class=" mb-15px font-semibold text-white-color uppercase ">
                                                اسم العائلة*
                                            </p>
                                            <input name="conLName" id="conLName" type="text" placeholder="اسم العائلة"
                                                class="text-white-color bg-bg-color-2 w-full px-5 py-4 border border-transparent focus:border-white-color rounded-lg outline-none focus:outline-none transition-all duration-300 placeholder:text-body-color  leading-1" />
                                        </div>
                                        <!-- Email address -->
                                        <div class="sm:mb-5 wow fadeInLeft " data-wow-delay=".5s">
                                            <p class=" mb-15px font-semibold text-white-color uppercase ">
                                                البريد الإلكتروني*
                                            </p>
                                            <input name="conEmail" id="conEmail" type="email"
                                                placeholder="البريد الإلكتروني"
                                                class="text-white-color bg-bg-color-2 w-full px-5 py-4 border border-transparent focus:border-white-color rounded-lg outline-none focus:outline-none transition-all duration-300 placeholder:text-body-color  leading-1" />
                                        </div>
                                        <!-- Phone number -->
                                        <div class="sm:mb-5 wow fadeInRight " data-wow-delay=".6s">
                                            <p class=" mb-15px font-semibold text-white-color uppercase ">
                                                رقم الهاتف*
                                            </p>
                                            <input name="conPhone" id="conPhone" type="text" placeholder="رقم الهاتف"
                                                class="text-white-color bg-bg-color-2 w-full px-5 py-4 border border-transparent focus:border-white-color rounded-lg outline-none focus:outline-none transition-all duration-300 placeholder:text-body-color  leading-1" />
                                        </div>

                                        <div class="sm:col-start-1 sm:col-span-2 wow fadeInLeft " data-wow-delay=".7s">
                                            <p class=" mb-15px font-semibold text-white-color uppercase ">
                                                الرسالة*
                                            </p>
                                            <textarea name="conMessage" id="conMessage" cols="1" rows="10"
                                                placeholder="الرسالة"
                                                class="text-white-color bg-bg-color-2 w-full px-5 py-4 border border-transparent focus:border-white-color rounded-lg outline-none focus:outline-none transition-all duration-300 placeholder:text-body-color  leading-1"></textarea>
                                        </div>
                                        <div class="sm:col-start-1 sm:col-span-2 wow fadeInRight " data-wow-delay=".8s">
                                            <button type="submit"
                                                class="text-size-15 font-bold text-white-color capitalize py-5 px-35px bg-black-color rounded-full inline-flex gap-10px items-center leading-1 transition-all duration-300 group">
                                                إرسال الرسالة
                                                <i
                                                    class="fa-regular fa-arrow-right transition-all duration-400 -rotate-45 group-hover:rotate-0"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Blogs area -->
        <section>
            <div id="blogs" class="dark:bg-primary-color-light py-60px md:py-20 lg:py-100px xl:py-30">
                <div class="container">
                    <!-- section heading -->
                    <div class="mb-10 md:mb-50px xl:mb-60px text-center flex flex-col items-center ">
                        <div class="mb-25px  ">
                            <span
                                class="text-xs  uppercase text-primary-color  font-semibold relative inline-block tracking-0.2em wow fadeInUp"
                                data-wow-delay=".3s">خلف
                                البكسلات</span>
                        </div>
                        <h2 class="text-3xl md:text-size-35 lg:text-size-40 xl:text-size-45 uppercase font-semibold  leading-1.2 -tracking-0.02em inline-block text-seondary-color dark:text-white-color    max-w-580px w-full wow fadeInUp "
                            data-wow-delay=".4s">
                            اقرأ مدونتي الحديثة
                        </h2>


                    </div>
                    <!-- blogs -->

                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5 lg:gap-6">
                        <div class="group relative flex flex-col items-center wow fadeInUp" data-wow-delay=".3s">
                            <div
                                class="p-15px bg-cream-light-color dark:bg-black-color border border-cream-light-color dark:border-border-color-2  backdrop-blur-[40px] rounded-10px relative overflow-hidden w-full">

                                <div class="relative ">
                                    <a href="{{ url("blog-details.html") }}"
                                        class="w-full mb-4 rounded-10px overflow-hidden">
                                        <img src="{{ asset("assets/img/blog/1.jpg") }}" alt=""
                                            class="w-full group-hover:scale-110 transition-all duration-500" />
                                    </a>
                                    <a href="{{ url("#") }}"
                                        class="text-size-15  px-10px py-5px leading-1  text-white-color hover:text-white-color  bg-200 bg-gradient-secondary hover:bg-[-100%] rounded-full absolute left-4 top-4">فيديو</a>
                                </div>
                                <div class=" p-15px   transition-all duration-500">
                                    <div class=" w-full ">
                                        <div class="relative z-10">
                                            <ul class="flex gap-4 items-center mb-4">
                                                <li>
                                                    <a href="{{ url("#") }}"
                                                        class=" leading-1 text-primary-color-light dark:text-body-color-2 hover:text-primary-color dark:hover:text-primary-color">التحسين</a>
                                                </li>
                                                <li class="font-medium">

                                                    <span
                                                        class="text-primary-color-light  dark:text-body-color-2 pl-5  relative transition-all duration-500 before:w-1 before:h-1 before:absolute before:top-1/2 before:left-0 before:-translate-y-1/2 before:bg-primary-color-light  dark:before:bg-body-color-2 before:rounded-100% ">
                                                        SEP 14, 2024</span>
                                                </li>
                                            </ul>
                                            <h4>
                                                <a href="{{ url("blog-details.html") }}"
                                                    class="text-primary-color-light dark:text-white-color dark:group-hover:text-white-color w-full  text-size-22 lg:text-2xl font-semibold  leading-1.4 lg:leading-1.4 uppercase bg-[0_100%] [background-size:0_1px] bg-no-repeat bg-gradient-primary-11 hover:[background-size:100%_1px] tracking-0.02em inline duration-500">

                                                    COLOR LOVE | SHADES OF BLUE and Purple.

                                                </a>
                                            </h4>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="group relative flex flex-col items-center wow fadeInUp" data-wow-delay=".5s">
                            <div
                                class="p-15px bg-cream-light-color dark:bg-black-color border border-cream-light-color dark:border-border-color-2  backdrop-blur-[40px] rounded-10px relative overflow-hidden w-full">

                                <div class="relative ">
                                    <a href="{{ url("blog-details.html") }}"
                                        class="w-full mb-4 rounded-10px overflow-hidden">
                                        <img src="{{ asset("assets/img/blog/2.jpg") }}" alt=""
                                            class="w-full group-hover:scale-110 transition-all duration-500" />
                                    </a>
                                    <a href="{{ url("#") }}"
                                        class="text-size-15  px-10px py-5px leading-1  text-white-color hover:text-white-color  bg-200 bg-gradient-secondary hover:bg-[-100%] rounded-full absolute left-4 top-4">التحرير</a>
                                </div>
                                <div class=" p-15px   transition-all duration-500">
                                    <div class=" w-full ">
                                        <div class="relative z-10">
                                            <ul class="flex gap-4 items-center mb-4">
                                                <li>
                                                    <a href="{{ url("#") }}"
                                                        class=" leading-1 text-primary-color-light dark:text-body-color-2 hover:text-primary-color dark:hover:text-primary-color">التصميم</a>
                                                </li>
                                                <li class="font-medium">

                                                    <span
                                                        class="text-primary-color-light  dark:text-body-color-2 pl-5  relative transition-all duration-500 before:w-1 before:h-1 before:absolute before:top-1/2 before:left-0 before:-translate-y-1/2 before:bg-primary-color-light  dark:before:bg-body-color-2 before:rounded-100% ">
                                                        SEP 14, 2024</span>
                                                </li>
                                            </ul>
                                            <h4>
                                                <a href="{{ url("blog-details.html") }}"
                                                    class="text-primary-color-light dark:text-white-color dark:group-hover:text-white-color w-full  text-size-22 lg:text-2xl font-semibold  leading-1.4 lg:leading-1.4 uppercase bg-[0_100%] [background-size:0_1px] bg-no-repeat bg-gradient-primary-11 hover:[background-size:100%_1px] tracking-0.02em inline duration-500">

                                                    الخدمات المقدمة للتصميم

                                                </a>
                                            </h4>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="group relative flex flex-col items-center wow fadeInUp" data-wow-delay=".7s">
                            <div
                                class="p-15px bg-cream-light-color dark:bg-black-color border border-cream-light-color dark:border-border-color-2  backdrop-blur-[40px] rounded-10px relative overflow-hidden w-full">

                                <div class="relative ">
                                    <a href="{{ url("blog-details.html") }}"
                                        class="w-full mb-4 rounded-10px overflow-hidden">
                                        <img src="{{ asset("assets/img/blog/3.jpg") }}" alt=""
                                            class="w-full group-hover:scale-110 transition-all duration-500" />
                                    </a>
                                    <a href="{{ url("#") }}"
                                        class="text-size-15  px-10px py-5px leading-1  text-white-color hover:text-white-color  bg-200 bg-gradient-secondary hover:bg-[-100%] rounded-full absolute left-4 top-4">فيديو</a>
                                </div>

                                <div class=" p-15px   transition-all duration-500">
                                    <div class=" w-full ">
                                        <div class="relative z-10">
                                            <ul class="flex gap-4 items-center mb-4">
                                                <li>
                                                    <a href="{{ url("#") }}"
                                                        class=" leading-1 text-primary-color-light dark:text-body-color-2 hover:text-primary-color dark:hover:text-primary-color">التكنولوجيا</a>
                                                </li>
                                                <li class="font-medium">

                                                    <span
                                                        class="text-primary-color-light  dark:text-body-color-2 pl-5  relative transition-all duration-500 before:w-1 before:h-1 before:absolute before:top-1/2 before:left-0 before:-translate-y-1/2 before:bg-primary-color-light  dark:before:bg-body-color-2 before:rounded-100% ">
                                                        SEP 14, 2024</span>
                                                </li>
                                            </ul>
                                            <h4>
                                                <a href="{{ url("blog-details.html") }}"
                                                    class="text-primary-color-light dark:text-white-color dark:group-hover:text-white-color w-full  text-size-22 lg:text-2xl font-semibold  leading-1.4 lg:leading-1.4 uppercase bg-[0_100%] [background-size:0_1px] bg-no-repeat bg-gradient-primary-11 hover:[background-size:100%_1px] tracking-0.02em inline duration-500">

                                                    التسويق الرقمي لمكتبهم الجديد.

                                                </a>
                                            </h4>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>




    </main>

    <!-- footer area -->
    <footer class="bg-cream-light-color dark:bg-black-color">
        <div class="footer-inner">
            <div class="pt-20 pb-60px md:pt-100px md:pb-20 lg:pb-90px xl:pt-30 xl:pb-100px">
                <div class="container">
                    <div class="flex flex-wrap  gap-x-10
           lg:gap-x-10px gap-y-50px justify-between ">

                        <div class="max-w-full w-full   md:max-w-[calc(50%-20px)] lg:max-w-[390px]  xl:max-w-[260px]  2xl:max-w-[360px]   wow fadeInUp"
                            data-wow-delay=".3s">

                            <div class="max-w-180px w-full mb-6">
                                <a href="{{ url("index.html") }}">
                                    <span
                                        class="text-2xl font-bold text-primary-color dark:text-white-color">jidan</span>
                                </a>
                            </div>
                            <div class="text-gray-color-2 dark:text-white-color mb-4">
                                <p>أقوم بتحليل مشاكل تجربة المستخدم المعقدة وإنشاء حلول متكاملة تركز على الجودة
                                    والاتصال.</p>
                            </div>


                            <ul class="nav flex items-center    gap-2">

                                <li class="nav_item group relative ">
                                    <a href="{{ url("#") }}"
                                        class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize flex gap-2 items-center ">
                                        <span
                                            class="text-dark-color group-hover:text-white-color dark:text-white-color
                    text-size-13 border border-border-color dark:border-border-color-3 group-hover:border-transparent dark:group-hover:border-transparent w-30px h-30px rounded-full flex items-center justify-center overflow-hidden relative z-0 after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:w-full after:h-full after:scale-0 after:bg-gradient-primary-8 group-hover:after:scale-105 after:transition-all after:duration-300 after:z-[-1] after:rounded-full"><i
                                                class="fab fa-facebook-f"></i></span>
                                    </a>
                                </li>
                                <li class="nav_item group relative ">
                                    <a href="{{ url("#") }}"
                                        class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize flex gap-2 items-center ">
                                        <span
                                            class="text-dark-color group-hover:text-white-color dark:text-white-color
                    text-size-13 border border-border-color dark:border-border-color-3 group-hover:border-transparent dark:group-hover:border-transparent w-30px h-30px rounded-full flex items-center justify-center overflow-hidden relative z-0 after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:w-full after:h-full after:scale-0 after:bg-gradient-primary-8 group-hover:after:scale-105 after:transition-all after:duration-300 after:z-[-1] after:rounded-full"><i
                                                class="fab fa-instagram"></i></span>


                                    </a>
                                </li>
                                <li class="nav_item group relative ">
                                    <a href="{{ url("#") }}"
                                        class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize flex gap-2 items-center ">
                                        <span
                                            class="text-dark-color group-hover:text-white-color dark:text-white-color
                    text-size-13 border border-border-color dark:border-border-color-3 group-hover:border-transparent dark:group-hover:border-transparent w-30px h-30px rounded-full flex items-center justify-center overflow-hidden relative z-0 after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:w-full after:h-full after:scale-0 after:bg-gradient-primary-8 group-hover:after:scale-105 after:transition-all after:duration-300 after:z-[-1] after:rounded-full"><i
                                                class="fab fa-x-twitter"></i></span>

                                    </a>
                                </li>
                                <li class="nav_item group relative ">
                                    <a href="{{ url("#") }}"
                                        class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize flex gap-2 items-center ">
                                        <span
                                            class="text-dark-color group-hover:text-white-color dark:text-white-color
                    text-size-13 border border-border-color dark:border-border-color-3 group-hover:border-transparent dark:group-hover:border-transparent w-30px h-30px rounded-full flex items-center justify-center overflow-hidden relative z-0 after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:w-full after:h-full after:scale-0 after:bg-gradient-primary-8 group-hover:after:scale-105 after:transition-all after:duration-300 after:z-[-1] after:rounded-full"><i
                                                class="fab fa-linkedin-in"></i></span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="max-w-full w-full   md:max-w-[calc(50%-20px)] lg:w-auto lg:max-w-[inherit] wow fadeInUp"
                            data-wow-delay=".5s">
                            <h6
                                class="text-xl leading-1.2 uppercase font-semibold text-primary-color-light dark:text-white-color mb-25px md:mb-35px">
                                خدماتنا</h6>
                            <ul class="nav flex flex-col  gap-3">

                                <li class="nav_item group relative">
                                    <a href="{{ url("#services") }}"
                                        class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize  ">أنظمة
                                        مكافحة الحريق
                                    </a>
                                </li>

                                <li class="nav_item group relative">
                                    <a href="{{ url("#services") }}"
                                        class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize  ">أنظمة
                                        التكييف والتهوية
                                    </a>
                                </li>

                                <li class="nav_item group relative">
                                    <a href="{{ url("#services") }}"
                                        class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize  ">الأنظمة
                                        الكهربائية
                                    </a>
                                </li>

                                <li class="nav_item group relative">
                                    <a href="{{ url("#services") }}"
                                        class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize  ">أنظمة
                                        الصرف الصحي
                                    </a>
                                </li>



                            </ul>
                        </div>

                        <div class="w-full max-w-full md:max-w-[calc(50%-20px)] lg:w-auto lg:max-w-[inherit] wow fadeInUp"
                            data-wow-delay=".7s">
                            <h6
                                class="text-xl leading-1.2 uppercase font-semibold text-primary-color-light dark:text-white-color mb-25px md:mb-35px">

                                تواصل معنا</h6>
                            <ul class="nav flex flex-col  gap-3">

                                <li class="nav_item group relative">
                                    <a href="{{ url("mailto:info@jadianoffice.com") }}"
                                        class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize  ">info@jadianoffice.com
                                    </a>
                                </li>

                                <li class="nav_item group relative">
                                    <a href="https://wa.me/966123456789"
                                        class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize  ">+966
                                        12 345 6789
                                    </a>
                                </li>

                                <li class="nav_item group relative">
                                    <span
                                        class="text-size-15 font-normal text-seondary-color dark:text-white-color capitalize  ">الأحد
                                        - الخميس: 8:00 ص - 6:00 م
                                    </span>
                                </li>



                            </ul>
                        </div>

                        <div class="w-full max-w-full md:max-w-[calc(50%-20px)] lg:w-auto lg:max-w-[inherit] wow fadeInUp wow fadeInUp"
                            data-wow-delay=".9s">
                            <h6
                                class="text-xl leading-1.2 uppercase font-semibold text-primary-color-light dark:text-white-color mb-5">
                                احصل على <br>
                                استشارة مجانية!</h6>

                            <form class="flex items-center gap-2">

                                <!-- inputs -->

                                <!-- first name -->
                                <div class="flex-grow">

                                    <input type="search" placeholder="أدخل اسمك"
                                        class="text-black-color w-full pl-5 pr-5 py-4 border border-border-color focus:border-border-color dark:focus:border-transparent rounded-[60px] outline-none focus:outline-none transition-all duration-300 placeholder:text-gray-color dark:placeholder:text-black-color bg-white-color leading-1">
                                </div>

                                <div class="flex-shrink-0 "><button type="submit"
                                        class="text-size-25px w-60px h-60px text-white-color group-hover:text-white-color  bg-gradient-primary-8 outline-1 outline outline-body-color dark:outline-bg-color-2 group-hover:border-transparent  rounded-100% leading-1 transition-all duration-300  inline-flex justify-center items-center group">
                                        <span class="relative overflow-hidden -rotate-45">
                                            <i
                                                class="fa-regular fa-arrow-right text-lg group-hover:translate-x-150% transition-all duration-500 inline-block"></i>
                                            <i
                                                class="fa-regular fa-arrow-right text-lg absolute left-0 top-0 -translate-x-150% group-hover:-translate-x-0 transition-all duration-500"></i>
                                        </span>
                                    </button></div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>

            <!-- footer copyright -->

            <div class="footer-copyright">
                <div class="container">

                    <div
                        class="flex flex-wrap gap-4 md:gap-30px justify-center xl:justify-between items-center py-5 md:py-30px border-t border-white-color-3  ">
                        <div>
                            <span
                                class="text-xs leading-2 sm:leading-2 uppercase font-semibold text-seondary-color dark:text-white-color block relative pl-4 before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:w-[7px] before:h-[7px]  before:bg-green1 before:rounded-100% ">متاح
                                للمشاريع
                                الهندسية</span>
                        </div>
                        <div>
                            <ul class="nav flex gap-5   md:gap-x-35px gap-y-3">

                                <li class="nav_item group relative">
                                    <a href="{{ url("#portfolio") }}"
                                        class="text-sm  text-seondary-color hover:text-primary-color dark:text-gray-color-4 dark:hover:text-white-color uppercase ">المشاريع.
                                    </a>
                                </li>

                                <li class="nav_item group relative">
                                    <a href="{{ url("#services") }}"
                                        class="text-sm  text-seondary-color hover:text-primary-color dark:text-gray-color-4 dark:hover:text-white-color uppercase ">الخدمات.
                                    </a>
                                </li>

                                <li class="nav_item group relative">
                                    <a href="{{ url("#about") }}"
                                        class="text-sm  text-seondary-color hover:text-primary-color dark:text-gray-color-4 dark:hover:text-white-color uppercase ">من
                                        نحن.
                                    </a>
                                </li>


                                <li class="nav_item group relative">
                                    <a href="{{ url("#contact") }}"
                                        class="text-sm  text-seondary-color hover:text-primary-color dark:text-gray-color-4 dark:hover:text-white-color uppercase   ">تواصل
                                        معنا.
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div
                            class="copyright text-primary-color-light dark:text-gray-color-4  whitespace-nowrap text-sm  uppercase ">
                            ©جميع الحقوق محفوظة لـ
                            <a href="{{ url("index.html") }}"
                                class="text-primary-color-light dark:text-white-color hover:text-primary-color dark:hover:text-primary-color">مكتب
                                جديان</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>





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
