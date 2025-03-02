<x-admin-app-layout>
    <x-slot name="pageTitle">
        Page content
    </x-slot>
    <x-slot name="header">
        Page content
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
        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Naziv stranice</th>
                <th scope="col">Izmeni</th>
                <th scope="col">Izbrisi</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($page_content as $content)
                    <tr>
                        <td>{{ $content->id }}</td>
                        <td>{{ $content->title }}</td>
                        <td>
                            <a href="{{ route('admin.page.edit', $content->id) }}" class="modositas-btn mr-1 no-underline text-black">
                                <i class="ri-edit-2-line"></i>
                            </a>
                        </td>
                        <td onclick="deleteSwall('{{ $content->id }}', '{{ $content->name }}')">
                            <button class="torles-btn ml-1">
                                <i class="ri-delete-bin-line text-xl"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function deleteSwall(id, name) {
            Swal.fire({
                title: '{{ __('app.admin.table.confirm-delete') }} '+name+'?',
                icon: 'question',
                html: 
                    '<form method="POST" id="formDelete" action="{{ route('admin.contact.delete') }}">' +
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