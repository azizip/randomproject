<?php 
  include 'header.php'; 
  $row = $dbconnect->query("SELECT * FROM pracktis");
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Home</span>
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
      

      <!-- TABLE HERE -->
      <div class="table-responsive">
        <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="1%">No.</th>
              <th>Pracktis Code</th>
              <th>Name</th>
              <th>Dimension</th>
              <th>Output (kVA)</th>
              <th>Price (Rp)</th>
              <th>Stock (Unit)</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          
            <?php if($row->rowCount() > 0){
              $no = 1;
              while($data = $row->fetch()){
            ?>

            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $data['id_pracktis'] ?></td>
              <td><?php echo $data['engine_name'] ?></td>
              <td><?php echo $data['dimension'] ?></td>
              <td><?php echo $data['output'] ?></td>
              <td><?php echo $data['price'] ?></td>
              <td><?php echo $data['stock'] ?></td>
              <td>Login for Order</td>
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