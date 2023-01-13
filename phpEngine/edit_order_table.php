<?php
    include "./config.php";
    echo $shiptype = $_REQUEST["ship-type"];
    echo $country = $_REQUEST["country"];
    echo $state = $_REQUEST["state"];
    echo $postalcode = $_REQUEST["postalcode"];


    $sql = "SELECT * FROM carts";
    $result = mysqli_query($conn,$sql);

        while( $row = mysqli_fetch_assoc($result)){
            echo $quantity = $row["quantity"];

            $ordSql = "UPDATE orders SET quantity ={$quantity}, shippingType ='{$shiptype}',country ='{$country}',state ='{$state}',postalCode ='{$postalcode}' WHERE id = {$row['id']}";
            
            $ordresult = mysqli_query( $conn , $ordSql);

        }
    header("location:http://localhost/karma-shoe-shopping-site(p_17)/check_out.php");
    mysqli_close($conn);
?>