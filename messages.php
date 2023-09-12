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
  $userid = $_SESSION['id'];
  $query = "SELECT * FROM `chats` WHERE user_one='$userid' OR user_two='$userid' ORDER BY id DESC";
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
                            $user_two = $ro['user_two'];
                            $q = "SELECT * FROM `users` WHERE id='$user_two'";
                            $r = mysqli_query($cn,$q) or die('cant run query');
                            $data = mysqli_fetch_array($r);
                        ?>
                            <a href="messages.php?chat_id=<?php echo $ro['id']; ?>" class="list-group-item list-group-item-action">
                                <i class="fa fa-user-circle"></i> <?php echo $data['name']; ?>
                            </a>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
          <?php 
            if(!empty($_GET['chat_id'])){
            $chat_id = $_GET['chat_id'];
            include('actions/cn.php');
            $query = "SELECT * FROM `messages` WHERE chat_id='$chat_id'";
            $result = mysqli_query($cn,$query) or die('Cant run query');
            $n = mysqli_num_rows($result);
          ?>
              <div class="card" style="height:400px;">
                    <div class="card-header">
                        Messages
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <?php 
                                while($dat = mysqli_fetch_array($result)){ 
                    
                            ?>
                            <li class="list-group-item">
                              <span class="<?php if($dat['user_id'] == $_SESSION['id']){ ?> pull-right  <?php } ?>">  <?php echo $dat['message']; ?>  </span>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <form action="actions/sendmessage.php?chat_id=<?php echo $chat_id ?>" method="post">
                            <input type="text" class="form-control" name="message" />
                            <button type="submit" class="btn btn-danger mt-2">Send Message</button>
                        </form>
                    </div>
                </div>
          <?php 
            } else {
          ?>
                <div class="jumbotron">
                    <h2>Please Select Chat</h2>
                </div>
          <?php 
            }
          ?>
        </div>
    </div>
  </div>
</div>
<?php include('include/footer.php'); // footer .. ?>