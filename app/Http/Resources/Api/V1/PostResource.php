<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'type' => 'posts',
            'attributes' => [
                'title' => $this->title,
                'body' => $this->body,
                'published' => $this->published,
            ],
            'relationships' =>[
                'user' => new UserResource($this->whenLoaded('user')),
            ],
            'links' => [
                'self' => route('api:v1:posts:show', $this->id),
                'parent' => route('api:v1:posts:index'),
            ],
        ];
    }
}
