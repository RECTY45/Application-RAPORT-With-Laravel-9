<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'tbl_gurus';

    public function mapel(){
        return $this->belongsTo(Mapel::class,'id_mapel','id')->withDefault(function ($mapel){
            $mapel->nama_mapel= 'Tidak Ada';
        });

    }

    public function walas(){
        return $this->hasMany(Walas::class, 'id_walas');
    }

    public static function deleteData(int $id) {
        Walas::where('id_guru', $id)->delete();
        self::where('id', $id)->delete();
    }
}
