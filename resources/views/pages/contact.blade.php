@extends('layouts.app')

@section('title', 'Contact Us | VELORA PURE')
@section('meta_description', 'Get in touch with the VELORA PURE commercial desk for wholesale orders, distribution partnerships, or general inquiries.')

@section('content')
<div class="pt-32 pb-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-medium text-slate-900 font-serif mb-6">Contact Our Desk</h1>
        <p class="text-lg text-slate-600 max-w-2xl mx-auto">
            Whether you require a dedicated supply for your facility or wish to explore distribution opportunities, our commercial team is ready to assist you.
        </p>
    </div>
</div>

<!-- Reusing the robust enquiry form component -->
@include('components.enquiry-form')

@endsection
