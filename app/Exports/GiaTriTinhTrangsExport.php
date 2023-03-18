<?php

namespace App\Exports;

use App\Models\GiaTriTinhTrang;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class GiaTriTinhTrangsExport implements FromCollection, WithHeadings, WithCustomStartCell, WithMapping, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return GiaTriTinhTrang::all();
    }

    public function headings(): array
    {
        return [
            'stt',
            'Đối tượng tính trạng',
            'Mô tả',

            'Giai đoạn trưởng thành',

            'Đặc điểm tính trạng',

            'Điểm',
        ];
    }
    public function map($row): array
    {

        return [
            $row->id,

            $row->DacDiemTinhTrang->DoiTuongTinhTrang->doituongtt_ten,
            $row->DacDiemTinhTrang->DoiTuongTinhTrang->doituongtt_mota,

            $row->DacDiemTinhTrang->DoiTuongTinhTrang->GiaiDoanTruongThanh->giaidoantt_ten,

            $row->DacDiemTinhTrang->dacdiemtt_ten,

            $row->giatritt_diem ,
        ];
    }
    public function startCell(): string
    {
        return 'A1';
    }
}
