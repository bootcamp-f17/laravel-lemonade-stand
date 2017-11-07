<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Condition extends Model
{
    //

    public function days() {
      return $this->hasMany('App\Day');
    }

    public static function random_condition() {

      // $condition = \App\Condition::find(2);
      $condition = DB::table('conditions')
                      ->inRandomOrder()
                      ->first();

      return $condition;

    }

    public static function random_temperature() {
      $base = $this->base_temperature;

      return $base + 2;

    }
}
