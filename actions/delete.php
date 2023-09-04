<?php 
    $id = $_GET['id'];
    include('cn.php'); // for connection ..
    $query = "DELETE FROM `users` WHERE id='$id'";
    mysqli_query($cn,$query) or die('Cant run query');
    header("Location:../record.php?msg=User Deleted Successfully");
?>