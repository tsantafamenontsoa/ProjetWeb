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
      <li><a href="vider.php">Vider le panier</a> </li>
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
        $ligne = 1; // compteur de ligne
        $fic = "reservation.csv";
        $csv = array_map('str_getcsv', file($fic));
        #print_r($csv);
        $ind_min = 0;
        $total = 0;

        foreach($csv as $tab)
        {
          echo '<li>';
          if($ligne%6!=0)
        {
        $champs = count($tab);//nombre de champ dans la ligne en question


        //affichage de chaque champ de la ligne en question

        echo '<b>' . $tab[0]." ".$tab[1]. '</b> , ' .$tab[2]. " ". $tab[3]. " " . $tab[5] . "€ " ;
        $total += $tab[5];
        }

        else{
          echo '<b>' . $tab[0]." ".$tab[1]. '</b> , ' .$tab[2]. " ". $tab[3]. " 0€  " ;
        }
        $ligne ++;
        echo '</li>';
        }

        echo '</br></br><b> Total : </b> '.$total . " €";



?>



</div>
	</main>
	<footer>

	index
<!-- Signer et dater la page, c'est une question de politesse! -->

	</footer>

</body></html>
