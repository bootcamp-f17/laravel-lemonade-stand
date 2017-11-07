<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    public function games() {
    	return $this->belongsTo('App\Game');
    }
}
