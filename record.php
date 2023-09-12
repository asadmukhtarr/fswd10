<?php 
  include('include/header.php'); // header .. 
  // if condition is true ..
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
  <div class="card">
        <div class="card-header">
            All Records
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hovered">
                <tr>
                    <th>
                        ID
                    </th>
                    <th>Name</th>
                    <th>What's App</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                <?php 
                if($row > 0){
                while($ro = mysqli_fetch_array($result)){
                    if($_SESSION['id'] != $ro['id']){
                ?>
                <tr style="background-color:#dd0000; color:white;">
                    <td>
                        <?php echo $ro['id']; ?>
                    </td>
                    <td><?php echo $ro['name']; ?></td>
                    <td><?php echo $ro['whatsapp']; ?></td>
                    <td><?php echo $ro['email']; ?></td>
                    <td>
                        <button class="btn btn-info"  data-toggle="modal" data-target="#exp<?php echo $ro['id']; ?>">Send Message</button>  
                        <a href="edit.php?id=<?php echo $ro['id']; ?>">
                            <button class="btn btn-success">Edit</button>
                        </a>
                        <a href="actions/delete.php?id=<?php echo $ro['id']; ?>">
                            <button class="btn btn-warning">Delete</button>
                        </a>
                    </td>
                    <!-- Modal -->
                    <div class="modal fade" id="exp<?php echo $ro['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Send Message To <?php echo $ro['name']; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="actions/send.php?id=<?php echo $ro['id']; ?>" method="post">
                                <textarea class="form-control" rows="5" name="message" style="resize:none;"></textarea>
                                <button type="submit" class="btn btn-danger mt-2">Send Message</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </tr>
                <?php

                } } } else {
                ?>
                <tr>
                    <td colspan="5" align="center">
                        No Record Found
                    </td>
                </tr>
                <?php 
                } ?>
            </table>
        </div>
  </div>
</div>
<?php include('include/footer.php'); // footer .. ?>