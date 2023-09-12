<?php 
    session_start();
    $user_two_id = $_GET['id']; // second user ..
    $user_one_id = $_SESSION['id']; // for send user  id ..
    $message = $_POST['message']; // message
    include('cn.php'); // connection ..
    $query = "INSERT INTO `chats`(user_one,user_two) VALUES ('$user_one_id','$user_two_id')";
    mysqli_query($cn,$query) or die('cant run query');
    $lid = mysqli_insert_id($cn); // last inserted id of chat  ..
    $q = "INSERT INTO `messages`(chat_id,message,user_id) VALUES ('$lid','$message','$user_one_id')";
    mysqli_query($cn,$q) or die('cant run query'.mysqli_error($cn));  
    header('Location:../record.php?msg=Message Send Successfully');  
?>