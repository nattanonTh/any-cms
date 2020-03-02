<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VideoResource extends JsonResource
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
            'name' => $this->name,
            'link' => $this->link,
            'created_at' => $this->created_at->format('Y-m-d H:i'),
            'id' => $this->id,
            'edit_link' => route('video.edit', ['video' => $this->id]),
            'delete_link' => route('video.delete', ['video' => $this->id]),
        ];
    }
}
