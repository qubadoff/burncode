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
        $langRaw = $request->header('lang', 'az');
        $lang = is_array($langRaw) ? $langRaw[0] : $langRaw;

        $name = json_decode($this->name, true);
        $description = json_decode($this->description, true);
        $body = json_decode($this->body, true);

        return [
            'id' => $this->id,
            'name' => $name[$lang] ?? $name['az'] ?? null,
            'slug' => $this->slug,
            'description' => $description[$lang] ?? $description['az'] ?? null,
            'body' => $body[$lang] ?? $body['az'] ?? null,
            'image' => $this->image ? url('/storage/' . $this->image) : null,
        ];
    }

}
