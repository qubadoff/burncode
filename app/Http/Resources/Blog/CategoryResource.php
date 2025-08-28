<?php

namespace App\Http\Resources\Blog;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;


class CategoryResource extends JsonResource
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
            'id'          => $this->id,
            'name'        => $this->getTranslation('name', $locale),
            'description' => $this->getTranslation('description', $locale),
            'slug'        => $this->slug,
        ];
    }
}
