<x-app-layout>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"></div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-12 bg-white border-b border-gray-200">
                    <div class="max-w-7xl mx-auto py-6">
                        <div class="flex items-center justify-center">
                            <x-success-message />
                        </div>
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add News
                        </h3>
                        <x-form action="{{ route('news.store') }}" method="POST" has-files>
                            @csrf
                            @method('POST')

                            <div class="mb-6">
                                <label for="date"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date *</label>
                                <input type="date" id="date" name="date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="01/01/0000" required>
                                <x-input-error :messages="$errors->get('date')" class="mt-2" />
                            </div>
                            <div class="mb-6">
                                <label for="headline"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Headline
                                    *</label>
                                <input type="headline" id="headline" name="headline"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="News Headline" required>
                                <x-input-error :messages="$errors->get('headline')" class="mt-2" />
                            </div>
                            <div class="mb-6">
                                <label for="body"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body
                                    *</label>
                                <textarea type="text" id="body" name="body" rows="10"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="News content..."></textarea>
                                <x-input-error :messages="$errors->get('body')" class="mt-2" />
                            </div>
                            <div class="mb-6">
                                <x-input-label for="image" :value="__('Image')"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="file_input" />
                                <x-input name="image" type="file"
                                    class="block w-full text-sm text-gray-900 border border-gray-300 
                                rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700
                                 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="file_input_help" id="file_input" type="file" />
                                <p class="mt-1 text-sm text-gray-700 dark:text-gray-300" id="passphrase_help">Only JPG
                                    &
                                    PNG allowed. Maximum size : 2 MB</p>
                                <x-error field="image" class="text-red-500" />
                            </div>

                            <div class="flex items-center justify-end">
                                <button type="submit"
                                    class=" text-white bg-blue-700 hover:bg-blue-800 
                                    focus:ring-4 focus:outline-none focus:ring-blue-300 
                                    font-medium rounded-lg text-sm px-5 py-2.5 text-center
                                     dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Save </button>
                            </div>

                        </x-form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
