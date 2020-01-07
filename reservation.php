<!DOCTYPE html>
<html><!-- Affichage Dans l'onglet et choix des caractères--><head>
        <title> Theatres de Bourbon ; Accueil</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="projet_files/styleTheatresDeBourbonPourPHP.css">
      </head>



	 <!-- Corps de la page-->
      <body >
		<div class="bandeau">
			 <div class="petitPanier">
									<a href="panier.php">Panier</a> <table></table></div><!-- class="petitPanier"-->
										<h1> Festival Théâtres de Bourbon</h1>
		</div><!--class="bandeau"-->

		<div class="menu">
			<!-- Menu de navigation du site -->


		<ul class="navbar">
			Le site :
			<div id="vignette">
        <a href="projet.php">
						<img class="vignette" src="projet_files/img.jpg" alt="[logo de l'association vers l'accueil du site]" decoding="low" width="30%" height="30%">
					</a>
			</div><!-- div vignette-->
			<li><a href="https://www.theatresdebourbon.com/presentation.php">Qui sommes nous?</a></li>
			<!-- <li><a href="https://www.theatresdebourbon.com/Festival2018ProgrammationParJour.php">Jour par Jour</a></li>
			<li><a href="https://www.theatresdebourbon.com/Festival2018ProgrammationParLieu.php">Lieu par Lieu</a></li>
			<li><a href="https://www.theatresdebourbon.com/Festival2018ProgrammationParSpectacle.php">Spectacles</a></li>
			-->
			<li><a href="https://www.theatresdebourbon.com/Festival2019Tarifs.php">Tarifs</a> </li>
      <li><a href="reservation.php">Reserver</a> </li>
			<!--<li><a href="Festival2018ProgrammationVueGlobale.php">Planning</a> </li>-->
		</ul>






		</div><!--menu-->
		<!--				<div class="patchwork">
<div id="ContenantVignetteP">
					<img  	class="vignetteP"
							src="images/imgSpectacleAfficheBarbara.jpg"
							alt="[ Affiche de spectacle    ]"
							width=30%
							height=30%

					>
					<img  	class="vignetteP"
							src="images/imgSpectacleAfficheLeChateauDeMaMere.jpg"
							alt="[ Affiche de spectacle    ]"
							width=30%
							height=30%

					>

					<img  	class="vignetteP"
							src="images/imgSpectacleAfficheOurs.jpg"
							alt="[ Affiche de spectacle    ]"
							width=30%
							height=30%
					>
					<img  	class="vignetteP"
							src="images/imgSpectacleAfficheFricassee.jpg"
							alt="[ Affiche de spectacle    ]"
							width=30%
							height=30%
					>
					<img  	class="vignetteP"
							src="images/imgSpectacleAfficheMlleJulie.jpg"
							alt="[ Affiche de spectacle    ]"
							width=30%
							height=30%
					>
					<img  	class="vignetteP"
							src="images/imgSpectacleAfficheHugo.jpg"
							alt="[ Affiche de spectacle    ]"
							width=30%
							height=30%
					>
					<img  	class="vignetteP"
							src="images/imgSpectacleAfficheProphete.jpg"
							alt="[ Affiche de spectacle    ]"
							width=30%
							height=30%
					>
					<img  	class="vignetteP"
							src="images/imgSpectacleAfficheMariage.jpg"
							alt="[ Affiche de spectacle    ]"
							width=30%
							height=30%
					>
					<img  	class="vignetteP"
							src="images/imgSpectacleAfficheLaGloireDeMonPere.jpg"
							alt="[ Affiche de spectacle    ]"
							width=30%
							height=30%
					>
					<img  	class="vignetteP"
							src="images/imgSpectacleAffichePortRacines.jpg"
							alt="[ Affiche de spectacle    ]"
							width=30%
							height=30%
					>
					<img  	class="vignetteP"
							src="images/imgSpectacleAfficheTartuffe.jpg"
							alt="[ Affiche de spectacle    ]"
							width=30%
							height=30%
					>
					<img  	class="vignetteP"
							src="images/imgSpectacleAfficheMarchandDeVenise.jpg"
							alt="[ Affiche de spectacle    ]"
							width=30%
							height=30%
					>
					<img  	class="vignetteP"
							src="images/imgSpectacleAfficheSoliloquesMariette.jpg"
							alt="[ Affiche de spectacle    ]"
							width=30%
							height=30%
					>
					<img  	class="vignetteP"
							src="images/imgSpectacleAfficheConfessions.jpg"
							alt="[ Affiche de spectacle    ]"
							width=30%
							height=30%
					>
					<img  	class="vignetteP"
							src="images/imgSpectacleAfficheLaPromesse.jpg"
							alt="[ Affiche de spectacle    ]"
							width=30%
							height=30%
					>
					<img  	class="vignetteP"
							src="images/imgSpectacleTitreProvisoire5.jpg"
							alt="[ Affiche de spectacle    ]"
							width=30%
							height=30%
					>


			</div><!--Vignette-->

		<!--pachtwork-->--&gt;

		<main>
      <div class="decalage">
        <?php
