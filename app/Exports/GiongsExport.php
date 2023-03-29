<?php

namespace App\Exports;

use App\Models\Giong;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class GiongsExport implements FromCollection, WithHeadings, WithCustomStartCell, WithMapping, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Giong::with('nhomgiong')
        ->orderBy('nhomgiong_id', 'asc')
        ->get();
    }

    public function headings(): array
    {
        return [
            'stt',
            'Nhóm giống',
            'Tên kiểu hình',
            'Mã ngoài đồng',
            'Mã phòng thí nghiệm',
            'Tên giống',
            'Mô tả',
            'Nguồn gốc',
            'Hình ảnh',
        ];
    }
    public function map($row): array
    {
        // HasMany
        $mangoaidong_code = $row->MaNgoaiDong->pluck('field_code')->implode(', ');
        $ptn_code = $row->MaPTN->pluck('ptn_code')->implode(', ');

        return [
            $row->id,
            // BelongTo
            $row->NhomGiong->nhomgiong_code,
            $row->KieuHinh->kieuhinh_ten,

             // HasMany
            $mangoaidong_code,
            $ptn_code,

            $row->giong_ten,
            $row->giong_mota,
            $row->giong_nguongoc,
            $row->giong_hinhanh,
        ];
    }
    public function startCell(): string
    {
        return 'A1';
    }
}
