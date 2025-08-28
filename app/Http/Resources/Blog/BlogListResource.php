<?php

namespace App\Http\Resources\Blog;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class BlogListResource extends JsonResource
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
            'id'         => $this->id,
            'title'      => $this->getTranslation('title', $locale),
            'slug'       => $this->slug,
            'image'      => $this->image ? url('/storage/' . $this->image) : null,
            'created_at' => Carbon::parse($this->created_at)->format('Y-m-d'),

            'category'   => [
                'id'   => $this->category->id,
                'name' => $this->category->getTranslation('name', $locale),
                'slug' => $this->category->slug,
            ],
        ];
    }
}
