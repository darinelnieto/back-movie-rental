<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[0 => [
            'start_date' => $this->start_date,
            'end_date'   => $this->end_date,
            'description'=> $this->description,
            'movie'      => $this->movies,
            'customer'   => $this->customers
        ]];
    }
}
