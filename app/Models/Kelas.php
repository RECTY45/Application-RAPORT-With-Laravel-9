<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'tbl_kelas';

    public function siswa(){
        return $this->hasMany(Siswa::class,'id_mapel');
    }

    public function walas(){
        return $this->hasMany(Walas::class);
    }


    public static function deletedata(int $id) {
        Walas::where('id_kelas', $id)->delete();
        self::where('id', $id)->delete();
    }

}
