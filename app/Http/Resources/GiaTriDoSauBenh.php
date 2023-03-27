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
            'giong_ten'=> $this->ChiTieuSauBenh->Giong->giong_ten ,
            'chitieusaubenh_chonloc'=> $this->ChiTieuSauBenh->chitieusaubenh_chonloc ,
            'chitieusaubenh_danhgia'=> $this->ChiTieuSauBenh->chitieusaubenh_danhgia ,

            'loaisaubenh_ten'=> $this->LoaiSauBenh->loaisaubenh_ten,
            'loaisaubenh_mota'=> $this->LoaiSauBenh->loaisaubenh_mota,
            'loaisaubenh_hinhanh' => $this->LoaiSauBenh->loaisaubenh_hinhanh,
            'loaisaubenh_donvi'=> $this->LoaiSauBenh->loaisaubenh_donvi,

            'giatridosaubenh_giatri'=> $this->giatridosaubenh_giatri ,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
          ];
    }
}
