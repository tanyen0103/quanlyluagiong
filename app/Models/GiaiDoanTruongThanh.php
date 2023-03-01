<?php

namespace App\Models;

use App\Models\DoiTuongTinhTrang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GiaiDoanTruongThanh extends Model
{
    use HasFactory;

    protected $table = 'giaidoantruongthanh';

    protected $fillable = [
        'giaidoantt_ten',
        'giaidoantt_mota'
    ];

    public function DoiTuongTinhTrang(){
        return $this->hasMany(DoiTuongTinhTrang::class, 'giaidoantruongthanh_id', 'id');
    }
}
