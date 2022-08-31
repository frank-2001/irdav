 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 col-md-9">
          <div class="col-sm-6">
            <h1>My site web</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Do you have already a account ? </li>
              <li class="breadcrumb-item "><a href="index.php">Connexion!</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-9">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sign-up <small>new account?</small></h3><br>
                <em style="background:red">
                <?php
                  if (isset($errMsg)) {
                    echo  $errMsg;
                  }
                ?>
              </em>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="#" method="POST">
                <input type="hidden" name="newAccount">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Names</label>
                    <input type="text" name="names" class="form-control" id="exampleInputEmail1" placeholder="Entrer vos noms au complet" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="mail" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre adresse mail" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Naissance</label>
                    <input type="date" name="age" class="form-control" id="exampleInputEmail1" placeholder="Enter votre date de naissance" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">New password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Repeat the password</label>
                    <input type="password" name="password2" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                  </div>
                  
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1" required>
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Valider</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>