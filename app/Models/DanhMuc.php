<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
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
}
