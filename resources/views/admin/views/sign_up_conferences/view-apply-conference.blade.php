<x-admin-app-layout>
    <x-slot name="pageTitle">
        {{ __('app.admin.apply-for-conference.show-title') }}
    </x-slot>

    <x-slot name="header">
        {{ __('app.admin.apply-for-conference.show-title') }}
    </x-slot>

    @php
        $lang = App::currentLocale();
    @endphp

    <div class="flex justify-end my-10">
        <a href="{{ route('admin.sing-up-conference.create') }}" class="add-new-btn no-underline">
            {{ __('app.admin.apply-for-conference.back') }}
        </a>
    </div>

    <div class="main-container-admin w-full mt-10" style="overflow: auto">

        <!-- Name -->
        <div>
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.apply-for-conference.name') }} :</p>
            <p class="text-lg">{{ $apply->name }}</p>
        </div>

        <!-- Address -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.apply-for-conference.address') }} :</p>
            <p class="text-lg">{{ $apply->address }}</p>
        </div>

        <!-- Occupation -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.apply-for-conference.occupation') }} :</p>
            <p class="text-lg">{{ $apply->occupation }}</p>
        </div>

        <!-- Email -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.apply-for-conference.email') }} :</p>
            <a href="mailto:{{ $apply->email }}" class="text-lg">{{ $apply->email }}</a>
        </div>

        <!-- Phone -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.apply-for-conference.phone') }} :</p>
            <p class="text-lg">{{ $apply->phone }}</p>
        </div>

        <!-- Institution/Company Name -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.apply-for-conference.institution_or_company_name') }} :</p>
            <p class="text-lg">{{ $apply->institution_or_company_name }}</p>
        </div>

        <!-- PIB -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.apply-for-conference.pib') }} :</p>
            <p class="text-lg">{{ $apply->pib }}</p>
        </div>

        <!-- City -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.apply-for-conference.city') }} :</p>
            <p class="text-lg">{{ $apply->city }}</p>
        </div>

        <!-- Postcode -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.apply-for-conference.postcode') }} :</p>
            <p class="text-lg">{{ $apply->postcode }}</p>
        </div>

        <!-- Contact Phone -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.apply-for-conference.contact_phone') }} :</p>
            <p class="text-lg">{{ $apply->contact_phone }}</p>
        </div>

        <!-- Institution Email -->
        <div class="mt-3">
            <p class="mb-2 font-semibold text-xl">{{ __('app.admin.apply-for-conference.institution_email') }} :</p>
            <a href="mailto:{{ $apply->institution_email }}" class="text-lg">{{ $apply->institution_email }}</a>
        </div>

    </div>
</x-admin-app-layout>