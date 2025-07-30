<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
{

    protected string $lang = 'az';

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $lang = strtolower($request->header('lang', 'az'));

        return [
            'id' => $this->id,
            'name' => $this->name[$lang] ?? $this->name['az'] ?? null,
            'slug' => $this->slug,
            'description' => $this->description[$lang] ?? $this->description['az'] ?? null,
            'body' => $this->body[$lang] ?? $this->body['az'] ?? null,
            'image' => $this->image ? url('/storage/' . $this->image) : null,
        ];
    }
}
