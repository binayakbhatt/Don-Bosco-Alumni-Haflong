<x-app-layout>
    <div class="py-12">
        <div class="flex flex-wrap overflow-hidden xl:-mx-2  p-4">

            <div class="w-full overflow-hidden xl:my-2 xl:px-2 ">
                <div class="flex items-center justify-center">
                    <x-success-message />
                </div>
                <div class="flex  items-center justify-center mx-auto space-x-3 py-4">
                    @if (auth()->user()->profile_picture)
                        <div class="image overflow-hidden">
                            <img class=" h-56 w-56 mx-auto rounded-full"
                                src="{{ asset('images/profile/' . auth()->user()->profile_picture) }}">
                        </div>
                    @else
                        <div class="image overflow-hidden">
                            <img class=" h-56 w-56 mx-auto rounded-full"
                                src="{{ asset('images/misc/profile-icon.png') }}">
                        </div>
                    @endif

                </div>
            </div>
            <div class="w-full overflow-hidden xl:my-2 xl:px-2 ">

                <h1 class="text-gray-900 font-bold text-3xl leading-8 my-1 flex items-center justify-center">
                    {{ auth()->user()->first_name }}
                </h1>
                <div class=" md:flex md:items-center md:justify-center md:space-x-3 py-3">

                    <h3 class="text-gray-600 font-lg text-semibold leading-6 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path
                                d="M11.7 2.805a.75.75 0 01.6 0A60.65 60.65 0 0122.83 8.72a.75.75 0 01-.231 1.337 49.949 49.949 0 00-9.902 3.912l-.003.002-.34.18a.75.75 0 01-.707 0A50.009 50.009 0 007.5 12.174v-.224c0-.131.067-.248.172-.311a54.614 54.614 0 014.653-2.52.75.75 0 00-.65-1.352 56.129 56.129 0 00-4.78 2.589 1.858 1.858 0 00-.859 1.228 49.803 49.803 0 00-4.634-1.527.75.75 0 01-.231-1.337A60.653 60.653 0 0111.7 2.805z" />
                            <path
                                d="M13.06 15.473a48.45 48.45 0 017.666-3.282c.134 1.414.22 2.843.255 4.285a.75.75 0 01-.46.71 47.878 47.878 0 00-8.105 4.342.75.75 0 01-.832 0 47.877 47.877 0 00-8.104-4.342.75.75 0 01-.461-.71c.035-1.442.121-2.87.255-4.286A48.4 48.4 0 016 13.18v1.27a1.5 1.5 0 00-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.661a6.729 6.729 0 00.551-1.608 1.5 1.5 0 00.14-2.67v-.645a48.549 48.549 0 013.44 1.668 2.25 2.25 0 002.12 0z" />
                            <path
                                d="M4.462 19.462c.42-.419.753-.89 1-1.394.453.213.902.434 1.347.661a6.743 6.743 0 01-1.286 1.794.75.75 0 11-1.06-1.06z" />
                        </svg>

                        {{ auth()->user()->batch }}
                    </h3>
                    <h3 class="text-gray-600 font-lg text-semibold leading-6 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        {{ auth()->user()->city }}
                    </h3>
                </div>
            </div>


            <div class="w-full overflow-hidden xl:my-2 xl:px-2 ">
                <div class=" md:flex md:items-center md:justify-center md:space-x-3">
                    <div class=" mt-4 flex items-center justify-center">
                        <a class="block text-white bg-gradient-to-b from-blue-700 via-blue-800 to-gray-900 hover:bg-gradient-to-t from-blue-700 via-blue-800 to-gray-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" href="{{ route('profile.edit') }}">
                            Edit Profile
                        </a>
                    </div>
                    <div class=" mt-4 flex items-center justify-center">
                        <a class="block text-white bg-gradient-to-b from-blue-700 via-blue-800 to-gray-900 hover:bg-gradient-to-t from-blue-700 via-blue-800 to-gray-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" href="{{ route('edit.password') }}">
                            Change Password
                        </a>
                    </div>
                    <div class=" mt-4 flex items-center justify-center">
                        <a class="block text-white bg-gradient-to-b from-blue-700 via-blue-800 to-gray-900 hover:bg-gradient-to-t from-blue-700 via-blue-800 to-gray-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" href="{{ route('edit.passphrase') }}">
                            Change Passphrase
                        </a>
                    </div>
                    @if (auth()->user()->profile_picture == null)
                        <div class=" mt-4 flex items-center justify-center">
                            <div class="flex items-center justify-center">
                                <button type="submit" disabled
                                    class=" text-white bg-blue-700 hover:bg-blue-800  cursor-no-drop
                                    focus:ring-4 focus:outline-none focus:ring-blue-300 
                                    font-medium rounded-lg text-sm px-5 py-2.5 text-center
                                     dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Remove
                                    Profile Picture</button>
                            </div>
                        </div>
                    @else
                        <div class=" mt-4 flex items-center justify-center">
                            <x-form action="{{ route('remove-pic') }}" method="PUT" has-files>
                                @method('PUT')
                                @csrf

                                <input type="hidden" name="profile_picture" value="" />
                                <div class="flex items-center justify-center">
                                    <button type="submit"
                                        class="block text-white bg-gradient-to-b from-blue-700 via-blue-800 to-gray-900 hover:bg-gradient-to-t from-blue-700 via-blue-800 to-gray-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Remove
                                        Profile Picture</button>
                                </div>
                            </x-form>
                        </div>
                    @endif

                </div>

            </div>

            <div class="w-full p-2 overflow-hidden xl:my-2 xl:px-2">

                <div
                    class="px-10 py-6 rounded-xl bg-gradient-to-br from-pink-500 via-red-500 to-yellow-500 md:col-span-2 shadow-lg">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                clip-rule="evenodd" fill="white" />
                        </svg>

                        <span class="tracking-wide text-white">General Information</span>
                    </div>
                    <div class="text-white pt-2 my-4">
                        <div class="grid md:grid-cols-3 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">First Name</div>
                                <div class="px-4 py-2">{{ auth()->user()->first_name }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Middle Name</div>
                                <div class="px-4 py-2">{{ auth()->user()->middle_name }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Last Name</div>
                                <div class="px-4 py-2">{{ auth()->user()->last_name }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email</div>
                                <div class="px-4 py-2">{{ auth()->user()->email }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Contact No.</div>
                                <div class="px-4 py-2">{{ auth()->user()->phone }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Birthday</div>
                                @if (auth()->user()->dob)
                                    <div class="px-4 py-2">
                                        {{ Carbon\Carbon::parse(auth()->user()->dob)->format('d-m-Y') }}
                                    </div>
                                @endif

                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Occupation</div>
                                <div class="px-4 py-2">{{ auth()->user()->occupation }}</div>
                            </div>

                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">City</div>
                                <div class="px-4 py-2">{{ auth()->user()->city }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">State</div>
                                <div class="px-4 py-2">{{ auth()->user()->state }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Country</div>
                                <div class="px-4 py-2">{{ auth()->user()->country }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Pin code</div>
                                <div class="px-4 py-2">{{ auth()->user()->pin_code }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full p-2 overflow-hidden xl:my-2 xl:px-2">
                <div
                    class="px-10 py-6 rounded-xl bg-gradient-to-br from-pink-500 via-red-500 to-yellow-500 md:col-span-2 shadow-lg">
                    <div class="flex items-center space-x-2 font-semibold text-white leading-8 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                clip-rule="evenodd" fill="white" />
                        </svg>

                        <span class="tracking-wide">About me</span>
                    </div>
                    <p class="text-white text-base my-4 text-justify">
                        {{ auth()->user()->aboutme }}
                    </p>
                </div>
            </div>

        </div>

    </div>

</x-app-layout>
