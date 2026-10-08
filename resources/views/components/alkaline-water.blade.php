@php
    $brand = config('velora.brand');
@endphp

<section id="alkaline-section" class="py-24 lg:py-32 bg-slate-950 text-white relative overflow-hidden">
    <!-- Subtle Background Glow -->
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-cyan-900/20 via-slate-950 to-slate-950 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            
            <!-- Left Editorial & Technical Content -->
            <div class="space-y-8">
                
                <div class="inline-flex items-center gap-3 mb-2">
                    <span class="h-[1px] w-8 bg-cyan-600"></span>
                    <span class="text-cyan-400 text-xs font-bold tracking-[0.2em] uppercase">Ionized Alkaline Formula</span>
                </div>

                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-medium leading-[1.1] text-white tracking-tight">
                    Pure Alkaline <br>
                    <span class="text-cyan-300 italic font-serif">pH 8.5+ Ionized Hydration</span>
                </h2>

                <p class="text-slate-400 text-lg leading-relaxed font-light">
                    Designed for high-performance athletes, wellness seekers, and executive vitality. Our proprietary ionization and mineral enrichment process elevate water to a stable pH of 8.5+, infusing beneficial electrolytes to neutralize dietary acid load and speed cellular recovery.
                </p>

                <!-- Technical Attributes Table -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 pt-6">
                    <div class="relative pl-5 border-l border-slate-800">
                        <div class="absolute left-[-1.5px] top-2 w-[3px] h-4 bg-cyan-500"></div>
                        <div class="font-serif text-3xl font-medium text-white mb-2">8.5<span class="text-cyan-500">+</span></div>
                        <div class="text-xs font-bold tracking-widest uppercase text-cyan-300 mb-2">Alkaline pH</div>
                        <p class="text-xs text-slate-500 font-light leading-relaxed">Neutralizes internal acidity from modern diets.</p>
                    </div>
                    <div class="relative pl-5 border-l border-slate-800">
                        <div class="absolute left-[-1.5px] top-2 w-[3px] h-4 bg-cyan-500"></div>
                        <div class="font-serif text-3xl font-medium text-white mb-2"><i class="fa-solid fa-droplet text-2xl"></i></div>
                        <div class="text-xs font-bold tracking-widest uppercase text-cyan-300 mb-2">Micro-Cluster</div>
                        <p class="text-xs text-slate-500 font-light leading-relaxed">Faster bio-absorption through cell membranes.</p>
                    </div>
                    <div class="relative pl-5 border-l border-slate-800">
                        <div class="absolute left-[-1.5px] top-2 w-[3px] h-4 bg-cyan-500"></div>
                        <div class="font-serif text-3xl font-medium text-white mb-2">-ORP</div>
                        <div class="text-xs font-bold tracking-widest uppercase text-cyan-300 mb-2">Antioxidant</div>
                        <p class="text-xs text-slate-500 font-light leading-relaxed">Supports muscular recovery post-training.</p>
                    </div>
                </div>

                <!-- Commercial CTAs -->
                <div class="pt-8 flex flex-col sm:flex-row gap-4">
                    <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hi Velora Pure, I am interested in ordering VELORA Ionized Alkaline Water (pH 8.5+).') }}"
                       target="_blank"
                       class="inline-flex justify-center items-center gap-3 bg-cyan-600 hover:bg-cyan-500 text-white font-medium text-sm px-8 py-4 rounded-full shadow-[0_0_20px_rgba(8,145,178,0.3)] transition-all duration-300">
                        <i class="fa-brands fa-whatsapp text-lg"></i> WhatsApp Order
                    </a>
                    <button @click="openEnquiryFor('1 L', 'Alkaline Water (pH 8.5+)')"
                            class="inline-flex justify-center items-center gap-2 bg-slate-900/50 hover:bg-slate-800 text-cyan-300 border border-cyan-900/50 font-bold uppercase tracking-widest text-xs px-8 py-4 rounded-full transition-colors duration-300 backdrop-blur-md">
                        Wholesale Enquiry
                    </button>
                </div>

            </div>

            <!-- Right Visual: Alkaline Bottle Showcase -->
            <div class="flex justify-center relative group">
                <div class="absolute inset-0 bg-cyan-500 rounded-full blur-[100px] opacity-10 group-hover:opacity-20 transition-opacity duration-700"></div>
                <img src="{{ asset('images/velora_alkaline.jpg') }}" 
                     alt="VELORA PURE Ionized Alkaline Water" 
                     class="w-full max-w-md rounded-[2.5rem] object-cover shadow-[0_30px_60px_rgba(0,0,0,0.6)] relative z-10 transition-transform duration-700 group-hover:-translate-y-2">
            </div>

        </div>
    </div>
</section>
