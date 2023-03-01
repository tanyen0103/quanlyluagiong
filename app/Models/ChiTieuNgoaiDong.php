<?php

namespace App\Models;

use App\Models\Giong;
use App\Models\GiaTriDoNgoaiDong;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChiTieuNgoaiDong extends Model
{
    use HasFactory;

    protected $table = 'chitieungoaidong';

    protected $fillable = [
       'chitieungoaidong_phienla',
       'chitieungoaidong_taila',
       'chitieungoaidong_gocnhanh',
       'chitieungoaidong_bela',
       'chitieungoaidong_gocla',
       'chitieungoaidong_msgocla',
       'chitieungoaidong_gocladong',
       'chitieungoaidong_thoatcb',
       'chitieungoaidong_msgocthan',
       'chitieungoaidong_dangbong',
       'chitieungoaidong_congtrucbong',
       'chitieungoaidong_rau',
    ];

    public function GiaTriDoNgoaiDong(){
        return $this->hasMany(GiaTriDoNgoaiDong::class, 'chitieungoaidong_id', 'id');
    }

    public function Giong(){
        return $this->belongsTo(Giong::class, 'giong_id');
    }
}
