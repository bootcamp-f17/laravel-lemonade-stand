<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    public function days() {
    	return $this->hasMany('App\Day');
    }

    public static function  obtainResources(){
			$resource = \App\Resource::all();
    	return $resource;
    }
}
