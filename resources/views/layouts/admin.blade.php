<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('assets') }}/dashboard/plugins/fontawesome6/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('assets') }}/dashboard/plugins/bootstrap-5.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('assets') }}/dashboard/css/style.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>

        <div class="flex h-screen w-screen">
            <div class="w-80 bg-gray-300 sidebar dark:bg-slate-800 duration-300">
                <div class="flex items-center m-auto justify-center py-2">
                    <a href="{{route('dashboard')}}">
                        <div>
                            <div class="logo_large duration-300">
                                <img class="w-full logo hidden dark:block px-3 duration-300" src="{{asset('assets/dashboard/images/logo-dark.png')}}" alt="">
                                <img class="w-full logoDark block dark:hidden px-3 duration-300" src="{{asset('assets/dashboard/images/logo.png')}}" alt="">
                            </div>
                            <img class="w-full logo-icon hidden px-3" src="{{asset('assets/dashboard/images/logo-sm.png')}}" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-full bg-blue-400 duration-300 dark:bg-blue-900">
                <div class="sticky flex justify-between items-center bg-gray-400 px-6 py-2 duration-300 dark:bg-sky-950">
                    <div class="flex items-center gap-4 text-white">
                        <button type="button" class="toggleSidebar text-2xl text-white duration-300">
                            <i class="fa-solid fa-bars-staggered"></i>
                        </button>
                        <h2 class="text-2xl text-white">Dashboard</h2>
                    </div>
                    <div class="flex justify-between items-center align-middle gap-4">
                        <div class="screensize">
                            <button type="button"
                                class="compBtn display-none text-2xl text-[#222f50] duration-500 dark:text-white">
                                <i class="fa-solid fa-compress"></i>
                            </button>
                            <button type="button" class="expdBtn text-2xl text-[#222f50] duration-500 dark:text-white">
                                <i class="fa-solid fa-expand"></i>
                            </button>

                        </div>
                        <div class="darkswitch">
                            <button type="button" class="sun text-2xl text-[#222f50] duration-500 dark:text-white">
                                <i class="fa-solid fa-sun"></i>
                            </button>
                            <button type="button" class="moon text-2xl text-[#222f50] duration-500 dark:text-white">
                                <i class="fa-solid fa-moon"></i>
                            </button>
                        </div>
                        <div class="userprofile relative flex items-center">

                            {{-- <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation"
                                class="inline-flex items-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">Dropdown header <svg class="ms-3 h-2.5 w-2.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button> --}}
                            <button type="button" id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class="text-2xl text-[#222f50] duration-500 dark:text-white">
                                <i class="fa-solid fa-user"></i>
                            </button>
    
                            <!-- Dropdown menu -->
                            <div id="dropdownInformation"
                                class="z-10 hidden absolute right-0 top-12 w-52 divide-y divide-gray-100 rounded-lg dark:rounded-lg bg-white dark:bg-slate-800 shadow dark:divide-gray-600">
                                <div class="flex items-center justify-center dark:bg-slate-800 m-auto">
                                    <div class="bg-sky-800 w-16 my-2 rounded-lg overflow-hidden">
                                        <img src="{{asset('assets/dashboard/images/young-man.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="py-2 text-sm text-center text-gray-900 dark:text-white dark:bg-slate-800">
                                    <div>Bonnie Green</div>
                                    <div class="truncate font-medium">name@flowbite.com</div>
                                </div>
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 dark:bg-slate-800"
                                    aria-labelledby="dropdownInformationButton">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <i class="fa-solid fa-gauge-high me-1"></i>
                                            Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <i class="fa-solid fa-gears me-1"></i>
                                            Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <i class="fa-solid fa-sack-dollar me-1"></i>
                                            Earnings</a>
                                    </li>
                                </ul>
                                <div class="py-2 dark:bg-slate-800">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">
                                        <i class="fa-solid fa-right-from-bracket me-1"></i>
                                        Sign out</a>
                                </div>
                            </div>
    
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <script src="{{ asset('assets/dashboard/js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/plugins/bootstrap-5.3.2/js/bootstrap.bundle.min.js') }}"></script>

    </body>

</html>
