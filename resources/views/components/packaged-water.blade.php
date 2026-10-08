@php
    $brand = config('velora.brand');
@endphp

<section id="packaged-water" class="py-24 lg:py-32 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            
            <!-- Left Visual -->
            <div class="order-2 lg:order-1 relative group">
                <div class="absolute inset-0 bg-sky-100 rounded-full blur-3xl opacity-50 group-hover:opacity-70 transition-opacity duration-700"></div>
                <img src="{{ asset('images/velora_bottles_lineup.jpg') }}" 
                     alt="Velora Pure Packaged Drinking Water Lineup" 
                     class="w-full rounded-[2.5rem] object-cover shadow-[0_20px_50px_rgba(0,0,0,0.1)] relative z-10 transition-transform duration-700 group-hover:-translate-y-2">
            </div>

            <!-- Right Content -->
            <div class="order-1 lg:order-2 space-y-8">
                
                <div class="inline-flex items-center gap-3 mb-2">
                    <span class="h-[1px] w-8 bg-sky-600"></span>
                    <span class="text-sky-800 text-xs font-bold tracking-[0.2em] uppercase">Natural Mineral Balance</span>
                </div>
                
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-medium text-slate-900 tracking-tight leading-[1.1]">
                    Premium Packaged <br>
                    <span class="italic font-serif text-sky-800">Drinking Water</span>
                </h2>
                
                <p class="text-slate-500 text-lg leading-relaxed font-light">
                    Bottled at the highest purity threshold, <strong>VELORA PURE Packaged Drinking Water</strong> combines physical filtration with natural remineralization. Free from chlorine odor, unwanted dissolved solids, and organic pathogens, each sip delivers a silky, refreshing finish.
                </p>

                <!-- Specs Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 pt-6">
                    <div class="relative pl-6 border-l border-slate-200 hover:border-sky-300 transition-colors duration-300">
                        <div class="absolute left-[-1.5px] top-1 w-[3px] h-4 bg-sky-600"></div>
                        <h4 class="text-base font-medium text-slate-900 mb-2">Optimal Mineral Profile</h4>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">Enriched with essential electrolytes to aid cellular hydration and natural body balance.</p>
                    </div>
                    <div class="relative pl-6 border-l border-slate-200 hover:border-sky-300 transition-colors duration-300">
                        <div class="absolute left-[-1.5px] top-1 w-[3px] h-4 bg-sky-600"></div>
                        <h4 class="text-base font-medium text-slate-900 mb-2">0% Harmful Residuals</h4>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">Zero microplastics, zero chlorine byproduct, and zero heavy metal contaminants.</p>
                    </div>
                    <div class="relative pl-6 border-l border-slate-200 hover:border-sky-300 transition-colors duration-300">
                        <div class="absolute left-[-1.5px] top-1 w-[3px] h-4 bg-sky-600"></div>
                        <h4 class="text-base font-medium text-slate-900 mb-2">Cleanroom Filled</h4>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">Automated non-contact rinse, fill, and laser-inspection packaging systems.</p>
                    </div>
                    <div class="relative pl-6 border-l border-slate-200 hover:border-sky-300 transition-colors duration-300">
                        <div class="absolute left-[-1.5px] top-1 w-[3px] h-4 bg-sky-600"></div>
                        <h4 class="text-base font-medium text-slate-900 mb-2">Cold-Chain Batches</h4>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">Shipped straight from our licensed bottling unit directly to trade partners.</p>
                    </div>
                </div>

                <div class="pt-8 flex flex-col sm:flex-row gap-4">
                    <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hi Velora Pure, I would like to enquire about bulk supply for Packaged Drinking Water.') }}"
                       target="_blank"
                       class="inline-flex justify-center items-center gap-3 bg-slate-900 hover:bg-sky-800 text-white font-medium text-sm px-8 py-4 rounded-full transition-colors duration-300 shadow-xl shadow-slate-900/10">
                        <i class="fa-brands fa-whatsapp text-emerald-400 text-lg"></i> WhatsApp Enquiry
                    </a>
                    <button @click="openEnquiryFor('1 L', 'Packaged Drinking Water')"
                            class="inline-flex justify-center items-center gap-2 bg-slate-50 hover:bg-slate-100 text-slate-900 font-bold uppercase tracking-widest text-xs px-8 py-4 rounded-full transition-colors duration-300 border border-slate-200">
                        Request Trade Pricing
                    </button>
                </div>

            </div>

        </div>
    </div>
</section>
