<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengesahan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'kelas_id',
        'refleksi_pertama',
        'refleksi_kedua',
        'refleksi_ketiga',
        'pengesahan_guru',
        'pengesahan_kepsek',
        'pengesahan_orangtua',
    ];

    public function student(){ 
        return $this->hasOne(Student::class);
    }
}
