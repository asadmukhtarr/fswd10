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
                ?>
                <tr style="color:red;">
                    <td>
                        <?php echo $ro['id']; ?>
                    </td>
                    <td><?php echo $ro['name']; ?></td>
                    <td><?php echo $ro['whatsapp']; ?></td>
                    <td><?php echo $ro['email']; ?></td>
                    <td>
                        <button class="btn btn-success">Edit</button>
                        <a href="actions/delete.php?id=<?php echo $ro['id']; ?>">
                            <button class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
                <?php
                }} else {
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