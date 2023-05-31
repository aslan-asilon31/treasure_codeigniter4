<?= $this->extend('layouts/backend') ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <!-- Conte  nt Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid" >

        <div class="row" >
          <div class="col-md-12">
          <div class="card " style="overflow-x: scroll;background: linear-gradient(to right, #4F46E5 10%, #87C0F4 30%, #38A169 90%);">
              <div class="card-header">
              <?php 
                // Display Response
                if(session()->has('message')){
                ?>
                  <div class="alert <?= session()->getFlashdata('alert-class') ?>">
                      <?= session()->getFlashdata('message') ?>
                  </div>
                <?php
                }
              ?>
                <h3 class="card-title">
                  <a href="product/create" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                  <a href="" class="btn btn-warning"><i class="fa fa-file-excel"></i></a>
                  <a href="" class="btn btn-danger"><i class="fa fa-file-pdf"></i></a>
                  <a href="" class="btn btn-info"><i class="fa fa-file-csv"></i></a>
                  <a href="" class="btn btn-secondary"><i class="fa fa-upload"></i></a>

                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             
              <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create Product </h2>
            </div>
        </div>
    </div>
    <hr>
    <?=form_open_multipart(base_url('product/store'));?>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-12">
                        <label>name</label>
                        <div class="form-group text-black">
                            <input type="text" name="name" class="form-control bg-white text-black" style="color:black;"> 
                        </div>	
                    </div>
                    <div class="col-md-12">
                        <label>Image</label>
                        <div class="form-group text-black">
                            <input type="file" name="file_upload" class="form-control bg-white text-black" style="color:black;"> 
                        </div>  
                    </div>
                    <div class="col-md-12">
                        <label>price</label>
                        <div class="form-group text-black">
                            <input type="text" name="price" class="form-control bg-white text-black" style="color:black;"> 
                        </div>	
                    </div>
                    <div class="col-md-12">
                        <label>stock</label>
                        <div class="form-group text-black">
                            <input type="text" name="stock" class="form-control bg-white text-black" style="color:black;"> 
                        </div>	
                    </div>
                    <div class="col-md-12">
                        <label>discount</label>
                        <div class="form-group text-black">
                            <input type="text" name="discount" class="form-control bg-white text-black" style="color:black;"> 
                        </div>	
                    </div>
                    <div class="col-md-12">
                        <label>status</label>
                        <div class="form-group text-black">
                            <input type="text" name="status" class="form-control bg-white text-black" style="color:black;"> 
                        </div>	
                    </div>
                    <div class="col-md-12">
                        <label>slug</label>
                        <div class="form-group text-black">
                            <input type="text" name="slug" class="form-control bg-white text-black" style="color:black;"> 
                        </div>	
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button class="btn btn-primary">Simpan</button> 
                        </div>	
                    </div>
                </div>
            </div>
        </div>
    <?= form_close(); ?>

              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix " >
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" style="color:white;" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" style="color:white;" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" style="color:white;" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" style="color:white;" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" style="color:white;" href="#">&raquo;</a></li>
                </ul>
              </div>
          </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?= $this->endSection() ?>