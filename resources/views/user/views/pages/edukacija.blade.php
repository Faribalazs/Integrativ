@inject ('helper', '\App\Helpers\Helper')

<x-app-worker-layout>
    <x-slot name="pageTitle">
        Edukacija
    </x-slot>
    <x-slot name="header">
    </x-slot>

    @php
        $slug = request()->segment(2);
        $category = $helper->getCategoryFromSlug($slug);

        $content = $helper->getPageContent($slug);
    @endphp

    <div class="flex w-full relative">
        <img class="page-header-image" src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->category_name }}"/>
        <span class="page-header-name">
            {{ $category->category_name }}
        </span>
    </div>

    @foreach($content as $item)
        @if ($item->custom_design == 1)
            <div class="main-container my-10">
                {!! $item->content !!}
            </div>
        @else
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

</x-app-worker-layout>
