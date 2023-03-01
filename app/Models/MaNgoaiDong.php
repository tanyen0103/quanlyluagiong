<?php

namespace App\Models;

use App\Models\Giong;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MaNgoaiDong extends Model
{
    use HasFactory;

    protected $table = 'mangoaidong';

    protected $fillable = [
        'field_code',
        'field_mota'
    ];

    public function Giong(){
        return $this->belongsTo(Giong::class, 'giong_id');
    }
}
