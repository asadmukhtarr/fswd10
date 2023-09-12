<?php 
    $email = $_GET['email'];
    $password = $_GET['password'];
    // REQURIE('CN.PHP')
    include('cn.php'); // for connection file .. (include() functoin shamil krna , requrie ())
    $query = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
    $result = mysqli_query($cn,$query) or die('cant run query');
    $row = mysqli_num_rows($result);
    if($row > 0){
        $ro = mysqli_fetch_array($result); // it will fetch data in the form of array ..
        session_start(); // its compusry for use session ..
        $_SESSION['user'] = $ro['name'];
        $_SESSION['id'] = $ro['id'];
        header('Location:../home.php');
    } else {
        header("Location:../index.php?error=Email or password is wrong");
    }

?>