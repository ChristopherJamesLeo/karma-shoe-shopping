<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="shortcut icon" href="./assets/img/background-imgs/fav-logo.png" type="image/x-icon">

    <!-- bootstrap css 1 js 1 -->
    <link rel="stylesheet" href="./assets/libs/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <!-- tailwind  -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font awesome 5.15.4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./custom_css/style.css">
    <link rel="stylesheet" href="./custom_css/media-style.css">
</head>
<body>
    <?php
    session_start();
    ?>
    <!-- Header Start  -->
    <header class="w-full header secondary-header">
        <!-- navbar start -->
        <nav id="navbar" class=" nav-bar shadow-md">
            <div class="row justify-content-between items-center">
                <div class="col-6">
                    <a href="./index.php">
                        <img src="./assets/img/background-imgs/logo.png.webp" alt="">
                    </a>
                </div>
                <div class="col-6 flex justify-content-end">
                    <div class="slide-btn-container place-items-center">
                        <button id="slide-btn" class="slide-btn">
                            <div></div>
                            <div></div>
                            <div></div>
                        </button>
    
                    </div>
                    <ul class="uppercase navbar-menu">
                        <li class="nav-item "><a href="./index.php" class="nav-link">Home</a></li>
                        <li class="nav-item relative active"><a href="./shop_category.php" class="nav-link">Shop</a>
                            <ul class="uppercase absolute left-0 bg-white navbar-menu-item">
                                <li class="navbar-item"><a href="./shop_category.php" id="" class="nav-link">shop category</a></li>
                                <li class="navbar-item"><a href="./product_detail.php" id="" class="nav-link">Product Details</a></li>
                                <li class="navbar-item active"><a href="./check_out.php" id="" class="nav-link">Product Checkout</a></li>
                                <li class="navbar-item"><a href="./shopping_cart.php" id="" class="nav-link">shopping cart</a></li>
                                <li class="navbar-item"><a href="./confirmation.php" id="" class="nav-link">confimation</a></li>
                            </ul>
                        </li>
                        <li class="nav-item relative "><a href="./blog.php" class="nav-link">Blog</a>
                            <ul class="uppercase absolute left-0 bg-white navbar-menu-item">
                                <li class="navbar-item"><a href="./blog.php" id="" class="nav-link">blog</a></li>
                                <li class="navbar-item"><a href="./blog_detail.php" id="" class="nav-link">blog Details</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-item relative"><a href="#" class="nav-link">Pages</a>
                            <ul class="uppercase absolute left-0 bg-white navbar-menu-item">
                            <?php
                            
                            if(isset($_SESSION["user_id"])){
                            ?>
                                <li class="nav-item"><a href="./phpEngine/log_out.php" class="nav-link">Log Out</a></li>
                            <?php
                                }else {
                            ?>
                                <li class="nav-item"><a href="./Login.php" id="" class="nav-link">login</a></li>
                            <?php
                                }
                            ?>
                                
                                <li class="navbar-item"><a href="./tracking.php" id="" class="nav-link">tracking</a></li>
                                <li class="navbar-item"><a href="./register.php" id="" class="nav-link">register</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-item"><a href="./contact_us.php" class="nav-link">Content</a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-shopping-cart"></i></a></li>
                        <li id="search-box-btn" class="nav-item"><a href="#" class="nav-link"><i class="fas fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="col-12 flex justify-content-start">
                    <ul class="uppercase navbar-menu-slide">
                        <li class="nav-item"><a href="./index.php" class="nav-link">Home</a></li>
                        <li class="nav-item active"><a href="#" class="nav-link">Shop</a>
                            <ul class="uppercase left-0 bg-white navbar-menu-item">
                                <li class="navbar-item"><a href="./shop_category.php" id="" class="nav-link">shop category</a></li>
                                <li class="navbar-item"><a href="./product_detail.php" id="" class="nav-link">Product Details</a></li>
                                <li class="navbar-item active"><a href="./check_out.php" id="" class="nav-link">Product Checkout</a></li>
                                <li class="navbar-item"><a href="./shopping_cart.php" id="" class="nav-link">shopping cart</a></li>
                                <li class="navbar-item"><a href="./confirmation.php" id="" class="nav-link">confimation</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">Blog</a>
                            <ul class="uppercase left-0 bg-white navbar-menu-item">
                                <li class="navbar-item"><a href="./blog.php" id="" class="nav-link">blog</a></li>
                                <li class="navbar-item"><a href="./blog_detail.php" id="" class="nav-link">blog Details</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">Pages</a>
                            <ul class="uppercase left-0 bg-white navbar-menu-item">
                                <?php
                                    if(isset($_SESSION["user_id"])){
                                ?>
                                <li class="navbar-item"><a href="./phpEngine/log_out.php" id="" class="nav-link">log out</a></li>
                                <?php
                                    }else{
                                ?>
                                <li class="navbar-item"><a href="./Login.php" id="" class="nav-link">login</a></li>
                                <?php
                                    }
                                ?>
                                <li class="navbar-item"><a href="./tracking.php" id="" class="nav-link">tracking</a></li>
                                <li class="navbar-item"><a href="./register.php" id="" class="nav-link">register</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-item"><a href="./contact_us.php" class="nav-link">Content</a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-shopping-cart"></i></a></li>
                        <li id="search-box-btn" class="nav-item"><a href="#" class="nav-link"><i class="fas fa-search"></i></a></li>
                    </ul>
                </div>
            </div>
            <div id="search-box-container" class="search-box-container">
                <input type="text" id="search-box" class="search-box" placeholder="Search ...">
                <span id="search-close-btn" class="search-close-btn">&times;</span>
            </div>
        </nav>
        <script>
            let getnavbar = document.getElementById("navbar");

            window.addEventListener("scroll",function(){
                let scorllYValue = scrollY;
                // console.log(scorllYValue);
                if(scorllYValue > 30) {
                    // getnavbar.classList.remove("nav-bar");
                    getnavbar.classList.add("navbar-toggler");
                }else {
                    // getnavbar.classList.add("nav-bar");
                    getnavbar.classList.remove("navbar-toggler");
                }
            })
        </script>
        <!-- navbar end -->
        <!-- header banner Start -->
        <section class="w-full row justify-end secodary-banner-section">
            <div class="col-6 uppercase text-white text-start secondary-ban">
                <h1 class="font-bold">Checkout</h1>
                <div class="uppercase mt-3 banner-bager">
                    <a href="./index.php">home</a><span><i class="fas fa-arrow-right"></i></span><a href="./check_out.php">checkout</a>
                </div>
    
            </div>
        </section>
        <!-- header banner End -->
    </header>
    <!-- Header End -->
    <!-- Check out body section Start -->
    <section class="checkout-section">
        <div class="checkout-section-container">
        <?php
            if(!isset($_SESSION["user_id"])){
        ?>
            <div class="my-2 checkout-log-in-container">
                <div class="flex jusctify-start py-2 px-3 check-out-heading">
                    <h1 class="me-2">Returning Customer ?</h1> <a href="#" class="text-emeral-400 underline">Click here to login</a>
                </div>

                        <div class="p-3 check-out-each-body">
                        <p class="text-muted mb-3">
                            If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.
                        </p>
                        <div class="row">
                            <div class="col-lg-7 col-md-12 col sm-12">
                                <form action="./phpEngine/login.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 p-3 form-group">
                                            <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="Email">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 p-3 form-group">
                                            <input type="password" name="password" id="password" class="form-control rounded-0" placeholder="Password">
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-12 p-3 flex justify-start items-center log-in-submit-btn-group">
                                            <button type="submit" class="btn py-1 px-4 me-5">Log In</button>
                                            <div class="form-group">
                                                <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                                <label for="remember" class="text-muted ms-2">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-12 p-3 flex justify-start items-center ">
                                            <a href="#" class="text-muted">Lost Your Password ?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


            </div>
        <?php
            }
        ?>
            <div class="my-2 checkout-log-in-container">
                <div class="flex jusctify-start py-2 px-3 check-out-heading">
                    <h1 class="me-2">Have a coupon? ?</h1> <a href="#" class="text-emeral-400 underline">Click here to enter your code</a>
                </div>
                <div class="p-3 check-out-each-body">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col sm-12">
                            <form action="" class="w-full">
                                <div class="row">
                                    <div class="col-12 p-3 form-group">
                                        <input type="text" name="coupon-code" id="coupon-code" class="form-control rounded-0" placeholder="Enter coupon-code">
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-12 p-3 flex justify-start items-center log-in-submit-btn-group apply-coupon-btn-container">
                                        <button type="submit" class="btn py-2 px-4 me-5 uppercase">Apply Coupon</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>   
            <div class="my-2 checkout-log-in-container billing-container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 pe-2">
                        <div class="billing-heading-container">
                            <h1 class="h5">Biling Details</h1>
                        </div>
                        <hr>
                        <?php
                        if(isset($_SESSION["user_id"])){
                            ?>

                        <form action="" method="GET" class="mt-3 billing-create-form-container">
                           
                            <?php
                                include "./phpEngine/config.php";

                                $userSql = "SELECT * FROM users WHERE id = {$_SESSION['user_id']}";
                                $userResult = mysqli_query( $conn , $userSql );

                                if(mysqli_num_rows($userResult) > 0){
                                    while( $userRow = mysqli_fetch_assoc($userResult)){
                                ?>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 my-2 form-group">
                                    <input type="text" name="firstname" id="firstname" class="form-control rounded-0" placeholder="First Name" value = "<?php echo $userRow['firstname'] ?>">
                                </div>
                                <div class="col-lg-6 col-md-12 my-2  form-group">
                                    <input type="text" name="lastname" id="lastname" class="form-control rounded-0" placeholder="Last Name" value = "<?php echo $userRow['lastname'] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 my-2 form-group">
                                    <input type="text" name="phonenumber" id="phonenumber" class="form-control rounded-0" placeholder="Phone Number"  value = "<?php echo $userRow['phonenumber'] ?>">
                                </div>                                
                                <div class="col-lg-6 col-md-12 my-2  form-group">
                                    <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="Email Address" value = "<?php echo $userRow['email'] ?>">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 my-2  form-group">
                                    <select name="" id="" class="form-select rounded-0">
                                        <option value="" selected disabled>Choose Your Country</option>
                                        <?php 
                                        if( $userRow['country'] = "mya"){
                                        ?>
                                        <option value="my" selected>Myanmar</option>
                                        <?php
                                        }elseif ($userRow['country'] = "sgn") {
                                        ?>
                                        <option value="sgn" selected>Singapore</option>
                                        <?php
                                        }else{
                                            ?>
                                        <option value="thi" selected>Thailand</option>
                                        <?php
                                        }
                                        ?>

                                    </select>
                                </div>                                
                            </div>     
                            <div class="row">
                                <div class="col-lg-12 col-md-12 my-2 form-group">
                                    <input type="text" name="address1" id="address1" class="form-control rounded-0" placeholder="Address 1" value = "<?php echo $userRow['address1'] ?>">
                                </div>
                            </div>     
                            <div class="row">
                                <div class="col-lg-12 col-md-12 my-2  form-group">
                                    <input type="text" name="address2" id="address1" class="form-control rounded-0" placeholder="Address 2"  value = "<?php echo $userRow['address2'] ?>">
                                </div>
                            </div>     
                            <div class="row">
                                <div class="col-lg-12 col-md-12 my-2  form-group">
                                    <input type="text" name="township" id="township" class="form-control rounded-0" placeholder="Town / City"  value = "<?php echo $userRow['city'] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 my-2  form-group">
                                    <select name="" id="" class="form-select rounded-0">
                                        <option value="" selected disabled>District</option>
                                        <?php 
                                        if( $userRow['district'] = "district1"){
                                        ?>
                                        <option value="district1" selected>District 1</option>
                                        <?php
                                        }elseif ($userRow['district'] = "district2") {
                                        ?>
                                        <option value="district2" selected>District 2</option>
                                        <?php
                                        }else{
                                            ?>
                                        <option value="district3" selected>District 3</option>
                                        <?php
                                        }
                                        ?>
                                        
                                        
                                        
                                    </select>
                                </div>                                
                            </div> 
                            <div class="row">
                                <div class="col-lg-12 col-md-12 my-2  form-group">
                                    <input type="text" name="postcode" id="postcode" class="form-control rounded-0" placeholder="Postcode / ZIP" value = "<?php echo $userRow['postcode'] ?>">
                                </div>
                            </div>
                                <?php 
                                    }
                                }

                            ?>
  
                            <?php
                            if(!isset($_SESSION["user_id"])){
                            ?>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 my-2  form-group">
                                    <input type="checkbox" name="createAccount" id="createAccount" class="form-check-input me-2">
                                    <label for="createAccount">Create an Account ?</label>
                                </div>
                            </div> 
                            <?php
                            } 
                            ?>
                        </form>
                        <?php
                        }else {
                        ?>
                        <form action="" method="GET" class="mt-3 billing-create-form-container">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 my-2 form-group">
                                    <input type="text" name="firstname" id="firstname" class="form-control rounded-0" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-12 my-2  form-group">
                                    <input type="text" name="lastname" id="lastname" class="form-control rounded-0" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 my-2 form-group">
                                    <input type="text" name="phonenumber" id="phonenumber" class="form-control rounded-0" placeholder="Phone Number">
                                </div>                                
                                <div class="col-lg-6 col-md-12 my-2  form-group">
                                    <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="Email Address">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 my-2  form-group">
                                    <select name="" id="" class="form-select rounded-0">
                                        <option value="" selected disabled>Choose Your Country</option>
                                        <option value="my" selected>Myanmar</option>
                                        <option value="sgn" selected>Singapore</option>
                                        <option value="thi" selected>Thailand</option>
                                    </select>
                                </div>                                
                            </div>     
                            <div class="row">
                                <div class="col-lg-12 col-md-12 my-2 form-group">
                                    <input type="text" name="address1" id="address1" class="form-control rounded-0" placeholder="Address 1">
                                </div>
                            </div>     
                            <div class="row">
                                <div class="col-lg-12 col-md-12 my-2  form-group">
                                    <input type="text" name="address2" id="address1" class="form-control rounded-0" placeholder="Address 2">
                                </div>
                            </div>     
                            <div class="row">
                                <div class="col-lg-12 col-md-12 my-2  form-group">
                                    <input type="text" name="township" id="township" class="form-control rounded-0" placeholder="Town / City">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 my-2  form-group">
                                    <select name="" id="" class="form-select rounded-0">
                                        <option value="" selected disabled>District</option>
                                        <option value="district3" selected>District 1</option>
                                        <option value="district3" selected>District 2</option>
                                        <option value="district3" selected>District 3</option>
                                    </select>
                                </div>                                
                            </div> 
                            <div class="row">
                                <div class="col-lg-12 col-md-12 my-2  form-group">
                                    <input type="text" name="postcode" id="postcode" class="form-control rounded-0" placeholder="Postcode / ZIP">
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-lg-12 col-md-12 my-2  form-group">
                                    <input type="checkbox" name="createAccount" id="createAccount" class="form-check-input me-2">
                                    <label for="createAccount">Create an Account ?</label>
                                </div>
                            </div> 
                        </form>
                        <?php
                        }
                        ?>

                        <div class="mt-3 billing-heading-container">
                            <h1 class="h5">Shipping Details</h1>
                        </div>
                        <hr>
                        <form action="" class="mt-3 billing-create-form-container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 my-2  form-group">
                                    <input type="checkbox" name="createAccount" id="createAccount" class="form-check-input me-2">
                                    <label for="createAccount">Ship to a different address?</label>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-lg-12 col-md-12 my-2  form-group">
                                    <textarea name="order_note" id="" cols="30" rows="7" class="form-control rounded-0 py-2 px-3" placeholder="Order Notes"></textarea>
                                </div>
                            </div>              
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-12 my-2 px-4 order-container">
                        <div class="mt-3 billing-heading-container">
                            <h1 class="h5">Your Order</h1>
                        </div>
                        <hr>
                        <div class="row">
                            <?php
                            if(isset($_SESSION["user_id"])){
                            ?>
                            <form action="./phpEngine/add_payment.php" class="order-form">
                                <table class="col-12 cursor-pointer">
                                    <tr class="text-light w-full p-2 flex justify-between block">
                                        <td class="text-muted">Product</td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-muted">Total</td>
                                    </tr>
                                    <?php
                                        

                                        $sql = "SELECT * FROM orders WHERE userid = {$_SESSION['user_id']} ORDER BY id DESC";
                                        $result = mysqli_query($conn , $sql);

                                        if(mysqli_num_rows($result) > 0){
                                            while( $row = mysqli_fetch_assoc($result)){
                                    ?>

                                            <tr class="text-light w-full p-2 flex justify-between block">
                                                <td class="text-muted"><?php echo $row["p_name"] ?></td>
                                                <td class="d-none price"><?php echo $row["price"] ?></td>
                                                <td class="text-dark ">x<span class="product-quantity"><?php echo $row["quantity"] ?></span></td>
                                                <td class="text-muted price-total">$0.00</td>
                                            </tr>
                                    <?php
                                            }
                                        }
                                    ?>
                                    <tfoot class="font-semibold">
                                        <tr class="text-light w-full p-2 flex justify-between block">
                                            <td class="text-dark">SUBTOTAL </td>
                                            <td></td>
                                            <td class="text-muted subtitle">$2160.00</td>
                                        </tr>
                                        <tr class="text-light w-full p-2 flex justify-between block">
                                            <td class="text-dark">SHIPPING </td>
                                            <td></td>
                                            <td class="text-muted">Flat Rate: $ <span id="shipping-price">50</span> .00</td>
                                        </tr>
                                        <tr class="text-light w-full p-2 flex justify-between block">
                                            <td class="text-dark">TOTAL </td>
                                            <td></td>
                                            <td class="text-dark cart-total">$2210.00</td>
                                        </tr>
                                    </tfoot>
                                </table>
                        <script>
                            let getPrductPrices =Array.from(document.querySelectorAll(".price")) ;
                            let getQuantitys = Array.from(document.querySelectorAll(".product-quantity")) ;
                            let getTotalPrices = Array.from(document.querySelectorAll(".price-total")) ;
                            let getSubTotal = document.querySelector(".subtitle");
                            let getShippingPrice = +document.querySelector("#shipping-price").innerText;

                            let getCartTotal = document.querySelector(".cart-total");

                            
                            let subTotal = 0 ;
                            for(let i = 0 ; i < getPrductPrices.length ; i++){
                                let getPrice = +getPrductPrices[i].innerText;
                                let getQuantity = +getQuantitys[i].innerText ;
                                let totalPrice = getPrice*getQuantity ;
                                getTotalPrices[i].innerText = totalPrice ;
                                
                                subTotal += totalPrice;
                                                        
                            }
                            getSubTotal.innerText = `$${subTotal}.00`;
                            getCartTotal.innerText =  `$${getShippingPrice+subTotal}.00`;
                        </script>
                                <div class="form-group my-3">
                                    <input type="radio" name="payment" value="cash" id="cash" class="form-check-input">
                                    <label for="cash" class="uppercase">Check payments</label>
                                </div>
                                <p class="p-4 text-muted bg-white">
                                    Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                </p>
                                <div class="form-group my-3">
                                    <input type="radio" name="payment" value="paypal" id="paypal" class="form-check-input">
                                    <label for="paypal" class="uppercase">PAYPAL</label>
                                </div>
                                <p class="p-4 text-muted bg-white">
                                    Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.
                                </p>
                                <div class="form-group my-3 ">
                                    <input type="checkbox" name="accept" id="accept" required>
                                    <span class="">I’ve read and accept the</span><a href="#"> terms & conditions*</a>
                                </div>
                                <div class="grid">
                                    <button type="submit" class="btn uppercase py-2 rounded-0 font-semibold">Process to paypal</button>
                                </div>
                            </form>

                            <?php
                            }else {
                                echo "<h1 class= 'text-center text-xl'> Nothing to show</h1>";
                            }
                            ?>

                        </div>

                    </div>
                </div>
            </div>                
        </div>
    </section>
    <!-- check out body section end -->
    <!-- Week product show section Start -->
    <section class="week-product-show-section">
        <div class="week-product-show-section-container">
            <div class="product-container-title">
                <h1 class="font-semibold">Deals of the Week</h1>
                <p class="text-muted">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, quo tempore dolore aperiam cupiditate molestiae voluptatum exercitationem id amet laboriosam architecto 
                </p>
            </div>
            <div class="row week-product-container">
                <div class="col-lg-9 col-md-12 col-sm-12 row">
                    <div class="col-lg-4 col-md-6 col-sm-12 my-3 row">
                        <div class="col-4 col-md-4 col-sm-4 flex justify-start items-center">
                            <img src="./assets/img/profile-picture/r1.jpg.webp" alt="">
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-8 py-2 grid place-items-start">
                            <p class="uppercase">black lace heels</p>
                            <div>
                                <span class="font-semibold">$189.00</span><span class="line-throught text-muted font-semibold">$210.00</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 my-3 row">
                        <div class="col-4 col-md-4 col-sm-4 flex justify-start items-center">
                            <img src="./assets/img/profile-picture/r2.jpg.webp" alt="">
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-8 py-2 grid place-items-start">
                            <p class="uppercase">black lace heels</p>
                            <div>
                                <span class="font-semibold">$189.00</span><span class="line-throught text-muted font-semibold">$210.00</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 my-3 row">
                        <div class="col-4 col-md-4 col-sm-4 flex justify-start items-center">
                            <img src="./assets/img/profile-picture/r3.jpg.webp" alt="">
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-8 py-2 grid place-items-start">
                            <p class="uppercase">black lace heels</p>
                            <div>
                                <span class="font-semibold">$189.00</span><span class="line-throught text-muted font-semibold">$210.00</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 my-3 row">
                        <div class="col-4 col-md-4 col-sm-4 flex justify-start items-center">
                            <img src="./assets/img/profile-picture/r5.jpg.webp" alt="">
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-8 py-2 grid place-items-start">
                            <p class="uppercase">black lace heels</p>
                            <div>
                                <span class="font-semibold">$189.00</span><span class="line-throught text-muted font-semibold">$210.00</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 my-3 row">
                        <div class="col-4 col-md-4 col-sm-4 flex justify-start items-center">
                            <img src="./assets/img/profile-picture/r6.jpg.webp" alt="">
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-8 py-2 grid place-items-start">
                            <p class="uppercase">black lace heels</p>
                            <div>
                                <span class="font-semibold">$189.00</span><span class="line-throught text-muted font-semibold">$210.00</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 my-3 row">
                        <div class="col-4 col-md-4 col-sm-4 flex justify-start items-center">
                            <img src="./assets/img/profile-picture/r7.jpg.webp" alt="">
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-8 py-2 grid place-items-start">
                            <p class="uppercase">black lace heels</p>
                            <div>
                                <span class="font-semibold">$189.00</span><span class="line-throught text-muted font-semibold">$210.00</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 my-3 row">
                        <div class="col-4 col-md-4 col-sm-4 flex justify-start items-center">
                            <img src="./assets/img/profile-picture/r9.jpg.webp" alt="">
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-8 py-2 grid place-items-start">
                            <p class="uppercase">black lace heels</p>
                            <div>
                                <span class="font-semibold">$189.00</span><span class="line-throught text-muted font-semibold">$210.00</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 my-3 row">
                        <div class="col-4 col-md-4 col-sm-4 flex justify-start items-center">
                            <img src="./assets/img/profile-picture/r10.jpg.webp" alt="">
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-8 py-2 grid place-items-start">
                            <p class="uppercase">black lace heels</p>
                            <div>
                                <span class="font-semibold">$189.00</span><span class="line-throught text-muted font-semibold">$210.00</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 my-3 row">
                        <div class="col-4 col-md-4 col-sm-4 flex justify-start items-center">
                            <img src="./assets/img/profile-picture/r11.jpg.webp" alt="">
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-8 py-2 grid place-items-start">
                            <p class="uppercase">black lace heels</p>
                            <div>
                                <span class="font-semibold">$189.00</span><span class="line-throught text-muted font-semibold">$210.00</span>
                            </div>
                        </div>                        
                    </div>

                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 mt-md-3 grid place-items-center">
                    <img src="./assets/img/background-imgs/c5.jpg.webp" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Week product show section End -->
    <!-- footer start -->
    <footer>
        <div class="row footer-container">
            <div class="col-lg-3 col-md-6 col-sm-12 p-lg-3 p-md-2 p-sm-1">
                <div class="footer-head py-3">
                    <h1 class="font-extrabold text-white">About Us</h1>
                </div>
                <div class="footer-content">
                    <p class="text-muted font-normal">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, aspernatur delectus. Eveniet sequi nulla provident reprehenderit neque laboriosam,
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 p-lg-3 p-md-2 p-sm-1">
                <div class="footer-head py-3">
                    <h1 class="font-extrabold text-white">Newsletter</h1>
                </div>
                <div class="footer-content">
                    <p class="text-muted font-normal">
                        Lorem ipsum dolor sit amet consectetur,
                    </p>
                    <form action="">
                        <div class="form-group flex h-12 my-3">
                            <input type="text" name="contact-email" id="contact-email" class="col-10 inline-block form-control rounded-0 contact-email" placeholder="Enter Eamil">
                            <div class="submit-container">
                                <button type="submit" class="col-2 inlin-block contact-submit-btn"><i class="fas fa-arrow-right"></i></button>
                            </div>

                        </div>
                    </form>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 p-lg-3 p-md-2 p-sm-1">
                <div class="footer-head py-3">
                    <h1 class="font-extrabold text-white">Instragram Feed</h1>
                </div>
                <div class="footer-content">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-12  p-1">
                            <img src="./assets/img/instagram/i1.jpg.webp" alt="" class="w-full h-full">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12  p-1">
                            <img src="./assets/img/instagram/i2.jpg.webp" alt="" class="w-full h-full">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12  p-1">
                            <img src="./assets/img/instagram/i3.jpg.webp" alt="" class="w-full h-full">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12  p-1">
                            <img src="./assets/img/instagram/i4.jpg.webp" alt="" class="w-full h-full">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12  p-1">
                            <img src="./assets/img/instagram/i5.jpg.webp" alt="" class="w-full h-full">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12  p-1">
                            <img src="./assets/img/instagram/i6.jpg.webp" alt="" class="w-full h-full">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12  p-1">
                            <img src="./assets/img/instagram/i7.jpg.webp" alt="" class="w-full h-full">
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12  p-1">
                            <img src="./assets/img/instagram/i8.jpg.webp" alt="" class="w-full h-full">
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 p-lg-3 p-md-2 p-sm-1">
                <div class="footer-head py-3">
                    <h1 class="font-extrabold text-white">Follow Us</h1>
                </div>
                <div class="footer-content">
                    <p class="text-muted font-normal">
                        Lorem ipsum dolor sit
                    </p>
                    <p class="mt-3">
                        <a href="#" class="inline-block me-3 text-muted"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="inline-block me-3 text-muted"><i class="fab fa-twitter"></i></a>
                        

                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <!-- Boostrap 5 -->
    <script src="./assets/libs/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
    <!-- jquery -->
    <script src="./assets/libs/jquery-3.6.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#slide-btn").click(function(){
                $(".navbar-menu-slide").animate({
                    "height": "toggle",
                },500)
            })
            $("#search-box-btn,#search-close-btn").click(function(){
                $("#search-box-container,#search-box").animate({
                    "height": "toggle",
                },500)
            })
        })
    </script>
    
</body>
</html>