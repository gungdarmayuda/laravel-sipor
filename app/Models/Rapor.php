<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rapor extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'sakit',
        'ijin',
        'tanpa_ket',
    ];

    public function student(){ 
        return $this->hasOne(Student::class);
    }
}
