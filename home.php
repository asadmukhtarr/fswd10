<?php 
  include('include/header.php'); // header .. 
  // if condition is true ..
  // when a user trying to access whoes not logged In..
  if(empty($_SESSION['user'])){
    header('location:index.php');
  }
?>
<div class="container mt-5">
  <div class="jumbotron">
    Welcome <?php echo $_SESSION['user']; ?>
  </div>
</div>
<?php include('include/footer.php'); // footer .. ?>