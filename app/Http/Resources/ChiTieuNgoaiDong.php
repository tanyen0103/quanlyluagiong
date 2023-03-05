<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChiTieuNgoaiDong extends JsonResource
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
            'Tên giống' => $this->Giong->giong_ten,
            'Phiến lá' => $this->chitieungoaidong_phienla,
            'Tai lá' => $this->chitieungoaidong_taila,
            'Góc nhánh' => $this->chitieungoaidong_gocnhanh,
            'Bẹ lá' => $this->chitieungoaidong_bela,
            'góc lá' => $this->chitieungoaidong_gocla,
            'Màu sắc góc lá' => $this->chitieungoaidong_msgocla,
            'Góc lá đồng' => $this->chitieungoaidong_gocladong,
            'Thoát cổ bông' => $this->chitieungoaidong_thoatcb,
            'Màu sắc góc thân' => $this->chitieungoaidong_msgocthan,
            'Dáng bông' => $this->chitieungoaidong_dangbong,
            'Cong trục bông' => $this->chitieungoaidong_congtrucbong,
            'Râu' => $this->chitieungoaidong_rau,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
          ];
    }
}
