<x-app-worker-layout>
    <x-slot name="pageTitle">
        {{ __('app.home-page.title') }}
    </x-slot>
    <x-slot name="header">
    </x-slot>

    <x-slot name="homePage">

        @if (session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: "{{ __('app.admin.sucess') }}",
                    text: '{{ session('success') }}',
                });
            </script>
        @endif

        @if (session('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: "{{ __('app.admin.error') }}",
                    text: '{{ session('error') }}',
                });
            </script>
        @endif

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
                <div class="main-container my-20">
                    <div class="flex justify-center lg:flex-row flex-col lg:gap-10 gap-5">
                        <div class="lg:w-1/2 w-full">
                            <h2 class="title">{{ $content->section_name }}</h2>
                            <p class="text-center">{!! $content->section_content !!}</p>
                        </div>
                        <div class="lg:w-1/2 w-full">
                            @php
                                $images = json_decode($content->section_image, true) ?? [];
                            @endphp
                            @if (!empty($images))
                                <img src="{{ asset('storage/' . $images[0]) }}" alt="{{ $content->section_name }}"
                                    class="w-full object-cover h-full" />
                            @endif
                        </div>
                    </div>
                </div>
            @endif

            @if ($content->id == 4)
                <div class="main-container my-20">
                    <h2 class="title mt-10">{{ $content->section_name }}</h2>

                    <form method="POST" class="flex justify-center lg:flex-row flex-col lg:gap-10 gap-10 2xl:m-20"
                        enctype="multipart/form-data" action="{{ route('save.contact.info') }}">

                        @csrf

                        <div class="lg:w-1/2 w-full">
                            <input class="input-style mb-5 w-full" type="text" name="name"
                                placeholder="Ime i prezime" />
                            <div class="w-full flex sm:flex-row flex-col sm:gap-5">
                                <div class="sm:w-1/2 w-full">
                                    <input class="input-style mb-5 w-full" type="text" name="email"
                                        placeholder="Email" />
                                </div>
                                <div class="sm:w-1/2 w-full">
                                    <input class="input-style mb-5 w-full" type="text" name="phone"
                                        placeholder="Telefon" />
                                </div>
                            </div>
                            <textarea class="w-full input-style" rows="6" placeholder="Poruka" name="message"></textarea>
                            <div class="felx w-full mt-5">
                                <button class="main-btn w-full">
                                    Posaji poruku
                                </button>
                            </div>
                        </div>
                        <div class="lg:w-1/2 w-full flex flex-col justify-center lg:items-start items-center lg:ml-10">
                            <p class="text-center">{!! $content->section_content !!}</p>
                        </div>
                    </form>
                </div>
            @endif
        @endforeach

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
