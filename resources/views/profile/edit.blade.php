<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex items-center justify-center">
                        <x-success-message />
                    </div>

                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Profile
                    </h3>

                    <form action="{{ route('profile.update') }}" method="POST">

                        @method('PUT')
                        @csrf
                        <div class="grid gap-6 grid-cols-1 md:grid-cols-3 md:grid-rows-1">
                            <div class="mb-6">
                                <label for="first_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name
                                </label>
                                <input type="text" id="first_name" name="first_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    value="{{ auth()->user()->first_name }}">
                                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                            </div>
                            <div class="mb-6">
                                <label for="middle_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Middle Name
                                </label>
                                <input type="text" id="middle_name" name="middle_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    value="{{ auth()->user()->middle_name }}">
                                <x-input-error :messages="$errors->get('second_name')" class="mt-2" />
                            </div>
                            <div class="mb-6">
                                <label for="last_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name
                                </label>
                                <input type="text" id="last_name" name="last_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    value="{{ auth()->user()->last_name }}">
                                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                            </div>
                        </div>
                        <div class="grid gap-6 grid-cols-1 md:grid-cols-3 md:grid-rows-1">

                            <div class="mb-6">
                                <label for="dob"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of Birth
                                </label>
                                <input type="date" id="dob" name="dob"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    value="{{ auth()->user()->dob->format('Y-m-d') }}">
                                <x-input-error :messages="$errors->get('dob')" class="mt-2" />
                            </div>

                            <div class="mb-6">
                                <label for="phone"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact No.
                                </label>
                                <input type="number" id="phone" name="phone"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    value="{{ auth()->user()->phone }}">
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>
                            <div class="mb-6">
                                <label for="occupation"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Occupation
                                </label>
                                <input type="text" id="occupation" name="occupation"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    value="{{ auth()->user()->occupation }}">
                                <x-input-error :messages="$errors->get('occupation')" class="mt-2" />
                            </div>
                        </div>
                        <div class="grid gap-6 grid-cols-1 md:grid-cols-3 md:grid-rows-1">
                            <div class="mb-6">
                                <label for="city"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City *
                                </label>
                                <input type="text" id="city" name="city" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    value="{{ auth()->user()->city }}">
                                <x-input-error :messages="$errors->get('city')" class="mt-2" />
                            </div>
                            <div class="mb-6">
                                <label for="state"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">State
                                </label>
                                <input type="text" id="state" name="state"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    value="{{ auth()->user()->state }}">
                                <x-input-error :messages="$errors->get('state')" class="mt-2" />
                            </div>
                            <div class="mb-6">
                                <label for="country"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country
                                </label>
                                <input type="text" id="country" name="country"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    value="{{ auth()->user()->country }}">
                                <x-input-error :messages="$errors->get('country')" class="mt-2" />
                            </div>
                        </div>
                        <div class="grid gap-6 grid-cols-1 md:grid-cols-3 md:grid-rows-1">
                            <div class="mb-6">
                                <label for="pin_code"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pin code
                                </label>
                                <input type="number" id="pin_code" name="pin_code"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    value="{{ auth()->user()->pin_code }}">
                                <x-input-error :messages="$errors->get('pin_code')" class="mt-2" />
                            </div>
                        </div>
                        <div class="grid gap-6 grid-cols-1 md:grid-cols-1 md:grid-rows-1">
                            <div class="mb-6">
                                <label for="aboutme"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">About Me
                                </label>
                                <textarea type="text" id="aboutme" name="aboutme" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Write about yourself...">{{ auth()->user()->aboutme }}</textarea>
                                <x-input-error :messages="$errors->get('aboutme')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end">
                            <button type="submit"
                                class=" text-white bg-blue-700 hover:bg-blue-800 
                                    focus:ring-4 focus:outline-none focus:ring-blue-300 
                                    font-medium rounded-lg text-sm px-5 py-2.5 text-center
                                     dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Update
                                Profile</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--Change Profile Picture-->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-6">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Change Profile Picture
                    </h3>

                    <x-form action="{{ route('profile-pic.update') }}" method="PUT" has-files>
                        @method('PUT')
                        @csrf
                        <div class="mb-6">
                            <x-input-label for="profile_picture" :value="__('Profile Picture')"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="file_input" />
                            <x-input name="profile_picture" type="file" required
                                class="block w-full text-sm text-gray-900 border border-gray-300 
                                rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700
                                 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="file_input_help" id="file_input" type="file" />
                            <x-error field="profile_picture" class="text-red-500" />
                        </div>
                        <div class="flex items-center justify-end">
                            <button type="submit"
                                class=" text-white bg-blue-700 hover:bg-blue-800 
                                    focus:ring-4 focus:outline-none focus:ring-blue-300 
                                    font-medium rounded-lg text-sm px-5 py-2.5 text-center
                                     dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Change
                                Profile Picture</button>
                        </div>
                    </x-form>
                </div>
            </div>
            {{-- <!--Remove Profile Picture-->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-6">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Remove Profile Picture
                    </h3>

                    <x-form action="{{ route('remove-pic') }}" method="PUT" has-files>
                        @method('PUT')
                        @csrf

                        <input type="hidden" name="profile_picture" value="" />
                        <div class="flex items-center justify-center">
                            <button type="submit"
                                class=" text-white bg-blue-700 hover:bg-blue-800 
                                    focus:ring-4 focus:outline-none focus:ring-blue-300 
                                    font-medium rounded-lg text-sm px-5 py-2.5 text-center
                                     dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Remove
                                Profile Picture</button>
                        </div>
                    </x-form>
                </div>
            </div> --}}
        </div>
    </div>

</x-app-layout>
