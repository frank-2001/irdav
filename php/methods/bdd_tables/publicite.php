<?php 
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
