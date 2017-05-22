
		<?php 
			$id = Auth::user()->id;
			$user = App\User::find($id);
			$entreprise = App\Entreprise::find(1)->where('user_id' , $id)->first();
			$idEn = $entreprise->id;
			$domaine = App\Domaine::all();
			echo "name : " . $user->name . "<br>";
			echo "email : " . $user->email . "<br>";
			echo "==================================<br>";
			if(isset($entreprise)){
				
					echo "Raison social : " . $entreprise->raison_social . "<br>";
					echo "Adress : " . $entreprise->adress . "<br>";
					echo "Telephone : " . $entreprise->telephone . "<br>";
					echo "Site web : " . $entreprise->site_web . "<br>";
					echo "Pays : " . $entreprise->pays . "<br>";
					echo "Ville : " . $entreprise->ville . "<br>";
					echo "Domaines : ";
					foreach ($entreprise->domaine as $d) {
						echo $d->nom . ",";
					}
					echo  "<form method = 'post' action = '/insertDomaine/{$idEn}'>";
					?>   {{ csrf_field() }}
					<?php 
					echo  "	<select name='domaine'>";
					echo  " 		<option value = '1'>Informatique</option>";
					echo  "		    <option value = '2'>Gestion</option>";
					echo  " 		<option value = '3'>Mechanique</option>";
					echo  "		    <option value = '4'>Eléctronique</option>";
					echo  "	</select>";
					echo  "		<input type = 'submit' value = 'Ajouter'>";
					echo  "	</form>";
					echo "<br>==================================<br>";
					
			}else{
			?>	
				Vous n'avez pas de coordonnées pour le moment<br>
				<h3><a href = "{{ url('/espaceEntreprise/formulaire') }}">Commencer à remplire vos données</a></h3>
		<?php 		
			}
		?>
