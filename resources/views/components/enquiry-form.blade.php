@php
    $brand = config('velora.brand');
@endphp

<section id="enquiry-section" class="py-24 lg:py-32 bg-slate-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-20 space-y-4">
            <div class="inline-flex items-center justify-center gap-3 mb-2">
                <span class="h-[1px] w-8 bg-sky-600"></span>
                <span class="text-sky-800 text-xs font-bold tracking-[0.2em] uppercase">Direct Bottler Desk</span>
                <span class="h-[1px] w-8 bg-sky-600"></span>
            </div>
            
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-medium text-slate-900 tracking-tight">
                Initiate Your <span class="italic font-serif text-sky-800">Water Supply Enquiry</span>
            </h2>
            <p class="text-slate-500 text-lg leading-relaxed font-light mt-4">
                Connect directly with our commercial desk for wholesale orders, scheduled institutional contracts, or dealership partnerships.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
            
            <!-- Left Contact Info -->
            <div class="lg:col-span-5 space-y-8">
                
                <div class="bg-white rounded-[2rem] p-10 border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] space-y-8">
                    <div class="flex items-center gap-4 pb-6 border-b border-slate-100">
                        <img src="{{ asset('images/logo.jpeg') }}" alt="{{ $brand['name'] }}" class="w-14 h-14 rounded-full object-cover shadow-sm">
                        <div>
                            <h3 class="font-serif text-2xl font-medium text-slate-900">{{ $brand['name'] }}</h3>
                            <p class="text-xs tracking-widest uppercase text-sky-700 font-bold mt-1">{{ $brand['tagline'] }}</p>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <!-- Direct Phone -->
                        @if(!empty($brand['phone']))
                            <a href="tel:{{ $brand['phone_raw'] ?? preg_replace('/[^0-9+]/', '', $brand['phone']) }}" class="flex items-center gap-5 text-slate-600 hover:text-sky-700 transition group">
                                <div class="w-12 h-12 rounded-full bg-slate-50 text-sky-600 flex items-center justify-center shrink-0 group-hover:scale-110 group-hover:bg-sky-50 transition-all duration-300">
                                    <i class="fa-solid fa-phone text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase tracking-widest font-bold text-slate-400 mb-1">Direct Telephone</p>
                                    <p class="text-base font-medium text-slate-900">{{ $brand['phone'] }}</p>
                                </div>
                            </a>
                        @endif

                        <!-- Alternate Phone -->
                        @if(!empty($brand['alternate_phone']))
                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', $brand['alternate_phone']) }}" class="flex items-center gap-5 text-slate-600 hover:text-sky-700 transition group">
                                <div class="w-12 h-12 rounded-full bg-slate-50 text-sky-600 flex items-center justify-center shrink-0 group-hover:scale-110 group-hover:bg-sky-50 transition-all duration-300">
                                    <i class="fa-solid fa-phone-volume text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase tracking-widest font-bold text-slate-400 mb-1">Alternate Phone</p>
                                    <p class="text-base font-medium text-slate-900">{{ $brand['alternate_phone'] }}</p>
                                </div>
                            </a>
                        @endif

                        <!-- WhatsApp Hotline -->
                        @if(!empty($brand['whatsapp_number']))
                            <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hi Velora Pure, I have a commercial enquiry regarding water supply.') }}" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="flex items-center gap-5 text-slate-600 hover:text-emerald-700 transition group">
                                <div class="w-12 h-12 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 group-hover:scale-110 group-hover:bg-emerald-100 transition-all duration-300">
                                    <i class="fa-brands fa-whatsapp text-2xl"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase tracking-widest font-bold text-slate-400 mb-1">WhatsApp Commercial Desk</p>
                                    <p class="text-base font-medium text-emerald-700">{{ $brand['phone'] ?? $brand['whatsapp_number'] }}</p>
                                </div>
                            </a>
                        @endif

                        <!-- Email -->
                        @if(!empty($brand['email']))
                            <a href="mailto:{{ $brand['email'] }}" class="flex items-center gap-5 text-slate-600 hover:text-sky-700 transition group">
                                <div class="w-12 h-12 rounded-full bg-slate-50 text-sky-600 flex items-center justify-center shrink-0 group-hover:scale-110 group-hover:bg-sky-50 transition-all duration-300">
                                    <i class="fa-solid fa-envelope text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase tracking-widest font-bold text-slate-400 mb-1">Official Correspondence</p>
                                    <p class="text-base font-medium text-slate-900">{{ $brand['email'] }}</p>
                                </div>
                            </a>
                        @endif

                        <!-- Support Email -->
                        @if(!empty($brand['support_email']))
                            <a href="mailto:{{ $brand['support_email'] }}" class="flex items-center gap-5 text-slate-600 hover:text-sky-700 transition group">
                                <div class="w-12 h-12 rounded-full bg-slate-50 text-sky-600 flex items-center justify-center shrink-0 group-hover:scale-110 group-hover:bg-sky-50 transition-all duration-300">
                                    <i class="fa-solid fa-headset text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase tracking-widest font-bold text-slate-400 mb-1">Commercial Support</p>
                                    <p class="text-base font-medium text-slate-900">{{ $brand['support_email'] }}</p>
                                </div>
                            </a>
                        @endif

                        <!-- Social Channels Grid in Contact Desk -->
                        @php
                            $contactSocials = !empty($brand['facebook']) || !empty($brand['instagram']) || !empty($brand['linkedin']) || !empty($brand['youtube']) || !empty($brand['x']);
                        @endphp
                        @if($contactSocials)
                            <div class="pt-2">
                                <p class="text-[10px] uppercase tracking-widest font-bold text-slate-400 mb-3">Connect on Social Channels</p>
                                <div class="flex flex-wrap items-center gap-2.5">
                                    @if(!empty($brand['instagram']))
                                        <a href="{{ $brand['instagram'] }}" target="_blank" rel="noopener noreferrer" class="px-3.5 py-1.5 rounded-full bg-slate-50 hover:bg-pink-50 border border-slate-200 text-slate-700 hover:text-pink-600 text-xs font-medium flex items-center gap-2 transition" title="Instagram">
                                            <i class="fa-brands fa-instagram text-pink-500"></i>
                                            <span>{{ $brand['instagram_handle'] ?? 'Instagram' }}</span>
                                        </a>
                                    @endif

                                    @if(!empty($brand['facebook']))
                                        <a href="{{ $brand['facebook'] }}" target="_blank" rel="noopener noreferrer" class="px-3.5 py-1.5 rounded-full bg-slate-50 hover:bg-sky-50 border border-slate-200 text-slate-700 hover:text-sky-600 text-xs font-medium flex items-center gap-2 transition" title="Facebook">
                                            <i class="fa-brands fa-facebook-f text-sky-600"></i>
                                            <span>Facebook</span>
                                        </a>
                                    @endif

                                    @if(!empty($brand['linkedin']))
                                        <a href="{{ $brand['linkedin'] }}" target="_blank" rel="noopener noreferrer" class="px-3.5 py-1.5 rounded-full bg-slate-50 hover:bg-sky-50 border border-slate-200 text-slate-700 hover:text-sky-700 text-xs font-medium flex items-center gap-2 transition" title="LinkedIn">
                                            <i class="fa-brands fa-linkedin-in text-sky-700"></i>
                                            <span>LinkedIn</span>
                                        </a>
                                    @endif

                                    @if(!empty($brand['youtube']))
                                        <a href="{{ $brand['youtube'] }}" target="_blank" rel="noopener noreferrer" class="px-3.5 py-1.5 rounded-full bg-slate-50 hover:bg-red-50 border border-slate-200 text-slate-700 hover:text-red-600 text-xs font-medium flex items-center gap-2 transition" title="YouTube">
                                            <i class="fa-brands fa-youtube text-red-500"></i>
                                            <span>YouTube</span>
                                        </a>
                                    @endif

                                    @if(!empty($brand['x']))
                                        <a href="{{ $brand['x'] }}" target="_blank" rel="noopener noreferrer" class="px-3.5 py-1.5 rounded-full bg-slate-50 hover:bg-slate-100 border border-slate-200 text-slate-700 hover:text-slate-900 text-xs font-medium flex items-center gap-2 transition" title="X (Twitter)">
                                            <i class="fa-brands fa-x-twitter text-slate-800"></i>
                                            <span>X</span>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        @endif

                        <!-- Address -->
                        @if(!empty($brand['address']))
                            <div class="flex items-start gap-5 text-slate-600 pt-2 border-t border-slate-100">
                                <div class="w-12 h-12 rounded-full bg-slate-50 text-sky-600 flex items-center justify-center shrink-0 mt-1">
                                    <i class="fa-solid fa-location-dot text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase tracking-widest font-bold text-slate-400 mb-1">Licensed Bottling Facility</p>
                                    <p class="text-sm font-light text-slate-700 leading-relaxed">{{ $brand['address'] }}</p>
                                </div>
                            </div>
                        @endif

                        <!-- FSSAI License Number -->
                        @if(!empty($brand['fssai_license']))
                            <div class="flex items-center gap-5 text-slate-600 pt-2 border-t border-slate-100">
                                <div class="w-12 h-12 rounded-full bg-slate-50 text-sky-600 flex items-center justify-center shrink-0">
                                    <i class="fa-solid fa-certificate text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase tracking-widest font-bold text-slate-400 mb-1">FSSAI License Certification</p>
                                    <p class="text-sm font-medium text-slate-900">Lic. No. {{ $brand['fssai_license'] }}</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Instant Response Guarantee Banner -->
                <div class="bg-sky-900 rounded-[2rem] p-8 flex items-center gap-6 shadow-xl shadow-sky-900/10">
                    <div class="w-12 h-12 rounded-full bg-sky-800 text-white flex items-center justify-center text-xl shrink-0">
                        <i class="fa-solid fa-clock animate-pulse"></i>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-white tracking-wide mb-1">Prompt Commercial Response</h4>
                        <p class="text-xs text-sky-200 font-light leading-relaxed">Wholesale inquiries are answered within 2 hours during active business shifts.</p>
                    </div>
                </div>

            </div>

            <!-- Right Interactive Form -->
            <div class="lg:col-span-7">
                <div class="bg-white rounded-[2rem] p-8 sm:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 h-full">
                    
                    <div class="mb-10 text-center sm:text-left">
                        <h3 class="font-serif text-3xl font-medium text-slate-900 mb-2">Submit Online Enquiry</h3>
                        <p class="text-sm text-slate-500 font-light">Directly routes to our supply management system.</p>
                    </div>

                    <!-- Live Success Banner -->
                    <div x-show="enquirySuccess" 
                         x-transition 
                         class="mb-8 p-6 rounded-2xl bg-emerald-50 border border-emerald-100 text-emerald-800 flex items-start gap-4"
                         style="display: none;">
                        <i class="fa-solid fa-circle-check text-emerald-500 text-2xl mt-0.5"></i>
                        <div>
                            <p class="font-bold text-emerald-900 text-base mb-1">Enquiry Received Successfully</p>
                            <p class="text-sm text-emerald-700 font-light" x-text="toastMessage"></p>
                        </div>
                    </div>

                    <!-- Actual Form -->
                    <form id="enquiry-form" @submit.prevent="
                        enquirySubmitting = true;
                        const form = $el;
                        const formData = new FormData(form);
                        
                        fetch('{{ route('enquiry.store') }}', {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content,
                                'Accept': 'application/json'
                            },
                            body: formData
                        })
                        .then(res => res.json())
                        .then(data => {
                            enquirySubmitting = false;
                            if(data.success) {
                                enquirySuccess = true;
                                displayToast(data.message);
                                form.reset();
                            } else {
                                alert('Error submitting enquiry. Please WhatsApp us directly.');
                            }
                        })
                        .catch(err => {
                            enquirySubmitting = false;
                            alert('Network issue. Please contact us directly at {{ $brand['phone'] ?? $brand['email'] ?? 'our commercial desk' }}.');
                        });
                    " class="space-y-6">
                        
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="form-name" class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2 ml-1">
                                    Your Name / Company <span class="text-red-400">*</span>
                                </label>
                                <input type="text" id="form-name" name="name" required placeholder="e.g. Ramesh Patel"
                                       class="w-full bg-slate-50 border border-transparent rounded-full px-6 py-4 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:bg-white transition-all shadow-inner">
                            </div>

                            <div>
                                <label for="form-phone" class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2 ml-1">
                                    Phone / WhatsApp <span class="text-red-400">*</span>
                                </label>
                                <input type="tel" id="form-phone" name="phone" required placeholder="e.g. +91 98765 43210"
                                       class="w-full bg-slate-50 border border-transparent rounded-full px-6 py-4 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:bg-white transition-all shadow-inner">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="form-email" class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2 ml-1">
                                    Email Address
                                </label>
                                <input type="email" id="form-email" name="email" placeholder="name@domain.com"
                                       class="w-full bg-slate-50 border border-transparent rounded-full px-6 py-4 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:bg-white transition-all shadow-inner">
                            </div>

                            <div>
                                <label for="form-category" class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2 ml-1">
                                    Product Category
                                </label>
                                <select id="form-category" name="product_type" x-model="selectedCategory"
                                        class="w-full bg-slate-50 border border-transparent rounded-full px-6 py-4 text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:bg-white transition-all shadow-inner appearance-none cursor-pointer">
                                    <option value="Packaged Drinking Water">Premium Packaged Drinking Water</option>
                                    <option value="Alkaline Water (pH 8.5+)">Ionized Alkaline Water (pH 8.5+)</option>
                                    <option value="Both Categories">Both Categories</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="form-size" class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2 ml-1">
                                    Bottle Size Format
                                </label>
                                <select id="form-size" name="bottle_size" x-model="selectedSize"
                                        class="w-full bg-slate-50 border border-transparent rounded-full px-6 py-4 text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:bg-white transition-all shadow-inner appearance-none cursor-pointer">
                                    <option value="250 ML">250 ML (Pocket / Banquets)</option>
                                    <option value="500 ML">500 ML (Active Classic)</option>
                                    <option value="1 L">1 LITER (Dining Standard)</option>
                                    <option value="2.5 L">2.5 LITER (Endurance Pitcher)</option>
                                    <option value="5 L">5 LITER (Countertop Dispenser)</option>
                                    <option value="20 L">20 LITER (Commercial Cooler Jar)</option>
                                    <option value="Multiple Sizes">Multiple / Assorted Sizes</option>
                                </select>
                            </div>

                            <div>
                                <label for="form-sector" class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2 ml-1">
                                    Requirement Sector
                                </label>
                                <select id="form-sector" name="sector"
                                        class="w-full bg-slate-50 border border-transparent rounded-full px-6 py-4 text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:bg-white transition-all shadow-inner appearance-none cursor-pointer">
                                    <option value="Gym & Fitness">Gym & Fitness Center</option>
                                    <option value="Clinic & Hospital">Clinic, Doctor & Healthcare</option>
                                    <option value="Office & Corporate">Corporate Office / Workspace</option>
                                    <option value="Hotel & Hospitality">Hotel, Resort & Restaurant</option>
                                    <option value="Banquet & Event">Wedding, Banquet & Events</option>
                                    <option value="Wholesale Distributor">Distributor / Retailer</option>
                                    <option value="Residential">Residential / Home Supply</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="form-message" class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2 ml-1">
                                Requirement Details
                            </label>
                            <textarea id="form-message" name="message" rows="4" placeholder="Provide estimated order quantity, delivery address, or scheduling frequency..."
                                      class="w-full bg-slate-50 border border-transparent rounded-3xl px-6 py-4 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:bg-white transition-all shadow-inner resize-none"></textarea>
                        </div>

                        <div class="pt-4">
                            <button type="submit" 
                                    id="submit-enquiry-button"
                                    :disabled="enquirySubmitting"
                                    class="w-full flex items-center justify-center gap-3 bg-slate-900 hover:bg-sky-800 text-white font-bold tracking-widest uppercase text-sm py-5 rounded-full shadow-xl shadow-slate-900/20 hover:-translate-y-1 transition-all duration-300 disabled:opacity-50 disabled:hover:translate-y-0">
                                <span x-show="!enquirySubmitting">Submit Commercial Enquiry</span>
                                <span x-show="enquirySubmitting" class="flex items-center gap-2" style="display: none;">
                                    <i class="fa-solid fa-spinner animate-spin"></i> Processing...
                                </span>
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>

    </div>
</section>
