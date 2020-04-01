<?php
include 'header.php';
$id_user = $_SESSION['id_user'];
$row = $dbconnect->query("SELECT * FROM order_data WHERE id_user='$id_user' AND payment_status='Accepted'");
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Report</span>
</div>
<!-- End of Page Heading -->


<!-- Content here -->
<div class="row justify-content-center">
  <div class="col-lg-10">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">

      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">List Item</h6>
      </div>

      <div class="card-body">

        <div class="table table-responsive">
          <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="1%">NO.</th>
              <th>Order ID</th>
              <th>Production ID</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Due Date</th>
              <th width="10%">Status</th>
            </tr>
          </thead>
          <tbody>
          <?php if ($row->rowCount() > 0) {
            $no = 1;
            while ($data = $row->fetch()) {
              ?>

            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $data['id_order'] ?></td>
              <td><?php echo $data['id_pracktis'] ?></td>
              <td><?php echo $data['amount'] ?></td>
              <td><?php echo $data['price'] ?></td>
              <td><?php echo $data['order_date'] ?></td>
              <td><?php echo $data['payment_status'] ?></td>
            </tr>

            <?php $no++; 
            }
          } ?>

          </tbody>
          </table>
          
        </div>

      </div>

    </div>
  </div>
</div>

<!-- End of Content -->


<?php include 'footer.php' ?>