<?php

namespace App\Exports;

use App\Models\GiaTriDoSauBenh;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;

class GiaTriDoSauBenhsExport implements FromCollection, WithHeadings, WithCustomStartCell, WithMapping, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return GiaTriDoSauBenh::with('ChiTieuSauBenh', 'LoaiSauBenh')
            ->orderBy('chitieusaubenh_id', 'asc')
            ->orderBy('loaisaubenh_id', 'asc')
            ->get();
    }

    public function headings(): array
    {
        return [
            'stt',

            'Nhóm giống',
            'Giống',
            'Chọn lọc',
            'Đánh giá khác',

            'Tên loại',
            'Mô tả',
            'Hình ảnh',
            'Đơn vị',

            'Giá trị',
];
    }
    public function map($row): array
    {
        return [
            $row->id,

            $row->ChiTieuSauBenh->Giong->NhomGiong->nhomgiong_code,
            $row->ChiTieuSauBenh->Giong->giong_ten,
            $row->ChiTieuSauBenh->chitieusaubenh_chonloc,
            $row->ChiTieuSauBenh->chitieusaubenh_danhgia,

            $row->LoaiSauBenh->loaisaubenh_ten,
            $row->LoaiSauBenh->loaisaubenh_mota,
            $row->LoaiSauBenh->loaisaubenh_hinhanh,
            $row->LoaiSauBenh->loaisaubenh_donvi,

            $row->giatridosaubenh_giatri,

        ];
    }
    public function startCell(): string
    {
        return 'A1';
    }
}
