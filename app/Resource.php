<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Condition extends Model
{

    public function game() {
      return $this->hasMany('App\Game');
    }

    public function getResource() {
      
      $resource = \App\Resource::all();

      return $resource;
      // return view('days.edit', ['resource' => $resource]);

    }

}
