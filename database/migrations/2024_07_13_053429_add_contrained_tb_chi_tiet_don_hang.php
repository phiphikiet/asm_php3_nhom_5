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
        Schema::table("tb_chi_tiet_don_hang", function(Blueprint $table){
            $table->foreign('don_hang_id')->references('id')->on('tb_don_hang')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('san_pham_id')->references('id')->on('tb_san_pham')->cascadeOnDelete()->cascadeOnUpdate();
        });
        
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
