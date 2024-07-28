<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-filter :filters="$filters"></x-filter>
    <section class="flex flex-wrap justify-center antialiased gap-x-5 gap-y-5">
        @forelse ($comics as $comic)
            <div class="w-60 bg-gray-600 rounded-lg shadow-lg relative overflow-hidden">
                <a href="/comics/{{ $comic->slug_title }}">
                    <img class="mx-auto w-full h-full rounded-lg object-cover" src="{{ $comic->cover }}"
                        alt="Bonnie Avatar">
                    <div class="absolute top-2 right-2">
                        <x-icon name="flag-country-{{ $comic->comics_type->code }}" class="w-6 h-6" />
                    </div>
                    <div
                        class="absolute bottom-2 space-y-1 left-2 text-white drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]">
                        <span class="bg-black text-xs rounded-lg font-bold p-1">
                            {{ $comic->comics_type->name }}</span>
                        <h3 class="font-medium text-sm tracking-tight block">
                            {{ Str::limit($comic->title, 30) }}
                        </h3>
                        <h3 class="text-xs font-light">Chapter {{ $comic->chapters->count() }}</h3>
                    </div>
                    <div
                        class="absolute inset-0 rounded-lg bg-black opacity-0 hover:opacity-25 transition-opacity duration-300">
                    </div>
                </a>
            </div>
        @empty
            <p>No comics found.</p>
        @endforelse
        {{ $comics->links() }}
    </section>

    <!-- Main modal -->

</x-layout>
