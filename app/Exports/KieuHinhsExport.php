<?php

namespace App\Exports;

use App\Models\KieuHinh;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;

class KieuHinhsExport implements FromCollection, WithHeadings, WithCustomStartCell, WithMapping, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return KieuHinh::all();
    }

    public function headings(): array
    {
        return [
            'stt',
            'Tên kiểu hình',
            'Mô tả',
        ];
    }
    public function map($row): array
    {
        return [
            $row->id,
            $row->kieuhinh_ten,
            $row->kieuhinh_mota,
        ];
    }
    public function startCell(): string
    {
        return 'A1';
    }
}
