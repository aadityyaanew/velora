@php
    $brand = config('velora.brand');
@endphp

<footer class="bg-slate-900 text-slate-400 pt-20 pb-10 border-t border-slate-800 font-sans">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 mb-16">
            
            <!-- Brand & Tagline -->
            <div class="lg:col-span-5 space-y-8 pr-0 lg:pr-12">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/logo.jpeg') }}" alt="{{ $brand['name'] ?? 'VELORA PURE' }}" class="w-12 h-12 rounded-full object-cover shadow-lg border border-slate-700">
                    <div>
                        <h2 class="font-serif font-medium text-2xl text-white tracking-wide">{{ $brand['name'] ?? 'VELORA PURE' }}</h2>
                        <p class="text-[10px] uppercase tracking-widest text-sky-500 font-bold mt-0.5">Pure By Nature</p>
                    </div>
                </div>
                
                @if(!empty($brand['tagline']))
                    <p class="text-sm text-slate-400 leading-relaxed font-light">
                        {{ $brand['tagline'] }}. Engineered for superior taste, mineral equilibrium, and verified physiological purity. Trusted by premier hospitality and wellness institutions.
                    </p>
                @endif

                <!-- Dynamic Social Media Icons -->
                @php
                    $hasSocials = !empty($brand['facebook']) || !empty($brand['instagram']) || !empty($brand['linkedin']) || !empty($brand['youtube']) || !empty($brand['x']);
                @endphp
                @if($hasSocials)
                    <div class="pt-2">
                        <p class="text-xs uppercase tracking-wider text-slate-400 font-medium mb-3">Follow Us</p>
                        <div class="flex flex-wrap items-center gap-3">
                            @if(!empty($brand['facebook']))
                                <a href="{{ $brand['facebook'] }}" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full bg-slate-800 hover:bg-sky-600 text-slate-300 hover:text-white flex items-center justify-center transition-all duration-200" title="Facebook">
                                    <i class="fa-brands fa-facebook-f text-sm"></i>
                                </a>
                            @endif

                            @if(!empty($brand['instagram']))
                                <a href="{{ $brand['instagram'] }}" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full bg-slate-800 hover:bg-pink-600 text-slate-300 hover:text-white flex items-center justify-center transition-all duration-200" title="Instagram">
                                    <i class="fa-brands fa-instagram text-sm"></i>
                                </a>
                            @endif

                            @if(!empty($brand['x']))
                                <a href="{{ $brand['x'] }}" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white flex items-center justify-center transition-all duration-200" title="X (Twitter)">
                                    <i class="fa-brands fa-x-twitter text-sm"></i>
                                </a>
                            @endif

                            @if(!empty($brand['linkedin']))
                                <a href="{{ $brand['linkedin'] }}" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full bg-slate-800 hover:bg-sky-700 text-slate-300 hover:text-white flex items-center justify-center transition-all duration-200" title="LinkedIn">
                                    <i class="fa-brands fa-linkedin-in text-sm"></i>
                                </a>
                            @endif

                            @if(!empty($brand['youtube']))
                                <a href="{{ $brand['youtube'] }}" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full bg-slate-800 hover:bg-red-600 text-slate-300 hover:text-white flex items-center justify-center transition-all duration-200" title="YouTube">
                                    <i class="fa-brands fa-youtube text-sm"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                @endif

            </div>

            <!-- Links Sections (Take up remaining 7 columns) -->
            <div class="lg:col-span-7 grid grid-cols-2 sm:grid-cols-3 gap-8">
                
                <!-- Portfolio -->
                <div>
                    <h4 class="font-bold text-white text-xs uppercase tracking-wider mb-6">Portfolio</h4>
                    <ul class="space-y-4 text-sm font-light">
                        <li><a href="{{ route('products.index') }}" class="hover:text-sky-400 transition-colors">Petite Banquet (250 ML)</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-sky-400 transition-colors">Active Classic (500 ML)</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-sky-400 transition-colors">Dining Standard (1 L)</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-sky-400 transition-colors">Endurance Jug (2.5 L)</a></li>
                        <li><a href="{{ route('home') }}#alkaline-section" class="hover:text-sky-400 transition-colors text-emerald-400">Alkaline Ionized (pH 8.5+)</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-sky-400 transition-colors">Commercial Formats</a></li>
                    </ul>
                </div>

                <!-- Company -->
                <div>
                    <h4 class="font-bold text-white text-xs uppercase tracking-wider mb-6">Company</h4>
                    <ul class="space-y-4 text-sm font-light">
                        <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">Our Story</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors">Commercial Desk</a></li>
                        <li><a href="{{ route('blog.index') }}" class="hover:text-white transition-colors">Velora Journal</a></li>
                        <li><a href="{{ route('privacy') }}" class="hover:text-white transition-colors">Privacy Policy</a></li>
                        <li><a href="{{ route('terms') }}" class="hover:text-white transition-colors">Terms of Service</a></li>
                    </ul>
                </div>

                <!-- Connect / Contact Details -->
                <div class="col-span-2 sm:col-span-1 mt-4 sm:mt-0">
                    <h4 class="font-bold text-white text-xs uppercase tracking-wider mb-6">Connect</h4>
                    <ul class="space-y-4 text-sm font-light">
                        @if(!empty($brand['phone']))
                            <li>
                                <a href="tel:{{ $brand['phone_raw'] ?? preg_replace('/[^0-9+]/', '', $brand['phone']) }}" class="hover:text-white transition-colors flex items-center gap-3">
                                    <span class="w-8 h-8 rounded-full bg-slate-800 flex items-center justify-center text-sky-400"><i class="fa-solid fa-phone text-xs"></i></span>
                                    <span>{{ $brand['phone'] }}</span>
                                </a>
                            </li>
                        @endif

                        @if(!empty($brand['alternate_phone']))
                            <li>
                                <a href="tel:{{ preg_replace('/[^0-9+]/', '', $brand['alternate_phone']) }}" class="hover:text-white transition-colors flex items-center gap-3">
                                    <span class="w-8 h-8 rounded-full bg-slate-800 flex items-center justify-center text-sky-400"><i class="fa-solid fa-phone-volume text-xs"></i></span>
                                    <span>{{ $brand['alternate_phone'] }}</span>
                                </a>
                            </li>
                        @endif

                        @if(!empty($brand['email']))
                            <li>
                                <a href="mailto:{{ $brand['email'] }}" class="hover:text-white transition-colors flex items-center gap-3">
                                    <span class="w-8 h-8 rounded-full bg-slate-800 flex items-center justify-center text-sky-400"><i class="fa-solid fa-envelope text-xs"></i></span>
                                    <span>{{ $brand['email'] }}</span>
                                </a>
                            </li>
                        @endif

                        @if(!empty($brand['support_email']))
                            <li>
                                <a href="mailto:{{ $brand['support_email'] }}" class="hover:text-white transition-colors flex items-center gap-3">
                                    <span class="w-8 h-8 rounded-full bg-slate-800 flex items-center justify-center text-sky-400"><i class="fa-solid fa-headset text-xs"></i></span>
                                    <span>{{ $brand['support_email'] }}</span>
                                </a>
                            </li>
                        @endif

                        @if(!empty($brand['whatsapp_number']))
                            <li>
                                <a href="https://wa.me/{{ $brand['whatsapp_number'] }}" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors flex items-center gap-3">
                                    <span class="w-8 h-8 rounded-full bg-slate-800 flex items-center justify-center text-emerald-400"><i class="fa-brands fa-whatsapp text-xs"></i></span>
                                    <span>WhatsApp Support</span>
                                </a>
                            </li>
                        @endif

                        @if(!empty($brand['instagram']))
                            <li>
                                <a href="{{ $brand['instagram'] }}" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors flex items-center gap-3">
                                    <span class="w-8 h-8 rounded-full bg-slate-800 flex items-center justify-center text-pink-400"><i class="fa-brands fa-instagram text-xs"></i></span>
                                    <span>{{ $brand['instagram_handle'] ?? 'Instagram' }}</span>
                                </a>
                            </li>
                        @endif

                        @if(!empty($brand['address']))
                            <li class="pt-2 text-xs text-slate-400 flex items-start gap-3">
                                <span class="w-8 h-8 rounded-full bg-slate-800 flex items-center justify-center text-sky-400 shrink-0"><i class="fa-solid fa-location-dot text-xs"></i></span>
                                <span class="leading-relaxed">{{ $brand['address'] }}</span>
                            </li>
                        @endif
                    </ul>
                </div>

            </div>
        </div>

        <!-- Copyright Bar -->
        <div class="border-t border-slate-800/80 pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs font-light text-slate-500">
            @php
                $certInfo = [];
                if (!empty($brand['fssai_license'])) {
                    $certInfo[] = 'FSSAI Lic. No: ' . $brand['fssai_license'];
                }
                if (!empty($brand['plant_certifications'])) {
                    $certInfo[] = $brand['plant_certifications'];
                }
            @endphp

            @if(count($certInfo) > 0)
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-shield-halved text-slate-600"></i>
                    <span>{{ implode(' • ', $certInfo) }}</span>
                </div>
            @else
                <div></div>
            @endif
            
            <p>
                @if(!empty($brand['copyright_text']))
                    {{ $brand['copyright_text'] }}
                @else
                    &copy; {{ date('Y') }} {{ $brand['name'] ?? 'VELORA PURE' }}. All Rights Reserved.
                @endif
            </p>
            
            <a href="#hero" class="hover:text-white transition-colors flex items-center gap-2 font-medium">
                Back to Top <i class="fa-solid fa-arrow-up text-[10px]"></i>
            </a>
        </div>

    </div>
</footer>
