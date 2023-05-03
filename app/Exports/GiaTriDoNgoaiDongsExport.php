<?php

namespace App\Exports;

use App\Models\GiaTriDoNgoaiDong;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;

class GiaTriDoNgoaiDongsExport implements FromCollection, WithHeadings, WithCustomStartCell, WithMapping, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return GiaTriDoNgoaiDong::with('chitieungoaidong')
        ->orderBy('chitieungoaidong_id', 'asc')->get();
    }

    public function headings(): array
    {
        return [
            'STT',
            'Nhóm giống',
            'Mã ngoài đồng',
            'Giống',
            'Phiến lá',
            'Tai lá',
            'Góc nhánh',
            'Bẹ lá',
            'Góc lá',
            'Màu sắc góc lá',
            'Góc lá đòng',
            'Thoát CB',
            'Màu sắc góc thân',
            'Dáng bông',
            'Cong trục bông',
            'Râu',
            'Tên giá trị đo',
            'Đơn vị',
            'Giá trị',
        ];
    }
    public function map($row): array
    {
        static $i = 0;
        $i++;

        $mangoaidong_code = $row->ChiTieuNgoaiDong->Giong->MaNgoaiDong->pluck('field_code')->implode(', ');

        return [
            $i,
            $row->ChiTieuNgoaiDong->Giong->NhomGiong->nhomgiong_code,
            $mangoaidong_code,
            $row->ChiTieuNgoaiDong->Giong->giong_ten,
            $row->ChiTieuNgoaiDong->chitieungoaidong_phienla,
            $row->ChiTieuNgoaiDong->chitieungoaidong_taila,
            $row->ChiTieuNgoaiDong->chitieungoaidong_gocnhanh,
            $row->ChiTieuNgoaiDong->chitieungoaidong_bela,
            $row->ChiTieuNgoaiDong->chitieungoaidong_gocla,
            $row->ChiTieuNgoaiDong->chitieungoaidong_msgocla,
            $row->ChiTieuNgoaiDong->chitieungoaidong_gocladong,
            $row->ChiTieuNgoaiDong->chitieungoaidong_thoatcb,
            $row->ChiTieuNgoaiDong->chitieungoaidong_msgocthan,
            $row->ChiTieuNgoaiDong->chitieungoaidong_dangbong,
            $row->ChiTieuNgoaiDong->chitieungoaidong_congtrucbong,
            $row->ChiTieuNgoaiDong->chitieungoaidong_rau,

            $row->LoaiGiaTriDo->loaigiatrido_ten,
            $row->LoaiGiaTriDo->loaigiatrido_donvi,

            $row->giatridongoaidong_giatri,

        ];
    }
    public function startCell(): string
    {
        return 'A1';
    }
}
