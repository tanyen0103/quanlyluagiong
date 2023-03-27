<?php

namespace App\Http\Resources;

use App\Models\GiaiDoanTruongThanh;
use Illuminate\Http\Resources\Json\JsonResource;

class DoiTuongTinhTrang extends JsonResource
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
            'giaidoantt_ten' => $this->GiaiDoanTruongThanh->giaidoantt_ten,
            'doituongtt_ten' => $this->doituongtt_ten,
            'doituongtt_mota' => $this->doituongtt_mota,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
          ];
    }
}
