<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BinhLuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tb_binh_luan")->insert([
            [
                "tai_khoan_id" => 1,
                "san_pham_id" => 1,
                "noi_dung" => "Sản phẩm quá đẹp, quá tuyệt vời",
                "thoi_gian" => "2024-07-19 20:32:26",
                "trang_thai" => true,
            ],
        ]);
    }
}
