<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Giong extends JsonResource
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
            'giong_ten' => $this->giong_ten,
            'giong_ngaytrobong'=> $this->giong_ngaytrobong,
            'giong_ngaychin'=> $this->giong_ngaychin,
            'nhomgiong_id' => $this->NhomGiong->id,
            'kieuhinh_id' => $this->KieuHinh->id,
            'giong_nguongoc' => $this->giong_nguongoc,
            'giong_mota' => $this->giong_mota,
            'giong_hinhanh' => $this->giong_hinhanh,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
          ];
    }
}
