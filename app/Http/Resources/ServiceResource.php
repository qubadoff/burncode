<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
{

    protected string $lang;

    public function __construct($resource)
    {
        parent::__construct($resource);

        $this->lang = request()->header('lang', 'az');
    }

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
            'slug' => $this->slug,
            'description' => $this->description,
            'body' => $this->body,
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
