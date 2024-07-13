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
        Schema::create('tb_chuc_vu', function (Blueprint $table) {
            $table->id();
        $table->string('ten_chuc_vu');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_tai_khoan', function (Blueprint $table) {
            // Check if the foreign key exists before dropping it
            if (Schema::hasColumn('tb_tai_khoan', 'chuc_vu_id')) {
                $table->dropForeign(['chuc_vu_id']);
            }
        });
        Schema::dropIfExists('tb_chuc_vu');
    }
};
