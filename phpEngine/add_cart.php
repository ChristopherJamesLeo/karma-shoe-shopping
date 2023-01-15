<?php

    session_start();
    if(!isset($_SESSION["user_id"])){
        header("location:http://localhost/karma-shoe-shopping-site(p_17)/Login.php");
    }
    include "./config.php";
    $id = $_REQUEST["id"];
    $quantity = $_REQUEST["quantity"];
    $user_id = $_SESSION["user_id"];

    $sql = "SELECT * FROM products_list WHERE id = $id";
    $result = mysqli_query( $conn , $sql );

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row["id"];
            $p_id = $row["p_id"];
            $p_name = $row["p_name"];
            $p_img1 = $row["p_img1"];
            $p_img2 = $row["p_img2"];
            $price = $row["price"];
            $p_description = $row["p_description"];
            $width = $row["width"];
            $height = $row["height"];
            $depth = $row["depth"];
            $weight = $row["weight"];
            $qc = $row["qc"];
            $freshness_duraiton = $row["freshness_duration"];
            $packeting = $row["packeting"];
            $boxcontains = $row["boxcontains"];
            $rating = $row["rating"];
        }
    }

    $insertSql = "INSERT INTO carts (p_id,user_id,p_name,price,quantity,p_img1,p_img2,p_description,width,height,depth,weight,qc,freshness_duration,packeting,boxcontains,rating) VALUES ('{$p_id}',{$user_id},'{$p_name}','{$price}',$quantity,'{$p_img1}','{$p_img2}','{$p_description}','{$width}','{$height}','{$depth}','{$weight}','{$qc}','{$freshness_duraiton}','{$packeting}','{$boxcontains}','{$rating}')";
    $insertResult = mysqli_query( $conn , $insertSql );

    echo $quantity;
    header("location:http://localhost/karma-shoe-shopping-site(p_17)/product_detail.php?id=$id");

    mysqli_close($conn);
?>