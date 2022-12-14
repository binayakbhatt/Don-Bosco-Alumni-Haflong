<x-app-layout>

    <div class="py-12">
        <div class="flex flex-wrap overflow-hidden xl:-mx-2  px-4 pt-12 pb-4">
            <div class="w-full overflow-hidden xl:my-2 xl:px-2 ">
                <div class="p-12 mt-6 bg-white border-b border-gray-200">



                    <div class="flex items-center justify-center">
                        <x-success-message />
                    </div>
                    <div class="py-6 px-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Change Passphrase
                        </h3>
                        <form class="space-y-6" action="{{ route('change.passphrase') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div x-data="{
                                showPassword: false,
                                showPassphrase: false,
                            }">

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" />

                                    <div class="mt-2 relative ">
                                        <input id="password"
                                            class="block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                            x-bind:type="showPassword ? 'text' : 'password'" name="password" required />
                                        <div x-on:click="showPassword=!showPassword"
                                            class="absolute inset-y-0 right-0 p-3 flex item-center cursor-pointer">
                                            <i class="fa"
                                                :class="showPassword ? '-solid fa-eye' : '-solid fa-eye-slash'"></i>
                                        </div>
                                    </div>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

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

                            </div>



                            <!-- Password -->
                            {{-- <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required />


                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div> --}}

                            {{-- <div class="mt-4">
                                <x-input-label for="passphrase" :value="__('Passphrase')" />

                                <x-text-input id="passphrase" class="block mt-1 w-full" type="text" name="passphrase"
                                    :value="old('passphrase')" required />
                                <x-input-error :messages="$errors->get('passphrase')" class="mt-2" />
                            </div> --}}


                            <div class="flex items-center justify-end">
                                <button type="submit"
                                    class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Change
                                    Passphrase</button>
                            </div>

                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>

</x-app-layout>
