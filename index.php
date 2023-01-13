<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KARMA SHOE SHOPPING SITE</title>
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
    <header class="w-full h-screen header">
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
                        <li class="nav-item active"><a href="./index.php" class="nav-link">Home</a></li>
                        <li class="nav-item relative"><a href="./shop_category.php" class="nav-link">Shop</a>
                            <ul class="uppercase absolute left-0 bg-white navbar-menu-item">
                                <li class="navbar-item"><a href="./shop_category.php" id="" class="nav-link">shop category</a></li>
                                <li class="navbar-item"><a href="./product_detail.php" id="" class="nav-link">Product Details</a></li>
                                <li class="navbar-item"><a href="./check_out.php" id="" class="nav-link">Product Checkout</a></li>
                                <li class="navbar-item"><a href="./shopping_cart.php" id="" class="nav-link">shopping cart</a></li>
                                <li class="navbar-item"><a href="./confirmation.php" id="" class="nav-link">confimation</a></li>
                            </ul>
                        </li>
                        <li class="nav-item relative"><a href="./blog.php" class="nav-link">Blog</a>
                            <ul class="uppercase absolute left-0 bg-white navbar-menu-item">
                                <li class="navbar-item"><a href="./blog.php" id="" class="nav-link">blog</a></li>
                                <li class="navbar-item"><a href="./blog_detail.php" id="" class="nav-link">blog Details</a></li>
                                
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
                        <li class="nav-item active"><a href="./index.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Shop</a>
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
        <!-- header banner Start -->
        <section class="header-banner-section">
            <div class="relative banner-carousel-container">
                <div class="banner-carousel-indicator">
                    <div class="dot" show-data = "0"></div>
                    <div class="dot" show-data = "1"></div>
                    <div class="dot" show-data = "2"></div>
                    <div class="dot" show-data = "3"></div>
                </div>
                <div class="banner-carousel-content-container">
                    <div class="banner-carousel-content">
                        <div class="row">
                            <div class="col-lg-5 col-md-12 banner-content">
                                <div class="font-bold banner-carousel-content-title">
                                    <h1 class="">Nike New Collection !</h1>
                                </div>
                                <div class="my-4 banner-carousel-content-para">
                                    <p class="text-muted">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel inventore labore unde deserunt est. Eos, voluptas nisi reprehenderit fugit temporibus enim iusto ex. Repellat non atque facere, similique hic ab.
                                    </p>
                                </div>
                                <div class="banner-carousel-button">
                                    <a href="#" class="carousel-button">+</a><span class="uppercase">Add To bag</span>
                                </div>

                            </div>
                            <div class="col-lg-7 banner-content-img-container">
                                <img src="./assets/img/banner-imgs/banner-img.png.webp" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="banner-carousel-content">
                        <div class="row">
                            <div class="col-lg-5 col-md-12 banner-content">
                                <div class="font-bold banner-carousel-content-title">
                                    <h1 class="">All Star Collection !</h1>
                                </div>
                                <div class="my-4 banner-carousel-content-para">
                                    <p class="text-muted">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel inventore labore unde deserunt est. Eos, voluptas nisi reprehenderit fugit temporibus enim iusto ex. Repellat non atque facere, similique hic ab.
                                    </p>
                                </div>
                                <div class="banner-carousel-button">
                                    <a href="#" class="carousel-button">+</a><span class="uppercase">Add To bag</span>
                                </div>

                            </div>
                            <div class="col-lg-7 banner-content-img-container">
                                <img src="./assets/img/banner-imgs/e-p1.png.webp" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="banner-carousel-content">
                        <div class="row">
                            <div class="col-lg-5 col-md-12 banner-content">
                                <div class="font-bold banner-carousel-content-title">
                                    <h1 class="">Nike New Collection !</h1>
                                </div>
                                <div class="my-4 banner-carousel-content-para">
                                    <p class="text-muted">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel inventore labore unde deserunt est. Eos, voluptas nisi reprehenderit fugit temporibus enim iusto ex. Repellat non atque facere, similique hic ab.
                                    </p>
                                </div>
                                <div class="banner-carousel-button">
                                    <a href="#" class="carousel-button">+</a><span class="uppercase">Add To bag</span>
                                </div>

                            </div>
                            <div class="col-lg-7 banner-content-img-container">
                                <img src="./assets/img/banner-imgs/banner-img.png.webp" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="banner-carousel-content">
                        <div class="row">
                            <div class="col-lg-5 col-md-12 banner-content">
                                <div class="font-bold banner-carousel-content-title">
                                    <h1 class="">All Star Collection !</h1>
                                </div>
                                <div class="my-4 banner-carousel-content-para">
                                    <p class="text-muted">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel inventore labore unde deserunt est. Eos, voluptas nisi reprehenderit fugit temporibus enim iusto ex. Repellat non atque facere, similique hic ab.
                                    </p>
                                </div>
                                <div class="banner-carousel-button">
                                    <a href="#" class="carousel-button">+</a><span class="uppercase">Add To bag</span>
                                </div>

                            </div>
                            <div class="col-lg-7 banner-content-img-container">
                                <img src="./assets/img/banner-imgs/e-p1.png.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <button id="carousel-prev-btn" class="carousel-prev-btn"><</button>
                <button id="carousel-next-btn" class="carousel-next-btn">></button>
            </div>
        </section>
        <script>
            let getBannerCarouselContents = Array.from(document.querySelectorAll(".banner-carousel-content"));
            let getBannerCarouselPrevBtn = document.getElementById("carousel-prev-btn");
            let getBannerCarouselNextBtn = document.getElementById("carousel-next-btn");
            let getBannerCarouselIndicators =Array.from(document.querySelectorAll(".dot")) ;

            let showCarouselContent = 0;

            function showBannerCarousel(num){
                for(let i = 0 ; i < getBannerCarouselContents.length ; i++){
                    getBannerCarouselContents[i].classList.remove("carousel-show");
                    getBannerCarouselIndicators[i].classList.remove("active");
                }
                getBannerCarouselContents[num].classList.add("carousel-show");
                getBannerCarouselIndicators[num].classList.add("active");
            }
            showBannerCarousel(showCarouselContent);

            getBannerCarouselPrevBtn.addEventListener("click",function(){
                showCarouselContent--;
                if(showCarouselContent < 0){
                    showCarouselContent =  getBannerCarouselContents.length-1;
                }

                showBannerCarousel(showCarouselContent);
            })
            getBannerCarouselNextBtn.addEventListener("click",function(){
                showCarouselContent++; 
                if(showCarouselContent >= getBannerCarouselContents.length){
                    showCarouselContent = 0
                }else {
                    
                }
                showBannerCarousel(showCarouselContent);
            })
            for(let i = 0 ; i < getBannerCarouselIndicators.length ; i ++){
                getBannerCarouselIndicators[i].addEventListener("click",function(){
                    // console.log(this.getAttribute("show-data"))
                    showBannerCarousel(showCarouselContent = this.getAttribute("show-data"))
                })
            }
        </script>
        <!-- header banner End -->
    </header>
    <!-- Header End -->
    <!-- services section start -->
    <section class="services-section">
        <div class="shadow-lg service-section-container">
            <div class="row p-5">
                <div class="col-lg-3 col-md-6 col-sm-12 my-3 grid place-items-center services-container border-x">
                    <div class="row">
                        <div class="col-12 flex flex-col justiy-center items-center">
                            <i class="fas fa-truck"></i>
                            <span>Free Delivery</span>
                            <span>Free Shipping On all order</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 my-3 grid place-items-center services-container border-x">
                    <div class="row">
                        <div class="col-12 flex flex-col justiy-center items-center">
                            <i class="fas fa-sync"></i>
                            <span>Return Policy</span>
                            <span>Free Shipping On all order</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 my-3 grid place-items-center services-container border-x">
                    <div class="row">
                        <div class="col-12 flex flex-col justiy-center items-center">
                            <i class="fas fa-headphones"></i>
                            <span>24/7 Support</span>
                            <span>Free Shipping On all order</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 my-3 grid place-items-center services-container border-x">
                    <div class="row">
                        <div class="col-12 flex flex-col justiy-center items-center">
                            <i class="fas fa-coins"></i>
                            <span>Secure Payment</span>
                            <span>Free Shipping On all order</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services section End -->
    <!-- Gallery Section Start -->
    <section class="gallery-section">
        <div class="gallery-container">
            <div class="gallery-content">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-lg-8 col-sm-12  gallery-img-container "  show-gallary="1">
                                <img src="./assets/img/background-imgs/c1.jpg.webp" alt="1">
                            </div>
                            <div class="col-lg-4 col-sm-12 gallery-img-container"  show-gallary="2" >
                                <img src="./assets/img/background-imgs/c2.jpg.webp" alt="2">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-4 col-sm-12 gallery-img-container" show-gallary="3">
                                <img src="./assets/img/background-imgs/c3.jpg.webp" alt="3">
                            </div>
                            <div class="col-lg-8 col-sm-12 gallery-img-container"  show-gallary="4" >
                                <img src="./assets/img/background-imgs/c4.jpg.webp" alt="4">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 gallery-img-container" show-gallary="5">
                        <img src="./assets/img/background-imgs/c5.jpg.webp" alt="5">
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Modal Start -->
        <div id="gallery-modal" class="gallery-modal">
            <div class="modal-content-container">
                <div class="relative modal-content">
                    <span id="close-gallery-modal-btn">&times;</span>
                    <div class="show-content active">
                        <img src="./assets/img/background-imgs/c1.jpg.webp" alt="c1">
                    </div>
                    <div class="show-content">
                        <img src="./assets/img/background-imgs/c2.jpg.webp" alt="c2">
                    </div>
                    <div class="show-content">
                        <img src="./assets/img/background-imgs/c3.jpg.webp" alt="c3">
                    </div>
                    <div class="show-content ">
                        <img src="./assets/img/background-imgs/c4.jpg.webp" alt="c4">
                    </div>
                    <div class="show-content ">
                        <img src="./assets/img/background-imgs/c5.jpg.webp" alt="c5">
                    </div>
                    <div class="absolute left-0 top-full modal-indicator-container">
                        <div class="relative modal-indicator">
                            <div class="show-indicator">
                                <div class="show-indicator-img active" onclick="showModalGallary(0)">
                                    <img src="./assets/img/background-imgs/c1.jpg.webp" alt="1">
                                </div>
                                <div class="show-indicator-img" onclick="showModalGallary(1)">
                                    <img src="./assets/img/background-imgs/c2.jpg.webp" alt="2">
                                </div>
                                <div class="show-indicator-img" onclick="showModalGallary(2)">
                                    <img src="./assets/img/background-imgs/c3.jpg.webp" alt="3">
                                </div>
                                <div class="show-indicator-img" onclick="showModalGallary(3)">
                                    <img src="./assets/img/background-imgs/c4.jpg.webp" alt="4">
                                </div>
                                <div class="show-indicator-img" onclick="showModalGallary(4)">
                                    <img src="./assets/img/background-imgs/c5.jpg.webp" alt="5">
                                </div>
                            </div>
                        </div>

                    </div>
                    <button type="button" id="prev-btn" class="prev-btn"><</button>
                    <button type="button" id="next-btn" class="next-btn">></button>
                </div>

            </div>
        </div>
        <!-- Gallery Modal End -->
        <script>
            let getGalleryImgs = document.getElementsByClassName("gallery-img-container");

            let getModal = document.getElementById("gallery-modal");

            let getShowContent = document.getElementsByClassName("show-content");

            let getModalShowIndicator = document.getElementsByClassName("show-indicator-img");

            let getModalPrevBtn = document.getElementById("prev-btn");

            let getModalNextBtn = document.getElementById("next-btn");

            let getGalleryModalCloseBtn = document.getElementById("close-gallery-modal-btn");

            let showGallaryIdx = 2 ;

            for(let i = 0 ; i < getGalleryImgs.length ; i++){
                getGalleryImgs[i].addEventListener("click",function(e){
                    getModal.classList.add("show-modal");
                    let getIdx = this.getAttribute("show-gallary")-1;
                    console.log(getIdx);
                    showModalGallary(getIdx);
                })


            }

            function showModalGallary(num){
                for(let i = 0 ; i < getShowContent.length ; i++){
                    getShowContent[i].classList.remove("active");
                    getModalShowIndicator[i].classList.remove("active");
                }
                getShowContent[num].classList.add("active");
                getModalShowIndicator[num].classList.add("active");
            }
            showModalGallary(showGallaryIdx);

            getGalleryModalCloseBtn.addEventListener("click",function(){
                getModal.classList.remove("show-modal");
            })
            
            getModalPrevBtn.addEventListener("click",function(){
                showGallaryIdx--;
                if(showGallaryIdx < 0 ){
                    showGallaryIdx = getShowContent.length-1;
                }
                showModalGallary(showGallaryIdx);
                
            })
            getModalNextBtn.addEventListener("click",function(){
                showGallaryIdx++;
                if(showGallaryIdx >= getShowContent.length){
                    showGallaryIdx = 0 ;
                }
                showModalGallary(showGallaryIdx);
            })

            window.onclick = function(e){
                if(e.target.classList.contains("modal-content-container")){
                    getModal.classList.remove("show-modal");
                }
            }

        </script>
    </section>
    <!-- Gallery Section End -->
    <!-- Products Seciton Start -->
    <section class="product-section">
        <div class="relative product-section-container">
            <div class="absolute left-0 py-3 w-full slide-product-btn-container">
                <button type="button" id="product-prev-btn" class="product-prev-btn"> <i class="fas fa-arrow-left"></i></button>
                <button type="button" id="product-next-btn" class="product-next-btn"> <i class="fas fa-arrow-right"></i></button>
            </div>
            <div class="product-container">
                <div class="product-container-title">
                    <h1 >Latest Products</h1>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, quo tempore dolore aperiam cupiditate molestiae voluptatum exercitationem id amet laboriosam architecto 
                    </p>
                </div>
                <div class="show-products-container">
                    <div class="row">
                        <?php
                            include "./phpEngine/config.php";
                            $sql = "SELECT * FROM products_list";
                            $result = mysqli_query( $conn , $sql );
                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)){ 
                        ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 p-3 show-products-items-container">
                            <div class="w-full product-items">
                                <div class="product-img-container">
                                    <img src="./assets/img/product-imgs/<?php echo $row["p_img1"]  ?>" alt="">
                                </div>
                                <div class="uppercase font-semibold my-2 product-detail">
                                    <p class="leading-tight"><?php echo $row["p_name"]  ?></p>
                                </div>
                                <div class="price-container my-2">
                                    <span class="font-semibold">$<?php echo $row["price"] ?>.00</span> <span class="text-muted font-semibold line-through">$210.00</span>
                                </div>
                                <div class="item-tools">
                                    <ul class="flex item-tool-list">
                                        <li class="relative flex item-tool-list-item">
                                            <a href="#" class="nav-link me-2"><i class="fas fa-shopping-cart"></i></a>
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
            <div class="product-container">
                <div class="product-container-title">
                    <h1 >Coming Products</h1>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, quo tempore dolore aperiam cupiditate molestiae voluptatum exercitationem id amet laboriosam architecto 
                    </p>
                </div>
                <div class="show-products-container">
                    <div class="row">
                        <?php
                    
                        $latSql = "SELECT * FROM products_list ORDER BY id DESC";

                       
                        
                        $latResult = mysqli_query( $conn , $latSql );
                        
                        if(mysqli_num_rows($latResult) > 0) {
                            while($latRow = mysqli_fetch_assoc($latResult)){
                        ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 p-3 show-products-items-container">
                            <div class="w-full product-items">
                                <div class="product-img-container">
                                    <img src="./assets/img/product-imgs/<?php echo $latRow["p_img1"]  ?>" alt="">
                                </div>
                                <div class="uppercase font-semibold my-2 product-detail">
                                    <p class="leading-tight"><?php echo $latRow["p_name"] ?></p>
                                </div>
                                <div class="price-container my-2">
                                    <span class="font-semibold">$<?php $latRow["price"] ?>.00</span> <span class="text-muted font-semibold line-through">$210.00</span>
                                </div>
                                <div class="item-tools">
                                    <ul class="flex item-tool-list">
                                        <li class="relative flex item-tool-list-item">
                                            <a href="#" class="nav-link me-2"><i class="fas fa-shopping-cart"></i></a>
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
                                            <a href="./product_detail.php?id=<?php echo $latRow['id'] ?>" class="nav-link me-2"><i class="fas fa-expand-arrows-alt"></i></a>
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
                let getShowProductContainers = document.querySelectorAll(".product-container");

                let productPrevBtn = document.querySelector("#product-prev-btn");

                let productNextBtn = document.querySelector("#product-next-btn");

                let showProductIdx = 0 ;

                function showProductFun(num){
                    getShowProductContainers.forEach(function(getShowProductContainer){
                        getShowProductContainer.classList.remove("product-container-show") ;
                    })
                    getShowProductContainers[num].classList.add("product-container-show") ;
                }
                showProductFun(showProductIdx);

                productPrevBtn.addEventListener("click",function(){
                    showProductIdx--;
                    if(showProductIdx < 0){
                        showProductIdx = getShowProductContainers.length-1;
                    }
                    showProductFun(showProductIdx)
                })
                productNextBtn.addEventListener("click",function(){
                    showProductIdx++;
                    if(showProductIdx == getShowProductContainers.length){
                        showProductIdx = 0;
                    }
                    showProductFun(showProductIdx)
                })

            </script>
        </div> 
    </section>
    <!-- Products Section End -->
    <!-- Product Timer Section Start -->
    <section class="product-timer-section">
        <div class="product-timer-section-container">
            <div class="row">
                <div class="col-lg-6 col-md-12 h-screen grid place-items-center product-timer-container">
                    <div class="product-timer">
                        <div class="text-light text-center product-timer-header">
                            <h1 class="font-semibold">Exclusive Hot Deal Ends Soon!</h1>
                            <p>Who are in extremely love with eco friendly system.</p>
                        </div>
                        <div class=" my-4 product-timer-main-container my-4">
                            <span class="timer">
                                <span id="day" class="time">29</span>
                                <span>Days</span>
                            </span>
                            <span class="timer">
                                <span id="hour" class="time">22</span>
                                <span>Hours</span>
                            </span>
                            <span class="timer">
                                <span id="minute" class="time">06</span>
                                <span>Mins</span>
                            </span>
                            <span class="timer">
                                <span id="second" class="time">00</span>
                                <span>Secs</span>
                            </span>

                        </div>
                        <div class="shop-now-btn-container">
                            <a href="#" class="uppercase">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-lg-0 mt-md-5 mt-sm-3 h-screen grid place-items-center">
                    <div class="relative shop-carousel-container">
                        <div class="shop-carousel-content-container">
                            <?php
                                $carSql = "SELECT * FROM products_list";
                                $carResult = mysqli_query( $conn , $carSql );

                                if(mysqli_num_rows($carResult) > 0){
                                    while( $carRow = mysqli_fetch_assoc($carResult)){
                            ?>
                            <div class="text-center shop-carousel-content active">
                                <div class="shop-carousel-content-img">
                                    <img src="./assets/img/product-imgs/<?php echo $carRow["p_img1"] ?>" alt="">
                                </div>
                                <div class="px-5 my-4 text-center shop-cart-price ">
                                    <span class=" inlin-block me-4 font-semibold">$<?php echo $carRow["price"] ?>.00</span><span class="font-semibold text-muted line-through">$210.00</span>
                                </div>
                                <div class="px-5 my-4 text-center shop-cart-description">
                                    <h1 class="uppercase font-semibold"><?php echo $carRow["p_name"] ?></h1>
                                </div>
                                <div class=" text-center shop-add-bag-container">
                                    <a href="./product_detail.php?id=<?php echo $carRow['id'] ?>"><i class="fas fa-shopping-cart"></i></a><span class="uppercase">Add To Bag</span>
                                </div>
                            </div>
                            <?php 
                                    }
                                }
                            ?>

                        </div>
                        <button type="button" id="sold-prev-btn" class="sold-prev-btn"> <i class="fas fa-arrow-left"></i></button>
                        <button type="button" id="sold-next-btn" class="sold-next-btn"> <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <script>

            let days = 30 ,
                hours = 24 ,
                minutes = 60 ,
                seconds = 60 ;

            // let getday = new Date().getMonth()
            // console.log(getday)

                let showtime = setInterval(showTimer,1000)
                function showTimer(){
                    seconds--;
                    if(seconds == 0) {
                        seconds = 60 ;
                        minutes--;
                        if(minutes == 0){
                            minutes = 60 ;
                            hours--;
                            if(hours == 0) {
                                hours = 24;
                                days--;
                                if(days == 0 ){
                                    clearInterval(showtime)
                                    document.querySelector(".product-timer-main-container").innerHTML =" ";
                                    document.querySelector(".product-timer-main-container").innerHTML = `<h1 class= "w-full h-full text-center font-bold">Time Up</h1>`;
                                }
                            }
                        }
                        
                    }
                    document.getElementById("day").innerText = days;
                    document.getElementById("hour").innerText = hours;
                    document.getElementById("minute").innerText = minutes;
                    document.getElementById("second").innerText = seconds;
                }

            let getshopcarouselcontents = document.querySelectorAll(".shop-carousel-content");
            let getSoldPrevBtn = document.querySelector("#sold-prev-btn");
            let getSoldNextBtn = document.querySelector("#sold-next-btn");

            let getSoldShowIdx = 0;


            function showShopCarousel(num){
                getshopcarouselcontents.forEach(function(getshopcarouselcontent){
                    getshopcarouselcontent.classList.remove("active");
                })
                getshopcarouselcontents[num].classList.add("active");
            }
            showShopCarousel(getSoldShowIdx);

            getSoldPrevBtn.addEventListener("click",function(){
                getSoldShowIdx--;
                if(getSoldShowIdx < 0){
                    getSoldShowIdx = getshopcarouselcontents.length-1;
                }
                showShopCarousel(getSoldShowIdx);
            })
            getSoldNextBtn.addEventListener("click",function(){
                getSoldShowIdx++;
                if(getSoldShowIdx > getshopcarouselcontents.length-1){
                    getSoldShowIdx = 0;
                }
                showShopCarousel(getSoldShowIdx);
            })
        </script>
    </section>
    <!-- Product Timer Section Enc -->
    <!-- show company logo section Start -->
    <section class="grid place-items-center logo-section">
        <div class="flex justify-center items-center flex-wrap gap-4 w-full  logo-section-container">
            <div class="p-4 company-logo-container">
                <img src="./assets/img/logos/1.png.webp" class="w-full h-full" alt="">
            </div>
            <div class="p-4 company-logo-container">
                <img src="./assets/img/logos/2.png.webp" class="w-full h-full" alt="">
            </div>
            <div class="p-4 company-logo-container">
                <img src="./assets/img/logos/3.png.webp" class="w-full h-full" alt="">
            </div>
            <div class="p-4 company-logo-container">
                <img src="./assets/img/logos/4.png.webp" class="w-full h-full" alt="">
            </div>

            <div class="p-4 company-logo-container">
                <img src="./assets/img/logos/5.png.webp" class="w-full h-full" alt="">
            </div>
        </div>
    </section>
    <!-- show company logo section End -->
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