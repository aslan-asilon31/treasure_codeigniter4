<?= $this->extend('layouts/backend') ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <!-- Conte  nt Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title; ?></h1>
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
          <div class="card" style="overflow-x: scroll;">
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
                  <a href="productimage/create" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                  <a href="" class="btn btn-warning"><i class="fa fa-file-excel"></i></a>
                  <a href="" class="btn btn-danger"><i class="fa fa-file-pdf"></i></a>
                  <a href="" class="btn btn-info"><i class="fa fa-file-csv"></i></a>
                  <a href="" class="btn btn-secondary"><i class="fa fa-upload"></i></a>

                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered" style="overflow-x: scroll;">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Product ID</th>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Created At</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php 
                    if(count($productimages) > 0){

                      foreach($productimages as $productimage){
                    ?>
                    <tr>
                      <td>1</td>
                      <td><?= $productimage['product_id'] ?></td>
                      <td><?= $productimage['image'] ?></td>
                      <td><?= $productimage['title'] ?></td>
                      <td><?= $productimage['description'] ?></td>
                      <td><?= $productimage['created_at'] ?></td>
                      <td>
                        <a class="btn btn-info" href=""><i class="fa fa-eye"></i></a>
                        <a class="btn btn-success" href=""><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" href="<?= site_url('productimage/delete/'.$productimage['id']) ?>"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php
                      }

                    }else{
                    ?>
                      <tr>
                        <td colspan="4">No data found.</td>
                      </tr>
                    <?php
                    }
                  ?>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix" >
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