<x-admin-app-layout>
    <x-slot name="pageTitle">
        Home page
    </x-slot>
    <x-slot name="header">
        Home page
    </x-slot>
    @php
        $locale = app()->getLocale();
    @endphp
    
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

    <div class="w-full mt-10" style="overflow: auto">
        {{-- <div class="flex justify-end mb-10">
            <a href="{{ route('admin.slider.add') }}" class="add-new-btn no-underline">
                <i class="ri-add-line"></i>
                Dodaj novu sekciju za pocetnu stranu
            </a>
        </div> --}}
        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Naziv sekcije</th>
                <th scope="col">Pozicija</th>
                <th scope="col">Izmeni</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($home_content as $content)
                <tr>
                    <td>{{$content->id}}</td>
                    <td>{{$content->section_name}}</td>
                    <td>{{$content->order}}</td>
                    <td>
                        <a href="{{ route('admin.home.edit', $content->id) }}" class="modositas-btn mr-1">
                            <i class="ri-edit-2-line"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $home_content->links('pagination::bootstrap-5') }}
        </div>
    </div>
</x-admin-app-layout>