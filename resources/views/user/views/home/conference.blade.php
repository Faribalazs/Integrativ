@inject ('helper', '\App\Helpers\Helper')

@php
    $conferences = $helper->getConferences();
@endphp

<div class="swiper conferenceSlider my-16">
    <div class="swiper-wrapper conference-slider-wrapper">
        @foreach ($conferences as $conference)
            <div class="swiper-slide relative">
                <a target="blank" href="#">
                    <img class="conference-image" src="{{ asset('storage/' . $conference->image) }}" />
                </a>
            </div>
        @endforeach
    </div>
</div>

<script>
    const conferenceSwiper = new Swiper('.conferenceSlider', {
        loop: true,
        spaceBetween:50,
        breakpoints: {
            300: { slidesPerView: 1 },
            640: { slidesPerView: 2 },
            1024: { slidesPerView: 3 }
        },
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
    });
</script>