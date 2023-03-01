<?php

namespace App\Models;

use App\Models\Giong;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MaPTN extends Model
{
    use HasFactory;

    protected $table = 'maptn';

    protected $fillable = [
        'ptn_code',
        'ptn_mota'
    ];

    public function Giong(){
        return $this->belongsTo(Giong::class, 'giong_id');
    }
}
