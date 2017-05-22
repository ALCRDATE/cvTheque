<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condidat extends Model
{
    protected $filleable = ['nom','prenom','email','adress','telephone','pays','ville','photo_de_profil','status'];

    protected $hidden = [
        'password'
    ];
/*
    public function skills(){
    	return $this->hasMany('App\Skill' , 'id_condidat');
    }
*/
    public function interets(){
    	return $this->hasMany('App\Interet' , 'interet_condidat');
    }

    public function user(){
        return $this->belongsTo('App\User' , 'id');
    }

    public function skill(){
    	return $this->belongsToMany('App\Skill' , 'skill_condidat');
    }

    public function cv(){
        return $this->hasMany('App\Cv');
    }
    
    public function message(){
        return $this->hasMany('App\Message' , 'ID_destinataire' , 'ID_emetteur');
    }

    public function annonce(){
        return $this->hasMany('App\Annoce' , 'ID_annonceur'); 
    }

    public function domaine(){
        return $this->belongsTo('App\Domaine' , 'id');
    }
}
