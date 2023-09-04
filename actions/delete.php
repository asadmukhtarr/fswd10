<?php 
    $id = $_GET['id'];
    include('cn.php'); // for connection ..
    // writing delete query ..
    $query = "DELETE FROM `users` WHERE id='$id'";
    // for run query ..
    mysqli_query($cn,$query) or die('Cant run query');
    // redirection ..
    header("Location:../record.php?msg=User Deleted Successfully");
?>