<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Entreprise;
use Auth;
use DB;
class Controller extends BaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function insert(Request $req){
    	
		
    }

    public function insertDomaine(Request $req, $idEn){
    	$dom = $req->input('domaine');
    	$dataDomaine = array(
			    		'id_domaine'=>$dom, 
			    		'id_entreprise'=>$idEn,
			    		);
    	
    	DB::table('domaine_entreprise')->insert($dataDomaine);
    	
    	return redirect()->route('entreprise.coordonnees');
    }
}
