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
        $this->lang = $request->header('lang', 'az');

        return [
            'id' => $this->id,
            'name' => $this->getLocalizedField('name'),
            'slug' => $this->slug,
            'description' => $this->getLocalizedField('description'),
            'body' => $this->getLocalizedField('body'),
            'image' => $this->image ? url('/storage/' . $this->image) : null
        ];
    }

    protected function getLocalizedField(string $field): ?string
    {
        $value = $this->{$field};

        if (is_array($value)) {
            return $value[$this->lang] ?? $value['az'] ?? null;
        }

        if (is_string($value)) {
            $decoded = json_decode($value, true);
            return is_array($decoded)
                ? ($decoded[$this->lang] ?? $decoded['az'] ?? null)
                : $value;
        }

        return $value;
    }
}
