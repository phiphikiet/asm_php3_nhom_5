<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SanPham extends Model
{
    use HasFactory;

    public function getList(){
        $listSanPham = DB::table('tb_san_pham')  
        ->join('tb_danh_muc','tb_san_pham.danh_muc_id', '=' , 'tb_danh_muc.id')
        ->orderBy('tb_san_pham.id', 'DESC')
        ->get();
        return $listSanPham;
    }

}
