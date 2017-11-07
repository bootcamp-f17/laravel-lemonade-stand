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

      $random_condition_percent=rand(1,100);

      if($random_condition_percent<=5){
        $random_condition_id = 1;
      }elseif($random_condition_percent<=15){
        $random_condition_id = 2;
      }elseif($random_condition_percent<=65){
        $random_condition_id = 3;
      }elseif ($random_condition_percent<=75) {
        $random_condition_id = 4;
      }elseif ($random_condition_percent<=85) {
        $random_condition_id = 5;
      }elseif ($random_condition_percent<=95) {
        $random_condition_id = 6;
      }elseif ($random_condition_percent<=100) {
        $random_condition_id = 7;
      }

      $condition = \App\Condition::find($random_condition_id);
      return $condition;

    }

    public function random_temperature() {

      $base = $this->base_temperature;


      // $base = $this->rand(base_temperature,(base_temperature + 10));
      return $base + rand(0,10);

    }
}
