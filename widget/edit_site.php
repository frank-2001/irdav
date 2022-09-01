<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Site</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Logo & Publicite</li>
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
            <div class="col-md-6">
            <!-- general form elements -->
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Site Web Infos</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
	        <form action="#" method="post" enctype="multipart/form-data">
                <input type="hidden" name="upload" value="logo">
                    <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">App Name</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="App name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Slogan</label>
                        <input type="text" name="slogan" class="form-control" placeholder="Slogan" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File Logo</label>
                        <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="file" class="custom-file-input" id="exampleInputFile" required>
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>
            </div>
            
            <!-- left column -->
            <div class="col-md-6">
            <!-- general form elements -->
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Publicite</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="#" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="upload" value="publicite">
                    <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Post Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="text" name="description" class="form-control" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Lien de redirection</label>
                        <input type="text" name="link" class="form-control" placeholder="https://mysite.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File Image</label>
                        <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </section>
</div>