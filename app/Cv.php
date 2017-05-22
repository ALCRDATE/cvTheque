<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    public function condidat(){
    	return $this->belongsTo('App\Condidat');
    }
}
