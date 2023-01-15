<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
                        <li class="nav-item relative "><a href="./shop_category.php" class="nav-link">Shop</a>
                            <ul class="uppercase absolute left-0 bg-white navbar-menu-item">
                                <li class="navbar-item"><a href="./shop_category.php" id="" class="nav-link">shop category</a></li>
                                <li class="navbar-item"><a href="./product_detail.php" id="" class="nav-link">Product Details</a></li>
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
                        <li class="nav-item active"><a href="./contact_us.php" class="nav-link">Content</a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-shopping-cart"></i></a></li>
                        <li id="search-box-btn" class="nav-item"><a href="#" class="nav-link"><i class="fas fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="col-12 flex justify-content-start">
                    <ul class="uppercase navbar-menu-slide">
                        <li class="nav-item"><a href="./index.php" class="nav-link">Home</a></li>
                        <li class="nav-item "><a href="#" class="nav-link">Shop</a>
                            <ul class="uppercase left-0 bg-white navbar-menu-item">
                                <li class="navbar-item"><a href="./shop_category.php" id="" class="nav-link">shop category</a></li>
                                <li class="navbar-item"><a href="./product_detail.php" id="" class="nav-link">Product Details</a></li>
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
                        <li class="nav-item active"><a href="./contact_us.php" class="nav-link">Content</a></li>
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
        <section class="w-full row justify-end secodary-banner-section">
            <div class="col-6 uppercase text-white text-start secondary-ban">
                <h1 class="font-bold">Contact Us</h1>
                <div class="uppercase mt-3 banner-bager">
                    <a href="./index.php">home</a><span><i class="fas fa-arrow-right"></i></span><a href="./contact_us.php">Contact</a>
                </div>

            </div>
        </section>
    </header>
    <!-- Header End -->
    <!-- content section start -->
    <section class="contact-section">
        <div class="contact-section-container">
            <div class="w-full contact-google-map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48384.58035319284!2d-74.111944!3d40.717218!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c253925a4b77d7%3A0x3d7e2fb73cb527a8!2sFlaming%20Grill%20%26%20Supreme%20Buffet!5e0!3m2!1sen!2sus!4v1673143530521!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact-contents-container my-5">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 p-2">
                        <div class="contact-detail-group">
                            <div class="flex justify-start items-center contact-detail">
                                <div class="contact-icon p-4">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="contact-contact">
                                    <h1 class="font-bold">California, United States</h1>
                                    <p class="font-normal">Santa monica bullevard</p>
                                </div>
                            </div>
                            <div class="flex justify-start items-center contact-detail">
                                <div class="contact-icon p-4">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="contact-contact">
                                    <h1 class="h5 font-bold">California, United States</h1>
                                    <p class="font-normal">Santa monica bullevard</p>
                                </div>
                            </div>
                            <div class="flex justify-start items-center contact-detail">
                                <div class="contact-icon p-4">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="contact-contact">
                                    <h1 class="h5 font-bold">California, United States</h1>
                                    <p class="font-normal">Santa monica bullevard</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12 p-2">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="my-3 form-group">
                                        <input type="text" name="name" id="name" class="rounded-0 border w-full" placeholder="Enter Your Name">
                                    </div>
                                    <div class="my-3 form-group">
                                        <input type="email" name="email" id="email" class="rounded-0 border w-full" placeholder="Enter Your Email">
                                    </div>
                                    <div class="my-3 form-group">
                                        <input type="text" name="subject" id="subject" class="rounded-0 border w-full" placeholder="Enter Your Subject">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="my-3 form-group">
                                        <textarea name="" id="" cols="30" rows="6" class="w-full rounded-0 border" placeholder="Enter Message"></textarea>
                                    </div>
                                    <div class="form-group flex justify-end">
                                        <button type="submit" class="btn uppercase font-semibold rounded-0 relative" >Send message</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content section End -->
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