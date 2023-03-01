<?php

namespace App\Models;

use App\Models\Giong;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NhomGiong extends Model
{
    use HasFactory;

    protected $table = 'nhomgiong';

    public $incrementing = false;

    protected $fillable = [
        'nhomgiong_code',
        'nhomgiong_ten',
        'nhomgiong_mota',
        'nhomgiong_ngayngam',
        'nhomgiong_ngaycay'
    ];

    public function Giong()
    {
    return $this->hasMany(Giong::class, 'nhomgiong_id', 'id');
    }
}
