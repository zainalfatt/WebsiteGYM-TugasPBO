<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('todos', function (Blueprint $table) {
            $table->time('start_time')->after('activity');  // Tambahkan kolom start_time
            $table->time('end_time')->after('start_time');  // Tambahkan kolom end_time
            $table->dropColumn('time');  // Hapus kolom time
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('todos', function (Blueprint $table) {
            $table->time('time')->after('activity');  // Tambahkan kembali kolom time jika rollback
            $table->dropColumn(['start_time', 'end_time']);  // Hapus kolom start_time dan end_time
        });
    }
};
