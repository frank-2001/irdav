<?php
$users=$bdd->getMembers();
require "cmder.php";
// listMembers($users);
function listMembers($items){
    echo "<h2>List users</h2>";
    for ($i=0; $i < count($items) ; $i++) { 
        echo $items[$i]["names"]." - ".$items[$i]["mail"]." - ".$items[$i]["age"]." - ".$items[$i]["password"]."<br>";
    }
}
function cookie($title,$value){
    setcookie($title, $value, time() + (86400 * 30), "/");
    header("location:index.php");
}
function deleteCookie($title){
    $user_connected=null;  
    setcookie($title, "", time() - 3600, "/");
    header("location:index.php");
}
function getAge($stamp){
    $annee=time()-$stamp;
    return $annee/(86400*360);
}
?>
