<?php 
   /*
      Two types of variables:
         - Local Variables
               - just can access in a file only  ..
         - Global Variables
               - We can access in compelte project ..
               // sessoins
               // cookies
   */
         // if($_GET['act'] == "login" ){

         //       //sasad
         // } else {
         //       ///sadsad
         // }
   $name = $_POST['name']; //  for getting name ..
   $email = $_POST['email']; // for getting email ..
   $wp    = $_POST['wp']; // whats app
   $password = $_POST['password']; // password ..
   $cpassword = $_POST['cpassword']; // confrim pssword ..
   if($password == $cpassword){
    // == is used for comparison
    // = is use for store value
    // === value + type comparison
    include('cn.php'); // for connection file ..
    $q = "SELECT * FROM `users` WHERE email='$email'";
    // var_dump($q);
    $result = mysqli_query($cn,$q) or die('Cant run email checking query');
    $row = mysqli_num_rows($result); // for count number of rows agains required data in database ..
    if($row > 0){ 
      // query ..
      $erorr = "Email Already Exist";
      header('Location:../register.php?error='.$erorr);
    } else {
            $query = "INSERT INTO `users`(name,email,whatsapp,password) VALUES ('$name','$email','$wp','$password')";
            // msqli_query('DB Connection','Query');
            mysqli_query($cn,$query) or die('Cant run query');
            header('Location:../index.php');
    }
   }  else {
    // header function is use for redirect page in php ..
    $erorr = "Password did not match";
    header('Location:../register.php?error='.$erorr);
   }
?>