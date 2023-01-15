<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
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
                                <li class="navbar-item active"><a href="./product_detail.php" id="" class="nav-link">Product Details</a></li>
                                <li class="navbar-item"><a href="./check_out.php" id="" class="nav-link">Product Checkout</a></li>
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
                        <li class="nav-item"><a href="./shopping_cart.php" class="nav-link"><i class="fas fa-shopping-cart"></i></a></li>
                        <li id="search-box-btn" class="nav-item"><a href="#" class="nav-link"><i class="fas fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="col-12 flex justify-content-start">
                    <ul class="uppercase navbar-menu-slide">
                        <li class="nav-item"><a href="./index.php" class="nav-link">Home</a></li>
                        <li class="nav-item active"><a href="#" class="nav-link">Shop</a>
                            <ul class="uppercase left-0 bg-white navbar-menu-item">
                                <li class="navbar-item"><a href="./shop_category.php" id="" class="nav-link">shop category</a></li>
                                <li class="navbar-item active"><a href="./product_detail.php" id="" class="nav-link">Product Details</a></li>
                                <li class="navbar-item"><a href="./check_out.php" id="" class="nav-link">Product Checkout</a></li>
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
                <h1 class="font-bold">Product Details Page</h1>
                <div class="uppercase mt-3 banner-bager">
                    <a href="./index.php">home</a><span><i class="fas fa-arrow-right"></i></span><a href="./product_detail.html">shop</a><span><i class="fas fa-arrow-right"></i></span><a href="./product_detail.html">product-details</a>
                </div>

            </div>
        </section>
    </header>
    <!-- Header End -->
    <!-- product detail start -->
    <section class="product-detail-section">
        <div class=" row product-detail-section-container">
            <?php
                include "./phpEngine/config.php";
                if (isset($_REQUEST["id"])){
                    $id = $_REQUEST["id"];
                    $showSql = "SELECT * FROM products_list WHERE id = {$id}";
                    $showResult = mysqli_query( $conn , $showSql);

                    if(mysqli_num_rows($showResult) > 0){
                        while ($showRow = mysqli_fetch_assoc($showResult)){
            ?>
            <div class="col-lg-6 col-md-12 p-lg-5 p-md-3 p-sm-1 product-detail-left-container">
                <div class="product-detail-img-container">
                    <img src="./assets/img/product-imgs/<?php echo $showRow["p_img1"] ?>" alt="" class="w-full h-full">
                </div>
            </div>
            <div class="col-lg-6 col-md-9 p-lg-5 p-md-3 p-sm-1 flex justify-start items-center font-semibold product-detail-right-container">
                <div class="product-detail-container">
                    <h1 class="h4"><?php echo $showRow["p_name"] ?></h1>
                    <span class="h3 font-extrabold">$<?php echo $showRow["price"] ?>.99</span>
                    <table class="my-2">
                        <tr>
                            <td>Category </td>
                            <td>: Household</td>
                        </tr>
                        <tr>
                            <td>Availibility </td>
                            <td>: In Stock</td>
                        </tr>
                    </table>
                    <hr class="my-4">
                    <p class="text-muted mb-5">
                        Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter.
                    </p>
                    <form action="./phpEngine/add_cart.php" method="POST" class="product-submit">
                        <input type="hidden" name="id" value="<?php echo $showRow["id"] ?>">
                        <div class="">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="quantity" id="quantity" value="" class="py-1 px-2 w-16 border quantity" required>
                        </div>
                        <div class="form-group mt-3 flex justify-start items-center">
                            <button type="submit" class="btn px-5 py-2 font-semibold addCartBtn">Add to Cart</button>
                            <a href="#" class="btn btn-secondary rounded-full w-10 h-10 mx-2"><i class="far fa-gem"></i></a>
                            <a href="#" class="btn btn-secondary rounded-full w-10 h-10 "><i class="far fa-heart"></i></a>
                        </div>
                        
                    </form>
                    
                </div>
            </div>
            <div class="col-12 border px-5 py-5">
                <div class="w-full flex justify-center items-center gap-x-5 capitalize description-header">
                    <div id="description" class="px-4 py-2 cursor-pointer description-btn active" show-description = "0">description</div>
                    <div id="specification" class="px-4 py-2 cursor-pointer  description-btn" show-description = "1">specification</div>
                    <div id="comments" class="px-4 py-2 cursor-pointer description-btn" show-description = "2">comments</div>
                    <div id="reviews" class="px-4 py-2 cursor-pointer description-btn" show-description = "3">reviews</div>
                </div>
                <div class="col-12 p-lg-3 p-md-1 p-sm-1 description-body">
                    <div class="description-body-details description-container">
                        <p class="text-muted">
                        <?php echo $showRow["p_description"] ?>
                        </p>
                    </div>
                    <div class="description-body-details specification-container">
                        <table class="table table-striped table-hover w-full text-muted ">
                            <tr class="border-b ">
                                <td>Width</td>
                                <td><?php echo $showRow["width"] ?>mm</td>
                            </tr>
                            <tr class="border-b ">
                                <td>Height</td>
                                <td><?php echo $showRow["height"] ?>mm</td>
                            </tr>
                            <tr class="border-b ">
                                <td>Depth</td>
                                <td><?php echo $showRow["depth"] ?>mm</td>
                            </tr>
                            <tr class="border-b ">
                                <td>Weight</td>
                                <td><?php echo $showRow["weight"] ?>gm</td>
                            </tr>
                            <tr class="border-b ">
                                <td>Quality checking</td>
                                <td><?php echo $showRow["qc"] ?></td>
                            </tr>
                            <tr class="border-b ">
                                <td>Freshness Duration</td>
                                <td><?php echo $showRow["freshness_duration"] ?>days</td>
                            </tr>
                            <tr class="border-b ">
                                <td>When packeting</td>
                                <td><?php echo $showRow["packeting"] ?></td>
                            </tr>
                            <tr class="border-b ">
                                <td>Each Box contains</td>
                                <td><?php echo $showRow["boxcontains"] ?>pcs</td>
                            </tr>                            
                        </table>
                    </div>
                    <div class="description-body-details comments-container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 mb-md-3 comments-left-side">
                                <?php
                                    $comsql = "SELECT * FROM comments WHERE p_id = {$showRow['p_id']} ";
                                    $comresult = mysqli_query($conn,$comsql);


                                    if(mysqli_num_rows($comresult) > 0){
                                        while($comRow = mysqli_fetch_assoc($comresult)){
                                ?>
                                <div class=" row p-3 justify-between items-center  comments-profile-container">
                                    <div class="col-6 flex justify-start items-center com-profile">
                                        <div class="w-16 h-16 rounded-full me-3 overflow-hidden con-profile-img-container">
                                            <img src="./assets/img/profile-picture/<?php echo $comRow['userImg'] ?>" class="w-full h-full" alt="">
                                        </div>
                                        <div class="com-profile-name-timer-container">
                                            <h5 class="font-bold capitalize"><?php echo $comRow["name"] ?></h5>
                                            <div class="text-muted font-semibold com-profile-time"><span><?php echo $comRow["JOD"] ?></span></div>
                                        </div>
                                    </div>
                                    <div class="col-6 text-end com-reply-btn-container">
                                        <a href="#" class="btn btn-outline-secondary rounded-full w-24 ">Reply</a>
                                    </div>
                                    <div class="col-12 pt-2 comment-content">
                                        <p class="text-muted">
                                        <?php echo $comRow["message"] ?>
                                        </p>
                                    </div>
                                </div>
                                <?php
                                        }
                                    }

                                ?>                                                            

                            </div>
                            <div class="col-lg-6 col-md-12 mb-md-3 comments-right-side">
                                <div class="row p-3">
                                    <h1 class="py-1 font-semibold h3">Post a comment</h1>
                                    <form action="./phpEngine/add_comments.php" method="post">
                                        <input type="hidden" name="id" value = "<?php echo $showRow["id"] ?>">
                                        <input type="hidden" name="p_id" value = "<?php echo $showRow["p_id"] ?>">
                                        <div class="form-group my-3">
                                            <input type="text" name="fullname" id="" class="form-control rounded-0" placeholder="Your Full Name">
                                            
                                        </div>
                                        <div class="form-group my-3">
                                            <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="Enter Your Email">
                                        </div>
                                        <div class="form-group my-3">
                                            <input type="text" name="phonenumber" id="" class="form-control rounded-0" placeholder="Enter Your Phone Number">
                                        </div>
                                        <div class="form-group my-3">
                                            <textarea name="message" id="" cols="30" rows="10" class="form-control rounded-0 my-3" placeholder="Message"></textarea>
                                        </div>
                                        <div class="form-group text-end">
                                            <button type="submit" id="submit-btn" class="font-semibold uppercase btn rounded-0 px-4 py-2 submit-btn ">Submit Now</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="description-body-details review-container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 mb-md-3 comments-left-side review-left-side">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 my-sm-2 p-2 grid place-items-center">
                                        <div class="text-center flex justify-center items-center flex-column w-full h-full overall">
                                            <h2 class="h3 font-semible">Overall</h2>
                                            <h1 class="h1 font-black">4.0</h1>
                                            <span class="text-muted font-semibold">( <span>03</span> Reviews )</span>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 my-sm-2 p-2">
                                        <div class="h4 pb-1">Based On 3 Reviews</div>
                                        <div>
                                            <a href="#" class="text-muted font-normal h6">5 Star <span><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i></span> 01</a>
                                        </div>
                                        <div>
                                            <a href="#" class="text-muted font-normal h6">4 Star <span><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i></span> 01</a>
                                        </div>
                                        <div>
                                            <a href="#" class="text-muted font-normal h6">3 Star <span><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i></span> 01</a>
                                        </div>
                                        <div>
                                            <a href="#" class="text-muted font-normal h6">2 Star <span><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i></span> 01</a>
                                        </div>
                                        <div>
                                            <a href="#" class="text-muted font-normal h6">1 Star <span><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i></span> 01</a>
                                        </div>

                                    </div>
                                </div>
                                <?php
                                    $revSql = "SELECT * FROM reviews WHERE p_id = {$showRow['p_id']}";
                                    $revResut = mysqli_query($conn,$revSql);
                                    if( mysqli_num_rows($revResut) > 0 ){
                                        while($revRow = mysqli_fetch_assoc($revResut)){
                                ?>
                                <div class=" row p-3 justify-between items-center  comments-profile-container">
                                    <div class="col-6 flex justify-start items-center com-profile">
                                        <div class="w-16 h-16 rounded-full me-3 overflow-hidden con-profile-img-container">
                                            <img src="./assets/img/profile-picture/<?php echo $revRow['userImg'] ?>" class="w-full h-full" alt="">
                                        </div>
                                        <div class="com-profile-name-timer-container">
                                            <h5 class="font-bold capitalize"><?php echo $revRow['name'] ?></h5>
                                            <div class="text-muted font-semibold com-profile-time"><span><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i></span></div>
                                        </div>
                                    </div>
                                    <div class="col-12 pt-2 comment-content">
                                        <p class="text-muted">
                                        <?php echo $revRow['message'] ?>
                                        </p>
                                    </div>
                                </div>
                                <?php
                                        }
                                    }
                                ?>                                                                                     
                            </div>
                            <div class="col-lg-6 col-md-12 mb-md-3 comments-right-side review-right-side">
                                <div class="row p-3">
                                    <h1 class="py-1 font-semibold h3">Add a Review</h1>
                                    <div>
                                        <a href="#" class="text-muted font-normal h6">Your Rating <span class="inline-block mx-2"><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i><i class="fas fa-star text-yellow-400"></i></span>Outstanding</a>
                                    </div>
                                    <form action="./phpEngine/add_review.php"method="get" >
                                        <input type="hidden" name="id" value = "<?php echo $showRow["id"] ?>">
                                        <input type="hidden" name="p_id" value = "<?php echo $showRow["p_id"] ?>">
                                        <div class="form-group my-3">
                                            <input type="text" name="fullname" id="" class="form-control rounded-0" placeholder="Your Full Name">

                                        </div>
                                        <div class="form-group my-3">
                                            <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="Enter Your Email">
                                        </div>
                                        <div class="form-group my-3">
                                            <input type="text" name="phonenumber" id="" class="form-control rounded-0" placeholder="Enter Your Phone Number">
                                        </div>
                                        <div class="form-group my-3">
                                            <textarea name="review" id="" cols="30" rows="10" class="form-control rounded-0 my-3" placeholder="Review"></textarea>
                                        </div>
                                        <div class="form-group text-end">
                                            <button type="submit" id="submit-btn" class="font-semibold uppercase btn rounded-0 px-4 py-2 submit-btn ">Submit Now</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php                
                        }
                    }
                }
            ?>

            <script>
                let getDescriptionBtns = Array.from(document.querySelectorAll(".description-btn")) ;
                let getDescriptionDetails =Array.from(document.querySelectorAll(".description-body-details")) ;

                let showDescIdx = 0 ;

                function showDesc(num){
                    for(let i = 0 ; i < getDescriptionBtns.length ; i++){
                        getDescriptionBtns[i].classList.remove("active");
                        getDescriptionDetails[i].style.display = "none";
                    }
                    getDescriptionBtns[num].classList.add("active");
                    getDescriptionDetails[num].style.display = "block";

                }
                for(let i = 0 ; i < getDescriptionBtns.length ; i++){
                    getDescriptionBtns[i].addEventListener("click",function(e){
                        showDescIdx = this.getAttribute("show-description")
                        showDesc(showDescIdx);
                    })
                }
                showDesc(showDescIdx);
            </script>
        </div>
    </section>
    <!-- product detail end  -->
        <!-- Products Seciton Start -->
        <section class="product-section">
        <!-- search box start -->
        <div class="relative py-4 border-b search-blog-container product-search-box-container">
            <input type="text" name="search-blog" id="search-blog" class="rounded-full w-full search-blog" placeholder="Search Post">
            <i class="fas fa-search absolute"></i>
        </div> 
        <!-- search box end -->
            <div class="relative product-section-container">
                <div class="show-products-container">
                    <div class="row">
                        <?php
                            include "./phpEngine/config.php";
                            $sql = "SELECT * FROM products_list";
                            $result = mysqli_query( $conn , $sql );

                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                        ?>            
                                    <div class="col-lg-3 col-md-6 col-sm-12 p-3 show-products-items-container">
                                    <div class="w-full product-items">
                                        <div class="product-img-container">
                                            <img src="./assets/img/product-imgs/<?php echo $row["p_img1"] ?>" alt="<?php echo $row["p_img1"] ?>">
                                        </div>
                                        <div class="uppercase font-semibold my-2 product-detail">
                                            <p class="leading-tight"><?php echo $row["p_name"] ?></p>
                                        </div>
                                        <div class="price-container my-2">
                                            <span class="font-semibold">$150.00</span> <span class="text-muted font-semibold line-through">$210.00</span>
                                        </div>
                                        <div class="item-tools">
                                            <ul class="flex item-tool-list">
                                                <li class="relative flex item-tool-list-item">
                                                    <a href="./phpEngine/add_cart.php?id=<?php echo $row['id'] ?>&quantity=1" class="nav-link me-2"><i class="fas fa-shopping-cart"></i></a>
                                                    <ul class="grid place-items-center uppercase font-semibold item-tool-show-detail-list">
                                                        <li class="item-show-detail"><span class="inlin-block">Add To Bag</span></li>
                                                    </ul>
                                                </li>
                                                <li class="relative flex item-tool-list-item">
                                                    <a href="#" class="nav-link me-2"><i class="far fa-heart"></i></a>
                                                    <ul class="grid place-items-center uppercase font-semibold item-tool-show-detail-list">
                                                        <li class="item-show-detail"><span class="inlin-block">Wish list</span></li>
                                                    </ul>
                                                </li>
                                                <li class="relative flex item-tool-list-item">
                                                    <a href="#" class="nav-link me-2"><i class="fas fa-sync"></i></a>
                                                    <ul class="grid place-items-center uppercase font-semibold item-tool-show-detail-list">
                                                        <li class="item-show-detail"><span class="inlin-block">Compare</span></li>
                                                    </ul>
                                                </li>   
                                                <li class="relative flex item-tool-list-item">
                                                    <a href="./product_detail.php?id=<?php echo $row['id'] ?>" class="nav-link me-2"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    <ul class="grid place-items-center uppercase font-semibold item-tool-show-detail-list">
                                                        <li class="item-show-detail"><span class="inlin-block">view more</span></li>
                                                    </ul>
        
                                                </li>                                             
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        <?php
                                }
                            }
                        ?>                                                                       
                    </div>
                </div>
            </div> 
            <script>
                let getFilterText = document.getElementById("search-blog");
                let productContainers = document.querySelectorAll(".show-products-items-container");
                let getProductTitles = document.querySelectorAll(".product-detail p");

                getFilterText.addEventListener("keyup",function(){
                    let getText = getFilterText.value.toLowerCase();
                    let getTitle ;
                    for(let i = 0 ; i < getProductTitles.length ; i++){
                        getTitle = getProductTitles[i].innerText.toLowerCase();
                        let getTitleText = getTitle;
                        if(getTitle.indexOf(getText) > -1){
                        
                            productContainers[i].style.display = "block";
                        }else {
                            productContainers[i].style.display = "none";
                        }
                    }
                })
                
            </script>
    </section>
    <!-- Products Section End -->
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