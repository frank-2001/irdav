<?php
if(isset($_GET['new'])){
    $bdd->insertMember($_POST["names"],$_POST["mail"],$_POST["age"],$_POST["password"]);
}
function listMembers($items){
    echo "<h2>List users</h2>";
    for ($i=0; $i < count($items) ; $i++) { 
        echo $items[$i]["names"]." - ".$items[$i]["mail"]." - ".$items[$i]["corse"]."<br>";
    }
}