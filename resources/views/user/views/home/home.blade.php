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
                // autoplay: {
                //     delay: 5000,
                //     disableOnInteraction: false,
                // },
            });
        </script>
    </x-slot>
</x-app-worker-layout>
