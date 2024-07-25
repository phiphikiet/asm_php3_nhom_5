<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table("tb_don_hang", function(Blueprint $table){
            $table->foreign('nguoi_dung_id')->references('id')->on('tb_tai_khoan');
            $table->foreign('phuong_thuc_thanh_toan_id')->references('id')->on('tb_phuong_thuc_thanh_toan');
            $table->foreign('trang_thai_id')->references('id')->on('tb_trang_thai_don_hang');
        });
        
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
