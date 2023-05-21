<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengesahans', function (Blueprint $table) {
            $table->id();
            $table->string('kelas_id')->nullable();
            $table->text('refleksi_pertama')->nullable();
            $table->text('refleksi_kedua')->nullable();
            $table->text('refleksi_ketiga')->nullable();
            $table->string('pengesahan_guru')->nullable();
            $table->string('waktu_guru')->nullable();
            $table->string('pengesahan_kepsek')->nullable();
            $table->string('waktu_kepsek')->nullable();
            $table->string('pengesahan_orangtua')->nullable();
            $table->string('waktu_orangtua')->nullable();
            $table->string('expire_date')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengesahans');
    }
};
