  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Users List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Names</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Creation</th>
                  </tr>
                  </thead>
                  <tbody>
                   <?php 
                    $users=$bdd->getMembers();
                    for ($i=0; $i < count($users); $i++) {  ?>
                    <tr>
                        <th><?php echo $users[$i]["id"] ?></th>
                        <th><?php echo $users[$i]["names"] ?></th>
                        <th><?php echo $users[$i]["age"] ?> ans</th>
                        <th><?php echo $users[$i]["mail"] ?></th>
                        <th><?php echo $users[$i]["password"] ?></th>
                        <th><?php echo date('m/d/Y H:i:s', $users[$i]["stamp"]); ?></th>

                        
                    </tr>  
                    <?php } ?>
                  </tbody>
                  <tfoot>
               
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
</section>