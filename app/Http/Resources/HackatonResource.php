<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HackatonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "name" => $this->name,
            "place" => $this->place,
            "date" => $this->date,
            "best_developers" => $this->developers->map(function ($developer) {
                return [
                    "name" => $developer->name,
                    "gender" => $developer->gender,
                    "email" => $developer->email,
                    "position" => $developer->pivot->puesto
                ];
            })
        ];

    }
}
