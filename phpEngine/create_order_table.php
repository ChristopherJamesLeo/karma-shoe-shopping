<?php
    
    session_start();

    if(!isset($_SESSION["user_id"])){
        header("location:http://localhost/karma-shoe-shopping-site(p_17)/Login.php");
    }else{
        include "./config.php";
        $sql = "SELECT * FROM carts WHERE user_id = {$_SESSION['user_id']}";
        $result = mysqli_query($conn,$sql);

    
        if(mysqli_num_rows($result) > 0){
            while( $row = mysqli_fetch_assoc($result)){
                echo $p_id = $row["p_id"];
                echo $p_name = $row["p_name"];
                echo $price = $row["price"];
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
    
                $insetOrderSql = "INSERT INTO orders (userid,p_id,p_name,price,quantity,p_img1,p_img2,p_description,width,height,depth,weight,qc,freshness_duration,packeting,boxcontains,rating) VALUES ({$_SESSION['user_id']},'{$p_id}','{$p_name}','{$price}','{$quantity}','{$p_img1}','{$p_img2}','{$p_description}','{$width}','{$height}','{$depth}','{$weight}','{$qc}','{$freshness_duration}','{$packeting}','{$boxcontains}','{$rating}')";
    
                $insetOrderResult = mysqli_query($conn,$insetOrderSql);

                $delCart = "DELETE FROM carts WHERE user_id={$_SESSION['user_id']}";
                $delResult = mysqli_query($conn,$delCart);

                header("location:http://localhost/karma-shoe-shopping-site(p_17)/check_out.php");
                
            }
        }
    }
    mysqli_close($conn);

?>