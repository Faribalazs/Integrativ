@inject ('helper', '\App\Helpers\Helper')

@php
    $slug = request()->segment(2);

    $category = $helper->getCategoryFromSlug($slug);

    $content = $helper->getPageContent($slug);

    $customContent = $helper->getCustomDesignPageContent($slug);

    $btnKey = 1;

    $sectionKey = 1;

@endphp

<x-app-worker-layout>
    <x-slot name="pageTitle">
        {{ $category->category_name }}
    </x-slot>
    <x-slot name="header">
    </x-slot>

    <div class="flex w-full relative">
        <img class="page-header-image" src="{{ asset('storage/' . $category->image) }}"
            alt="{{ $category->category_name }}" />
        <span class="page-header-name">
            {{ $category->category_name }}
        </span>
    </div>

    @foreach ($content as $item)
        @if ($item->custom_design == 0)
            <div class="main-container my-10">
                <h2 class="title text-center">
                    {{ $item->title }}
                </h2>
                <div>
                    {!! $item->content !!}
                </div>
            </div>
        @endif
    @endforeach

    <div class="toggle-buttons">
        @foreach ($customContent as $item)
            <button class="toggle-btn 2xl:w-1/6 lg:w-1/3 md:w-1/2 w-full  {{ $loop->first ? 'active-btn' : '' }}"
                data-target="section{{ $btnKey++ }}">{{ $item->title }}</button>
        @endforeach
    </div>

    <div class="toggle-content">
        @foreach ($customContent as $item)
            <div id="section{{ $sectionKey++ }}"
                class="content-box main-container my-10 {{ $loop->first ? 'active' : '' }}">
                <h2 class="title text-center">
                    {{ $item->title }}
                </h2>
                <div class="flex gap-5 flex-col">
                    {!! $item->content !!}
                </div>

                <div class="flex justify-center">
                    @if ($item->image)
                        <img class="object-cover lg:mt-20 mt-10 w-full xl:w-1/2" src="{{ asset('storage/' . $item->image) }}" />
                    @endif
                </div>

            </div>
        @endforeach
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const buttons = document.querySelectorAll(".toggle-btn");
            const sections = document.querySelectorAll(".content-box");

            buttons.forEach((button) => {
                button.addEventListener("click", function() {
                    const target = this.getAttribute("data-target");

                    sections.forEach((section) => {
                        section.classList.remove("active");
                    });

                    buttons.forEach((button) => {
                        button.classList.remove("active-btn");
                    });

                    button.classList.add("active-btn");

                    document.getElementById(target).classList.add("active");
                });
            });
        });
    </script>

    <style>
        .toggle-buttons {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .toggle-content {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .toggle-btn {
            background-color: #B41919;
            color: white;
            padding: 16px;
        }

        .active-btn {
            background-color: #8D1414;
        }

        .content-box {
            display: none;
        }

        .content-box.active {
            display: block;
        }
    </style>


</x-app-worker-layout>
