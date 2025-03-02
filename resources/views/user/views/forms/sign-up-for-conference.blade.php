@php
    if ($data) {
        $parts = explode('</p>', $data);

        $p1 = $parts[0] . '</p>';
        $p2 = $parts[1] . '</p>';
        $p3 = $parts[2] . '</p>';
    } else {
        $p1 = '';
        $p2 = '';
        $p3 = '';
    }
@endphp

<div class="main-container">
    <form method="POST" class="flex justify-center flex-col" enctype="multipart/form-data"
        action="{{ route('save.conference.sign-up') }}">

        @csrf

        {!! $p1 !!}

        <div class="flex w-full mt-10 justify-center">
            <div class="2xl:w-1/2 lg:w-2/3 w-full flex flex-col">
                <h3 class="subtitle uppercase flex flex-grow">
                    Osnovi podaci
                </h3>
                <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                    <div class="flex sm:w-1/2 w-full flex-col">
                        <label for="name" class="mb-1 pl-1">Ime i prezime</label>
                        <input required class="input-style mb-5 w-full" type="text" id="name" name="name" />
                    </div>
                    <div class="flex sm:w-1/2 w-full flex-col">
                        <label for="address" class="mb-1 pl-1">Adresa</label>
                        <input required class="input-style mb-5 w-full" type="text" id="address" name="address" />
                    </div>
                </div>
                <div class="flex w-full flex-col">
                    <label for="occupation" class="mb-1 pl-1">Zanimanje</label>
                    <input required class="input-style mb-5 w-full" type="text" id="occupation" name="occupation" />
                </div>
                <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                    <div class="flex sm:w-1/2 w-full flex-col">
                        <label for="email" class="mb-1 pl-1">Email</label>
                        <input required class="input-style mb-5 w-full" type="text" id="email" name="email" />
                    </div>
                    <div class="flex sm:w-1/2 w-full flex-col">
                        <label for="phone" class="mb-1 pl-1">Telefon</label>
                        <input required class="input-style mb-5 w-full" type="text" id="phone" name="phone" />
                    </div>
                </div>
            </div>
        </div>

        <div class="flex w-full my-10">
            {!! $p2 !!}
        </div>

        <div class="flex w-full justify-center">
            <div class="2xl:w-1/2 lg:w-2/3 w-full flex flex-col">
                <div class="flex w-full flex-col">
                    <label for="institution_or_company_name" class="mb-1 pl-1">Pun i tačan naziv ustanove ili
                        preduzeća</label>
                    <input class="input-style mb-5 w-full" type="text" id="institution_or_company_name"
                        name="institution_or_company_name" />
                </div>
                <div class="flex w-full flex-col">
                    <label for="pib" class="mb-1 pl-1">PIB</label>
                    <input class="input-style mb-5 w-full" type="text" id="pib" name="pib" />
                </div>
                <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                    <div class="flex sm:w-1/2 w-full flex-col">
                        <label for="city" class="mb-1 pl-1">Grad</label>
                        <input class="input-style mb-5 w-full" type="text" id="city" name="city" />
                    </div>
                    <div class="flex sm:w-1/2 w-full flex-col">
                        <label for="postcode" class="mb-1 pl-1">Poštanski broj</label>
                        <input class="input-style mb-5 w-full" type="text" id="postcode" name="postcode" />
                    </div>
                </div>
                <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                    <div class="flex sm:w-1/2 w-full flex-col">
                        <label for="contact_phone" class="mb-1 pl-1">Kontakt telefon</label>
                        <input class="input-style mb-5 w-full" type="text" id="contact_phone" name="contact_phone" />
                    </div>
                    <div class="flex sm:w-1/2 w-full flex-col">
                        <label for="institution_email" class="mb-1 pl-1">E-mail adresa ustanove</label>
                        <input class="input-style mb-5 w-full" type="text" id="institution_email"
                            name="institution_email" />
                    </div>
                </div>
            </div>
        </div>

        <div class="flex w-full my-10">
            {!! $p3 !!}
        </div>

        <div class="flex w-full justify-center mt-10">
            <button class="main-btn w-max">
                Prijavi se
            </button>
        </div>
    </form>
</div>
