<nav class="bg-white" x-data="{open:false}">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">

            <!-- Boton de menu movil. -->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button x-on:click="open = true" type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed. -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon when menu is open. -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <!-- LOGOTIPO. -->
                <a href="/" class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-8 w-auto"
                        src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
                    <img class="hidden lg:block h-8 w-auto"
                        src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg"
                        alt="Workflow">
                </a>
                <!-- MENU DE NAVEGACION O LISTADO DE ELEMENTOS. -->
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/dashboard"
                            class="text-base font-medium text-gray-500 hover:text-gray-900 font-bold px-3 py-2">Dashboard</a>

                        <a href=""
                            class="text-base font-medium text-gray-500 hover:text-gray-900 font-bold px-3 py-2">Lorem</a>
                        <a href=""
                            class="text-base font-medium text-gray-500 hover:text-gray-900 font-bold px-3 py-2">Ipsum</a>

                        <div x-data="{open:false}" class="relative">
                            <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                            <button x-on:click="open = true" type="button"
                                class="text-gray-500 group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 font-bold px-3 py-2"
                                aria-expanded="false">
                                <span>Solutions</span>
                                <!-- Heroicon name: solid/chevron-down-->
                                <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!-- 'Solutions' flyout menu, show/hide based on flyout menu state.-->
                            <div x-show="open" x-on:click.away="open = false"
                                class="absolute z-10 -ml-4 mt-3 transform px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                                <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                    <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                        <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <!-- Heroicon name: outline/chart-bar -->
                                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                            </svg>
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900 font-bold">
                                                    Analytics
                                                </p>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Get a better understanding of where your traffic is coming from.
                                                </p>
                                            </div>
                                        </a>

                                        <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <!-- Heroicon name: outline/cursor-click -->
                                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                            </svg>
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900 font-bold">
                                                    Engagement
                                                </p>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Speak directly to your customers in a more meaningful way.
                                                </p>
                                            </div>
                                        </a>

                                        <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <!-- Heroicon name: outline/shield-check -->
                                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                            </svg>
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900 font-bold">
                                                    Security
                                                </p>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Your customers&#039; data will be safe and secure.
                                                </p>
                                            </div>
                                        </a>

                                        <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <!-- Heroicon name: outline/view-grid -->
                                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                            </svg>
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900 font-bold">
                                                    Integrations
                                                </p>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Connect with third-party tools that you&#039;re already using.
                                                </p>
                                            </div>
                                        </a>

                                        <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <!-- Heroicon name: outline/refresh -->
                                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                            </svg>
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900 font-bold">
                                                    Automations
                                                </p>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Build strategic funnels that will drive your customers to convert
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div
                                        class="px-5 py-5 bg-gray-50 space-y-6 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
                                        <div class="flow-root">
                                            <a href="#"
                                                class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                                                <!-- Heroicon name: outline/play -->
                                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                <span class="ml-3 font-bold">Watch Demo</span>
                                            </a>
                                        </div>

                                        <div class="flow-root">
                                            <a href="#"
                                                class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                                                <!-- Heroicon name: outline/phone -->
                                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                </svg>
                                                <span class="ml-3 font-bold">Contact Sales</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div x-data="{open:false}" class="relative">
                            <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                            <button x-on:click="open = true" type="button"
                                class="text-gray-500 group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 px-3 py-2"
                                aria-expanded="false">
                                <span class="font-bold">More</span>
                                <!-- a Heroicon name: solid/chevron-down -->
                                <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!--'More' flyout menu, show/hide based on flyout menu state-->
                            <div x-show="open" x-on:click.away="open = false"
                                class="absolute z-10 left-1/2 transform -translate-x-1/2 mt-3 px-2 w-screen max-w-md sm:px-0">
                                <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                    <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                        <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <!-- Heroicon name: outline/support -->
                                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900 font-bold">
                                                    Help Center
                                                </p>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Get all of your questions answered in our forums or contact support.
                                                </p>
                                            </div>
                                        </a>

                                        <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <!-- Heroicon name: outline/bookmark-alt -->
                                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900 font-bold">
                                                    Guides
                                                </p>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Learn how to maximize our platform to get the most out of it.
                                                </p>
                                            </div>
                                        </a>

                                        <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <!-- Heroicon name: outline/calendar -->
                                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900 font-bold">
                                                    Events
                                                </p>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    See what meet-ups and other events we might be planning near you.
                                                </p>
                                            </div>
                                        </a>

                                        <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <!-- Heroicon name: outline/shield-check -->
                                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                            </svg>
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900 font-bold">
                                                    Security
                                                </p>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Understand how we take your privacy seriously.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="px-5 py-5 bg-gray-50 sm:px-8 sm:py-8">
                                        <div>
                                            <h3
                                                class="text-sm tracking-wide font-medium text-gray-500 uppercase font-bold">
                                                Recent Posts
                                            </h3>
                                            <ul class="mt-4 space-y-4">
                                                <li class="text-base truncate">
                                                    <a href="#"
                                                        class="font-medium text-gray-900 hover:text-gray-700 font-bold">
                                                        Boost your conversion rate
                                                    </a>
                                                </li>

                                                <li class="text-base truncate">
                                                    <a href="#"
                                                        class="font-medium text-gray-900 hover:text-gray-700 font-bold">
                                                        How to use search engine optimization to drive traffic to your
                                                        site
                                                    </a>
                                                </li>

                                                <li class="text-base truncate">
                                                    <a href="#"
                                                        class="font-medium text-gray-900 hover:text-gray-700 font-bold">
                                                        Improve your customer experience
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mt-5 text-sm">
                                            <a href="#"
                                                class="font-medium text-indigo-600 hover:text-indigo-500 font-bold">
                                                View all
                                                posts <span aria-hidden="true">&rarr;</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            @auth
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                    <!-- BOTON DE NOTIFICACIONES. -->
                    <button
                        class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        <span class="sr-only">View notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>

                    <!-- Profile dropdown -->
                    <div class="ml-3 relative" x-data="{open:false}">

                        <div>
                            <button x-on:click="open = true" type="button"
                                class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                id="user-menu" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
                            </button>
                        </div>

                        <!-- Dropdown menu, show/hide based on menu state. -->
                        <div x-show="open" x-on:click.away="open = false"
                            class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                            <a href="{{ route('profile.show') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Tu
                                Perfil</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                role="menuitem">Settings</a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem"
                                    onclick="event.preventDefault();
                                                                                                                                                                                this.closest('form').submit();">Cerrar
                                    Sesión</a>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}"
                    class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900 font-bold">
                    Login
                </a>

                <a href="{{ route('register') }}"
                    class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 font-bold">
                    Register
                </a>

            @endauth

        </div>
    </div>

    <!-- MENU MOVIL. -->
    <div class="sm:hidden" id="mobile-menu" x-show="open" x-on:click.away="open=false">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>
            @foreach ($categorypost as $category)
                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>
</nav>
