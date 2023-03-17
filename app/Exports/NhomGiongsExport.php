<?php

namespace App\Exports;

use App\Models\NhomGiong;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;

class NhomGiongsExport implements FromCollection, WithHeadings, WithCustomStartCell, WithMapping, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return NhomGiong::all();
    }

    public function headings(): array
    {
        return [
            'stt',
            'Mã nhóm',
            'Tên nhóm',
            'Mô tả',
            'Ngày ngâm',
            'Ngày cấy',
        ];
    }
    public function map($row): array
    {
        return [
            $row->id,
            $row->nhomgiong_code,
            $row->nhomgiong_ten,
            $row->nhomgiong_mota,
            $row->nhomgiong_ngayngam,
            $row->nhomgiong_ngaycay,
        ];
    }
    public function startCell(): string
    {
        return 'A1';
    }

}
