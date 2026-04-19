@extends('layouts.main')

@section('content')
<div class="bg-white rounded-xl shadow-sm p-8 max-w-4xl mx-auto mt-10">
    <h2 class="text-3xl font-bold text-slate-900 mb-6 border-b pb-2 border-slate-200">Tentang Saya</h2>
    <div class="flex flex-col md:flex-row gap-8 items-center">
        <div class="w-48 h-48 rounded-full shadow-md overflow-hidden border-4 border-white flex items-center justify-center">
    <img src="{{ asset('acepnew.jpeg') }}" alt="Foto Profil Saya" class="w-full h-full object-cover">
</div>
        <div class="flex-1">
            <p class="text-slate-600 leading-relaxed mb-4">
                Saya adalah mahasiswa dan pengembang perangkat lunak yang bersemangat dalam memecahkan masalah melalui kode. Saya memiliki minat kuat pada rekayasa perangkat lunak, perancangan basis data, dan dokumentasi sistem yang terstruktur.
            </p>
            <p class="text-slate-600 leading-relaxed">
                Fokus utama saya saat ini adalah menciptakan pengalaman pengguna (HCI) yang baik dan mengelola komunikasi data dengan aman dan cepat.
            </p>
        </div>
    </div>
</div>
@endsection