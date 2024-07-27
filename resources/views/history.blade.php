<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="my-2 p-6 bg-white dark:bg-gray-900 antialiased not-format mb-4">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">History list</h2>
        </div>
        <div class="w-full">
            <form class="flex items-center">
                <label for="simple-search" class="sr-only">Search bookmarked comics</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input type="text" id="simple-search"
                        class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Search bookmarked comics" required="">
                </div>
            </form>
        </div>
        <ul class="border p-2 mt-2 w-full bg-gray-200 rounded-lg space-y-1">
            @for ($i = 100; $i >= 0; $i--)
                <li class="hover:underline  text-white bg-blue-500 p-2 px-4 rounded-lg">
                    <a href="">Title Ch {{ $i }}</a>
                </li>
            @endfor
        </ul>

    </section>
</x-layout>
