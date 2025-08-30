        @props(['posts'])
        @if(!empty($posts))
        <!-- start: Brand Marque Area -->
        <div class=" pt-60px md:pt-20 lg:pt-30 overflow-x-hidden wow fadeInUp " data-wow-delay=".3s">

            <div
                class="text-center mb-50px md:mb-60px after:w-full after:h-1px after:bg-body-color dark:after:bg-dark-color-2 after:absolute after:top-1/2 after:left-0 after:-translate-y-1/2 relative z-0 after:-z-1 ">
                <p
                    class="text-size-13 sm:text-base font-semibold uppercase inline-block px-6 bg-white-color dark:bg-primary-color-light text-seondary-color dark:text-white-color">

                    <span class="text-primary-color">
                        {{ $posts->first()->postCategory->name}}
                    </span>
                    {{ $posts->first()->postCategory->subtitle}}
                </p>
            </div>
            <div class="tj-roll-section ">
                <div class="relative z-0 mask-fade-horizontal-2">
                    <div class="tj-marquee tj-marquee--3 swiper  ">
                        <div class="swiper-wrapper">
                            @foreach($posts as $index => $post)
                            @foreach($post->images as $index => $image)
                            <div
                                class="swiper-slide cursor-pointer max-w-full !w-[200px] h-[84px] rounded-10px bg-cream-light-color dark:bg-black-color flex items-center justify-center relative z-0 overflow-hidden after:absolute after:left-0 after:right-0 after:w-full after:h-full after:-z-1 after:opacity-0 after:transition-all after:duration-300 after:bg-200 after:bg-gradient-secondary hover:after:opacity-100 group">
                                <div class="max-w-100px md:max-w-full">
                                    <img class="invert dark:invert-0 w-full transition-all duration-300 group-hover:brightness-100  group-hover:invert-0"
                                        src="{{ asset($image->url ?? $post->getRandomImage()) }}"
                                        alt="{{ $image->alt ?? "brand image"}}" width="100" />
                                </div>
                            </div>
                            @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif