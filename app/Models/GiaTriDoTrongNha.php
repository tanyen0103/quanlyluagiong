<?php

namespace App\Models;

use App\Models\LoaiGiaTriDo;
use App\Models\ChiTieuTrongNha;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GiaTriDoTrongNha extends Model
{
    use HasFactory;

    protected $table = 'giatridotrongnha';

    protected $fillable = [
        'giatridotrongnha_giatri',
    ];

    public function LoaiGiaTriDo(){
        return $this->belongsTo(LoaiGiaTriDo::class, 'loaigiatrido_id');
    }

    public function ChiTieuTrongNha(){
        return $this->belongsTo(ChiTieuTrongNha::class, 'chitieutrongnha_id');
    }
}
