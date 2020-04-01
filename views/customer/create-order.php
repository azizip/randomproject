<?php 
  include 'header.php'; 
  $id_product = $_GET['id'];
  $row = $dbconnect->query("SELECT * FROM pracktis WHERE id_pracktis = '$id_product'");
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Home</span>
</div>
<!-- End of Page Heading -->


<!-- Content here -->
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
      	<div class="card-header py-3">
    	    <h6 class="m-0 font-weight-bold text-dark">Create Order</h6>
    	</div>  

    	<!-- FORM HERE -->
     	<form method="post" action="../../system/addorder.php">
	    	<div class="card-body">
	          
	        <?php if($row->rowCount() > 0){
	          $no = 1;
	          while($data = $row->fetch()){
	        ?>
	          	<div class="form-group">
	              	<label>ID Pracktis</label>
	              	<input type="text" class="form-control form-control-sm" name="id_pracktis" value="<?php echo $data['id_pracktis']?>" readonly>
	            </div>
	          	<div class="form-group">
	            	<label>Amount </label>
	            	<input type="number" class="form-control form-control-sm" name="amount" placeholder="Input Amount . ." required>
	          	</div>
	        
	        <?php $no++; }} ?>

	      	</div>

      		<div class="card-footer al-right">
	          <input type="submit" class="btn btn-sm btn-success" value="Submit">
	        </div>

	    </form>

    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>