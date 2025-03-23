@inject ('helper', '\App\Helpers\Helper')

@php
    $partnerImages = $helper->getPartnerImages();
@endphp

<div class="swiper partnerSlider my-16">
    <div class="swiper-wrapper partners-slider-wrapper items-center">
        @foreach ($partnerImages as $partner)
            <div class="swiper-slide relative flex justify-center items-center h-full w-full">
                @if ($partner->slug)
                    <a class="h-full w-full" href="{{ $partner->slug }}">
                        <img class="partner-image" src="{{ asset('storage/' . $partner->image) }}" />
                    </a>
                @else
                    <img class="partner-image" src="{{ asset('storage/' . $partner->image) }}" />
                @endif
            </div>
        @endforeach
    </div>
    <div class="partner-swiper-pagination flex w-full md:justify-end justify-center mt-2 pr-2"></div>
</div>

<script>
    const partnerSwiper = new Swiper('.partnerSlider', {
        spaceBetween:100,
        breakpoints: {
            300: { slidesPerView: 1 },
            640: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
            1400: { slidesPerView: 4 },
            1900: { slidesPerView: 5 },
        },
        pagination: {
            el: '.partner-swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
    });
</script>