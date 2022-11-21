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
                class="h-12 transform origin-left transition duration-200 py-2"
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
                  bg-blue-500
                  md:bg-transparent
                  min-h-screen
                  px-4
                  pt-4
                  space-y-4
                  text-white
                  md:text-black
                  font-bold
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
