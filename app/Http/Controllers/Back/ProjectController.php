<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Resources\Blog\CategoryResource;
use App\Http\Resources\Project\ProjectResource;
use App\Models\Project;
use App\Models\ProjectCategory;
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

    public function singleProject(Request $request): ProjectResource
    {
        $validated = $request->validate([
            'id' => 'sometimes|integer|exists:projects,id',
            'slug' => 'sometimes|string|exists:projects,slug',
        ]);

        if (!empty($validated['id'])) {
            $project = Project::query()->findOrFail($validated['id']);
        } elseif (!empty($validated['slug'])) {
            $project = Project::query()->where('slug', $validated['slug'])->firstOrFail();
        } else {
            abort(400, 'id or slug is required');
        }

        return new ProjectResource($project);
    }

    public function categories(): AnonymousResourceCollection
    {
        return CategoryResource::collection(ProjectCategory::all());
    }
}
