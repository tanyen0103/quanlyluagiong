<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GiaTriDoSauBenh extends JsonResource
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
            'Giống'=> $this->ChiTieuSauBenh->Giong->giong_ten ,
            'Chọn lọc'=> $this->ChiTieuSauBenh->chitieusaubenh_chonloc ,
            'Đánh giá khác'=> $this->ChiTieuSauBenh->chitieusaubenh_danhgia ,

            'Tên loại'=> $this->LoaiSauBenh->loaisaubenh_ten,
            'Mô tả'=> $this->LoaiSauBenh->loaisaubenh_mota,
            'Hình ảnh' => $this->LoaiSauBenh->loaisaubenh_hinhanh,
            'Đơn vị'=> $this->LoaiSauBenh->loaisaubenh_donvi,

            'Giá trị'=> $this->giatridosaubenh_giatri ,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
          ];
    }
}
