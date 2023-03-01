<?php

namespace App\Models;

use App\Models\DacDiemTinhTrang;
use App\Models\GiaiDoanTruongThanh;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DoiTuongTinhTrang extends Model
{
    use HasFactory;

    protected $table = 'doituongtinhtrang';

    protected $fillable = [
        'doituongtt_ten',
        'doituongtt_mota'
    ];

    public function DacDiemTinhTrang(){
        return $this->hasMany(DacDiemTinhTrang::class, 'doituongtinhtrang_id', 'id');
    }

    public function GiaiDoanTruongThanh(){
        return $this->belongsTo(GiaiDoanTruongThanh::class, 'giaidoantruongthanh_id');
    }
}
