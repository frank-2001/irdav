<?php
if(isset($_POST['newAccount'])){
    $dateTime = new DateTime($_POST["age"]); 
    $stamp=$dateTime->format('U');
    $myAge=intval(getAge($stamp));
    $exist=false;
    $erpass=false;
    $age=false;
    for ($i=0; $i < count($users); $i++) { 
           if($users[$i]["names"]==$_POST["names"] || $users[$i]["mail"]==strtolower($_POST["mail"])){
            $errMsg="un compte avec ce username ou adresse mail existe deja";
            $exist=true;
            break;
           }
    }
    if($_POST["password"]!=$_POST["password2"] && !$exist){
        $errMsg="Mots de passe differents";
        $erpass=true;     
    }
    if($myAge<25 && $myAge>10){ 
        $age=true;     
    }else{
        $errMsg="Age non recommander ".$myAge;
    }
    if (!$erpass && !$exist && $age) {
        $bdd->insertMember(strtolower($_POST["names"]),$_POST["mail"],$myAge,$_POST["password"]);
        $_POST['connect']=1;
    }
}
if(isset($_POST['connect'])){
    $user=$bdd->getMember(strtolower($_POST['names']),$_POST['password']);
    if(count($user)>0){
        cookie("user", json_encode($user[0]));
    }else{
        $errMsg="Mot de passe ou username incorect";
    }
}
if(isset($_GET["deconnexion"])){
    deleteCookie("user");
}
if(isset($_POST["upload"])){
    if($_POST["upload"]=="logo"){
        $targetPath = "upload/logo/" . $_FILES['file']['name']; // Target path where file is to be stored
        $bdd->editPage($_POST['title'],$_FILES['file']['name'],$_POST['slogan']); 
    }
    if($_POST["upload"]=="publicite"){
        $targetPath = "upload/publicite/" . $_FILES['file']['name']; // Target path where file is to be stored
        $bdd->insertPub($_POST['title'],$_POST['description'],$_FILES['file']['name'],$_POST['link']); 
    }
    $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
    compressImage($sourcePath,$targetPath,30);
    header("location:index.php");

}
// $bdd->editPage("cool","cool","cool");