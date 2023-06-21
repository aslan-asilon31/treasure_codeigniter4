<?= $this->extend('layouts/backend_admin') ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <!-- Conte  nt Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">
          </h1>
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
          <div class="col-md-8">

          <form method="post" action="/productimage/store">
            <div class="form-group">
                <label for="name">Product ID</label>
                <!-- <input type="text" class="form-control"  placeholder="Product Name"> -->
                <select class="form-control" id="name" name="name">
                <?php 
                    if(count($products) > 0){

                      foreach($products as $product){
                    ?>
                    <option value="<?= $product['id'] ?>"><?= $product['id'] ?> - <?= $product['name'] ?></option>
                    <?php
                      }

                    }else{
                    ?>
                      <option>
                        <td colspan="4">No data found.</td>
                    </option>
                    <?php
                    }
                  ?>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Image </label>
                <!-- <input type="upload" class="form-control" id="image" name="image" placeholder="Image URL"> -->
                <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" placeholder="Image URL">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
            </div>
            <div class="form-group">
                <label for="description">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="product-index" placeholder="product-index">
            </div>
            <button type="submit" class="btn btn-primary">Create Product Image</button>
        </form>
          
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?= $this->endSection() ?>