<?php

namespace App\Models;

use App\Models\GiaTriDoSauBenh;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LoaiSauBenh extends Model
{
    use HasFactory;

    protected $table = 'loaisaubenh';

    protected $fillable = [
        'loaisaubenh_ten',
        'loaisaubenh_ten_slug',
        'loaisaubenh_donvi',
        'loaisaubenh_hinhanh',
        'loaisaubenh_mota'
    ];

    public function GiaTriDoSauBenh(){
        return $this->hasMany(GiaTriDoSauBenh::class, 'loaisaubenh_id', 'id');
    }

}
