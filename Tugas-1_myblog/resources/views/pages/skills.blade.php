@extends('layouts.main')

@section('content')
<div class="max-w-6xl mx-auto mt-10 text-center">
    <h2 class="text-3xl font-bold text-slate-900 mb-10">Keahlian Teknis</h2>
    
    
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
        @foreach($skills as $skill)
            <div class="bg-white border border-slate-100 p-6 rounded-xl shadow-sm hover:shadow-lg hover:border-indigo-200 transition duration-300 flex flex-col items-center justify-center">
                
                <div class="w-20 h-20 mb-5 flex items-center justify-center">
                    <img src="{{ asset('icons/' . $skill['icon']) }}" 
                         alt="Ikon {{ $skill['title'] }}" 
                         class="max-w-full max-h-full object-contain">
                </div>
                
                <h3 class="text-lg font-bold text-indigo-900 leading-tight">
                    {{ $skill['title'] }}
                </h3>
            </div>
        @endforeach
    </div>
</div>
@endsection