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
        Schema::table("tb_tai_khoan",function(Blueprint $table){
            $table->foreign('chuc_vu_id')->references('id')->on('tb_chuc_vu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
    }
};
