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
    $randomNumber = rand(1,100);
    if ( in_array($randomNumber, range(1,5)) ) {
      $conditionId = 1;
    }
    if ( in_array($randomNumber, range(6,15)) ) {
      $conditionId = 2;
    }
    if ( in_array($randomNumber, range(16, 65)) ) {
      $conditionId = 3;
    }
    if ( in_array($randomNumber, range(66,75)) ) {
      $conditionId = 4;
    }
    if ( in_array($randomNumber, range(76,85)) ) {
      $conditionId = 5;
    }
    if ( in_array($randomNumber, range(86,95)) ) {
      $conditionId = 6;
    }
    if ( in_array($randomNumber, range(96,100)) ) {
      $conditionId = 7;
    }
      $condition = \App\Condition::find($conditionId);
      return $condition;
    }
    public function random_temperature() {
      $base = $this->base_temperature;
      return $base + rand(-5,5);
    }
}