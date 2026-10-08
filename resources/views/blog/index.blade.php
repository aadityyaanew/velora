@extends('layouts.app')

@section('title', 'VELORA PURE Journal | Insights on Water Purity, Health & Industry')
@section('meta_description', 'Explore articles, hydration insights, pure water science, and commercial beverage industry innovations from VELORA PURE experts.')

@section('content')
    <!-- Blog Header Banner -->
    <section class="relative bg-gradient-to-b from-slate-900 via-sky-950 to-slate-900 text-white pt-20 pb-16 overflow-hidden">
        <div class="absolute inset-0 opacity-15 pointer-events-none bg-[radial-gradient(#38bdf8_1px,transparent_1px)] [background-size:20px_20px]"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-sky-500/10 border border-sky-400/30 text-sky-300 text-xs font-semibold tracking-wider uppercase mb-5">
                <i class="fa-solid fa-feather-pointed"></i> VELORA JOURNAL & INSIGHTS
            </div>
            <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-white mb-6">
                Pure Knowledge & Hydration Science
            </h1>
            <p class="max-w-2xl mx-auto text-slate-300 text-base sm:text-lg font-light leading-relaxed">
                Discover in-depth articles on international purification standards, ionized alkaline water, corporate wellness, and hospitality water trends.
            </p>

            <!-- Category Pills Filter -->
            <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mt-10">
                <a href="{{ route('blog.index') }}" 
                   class="px-5 py-2 rounded-full text-xs sm:text-sm font-semibold transition {{ empty($category) ? 'bg-sky-500 text-white shadow-lg shadow-sky-500/25' : 'bg-slate-800/80 hover:bg-slate-700 text-slate-300 border border-slate-700' }}">
                    All Topics
                </a>
                @foreach ($categories as $cat)
                    <a href="{{ route('blog.index', ['category' => $cat]) }}" 
                       class="px-5 py-2 rounded-full text-xs sm:text-sm font-semibold transition {{ $category === $cat ? 'bg-sky-500 text-white shadow-lg shadow-sky-500/25' : 'bg-slate-800/80 hover:bg-slate-700 text-slate-300 border border-slate-700' }}">
                        {{ $cat }}
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-16 bg-slate-50 min-h-[600px]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @if ($posts->isEmpty())
                <!-- Empty State -->
                <div class="bg-white rounded-3xl p-12 text-center border border-slate-200/80 shadow-sm max-w-xl mx-auto my-12">
                    <div class="w-16 h-16 rounded-full bg-sky-50 text-sky-600 flex items-center justify-center mx-auto mb-4 text-2xl">
                        <i class="fa-regular fa-newspaper"></i>
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-slate-800 mb-2">No Articles Found</h3>
                    <p class="text-sm text-slate-500 mb-6">We haven't published articles in this topic yet, or articles are currently being prepared.</p>
                    <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-sky-600 text-white text-xs font-semibold hover:bg-sky-700 transition">
                        View All Articles
                    </a>
                </div>
            @else
                <!-- Hero Featured Article (If on page 1 and no specific category filter) -->
                @if ($featuredPost && $posts->currentPage() === 1 && empty($category))
                    <div class="mb-14">
                        <div class="bg-white rounded-3xl overflow-hidden border border-slate-200/90 shadow-sm hover:shadow-xl transition-all duration-300 group grid grid-cols-1 lg:grid-cols-12">
                            <div class="lg:col-span-7 relative h-72 sm:h-96 lg:h-full min-h-[320px] overflow-hidden bg-slate-900">
                                @if ($featuredPost->featured_image)
                                    <img src="{{ asset('storage/' . $featuredPost->featured_image) }}" 
                                         alt="{{ $featuredPost->title }}" 
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                @else
                                    <div class="w-full h-full bg-gradient-to-tr from-slate-900 via-sky-900 to-cyan-800 flex items-center justify-center">
                                        <i class="fa-solid fa-water text-6xl text-sky-400/30"></i>
                                    </div>
                                @endif
                                <div class="absolute top-4 left-4">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-sky-500 text-white shadow-md">
                                        <i class="fa-solid fa-star text-[10px]"></i> Featured Article
                                    </span>
                                </div>
                            </div>
                            <div class="lg:col-span-5 p-8 sm:p-10 flex flex-col justify-between bg-white">
                                <div>
                                    <div class="flex items-center gap-3 text-xs text-slate-500 mb-3 font-medium">
                                        <span class="text-sky-600 font-bold uppercase tracking-wider">{{ $featuredPost->category }}</span>
                                        <span>•</span>
                                        <span>{{ $featuredPost->published_at ? $featuredPost->published_at->format('M d, Y') : $featuredPost->created_at->format('M d, Y') }}</span>
                                    </div>
                                    <h2 class="font-serif text-2xl sm:text-3xl font-bold text-slate-900 group-hover:text-sky-600 transition duration-300 leading-snug mb-4">
                                        <a href="{{ route('blog.show', $featuredPost->slug) }}">
                                            {{ $featuredPost->title }}
                                        </a>
                                    </h2>
                                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed line-clamp-4 mb-6">
                                        {{ $featuredPost->excerpt ?: Str::limit(strip_tags($featuredPost->content), 180) }}
                                    </p>
                                </div>
                                <div class="pt-6 border-t border-slate-100 flex items-center justify-between">
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-8 h-8 rounded-full bg-sky-100 text-sky-700 flex items-center justify-center font-bold text-xs">
                                            {{ substr($featuredPost->author_name, 0, 1) }}
                                        </div>
                                        <span class="text-xs font-semibold text-slate-700">{{ $featuredPost->author_name }}</span>
                                    </div>
                                    <a href="{{ route('blog.show', $featuredPost->slug) }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-sky-600 group-hover:translate-x-1 transition-transform">
                                        Read Article <i class="fa-solid fa-arrow-right text-[11px]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Article Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($posts as $post)
                        @if ($featuredPost && $posts->currentPage() === 1 && empty($category) && $post->id === $featuredPost->id)
                            @continue
                        @endif
                        <article class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1 flex flex-col group">
                            <!-- Thumbnail -->
                            <a href="{{ route('blog.show', $post->slug) }}" class="relative h-52 overflow-hidden bg-slate-900 block">
                                @if ($post->featured_image)
                                    <img src="{{ asset('storage/' . $post->featured_image) }}" 
                                         alt="{{ $post->title }}" 
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                @else
                                    <div class="w-full h-full bg-gradient-to-tr from-slate-900 to-sky-900 flex items-center justify-center">
                                        <i class="fa-solid fa-droplet text-4xl text-sky-400/30"></i>
                                    </div>
                                @endif
                                <div class="absolute top-3 left-3">
                                    <span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-white/95 text-sky-700 shadow backdrop-blur-sm">
                                        {{ $post->category }}
                                    </span>
                                </div>
                            </a>

                            <!-- Card Body -->
                            <div class="p-6 flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center gap-2 text-[11px] text-slate-400 font-medium mb-2.5">
                                        <i class="fa-regular fa-calendar"></i>
                                        <span>{{ $post->published_at ? $post->published_at->format('M d, Y') : $post->created_at->format('M d, Y') }}</span>
                                    </div>
                                    <h3 class="font-serif text-xl font-bold text-slate-900 group-hover:text-sky-600 transition duration-200 leading-snug mb-3">
                                        <a href="{{ route('blog.show', $post->slug) }}">
                                            {{ $post->title }}
                                        </a>
                                    </h3>
                                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed line-clamp-3 mb-4">
                                        {{ $post->excerpt ?: Str::limit(strip_tags($post->content), 120) }}
                                    </p>
                                </div>

                                <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                                    <span class="text-slate-500 font-medium flex items-center gap-1.5">
                                        <i class="fa-regular fa-user text-slate-400"></i> {{ $post->author_name }}
                                    </span>
                                    <a href="{{ route('blog.show', $post->slug) }}" class="font-bold text-sky-600 group-hover:translate-x-1 transition-transform inline-flex items-center gap-1">
                                        Read <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-12">
                    {{ $posts->links() }}
                </div>
            @endif

        </div>
    </section>
@endsection
