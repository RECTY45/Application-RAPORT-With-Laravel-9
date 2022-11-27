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
        return $this->belongsTo(Mapel::class,'id_mapel','id');
    }

    public function walas(){
        return $this->hasMany(Walas::class);
    }
}
