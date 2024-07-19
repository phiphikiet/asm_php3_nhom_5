<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BinhLuan extends Model
{
    use HasFactory;
 
    protected $table = 'tb_binh_luan';

    protected $fillable = [
        'tai_khoan_id',
        'san_phham_id',
        'noi_dung',
        'thoi_gian',
        'trang_thai',
    ];
}
