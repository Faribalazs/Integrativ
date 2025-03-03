<x-admin-app-layout>
    <x-slot name="pageTitle">
        {{ __('app.admin.education.title') }}
    </x-slot>
    <x-slot name="header">
        {{ __('app.admin.education.title') }}
    </x-slot>
    @php
        $locale = app()->getLocale();
    @endphp

    <div class="w-full mt-10" style="overflow: auto">
        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">{{ __('app.admin.table.id') }}</th>
                <th scope="col">{{ __('app.admin.table.person-name') }}</th>
                <th scope="col">{{ __('app.admin.table.email') }}</th>
                <th scope="col">{{ __('app.admin.table.phone') }}</th>
                <th scope="col">{{ __('app.admin.table.show') }}</th>
                <th scope="col">{{ __('app.admin.table.delete') }}</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($allAplly as $apply)
                    <tr>
                        <td>{{$apply->id}}</td>
                        <td>{{$apply->name}}</td>
                        <td>{{$apply->email}}</td>
                        <td>{{$apply->phone}}</td>
                        <td>
                            <a href="{{ route('admin.education.show', $apply->id) }}" class="modositas-btn mr-1 no-underline text-black">
                                <i class="ri-eye-line text-xl"></i>
                            </a>
                        </td>
                        <td onclick="deleteSwall('{{ $apply->id }}', '{{ $apply->name }}')">
                            <button class="torles-btn ml-1">
                                <i class="ri-delete-bin-line text-xl"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $allAplly->links('pagination::bootstrap-5') }}
        </div>
    </div>

    <script>
        function deleteSwall(id, name) {
            Swal.fire({
                title: '{{ __('app.admin.table.confirm-delete') }} '+name+'?',
                icon: 'question',
                html: 
                    '<form method="POST" id="formDelete" action="{{ route('admin.education.delete') }}">' +
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