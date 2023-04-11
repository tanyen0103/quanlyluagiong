<?php

namespace App\Exports;

use App\Models\Giong;
use App\Models\NhomGiong;
use App\Models\LoaiSauBenh;
use App\Models\GiaTriDoSauBenh;
use App\Models\GiaTriDoTrongNha;
use App\Models\GiaTriDoNgoaiDong;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;

class ThongKesExport implements FromCollection, WithHeadings, WithCustomStartCell, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $nhomGiongs = NhomGiong::all();
        $giongs = Giong::all();
        $loaiSauBenhs = LoaiSauBenh::all();
        $giaTriDoSauBenhs = GiaTriDoSauBenh::all();
        $giaTriDoNgoaiDongs = GiaTriDoNgoaiDong::all();
        $giaTriDoTrongNhas = GiaTriDoTrongNha::all();

        $data = [
            ['Nhóm giống', $nhomGiongs->count()],
            ['Giống', $giongs->count()],
            ['Loại sâu bệnh', $loaiSauBenhs->count()],
            ['Đo sâu bệnh', $giaTriDoSauBenhs->count()],
            ['Đo ngoài đồng', $giaTriDoNgoaiDongs->count()],
            ['Đo trong nhà', $giaTriDoTrongNhas->count()]
        ];

        return collect($data);
    }

    public function headings(): array
    {
        return [
            'Tên',
            'Số lượng',
        ];
    }
    public function startCell(): string
    {
        return 'A1';
    }
}

