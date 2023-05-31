<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Product</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="<?=base_url('assets/ckeditor/ckeditor.js');?>"></script>
</head>
<body style="width: 70%; margin: 0 auto; padding-top: 30px;">
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
    				<div class="form-group">
                   		 <input type="text" name="name" class="form-control"> 
                	</div>	
    			</div>
				<div class="col-md-12">
                    <label>Image</label>
                    <div class="form-group">
                         <input type="file" name="file_upload" class="form-control"> 
                    </div>  
                </div>
    			<div class="col-md-12">
    				<label>price</label>
    				<div class="form-group">
                   		 <input type="text" name="price" class="form-control"> 
                	</div>	
    			</div>
    			<div class="col-md-12">
    				<label>size</label>
    				<div class="form-group">
                   		 <input type="text" name="price" class="form-control"> 
                	</div>	
    			</div>
    			<div class="col-md-12">
    				<label>color</label>
    				<div class="form-group">
                   		 <input type="text" name="color" class="form-control"> 
                	</div>	
    			</div>
    			<div class="col-md-12">
    				<label>status</label>
    				<div class="form-group">
                   		 <input type="text" name="status" class="form-control"> 
                	</div>	
    			</div>
    			<div class="col-md-12">
    				<label>description</label>
    				<div class="form-group">
                   		 <textarea name="description" id="editor1"></textarea>
                            <script>
                                CKEDITOR.replace( 'editor1' );
                            </script>
                	</div>	
    			</div>
				<div class="col-md-12">
    				<label>slug</label>
    				<div class="form-group">
                   		 <input type="text" name="slug" class="form-control"> 
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
</body>
</html>