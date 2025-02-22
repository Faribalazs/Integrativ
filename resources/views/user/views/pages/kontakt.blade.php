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
            <div class="main-container my-20">
                <h2 class="title text-center">
                    {{ $item->title }}
                </h2>

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
                        <p class="text-center">{!! $item->content !!}</p>
                    </div>
                </form>
            </div>
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
