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
        Schema::table("tb_chi_tiet_gio_hang", function(Blueprint $table){
            $table->foreign('gio_hang_id')->references('id')->on('tb_gio_hang');
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
