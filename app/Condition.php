<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    //

    public function days() {
      return $this->hasMany('App\Day');
    }

    public static function random_condition() {

      $condition = \App\Condition::find(rand(1, 7));
      return $condition;

    }

    public function random_temperature() {

      $base = $this->base_temperature;
      return (mt_rand($base, $base + 5));

    }
}
