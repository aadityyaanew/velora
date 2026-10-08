@php
    $products = config('velora.products');
    $brand = config('velora.brand');
@endphp

<section id="products" class="py-24 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="inline-block px-3.5 py-1 rounded-full bg-slate-100 text-sky-800 text-xs font-bold uppercase tracking-widest border border-slate-200">
                Packaging Formats
            </span>
            <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-slate-900 tracking-tight">
                The VELORA Product Portfolio
            </h2>
            <p class="text-slate-600 text-base leading-relaxed">
                From pocket single-serve banquet bottles to high-volume corporate dispenser jars, each bottle is precision-filled under positive pressure cleanroom conditions.
            </p>
        </div>

        <!-- 6 Distinct SKUs Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($products as $product)
                <div class="luxury-card rounded-3xl p-7 flex flex-col justify-between relative {{ !empty($product['popular']) ? 'ring-2 ring-sky-600' : '' }}">
                    
                    @if(!empty($product['popular']))
                        <div class="absolute -top-3 right-6 bg-sky-700 text-white font-bold text-[10px] tracking-wider uppercase px-3 py-1 rounded-full shadow-sm">
                            Signature Size
                        </div>
                    @endif

                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-bold px-2.5 py-1 rounded-md bg-slate-100 text-slate-700 border border-slate-200">
                                {{ $product['badge'] }}
                            </span>
                            <span class="font-serif text-2xl font-bold text-slate-900">
                                {{ $product['size'] }}
                            </span>
                        </div>

                        <div class="h-36 rounded-2xl bg-slate-50 border border-slate-200 flex items-center justify-center p-4 mb-5">
                            <div class="text-center">
                                @if($product['id'] === '20l')
                                    <i class="fa-solid fa-jar text-5xl text-sky-600 mb-2"></i>
                                @elseif($product['id'] === '5l')
                                    <i class="fa-solid fa-faucet-drip text-5xl text-sky-600 mb-2"></i>
                                @elseif($product['id'] === '2-5l')
                                    <i class="fa-solid fa-whiskey-glass text-5xl text-sky-600 mb-2"></i>
                                @else
                                    <i class="fa-solid fa-bottle-water text-5xl text-sky-600 mb-2"></i>
                                @endif
                                <p class="text-xs font-bold text-slate-800">{{ $product['name'] }}</p>
                            </div>
                        </div>

                        <h3 class="text-lg font-bold text-slate-900 mb-1">{{ $product['name'] }}</h3>
                        <p class="text-xs text-sky-800 font-semibold mb-2.5">{{ $product['tagline'] }}</p>
                        <p class="text-xs text-slate-600 leading-relaxed mb-5">
                            {{ $product['description'] }}
                        </p>

                        <!-- Clean Specs Table -->
                        <div class="bg-slate-50 rounded-xl p-3.5 border border-slate-200 text-xs space-y-1.5 mb-6">
                            @foreach($product['specs'] as $specKey => $specValue)
                                <div class="flex justify-between items-center text-[11px]">
                                    <span class="text-slate-500">{{ $specKey }}:</span>
                                    <span class="font-semibold text-slate-800 text-right">{{ $specValue }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="space-y-2 pt-3 border-t border-slate-100">
                        <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode($product['whatsapp_text']) }}"
                           target="_blank"
                           class="w-full flex items-center justify-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-xs py-2.5 rounded-xl shadow-sm transition">
                            <i class="fa-brands fa-whatsapp text-sm"></i> WhatsApp {{ $product['size'] }} Enquiry
                        </a>
                        <button @click="openEnquiryFor('{{ $product['size'] }}', 'Packaged Drinking Water')"
                                class="w-full text-xs text-slate-600 hover:text-sky-700 py-1 font-medium transition text-center">
                            Select For Trade Quote &rarr;
                        </button>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>
