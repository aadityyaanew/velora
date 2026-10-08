@php
    $sectors = config('velora.sectors');
    $brand = config('velora.brand');
@endphp

<section id="sectors" class="py-24 bg-white border-b border-slate-200" x-data="{ currentSector: 'gym' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
            <span class="inline-block px-3.5 py-1 rounded-full bg-slate-100 text-slate-700 text-xs font-bold uppercase tracking-widest border border-slate-200">
                Institutional & Commercial
            </span>
            <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-slate-900 tracking-tight">
                Tailored Commercial Hydration Contracts
            </h2>
            <p class="text-slate-600 text-base leading-relaxed">
                We supply scheduled, high-volume batches to wellness studios, medical institutions, IT workspaces, and five-star hospitality partners.
            </p>
        </div>

        <!-- Lifestyle B2B Collage -->
        <div class="mb-12 rounded-3xl overflow-hidden border border-slate-200 shadow-sm">
            <img src="{{ asset('images/velora_b2b_lifestyle.jpg') }}" 
                 alt="Velora Pure in Gyms, Medical Clinics, Offices, and Luxury Hotels" 
                 class="w-full h-auto object-cover max-h-[440px]">
        </div>

        <!-- Sector Switcher Tabs -->
        <div class="flex flex-wrap justify-center gap-2.5 mb-8">
            @foreach($sectors as $secKey => $sector)
                <button @click="currentSector = '{{ $secKey }}'"
                        :class="currentSector === '{{ $secKey }}' 
                            ? 'bg-slate-900 text-white font-semibold shadow-sm' 
                            : 'bg-slate-100 text-slate-600 hover:text-slate-900 border border-slate-200'"
                        class="px-5 py-2.5 rounded-xl text-xs transition flex items-center gap-2">
                    <i class="fa-solid {{ $sector['icon'] }}"></i>
                    <span>{{ $sector['title'] }}</span>
                </button>
            @endforeach
        </div>

        <!-- Sector Tab Contents -->
        @foreach($sectors as $secKey => $sector)
            <div x-show="currentSector === '{{ $secKey }}'" 
                 x-transition 
                 class="bg-slate-50 rounded-3xl p-8 lg:p-12 border border-slate-200"
                 style="display: none;">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    
                    <div class="lg:col-span-8 space-y-4">
                        <div class="text-xs font-bold uppercase tracking-wider text-sky-700 flex items-center gap-2">
                            <i class="fa-solid {{ $sector['icon'] }}"></i>
                            <span>{{ $sector['subtitle'] }}</span>
                        </div>
                        <h3 class="font-serif text-2xl sm:text-3xl font-bold text-slate-900">
                            {{ $sector['title'] }}
                        </h3>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            {{ $sector['lead'] }}
                        </p>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                            @foreach($sector['features'] as $feature)
                                <div class="flex items-start gap-2.5 text-xs text-slate-700">
                                    <i class="fa-solid fa-check text-sky-600 mt-0.5"></i>
                                    <span>{{ $feature }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="lg:col-span-4 flex flex-col gap-3">
                        <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode($sector['whatsapp_text']) }}"
                           target="_blank"
                           class="w-full text-center bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-xs py-3.5 rounded-xl shadow-sm transition">
                            <i class="fa-brands fa-whatsapp text-sm"></i> WhatsApp {{ explode(' ', $sector['title'])[0] }} Enquiry
                        </a>
                        <button @click="openEnquiryFor('Multiple Sizes', 'Packaged Drinking Water')"
                                class="w-full text-center bg-slate-900 hover:bg-sky-800 text-white font-semibold text-xs py-3.5 rounded-xl transition">
                            Request Commercial Quote
                        </button>
                    </div>

                </div>
            </div>
        @endforeach

    </div>
</section>
