<?php

namespace App\Models;

use App\Models\LoaiSauBenh;
use App\Models\ChiTieuSauBenh;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GiaTriDoSauBenh extends Model
{
    use HasFactory;

    protected $table = 'giatridosaubenh';

    protected $fillable = [
        'giatridosaubenh_giatri',
    ];

    public function LoaiSauBenh(){
        return $this->belongsTo(LoaiSauBenh::class, 'loaisaubenh_id');
    }

    public function ChiTieuSauBenh(){
        return $this->belongsTo(ChiTieuSauBenh::class, 'chitieusaubenh_id');
    }
}
