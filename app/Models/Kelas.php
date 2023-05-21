<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Pengesahan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function student() //yang kita minta
    {
        return $this->hasMany(Student::class);
    }
}


