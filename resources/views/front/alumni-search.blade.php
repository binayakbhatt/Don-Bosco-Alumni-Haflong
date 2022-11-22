<x-front-layout>

    <div class="bg-gradient-to-t from-pink-500 via-red-500 to-blue-500">
        <div class="container py-16 px-3 w-full mx-auto items-center leading-normal tracking-normal">

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  gap-6 mt-6">

                @foreach ($alumni as $alumnus)
                    <a href="{{ route('alumni-detail', $alumnus->id) }}"
                        class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl 
                        hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

                        @if ($alumnus->profile_picture)
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                                src="{{ asset('images/profile/' . $alumnus->profile_picture) }}" alt="">
                        @else
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                                src="{{ asset('images/misc/blank-profile.png') }}" alt="">
                        @endif

                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $alumnus->first_name }} {{ $alumnus->last_name }}</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 space-x-2"> <i
                                    class="fa-solid fa-graduation-cap"> {{ $alumnus->batch }} </i> <i
                                    class="fa-solid fa-droplet"> {{ $alumnus->blood_group }} </i></p>
                        </div>
                    </a>
                @endforeach

            </div>
            <div class="flex items-center justify-end my-4">
                {{ $alumni->links() }}
            </div>

        </div>
    </div>


</x-front-layout>
