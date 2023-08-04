<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>Checkout - AndShop</title>
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
                    <div class="container">
                    <ul class="top-header-contact-info">
                        <li><i class="fas fa-phone-volume"></i> <a href="tel:+255715759613">(+255) 715-759613</a></li>
                        <li><i class="fas fa-street-view"></i> <a href="#" target="_blank">NJiapanda Segerea & Kigamboni Dar es salaam</a>
                        </li>
                    </ul>
                </div>
</div>
                <div class="col-lg-6 col-md-5">
                    <ul class="top-header-menu">
                       
                    <div class="container"><i class="	fas fa-user-alt"></i> {{ Auth::user()->name }}</div>
                       
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
                            <li class="nav-item"><a href="furniture.html" class="nav-link active">Home</a>
                            </li>
                            <li class="nav-item megamenu"><a href="shop" class="nav-link">Shop </a>
                            </li>
                            <li class="nav-item megamenu"><a href="/category-view" class="nav-link">Category</a>
                            </li>
                            <li class="nav-item"><a href="about-us.html" class="nav-link">About Us</a></li>
                            <li class="nav-item"><a href="blog-gride-1.html" class="nav-link">Blog</a></li>
                            <li class="nav-item"><a href="contact-us.html" class="nav-link">Contact</a></li>
                        </ul>
                        <div class="others-option">
                            <div class="option-item">
                                <div class="wishlist-btn">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal"><i
                                            class='far fa-heart'></i></a>
                                </div>
                            </div>
                            <div class="option-item">
                                <div class="cart-btn">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingCartModal"><i
                                            class='fas fa-shopping-bag'></i><span>3</span></a>
                                </div>
                            </div>
                            <div class="option-item">
                                <div class="search-btn-box">
                                    <i class="fas fa-search search-btn"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Search Area -->
    <div class="search-overlay">
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
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="submit"><i class="fas fa-search search-btn"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Checkout</h2>
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout-Area -->
    <section id="checkout_one" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="checkout-area-bg bg-white">
                        <div class="check-heading">
                            <h3>Billings Information</h3>
                        </div>
                        <div class="check-out-form">
                            <form action="{{url('place-order')}}" method="POST">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="fname">First name</label>
                                            <input type="text"  class="form-control firstname" value="{{Auth::user()->name}}" name="fname" id="fname"
                                                placeholder="First name *">
                                                <span id="fname_error" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="lname">Last name</label>
                                            <input type="text" class="form-control lastname" value="{{Auth::user()->lname}}" name="lname" id="lname"
                                                placeholder="Last name *">
                                                <span id="lname_error" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="email">Email Addresse</label>
                                            <input class="form-control email" value="{{Auth::user()->email}}"  type="text" name="email" id="email"
                                                placeholder="info@gmail.com">
                                                <span id="email_error" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="cname">Phone Number *</label>
                                            <input class="form-control phone" value="{{Auth::user()->phone}}" required="" type="text" name="phone" id="cname"
                                                placeholder="Enter Phone Number">
                                                <span id="phone_error" class="text-danger"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <input class="form-control country" value="{{Auth::user()->country}}"  type="text" name="country" id="country"
                                                placeholder="Enter Country">
                                                <span id="country_error" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="city">State/City</label>
                                            <input class="form-control state" value="{{Auth::user()->city}}"  type="text" name="city" id="city"
                                                placeholder="Enter state/city">
                                                <span id="state_error" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="zip">Zip Code</label>
                                            <input type="text" class="form-control zipcode" value="{{Auth::user()->zipcode}}" name="zipcode" id="zipcode" required=""
                                                placeholder="Enter Your zipcode">
                                                <span id="zipcode_error" class="text-danger" ></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="faddress">Full Address</label>
                                            <input type="text" class="form-control faddress" value="{{Auth::user()->address}}" name="faddress" id="faddress" required=""
                                                placeholder="Enter your address here..">
                                                <span id="faddress_error" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="messages">Additional Notes</label>
                                            <textarea rows="5" class="form-control message" value="{{Auth::user()->message}}" name="message" id="messages"
                                                placeholder="Order notes"></textarea>
                                        </div>
                                    </div>
                                </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="order_review  box-shadow bg-white">
                        <div class="check-heading">
                            <h3>Your Orders</h3>
                        </div>
                        <div class="table-responsive order_table">
                        @php  $total=0;  @endphp
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Total Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cartitems as $cart_items)
                                    <tr>
                                        <td>{{$cart_items->product_title}}</td>
                                        <td>{{$cart_items->quantity}}</td>
                                        <td>{{$cart_items->price}}</td>
                                    </tr>
                                    @php $total +=$cart_items->price @endphp
                                    @endforeach
                                   
                                </tfoot>
                            </table>
                           
                                     <div class="text-center"> <span>Products Total Price</span>
                                        <p class="product-subtotal">${{$total}}</p>
                                       </div>
                                       
                                      
                        </div>
                    </div>
                    <div class="order_review bg-white shadow">
                        <div class="check-heading">
                            <h3>Payment</h3>
                        </div>
                        <input type="hidden" name="payment_id">
                        <select class="form-control mt-2 fw-bold" name="payment_mode">
                          <option value="COD">COD</option>  
                          <option value="stripe">Stripe</option> 
                          <option value="pesapal">Pesapal</option>   
                        </select><br><br>

                <!--payment Button Widget -->                 
                <button type="submit" class="btn  btn-black-overlay btn_sm text-center w-100 mt-5">Proceed Checkout</button>   
                <!--/ End of payment Button Widget -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer Area -->
    <footer id="footer_one">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="footer_left_side">
                        <a href="#!"><img src="assets/img/logo.png" alt="logo"></a>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Obcaecati culpa assumenda voluptas placeat amet consectetur adipisicing elit.
                            Obcaecati culpa assumenda voluptas placeat.</p>
                        <div class="footer_left_side_icon">
                            <ul>
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="footer_one_widget">
                        <h3>INFORMATION</h3>
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li> <a href="about-us.html">About Us</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="faq.html">Frequently Questions</a></li>
                            <li><a href="order-tracking.html">Order Tracking</a></li>
                            <li><a href="compare.html">Compare</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                    <div class="footer_one_widget">
                        <h3>Your Account</h3>
                        <ul>
                            <li><a href="cart.html">Cart View One</a></li>
                            <li><a href="cart-2.html">Cart View Two </a></li>
                            <li><a href="empty-cart.html">Empty Cart</a></li>
                            <li><a href="checkout.html">Checkout View One</a></li>
                            <li><a href="checkout-2.html">Checkout View Two</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
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
                    <div class="copyright_left">
                        <h6>© CopyRight 2022
                            <span>AndShop</span>
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

    <!-- Shopingcart Modal Area Start-->
    <div class="modal right fade shoppingCartModal" id="shoppingCartModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <h3>My Cart (3)</h3>
                    <div class="products-cart-content">
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/product-image/product1.png" alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="#">Coronavirus Face Mask</a></h3>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$39.00</span>
                                </div>
                            </div>
                            <a href="#" class="remove-btn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/product-image/product2.png" alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="#">Protective Gloves</a></h3>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$99.00</span>
                                </div>
                            </div>
                            <a href="#" class="remove-btn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/product-image/product3.png" alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="#">Infrared Thermometer Gun</a></h3>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$90.00</span>
                                </div>
                            </div>
                            <a href="#" class="remove-btn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                    <div class="products-cart-subtotal">
                        <span>Subtotal</span>
                        <span class="subtotal">$228.00</span>
                    </div>
                    <div class="products-cart-btn">
                        <a href="checkout.html" class="theme-btn-one btn-black-overlay btn_md">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Wishlist Modal Area Start-->
    <div class="modal right fade shoppingWishlistModal" id="shoppingWishlistModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <h3>My Wishlist (3)</h3>
                    <div class="products-cart-content">
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/product-image/product1.png" alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="#">Coronavirus Face Mask</a></h3>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$39.00</span>
                                </div>
                            </div>
                            <a href="#" class="remove-btn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/product-image/product2.png" alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="#">Protective Gloves</a></h3>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$99.00</span>
                                </div>
                            </div>
                            <a href="#" class="remove-btn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/product-image/product3.png" alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="#">Infrared Thermometer Gun</a></h3>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$90.00</span>
                                </div>
                            </div>
                            <a href="#" class="remove-btn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                    <div class="products-cart-subtotal">
                        <span>Subtotal</span>
                        <span class="subtotal">$228.00</span>
                    </div>
                    <div class="products-cart-btn">
                        <a href="wishlist.html" class="theme-btn-one btn-black-overlay btn_md">Wishlist</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Menu js -->
    <script src="assets/js/meanmenu.min.js"></script>
    <!-- img-upload js -->
    <script src="assets/js/img-upload.js"></script>
    <!-- Count js -->
    <script src="assets/js/count.js"></script>
    <!-- wow.js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/checkout.js"></script>
     <!--sweetalert-->
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('status'))
    <script>
        swal("{{session('status')}}")
   </script>
    @endif
    <!--//end sweet alert-->
</body>
</html>