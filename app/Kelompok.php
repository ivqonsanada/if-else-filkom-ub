<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    public function anggota_kelompoks()
    {
        return $this->hasMany('App\AnggotaKelompok');
    }
}