$lieu = (!empty($_GET['lieu']) ? $_GET['lieu'] : "Moulins");
        $list_lieu = array('Moulins' ,
        'Monétay sur Allier',
        'Vichy',
        'Monteignet sur l\'Andelot',
        'Veauce',
        'Clermont-Ferrand'
);
$file = "ResultatsFestival.csv";
$csv = array_map('str_getcsv', file($file));
 array_walk($csv, function(&$a) use ($csv) {
   $a = array_combine($csv[0], $a);
 });
 array_shift($csv); # remove column header
#print_r($csv);
$titres = array();
$jours = array();
$horaires = array();
#foreach($list_lieu as $lieu){
  foreach ($csv as $value) {
    if($value["Village"] == $lieu){
      #print_r($value);
      array_push($titres, $value["TitreSpectacle"]);
      array_push($horaires, $value["Heure"]);
      array_push($jours, $value["Jour"]);
  }

}





// Parcours du tableau
if(!isset($_GET['lieu'])){
  echo "<form action='reservation.php' method='get'>";
  echo 'Choisir un lieu',"\n";
  echo '<select name="lieu">',"\n";
  foreach($list_lieu as $l)
  {

    // Affichage de la ligne
    echo "\t",'<option>', $l ,'</option>',"\n";

  }
  echo "<input type='submit' value='Choisir'></form>";
}

if(isset($_GET['lieu'])){
  echo "<form action='reserver.php' method='get'>";

  echo 'Lieu <b>',$lieu, "</b> \n";
  echo '<select name="lieu">',"\n";
  echo "\t",'<option>', $lieu ,'</option>',"\n";
  echo '</select>',"\n";

  echo 'Choisir un titre',"\n";
  echo '</select>',"\n";
  echo '<select name="titre">',"\n";
  foreach(array_unique($titres) as $titre)
  {

    // Affichage de la ligne
    echo "\t",'<option>', $titre ,'</option>',"\n";

  }
  echo '</select>',"\n";
  echo 'Choisir une date',"\n";
  echo '<select name="jour">',"\n";
  foreach(array_unique($jours) as $jour)
  {

    // Affichage de la ligne
    echo "\t",'<option>', $jour ,'</option>',"\n";

  }
  echo '</select>',"\n";

  echo 'Choisir un horaire',"\n";
  echo '<select name="horaire">',"\n";
  foreach(array_unique($horaires) as $horaire)
  {

    // Affichage de la ligne
    echo "\t",'<option>', $horaire ,'</option>',"\n";

  }
  echo '</select>',"\n";

  echo 'Choisir un tarif',"\n";
  echo '<select name="tarif">',"\n";


    // Affichage de la ligne
    echo "\t",'<option>', "Plein tarif" ,'</option>',"\n";
    echo "\t",'<option>', "Tarif réduit" ,'</option>',"\n";
    echo "\t",'<option>', "Enfant - Gratuit" ,'</option>',"\n";

  echo '</select>',"\n";

  echo 'Nombre à acheter',"\n";


    // Affichage de la ligne
  echo '  <input type="number" name="nombre" value=0></input>';


  echo "<input type='submit' value='Réserver'></form>";
}




?>
<a href="reservation.php">Retour</a>


</div>
	</main>
	<footer>

	index
<!-- Signer et dater la page, c'est une question de politesse! -->

	</footer>

</body></html>
