@props(['request', 'data'])
<div class="flex">
    <button id="dropdownDefault" data-dropdown-toggle="dropdown_{{ $slot }}"
        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
        type="button">
        {{ $slot }}
        <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
            </path>
        </svg>
    </button>
    <div id="dropdown_{{ $slot }}" class="z-10 hidden w-56 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
        <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
            @forelse ($data as $item)
                <li class="flex items-center">
                    <input id="{{ $item->name }}" {{ in_array($item->id, (array) $request) ? 'checked' : '' }}
                        type="checkbox" value="{{ $item->id }}"
                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                        {{ $attributes }} />

                    <label for="{{ $item->name }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                        {{ $item->name }}
                    </label>
                </li>
            @empty
                <p>No comics found.</p>
            @endforelse
        </ul>
    </div>
</div>
