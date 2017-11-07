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

      $random_condition_id = rand(1,7);

      $condition = \App\Condition::find($random_condition_id);
      return $condition;

    }

    public function random_temperature() {

      $base = $this->base_temperature;


      // $base = $this->rand(base_temperature,(base_temperature + 10));
      return $base + rand(0,10);

    }
}
