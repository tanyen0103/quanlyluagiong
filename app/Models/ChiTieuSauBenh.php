<?php

namespace App\Models;

use App\Models\Giong;
use App\Models\GiaTriDoSauBenh;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChiTieuSauBenh extends Model
{
    use HasFactory;

    protected $table = 'chitieusaubenh';

    protected $fillable = [
        'chitieusaubenh_chonloc',
        'chitieusaubenh_danhgia'
    ];

    public function GiaTriDoSauBenh(){
        return $this->hasMany(GiaTriDoSauBenh::class, 'chitieusaubenh_id', 'id');
    }

    public function Giong(){
        return $this->belongsTo(Giong::class, 'giong_id');
    }
}
