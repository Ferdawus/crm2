<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReferrerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id' =>$this->id,
            'referrer_name' => $this->referrer_name,
            'contact_number' => $this->contact_number,
            'alternative_number' => $this->alternative_number,
            'address'=>$this->address,   
            'commission'=>$this->commission,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]; 
    }
}