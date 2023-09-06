<?php 
  include('include/header.php'); // header .. 
  // if condition is true ..c
  // when a user trying to access whoes not logged In..
  if(empty($_SESSION['user'])){
    header('location:index.php');
  }
  include('actions/cn.php'); // for connection ..
  // DESC desending order
  // ASC assending order 
  $query = "SELECT * FROM `users` ORDER BY id DESC";
  $result = mysqli_query($cn,$query) or die('Cant run query');
  $row = mysqli_num_rows($result);
?>
<div class="container mt-5">
  <?php include('error.php'); // error .. ?>
  <br />
  <div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    Chats
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <?php 
                            while($ro = mysqli_fetch_array($result)){
                        ?>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="fa fa-user-circle"></i> <?php echo $ro['name']; ?>
                            </a>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    Messages
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<?php include('include/footer.php'); // footer .. ?>