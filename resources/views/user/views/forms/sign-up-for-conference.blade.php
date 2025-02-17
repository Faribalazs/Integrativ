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
                    <div class="flex sm:w-1/2 w-full">
                        <input required class="input-style mb-5 w-full" type="text" name="name"
                            placeholder="Ime i prezime" />
                    </div>
                    <div class="flex sm:w-1/2 w-full">
                        <input required class="input-style mb-5 w-full" type="text" name="address"
                            placeholder="Adresa" />
                    </div>
                </div>
                <div class="flex w-full">
                    <input required class="input-style mb-5 w-full" type="text" name="occupation"
                        placeholder="Zanimanje" />
                </div>
                <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                    <div class="flex sm:w-1/2 w-full">
                        <input required class="input-style mb-5 w-full" type="text" name="email"
                            placeholder="Email" />
                    </div>
                    <div class="flex sm:w-1/2 w-full">
                        <input required class="input-style mb-5 w-full" type="text" name="phone"
                            placeholder="Telefon" />
                    </div>
                </div>
            </div>
        </div>

        <div class="flex w-full my-10">
            {!! $p2 !!}
        </div>

        <div class="flex w-full justify-center">

            <div class="2xl:w-1/2 lg:w-2/3 w-full flex flex-col">
                <div class="flex w-full">
                    <input required class="input-style mb-5 w-full" type="text" name="institution_or_company_name"
                        placeholder="Pun i tačan naziv ustanove ili preduzeća" />
                </div>
                <div class="flex w-full">
                    <input required class="input-style mb-5 w-full" type="text" name="pib"
                        placeholder="PIB" />
                </div>
                <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                    <div class="flex sm:w-1/2 w-full">
                        <input required class="input-style mb-5 w-full" type="text" name="city"
                            placeholder="Grad" />
                    </div>
                    <div class="flex sm:w-1/2 w-full">
                        <input required class="input-style mb-5 w-full" type="text" name="postcode"
                            placeholder="Poštanski broj" />
                    </div>
                </div>
                <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                    <div class="flex sm:w-1/2 w-full">
                        <input required class="input-style mb-5 w-full" type="text" name="contact_phone"
                            placeholder="Kontakt telefon" />
                    </div>
                    <div class="flex sm:w-1/2 w-full">
                        <input required class="input-style mb-5 w-full" type="text" name="institution_email"
                            placeholder="E-mail adresa ustanove" />
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
