<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GiaTriDoNgoaiDong extends JsonResource
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
            'Giống' => $this->ChiTieuNgoaiDong->Giong->giong_ten,
            'Phiến lá' => $this->ChiTieuNgoaiDong->chitieungoaidong_phienla,
            'Tai lá' => $this->ChiTieuNgoaiDong->chitieungoaidong_taila,
            'Góc nhánh' => $this->ChiTieuNgoaiDong->chitieungoaidong_gocnhanh,
            'Bẹ lá' => $this->ChiTieuNgoaiDong->chitieungoaidong_bela,
            'Góc lá' => $this->ChiTieuNgoaiDong->chitieungoaidong_gocla,
            'Màu sắc góc lá' => $this->ChiTieuNgoaiDong->chitieungoaidong_msgocla,
            'Góc lá đồng' => $this->ChiTieuNgoaiDong->chitieungoaidong_gocladong,
            'Thoát CB' => $this->ChiTieuNgoaiDong->chitieungoaidong_thoatcb,
            'Màu sắc góc thân' => $this->ChiTieuNgoaiDong->chitieungoaidong_msgocthan,
            'Dạng bông' => $this->ChiTieuNgoaiDong->chitieungoaidong_dangbong,
            'Cong trục bông' => $this->ChiTieuNgoaiDong->chitieungoaidong_congtrucbong,
            'Râu' => $this->ChiTieuNgoaiDong->chitieungoaidong_rau,
            'Loại giá trị đo' => $this->LoaiGiaTriDo->loaigiatrido_ten,
            'Đơn vị' => $this->LoaiGiaTriDo->loaigiatrido_donvi,
            'Giá trị đo ngoài đồng' => $this->giatridongoaidong_giatri,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
          ];
    }
}
