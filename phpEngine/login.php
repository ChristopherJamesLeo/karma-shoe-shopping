<?php
    include "./config.php";
    // session_start();
    // session_unset();
    // session_destroy();
    // die();
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];

    $sql = "SELECT * FROM users WHERE email='{$email}' AND password = '{$password}'";  
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            // echo $row["id"];
            session_start();
            echo $_SESSION["user_id"] = $row["id"];
            echo $_SESSION["user_email"] = $row["email"];
            echo $_SESSION["password"] = $row["password"];
            header("location:http://localhost/karma-shoe-shopping-site(p_17)/index.php");
        }
    }else {
        header("location:http://localhost/karma-shoe-shopping-site(p_17)/Login.php");
    }
    mysqli_close($conn);    
?>