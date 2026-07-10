<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->type,
            'email' => $this->email,
            'fantasy_name' => $this->fantasy_name,
            'description' => $this->description,
            'summary' => $this->summary_company,
            'address' => AddressResource::make(
                $this->whenLoaded('address')
            ),
        ];
    }
}