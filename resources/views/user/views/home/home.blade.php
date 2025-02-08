<x-app-worker-layout>
    <x-slot name="pageTitle">
        {{ __('app.home-page.title') }}
    </x-slot>
    <x-slot name="header">
    </x-slot>

    <x-slot name="homePage">
        <div class="swiper homePageSwiper">
            <div class="swiper-wrapper">
                @foreach ($sliderData as $sliderItem)
                    <div class="swiper-slide relative">
                        <img class="slider-img" src="{{ asset('storage/' . $sliderItem->image) }}" />
                        <div class="gradient items-{{ $sliderItem->horizontal }} justify-{{ $sliderItem->vertical }}">
                            <div>
                                {!! $sliderItem->slider_text !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="main-container my-20">
            @foreach ($homePageContent as $content)
                @if ($content->id == 2 || $content->id == 3)
                    @if ($content->section_content)
                        @php
                            $include = preg_replace('/<\/?p>/i', '', $content->section_content);
                        @endphp
                        {!! view()->make($include)->render() !!}
                    @endif
                @endif

                @if ($content->id == 1)
                    <div class="flex justify-center lg:flex-row flex-col lg:gap-10 gap-5">
                        <div class="lg:w-1/2 w-full">
                            <h2 class="text-5xl font-bold mb-10">{{ $content->section_name }}</h2>
                            <p class="text-center">{!! $content->section_content !!}</p>
                        </div>
                        <div class="lg:w-1/2 w-full">
                            @php
                                $images = json_decode($content->section_image, true) ?? [];
                            @endphp
                            @if (!empty($images))
                                <img src="{{ asset('storage/' . $images[0]) }}" alt="{{ $content->section_name }}" class="w-full object-cover h-full" />
                            @endif
                        </div>
                    </div>
                @endif

                @if ($content->id == 4)

                @endif
            @endforeach
        </div>

        <script>
            const swiper = new Swiper('.homePageSwiper', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
            });
        </script>
    </x-slot>
</x-app-worker-layout>
