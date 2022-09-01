<?php
class bdd{
    #Base des donnes local
	// var $host='sql.freedb.tech';
	// var $dbname='freedb_irdavid';
	// var $user='freedb_frankm';
	// var $pass='#3&aTgj78XdnZkZ';
    var $host='localhost';
	var $dbname='irdavid';
	var $user='root';
	var $pass='';
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
    // Users
    function insertMember($name,$mail,$age,$password){
        $reponse=$this->connect()->prepare('INSERT INTO users (names, mail, age, stamp,password) values (:names, :mail, :age, :stamp,:password)');
        $reponse->execute(array(
            'names'=>$name,
            'mail' =>$mail, 
            'age'=>$age,
            'stamp'=>time(),
            'password'=>$password
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
}
$bdd=new bdd();
$connect=$bdd->connect();
$appData=$bdd->getPage();
$pubData=$bdd->getPubs();
$usersData=$bdd->getMembers();
if(isset($_COOKIE["user"])){
    $user_connected=json_decode($_COOKIE["user"],true);
}