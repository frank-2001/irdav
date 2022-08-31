<?php
class bdd{
    #Base des donnes local
	var $host='sql.freedb.tech';
	var $dbname='freedb_irdavid';
	var $user='freedb_frankm';
	var $pass='#3&aTgj78XdnZkZ';
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
}
$bdd=new bdd();
$connect=$bdd->connect();
if(isset($_COOKIE["user"])){
    $user_connected=json_decode($_COOKIE["user"],true);
}