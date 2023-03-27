<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoaiSauBenh extends JsonResource
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
            'loaisaubenh_ten' => $this->loaisaubenh_ten,
            'loaisaubenh_donvi' => $this->loaisaubenh_donvi,
            'loaisaubenh_mota' => $this->loaisaubenh_mota,
            'loaisaubenh_hinhanh' => $this->loaisaubenh_hinhanh,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
          ];
    }
}
