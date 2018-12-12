<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactsResource extends JsonResource
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
            'contact_owner' => $this->contact_owner,
            'added_by' => $this->added_by,
            'client_name' => $this->client_name,
            'client_surname' => $this->client_surname,
            'company' => $this->company,
            'position' => $this->position,
            'personal_mobile' => $this->personal_mobile,
            'work_mobile' => $this->work_mobile,
            'email' => $this->email,
            'facebook_id' => $this->facebook_id,
            'twitter_handler' => $this->twitter_handler,
            'instagram_id' => $this->instagram_id,
            'whatsapp_number' => $this->whatsapp_number,
        ];
    }
}
