<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class QrmuridController extends Controller
{
    public function qrMurid($no_induk)
    {
        $qrMurid = Student::where('no_induk',$no_induk)->first();
        return view('qr.murid',compact('qrMurid'));
    }
}
