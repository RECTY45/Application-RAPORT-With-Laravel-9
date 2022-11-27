<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'tbl_nilais';

    public function tapel(){
        return $this->belongsTo(Tapel::class,'id_tapel','id');
    }

    public function mapel(){
        return $this->belongsTo(Mapel::class,'id_mapel','id');
    }
}
