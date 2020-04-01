<?php 
  include 'header.php'; 
  $id_user = $_SESSION['id_user'];
  $row_od = $dbconnect->query("SELECT * FROM order_data WHERE id_user = '$id_user'");
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>My Order</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
  	
<div class="row justify-content-center"> 
  <div class="col-lg-12">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">List Order</h6>
      </div>  

      <div class="card-body">

      <!-- TABLE HERE -->
      <div class="table-responsive">
        <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="1%">No.</th>
              <th>Order ID</th>
              <th>Product ID</th>
              <th>Amount</th>
              <th>Price</th>
              <th>Order Date</th>
              <th width="15%">Payment</th>
              <th width="5%">Action</th>
            </tr>
          </thead>
          <tbody>
          
            <?php if($row_od->rowCount() > 0){
              $no = 1;
              while($data = $row_od->fetch()){
                if ($data['payment_status'] == "Waiting for payment") {
                  $deletebutton = "href='../../system/deleteorder.php' class='btn btn-sm btn-danger'";
                }else{
                  $deletebutton = "class='btn btn-sm btn-white' readonly";
                }
            ?>

            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $data['id_order'] ?></td>
              <td><?php echo $data['id_pracktis'] ?></td>
              <td><?php echo $data['amount'] ?></td>
              <td><?php echo $data['price'] ?></td>
              <td><?php echo $data['order_date'] ?></td>
              <td><?php echo $data['payment_status'] ?></td>
              <td align="center">
                <?php if ($data['payment_status'] == "Waiting for payment") { ?>
                  <a href="../../system/deleteorder.php?id=<?php echo $data['id_order'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')" ><i class="fas fa-fw fa-trash"></i></a>
                <?php }else{ ?>
                  <i class="fas fa-fw fa-trash text-gray-500"></i>
                <?php }?>
                
              </td>
            </tr>
            
            <?php $no++; }} ?>

          </tbody>
        </table>
      </div>
      <!-- END OF TABLE -->
      
      </div>
      
    </div>
  </div>
</div>

<!-- End of Content -->

<!--PLACE OTHER MODAL HERE-->

<?php include 'footer.php' ?>