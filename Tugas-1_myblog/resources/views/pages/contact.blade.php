@extends('layouts.main')

@section('content')
<div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-xl shadow-sm">
    <h2 class="text-3xl font-bold text-slate-900 mb-6 text-center">Hubungi Saya</h2>
    <form action="#" method="POST" class="space-y-4">
        <div>
            <label class="block text-slate-700 font-medium mb-1">Nama Lengkap</label>
            <input type="text" class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Masukkan nama...">
        </div>
        <div>
            <label class="block text-slate-700 font-medium mb-1">Email</label>
            <input type="email" class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="nama@email.com">
        </div>
        <div>
            <label class="block text-slate-700 font-medium mb-1">Pesan</label>
            <textarea rows="4" class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Tulis pesan Anda di sini..."></textarea>
        </div>
        <button type="button" class="w-full bg-indigo-600 text-white font-bold py-3 rounded-lg hover:bg-indigo-700 transition">
            Kirim Pesan
        </button>
    </form>
</div>
@endsection