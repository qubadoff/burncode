<?php

namespace App\Http\Resources\Project;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'body' => $this->body,
            'image' => url('/') . '/storage/' . $this->image,
            'project_link' => $this->project_link,
            'client_info' => $this->client_info,
            'slug' => $this->slug,
        ];
    }
}
