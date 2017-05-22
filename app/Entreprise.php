<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Entreprise extends Authenticatable
{
    use Notifiable;

    protected $guard = 'entreprise';

    protected $filleable = ['raison_social','email','adress','telephone','pays','ville','logo','site_web'];

    protected $hidden = [
        'password'
    ];

    public function domaine(){
        return $this->belongsToMany('App\Domaine' , 'domaine_entreprise' , 'id_entreprise', 'id_domaine');
    }

    public function message(){
        return $this->hasMany('App\Message' , 'ID_destinataire' , 'ID_emetteur');
    }

    public function annonce(){
        return $this->hasMany('App/Annonce');
    }

    public function user(){
        return $this->belongsTo('App\User' , 'id');
    }
}
