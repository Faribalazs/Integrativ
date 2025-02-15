<x-admin-app-layout>
    <x-slot name="pageTitle">
        Detaji kontakta
    </x-slot>

    <x-slot name="header">
        Detaji kontakta
    </x-slot>

    @php
        $lang = App::currentLocale();
    @endphp

    <div class="flex justify-end my-10">
        <a href="{{ route('admin.contact.create') }}" class="add-new-btn no-underline">
            Nazad
        </a>
    </div>

    <div class="main-container-admin w-full mt-10" style="overflow: auto">

        <!-- Name -->
        <div>
            <p class="mb-2 font-semibold text-xl">
                Ime i Prezime :
            </p>
            <p class="text-lg">
                {{ $contact->name }}
            </p>
        </div>

        <!-- Email -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">
                Email :
            </p>
            <a href="mailto:{{ $contact->email }}" class="text-lg">
                {{ $contact->email }}
            </a>
        </div>

        <!-- Phone -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">
                Telefon :
            </p>
            <p class="text-lg">
                {{ $contact->phone }}
            </p>
        </div>

        <!-- Message -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">
                Poruka :
            </p>
            <p class="text-lg">
                {{ $contact->message }}
            </p>
        </div>

    </div>
</x-admin-app-layout>
