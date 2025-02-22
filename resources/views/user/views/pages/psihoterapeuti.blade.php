@inject ('helper', '\App\Helpers\Helper')

@php
    $slug = request()->segment(2);

    $category = $helper->getCategoryFromSlug($slug);

    $psychotherapists = $helper->getPsychotherapists();

    $leadPsychotherapists = $helper->getLeadPsychotherapists();
@endphp

<x-app-worker-layout>
    <x-slot name="pageTitle">
        {{ $category->category_name }}
    </x-slot>

    <x-slot name="header">
        {{ $category->category_name }}
    </x-slot>

    <div class="flex w-full relative">
        <img class="page-header-image" src="{{ asset('storage/' . $category->image) }}"
            alt="{{ $category->category_name }}" />
        <span class="page-header-name">
            {{ $category->category_name }}
        </span>
    </div>

    <div class="main-container my-20">
        <h2 class="title text-center">
            Integrativni dečji psihoterapeuti
        </h2>

        <div class="flex flex-wrap justify-center">
            @foreach ($psychotherapists as $psychotherapist)
                <div class="xl:w-1/3 md:w-1/2 w-full p-3">
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

        <h2 class="title text-center lg:mt-20 mt-10">
            Voditelj integrativne dečje psihodrame
        </h2>

        <div class="flex flex-wrap justify-center">
            @foreach ($leadPsychotherapists as $psychotherapist)
                <div class="xl:w-1/3 md:w-1/2 w-full p-3">
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
    </div>

</x-app-worker-layout>
