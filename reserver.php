  <?php
  $l = $_GET["lieu"];

  $t = $_GET["titre"];

  $j = $_GET["jour"];
  $h = $_GET["horaire"];
  $tarif = $_GET["tarif"];
  $nbr = $_GET["nombre"];
  $monfichier = fopen('reservation.csv', 'a');
  $tar = array("Plein tarif"=> 15, "Tarif réduit"=>10, "Enfant - Gratuit" =>0);
  fwrite($monfichier,$l. ',' .$t .','. $j.',' .  $h. ','.$tarif.','.$nbr. ','.$nbr*$tar[$tarif].'\n');
  fclose($monfichier);
  require "projet.php";
  ?>
