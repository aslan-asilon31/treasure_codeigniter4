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
                  <a href="product/create" class="btn btn-primary"><i class="fa fa-plus"></i></a>
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
                      <!-- <th>Image</th> -->
                      <th>Name</th>
                      <th>Image</th>
                      <th>Slug</th>
                      <th>Created  At</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php foreach($category as $row):?>
                  <tr>
                      <td><?=$row['id'];?></td>
                      <td><?=$row['name'];?></td>
                      <td><?php
                          if (!empty($row["image"])) {
                              echo '<img src="'.base_url("assets/categories/$row[image]").'" width="100">';
                          }
                      ?></td>
                      <td><?=$row['slug'];?></td>
                      <td>
                      <?=
                      $dateString = $row['created_at'];
                      $timestamp = strtotime($dateString);
                      $formattedDate = date('d F Y', $timestamp);
                      ?>
                      </td>
                      <td>
                        <a href="product/view/<?=$row['id'];?>" class="btn btn-success"><i class="fa fa-eye"></i> </a> | 
                        <a href="product/form_edit/<?=$row['id'];?>" class="btn btn-primary"><i class="fa fa-edit"></i></a> | 
                        <a href="product/delete/<?=$row['id'];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a> 
                      </td>

                  </tr>
                  <?php endforeach;?>

                    
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