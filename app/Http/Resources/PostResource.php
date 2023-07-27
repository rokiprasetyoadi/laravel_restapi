<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // Mengatur data apa saja yg bisa diakses
        $ini = 5*5;
        return [
            'id' => $this->id,
            'title' => $this->title,
            'nomor' => $ini,
            'dibuat' => date_format($this->created_at, "Y/m/d H:i:s")
        ];
    }
}
