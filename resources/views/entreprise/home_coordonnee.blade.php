@extends('layouts.master')
  @section('sidebar')
        @extends('entreprise.side_bar_entreprise')
    @endsection
<?php 
            $id = Auth::user()->id;
            $user = App\User::find($id);
            $entreprise = App\Entreprise::where('user_id' , $id)->first();
            if (isset($entreprise)){
            $idEn = $entreprise->id;
            $domaine = App\Domaine::all();

            


?>         


  

@section('content')
        <section id="main-content">    
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{ route('/') }}">Home</a></li>
                        <li><i class="fa fa-laptop"></i><a href="{{ route('home') }}">Accueil</a></li><li><i class="icon_document_alt"></i>Coordonnées</li>                         
                    </ol>
                </div>
            </div>
            <div class="panel-body col-lg-12">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><strong>Raison social</strong></td>
                            <td><?php echo $entreprise->raison_social; ?></td>
                            <td>Modifier</td>
                        </tr>
                        <tr>
                            <td><strong>Adress</strong></td>
                            <td><?php echo $entreprise->adress; ?></td>
                            <td>Modifier</td>
                        </tr>
                        <tr>
                            <td><strong>Telephone</strong></td>
                            <td><?php echo $entreprise->telephone; ?></td>
                            <td>Modifier</td>
                        </tr>
                        <tr>
                            <td><strong>Site web</strong></td>
                            <td><?php echo $entreprise->site_web; ?></td>
                            <td>Modifier</td>
                        </tr>
                        <tr>
                            <td><strong>Pays</strong></td>
                            <td><?php echo $entreprise->pays; ?></td>
                            <td>Modifier</td>
                        </tr>
                        <tr>
                            <td><strong>Ville</strong></td>
                            <td><?php echo $entreprise->ville; ?></td>
                            <td>Modifier</td>
                        </tr>
                        <tr>
                            <td><strong>Domaines</strong></td>
                            <td>
                            <?php 
                                    foreach ($entreprise->domaine as $d) {
                                        echo $d->nom . " , ";
                                    }
                            ?>
                            </td>
                            <td>Modifier</td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('coordonnee.modifier') }}"><button type="button" class="btn btn-primary">Modifier Tous</button></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>         
        </section>



@endsection
<?php }else {

    ?>

    @section('content')

    <section id="main-content">    
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{ route('/') }}">Home</a></li>
                        <li><i class="fa fa-laptop"></i><a href="{{ route('home') }}">Accueil</a></li><li><i class="icon_document_alt"></i><a href="{{ route('coordonnee') }}">Coordonnées</a></li>
                        <li><i class=" icon_plus_alt2"></i>Ajouter</li>                           
                    </ol>
                </div>
            </div>
            <div class="panel-body col-lg-5">
               <?php echo  "<form method = 'post' action = '/ajouterCoordonnee'>"; ?>
                {{ csrf_field() }}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Raison social</label>
                    <input type="text" class="form-control" name = "raison_social">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Adress</label>
                    <input type="text" class="form-control" name = "adress">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Telephone</label>
                    <input type="text" class="form-control" name = "telephone">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Site web</label>
                    <input type="text" class="form-control" name = "site_web">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Pays</label>
                    <select class="form-control" name="pays">
                      <option>Maroc</option>
                      <option>Usa</option>
                      <option>England</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Ville</label>
                    <select class="form-control" name = "ville">
                      <option>Rabat</option>
                      <option>LA</option>
                      <option>Liverpool</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>



                  <button type="submit" class="btn btn-default">Ajouter</button>
                  <button type = "reset" class = "btn btn-default">Reset</button>
                </form>
            </div>         
        </section>

    @endsection

    <?php } ?>