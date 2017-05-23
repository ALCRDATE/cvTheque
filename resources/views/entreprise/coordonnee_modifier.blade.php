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
                        <li><i class="fa fa-laptop"></i><a href="{{ route('home') }}">Accueil</a></li><li><i class="icon_document_alt"></i><a href="{{ route('coordonnee') }}">Coordonnées</a></li>
                        <li><i class="icon_cogs"></i>Modifier</li>                           
                    </ol>
                </div>
            </div>
            <div class="panel-body col-lg-5">
               <?php echo  "<form method = 'post' action = '/modifierCoordonnee'>"; ?>
                {{ csrf_field() }}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Raison social</label>
                    <input type="text" class="form-control" name = "raison_social" value = "<?php echo $entreprise->raison_social; ?>" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Adress</label>
                    <input type="text" class="form-control" name = "adress" value = "<?php echo $entreprise->adress; ?>" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Telephone</label>
                    <input type="text" class="form-control" name = "telephone" value = "<?php echo $entreprise->telephone; ?>" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Site web</label>
                    <input type="text" class="form-control" name = "site_web" value = "<?php echo $entreprise->site_web; ?>" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Pays</label>
                    <select class="form-control" name="pays">
                      <option><?php echo $entreprise->pays; ?></option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Ville</label>
                    <select class="form-control" name = "ville">
                      <option><?php echo $entreprise->ville; ?></option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>



                  <button type="submit" class="btn btn-default">Modifier</button>
                </form>
            </div>         
        </section>



@endsection
