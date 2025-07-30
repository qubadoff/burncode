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
        $lang = is_array($request->header('lang')) ? $request->header('lang')[0] : $request->header('lang', 'az');

        return [
            'id' => $this->id,
            'name' => is_array($this->name) ? ($this->name[$lang] ?? $this->name['az']) : null,
            'slug' => $this->slug,
            'description' => is_array($this->description) ? ($this->description[$lang] ?? $this->description['az']) : null,
            'body' => is_array($this->body) ? ($this->body[$lang] ?? $this->body['az']) : null,
            'image' => $this->image ? url('/storage/' . $this->image) : null,
        ];
    }
}
