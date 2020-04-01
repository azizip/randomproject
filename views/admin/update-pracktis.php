<?php 
  include 'header.php'; 
  $id_pracktis = $_GET['id'];
  $row = $dbconnect->query("SELECT * FROM pracktis WHERE id_pracktis = '$id_pracktis'");
  $data = $row->fetch();
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Update Pracktis</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
  	
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
		<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-dark">Update Pracktis</h6>
		</div>  
		
		<form method="post" action="../../system/updatepracktis.php">
			<div class="card-body">
	            <div class="form-group">
                	<label>Pracktis Code</label>
                	<input type="text" class="form-control form-control-sm" name="id_pracktis" value="<?php echo $data['id_pracktis'] ?>" readonly>
                </div>
                <div class="form-group">
                	<label>Name</label>
                	<input type="text" class="form-control form-control-sm" name="engine_name" value="<?php echo $data['engine_name'] ?>" required>
                </div>
                <div class="form-group">
                	<label>Dimension</label>
                	<input type="number" class="form-control form-control-sm" name="dimension" value="<?php echo $data['dimension'] ?>" required>
                </div>
                <div class="form-group">
                	<label>Output</label>
                	<input type="text" class="form-control form-control-sm" name="output" value="<?php echo $data['output'] ?>" required>
                </div>
                <div class="form-group">
                	<label>Price</label>
                	<input type="number" class="form-control form-control-sm" name="price" value="<?php echo $data['price'] ?>" required>
                </div>
                <div class="form-group">
                  <label>Stock</label>
                  <input type="number" class="form-control form-control-sm" name="stock" value="<?php echo $data['stock'] ?>" required>
                </div>
		    </div>
		    <div class="card-footer al-right">
	            <input type="submit" class="btn btn-sm btn-warning" value="Update pracktis">
	        </div>
        </form>

    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>