<?php

namespace App\Models;

use App\Models\GiaTriDoSauBenh;
use App\Models\GiaTriDoTrongNha;
use App\Models\GiaTriDoNgoaiDong;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GiaTriDoChiTiet extends Model
{
    protected $table = 'giatridochitiet';

    protected $fillable = [];

    public function GiaTriDoNgoaiDong(){
        return $this->belongsTo(GiaTriDoNgoaiDong::class, 'giatridongoaidong_id');
    }

    public function GiaTriDoTrongNha(){
        return $this->belongsTo(GiaTriDoTrongNha::class, 'giatridotrongnha_id');
    }

    public function GiaTriDoSauBenh(){
        return $this->belongsTo(GiaTriDoSauBenh::class, 'giatridosaubenh_id');
    }


}
