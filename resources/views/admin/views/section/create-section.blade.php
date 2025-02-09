<x-admin-app-layout>
    <x-slot name="pageTitle">
        {{ __('app.admin.sections') }}
    </x-slot>
    <x-slot name="header">
        {{ __('app.admin.sections') }}
    </x-slot>
    <div class="w-full mt-10" style="overflow: auto">
        <form method="POST" class="w-full" action="{{ route('admin.section.add.done') }}">
            @csrf

            <!-- Section name -->
            <div class="mt-5 flex flex-col">
                <label for="section_name" class="sm:text-xl text-base my-3">{{ __('app.admin.sections-name') }}
                    :</label>
                <input class="input-style {{ $errors->has('section_name') ? 'border-error mb-1' : 'mb-3' }}"
                    name="section_name" type="text" required>
                <p class="{{ $errors->has('section_name') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('section_name') }}</p>
            </div>

            <!-- Section title -->
            <div class="mt-5 flex flex-col">
                <label for="title" class="sm:text-xl text-base my-3">{{ __('app.admin.sections-title') }}
                    :</label>
                <textarea id="title" name="title">
                </textarea>
            </div>

            <!-- Section content -->
            <div class="mt-5 flex flex-col">
                <label for="content" class="sm:text-xl text-base my-3">{{ __('app.admin.sections-content') }}
                    :</label>
                <textarea id="content" name="content">
                </textarea>
            </div>

            <!-- Section Image -->
            <div class="mt-3 flex flex-col">
                <label for="image" class="sm:text-xl text-base mb-2 mt-3">
                    {{ __('app.admin.category.category-image') }}:
                </label>

                <img src="{{ asset('img/placeholder_image.jpg') }}" class="mt-2 profile-image profile-img">

                <div class="flex flex-col sm:flex-row mt-4">
                    <label for="file-upload" class="image-upload-btn px-4 py-3 cursor-pointer text-center">
                        {{ __('app.profile.choose-image') }}
                    </label>
                    <input id="file-upload" name="image" type="file" style="display:none;">
                    <input id="uploadFile" class="text-center sm:text-left sm:pl-3 pl-0 sm:mt-0 mt-2 max-w-full"
                        placeholder="{{ __('app.profile.no-img-selected') }}" disabled="disabled" />
                </div>
                <p class="{{ $errors->has('image') ? 'flex text-red mt-2 pl-1' : 'hidden' }}">
                    {{ $errors->first('image') }}</p>
            </div>

            <!-- Section order -->
            <div class="flex flex-col mt-5">
                <label for="order" class="sm:text-xl text-base my-3">{{ __('app.admin.section-order') }}
                    :</label>
                <input class="input-style {{ $errors->has('order') ? 'border-error mb-1' : 'mb-3' }}" name="order"
                    type="text" required>
                <p class="{{ $errors->has('order') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('order') }}</p>
            </div>

            <!-- Section button text -->
            <div class="mt-5 flex flex-col">
                <label for="btn_text" class="sm:text-xl text-base my-3">{{ __('app.admin.sections-btn-text') }}
                    :</label>
                <input class="input-style {{ $errors->has('btn_text') ? 'border-error mb-1' : 'mb-3' }}"
                    name="btn_text" type="text">
                <p class="{{ $errors->has('btn_text') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('btn_text') }}</p>
            </div>

            <!-- Section button link -->
            <div class="mt-5 flex flex-col">
                <label for="btn_link" class="sm:text-xl text-base my-3">{{ __('app.admin.sections-btn-link') }}
                    :</label>
                <input class="input-style {{ $errors->has('btn_link') ? 'border-error mb-1' : 'mb-3' }}"
                    name="btn_link" type="text">
                <p class="{{ $errors->has('btn_link') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('btn_link') }}</p>
            </div>

            <!-- Section submit button -->
            <div class="flex w-full justify-center mt-5 mb-20">
                <button class="confirm-btn w-1/2">
                    {{ __('app.profile.change') }}
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
        document.getElementById("file-upload").onchange = function() {
            document.getElementById("uploadFile").value = this.value.replace('C:\\fakepath\\', ' ');
        };

        const input = document.getElementById("file-upload");
        const preview = document.querySelector(".preview");
        const image = document.querySelector(".profile-img");
        input.addEventListener("change", updateImageDisplay);

        function updateImageDisplay() {
            const curFiles = input.files;
            image.src = URL.createObjectURL(curFiles[0]);
            image.style.opacity = 1;
        }

        tinymce.init({
            selector: 'textarea#title',
            height: 500,
            plugins: 'advlist anchor autolink autosave charmap code codesample directionality emoticons fullscreen help hr image insertdatetime link lists media nonbreaking pagebreak preview print quickbars save searchreplace table template visualblocks visualchars wordcount',
            toolbar: 'undo redo | fontselect fontsizeselect formatselect | bold italic underline strikethrough forecolor backcolor removeformat | alignleft aligncenter alignright alignjustify | outdent indent | bullist numlist | link image media table codesample | hr pagebreak blockquote | subscript superscript charmap emoticons | fullscreen preview print | visualblocks visualchars | insertdatetime searchreplace | help',
            menubar: 'file edit view insert format tools table',
            branding: false,
            quickbars_insert_toolbar: 'quickimage quicktable',
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote',
        });

        tinymce.init({
            selector: 'textarea#content',
            height: 500,
            plugins: 'advlist anchor autolink autosave charmap code codesample directionality emoticons fullscreen help hr image insertdatetime link lists media nonbreaking pagebreak preview print quickbars save searchreplace table template visualblocks visualchars wordcount',
            toolbar: 'undo redo | fontselect fontsizeselect formatselect | bold italic underline strikethrough forecolor backcolor removeformat | alignleft aligncenter alignright alignjustify | outdent indent | bullist numlist | link image media table codesample | hr pagebreak blockquote | subscript superscript charmap emoticons | fullscreen preview print | visualblocks visualchars | insertdatetime searchreplace | help',
            menubar: 'file edit view insert format tools table',
            branding: false,
            quickbars_insert_toolbar: 'quickimage quicktable',
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote',
        });
    </script>
</x-admin-app-layout>
