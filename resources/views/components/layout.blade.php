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
        <main class="mx-auto py-4 max-w-6xl px-10">
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
    <!-- Tombol Scroll to Top -->
    <button id="scrollToTopBtn"
        class="fixed bottom-5 right-5 w-12 h-12 bg-blue-500 text-white rounded-full flex items-center justify-center shadow-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition-opacity duration-300 opacity-0">
        ↑
    </button>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const scrollToTopBtn = document.getElementById('scrollToTopBtn');

            // Menampilkan tombol saat menggulir ke bawah
            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) { // Menampilkan tombol jika scroll lebih dari 300px
                    scrollToTopBtn.style.opacity = '1';
                } else {
                    scrollToTopBtn.style.opacity = '0';
                }
            });

            // Scroll ke atas saat tombol diklik
            scrollToTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>
