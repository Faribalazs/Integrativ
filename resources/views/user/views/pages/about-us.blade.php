@inject ('helper', '\App\Helpers\Helper')

@php
    $slug = request()->segment(2);
    $category = $helper->getCategoryFromSlug($slug);

    $content = $helper->getPageContent($slug);
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

    @foreach ($content as $item)
        @if ($item->custom_design == 1)
            {!! $item->content !!}
        @elseif ($item->load_view == 1)
            @php
                $view = preg_replace('/<\/?p>/i', '', $item->content);
            @endphp

            <div class="main-container my-20">
                <h2 class="title my-10 text-center">{{ $item->title }}</h2>
                {!! view()->make($view)->render() !!}
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
