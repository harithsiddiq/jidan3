        <!-- hero banner  -->
        <section class="dark hero-section relative h-screen overflow-hidden">
            <!-- bg video -->
            <video autoplay muted loop class="top-0 left-0 w-full h-screen object-cover z-10">
                <source src="{{ asset("/./assets/video/hero.mp4") }}" type="video/mp4">

            </video>
            <!-- overlay -->
            <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-30 z-20"></div>


            <div class="container relative z-10 hidden">
                <div class="grid lg:grid-cols-2 gap-y-[180px] sm:gap-y-[100px] md:gap-y-20 lg:gap-y-0">
                    <div class="lg:pl-30px xl:pl-15px 2xl:pl-0">
                        <h4
                            class="text-gray-color-2 text-lg  leading-1.5  font-semibold flex items-center gap-10px mb-5 lg:mb-30px">


                            <span><img class="origin-[70%_70%] animate-weave"
                                    src="{{ asset("/./assets/img/icons/hero-h8-1.png") }}" alt="Icons">
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
                                    src="{{ asset("/./assets/img/hero/hero-10.png") }}" alt="Images">

                            </div>
                            <!-- review area -->
                            <div
                                class=" absolute w-full max-w-[220px] md:max-w-[250px] lg:max-w-[220px] xl:max-w-[250px] left-5 top-[-130px] sm:top-[-45px] sm:left-0 md:left-20  lg:left-0 xl:left-[15px] animate-move-hor">
                                <div
                                    class="w-full p-5 md:p-30px lg:p-5 xl:p-30px   rounded-10px  bg-bg-color-2 backdrop-blur-[100px] dark:backdrop-blur-[41px] z-1">

                                    <ul class="flex items-center mb-6 md:mb-35px">
                                        <li class="-ml-4 first:ml-0">
                                            <img class="w-11 sm:w-55px lg:w-11 xl:w-55px h-11 sm:h-55px lg:h-11 xl:h-55px border-[3px] border-primary-color dark:border-dark-color rounded-100%"
                                                src="{{ asset("/./assets/img/hero/hero-4-review-img1.png") }}" alt="">

                                        </li>
                                        <li class="-ml-4 first:ml-0">
                                            <img class="w-11 sm:w-55px lg:w-11 xl:w-55px h-11 sm:h-55px lg:h-11 xl:h-55px border-[3px] border-primary-color dark:border-dark-color rounded-100%"
                                                src="{{ asset("/./assets/img/hero/hero-4-review-img2.png") }}" alt="">

                                        </li>
                                        <li class="-ml-4 first:ml-0">
                                            <img class="w-11 sm:w-55px lg:w-11 xl:w-55px h-11 sm:h-55px lg:h-11 xl:h-55px border-[3px] border-primary-color dark:border-dark-color rounded-100%"
                                                src="{{ asset("/./assets/img/hero/hero-4-review-img3.png") }}" alt="">

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
