<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
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
    <header class="w-screen header secondary-header">
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
                                <li class="navbar-item"><a href="./check_out.php" id="" class="nav-link">Product Checkout</a></li>
                                <li class="navbar-item active"><a href="./shopping_cart.php" id="" class="nav-link">shopping cart</a></li>
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
                        <li class="nav-item"><a href="./shopping_cart.php" class="nav-link"><i class="fas fa-shopping-cart"></i></a></li>
                        <li id="search-box-btn" class="nav-item"><a href="#" class="nav-link"><i class="fas fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="col-12 flex justify-content-start">
                    <ul class="uppercase navbar-menu-slide">
                        <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                        <li class="nav-item active"><a href="./index.php" class="nav-link">Shop</a>
                            <ul class="uppercase left-0 bg-white navbar-menu-item">
                                <li class="navbar-item"><a href="./shop_category.php" id="" class="nav-link">shop category</a></li>
                                <li class="navbar-item"><a href="./product_detail.php" id="" class="nav-link">Product Details</a></li>
                                <li class="navbar-item"><a href="./check_out.php" id="" class="nav-link">Product Checkout</a></li>
                                <li class="navbar-item active"><a href="./shopping_cart.php" id="" class="nav-link">shopping cart</a></li>
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
                                <li class="navbar-item"><a href="./phpEngine/log_out.php" class="nav-link">Log Out</a></li>
                            <?php
                                }else {
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
                        <li class="nav-item"><a href="./shopping_cart.php" class="nav-link"><i class="fas fa-shopping-cart"></i></a></li>
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
        <section class="w-full row justify-end secodary-banner-section">
            <div class="col-6 uppercase text-white text-start secondary-ban">
                <h1 class="font-bold">Shopping Cart</h1>
                <div class="uppercase mt-3 banner-bager">
                    <a href="./index.php">home</a><span><i class="fas fa-arrow-right"></i></span><a href="./shopping_cart.php">Cart</a>
                </div>

            </div>
        </section>
    </header>
    <!-- Header End -->
    <?php
    if(isset($_SESSION["user_id"])){
    ?>
    <!-- shopping cart body -start -->
    <section class="shopping_cart_section">
        <div class="shopping_cart-container">
            <div class="row">
                <table class="table table-striped">
                    <thead>
                        <tr class="font-semibold text-center">
                            <th class="">Product</th>
                            <th></th>
                            <th>Price</th>
                            <th class=" w-40">Quantity</th>
                            <th class="text-center w-72">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            include "./phpEngine/config.php";
                            $sql = "SELECT * FROM carts WHERE user_id = {$_SESSION['user_id']} ORDER BY id DESC";
                            $result = mysqli_query( $conn , $sql );

                            if(mysqli_num_rows($result) > 0){
                                while( $row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr class="text-black">
                            <td class="">
                                <div class="flex justify-start items-center">
                                    <div class="w-40 h-36 p-2 me-3 cart-img-product-title-container">
                                        <div class="w-full h-full cart-img-container">
                                            <img src="./assets/img/product-imgs/<?php echo $row["p_img1"]?>" class="img-thumbnail w-full h-full" alt="">
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="font-semibold">
                                <div class="w-full h-36 flex justify-start items-center">
                                    <span class="block text-muted font-semibold"><?php echo $row["p_name"]?></span>
                                </div>
                            </td>
                            <td class="font-semibold">
                                <div class="w-full h-36 flex justify-center items-center">
                                    <span  class="block text-muted font-semibold"> $<span class="product-price"><?php echo $row["price"]?></span>.00</span>
                                </div>
                            </td>
                            <td>
                                <div class="w-full h-36 flex justify-center items-center">
                                    <input type="number" name="quantity" id="quantity" value="<?php echo $row["quantity"]?>" class="w-16 h-16 p-3 outline-none border quantity">
                                </div>
                            </td>
                            <td class="font-semibold text-end">
                                <div class="w-full h-36 flex justify-center items-center">
                                    <span>$<span class="total-price">0</span> .00</span>
                                </div>
                            </td>
                        </tr>  

                        <?php
                                }
                            }
                        ?>
  
                    
                    </tbody>
                    <tfoot>

                        <tr>
                            <td class="text-end">
                                <a href="./product_detail.php" class="btn text-black uppercase font-semibold update-cart-btn">update cart</a>
                            </td>
                            <td></td>

                            <?php
                                if(mysqli_num_rows($result) > 0){
                            ?>
                            <td class="p-0 m-0 ">
                                <input type="text" name="coupon-code" id="coupon-code" class=" border w-full cupon-code-input" placeholder="Coupon Code">
                            </td>
                            <td class="p-0 m-0 ">
                                <a href="./phpEngine/create_order_table.php" id="applycartbtn" class="text-white btn uppercase font-semibold rounded-0 coupon-apply-btn w-full" >apply</a>
                            </td>
                            <td class="p-0 m-0 text-end">
                                <a href="#" class="text-black btn uppercase font-semibold rounded-0 coupon-close-btn w-full">close coupon</a>
                            </td>
                            <?php
                                }
                            ?>

 
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="font-semibold text-black ">Subtatal</td>
                            <td class="text-center font-semibold">
                                <span id="cart-subtotal">$2160.00</span>
                            </td>
                        </tr>
                        <script>
                            let getPrductPrices =Array.from(document.querySelectorAll(".product-price")) ;
                            let getQuantitys = Array.from(document.querySelectorAll(".quantity")) ;
                            let getTotalPrices = Array.from(document.querySelectorAll(".total-price")) ;
                            let getSubTotal = document.querySelector("#cart-subtotal");
                            
                            let subTotal = 0 ;
                            for(let i = 0 ; i < getPrductPrices.length ; i++){
                                let getPrice = +getPrductPrices[i].innerText;
                                let getQuantity = getQuantitys[i].value ;
                                let totalPrice = getPrice*getQuantity ;
                                getTotalPrices[i].innerText = totalPrice ;
                                
                                subTotal += totalPrice;
                                                        
                            }
                            getSubTotal.innerText = `$${subTotal}.00`;
                        </script>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <!-- <td></td> -->
                            <td class="text-center font-normal" colspan="2">
                                <form action="./phpEngine/edit_order_table.php" method="GET" class="w-full">
                                    <div class="row justify-between w-full">
                                        <div class="col-4 flex justify-start items-start">
                                            <span id="total-price">	Shipping</span>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group justify-end my-2">
                                                <label for="" class="text-muted">Flat Rate: $5.00</label>
                                                <input type="radio" name="ship-type" value="rate_5" id="ship-type" class="ms-3">
                                            </div>
                                            <div class="input-group justify-end my-2">
                                                <label for="" class="text-muted">Free Shipping</label>
                                                <input type="radio" name="ship-type" value="free-shipping" id="ship-type" class="ms-3">
                                            </div>
                                            <div class="input-group justify-end my-2">
                                                <label for="" class="text-muted">Flat Rate: $10.00</label>
                                                <input type="radio" name="ship-type" value="rate_10" id="ship-type" class="ms-3">
                                            </div>
                                            <div class="input-group justify-end my-2">
                                                <label for="" class="text-muted">Local Delivery: $2.00</label>
                                                <input type="radio" name="ship-type" value="local-2" id="ship-type" class="ms-3">
                                            </div>
                                            <div class="input-group justify-end my-2">
                                                <label for="" class="text-black">Calculate Shipping </label>
                                            </div>
                                        </div>
                                        <div class="col-12 cart-select-box my-3">
                                            <div class="form-group">
                                                <select name="country" id="" class="form-select" required>
                                                    <option value="bgl" selected >Bangalash</option>
                                                    <option value="myn">Myanmar</option>
                                                    <option value="sgn">Singapore</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 cart-select-box my-3">
                                            <div class="form-group">
                                                <select name="state" id="" class="form-select" required>
                                                    <option value="st1" selected >Select a state</option>
                                                    <option value="st1">State 1</option>
                                                    <option value="st2">State 2</option>
                                                    <option value="st3">State 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 cart-select-box my-3" required>
                                            <div class="form-group">
                                                <input type="text" name="postalcode" id="postalcode" class="form-control rounded-0 cart-postal-box" placeholder="Postal Code">
                                            </div>
                                        </div>    
                                        <div class="col-12 update-btn my-3">
                                            <div class="form-group row justify-end">
                                                <button type="submit" class="col-6 me-2 btn py-2 px4 text-black  font-semibold uppercase">Update details</button>
                                            </div>
                                        </div>                                                                      
                                    </div>
                                </form>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <div class="row justify-end cart-submit-btn-group">
                    <div class="btn-group col-6 ">
                        <a href="./index.php" class="btn py-2 px-5 rounded-0 font-semibold uppercase ">Continue shopping</a>
                        <a href="./check_out.php" class="btn py-2 px-5 rounded-0 font-semibold uppercase ">PROCEED TO CHECKOUT</a>
                    </div>
                </div>


            </div>
        </div>
    </section>
        <!-- shopping cart body -end -->
    <?php
    } else {
        echo "<div class='text-center font-bold text-6xl h-96 text-orange-500 grid place-items-center'>Nothing To Show</div>";
    }
    ?>

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