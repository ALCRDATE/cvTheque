@extends('layouts.master')
<?php 
            $id = Auth::user()->id;
            $user = App\User::find($id);
            $entreprise = App\Entreprise::find(1)->where('user_id' , $id)->first();
            $idEn = $entreprise->id;
            $domaine = App\Domaine::all();
?>         


    @section('sidebar')
        @extends('entreprise.side_bar_entreprise')
    @endsection

@section('content')
        <section id="main-content">    
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{ route('/') }}">Home</a></li>
                        <li><i class="fa fa-laptop"></i><a href="{{ route('home') }}">Accueil</a></li><li><i class="icon_document_alt"></i>Annonce</li>                           
                    </ol>
                </div>
            </div> 
            <div class="row" style="margin-left:5px;">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <div class="info-box blue-bg">
                    <div class="count">Annonce</div>
                    <div class="title">N°1</div>           
                  </div><!--/.info-box-->     
                </div><!--/.col-->
                
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <div class="info-box blue-bg">
                    <i class="fa fa-plus" style="margin-left:73px;"></i>           
                  </div><!--/.info-box-->  <!--/.info-box-->     
                </div><!--/.col-->          
            </div>
        </section>
@endsection
