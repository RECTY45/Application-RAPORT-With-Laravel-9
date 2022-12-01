<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'tbl_jurusans';

    public function mapel(){
        return $this->hasMany(Mapel::class);
    }

    public function siswa(){
        return $this->hasMany(Siswa::class,'id_jurusan');
    }
}
