<?php

namespace App\Models;

use App\Models\GiaTriTinhTrang;
use App\Models\DoiTuongTinhTrang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DacDiemTinhTrang extends Model
{
    use HasFactory;

    protected $table = 'dacdiemtinhtrang';

    protected $fillable = [
        'dacdiemtt_ten',
    ];

    public function GiaTriTinhTrang(){
        return $this->hasMany(GiaTriTinhTrang::class, 'dacdiemtinhtrang_id', 'id');
    }

    public function DoiTuongTinhTrang(){
        return $this->belongsTo(DoiTuongTinhTrang::class, 'doituongtinhtrang_id');
    }
}
