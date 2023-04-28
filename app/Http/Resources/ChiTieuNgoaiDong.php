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
            'giong_id' => $this->Giong->id,
            'chitieungoaidong_phienla' => $this->chitieungoaidong_phienla,
            'chitieungoaidong_taila'=> $this->chitieungoaidong_taila,
            'chitieungoaidong_gocnhanh'=> $this->chitieungoaidong_gocnhanh,
            'chitieungoaidong_bela'=> $this->chitieungoaidong_bela,
            'chitieungoaidong_gocla'=> $this->chitieungoaidong_gocla,
            'chitieungoaidong_msgocla'=> $this->chitieungoaidong_msgocla,
            'chitieungoaidong_gocladong'=> $this->chitieungoaidong_gocladong,
            'chitieungoaidong_thoatcb'=> $this->chitieungoaidong_thoatcb,
            'chitieungoaidong_msgocthan'=> $this->chitieungoaidong_msgocthan,
            'chitieungoaidong_dangbong'=> $this->chitieungoaidong_dangbong,
            'chitieungoaidong_congtrucbong'=> $this->chitieungoaidong_congtrucbong,
            'chitieungoaidong_rau'=> $this->chitieungoaidong_rau,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
          ];
    }
}
