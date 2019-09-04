<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    public function users()
    {
        return $this->hasOne("App\User");
    }

    public function pendampings()
    {
        return $this->hasOne("App\Pendamping");
    }

    public function rangkaian_kecils()
    {
        return $this->hasOne("App\RangkaianKecil");
    }
}
