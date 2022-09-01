  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Recherche</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Recherche</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="#" method="GET">
                <input type="hidden" name="search">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="row">
                            
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Sexe</label>
                                    <select class="select2" style="width: 100%;">
                                        <option>Homme</option>
                                        <option>Femme</option>
                                        <option selected>Tous</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Age</label>
                                    <select class="select2" style="width: 100%;">
                                        <option>18 - 25</option>
                                        <option>25 - 30</option>
                                        <option>30 - 40</option>
                                        <option>40 - 60</option>
                                        <option selected>Tous</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Localisation</label>
                                    <select class="select2" style="width: 100%;">
                                        <option>Congo</option>
                                        <option>Burundi</option>
                                        <option>Kenya</option>
                                        <option>Tanzani</option>
                                        <option selected>Tous</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Order By:</label>
                                    <select class="select2" style="width: 100%;">
                                        <option selected>noms</option>
                                        <option>Date</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <input type="search" name="searchkey" class="form-control form-control-lg" placeholder="Recherche">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-lg btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row">
            <?php 
                if(isset($_GET['searchkey'])){
                    // $usersData=$bdd->searchMembers($_GET['searchkey']);
                    $newDatas=[];
                    $x=0;
                    for ($i=0; $i < count($usersData); $i++) {
                        $state=strpos(strtolower($usersData[$i]["names"]),strtolower($_GET['searchkey']));
                        if ($state!==false){
                            $newDatas[count($newDatas)]=$usersData[$i];
                        }
                       
                    }
                    if(count($newDatas)==0){
                        echo '
                            <div class="mt-10 ml-10 col-12">
                                <p style="text-align:center">
                                    Aucun resultat ne correspond a votre recherche : <em>'.$_GET['searchkey'].'</em>
                                </p>
                            </div>
                            ';
                    }
                    for ($i=0; $i < count($newDatas); $i++) {
                        echo profile($newDatas[$i]);
                    }
                }
                
                
            ?>
            </div>
        </div>
    </section>
  </div>