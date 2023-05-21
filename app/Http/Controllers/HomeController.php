<?php

namespace App\Http\Controllers;

use App\Models\Pengesahan;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    /** home dashboard */
    public function index()
    {
        $murid_a = Student::where('kelas_id', '1')->count();
        $murid_b = Student::where('kelas_id', '2')->count();

        $pengumpulan_a = Pengesahan::where('kelas_id', '1')->Where('pengesahan_orangtua', '1')->count();
        $pengumpulan_b = Pengesahan::where('kelas_id', '2')->Where('pengesahan_orangtua', '1')->count();
        
        $totalpengguna = User::count();
        return view('dashboard.home', [
            'murid_a'=>$murid_a,
            'murid_b'=>$murid_b,
            'pengumpulan_a'=>$pengumpulan_a,
            'pengumpulan_b'=>$pengumpulan_b,
            'totalpengguna'=>$totalpengguna,
        ]);
    }

    /** profile user */
    public function userProfile()
    {
        return view('dashboard.profile');
    }

    /** teacher dashboard */
    public function teacherDashboardIndex()
    {
        return view('dashboard.teacher_dashboard');
    }

    /** student dashboard */
    public function studentDashboardIndex()
    {
        return view('dashboard.student_dashboard');
    }
}
