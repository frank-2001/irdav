<?php
class bdd{
    var $host;
    var $dbname;
    var $user;
    var $pass;

    function getServer(){
        #Base des donnees online
        $this->host='sql.freedb.tech';
        $this->dbname='freedb_irdavid';
        $this->user='freedb_frankm';
        $this->pass='jeH9e*Za$R8JUbd';
        #Base des donnees local
        if ($_SERVER['SERVER_NAME']=="localhost") {
            // $this->host='localhost';
            // $this->dbname='irdavid';
            // $this->user='root';
            // $this->pass='';
        }
    }
    function connect(){
        try { 
            $bdd = 	new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->user, $this->pass);
            return $bdd;
        }
        catch   (PDOException $pe){
            die ("I cannot connect to the database " . $pe->getMessage());
            return null;
        }
    }
    //UpdateDB Hosted
    function updateDB(){
        $db_path="bdd/bdd.sql";
        $select = $this->connect()->query(file_get_contents($db_path));
    }
    // Users
    function insertMember($name,$mail,$age,$password,$sexe,$location){
        $reponse=$this->connect()->prepare('INSERT INTO users (names, mail, age, stamp,password,sexe,localisation) values (:names, :mail, :age, :stamp,:password,:sexe,:localisation)');
        $reponse->execute(array(
            'names'=>$name,
            'mail' =>$mail, 
            'age'=>$age,
            'stamp'=>time(),
            'password'=>$password,
            'sexe'=>$sexe,
            'localisation'=>$location,
        ));
    }

    function getMembers(){
        $requete= $this->connect()->prepare("SELECT*FROM users order by id DESC");
        $requete->execute();
        $resultats=$requete->fetchAll();
        return $resultats;
    }

    function getMember($names,$pass){
        $requete= $this->connect()->prepare("SELECT*FROM users where names=:names and password=:pass");
        $requete->bindParam(':names',$names);
	    $requete->bindParam(':pass',$pass);
        $requete->execute();
        $resultats=$requete->fetchAll();
        return $resultats;
    }

    function searchMembers($names){
        $requete= $this->connect()->prepare("SELECT*FROM users where names LIKE :names");
        $requete->bindParam(':names',$names);
        $requete->execute();
        $resultats=$requete->fetchAll();
        return $resultats;
    }
    // site_infos
    function editPage($name,$logo,$slogan){
        $reponse=$this->connect()->prepare('INSERT INTO site_infos (name, logo,slogan,stamp) values (:name, :logo,:slogan,:stamp)');
        $reponse->execute(array(
            'name'=>$name,
            'logo'=>$logo, 
            'slogan'=>$slogan,
            'stamp'=>time(),
        ));
    }

    function getPage(){
        $requete= $this->connect()->prepare("SELECT*FROM site_infos order by id DESC");
        $requete->execute();
        $resultats=$requete->fetchAll();
        return $resultats;
    }
    // publicite
    function insertPub($title,$description,$image,$link){
        $reponse=$this->connect()->prepare('INSERT INTO publicite (title, description, image, stamp,link) values (:title, :description, :image, :stamp,:link)');
        $reponse->execute(array(
            'title'=>$title,
            'description' =>$description, 
            'image'=>$image,
            'stamp'=>time(),
            'link'=>$link
        ));
    }

    function getPubs(){
        $requete= $this->connect()->prepare("SELECT*FROM publicite order by id DESC");
        $requete->execute();
        $resultats=$requete->fetchAll();
        return $resultats;
    }
    //activation_account
    function insertActivation($id){
         $reponse=$this->connect()->prepare('INSERT INTO activation_account (id, time, actived) values (:id, :time, :actived)');
        $reponse->execute(array(
            'id'=>$id,
            'time' =>time()+31104000,
            'actived'=>0,
        ));
    }
    function getActivation($id){
        $requete= $this->connect()->prepare("SELECT*FROM activation_account where id=:id");
        $requete->bindParam(':id',$id);
        $requete->execute();
        $resultats=$requete->fetchAll();
        if(count($resultats)==0){
            $this->insertActivation($id);
            return $this->getActivation($id);
        }
        return $resultats[0]["time"];
    }

}
$bdd=new bdd();
$bdd->getServer();
$connect=$bdd->connect();
$appData=$bdd->getPage();
$pubData=$bdd->getPubs();
$usersData=$bdd->getMembers();
if(isset($_COOKIE["user"])){
    $user_connected=json_decode($_COOKIE["user"],true);
    $activation=$bdd->getActivation($user_connected["id"]);
}