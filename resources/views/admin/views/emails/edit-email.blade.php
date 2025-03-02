<x-admin-app-layout>
    <x-slot name="pageTitle">
        {{ __('app.admin.emails.edit-title') }}
    </x-slot>

    <x-slot name="header">
        {{ __('app.admin.emails.edit-title') }}
    </x-slot>

    @php
        $lang = App::currentLocale();
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

    <div class="main-container-admin w-full mt-10" style="overflow: auto">
        <form method="POST" class="w-full" enctype="multipart/form-data"
            action="{{ route('admin.email.edit.done', ['id' => request()->id]) }}">

            @csrf

            <!-- Email -->
            <div class="flex flex-col">
                <label for="email" class="sm:text-xl text-base my-3">{{ __('app.admin.emails.email') }}</label>
                <input class="input-style {{ $errors->has('email') ? 'border-error mb-1' : 'mb-3' }}" name="email"
                    type="text" id="email" value="{{ $email->email }}">
                <p class="{{ $errors->has('email') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('email') }}</p>
            </div>

            <!-- Lead -->
            <div class="flex flex-col">
                <label for="locale" class="sm:text-xl text-base my-3">{{ __('app.admin.emails.locale') }}</label>
                <select name="locale" id="locale" class="input-style">
                    <option selected></option>
                    <option value="hu" {{ $email->locale == 'hu' ? 'selected' : '' }}>{{ __('app.admin.emails.locale-hu') }}</option>
                    <option value="sr" {{ $email->locale == 'sr' ? 'selected' : '' }}>{{ __('app.admin.emails.locale-sr') }}</option>
                    <option value="en" {{ $email->locale == 'en' ? 'selected' : '' }}>{{ __('app.admin.emails.locale-en') }}</option>
                </select>
            </div>

            <div class="flex w-full justify-center mt-5 mb-20">
                <button class="confirm-btn w-1/2">
                    {{ __('app.admin.save') }}
                </button>
            </div>

        </form>
    </div>
</x-admin-app-layout>
