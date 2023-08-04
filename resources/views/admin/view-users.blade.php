<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>view order - AndShop</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../assets/css/fontawesome.all.min.css" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css" />
    <!-- owl.theme.default css -->
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css" />
    <!-- animate css -->
    <link rel="stylesheet" href="../assets/css/animate.min.css" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="../assets/css/meanmenu.min.css" />
    <!-- Style css -->
    <link rel="stylesheet" href="../assets/css/style.css" />
    <!-- color css -->
    <link rel="stylesheet" href="../assets/css/color.css" />
</head>

<body>
    <!-- Preloader Area -->
    <div id="preloader">
        <div id="status">
            <img src="../assets/img/loader.gif" alt="img">
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
                                    <img src="../assets/img/flag/us-flag.jpg" class="shadow-sm" alt="image">
                                    <span>Eng <i class="fas fa-chevron-down"></i></span>
                                </button>
                                <div class="dropdown-menu">
                                <a href="#" class="dropdown-item d-flex align-items-center">
                                        <img src="../assets/img/flag/tanzania-flag1.png" class="shadow-sm" alt="flag">
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
                            <img src="../assets/img/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="drodo-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/shop">
                        <img src="../assets/img/logo.png" alt="logo">
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
                        <h2>USERS</h2>
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">View user</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--user section-->
                  <div class="container">
                  <div class="back_to_area fs-1 mr-3 fw-bold text-center">
                         <a href="{{url('users')}}"><i class="fas fa-long-arrow-alt-left"></i>Back</a>
                           </div>
                    <div class="card shadow">
                        <div class="card-header">
                        <div class="check-heading mb-3">
                               <h3>User Detailss</h3>
                                </div>
                            <div class="card-body">
                                <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="fname">Role</label>
                                            <div class="form-control"> {{$users->role_as == '0'? 'User':'Admin'}}</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="fname">First name</label>
                                            <div class="form-control"> {{$users->name}}</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="lname">Last name</label>
                                            <div class="form-control"> {{$users->lname}}</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="email">Email Addresse</label>
                                            <div class="form-control"> {{$users->email}}</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="cname">Phone Number *</label>
                                            <div class="form-control"> {{$users->phone}}</div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <div class="form-control"> {{$users->country}}</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="city">State/City</label>
                                            <div class="form-control"> {{$users->city}}</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="zip">Zip Code</label>
                                            <div class="form-control"> {{$users->zipcode}}</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="faddress">Full Address</label>
                                            <div class="form-control"> {{$users->address}}</div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                      </div>  
                    </div>
                </div>
                                            
<!-- footer Area -->
<footer id="footer_one" class="center-align">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="footer_left_side">
                        <a href="/shop"><img src="../assets/img/logo.png" alt="logo"></a>
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
                        <img src="../assets/img/common/payment.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
       <!-- Jquery -->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
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
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="../assets/js/owl.carousel.min.js"></script>
    <!-- Menu js -->
    <script src="../assets/js/meanmenu.min.js"></script>
    <!-- img-upload js -->
    <script src="../assets/js/img-upload.js"></script>
    <!-- Count js -->
    <script src="../assets/js/count.js"></script>
    <!-- wow.js -->
    <script src="../assets/js/wow.min.js"></script>
    <!-- Custom js -->
    <script src="../assets/js/custom.js"></script>
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
</body>
</html>