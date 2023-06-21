<?= $this->extend('layouts/backend') ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <!-- Conte  nt Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User Dashboard </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
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
                <h3 class="card-title"></h3> <br>
                    <h3>Hello, <b><?= session()->get('name') ?></b>  you are login as <span class="badge bg-warning"> User </span> </h3>

                    <?php foreach($users as $row):?>

                    <?php if ($row == 1): ?>
                            <h1>status 1</h1>
                        <?php elseif ($row == 0): ?>
                            <h1>status 0</h1>
                    <?php endif; ?>

                    <?php endforeach;?>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
          
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix" >

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