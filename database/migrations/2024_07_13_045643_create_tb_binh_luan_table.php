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
        Schema::create('tb_binh_luan', function (Blueprint $table) {
            $table->id();
        $table->unsignedBigInteger('tai_khoan_id');
        $table->unsignedBigInteger('san_pham_id');
        $table->text('noi_dung');
        $table->timestamp('thoi_gian');
        $table->boolean('trang_thai')->default(1);
        $table->timestamps();

       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_binh_luan');
    }
};
