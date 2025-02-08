@php
    $lang = App::currentLocale();

    use App\Models\Category;

    $categories = Category::all();
@endphp
<a href="/" class="nav-icon-div">
    <img src="{{ asset('img/integrativ-logo.svg') }}" class="nav-icon">
    <img src="{{ asset('img/integrativ-logo.png') }}" class="nav-icon-mobile">
</a>
<nav>
    <div class="menu-btn">
        <div class="mt-1 menu-btn-icon">
            <div class="line line--1"></div>
            <div class="line line--2"></div>
            <div class="line line--3"></div>
        </div>

        <button onclick="LanguageSwitcher()" class="flex justify-center items-center px-2 language-switcher">
            <i class="ri-earth-line text-3xl text-white"></i>
        </button>
    </div>

    <div class="nav-links">
        <div class="flex flex-col lg:w-[450px] sm:w-[405px] w-full justify-center open-menu-bg items-center h-full">
            @foreach ($categories as $category)
                <a href="#" class="link" onmouseover="setActiveMenu({{ $category->order }})" onmouseleave="setActiveMenu(null)">
                    {{ $category->category_name }}
                </a>
            @endforeach
            <span class="link cursor-pointer" onclick="LanguageSwitcher()">
                Izaberi jezik
            </span>
        </div>
        <div class="w-full h-full relative lg:block hidden">
            @foreach ($categories as $index => $image)
                <div class="menu-image {{ $loop->first ? 'hover-div-show' : '' }}"
                    style="z-index: {{ $loop->iteration }}; background-image: url('{{ asset('storage/' . $image->image) }}')"
                    id="menu-image-{{ $image->order }}">
                </div>
            @endforeach

        </div>
    </div>
</nav>

<script>
    var menuBtn = document.querySelector('.menu-btn-icon');
    var nav = document.querySelector('nav');
    var lineOne = document.querySelector('nav .menu-btn .line--1');
    var lineTwo = document.querySelector('nav .menu-btn .line--2');
    var lineThree = document.querySelector('nav .menu-btn .line--3');
    var link = document.querySelector('nav .nav-links');
    menuBtn.addEventListener('click', () => {
        nav.classList.toggle('nav-open-menu');
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
                "<div class='flex flex-col'>" +
                    "@if ($lang == 'sr')<a href='{{ url(Helper::getCurrentUrlWithLocale('sr')) }}' class='disabled-link block md:text-2xl text-xl mt-2'>Srpski</a>" +
                    "@else <a href='{{ url(Helper::getCurrentUrlWithLocale('sr')) }}' class='language-name block md:text-2xl text-xl mt-2'>Srpski</a> @endif" +

                    "@if ($lang == 'hu')<a href='{{ url(Helper::getCurrentUrlWithLocale('hu')) }}' class='disabled-link block md:text-2xl text-xl mt-4'>Magyar</a>" +
                    "@else <a href='{{ url(Helper::getCurrentUrlWithLocale('hu')) }}' class='language-name block md:text-2xl text-xl mt-4'>Magyar</a> @endif" +

                    "@if ($lang == 'en')<a href='{{ url(Helper::getCurrentUrlWithLocale('en')) }}' class='disabled-link block md:text-2xl text-xl mt-4'>English</a>" +
                    "@else <a href='{{ url(Helper::getCurrentUrlWithLocale('en')) }}' class='language-name block md:text-2xl text-xl mt-4' >English</a> @endif" +
                "</div>",
            showCloseButton: true,
            showCancelButton: false,
            showConfirmButton: false,
        })
    }
</script>
<style>
    /* Nav bar design start */

    .nav-icon-div {
        position: fixed;
        top: 30px;
        left: 30px;
        z-index: 100;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    nav {
        overflow: hidden;
        position: fixed;
        height: 240px;
        width: 450px;
        transition: all 700ms cubic-bezier(0.8, 0, 0.33, 1);
        border-radius: 0% 0% 50% 100%;
        right: 0;
        z-index: 100;
        transform: translateX(0px);
    }

    .no-scroll {
        overflow: hidden;
        height: 100vh;
    }

    .nav-open-menu {
        transform: translateX(0px);
        border-radius: 0% 0% 0% 0%;
        height: 100vh;
        width: 100vw;
        background: rgba(0, 0, 0, 0.16);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(6.7px);
        -webkit-backdrop-filter: blur(6.7px);
    }

    .open-menu-bg {
        background: #B41919;
    }

    .menu-btn {
        position: absolute;
        top: 30px;
        right: 50px;
        padding: 20px 30px;
        background-color: #B41919;
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

    nav.nav-open-menu .menu-btn {
        padding-left: 50px;
        right: -50px !important;
    }

    nav .menu-btn .line {
        padding: 0;
        width: 30px;
        background: var(--white);
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
        background: var(--white);
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
        background: var(--white);
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
        color: var(--white);
        font-weight: 700;
        text-transform: uppercase;
        font-size: 1.2rem;
        transition: all 300ms cubic-bezier(0.9, 0, 0.33, 1);
    }

    nav .nav-links .link:hover {
        color: var(--white);
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
