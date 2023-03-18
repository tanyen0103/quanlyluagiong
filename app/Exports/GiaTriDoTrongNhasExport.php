<?php

namespace App\Exports;

use App\Models\GiaTriDoTrongNha;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;

class GiaTriDoTrongNhasExport implements FromCollection, WithHeadings, WithCustomStartCell, WithMapping, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return GiaTriDoTrongNha::all();
    }

    public function headings(): array
    {
        return [
            'stt',
            'Nhóm giống',
            'Mã phòng thí nghiệm',
            'Giống',
            'Gié C2',
            'Độ rụng hạt',
            'Màu sắc vỏ trấu',
            'Dạng thóc',
            'Màu sắc gạo',
            'Trọng lượng 1000 hạt',
            'Độ ẩm',
            'Thơm',
            'Đánh giá',
            'Tên giá trị đo',
            'Đơn vị',
            'Giá trị',
        ];
    }
    public function map($row): array
    {
        $ptn_code = $row->ChiTieuTrongNha->Giong->MaPTN->pluck('ptn_code')->implode(', ');
        return [
            $row->id,
            $row->ChiTieuTrongNha->Giong->NhomGiong->nhomgiong_code,
            $ptn_code,
            $row->ChiTieuTrongNha->Giong->giong_ten ,
            $row->ChiTieuTrongNha->chitieutrongnha_giec2 ,
            $row->ChiTieuTrongNha->chitieutrongnha_dorunghat ,
            $row->ChiTieuTrongNha->chitieutrongnha_msvotrau ,
            $row->ChiTieuTrongNha->chitieutrongnha_dangthoc ,
            $row->ChiTieuTrongNha->chitieutrongnha_mausacgao ,
            $row->ChiTieuTrongNha->chitieutrongnha_tl1000hat ,
            $row->ChiTieuTrongNha->chitieutrongnha_doam ,
            $row->ChiTieuTrongNha->chitieutrongnha_thom ,
            $row->ChiTieuTrongNha->chitieutrongnha_danhgia ,

            $row->LoaiGiaTriDo->loaigiatrido_ten,
            $row->LoaiGiaTriDo->loaigiatrido_donvi,

            $row->giatridotrongnha_giatri ,

        ];
    }
    public function startCell(): string
    {
        return 'A1';
    }
}
