<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenerateIdTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER id_store BEFORE INSERT ON users FOR EACH ROW
            BEGIN
                INSERT INTO sequence_tbl VALUES (NULL);
                SET NEW.user_id = CONCAT("0", LPAD(LAST_INSERT_ID(), 4, "0"));
            END
        ');

        $dt       = Carbon::now()->locale('id');
        $dt->settings(['formatFunction' => 'translatedFormat']);
        // $todayDate =  $dt->format('l, j F Y ; h:i a');
        $todayDate =  $dt->format('l, j F Y, h:i A');

        DB::table('users')->insert([
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'phone_number'=>'081936106349',
                'join_date' => $todayDate,
                'role_name'=>'Admin',
                'status' => 'Active',
                'avatar'=>'photo_defaults.jpg',
                'password' => Hash::make('meong123'),
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
       DB::unprepared('DROP TRIGGER "id_store"');
    }
}
