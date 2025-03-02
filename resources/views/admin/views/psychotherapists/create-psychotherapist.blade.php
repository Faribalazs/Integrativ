<x-admin-app-layout>
    <x-slot name="pageTitle">
        Nova psihoterapeuta
    </x-slot>

    <x-slot name="header">
        Nova psihoterapeuta
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

    <div class="main-container-admin w-full mt-10" style="overflow: auto">
        <form method="POST" class="w-full" enctype="multipart/form-data" action="{{ route('admin.psychotherapist.add.done') }}">

            @csrf

            <!-- Name -->
            <div class="flex flex-col">
                <label for="name" class="sm:text-xl text-base my-3">Ime i prezime ({{ $lang }}) :</label>
                <input class="input-style {{ $errors->has('name') ? 'border-error mb-1' : 'mb-3' }}"
                    name="name" type="text" id="name">
                <p class="{{ $errors->has('name') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('name') }}</p>
            </div>

            <!-- Position -->
            <div class="flex flex-col">
                <label for="position" class="sm:text-xl text-base my-3">Pozicija ({{ $lang }}) :</label>
                <input class="input-style {{ $errors->has('position') ? 'border-error mb-1' : 'mb-3' }}"
                    name="position" type="text" id="position">
                <p class="{{ $errors->has('position') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('position') }}</p>
            </div>

            <!-- Location -->
            <div class="flex flex-col">
                <label for="location" class="sm:text-xl text-base my-3">Lokacija ({{ $lang }}) :</label>
                <input class="input-style {{ $errors->has('location') ? 'border-error mb-1' : 'mb-3' }}"
                    name="location" type="text" id="location">
                <p class="{{ $errors->has('location') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('location') }}</p>
            </div>

            <!-- Email -->
            <div class="flex flex-col">
                <label for="email" class="sm:text-xl text-base my-3">Email :</label>
                <input class="input-style {{ $errors->has('email') ? 'border-error mb-1' : 'mb-3' }}"
                    name="email" type="text" id="email">
                <p class="{{ $errors->has('email') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('email') }}</p>
            </div>

            <!-- Phone -->
            <div class="flex flex-col">
                <label for="phone" class="sm:text-xl text-base my-3">Telefon :</label>
                <input class="input-style {{ $errors->has('phone') ? 'border-error mb-1' : 'mb-3' }}"
                    name="phone" type="text" id="phone">
                <p class="{{ $errors->has('phone') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('phone') }}</p>
            </div>

            <!-- Facebook -->
            <div class="flex flex-col">
                <label for="facebook" class="sm:text-xl text-base my-3">Facebook :</label>
                <input class="input-style {{ $errors->has('facebook') ? 'border-error mb-1' : 'mb-3' }}"
                    name="facebook" type="text" id="facebook">
                <p class="{{ $errors->has('facebook') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('facebook') }}</p>
            </div>

            <!-- Instagram -->
            <div class="flex flex-col">
                <label for="instagram" class="sm:text-xl text-base my-3">Instagram :</label>
                <input class="input-style {{ $errors->has('instagram') ? 'border-error mb-1' : 'mb-3' }}"
                    name="instagram" type="text" id="instagram">
                <p class="{{ $errors->has('instagram') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('instagram') }}</p>
            </div>

            <!-- Twitter -->
            <div class="flex flex-col">
                <label for="twitter" class="sm:text-xl text-base my-3">Twitter :</label>
                <input class="input-style {{ $errors->has('twitter') ? 'border-error mb-1' : 'mb-3' }}"
                    name="twitter" type="text" id="twitter">
                <p class="{{ $errors->has('twitter') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('twitter') }}</p>
            </div>

            <!-- LinkedIn -->
            <div class="flex flex-col">
                <label for="linkedin" class="sm:text-xl text-base my-3">Linked In :</label>
                <input class="input-style {{ $errors->has('linkedin') ? 'border-error mb-1' : 'mb-3' }}"
                    name="linkedin" type="text" id="linkedin">
                <p class="{{ $errors->has('linkedin') ? 'flex text-red mt-1 pl-1' : 'hidden' }}">
                    {{ $errors->first('linkedin') }}</p>
            </div>

            <!-- Lead -->
            <div class="flex flex-col">
                <label for="lead" class="sm:text-xl text-base my-3">Voditelj :</label>
                <select name="lead" id="lead" class="input-style">
                    <option selected></option>
                    <option value="1">Da</option>
                    <option value="0" >Ne</option>
                </select>
            </div>

            <!-- Image -->
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

            <div class="flex w-full justify-center mt-5 mb-20">
                <button class="confirm-btn w-1/2">
                    {{ __('app.admin.save') }}
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
