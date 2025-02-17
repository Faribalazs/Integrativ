@inject ('helper', '\App\Helpers\Helper')

@php
    $conferences = $helper->getConferences();

    $lang = app()->getLocale();
@endphp

<div class="swiper conferenceSlider md:my-16">
    <div class="swiper-wrapper conference-slider-wrapper">
        @foreach ($conferences as $conference)
            <div class="swiper-slide relative">
                <a target="blank" href="/{{ $lang }}/konferencije/show/{{ $conference->id }}">
                    <img class="conference-image" src="{{ asset('storage/' . $conference->image) }}" />
                </a>
            </div>
        @endforeach
    </div>
    <div class="conference-swiper-pagination flex w-full md:justify-end justify-center mt-2 pr-2"></div>
</div>

<script>
    const conferenceSwiper = new Swiper('.conferenceSlider', {
        loop: true,
        spaceBetween:50,
        breakpoints: {
            300: { slidesPerView: 1 },
            850: { slidesPerView: 2 },
            1350: { slidesPerView: 3 }
        },
        pagination: {
            el: '.conference-swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: true,
        },
    });
</script>