<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Resources\Blog\BlogResource;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class BlogController extends Controller
{
    protected News $news;

    public function __construct(News $news)
    {
        $this->news = $news;
    }

    public function list(): AnonymousResourceCollection
    {
        $blogs = $this->news->paginate(10);

        return BlogResource::collection($blogs);
    }
}
