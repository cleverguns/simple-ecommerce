<?php
session_start();
include_once('config.php');
if(isset($_SESSION['user_token'])){
    $user_id = $_SESSION['user_token'];
    $user_query = $conn->query("SELECT * FROM tbl_users WHERE user_id = '{$user_id}' LIMIT 1");
    if($user_query->num_rows > 0){
        $fetch_data = $user_query->fetch_assoc();
        $first_name = $fetch_data['fname'];
        $last_name = $fetch_data['lname'];
        $user_name = $fetch_data['fname']. " ". $fetch_data['lname'];
        $role = $fetch_data['user_role'];
        $avatar = $fetch_data['avatar'];
        $_SESSION['role'] = $fetch_data['user_role'];
    }else{
        header("Location: ../");
    }
}else{
    header("Location: ../");
}
?>