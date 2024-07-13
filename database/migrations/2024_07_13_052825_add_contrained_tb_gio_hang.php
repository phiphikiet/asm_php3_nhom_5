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
        Schema::table("tb_gio_hang", function(Blueprint $table){
            $table->foreign('nguoi_dung_id')->references('id')->on('tb_tai_khoan')->cascadeOnDelete()->cascadeOnUpdate();
        });
        
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
