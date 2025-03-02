<x-admin-app-layout>
    <x-slot name="pageTitle">
        {{ __('app.admin.partners.edit-title') }}
    </x-slot>

    <x-slot name="header">
        {{ __('app.admin.partners.edit-title') }}
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
            action="{{ route('admin.home.edit.done', ['id' => request()->id]) }}">

            @csrf

            <!-- Section title -->
            <div class="flex flex-col">
                <label for="section_title" class="sm:text-xl text-base my-3">{{ __('app.admin.partners.name') }} ({{ $lang }}) :</label>
                <input class="input-style {{ $errors->has('section_title') ? 'border-error mb-1' : 'mb-3' }}"
                    name="section_title" type="text" id="section_title" value="{{ $partner->name }}">
                <p class="{{ $errors->has('section_title') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('section_title') }}</p>
            </div>


            <!-- Partner Slug -->
            <div class="flex flex-col">
                <label for="partner_slug" class="sm:text-xl text-base my-3">{{ __('app.admin.partners.url') }}
                    :</label>
                <input class="input-style {{ $errors->has('partner_slug') ? 'border-error mb-1' : 'mb-3' }}"
                    name="partner_slug" type="text" id="partner_slug" value="{{ $partner->slug }}">
                <p class="{{ $errors->has('partner_slug') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('partner_slug') }}</p>
            </div>


            <!-- Order -->
            <div class="mt-3 flex flex-col">
                <label for="order" class="sm:text-xl text-base my-3">{{ __('app.admin.partners.order') }}
                    :</label>
                <input class="input-style {{ $errors->has('order') ? 'border-error mb-1' : 'mb-3' }}" name="order"
                    type="number" id="order" value="{{ $partner->order }}">
                <p class="{{ $errors->has('order') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('order') }}</p>
            </div>

            <!-- Category Image -->
            <div class="mt-3 flex flex-col">
                <label for="image" class="sm:text-xl text-base mb-2 mt-3">
                    {{ __('app.admin.partners.image') }}:
                </label>

                <!-- Preview container for multiple images -->
                <div id="preview-container" class="flex flex-wrap gap-2">
                    @php
                        $images = json_decode($partner->section_image, true) ?? [];
                    @endphp

                    @if (!empty($images))
                        @foreach ($images as $image)
                            <img src="{{ asset('storage/' . $image) }}" class="mt-2 w-40 h-40 object-cover rounded-md">
                        @endforeach
                    @else
                        <img src="{{ asset('img/placeholder_image.jpg') }}"
                            class="mt-2 w-40 h-40 object-cover rounded-md">
                    @endif
                </div>

                <div class="flex flex-col sm:flex-row mt-4">
                    <label for="file-upload" class="image-upload-btn px-4 py-3 cursor-pointer text-center">
                        {{ __('app.profile.choose-image') }}
                    </label>
                    <input id="file-upload" name="images[]" type="file" multiple style="display:none;">
                    <input id="uploadFile" class="text-center sm:text-left sm:pl-3 pl-0 sm:mt-0 mt-2 max-w-full"
                        placeholder="{{ __('app.profile.no-img-selected') }}" disabled="disabled" />
                </div>

                <p class="{{ $errors->has('image') ? 'flex text-red mt-2 pl-1' : 'hidden' }}">
                    {{ $errors->first('image') }}
                </p>
            </div>


            <div class="flex w-full justify-center mt-5 mb-20">
                <button class="confirm-btn w-1/2">
                    {{ __('app.admin.save') }}
                </button>
            </div>

        </form>
    </div>
    <script>
        document.getElementById("file-upload").onchange = function() {
            const input = document.getElementById("file-upload");
            const previewContainer = document.getElementById("preview-container");
            previewContainer.innerHTML = ""; // Clear previous previews

            if (input.files.length > 0) {
                document.getElementById("uploadFile").value = Array.from(input.files)
                    .map(file => file.name)
                    .join(", ");

                for (const file of input.files) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const img = document.createElement("img");
                        img.src = e.target.result;
                        img.classList.add("w-40", "h-40", "object-cover", "rounded-md", "mt-2");
                        previewContainer.appendChild(img);
                    };
                    reader.readAsDataURL(file);
                }
            }
        };

        tinymce.init({
            selector: 'textarea#section_content',
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

    <style>
        .tox-promotion,
        .tox-statusbar__branding {
            display: none !important;
        }

        [type="radio"]:checked,
        [type="radio"]:not(:checked) {
            display: none;
        }

        [type="radio"]:checked+label {
            position: relative;
            padding-left: 40px;
            cursor: pointer;
            line-height: 28px;
            display: inline-block;
            color: #000;
        }

        [type="radio"]:not(:checked)+label {
            position: relative;
            padding-left: 40px;
            cursor: pointer;
            line-height: 28px;
            display: inline-block;
            color: #666;
        }

        [type="radio"]:checked+label:before,
        [type="radio"]:not(:checked)+label:before {
            content: "";
            position: absolute;
            left: -1px;
            top: -1px;
            width: 30px;
            height: 30px;
            border: 1px solid #ddd;
            border-radius: 100%;
            background: #fff;
        }

        [type="radio"]:checked+label:after,
        [type="radio"]:not(:checked)+label:after {
            content: "";
            width: 20px;
            height: 20px;
            background: #0d2c5a;
            position: absolute;
            top: 4px;
            left: 4px;
            border-radius: 100%;
            -webkit-transition: all 0.2s ease;
            transition: all 0.2s ease;
        }

        [type="radio"]:not(:checked)+label:after {
            opacity: 0;
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        [type="radio"]:checked+label:after {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    </style>
</x-admin-app-layout>
