<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    public function condidat(){
    	return $this->hasMany('App\Condidat');
    }

    public function entreprise(){
    	return $this->belongsToMany('App\Entreprise' , 'domaine_entreprise' );
    }
}
