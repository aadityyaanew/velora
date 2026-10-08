@php
    $brand = config('velora.brand');
@endphp

<section id="hero" class="relative overflow-hidden bg-white pt-16 pb-24 lg:pt-24 lg:pb-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Hero Content -->
            <div class="lg:col-span-7 space-y-7 text-center lg:text-left">
                
                <!-- Tagline Badge -->
                <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-white border border-slate-200 text-sky-800 text-xs font-semibold tracking-wider uppercase shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-sky-600"></span>
                    <span>{{ $brand['tagline'] }}</span>
                </div>

                <!-- Editorial Headline -->
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold text-slate-900 leading-[1.05] tracking-tight">
                    Pure By Nature.<br>
                    <span class="text-sky-700">Crafted for Excellence.</span>
                </h1>

                <!-- Brand Sub-description -->
                <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto lg:mx-0 leading-relaxed font-normal">
                    <strong>VELORA PURE</strong> delivers international-standard Packaged Drinking Water and Ionized Alkaline Water (pH 8.5+) processed through a meticulous 7-stage purification regime. Engineered for pure taste, balanced minerals, and uncompromising safety.
                </p>

                <!-- Available Volume Formats -->
                <div class="pt-1">
                    <div class="text-xs uppercase tracking-widest text-slate-400 font-bold mb-2.5">Available Formats</div>
                    <div class="flex flex-wrap items-center justify-center lg:justify-start gap-2">
                        <span class="px-3 py-1.5 rounded-lg bg-white border border-slate-200 text-xs font-semibold text-slate-700 shadow-sm">250 ML</span>
                        <span class="px-3 py-1.5 rounded-lg bg-white border border-slate-200 text-xs font-semibold text-slate-700 shadow-sm">500 ML</span>
                        <span class="px-3 py-1.5 rounded-lg bg-white border border-slate-200 text-xs font-semibold text-slate-700 shadow-sm">1 LITER</span>
                        <span class="px-3 py-1.5 rounded-lg bg-white border border-slate-200 text-xs font-semibold text-slate-700 shadow-sm">2.5 LITER</span>
                        <span class="px-3 py-1.5 rounded-lg bg-white border border-slate-200 text-xs font-semibold text-slate-700 shadow-sm">5 LITER TAP</span>
                        <span class="px-3 py-1.5 rounded-lg bg-sky-50 border border-sky-300 text-xs font-bold text-sky-800 shadow-sm">20 LITER JARS</span>
                    </div>
                </div>

                <!-- Action CTAs -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-3">
                    <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hi Velora Pure, I would like to enquire about ordering Velora Pure Water.') }}"
                       target="_blank"
                       id="hero-whatsapp-btn"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-sm px-7 py-4 rounded-xl shadow-md hover:shadow-lg transition">
                        <i class="fa-brands fa-whatsapp text-lg"></i>
                        <span>WhatsApp Quick Enquiry</span>
                    </a>
                    <a href="#products"
                       id="hero-view-products-btn"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-100 text-slate-800 border border-slate-300 font-semibold text-sm px-7 py-4 rounded-xl shadow-sm hover:shadow transition">
                        <span>View Product Range</span>
                        <i class="fa-solid fa-arrow-down text-xs text-slate-500"></i>
                    </a>
                </div>

                <!-- Trust Metrics Bar -->
                <div class="grid grid-cols-3 gap-6 pt-8 mt-4 border-t border-slate-100 text-left">
                    <div>
                        <div class="text-2xl sm:text-3xl font-bold text-slate-900">7-Stage</div>
                        <div class="text-xs text-slate-500 font-medium mt-1">Purification Process</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-bold text-sky-700">pH 8.5+</div>
                        <div class="text-xs text-slate-500 font-medium mt-1">Alkaline Option</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-bold text-slate-900">BIS & FSSAI</div>
                        <div class="text-xs text-slate-500 font-medium mt-1">Certified Quality</div>
                    </div>
                </div>

            </div>

            <!-- Right Hero Product Showcase -->
            <div class="lg:col-span-5 relative flex justify-center">
                <div class="relative w-full max-w-md">
                    
                    <!-- Clean Image -->
                    <div class="relative rounded-3xl overflow-hidden aspect-[4/3] bg-slate-100 shadow-2xl">
                        <img src="{{ asset('images/velora_bottles_lineup.jpg') }}" 
                             alt="VELORA PURE Product Range" 
                             class="w-full h-full object-cover">
                        
                        <div class="absolute bottom-4 left-4 right-4 bg-white/90 backdrop-blur-xl p-4 rounded-2xl flex items-center justify-between">
                            <div>
                                <p class="text-[10px] text-sky-700 font-bold uppercase tracking-widest">Product Range</p>
                                <p class="text-sm font-bold text-slate-900">250 ML to 20 L Jars</p>
                            </div>
                            <button @click="openEnquiryFor('1 L', 'Packaged Drinking Water')" 
                                    class="text-xs bg-slate-900 hover:bg-sky-700 text-white font-medium px-4 py-2 rounded-xl transition">
                                Enquire Now
                            </button>
                        </div>
                    </div>

                    <!-- Purity Certificate Badge -->
                    <div class="absolute -top-4 -right-4 bg-white rounded-2xl p-3 shadow-xl flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-slate-50 text-sky-700 flex items-center justify-center font-bold text-lg">
                            <i class="fa-solid fa-certificate"></i>
                        </div>
                        <div class="text-left pr-2">
                            <p class="text-xs font-bold text-slate-900">100% Food Grade</p>
                            <p class="text-[10px] text-slate-500 font-medium">Virgin Recyclable PET</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
