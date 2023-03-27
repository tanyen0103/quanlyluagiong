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
            'nhomgiong_code' => $this->nhomgiong_code,
            'nhomgiong_ten' => $this->nhomgiong_ten,
            'nhomgiong_mota' => $this->nhomgiong_mota,
            'nhomgiong_ngayngam' => $this->nhomgiong_ngayngam,
            'nhomgiong_ngaycay' => $this->nhomgiong_ngaycay,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
          ];
    }
}
