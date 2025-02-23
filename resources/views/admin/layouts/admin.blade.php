<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $pageTitle }}</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
</head>

@php
    $lang = App::currentLocale();
@endphp

<body class="font-sans antialiased">
    <div class="min-h-screen">
        <!-- Page Content -->
        <main class="admin-page-padding">
            <div class="profile-nav-bg"></div>
            <div class="flex overflow-hidden flex-nowrap justify-between">
                <div class="profile-side-panel w-14">
                    <div class="menu-btn">
                        <div class="line line--1"></div>
                        <div class="line line--2"></div>
                        <div class="line line--3"></div>
                    </div>
                    <div class="closed-links">
                        <a href="{{ route('admin.dashboard') }}"
                            class="icons {{ request()->routeIs('admin.dashboard') ? 'closed-icon-active' : '' }}">
                            <i class="ri-home-4-line"></i>
                        </a>
                        <a href="{{ route('admin.slider.create') }}"
                            class="icons 
                            {{ request()->routeIs('admin.slider.create') ? 'closed-icon-active' : '' }}">
                            <i class="ri-image-line"></i>
                        </a>
                        <a href="{{ route('admin.category.create') }}"
                            class="icons 
                            {{ request()->routeIs('admin.category.create') ? 'closed-icon-active' : '' }}">
                            <i class="ri-calendar-todo-line"></i>
                        </a>
                        <a href="{{ route('admin.home.create') }}"
                            class="icons 
                            {{ request()->routeIs('admin.home.create') ? 'closed-icon-active' : '' }}">
                            <i class="ri-home-4-line"></i>
                        </a>
                        <a href="{{ route('admin.section.create') }}"
                            class="icons 
                            {{ request()->routeIs('admin.section.create') ? 'closed-icon-active' : '' }}">
                            <i class="ri-draft-line"></i>
                        </a>
                        <a href="{{ route('admin.partner.create') }}"
                            class="icons 
                            {{ request()->routeIs('admin.partner.create') ? 'closed-icon-active' : '' }}">
                            <i class="ri-team-line"></i>
                        </a>
                        <a href="{{ route('admin.conference.create') }}"
                            class="icons 
                            {{ request()->routeIs('admin.conference.create') ? 'closed-icon-active' : '' }}">
                            <i class="ri-bank-line"></i>
                        </a>
                        <a href="{{ route('admin.contact.create') }}"
                            class="icons 
                            {{ request()->routeIs('admin.contact.create') ? 'closed-icon-active' : '' }}">
                            <i class="ri-message-2-line"></i>
                        </a>
                        <a href="{{ route('admin.page.create') }}"
                            class="icons 
                            {{ request()->routeIs('admin.page.create') ? 'closed-icon-active' : '' }}">
                            <i class="ri-pages-line"></i>
                        </a>
                        <a href="{{ route('admin.education.create') }}"
                            class="icons 
                            {{ request()->routeIs('admin.education.create') ? 'closed-icon-active' : '' }}">
                            <i class="ri-speak-line"></i>
                        </a>
                        <a href="{{ route('admin.sing-up-conference.create') }}"
                            class="icons 
                            {{ request()->routeIs('admin.sing-up-conference.create') ? 'closed-icon-active' : '' }}">
                            <i class="ri-briefcase-4-line"></i>
                        </a>
                        <a href="{{ route('admin.psychotherapist.create') }}"
                            class="icons 
                            {{ request()->routeIs('admin.psychotherapist.create') ? 'closed-icon-active' : '' }}">
                            <i class="ri-user-2-line"></i>
                        </a>
                        <a href="{{ route('admin.activity.create') }}"
                            class="icons 
                            {{ request()->routeIs('admin.activity.create') ? 'closed-icon-active' : '' }}">
                            <i class="ri-star-line"></i>
                        </a>
                        <form method="POST" id="log-out-form" action="{{ route('admin.logout') }}"
                            class="admin-logout icons">
                            @csrf
                            <button type="button" onclick="logOut()"><i class="ri-logout-box-r-line"></i></button>
                        </form>
                    </div>
                    <div class="nav-links">
                        <div class="flex items-center border-b-2 border-white w-full justify-between">
                            <a href="{{ route('admin.dashboard') }}" class="link">
                                {{ __('app.admin.nav.dashboard') }}
                            </a>
                            <a href="{{ route('admin.dashboard') }}"
                                class="icons
                            {{ request()->routeIs('admin.dashboard') ? 'closed-icon-active' : '' }}">
                                <i class="ri-home-4-line text-2xl"></i>
                            </a>
                        </div>
                        <div class="flex items-center border-b-2 border-white w-full justify-between">
                            <a href="{{ route('admin.slider.create') }}" class="link">
                                {{ __('app.admin.nav.slider') }}
                            </a>
                            <a href="{{ route('admin.slider.create') }}"
                                class="icons
                            {{ request()->routeIs('admin.slider.create') ? 'closed-icon-active' : '' }}">
                                <i class="ri-image-line text-2xl"></i>
                            </a>
                        </div>
                        <div class="flex items-center border-b-2 border-white w-full justify-between">
                            <a href="{{ route('admin.category.create') }}" class="link">
                                {{ __('app.admin.nav.categories') }}
                            </a>
                            <a href="{{ route('admin.category.create') }}"
                                class="icons
                            {{ request()->routeIs('admin.category.create') ? 'closed-icon-active' : '' }}">
                                <i class="ri-calendar-todo-line text-2xl"></i>
                            </a>
                        </div>
                        <div class="flex items-center border-b-2 border-white w-full justify-between">
                            <a href="{{ route('admin.home.create') }}" class="link">
                                {{ __('app.admin.nav.home-page') }}
                            </a>
                            <a href="{{ route('admin.home.create') }}"
                                class="icons
                            {{ request()->routeIs('admin.home.create') ? 'closed-icon-active' : '' }}">
                                <i class="ri-home-4-line text-2xl"></i>
                            </a>
                        </div>
                        <div class="flex items-center border-b-2 border-white w-full justify-between">
                            <a href="{{ route('admin.section.create') }}" class="link">
                                {{ __('app.admin.nav.sections') }}
                            </a>
                            <a href="{{ route('admin.section.create') }}"
                                class="icons
                            {{ request()->routeIs('admin.section.create') ? 'closed-icon-active' : '' }}">
                                <i class="ri-draft-line text-2xl"></i>
                            </a>
                        </div>
                        <div class="flex items-center border-b-2 border-white w-full justify-between">
                            <a href="{{ route('admin.partner.create') }}" class="link">
                                {{ __('app.admin.nav.partners') }}
                            </a>
                            <a href="{{ route('admin.partner.create') }}"
                                class="icons
                            {{ request()->routeIs('admin.partner.create') ? 'closed-icon-active' : '' }}">
                                <i class="ri-team-line text-2xl"></i>
                            </a>
                        </div>
                        <div class="flex items-center border-b-2 border-white w-full justify-between">
                            <a href="{{ route('admin.conference.create') }}" class="link">
                                {{ __('app.admin.nav.conferences') }}
                            </a>
                            <a href="{{ route('admin.conference.create') }}"
                                class="icons
                            {{ request()->routeIs('admin.conference.create') ? 'closed-icon-active' : '' }}">
                                <i class="ri-bank-line text-2xl"></i>
                            </a>
                        </div>
                        <div class="flex items-center border-b-2 border-white w-full justify-between">
                            <a href="{{ route('admin.contact.create') }}" class="link">
                                {{ __('app.admin.nav.contact') }}
                            </a>
                            <a href="{{ route('admin.contact.create') }}"
                                class="icons
                            {{ request()->routeIs('admin.contact.create') ? 'closed-icon-active' : '' }}">
                                <i class="ri-message-2-line text-2xl"></i>
                            </a>
                        </div>
                        <div class="flex items-center border-b-2 border-white w-full justify-between">
                            <a href="{{ route('admin.page.create') }}" class="link">
                                {{ __('app.admin.nav.pages') }}
                            </a>
                            <a href="{{ route('admin.page.create') }}"
                                class="icons
                            {{ request()->routeIs('admin.page.create') ? 'closed-icon-active' : '' }}">
                                <i class="ri-pages-line text-2xl"></i>
                            </a>
                        </div>
                        <div class="flex items-center border-b-2 border-white w-full justify-between">
                            <a href="{{ route('admin.education.create') }}" class="link">
                                {{ __('app.admin.nav.education') }}
                            </a>
                            <a href="{{ route('admin.education.create') }}"
                                class="icons
                            {{ request()->routeIs('admin.education.create') ? 'closed-icon-active' : '' }}">
                                <i class="ri-speak-line text-2xl"></i>
                            </a>
                        </div>
                        <div class="flex items-center border-b-2 border-white w-full justify-between">
                            <a href="{{ route('admin.sing-up-conference.create') }}" class="link">
                                {{ __('app.admin.nav.sign-up-for-conferences') }}
                            </a>
                            <a href="{{ route('admin.sing-up-conference.create') }}"
                                class="icons
                            {{ request()->routeIs('admin.sing-up-conference.create') ? 'closed-icon-active' : '' }}">
                                <i class="ri-briefcase-4-line text-2xl"></i>
                            </a>
                        </div>
                        <div class="flex items-center border-b-2 border-white w-full justify-between">
                            <a href="{{ route('admin.psychotherapist.create') }}" class="link">
                                {{ __('app.admin.nav.psyhoterapist') }}
                            </a>
                            <a href="{{ route('admin.psychotherapist.create') }}"
                                class="icons
                            {{ request()->routeIs('admin.psychotherapist.create') ? 'closed-icon-active' : '' }}">
                                <i class="ri-user-2-line text-2xl"></i>
                            </a>
                        </div>
                        <div class="flex items-center border-b-2 border-white w-full justify-between">
                            <a href="{{ route('admin.activity.create') }}" class="link">
                                {{ __('app.admin.nav.activities') }}
                            </a>
                            <a href="{{ route('admin.activity.create') }}"
                                class="icons
                            {{ request()->routeIs('admin.activity.create') ? 'closed-icon-active' : '' }}">
                                <i class="ri-star-line text-2xl"></i>
                            </a>
                        </div>
                        <div class="flex items-center border-b-2 border-white w-full justify-between">
                            <a onclick="logOut()" class="link cursor-pointer">
                                {{ __('app.profile.log-out') }}
                            </a>
                            <a href="{{ route('admin.logout') }}" class="icons">
                                <i class="ri-logout-box-r-line text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="content-side">
                    <div class="flex profile-title justify-between items-center">
                        <div class="text-3xl font-bold">{{ $header }} :</div>
                        <button onclick="LanguageSwitcher('{{ $lang }}')"
                            class="flex items-center justify-center sm:text-xl pr-3 text-lg">
                            <i class="ri-earth-line sm:text-3xl pr-3 text-2xl"></i>

                            @if (strtoupper($lang) == 'SR')
                                <b>Srpski</b>
                            @elseif (strtoupper($lang) == 'HU')
                                <b>Magyar</b>
                            @elseif (strtoupper($lang) == 'EN')
                                <b>English</b>
                            @endif

                        </button>
                    </div>
                    {{ $slot }}
                </div>
            </div>
        </main>
    </div>
    @include('sweetalert::alert')
