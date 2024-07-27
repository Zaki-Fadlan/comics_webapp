<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>Home</title>
</head>

<body class="h-full">
    <div class="min-h-full">

        <x-navbar></x-navbar>

        {{-- <x-header>{{ $title }}</x-header> --}}
        <main class="mx-auto max-w-6xl px-10">
            {{ $slot }}
        </main>

    </div>
    <footer class="my-8 p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">
        <div class="mx-auto max-w-screen-xl text-center">

            <p class="my-6 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Officia, adipisci. Ipsam, magnam fugiat! Eveniet amet voluptate incidunt? Officiis, distinctio
                ratione.</p>

            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2021-2024 <a href="#"
                    class="hover:underline">Name</a>. All Rights Reserved.</span>
        </div>
    </footer>
</body>

</html>
