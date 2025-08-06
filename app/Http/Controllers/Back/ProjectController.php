<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Resources\Blog\BlogResource;
use App\Http\Resources\Project\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ProjectController extends Controller
{
    protected Project $project;

    public function __construct(Project $project)
    {
        $this->project = $project;
    }

    public function list(Request $request): AnonymousResourceCollection
    {
        $query = $this->project->query();

        if ($request->filled('category_id')) {
            $query->where('cat_id', $request->category_id);
        }

        $blogs = $query->paginate(10);

        return ProjectResource::collection($blogs);
    }
}
