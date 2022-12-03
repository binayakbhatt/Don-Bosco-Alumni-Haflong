<x-front-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-12 bg-white border-b border-gray-200">
                    <div class="max-w-7xl mx-auto py-6">
                        <section class="bg-white">
                            <div
                                class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                                <div class="font-light text-gray-700 sm:text-lg ">
                                    <h2
                                        class="mb-4 text-4xl tracking-tight font-extrabold 
                                        text-gray-900 text-justify">
                                        {{ $news_detail->headline }}
                                    </h2>
                                    <h5 class="text-gray-900 text-xl font-medium mb-2">
                                        {{ Carbon\Carbon::parse($news_detail->date)->format('d-m-Y') }}</h5>
                                    <p class="mb-4 text-justify">{{ $news_detail->body }}</p>
                                </div>
                                <div class="grid grid-cols-1 gap-4 mt-8">
                                    @if ($news_detail->image_link)
                                        <img src="{{ asset('images/news/' . $news_detail->image_link) }}"
                                            alt="{{ $news_detail->slug }}" class="w-full rounded-lg">
                                    @endif
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-front-layout>
