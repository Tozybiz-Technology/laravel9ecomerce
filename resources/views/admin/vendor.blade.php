<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Vendor - AndShop</title>
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
    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body>
    <!-- Preloader Area -->
    <div id="preloader">
        <div id="status">
            <img src="assets/img/loader.gif" alt="img">
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
                        <a href="/">
                            <img src="assets/img/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="drodo-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/shop">
                        <img src="assets/img/logo.png" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="/" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item megamenu {{Request::is('shop') ? 'active':'';}}"><a href="/shop" class="nav-link">Shop </a>
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
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Vendor</h2>
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Vendor</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--vendor-area-Area -->
    <section id="vendor_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#!" data-bs-toggle="tab" data-bs-target="#vendor_dashboard" class=" active"><i
                                        class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                                        <li><a href="/admin.category"><i class="fas fa-cart-plus"></i>Add Categories</a></li>
                            <li> <a href="#!" data-bs-toggle="tab" data-bs-target="#all_categories"><i
                            class="fa fa-eye"></i>View Categories</a></li>
                            <li><a href="{{url('admin.add-product')}}"><i class="fas fa-cart-plus"></i>Add PRoducts</a></li>
                            <li> <a href="#!" data-bs-toggle="tab" data-bs-target="#all_product"><i
                                        class="fa fa-eye"></i>View Products</a></li>
                            <li><a href="{{url('orderview')}}"><i
                                        class="fas fa-shopping-bag"></i>Orders</a></li>
                            <li><a href="{{url('users')}}"><i
                                        class="far fa-id-badge"></i>Users</a></li>
                            <li><a href="#!" data-bs-toggle="tab" data-bs-target="#vendor_setting"><i
                                        class="fas fa-user-cog"></i>Setting</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content">
                        <div class="tab-pane fade show active" id="vendor_dashboard">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="vendor_top_box">
                                        <h2>25</h2>
                                        <h4>Total Products</h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="vendor_top_box">
                                        <h2>2552</h2>
                                        <h4>Total Sales</h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="vendor_top_box">
                                        <h2>50</h2>
                                        <h4>Order Pending</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mychart_area">
                                        <canvas id="myChart"></canvas>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mychart_area">
                                        <canvas id="myChart1"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="vendor_order_boxed">
                                        <h4>Pending Products</h4>
                                        <table class="table pending_table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Sales</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td scope="row"><img src="assets/img/common/1.jpg" alt=""></td>
                                                    <td>neck velvet dress</td>
                                                    <td>$205</td>
                                                    <td>1000</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row"><img src="assets/img/common/1.jpg" alt=""></td>
                                                    <td>neck velvet dress</td>
                                                    <td>$205</td>
                                                    <td>1000</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row"><img src="assets/img/common/1.jpg" alt=""></td>
                                                    <td>neck velvet dress</td>
                                                    <td>$205</td>
                                                    <td>1000</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row"><img src="assets/img/common/1.jpg" alt=""></td>
                                                    <td>neck velvet dress</td>
                                                    <td>$205</td>
                                                    <td>1000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="vendor_order_boxed">
                                        <h4>Recent Orders</h4>
                                        <table class="table pending_table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Order Id</th>
                                                    <th scope="col">Product Details</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td scope="row">#21515</td>
                                                    <td>Neck Velvet Dress</td>
                                                    <td>Confrimed</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">#78153 </td>
                                                    <td>Belted Trench Coat</td>
                                                    <td>Shipped</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">#51512 </td>
                                                    <td>Man Print Tee</td>
                                                    <td>Pending</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">#78153 </td>
                                                    <td> Belted Trench Coat</td>
                                                    <td>Shipped</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">#78153 </td>
                                                    <td>Belted Trench Coat</td>
                                                    <td>Shipped</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">#51512 </td>
                                                    <td>Man Print Tee</td>
                                                    <td>Pending</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!--//-->
                        <div class="tab-pane fade" id="all_categories">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="vendor_order_boxed">
                                        <h4>All Categories</h4>
                                        <div class="table-responsive">
                                            <table class="table pending_table">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col">id</th>
                                                        <th scope="col">category Name</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Edit/Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($category as $item)
                                                    <tr>
                                                        <td>{{$item->id}}</td>
                                                        <td>{{$item->name}}</td>
                                                        <td>{{$item->description}}</td>
                                                        <td scope="row"><img src="{{ asset('images/category/' . $item->image) }}" width="80" height="80" alt="chairs"/></td>	
                                                        <td><a href={{"catedit/".$item['id']}}><i class="fas fa-edit"></i></a> <a href={{"catdelete/".$item['id']}}><i
                                                         class="fas fa-trash-alt"></i></a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="btn_right_table">
                                            <a href="/admin.category" class="theme-btn-one bg-black btn_sm">Add
                                                category</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--//-->
                        <div class="tab-pane fade" id="all_product">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="vendor_order_boxed">
                                        <h4>All poduct</h4>
                                        <div class="table-responsive">
                                            <table class="table pending_table">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col">id</th>
                                                        <th scope="col">Product Name</th> 
                                                        <th scope="col">Product Category</th> 
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Price</th> 
                                                        <th scope="col">Discount Price</th> 
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Edit/Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($product as $item)
                                                    <tr>
                                                        <td>{{$item->id}}</td>
                                                        <td>{{$item->product_name}}</td>
                                                        <td>{{$item->categories->name}}</td>
                                                        <td>{{$item->description}}</td>
                                                        <td>{{$item->price}}</td>
                                                        <td>{{$item->discount_price}}</td>
                                                        <td scope="row"><img src="{{ asset('images/products/' . $item->image) }}" width="80" height="80" alt="chairs"/></td>	
                                                        <td><a href={{"prodedit/".$item['id']}}><i class="fas fa-edit"></i></a> <a href={{"proddelete/".$item['id']}}><i
                                                         class="fas fa-trash-alt"></i></a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="btn_right_table">
                                            <a href="/admin.add-product" class="theme-btn-one bg-black btn_sm">Add
                                                Product</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <!--//-->
                       
                        <div class="tab-pane" id="profile_vendor">
                            <div class="vendors_profiles">
                                <h4>Profile</h4>
                                <ul>
                                    <li>
                                        <div class="profils_details_vendor">
                                            <div class="profile_left">
                                                <h4>Company Name:</h4>
                                            </div>
                                            <div class="profile_right">
                                                <h4>Fashion Store</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="profils_details_vendor">
                                            <div class="profile_left">
                                                <h4>Email Address:</h4>
                                            </div>
                                            <div class="profile_right">
                                                <h4>demo123@gmail.com</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="profils_details_vendor">
                                            <div class="profile_left">
                                                <h4>Country / Region:</h4>
                                            </div>
                                            <div class="profile_right">
                                                <h4>Downers Grove, IL</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="profils_details_vendor">
                                            <div class="profile_left">
                                                <h4>Year Established:</h4>
                                            </div>
                                            <div class="profile_right">
                                                <h4>2018</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="profils_details_vendor">
                                            <div class="profile_left">
                                                <h4>Total Employees:</h4>
                                            </div>
                                            <div class="profile_right">
                                                <h4>101 - 200 People</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="profils_details_vendor">
                                            <div class="profile_left">
                                                <h4>Category:</h4>
                                            </div>
                                            <div class="profile_right">
                                                <h4>Clothing</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="profils_details_vendor">
                                            <div class="profile_left">
                                                <h4>Street Address:</h4>
                                            </div>
                                            <div class="profile_right">
                                                <h4>549 Sulphur Springs Road</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="profils_details_vendor">
                                            <div class="profile_left">
                                                <h4>City/State:</h4>
                                            </div>
                                            <div class="profile_right">
                                                <h4>Downers Grove, IL</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="profils_details_vendor">
                                            <div class="profile_left">
                                                <h4>Zip:</h4>
                                            </div>
                                            <div class="profile_right">
                                                <h4>60515</h4>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="btn_left_table">
                                    <a href="account-info-edit.html" class="theme-btn-one bg-black btn_sm">Edit
                                        Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="vendor_setting">
                            <div class="vendors_settings">
                                <h4>Setting</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="setings_boxed">
                                            <h3>Notifications</h3>
                                            <form>
                                                <input type="radio" id="allow_desktop" name="fav_language" value=""
                                                    checked>
                                                  <label for="allow_desktop">Allow Desktop Notifications</label><br>
                                                  <input type="radio" id="enable" name="fav_language" value="">
                                                  <label for="enable">Enable Notifications</label><br>
                                                  <input type="radio" id="get_notification" name="fav_language"
                                                    value="">
                                                  <label for="get_notification">Get notification for my own
                                                    activity</label><br>
                                                  <input type="radio" id="dnd" name="fav_language" value="">
                                                  <label for="dnd">DND</label>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="setings_boxed">
                                            <h3>Deactivate Account</h3>
                                            <form>
                                                  <input type="radio" id="privacy_oncern" name="deactivate_account"
                                                    value="" checked>
                                                  <label for="privacy_oncern">I have a privacy concern</label><br>
                                                <input type="radio" id="is_temporary" name="deactivate_account"
                                                    value="">
                                                  <label for="is_temporary">This is temporary</label><br>
                                                  <input type="radio" id="other" name="deactivate_account" value="">
                                                  <label for="other">other</label> 
                                            </form>
                                            <button class="theme-btn-one btn-black-overlay btn_sm ">Deactivate
                                                Account</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="setings_boxed">
                                            <h3>Delete Account</h3>
                                            <form>
                                                  <input type="radio" id="longer_usable" name="delete_account" value=""
                                                    checked>
                                                  <label for="longer_usable"> No longer usable</label><br>
                                                  <input type="radio" id="switch_on_other" name="delete_account"
                                                    value="">
                                                  <label for="switch_on_other">Want to switch on other
                                                    account</label><br>
                                                  <input type="radio" id="other_delete" name="delete_account" value="">
                                                  <label for="other_delete">other</label>
                                            </form>
                                            <button class="theme-btn-one btn-black-overlay btn_sm ">Delete
                                                Account</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        <a href="/shop"><img src="assets/img/logo.png" alt="logo"></a>
                        <p class="text-justify">Smart Africa Furniture(SAF) ni wauzaji wa furnitures bora na za kisasa Tanzania.
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
                            <span>Smart Africa Furniture(SAF)</span>
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