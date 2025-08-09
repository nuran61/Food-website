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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />


</head>

<body class="body-fixed">
<!-- start of header  -->
<header class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header-logo">
                    <a href="index.html">
                        <img src="img/logo.png" width="160" height="36" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="main-navigation">
                    <button class="menu-toggle"><span></span><span></span></button>
                    <nav class="header-menu">
                        <ul class="menu food-nav-menu">
                            <li><a href="#home">Anasayfa</a></li>
                            <li><a href="#about">Hakkımızda</a></li>
                            <li><a href="#menu">Menü</a></li>
                            <li><a href="#gallery">Galeri</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#contact">İletişim</a></li>
                        </ul>
                    </nav>



                        <a href="javascript:void(0)" class="header-btn header-cart" id="cart-button">
                            <i class="uil uil-shopping-bag"></i>
                            <span class="cart-number">3</span>
                        </a>

                        <div class="shopping-cart">
                            <div class="cart-items-scroll">
                                <div class="box">
                                    <i class="fa fa-trash"></i>
                                    <img src="img/dish/1.png">
                                    <div class="content content_width">
                                        <h3>Sebzeli Tavuk</h3>

                                        <div class="quantity-price">
                                            <div class="quantity-controls">
                                                <button class="decrement">-</button>
                                                <span class="quantity">1</span>
                                                <button class="increment">+</button>
                                            </div>
                                            <span class="price">Rs. 499</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="box">
                                    <i class="fa fa-trash"></i>
                                    <img src="img/dish/2.png">
                                    <div class="content content_width">
                                        <h3>Izgara Tavuk</h3>

                                        <div class="quantity-price">
                                            <div class="quantity-controls">
                                                <button class="decrement">-</button>
                                                <span class="quantity">1</span>
                                                <button class="increment">+</button>
                                            </div>
                                            <span class="price">Rs. 359</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="box">
                                    <i class="fa fa-trash"></i>
                                    <img src="img/dish/3.png">
                                    <div class="content content_width">
                                        <h3>Panner Peynirli Makarna</h3>

                                        <div class="quantity-price">
                                            <div class="quantity-controls">
                                                <button class="decrement">-</button>
                                                <span class="quantity">1</span>
                                                <button class="increment">+</button>
                                            </div>
                                            <span class="price">Rs. 149</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box">
                                    <i class="fa fa-trash"></i>
                                    <img src="img/dish/4.png">
                                    <div class="content content_width">
                                        <h3>Tavuklu Noodle</h3>

                                        <div class="quantity-price">
                                            <div class="quantity-controls">
                                                <button class="decrement">-</button>
                                                <span class="quantity">1</span>
                                                <button class="increment">+</button>
                                            </div>
                                            <span class="price">Rs. 379</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="total"> Total : Rs. 1497 </div>
                            <a href="#" class="btn">Checkout</a>

                        </div>


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
                                    <span>İtalyan</span>
                                    Restoranımıza Hoş Geldiniz.
                                </h1>
                                <p>“Ciao! Mutfağımızda Napoli’nin sıcacık pizzaları, Roma’nın taze makarnaları ve Toskana’nın eşsiz tatları sizi bekliyor.
                                    Her lokmada İtalya’yı hissedin, sofranıza Akdeniz’in sıcaklığını taşıyın.
                                    Mangia bene, vivi felice!”</p>
                                <div class="banner-btn mt-4">
                                    <a href="#menu" class="sec-btn">Menü</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner-img-wp">
                                <div class="banner-img">
                                </div>
                            </div>
                            <div class="banner-img-text mt-4 m-auto">
                                <h5 class="h5-title">Geleneksel Tarifler, Modern Sunum</h5>
                                <p>"Geleneksel İtalyan lezzetlerinin büyüsüne kapılın"</p>
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
                            <h5 class="h5-title">70'ten fazla kurumsal firma bizimle çalışmayı tercih ediyor</h5>
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
                            <p class="sec-sub-title mb-3">Hakkımızda</p>
                            <h2 class="h2-title">Restoranımızın hikayesini<span>keşfedin</span></h2>
                            <div class="sec-title-shape mb-4">
                                <img src="img/title-shape.svg" alt="">
                            </div>
                            <p>
                                "Deneyimli şef kadromuz ve profesyonel hizmet anlayışımızla, hem bireysel
                                misafirlerimize hem de kurumsal müşterilerimize İtalyan mutfağının en seçkin
                                lezzetlerini sunuyoruz. Kalite, lezzet ve mükemmel hizmet triomuzla sektörde
                                fark yaratıyoruz."</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="about-video">
                            <div class="about-video-img">
                            </div>
                            <div class="play-btn-wp">
                                <a href="img/video.mp4" data-fancybox="video"  data-fancybox="video"
                                   data-small-btn="true"
                                   data-toolbar="false" class="play-btn">
                                    <i class="uil uil-play"></i>

                                </a>
                                <span>Tarifi İzle</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-menu section bg-light repeat-img" id="menu">
            <div class="sec-wp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title text-center mb-5">
                                <p class="sec-sub-title mb-3">Menü</p>
                                <h2 class="h2-title">Erken kalk, <span>taze & sağlıklı beslen</span></h2>
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
                                        <h3 class="h3-title">Sebzeli Tavuk</h3>
                                        <p>120 calories</p>
                                    </div>
                                    <div class="dish-info">
                                        <ul>
                                            <li>
                                                <p>Type</p>
                                                <b>Non Veg</b>
                                            </li>
                                            <li>
                                                <p>Persons</p>
                                                <b>2</b>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dish-bottom-row">
                                        <ul>
                                            <li>
                                                <b>Rs. 499</b>
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
                                        <h3 class="h3-title">Izgara Tavuk</h3>
                                        <p>80 calories</p>
                                    </div>
                                    <div class="dish-info">
                                        <ul>
                                            <li>
                                                <p>Type</p>
                                                <b>Non Veg</b>
                                            </li>
                                            <li>
                                                <p>Persons</p>
                                                <b>1</b>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dish-bottom-row">
                                        <ul>
                                            <li>
                                                <b>Rs. 359</b>
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
                                        <h3 class="h3-title">Panner Peynirli Makarna</h3>
                                        <p>100 calories</p>
                                    </div>
                                    <div class="dish-info">
                                        <ul>
                                            <li>
                                                <p>Type</p>
                                                <b>Veg</b>
                                            </li>
                                            <li>
                                                <p>Persons</p>
                                                <b>2</b>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dish-bottom-row">
                                        <ul>
                                            <li>
                                                <b>Rs. 149</b>
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
                                        <h3 class="h3-title">Tavuklu Noodle</h3>
                                        <p>120 calories</p>
                                    </div>
                                    <div class="dish-info">
                                        <ul>
                                            <li>
                                                <p>Type</p>
                                                <b>Non Veg</b>
                                            </li>
                                            <li>
                                                <p>Persons</p>
                                                <b>2</b>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dish-bottom-row">
                                        <ul>
                                            <li>
                                                <b>Rs. 379</b>
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
                                        <h3 class="h3-title">Ekmekli Haşlanmış Yumurta</h3>
                                        <p>120 calories</p>
                                    </div>
                                    <div class="dish-info">
                                        <ul>
                                            <li>
                                                <p>Type</p>
                                                <b>Veg</b>
                                            </li>
                                            <li>
                                                <p>Persons</p>
                                                <b>2</b>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dish-bottom-row">
                                        <ul>
                                            <li>
                                                <b>Rs. 99</b>
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
                                        <h3 class="h3-title">İmmünite Tabağı</h3>
                                        <p>120 calories</p>
                                    </div>
                                    <div class="dish-info">
                                        <ul>
                                            <li>
                                                <p>Type</p>
                                                <b>Non Veg</b>
                                            </li>
                                            <li>
                                                <p>Persons</p>
                                                <b>2</b>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dish-bottom-row">
                                        <ul>
                                            <li>
                                                <b>Rs. 159</b>
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

                            <! -- 7 -->
                            <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">
                                <div class="dish-box text-center">
                                    <div class="dish-img">
                                        <img src="img/dish/7.png" alt="">
                                    </div>
                                    <div class="dish-rating">
                                        5
                                        <i class="uil uil-star"></i>
                                    </div>
                                    <div class="dish-title">
                                        <h3 class="h3-title">Sucucklu Pizza</h3>
                                        <p>120 calories</p>
                                    </div>
                                    <div class="dish-info">
                                        <ul>
                                            <li>
                                                <p>Type</p>
                                                <b>Non veg</b>
                                            </li>
                                            <li>
                                                <p>Persons</p>
                                                <b>2</b>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dish-bottom-row">
                                        <ul>
                                            <li>
                                                <b>Rs. 99</b>
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

                            <!-- 8 -->
                            <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">
                                <div class="dish-box text-center">
                                    <div class="dish-img">
                                        <img src="img/dish/8.png" alt="">
                                    </div>
                                    <div class="dish-rating">
                                        5
                                        <i class="uil uil-star"></i>
                                    </div>
                                    <div class="dish-title">
                                        <h3 class="h3-title">Veg pizza</h3>
                                        <p>120 calories</p>
                                    </div>
                                    <div class="dish-info">
                                        <ul>
                                            <li>
                                                <p>Type</p>
                                                <b>veg</b>
                                            </li>
                                            <li>
                                                <p>Persons</p>
                                                <b>2</b>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dish-bottom-row">
                                        <ul>
                                            <li>
                                                <b>Rs. 99</b>
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

                            <!-- 9 -->
                            <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
                                <div class="dish-box text-center">
                                    <div class="dish-img">
                                        <img src="img/dish/9.png" alt="">
                                    </div>
                                    <div class="dish-rating">
                                        4
                                        <i class="uil uil-star"></i>
                                    </div>
                                    <div class="dish-title">
                                        <h3 class="h3-title">Makarna</h3>
                                        <p>100 calories</p>
                                    </div>
                                    <div class="dish-info">
                                        <ul>
                                            <li>
                                                <p>Type</p>
                                                <b>Veg</b>
                                            </li>
                                            <li>
                                                <p>Persons</p>
                                                <b>2</b>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dish-bottom-row">
                                        <ul>
                                            <li>
                                                <b>Rs. 149</b>
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

        <section class="two-col-sec section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="sec-img mt-5">
                            <img src="img/pizza.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="sec-text">
                            <h2 class="xxl-title">Pizza</h2>
                            <p>El yapımı hamurumuz 24 saat dinlendirildikten sonra, İtalya'dan getirttiğimiz
                                San Marzano domatesleri ve taze mozzarella ile buluşuyor. Odun ateşinde pişirilen
                                pizzalarımız, geleneksel Napoli usulünün sırrını çağdaş lezzet anlayışımızla harmanlıyor.
                                Her dilimde İtalya'nın otantik tadını yaşarken, özenle seçilmiş taze malzemelerimizin
                                zenginliğini keşfedeceksiniz. Ailemizin nesillerce koruduğu tariflerle hazırlanan bu pizza,
                                hem nostaljik hem de yenilikçi dokunuşlarıyla masanızda İtalyan aile sıcaklığını hissettiriyor.</p>

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
                            <h2 class="xxl-title">Makarna</h2>
                            <p>İtalyan mutfağının kalbi olan makarnalarımız, geleneksel el yapımı teknikleri ve çağdaş
                                lezzet anlayışının mükemmel buluşmasıyla masanızda. Durum buğdayının en kaliteli çeşitlerinden
                                üretilen taze makarnalarımız, her gün şef mutfağımızda özenle hazırlanıyor ve sadece taze malzemelerle buluşuyor.
                                İtalya'nın farklı bölgelerinden gelen otantik tariflerin sırrını, ailelerin nesillerce
                                koruduğu geleneksel yöntemlerle yeniden hayata geçiriyoruz. Taze domates sosundan kremalı
                                alfredo'ya, bazilikli pesto'dan zengin carbonara'ya kadar her sos, makarnalarımızla perfect
                                uyumu yakalamak için özel olarak hazırlanıyor.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-1">
                        <div class="sec-img">
                            <img src="img/pasta.png" alt="">
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
                                <p class="sec-sub-title mb-3">Rezervasyon</p>
                                <h2 class="h2-title">Hizmet Saatleri</h2>
                                <div class="sec-title-shape mb-4">
                                    <img src="img/title-shape.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="book-table-info">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="table-title text-center">
                                    <h3>Pazartesi - Perşembe</h3>
                                    <p>9:00 - 22:00</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="call-now text-center">
                                    <i class="uil uil-phone"></i>
                                    <a href="tel:+91-8866998866">+91 - 8866998866</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="table-title text-center">
                                    <h3>Cuma - Pazar</h3>
                                    <p>11:00 - 20:00</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" id="gallery">
                        <div class="col-lg-10 m-auto">
                            <div class="book-table-img-slider" id="icon">
                                <div class="swiper-wrapper">
                                    <a href="img/bt1.jpg" id="bt1" data-fancybox="table-slider"
                                       class="book-table-img back-img swiper-slide"></a>
                                    <a href="img/bt2.jpg" id="bt2" data-fancybox="table-slider"
                                       class="book-table-img back-img swiper-slide"></a>
                                    <a href="img/bt3.jpg" id="bt3" data-fancybox="table-slider"
                                       class="book-table-img back-img swiper-slide"></a>
                                    <a href="img/bt4.jpg" id="bt4" data-fancybox="table-slider"
                                       class="book-table-img back-img swiper-slide"></a>
                                    <a href="img/bt1.jpg" id="bt1" data-fancybox="table-slider"
                                       class="book-table-img back-img swiper-slide"></a>
                                    <a href="img/bt2.jpg" id="bt2" data-fancybox="table-slider"
                                       class="book-table-img back-img swiper-slide"></a>
                                    <a href="img/bt3.jpg" id="bt3"data-fancybox="table-slider"
                                       class="book-table-img back-img swiper-slide"></a>
                                    <a href="img/bt4.jpg" id="bt4" data-fancybox="table-slider"
                                       class="book-table-img back-img swiper-slide"></a>
                                </div>

                                <div class="swiper-button-wp">
                                    <div class="swiper-button-prev swiper-button">
                                        <i class="uil uil-angle-left"></i>
                                    </div>
                                    <div class="swiper-button-next swiper-button">
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

        <section class="our-team section">
            <div class="sec-wp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title text-center mb-5">
                                <p class="sec-sub-title mb-3">Ekibimiz</p>
                                <h2 class="h2-title">Şeflerimizle Tanışın</h2>
                                <div class="sec-title-shape mb-4">
                                    <img src="img/title-shape.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row team-slider">
                        <div class="swiper-wrapper">
                            <div class="col-lg-4 swiper-slide">
                                <div class="team-box text-center">
                                    <div id="chef1"
                                         class="team-img back-img">

                                    </div>
                                    <h3 class="h3-title">Lorenzo Rossi</h3>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="uil uil-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="uil uil-youtube"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 swiper-slide">
                                <div class="team-box text-center" >
                                    <div id="chef2"
                                         class="team-img back-img">

                                    </div>
                                    <h3 class="h3-title">Davide Marino</h3>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="uil uil-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="uil uil-youtube"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 swiper-slide">
                                <div class="team-box text-center" >
                                    <div id="chef3"
                                         class="team-img back-img">

                                    </div>
                                    <h3 class="h3-title">Luca Esposito</h3>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="uil uil-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="uil uil-youtube"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 swiper-slide">
                                <div class="team-box text-center" >
                                    <div id="chef4"
                                         class="team-img back-img">

                                    </div>
                                    <h3 class="h3-title">Matteo Romano</h3>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="uil uil-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="uil uil-youtube"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 swiper-slide">
                                <div class="team-box text-center" >
                                    <div id="chef5"
                                         class="team-img back-img">

                                    </div>
                                    <h3 class="h3-title">Alessandro Ferrari</h3>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="uil uil-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="uil uil-youtube"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-wp">
                            <div class="swiper-button-prev swiper-button">
                                <i class="uil uil-angle-left"></i>
                            </div>
                            <div class="swiper-button-next swiper-button">
                                <i class="uil uil-angle-right"></i>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials section bg-light">
            <div class="sec-wp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title text-center mb-5">
                                <p class="sec-sub-title mb-3">Yorumlar</p>
                                <h2 class="h2-title">Müşterilerimiz <span>Bizim İçin Neler Söylüyor</span></h2>
                                <div class="sec-title-shape mb-4">
                                    <img src="img/title-shape.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="testimonials-img">
                                <img src="img/testimonial-img.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="testimonials-box">
                                        <div class="testimonial-box-top">
                                            <div class="testimonials-box-img back-img" id="tes1">
                                            </div>
                                            <div class="star-rating-wp">
                                                <div class="star-rating">
                                                    <span class="star-rating__fill" style="width:85%"></span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="testimonials-box-text">
                                            <h3 class="h3-title">
                                                Hamza Baran
                                            </h3>
                                            <p>Gerçekten harika bir İtalyan restoranı! Carbonara makarnası İtalya'da yediğim kadar lezzetliydi. Personel çok ilgili, ambiyans mükemmel. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="testimonials-box">
                                        <div class="testimonial-box-top">
                                            <div class="testimonials-box-img back-img" id="tes2">
                                            </div>
                                            <div class="star-rating-wp">
                                                <div class="star-rating">
                                                    <span class="star-rating__fill" style="width:80%"></span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="testimonials-box-text">
                                            <h3 class="h3-title">
                                                Emre Demir
                                            </h3>
                                            <p>İş toplantısı için gitmiştik, hem yemekler hem hizmet mükemmeldi. Sunum çok özenli, tatlar otantik. Özellikle risotto favorim oldu.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="testimonials-box">
                                        <div class="testimonial-box-top">
                                            <div class="testimonials-box-img back-img" id="tes3">
                                            </div>
                                            <div class="star-rating-wp">
                                                <div class="star-rating">
                                                    <span class="star-rating__fill" style="width:89%"></span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="testimonials-box-text">
                                            <h3 class="h3-title">
                                                Ahmet Yılmaz
                                            </h3>
                                            <p>Romantik bir akşam yemeği için gitmiştik eşimle. Mum ışığında harika bir atmosfer. Garsonlar çok profesyonel ve güleryüzlü.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="testimonials-box">
                                        <div class="testimonial-box-top">
                                            <div class="testimonials-box-img back-img" id="tes4">
                                            </div>
                                            <div class="star-rating-wp">
                                                <div class="star-rating">
                                                    <span class="star-rating__fill" style="width:100%"></span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="testimonials-box-text">
                                            <h3 class="h3-title">
                                                Furkan Ergenç
                                            </h3>
                                            <p>Pizza hamuru gerçekten el yapımı olduğu belli oluyor. Malzemeler taze ve kaliteli. Özellikle tiramisu'yu denemenizi öneririm - muhteşem! Fiyatları da oldukça makul.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq-sec section-repeat-img" id="faq">
            <div class="sec-wp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title text-center mb-5">
                                <p class="sec-sub-title mb-3">Sık Sorulanlar</p>
                                <h2 class="h2-title">Sık Sorulan<span>Sorular</span></h2>
                                <div class="sec-title-shape mb-4">
                                    <img src="img/title-shape.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="faq-row">
                        <div class="faq-box">
                            <h4 class="h4-title">Çalışma saatleriniz nedir?</h4>
                            <p>Restoranımız hafta içi 11:00-23:00, hafta sonu ise 10:00-00:00 saatleri arasında hizmet
                                vermektedir. Özel günlerde ve tatillerde çalışma saatlerimizde değişiklik olabilir,
                                bu durumda sosyal medya hesaplarımızdan duyuru yaparız. Son sipariş saatimiz kapanıştan 1 saat öncedir.</p>
                        </div>
                        <div class="faq-box">
                            <h4 class="h4-title">İade işlemlerini nasıl yapabilirim</h4>
                            <p>Siparişinizde herhangi bir sorun yaşamanız durumunda, sipariş tarihinden itibaren 24
                                saat içinde müşteri hizmetlerimizle iletişime geçebilirsiniz. İade talebiniz değerlendirildikten
                                sonra, onaylanması halinde 3-5 iş günü içinde ödeme yönteminize geri ödeme yapılır. Kart ödemeleri
                                için bankacılık işlemleri 7-10 gün sürebilir.</p>
                        </div>
                        <div class="faq-box">
                            <h4 class="h4-title">Yemek siparişim ne kadar sürede gelir?</h4>
                            <p>Normal mesai saatlerinde siparişleriniz ortalama 25-45 dakika içinde adresinize teslim edilir.
                                Yoğun saatlerde (akşam 19:00-21:30) teslimat süresi 60 dakikaya kadar uzayabilir. Hava koşulları
                                ve trafik durumu teslimat süresini etkileyebilir, böyle durumlarda sizi bilgilendiririz.</p>
                        </div>
                        <div class="faq-box">
                            <h4 class="h4-title">Restoranınızda hem vejeteryan hem et yemekleri var mı?</h4>
                            <p>Evet, menümüzde hem vejeteryan hem vegan hem de et seçenekleri bulunmaktadır. Tüm vejeteryan
                                yemeklerimiz "V" işareti ile, vegan seçeneklerimiz "VGN" işareti ile belirtilmiştir. Ayrıca gluten-free
                                seçeneklerimiz de mevcuttur ve özel beslenme gereksinimleriniz için mutfağımızla koordine edebiliriz.</p>
                        </div>
                        <div class="faq-box">
                            <h4 class="h4-title">Yemek teslimat ücreti ne kadar?</h4>
                            <p>5 km yarıçapındaki bölgelere teslimat ücreti 15₺'dir. 100₺ ve üzeri siparişlerde teslimat ücretsizdir.
                                Bazı uzak bölgeler için ek teslimat ücreti uygulanabilir, sipariş sırasında net tutarı görebilirsiniz.
                                Özel günlerde kampanyalarımız ile teslimat ücreti farklılık gösterebilir.</p>
                        </div>
                        <div class="faq-box">
                            <h4 class="h4-title">Pro üyelik kimler için uygun?</h4>
                            <p>Ayda 3'ten fazla sipariş veren müşterilerimiz için Pro üyelik avantajlıdır. Pro üyelerimize özel %15 indirim,
                                ücretsiz teslimat, öncelikli sipariş hazırlama ve özel menü erişimi sunuyoruz. Üyelik aylık 29₺ olup, düzenli
                                müşterilerimiz için çok avantajlı bir seçenektir.</p>
                        </div>
                    </div>

                </div>
            </div>

        </section>


        <div class="bg-pattern bg-light repeat-img">
            <section class="blog-sec section" id="blog">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">blog</p>
                                    <h2 class="h2-title">En Son Yayınlar</h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="img/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="blog-box">
                                    <div class="blog-img back-img" id="blog1"></div>
                                    <div class="blog-text">
                                        <p class="blog-date">15 Eylül 2025</p>
                                        <a href="#" class="h4-title">Evde yapabileceğiniz enerji içeceği</a>
                                        <p>Doğal malzemelerle hazırlayabileceğiniz bu enerji içeceği, gün
                                            boyu enerjinizi yüksek tutmanıza yardımcı olur. Taze meyveler,
                                            baharatlar ve doğal tatlandırıcılarla hazırlanan bu tarifle hem
                                            sağlıklı hem de lezzetli bir içecek elde edebilirsiniz.</p>
                                        <a href="#" class="sec-btn">Devamını Oku</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="blog-box">
                                    <div class="blog-img back-img" id="blog2"></div>
                                    <div class="blog-text">
                                        <p class="blog-date">15 Ekim 2025</p>
                                        <a href="#" class="h4-title">Akşam Yemeği İçin Shakshuka</a>
                                        <p>Akdeniz mutfağının en sevilen lezzetlerinden biri olan bu shakshuka tarifi,
                                            hem göze hitap eden sunumu hem de doyurucu lezzetiyle sofranızın vazgeçilmezi
                                            olacak. Taze domateslerden hazırlanan zengin sos içinde pişirilen yumurtalar,
                                            baharatların aromasıyla birleşerek muhteşem bir tat deneyimi yaşatır.</p>
                                        <a href="#" class="sec-btn">Devamını Oku</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="blog-box">
                                    <div class="blog-img back-img" id="blog3"></div>
                                    <div class="blog-text">
                                        <p class="blog-date">15 Kasım 2025</p>
                                        <a href="#" class="h4-title">Çift nuggetlı tavuk burger</a>
                                        <p>Klasik burgerin yeni yorumu olan bu lezzet bombası, hem tavuk
                                            burger hem de çıtır nuggetların birleşimiyle benzersiz bir tat
                                            deneyimi yaşatıyor. Özel sosumuz ve taze malzemelerle hazırlanan
                                            bu burgerimiz, doyurucu bir öğün arayanlar için mükemmel seçim. </p>
                                        <a href="#" class="sec-btn">Devamını Oku</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="newsletter-sec section pt-0">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 m-auto">
                                <div class="newsletter-box text-center back-img white-text" id="news">
                                    <div class="bg-overlay dark-overlay"></div>
                                    <div class="sec-wp">
                                        <div class="newsletter-box-text">
                                            <h2 class="h2-title">Bültenimize Abone Olun</h2>
                                            <p>En yeni tariflerimiz, özel kampanyalarımız ve restoranımızdan haberlerden ilk siz haberdar olun.</p>
                                        </div>
                                        <form action="#" class="newsletter-form">
                                            <input type="email" class="form-input"
                                                   placeholder="Mail ile giriş yap" required>
                                            <button type="submit" class="sec-btn primary-btn">Abone Ol</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- footer starts  -->
        <footer class="site-footer" id="contact">
            <div class="top-footer section">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="footer-info">
                                    <div class="footer-logo">
                                        <a href="index.html">
                                            <img src="img/logo.png" alt="">
                                        </a>
                                    </div>
                                    <p>Sosyal Medyada Da Bizimle Olun. Lezzetli Anlarımızı Paylaşalım.
                                    </p>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="uil uil-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="uil uil-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="uil uil-github-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="uil uil-youtube"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="footer-flex-box">
                                    <div class="footer-table-info">
                                        <h3 class="h3-title">Çalışma Saatleri</h3>
                                        <ul>
                                            <li><i class="uil uil-clock"></i> Pazartesi - Perşembe :  09:00 - 22:00</li>
                                            <li><i class="uil uil-clock"></i> Cuma - Pazar : 11:00- 22:00</li>
                                        </ul>
                                    </div>
                                    <div class="footer-menu food-nav-menu">
                                        <h3 class="h3-title">Linkler</h3>
                                        <ul class="column-2">
                                            <li>
                                                <a href="#home" class="footer-active-menu">Anasayfa</a>
                                            </li>
                                            <li><a href="#about">Hakkımızda</a></li>
                                            <li><a href="#menu">Menü</a></li>
                                            <li><a href="#gallery">Galeri</a></li>
                                            <li><a href="#blog">Blog</a></li>
                                            <li><a href="#contact">İletişim</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer-menu">
                                        <h3 class="h3-title">Yasal Bilgiler</h3>
                                        <ul>
                                            <li><a href="#">Şartlar ve Koşullar</a></li>
                                            <li><a href="#">Gizlilik Politikası</a></li>
                                            <li><a href="#">Çerez Politikası</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="copyright-text">
                                <p>Telif Hakkı &copy; 2021 <span class="name">TechieCoder.</span>Tüm Hakları Saklıdır.
                                </p>
                            </div>
                        </div>
                    </div>
                    <button class="scrolltop"><i class="uil uil-angle-up"></i></button>
                </div>
            </div>
        </footer>



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
