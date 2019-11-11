<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnggotaKelompok extends Model
{
    public function kelompoks()
    {
        return $this->hasOne("App\Kelompok");
    }
}
