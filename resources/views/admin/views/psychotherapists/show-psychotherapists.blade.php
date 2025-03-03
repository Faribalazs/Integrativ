<x-admin-app-layout>
    <x-slot name="pageTitle">
        {{ __('app.admin.psyhoterapist.title') }}
    </x-slot>
    <x-slot name="header">
        {{ __('app.admin.psyhoterapist.title') }}
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
            <a href="{{ route('admin.psychotherapist.add') }}" class="add-new-btn no-underline">
                <i class="ri-add-line"></i>
                {{ __('app.admin.psyhoterapist.add-new-psyhoterapist') }}
            </a>
        </div>
        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">{{ __('app.admin.table.id') }}</th>
                <th scope="col">{{ __('app.admin.table.person-name') }}</th>
                <th scope="col">{{ __('app.admin.table.order') }}</th>
                <th scope="col">{{ __('app.admin.table.edit') }}</th>
                <th scope="col">{{ __('app.admin.table.delete') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($psychotherapists as $psychotherapist)
                <tr>
                    <td>{{$psychotherapist->id}}</td>
                    <td>{{$psychotherapist->name}}</td>
                    <td>{{$psychotherapist->position}}</td>
                    <td>
                        <a href="{{ route('admin.psychotherapist.edit', $psychotherapist->id) }}" class="modositas-btn mr-1">
                            <i class="ri-edit-2-line"></i>
                        </a>
                    </td>
                    <td onclick="deleteSwall('{{ $psychotherapist->id }}', '{{ $psychotherapist->name }}')">
                        <button class="torles-btn ml-1">
                            <i class="ri-delete-bin-line text-xl"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $psychotherapists->links('pagination::bootstrap-5') }}
        </div>
    </div>
    <script>
        function deleteSwall(id, name) {
            Swal.fire({
                title: '{{ __('app.admin.table.confirm-delete') }} '+name+'?',
                icon: 'question',
                html: 
                    '<form method="POST" id="formDelete" action="{{ route('admin.psychotherapist.delete') }}">' +
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