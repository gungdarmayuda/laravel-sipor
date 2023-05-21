<?php

use Illuminate\Support\Facades\DB;
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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('guru')->nullable();
            $table->string('konfirmasi')->nullable();
            $table->string('waktu')->nullable();
            $table->timestamps();
        });

        DB::table('pengajuans')->insert([
            [
                'guru' => 'A',
                'konfirmasi' => '0',
                'waktu' => '-',
            ],
            [
                'guru' => 'B',
                'konfirmasi' => '0',
                'waktu' => '-',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuans');
    }
};
