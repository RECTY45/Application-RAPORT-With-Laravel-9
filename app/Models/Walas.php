<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Walas extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'tbl_walas';

    public function guru(){
        return $this->belongsTo(Guru::class,'id_guru','id');
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class,'id_kelas','id');
    }
}
