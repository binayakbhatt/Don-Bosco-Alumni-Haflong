<x-front-layout>
    <div class="py-12">
        <div class="flex flex-wrap overflow-hidden xl:-mx-2  px-4 pt-12 pb-4">

            <div class="w-full overflow-hidden xl:my-2 xl:px-2 ">

                <div class="space-x-2 p-4">
                    @foreach ($news as $article)
                        <div class="max-w-full bg-white border border-gray-200 rounded-lg shadow-md mb-4">

                            <div class="p-5">
                                <div href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-indigo-900 ">
                                        {{ $article->headline }}</h5>
                                </div>
                                <p class="mb-3 font-normal text-justify text-gray-700">
                                    {{ Str::substr($article->body, 0, 300) }}
                                </p>
                                <a href="{{ route('news-detail', $article->slug) }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center 
                                    text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Read more
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="flex items-center justify-end my-4">
                    {{ $news->links() }}
                </div>
            </div>
        </div>
    </div>
</x-front-layout>
