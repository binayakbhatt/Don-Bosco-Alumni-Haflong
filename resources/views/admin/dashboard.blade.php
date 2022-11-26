<x-app-layout>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"></div>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-12 bg-white border-b border-gray-200">
                    <div class="max-w-7xl mx-auto py-6">
                        <h2 class="flex items-center justify-center font-bold text-4xl text-blue-800 leading-tight">
                            Admin Dashboard
                        </h2>
                    </div>
                    <div class=" grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4  gap-14 mt-6 px-24">

                        <a href="{{ route('user.index') }}"
                            class="block  max-w-sm p-6 bg-white border border-gray-200 
                            rounded-lg shadow-lg hover:bg-gray-100 hover:scale-105">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-500 text-center">Alumni</h5>
                            <p class="font-normal text-blue-700 text-md md:text-6xl text-center">{{ $alumni }}</p>
                        </a>
                        <a href="{{ route('news.index') }}"
                            class="block max-w-sm p-6 bg-white border border-gray-200 
                             rounded-lg shadow-lg hover:bg-gray-100 hover:scale-105">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-500 text-center">News</h5>
                            <p class="font-normal text-blue-700 text-md md:text-6xl text-center">{{ $news }}</p>
                        </a>
                        <a href="#"
                            class="block  max-w-sm p-6 bg-white border border-gray-200 
                             rounded-lg shadow-lg hover:bg-gray-100 hover:scale-105">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-500 text-center">Event</h5>
                            <p class="font-normal text-blue-700 text-md md:text-6xl text-center">2</p>
                        </a>
                        <a href="#"
                            class="block   max-w-sm p-6 bg-white border border-gray-200 
                             rounded-lg shadow-lg hover:bg-gray-100 hover:scale-105">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-500 text-center">Blog</h5>
                            <p class="font-normal text-blue-700 text-md md:text-6xl text-center">180</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
