@inject ('helper', '\App\Helpers\Helper')

<x-app-worker-layout>
    <x-slot name="pageTitle">
        Konferencije
    </x-slot>
    <x-slot name="header">
    </x-slot>

    @php
        $slug = request()->segment(2);
        $category = $helper->getCategoryFromSlug($slug);

        $content = $helper->getPageContent($slug);
    @endphp

    <div class="flex w-full relative">
        <img class="page-header-image" src="{{ asset('storage/' . $category->image) }}"
            alt="{{ $category->category_name }}" />
        <span class="page-header-name">
            {{ $category->category_name }}
        </span>
    </div>


    <div class="flex w-full justify-center my-10">
        <img class="w-full 2xl:w-2/3 md:px-20" src="{{ asset('storage/' . $conference->image) }}" />
    </div>

    <div class="my-10 main-container">
        <h2 class="title text-center my10">
            {{ $conference->name }}
        </h2>

        {!! $conference->content !!}
    </div>


</x-app-worker-layout>
