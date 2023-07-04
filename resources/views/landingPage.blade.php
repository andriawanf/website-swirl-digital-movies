<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
</head>

<body class=" bg-[#EAFBF3] ">
    <aside class="p-6 h-screen flex flex-col justify-between items-center w-72 bg-white fixed top-0 left-0 z-40 ">
        {{-- logo website --}}
        <div class="flex">
            <img src="{{ asset('logos/film.svg') }}" alt="logo-swirl" class="mr-2">
            <h1 class="text-2xl font-poppins font-semibold text-[#151515]">SwirlMovies</h1>
        </div>

        {{-- card subscription --}}
        <div class="w-full bg-[#2AD587] p-4 rounded-3xl">
            <div class="flex items-center mb-4">
                <div class="bg-[#151515] p-2 rounded-full border-2 border-white">
                    <img src="{{ asset('logos/credit-card.svg') }}" alt="subscription-logo">
                </div>
                <div class="font-poppins ml-3">
                    <p class="text-[10px] font-medium text-black/50">Your Subscription</p>
                    <h1 class="text-base font-bold text-[#151515]">Free Trial</h1>
                </div>
            </div>
            <div class="flex justify-between items-center">
                <div class="font-poppins">
                    <p class="text-[10px] font-medium text-[#151515]/50">Until:</p>
                    <h1 class="text-xs font-semibold text-[#151515]/50">24 August 2023</h1>
                </div>
                <div class="bg-white p-2 rounded-full">
                    <img src="{{ asset('logos/plus-square.svg') }}" alt="add-subscription">
                </div>
            </div>
        </div>

        {{-- menu list --}}
        <ul class="flex flex-col items-start w-full font-poppins gap-4">
            <li class="bg-[#2AD587]/20 w-full pl-4 pr-5 py-3 rounded-2xl flex items-center">
                <img src="{{ asset('logos/home.svg') }}" alt="home-icon" class="mr-2">
                <a href="#" class="font-medium text-base text-[#151515]">Browse</a>
            </li>
            <li class="group bg-white w-full pl-4 pr-5 py-3 rounded-2xl flex items-center hover:bg-[#EAFBF3]">
                <img src="{{ asset('logos/star.svg') }}" alt="home-icon"
                    class="mr-2 opacity-50 group-hover:opacity-100">
                <a href="#" class="font-medium text-base text-[#151515]/50 group-hover:text-[#151515]">Popular</a>
            </li>
            <li class="group bg-white w-full pl-4 pr-5 py-3 rounded-2xl flex items-center hover:bg-[#EAFBF3]">
                <img src="{{ asset('logos/filter.svg') }}" alt="home-icon"
                    class="mr-2 opacity-50 group-hover:opacity-100">
                <a href="#" class="font-medium text-base text-[#151515]/50 group-hover:text-[#151515]">Genres</a>
            </li>
            <li class="group bg-white w-full pl-4 pr-5 py-3 rounded-2xl flex items-center hover:bg-[#EAFBF3]">
                <img src="{{ asset('logos/folder.svg') }}" alt="home-icon"
                    class="mr-2 opacity-50 group-hover:opacity-100">
                <a href="#"
                    class="font-medium text-base text-[#151515]/50 group-hover:text-[#151515]">Watchlist</a>
            </li>
            <li class="group bg-white w-full pl-4 pr-5 py-3 rounded-2xl flex items-center hover:bg-[#EAFBF3]">
                <img src="{{ asset('logos/bookmark.svg') }}" alt="home-icon"
                    class="mr-2 opacity-50 group-hover:opacity-100">
                <a href="#"
                    class="font-medium text-base text-[#151515]/50 group-hover:text-[#151515]">Favorite</a>
            </li>
        </ul>

        {{-- Others --}}
        <div class="w-full">
            {{-- card profile user --}}
            <div class="w-full bg-[#2AD587]/20 p-3 rounded-3xl flex mb-4 border border-[#BAF3D8]">
                <img src="{{ asset('images/businessman-holding-cup-4431882.png') }}" alt="user-profil" height="60"
                    width="60" class="">
                <h1 class="font-poppins font-semibold text-sm"><span
                        class="font-medium text-xs text-[#151515]/50">Welcome</span> Andrew! 👋</h1>
            </div>
            <ul class="flex flex-col items-start w-full font-poppins gap-6">
                <li class="group w-full flex items-center pl-4">
                    <img src="{{ asset('logos/settings.svg') }}" alt="home-icon"
                        class="mr-2 opacity-50 group-hover:opacity-100">
                    <a href="#"
                        class="font-medium text-base text-[#151515]/50 group-hover:text-[#151515]">Settings</a>
                </li>
                <li class="group w-full flex items-center pl-4">
                    <img src="{{ asset('logos/log-out.svg') }}" alt="home-icon"
                        class="mr-2 opacity-50 group-hover:opacity-100">
                    <a href="#"
                        class="font-medium text-base text-[#151515]/50 group-hover:text-[#151515]">Logout</a>
                </li>
            </ul>
        </div>
    </aside>

    <main class="ml-72 px-6">
        {{-- navbar --}}
        <nav class="w-full grid grid-cols-5 items-center pt-6 gap-6">

            {{-- input search --}}
            <form class="w-full col-span-3">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 z-40 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-[#151515]/30" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-2 pl-10 text-sm text-[#151515] rounded-full bg-transparent backdrop-blur-xl border-0 placeholder-[#151515]/30 placeholder:font-medium focus:ring-[#BAF3D8] focus:border-[#BAF3D8]"
                        placeholder="Search Movies" required>
                </div>
            </form>

            {{-- other menus --}}
            <div class="col-span-2 items-center flex justify-between w-full">
                {{-- dropdown lang settings --}}
                <div class="flex items-center">
                    <button data-dropdown-toggle="changeLanguage"
                        class="flex items-center mr-4 p-4 py-2 bg-[#BAF3D8] rounded-full text-sm font-medium font-poppins">
                        <svg class="w-5 h-5 mr-2 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3900 3900">
                            <path fill="#b22234" d="M0 0h7410v3900H0z" />
                            <path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0" stroke="#fff"
                                stroke-width="300" />
                            <path fill="#3c3b6e" d="M0 0h2964v2100H0z" />
                            <g fill="#fff">
                                <g id="d">
                                    <g id="c">
                                        <g id="e">
                                            <g id="b">
                                                <path id="a"
                                                    d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z" />
                                                <use xlink:href="#a" y="420" />
                                                <use xlink:href="#a" y="840" />
                                                <use xlink:href="#a" y="1260" />
                                            </g>
                                            <use xlink:href="#a" y="1680" />
                                        </g>
                                        <use xlink:href="#b" x="247" y="210" />
                                    </g>
                                    <use xlink:href="#c" x="494" />
                                </g>
                                <use xlink:href="#d" x="988" />
                                <use xlink:href="#c" x="1976" />
                                <use xlink:href="#e" x="2470" />
                            </g>
                        </svg>
                        English (US)
                    </button>
                    {{-- menu dropdown --}}
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-2xl font-poppins shadow"
                        id="changeLanguage">
                        <ul class="p-2 font-medium" role="none">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-[#151515] hover:bg-gray-200 rounded-xl"
                                    role="menuitem">
                                    <div class="inline-flex items-center">
                                        <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full mr-2"
                                            xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us"
                                            viewBox="0 0 512 512">
                                            <g fill-rule="evenodd">
                                                <g stroke-width="1pt">
                                                    <path fill="#bd3d44"
                                                        d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                        transform="scale(3.9385)" />
                                                    <path fill="#fff"
                                                        d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                        transform="scale(3.9385)" />
                                                </g>
                                                <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)" />
                                                <path fill="#fff"
                                                    d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                                                    transform="scale(3.9385)" />
                                            </g>
                                        </svg>
                                        English (US)
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-[#151515] hover:bg-gray-200 rounded-xl"
                                    role="menuitem">
                                    <div class="inline-flex items-center">
                                        <svg class="h-3.5 w-3.5 rounded-full mr-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-de"
                                            viewBox="0 0 512 512">
                                            <path fill="#ffce00" d="M0 341.3h512V512H0z" />
                                            <path d="M0 0h512v170.7H0z" />
                                            <path fill="#d00" d="M0 170.7h512v170.6H0z" />
                                        </svg>
                                        Deutsch
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-[#151515] hover:bg-gray-200 rounded-xl"
                                    role="menuitem">
                                    <div class="inline-flex items-center">
                                        <svg class="h-3.5 w-3.5 rounded-full mr-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-it"
                                            viewBox="0 0 512 512">
                                            <g fill-rule="evenodd" stroke-width="1pt">
                                                <path fill="#fff" d="M0 0h512v512H0z" />
                                                <path fill="#009246" d="M0 0h170.7v512H0z" />
                                                <path fill="#ce2b37" d="M341.3 0H512v512H341.3z" />
                                            </g>
                                        </svg>
                                        Italiano
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-[#151515] hover:bg-gray-200 rounded-xl"
                                    role="menuitem">
                                    <div class="inline-flex items-center">
                                        <svg class="h-3.5 w-3.5 rounded-full mr-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn"
                                            viewBox="0 0 512 512">
                                            <defs>
                                                <path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z" />
                                            </defs>
                                            <path fill="#de2910" d="M0 0h512v512H0z" />
                                            <use width="30" height="20"
                                                transform="matrix(76.8 0 0 76.8 128 128)" xlink:href="#a" />
                                            <use width="30" height="20"
                                                transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a" />
                                            <use width="30" height="20"
                                                transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a" />
                                            <use width="30" height="20"
                                                transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a" />
                                            <use width="30" height="20"
                                                transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a" />
                                        </svg>
                                        中文 (繁體)
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- Button User Profile --}}
                <div class="flex">
                    <button
                        class="inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none py-1 px-1.5 rounded-full bg-[#BAF3D8] border-2 border-[#2AD587] relative mr-4">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#151515"
                            viewBox="0 0 14 20">
                            <path
                                d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z" />
                        </svg>
                        <div class="absolute px-1 bg-red-600 border-2 border-[#BAF3D8] rounded-full -bottom-1 -left-2">
                            <p class="text-[10px] font-poppins font-medium text-white">24</p>
                        </div>
                    </button>
                    <div>
                        <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                            class="flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-[#2AD587] font-poppins"
                            type="button">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-9 h-9 mr-2 rounded-full object-cover border-2 border-[#2AD587]"
                                src="{{ asset('images/photo-user.jpg') }}" alt="user photo">
                            Andrew Bonnie
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownAvatarName"
                            class="z-10 hidden bg-white divide-y divide-gray-200 rounded-2xl shadow p-2">
                            <div class="px-2 py-3 text-sm text-gray-900 dark:text-white">
                                <div class="font-base text-[#151515]/50">Free Trial</div>
                                <div class="">andrewBone@gmail.com</div>
                            </div>
                            <ul class="text-sm text-gray-700"
                                aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-200 rounded-xl">Profile</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-200 rounded-xl">Settings</a>
                                </li>
                            </ul>
                            <div class="py-2">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-red-600 hover:bg-red-600 hover:text-white rounded-xl">Sign
                                    out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        {{-- Main Content --}}
        <div class="grid grid-cols-5 gap-6 py-6">
            {{-- Section 1 --}}
            <section class="col-span-3 w-full">
                {{-- carousel popular movies --}}
                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-[2rem] md:h-96">
                        @foreach ($data as $movie)
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in" data-carousel-item>
                                <img src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}"
                                    class="absolute block w-full h-96 object-cover blur-lg brightness-75"
                                    alt="{{ $movie['title'] }}">
                                <div
                                    class="absolute top-0 w-full h-96 flex justify-between z-50 text-white p-9 duration-700 ease-in-out rounded-[2rem]">
                                    <div class="flex flex-col justify-between">
                                        <div class="flex flex-col gap-3 mr-9">
                                            <h1 class="text-4xl text-white font-poppins font-bold">
                                                {{ $movie['title'] }}</h1>
                                            <p class="text-sm font-poppins font-medium text-gray-300 line-clamp-5">
                                                {{ $movie['overview'] }}</p>
                                        </div>
                                        <button class="inline-flex px-4 py-2 bg-[#BAF3D8] rounded-full w-fit items-center">
                                            <p class="text-base font-poppins font-medium text-black mr-2">Watch the trailer</p>
                                            <img src="{{asset('logos/eye.svg')}}" alt="">
                                        </button>
                                    </div>
                                    <img src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}"
                                        alt="" class="h-full w-56 object-cover rounded-3xl">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Top Rated Movies --}}
                <div class="mt-9">
                    <div class="w-full inline-flex justify-between items-end mb-6">
                        <h1 class="text-xl font-poppins font-semibold text-[#151515]">Top Rated Movies</h1>
                        <button class="inline-flex items-center gap-2 group">
                            <h1 class="text-xs font-poppins font-medium text-[#151515]/50 group-hover:text-[#151515]">See more</h1>
                            <img src="{{asset('logos/arrow-right.svg')}}" alt="" class="opacity-50 group-hover:opacity-100">
                        </button>
                    </div>
                    <div class="flex flex-row justify-between w-full ">
                        @foreach (array_slice($filmsWithGenres, 0, 4) as $genre)
                            
                        <div class="w-fit rounded-xl bg-white shadow-lg shadow-[#BAF3D8]">
                            <img src="https://image.tmdb.org/t/p/w500{{ $genre['poster_path'] }}" alt="" class="h-44 w-40 object-cover rounded-xl">
                            <div class="w-40 p-4 font-poppins">
                                <h1 class="text-sm font-semibold text-[#151515] truncate">{{ $genre['title'] }}</title>
                                <p class="text-[10px] font-normal text-[#151515]/50">{{implode(', ', $genre['genre_names'])}}</p>
                                <div class="flex mt-2">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.9344 11.6304L17.8204 14.6226L18.5554 18.8435C18.6754 19.5325 18.3974 20.2195 17.8294 20.6355C17.2504 21.0585 16.4944 21.1166 15.8564 20.7876L12.0004 18.7905L8.14445 20.7876C7.87045 20.9296 7.57345 20.9995 7.27845 20.9995C6.88845 20.9995 6.50142 20.8765 6.17142 20.6355C5.60442 20.2195 5.32544 19.5325 5.44544 18.8435L6.18043 14.6226L3.06644 11.6304C2.55644 11.1404 2.37342 10.4195 2.58942 9.74951C2.80742 9.07151 3.38542 8.58857 4.09742 8.48657L8.40644 7.86938L10.3324 4.02441C10.6484 3.39241 11.2884 3.00049 12.0004 3.00049C12.7124 3.00049 13.3524 3.39341 13.6684 4.02441L15.5944 7.86938L19.9034 8.48657C20.6144 8.58857 21.1924 9.07151 21.4104 9.74951C21.6264 10.4195 21.4444 11.1404 20.9344 11.6304Z" fill="#FFF400"/>
                                        </svg>
                                    <p class="text-sm font-poppins font-medium text-[#C5BD00] ml-1">{{$genre['vote_average']}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <div class="col-span-2 w-full"></div>
        </div>
    </main>
    {{-- <div class="grid grid-cols-2 gap-6 mt-10">
        @foreach ($data as $movie)
            <div class="bg-blue-100 rounded-[2rem] shadow-lg shadow-blue-200 overflow-hidden md:w-full">
                <div class="md:flex">
                    <div class="md:shrink-0">
                        <img class="h-48 w-full object-cover md:h-full md:w-40" src="https://image.tmdb.org/t/p/w500{{$movie['poster_path']}}"
                            alt="{{$movie['title']}}">
                    </div>
                    <div class="p-8">
                        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">
                            {{ $movie['vote_average'] }}</div>
                        <a href="#"
                            class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">{{ $movie['title'] }}</a>
                        <p class="mt-2 text-slate-500 line-clamp-3">{{ $movie['overview'] }}</p>
                        <div class="mt-2 tracking-wide text-sm text-black font-semibold">
                           <span>Popularity:</span> {{ $movie['popularity'] }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
</body>

</html>
