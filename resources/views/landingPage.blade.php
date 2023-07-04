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
</head>

<body class=" bg-[#EAFBF3]">
    <aside class="p-6 min-h-screen flex flex-col justify-between items-center w-60 bg-white">
        {{-- logo website --}}
        <div class="flex">
            <img src="{{asset('logos/film.svg')}}" alt="logo-swirl" class="mr-2">
            <h1 class="text-2xl font-poppins font-semibold text-[#151515]">SwirlMovies</h1>
        </div>

        {{-- card subscription --}}
        <div class="w-full bg-[#2AD587] p-4 rounded-3xl">
            <div class="flex items-center mb-4">
                <div class="bg-[#151515] p-2 rounded-full border-2 border-white">
                    <img src="{{asset('logos/credit-card.svg')}}" alt="subscription-logo">
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
                    <img src="{{asset('logos/plus-square.svg')}}" alt="add-subscription">
                </div>
            </div>
        </div>

        {{-- menu list --}}
        <ul class="flex flex-col items-start w-full font-poppins gap-4">
            <li class="bg-[#2AD587]/20 w-full pl-4 pr-5 py-3 rounded-2xl flex items-center">
                <img src="{{asset('logos/home.svg')}}" alt="home-icon" class="mr-2">
                <a href="#" class="font-medium text-base text-[#151515]">Browse</a>
            </li>
            <li class="group bg-white w-full pl-4 pr-5 py-3 rounded-2xl flex items-center hover:bg-[#EAFBF3]">
                <img src="{{asset('logos/star.svg')}}" alt="home-icon" class="mr-2 opacity-50 group-hover:opacity-100">
                <a href="#" class="font-medium text-base text-[#151515]/50 group-hover:text-[#151515]">Popular</a>
            </li>
            <li class="group bg-white w-full pl-4 pr-5 py-3 rounded-2xl flex items-center hover:bg-[#EAFBF3]">
                <img src="{{asset('logos/filter.svg')}}" alt="home-icon" class="mr-2 opacity-50 group-hover:opacity-100">
                <a href="#" class="font-medium text-base text-[#151515]/50 group-hover:text-[#151515]">Genres</a>
            </li>
            <li class="group bg-white w-full pl-4 pr-5 py-3 rounded-2xl flex items-center hover:bg-[#EAFBF3]">
                <img src="{{asset('logos/folder.svg')}}" alt="home-icon" class="mr-2 opacity-50 group-hover:opacity-100">
                <a href="#" class="font-medium text-base text-[#151515]/50 group-hover:text-[#151515]">Watchlist</a>
            </li>
            <li class="group bg-white w-full pl-4 pr-5 py-3 rounded-2xl flex items-center hover:bg-[#EAFBF3]">
                <img src="{{asset('logos/bookmark.svg')}}" alt="home-icon" class="mr-2 opacity-50 group-hover:opacity-100">
                <a href="#" class="font-medium text-base text-[#151515]/50 group-hover:text-[#151515]">Favorite</a>
            </li>
        </ul>

        {{-- Others --}}
        <div class="w-full">
            {{-- card profile user --}}
            <div class="w-full bg-[#2AD587]/20 p-3 rounded-3xl flex mb-4 border border-[#BAF3D8]">
                <img src="{{asset('images/businessman-holding-cup-4431882.png')}}" alt="user-profil" height="60" width="60" class="">
                <h1 class="font-poppins font-semibold text-sm"><span class="font-medium text-xs text-[#151515]/50">Welcome</span> Andrew! 👋</h1>
            </div>
            <ul class="flex flex-col items-start w-full font-poppins gap-6">
                <li class="group w-full flex items-center pl-4">
                    <img src="{{asset('logos/settings.svg')}}" alt="home-icon" class="mr-2 opacity-50 group-hover:opacity-100">
                    <a href="#" class="font-medium text-base text-[#151515]/50 group-hover:text-[#151515]">Settings</a>
                </li>
                <li class="group w-full flex items-center pl-4">
                    <img src="{{asset('logos/log-out.svg')}}" alt="home-icon" class="mr-2 opacity-50 group-hover:opacity-100">
                    <a href="#" class="font-medium text-base text-[#151515]/50 group-hover:text-[#151515]">Logout</a>
                </li>
            </ul>
        </div>
    </aside>
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
</body>

</html>
