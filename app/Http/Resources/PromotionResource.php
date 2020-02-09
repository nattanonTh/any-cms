<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PromotionResource extends JsonResource
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
            'edit_link' => route('promotion.edit', ['promotion' => $this->id]),
            'delete_link' => route('promotion.delete', ['promotion' => $this->id]),
        ];
    }
}
