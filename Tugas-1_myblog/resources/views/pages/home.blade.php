@extends('layouts.main')

@section('content')
<div class="relative bg-white rounded-3xl shadow-xl overflow-hidden min-h-[75vh] flex items-center justify-center p-8 mt-10" style="background-image: url('data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 width=%27200%27 height=%27200%27 viewBox=%270 0 100 100%27%3E%3Cpath d=%27M10 10l80 80M10 90L90 10%27 stroke=%27%23F1F5F9%27 stroke-width=%270.5%27 fill=%27none%27/%3E%3C/svg%27%3E'); background-repeat: repeat; background-size: 50px 50px;">
    
    <div class="absolute -top-32 -left-32 w-80 h-80 bg-indigo-100 rounded-full blur-3xl opacity-60"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-fuchsia-100 rounded-full blur-3xl opacity-60"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-48 h-48 bg-sky-100 rounded-full blur-3xl opacity-40"></div>

    <div class="relative flex flex-col items-center justify-center text-center z-10 max-w-4xl mx-auto">
        
        <div class="inline-flex items-center space-x-2 bg-indigo-50 border border-indigo-100 px-5 py-2 rounded-full mb-8 text-indigo-700 shadow-inner">
            <span class="relative flex h-3 w-3">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-indigo-500"></span>
            </span>
            <span class="text-sm font-semibold tracking-wide">Belajar Web Profile Pribadi</span>
        </div>

        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 leading-tight">
            <span class="text-slate-900">Halo, Saya</span>
            <span class="block bg-gradient-to-r from-indigo-600 to-fuchsia-600 bg-clip-text text-transparent transform hover:scale-105 transition duration-500 cursor-default">
                {{-- Data dinamis yang sebelumnya Anda input --}}
                {{-- Ganti 'Acep Taslim S.' jika di Controller data ini dinamis --}}
                Acep Taslim S.
            </span>
        </h1>

        <p class="text-xl md:text-2xl text-slate-700 max-w-3xl mb-12 leading-relaxed">
            Membangun aplikasi web dan merancang struktur data yang efisien adalah hal yang saya sukai. Selamat datang di profil saya.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-5 items-center justify-center">
            <a href="{{ route('portfolio') }}" 
               class="relative inline-flex items-center justify-center group bg-indigo-600 text-white px-10 py-4 rounded-xl font-bold text-lg hover:bg-indigo-700 transition duration-300 shadow-lg hover:shadow-indigo-300 transform hover:-translate-y-1 overflow-hidden">
               
               <span class="absolute right-0 w-8 h-32 -mt-12 transition-all duration-1000 transform translate-x-12 bg-white opacity-10 rotate-12 group-hover:-translate-x-40 ease"></span>
               
               <span>Lihat Portofolio</span>
            </a>

            <a href="{{ route('contact') }}" 
               class="text-indigo-700 font-semibold px-8 py-4 text-lg border-b-2 border-transparent hover:border-indigo-200 transition duration-200">
               Hubungi Saya
            </a>
        </div>
        
    </div>
</div>
@endsection