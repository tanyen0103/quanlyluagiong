<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DacDiemTinhTrang extends JsonResource
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
            'doituongtt_ten' => $this->DoiTuongTinhTrang->doituongtt_ten,
            'dacdiemtt_ten' => $this->dacdiemtt_ten,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
          ];
    }
}
