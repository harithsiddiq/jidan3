@php
$categories = \Taba\Crm\Models\PostCategory::RegisterInHeader();

@endphp

{{-- <footer>
    <div class="footer-inner bg-seondary-color dark:bg-dark-color">
        <div class="container">
            <div class="flex flex-col items-center pt-50px pb-5 md:pt-60px">
                <div class="footer-logo w-75px h-75px mb-6">
                    <a href="{{ url("/") }}"><img src="{{ asset("/assets/img/logo/logo.png") }}" alt=" "
                            class="w-full h-full object-cover" /></a>
                </div>
                <!-- nav -->
                <div>
                    <ul class="nav flex flex-wrap justify-center items-center gap-x-35px">
                        @foreach ($categories as $category)
                        <li class="nav_item group relative">
                            <a href="{{ route('dynamic.route', ['slug' => $category->slug]) }}"
                                class="text-size-15 font-medium text-white-color capitalize py-10px md:py-15px lg:py-25px 2xl:py-30px relative z-0 after:w-0 after:h-0.5 after:bg-gradient-primary after:absolute after:right-0 hover:after:left-0 after:bottom-[10px] md:after:bottom-[15px] lg:after:bottom-[25px] after:transition-all after:duration-500 group-hover:after:w-full">{{$category->name}}

                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="copyright text-gray-color whitespace-nowrap text-sm md:text-base mt-5">
                    © 2024 All rights reserved by
                    <a href="{{ url("/") }}"
                        class="text-white-color hover:text-primary-color">{{ __('Battour marketting') }}</a>
                </div>
            </div>
        </div>
    </div>
</footer> --}}
    <!-- footer area -->
    <footer class="bg-cream-light-color dark:bg-black-color">
        <div class="footer-inner">
            <div class="pt-20 pb-60px md:pt-100px md:pb-20 lg:pb-90px xl:pt-30 xl:pb-100px">
                <div class="container">
                    <div class="flex flex-wrap  gap-x-10
           lg:gap-x-10px gap-y-50px justify-between ">

                        <div class="max-w-full w-full   md:max-w-[calc(50%-20px)] lg:max-w-[390px]  xl:max-w-[260px]  2xl:max-w-[360px]   wow fadeInUp" data-wow-delay=".3s">

                            <div class="max-w-180px w-full mb-6">
                                <a href="{{ url("index.html") }}">
                                    <span class="text-2xl font-bold text-primary-color dark:text-white-color">jidan</span>
                                </a>
                            </div>
                            <div class="text-gray-color-2 dark:text-white-color mb-4">
                                <p>أقوم بتحليل مشاكل تجربة المستخدم المعقدة وإنشاء حلول متكاملة تركز على الجودة
                                    والاتصال.</p>
                            </div>


                            <ul class="nav flex items-center    gap-2">

                                <li class="nav_item group relative ">
                                    <a href="{{ url("#") }}" class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize flex gap-2 items-center ">
                                        <span class="text-dark-color group-hover:text-white-color dark:text-white-color
                    text-size-13 border border-border-color dark:border-border-color-3 group-hover:border-transparent dark:group-hover:border-transparent w-30px h-30px rounded-full flex items-center justify-center overflow-hidden relative z-0 after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:w-full after:h-full after:scale-0 after:bg-gradient-primary-8 group-hover:after:scale-105 after:transition-all after:duration-300 after:z-[-1] after:rounded-full"><i class="fab fa-facebook-f"></i></span>
                                    </a>
                                </li>
                                <li class="nav_item group relative ">
                                    <a href="{{ url("#") }}" class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize flex gap-2 items-center ">
                                        <span class="text-dark-color group-hover:text-white-color dark:text-white-color
                    text-size-13 border border-border-color dark:border-border-color-3 group-hover:border-transparent dark:group-hover:border-transparent w-30px h-30px rounded-full flex items-center justify-center overflow-hidden relative z-0 after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:w-full after:h-full after:scale-0 after:bg-gradient-primary-8 group-hover:after:scale-105 after:transition-all after:duration-300 after:z-[-1] after:rounded-full"><i class="fab fa-instagram"></i></span>


                                    </a>
                                </li>
                                <li class="nav_item group relative ">
                                    <a href="{{ url("#") }}" class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize flex gap-2 items-center ">
                                        <span class="text-dark-color group-hover:text-white-color dark:text-white-color
                    text-size-13 border border-border-color dark:border-border-color-3 group-hover:border-transparent dark:group-hover:border-transparent w-30px h-30px rounded-full flex items-center justify-center overflow-hidden relative z-0 after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:w-full after:h-full after:scale-0 after:bg-gradient-primary-8 group-hover:after:scale-105 after:transition-all after:duration-300 after:z-[-1] after:rounded-full"><i class="fab fa-x-twitter"></i></span>

                                    </a>
                                </li>
                                <li class="nav_item group relative ">
                                    <a href="{{ url("#") }}" class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize flex gap-2 items-center ">
                                        <span class="text-dark-color group-hover:text-white-color dark:text-white-color
                    text-size-13 border border-border-color dark:border-border-color-3 group-hover:border-transparent dark:group-hover:border-transparent w-30px h-30px rounded-full flex items-center justify-center overflow-hidden relative z-0 after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:w-full after:h-full after:scale-0 after:bg-gradient-primary-8 group-hover:after:scale-105 after:transition-all after:duration-300 after:z-[-1] after:rounded-full"><i class="fab fa-linkedin-in"></i></span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="max-w-full w-full   md:max-w-[calc(50%-20px)] lg:w-auto lg:max-w-[inherit] wow fadeInUp" data-wow-delay=".5s">
                            <h6 class="text-xl leading-1.2 uppercase font-semibold text-primary-color-light dark:text-white-color mb-25px md:mb-35px">
                                خدماتنا</h6>
                            <ul class="nav flex flex-col  gap-3">

                                <li class="nav_item group relative">
                                    <a href="{{ url("#services") }}" class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize  ">أنظمة
                                        مكافحة الحريق
                                    </a>
                                </li>

                                <li class="nav_item group relative">
                                    <a href="{{ url("#services") }}" class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize  ">أنظمة
                                        التكييف والتهوية
                                    </a>
                                </li>

                                <li class="nav_item group relative">
                                    <a href="{{ url("#services") }}" class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize  ">الأنظمة
                                        الكهربائية
                                    </a>
                                </li>

                                <li class="nav_item group relative">
                                    <a href="{{ url("#services") }}" class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize  ">أنظمة
                                        الصرف الصحي
                                    </a>
                                </li>



                            </ul>
                        </div>

                        <div class="w-full max-w-full md:max-w-[calc(50%-20px)] lg:w-auto lg:max-w-[inherit] wow fadeInUp" data-wow-delay=".7s">
                            <h6 class="text-xl leading-1.2 uppercase font-semibold text-primary-color-light dark:text-white-color mb-25px md:mb-35px">

                                تواصل معنا</h6>
                            <ul class="nav flex flex-col  gap-3">

                                <li class="nav_item group relative">
                                    <a href="{{ url("mailto:info@jadianoffice.com") }}" class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize  ">info@jadianoffice.com
                                    </a>
                                </li>

                                <li class="nav_item group relative">
                                    <a href="https://wa.me/966123456789" class="text-size-15 font-normal text-seondary-color dark:text-white-color hover:text-primary-color dark:hover:text-primary-color capitalize  ">+966
                                        12 345 6789
                                    </a>
                                </li>

                                <li class="nav_item group relative">
                                    <span class="text-size-15 font-normal text-seondary-color dark:text-white-color capitalize  ">الأحد
                                        - الخميس: 8:00 ص - 6:00 م
                                    </span>
                                </li>



                            </ul>
                        </div>

                        <div class="w-full max-w-full md:max-w-[calc(50%-20px)] lg:w-auto lg:max-w-[inherit] wow fadeInUp wow fadeInUp" data-wow-delay=".9s">
                            <h6 class="text-xl leading-1.2 uppercase font-semibold text-primary-color-light dark:text-white-color mb-5">
                                احصل على <br>
                                استشارة مجانية!</h6>

                            <form class="flex items-center gap-2">

                                <!-- inputs -->

                                <!-- first name -->
                                <div class="flex-grow">

                                    <input type="search" placeholder="أدخل اسمك" class="text-black-color w-full pl-5 pr-5 py-4 border border-border-color focus:border-border-color dark:focus:border-transparent rounded-[60px] outline-none focus:outline-none transition-all duration-300 placeholder:text-gray-color dark:placeholder:text-black-color bg-white-color leading-1">
                                </div>

                                <div class="flex-shrink-0 "><button type="submit" class="text-size-25px w-60px h-60px text-white-color group-hover:text-white-color  bg-gradient-primary-8 outline-1 outline outline-body-color dark:outline-bg-color-2 group-hover:border-transparent  rounded-100% leading-1 transition-all duration-300  inline-flex justify-center items-center group">
                                        <span class="relative overflow-hidden -rotate-45">
                                            <i class="fa-regular fa-arrow-right text-lg group-hover:translate-x-150% transition-all duration-500 inline-block"></i>
                                            <i class="fa-regular fa-arrow-right text-lg absolute left-0 top-0 -translate-x-150% group-hover:-translate-x-0 transition-all duration-500"></i>
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

                    <div class="flex flex-wrap gap-4 md:gap-30px justify-center xl:justify-between items-center py-5 md:py-30px border-t border-white-color-3  ">
                        <div>
                            <span class="text-xs leading-2 sm:leading-2 uppercase font-semibold text-seondary-color dark:text-white-color block relative pl-4 before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:w-[7px] before:h-[7px]  before:bg-green1 before:rounded-100% ">متاح
                                للمشاريع
                                الهندسية</span>
                        </div>
                        <div>
                            <ul class="nav flex gap-5   md:gap-x-35px gap-y-3">

                                <li class="nav_item group relative">
                                    <a href="{{ url("#portfolio") }}" class="text-sm  text-seondary-color hover:text-primary-color dark:text-gray-color-4 dark:hover:text-white-color uppercase ">المشاريع.
                                    </a>
                                </li>

                                <li class="nav_item group relative">
                                    <a href="{{ url("#services") }}" class="text-sm  text-seondary-color hover:text-primary-color dark:text-gray-color-4 dark:hover:text-white-color uppercase ">الخدمات.
                                    </a>
                                </li>

                                <li class="nav_item group relative">
                                    <a href="{{ url("#about") }}" class="text-sm  text-seondary-color hover:text-primary-color dark:text-gray-color-4 dark:hover:text-white-color uppercase ">من
                                        نحن.
                                    </a>
                                </li>


                                <li class="nav_item group relative">
                                    <a href="{{ url("#contact") }}" class="text-sm  text-seondary-color hover:text-primary-color dark:text-gray-color-4 dark:hover:text-white-color uppercase   ">تواصل
                                        معنا.
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="copyright text-primary-color-light dark:text-gray-color-4  whitespace-nowrap text-sm  uppercase ">
                            ©جميع الحقوق محفوظة لـ
                            <a href="{{ url("index.html") }}" class="text-primary-color-light dark:text-white-color hover:text-primary-color dark:hover:text-primary-color">مكتب
                                جديان</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
