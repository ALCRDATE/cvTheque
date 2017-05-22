<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    public function condidat(){
    	return $this->belongsTo('App\Condidat');
    } 

    public function entreprise(){
    	return $this->belongsTo('App\Entreprise');
    }
}
