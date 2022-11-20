{{-- <nav
    class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="/" class="flex items-center">
            <img src="{{ asset('images/misc/logo.png') }}" class="h-10 mr-3 sm:h-10" alt="Logo">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Don Bosco Alumni</span>
        </a>

        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="{{ route('landing') }}"
                        class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">News</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Events</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Alumni</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Blog</a>
                </li>

                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">The
                        Team</a>
                </li>
                @if (Auth::check())

                    <li>
                        <a href="{{ route('profile.view') }}"
                            class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Profile
                        </a>
                    </li>
                    @admin
                        <li>
                            <a href="{{ route('dashboard') }}"
                                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Dashboard
                            </a>
                        </li>
                    @endadmin
                @endif
            </ul>
        </div>
        <div class="flex  item center justify-end md:order-2 space-x-2">


            @if (!Auth::check())
                <a class="block text-white bg-gradient-to-b from-blue-700 via-blue-800 to-gray-900 hover:bg-gradient-to-t from-blue-700 via-blue-800 to-gray-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button" href="{{ route('login') }}">
                    Login
                </a>
                <a class="block text-white bg-gradient-to-b from-blue-700 via-blue-800 to-gray-900 hover:bg-gradient-to-t from-blue-700 via-blue-800 to-gray-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button" href="{{ route('register') }}">
                    Register
                </a>
            @else
                <form action="{{ route('logout') }}" method="POST">
                    @csrf

                    <button
                        class="bg-transparent text-black hover:bg-red-900 hover:text-white font-bold py-2 px-4 rounded-full border-black border-solid border-2 ">
                        Logout</button>
                </form>
            @endif



            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>
</nav> --}}

<body x-data="{ navOpen: false, scrolledFromTop: false }" x-init="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
    @scroll.window="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
    :class="{
        'overflow-hidden': navOpen,
        'overflow-scroll': !navOpen
    }">
    <header
        class="
            fixed
            w-full
            bg-white
            flex
            justify-between
            items-center
            px-4
            md:px-12
            transition-all
            duration-200
            h-16
         "
        :class="{ 'h-16': !scrolledFromTop, 'h-14': scrolledFromTop }">
        <a href="/">
            <img src="{{ asset('images/misc/logo.png') }}" alt="Logo"
                class="h-16 transform origin-left transition duration-200"
                :class="{ 'scale-100': !scrolledFromTop, 'scale-75': scrolledFromTop }" />
        </a>
        <nav>
            <button class="md:hidden" @click="navOpen = !navOpen">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>

            </button>
            <ul class="
                  fixed
                  left-0
                  right-0
                  min-h-screen
                  px-4
                  pt-8
                  space-y-4
                  text-black
                  transform
                  transition
                  duration-300
                  translate-x-full
                  md:relative md:flex md:space-x-10 md:min-h-0 md:px-0 md:py-0 md:space-y-0 md:translate-x-0
               "
                :class="{ 'translate-x-full': !navOpen }" :class="{ 'translate-x-0': navOpen }">
                <li class="flex items-center hover:text-blue-700">
                    <a href="/" @click="navOpen = false">Home</a>
                </li>
                <li class="flex items-center hover:text-blue-700">
                    <a href="" @click="navOpen = false">News</a>
                </li>
                <li class="flex items-center hover:text-blue-700">
                    <a href="" @click="navOpen = false">Event</a>
                </li>
                <li class="flex items-center hover:text-blue-700">
                    <a href="" @click="navOpen = false">Blog</a>
                </li>
                <li class="flex items-center hover:text-blue-700">
                    <a href="" @click="navOpen = false">Alumni</a>
                </li>
                <li class="flex items-center hover:text-blue-700">
                    <a href="" @click="navOpen = false">Contact</a>
                </li>
                @if (Auth::check())
                    <li class="flex items-center hover:text-blue-700">
                        <a href="{{ route('profile.view') }}" @click="navOpen = false">Profile</a>
                    </li>
                    <li class="flex items-center hover:text-blue-700">
                        <a href="{{ route('dashboard') }}" @click="navOpen = false">Dashboard</a>
                    </li>
                @endif

                @if (!Auth::check())
                    <li class="flex items-center hover:text-blue-700">
                        <a href="{{ route('login') }}" @click="navOpen = false">Login</a>
                    </li>
                    <li class="flex items-center hover:text-blue-700">
                        <a href="{{ route('register') }}" @click="navOpen = false">Register</a>
                    </li>
                @else
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf

                        <button
                            class="bg-transparent hover:bg-red-900 hover:text-white
                             text-black font-bold py-2 px-4 rounded-full
                               border-black border-solid border-2 hover:border-white ">
                            Logout</button>
                    </form>
                @endif

            </ul>
        </nav>
    </header>

</body>
