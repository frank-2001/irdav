  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Welcome</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Your town</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
      <?php 
        $users=$bdd->getMembers();
        for ($i=0; $i < 4; $i++) {
          echo profile($users[$i]);
        }
        
      ?>
      </div>
      </div>
      <?php require "widget/publicite.php"; ?>
</section>
</div>