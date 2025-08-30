{{-- @php
$categories = \Taba\Crm\Models\PostCategory::RegisterInHeader();
@endphp
<header class="header-area header-absolute header-6 rtl:right-0 rtl:left-none">
    <div class="relative border-b border-border-coloer dark:border-bg-color-2">
        <div class="px-15px xl:px-35px 2xl:px-65px">
            <div class="flex flex-wrap justify-between items-stretch">
                <div
                    class="max-w-140px sm:max-w-210px flex items-center h-75px sm:h-85px md:h-[103px] border-r border-border-coloer dark:border-bg-color-2 w-full leading-1 pr-15px sm:pr-0">
                    <ul class="flex items-center gap-x-15px xl:gap-x-35px leading-1">
                        <li class="leading-1">
                            <a href="{{ url("/") }}" class="logo">
<img class="w-15 h-15 hidden dark:inline-block" src="{{ asset("/assets/img/logo/logo.png") }}" alt="" />
<img class="w-15 h-15 inlin-block dark:hidden" src="{{ asset("/assets/img/logo/logo-dark.png") }}" alt="" />
</a>
</li>
</ul>
</div>
<nav class="flex-grow">
    <ul class="nav flex items-center gap-x-5 xl:gap-x-30px 2xl:gap-x-45px h-full">
        <li class="nav_item group relative hidden lg:flex items-stretch">
            <a href="/"
                class="text-size-15 font-medium text-seondary-color dark:text-gray-color-4 hover:text-primary-color dark:hover:text-white-color [.nav_item.active_&]:text-primary-color dark:[.nav_item.active_&]:text-white-color capitalize py-10 relative z-0 after:w-0 after:h-0.5 after:bg-primary-color after:absolute after:right-0 hover:after:left-0 after:-bottom-0 after:transition-all after:duration-500 group-hover:after:w-full flex items-center">
                {{__('home')}}
            </a>
        </li>

        @foreach ($categories as $category)
        <li class="nav_item group relative hidden lg:flex items-stretch">
            <a href="{{ route('dynamic.route', ['slug' => $category->slug]) }}"
                class="text-size-15 font-medium text-seondary-color dark:text-gray-color-4 hover:text-primary-color dark:hover:text-white-color [.nav_item.active_&]:text-primary-color dark:[.nav_item.active_&]:text-white-color capitalize py-10 relative z-0 after:w-0 after:h-0.5 after:bg-primary-color after:absolute after:right-0 hover:after:left-0 after:-bottom-0 after:transition-all after:duration-500 group-hover:after:w-full flex items-center">
                {{$category->name}}
            </a>
        </li>
        @endforeach
    </ul>
</nav>

<div
    class="lg:pl-30px flex items-center h-75px sm:h-85px md:h-[103px] gap-25px lg:border-l border-border-coloer dark:border-bg-color-2">
    <div class="hidden sm:block">
        <a href="{{ url("contact") }}"
            class="text-size-15 font-bold text-white-color capitalize py-17px px-35px bg-200 bg-gradient-secondary hover:bg-[-100%] rounded-full inline-flex gap-10px items-center leading-1 transition-all duration-300 group">
            {{ __('تواصل معنا') }} <i
                class="fa-regular fa-arrow-right transition-all duration-300 -rotate-45 group-hover:rotate-0"></i>
        </a>
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
<div
    class="mobile-menu absolute left-0 top-full min-h-screen-90 w-full bg-seondary-color block origin-top-left lg:hidden">
    <div class="container py-5">
        <ul class="ml-4">
            <li>
                <a class="text-size-25 text-white-color uppercase leading-1.2 py-15px" href="/">
                    {{ __('home')}}
                </a>
            </li>
            @foreach ($categories as $category)
            <li>
                <a class="text-size-25 text-white-color uppercase leading-1.2 py-15px"
                    href="{{ route('dynamic.route', ['slug' => $category->slug]) }}">
                    {{$category->name}}
                </a>
            </li>
            @endforeach
            <li>
                <a class="text-size-25 text-white-color uppercase leading-1.2 py-15px"
                    href="{{ route('lang.switch', ['lang' => app()->getlocale() == 'ar' ? 'en' : 'ar']) }}">
                    <i class="fas fa-globe mr-1"></i>
                    {{ __('lang.arabic') }}
                </a>
            </li>
        </ul>
    </div>
</div>
</div>
</header>

<header class="header-area header-2 header-6 header-sticky">
    <div class="relative border-b border-border-coloer dark:border-bg-color-2">
        <div class="px-15px xl:px-35px 2xl:px-65px">
            <div class="flex flex-wrap justify-between items-stretch">
                <div
                    class="max-w-140px sm:max-w-210px flex items-center h-75px sm:h-85px md:h-[103px] border-r border-border-coloer dark:border-bg-color-2 w-full leading-1 pr-15px sm:pr-0">
                    <ul class="flex items-center gap-x-15px xl:gap-x-35px leading-1">
                        <li class="leading-1">
                            <a href="{{ url("/") }}" class="logo">
                                <img class="w-15 h-15 hidden dark:inline-block"
                                    src="{{ asset("/assets/img/logo/logo.png") }}" alt="" />
                                <img class="w-15 h-15 inlin-block dark:hidden"
                                    src="{{ asset("/assets/img/logo/logo-dark.png") }}" alt="" />
                            </a>
                        </li>
                    </ul>
                </div>
                <nav class="flex-grow">
                    <ul class="nav flex items-center gap-x-5 xl:gap-x-30px 2xl:gap-x-45px h-full">
                        <li class="nav_item group relative hidden lg:flex items-stretch">
                            <a href="/"
                                class="text-size-15 font-medium text-seondary-color dark:text-gray-color-4 hover:text-primary-color dark:hover:text-white-color [.nav_item.active_&]:text-primary-color dark:[.nav_item.active_&]:text-white-color capitalize py-10 relative z-0 after:w-0 after:h-0.5 after:bg-primary-color after:absolute after:right-0 hover:after:left-0 after:-bottom-0 after:transition-all after:duration-500 group-hover:after:w-full flex items-center">
                                {{__('home')}}
                            </a>
                        </li>

                        @foreach ($categories as $category)
                        <li class="nav_item group relative hidden lg:flex items-stretch">
                            <a href="{{ route('dynamic.route', ['slug' => $category->slug]) }}"
                                class="text-size-15 font-medium text-seondary-color dark:text-gray-color-4 hover:text-primary-color dark:hover:text-white-color [.nav_item.active_&]:text-primary-color dark:[.nav_item.active_&]:text-white-color capitalize py-10 relative z-0 after:w-0 after:h-0.5 after:bg-primary-color after:absolute after:right-0 hover:after:left-0 after:-bottom-0 after:transition-all after:duration-500 group-hover:after:w-full flex items-center">
                                {{$category->name}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </nav>

                <div
                    class="lg:pl-30px flex items-center h-75px sm:h-85px md:h-[103px] gap-25px lg:border-l border-border-coloer dark:border-bg-color-2">
                    <div class="hidden sm:block">
                        <a href="{{ url("contact") }}"
                            class="text-size-15 font-bold text-white-color capitalize py-17px px-35px bg-200 bg-gradient-secondary hover:bg-[-100%] rounded-full inline-flex gap-10px items-center leading-1 transition-all duration-300 group">
                            {{ __('تواصل معنا') }} <i
                                class="fa-regular fa-arrow-right transition-all duration-300 -rotate-45 group-hover:rotate-0"></i>
                        </a>
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
        <div
            class="mobile-menu absolute left-0 top-full min-h-screen-90 w-full bg-seondary-color block origin-top-left lg:hidden">
            <div class="container py-5">
                <ul class="ml-4">
                    <li>
                        <a class="text-size-25 text-white-color uppercase leading-1.2 py-15px" href="/">
                            {{ __('home')}}
                        </a>
                    </li>
                    @foreach ($categories as $category)
                    <li>
                        <a class="text-size-25 text-white-color uppercase leading-1.2 py-15px"
                            href="{{ route('dynamic.route', ['slug' => $category->slug]) }}">
                            {{$category->name}}
                        </a>
                    </li>
                    @endforeach
                    <li>
                        <a class="text-size-25 text-white-color uppercase leading-1.2 py-15px"
                            href="{{ route('lang.switch', ['lang' => app()->getlocale() == 'ar' ? 'en' : 'ar']) }}">
                            <i class="fas fa-globe mr-1"></i>
                            {{ __('lang.arabic') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header> --}}
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
                                <span class="text-2xl font-bold text-primary-color dark:text-white-color">jidan</span>
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
                                <span class="text-2xl font-bold text-primary-color dark:text-white-color">jidan</span>
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