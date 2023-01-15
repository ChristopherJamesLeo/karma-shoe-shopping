<?php
    
    session_start();
    include "config.php";
    $userId = $_SESSION["user_id"];
    $fullname = $_REQUEST["fullname"];
    $email = $_REQUEST["email"];
    $phonenumber = $_REQUEST["phonenumber"];
    $message = $_REQUEST["review"];
    $p_id = $_REQUEST["p_id"];
    $id = $_REQUEST["id"];

    $userSql = "SELECT userImg FROM users WHERE id = {$userId}";
    $userResult = mysqli_query($conn , $userSql);

    if(mysqli_num_rows($userResult) > 0){
        while($userRow = mysqli_fetch_assoc($userResult)){
            $userImg = $userRow["userImg"];
            $revSql = "INSERT INTO reviews (p_id,name,email,phonenumber,userImg,JOD,message) VALUES ('{$p_id}','{$fullname}','{$email}','{$phonenumber}','{$userImg}',NOW(),'{$message}')";
            $revResult = mysqli_query( $conn , $revSql);
        }
    }
    header("location:http://localhost/karma-shoe-shopping-site(p_17)/product_detail.php?id={$id}");
    mysqli_close($conn);

?>