<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    //
    public function users()
    {
        return $this->hasOne("App\User");
    }

    public function rangkaians()
    {
        return $this->hasOne("App\Rangkaian");
    }
}
