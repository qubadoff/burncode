<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
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

        $blogs = $query->paginate(9);

        return BlogResource::collection($blogs);
    }

    public function singleNews(Request $request): BlogResource
    {
        $validated = $request->validate([
            'id' => 'required|integer|exists:news,id',
        ]);

        return new BlogResource($validated['id']);
    }

    public function categories(): AnonymousResourceCollection
    {
        return CategoryResource::collection(NewsCategory::all());
    }
}
