@extends('layouts.app')

@section('title', "{$product->name} ({$product->size}) | VELORA PURE Official Packaging")
@section('meta_description', $product->description ? Str::limit(strip_tags($product->description), 150) : "Discover {$product->name} by VELORA PURE in {$product->size} format. Precision packaged drinking water.")

@php
    $brand = config('velora.brand');
    $waMsg = $product->whatsapp_text ?: "Hi Velora Pure, I would like to enquire about bulk supply for {$product->name} ({$product->size}).";
@endphp

@section('content')
    <!-- Product Detail Header & Breadcrumb -->
    <section class="bg-slate-900 text-white pt-10 pb-8 border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-slate-400 mb-4">
                <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
                <a href="{{ route('products.index') }}" class="hover:text-white transition">Products</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
                <span class="text-sky-400 font-medium truncate">{{ $product->name }}</span>
            </nav>
            <div class="flex flex-wrap items-center justify-between gap-4">
                <h1 class="font-serif text-3xl sm:text-4xl font-bold tracking-tight text-white">
                    {{ $product->name }}
                </h1>
                <div class="flex items-center gap-2">
                    <span class="text-xs font-bold px-3 py-1 rounded-full bg-sky-500/10 border border-sky-400/30 text-sky-300">
                        {{ $product->size }}
                    </span>
                    <span class="text-xs font-bold px-3 py-1 rounded-full bg-slate-800 border border-slate-700 text-slate-300">
                        {{ $product->category }}
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Main Showcase -->
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-3xl p-6 sm:p-12 border border-slate-200/90 shadow-sm grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14">
                
                <!-- Left Column: Visual Showcase -->
                <div class="lg:col-span-5 flex flex-col justify-between">
                    <div class="relative w-full aspect-square rounded-2xl bg-gradient-to-br from-slate-100 to-sky-50 border border-slate-200/70 flex items-center justify-center p-8 overflow-hidden group">
                        
                        @if($product->featured_image)
                            <img src="{{ asset('storage/' . $product->featured_image) }}" 
                                 alt="{{ $product->name }}" 
                                 class="max-h-full max-w-full object-contain drop-shadow-xl group-hover:scale-105 transition duration-500">
                        @else
                            <div class="text-center">
                                <div class="w-28 h-28 rounded-full bg-white shadow-lg mx-auto flex items-center justify-center text-sky-600 mb-4 group-hover:scale-110 transition duration-300">
                                    @if(str_contains(strtolower($product->size), '20'))
                                        <i class="fa-solid fa-jar text-5xl"></i>
                                    @elseif(str_contains(strtolower($product->size), '5 l'))
                                        <i class="fa-solid fa-faucet-drip text-5xl"></i>
                                    @elseif(str_contains(strtolower($product->size), '2.5'))
                                        <i class="fa-solid fa-whiskey-glass text-5xl"></i>
                                    @elseif(str_contains(strtolower($product->size), '250'))
                                        <i class="fa-solid fa-wine-bottle text-5xl"></i>
                                    @else
                                        <i class="fa-solid fa-bottle-water text-5xl"></i>
                                    @endif
                                </div>
                                <span class="font-serif text-4xl font-bold text-slate-800 block">
                                    {{ $product->size }}
                                </span>
                                <span class="text-xs tracking-widest uppercase text-sky-600 font-bold mt-1 block">
                                    Precision Fill Format
                                </span>
                            </div>
                        @endif

                        @if($product->badge)
                            <div class="absolute top-4 left-4 bg-slate-900 text-white font-bold text-[10px] tracking-widest uppercase px-3 py-1.5 rounded-full shadow-md">
                                {{ $product->badge }}
                            </div>
                        @endif

                        <div class="absolute bottom-4 right-4 bg-white/95 backdrop-blur-md px-3.5 py-1.5 rounded-xl border border-slate-200 text-xs font-bold text-slate-800 shadow-sm">
                            <i class="fa-solid fa-check-double text-sky-600 mr-1"></i> Factory Certified
                        </div>
                    </div>

                    <!-- Assurance Pills -->
                    <div class="grid grid-cols-2 gap-3 mt-6 text-xs text-slate-600">
                        <div class="p-3 rounded-xl bg-slate-50 border border-slate-200/80 flex items-center gap-2.5">
                            <i class="fa-solid fa-atom text-sky-600 text-base"></i>
                            <div>
                                <p class="font-bold text-slate-800">7-Stage Pure</p>
                                <p class="text-[10px] text-slate-400">RO + UV + Ozonation</p>
                            </div>
                        </div>
                        <div class="p-3 rounded-xl bg-slate-50 border border-slate-200/80 flex items-center gap-2.5">
                            <i class="fa-solid fa-recycle text-emerald-600 text-base"></i>
                            <div>
                                <p class="font-bold text-slate-800">100% Recyclable</p>
                                <p class="text-[10px] text-slate-400">Virgin Food-Grade PET</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Specs & Ordering -->
                <div class="lg:col-span-7 flex flex-col justify-between space-y-6">
                    <div>
                        <!-- Tagline & Badge -->
                        @if($product->tagline)
                            <p class="text-xs font-bold uppercase tracking-wider text-sky-700 mb-2">
                                {{ $product->tagline }}
                            </p>
                        @endif

                        <h2 class="font-serif text-3xl sm:text-4xl font-bold text-slate-900 tracking-tight mb-4">
                            {{ $product->name }} &bull; {{ $product->size }}
                        </h2>

                        <!-- Price Tag -->
                        <div class="p-4 rounded-2xl bg-sky-50/60 border border-sky-100 flex items-center justify-between mb-6">
                            <div>
                                <span class="text-xs text-slate-500 font-medium block">Institutional & Retail Terms</span>
                                @if($product->price)
                                    <span class="text-2xl font-bold text-slate-900">₹{{ number_format($product->price, 2) }}</span>
                                    <span class="text-xs text-slate-500">per unit</span>
                                @else
                                    <span class="text-sm font-bold text-sky-900">Wholesale & B2B Volume Pricing</span>
                                @endif
                            </div>
                            <span class="text-xs font-semibold px-3 py-1.5 rounded-full bg-emerald-100 text-emerald-800">
                                In Stock &bull; Scheduled Supply
                            </span>
                        </div>

                        <!-- Description -->
                        <div class="prose prose-slate text-sm sm:text-base text-slate-600 leading-relaxed font-light mb-8">
                            <p>{{ $product->description }}</p>
                        </div>

                        <!-- Technical Specs Grid -->
                        @if(!empty($product->specs) && is_array($product->specs))
                            <div class="mb-8">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-3">
                                    Technical Packaging Specifications
                                </h3>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    @foreach($product->specs as $specKey => $specValue)
                                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/70 flex justify-between items-center text-xs">
                                            <span class="text-slate-500 font-medium">{{ $specKey }}</span>
                                            <span class="font-bold text-slate-900">{{ $specValue }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Call To Actions -->
                    <div class="pt-6 border-t border-slate-200 flex flex-col sm:flex-row gap-3">
                        <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode($waMsg) }}"
                           target="_blank"
                           class="flex-1 inline-flex items-center justify-center gap-2 py-4 px-6 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-sm shadow-md transition">
                            <i class="fa-brands fa-whatsapp text-lg"></i> Instant WhatsApp Enquiry
                        </a>
                        <a href="{{ route('home') }}#enquiry-section"
                           class="flex-1 inline-flex items-center justify-center gap-2 py-4 px-6 rounded-xl bg-slate-900 hover:bg-sky-800 text-white font-semibold text-sm transition">
                            <i class="fa-solid fa-file-signature text-xs"></i> Request Formal Quotation
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Related Products Lineup -->
    @if($relatedProducts->isNotEmpty())
        <section class="py-16 bg-white border-t border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between mb-10">
                    <div>
                        <span class="text-xs font-bold text-sky-600 uppercase tracking-widest">Explore Options</span>
                        <h3 class="font-serif text-2xl sm:text-3xl font-bold text-slate-900 mt-1">
                            Complementary Packaging Formats
                        </h3>
                    </div>
                    <a href="{{ route('products.index') }}" class="text-xs font-semibold text-sky-600 hover:underline">
                        View All ({{ \App\Models\Product::active()->count() }}) &rarr;
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                    @foreach($relatedProducts as $related)
                        <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200 flex flex-col justify-between hover:shadow-md transition">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-full bg-white border border-slate-200 text-slate-700">
                                        {{ $related->size }}
                                    </span>
                                    <span class="text-xs text-sky-700 font-medium">
                                        {{ $related->category }}
                                    </span>
                                </div>
                                <h4 class="font-serif text-lg font-bold text-slate-900 mb-1">
                                    {{ $related->name }}
                                </h4>
                                <p class="text-xs text-slate-500 line-clamp-2 font-light mb-4">
                                    {{ $related->description }}
                                </p>
                            </div>
                            <a href="{{ route('products.show', $related->slug) }}" 
                               class="text-xs font-semibold text-sky-600 hover:text-sky-800 flex items-center gap-1 pt-3 border-t border-slate-200/60">
                                <span>Inspect Format Specs</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
