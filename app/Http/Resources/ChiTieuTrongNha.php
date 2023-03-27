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
            'giong_ten' => $this->Giong->giong_ten,
            'chitieutrongnha_giec2' => $this->chitieutrongnha_giec2,
            'chitieutrongnha_dorunghat' => $this->chitieutrongnha_dorunghat,
            'chitieutrongnha_msvotrau' => $this->chitieutrongnha_msvotrau,
            'chitieutrongnha_dangthoc' => $this->chitieutrongnha_dangthoc,
            'chitieutrongnha_mausacgao' => $this->chitieutrongnha_mausacgao,
            'chitieutrongnha_tl1000hat' => $this->chitieutrongnha_tl1000hat,
            'chitieutrongnha_doam' => $this->chitieutrongnha_doam,
            'chitieutrongnha_thom' => $this->chitieutrongnha_thom,
            'chitieutrongnha_danhgia' => $this->chitieutrongnha_danhgia,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
          ];
    }
}
