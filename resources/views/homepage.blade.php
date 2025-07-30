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
<!-- start of header -->
<header class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class=" header-logo">
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
                               <i class="uil uil-search"></i>"

                            </button>
                        </form>
                        <a href="javascript:void(0)" class="header-btn header-cart">
                            <i class="uil uil-shopping-bag"></i>
                            <span class="cart-number">3</span>
                        </a>
                        <a href="javascript:void(0)" class="header-btn">
                            <i class="uil uil-user"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header ends -->

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
                                    welcome to our
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
                                <div class="banner-img" style="background-image: url('img/main-b.jpeg')">
                                </div>
                            </div>
                            <div class="banner-img-text mt-4 m-auto">
                                <h5 class="h5-title">Noodle</h5>
                                <p>This is Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"></script>

<!--smooth scroll-->
<script src="{{ asset('js/smooth-scroll.js') }}"></script>

<!--custom js-->
<script src="{{ asset('js/homepage.js') }}"></script>


</body>
</html>
