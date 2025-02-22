@inject ('helper', '\App\Helpers\Helper')

@php
    $slug = request()->segment(2);
    $category = $helper->getCategoryFromSlug($slug);

    $content = $helper->getPageContent($slug);

    $lastConference = $helper->getLetestConferences();
@endphp


<x-app-worker-layout>
    <x-slot name="pageTitle">
        {{ $category->category_name }}
    </x-slot>
    <x-slot name="header">
    </x-slot>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session('error') }}',
            });
        </script>
    @endif

    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Validation Errors',
                html: '{!! implode('<br>', $errors->all()) !!}',
            });
        </script>
    @endif

    <div class="flex w-full relative">
        <img class="page-header-image" src="{{ asset('storage/' . $category->image) }}"
            alt="{{ $category->category_name }}" />
        <span class="page-header-name">
            {{ $category->category_name }}
        </span>
    </div>

    @if ($lastConference)
        <div class="mb-20 mt-10 2xl:mt-20 flex xl:flex-row flex-col">
            <div class="xl:w-1/3 w-full flex flex-col 2xl:px-40 sm:px-20 px-16 2xl:py-20 pb-10">
                <h2 class="title my-10 text-center">{{ $lastConference->name }}</h2>
                {!! $lastConference->content !!}
            </div>
            <div class="xl:w-2/3 w-full flex">
                <img class="object-cover w-full sm:px-20 2xl:px-0 px-0"
                    src="{{ asset('storage/' . $lastConference->image) }}" />
            </div>
        </div>
    @endif

    @foreach ($content as $item)
        @if ($item->id == 10)
            <div class="main-container mt-10 mb-20">
                <h2 class="title text-center">
                    {{ $item->title }}
                </h2>
            </div>
            @include('user.views.forms.sign-up-for-conference', ['data' => $item->content])
        @elseif ($item->custom_design == 1)
            {!! $item->content !!}
        @elseif ($item->load_view == 1)
            @php
                $view = preg_replace('/<\/?p>/i', '', $item->content);
            @endphp

            {!! view()->make($view)->render() !!}
        @elseif ($item->image != null)
            <div class="main-container mt-10 mb-20">
                <h2 class="title text-center">
                    {{ $item->title }}
                </h2>
            </div>
            <div class="flex 2xl:flex-row flex-col">
                <div class="2xl:w-1/2  w-full flex 2xl:px-40 sm:px-20 px-16 2xl:py-20 pb-10">
                    {!! $item->content !!}
                </div>
                <div class="2xl:w-1/2 w-full flex">
                    <img class="object-cover w-full sm:px-20 px-16 2xl:p-0"
                        src="{{ asset('storage/' . $item->image) }}" />
                </div>
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
