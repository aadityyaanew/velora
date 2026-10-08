@php
    $sectors = config('velora.sectors');
    $brand = config('velora.brand');
@endphp

<section id="sectors" class="py-24 lg:py-32 bg-slate-50" x-data="{ currentSector: 'gym' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <div class="inline-flex items-center justify-center gap-3 mb-2">
                <span class="h-[1px] w-8 bg-sky-600"></span>
                <span class="text-sky-800 text-xs font-bold tracking-[0.2em] uppercase">Institutional & Commercial</span>
                <span class="h-[1px] w-8 bg-sky-600"></span>
            </div>

            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-medium text-slate-900 tracking-tight">
                Tailored Commercial <br><span class="italic font-serif text-sky-800">Hydration Contracts</span>
            </h2>
            <p class="text-slate-500 text-lg leading-relaxed font-light mt-4">
                We supply scheduled, high-volume batches to wellness studios, medical institutions, IT workspaces, and five-star hospitality partners.
            </p>
        </div>

        <!-- Lifestyle B2B Collage -->
        <div class="mb-24 lg:mb-28 rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.1)] relative">
            <img src="{{ asset('images/velora_b2b_lifestyle.jpg') }}" 
                 alt="Velora Pure in Gyms, Medical Clinics, Offices, and Luxury Hotels" 
                 class="w-full h-auto">
        </div>

        <!-- Sector Switcher Tabs -->
        <div class="flex flex-wrap justify-center gap-3 mb-10">
            @foreach($sectors as $secKey => $sector)
                <button @click="currentSector = '{{ $secKey }}'"
                        :class="currentSector === '{{ $secKey }}' 
                            ? 'bg-slate-900 text-white shadow-xl shadow-slate-900/10' 
                            : 'bg-white text-slate-500 hover:text-slate-900 hover:bg-slate-100 shadow-sm'"
                        class="px-6 py-3.5 rounded-full text-xs font-bold uppercase tracking-widest transition-all duration-300 flex items-center gap-2">
                    <i class="fa-solid {{ $sector['icon'] }} text-sm"></i>
                    <span>{{ $sector['title'] }}</span>
                </button>
            @endforeach
        </div>

        <!-- Sector Tab Contents -->
        <div class="relative">
            @foreach($sectors as $secKey => $sector)
                <div x-show="currentSector === '{{ $secKey }}'" 
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0 translate-y-4"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="bg-white rounded-[2rem] p-10 lg:p-14 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100"
                     style="display: none;">
                    
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                        
                        <div class="lg:col-span-8 space-y-6">
                            <div class="text-[10px] font-bold uppercase tracking-widest text-sky-600 flex items-center gap-2">
                                <i class="fa-solid {{ $sector['icon'] }}"></i>
                                <span>{{ $sector['subtitle'] }}</span>
                            </div>
                            
                            <h3 class="font-serif text-3xl sm:text-4xl font-medium text-slate-900">
                                {{ $sector['title'] }}
                            </h3>
                            
                            <p class="text-base text-slate-500 leading-relaxed font-light">
                                {{ $sector['lead'] }}
                            </p>
                            
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4 border-t border-slate-100">
                                @foreach($sector['features'] as $feature)
                                    <div class="flex items-start gap-3 text-sm text-slate-600 font-light">
                                        <i class="fa-solid fa-check text-sky-500 mt-1"></i>
                                        <span>{{ $feature }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="lg:col-span-4 flex flex-col gap-4">
                            <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode($sector['whatsapp_text']) }}"
                               target="_blank"
                               class="w-full text-center bg-slate-900 hover:bg-sky-800 text-white font-medium text-sm py-4 rounded-xl transition-colors duration-300 flex justify-center items-center gap-2">
                                <i class="fa-brands fa-whatsapp text-emerald-400 text-base"></i> WhatsApp {{ explode(' ', $sector['title'])[0] }} Enquiry
                            </a>
                            <button @click="openEnquiryFor('Multiple Sizes', 'Packaged Drinking Water')"
                                    class="w-full text-center bg-slate-50 hover:bg-slate-100 text-slate-600 hover:text-slate-900 font-bold uppercase tracking-widest text-xs py-4 rounded-xl transition-colors duration-300 border border-slate-200">
                                Request Commercial Quote
                            </button>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
