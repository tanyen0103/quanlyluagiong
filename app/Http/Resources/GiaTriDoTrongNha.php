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
        'Giống'=> $this->ChiTieuTrongNha->Giong->giong_ten ,
        'Gié C2'=> $this->ChiTieuTrongNha->chitieutrongnha_giec2 ,
        'Độ rụng hạt'=> $this->ChiTieuTrongNha->chitieutrongnha_dorunghat ,
        'Màu sắc vỏ trấu'=> $this->ChiTieuTrongNha->chitieutrongnha_msvotrau ,
        'Dạng thóc'=> $this->ChiTieuTrongNha->chitieutrongnha_dangthoc ,
        'Màu sắc gạo'=> $this->ChiTieuTrongNha->chitieutrongnha_mausacgao ,
        'Trọng lượng 1000 hạt'=> $this->ChiTieuTrongNha->chitieutrongnha_tl1000hat ,
        'Độ ẩm'=> $this->ChiTieuTrongNha->chitieutrongnha_doam ,
        'Thơm'=> $this->ChiTieuTrongNha->chitieutrongnha_thom ,
        'Đánh giá'=> $this->ChiTieuTrongNha->chitieutrongnha_danhgia ,

        'Tên giá trị đo'=> $this->LoaiGiaTriDo->loaigiatrido_ten,
        'Đơn vị'=> $this->LoaiGiaTriDo->loaigiatrido_donvi,

        'Giá trị'=> $this->giatridotrongnha_giatri ,
        'created_at' => $this->created_at->format('d/m/Y'),
        'updated_at' => $this->updated_at->format('d/m/Y'),
      ];
    }
}
