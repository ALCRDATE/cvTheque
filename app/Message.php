<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function condidat(){
    	return $this->belongsTo('App\Condidat' , 'id_condidat');
    }

    public function entreprise(){
    	return $this->belongsTo('App\Message');
    }
}