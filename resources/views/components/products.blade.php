@php
    $products = config('velora.products');
    $brand = config('velora.brand');
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

        <!-- 6 Distinct SKUs Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
            @foreach($products as $product)
                <div class="bg-white rounded-[2rem] p-8 lg:p-10 flex flex-col justify-between relative group transition-all duration-500 hover:-translate-y-2 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] border border-slate-100 {{ !empty($product['popular']) ? 'ring-1 ring-sky-200' : '' }}">
                    
                    @if(!empty($product['popular']))
                        <div class="absolute -top-4 right-8 bg-sky-900 text-white font-bold text-[10px] tracking-widest uppercase px-4 py-2 rounded-full shadow-lg">
                            Signature Size
                        </div>
                    @endif

                    <div>
                        <!-- Icon & Size Header -->
                        <div class="flex items-start justify-between mb-8">
                            <div class="w-16 h-16 rounded-full bg-slate-50 flex items-center justify-center text-sky-700 transition-transform duration-500 group-hover:scale-110 group-hover:bg-sky-50">
                                @if($product['id'] === '20l')
                                    <i class="fa-solid fa-jar text-2xl"></i>
                                @elseif($product['id'] === '5l')
                                    <i class="fa-solid fa-faucet-drip text-2xl"></i>
                                @elseif($product['id'] === '2-5l')
                                    <i class="fa-solid fa-whiskey-glass text-2xl"></i>
                                @else
                                    <i class="fa-solid fa-bottle-water text-2xl"></i>
                                @endif
                            </div>
                            <div class="text-right">
                                <span class="font-serif text-3xl text-slate-900 block mb-1">
                                    {{ $product['size'] }}
                                </span>
                                <span class="text-[10px] font-bold tracking-widest uppercase text-sky-600">
                                    {{ $product['badge'] }}
                                </span>
                            </div>
                        </div>

                        <!-- Content -->
                        <h3 class="text-xl font-medium text-slate-900 mb-2">{{ $product['name'] }}</h3>
                        <p class="text-xs text-slate-400 uppercase tracking-wider font-bold mb-4">{{ $product['tagline'] }}</p>
                        <p class="text-sm text-slate-500 leading-relaxed font-light mb-8">
                            {{ $product['description'] }}
                        </p>

                        <!-- Clean Specs List -->
                        <div class="space-y-3 mb-8">
                            @foreach($product['specs'] as $specKey => $specValue)
                                <div class="flex justify-between items-center text-xs pb-3 border-b border-slate-100 last:border-0 last:pb-0">
                                    <span class="text-slate-400 font-medium tracking-wide">{{ $specKey }}</span>
                                    <span class="font-bold text-slate-800">{{ $specValue }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col gap-3 pt-6 border-t border-slate-100/50">
                        @if(!empty($brand['whatsapp_number']))
                            <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode($product['whatsapp_text']) }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="w-full flex items-center justify-center gap-2 bg-slate-900 hover:bg-sky-800 text-white font-medium text-sm py-4 rounded-xl transition-colors duration-300">
                                <i class="fa-brands fa-whatsapp text-emerald-400 text-base"></i> Enquire via WhatsApp
                            </a>
                        @else
                            <button @click="openEnquiryFor('{{ $product['size'] }}', 'Packaged Drinking Water')"
                                    class="w-full flex items-center justify-center gap-2 bg-slate-900 hover:bg-sky-800 text-white font-medium text-sm py-4 rounded-xl transition-colors duration-300">
                                <i class="fa-solid fa-envelope text-sky-400 text-base"></i> Enquire for Supply
                            </button>
                        @endif
                    </div>

                </div>
            @endforeach
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
