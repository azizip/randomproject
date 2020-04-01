<?php 
include 'portal_header.php';
if(isset($_GET['message'])){
  if($_GET['message'] == "failed"){
    $msg = "Username or Password is not match!";
  }else if($_GET['message'] == "not_logged_in"){
    $msg = "You must login first!";
  }else if($_GET['message'] == "success"){
    $msg = "Sign Up Success!";
  }
}
?>


<div class="text-center">
  <h1 class="h4 text-gray-900 mb-4"><b>LOGIN</b> PAGE</h1>
</div>

<form class="user" method="post" action="../auth/login.php">
  
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
    <input type="username" class="form-control form-control-sm" name="username" placeholder="Username . .">
  </div>
  <div class="form-group">
    <input type="password" class="form-control form-control-sm" name="password" placeholder="*********">
  </div>
  <button class="btn btn-primary btn-user btn-block">LOGIN</button>
</form>

<hr>
<div class="text-center">
  Register <a href="sign-up.php">here!</a>
</div>
    
<?php include 'portal_footer.php';?>