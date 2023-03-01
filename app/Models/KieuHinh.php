<?php

namespace App\Models;

use App\Models\Giong;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KieuHinh extends Model
{
    use HasFactory;

    protected $table = 'kieuhinh';

    protected $fillable = [

        'kieuhinh_ten',
        'kieuhinh_mota'
    ];

    public function Giong()
    {
    return $this->hasMany(Giong::class, 'kieuhinh_id', 'id');
    }
}
