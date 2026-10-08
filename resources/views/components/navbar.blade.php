@php
    $brand = config('velora.brand');
@endphp

<header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-slate-200 shadow-sm transition duration-200">
    <div class="max-w-[90rem] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20 gap-4">
            
            <!-- Brand Emblem & Identity -->
            <a href="#hero" class="flex items-center gap-3.5 group shrink-0">
                <div class="relative w-12 h-12 rounded-full overflow-hidden p-0.5 bg-gradient-to-tr from-sky-600 to-cyan-500 shadow-sm group-hover:scale-105 transition duration-300">
                    <img src="{{ asset('images/logo.jpeg') }}" alt="{{ $brand['name'] }}" class="w-full h-full object-cover rounded-full bg-white">
                </div>
                <div>
                    <div class="flex items-baseline gap-1.5">
                        <span class="font-serif text-2xl sm:text-3xl font-bold tracking-tight text-slate-900 group-hover:text-sky-700 transition">
                            VELORA
                        </span>
                        <span class="font-sans text-xs tracking-widest text-sky-600 font-bold uppercase">PURE</span>
                    </div>
                    <p class="text-[9px] tracking-widest uppercase text-slate-500 font-semibold">PREMIUM PACKAGED WATER</p>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden xl:flex items-center gap-5 2xl:gap-7 text-sm font-medium text-slate-600">
                <a href="{{ route('home') }}#hero" class="hover:text-sky-600 transition whitespace-nowrap">About</a>
                <a href="{{ route('products.index') }}" class="hover:text-sky-600 transition whitespace-nowrap {{ request()->routeIs('products.*') ? 'text-sky-600 font-bold' : '' }}">Products</a>
                <a href="{{ route('home') }}#sectors" class="hover:text-sky-600 transition whitespace-nowrap">B2B Supply</a>
                <a href="{{ route('blog.index') }}" class="hover:text-sky-600 transition whitespace-nowrap {{ request()->routeIs('blog.*') ? 'text-sky-600 font-bold' : '' }}">Blog & Journal</a>
                <a href="{{ route('home') }}#enquiry-section" class="hover:text-sky-600 transition whitespace-nowrap">Contact Us</a>
            </nav>

            <!-- Header Actions -->
            <div class="hidden sm:flex items-center gap-3 shrink-0">
                <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hi Velora Pure, I would like to make an enquiry regarding water supply.') }}"
                   target="_blank"
                   id="header-whatsapp-btn"
                   class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-xs px-4 py-2.5 rounded-full shadow-sm hover:shadow transition whitespace-nowrap">
                    <i class="fa-brands fa-whatsapp text-sm"></i> WhatsApp Us
                </a>
                <a href="#enquiry-section" 
                   id="header-enquiry-btn"
                   class="inline-flex items-center gap-2 bg-slate-900 hover:bg-sky-700 text-white font-semibold text-xs px-5 py-2.5 rounded-full shadow-sm hover:shadow transition whitespace-nowrap">
                    <span>Enquire Now</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
            </div>

            <!-- Mobile Navigation Toggle -->
            <button @click="mobileMenu = !mobileMenu" 
                    id="mobile-menu-toggle"
                    class="xl:hidden text-slate-700 hover:text-slate-900 p-2 focus:outline-none ml-auto" 
                    aria-label="Toggle Navigation">
                <i :class="mobileMenu ? 'fa-solid fa-xmark text-xl' : 'fa-solid fa-bars text-xl'"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Drawer -->
    <div x-show="mobileMenu" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="xl:hidden bg-white border-b border-slate-200 px-6 py-6 space-y-4 shadow-xl"
         style="display: none;">
        <a @click="mobileMenu = false" href="{{ route('home') }}#hero" class="block text-slate-800 hover:text-sky-600 font-medium py-1">About Velora</a>
        <a @click="mobileMenu = false" href="{{ route('products.index') }}" class="block text-slate-800 hover:text-sky-600 font-medium py-1 {{ request()->routeIs('products.*') ? 'text-sky-600 font-bold' : '' }}">Products</a>
        <a @click="mobileMenu = false" href="{{ route('home') }}#sectors" class="block text-slate-800 hover:text-sky-600 font-medium py-1">B2B Supply</a>
        <a @click="mobileMenu = false" href="{{ route('blog.index') }}" class="block text-slate-800 hover:text-sky-600 font-medium py-1 {{ request()->routeIs('blog.*') ? 'text-sky-600 font-bold' : '' }}">Blog & Journal</a>
        <a @click="mobileMenu = false" href="{{ route('home') }}#enquiry-section" class="block text-slate-800 hover:text-sky-600 font-medium py-1">Contact Us</a>
        
        <div class="pt-4 border-t border-slate-100 flex flex-col gap-3">
            <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hi Velora Pure, I would like to make an enquiry regarding water supply.') }}"
               target="_blank"
               class="flex items-center justify-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-sm py-3 rounded-xl shadow-sm">
                <i class="fa-brands fa-whatsapp text-lg"></i> Direct WhatsApp Chat
            </a>
            <a @click="mobileMenu = false" href="#enquiry-section"
               class="flex items-center justify-center gap-2 bg-slate-900 hover:bg-sky-800 text-white font-semibold text-sm py-3 rounded-xl">
                Online Enquiry Form
            </a>
        </div>
    </div>
</header>
