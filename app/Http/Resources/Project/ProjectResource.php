<?php

namespace App\Http\Resources\Project;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $locale = App::getLocale();

        return [
            'id'           => $this->id,
            'name'         => $this->getTranslation('name', $locale),
            'description'  => $this->getTranslation('description', $locale),
            'body'         => $this->getTranslation('body', $locale),
            'image'        => $this->image ? url('/storage/' . $this->image) : null,
            'project_link' => $this->project_link,
            'client_info'  => $this->client_info,
            'slug'         => $this->slug,
        ];
    }
}
