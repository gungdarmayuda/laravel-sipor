<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahun extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function student() //yang kita minta
    {
        return $this->hasMany(Student::class);
    }
}
