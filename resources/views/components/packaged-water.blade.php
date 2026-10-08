
@php
    $brand = config('velora.brand');
@endphp

<section id="packaged-water" class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 items-center gap-12 lg:gap-20">

            {{-- Content --}}
            <div class="max-w-2xl">
                <div class="flex items-center gap-3 mb-6">
                    <span class="w-8 h-px bg-sky-600"></span>
                    <span class="text-sm font-semibold tracking-wide text-sky-700 uppercase">
                        Natural Mineral Balance
                    </span>
                </div>

                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-semibold tracking-tight leading-tight text-slate-900">
                    Premium Packaged
                    <span class="block text-sky-700">
                        Drinking Water
                    </span>
                </h2>

                <p class="mt-6 text-lg leading-8 text-slate-600">
                    Experience the crisp, clean taste of
                    <strong class="font-semibold text-slate-800">VELORA PURE Packaged Drinking Water</strong>.
                    Our multi-step purification process helps deliver safe, clean and refreshing water
                    with carefully balanced essential minerals.
                </p>

                {{-- Features --}}
                <div class="mt-10 grid sm:grid-cols-2 gap-x-8 gap-y-8">

                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-sky-50 flex items-center justify-center">
                            <i class="fa-solid fa-droplet text-sky-600"></i>
                        </div>
                        <div>
                            <h3 class="text-base font-semibold text-slate-900">
                                Perfectly Balanced
                            </h3>
                            <p class="mt-1 text-sm leading-6 text-slate-600">
                                Essential minerals for a smooth taste and refreshing hydration.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-sky-50 flex items-center justify-center">
                            <i class="fa-solid fa-shield-halved text-sky-600"></i>
                        </div>
                        <div>
                            <h3 class="text-base font-semibold text-slate-900">
                                High Purity
                            </h3>
                            <p class="mt-1 text-sm leading-6 text-slate-600">
                                Carefully purified and processed to maintain clean, consistent quality.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-sky-50 flex items-center justify-center">
                            <i class="fa-solid fa-gears text-sky-600"></i>
                        </div>
                        <div>
                            <h3 class="text-base font-semibold text-slate-900">
                                Automated Bottling
                            </h3>
                            <p class="mt-1 text-sm leading-6 text-slate-600">
                                Modern bottling systems help maintain hygiene throughout production.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-sky-50 flex items-center justify-center">
                            <i class="fa-solid fa-truck-fast text-sky-600"></i>
                        </div>
                        <div>
                            <h3 class="text-base font-semibold text-slate-900">
                                Factory Fresh
                            </h3>
                            <p class="mt-1 text-sm leading-6 text-slate-600">
                                Supplied directly from our bottling facility for dependable freshness.
                            </p>
                        </div>
                    </div>

                </div>

                {{-- CTA Buttons --}}
                <div class="mt-10 flex flex-col sm:flex-row gap-4">

                    <a
                        href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hi Velora Pure, I would like to enquire about bulk supply for Packaged Drinking Water.') }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center justify-center gap-3 px-7 py-3.5 rounded-lg bg-[#25D366] hover:bg-[#1ebe5d] text-white text-sm font-semibold transition-colors"
                    >
                        <i class="fa-brands fa-whatsapp text-lg"></i>
                        WhatsApp Enquiry
                    </a>

                    <button
                        @click="openEnquiryFor('1 L', 'Packaged Drinking Water')"
                        type="button"
                        class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-lg border border-slate-300 bg-white hover:bg-slate-50 text-slate-900 text-sm font-semibold transition-colors"
                    >
                        Request Trade Pricing
                        <i class="fa-solid fa-arrow-right text-sky-600"></i>
                    </button>

                </div>
            </div>

            {{-- Product Image --}}
            <div class="relative">
                <div class="overflow-hidden rounded-2xl bg-slate-100">
                    <img
                        src="{{ asset('images/velora_bottles_lineup.jpg') }}"
                        alt="Velora Pure packaged drinking water bottles"
                        class="w-full h-[420px] sm:h-[500px] lg:h-[620px] object-cover object-center"
                        loading="lazy"
                    >
                </div>

                {{-- Small product label --}}
                <div class="absolute bottom-5 left-5 bg-white px-5 py-4 rounded-xl shadow-lg">
                    <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">
                        Velora Pure
                    </p>
                    <p class="mt-1 text-sm font-semibold text-slate-900">
                        Packaged Drinking Water
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
