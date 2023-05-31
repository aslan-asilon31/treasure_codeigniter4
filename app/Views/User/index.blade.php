<?= $this->extend('layouts/backend') ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <!-- Conte  nt Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v2</h1>
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
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Status</th>
                      <th>Created At</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>imagee</td>
                      <td>namee</td>
                      <td>Emaill</td>
                      <td>Admin</td>
                      <td><span class="badge bg-primary">Active</span></td>
                      <td>2023-06-10</td>
                      <td>
                        <a class="btn btn-info" href=""><i class="fa fa-eye"></i></a>
                        <a class="btn btn-success" href=""><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a>
                      </td>

                    </tr>
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