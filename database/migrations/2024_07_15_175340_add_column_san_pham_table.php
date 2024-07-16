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
        Schema::table('tb_san_pham', function (Blueprint $table) {
            $table->text("hinh_anh")->nullable();
            $table->string("ma_san_pham",50)->nullable();
            $table->integer("luot_xem")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_san_pham', function (Blueprint $table) {
            $table->dropColumn("hinh_anh");
            $table->dropColumn("ma_san_pham");
            $table->dropColumn("luot_xem");
        });
    }
};
