@extends('layouts.app')

@section('title', 'VELORA PURE Products | Complete Bottled & Dispenser Water Catalog')
@section('meta_description', 'Explore VELORA PURE bottle and bulk packaging formats: 250 ML, 500 ML, 1 L, 2.5 L, 5 L, and 20 L. Food-grade PET, tamper-evident seals, and certified purity.')

@php
    $brand = config('velora.brand');
@endphp

@section('content')
    <!-- Products Hero Banner -->
    <section class="relative bg-gradient-to-b from-slate-900 via-sky-950 to-slate-900 text-white pt-24 pb-20 overflow-hidden">
        <div class="absolute inset-0 opacity-15 pointer-events-none bg-[radial-gradient(#38bdf8_1px,transparent_1px)] [background-size:24px_24px]"></div>
        
        <!-- Ambient Glow -->
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-96 h-96 bg-sky-500/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-sky-500/10 border border-sky-400/30 text-sky-300 text-xs font-semibold tracking-wider uppercase mb-6 shadow-sm">
                <i class="fa-solid fa-bottle-water"></i> THE VELORA PURE COLLECTION
            </div>
            
            <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-white mb-6">
                Engineered Packaging & Formats
            </h1>
            
            <p class="max-w-3xl mx-auto text-slate-300 text-base sm:text-lg font-light leading-relaxed">
                From luxury single-serve banquet bottles to high-capacity institutional dispenser jars. Every format is precision-filled in class-10,000 cleanroom environments.
            </p>

            <!-- Quick Specs Ribbon -->
            <div class="flex flex-wrap items-center justify-center gap-4 sm:gap-8 mt-10 text-xs text-sky-200/90 font-medium">
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-shield-halved text-sky-400"></i>
                    <span>BPA-Free Food Grade PET</span>
                </div>
                <div class="hidden sm:block h-3 w-px bg-slate-700"></div>
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-lock text-sky-400"></i>
                    <span>Tamper-Evident Aura Seals</span>
                </div>
                <div class="hidden sm:block h-3 w-px bg-slate-700"></div>
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-certificate text-sky-400"></i>
                    <span>BIS IS 14543 & FSSAI Compliant</span>
                </div>
            </div>

            <!-- Search and Filter Bar -->
            <div class="mt-12 max-w-2xl mx-auto">
                <form action="{{ route('products.index') }}" method="GET" class="relative flex items-center">
                    @if($category)
                        <input type="hidden" name="category" value="{{ $category }}">
                    @endif
                    <input type="text" 
                           name="search" 
                           value="{{ $search ?? '' }}" 
                           placeholder="Search formats by size, name, or application (e.g. 1 L, banquet, dispenser)..." 
                           class="w-full bg-slate-800/90 border border-slate-700 rounded-full pl-5 pr-32 py-3.5 text-sm text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent transition shadow-inner">
                    <button type="submit" 
                            class="absolute right-1.5 px-5 py-2.5 rounded-full bg-sky-500 hover:bg-sky-400 text-white font-semibold text-xs transition duration-200 shadow-md">
                        <i class="fa-solid fa-magnifying-glass mr-1"></i> Search
                    </button>
                </form>
            </div>

            <!-- Category Pills Filter -->
            <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mt-8">
                <a href="{{ route('products.index', array_filter(['search' => $search])) }}" 
                   class="px-5 py-2 rounded-full text-xs sm:text-sm font-semibold transition {{ empty($category) ? 'bg-sky-500 text-white shadow-lg shadow-sky-500/25' : 'bg-slate-800/80 hover:bg-slate-700 text-slate-300 border border-slate-700' }}">
                    All Formats
                </a>
                @foreach ($categories as $cat)
                    <a href="{{ route('products.index', array_filter(['category' => $cat, 'search' => $search])) }}" 
                       class="px-5 py-2 rounded-full text-xs sm:text-sm font-semibold transition {{ $category === $cat ? 'bg-sky-500 text-white shadow-lg shadow-sky-500/25' : 'bg-slate-800/80 hover:bg-slate-700 text-slate-300 border border-slate-700' }}">
                        {{ $cat }}
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Main Products Listing -->
    <section class="py-16 sm:py-24 bg-slate-50 min-h-[600px]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @if ($search)
                <div class="mb-8 flex items-center justify-between bg-white p-4 rounded-2xl border border-slate-200">
                    <p class="text-sm text-slate-600">
                        Showing results for <span class="font-bold text-slate-900">"{{ $search }}"</span>
                    </p>
                    <a href="{{ route('products.index', array_filter(['category' => $category])) }}" class="text-xs text-sky-600 hover:underline font-semibold">
                        Clear Search &times;
                    </a>
                </div>
            @endif

            @if ($products->isEmpty())
                <!-- Empty State -->
                <div class="bg-white rounded-3xl p-12 text-center border border-slate-200 shadow-sm max-w-xl mx-auto my-12">
                    <div class="w-16 h-16 rounded-full bg-sky-50 text-sky-600 flex items-center justify-center mx-auto mb-4 text-2xl">
                        <i class="fa-solid fa-box-open"></i>
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-slate-800 mb-2">No Products Found</h3>
                    <p class="text-sm text-slate-500 mb-6">No products matched your criteria. You can clear filters or explore other packaging categories.</p>
                    <a href="{{ route('products.index') }}" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-sky-600 text-white text-xs font-semibold hover:bg-sky-700 transition">
                        View All Products
                    </a>
                </div>
            @else
                <!-- Products Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                    @foreach($products as $product)
                        <div class="bg-white rounded-[2rem] p-7 sm:p-9 flex flex-col justify-between relative group transition-all duration-300 hover:-translate-y-2 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] border border-slate-200/80 {{ $product->is_featured ? 'ring-2 ring-sky-300' : '' }}">
                            
                            <!-- Badges -->
                            <div class="flex items-center justify-between gap-2 mb-6">
                                <span class="text-[11px] font-bold tracking-widest uppercase px-3 py-1 rounded-full bg-sky-50 text-sky-700 border border-sky-100">
                                    {{ $product->category }}
                                </span>

                                @if($product->badge)
                                    <span class="text-[10px] font-bold tracking-wider uppercase px-3 py-1 rounded-full bg-slate-900 text-white shadow-sm">
                                        {{ $product->badge }}
                                    </span>
                                @elseif($product->is_featured)
                                    <span class="text-[10px] font-bold tracking-wider uppercase px-3 py-1 rounded-full bg-sky-600 text-white shadow-sm">
                                        Signature SKU
                                    </span>
                                @endif
                            </div>

                            <div>
                                <!-- Image or Icon Showcase -->
                                <div class="relative w-full h-52 sm:h-60 rounded-2xl bg-gradient-to-br from-slate-50 to-sky-50/50 border border-slate-100 flex items-center justify-center overflow-hidden mb-6 group-hover:bg-sky-50/70 transition">
                                    @if($product->featured_image)
                                        <img src="{{ asset('storage/' . $product->featured_image) }}" 
                                             alt="{{ $product->name }}" 
                                             class="max-h-48 max-w-full object-contain drop-shadow-md group-hover:scale-105 transition duration-500">
                                    @else
                                        <!-- Iconic Fallback Graphics per format -->
                                        <div class="text-center p-6">
                                            <div class="w-20 h-20 rounded-full bg-white shadow-md mx-auto flex items-center justify-center text-sky-600 group-hover:scale-110 group-hover:text-sky-700 transition duration-300 mb-3">
                                                @if(str_contains(strtolower($product->size), '20'))
                                                    <i class="fa-solid fa-jar text-3xl"></i>
                                                @elseif(str_contains(strtolower($product->size), '5 l'))
                                                    <i class="fa-solid fa-faucet-drip text-3xl"></i>
                                                @elseif(str_contains(strtolower($product->size), '2.5'))
                                                    <i class="fa-solid fa-whiskey-glass text-3xl"></i>
                                                @elseif(str_contains(strtolower($product->size), '250'))
                                                    <i class="fa-solid fa-wine-bottle text-3xl"></i>
                                                @else
                                                    <i class="fa-solid fa-bottle-water text-3xl"></i>
                                                @endif
                                            </div>
                                            <span class="font-serif text-3xl font-bold text-slate-800 tracking-tight block">
                                                {{ $product->size }}
                                            </span>
                                            <span class="text-[10px] tracking-widest uppercase text-sky-600 font-bold">
                                                Certified Cleanroom Fill
                                            </span>
                                        </div>
                                    @endif

                                    <!-- Quick Size Tag Overlay -->
                                    <div class="absolute bottom-3 right-3 bg-white/95 backdrop-blur-sm px-3 py-1 rounded-lg border border-slate-200/80 shadow-xs">
                                        <span class="font-bold text-xs text-slate-900">{{ $product->size }}</span>
                                    </div>
                                </div>

                                <!-- Title & Tagline -->
                                <h2 class="text-2xl font-serif font-bold text-slate-900 mb-1 group-hover:text-sky-700 transition">
                                    <a href="{{ route('products.show', $product->slug) }}">
                                        {{ $product->name }}
                                    </a>
                                </h2>
                                
                                @if($product->tagline)
                                    <p class="text-xs text-sky-700 font-semibold tracking-wide uppercase mb-3">
                                        {{ $product->tagline }}
                                    </p>
                                @endif

                                @if($product->description)
                                    <p class="text-sm text-slate-500 leading-relaxed font-light mb-6 line-clamp-3">
                                        {{ $product->description }}
                                    </p>
                                @endif

                                <!-- Price or Rate Indicator -->
                                <div class="mb-6 pb-4 border-b border-slate-100 flex items-center justify-between">
                                    <span class="text-xs text-slate-400 font-medium uppercase tracking-wider">Pricing / Terms</span>
                                    @if($product->price)
                                        <span class="text-lg font-bold text-slate-900">₹{{ number_format($product->price, 2) }} <span class="text-[11px] font-normal text-slate-500">/ unit</span></span>
                                    @else
                                        <span class="text-xs font-semibold px-2.5 py-1 rounded-md bg-emerald-50 text-emerald-700 border border-emerald-100">
                                            Institutional / Contract Quote
                                        </span>
                                    @endif
                                </div>

                                <!-- Key Specs List -->
                                @if(!empty($product->specs) && is_array($product->specs))
                                    <div class="space-y-2.5 mb-8 bg-slate-50/70 p-4 rounded-xl border border-slate-100">
                                        @foreach(array_slice($product->specs, 0, 4) as $specKey => $specValue)
                                            <div class="flex justify-between items-center text-xs">
                                                <span class="text-slate-500 font-medium">{{ $specKey }}</span>
                                                <span class="font-semibold text-slate-800 text-right">{{ $specValue }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex flex-col gap-2.5 pt-4 border-t border-slate-100">
                                @php
                                    $waMsg = $product->whatsapp_text ?: "Hi Velora Pure, I would like to enquire about bulk supply for {$product->name} ({$product->size}).";
                                @endphp
                                <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode($waMsg) }}"
                                   target="_blank"
                                   class="w-full flex items-center justify-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-medium text-xs sm:text-sm py-3 px-4 rounded-xl shadow-xs transition duration-200">
                                    <i class="fa-brands fa-whatsapp text-lg"></i> Enquire via WhatsApp
                                </a>

                                <div class="grid grid-cols-2 gap-2">
                                    <a href="{{ route('products.show', $product->slug) }}"
                                       class="flex items-center justify-center gap-1.5 bg-slate-100 hover:bg-slate-200 text-slate-800 font-semibold text-xs py-2.5 px-3 rounded-xl transition duration-200">
                                        <span>Details</span>
                                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                    </a>

                                    <button @click="openEnquiryFor('{{ $product->size }}', '{{ $product->category }}')"
                                            class="flex items-center justify-center gap-1 bg-slate-900 hover:bg-sky-800 text-white font-semibold text-xs py-2.5 px-3 rounded-xl transition duration-200">
                                        <span>Get Quote</span>
                                    </button>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                @if($products->hasPages())
                    <div class="mt-14">
                        {{ $products->links() }}
                    </div>
                @endif
            @endif

        </div>
    </section>

    <!-- Custom Branding & Institutional Supply Section -->
    <section class="py-20 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#38bdf8_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="bg-gradient-to-r from-sky-900/60 to-slate-800/80 rounded-3xl p-8 sm:p-14 border border-sky-500/20 shadow-2xl flex flex-col lg:flex-row items-center justify-between gap-10">
                <div class="max-w-2xl space-y-4">
                    <span class="inline-flex items-center gap-2 text-xs font-bold tracking-widest uppercase text-sky-400 bg-sky-500/10 px-3.5 py-1.5 rounded-full border border-sky-400/20">
                        <i class="fa-solid fa-tags"></i> Private Label & HoReCa Customization
                    </span>
                    <h3 class="font-serif text-3xl sm:text-4xl font-bold tracking-tight text-white">
                        Need Custom Co-Branded Bottles for Your Brand?
                    </h3>
                    <p class="text-slate-300 text-sm sm:text-base leading-relaxed font-light">
                        We supply bespoke co-branded bottles for luxury hotels, upscale banquets, corporate summits, and aviation lounges with FDA/FSSAI compliant metallic and foil labels.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 shrink-0 w-full sm:w-auto">
                    <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hi Velora Pure, I would like to discuss custom co-branded bottles and institutional supply.') }}"
                       target="_blank"
                       class="inline-flex items-center justify-center gap-2 px-6 py-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-sm shadow-lg transition">
                        <i class="fa-brands fa-whatsapp text-lg"></i> Discuss Private Labeling
                    </a>
                    <a href="{{ route('home') }}#enquiry-section"
                       class="inline-flex items-center justify-center gap-2 px-6 py-4 rounded-xl bg-white hover:bg-slate-100 text-slate-900 font-semibold text-sm transition">
                        <span>Submit RFP / Enquiry</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
