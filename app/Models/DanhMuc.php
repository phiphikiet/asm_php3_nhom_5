<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;
class DanhMuc extends Model
{
    use HasFactory ;
    protected $fillable = [
        'hinh_anh'
        ,'ten_danh_muc'
        ,'mota'
    ]; 
    protected $table = "tb_danh_muc";
    public function getAllDanhMuc(){
        return $this::query()->get();
    }
    public function getDanhMucId($id){
        return $this::query()->where('id',$id)->first();
    }
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


}

