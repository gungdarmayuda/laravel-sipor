<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nilai extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nilai_pertama',
        'nilai_kedua',
        'nilai_ketiga',
        'nilai_keempat',
    ];

    public function student(){ 
        return $this->hasOne(Student::class);
    }
}
