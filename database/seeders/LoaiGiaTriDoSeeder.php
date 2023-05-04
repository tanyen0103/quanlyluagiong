<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LoaiGiaTriDoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loaigiatrido')->insert([
            [ 'loaigiatrido_ten'=> 'Cao cây', 'loaigiatrido_donvi'=> 'cm'],
            [ 'loaigiatrido_ten'=> 'Số chồi', 'loaigiatrido_donvi'=> 'chồi'],
            [ 'loaigiatrido_ten'=> 'D lá cờ', 'loaigiatrido_donvi'=> 'cm'],
            [ 'loaigiatrido_ten'=> 'R lá cờ', 'loaigiatrido_donvi'=> 'cm'],
            [ 'loaigiatrido_ten'=> 'Dài bông', 'loaigiatrido_donvi'=> 'cm'],
            [ 'loaigiatrido_ten'=> 'D gạo', 'loaigiatrido_donvi'=> 'cm'],
            [ 'loaigiatrido_ten'=> 'R gạo', 'loaigiatrido_donvi'=> 'cm'],
            [ 'loaigiatrido_ten'=> 'Hạt chắc', 'loaigiatrido_donvi'=> 'hạt'],
            [ 'loaigiatrido_ten'=> 'Hạt lép', 'loaigiatrido_donvi'=> 'hạt'],
            [ 'loaigiatrido_ten'=> 'TL hạt chắc', 'loaigiatrido_donvi'=> 'gr'],
        ]);
    }
}
