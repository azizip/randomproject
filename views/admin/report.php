<?php 
	include 'header.php';

	$filter = '1';

	if (isset($_GET['date'])) {
		
		$val = $_GET['date'];
		$filter = 	"order_date = '$val'";
	}elseif (isset($_GET['month'])) {
		
		$val = $_GET['month'];
		$filter = 	"month(order_date)='$val'";
	}elseif(isset($_GET['year'])){

		$val = $_GET['year'];
		$filter = 	"year(order_date)='$val'";
	}


	$row = $dbconnect->query("SELECT id_pracktis, amount, price, order_date, payment_status, SUM(amount) AS jumlah, SUM(price) AS pendapatan FROM order_data WHERE $filter GROUP BY id_pracktis, order_date, payment_status");
	$row_t1 = $dbconnect->query("SELECT amount, SUM(amount) AS total_1 FROM order_data WHERE $filter");
	$row_t2 = $dbconnect->query("SELECT price, SUM(price) AS total_2 FROM order_data WHERE $filter");
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<span><i class = "fa fa-angle-right">&nbsp;</i>Report</span>	
</div>

<!-- Content here -->
<div class="row justify-content-center"> 
  <div class="col-lg-10">
    <!-- DataTales Example -->                              
    <div class="card shadow mb-4">
      
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">List Product</h6>
      </div>  

      <div class="card-body">
      
      <form action="filterreport.php" method="POST">
      	<div class="row">
      	<div class="col-md-5">
      		<div class="form-group">
      			<select name="filter" class="form-control form-control-sm">
      				<option>CHOOSE . .</option>
      				<option value="date">Filter by Date</option>
      				<option value="month">Filter by Month</option>
      				<option value="year">Filter by Years</option>
      			</select>
      		</div>
      	</div>
      	<div class="col-md-5">
      		<button type="submit" class="btn btn-success btn-sm"><i>&nbsp;</i>Apply Filter</button>
      	</div>
      	</div>
      </form>


      <!-- TABLE HERE -->
      <div class="table-responsive">
        <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="1%">No.</th>
              <th>Prod.ID</th>
              <th>Date</th>
              <th>Amount</th>
              <th>Income</th>
              <th>Payment Status</th>
            </tr>
          </thead>
          <tbody>
          
            <?php if($row->rowCount() > 0) {
              $no = 1;
              while($data = $row->fetch()){
            ?>


            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $data['id_pracktis'] ?></td>
                <td><?php echo $data['order_date'] ?></td>
                <td><?php echo $data['jumlah'] ?></td>
                <td><?php echo $data['pendapatan'] ?></td>
                <td><?php echo $data['payment_status'] ?></td>
                <td>
            </tr>

            <?php $no++; }}?>
            
            <?php $data = $row_t1->fetch() ?>
            <tr style="font-weight:bold;">
            	<td colspan="0">TOTAL</td>
            	<td></td>
            	<td></td>
            	<td><?php echo $data['total_1'] ?></td>
            <?php $data = $row_t2->fetch() ?>
            	<td><?php echo $data['total_2'] ?></td>
            	<td></td>
            </tr>
            

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