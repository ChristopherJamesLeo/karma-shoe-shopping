<?php
    include "./config.php";

    $firstname = $_REQUEST["firstname"];
    $lastname = $_REQUEST["lastname"];
    $phonenumber = $_REQUEST["phonenumber"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $country = $_REQUEST["country"];
    $role = $_REQUEST["role"];
    $address1 = $_REQUEST["address1"];
    $address2 = $_REQUEST["address2"];
    $township = $_REQUEST["township"];
    $district = $_REQUEST["district"];
    $postcode = $_REQUEST["postcode"];
    echo $remember = $_REQUEST["remember"];

    echo $userimg = $_FILES["userimg"]["name"];

    // die();
    $pathDir = "../assets/img/profile-picture/";
    $targetDir = $pathDir . $userimg ;
    $fileType = pathinfo($targetDir,PATHINFO_EXTENSION);
    $fileTemp = $_FILES["userimg"]["tmp_name"];

    if(!empty($userimg)){
        if(move_uploaded_file($fileTemp,$targetDir)){
            $sql = "INSERT INTO users (firstname,lastname,phonenumber,email,password,role,JOD,country,address1,address2,city,district,postcode,userImg,remember) VALUES ('{$firstname}','{$lastname}','{$phonenumber}','{$email}','{$password}',{$role},NOW(),'{$country}','{$address1}','{$address2}','{$township}','{$district}','{$postcode}','{$userimg }','{$remember }')";

            $result = mysqli_query($conn,$sql);
        }else {
            echo "<div class='alert alert-danger'>Fail to upload img file</div>";
        }
    }else{
        echo "<div class='alert alert-danger'>Img Not Found</div>";
    }
    header("location:http://localhost/karma-shoe-shopping-site(p_17)/Login.php");
    mysqli_close($conn);
?>