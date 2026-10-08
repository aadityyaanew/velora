@php
    $brand = config('velora.brand');
@endphp

<section id="packaged-water" class="py-24 lg:py-32 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            
            <!-- Left Visual -->
            <div class="order-2 lg:order-1 relative group">
                <div class="absolute inset-0 bg-sky-100 rounded-full blur-3xl opacity-50"></div>
                <img src="{{ asset('images/velora_bottles_lineup.jpg') }}" 
                     alt="Velora Pure Packaged Drinking Water Lineup" 
                     class="w-full rounded-[2.5rem] shadow-[0_20px_50px_rgba(0,0,0,0.1)] relative z-10">
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
                    Experience the crisp, clean taste of <strong>VELORA PURE Packaged Drinking Water</strong>. We take water through a rigorous multi-step purification process and carefully restore essential minerals, ensuring every drop is perfectly balanced, safe, and incredibly refreshing.
                </p>

                <!-- Specs Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-6">
                    <!-- Feature 1 -->
                    <div class="group bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:shadow-md hover:border-sky-100 transition-all duration-300">
                        <div class="w-10 h-10 rounded-full bg-sky-50 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-sky-100 transition-transform duration-300">
                            <i class="fa-solid fa-droplet text-sky-600"></i>
                        </div>
                        <h4 class="text-base font-semibold text-slate-900 mb-2">Perfectly Balanced</h4>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">Infused with just the right amount of essential minerals for a smooth taste and optimal hydration.</p>
                    </div>
                    
                    <!-- Feature 2 -->
                    <div class="group bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:shadow-md hover:border-sky-100 transition-all duration-300">
                        <div class="w-10 h-10 rounded-full bg-sky-50 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-sky-100 transition-transform duration-300">
                            <i class="fa-solid fa-shield-halved text-sky-600"></i>
                        </div>
                        <h4 class="text-base font-semibold text-slate-900 mb-2">Uncompromising Purity</h4>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">Guaranteed free from microplastics, chlorine, and unwanted impurities. Just pure, clean water.</p>
                    </div>
                    
                    <!-- Feature 3 -->
                    <div class="group bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:shadow-md hover:border-sky-100 transition-all duration-300">
                        <div class="w-10 h-10 rounded-full bg-sky-50 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-sky-100 transition-transform duration-300">
                            <i class="fa-solid fa-robot text-sky-600"></i>
                        </div>
                        <h4 class="text-base font-semibold text-slate-900 mb-2">Untouched by Hands</h4>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">Bottled using state-of-the-art automated systems to maintain the highest hygiene standards.</p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="group bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:shadow-md hover:border-sky-100 transition-all duration-300">
                        <div class="w-10 h-10 rounded-full bg-sky-50 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-sky-100 transition-transform duration-300">
                            <i class="fa-solid fa-truck-fast text-sky-600"></i>
                        </div>
                        <h4 class="text-base font-semibold text-slate-900 mb-2">Factory Fresh</h4>
                        <p class="text-sm text-slate-500 font-light leading-relaxed">Delivered directly from our advanced bottling facility to ensure pristine quality in every bottle.</p>
                    </div>
                </div>

                <div class="pt-8 flex flex-col sm:flex-row gap-4">
                    <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hi Velora Pure, I would like to enquire about bulk supply for Packaged Drinking Water.') }}"
                       target="_blank"
                       class="inline-flex justify-center items-center gap-3 bg-[#25D366] hover:bg-[#128C7E] text-white font-medium text-sm px-8 py-4 rounded-full transition-all duration-300 shadow-lg shadow-[#25D366]/20 hover:shadow-[#25D366]/40 hover:-translate-y-0.5">
                        <i class="fa-brands fa-whatsapp text-white text-lg"></i> WhatsApp Enquiry
                    </a>
                    <button @click="openEnquiryFor('1 L', 'Packaged Drinking Water')"
                            class="inline-flex justify-center items-center gap-2 bg-white hover:bg-slate-50 text-slate-900 font-semibold text-sm px-8 py-4 rounded-full transition-all duration-300 border border-slate-200 shadow-sm hover:shadow-md hover:-translate-y-0.5 group">
                        Request Trade Pricing
                        <i class="fa-solid fa-arrow-right text-sky-600 opacity-70 group-hover:translate-x-1 transition-transform duration-300"></i>
                    </button>
                </div>

            </div>

        </div>
    </div>
</section>
