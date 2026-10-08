@extends('layouts.app')

@section('title', $post->title . ' | VELORA PURE Journal')
@section('meta_description', Str::limit(strip_tags($post->excerpt ?: $post->content), 155))

@section('content')
    <!-- Article Header -->
    <article class="bg-white">
        <header class="bg-gradient-to-b from-slate-900 via-sky-950 to-slate-900 text-white pt-20 pb-20 relative overflow-hidden">
            <div class="absolute inset-0 opacity-15 pointer-events-none bg-[radial-gradient(#38bdf8_1px,transparent_1px)] [background-size:20px_20px]"></div>
            
            <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <!-- Breadcrumb -->
                <div class="inline-flex items-center gap-2 text-xs text-sky-300 font-medium mb-6">
                    <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                    <span>/</span>
                    <a href="{{ route('blog.index') }}" class="hover:text-white transition">Journal</a>
                    <span>/</span>
                    <span class="text-slate-300">{{ $post->category }}</span>
                </div>

                <div class="mb-4">
                    <span class="inline-block px-3.5 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-sky-500/20 text-sky-300 border border-sky-400/30">
                        {{ $post->category }}
                    </span>
                </div>

                <h1 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-white mb-6 leading-tight">
                    {{ $post->title }}
                </h1>

                @if ($post->excerpt)
                    <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed mb-8">
                        {{ $post->excerpt }}
                    </p>
                @endif

                <!-- Meta info -->
                <div class="flex flex-wrap items-center justify-center gap-4 sm:gap-6 text-xs text-slate-300 border-t border-slate-800/80 pt-6">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-sky-500/20 text-sky-300 flex items-center justify-center font-bold text-xs border border-sky-400/30">
                            {{ substr($post->author_name, 0, 1) }}
                        </div>
                        <span class="font-semibold text-white">{{ $post->author_name }}</span>
                    </div>
                    <span>•</span>
                    <div class="flex items-center gap-1.5">
                        <i class="fa-regular fa-calendar"></i>
                        <span>{{ $post->published_at ? $post->published_at->format('M d, Y') : $post->created_at->format('M d, Y') }}</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Featured Image Container -->
        @if ($post->featured_image)
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10 sm:-mt-14 relative z-10">
                <div class="rounded-3xl overflow-hidden shadow-2xl border-4 border-white bg-slate-900 max-h-[500px]">
                    <img src="{{ asset('storage/' . $post->featured_image) }}" 
                         alt="{{ $post->title }}" 
                         class="w-full h-full object-cover max-h-[500px]">
                </div>
            </div>
        @endif

        <!-- Article Body -->
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="prose prose-lg sm:prose-xl max-w-none prose-slate prose-headings:font-serif prose-headings:text-slate-900 prose-a:text-sky-600 hover:prose-a:text-sky-700 prose-img:rounded-2xl prose-img:shadow-md">
                {!! $post->content !!}
            </div>

            <!-- Share & Back Actions -->
            <div class="mt-14 pt-8 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4">
                <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 text-xs font-bold text-slate-700 hover:text-sky-600 transition">
                    <i class="fa-solid fa-arrow-left"></i> Back to All Articles
                </a>

                <div class="flex items-center gap-2">
                    <span class="text-xs font-semibold text-slate-500 mr-2">Share Article:</span>
                    <a href="https://api.whatsapp.com/send?text={{ urlencode($post->title . ' ' . url()->current()) }}" 
                       target="_blank" 
                       class="w-8 h-8 rounded-full bg-emerald-50 text-emerald-600 hover:bg-emerald-600 hover:text-white flex items-center justify-center text-xs transition"
                       title="Share on WhatsApp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ urlencode(url()->current()) }}" 
                       target="_blank" 
                       class="w-8 h-8 rounded-full bg-slate-100 text-slate-600 hover:bg-slate-900 hover:text-white flex items-center justify-center text-xs transition"
                       title="Share on X / Twitter">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" 
                       target="_blank" 
                       class="w-8 h-8 rounded-full bg-sky-50 text-sky-600 hover:bg-sky-600 hover:text-white flex items-center justify-center text-xs transition"
                       title="Share on LinkedIn">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
            </div>

            <!-- B2B / Water Supply CTA Box -->
            <div class="mt-12 bg-gradient-to-br from-slate-900 via-sky-950 to-slate-900 rounded-3xl p-8 sm:p-10 text-white relative overflow-hidden shadow-xl">
                <div class="relative z-10">
                    <span class="text-[11px] font-bold uppercase tracking-wider text-sky-300">VELORA PURE SUPPLY</span>
                    <h3 class="font-serif text-2xl sm:text-3xl font-bold mt-2 mb-3">Partner With Us for Premium Drinking Water</h3>
                    <p class="text-xs sm:text-sm text-slate-300 mb-6 max-w-xl">
                        Looking for certified pure packaged drinking water or ionized alkaline water for your office, hotel, gym, or events? Contact our institutional desk today.
                    </p>
                    <div class="flex flex-wrap gap-3">
                        <a href="{{ route('home') }}#enquiry-section" class="px-6 py-2.5 rounded-full bg-sky-500 hover:bg-sky-600 text-white font-semibold text-xs transition shadow-md">
                            Submit B2B Enquiry
                        </a>
                        <a href="https://wa.me/{{ config('velora.brand.whatsapp_number') }}?text={{ urlencode('Hi Velora Pure, I was reading your journal and want to inquire about supply.') }}" 
                           target="_blank"
                           class="px-5 py-2.5 rounded-full bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-xs transition shadow-md inline-flex items-center gap-1.5">
                            <i class="fa-brands fa-whatsapp"></i> WhatsApp Desk
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Articles Section -->
        @if ($relatedPosts->isNotEmpty())
            <section class="py-16 bg-slate-50 border-t border-slate-200">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <span class="text-xs font-bold text-sky-600 uppercase tracking-wider">Further Reading</span>
                            <h2 class="font-serif text-2xl sm:text-3xl font-bold text-slate-900 mt-1">Related Articles</h2>
                        </div>
                        <a href="{{ route('blog.index') }}" class="text-xs font-bold text-sky-600 hover:text-sky-700 flex items-center gap-1">
                            Browse All <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach ($relatedPosts as $related)
                            <article class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition group flex flex-col justify-between">
                                <a href="{{ route('blog.show', $related->slug) }}" class="relative h-44 overflow-hidden bg-slate-900 block">
                                    @if ($related->featured_image)
                                        <img src="{{ asset('storage/' . $related->featured_image) }}" 
                                             alt="{{ $related->title }}" 
                                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    @else
                                        <div class="w-full h-full bg-gradient-to-tr from-slate-900 to-sky-900 flex items-center justify-center">
                                            <i class="fa-solid fa-droplet text-3xl text-sky-400/30"></i>
                                        </div>
                                    @endif
                                </a>
                                <div class="p-5 flex-1 flex flex-col justify-between">
                                    <div>
                                        <span class="text-[10px] font-bold text-sky-600 uppercase tracking-wider">{{ $related->category }}</span>
                                        <h3 class="font-serif text-lg font-bold text-slate-900 group-hover:text-sky-600 transition duration-200 leading-snug mt-1.5 mb-2">
                                            <a href="{{ route('blog.show', $related->slug) }}">
                                                {{ $related->title }}
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-400">
                                        <span>{{ $related->published_at ? $related->published_at->format('M d, Y') : $related->created_at->format('M d, Y') }}</span>
                                        <span class="font-bold text-sky-600">Read <i class="fa-solid fa-arrow-right text-[9px]"></i></span>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    </article>
@endsection
