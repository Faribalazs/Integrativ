<x-admin-app-layout>
    <x-slot name="pageTitle">
        {{ __('app.admin.pages.title') }}
    </x-slot>
    <x-slot name="header">
        {{ __('app.admin.pages.title') }}
    </x-slot>
    @php
        $locale = app()->getLocale();
    @endphp

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

    <div class="w-full mt-10" style="overflow: auto">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">{{ __('app.admin.table.id') }}</th>
                    <th scope="col">{{ __('app.admin.table.name') }}</th>
                    <th scope="col">{{ __('app.admin.table.show') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $page)
                    <tr>
                        <td>{{ $page->id }}</td>
                        <td>{{ $page->name }}</td>
                        <td>
                            <a href="{{ route('admin.page.show', $page->id) }}"
                                class="modositas-btn mr-1 no-underline text-black">
                                <i class="ri-eye-line text-xl"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $pages->links('pagination::bootstrap-5') }}
        </div>
    </div>
</x-admin-app-layout>
