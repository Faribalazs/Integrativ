@inject ('helper', '\App\Helpers\Helper')

@php
    $partnerImages = $helper->getPartnerImages();
@endphp

<div class="swiper partnerSlider my-16">
    <div class="swiper-wrapper partners-slider-wrapper">
        @foreach ($partnerImages as $partner)
            <div class="swiper-slide relative">
                @if ($partner->slug)
                    <a target="blank" href="{{ $partner->slug }}">
                        <img class="partner-image" src="{{ asset('storage/' . $partner->image) }}" />
                    </a>
                @else
                    <img class="partner-image" src="{{ asset('storage/' . $partner->image) }}" />
                @endif
            </div>
        @endforeach
    </div>
</div>

<script>
    const partnerSwiper = new Swiper('.partnerSlider', {
        loop: true,
        spaceBetween:100,
        breakpoints: {
            300: { slidesPerView: 1 },
            640: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
            1400: { slidesPerView: 4 },
            1900: { slidesPerView: 5 },
        },
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
    });
</script>