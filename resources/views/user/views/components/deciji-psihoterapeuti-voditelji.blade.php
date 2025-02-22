@inject ('helper', '\App\Helpers\Helper')

@php
    $leadPsychotherapists = $helper->getLeadPsychotherapists();
@endphp

<div class="swiper psychotherapistsLeadSlider my-16">
    <div class="swiper-wrapper partners-slider-wrapper">
        @foreach ($leadPsychotherapists as $psychotherapist)
            <div class="swiper-slide relative">
                <div class="psychotherapist-card">
                    <img class="psychotherapist-image" src="{{ asset('storage/' . $psychotherapist->image) }}" />
                    <div class="mt-5 flex flex-col items-center justify-center">
                        <span class="font-extrabold text-white text-lg">
                            {{ $psychotherapist->name }}
                        </span>
                        <span>
                            {{ $psychotherapist->position }}
                        </span>
                    </div>
                    <div class="mt-5 flex flex-col items-center justify-center">
                        <span class="text-white flex items-center">
                            <i class="ri-map-pin-line mr-2 text-2xl"></i>
                            {{ $psychotherapist->location }}
                        </span>
                        <span class="text-white flex items-center mt-2">
                            <i class="ri-phone-line mr-2 text-2xl"></i>
                            <a href="tel:{{ $psychotherapist->phone }}" class="underline">
                                {{ $psychotherapist->phone }}
                            </a>
                        </span>
                        <span class="text-white flex items-center mt-2">
                            <i class="ri-mail-line mr-2 text-2xl"></i>
                            <a href="mailto:{{ $psychotherapist->email }}" class="underline">
                                {{ $psychotherapist->email }}
                            </a>
                        </span>
                    </div>
                    <div class="mt-5 flex flex-row gap-3 items-center justify-center">
                        @if ($psychotherapist->facebook)
                            <a href="{{ $psychotherapist->facebook }}" target="_blank">
                                <i class="ri-facebook-circle-fill text-white text-4xl"></i>
                            </a>
                        @endif
                        @if ($psychotherapist->instagram)
                            <a href="{{ $psychotherapist->instagram }}" target="_blank">
                                <i class="ri-instagram-fill text-white text-4xl"></i>
                            </a>
                        @endif
                        @if ($psychotherapist->twitter)
                            <a href="{{ $psychotherapist->twitter }}" target="_blank">
                                <i class="ri-twitter-x-line text-white text-4xl"></i>
                            </a>
                        @endif
                        @if ($psychotherapist->linkedin)
                            <a href="{{ $psychotherapist->linkedin }}" target="_blank">
                                <i class="ri-linkedin-fill text-white text-4xl"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="lead-psychotherapists-swiper-pagination flex w-full justify-center mt-10"></div>
</div>

<script>
    const psychotherapistsLeadSlider = new Swiper('.psychotherapistsLeadSlider', {
        loop: true,
        spaceBetween: 100,
        breakpoints: {
            300: {
                slidesPerView: 1
            },
            850: {
                slidesPerView: 2
            },
            1300: {
                slidesPerView: 3
            },
            1800: {
                slidesPerView: 4
            },
        },
        pagination: {
            el: '.lead-psychotherapists-swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
    });
</script>