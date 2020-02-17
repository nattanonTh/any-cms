<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BannerResource extends JsonResource
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
            'link' => $this->link,
            'image_path' => asset($this->thumbnail_path),
            'created_at' => $this->created_at->format('Y-m-d H:i'),
            'id' => $this->id,
            'edit_link' => route('banner.edit', ['banner' => $this->id]),
            'delete_link' => route('banner.delete', ['banner' => $this->id]),
        ];
    }
}
