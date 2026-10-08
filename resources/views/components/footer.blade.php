@php
    $brand = config('velora.brand');
@endphp

<footer class="bg-slate-900 text-slate-400 text-xs py-14 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
            
            <!-- Col 1: Brand Info -->
            <div class="space-y-3">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/logo.jpeg') }}" alt="{{ $brand['name'] }}" class="w-9 h-9 rounded-full object-cover">
                    <span class="font-serif font-bold text-xl text-white tracking-wide">{{ $brand['name'] }}</span>
                </div>
                <p class="text-xs text-slate-400 leading-relaxed">
                    {{ $brand['tagline'] }}. Engineered for superior taste, mineral equilibrium, and verified physiological purity.
                </p>
                <p class="text-[11px] text-slate-500 pt-1">
                    {{ $brand['plant_certifications'] }}
                </p>
            </div>

            <!-- Col 2: Sizes -->
            <div>
                <h4 class="font-bold text-white text-xs uppercase tracking-wider mb-3">Bottle Portfolio</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('products.index') }}" class="hover:text-white transition">250 ML Petite Banquet</a></li>
                    <li><a href="{{ route('products.index') }}" class="hover:text-white transition">500 ML Active Classic</a></li>
                    <li><a href="{{ route('products.index') }}" class="hover:text-white transition">1 LITER Dining Standard</a></li>
                    <li><a href="{{ route('products.index') }}" class="hover:text-white transition">2.5 LITER Endurance Jug</a></li>
                    <li><a href="{{ route('products.index') }}" class="hover:text-white transition">5 LITER Tap Dispenser</a></li>
                    <li><a href="{{ route('products.index') }}" class="hover:text-white transition">20 LITER Commercial Cooler Jar</a></li>
                </ul>
            </div>

            <!-- Col 3: Sectors -->
            <div>
                <h4 class="font-bold text-white text-xs uppercase tracking-wider mb-3">Institutional Supply</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}#sectors" class="hover:text-white transition">Gyms & Athletic Studios</a></li>
                    <li><a href="{{ route('home') }}#sectors" class="hover:text-white transition">Clinics & Medical Lounges</a></li>
                    <li><a href="{{ route('home') }}#sectors" class="hover:text-white transition">Corporate Workspaces</a></li>
                    <li><a href="{{ route('home') }}#sectors" class="hover:text-white transition">Luxury Hotels & Banquets</a></li>
                    <li><a href="{{ route('home') }}#alkaline-section" class="hover:text-white transition">Alkaline Water (pH 8.5+)</a></li>
                    <li><a href="{{ route('blog.index') }}" class="hover:text-sky-400 font-semibold transition">Velora Journal & Blog &rarr;</a></li>
                </ul>
            </div>

            <!-- Col 4: Contact -->
            <div>
                <h4 class="font-bold text-white text-xs uppercase tracking-wider mb-3">Commercial Desk</h4>
                <ul class="space-y-2.5">
                    <li>
                        <a href="tel:{{ $brand['phone_raw'] }}" class="hover:text-white transition flex items-center gap-2">
                            <i class="fa-solid fa-phone text-sky-400"></i> {{ $brand['phone'] }}
                        </a>
                    </li>
                    <li>
                        <a href="mailto:{{ $brand['email'] }}" class="hover:text-white transition flex items-center gap-2">
                            <i class="fa-solid fa-envelope text-sky-400"></i> {{ $brand['email'] }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ $brand['instagram'] }}" target="_blank" class="hover:text-pink-400 transition flex items-center gap-2">
                            <i class="fa-brands fa-instagram text-pink-400"></i> {{ $brand['instagram_handle'] }}
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/{{ $brand['whatsapp_number'] }}" target="_blank" class="hover:text-emerald-400 transition flex items-center gap-2">
                            <i class="fa-brands fa-whatsapp text-emerald-400"></i> WhatsApp Support Desk
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="border-t border-slate-800 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-[11px] text-slate-500">
            <p>&copy; {{ date('Y') }} {{ $brand['name'] }}. All Rights Reserved. Pure By Nature.</p>
            <div class="flex items-center gap-5">
                <a href="#hero" class="hover:text-slate-300 transition">Back to Top &uarr;</a>
            </div>
        </div>

    </div>
</footer>
