<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoanResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user' => new UserResource($this->user),
            'book' => new BookResource($this->book),
            'loan_date' => $this->loan_date,
            'return_date' => $this->return_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

