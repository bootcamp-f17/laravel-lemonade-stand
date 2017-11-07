<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    public function days() {
      return $this->hasMany('App\Day');
    }


    public static function getResource() {

      $resource = \App\Resource::all();
      return $resource;

    }

}
