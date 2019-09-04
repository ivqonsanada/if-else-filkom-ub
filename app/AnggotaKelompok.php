<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnggotaKelompok extends Model
{
    public function anggota_kelompoks()
    {
        return $this->hasOne("App\Kelompok");
    }
}
