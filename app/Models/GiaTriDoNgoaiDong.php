<?php

namespace App\Models;

use App\Models\LoaiGiaTriDo;
use App\Models\ChiTieuNgoaiDong;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GiaTriDoNgoaiDong extends Model
{
    use HasFactory;

    protected $table = 'giatridongoaidong';

    protected $fillable = [
        'giatridongoaidong_giatri',
    ];

    public function LoaiGiaTriDo(){
        return $this->belongsTo(LoaiGiaTriDo::class, 'loaigiatrido_id');
    }

    public function ChiTieuNgoaiDong(){
        return $this->belongsTo(ChiTieuNgoaiDong::class, 'chitieungoaidong_id');
    }
}
