        
@extends('layouts.master')

@section('sidebar')
    @if(Auth::user()->role === 1)
        @extends('entreprise.side_bar_entreprise')
    @else
        @extends('condidat.side_bar_condidat')
    @endif
@endsection

@section('content')
        <section id="main-content">    
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{ route('/') }}">Home</a></li>
                        <li><i class="fa fa-laptop"></i>Accueil</li>                          
                    </ol>
                </div>
            </div>
                        
        </section>

@endsection
@section('annonces')
    <h1>{{ Auth::user()->role }}</h1>
@endsection