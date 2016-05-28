<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
     protected $table = 'flyer';
     public function photos()
     {
     	return $this->hasMany('App\Photo');
     }
}
