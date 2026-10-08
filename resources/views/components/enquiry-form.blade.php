@php
    $brand = config('velora.brand');
@endphp

<section id="enquiry-section" class="py-24 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="inline-block px-3.5 py-1 rounded-full bg-slate-100 text-slate-700 text-xs font-bold uppercase tracking-widest border border-slate-200">
                Direct Bottler Desk
            </span>
            <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-slate-900 tracking-tight">
                Initiate Your Water Supply Enquiry
            </h2>
            <p class="text-slate-600 text-base leading-relaxed">
                Connect directly with our commercial desk for wholesale orders, scheduled institutional contracts, or dealership partnerships.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Left Contact Info -->
            <div class="lg:col-span-5 space-y-6">
                
                <div class="bg-slate-50 rounded-3xl p-8 border border-slate-200 space-y-6">
                    <div class="flex items-center gap-3.5 pb-4 border-b border-slate-200">
                        <img src="{{ asset('images/logo.jpeg') }}" alt="{{ $brand['name'] }}" class="w-12 h-12 rounded-full object-cover">
                        <div>
                            <h3 class="font-serif text-xl font-bold text-slate-900">{{ $brand['name'] }}</h3>
                            <p class="text-xs text-sky-700 font-semibold">{{ $brand['tagline'] }}</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <!-- Direct Phone -->
                        <a href="tel:{{ $brand['phone_raw'] }}" class="flex items-center gap-4 text-slate-700 hover:text-sky-700 transition">
                            <div class="w-10 h-10 rounded-xl bg-white border border-slate-200 text-sky-600 flex items-center justify-center shrink-0 shadow-sm">
                                <i class="fa-solid fa-phone text-sm"></i>
                            </div>
                            <div>
                                <p class="text-[11px] text-slate-400">Direct Telephone</p>
                                <p class="text-sm font-semibold text-slate-900">{{ $brand['phone'] }}</p>
                            </div>
                        </a>

                        <!-- WhatsApp Hotline -->
                        <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hi Velora Pure, I have a commercial enquiry regarding water supply.') }}" 
                           target="_blank" 
                           class="flex items-center gap-4 text-slate-700 hover:text-emerald-700 transition">
                            <div class="w-10 h-10 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-600 flex items-center justify-center shrink-0 shadow-sm">
                                <i class="fa-brands fa-whatsapp text-lg"></i>
                            </div>
                            <div>
                                <p class="text-[11px] text-slate-400">WhatsApp Commercial Desk</p>
                                <p class="text-sm font-semibold text-emerald-700">{{ $brand['phone'] }} (Click to Chat)</p>
                            </div>
                        </a>

                        <!-- Email -->
                        <a href="mailto:{{ $brand['email'] }}" class="flex items-center gap-4 text-slate-700 hover:text-sky-700 transition">
                            <div class="w-10 h-10 rounded-xl bg-white border border-slate-200 text-sky-600 flex items-center justify-center shrink-0 shadow-sm">
                                <i class="fa-solid fa-envelope text-sm"></i>
                            </div>
                            <div>
                                <p class="text-[11px] text-slate-400">Official Correspondence</p>
                                <p class="text-sm font-semibold text-slate-900">{{ $brand['email'] }}</p>
                            </div>
                        </a>

                        <!-- Instagram -->
                        <a href="{{ $brand['instagram'] }}" target="_blank" class="flex items-center gap-4 text-slate-700 hover:text-pink-600 transition">
                            <div class="w-10 h-10 rounded-xl bg-pink-50 border border-pink-200 text-pink-600 flex items-center justify-center shrink-0 shadow-sm">
                                <i class="fa-brands fa-instagram text-lg"></i>
                            </div>
                            <div>
                                <p class="text-[11px] text-slate-400">Instagram Channel</p>
                                <p class="text-sm font-semibold text-slate-900">{{ $brand['instagram_handle'] }}</p>
                            </div>
                        </a>

                        <!-- Address -->
                        <div class="flex items-start gap-4 text-slate-700 pt-2">
                            <div class="w-10 h-10 rounded-xl bg-white border border-slate-200 text-sky-600 flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                                <i class="fa-solid fa-location-dot text-sm"></i>
                            </div>
                            <div>
                                <p class="text-[11px] text-slate-400">Licensed Bottling Facility</p>
                                <p class="text-xs font-semibold text-slate-800 leading-relaxed">{{ $brand['address'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Instant Response Guarantee Banner -->
                <div class="bg-sky-50 rounded-2xl p-5 border border-sky-200 flex items-center gap-4">
                    <div class="w-10 h-10 rounded-xl bg-sky-600 text-white flex items-center justify-center font-bold text-lg shrink-0">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold text-sky-950">Prompt Commercial Response</h4>
                        <p class="text-[11px] text-sky-800 mt-0.5">Wholesale inquiries are answered within 2 hours during active business shifts.</p>
                    </div>
                </div>

            </div>

            <!-- Right Interactive Form -->
            <div class="lg:col-span-7">
                <div class="luxury-card rounded-3xl p-8 sm:p-10">
                    
                    <div class="mb-6">
                        <h3 class="font-serif text-2xl font-bold text-slate-900">Submit Online Enquiry</h3>
                        <p class="text-xs text-slate-500 mt-1">Directly routes to our supply management system.</p>
                    </div>

                    <!-- Live Success Banner -->
                    <div x-show="enquirySuccess" 
                         x-transition 
                         class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-300 text-emerald-800 text-xs flex items-start gap-3"
                         style="display: none;">
                        <i class="fa-solid fa-circle-check text-emerald-600 text-base mt-0.5"></i>
                        <div>
                            <p class="font-bold text-emerald-950">Enquiry Received Successfully</p>
                            <p class="mt-0.5 text-emerald-800" x-text="toastMessage"></p>
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
                            alert('Network issue. Please WhatsApp us directly at {{ $brand['phone'] }}.');
                        });
                    " class="space-y-4">
                        
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="form-name" class="block text-xs font-semibold text-slate-700 mb-1">
                                    Your Name / Company <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="form-name" name="name" required placeholder="e.g. Ramesh Patel"
                                       class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-xs text-slate-900 placeholder-slate-400 focus:outline-none focus:border-sky-600 focus:bg-white transition">
                            </div>

                            <div>
                                <label for="form-phone" class="block text-xs font-semibold text-slate-700 mb-1">
                                    Phone / WhatsApp <span class="text-red-500">*</span>
                                </label>
                                <input type="tel" id="form-phone" name="phone" required placeholder="e.g. +91 98765 43210"
                                       class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-xs text-slate-900 placeholder-slate-400 focus:outline-none focus:border-sky-600 focus:bg-white transition">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="form-email" class="block text-xs font-semibold text-slate-700 mb-1">
                                    Email Address (Optional)
                                </label>
                                <input type="email" id="form-email" name="email" placeholder="name@domain.com"
                                       class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-xs text-slate-900 placeholder-slate-400 focus:outline-none focus:border-sky-600 focus:bg-white transition">
                            </div>

                            <div>
                                <label for="form-category" class="block text-xs font-semibold text-slate-700 mb-1">
                                    Product Category
                                </label>
                                <select id="form-category" name="product_type" x-model="selectedCategory"
                                        class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-xs text-slate-900 focus:outline-none focus:border-sky-600 focus:bg-white transition">
                                    <option value="Packaged Drinking Water">Premium Packaged Drinking Water</option>
                                    <option value="Alkaline Water (pH 8.5+)">Ionized Alkaline Water (pH 8.5+)</option>
                                    <option value="Both Categories">Both Categories</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="form-size" class="block text-xs font-semibold text-slate-700 mb-1">
                                    Bottle Size Format
                                </label>
                                <select id="form-size" name="bottle_size" x-model="selectedSize"
                                        class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-xs text-slate-900 focus:outline-none focus:border-sky-600 focus:bg-white transition">
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
                                <label for="form-sector" class="block text-xs font-semibold text-slate-700 mb-1">
                                    Industry / Requirement Sector
                                </label>
                                <select id="form-sector" name="sector"
                                        class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-xs text-slate-900 focus:outline-none focus:border-sky-600 focus:bg-white transition">
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
                            <label for="form-message" class="block text-xs font-semibold text-slate-700 mb-1">
                                Requirement Details (Cases / Recurring Frequency / Location)
                            </label>
                            <textarea id="form-message" name="message" rows="3" placeholder="Provide estimated order quantity, delivery address, or scheduling frequency..."
                                      class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-2.5 text-xs text-slate-900 placeholder-slate-400 focus:outline-none focus:border-sky-600 focus:bg-white transition"></textarea>
                        </div>

                        <div class="pt-2">
                            <button type="submit" 
                                    id="submit-enquiry-button"
                                    :disabled="enquirySubmitting"
                                    class="w-full flex items-center justify-center gap-2 bg-slate-900 hover:bg-sky-800 text-white font-semibold text-xs py-3.5 rounded-xl shadow-sm hover:shadow transition duration-200 disabled:opacity-50">
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
