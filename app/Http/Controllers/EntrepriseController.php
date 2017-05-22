<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entreprise;
use Auth;
class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $id = Auth::user()->id;
        $raison = $req->input('raison_social');
        $adress = $req->input('adress');
        $tele = $req->input('telephone');
        $site = $req->input('site_web');
        $pays = $req->input('pays');
        $ville = $req->input('ville');
        
        $entreprise = new Entreprise;
        $entreprise->user_id = $id;
        $entreprise->raison_social = $raison;
        $entreprise->adress = $adress;
        $entreprise->telephone = $tele;
        $entreprise->site_web = $site;
        $entreprise->pays = $pays;
        $entreprise->ville = $ville;
        $entreprise->save();
        return redirect()->route('coordonnee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $id = Auth::user()->id;
        $raison = $req->input('raison_social');
        $adress = $req->input('adress');
        $tele = $req->input('telephone');
        $site = $req->input('site_web');
        $pays = $req->input('pays');
        $ville = $req->input('ville');
        $entreprise = Entreprise::where('user_id' , $id)->first();
        $entreprise->raison_social = $raison;
        $entreprise->adress = $adress;
        $entreprise->telephone = $tele;
        $entreprise->site_web = $site;
        $entreprise->pays = $pays;
        $entreprise->ville = $ville;
        $entreprise->save();
        return redirect()->route('coordonnee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
