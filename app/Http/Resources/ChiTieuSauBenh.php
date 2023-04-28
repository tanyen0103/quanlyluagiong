<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChiTieuSauBenh extends JsonResource
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
            'id' => $this->id,
            'giong_id' => $this->Giong->id,
            'chitieusaubenh_chonloc' => $this->chitieusaubenh_chonloc,
            'chitieusaubenh_danhgia' => $this->chitieusaubenh_danhgia,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
          ];
    }
}
