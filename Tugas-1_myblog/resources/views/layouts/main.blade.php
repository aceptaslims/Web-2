<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Profil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased min-h-screen flex flex-col">

    <nav class="bg-white shadow-md">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="{{ route('home') }}" class="text-xl font-bold text-indigo-600">MyProfile</a>
                <div class="hidden md:flex space-x-6">
                    <a href="{{ route('home') }}" class="hover:text-indigo-500 font-medium transition">Beranda</a>
                    <a href="{{ route('about') }}" class="hover:text-indigo-500 font-medium transition">Tentang</a>
                    <a href="{{ route('skills') }}" class="hover:text-indigo-500 font-medium transition">Keahlian</a>
                    <a href="{{ route('portfolio') }}" class="hover:text-indigo-500 font-medium transition">Portofolio</a>
                    <a href="{{ route('contact') }}" class="hover:text-indigo-500 font-medium transition">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow w-full max-w-6xl mx-auto px-4 py-8">
        @yield('content')
    </main>

    <footer class="bg-slate-900 text-slate-400 py-6 text-center">
        <p>&copy; {{ date('Y') }} Web Profil. All rights reserved.</p>
    </footer>

</body>
</html>