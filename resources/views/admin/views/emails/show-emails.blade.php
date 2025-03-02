<x-admin-app-layout>
    <x-slot name="pageTitle">
        {{ __('app.admin.emails.title') }}
    </x-slot>
    <x-slot name="header">
        {{ __('app.admin.emails.title') }}
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
                    <th scope="col">{{ __('app.admin.table.id') }}</th>
                    <th scope="col">{{ __('app.admin.table.email') }}</th>
                    <th scope="col">{{ __('app.admin.table.edit') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($emails as $email)
                    <tr>
                        <td>{{ $email->id }}</td>
                        <td>{{ $email->email }}</td>
                        <td>
                            <a href="{{ route('admin.email.edit', $email->id) }}" class="modositas-btn mr-1">
                                <i class="ri-edit-2-line"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin-app-layout>
