<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_tai_khoan')->insert(
            [
                [
                    'anh_dai_dien' => '',
                    'ho_ten' => 'Phi Phi Kiet',
                    'email' => 'kietppph38003@fpt.edu.vn',
                    'so_dien_thoai' => '0999999999',
                    'gioi_tinh' => 'Nam',
                    'dia_chi' => 'Địa chỉ',
                    'ngay_sinh' => '2004-6-12',
                    'mat_khau' => '12345',
                    'chuc_vu_id' => true,
                    'trang_thai' => true,
                ]
            ]
        );
    }
}
