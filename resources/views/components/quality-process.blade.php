@php
    $stages = config('velora.purification_stages');
@endphp

<section id="quality" class="py-24 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="inline-block px-3.5 py-1 rounded-full bg-slate-200/80 text-slate-700 text-xs font-bold uppercase tracking-widest border border-slate-300">
                Purity & Laboratory Standards
            </span>
            <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-slate-900 tracking-tight">
                7-Stage Advanced Scientific Purification
            </h2>
            <p class="text-slate-600 text-base leading-relaxed">
                Raw water undergoes multi-barrier mechanical, chemical, and microbiological purification before automated cleanroom bottling.
            </p>
        </div>

        <!-- 7 Stages Clean Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-14">
            @foreach($stages as $stage)
                <div class="luxury-card rounded-2xl p-6 flex flex-col justify-between">
                    <div>
                        <span class="font-serif text-2xl font-bold text-sky-700 block mb-3">
                            {{ $stage['num'] }}
                        </span>
                        <h3 class="text-sm font-bold text-slate-900 mb-2">
                            {{ $stage['title'] }}
                        </h3>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            {{ $stage['desc'] }}
                        </p>
                    </div>
                </div>
            @endforeach

            <!-- 8th Quality Assurance Summary Card -->
            <div class="bg-slate-900 text-white rounded-2xl p-6 flex flex-col justify-between">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-sky-400 block mb-2">
                        Daily Laboratory Assay
                    </span>
                    <h3 class="font-serif text-xl font-bold text-white mb-2">
                        Continuous Quality Inspection
                    </h3>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        Every batch is certified for microbiological purity, TDS calibration, and organoleptic clarity before dispatch.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-t border-slate-800 text-[11px] text-sky-300 font-semibold">
                    100% Lot Tracing & Testing
                </div>
            </div>
        </div>

        <!-- Certification Logos / Assurance Strip -->
        <div class="bg-white rounded-2xl p-7 border border-slate-200 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="space-y-1">
                <i class="fa-solid fa-shield-halved text-2xl text-sky-700 mb-1"></i>
                <div class="text-xs font-bold text-slate-900">FSSAI License</div>
                <div class="text-[11px] text-slate-500">Government Food Safety</div>
            </div>
            <div class="space-y-1">
                <i class="fa-solid fa-award text-2xl text-sky-700 mb-1"></i>
                <div class="text-xs font-bold text-slate-900">BIS (IS 14543)</div>
                <div class="text-[11px] text-slate-500">Bureau of Indian Standards</div>
            </div>
            <div class="space-y-1">
                <i class="fa-solid fa-industry text-2xl text-sky-700 mb-1"></i>
                <div class="text-xs font-bold text-slate-900">ISO 22000 & 9001</div>
                <div class="text-[11px] text-slate-500">Quality Management Systems</div>
            </div>
            <div class="space-y-1">
                <i class="fa-solid fa-leaf text-2xl text-emerald-600 mb-1"></i>
                <div class="text-xs font-bold text-slate-900">100% Recyclable</div>
                <div class="text-[11px] text-slate-500">Food-Grade Virgin PET</div>
            </div>
        </div>

    </div>
</section>
