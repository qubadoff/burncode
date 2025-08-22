<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Resources\Blog\BlogListResource;
use App\Http\Resources\Blog\BlogResource;
use App\Http\Resources\Blog\CategoryResource;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class BlogController extends Controller
{
    protected News $news;

    public function __construct(News $news)
    {
        $this->news = $news;
    }

    public function list(Request $request): AnonymousResourceCollection
    {
        $query = $this->news->query();

        if ($request->filled('category_id')) {
            $query->where('cat_id', $request->category_id);
        }

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%");
            });
        }

        $blogs = $query->orderBy('created_at', 'desc')->paginate(9);

        return BlogListResource::collection($blogs);
    }

    public function singleNews(Request $request): BlogResource
    {
        $validated = $request->validate([
            'id'   => 'sometimes|integer|exists:news,id',
            'slug' => 'sometimes|string|exists:news,slug',
        ]);

        if (!empty($validated['id'])) {
            $news = News::query()->findOrFail($validated['id']);
        } elseif (!empty($validated['slug'])) {
            $news = News::query()->where('slug', $validated['slug'])->firstOrFail();
        } else {
            abort(400, 'id or slug is required !');
        }

        return new BlogResource($news);
    }

    public function categories(): AnonymousResourceCollection
    {
        return CategoryResource::collection(NewsCategory::all());
    }
}
