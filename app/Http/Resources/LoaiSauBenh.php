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
            'Tên loại sâu bệnh' => $this->loaisaubenh_ten,
            'Đơn vị' => $this->loaisaubenh_donvi,
            'Mô tả' => $this->loaisaubenh_mota,
            'Hình ảnh' => $this->loaisaubenh_hinhanh,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
          ];
    }
}
