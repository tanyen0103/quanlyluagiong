<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NhomGiong extends JsonResource
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
            'Mã nhóm giống' => $this->nhomgiong_code,
            'Tên nhóm giống' => $this->nhomgiong_ten,
            'Mô tả' => $this->nhomgiong_mota,
            'Ngày cấy' => $this->nhomgiong_ngayngam,
            'Ngày ngâm' => $this->nhomgiong_ngaycay,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
          ];
    }
}
