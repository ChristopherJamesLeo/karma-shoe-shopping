<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
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
                    <li class="nav-item relative"><a href="./shop_category.php" class="nav-link">Shop</a>
                        <ul class="uppercase absolute left-0 bg-white navbar-menu-item">
                            <li class="navbar-item"><a href="./shop_category.php" id="" class="nav-link">shop category</a></li>
                            <li class="navbar-item"><a href="./product_detail.php" id="" class="nav-link">Product Details</a></li>
                            <li class="navbar-item"><a href="./check_out.php" id="" class="nav-link">Product Checkout</a></li>
                            <li class="navbar-item"><a href="./shopping_cart.php" id="" class="nav-link">shopping cart</a></li>
                            <li class="navbar-item"><a href="./confirmation.php" id="" class="nav-link">confimation</a></li>
                        </ul>
                    </li>
                    <li class="nav-item relative active"><a href="./blog.php" class="nav-link">Blog</a>
                        <ul class="uppercase absolute left-0 bg-white navbar-menu-item">
                            <li class="navbar-item "><a href="./blog.php" id="" class="nav-link">blog</a></li>
                            <li class="navbar-item active"><a href="./blog_detail.php" id="" class="nav-link">blog Details</a></li>
                            
                        </ul>
                    </li>
                    <li class="nav-item relative"><a href="#" class="nav-link">Pages</a>
                        <ul class="uppercase absolute left-0 bg-white navbar-menu-item">
                            <li class="navbar-item"><a href="./Login.php" id="" class="nav-link">login</a></li>
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
                    <li class="nav-item"><a href="#" class="nav-link">Shop</a>
                        <ul class="uppercase left-0 bg-white navbar-menu-item">
                            <li class="navbar-item"><a href="./shop_category.php" id="" class="nav-link">shop category</a></li>
                            <li class="navbar-item"><a href="./product_detail.php" id="" class="nav-link">Product Details</a></li>
                            <li class="navbar-item"><a href="./check_out.php" id="" class="nav-link">Product Checkout</a></li>
                            <li class="navbar-item"><a href="./shopping_cart.php" id="" class="nav-link">shopping cart</a></li>
                            <li class="navbar-item"><a href="./confirmation.php" id="" class="nav-link">confimation</a></li>
                        </ul>
                    </li>
                    <li class="nav-item active"><a href="#" class="nav-link">Blog</a>
                        <ul class="uppercase left-0 bg-white navbar-menu-item">
                            <li class="navbar-item "><a href="./blog.php" id="" class="nav-link">blog</a></li>
                            <li class="navbar-item active"><a href="./blog_detail.php" id="" class="nav-link">blog Details</a></li>
                            
                        </ul>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">Pages</a>
                        <ul class="uppercase left-0 bg-white navbar-menu-item">
                            <li class="navbar-item"><a href="./Login.php" id="" class="nav-link">login</a></li>
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
    <section class="w-full row justify-end secodary-banner-section">
        <div class="col-6 uppercase text-white text-start secondary-ban">
            <h1 class="font-bold">Blog detail</h1>
            <div class="uppercase mt-3 banner-bager">
                <a href="./index.php">home</a><span><i class="fas fa-arrow-right"></i></span><a href="./blog.php">Blog detail</a>
            </div>

        </div>
    </section>
