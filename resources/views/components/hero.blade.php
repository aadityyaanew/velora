@php
    $brand = config('velora.brand');
@endphp

<section id="hero" class="relative min-h-[85vh] flex items-center pt-24 pb-24 overflow-hidden bg-cover bg-center bg-no-repeat bg-fixed" style="background-image: url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=2000&auto=format&fit=crop');">
    
    <!-- Crisp, subtle overlay to keep mountains sharp while maintaining text legibility -->
    <div class="absolute inset-0 bg-white/40"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-white/60 via-transparent to-white/20"></div>
    
    <div class="relative z-10 w-full max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col items-center justify-center text-center">
            
            <!-- Elegant Eyebrow -->
            <div class="inline-flex items-center justify-center gap-3 mb-8">
                <span class="h-[1px] w-12 bg-sky-700"></span>
                <span class="text-sky-800 text-sm font-extrabold tracking-[0.25em] uppercase drop-shadow-sm">{{ $brand['tagline'] }}</span>
                <span class="h-[1px] w-12 bg-sky-700"></span>
            </div>

            <!-- Main Headline -->
            <h1 class="text-5xl sm:text-7xl lg:text-[6rem] font-medium text-slate-900 leading-[1.05] tracking-tight mb-8 drop-shadow-md">
                Pure By Nature.<br>
                <span class="text-sky-800 italic font-serif">Crafted for Excellence.</span>
            </h1>

            <!-- Refined Subtext -->
            <p class="text-lg sm:text-xl text-slate-800 leading-relaxed font-medium max-w-2xl mx-auto mb-10 drop-shadow-sm">
                Sourced from purity, <strong>VELORA PURE</strong> delivers international-standard hydration. Enhanced with an advanced 7-stage purification regime for a perfectly balanced, crisp taste.
            </p>

            <!-- Simplified Details -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-6 sm:gap-10 mb-12">
                <div class="flex items-center gap-2 text-sm text-slate-900 font-bold tracking-wider uppercase">
                    <i class="fa-solid fa-droplet text-sky-600"></i> Alkaline Option (pH 8.5+)
                </div>
                <div class="hidden sm:block w-[1px] h-5 bg-slate-400"></div>
                <div class="flex items-center gap-2 text-sm text-slate-900 font-bold tracking-wider uppercase">
                    <i class="fa-solid fa-bottle-water text-sky-600"></i> 250 ML to 20 L Formats
                </div>
            </div>

            <!-- Premium CTAs -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-5 w-full sm:w-auto">
                <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hi Velora Pure, I would like to enquire about ordering Velora Pure Water.') }}"
                   target="_blank"
                   class="w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-slate-900 hover:bg-sky-800 text-white font-medium text-sm px-10 py-4 rounded-full transition-all duration-300 shadow-2xl hover:-translate-y-1">
                    <i class="fa-brands fa-whatsapp text-lg"></i>
                    <span>Enquire via WhatsApp</span>
                </a>
                <a href="#products"
                   class="w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-white/70 hover:bg-white text-slate-900 font-bold text-sm px-10 py-4 rounded-full transition-all duration-300 backdrop-blur-md shadow-xl hover:-translate-y-1">
                    <span>Explore Collection</span>
                </a>
            </div>

        </div>
    </div>
</section>
