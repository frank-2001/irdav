<?php
class bdd{
    #Base des donnes local
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
}