<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MemberResource extends JsonResource
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
            'name' => $this->name,
            'surname' => $this->surname,
            'id_card' => $this->id_card,
            'mobile_no' => $this->mobile_no,
            'created_at' => $this->created_at->format('Y-m-d H:i'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i'),
            'status' => $this->status,
            'edit_link' => route('member.edit', ['member' => $this->id]),
            'delete_link' => route('member.delete', ['member' => $this->id]),
        ];
    }
}
