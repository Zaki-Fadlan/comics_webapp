<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="dark:bg-gray-900">
        <div class="mx-auto max-w-screen mb-2">
            <div class="flex flex-cols-6 gap-x-1 overflow-x-auto sm:overflow-x-hidden sm:grid sm:gap-x-2 sm:grid-cols-6">
                @for ($i = 1; $i <= 6; $i++)
                    <a href="#" target="_blank"
                        class="flex-shrink-0 h-[320px] bg-white rounded-lg shadow-sm hover:shadow-lg transition duration-300 mb-4">
                        <div class="relative overflow-hidden">
                            <img class="mx-auto rounded-lg w-[220px] h-[320px] object-cover"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                                alt="Bonnie Avatar">
                            <div class="absolute top-2 right-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                            <div class="absolute bottom-2 left-2 text-white text-shadow-sm">
                                <span class="bg-black text-xs rounded-lg font-bold p-1">MANHWA</span>
                                <h3 class="font-medium tracking-tight block">
                                    Bonnie Green
                                </h3>
                                <h3 class="text-sm font-light">Rating : 7.9 </h3>
                            </div>
                            <div
                                class="absolute inset-0 rounded-lg bg-black opacity-0 hover:opacity-25 transition-opacity duration-300">
                            </div>
                        </div>
                    </a>
                @endfor
            </div>
        </div>
        <div class="w-full lg:space-x-2 lg:flex flex-row">
            <div class="w-full lg:w-3/4 space-y-2">
                <div
                    class="block p-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <a href="#" class="">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Most Popular
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology
                            acquisitions of 2021 so far, in reverse chronological order.</p>
                    </a>
                </div>
                <div
                    class="block p-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <a href="#" class="">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">New Update</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology
                            acquisitions of 2021 so far, in reverse chronological order.</p>
                    </a>
                </div>
                <div
                    class="block p-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <a href="#" class="">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">New Comics</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology
                            acquisitions of 2021 so far, in reverse chronological order.</p>
                    </a>
                </div>
            </div>
            <div class="w-full lg:w-1/4 space-y-2">
                <div
                    class="block p-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <a href="#" class="">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Wall Chat
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology
                            acquisitions of 2021 so far, in reverse chronological order.</p>
                    </a>
                </div>
                <div
                    class="block p-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <a href="#" class="">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Join Discord
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology
                            acquisitions of 2021 so far, in reverse chronological order.</p>
                    </a>
                </div>
            </div>
        </div>



    </section>
</x-layout>
