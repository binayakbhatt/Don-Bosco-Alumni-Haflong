<x-app-layout>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"></div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-12 bg-white border-b border-gray-200">
                    <div class="max-w-7xl mx-auto py-6">
                        <h2 class="flex items-center justify-center font-bold text-4xl text-blue-800 leading-tight">
                            User Dashboard
                        </h2>
                    </div>


                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <div class="flex justify-between items-center pb-4 bg-white dark:bg-gray-900">
                            <form action="{{ route('user.search') }}" method="GET">
                                @csrf
                                @method('GET')
                                <label for="table-search" class="sr-only">Search</label>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input type="text" id="table-search-users mb-3" name="search"
                                        class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Search by first name or batch or city">
                                </div>
                            </form>
                        </div>
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>

                                    <th scope="col" class="py-3 px-6">
                                        Name
                                    </th>

                                    <th scope="col" class="py-3 px-6">
                                        <div class="flex items-center justify-center">
                                            Batch
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        <div class="flex items-center justify-center">
                                            City
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        <div class="flex items-center justify-center">
                                            Email verified
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                        <th scope="row"
                                            class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                            @if ($user->profile_picture)
                                                <img class="w-10 h-10 rounded-full"
                                                    src="{{ asset('images/profile/' . $user->profile_picture) }}"
                                                    alt="Jese image">
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                            @endif
                                            <div class="pl-3">
                                                <div class="text-base font-semibold">{{ $user->first_name }}
                                                    {{ $user->middle_name }} {{ $user->last_name }}</div>
                                                <div class="font-normal text-gray-500">{{ $user->email }}</div>
                                            </div>
                                        </th>
                                        <td class="py-4 px-6">
                                            <div class="flex items-center justify-center">
                                                {{ $user->batch }}
                                            </div>
                                        </td>
                                        <td class="py-4 px-6">
                                            <div class="flex items-center justify-center">
                                                {{ $user->city }}
                                            </div>
                                        </td>
                                        <td class="py-4 px-6">
                                            <div class="flex items-center justify-center">
                                                {{ $user->email_verified_at ? 'Yes' : 'No' }}
                                            </div>
                                        </td>
                                        <td class="py-4 px-6">
                                            <a href="#"
                                                class="font-medium text-blue-600 dark:text-red-500 hover:underline">Delete
                                                User</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <div class="flex items-center justify-end my-4">
                                {{ $users->links() }}
                            </div>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>



</x-app-layout>
