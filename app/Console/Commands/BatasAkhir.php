<?php

namespace App\Console\Commands;

use Log;
use Carbon\Carbon;
use App\Models\Pengesahan;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class BatasAkhir extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'batas:akhir';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
            // foreach (Pengesahan::where('kelas_id','1') as $murid) {
            //     if (Carbon::now() > $murid->expire_date)
            //     {
            //          // Do what you have to do
            //                  $pengesahan = new Pengesahan;
            //                  $pengesahan->pengesahan_orangtua = '1';
         
            //                  // $dt->toDayDateTimeString();
             
            //                  $dt       = Carbon::now()->locale('id');
            //                  $dt->settings(['formatFunction' => 'translatedFormat']);
            //                  $todayDate =  $dt->format('l, j F Y ; h:i a');
             
            //              $updateRecord = [
            //                  'pengesahan_orangtua'=>$pengesahan->pengesahan_orangtua,
            //                  'waktu_orangtua'    => $todayDate,
            //              ];
         
            //              Pengesahan::where('kelas_id','1')->update($updateRecord);

            //     }
            // }
            // $dt       = Carbon::now()->locale('id');
            // $dt->settings(['formatFunction' => 'translatedFormat']);
            // $todayDate =  $dt->format('l, j F Y ; h:i a');

            $tanggal_sekarang = Carbon::now()->format('Y-m-d');

            $allusers = Pengesahan::where('kelas_id',1)->where('pengesahan_orangtua',0)->get();

                foreach($allusers as $user){

                    $userDate = Carbon::parse($user->expire_date); //tanggal expire

                    $month = $userDate->diffInMonths($tanggal_sekarang); //tanggal hari ini
                    if($month > 1)
                    {
                        Pengesahan::where('id',$user->id)->update([
                            'pengesahan_orangtua' => 1,
                            'waktu_orangtua' => $user->expire_date,
                    ]); 
                    }
                    Log::info($month);
                }

            $tanggal_sekarang = Carbon::now()->format('Y-m-d');

            $allusersdua = Pengesahan::where('kelas_id',2)->where('pengesahan_orangtua',0)->get();
    
                foreach($allusersdua as $user){
    
                        $userDate = Carbon::parse($user->expire_date); //tanggal expire
    
                        $month = $userDate->diffInMonths($tanggal_sekarang); //tanggal hari ini
                        if($month > 1)
                        {
                            Pengesahan::where('id',$user->id)->update([
                                'pengesahan_orangtua' => 1,
                                'waktu_orangtua' => $user->expire_date,
                        ]); 
                        }
                        Log::info($month);
                    }
        
        // info('test setiap menit');

        return Command::SUCCESS;
    }
}
