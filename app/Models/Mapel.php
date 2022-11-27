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
        $this->hasMany(Mapel::class);
    }

    public function nilai(){
        $this->hasMany(Nilai::class);
    }

    public function jurusan(){
        $this->belongsTo(Jurusan::class,'id_jurusan','id');
    }
}
