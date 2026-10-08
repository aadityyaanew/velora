@extends('layouts.app')

@section('title', 'Privacy Policy | VELORA PURE')
@section('meta_description', 'VELORA PURE Privacy Policy. Understand how we collect, use, and protect your data when you interact with our services.')

@section('content')
<div class="pt-32 pb-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-16 border-b border-slate-200 pb-10">
            <h1 class="text-4xl md:text-5xl font-medium text-slate-900 font-serif mb-6">Privacy Policy</h1>
            <p class="text-sm text-slate-500 uppercase tracking-widest font-bold">Last Updated: {{ date('F Y') }}</p>
        </div>

        <div class="prose prose-lg prose-slate max-w-none">
            <p>
                At <strong>VELORA PURE</strong>, we hold the privacy and security of our clients in the highest regard. This Privacy Policy details our protocols regarding the collection, handling, and protection of your personal and commercial data when you engage with our digital platforms or commercial services.
            </p>

            <h2 class="text-2xl font-serif text-slate-900 mt-10 mb-4">1. Data Collection</h2>
            <p>
                We collect information directly from you when you submit a commercial enquiry, register for a wholesale account, or correspond with our desk. This includes, but is not limited to: your name, corporate entity, contact numbers, email addresses, and logistical delivery details.
            </p>

            <h2 class="text-2xl font-serif text-slate-900 mt-10 mb-4">2. Utilization of Information</h2>
            <p>
                The data we gather is strictly utilized to facilitate our business operations, which includes:
            </p>
            <ul>
                <li>Processing wholesale and retail orders efficiently.</li>
                <li>Managing logistical scheduling and delivery routes.</li>
                <li>Communicating critical updates regarding your supply chain.</li>
                <li>Responding promptly to commercial inquiries and support requests.</li>
            </ul>

            <h2 class="text-2xl font-serif text-slate-900 mt-10 mb-4">3. Data Protection</h2>
            <p>
                VELORA PURE employs industry-standard security measures to safeguard your commercial data against unauthorized access, alteration, or disclosure. We do not sell, trade, or lease your proprietary information to external third parties.
            </p>

            <h2 class="text-2xl font-serif text-slate-900 mt-10 mb-4">4. Cookies and Analytics</h2>
            <p>
                Our platform utilizes strictly necessary cookies to ensure seamless functionality and optimal user experience. We may also employ anonymized analytics to gauge platform performance and refine our digital presence.
            </p>

            <h2 class="text-2xl font-serif text-slate-900 mt-10 mb-4">5. Contacting the Privacy Officer</h2>
            <p>
                Should you require clarification on any aspect of our privacy protocols, you may direct your inquiries to our commercial desk via the contact information provided on our platform.
            </p>
        </div>

    </div>
</div>
@endsection