</body>
<script>
    var menuBtn = document.querySelector('.menu-btn');
    var content = document.querySelector('.content-side');
    var navBg = document.querySelector('.profile-nav-bg');
    var navPanel = document.querySelector('.profile-side-panel');
    var lineOne = document.querySelector('.profile-side-panel .menu-btn .line--1');
    var lineTwo = document.querySelector('.profile-side-panel .menu-btn .line--2');
    var lineThree = document.querySelector('.profile-side-panel .menu-btn .line--3');
    var link = document.querySelector('.profile-side-panel .nav-links');
    menuBtn.addEventListener('click', () => {
        navPanel.classList.toggle('nav-open');
        lineOne.classList.toggle('line-cross');
        lineTwo.classList.toggle('line-fade-out');
        lineThree.classList.toggle('line-cross');
        link.classList.toggle('fade-in');
        navBg.classList.toggle('profile-nav-open');
        content.classList.toggle('content-open');
    })

    function logOut() {
        Swal.fire({
            title: '{{ __('app.profile.log-out-ask') }}?',
            showCancelButton: true,
            icon: 'question',
            confirmButtonText: '{{ __('app.profile.yes') }}',
            showCloseButton: true,
            confirmButtonColor: '#ac1902',
            cancelButtonText: '{{ __('app.profile.no') }}',
        }).then((result) => {
            if (result.isConfirmed) {
                document.querySelector('#log-out-form').submit();
            }
        })
    }

    function LanguageSwitcher(lang) {
        Swal.fire({
            html: "@if ($lang == 'sr')<a href='{{ url(Helper::getCurrentUrlWithLocale('sr')) }}' class='disabled-link'>Srpski</a><br>" +
                "@else <a href='{{ url(Helper::getCurrentUrlWithLocale('sr')) }}' class='language-name'>Srpski</a><br> @endif" +

                "@if ($lang == 'hu')<a href='{{ url(Helper::getCurrentUrlWithLocale('hu')) }}' class='disabled-link'>Magyar</a><br>" +
                "@else <a href='{{ url(Helper::getCurrentUrlWithLocale('hu')) }}' class='language-name'>Magyar</a><br> @endif" +

                "@if ($lang == 'en')<a href='{{ url(Helper::getCurrentUrlWithLocale('en')) }}' class='disabled-link'>English</a><br>" +
                "@else <a href='{{ url(Helper::getCurrentUrlWithLocale('en')) }}' class='language-name' >English</a><br> @endif",
            showCloseButton: true,
            showCancelButton: false,
            showConfirmButton: false,
        })
    }
</script>
<style>
    .profile-side-panel {
        min-height: 45.125rem !important;
    }

    .profile-side-panel {
        position: fixed !important;
    }

    .content-side {
        margin-left: auto;
        transition: all 800ms cubic-bezier(0.8, 0, 0.33, 1);
    }

    .content-open {
        width: calc(100% - 322px) !important;
        min-width: calc(100% - 322px) !important;
        margin-left: auto;
        transition: all 800ms cubic-bezier(0.8, 0, 0.33, 1);
    }

    .icons,
    .icons:hover {
        text-decoration: none !important;
    }

    .language-name,
    .language-name:hover,
    .disabled-link,
    .disabled-link:hover {
        text-decoration: none !important;
    }
</style>

</html>
