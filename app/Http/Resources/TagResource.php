<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TagResource extends JsonResource
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
            'tag_name' => $this->tag_name,
            'created_at' => $this->created_at->format('Y-m-d H:i'),
            'id' => $this->id,
            'edit_link' => route('tag.edit', ['tag' => $this->id]),
            'delete_link' => route('tag.delete', ['tag' => $this->id]),
        ];
    }
}
