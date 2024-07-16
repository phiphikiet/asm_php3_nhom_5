<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class TaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tb_tai_khoan")->insert([
            [
                "ho_ten" => "admin",
                "mat_khau" => Hash::make("admin"),
                "chuc_vu_id" => 1,
                "ho_ten" => "Admin",
                "email" => "admin@admin.com",
                "so_dien_thoai" => "0987654321",
                "dia_chi" => "12345 ABC Street",
                "ngay_sinh" => "1990-01-01",
            ],
        ]);
    }
}
