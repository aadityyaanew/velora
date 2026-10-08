<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * Display a listing of published blog posts.
     */
    public function index(Request $request): View
    {
        $category = $request->query('category');

        $query = Post::published()->latest('published_at');

        if ($category && $category !== 'All') {
            $query->where('category', $category);
        }

        $posts = $query->paginate(9)->withQueryString();

        $categories = Post::published()
            ->whereNotNull('category')
            ->distinct()
            ->pluck('category');

        $featuredPost = $posts->currentPage() === 1 && ! $category
            ? $posts->first()
            : null;

        return view('blog.index', compact('posts', 'categories', 'category', 'featuredPost'));
    }

    /**
     * Display the specified blog post.
     */
    public function show(string $slug): View
    {
        $post = Post::published()
            ->where('slug', $slug)
            ->firstOrFail();

        $relatedPosts = Post::published()
            ->where('id', '!=', $post->id)
            ->where(function ($q) use ($post) {
                $q->where('category', $post->category);
            })
            ->latest('published_at')
            ->take(3)
            ->get();

        if ($relatedPosts->count() < 3) {
            $fallback = Post::published()
                ->where('id', '!=', $post->id)
                ->whereNotIn('id', $relatedPosts->pluck('id'))
                ->latest('published_at')
                ->take(3 - $relatedPosts->count())
                ->get();
            $relatedPosts = $relatedPosts->concat($fallback);
        }

        return view('blog.show', compact('post', 'relatedPosts'));
    }
}
