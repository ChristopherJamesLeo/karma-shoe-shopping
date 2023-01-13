<?php
    include "./config.php";
    
    // $sql = "CREATE TABLE IF NOT EXISTS orders AS SELECT * FROM carts";
    // $result = mysqli_query( $conn , $sql );
    
    // $ordSql = "ALTER TABLE orders ADD COLUMN username CHAR(100) NOT NULL,ADD COLUMN userid INT NOT NULL , ADD COLUMN shippingType CHAR(100) NOT NULL , ADD COLUMN country CHAR(100) NOT NULL,ADD COLUMN state CHAR(100) NOT NULL , ADD COLUMN postalCode CHAR(100) NOT NULL ,ADD COLUMN payment CHAR(100) NOT NULL";
    // $ordResult = mysqli_query( $conn , $ordSql);

    // $delCart = "TRUNCATE TABLE carts";
    // $delResult = mysqli_query( $conn , $delCart);

    $sql = "SELECT * FROM carts";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        while( $row = mysqli_fetch_assoc($result)){
            $p_id = $row["p_id"];
            $p_name = $row["p_name"];
            $price = $row["price"];
            $quantity = $row["quantity"];
            $p_img1 = $row["p_img1"];
            $p_img2 = $row["p_img2"];
            $p_description = $row["p_description"];
            $width = $row["width"];
            $height = $row["height"];
            $depth = $row["depth"];
            $weight = $row["weight"];
            $qc = $row["qc"];
            $freshness_duration = $row["freshness_duration"];
            $packeting = $row["packeting"];
            $boxcontains = $row["boxcontains"];
            $rating = $row["rating"];

            $insetOrderSql = "INSERT INTO orders (p_id,p_name,price,quantity,p_img1,p_img2,p_description,width,height,depth,weight,qc,freshness_duration,packeting,boxcontains,rating) VALUES ('{$p_id}','{$p_name}','{$price}','{$quantity}','{$p_img1}','{$p_img2}','{$p_description}','{$width}','{$height}','{$depth}','{$weight}','{$qc}','{$freshness_duration}','{$packeting}','{$boxcontains}','{$rating}')";

            $insetOrderResult = mysqli_query($conn,$insetOrderSql);
        }
    }
    // $delCart = "TRUNCATE TABLE carts";
    // $delResult = mysqli_query( $conn , $delCart);
    header("location:http://localhost/karma-shoe-shopping-site(p_17)/check_out.php");
    mysqli_close($conn);
?>