<x-admin-app-layout>
    <x-slot name="pageTitle">
        Detaji prijave
    </x-slot>

    <x-slot name="header">
        Detaji prijave
    </x-slot>

    @php
        $lang = App::currentLocale();
    @endphp

    <div class="flex justify-end my-10">
        <a href="{{ route('admin.education.create') }}" class="add-new-btn no-underline">
            Nazad
        </a>
    </div>

    <div class="main-container-admin w-full mt-10" style="overflow: auto">

        <!-- Name -->
        <div>
            <p class="mb-2 font-semibold text-xl">Ime i Prezime :</p>
            <p class="text-lg">{{ $apply->name }}</p>
        </div>

        <!-- Date of Birth -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">Datum rođenja :</p>
            <p class="text-lg">{{ $apply->date_of_birth }}</p>
        </div>

        <!-- Address -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">Adresa :</p>
            <p class="text-lg">{{ $apply->address }}</p>
        </div>

        <!-- Email -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">Email :</p>
            <a href="mailto:{{ $apply->email }}" class="text-lg">{{ $apply->email }}</a>
        </div>

        <!-- Phone -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">Telefon :</p>
            <p class="text-lg">{{ $apply->phone }}</p>
        </div>

        <!-- Basic Studies -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">Osnovne studije :</p>
            <p class="text-lg">{{ $apply->basic_studies }}</p>
        </div>

        <!-- Occupation -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">Zanimanje :</p>
            <p class="text-lg">{{ $apply->occupation }}</p>
        </div>

        <!-- Field of Specialization -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">Oblast specijalizacije :</p>
            <p class="text-lg">{{ $apply->field_of_specialization }}</p>
        </div>

        <!-- Job Position -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">Radno mesto :</p>
            <p class="text-lg">{{ $apply->job_position }}</p>
        </div>

        <!-- Work Experience with Children -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">Iskustvo u radu sa decom :</p>
            <p class="text-lg">{{ $apply->work_experience_with_children }}</p>
        </div>

        <!-- Most Frequently Addressed Issues -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">Najčešće obrađivane teme :</p>
            <p class="text-lg">{{ $apply->most_frequently_addressed_issues }}</p>
        </div>

        <!-- Type of Psychotherapy Modality -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">Vrsta psihoterapijske modalnosti :</p>
            <p class="text-lg">{{ $apply->type_of_psychotherapy_modality }}</p>
        </div>

        <!-- Achieved Level of Education -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">Postignuti nivo obrazovanja :</p>
            <p class="text-lg">{{ $apply->achieved_level_of_education }}</p>
        </div>

        <!-- Length of Psychotherapy Experience -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">Dužina psihoterapijskog iskustva :</p>
            <p class="text-lg">{{ $apply->length_of_psychotherapy_experience }}</p>
        </div>

        <!-- Psychotherapy Work with Children -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">Psihoterapijski rad sa decom :</p>
            <p class="text-lg">{{ $apply->psychotherapy_work_with_children }}</p>
        </div>

    </div>
</x-admin-app-layout>