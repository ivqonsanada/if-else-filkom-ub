<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
  public function posts()
  {
    return $this->hasOne('App\Post');
  }
}
