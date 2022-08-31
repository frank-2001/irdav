<?php 

$date="2001-01-09";
$dateTime = new DateTime($date); 
$stamp=$dateTime->format('U');

$annee=time()-$stamp;
echo intval($annee/(86400*360));