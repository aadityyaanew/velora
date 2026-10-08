@php
    $brand = config('velora.brand');
@endphp

<aside aria-label="Quick contact links" class="fixed bottom-6 right-6 z-50">
    <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hi Velora Pure, I would like to make an enquiry regarding water supply.') }}" 
       target="_blank"
       id="floating-whatsapp-btn"
       class="group flex items-center bg-emerald-600 hover:bg-emerald-700 text-white p-3.5 sm:p-4 rounded-full shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300"
       aria-label="Chat on WhatsApp">
        <i class="fa-brands fa-whatsapp text-2xl sm:text-3xl"></i>
        <span class="max-w-0 overflow-hidden whitespace-nowrap group-hover:max-w-xs group-hover:ml-3 transition-all duration-300 ease-in-out font-bold text-xs">
            Chat on WhatsApp
        </span>
    </a>
</aside>
