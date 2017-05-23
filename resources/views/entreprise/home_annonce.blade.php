@extends('layouts.master')
<?php 
            $id = Auth::user()->id;
            $user = App\User::find($id);
            $entreprise = App\Entreprise::where('user_id' , $id)->first();
            if (!isset($entreprise)) {
              redirect()->route('/');
            }else{
            $idEn = $entreprise->id;
            $annonce = App\Annonce::where('entreprise_id' , $idEn)->get();
            if(isset($annonce)){
            $domaine = App\Domaine::all();
            
            $i = 1;
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
            <div class="panel-body col-lg-12">
                <table class="table">
                    <tbody>
                    @foreach ($annonce as $a)
                        <tr> 
                            <?php $ida = $a->id; ?>
                            <td><strong>Annonce N°{{ $i++ }}</strong></td>
                            <td>{{ $a->titre }}</td>
                            <td>{{ $a->updated_at }}</td>
                            <td><a href="{{ route('destroyAnnonce' , ['ida' => $ida]) }}" '><button class="btn btn-danger col-lg-8">Supprimer</button></a></td>
                        </tr>
                    @endforeach
                    <tr>
                      <td><button class="btn btn-success " data-target = "#ajouterModal" data-toggle="modal" >Ajouter</button></td>
                    </tr>    
                    </tbody>
                </table>
                     
        </section>
@endsection



<div class="modal fade" tabindex="-1" id="ajouterModal" data-backdrop="static">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
                <h4 class="modal-title">Ajouter une annonce</h4>
            </div>
            <div class="modal-body">
                <form action = '/ajouterAnnonce' method = 'post'>
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="inputUserName">Titre</label>
                        <input class="form-control" placeholder="Titre de l'annonce" type="text" name="titre" />
                    </div>
                     
                    <div class="form-group">
                        <label for="inputPassword">Detail</label>
                        <textarea placeholder="Detail de l'annonce" class="form-control" rows="5" name="detail"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputUserName">Domaines</label><br>
                        <input  class="form-control"  placeholder="Ajouter des domaines" type="text" data-role="tagsinput" name="domaine" /> 
                     </div>
                
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <button type="button" class="btn btn-primary"
                        data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php }else{

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
            <div class="panel-body col-lg-12">
                <table class="table">
                    <tbody>
                    <tr>
                      <td><button class="btn btn-success " data-target = "#ajouterModal" data-toggle="modal" >Ajouter</button></td>
                    </tr>    
                    </tbody>
                </table>
                     
        </section>
@endsection

<?php }
} ?>