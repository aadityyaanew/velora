@extends('layouts.app')

@section('title', 'Terms of Service | VELORA PURE')
@section('meta_description', 'Terms of Service for VELORA PURE. Outline of commercial terms, supply agreements, and platform usage conditions.')

@section('content')
<div class="pt-32 pb-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-16 border-b border-slate-200 pb-10">
            <h1 class="text-4xl md:text-5xl font-medium text-slate-900 font-serif mb-6">Terms of Service</h1>
            <p class="text-sm text-slate-500 uppercase tracking-widest font-bold">Last Updated: {{ date('F Y') }}</p>
        </div>

        <div class="prose prose-lg prose-slate max-w-none">
            <p>
                Welcome to <strong>VELORA PURE</strong>. By accessing our platform or engaging our commercial supply services, you agree to comply with and be bound by the following Terms of Service.
            </p>

            <h2 class="text-2xl font-serif text-slate-900 mt-10 mb-4">1. Commercial Agreements</h2>
            <p>
                All wholesale orders, distribution agreements, and scheduled institutional contracts are subject to approval by the VELORA PURE commercial desk. We reserve the right to modify supply schedules in the event of unforeseen logistical constraints, prioritizing existing institutional partners.
            </p>

            <h2 class="text-2xl font-serif text-slate-900 mt-10 mb-4">2. Product Quality Assurance</h2>
            <p>
                VELORA PURE guarantees that all Packaged Drinking Water and Ionized Alkaline Water meets stringent 7-stage purification standards at the time of bottling. It is the responsibility of the receiving party to store the product in appropriate conditions (away from direct sunlight and contaminants) to maintain its integrity.
            </p>

            <h2 class="text-2xl font-serif text-slate-900 mt-10 mb-4">3. Intellectual Property</h2>
            <p>
                The VELORA PURE brand name, logo, bottle designs, and all related digital content are proprietary assets. Unauthorized reproduction, distribution, or misrepresentation of our brand is strictly prohibited and subject to legal action.
            </p>

            <h2 class="text-2xl font-serif text-slate-900 mt-10 mb-4">4. Limitation of Liability</h2>
            <p>
                While we strive for operational perfection, VELORA PURE shall not be held liable for indirect, incidental, or consequential damages arising from delays in delivery or the inability to utilize our digital platforms due to technical disruptions.
            </p>

            <h2 class="text-2xl font-serif text-slate-900 mt-10 mb-4">5. Governing Law</h2>
            <p>
                These Terms of Service are governed by and construed in accordance with the local jurisdictional laws where our primary bottling facility operates. Any disputes shall be resolved exclusively in the corresponding courts.
            </p>
        </div>

    </div>
</div>
@endsection
