<x-app-layout>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"></div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-12 bg-white border-b border-gray-200">
                    <div class="max-w-7xl mx-auto py-6">
                        <h2 class="flex items-center justify-center font-bold text-4xl text-blue-800 leading-tight">
                            News Dashboard
                        </h2>
                    </div>
                    <div class="flex items-center justify-end">
                        <a href="{{ route('news.create') }}"
                            class=" bg-purple-500 hover:bg-purple-700 text-white 
                                                    font-bold py-2 px-4 rounded shadow-lg mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                    </div>

                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">

                        <table class="w-full text-sm text-left text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>

                                    <th scope="col" class="py-3 px-6">
                                        Date
                                    </th>

                                    <th scope="col" class="py-3 px-6">
                                        <div class="flex items-center justify-center">
                                            Headline
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        <div class="flex items-center justify-center">
                                            Body
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        <div class="flex items-center justify-center">
                                            Slug
                                        </div>
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        <div class="flex items-center justify-center">
                                            Action
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($news as $article)
                                    <tr class="bg-white border-b  hover:bg-gray-50 ">

                                        <th scope="row">

                                            <div class="pl-3">
                                                <div class="text-base whitespace-nowrap">
                                                    {{ $article->date->format('d-m-Y') }}
                                                </div>

                                            </div>
                                        </th>
                                        <td class="py-3 px-3">
                                            <div class="flex items-center justify-center">
                                                {{ $article->headline }}
                                            </div>
                                        </td>
                                        <td class="py-3 px-3">
                                            <div class="flex items-center justify-center whitespace-wrap">
                                                {{ Str::substr($article->body, 0, 150) }}
                                            </div>
                                        </td>
                                        <td class="py-3 px-3">
                                            <div class="flex items-center justify-center">
                                                {{ $article->slug }}
                                            </div>
                                        </td>

                                        <td class="py-4 px-6">
                                            <div class="flex items-center justify-end space-x-1">
                                                <a href="{{ route('news.show', $article->slug) }}"
                                                    class=" bg-green-500 hover:bg-green-700 text-white 
                                                    font-bold py-2 px-4 rounded shadow-lg"><svg
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    </svg>
                                                </a>
                                                <a href="{{ route('news.edit', $article->id) }}"
                                                    class=" bg-blue-500 hover:bg-blue-700 text-white 
                                                    font-bold py-2 px-4 rounded shadow-lg"><svg
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                    </svg>
                                                </a>

                                                <form action="{{ route('news.destroy', $article->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                        class=" bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded shadow-lg"
                                                        type="submit"
                                                        onclick="return confirm('This action will delete the News')">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <div class="flex items-center justify-end my-4">
                                {{ $news->links() }}
                            </div>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
</x-app-layout>
