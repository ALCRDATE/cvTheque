<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EspaceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('checkRole');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/homeEntreprise');
    }

    public function redirection(){
        
    }
}
