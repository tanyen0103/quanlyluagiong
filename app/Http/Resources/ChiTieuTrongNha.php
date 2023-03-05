<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChiTieuTrongNha extends JsonResource
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
            'Gié C2' => $this->chitieutrongnha_giec2,
            'Độ rụng hạt' => $this->chitieutrongnha_dorunghat,
            'Màu sắc vỏ trấu' => $this->chitieutrongnha_msvotrau,
            'Dạng thọc' => $this->chitieutrongnha_dangthoc,
            'Màu sắc gạo' => $this->chitieutrongnha_mausacgao,
            'Trọng lượng 1000 hạt' => $this->chitieutrongnha_tl1000hat,
            'Độ ẩm' => $this->chitieutrongnha_doam,
            'Thơm' => $this->chitieutrongnha_thom,
            'Đánh giá' => $this->chitieutrongnha_danhgia,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
          ];
    }
}
