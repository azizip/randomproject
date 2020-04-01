<?php 
include 'portal_header.php';
if(isset($_GET['message'])){
  if($_GET['message'] == "failed"){
    $msg = "Username already exist!";
  }elseif($_GET['message'] == "something_wrong"){
    $msg = "Something Wrong, Try again later!";
  }
}
?>

<div class="text-center">
  <h1 class="h4 text-gray-900 mb-4"><b>REGISTRATION</b> PAGE</h1>
</div>
<form class="user" method="post" action="../auth/sign-up.php">
  
  <!-- Check Error Message -->
  <?php if (isset($msg)){ ?>
  <div class="alert alert-warning" role="alert">
    <i class="fas fa-exclamation-circle">&nbsp;</i> 
    <?=$msg ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php } ?>
  <!-- /Check Error Message -->
  
  <div class="form-group">
    <input type="text" class="form-control form-control-sm" name="name" required placeholder="Your Name . .">
  </div>
  <div class="form-group">
    <input type="text" class="form-control form-control-sm" name="phone" required placeholder="Your Phone . .">
  </div>
  <div class="form-group">
    <textarea type="text" class="form-control form-control-sm" name="address" required placeholder="Your Address . ." rows="1"></textarea>
  </div>
  <div class="form-group">
    <input type="username" class="form-control form-control-sm" name="username" required placeholder="Username . .">
  </div>
  <div class="form-group">
    <input type="password" class="form-control form-control-sm" name="password" required placeholder="*********">
  </div>
  <input type="submit" name="user_signup" class="btn btn-success btn-user btn-block" value="SIGN UP">
</form>
<hr>
<div class="text-center">
  Have an account? <a href="login.php">Login Here!</a>
</div>

<?php include 'portal_footer.php';?>