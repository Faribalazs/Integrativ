<x-admin-app-layout>
    <x-slot name="pageTitle">
        Konferencije
    </x-slot>
    <x-slot name="header">
        Konferencije
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

    <div class="w-full mt-10" style="overflow: auto">
        <div class="flex justify-end mb-10">
            <a href="{{ route('admin.conference.add') }}" class="add-new-btn no-underline">
                <i class="ri-add-line"></i>
                Dodaj novu konferenciju
            </a>
        </div>
        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Naziv konferencije</th>
                <th scope="col">Pozicija</th>
                <th scope="col">Izmeni</th>
                <th scope="col">Izbrisi</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($conferences as $conference)
                <tr>1
                    <td>{{$conference->id}}</td>
                    <td>{{$conference->name}}</td>
                    <td>{{$conference->order}}</td>
                    <td>
                        <a href="{{ route('admin.conference.edit', $conference->id) }}" class="modositas-btn mr-1">
                            <i class="ri-edit-2-line"></i>
                        </a>
                    </td>
                    <td onclick="deleteSwall('{{ $conference->id }}', '{{ $conference->name }}')">
                        <button class="torles-btn ml-1">
                            <i class="ri-delete-bin-line text-xl"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $conferences->links('pagination::bootstrap-5') }}
        </div>
    </div>
    <script>
        function deleteSwall(id, name) {
            Swal.fire({
                title: '{{ __('app.admin.table.confirm-delete') }} '+name+'?',
                icon: 'question',
                html: 
                    '<form method="POST" id="formDelete" action="{{ route('admin.conference.delete') }}">' +
                    '@csrf' +
                    '@method("delete")' +
                    '<input class="mt-3 swal-input" hidden type="text" name="id" value="'+id+'"/>' +
                    '<button type="submit" class="add-new-btn mt-3">{{ __('app.admin.table.delete-text') }}</button>' +
                    '</form>',
                showCancelButton: false,
                showConfirmButton: false,
                showCloseButton: true,
            });
        }
    </script>
</x-admin-app-layout>