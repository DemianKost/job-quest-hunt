<?php

declare(strict_types=1);

namespace App\Http\Resources\Web;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Web\TagResource;
use App\Models\Vacancy;

/**
 * @property-read Vacancy $resource
 */
class VacancyResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->getKey(),
            'title' => $this->resource->title,
            'description' => $this->resource->description,
            'short_description' => substr( $this->resource->description, 90 ),
            'tags' => TagResource::collection(
                resource: $this->resource->tags
            ),
            'author' =>  new AuthorResource(
                resource: $this->resource->author
            ),
            'created_at' => $this->resource->created_at->diffForHumans(),
        ];
    }
}
