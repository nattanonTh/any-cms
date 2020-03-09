<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
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
            'thumb_path' => asset($this->thumb_path),
            'tag_name' => optional($this->tag)->tag_name ?? '-',
            'id' => $this->id,
            'edit_link' => route('image.edit', ['image' => $this->id]),
            'delete_link' => route('image.delete', ['image' => $this->id]),
            'view_link' => asset($this->path),
        ];
    }
}
