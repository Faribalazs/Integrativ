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
    </x-slot>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: "{{ __('app.admin.success') }}",
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

    @foreach ($content as $item)
        @if ($item->custom_design == 1)
            {!! $item->content !!}
        @elseif ($item->load_view == 1)
            @php
                if ($item->content) {
                    $parts = explode('</p>', $item->content);

                    $view = preg_replace('/<\/?p>/i', '', $parts[0]);
                    $note = $parts[1] . '</p>';
                }
            @endphp

            <div class="main-container my-20">
                <h2 class="title my-10 text-center">{{ $item->title }}</h2>
                {!! view()->make($view)->with('note', $note)->render() !!}
            </div>
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

    <style>
        ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        li {
            padding-bottom: 5px;
            font-size: 1.1rem;
            font-weight: 500;
        }
    </style>

</x-app-worker-layout>
