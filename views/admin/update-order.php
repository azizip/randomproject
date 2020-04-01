<?php 
  include 'header.php'; 
  $id_order = $_GET['id'];
  $row_od = $dbconnect->query("SELECT * FROM order_data WHERE id_order='$id_order'");
  $data = $row_od->fetch();
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Update Order</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
  	
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
		<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-dark">List Order</h6>
		</div>  
		
		<form method="post" action="../../system/updateorder.php">
			<div class="card-body">
	            <div class="form-group">
	                <label>Order ID</label>
	                <input type="text" class="form-control form-control-sm" name="id_order" value="<?php echo $data['id_order'] ?>" readonly>
	            </div>
	            <div class="form-group">
		            <label>Status</label>
		            <div class="form-group mx-4">
		              	<?php 
		              	$A = null;
		              	$B = null;

		              	switch ($data['payment_status']) {
			                case 'Waiting for payment':
			                  $A = 'checked';
			                  break;
		              		case 'Accepted':
		              			$B = 'checked';
		              			break;
		              	} ?>

		                <input type="radio" name="payment_status" value="Waiting for payment" <?php echo $A; ?>>
		                <label class="mr-2">Waiting for payment</label>

						<input type="radio" name="payment_status" value="Accepted" <?php echo $B; ?>>
						<label class="mr-2">Accepted</label>

		            </div>
		        </div>
		    </div>
		    <div class="card-footer al-right">
	            <input type="submit" class="btn btn-sm btn-warning" value="Update Order">
	        </div>
        </form>

    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>