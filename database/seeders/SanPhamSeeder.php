<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_san_pham')->insert(
            [
                [
                    'ten_san_pham' => 'San pham 1',
                    'so_luong' => 10,
                    'gia_san_pham' => 10000000,
                    'gia_khuyen_mai' => 999999,
                    'ngay_nhap' => '2024-7-16',
                    'mo_ta' => 'Mô tả san pham',
                    'danh_muc_id' => 1,
                    'trang_thai' => true,
                ]
            ]
        );
    }
}
