<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div x-data="{
                showPassword: false,
                showPassphrase: false,
                confirmPassword: false
            }">
                <!-- First Name -->
                <div class="mt-4">
                    <x-input-label for="first_name" :value="__('First Name')" />

                    <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                        :value="old('first_name')" required autofocus />

                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>
                <!--Middle Name-->
                <div class="mt-4">
                    <x-input-label for="middle_name" :value="__('Middle Name')" />

                    <x-text-input id="middle_name" class="block mt-1 w-full" type="text" name="middle_name"
                        :value="old('middle_name')" />

                    <x-input-error :messages="$errors->get('middle_name')" class="mt-2" />
                </div>
                <!-- Last Name-->
                <div class="mt-4">
                    <x-input-label for="last_name" :value="__('Last Name')" />

                    <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                        :value="old('last_name')" required />

                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />

                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required />

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <!-- Batch-->
                <div class="mt-4">
                    <x-input-label for="batch" :value="__('Batch')" />

                    <x-text-input id="batch" class="block mt-1 w-full" type="number" name="batch"
                        :value="old('batch')" required />

                    <x-input-error :messages="$errors->get('batch')" class="mt-2" />
                </div>
                <!-- City-->
                <div class="mt-4">
                    <x-input-label for="city" :value="__('City')" />

                    <x-text-input id="city" class="block mt-1 w-full" type="text" name="city"
                        :value="old('city')" required />

                    <x-input-error :messages="$errors->get('city')" class="mt-2" />
                </div>

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
                            <i class="fa" :class="showPassphrase ? '-solid fa-eye' : '-solid fa-eye-slash'"></i>
                        </div>
                    </div>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="passphrase_help">Please Note down your
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
                            <i class="fa" :class="showPassword ? '-solid fa-eye' : '-solid fa-eye-slash'"></i>
                        </div>
                    </div>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="passphrase_help">Password must be
                        alpha-numeric and atleast 8 characters long.</p>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />


                    <div class="mt-2 relative ">
                        <input id="password_confirmation"
                            class="block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            x-bind:type="confirmPassword ? 'text' : 'password'" name="password_confirmation" required />
                        <div x-on:click="confirmPassword=!confirmPassword"
                            class="absolute inset-y-0 right-0 p-3 flex item-center cursor-pointer">
                            <i class="fa" :class="confirmPassword ? '-solid fa-eye' : '-solid fa-eye-slash'"></i>
                        </div>
                    </div>

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ml-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
