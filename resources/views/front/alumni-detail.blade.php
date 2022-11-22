<x-front-layout>
    <div class="py-12">
        <div class="flex flex-wrap overflow-hidden xl:-mx-2  px-4 pt-12 pb-4">

            <div class="w-full overflow-hidden xl:my-2 xl:px-2 ">

                <div class="flex  items-center justify-center mx-auto space-x-2 py-4">
                    @if ($alumni_detail->profile_picture)
                        <div class="image overflow-hidden">
                            <img class=" h-56 w-56 mx-auto rounded-xl shadow-xl border-4 border-orange-400"
                                src="{{ asset('images/profile/' . $alumni_detail->profile_picture) }}">
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
                    {{ $alumni_detail->first_name }}
                </h1>
                <div class=" md:flex md:items-center md:justify-center md:space-x-3 py-3">

                    <h3 class=" flex items-center justify-center">
                        <i class="fa-solid fa-graduation-cap">
                            {{ $alumni_detail->batch }}</i>
                    </h3>
                    <h3 class="flex items-center justify-center">
                        <i class="fa-solid fa-location-dot"> {{ $alumni_detail->city }}</i>

                    </h3>
                    <h3 class="flex items-center justify-center">
                        <i class="fa-solid fa-droplet"> {{ $alumni_detail->blood_group }}</i>
                    </h3>
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
                                <div class="px-4 py-2">{{ $alumni_detail->first_name }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Middle Name</div>
                                <div class="px-4 py-2">{{ $alumni_detail->middle_name }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Last Name</div>
                                <div class="px-4 py-2">{{ $alumni_detail->last_name }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email</div>
                                <div class="px-4 py-2">{{ $alumni_detail->email }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Contact No.</div>
                                <div class="px-4 py-2">{{ $alumni_detail->phone }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Birthday</div>
                                @if ($alumni_detail->dob)
                                    <div class="px-4 py-2">
                                        {{ Carbon\Carbon::parse($alumni_detail->dob)->format('d-m-Y') }}
                                    </div>
                                @endif

                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Occupation</div>
                                <div class="px-4 py-2">{{ $alumni_detail->occupation }}</div>
                            </div>

                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">City</div>
                                <div class="px-4 py-2">{{ $alumni_detail->city }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">State</div>
                                <div class="px-4 py-2">{{ $alumni_detail->state }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Country</div>
                                <div class="px-4 py-2">{{ $alumni_detail->country }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Pin code</div>
                                <div class="px-4 py-2">{{ $alumni_detail->pin_code }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Blood Group</div>
                                <div class="px-4 py-2">{{ $alumni_detail->blood_group }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full p-2 overflow-hidden xl:my-2 xl:px-2">
                <div
                    class="px-10 py-6 rounded-xl bg-gradient-to-br from-pink-500 via-red-500 to-yellow-500 md:col-span-2 shadow-lg">
                    <div class="flex items-center space-x-2 font-semibold text-white leading-8 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                clip-rule="evenodd" fill="white" />
                        </svg>

                        <span class="tracking-wide">About me</span>
                    </div>
                    <p class="text-white text-base my-4 text-justify">
                        {{ $alumni_detail->aboutme }}
                    </p>
                </div>
            </div>

        </div>

    </div>

</x-front-layout>
