<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
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
            'id' => $this->id,
            'event_name' => $this->event_name,
            'event_schedule' => $this->event_schedule,
            'created_at' => $this->created_at->format('Y-m-d H:i'),
            'edit_link' => route('event.edit', ['event' => $this->id]),
        ];
    }
}
