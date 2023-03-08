<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',

            'role-list',
            'role-create',
            'role-edit',
            'role-delete',

            'nhomgiong-list',
            'nhomgiong-create',
            'nhomgiong-edit',
            'nhomgiong-delete',

            'maptn-list',
            'maptn-create',
            'maptn-edit',
            'maptn-delete',

            'mangoaidong-list',
            'mangoaidong-create',
            'mangoaidong-edit',
            'mangoaidong-delete',

            'loaisaubenh-list',
            'loaisaubenh-create',
            'loaisaubenh-edit',
            'loaisaubenh-delete',

            'loaigiatrido-list',
            'loaigiatrido-create',
            'loaigiatrido-edit',
            'loaigiatrido-delete',

            'kieuhinh-list',
            'kieuhinh-create',
            'kieuhinh-edit',
            'kieuhinh-delete',

            'giong-list',
            'giong-create',
            'giong-edit',
            'giong-delete',

            'giatritinhtrang-list',
            'giatritinhtrang-create',
            'giatritinhtrang-edit',
            'giatritinhtrang-delete',

            'giatridotrongnha-list',
            'giatridotrongnha-create',
            'giatridotrongnha-edit',
            'giatridotrongnha-delete',

            'giatridosaubenh-list',
            'giatridosaubenh-create',
            'giatridosaubenh-edit',
            'giatridosaubenh-delete',

            'giatridongoaidong-list',
            'giatridongoaidong-create',
            'giatridongoaidong-edit',
            'giatridongoaidong-delete',

            'giaidoantruongthanh-list',
            'giaidoantruongthanh-create',
            'giaidoantruongthanh-edit',
            'giaidoantruongthanh-delete',

            'doituongtinhtrang-list',
            'doituongtinhtrang-create',
            'doituongtinhtrang-edit',
            'doituongtinhtrang-delete',

            'dacdiemtinhtrang-list',
            'dacdiemtinhtrang-create',
            'dacdiemtinhtrang-edit',
            'dacdiemtinhtrang-delete',

            'chitieutrongnha-list',
            'chitieutrongnha-create',
            'chitieutrongnha-edit',
            'chitieutrongnha-delete',

            'chitieusaubenh-list',
            'chitieusaubenh-create',
            'chitieusaubenh-edit',
            'chitieusaubenh-delete',

            'chitieungoaidong-list',
            'chitieungoaidong-create',
            'chitieungoaidong-edit',
            'chitieungoaidong-delete',

         ];

         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
    }
}
