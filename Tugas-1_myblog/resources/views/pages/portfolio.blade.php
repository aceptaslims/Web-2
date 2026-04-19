@extends('layouts.main')

@section('content')
<div class="mt-12 mb-20">
    <div class="text-center mb-16">
        <h2 class="text-4xl font-extrabold text-slate-900 mb-4 tracking-tight">Portofolio Proyek</h2>
        <div class="h-1.5 w-20 bg-indigo-600 mx-auto rounded-full"></div>
        <p class="text-slate-500 mt-6 text-lg max-w-2xl mx-auto">
            Kumpulan proyek pilihan yang menunjukkan dedikasi saya dalam pengembangan perangkat lunak dan solusi sistem.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        @foreach($projects as $project)
            <div class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-slate-100 flex flex-col transform hover:-translate-y-2">
                
                <div class="relative h-48 bg-slate-50 overflow-hidden flex items-center justify-center border-b border-slate-50">
                    <div class="absolute inset-0 opacity-10 bg-gradient-to-br from-indigo-500 to-purple-600"></div>
                    <div class="z-10 bg-white/80 backdrop-blur-sm p-4 rounded-2xl shadow-sm border border-white">
                         <span class="text-5xl font-black text-indigo-600 opacity-80 select-none">
                             {{ substr($project['title'], 0, 1) }}
                         </span>
                    </div>
                    
                    <div class="absolute inset-0 bg-indigo-600/90 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="text-white font-bold border-2 border-white px-6 py-2 rounded-full transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            Lihat Detail
                        </span>
                    </div>
                </div>

                <div class="p-8 flex-grow">
                    <span class="text-[10px] font-bold tracking-widest text-indigo-500 uppercase mb-3 block">
                        {{ $project['title'] == 'Bicycle Tracker' ? 'Simulation' : 'Web System' }}
                    </span>
                    
                    <h3 class="text-2xl font-bold text-slate-800 mb-4 group-hover:text-indigo-600 transition-colors">
                        {{ $project['title'] }}
                    </h3>
                    
                    <p class="text-slate-600 leading-relaxed text-sm mb-6">
                        {{ $project['desc'] }}
                    </p>
                </div>

                <div class="px-8 py-4 bg-slate-50 border-t border-slate-100 flex justify-between items-center">
                    <div class="flex space-x-2">
                        <div class="w-2 h-2 rounded-full bg-green-400"></div>
                        <span class="text-[11px] text-slate-400 font-medium">Selesai</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-300 group-hover:text-indigo-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection