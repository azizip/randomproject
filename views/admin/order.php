<?php 
  include 'header.php'; 
  $row_od = $dbconnect->query("SELECT * FROM order_data join user on user.id_user=order_data.id_user");
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>List Order</span>
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
              <th>Ord. ID</th>
              <th>Customer</th>
              <th>Contact</th>
              <th>Address</th>
              <th>Prod. ID</th>
              <th>Amount</th>
              <th>Price</th>
              <th>Order Date</th>
              <th width="15%">Payment Status</th>
              <th width="5%">Action</th>
            </tr>
          </thead>
          <tbody>
          
            <?php if($row_od->rowCount() > 0){
              $no = 1;
              while($data = $row_od->fetch()){
            ?>

            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $data['id_order'] ?></td>
              <td><?php echo $data['name'] ?></td>
              <td><?php echo $data['phone'] ?></td>
              <td><?php echo $data['address'] ?></td>
              <td><?php echo $data['id_pracktis'] ?></td>
              <td><?php echo $data['amount'] ?></td>
              <td><?php echo $data['price'] ?></td>
              <td><?php echo $data['order_date'] ?></td>
              <td><?php echo $data['payment_status'] ?></td>
              <td align="center">
                <a class="btn btn-sm btn-warning" href="update-order.php?id=<?php echo $data['id_order'] ?>"><i class="fas fa-fw fa-edit"></i></a>
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

<?php include 'footer.php' ?>