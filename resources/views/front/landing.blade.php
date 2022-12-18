<x-front-layout>

    <div class=" bg-gradient-to-t from-pink-500 via-red-500 to-blue-500">


        <section>
            <div class="py-24 px-4 mx-auto max-w-7xl sm:px-6 md:px-16 lg:px-24 lg:py-24 ">
                <div class="flex flex-wrap items-center mx-auto max-w-7xl">
                    <div class="w-full lg:max-w-lg lg:w-1/2 rounded-xl">
                        <div>
                            <div class="relative w-full max-w-lg">

                                <div class="relative">
                                    <img class="object-cover object-center mx-auto rounded-lg shadow-2xl" alt="hero"
                                        src="{{ asset('images/misc/5235.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-start mt-12 mb-16 text-left lg:flex-grow lg:w-1/2 lg:pl-6 xl:pl-24 md:mb-0 xl:mt-0">
                        <span class="mb-8 text-xs font-bold tracking-widest text-white uppercase"> Ever Greater Ever
                            Brighter
                        </span>
                        <h1
                            class=" mb-8 text-4xl font-bold leading-none tracking-tighter text-white md:text-7xl lg:text-5xl ">
                            Don Bosco Alumni Association, Haflong.</h1>
                        <p class="mb-8 text-base leading-relaxed text-left text-white">Dear Students of Don Bosco
                            School, Haflong</p>
                        <p class="mb-8 text-base leading-relaxed text-white text-justify">This is a unique
                            opprtunity for
                            you to connect with all the alumni of our school. Through this platform you can interact
                            with the alumni and seek guidance from them. The alumni inturn can also share their
                            experience with the upcoming generation of Bosconians and help them in their future
                            endeavours.</p>
                        <div class="mt-0 lg:mt-6 max-w-7xl sm:flex">
                            <div class="mt-3 rounded-lg sm:mt-0">
                                <a href="{{ route('alumni') }}"
                                    class="items-center block px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Alumni</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="border-b py-8">
            <!--Event-->
            <div class="md:flex bg-gray-100 rounded-xl p-4 md:p-4 shadow-lg border border-blue-200 m-4">

                <div class="flex-shrink-0 hidden md:block mt-2">
                    <img
                        src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-event-advertising-kiranshastry-lineal-color-kiranshastry-1.png" />
                </div>
                <div class="md:ml-6">
                    <div>
                        <h3 class="text-2xl text-gray-800 font-semibold"> Alumni Meet</h3>
                    </div>
                    <!--Card Meta -->
                    <div
                        class="flex-col md:flex-row flex md:space-x-3 space-y-1 md:space-y-0 items-start md:items-end my-1">

                        <p class="text-gray-600 flex space-x-1 max-w-max">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm">
                                Event Begins on: 09/12/2022
                            </span>
                        </p>
                        <p class="text-gray-600 flex space-x-1 max-w-max">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm">
                                Event Ends on: 10/12/2022
                            </span>
                        </p>
                    </div>
                    <div class="text-gray-600 my-2 text-justify">
                        Alumni Meet 2022 of Don Bosco School Haflong
                    </div>
                </div>

            </div>
            <div class="md:flex bg-gray-100 rounded-xl p-4 md:p-4 shadow-lg border border-blue-200 m-4">

                <div class="flex-shrink-0 hidden md:block mt-2">
                    <img class="rounded-lg w-56" src="{{ asset('images/misc/blank.jpg') }}">
                </div>
                <!-- Card Body-->
                <div class="md:ml-6">
                    <!--Card Heading -->
                    <div>
                        <h3 class="text-2xl text-gray-800 font-semibold">
                            Latest News
                        </h3>
                    </div>
                    <!--Card Meta -->
                    <div
                        class="flex-col md:flex-row flex md:space-x-3 space-y-1 md:space-y-0 items-start md:items-end my-1">

                        <p class="text-gray-600 flex space-x-1 max-w-max">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm">20/11/2022</span>
                        </p>
                        <p class="text-gray-600 flex space-x-1 max-w-max">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm">Binayak</span>
                        </p>
                    </div>
                    <!--Card Excerpt-->
                    <div class="text-gray-600 my-2 text-justify">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.
                    </div>
                    <div class=" w-full flex items-center justify-end mt-4">
                        <a class="block text-white bg-gradient-to-b from-blue-700 via-blue-800 to-gray-900 hover:bg-gradient-to-t from-blue-700 via-blue-800 to-gray-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" href="">
                            Go to News
                        </a>
                    </div>
                </div>
            </div>
        </section> --}}

        <div class="relative -mt-12 lg:-mt-24">
            <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <path
                            d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                            opacity="0.100000001"></path>
                        <path
                            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                            opacity="0.100000001"></path>
                        <path
                            d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                            id="Path-4" opacity="0.200000003"></path>
                    </g>
                    <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <path
                            d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z">
                        </path>
                    </g>
                </g>
            </svg>
        </div>
    </div>

</x-front-layout>
