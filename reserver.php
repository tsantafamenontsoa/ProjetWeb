  <?php
  $l = $_GET["lieu"];

  $t = $_GET["titre"];

  $j = $_GET["jour"];
  $h = $_GET["horaire"];
  $monfichier = fopen('reservation.csv', 'w');
  fwrite($monfichier,$l. ',' .$t .','. $j.',' .  $h .'\n');
  fclose($monfichier);
  require "projet.php";
  ?>
