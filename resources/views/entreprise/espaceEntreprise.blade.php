<!DOCTYPE html>
<html>
<head>
	<title>Espace Entreprise</title>
</head>
<body>
	<h1> ESPACE ENTREPRISE :</h1>
	<?php 
			$id = Auth::user()->id;
			$user = App\User::find($id);
			echo "name : " . $user->name . "<br>";
			echo "email : " . $user->email . "<br>";
		?>
	<h2>Géréer votre compte</h2>

	<ul>
		<li><a href="{{ route('entreprise.coordonnees') }}"><h3>Vos coordonnées</h3></a></li>
		<li><a href=""><h3>Vos annonces</h3></a></li>
	</ul>
</body>
</html>