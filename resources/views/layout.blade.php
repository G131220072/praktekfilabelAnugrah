<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <link rel="icon" href="https://th.bing.com/th/id/ODLS.918c2fa3-4c3b-4b1b-8e15-d406740f178e?w=32&h=32&qlt=90&pcl=fffffa&o=6&pid=1.2" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
            </style>
        @endif
    </head>
    <body>
    <header class="text-gray-400 bg-gray-900 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
       <a href="{{url('/')}}"> <img src="https://asia.pokemon-card.com/id/wp-content/themes/pcg_theme_id/images/header/logo.svg"
     alt="Logo"
     class="w-100 h-10 p-full bg-transpant-500 rounded-full object-contain" /> </a>
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a href="{{url('articles')}}" class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">Artikel
        </a>
        <a href="{{url('penulis')}}" class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">Penulis
        </a>
        </nav>
        <a href="https://praktekfilabelanugrah-production.up.railway.app/admin/login" class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">Login
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
        </a>
    </div>
    </header>

@yield('content')


    <footer class="text-gray-400 bg-gray-900 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap md:text-left text-center order-first">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">CATEGORIES</h2>
            <nav class="list-none mb-10">
            <li>
                <a class="text-gray-400 hover:text-white">Pokemon</a>
            </li>
            </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">TAGS</h2>
            <nav class="list-none mb-10">
            <li>
                <a class="text-gray-400 hover:text-white">Ikatan Takdir</a>
            </li>
            </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">SUBSCRIBE</h2>
            <div class="flex xl:flex-nowrap md:flex-nowrap lg:flex-wrap flex-wrap justify-center items-end md:justify-start">
            <div class="relative w-40 sm:w-auto xl:mr-4 lg:mr-0 sm:mr-4 mr-2">
                <label for="footer-field" class="leading-7 text-sm text-gray-400">Placeholder</label>
                <input type="text" id="footer-field" name="footer-field" class="w-full bg-gray-800 rounded border bg-opacity-40 border-gray-700 focus:bg-transparent focus:ring-2 focus:ring-red-900 focus:border-red-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">Button</button>
            </div>
            <p class="text-gray-500 text-sm mt-2 md:text-left text-center">Bitters chicharrones fanny pack
            <br class="lg:block hidden">waistcoat green juice
            </p>
        </div>
        </div>
    </div>
    <div class="bg-gray-800 bg-opacity-75">
        <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-red-500 rounded-full" viewBox="0 0 24 24">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">Tailblocks</span>
        </a>
        <p class="text-sm text-gray-400 sm:ml-6 sm:mt-0 mt-4">© 2020 Tailblocks —
            <a href="https://twitter.com/knyttneve" class="text-gray-500 ml-1" target="_blank" rel="noopener noreferrer">@knyttneve</a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a class="text-gray-400">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
            </a>
            <a class="ml-3 text-gray-400">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
            </a>
            <a class="ml-3 text-gray-400">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
            </a>
            <a class="ml-3 text-gray-400">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
            </a>
        </span>
        </div>
    </div>
    </footer>
    </body>
</html>
