<div class="hold-transition login-page">
    <div class="login-box ">
    <!-- /.login-logo -->
        <a href="?" class=""><i class="fas fa-arrow-left"></i></a>
        <div class="card card-outline card-purple">
            <div class="card-header text-center text-gray">
            <a href="?" class="h1"><b><?php echo $appData[0]["name"] ?></b></a>
            <p><?php echo $appData[0]["slogan"] ?></p>
            </div>
            <div class="card-body">
            <p class="login-box-msg">Register a new membership</p>

      <form action="?" method="post" enctype="multipart/form-data">
        <input required type="hidden" name="newAccount">
        <div id="group1">
            <div class="input-group mb-3">
            <input required type="text" name="names" class="form-control" placeholder="Full name">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-user"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input required type="email" name="mail" class="form-control" placeholder="Email">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input required type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
                <input required type="password" name="password2" class="form-control" placeholder="Retype password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
        </div>

        <div id="group2">
            <span>Genre</span>
            <div class="input-group mb-3">
                <select name="sexe" id="" class="form-control">
                    <option value="Feminin">Feminin</option>
                    <option value="Masculin" selected>Masculin</option>
                    <option value="autres">Autres</option>
                </select>
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>
            <span>Localisation</span>
            <div class="input-group mb-3">
                <input required type="text" name="location" class="form-control" placeholder="Ville">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-building"></span>
                    </div>
                </div>
            </div>
            
            <span>Description de toi</span>
            <div class="input-group mb-3">
                <textarea class="form-control" name="description" id="" cols="20" rows="5"></textarea>
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-pen"></span>
                    </div>
                </div>
            </div>
        </div>
        <div id="group3">
            <span>Date de naissance</span><br>
            <div class="input-group mb-3">
                <input required type="date" name="age" class="form-control" placeholder="Date de naissance">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-calendar"></span>
                    </div>
                </div>
            </div>
            <span>Photo de profile</span><br>
            <div class="input-group mb-3">
            
            <input required type="file" name="file" class="form-control" placeholder="Full name">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-file"></span>
                </div>
            </div>
            </div>
        </div>

        <div class="row">
          <div class="col-4" id="prev">
            <span  class="btn btn-primary btn-block">Prev.</span>
          </div>
          
          <div class="col-4">
          </div>

          <div class="col-4" id="submit">
            <button type="submit" class="btn btn-primary btn-block">Valider</button>
          </div>
          
          <div class="col-4">
            <span id="next" class="btn btn-primary btn-block">Next</span>
          </div>
          <!-- /.col -->
        </div>
      </form>
            <p class="mt-4 text-center">
                <a href="?sign" class="text-center" id="login">I already have a membership</a>
            </p>
            </div>
        </div>
    </div>
</div>
    

