<x-admin-app-layout>
    <x-slot name="pageTitle">
        {{ __('app.admin.education.show-title') }}
    </x-slot>

    <x-slot name="header">
        {{ __('app.admin.education.show-title') }}
    </x-slot>

    @php
        $lang = App::currentLocale();
    @endphp

    <div class="flex justify-end my-10">
        <a href="{{ route('admin.education.create') }}" class="add-new-btn no-underline">
            {{ __('app.admin.education.back') }}
        </a>
    </div>

    <div class="main-container-admin w-full mt-10" style="overflow: auto">

        <!-- Name -->
        <div>
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.education.name') }} :</p>
            <p class="text-lg">{{ $apply->name }}</p>
        </div>

        <!-- Date of Birth -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.education.date_of_birth') }} :</p>
            <p class="text-lg">{{ $apply->date_of_birth }}</p>
        </div>

        <!-- Address -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.education.address') }} :</p>
            <p class="text-lg">{{ $apply->address }}</p>
        </div>

        <!-- Email -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.education.email') }} :</p>
            <a href="mailto:{{ $apply->email }}" class="text-lg">{{ $apply->email }}</a>
        </div>

        <!-- Phone -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.education.phone') }} :</p>
            <p class="text-lg">{{ $apply->phone }}</p>
        </div>

        <!-- Basic Studies -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.education.basic_studies') }} :</p>
            <p class="text-lg">{{ $apply->basic_studies }}</p>
        </div>

        <!-- Occupation -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.education.occupation') }} :</p>
            <p class="text-lg">{{ $apply->occupation }}</p>
        </div>

        <!-- Field of Specialization -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.education.field_of_specialization') }} :</p>
            <p class="text-lg">{{ $apply->field_of_specialization }}</p>
        </div>

        <!-- Job Position -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.education.job_position') }} :</p>
            <p class="text-lg">{{ $apply->job_position }}</p>
        </div>

        <!-- Work Experience with Children -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.education.work_experience_with_children') }} :</p>
            <p class="text-lg">{{ $apply->work_experience_with_children }}</p>
        </div>

        <!-- Most Frequently Addressed Issues -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.education.most_frequently_addressed_issues') }} :
            </p>
            <p class="text-lg">{{ $apply->most_frequently_addressed_issues }}</p>
        </div>

        <!-- Type of Psychotherapy Modality -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.education.type_of_psychotherapy_modality') }} :</p>
            <p class="text-lg">{{ $apply->type_of_psychotherapy_modality }}</p>
        </div>

        <!-- Achieved Level of Education -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.education.achieved_level_of_education') }} :</p>
            <p class="text-lg">{{ $apply->achieved_level_of_education }}</p>
        </div>

        <!-- Length of Psychotherapy Experience -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.education.length_of_psychotherapy_experience') }} :
            </p>
            <p class="text-lg">{{ $apply->length_of_psychotherapy_experience }}</p>
        </div>

        <!-- Psychotherapy Work with Children -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.education.psychotherapy_work_with_children') }} :
            </p>
            <p class="text-lg">{{ $apply->psychotherapy_work_with_children }}</p>
        </div>

    </div>
</x-admin-app-layout>
