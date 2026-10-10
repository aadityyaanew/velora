@php
    $brand = config('velora.brand');
    if (!isset($products) || (is_object($products) && method_exists($products, 'isEmpty') && $products->isEmpty()) || empty($products)) {
        $products = \App\Models\Product::active()
            ->orderBy('sort_order', 'asc')
            ->orderBy('id', 'asc')
            ->take(6)
            ->get();
    }
@endphp

<section id="products" class="py-24 lg:py-32 bg-slate-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-20 space-y-4">
            <div class="inline-flex items-center justify-center gap-3 mb-2">
                <span class="h-[1px] w-8 bg-sky-600"></span>
                <span class="text-sky-800 text-xs font-bold tracking-[0.2em] uppercase">Packaging Formats</span>
                <span class="h-[1px] w-8 bg-sky-600"></span>
            </div>
            
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-medium text-slate-900 tracking-tight">
                The <span class="italic font-serif text-sky-800">VELORA</span> Collection
            </h2>
            <p class="text-slate-500 text-lg leading-relaxed font-light mt-4">
                From elegant single-serve banquet bottles to high-volume corporate dispenser jars. Each format is precision-filled under positive pressure cleanroom conditions.
            </p>
        </div>

        <!-- Dynamic SKUs Grid (Top 6 by Sort Order) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
            @forelse($products as $product)
                @php
                    $isFeatured = $product->is_featured || !empty($product->badge);
                    $specs = is_array($product->specs) ? $product->specs : (json_decode($product->specs ?? '[]', true) ?? []);
                    $waMsg = $product->whatsapp_text ?: ("Hi " . ($brand['name'] ?? 'Velora Pure') . ", I would like to enquire about bulk supply for {$product->name} ({$product->size}).");
                @endphp
                <div class="bg-white rounded-[2rem] p-8 lg:p-10 flex flex-col justify-between relative group transition-all duration-500 hover:-translate-y-2 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] border border-slate-100 {{ $isFeatured ? 'ring-1 ring-sky-200' : '' }}">
                    
                    @if($isFeatured)
                        <div class="absolute -top-4 right-8 bg-sky-900 text-white font-bold text-[10px] tracking-widest uppercase px-4 py-2 rounded-full shadow-lg">
                            {{ $product->badge ?: 'Featured SKU' }}
                        </div>
                    @endif

                    <div>
                        <!-- Icon / Bottle Image Header -->
                        <div class="flex items-start justify-between mb-8">
                            <div class="w-16 h-16 rounded-full bg-slate-50 flex items-center justify-center text-sky-700 transition-transform duration-500 group-hover:scale-110 group-hover:bg-sky-50 overflow-hidden">
                                @if(!empty($product->featured_image))
                                    <img src="{{ asset('storage/' . $product->featured_image) }}" alt="{{ $product->name }}" class="w-12 h-12 object-contain">
                                @elseif(str_contains(strtolower($product->size ?? ''), '20'))
                                    <i class="fa-solid fa-jar text-2xl"></i>
                                @elseif(str_contains(strtolower($product->size ?? ''), '5 l') || str_contains(strtolower($product->name ?? ''), 'dispenser'))
                                    <i class="fa-solid fa-faucet-drip text-2xl"></i>
                                @elseif(str_contains(strtolower($product->size ?? ''), '2.5') || str_contains(strtolower($product->name ?? ''), 'pitcher'))
                                    <i class="fa-solid fa-whiskey-glass text-2xl"></i>
                                @else
                                    <i class="fa-solid fa-bottle-water text-2xl"></i>
                                @endif
                            </div>
                            <div class="text-right">
                                <span class="font-serif text-3xl text-slate-900 block mb-1">
                                    {{ $product->size }}
                                </span>
                                @if(!empty($product->badge))
                                    <span class="text-[10px] font-bold tracking-widest uppercase text-sky-600">
                                        {{ $product->badge }}
                                    </span>
                                @elseif(!empty($product->category))
                                    <span class="text-[10px] font-bold tracking-widest uppercase text-sky-600">
                                        {{ $product->category }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Content -->
                        <h3 class="text-xl font-medium text-slate-900 mb-2">
                            @if(!empty($product->slug))
                                <a href="{{ route('products.show', $product->slug) }}" class="hover:text-sky-600 transition">
                                    {{ $product->name }}
                                </a>
                            @else
                                {{ $product->name }}
                            @endif
                        </h3>

                        @if(!empty($product->tagline))
                            <p class="text-xs text-slate-400 uppercase tracking-wider font-bold mb-4">{{ $product->tagline }}</p>
                        @endif

                        @if(!empty($product->description))
                            <p class="text-sm text-slate-500 leading-relaxed font-light mb-8">
                                {{ Str::limit($product->description, 160) }}
                            </p>
                        @endif

                        @if(!empty($product->price))
                            <div class="mb-6 flex items-baseline gap-1.5">
                                <span class="text-[10px] uppercase tracking-wider font-bold text-slate-400">Indicative Rate:</span>
                                <span class="text-base font-bold text-slate-900">₹{{ number_format($product->price, 2) }}</span>
                            </div>
                        @endif

                        <!-- Clean Specs List -->
                        @if(!empty($specs) && count($specs) > 0)
                            <div class="space-y-3 mb-8">
                                @foreach($specs as $specKey => $specValue)
                                    <div class="flex justify-between items-center text-xs pb-3 border-b border-slate-100 last:border-0 last:pb-0">
                                        <span class="text-slate-400 font-medium tracking-wide">{{ $specKey }}</span>
                                        <span class="font-bold text-slate-800">{{ $specValue }}</span>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col gap-2.5 pt-6 border-t border-slate-100/50">
                        @if(!empty($brand['whatsapp_number']))
                            <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode($waMsg) }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="w-full flex items-center justify-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-medium text-xs sm:text-sm py-3.5 px-4 rounded-xl shadow-xs transition duration-200">
                                <i class="fa-brands fa-whatsapp text-lg"></i> Enquire via WhatsApp
                            </a>
                        @endif

                        <div class="grid grid-cols-2 gap-2">
                            @if(!empty($product->slug))
                                <a href="{{ route('products.show', $product->slug) }}"
                                   class="flex items-center justify-center gap-1.5 bg-slate-100 hover:bg-slate-200 text-slate-800 font-semibold text-xs py-2.5 px-3 rounded-xl transition duration-200">
                                    <span>Details</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            @else
                                <span class="flex items-center justify-center bg-slate-50 text-slate-400 text-xs py-2.5 px-3 rounded-xl">Available</span>
                            @endif

                            <button @click="openEnquiryFor('{{ $product->size }}', '{{ $product->category ?? 'Packaged Drinking Water' }}')"
                                    class="flex items-center justify-center gap-1 bg-slate-900 hover:bg-sky-800 text-white font-semibold text-xs py-2.5 px-3 rounded-xl transition duration-200">
                                <span>Get Quote</span>
                            </button>
                        </div>
                    </div>

                </div>
            @empty
                <div class="col-span-full text-center py-12 text-slate-500">
                    <p class="text-base">No active products found in the catalog.</p>
                </div>
            @endforelse
        </div>

        <!-- Full Catalog Navigation Link -->
        <div class="mt-14 text-center">
            <a href="{{ route('products.index') }}" 
               class="inline-flex items-center gap-2.5 px-8 py-4 rounded-full bg-slate-900 hover:bg-sky-800 text-white font-semibold text-sm shadow-md hover:shadow-lg transition duration-200">
                <span>Explore Full Packaging Catalog & Specifications</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
        </div>

    </div>
</section>
