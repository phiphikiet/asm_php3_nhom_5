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
        Schema::create('tb_san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('ten_san_pham');
            $table->integer('so_luong');
            $table->decimal('gia_san_pham', 10, 2);
            $table->decimal('gia_khuyen_mai', 10, 2)->nullable();
            $table->date('ngay_nhap');
            $table->text('mo_ta')->nullable();
            $table->unsignedBigInteger('danh_muc_id');
            $table->boolean('trang_thai')->default(1);
            $table->timestamps();
    
            // $table->foreign('danh_muc_id')->references('id')->on('tb_danh_muc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_san_pham');
    }
};
