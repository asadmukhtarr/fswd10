<?php 
    $id = $_GET['id'];
    $name = $_POST['name']; //  for getting name ..
    $email = $_POST['email']; // for getting email ..
    $wp    = $_POST['wp']; // whats app
    $password = $_POST['password']; // password ..
    include('cn.php'); // connection ..
    $query = "UPDATE `users` SET name='$name', email='$email',password='$password',whatsapp='$wp' WHERE id='$id'";
    //var_dump($query); // for testing ..
    mysqli_query($cn,$query) or die('Cant Run Update Query');
    $erorr = "Updated Data Successfully";
    header('Location:../record.php?msg='.$erorr);
?>