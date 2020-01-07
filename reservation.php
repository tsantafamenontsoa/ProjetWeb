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
									Attention! à Moulins le début du spectacle à 20h00. <table></table></div><!-- class="petitPanier"-->
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

        $list_lieu = array('Moulins' ,
        'Monetay',
        'Vichy',
        'Monteignet',
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
    if($value["Village"] == "Veauce"){
      array_push($titres, $value["TitreSpectacle"]);
      array_push($horaires, $value["Heure"]);
      array_push($jours, $value["jour"]);
  }
  printr($titres);
  printr($jours);
  printr($horaires);
}


?>



</div>
	</main>
	<footer>

	index
<!-- Signer et dater la page, c'est une question de politesse! -->

	</footer>

</body></html>
