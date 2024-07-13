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
        Schema::table("tb_binh_luan", function(Blueprint $table){
            $table->foreign('tai_khoan_id')->references('id')->on('tb_tai_khoan');
            $table->foreign('san_pham_id')->references('id')->on('tb_san_pham');
        });
        
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
