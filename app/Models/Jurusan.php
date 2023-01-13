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
        return $this->hasMany(Mapel::class, 'id');
    }

    public function siswa(){
        return $this->hasMany(Siswa::class);
    }

    public static function deleteData(int $id) {

       Mapel::where('id_jurusan', $id)->delete();
        self::where('id', $id)->delete();
    }
}
