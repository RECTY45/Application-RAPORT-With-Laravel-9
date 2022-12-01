<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'tbl_siswas';

    public function kelas(){
        return $this->belongsTo(Kelas::class,'id_kelas','id');
    }

    public function jurusan(){
        return $this->belongsTo(jurusan::class,'id_jurusan','id');
    }
}
