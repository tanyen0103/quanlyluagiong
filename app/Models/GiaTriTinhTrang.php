<?php

namespace App\Models;


use App\Models\DacDiemTinhTrang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GiaTriTinhTrang extends Model
{
    use HasFactory;
    protected $table = 'giatritinhtrang';

    protected $fillable = [
        'giatritt_diem',
    ];

    public function DacDiemTinhTrang(){
        return $this->belongsTo(DacDiemTinhTrang::class, 'dacdiemtinhtrang_id');
    }
}
