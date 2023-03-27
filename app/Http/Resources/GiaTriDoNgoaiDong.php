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
            'giong_ten' => $this->ChiTieuNgoaiDong->Giong->giong_ten,
            'chitieungoaidong_taila' => $this->ChiTieuNgoaiDong->chitieungoaidong_taila,
            'chitieungoaidong_gocnhanh' => $this->ChiTieuNgoaiDong->chitieungoaidong_gocnhanh,
            'chitieungoaidong_bela' => $this->ChiTieuNgoaiDong->chitieungoaidong_bela,
            'chitieungoaidong_gocla' => $this->ChiTieuNgoaiDong->chitieungoaidong_gocla,
            'chitieungoaidong_msgocla' => $this->ChiTieuNgoaiDong->chitieungoaidong_msgocla,
            'chitieungoaidong_gocladong' => $this->ChiTieuNgoaiDong->chitieungoaidong_gocladong,
            'chitieungoaidong_thoatcb' => $this->ChiTieuNgoaiDong->chitieungoaidong_thoatcb,
            'chitieungoaidong_msgocthan' => $this->ChiTieuNgoaiDong->chitieungoaidong_msgocthan,
            'chitieungoaidong_dangbong' => $this->ChiTieuNgoaiDong->chitieungoaidong_dangbong,
            'chitieungoaidong_congtrucbong' => $this->ChiTieuNgoaiDong->chitieungoaidong_congtrucbong,
            'chitieungoaidong_rau' => $this->ChiTieuNgoaiDong->chitieungoaidong_rau,
            'loaigiatrido_ten' => $this->LoaiGiaTriDo->loaigiatrido_ten,
            'loaigiatrido_donvi' => $this->LoaiGiaTriDo->loaigiatrido_donvi,
            'giatridongoaidong_giatri' => $this->giatridongoaidong_giatri,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
          ];
    }
}
