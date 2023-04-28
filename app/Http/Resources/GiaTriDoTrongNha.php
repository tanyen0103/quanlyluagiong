<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GiaTriDoTrongNha extends JsonResource
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
        'giong_id'=> $this->ChiTieuTrongNha->Giong->id,
        'chitieutrongnha_giec2'=> $this->ChiTieuTrongNha->chitieutrongnha_giec2 ,
        'chitieutrongnha_dorunghat'=> $this->ChiTieuTrongNha->chitieutrongnha_dorunghat ,
        'chitieutrongnha_msvotrau'=> $this->ChiTieuTrongNha->chitieutrongnha_msvotrau ,
        'chitieutrongnha_dangthoc'=> $this->ChiTieuTrongNha->chitieutrongnha_dangthoc ,
        'chitieutrongnha_mausacgao'=> $this->ChiTieuTrongNha->chitieutrongnha_mausacgao ,
        'chitieutrongnha_tl1000hat'=> $this->ChiTieuTrongNha->chitieutrongnha_tl1000hat ,
        'chitieutrongnha_doam'=> $this->ChiTieuTrongNha->chitieutrongnha_doam ,
        'chitieutrongnha_thom'=> $this->ChiTieuTrongNha->chitieutrongnha_thom ,
        'chitieutrongnha_danhgia'=> $this->ChiTieuTrongNha->chitieutrongnha_danhgia ,

        'loaigiatrido_ten'=> $this->LoaiGiaTriDo->loaigiatrido_ten,
        'loaigiatrido_donvi'=> $this->LoaiGiaTriDo->loaigiatrido_donvi,

        'giatridotrongnha_giatri'=> $this->giatridotrongnha_giatri ,
        'created_at' => $this->created_at->format('d/m/Y'),
        'updated_at' => $this->updated_at->format('d/m/Y'),
      ];
    }
}
