<x-admin-app-layout>
    <x-slot name="pageTitle">
        Kategorija
    </x-slot>

    <x-slot name="header">
        Kategorija
    </x-slot>

    @php
        $lang = App::currentLocale();
    @endphp

    <div class="main-container-admin w-full mt-10" style="overflow: auto">
        <form method="POST" class="w-full" enctype="multipart/form-data" action="{{ route('admin.category.edit.done', ['id' => request()->id]) }}">
            
            @csrf

            <!-- Category Name -->
            <div class="flex flex-col">
                <label for="category_name" class="sm:text-xl text-base my-3">Ime kategorije ({{ $lang }}) :</label>
                <input class="input-style {{ $errors->has('category_name') ? 'border-error mb-1' : 'mb-3' }}"
                    name="category_name" type="text" id="category_name" value="{{ $category->category_name }}" >
                <p class="{{ $errors->has('category_name') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('category_name') }}</p>
            </div>

             <!-- Order -->
             <div class="mt-3 flex flex-col">
                <label for="order" class="sm:text-xl text-base my-3">Redosled
                    :</label>
                <input class="input-style {{ $errors->has('order') ? 'border-error mb-1' : 'mb-3' }}"
                    name="order" type="number" id="order" value="{{ $category->order }}">
                <p class="{{ $errors->has('order') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('order') }}</p>
            </div>

            <!-- Category URL -->
            <div class="mt-3 flex flex-col">
                <label for="slug" class="sm:text-xl text-base my-3">URL kategorije
                    :</label>
                <input class="input-style-readonly {{ $errors->has('slug') ? 'border-error mb-1' : 'mb-3' }}"
                    name="slug" type="text" id="slug" value="{{ $category->slug }}" readonly>
                <p class="{{ $errors->has('slug') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('slug') }}</p>
            </div>

            <!-- Category Image -->
            <div class="mt-3 flex flex-col">
                <label for="image" class="sm:text-xl text-base mb-2 mt-3">
                    {{ __('app.admin.category.category-image') }}:
                </label>

                @if ($category->image)
                    <img src="{{ asset('storage/' . $category->image) }}" class="mt-2 profile-image profile-img">
                @else
                    <img src="{{ asset('img/placeholder_image.jpg') }}" class="mt-2 profile-image profile-img">
                @endif

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

            <div class="flex w-full justify-center mt-5 mb-20">
                <button class="confirm-btn w-1/2">
                    {{ __('app.profile.change') }}
                </button>
            </div>
        </form>
    </div>
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
    </script>

    <style>
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
