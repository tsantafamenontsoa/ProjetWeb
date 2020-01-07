  <?php
  $l = $_GET["lieu"];

  $t = $_GET["titre"];

  $j = $_GET["jour"];
  $h = $_GET["horaire"];
  $monfichier = fopen('reservation.csv', 'a+');
  fwrite($monfichier,$l, ",", $t, ",",$j, ",", $h,"\n");
  fclose($monfichier);
  chmod($file, 0777); 
  require "projet.php";
  ?>
