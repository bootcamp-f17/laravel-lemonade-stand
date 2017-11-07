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

      $condition = \App\Condition::find(mt_rand(1, 7));
      return $condition;

    }

    public function random_temperature() {

      $base = mt_rand($this->base_temperature, ($this->base_temperature +5));

      //mt_rand($this->base_temperature)

      return $base;

    }
}
