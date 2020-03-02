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
            'image_path' => asset($this->thumbnail_path),
            'created_at' => $this->created_at->format('Y-m-d H:i'),
            'id' => $this->id,
            'edit_link' => route('blog.edit', ['blog' => $this->id]),
            'delete_link' => route('blog.delete', ['blog' => $this->id]),
            'view_link' => route('show-features', ['blog' => $this->id]),
        ];
    }
}
