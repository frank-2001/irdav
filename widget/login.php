<div class="hold-transition login-page">
    <div class="login-box">
    <!-- /.login-logo -->
    <a href="?" class=""><i class="fas fa-arrow-left"></i></a>
        <div class="card card-outline card-purple">
            <div class="card-header text-center text-gray">
            <a href="?" class="h1"><b><?php echo $appData[0]["name"] ?></b></a>
            <p><?php echo $appData[0]["slogan"] ?></p>
            </div>
            <div class="card-body" id="content">
           
             <p class="login-box-msg">Sign in to start your session</p>

            <form action="index.php" method="POST">
                <input type="hidden" name="connect">
                <div class="input-group mb-3">
                <input type="text" name="names" class="form-control" placeholder="Email">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                    </div>
                </div>
                </div>
                <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                        Remember Me
                    </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
                </div>
            </form>
            <!-- /.social-auth-links -->

            <p class="mb-1">
                <a href="#">I forgot my password</a>
            </p>

            <p>
                <a href="?new" id="register" class="text-center">Register a new membership</a><br>
            </p>
            </div>
            
            <!-- /.card-body -->
        </div>
    <!-- /.card -->
    </div>
</div>
    
