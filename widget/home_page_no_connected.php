<style>
    html, body {
  height: 100%;
}

.bg-img {
  height: 100%;
  background:url('dist/img/im6.jpg');
  background-position:center;
  background-repeat:repeat;
  background-size:100%;
}
.bg-logos{
    height: 300px;
    background:url('dist/img/logos.jpg');
    background-size:100%;
    background-position:center;
    background-repeat:no-repeat;
}
.prop{
  
    background-size:100%;
    background-position:center;
    background-repeat:no-repeat;
}
* {box-sizing: border-box;}
body {
	margin:0;
	height:100vh;
	font-family: Tahoma,"sans-serif";
}	

/* slider обертка */
.slider {
	position: relative;
	height: 100%;
	width: 100%;
	overflow:hidden;
}

/*Окно со слайдами*/
.slider-content {
	position: relative;		
	width: 100%;
}

/*Контейнер для слайдов (передвигаем)*/
.slider-content-wrapper {
	display: flex;
	height:400px;
	transition: transform 0.5s ease-in-out;
}

/*Слайд*/
.slider-content__item {
	flex: 1 0 100%;
	width: 100%;
	height: 200%;
	background-repeat: no-repeat;
	background-position: center;
	background-size: contain;
	font-size: 100px;
	color: rgba(0,0,0,0.2);
	display: flex;
	align-items: center;
	justify-content: center;
}

.image-1 {background:url('dist/img/im1.jpg');background-size:100% ;background-repeat:no-repeat;	background-position: top;
;
}
.image-2 {background:url('dist/img/im7.jpg');background-size:100% ;background-repeat:repeat;
}
.image-3 {background:url('dist/img/im9.avif');background-size:100% ;background-repeat:no-repeat;
}
.image-4 {background:url('dist/img/im4.jpg');background-size:100% ;background-repeat:no-repeat;
}
.image-5 {background:url('dist/img/im5.jpg');background-size:100% ;background-repeat:no-repeat;
}
.image-6 {background:url('dist/img/im2.jpg');background-size:100% ;background-repeat:no-repeat;
}


/* Блок с контролами */
.slider-controls {
	padding:20px;
	text-align: center;
}

/* Блок с контролами внутри окна */
.slider-content__controls {
	position:absolute;
	top:0;left:0;
	width: 100%;
	height: 100%;
	z-index:1;
	/*transform: translateY(-50%);*/
	/*padding:0 15px;*/
}

/* Arrows */
.prev-arrow, .next-arrow {
	position:absolute;
	top:50%;
	transform: translateY(-50%);
	cursor: pointer;
	color:rgba(0,0,0, 0.3);
	width: 20px;
	transition: all 0.3s;
}
.prev-arrow {left: 20px;}
.next-arrow {right: 20px;}

.prev-arrow:hover,
.next-arrow:hover {
	cursor: pointer;
	color:rgba(0,0,0, 0.7);
}

/* Dots */
.dots {
	position:absolute;
	display: flex;
	left:50%;
	transform: translateX(-50%);
	bottom:10%;
}

.dot {
	cursor: pointer;
	width: 8px;
	height: 8px;
	margin-right: 4px;
	background-color: rgba(0,0,0, 0.3);
	/*box-shadow: 0 0 5px 0px rgba(0,0,0,0.9);*/
	border-radius: 50%;
	transition:all 0.3s;
}

.dot:last-child {margin-right: 0;}
.dot:hover {background-color: #fff;}
.dot--active {background-color: rgba(255,255,255, 0.5);}

/* Buttons */
button {
	cursor: pointer;
	margin-right: 8px;
	border:none;
	border-radius: 4px;
	padding:10px;
	background-color: #3066BE;
	color:#FFF;
	transition: all 0.5s;
}
button:last-child {margin-right: 0;}
button:hover {background-color: #60AFFF;}
button:focus {outline: none;}

/* Mods */
.disabled {
	background-color: #DCCFCF;
	color:#B0A8A8;
	cursor: default;
	pointer-events:none;
}

.d-none {display: none;}
.active {opacity: 1;}
.centered {
	position:relative;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);	
}
.hmax{
  opacity:1;
}
</style>
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand ">        
    
      <ul class="navbar-nav">
        <a href="index.php" class="brand-link">
            <img src="upload/logo/<?php echo  $appData[0]["logo"] ?>" alt="logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
            <span class="brand-text font-weight-light"><?php echo $appData[0]["name"] ?></span>
        </a>
        </li>
      </ul>
    
      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav ml-auto">

          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fas fa-bars"></i></a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="?sign" class="dropdown-item">Connexion </a></li>
              <li><a href="?new" class="dropdown-item">inscription</a></li>
              <!-- End Level two -->
            </ul>
          </li>
          <li class="nav-item ml-auto" >
            <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-moon" id="dark_activer"></i>
          </a>
          </li>
          <li class="nav-item">
            <button class="navbar-toggler order-1" type="button" data-toggle="collapse"     data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
  <!-- /.navbar -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-img">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
            
            <!-- <div class="col-sm-6">
              <h1 class="m-0"> Welcome <small>Dear!</small></h1>
            </div> -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container " style="">

        <div class="row">
          <div class="col-md-6"></div>
          <!-- <div id="slider" class="slider col-12 col-md-6 hmax">
            <div class="slider-content">
              <div class="slider-content-wrapper">
                <div class="slider-content__item image-1"></div>
                <div class="slider-content__item image-2"></div>
                <div class="slider-content__item image-3"></div>
                <div class="slider-content__item image-4"></div>
                <div class="slider-content__item image-5"></div>
                <div class="slider-content__item image-6"></div>
              </div>
            </div>
          </div> -->

          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <!-- <div class="card bg-logos">
            </div> -->
            <div>
              <div class="mb-2 text-right">
                <a href="?sign" class="btn btn-primary">Connexion</a>

              </div>
              <div class="card card-primary card-outline col-lg-12">
            <div class="">
              <div class="card-body">
                <h5 class="card-title">PRINCIPE DU SITE</h5>

                <p class="card-text">
                 Chaque femme se verra présenter dans un premier temps 25 hommes sélectionnés soigneuseuement par nos soin selon ses goûts, et 5 heureux élus sélectionnés aléatoirement . Ayant accès à leur profil (photos, goûts), elle doit donc faire un choix : elle sélectionne ses 15 favoris qui continueront la compétition.
                    C’est à ce moment que les hommes rentrent dans la course ; la femme réalise un questionnaire qui sera soumis aux prétendants. Ces derniers pourront y répondre s’ils sont intéressés, si le profil ne leur convient pas ils peuvent le décliner. Les dix premiers à répondre au questionnaire sont sélectionnés pour l’étape suivante.
                    Selon les réponses de ses prétendants, la femme réalise une nouvelle sélection ; seuls 5 hommes résisteront à cette étape. Le chat est alors ouvert, à ce moment seulement les hommes peuvent discuter personnellement avec la femme, mais ils peuvent également chatter entre eux. Les prétendants peuvent décider de se retirer à tout moment s’ils ne sont plus intéressés par la personne, et la femme peut éliminer un prétendant quand elle le souhaite jusqu’à ce qu’il n’en reste plus qu’un : l’heureux élu, le gagnant, l’ex-célibaltaire.<br>

                    Longue vie à l’amour !
                </p>

                <a href="#" class="card-link">Apropos</a>
                <a href="#" class="card-link">Politique d'utilisation'</a>
              </div>
            </div>

            <!-- <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div> -->
          </div>
            </div>

          </div>
          
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php #require "widget/footer.php";?>
</div>