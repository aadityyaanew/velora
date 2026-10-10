@php
    $brand = config('velora.brand');
@endphp

<div class="bg-slate-900 border-b border-slate-800 text-xs py-2 px-4 text-slate-300">
    <div class="max-w-7xl mx-auto flex flex-wrap justify-between items-center gap-2">
        <div class="flex items-center gap-3">
            <span class="inline-flex items-center gap-1.5 font-semibold text-sky-400">
                <i class="fa-solid fa-droplet text-sky-400"></i> PURE BY NATURE
            </span>
            <span class="text-slate-700">|</span>
            <span class="inline-flex items-center gap-1.5 text-slate-300">
                <i class="fa-solid fa-earth-americas text-slate-400"></i> TRUSTED WORLDWIDE
            </span>

            @php
                $certBadge = $brand['plant_certifications'] ?? null;
                if (empty($certBadge) && !empty($brand['fssai_license'])) {
                    $certBadge = 'FSSAI Lic. No: ' . $brand['fssai_license'];
                }
            @endphp
            @if(!empty($certBadge))
                <span class="hidden md:inline-block text-slate-700">|</span>
                <span class="hidden md:inline-block text-slate-400 text-[11px]">
                    {{ $certBadge }}
                </span>
            @endif
        </div>
        
        <div class="flex items-center gap-5 text-slate-300">
            @if(!empty($brand['phone']))
                <a href="tel:{{ $brand['phone_raw'] ?? preg_replace('/[^0-9+]/', '', $brand['phone']) }}" class="hover:text-white transition flex items-center gap-1.5">
                    <i class="fa-solid fa-phone text-sky-400 text-[10px]"></i> {{ $brand['phone'] }}
                </a>
            @endif

            @if(!empty($brand['email']))
                <a href="mailto:{{ $brand['email'] }}" class="hover:text-white transition hidden sm:flex items-center gap-1.5">
                    <i class="fa-solid fa-envelope text-sky-400 text-[10px]"></i> {{ $brand['email'] }}
                </a>
            @endif

            @if(!empty($brand['instagram']))
                <a href="{{ $brand['instagram'] }}" target="_blank" rel="noopener noreferrer" class="hover:text-white transition flex items-center gap-1.5">
                    <i class="fa-brands fa-instagram text-pink-400 text-xs"></i> {{ $brand['instagram_handle'] ?? 'Instagram' }}
                </a>
            @endif

            @if(!empty($brand['facebook']))
                <a href="{{ $brand['facebook'] }}" target="_blank" rel="noopener noreferrer" class="hover:text-white transition hidden md:flex items-center gap-1.5" title="Facebook">
                    <i class="fa-brands fa-facebook-f text-sky-400 text-[11px]"></i>
                </a>
            @endif
        </div>
    </div>
</div>
