<?php 

$date="2001-01-09";
$dateTime = new DateTime($date); 
$stamp=$dateTime->format('U');

$annee=time()-$stamp;
intval($annee/(86400*360));

$x="Frank Mkaolongo";
$y="longo";
echo strpos($x,$y)!=="";

