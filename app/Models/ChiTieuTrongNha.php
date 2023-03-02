<?php

namespace App\Models;

use App\Models\Giong;
use App\Models\GiaTriDoTrongNha;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChiTieuTrongNha extends Model
{
    use HasFactory;
    protected $table = 'chitieutrongnha';

    protected $fillable = [
        'chitieutrongnha_giec2',
        'chitieutrongnha_dorunghat',
        'chitieutrongnha_msvotrau',
        'chitieutrongnha_dangthoc',
        'chitieutrongnha_mausacgao',
        'chitieutrongnha_tl1000hat',
        'chitieutrongnha_doam',
        'chitieutrongnha_thom',
        'chitieutrongnha_danhgia'
    ];

    public function GiaTriDoTrongNha(){
        return $this->hasMany(GiaTriDoTrongNha::class, 'chitieutrongnha_id', 'id');
    }

    public function Giong(){
        return $this->belongsTo(Giong::class, 'giong_id');
    }
}
