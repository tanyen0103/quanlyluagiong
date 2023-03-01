<?php

namespace App\Models;

use App\Models\MaPTN;
use App\Models\KieuHinh;
use App\Models\NhomGiong;
use App\Models\MaNgoaiDong;
use App\Models\ChiTieuTrongNha;
use App\Models\ChiTieuNgoaiDong;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Giong extends Model
{
    use HasFactory;

    protected $table = 'giong';

    protected $fillable = [
        'giong_ten',
        'giong_ten_slug',
        'giong_nguongoc',
        'giong_mota',
        'giong_hinhanh',
    ];

    public function MaNgoaiDong(){
        return $this->hasMany(MaNgoaiDong::class, 'giong_id', 'id');
    }

    public function MaPTN(){
        return $this->hasMany(MaPTN::class, 'giong_id', 'id');
    }

    public function ChiTieuNgoaiDong(){
        return $this->hasMany(ChiTieuNgoaiDong::class, 'giong_id', 'id');
    }

    public function ChiTieuTrongNha(){
        return $this->hasMany(ChiTieuTrongNha::class, 'giong_id', 'id');
    }

    public function NhomGiong(){
        return $this->belongsTo(NhomGiong::class, 'nhomgiong_id');
    }

    public function KieuHinh(){
        return $this->belongsTo(KieuHinh::class, 'kieuhinh_id');
    }

}
