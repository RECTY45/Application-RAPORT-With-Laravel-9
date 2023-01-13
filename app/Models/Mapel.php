<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Mapel extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'tbl_mapels';

    public function guru(){
        return $this->hasMany(Guru::class,'id_mapel');
    }

    public function jurusan(){
        return $this->belongsTo(Jurusan::class,'id_jurusan','id');
    }

}
