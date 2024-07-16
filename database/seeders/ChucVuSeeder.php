<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ChucVuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tb_chuc_vu")->insert([
            [
                "ten_chuc_vu" => "Quản trị viên"
            ],
            [
                "ten_chuc_vu" => "Nhân viên"
            ],
            [
                "ten_chuc_vu" => "Khách hàng"
            ]
            ]);
        
    }
}
