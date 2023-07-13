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
        Schema::create('tb_tabungan', function (Blueprint $table) {
            $table->increments('tab_id');
            $table->integer('tab_id_siswa')->unsigned();
            $table->string('tab_kelas', 10);
            $table->date('tab_waktu');
            $table->string('tab_jumlah', 20);
            $table->string('tab_penerima', 50);
            $table->timestamps();
        });

        Schema::table('tb_tabungan', function (Blueprint $table) {
            $table->foreign('tab_id_siswa')->references('siswa_id')->on('tb_siswa')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_tabungan');
    }
};
