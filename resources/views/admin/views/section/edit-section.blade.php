<x-admin-app-layout>
    <x-slot name="pageTitle">
        {{ __('app.admin.sections.edit-title') }}
    </x-slot>
    <x-slot name="header">
        {{ __('app.admin.sections.edit-title') }}
    </x-slot>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: "{{ __('app.admin.sucess') }}",
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
        <form method="POST" class="w-full" action="{{ route('admin.section.edit.done', ['id' => request()->id]) }}">
            @csrf

            <div class="mt-5">
                <label for="section_name" class="sm:text-xl text-base my-3">{{ __('app.admin.sections-name') }}
                    :</label>
                <input class="input-style {{ $errors->has('section_name') ? 'border-error mb-1' : 'mb-3' }}"
                    name="section_name" type="text" value="{{ $section[0]->section_name }}" required>
                <p class="{{ $errors->has('section_name') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('section_name') }}</p>
            </div>

            <div class="mt-5">
                <label for="title" class="sm:text-xl text-base my-3">{{ __('app.admin.sections-title') }}
                    :</label>
                <textarea id="title" name="title">
                    {{ $section[0]->title }}
                </textarea>
            </div>

            <div class="mt-5">
                <label for="content" class="sm:text-xl text-base my-3">{{ __('app.admin.sections-content') }}
                    :</label>
                <textarea id="content" name="content">
                    {{ $section[0]->content }}
                </textarea>
            </div>

            <div class="flex flex-col mt-5">
                <label for="section_number" class="sm:text-xl text-base my-3">{{ __('app.admin.section-number') }}
                    :</label>
                <input class="input-style {{ $errors->has('section_number') ? 'border-error mb-1' : 'mb-3' }}"
                    name="section_number" type="text" value="{{ $section[0]->section_number }}" required>
                <p class="{{ $errors->has('section_number') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('section_number') }}</p>
            </div>

            <div class="flex flex-col mt-5">
                <label for="order" class="sm:text-xl text-base my-3">{{ __('app.admin.section-order') }}
                    :</label>
                <input class="input-style {{ $errors->has('order') ? 'border-error mb-1' : 'mb-3' }}" name="order"
                    type="text" value="{{ $section[0]->order }}" required>
                <p class="{{ $errors->has('order') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('order') }}</p>
            </div>

            <div class="mt-5">
                <label for="btn_text" class="sm:text-xl text-base my-3">{{ __('app.admin.sections-btn-text') }}
                    :</label>
                <input class="input-style {{ $errors->has('btn_text') ? 'border-error mb-1' : 'mb-3' }}"
                    name="btn_text" type="text" value="{{ $section[0]->btn_text }}">
                <p class="{{ $errors->has('btn_text') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('btn_text') }}</p>
            </div>

            <div class="mt-5">
                <label for="btn_link" class="sm:text-xl text-base my-3">{{ __('app.admin.sections-btn-link') }}
                    :</label>
                <input class="input-style {{ $errors->has('btn_link') ? 'border-error mb-1' : 'mb-3' }}"
                    name="btn_link" type="text" value="{{ $section[0]->btn_link }}">
                <p class="{{ $errors->has('btn_link') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('btn_link') }}</p>
            </div>

            <div class="flex w-full justify-center mt-5 mb-20">
                <button class="confirm-btn w-1/2">
                    {{ __('app.admin.save') }}
                </button>
            </div>
        </form>
    </div>
    <style>
        .tox-promotion,
        .tox-statusbar__branding {
            display: none !important;
        }
    </style>
    <script>
        tinymce.init({
            selector: 'textarea#content',
            height: 500,
            width: "100%",
            plugins: 'wordcount save fullscreen code table lists link hr',
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor alignleft aligncenter alignright alignjustify | link hr | numlist bullist outdent indent  | removeformat | code',
            image_advtab: false,
            valid_elements: '*[*]',
            extended_valid_elements: 'span[*],div[*],i[*],svg[*],path[*],button[*]',
            forced_root_block: false,
        });

        tinymce.init({
            selector: 'textarea#title',
            height: 500,
            width: "100%",
            plugins: 'wordcount save fullscreen code table lists link hr',
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor alignleft aligncenter alignright alignjustify | link hr | numlist bullist outdent indent  | removeformat | code',
            image_advtab: false,
            valid_elements: '*[*]',
            extended_valid_elements: 'span[*],div[*],i[*],svg[*],path[*],button[*]',
            forced_root_block: false,
        });
    </script>
</x-admin-app-layout>
