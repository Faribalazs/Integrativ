@php
    $lang = App::currentLocale();
@endphp
<nav>
    <div class="menu-btn">
        <div class="mt-1 menu-btn-icon">
            <div class="line line--1"></div>
            <div class="line line--2"></div>
            <div class="line line--3"></div>
        </div>

        <button onclick="LanguageSwitcher()" class="flex justify-center items-center px-2 language-switcher">
            <i class="ri-earth-line text-3xl"></i>
        </button>
    </div>

    <div class="nav-links">
        <div class="flex flex-col lg:w-[520px] sm:w-[405px] w-full justify-center bg-white items-center h-full">
            <a href="#" class="link" onmouseover="setActiveMenu('home')" onmouseleave="setActiveMenu(null)">
                {{ __('menu.home') }}
            </a>
            <a href="#" class="link" onmouseover="setActiveMenu('event')" onmouseleave="setActiveMenu(null)">
                {{ __('menu.event') }}
            </a>
            <a href="#" class="link" onmouseover="setActiveMenu('portrait')" onmouseleave="setActiveMenu(null)">
                {{ __('menu.portrait') }}
            </a>
            <a href="#" class="link" onmouseover="setActiveMenu('birthday')" onmouseleave="setActiveMenu(null)">
                {{ __('menu.birthday') }}
            </a>
            <span class="link cursor-pointer" onclick="LanguageSwitcher()">
                {{ __('language.name') }}
            </span>
        </div>
        <div class="w-full h-full relative lg:block hidden">
            @foreach ($menuImages as $index => $image)
                <div class="menu-image {{ $loop->first ? 'hover-div-show' : '' }}"
                    style="z-index: {{ $loop->iteration }}; background-image: url('{{ $image['url'] }}')"
                    id="menu-image-{{ $image['key'] }}">
                </div>
            @endforeach

        </div>
    </div>
</nav>

<script>
    var menuBtn = document.querySelector('.menu-btn');
    var nav = document.querySelector('nav');
    var lineOne = document.querySelector('nav .menu-btn .line--1');
    var lineTwo = document.querySelector('nav .menu-btn .line--2');
    var lineThree = document.querySelector('nav .menu-btn .line--3');
    var link = document.querySelector('nav .nav-links');
    menuBtn.addEventListener('click', () => {
        nav.classList.toggle('nav-open');
        lineOne.classList.toggle('line-cross');
        lineTwo.classList.toggle('line-fade-out');
        lineThree.classList.toggle('line-cross');
        link.classList.toggle('fade-in');
    })

    document.addEventListener('DOMContentLoaded', function() {
        let activeMenu = null;

        function setActiveMenu(menu) {
            activeMenu = menu;
            document.querySelectorAll('.menu-image').forEach(image => {
                if (image.id === `menu-image-${menu}`) {
                    image.classList.add('hover-div-show');
                } else {
                    image.classList.remove('hover-div-show');
                }
            });
        }

        window.setActiveMenu = setActiveMenu;
    });

    function LanguageSwitcher(lang) {
        Swal.fire({
            html: "<span class='language-title-swall md:text-4xl text-3xl'>{{ __('app.basic.choose-language') }}</span><br>" +
                "@if ($lang == 'sr')<a href='{{ url(Helper::getCurrentUrlWithLocale('sr')) }}' class='disabled-link block md:text-2xl text-xl mt-2'>Srpski - latinica</a><br>" +
                "@else <a href='{{ url(Helper::getCurrentUrlWithLocale('sr')) }}' class='language-name block md:text-2xl text-xl mt-2'>Srpski - latinica</a><br> @endif" +

                "@if ($lang == 'rs-cyrl')<a href='{{ url(Helper::getCurrentUrlWithLocale('rs-cyrl')) }}' class='disabled-link md:text-2xl text-xl'>Српски - ћирилица</a><br>" +
                "@else <a href='{{ url(Helper::getCurrentUrlWithLocale('rs-cyrl')) }}' class='language-name md:text-2xl text-xl'>Српски - ћирилица</a><br> @endif",

            // "@if ($lang == 'hu')<a href='{{ url(Helper::getCurrentUrlWithLocale('hu')) }}' class='disabled-link'>Magyar</a><br>" +
            // "@else <a href='{{ url(Helper::getCurrentUrlWithLocale('hu')) }}' class='language-name'>Magyar</a><br> @endif" +

            // "@if ($lang == 'en')<a href='{{ url(Helper::getCurrentUrlWithLocale('en')) }}' class='disabled-link'>English</a><br>" +
            // "@else <a href='{{ url(Helper::getCurrentUrlWithLocale('en')) }}' class='language-name' >English</a><br> @endif",
            showCloseButton: true,
            showCancelButton: false,
            showConfirmButton: false,
        })
    }
