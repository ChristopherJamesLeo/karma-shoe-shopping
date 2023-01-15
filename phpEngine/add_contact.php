<?php
    include "./config.php";
    $fullname = $_REQUEST["name"];
    $email =$_REQUEST["email"];
    $subject = $_REQUEST["subject"];
    $message = $_REQUEST["message"];

    $sql = "INSERT INTO contacts (fullname,email,subject,JOD,message) VALUES ('{$fullname}','{$email}','{$subject}',NOW(),'{$message}')";

    $result = mysqli_query( $conn , $sql );

    header("location:http://localhost/karma-shoe-shopping-site(p_17)/contact_us.php");
    mysqli_close( $conn );

?>