</header>
<!-- Header End -->
    <!-- blog-detail-section-body start -->
    <section class="blog-body-section">
        <div class="blog-body-section-container">
            <div class="row">
                <div class="col-lg-8 col-md-12 row blog-left-side-container">
                    <div class="col-12">
                        <div class="blog-left-side-rigth-img-container">
                            <img src="./assets/img/instagram/m-blog-1.jpg.webp" alt="" class="w-full h-full">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 p-2 flex flex-column gap-y-3 justify-start items-center bolg-left-side-left-container">
                        <p class="text-end ">
                            <a href="#" class="text-black">Food ,</a>
                            <a href="#" class="" style="color: var(--global-main-color);">Technology ,</a>
                            <a href="#" class="text-black">Politics ,</a>
                            <a href="#" class="text-black">Lifestyle</a>
                        </p>
                        <div class=" w-full text-end blog-left-side-left-item-group">
                            <span class="inline-block me-2">Mark wiens</span>
                            <i class="far fa-user"></i>
                        </div>
                        <div class=" w-full text-end  blog-left-side-left-item-group">
                            <span class="inline-block me-2">12 Dec, 2018</span>
                            <i class="far fa-calendar"></i>
                        </div>
                        <div class=" w-full text-end  blog-left-side-left-item-group">
                            <span class="inline-block me-2">1.2M Views</span>
                            <i class="far fa-eye"></i>
                        </div>      
                        <div class=" w-full text-end  blog-left-side-left-item-group">
                            <span class="inline-block me-2">06 Comments</span>
                            <i class="far fa-comment"></i>
                        </div>                     
                    </div>
                    <div class="col-lg-8 col-md-12 p-2 blog-left-side-right-container">
                        <a href="#" class="h4 my-3 block font-bold">Astronomy Binoculars A Great Alternative</a>
                        <p class="text-muted my-3">
                            MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.
                        </p>
                        <p class="text-muted my-3">
                            Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed
                        </p>
                        <p class="text-muted my-3">
                            Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed
                        </p>
                        <div class=" my-1 py-2 view-btn">
                            <a href="#" class="btn btn-outline-muted uppercase border rounded-sm">view more</a>
                        </div>
                    </div>     
                    <div class="col-12 p-3 italic shadow-md text-muted">
                        <p>
                            MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training.
                        </p>
                    </div>   
                    <div class="col-12 my-4 row blog-detail-reply">
                        <div class="col-lg-6 col-md-12 p2">
                            <div class="img-container">
                                <img src="./assets/img/instagram/post-img1.jpg.webp" alt="" class="w-full">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 p2">
                            <div class="img-container">
                                <img src="./assets/img/instagram/post-img2.jpg.webp" alt="" class="w-full">
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="text-muted mb-3">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower.
                            </p>
                            <p class="text-muted mb-3">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower.
                            </p>
                        </div>
                        <hr class="my-4">
                        <p>

                        </p>
                        <div class="col-12 reply-form ">
                            <form action="" method="get" enctype="multipart/form-data">
                                <h1 class="h4 text-center">Leave a Reply</h1>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12 my-2">
                                        <input type="text" name="name" id="" class="w-full rounded-0 name" placeholder="Enter Your Name">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12 my-2">
                                        <input type="email" name="email" id="" class="w-full rounded-0 email" placeholder="Enter Your Email">
                                    </div>
                                    <div class="form-group col-12 my-2">
                                        <input type="text" name="subject" id="subject" class=" w-full rounded-0 subject" placeholder="Subject">
                                    </div>
                                    <div class="form-group col-12 my-2">
                                        <textarea name="message" id="message" cols="30" rows="5" class="w-full rounded-0" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group col-12 my-2 py-3 text-center">
                                        <button type="submit" class="py-3 px-4 text-white rounded-full uppercase font-semibold">post comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>    
                    </div>     
                                                            
                </div>
                <div class="col-lg-4 col-md-12 px-3 py-2 blog-right-side-container">
                    <div class=" border blog-right-side">
                        <div class="relative py-4 border-b search-blog-container">
                            <input type="text" name="search-blog" id="search-blog" class="rounded-full w-full search-blog" placeholder="Search Post">
                            <i class="fas fa-search absolute"></i>
                        </div> 
                        <div class="text-center p-3 border-b post-user-profile-container ">
                            <div class="profile-picture-container grid place-items-center">
                                <div class="w-28 h-28 overflow-hidden rounded-full profile-picture">
                                    <img src="./assets/img/profile-picture/author.png.webp" alt="" class="w-full h-full rounded-full">
                                </div>
                            </div>
                            <div class="post-profile-name-detail-container">
                                <h1 class="my-2 h4">Charlie Barber</h1>
                                <p class="my-2">Senior blog writer</p>
                                <p class="my-2">
                                    <span class="inline-block mx-3"><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                                    <span class="inline-block mx-3"><a href="#"><i class="fab fa-twitter"></i></a></span>
                                    <span class="inline-block mx-3"><a href="#"><i class="fab fa-github"></i></a></span>
                                </p>
                                <p class="text-center text-muted my-2">
                                    Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.
                                </p>
                            </div>
                        </div>
                        <div class="p-3 border-b popular-post-container">
                            <div class=" text-center popular-post-heading">
                                <h1>Popular Posts</h1>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 my-2 row">
                                    <div class="col-4 col-md-4 col-sm-4 flex justify-start items-center popular-post">
                                        <img src="./assets/img/instagram/post1.jpg.webp" alt="">
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-8 py-2 grid place-items-start popular-post-detail">
                                        <p class="uppercase">Space The Final Frontier</p>
                                        <div>
                                            <span class="font-semibold">02 Hours ago</span>
                                        </div>
                                    </div>                        
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 my-2 row">
                                    <div class="col-4 col-md-4 col-sm-4 flex justify-start items-center popular-post">
                                        <img src="./assets/img/instagram/post2.jpg.webp" alt="">
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-8 py-2 grid place-items-start popular-post-detail">
                                        <p class="uppercase">The Amazing Hubble</p>
                                        <div>
                                            <span class="font-semibold">02 Hours ago</span>
                                        </div>
                                    </div>                        
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 my-2 row">
                                    <div class="col-4 col-md-4 col-sm-4 flex justify-start items-center popular-post">
                                        <img src="./assets/img/instagram/post3.jpg.webp" alt="">
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-8 py-2 grid place-items-start popular-post-detail">
                                        <p class="uppercase">Astronomy Or Astrology</p>
                                        <div>
                                            <span class="font-semibold">02 Hours ago</span>
                                        </div>
                                    </div>                        
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 my-2 row">
                                    <div class="col-4 col-md-4 col-sm-4 flex justify-start items-center popular-post">
                                        <img src="./assets/img/instagram/post4.jpg.webp" alt="">
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-8 py-2 grid place-items-start popular-post-detail">
                                        <p class="uppercase">Asteroids telescope</p>
                                        <div>
                                            <span class="font-semibold">02 Hours ago</span>
                                        </div>
                                    </div>                        
                                </div>
                            </div>
                        </div>
                        <div class="p-3 border-b popular-post-container">
                            <div class=" text-center popular-post-heading">
                                <h1>Post Catgories</h1>
                            </div>
                            <div class="row">
                                <ul class="col-12 px-3 my-2">
                                    <li class="flex justify-between items-center border-b-2 px-2 border-dotted">
                                        <p>Technology</p>
                                        <p>37</p>
                                    </li>
                                    <li class="flex justify-between items-center border-b-2 px-2 border-dotted">
                                        <p>Lifestyle</p>
                                        <p>24</p>
                                    </li>
                                    <li class="flex justify-between items-center border-b-2 px-2 border-dotted">
                                        <p>Fashion</p>
                                        <p>59</p>
                                    </li>
                                    <li class="flex justify-between items-center border-b-2 px-2 border-dotted">
                                        <p>Art</p>
                                        <p>29</p>
                                    </li>
                                    <li class="flex justify-between items-center border-b-2 border-dotted">
                                        <p>Food</p>
                                        <p>15</p>
                                    </li>
                                    <li class="flex justify-between items-center border-b-2 px-2 border-dotted">
                                        <p>Architecture</p>
                                        <p>09</p>
                                    </li>
                                    <li class="flex justify-between items-center border-b-2 px-2 border-dotted">
                                        <p>Adventure</p>
                                        <p>44</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-3 border-b popular-post-container  tab-cloud-container">
                            <div class=" text-center popular-post-heading tab-cloud-heading">
                                <h1>Tag Clouds</h1>
                            </div>
                            <div class="px-2 tab-cloud-btn-container">
                                <a href="#" class="rounded-0">Technology</a>
                                <a href="#" class="rounded-0">Fashion</a>
                                <a href="#" class="rounded-0">Architecture</a>
                                <a href="#" class="rounded-0">Fashion</a>
                                <a href="#" class="rounded-0">Food</a>
                                <a href="#" class="rounded-0">Technology</a>
                                <a href="#" class="rounded-0">Lifestyle</a>
                                <a href="#" class="rounded-0">Art</a>
                                <a href="#" class="rounded-0">Advanture</a>
                                <a href="#" class="rounded-0">Food</a>
                                <a href="#" class="rounded-0">Art</a>
                                <a href="#" class="rounded-0">Lifestyle</a>
                                <a href="#" class="rounded-0">Advanture</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- blog-detail-section-body end -->
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