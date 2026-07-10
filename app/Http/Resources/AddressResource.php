<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'company_id' => $this->company_id,
            'street' => $this->street,
            'number' => $this->number,
            'city' => $this->city,
            'neighborhood' => $this->neighborhood,
            'state' => $this->state,
            'cep' => $this->cep,
        ];
    }
}