<?php

declare(strict_types=1);

namespace App\Http\Resources\Web;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property-read User $resource
 */
class AuthorResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => $this->resource->type,
            'name' => $this->resource->name,
            'profile_photo_path' => $this->resource->profile_photo_path,
        ];
    }
}
