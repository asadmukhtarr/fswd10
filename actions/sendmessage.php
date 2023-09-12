<?php 
    $chat_id = $_GET['chat_id'];
    $message = $_POST['message'];
    session_start();
    $myid = $_SESSION['id'];
    include('cn.php');
    $query = "INSERT INTO `messages`(chat_id,message,user_id) VALUE ('$chat_id','$message','$myid')";
    mysqli_query($cn,$query) or die('cant run query');
    header('Location:../messages.php?chat_id='.$chat_id);
?>