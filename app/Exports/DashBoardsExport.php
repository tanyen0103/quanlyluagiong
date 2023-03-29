<?php

namespace App\Exports;

use App\Models\Giong;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;

class DashBoardsExport implements FromCollection, WithHeadings, WithCustomStartCell, WithMapping, ShouldAutoSize
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
            'No',
            'Nhóm',
            'Kiểu hình',
            'Mã ngoài đồng',
            'Mã phòng thí nghiệm',
            'Tên',
            'Nguồn gốc',
            'Hình ảnh',

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
            // 'Tên giá trị đo',
            // 'Giá trị',
            // 'Đơn vị',

            'Gié C2',
            'Độ rụng hạt',
            'Màu sắc vỏ trấu',
            'Dạng thóc',
            'Màu sắc gạo',
            'Trọng lượng 1000 hạt',
            'Độ ẩm',
            'Thơm',
            'Đánh giá',
            // 'Tên giá trị đo',
            // 'Giá trị',
            // 'Đơn vị',

            'Chọn lọc',
            'Đánh giá khác',
            // 'Tên loại',
            // 'Hình ảnh',
            // 'Giá trị',
            // 'Đơn vị',
        ];
    }
    public function map($row): array
    {
        // HasMany
        $mangoaidong_code = $row->MaNgoaiDong->pluck('field_code')->implode(', ');
        $ptn_code = $row->MaPTN->pluck('ptn_code')->implode(', ');

        $chitieungoaidong_phienla = $row->ChiTieuNgoaiDong->pluck('chitieungoaidong_phienla')->implode(', ');
        $chitieungoaidong_taila = $row->ChiTieuNgoaiDong->pluck('chitieungoaidong_taila')->implode(', ');
        $chitieungoaidong_gocnhanh = $row->ChiTieuNgoaiDong->pluck('chitieungoaidong_gocnhanh')->implode(', ');
        $chitieungoaidong_bela = $row->ChiTieuNgoaiDong->pluck('chitieungoaidong_bela')->implode(', ');
        $chitieungoaidong_gocla = $row->ChiTieuNgoaiDong->pluck('chitieungoaidong_gocla')->implode(', ');
        $chitieungoaidong_msgocla = $row->ChiTieuNgoaiDong->pluck('chitieungoaidong_msgocla')->implode(', ');
        $chitieungoaidong_gocladong = $row->ChiTieuNgoaiDong->pluck('chitieungoaidong_gocladong')->implode(', ');
        $chitieungoaidong_thoatcb = $row->ChiTieuNgoaiDong->pluck('chitieungoaidong_thoatcb')->implode(', ');
        $chitieungoaidong_msgocthan = $row->ChiTieuNgoaiDong->pluck('chitieungoaidong_msgocthan')->implode(', ');
        $chitieungoaidong_dangbong = $row->ChiTieuNgoaiDong->pluck('chitieungoaidong_dangbong')->implode(', ');
        $chitieungoaidong_congtrucbong = $row->ChiTieuNgoaiDong->pluck('chitieungoaidong_congtrucbong')->implode(', ');
        $chitieungoaidong_rau = $row->ChiTieuNgoaiDong->pluck('chitieungoaidong_rau')->implode(', ');

        // $loaigiatridond_ten = $row->ChiTieuNgoaiDong->GiaTriDoNgoaiDong->LoaiGiaTriDo->pluck('loaigiatrido_ten')->implode(', ');
        // $giatridongoaidong_giatri = $row->ChiTieuNgoaiDong->GiaTriDoNgoaiDong->pluck('giatridongoaidong_giatri')->implode(', ');
        // $loaigiatridond_donvi = $row->ChiTieuNgoaiDong->GiaTriDoNgoaiDong->LoaiGiaTriDo->pluck('loaigiatrido_donvi')->implode(', ');

        $chitieutrongnha_giec2 = $row->ChiTieuTrongNha->pluck('chitieutrongnha_giec2')->implode(', ');
        $chitieutrongnha_dorunghat = $row->ChiTieuTrongNha->pluck('chitieutrongnha_dorunghat')->implode(', ');
        $chitieutrongnha_msvotrau = $row->ChiTieuTrongNha->pluck('chitieutrongnha_msvotrau')->implode(', ');
        $chitieutrongnha_dangthoc = $row->ChiTieuTrongNha->pluck('chitieutrongnha_dangthoc')->implode(', ');
        $chitieutrongnha_mausacgao = $row->ChiTieuTrongNha->pluck('chitieutrongnha_mausacgao')->implode(', ');
        $chitieutrongnha_tl1000hat = $row->ChiTieuTrongNha->pluck('chitieutrongnha_tl1000hat')->implode(', ');
        $chitieutrongnha_doam = $row->ChiTieuTrongNha->pluck('chitieutrongnha_doam')->implode(', ');
        $chitieutrongnha_thom = $row->ChiTieuTrongNha->pluck('chitieutrongnha_thom')->implode(', ');
        $chitieutrongnha_danhgia = $row->ChiTieuTrongNha->pluck('chitieutrongnha_danhgia')->implode(', ');

        // $loaigiatridotn_ten = $row->ChiTieuTrongNha->GiaTriDoTrongNha->LoaiGiaTriDo->pluck('loaigiatridotn_ten')->implode(', ');
        // $giatridotrongnha_giatri = $row->ChiTieuTrongNha->GiaTriDoTrongNha->pluck('giatridotrongnha_giatri')->implode(', ');
        // $loaigiatridotn_donvi = $row->ChiTieuTrongNha->GiaTriDoTrongNha->LoaiGiaTriDo->pluck('loaigiatridotn_donvi')->implode(', ');

        $chitieusaubenh_chonloc = $row->ChiTieuSauBenh->pluck('chitieusaubenh_chonloc')->implode(', ');
        $chitieusaubenh_danhgia = $row->ChiTieuSauBenh->pluck('chitieusaubenh_danhgia')->implode(', ');
        // $loaisaubenh_ten = $row->ChiTieuSauBenh->GiaTriDoSauBenh->LoaiSauBenh->pluck('loaisaubenh_ten')->implode(', ');
        // $loaisaubenh_hinhanh = $row->ChiTieuSauBenh->GiaTriDoSauBenh->LoaiSauBenh->pluck('loaisaubenh_hinhanh')->implode(', ');
        // $giatridosaubenh_giatri = $row->ChiTieuSauBenh->GiaTriDoSauBenh->pluck('giatridosaubenh_giatri')->implode(', ');
        // $loaisaubenh_donvi = $row->ChiTieuSauBenh->GiaTriDoSauBenh->LoaiSauBenh->pluck('loaisaubenh_donvi')->implode(', ');


        return [
            $row->id,
            // BelongTo
            $row->NhomGiong->nhomgiong_code,
            $row->KieuHinh->kieuhinh_ten,

             // HasMany
            $mangoaidong_code,
            $ptn_code,

            $row->giong_ten,
            $row->giong_nguongoc,
            $row->giong_hinhanh,

            // Chi tieu ngoai dong
            $chitieungoaidong_phienla,
            $chitieungoaidong_taila,
            $chitieungoaidong_gocnhanh,
            $chitieungoaidong_bela,
            $chitieungoaidong_gocla,
            $chitieungoaidong_msgocla,
            $chitieungoaidong_gocladong,
            $chitieungoaidong_thoatcb,
            $chitieungoaidong_msgocthan,
            $chitieungoaidong_dangbong,
            $chitieungoaidong_congtrucbong,
            $chitieungoaidong_rau,
            // $loaigiatridond_ten,
            // $giatridongoaidong_giatri,
            // $loaigiatridond_donvi,

            //Chỉ tiêu trong nhà
            $chitieutrongnha_giec2,
            $chitieutrongnha_dorunghat,
            $chitieutrongnha_msvotrau,
            $chitieutrongnha_dangthoc,
            $chitieutrongnha_mausacgao,
            $chitieutrongnha_tl1000hat,
            $chitieutrongnha_doam,
            $chitieutrongnha_thom,
            $chitieutrongnha_danhgia,
            // $loaigiatridotn_ten,
            // $giatridotrongnha_giatri,
            // $loaigiatridotn_donvi,

            //Chỉ tiêu sâu bệnh
            $chitieusaubenh_chonloc,
            $chitieusaubenh_danhgia,
            // $loaisaubenh_ten,
            // $loaisaubenh_hinhanh,
            // $giatridosaubenh_giatri,
            // $loaisaubenh_donvi,

        ];
    }
    public function startCell(): string
    {
        return 'A1';
    }
}
