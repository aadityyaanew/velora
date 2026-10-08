@php
    $brand = config('velora.brand');
@endphp

<section id="alkaline-section" class="py-24 bg-slate-900 text-white relative overflow-hidden border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Editorial & Technical Content -->
            <div class="lg:col-span-7 space-y-6">
                
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-cyan-950 border border-cyan-800 text-cyan-300 text-xs font-bold uppercase tracking-widest">
                    <span class="w-2 h-2 rounded-full bg-cyan-400"></span> Ionized Alkaline Formula
                </div>

                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight text-white">
                    VELORA PURE ALKALINE <br>
                    <span class="text-cyan-400 italic font-normal">pH 8.5+ Ionized Mineral Hydration</span>
                </h2>

                <p class="text-slate-300 text-base leading-relaxed">
                    Designed for high-performance athletes, wellness seekers, and executive vitality. Our proprietary ionization and mineral enrichment process elevate water to a stable pH of 8.5+, infusing beneficial electrolytes to neutralize dietary acid load and speed cellular recovery.
                </p>

                <!-- Technical Attributes Table -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2">
                    <div class="p-4 rounded-2xl bg-slate-800/80 border border-slate-700">
                        <div class="font-serif text-2xl font-bold text-cyan-400">pH 8.5+</div>
                        <div class="text-xs font-semibold text-white mt-1">Alkaline Balance</div>
                        <p class="text-[11px] text-slate-400 mt-1">Neutralizes excess internal acidity from modern stress & processed diets.</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-slate-800/80 border border-slate-700">
                        <div class="font-serif text-2xl font-bold text-cyan-400">Micro-Cluster</div>
                        <div class="text-xs font-semibold text-white mt-1">Rapid Bio-Absorption</div>
                        <p class="text-[11px] text-slate-400 mt-1">Smaller molecular water clusters penetrate cellular membranes up to 2x faster.</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-slate-800/80 border border-slate-700">
                        <div class="font-serif text-2xl font-bold text-cyan-400">-ORP</div>
                        <div class="text-xs font-semibold text-white mt-1">Antioxidant Potential</div>
                        <p class="text-[11px] text-slate-400 mt-1">Helps deactivate free radicals and supports muscular recovery post-training.</p>
                    </div>
                </div>

                <!-- Commercial CTAs -->
                <div class="pt-4 flex flex-wrap gap-4">
                    <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hi Velora Pure, I am interested in ordering VELORA Ionized Alkaline Water (pH 8.5+).') }}"
                       target="_blank"
                       class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-xs px-6 py-3.5 rounded-xl shadow-md transition">
                        <i class="fa-brands fa-whatsapp text-base"></i> WhatsApp Alkaline Order
                    </a>
                    <button @click="openEnquiryFor('1 L', 'Alkaline Water (pH 8.5+)')"
                            class="inline-flex items-center gap-2 bg-slate-800 hover:bg-slate-700 text-cyan-300 border border-cyan-800 font-semibold text-xs px-6 py-3.5 rounded-xl transition">
                        Wholesale Alkaline Enquiry &rarr;
                    </button>
                </div>

            </div>

            <!-- Right Visual: Alkaline Bottle Showcase -->
            <div class="lg:col-span-5 flex justify-center">
                <div class="relative w-full max-w-md">
                    <div class="rounded-3xl p-3 bg-slate-950 border border-slate-800 shadow-2xl">
                        <img src="{{ asset('images/velora_alkaline.jpg') }}" 
                             alt="VELORA PURE Ionized Alkaline Water" 
                             class="w-full rounded-2xl object-cover">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
