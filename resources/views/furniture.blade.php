<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Title -->
    <title>Home - AndShop</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="assets/css/fontawesome.all.min.css" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <!-- owl.theme.default css -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" />
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- color css -->
    <link rel="stylesheet" href="assets/css/color.css" />
</head>
<body>
    <!-- Preloader Area -->
    <div id="preloader">
        <div id="status">
            <img src="assets/img/loader.gif" alt="img" />
        </div>
    </div>
    <!-- Top Header Area -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7">
                    <ul class="top-header-contact-info mx-5">
                        <li><i class="fas fa-phone-volume"></i> <a href="tel:+255715759613">(+255) 715-759613</a></li>
                        <li><i class="fas fa-street-view"></i> <a href="#" target="_blank">NJiapanda Segerea & Kigamboni Dar es salaam</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-5">
                    <ul class="top-header-menu mx-5">
                        <li>
                            <div class="dropdown language-switcher d-inline-block mx-3">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <img src="assets/img/flag/us-flag.jpg" class="shadow-sm" alt="image">
                                    <span>Eng <i class="fas fa-chevron-down"></i></span>
                                </button>
                                <div class="dropdown-menu">
                                <a href="#" class="dropdown-item d-flex align-items-center">
                                        <img src="assets/img/flag/tanzania-flag1.png" class="shadow-sm" alt="flag">
                                        <span>Swl</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown currency-switcher d-inline-block">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span>TSH<i class="fas fa-chevron-down"></i></span>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">TSH</a>
                                    <a href="#" class="dropdown-item"></a>
                                    <a href="#" class="dropdown-item">USD</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Navebar Area -->
    <div class="navbar-area">
        <div class="drodo-responsive-nav">
            <div class="container">
                <div class="drodo-responsive-menu">
                    <div class="logo">
                        <a href="index-2.html">
                            <img src="assets/img/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="drodo-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index-2.html">
                        <img src="assets/img/logo.png" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav">
                            <li class="nav-item active"><a href="/" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item megamenu"><a href="/shop" class="nav-link">Shop </a>
                            </li>
                            <li class="nav-item megamenu"><a href="/category-view" class="nav-link">Category</a>
                            </li>
                            <li class="nav-item"><a href="/about-us" class="nav-link">About Us</a></li>
                            <li class="nav-item"><a href="/contact-us" class="nav-link">Contact Us</a></li>
                             <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                            <li class="nav-item bg-login"> <a href="{{route('login')}}" class="nav-link">Login</a></li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item  register-border"><a href="{{route('register')}}" class="nav-link">Register </a></li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    
                                <i class="fas fa-user fa-5x fa-fw  text-success"></i> &nbsp; {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw text-gray-400"></i> &nbsp; Settings </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw  text-gray-400"></i> &nbsp; Activity Log </a>
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      <i class="fas fa-sign-out-alt"></i> &nbsp; {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    
                                </div>
                            </li>
                        @endguest
                        </ul>
                        <div class="others-option">
                            <div class="option-item px-5">
                                <div class="cart-btn">
                                    <a href="{{url('cart-2')}}"><i
                                            class='fas fa-shopping-cart'></i></a>
                                </div>
                            </div>
                        </div><!--//end cart link icon-->
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
                    <div class="row height d-flex justify-content-center align-items-center mt-5">
                      <div class="col-md-8">
                        <div class="search mb-3">
                            <form method="post" action="{{url('searchProduct')}}">
                                @csrf
                          <i class="fa fa-search"></i>
                          <input type="search" class="form-control" name="productName" id="search_product" placeholder="Search Here">
                          <button type="submit" class="btn btn-warning fw-bold">Search</button>
                        </div>
                        </form>
                      </div>
                    </div>
                </div>
    <!-- Search Area -->
   <!-- <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>
                <div class="search-overlay-form">
                    <form>
                        <input type="search" class="input-search " id="search_product" placeholder="Search here...">
                        <button type="submit"><i class="fas fa-search search-btn"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Banner Area -->
    <section id="furniture_banner">
        <div class="furniture_slider_box owl-theme owl-carousel">
            <div class="furniture_slider background_bg"
                style="background-image: url('assets/img/furniture/banner/banner1.png');">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-sm-12 col-12">
                            <div class="furniture_slider_content">
                                <h5> NEW TRENDING</h5>
                                <h2> Sofa Collection</h2>
                                <p>Sofa bora kabisa kutoka two-in_one_quality_furniture.</p>
                                <a href="/shop" class="theme-btn-one bg-black btn_sm">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="furniture_slider background_bg"
                style="background-image: url('assets/img/furniture/banner/banner2.png');">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="furniture_slider_content">
                                <h5> NEW TRENDING</h5>
                                <h2> Sofa Collection</h2>
                                <p>Jipatie furnitures bora na nzuri kabisa kutoka kwetu.Nenda kwenye shop page ujionee</p>
                                <a href="/shop" class="theme-btn-one bg-black btn_sm">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="furniture_slider background_bg"
                style="background-image: url('assets/img/furniture/banner/banner3.png');">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="furniture_slider_content">
                                <h5> NEW TRENDING</h5>
                                <h2> Sofa Collection</h2>
                                <p>Bidhaa  nzuri,bora na zenye uimara wa hali ya juu kutoka kwetu.</p>
                                <a href="/shop" class="theme-btn-one bg-black btn_sm">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner Bottom Area -->
    <section id="furniture_banner_bottom" class="pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="furniture_bottom_wrapper">
                        <a href="/shop" class="hover_effect_furniture">
                            <img src="assets/img/furniture/banner/feature1.png" alt="img">
                        </a>
                        <div class="furniture_bottom_content furniture-content-lg">
                            <h5>Outdoor Furniture</h5>
                            <h2>Outdoor Dining <br> Furniture</h2>
                            <a href="/shop">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="furniture_bottom_wrapper mb-30">
                        <a href="/shop" class="hover_effect_furniture">
                            <img src="assets/img/furniture/banner/feature2.png" alt="img">
                        </a>
                        <div class="furniture_bottom_content furniture-content-md">
                            <h5>Outdoor Furniture</h5>
                            <h2>Outdoor Dining <br> Furniture</h2>
                            <a href="/shop">Shop Now</a>
                        </div>
                    </div>
                    <div class="furniture_bottom_wrapper">
                        <a href="/shop" class="hover_effect_furniture">
                            <img src="assets/img/furniture/banner/feature3.png" alt="img">
                        </a>
                        <div class="furniture_bottom_content furniture-content-md">
                            <h5>Outdoor Furniture</h5>
                            <h2>Outdoor Dining <br> Furniture</h2>
                            <a href="/shop">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="furniture_bottom_wrapper">
                        <a href="/shop" class="hover_effect_furniture">
                            <img src="assets/img/furniture/banner/feature4.png" alt="img">
                        </a>
                        <div class="furniture_bottom_content furniture-content-md">
                            <h5>Outdoor Furniture</h5>
                            <h2>Outdoor Dining <br> Furniture</h2>
                            <a href="/shop">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hot Product Area -->
    <section id="hot_Product_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs_center_button">
                        <ul class="nav nav-tabs">
                            <li><a data-bs-toggle="tab" data-bs-target="#new_arrival" href="#!" class="active">New
                                    Arrival</a></li>
                            <li><a data-bs-toggle="tab" data-bs-target="#trending" href="#!">Trending</a></li>
                            <li><a data-bs-toggle="tab" data-bs-target="#best_sellers" href="#!">Best Sellers</a></li>
                            <li><a data-bs-toggle="tab" data-bs-target="#featured" href="#!">Featured</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tabs_el_wrapper">
                        <div class="tab-content">
                            <div id="new_arrival" class="tab-pane fade show in active">
                                <div class="row">
                                 @foreach($new_arrivals as $new_arrival)
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_box text-center">
                                            <div class="product_img">
                                                <a href="{{url('product-details',$new_arrival->id)}}">
                                                <img  class="img-responsive" src="{{ asset('images/products/' . $new_arrival->image) }}" />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li><a href="{{url('product-details',$new_arrival->id)}}" class="action quickview">
                                                                <i class="fas fa-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h5 class="product_title"><a href="{{url('product-details',$new_arrival->id)}}">{{$new_arrival->product_name}}</a></h5>
                                                <div class="product_price">
                                                    <span class="price">{{$new_arrival->price}}</span>
                                                    <del>{{$new_arrival->discount_price}}</del>
                                                </div>

                                                
                                                <div class="rating_wrap mt-3">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>

                                                <div class="add-to-cart">
                                                    <a href="{{url('product-details',$new_arrival->id)}}" title="Buy"
                                                        class="offcanvas-toggle theme-btn-one bg-gold btn_sm text-white"><i
                                                            class="fas fa-cart-arrow-down"></i> Buy</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                   </div>
                                   </div>
                                    <!--//-->

                            <div id="trending" class="tab-pane fade">
                                <div class="row">
                                @foreach($trending as $tre_nding)
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_box text-center">
                                            <div class="product_img">
                                                <a href="{{url('product-details',$tre_nding->id)}}">
                                                <img  class="img-responsive" src="{{ asset('images/products/' . $tre_nding->image) }}" />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li><a href="{{url('product-details',$tre_nding->id)}}" class="action quickview">
                                                                <i class="fas fa-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h5 class="product_title mb-2"><a href="{{url('product-details',$tre_nding->id)}}">{{$tre_nding->product_name}}</a></h5>
                                                <div class="product_price">
                                                    <span class="price">{{$tre_nding->price}}</span>
                                                    <del class="mb-2">{{$tre_nding->discount_price}}</del>
                                                </div>
                                                
                                                <div class="rating_wrap mt-3">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>

                                                <div class="add-to-cart">
                                                    <a href="{{url('product-details',$tre_nding->id)}}" title="Buy"
                                                        class="offcanvas-toggle theme-btn-one bg-gold btn_sm text-white"><i
                                                            class="fas fa-cart-arrow-down"></i> Buy</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div><!--//-->

                            <div id="best_sellers" class="tab-pane fade">
                                <div class="row">
                                @foreach($bestsellers as $best_sellers)
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_box text-center">
                                            <div class="product_img">
                                                <a href="{{url('product-details',$best_sellers->id)}}">
                                                <img  class="img-responsive" src="{{ asset('images/products/' . $best_sellers->image) }}" />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li><a href="{{url('product-details',$best_sellers->id)}}" class="action quickview">
                                                                <i class="fas fa-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h5 class="product_title"><a href="{{url('product-details',$best_sellers->id)}}">{{$best_sellers->product_name}}</a></h5>
                                                <div class="product_price">
                                                    <span class="price">{{$best_sellers->price}}</span>
                                                    <del>{{$best_sellers->discount_price}}</del>
                                                </div>
                                                <div class="rating_wrap mt-3">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>

                                                <div class="add-to-cart">
                                                    <a href="{{url('product-details',$best_sellers->id)}}" title="Buy"
                                                        class="offcanvas-toggle theme-btn-one bg-gold btn_sm text-white"><i
                                                            class="fas fa-cart-arrow-down"></i> Buy</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div><!--//-->

                            <div id="featured" class="tab-pane fade">
                                <div class="row">
                                @foreach($featured as $fea_tured)
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_box text-center">
                                            <div class="product_img">
                                                <a href="{{url('product-details',$fea_tured->id)}}">
                                                <img  class="img-responsive" src="{{ asset('images/products/' .  $fea_tured->image) }}" />
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li><a href="{{url('product-details',$fea_tured->id)}}" class="action quickview">
                                                                <i class="fas fa-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h5 class="product_title"><a href="{{url('product-details',$fea_tured->id)}}">{{ $fea_tured->product_name}}</a></h5>
                                                <div class="product_price">
                                                    <span class="price">{{ $fea_tured->price}}</span>
                                                    <del>{{ $fea_tured->discount_price}}</del>
                                                </div>
                                                <div class="rating_wrap mt-3">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>

                                                <div class="add-to-cart">
                                                    <a href="{{url('product-details',$fea_tured->id)}}" title="Buy"
                                                        class="offcanvas-toggle theme-btn-one bg-gold btn_sm text-white"><i
                                                            class="fas fa-cart-arrow-down"></i> Buy</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div><!--//-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Time Count Area -->
    <section id="offer_timer_two">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="offer_time_img_two">
                        <img src="assets/img/furniture/common/offer-time.png" alt="img">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="offer_time_two_Content">
                        <img src="assets/img/furniture/common/black.png" alt="img">
                        <div id="countdown_two">
                            <ul>
                                <li><span id="days"></span>Days:</li>
                                <li><span id="hours"></span>Hours:</li>
                                <li><span id="minutes"></span>Min:</li>
                                <li><span id="seconds"></span>Sec</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Product Area -->
    <section id="furniture_popular_product" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading_two">
                        <h2>Popular Product</h2>
                        <span class="heading_border"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="furniture_popular_slider owl-carousel owl-them">
                    @foreach($popular_product as $popular_prod)
                        <div class="product_box text-center">
                            <div class="product_img">
                                <a href="product-single">
                                <img  class="img-responsive" src="{{ asset('images/products/' .$popular_prod->image) }}" />
                                </a>
                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li><a href="{{url('product-details', $popular_prod->id)}}" class="action quickview">
                                                                <i class="fas fa-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                         </div>
                            <div class="product_info">
                                <h5 class="product_title"><a href="{{url('product-details', $popular_prod->id)}}">{{ $popular_prod->product_name}}</a></h5>
                                <div class="product_price">
                                    <span class="price">{{$popular_prod->price}}</span>
                                    <del>{{$popular_prod->discount_price}}</del>
                                </div>
                                <div class="rating_wrap mt-3">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:80%"></div>
                                                    </div>
                                                    <span class="rating_num">(21)</span>
                                                </div>

                                                <div class="add-to-cart">
                                                    <a href="{{url('product-details', $popular_prod->id)}}" title="Buy"
                                                        class="offcanvas-toggle theme-btn-one bg-gold btn_sm text-white"><i
                                                            class="fas fa-cart-arrow-down"></i> Buy</a>
                                                </div>
                            </div>
                         </div><!--//-->
                         @endforeach
                      </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Area -->
    <section id="furniture_story">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="our_story_content">
                        <h2>Our Story</h2>
                        <p>We started furnitures business  fo so long in furnitures sales and design and , almost 10 years now,
                           We are the best furnitures sellers in Tanzania with  enough
                        experience and skills.We design strong furnitures that last longer without get damaged.
                        This is what makes us different and unique in this business.We have strong qualified and skilled 
                        personnel who ensures  the job get done.
                    </p>
                        <a href="/about-us" class="theme-btn-one bg-black btn_md">Read Full Story</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Area -->
    <section id="blog_area_two" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading_two">
                        <h2>Blog Post</h2>
                        <span class="heading_border"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="blog_post_wrapper">
                        <div class="blog_post_img">
                           
                                <img src="assets/img/furniture/blog/blog1.jpg" alt="img">
                           
                            <div class="blog_post_date">
                                <i class="far fa-calendar-alt"></i>
                                <span>11 Sept 2021</span>
                            </div>
                        </div>
                        <div class="right_block">
                            <div>
                                <h5 class="text-bold text-white">Ahsante sana Bidhaa zenu ni bora na zinadumu kwa muda mrefu sana</h5>
                                <p>Nimekuwa nikibadilisha masofa na viti kwenye nyumba yangu kila baada ya nusu mwaka
                                    kwasababu yamekuwa hayadumu na yanaharibika kwa haraka.Toka nimenunua masofa na viti kutoka
                                    SMART AFRIKA FURNITURE(SAF)  mpaka  sasa ni mwaka wa tatu hakuna hata dalili ya kuchoka
                                    wala kuharibika.Bidhaa zenu ni bora na zinadumu sana, ahsanteni sana.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="blog_post_wrapper">
                        <div class="blog_post_img">
                        
                                <img src="assets/img/furniture/blog/blog2.jpg" alt="img">
                            
                            <div class="blog_post_date">
                                <i class="far fa-calendar-alt"></i>
                                <span>15 Sept 2022</span>
                            </div>
                        </div>
                        <div class="right_block">
                            <div class="right_side_content">
                                <h5>Nimepokea mzigo Tayari</h5>
                                <p>Ahsante sana SMART AFRIKA FURNITURE niliagiza sofa kutoka kwenu nimepokea, ni nzuri sana aisee!!</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Arae -->
    <section id="instagram_area_one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading_two">
                        <h2>FOLLOW US INSTAGRAM</h2>
                        <span class="heading_border"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="instagram_post_slider owl-carousel owl-theme">
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furniture/">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/furniture/instagram/1.jpg" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furniture/">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/furniture/instagram/2.jpg" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furniture/">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/furniture/instagram/3.jpg" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furniture/">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/furniture/instagram/4.jpg" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furniture/">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/furniture/instagram/5.jpg" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furniture/">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/furniture/instagram/6.jpg" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furniture/">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/furniture/instagram/7.jpg" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furniture/">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/furniture/instagram/8.jpg" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furniture/">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/furniture/instagram/9.jpg" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furniture">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/furniture/instagram/10.jpg" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furnitures/">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/furniture/instagram/11.jpg" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furnitures/">
                                <i class="fab fa-instagram"></i>
                                <img src="assets/img/furniture/instagram/12.jpg" alt="img" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- footer Area -->
 <footer id="footer_one" class="center-align">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="footer_left_side">
                        <a href="#!"><img src="assets/img/logo.png" alt="logo"></a>
                        <p class="text-justify">Smart Afrika Furniture(SAF) ni wauzaji wa furnitures bora na za kisasa Tanzania.
                            Tunapatikana dar es salaam,tunatuma mikoa yote</p>
                        <div class="footer_left_side_icon">
                            <ul>
                                <li><a href=" https://web.facebook.com/twoinonequalityfurniture"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/furnitures_tz"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/furniture-tz-8bbaa5268/"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/two_in_one_quality_furniture/"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="footer_one_widget">
                        <h3>INFORMATION</h3>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/shop">Shop</a></li>
                            <li> <a href="/about-us">About Us</a></li>
                            <li><a href="/privacy-policy">Privacy Policy</a></li>
                            <li><a href="/contact-us">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                    <div class="footer_one_widget">
                        <h3>Your Account</h3>
                        <ul>
                            <li><a href="/cart-2">View Cart</a></li>
                            <li><a href="/my-account">My Account</a></li>
                            <li><a href="{{url('register')}}">Register</a></li>
                            <li><a href="{{url('login')}}">Login</a></li>
                            <li><a href="/checkout">Checkout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="footer_one_widget">
                        <h3>NEWSLETTER</h3>
                        <div id="mc_embed_signup" class="subscribe-form">
                            <form>
                                <div class="mc-form">
                                    <input class="form-control" type="email" required="" placeholder="Your Mail*"
                                        name="EMAIL" value="">
                                    <div class="clear">
                                        <button class="theme-btn-one btn_md" type="submit" name="subscribe" value=""><i
                                                class="icon-cursor"></i> Send Mail</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- CopyRight Area -->
    <section id="copyright_one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="copyright_left margin-space">
                        <h6>© CopyRight 2022 by
                            <span>Smart Afrika Furniture(SAF)</span>
                        </h6>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="copyright_right">
                        <img src="assets/img/common/payment.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- cookie bar start -->
    <!-- cookie bar end -->
    <!--whatsapp chat-->
    <div class="whatsapp-chat">
    <a href=" https://wa.me/+255715759613?text=I'm%20interested%20in%20your%20products" target="_blank">
        <img src="assets/img/furniture/social-icons/whatsap.png" alt="whatsapp-live-chat" height="80px" width="80px">
    </a>
    </div><!--//end whatsapp chat-->

    <!-- Jquery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
    var availableTags = [ ];
    $.ajax({
            method:"GET",
            url: "/product-list",
            success: function(response){
             //console.log(response);  
             startAutoComplete(response); 
            }
        });
        
        function startAutoComplete(availableTags){

            $( "#search_product" ).autocomplete({
            source: availableTags
            });
        }
  </script>
    <!-- Bootstrap js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Menu js -->
    <script src="assets/js/meanmenu.min.js"></script>
    <!-- Count js -->
    <script src="assets/js/count.js"></script>
    <!-- Timer js -->
    <script src="assets/js/timer.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <!-- wow.js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>
    <!--sweetalert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('status'))
    <script>
        swal("{{session('status')}}")
   </script>
    @endif
    <!--//end sweet alert-->
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6409bda64247f20fefe4e3fc/1gr30tk1n';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
    <script>
        new WOW().init();
    </script>
</body>
</html>