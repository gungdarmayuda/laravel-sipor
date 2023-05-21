<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Rapor;
use App\Models\Tahun;
use App\Models\Semester;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    public function scopeFilter($query)
    {
        if(request('search')){
            return $query->where('no_induk', 'like', '%' . request('search') . '%')
            ->orWhere('nm_anak', 'like', '%' . request('search') . '%');
        }
    }

    protected $fillable = [
        'user_id',
        'tahun_id',
        'kelas_id',
        'semester_id',
        'nilai_id',
        'rapor_id',
        'akun_id',
        'pengesahan_id',
        'no_induk',
        'nstk',
        'nik',
        'npsn',
        'nm_anak',
        'tmpt_lahir',
        'tgl_lahir',
        'jns_kelamin',
        'agama',
        'almt_anak',
        'nm_ayah',
        'pkrjn_ayah',
        'almt_ayah',
        'nohp_ayah',
        'nm_ibu',
        'pkrjn_ibu',
        'almt_ibu',
        'nohp_ibu',
        'umur',
        'tinggi_bd',
        'berat_bd',
        'lingkar_kpl',
        'ket',
        'email',
        'qr_mrd',
        'upload',
    ];

    protected $with = ['tahun','kelas','semester','user','nilai', 'rapor','pengesahan'];

    public function tahun(){  //penghubung model post dengan category
        return $this->belongsTo(Tahun::class);
    }

    public function kelas(){  //penghubung model post dengan category
        return $this->belongsTo(Kelas::class);
    }

    public function semester(){  //penghubung model post dengan category
        return $this->belongsTo(Semester::class);
    }

    public function user(){  //penghubung model post dengan category
        return $this->belongsTo(User::class);
    }

    public function nilai(){  //penghubung model post dengan category
        return $this->belongsTo(Nilai::class);
    }

    public function rapor(){  //penghubung model post dengan category
        return $this->belongsTo(Rapor::class);
    }

    public function pengesahan(){  //penghubung model post dengan category
        return $this->belongsTo(Pengesahan::class);
    }
   
}
