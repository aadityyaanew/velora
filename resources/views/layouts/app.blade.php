<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'VELORA PURE | Premium Packaged Drinking & Ionized Alkaline Water')</title>
    <meta name="description" content="@yield('meta_description', 'VELORA PURE - Pure By Nature, Trusted Worldwide. International-grade Packaged Drinking Water and Ionized Alkaline Water in 250 ML, 500 ML, 1 L, 2.5 L, 5 L, and 20 L formats for Gyms, Clinics, Corporates, and Hospitality.')">
    
    <!-- Premium Google Fonts: Luxury Serif & Modern Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    
    <!-- Vite CSS/JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased selection:bg-sky-600 selection:text-white" x-data="{
    mobileMenu: false,
    selectedSize: '1 L',
    selectedCategory: 'Packaged Drinking Water',
    enquirySubmitting: false,
    enquirySuccess: false,
    toastMessage: '',
    showToast: false,
    openEnquiryFor(size, cat) {
        if(size) this.selectedSize = size;
        if(cat) this.selectedCategory = cat;
        const target = document.getElementById('enquiry-section');
        if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
        }
    },
    displayToast(msg) {
        this.toastMessage = msg;
        this.showToast = true;
        setTimeout(() => { this.showToast = false }, 5000);
    }
}">

    <!-- Top Announcement Bar -->
    @include('components.announcement-bar')

    <!-- Main Navigation Header -->
    @include('components.navbar')

    <!-- Main Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Global Footer -->
    @include('components.footer')

    <!-- Persistent Floating WhatsApp Desk -->
    @include('components.whatsapp-widget')

    <!-- Floating Live Toast Notification -->
    <div x-show="showToast" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-4"
         class="fixed bottom-6 left-6 z-50 bg-slate-900 border border-sky-500/30 text-white shadow-2xl rounded-2xl p-4 max-w-sm flex items-start gap-3 backdrop-blur-md"
         style="display: none;">
        <i class="fa-solid fa-circle-check text-sky-400 text-lg mt-0.5"></i>
        <div>
            <p class="text-xs font-bold text-white">VELORA PURE Notice</p>
            <p class="text-xs text-slate-300 mt-0.5" x-text="toastMessage"></p>
        </div>
    </div>

</body>
</html>
