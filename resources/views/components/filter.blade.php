@props(['filters'])
<section class="my-2 px-6 antialiased not-format">
    <form>
        <div class="flex w-full items-center">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                        viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <input type="text"
                    class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Search" autocomplete="off" type="search" id="search" name="search">
            </div>
        </div>
        {{-- filter dropdowns --}}
        <div class="flex flex-wrap py-2 gap-x-2 gap-y-2">
            <x-filter-dropdown name="genres[]" :request="request('genres', [])" :data="$filters['genres']">Genre</x-filter-dropdown>
            <x-filter-dropdown name="types[]" :request="request('types', [])" :data="$filters['types']">Type</x-filter-dropdown>
        </div>
        <button
            class="block w-full text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
            type="submit">
            Search
        </button>
    </form>
</section>
