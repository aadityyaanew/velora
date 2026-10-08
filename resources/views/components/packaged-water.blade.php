@php
    $brand = config('velora.brand');
@endphp

<section id="packaged-water" class="py-24 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Visual -->
            <div class="lg:col-span-6">
                <div class="bg-white rounded-3xl p-3 border border-slate-200 shadow-md">
                    <img src="{{ asset('images/velora_bottles_lineup.jpg') }}" 
                         alt="Velora Pure Packaged Drinking Water Lineup" 
                         class="w-full rounded-2xl object-cover">
                </div>
            </div>

            <!-- Right Content -->
            <div class="lg:col-span-6 space-y-6">
                <span class="inline-block px-3.5 py-1 rounded-full bg-sky-100 text-sky-800 text-xs font-bold uppercase tracking-widest border border-sky-200">
                    Natural Mineral Balance
                </span>
                
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-slate-900 leading-tight">
                    Premium Packaged Drinking Water
                </h2>
                
                <p class="text-slate-600 text-base leading-relaxed">
                    Bottled at the highest purity threshold, <strong>VELORA PURE Packaged Drinking Water</strong> combines physical filtration with natural remineralization. Free from chlorine odor, unwanted dissolved solids, and organic pathogens, each sip delivers a silky, refreshing finish.
                </p>

                <!-- Specs Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                    <div class="p-4 rounded-2xl bg-white border border-slate-200">
                        <div class="text-sky-600 text-lg mb-1.5"><i class="fa-solid fa-droplet"></i></div>
                        <h4 class="text-sm font-bold text-slate-900">Optimal Mineral Profile</h4>
                        <p class="text-xs text-slate-500 mt-0.5">Enriched with essential electrolytes to aid cellular hydration and natural body balance.</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-white border border-slate-200">
                        <div class="text-sky-600 text-lg mb-1.5"><i class="fa-solid fa-shield-virus"></i></div>
                        <h4 class="text-sm font-bold text-slate-900">0% Harmful Residuals</h4>
                        <p class="text-xs text-slate-500 mt-0.5">Zero microplastics, zero chlorine byproduct, and zero heavy metal contaminants.</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-white border border-slate-200">
                        <div class="text-sky-600 text-lg mb-1.5"><i class="fa-solid fa-microchip"></i></div>
                        <h4 class="text-sm font-bold text-slate-900">Cleanroom Automated Fill</h4>
                        <p class="text-xs text-slate-500 mt-0.5">Automated non-contact rinse, fill, and laser-inspection packaging systems.</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-white border border-slate-200">
                        <div class="text-sky-600 text-lg mb-1.5"><i class="fa-solid fa-truck"></i></div>
                        <h4 class="text-sm font-bold text-slate-900">Cold-Chain & Fresh Batches</h4>
                        <p class="text-xs text-slate-500 mt-0.5">Shipped straight from our licensed bottling unit directly to trade partners.</p>
                    </div>
                </div>

                <div class="pt-3 flex flex-wrap gap-4">
                    <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hi Velora Pure, I would like to enquire about bulk supply for Packaged Drinking Water.') }}"
                       target="_blank"
                       class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-xs px-6 py-3.5 rounded-xl shadow-sm transition">
                        <i class="fa-brands fa-whatsapp text-base"></i> WhatsApp Enquiry
                    </a>
                    <button @click="openEnquiryFor('1 L', 'Packaged Drinking Water')"
                            class="inline-flex items-center gap-2 bg-slate-900 hover:bg-sky-800 text-white font-semibold text-xs px-6 py-3.5 rounded-xl transition">
                        Request Trade Pricing
                    </button>
                </div>

            </div>

        </div>
    </div>
</section>
