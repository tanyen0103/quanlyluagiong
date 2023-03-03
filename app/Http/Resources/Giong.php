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
            'Tên giống' => $this->giong_ten,
            'Nhóm giống' => $this->NhomGiong->nhomgiong_ten,
            'Kiểu hình' => $this->KieuHinh->kieuhinh_ten,
            'Nguồn gốc' => $this->giong_nguongoc,
            'Mô tả' => $this->giong_mota,
            'Hình ảnh' => $this->giong_hinhanh,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
          ];
    }
}
