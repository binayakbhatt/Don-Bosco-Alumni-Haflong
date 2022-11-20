<x-app-layout>

    <div class="py-12 mt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex items-center justify-center">
                        <x-success-message />
                    </div>
                    <div class="py-6 px-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Change Password
                        </h3>
                        <form class="space-y-6" action="{{ route('change.password') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div x-data="{
                                showPassword: false,
                                confirmPassword: false,
                                showPassphrase: false,
                            }">
                                {{-- <div class="mt-4">
                                    <x-input-label for="passphrase" :value="__('Passphrase')" />

                                    <x-text-input id="passphrase" class="block mt-1 w-full" type="password"
                                        name="passphrase" :value="old('passphrase')" required />
                                    <x-input-error :messages="$errors->get('passphrase')" class="mt-2" />
                                </div> --}}

                                <!--Passphrase-->
                                <div class="mt-4">
                                    <x-input-label for="passphrase" :value="__('Passphrase')" />

                                    <div class="mt-2 relative ">
                                        <input id="passphrase"
                                            class="block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                            x-bind:type="showPassphrase ? 'text' : 'password'" name="passphrase"
                                            value="{{ old('passphrase') }}" required />
                                        <div x-on:click="showPassphrase=!showPassphrase"
                                            class="absolute inset-y-0 right-0 p-3 flex item-center cursor-pointer">
                                            <i class="fa"
                                                :class="showPassphrase ? '-solid fa-eye' : '-solid fa-eye-slash'"></i>
                                        </div>
                                    </div>
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="passphrase_help">Please
                                        Note down your
                                        passphrase in a secure location.</p>
                                    <x-input-error :messages="$errors->get('passphrase')" class="mt-2" />
                                </div>
                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" />


                                    <div class="mt-2 relative ">
                                        <input id="password"
                                            class="block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                            x-bind:type="showPassword ? 'text' : 'password'" name="password" required
                                            autocomplete="new-password" />
                                        <div x-on:click="showPassword=!showPassword"
                                            class="absolute inset-y-0 right-0 p-3 flex item-center cursor-pointer">
                                            <i class="fa"
                                                :class="showPassword ? '-solid fa-eye' : '-solid fa-eye-slash'"></i>
                                        </div>
                                    </div>
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="passphrase_help">
                                        Password
                                        must be
                                        alpha-numeric and atleast 8 characters long.</p>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />


                                    <div class="mt-2 relative ">
                                        <input id="password_confirmation"
                                            class="block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                            x-bind:type="confirmPassword ? 'text' : 'password'"
                                            name="password_confirmation" required />
                                        <div x-on:click="confirmPassword=!confirmPassword"
                                            class="absolute inset-y-0 right-0 p-3 flex item-center cursor-pointer">
                                            <i class="fa"
                                                :class="confirmPassword ? '-solid fa-eye' : '-solid fa-eye-slash'"></i>
                                        </div>
                                    </div>

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                {{-- <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" />

                                    <x-text-input id="password" class="block mt-1 w-full" type="password"
                                        name="password" required autocomplete="new-password" />
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="passphrase_help">
                                        Password
                                        must be
                                        alpha-numeric and atleast 8 characters long.</p>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                        name="password_confirmation" required />

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div> --}}

                                <div class="flex items-center justify-end mt-4">
                                    <button type="submit"
                                        class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Change
                                        Password</button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>

</x-app-layout>
