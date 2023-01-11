<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->description,
            'stock' => $this->stock,
            'categories' => $this->categories,
            'years' => $this->years
        ]];
    }
}
