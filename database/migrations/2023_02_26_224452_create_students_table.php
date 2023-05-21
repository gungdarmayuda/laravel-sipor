<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('tahun_id');
            $table->foreignId('kelas_id');
            $table->foreignId('semester_id');
            $table->foreignId('nilai_id')->nullable();
            $table->foreignId('rapor_id')->nullable();
            $table->foreignId('akun_id')->nullable();
            $table->foreignId('pengesahan_id')->nullable();
            // $table->unsignedBigInteger('kelas_id');
            // $table->foreign('kelas_id')->references('id')->on('kelas');

            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');

            //
            // $table->unsignedBigInteger('nilais_id');
            // $table->foreign('nilais_id')->references('id')->on('nilais');
            
            // $table->foreignId('nilai_id')->nullable()->constrained();
            $table->string('no_induk')->nullable();
            $table->string('nstk')->nullable();
            $table->string('nik')->nullable();
            $table->string('npsn')->nullable();
            $table->string('nm_anak')->nullable();
            $table->string('tmpt_lahir')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('jns_kelamin')->nullable();
            $table->string('agama')->nullable();
            $table->string('almt_anak')->nullable();
            $table->string('nm_ayah')->nullable();
            $table->string('pkrjn_ayah')->nullable();
            $table->string('almt_ayah')->nullable();
            $table->string('nohp_ayah')->nullable();
            $table->string('nm_ibu')->nullable();
            $table->string('pkrjn_ibu')->nullable();
            $table->string('almt_ibu')->nullable();
            $table->string('nohp_ibu')->nullable();
            $table->string('umur')->nullable();
            $table->string('tinggi_bd')->nullable();
            $table->string('berat_bd')->nullable();
            $table->string('lingkar_kpl')->nullable();
            $table->string('ket')->nullable();
            $table->string('email')->nullable();
            $table->string('upload')->nullable();
            $table->string('qr_mrd')->nullable();
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
        Schema::dropIfExists('students');
    }
};