</script>
<style>
    /* Nav bar design start */

    nav {
        overflow: hidden;
        position: fixed;
        height: 240px;
        width: 450px;
        transition: all 700ms cubic-bezier(0.8, 0, 0.33, 1);
        border-radius: 0% 0% 50% 100%;
        right: 0;
        transform: translateX(0px);
    }

    .no-scroll {
        overflow: hidden;
        height: 100vh;
    }

    .nav-open {
        transform: translateX(0px);
        border-radius: 0% 0% 0% 0%;
        height: 100vh;
        width: 100vw;
        background: rgba(0, 0, 0, 0.16);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(6.7px);
        -webkit-backdrop-filter: blur(6.7px);
    }

    .menu-btn {
        position: absolute;
        top: 50px;
        right: 50px;
        padding: 20px 30px;
        background-color: var(--white);
        border-top-left-radius: 50px;
        border-bottom-left-radius: 50px;
        cursor: pointer;
        z-index: 2;
        display: flex;
        gap: 20px;
        transition: all 700ms ease;
        width: 150px;
        right: 0px;
    }

    nav.nav-open .menu-btn {
        padding-left: 50px;
        right: -50px !important;
    }

    nav .menu-btn .line {
        padding: 0;
        width: 30px;
        background: var(--black);
        height: 2px;
        margin: 5px 0;
        transition: all 700ms cubic-bezier(0.9, 0, 0.33, 1);
    }

    nav .menu-btn .line.line--1 {
        width: 30px;
        transform: rotate(0) translateY(0);
    }

    nav .menu-btn .line.line--1.line-cross {
        width: 30px;
        transform: rotate(45deg) translateY(10px);
        background: var(--black);
    }

    nav .menu-btn .line.line--2 {
        width: 28px;
        transform: translateX(0);
    }

    nav .menu-btn .line.line--2.line-fade-out {
        width: 28px;
        transform: translate(-30px);
        opacity: 0;
    }

    nav .menu-btn .line.line--3 {
        width: 20px;
        transform: rotate(0) translateY(0);
    }

    nav .menu-btn .line.line--3.line-cross {
        width: 30px;
        transform: rotate(-45deg) translateY(-10px);
        background: var(--black);
    }

    nav .nav-links {
        position: absolute;
        right: 0;
        top: 0;
        width: 100vw;
        height: 100%;
        display: flex;
        flex-direction: row-reverse;
        align-items: end;
        transform: translateX(100px);
        opacity: 0;
        transition: all 900ms cubic-bezier(0.9, 0, 0.33, 1);

        @media (min-width: 1024px) {
            justify-content: center;
        }
    }

    nav .nav-links.fade-in {
        opacity: 1;
        transform: translateX(0px);
    }

    nav .nav-links .link {
        padding: 20px 0;
        text-decoration: none;
        font-family: sans-serif;
        color: var(--black);
        font-weight: 700;
        text-transform: uppercase;
        font-size: 1.2rem;
        transition: all 300ms cubic-bezier(0.9, 0, 0.33, 1);
    }

    nav .nav-links .link:hover {
        color: var(--black);
    }

    .hide-switch {
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.8s ease;
    }

    .show-switch {
        opacity: 1;
        transition: opacity 0.8s ease;
    }

    .menu-image {
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        transition: opacity 0.4s ease;
    }

    .hover-div-show {
        opacity: 1;
    }

    /* Nav bar design end */
</style>
