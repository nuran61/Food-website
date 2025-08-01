<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food Website</title>
    <!-- for icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- for swiper slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- for custom css -->
    <link rel="stylesheet" href="{{asset('style/css/homepage.css')}}">

</head>

<body class="body-fixed">
<!-- start of header  -->
<header class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header-logo">
                    <a href="homepage.blade.php">
                        <img src="img/logo.png" width="160" height="36" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="main-navigation">
                    <button class="menu-toggle"><span></span><span></span></button>
                    <nav class="header-menu">
                        <ul class="menu food-nav-menu">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#menu">Menu</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="header-right">
                        <form action="#" class="header-search-form for-des">
                            <input type="search" class="form-input" placeholder="Search Here...">
                            <button type="submit">
                                <i class="uil uil-search"></i>
                            </button>
                        </form>
                        <a href="javascript:void(0)" class="header-btn header-cart">
                            <i class="uil uil-shopping-bag"></i>
                            <span class="cart-number">3</span>
                        </a>
                        <a href="javascript:void(0)" class="header-btn">
                            <i class="uil uil-user-md"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header ends  -->

<div id="viewport">
    <div id="js-scroll-content">
        <section class="main-banner" id="home">
            <div class="js-parallax-scene">
                <div class="banner-shape-1 w-100" data-depth="0.30">
                    <img src="img/berry.png" alt="">
                </div>
                <div class="banner-shape-2 w-100" data-depth="0.25">
                    <img src="img/leaf.png" alt="">
                </div>
            </div>
            <div class="sec-wp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-text">
                                <h1 class="h1-title">
                                    Welcome to our
                                    <span>India</span>
                                    restaurant.
                                </h1>
                                <p>This is Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam eius
                                    vel tempore consectetur nesciunt? Nam eius tenetur recusandae optio aperiam.</p>
                                <div class="banner-btn mt-4">
                                    <a href="#menu" class="sec-btn">Check our Menu</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner-img-wp">
                                <div class="banner-img" style="background-image: url(img/main-b.jpeg);">
                                </div>
                            </div>
                            <div class="banner-img-text mt-4 m-auto">
                                <h5 class="h5-title">Sushi</h5>
                                <p>this is Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="brands-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-title mb-5">
                            <h5 class="h5-title">Trusted by 70+ companies</h5>
                        </div>
                        <div class="brands-row">
                            <div class="brands-box">
                                <img src="img/b1.png" alt="">
                            </div>
                            <div class="brands-box">
                                <img src="img/b2.png" alt="">
                            </div>
                            <div class="brands-box">
                                <img src="img/b3.png" alt="">
                            </div>
                            <div class="brands-box">
                                <img src="img/b4.png" alt="">
                            </div>
                            <div class="brands-box">
                                <img src="img/b5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-sec section" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-title text-center mb-5">
                            <p class="sec-sub-title mb-3">About Us</p>
                            <h2 class="h2-title">Discover our <span>restaurant story</span></h2>
                            <div class="sec-title-shape mb-4">
                                <img src="assets/images/title-shape.svg" alt="">
                            </div>
                            <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe dolore at
                                aspernatur eveniet temporibus placeat voluptatum quaerat accusamus possimus
                                cupiditate, quidem impedit sed libero id perspiciatis esse earum repellat quam.
                                Dolore modi temporibus quae possimus accusantium, cum corrupti sed deserunt iusto at
                                sapiente nihil sint iste similique soluta dolor! Quod.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="about-video">
                            <div class="about-video-img" style="background-image: url('{{ asset('img/about.jpeg') }}');">
                            </div>
                            <div class="play-btn-wp">
                                <a href="assets/img/video.mp4" data-fancybox="video" class="play-btn">
                                    <i class="uil uil-play"></i>

                                </a>
                                <span>Watch The Recipe</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section style="background-image: url(img/menu-bg.png);" class="our-menu section bg-light repeat-img" id="menu">
            <div class="sec-wp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title text-center mb-5">
                                <p class="sec-sub-title mb-3">our menu</p>
                                <h2 class="h2-title">wake up early, <span>eat fresh & healthy</span></h2>
                                <div class="sec-title-shape mb-4">
                                    <img src="img/title-shape.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-tab-wp">
                        <div class="row">
                            <div class="col-lg-12 m-auto">
                                <div class="menu-tab text-center">
                                    <ul class="filters">
                                        <div class="filter-active"></div>
                                        <li class="filter" data-filter=".all, .breakfast, .lunch, .dinner">
                                            <img src="img/menu-1.png" alt="">
                                            All
                                        </li>
                                        <li class="filter" data-filter=".breakfast">
                                            <img src="img/menu-2.png" alt="">
                                            Breakfast
                                        </li>
                                        <li class="filter" data-filter=".lunch">
                                            <img src="img/menu-3.png" alt="">
                                            Lunch
                                        </li>
                                        <li class="filter" data-filter=".dinner">
                                            <img src="img/menu-4.png" alt="">
                                            Dinner
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-list-row">
                        <div class="row g-xxl-5 bydefault_show" id="menu-dish">
                            <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                <div class="dish-box text-center">
                                    <div class="dish-img">
                                        <img src="img/dish/1.png" alt="">
                                    </div>
                                    <div class="dish-rating">
                                        5
                                        <i class="uil uil-star"></i>
                                    </div>
                                    <div class="dish-title">
                                        <h3 class="h3-title">Fresh Chicken Veggies</h3>
                                        <p>120 calories</p>
                                    </div>
                                    <div class="dish-info">
                                        <ul>
                                            <li>
                                                <p>Type</p>
                                                <b>Non Veg</b>
                                            </li>
                                            <li>
                                                <p>Person</p>
                                                <b>2</b>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dish-bottom-row">
                                        <ul>
                                            <li>
                                                <b>$29</b>
                                            </li>
                                            <li>
                                                <button class="dish-add-btn">
                                                    <i class="uil uil-plus"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- 2 -->

                            <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                <div class="dish-box text-center">
                                    <div class="dish-img">
                                        <img src="img/dish/2.png" alt="">
                                    </div>
                                    <div class="dish-rating">
                                        4.3
                                        <i class="uil uil-star"></i>
                                    </div>
                                    <div class="dish-title">
                                        <h3 class="h3-title">Grilled Chicken</h3>
                                        <p>80 calories</p>
                                    </div>
                                    <div class="dish-info">
                                        <ul>
                                            <li>
                                                <p>Type</p>
                                                <b>Non Veg</b>
                                            </li>
                                            <li>
                                                <p>Person</p>
                                                <b>1</b>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dish-bottom-row">
                                        <ul>
                                            <li>
                                                <b>$59</b>
                                            </li>
                                            <li>
                                                <button class="dish-add-btn">
                                                    <i class="uil uil-plus"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- 3 -->

                            <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
                                <div class="dish-box text-center">
                                    <div class="dish-img">
                                        <img src="img/dish/3.png" alt="">
                                    </div>
                                    <div class="dish-rating">
                                        4
                                        <i class="uil uil-star"></i>
                                    </div>
                                    <div class="dish-title">
                                        <h3 class="h3-title">Panner Noodles</h3>
                                        <p>100 calories</p>
                                    </div>
                                    <div class="dish-info">
                                        <ul>
                                            <li>
                                                <p>Type</p>
                                                <b>Veg</b>
                                            </li>
                                            <li>
                                                <p>Person</p>
                                                <b>2</b>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dish-bottom-row">
                                        <ul>
                                            <li>
                                                <b>$49</b>
                                            </li>
                                            <li>
                                                <button class="dish-add-btn">
                                                    <i class="uil uil-plus"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- 4 -->

                            <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
                                <div class="dish-box text-center">
                                    <div class="dish-img">
                                        <img src="img/dish/4.png" alt="">
                                    </div>
                                    <div class="dish-rating">
                                        4.5
                                        <i class="uil uil-star"></i>
                                    </div>
                                    <div class="dish-title">
                                        <h3 class="h3-title">Chicken Noodles</h3>
                                        <p>120 calories</p>
                                    </div>
                                    <div class="dish-info">
                                        <ul>
                                            <li>
                                                <p>Type</p>
                                                <b>Non Veg</b>
                                            </li>
                                            <li>
                                                <p>Person</p>
                                                <b>2</b>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dish-bottom-row">
                                        <ul>
                                            <li>
                                                <b>$35</b>
                                            </li>
                                            <li>
                                                <button class="dish-add-btn">
                                                    <i class="uil uil-plus"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- 5 -->

                            <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">
                                <div class="dish-box text-center">
                                    <div class="dish-img">
                                        <img src="img/dish/5.png" alt="">
                                    </div>
                                    <div class="dish-rating">
                                        5
                                        <i class="uil uil-star"></i>
                                    </div>
                                    <div class="dish-title">
                                        <h3 class="h3-title">Bread Boiled Egg</h3>
                                        <p>120 calories</p>
                                    </div>
                                    <div class="dish-info">
                                        <ul>
                                            <li>
                                                <p>Type</p>
                                                <b>Non Veg</b>
                                            </li>
                                            <li>
                                                <p>Person</p>
                                                <b>2</b>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dish-bottom-row">
                                        <ul>
                                            <li>
                                                <b>$25</b>
                                            </li>
                                            <li>
                                                <button class="dish-add-btn">
                                                    <i class="uil uil-plus"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- 6 -->

                            <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">
                                <div class="dish-box text-center">
                                    <div class="dish-img">
                                        <img src="img/dish/6.png" alt="">
                                    </div>
                                    <div class="dish-rating">
                                        5
                                        <i class="uil uil-star"></i>
                                    </div>
                                    <div class="dish-title">
                                        <h3 class="h3-title">Immunity Dish</h3>
                                        <p>120 calories</p>
                                    </div>
                                    <div class="dish-info">
                                        <ul>
                                            <li>
                                                <p>Type</p>
                                                <b>Veg</b>
                                            </li>
                                            <li>
                                                <p>Person</p>
                                                <b>2</b>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dish-bottom-row">
                                        <ul>
                                            <li>
                                                <b>$50</b>
                                            </li>
                                            <li>
                                                <button class="dish-add-btn">
                                                    <i class="uil uil-plus"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section clas="two-col-sec section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="sec-img mt-5">
                            <img src="img/pizza.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="sec-text">
                            <h2 class="xxl-title">Chicken Pepperoni</h2>
                            <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolores
                                eligendi earum eveniet soluta officiis asperiores repellat, eum praesentium nihil
                                totam. Non ipsa expedita repellat atque mollitia praesentium assumenda quo
                                distinctio excepturi nobis tenetur, cum ab vitae fugiat hic aspernatur? Quos
                                laboriosam, repudiandae exercitationem atque a excepturi vel. Voluptas, ipsa.</p>
                            <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit. At fugit laborum
                                voluptas magnam sed ad illum? Minus officiis quod deserunt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="two-col-sec section pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-1 order-2">
                        <div class="sec-text">
                            <h2 class="xxl-title">Chicken Pepperoni</h2>
                            <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolores
                                eligendi earum eveniet soluta officiis asperiores repellat, eum praesentium nihil
                                totam. Non ipsa expedita repellat atque mollitia praesentium assumenda quo
                                distinctio excepturi nobis tenetur, cum ab vitae fugiat hic aspernatur? Quos
                                laboriosam, repudiandae exercitationem atque a excepturi vel. Voluptas, ipsa.</p>
                            <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit. At fugit laborum
                                voluptas magnam sed ad illum? Minus officiis quod deserunt.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-1">
                        <div class="sec-img">
                            <img src="img/sushi.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="book-table section bg-light">
            <div class="book-table-shape">
                <img src="img/table-leaves-shape.png" alt="">
            </div>

            <div class="book-table-shape book-table-shape2">
                <img src="img/table-leaves-shape.png" alt="">
            </div>


            <div class="sec-wp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title text-center mb-5">
                                <p class="sec-sub-title mb-3">Book Table</p>
                                <h2 class="h2-title">Opening Table</h2>
                                <div class="sec-title-shape mb-4">
                                    <img src="img/title-shape.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="book-table-info">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div clas="table-title text-center">
                                    <h3>Monday to Thursday</h3>
                                    <p>9:00 am - 22:00 pm</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="call-now text-center">
                                    <i class="uil uil-phone"></i>
                                    <a href="tel:+1 (202) 245-5400">+1 (202) 245-5400</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="table-title text-center">
                                    <h3>Friday to Sunday</h3>
                                    <p>11:00 am - 20:00 pm</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" id="gallery">
                        <div class="col-lg-10 m-auto">
                            <div class="book-table-img-slider" id="icon">
                                <div class="swiper-wrapper">
                                    <a href="img/bt1.jpg" data-fancybox="table-slider"
                                       class="book-table-img back-img swiper-slide"
                                       style="background-image: url(/img/bt1.jpeg)"></a>
                                    <a href="img/bt2.jpeg" data-fancybox="table-slider"
                                       class="book-table-img back-img swiper-slide"
                                       style="background-image: url(img/bt2.jpeg)"></a>
                                    <a href="img/bt3.jpeg" data-fancybox="table-slider"
                                       class="book-table-img back-img swiper-slide"
                                       style="background-image: url(img/bt3.jpeg)"></a>
                                    <a href="img/bt4.jpeg" data-fancybox="table-slider"
                                       class="book-table-img back-img swiper-slide"
                                       style="background-image: url(img/bt4.jpeg)"></a>
                                    <a href="img/bt1.jpeg" data-fancybox="table-slider"
                                       class="book-table-img back-img swiper-slide"
                                       style="background-image: url(img/bt1.jpeg)"></a>
                                    <a href="img/bt2.jpeg" data-fancybox="table-slider"
                                       class="book-table-img back-img swiper-slide"
                                       style="background-image: url(img/bt2.jpeg)"></a>
                                    <a href="img/bt3.jpeg" data-fancybox="table-slider"
                                       class="book-table-img back-img swiper-slide"
                                       style="background-image: url(img/bt3.jpeg)"></a>
                                    <a href="img/bt4.jpeg" data-fancybox="table-slider"
                                       class="book-table-img back-img swiper-slide"
                                       style="background-image: url(img/bt4.jpeg)"></a>
                                </div>

                                <div class="swiper-button-wp">
                                    <div class="swiper-button-prev swiper-button">
                                        <i class="uil uil-angle-left"></i>
                                    </div>
                                    <div class="swiper-button-next swiper-botton">
                                        <i class="uil uil-angle-right"></i>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>



    </div>
</div>







<!-- jquery -->
<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<!--bootstrop-->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>

<!--fontawsome-->
<script src="{{ asset('js/font-awesome.min.js') }}"></script>

<!--swiper slider-->
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>

<!--mixitup--filter-->
<script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>

<!--fancy box-->
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>

<!--parallax-->
<script src="{{ asset('js/parallax.min.js') }}"></script>

 <!--gsap--->
<script src="{{ asset('js/gsap.min.js') }}"></script>

<!--scroll trigger-->
<script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>

<!--scroll to plug in-->
<script src="{{ asset('js/ScrollToPlugin.min.js') }}"></script>

<!--rellax-->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"></script> -->

<!--smooth scroll-->
<script src="{{ asset('js/smooth-scroll.js') }}"></script>

<!--custom js-->
<script src="{{ asset('js/homepage.js') }}"></script>


</body>
</html>
