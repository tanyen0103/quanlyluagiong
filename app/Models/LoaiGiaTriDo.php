<?php

namespace App\Models;

use App\Models\GiaTriDoTrongNha;
use App\Models\GiaTriDoNgoaiDong;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LoaiGiaTriDo extends Model
{
    use HasFactory;

    protected $table = 'loaigiatrido';

    protected $fillable = [
        'loaigiatrido_ten',
        'loaigiatrido_donvi',
        'phanloai'
    ];

    public function GiaTriDoNgoaiDong(){
        return $this->hasMany(GiaTriDoNgoaiDong::class, 'loaigiatrido_id', 'id');
    }

    public function GiaTriDoTrongNha(){
        return $this->hasMany(GiaTriDoTrongNha::class, 'loaigiatrido_id', 'id');
    }
}
