<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SanPham extends Model
{
    use HasFactory;
    public function getList()
    {
        $listSanPham = DB::table('tb_san_pham')
            ->orderBy('id', 'DESC')
            ->get();

        return $listSanPham;
    }

    public function createProduct($data)
    {
        DB::table('tb_san_pham')->insert($data);
    }

    public function getDetailProduct($id)
    {
        $san_pham = DB::table('tb_san_pham')->where('id', $id)->first();

        return $san_pham;
    }

    // Cách 3: Sử dụng Eloquent
    protected $table = 'tb_san_pham';

    protected $fillable = [
        'ten_san_pham',
        'so_luong',
        'gia_san_pham',
        'gia_khuyen_mai',
        'ngay_nhap',
        'mo_ta',
        'danh_muc_id',
        'trang_thai',
    ];
}
