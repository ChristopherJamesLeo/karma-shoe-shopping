<?php
    include "./config.php";

    $payment = $_REQUEST["payment"];

    $sql = "SELECT * FROM carts";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        while( $row = mysqli_fetch_assoc($result)){
            $quantity = $row["quantity"];
            $ordsql = "UPDATE orders SET quantity ={$quantity}, payment ='{$payment}' WHERE id = {$row['id']}";
             $ordresult = mysqli_query($conn,$ordsql);

        }
    }

    header("location:http://localhost/karma-shoe-shopping-site(p_17)/confirmation.php");
    mysqli_close($conn);
?>