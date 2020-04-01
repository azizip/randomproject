<?php 
  include 'header.php'; 
  $row = $dbconnect->query("SELECT * FROM pracktis");
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Add pracktis</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
  	
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
		<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-dark">Add pracktis</h6>
		</div>  
		
		<form method="post" action="../../system/addpracktis.php">
			<div class="card-body">
	            <div class="form-group">
	            	<label>ID pracktis</label>
	            	<input type="text" class="form-control form-control-sm" name="id_pracktis" placeholder="Input ID Pracktis . ." required>
	        	</div>
	        	<div class="form-group">
	            	<label>Engine Name</label>
	            	<input type="text" class="form-control form-control-sm" name="engine_name" placeholder="Input name . ." required>
	        	</div>
	        	<div class="form-group">
	        		<label>Dimension</label>
	            	<input type="number" class="form-control form-control-sm" name="dimension" placeholder="Input dimension . ." required>
	        	</div>
	        	<div class="form-group">
	            	<label>Output</label>
	            	<input type="text" class="form-control form-control-sm" name="output" placeholder="Input output . ." required>
	        	</div>
	        	<div class="form-group">
	            	<label>Price</label>
	            	<input type="number" class="form-control form-control-sm" name="price" placeholder="Input price . ." required>
	        	</div>
	        	<div class="form-group">
	            	<label>Stock</label>
	            	<input type="number" class="form-control form-control-sm" name="stock" placeholder="Input stock . ." required>
	        	</div>
		    </div>
		    <div class="card-footer al-right">
	            <input type="submit" class="btn btn-sm btn-success" value="Add Pracktis">
	        </div>
        </form>

    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>