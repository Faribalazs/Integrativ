@inject ('helper', '\App\Helpers\Helper')

@php
    $partnerImages = $helper->getPartnerImages();
    $images = json_decode($partnerImages->section_image, true) ?? [];
@endphp

<div class="swiper partnerSlider">
    <div class="swiper-wrapper">
        @foreach ($images as $image)
            <div class="swiper-slide relative">
                <img class="slider-img" src="{{ asset('storage/' . $image) }}" />
            </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>

<script>
    const swiper = new Swiper('.partnerSlider', {
        loop: true,
        slidesPerView: 5,
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
