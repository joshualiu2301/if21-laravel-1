<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';

   public function prodi(){
        return $this->belongsto(Prodi::class, 
        'prodi_id','id');
    }
}
