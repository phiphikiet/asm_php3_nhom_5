<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DanhMuc extends Model
{
    use HasFactory;
    public function getList()
    {
        $listDanhMuc = DB::table('tb_danh_muc')
            ->orderBy('id', 'DESC')
            ->get();

        return $listDanhMuc;
    }

    public function createCategory($data)
    {
        DB::table('tb_danh_muc')->insert($data);
    }

    public function getDetailCategory($id)
    {
        $danh_muc = DB::table('tb_danh_muc')->where('id', $id)->first();

        return $danh_muc;
    }

    // Cách 3: Sử dụng Eloquent
    protected $table = 'tb_danh_muc';

    protected $fillable = [
        'hinh_anh',
        'ten_danh_muc',
        'mo_ta',
    ];
}

