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

function profile($user){
    return 
    '
    <div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch flex-column">
        <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0"></div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>'.$user["names"].'</b></h2>
                      <p class="text-muted text-sm"><b>About: </b> H / '.$user["age"].'ans / Hetero </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> RDCongo - Beni</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>+ 800 - 12 12 23 52</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="?profile=1" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> View Profile
                    </a>
                  </div>
                </div>
              </div>
        </div>
    ';
}
function compressImage($source,$destination,$quality){
	#Get image info
	$imgInfo=getimagesize($source);
	$mime=$imgInfo['mime'];
	#Create a new image from file
	switch ($mime) {
		case 'image/jpeg':
			$image =imagecreatefromjpeg($source);
			break;
		case 'image/png':
			$image =imagecreatefrompng($source);
			break;
		case 'image/gif':
			$image =imagecreatefromgif($source);
			break;
		
		default:
		$image =imagecreatefromjpeg($source);
			break;
	}	
	#Save image
	imagejpeg($image,$destination,$quality);
	#return Compressed imag
	return $destination;
}
function pub($data){
  return 
  '
              <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="upload/publicite/'.$data["image"].'" alt="Dist Photo 3"  style="width:100%; height: 250px;">
                  <div class="card-img-overlay md:mt-5">
                  <a href="'.$data["link"].'" target="blank">
                    <h3 class="card-title text-primary">'.$data["title"].'</h3>
                  </a>
                    <p class="card-text pb-1 pt-1 text-light">
                      '.$data["description"].'... </p>
                    <a href="#" class="text-primary"> Il ya '.timeDo($data["stamp"]).'</a>
                  </div>
                </div>
              </div>
  ';
}
function timeDo($stamp){// Retour le temps qu'un article a fait depuis sa publication
			$tm=time();
			if (intval($stamp)>intval($tm)) {
				$trueTm=intval($stamp)-intval($tm);
				$text="+";
			}else{
				$trueTm=intval($tm)-intval($stamp);
				$text="";
			}
			if ($trueTm>=31104000) {
				$time=$trueTm/31104000;
				$time=intval($time).' ans';
			}
			elseif($trueTm>=2592000){
				$time=$trueTm/2592000;
				$time=intval($time).' mois';
			}
			elseif($trueTm>=604800){
				$time=$trueTm/604800;
				$time=intval($time).' semaines';
			}
			elseif($trueTm>=86400){
				$time=$trueTm/86400;
				$time=intval($time).' jours';
			}
			elseif($trueTm>=3600){
				$time=$trueTm/3600;
				$time=intval($time).' h';
			}
			elseif($trueTm>=60){
				$time=$trueTm/60;
				$time=intval($time).' min';
			}
			elseif($trueTm<60 && $trueTm>0){
				$time=intval($trueTm).' sec';
			}
			else{
				$time="Now";
			}
			return $text.' '.$time;
	}
