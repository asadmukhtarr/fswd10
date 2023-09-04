<?php include('include/header.php'); // header .. ?>
<div class="container mt-5">
  <div class="row">
    <div class="col-lg-5">
      <?php include('error.php'); // error .. ?>
      <div class="jumbotron">
           <h3> <i class="fa fa-sign-in"></i> Login Here</h3>
           <form action="actions/login.php" method="get">
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter Email" name="email">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter Password" name="password">
              </div>
              <div class="form-group">
                <button name="act" value="1" class="btn btn-danger float-right">Login</button>
              </div>
           </form>
      </div>
    </div>
  </div>
</div>
<?php include('include/footer.php'); // footer .. ?>