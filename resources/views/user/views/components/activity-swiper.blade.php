@inject ('helper', '\App\Helpers\Helper')

@php
    $activities = $helper->getActivities();

    $lang = app()->getLocale();
@endphp

<div class="swiper activitySlider md:my-16">
    <div class="swiper-wrapper conference-slider-wrapper items-center">
        @foreach ($activities as $activity)
            <div class="swiper-slide relative flex justify-center items-center h-full w-full">
                <a class="h-full w-full" href="/{{ $lang }}/aktivnosti/show/{{ $activity->id }}">
                    <img class="conference-image" src="{{ asset('storage/' . $activity->image) }}" />
                </a>
            </div>
        @endforeach
    </div>
    <div class="activity-swiper-pagination flex w-full md:justify-end justify-center mt-2 pr-2"></div>
</div>

<script>
    const activitySwiper = new Swiper('.activitySlider', {
        spaceBetween:50,
        breakpoints: {
            300: { slidesPerView: 1 },
            850: { slidesPerView: 2 },
            1350: { slidesPerView: 3 }
        },
        pagination: {
            el: '.activity-swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: true,
        },
    });
</script>