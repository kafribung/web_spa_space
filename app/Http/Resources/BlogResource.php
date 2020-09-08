<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'description' => \Str::limit($this->description, 50),
            'description_2' => $this->description,
            'slug'   => \Str::slug($this->slug),
            'user'  => $this->user->name,
            'created_at' => $this->created_at->format('d M, Y')
        ];
    }
}
