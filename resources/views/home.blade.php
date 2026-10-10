@extends('layouts.app')

@section('title', 'VELORA PURE | Premium Packaged Drinking & Ionized Alkaline Water')
@section('meta_description', 'VELORA PURE - Pure By Nature, Trusted Worldwide. Premium Packaged Drinking Water and Ionized Alkaline Water (pH 8.5+) in 250 ML, 500 ML, 1 L, 2.5 L, 5 L, and 20 L formats for Gyms, Clinics, Corporates, and Luxury Hospitality.')

@section('content')
    <!-- Hero Section -->
    @include('components.hero')

    <!-- Complete Product Formats (Top 6 by Order) -->
    @include('components.products', ['products' => $products])

    <!-- Premium Packaged Drinking Water Deep Dive -->
    @include('components.packaged-water')

    <!-- Ionized Alkaline Water (pH 8.5+) Showcase -->
    @include('components.alkaline-water')

    <!-- B2B & Commercial Institutional Sectors -->
    @include('components.b2b-sectors')

    <!-- 7-Stage Advanced Scientific Purification & Certifications -->
    @include('components.quality-process')

    <!-- Commercial & Trade Enquiry Form + Contacts -->
    @include('components.enquiry-form')
@endsection
