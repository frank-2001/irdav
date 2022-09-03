<?php
if(isset($_POST['newAccount'])){
    alert("Bigin");
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
        echo "
        <script>
        alert('Mots de passe differents');
        </script>
        ";
        $erpass=true;     
    }
    if($myAge>=18){ 
        $age=true;     
    }else{
        echo "
        <script>
        alert('Age non recommander ');
        </script>
        ";
    }
    if (!$erpass && !$exist && $age) {
       alert("Valider");
       
        echo $_POST["names"]." ".$_POST["mail"]." ".$stamp." ".$_POST["password"]." ".$_POST["sexe"]." ".$_POST["location"]." ".$_POST["description"]." ".$_FILES['file']['name'];
        
        $bdd->insertMember(strtolower($_POST["names"]),$_POST["mail"],$stamp,$_POST["password"],$_POST["sexe"],  $_POST["location"],$_POST["description"],$_FILES['file']['name']);
        
        $targetPath = "upload/profile/" . $_FILES['file']['name']; // Target path where file is to be stored
        $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
        compressImage($sourcePath,$targetPath,30);
        $_POST['connect']=1;
    }
}
if(isset($_POST['connect'])){
    alert("Try connexion");
    $user=$bdd->getMember(strtolower($_POST['names']),$_POST['password']);
    if(count($user)>0){
        cookie("user", json_encode($user[0]));
    }else{
        alert("Mot de passe ou username incorect");
    }
}
if(isset($_GET["deconnexion"])){
    deleteCookie("user");
}
if(isset($_POST["upload"])){
    if($_POST["upload"]=="logo"){
        $targetPath = "upload/logo/" . $_FILES['file']['name']; // Target path where file is to be stored
        $bdd->editPage($_POST['title'],$_FILES['file']['name'],$_POST['slogan']); 
        header("location:index.php");
    }
    if($_POST["upload"]=="publicite"){
        $targetPath = "upload/publicite/" . $_FILES['file']['name']; // Target path where file is to be stored
        $bdd->insertPub($_POST['title'],$_POST['description'],$_FILES['file']['name'],$_POST['link']); 
    }
    if($_POST["upload"]=="profile"){
        $targetPath = "upload/profile/" . $_FILES['file']['name']; // Target path where file is to be stored
        $bdd->updateUser($user_connected["id"],"profile",$_FILES['file']['name']); 
    }
    $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
    compressImage($sourcePath,$targetPath,30);
    header("location:index.php");

}
if(isset($_GET["updateDB"])=="Code@2001"){
    $bdd->updateDB();
    echo "<script>alert('Bdd Updated')</script>";
}
// $bdd->editPage("cool","cool","cool");