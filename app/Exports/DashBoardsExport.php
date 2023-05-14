<?php

namespace App\Exports;

use App\Models\Giong;
use App\Models\LoaiGiaTriDo;
use App\Models\LoaiSauBenh;
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
        $loaisaubenhs = LoaiSauBenh::all();
        $loaigiatridos_nd = LoaiGiaTriDo::where('phanloai', 1)->get();
        $loaigiatridos_tn = LoaiGiaTriDo::where('phanloai', 2)->get();

        return Giong::with('nhomgiong')
        ->orderBy('nhomgiong_id', 'asc')
        ->get()
        ->map(function ($item) use ($loaisaubenhs, $loaigiatridos_tn, $loaigiatridos_nd) {
            $item->loaisaubenhs = $loaisaubenhs;
            $item->loaigiatridos_tn = $loaigiatridos_tn;
            $item->loaigiatridos_nd = $loaigiatridos_nd;
            return $item;
        });
    }

    public function headings(): array
    {
        return [
            'STT',
            'Nhóm',
            'Kiểu hình',
            'Mã ngoài đồng',
            'Mã phòng thí nghiệm',
            'Tên',

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
            'Giá trị',
            'Đơn vị',

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
            'Giá trị',
            'Đơn vị',

            'Chọn lọc',
            'Đánh giá khác',
            'Tên loại sâu bệnh',
            'Giá trị',
            'Đơn vị',
        ];
    }

    public function map($row): array
    {
        static $i = 0;
        $i++;
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

        $loaigiatridond_ten = '';
        $loaigiatridond_donvi = '';

        foreach ($row->ChiTieuNgoaiDong as $ctnd) {
            foreach ($ctnd->GiaTriDoNgoaiDong as $gtdnd){
                if($gtdnd->chitieungoaidong_id == $ctnd->id){
                    $loaigiatridond_ten .= $gtdnd->LoaiGiaTriDo->loaigiatrido_ten;
                    $loaigiatridond_donvi .= $gtdnd->LoaiGiaTriDo->loaigiatrido_donvi;
                }
            }
        }

        $giatridongoaidong_giatri = '';
        foreach ($row->ChiTieuNgoaiDong as $ctnd) {
            $giatridongoaidong_giatri .= $ctnd->GiaTriDoNgoaiDong->pluck('giatridongoaidong_giatri')->implode(', ');
        }



        $chitieutrongnha_giec2 = $row->ChiTieuTrongNha->pluck('chitieutrongnha_giec2')->implode(', ');
        $chitieutrongnha_dorunghat = $row->ChiTieuTrongNha->pluck('chitieutrongnha_dorunghat')->implode(', ');
        $chitieutrongnha_msvotrau = $row->ChiTieuTrongNha->pluck('chitieutrongnha_msvotrau')->implode(', ');
        $chitieutrongnha_dangthoc = $row->ChiTieuTrongNha->pluck('chitieutrongnha_dangthoc')->implode(', ');
        $chitieutrongnha_mausacgao = $row->ChiTieuTrongNha->pluck('chitieutrongnha_mausacgao')->implode(', ');
        $chitieutrongnha_tl1000hat = $row->ChiTieuTrongNha->pluck('chitieutrongnha_tl1000hat')->implode(', ');
        $chitieutrongnha_doam = $row->ChiTieuTrongNha->pluck('chitieutrongnha_doam')->implode(', ');
        $chitieutrongnha_thom = $row->ChiTieuTrongNha->pluck('chitieutrongnha_thom')->implode(', ');
        $chitieutrongnha_danhgia = $row->ChiTieuTrongNha->pluck('chitieutrongnha_danhgia')->implode(', ');

        $loaigiatridotn_donvi = '';
        $loaigiatridotn_ten = '';

        foreach ($row->ChiTieuTrongNha as $cttn) {
            foreach ($cttn->GiaTriDoTrongNha as $gtdtn){
                if($gtdtn->chitieutrongnha_id == $cttn->id){
                    $loaigiatridotn_donvi .= $gtdtn->LoaiGiaTriDo->loaigiatrido_donvi;
                    $loaigiatridotn_ten .= $gtdtn->LoaiGiaTriDo->loaigiatrido_ten;
                }
            }
        }

        $giatridotrongnha_giatri = '';
        foreach ($row->ChiTieuTrongNha as $cttn) {
            $giatridotrongnha_giatri .= $cttn->GiaTriDoTrongNha->pluck('giatridotrongnha_giatri')->implode(', ');
        }

        $chitieusaubenh_chonloc = $row->ChiTieuSauBenh->pluck('chitieusaubenh_chonloc')->implode(', ');
        $chitieusaubenh_danhgia = $row->ChiTieuSauBenh->pluck('chitieusaubenh_danhgia')->implode(', ');

        $loaisaubenh_ten = '';
        $loaisaubenh_donvi = '';

        foreach ($row->ChiTieuSauBenh as $ctsb) {
            foreach ($ctsb->GiaTriDoSauBenh as $gtdsb)
                if($gtdsb->chitieusaubenh_id == $ctsb->id){
                    $loaisaubenh_donvi .= $gtdsb->LoaiSauBenh->loaisaubenh_donvi;
                    $loaisaubenh_ten .= $gtdsb->LoaiSauBenh->loaisaubenh_ten;
                }
        }

        $giatridosaubenh_giatri = '';
        foreach ($row->ChiTieuSauBenh as $ctsb) {
            $giatridosaubenh_giatri .= $ctsb->GiaTriDoSauBenh->pluck('giatridosaubenh_giatri')->implode(', ');

        }

        return [
            $i,

            // BelongTo
            $row->NhomGiong->nhomgiong_code,
            $row->KieuHinh->kieuhinh_ten,

             // HasMany
            $mangoaidong_code,
            $ptn_code,

            $row->giong_ten,

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
            $loaigiatridond_ten,
            $giatridongoaidong_giatri,
            $loaigiatridond_donvi,


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
            $loaigiatridotn_ten,
            $giatridotrongnha_giatri,
            $loaigiatridotn_donvi,

            //Chỉ tiêu sâu bệnh
            $chitieusaubenh_chonloc,
            $chitieusaubenh_danhgia,
            $loaisaubenh_ten,
            $giatridosaubenh_giatri,
            $loaisaubenh_donvi,

        ];
    }
    public function startCell(): string
    {
        return 'A1';
    }
}
