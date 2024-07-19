<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DanhMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tb_danh_muc")->insert([
            [
                "ten_danh_muc" => "Giày đá bóng"
            ],
            [
                "ten_danh_muc" => "Giày thể thao"
            ]
          ]);
    }
}
