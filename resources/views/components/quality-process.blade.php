@php
    $stages = config('velora.purification_stages');
@endphp

<section id="quality" class="py-24 lg:py-32 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-20 space-y-4">
            <div class="inline-flex items-center justify-center gap-3 mb-2">
                <span class="h-[1px] w-8 bg-sky-600"></span>
                <span class="text-sky-800 text-xs font-bold tracking-[0.2em] uppercase">Purity & Laboratory Standards</span>
                <span class="h-[1px] w-8 bg-sky-600"></span>
            </div>
            
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-medium text-slate-900 tracking-tight">
                7-Stage Advanced <br><span class="italic font-serif text-sky-800">Scientific Purification</span>
            </h2>
            <p class="text-slate-500 text-lg leading-relaxed font-light mt-4">
                Raw water undergoes multi-barrier mechanical, chemical, and microbiological purification before automated cleanroom bottling.
            </p>
        </div>

        <!-- 7 Stages Clean Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            @foreach($stages as $stage)
                <div class="bg-slate-50 rounded-[2rem] p-8 flex flex-col justify-between group transition-all duration-500 hover:-translate-y-2 hover:bg-white shadow-[0_4px_20px_rgb(0,0,0,0.02)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] border border-transparent hover:border-slate-100">
                    <div>
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-12 h-12 rounded-full bg-sky-100 text-sky-700 flex items-center justify-center font-serif text-xl font-bold transition-colors duration-500 group-hover:bg-sky-600 group-hover:text-white">
                                {{ $stage['num'] }}
                            </div>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 mb-2">
                            {{ $stage['title'] }}
                        </h3>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">
                            {{ $stage['desc'] }}
                        </p>
                    </div>
                </div>
            @endforeach

            <!-- 8th Quality Assurance Summary Card -->
            <div class="bg-slate-900 text-white rounded-[2rem] p-8 flex flex-col justify-between shadow-xl shadow-slate-900/10">
                <div>
                    <span class="text-[10px] font-bold uppercase tracking-widest text-sky-400 block mb-4 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-sky-400 animate-pulse"></span> Daily Laboratory Assay
                    </span>
                    <h3 class="font-serif text-2xl font-medium text-white mb-3">
                        Continuous Quality Inspection
                    </h3>
                    <p class="text-sm text-slate-400 font-light leading-relaxed">
                        Every batch is certified for microbiological purity, TDS calibration, and organoleptic clarity before dispatch.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-800/50 text-xs text-sky-300 font-bold tracking-wide uppercase">
                    <i class="fa-solid fa-shield-check mr-1"></i> 100% Lot Tracing & Testing
                </div>
            </div>
        </div>

        <!-- Certification Logos / Assurance Strip -->
        <div class="bg-slate-50 rounded-[2rem] p-8 lg:p-10 border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.03)] grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="space-y-2 group">
                <div class="w-16 h-16 mx-auto bg-white rounded-full flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform duration-500 text-sky-700 text-2xl">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <div class="text-sm font-bold text-slate-900 pt-2">FSSAI License</div>
                <div class="text-xs text-slate-500 font-light">Government Food Safety</div>
            </div>
            <div class="space-y-2 group">
                <div class="w-16 h-16 mx-auto bg-white rounded-full flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform duration-500 text-sky-700 text-2xl">
                    <i class="fa-solid fa-award"></i>
                </div>
                <div class="text-sm font-bold text-slate-900 pt-2">BIS (IS 14543)</div>
                <div class="text-xs text-slate-500 font-light">Bureau of Indian Standards</div>
            </div>
            <div class="space-y-2 group">
                <div class="w-16 h-16 mx-auto bg-white rounded-full flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform duration-500 text-sky-700 text-2xl">
                    <i class="fa-solid fa-industry"></i>
                </div>
                <div class="text-sm font-bold text-slate-900 pt-2">ISO 22000 & 9001</div>
                <div class="text-xs text-slate-500 font-light">Quality Management Systems</div>
            </div>
            <div class="space-y-2 group">
                <div class="w-16 h-16 mx-auto bg-white rounded-full flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform duration-500 text-emerald-600 text-2xl">
                    <i class="fa-solid fa-leaf"></i>
                </div>
                <div class="text-sm font-bold text-slate-900 pt-2">100% Recyclable</div>
                <div class="text-xs text-slate-500 font-light">Food-Grade Virgin PET</div>
            </div>
        </div>

    </div>
</section>
