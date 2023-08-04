<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>Shop - AndShop</title>
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
    <!-- Responsive css -->
    <link rel="stylesheet" href="../assets/css/responsive.css" />
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
                        <a href="index-2.html">
                            <img src="../assets/img/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="drodo-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index-2.html">
                        <img src="../assets/img/logo.png" alt="logo">
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
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Shop</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Product Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Single Area -->
    <section id="product_single_one" class="ptb-100 ml-5 product_data">
        <div class="container">
            <div class="row area_boxed">
                <div class="col-lg-4">
                    <div class="product_single_one_img">
                    <img src="{{ asset('images/products/' . $products->image) }}" alt="Product" />
                    </div>
                </div>
                                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                    <form action="{{url('/add-rating')}}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$products->id}}">
                      <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Rate {{$products->product_name}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                             </div>
                       <div class="modal-body">
                             <div class="rating-css">
                             <div class="star-icon">
                                @if($user_rating)
                                @for($i=1; $i<=$user_rating->stars_rated; $i++)
                                <input type="radio" value="{{$i}}" name="product_rating" checked id="rating{{$i}}">
                                <label for="rating{{$i}}" class="fa fa-star"></label>
                                @endfor
                                @for($j=$user_rating->stars_rated+1; $j <= 5;$j++)
                                <input type="radio" value="{{$j}}" name="product_rating" id="rating{{$j}}">
                                <label for="rating{{$j}}" class="fa fa-star"></label>
                                @endfor 
                                @else
                                <input type="radio" value="1" name="product_rating" checked id="rating1">
                                <label for="rating1" class="fa fa-star"></label>
                                <input type="radio" value="2" name="product_rating" id="rating2">
                                <label for="rating2" class="fa fa-star"></label>
                                <input type="radio" value="3" name="product_rating" id="rating3">
                                <label for="rating3" class="fa fa-star"></label>
                                <input type="radio" value="4" name="product_rating" id="rating4">
                                <label for="rating4" class="fa fa-star"></label>
                                <input type="radio" value="5" name="product_rating" id="rating5">
                                <label for="rating5" class="fa fa-star"></label>
                                @endif
                                  </div>
                                 </div>
                               </div>
                         <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                           </div>
                       </form>
                        </div>
                    </div>
                    </div>
                <div class="col-lg-8">
                    <div class="product_details_right_one mx-5">
                        <div class="modal_product_content_one">
                            <h3>{{$products->product_name}} </h3>
                            @php $ratenum = number_format($rating_value) @endphp
                            <div class="rating">
                                @for($i=1; $i<=$ratenum; $i++)
                                <i class="fas fa-star checked"></i>
                                @endfor
                                @for($j=$ratenum+1; $j <= 5;$j++)
                                <i class="fas fa-star"></i>
                                @endfor
                                @if($ratings->count() > 0)
                                <span>({{$ratings->count()}} Customer Ratings)</span>
                                @else
                              No Ratings
                                @endif
                            </div>
                            <h4>{{$products->price}} <del>{{$products->discount_price}}</del> </h4>
                            <p class="mb-3"> {{$products->description}}</p>
                             @if($products->quantity > 0)
                             <label class="badge bg-success">In stock</label>
                             @else
                             <label class="badge bg-danger">out of stock</label>
                             @endif

                           <!--{{url('add-to-cart',$products->id)}}-->
                            <form method="post" action="{{url('add-to-cart',$products->id)}}" id="product_count_form_two">
                                @csrf
                                <!--<input type="hidden" value="{{$products->id}}" class="prod_id">-->
                                <div class="product_count_one">
                                    <div class="plus-minus-input">
                                        <div class="input-group-button">
                                            <button type="button" class="button" data-quantity="minus"
                                                data-field="quantity">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input class="form-control qty_input" type="number" name="quantity" value="0">
                                        <div class="input-group-button">
                                            <button type="button" class="button" data-quantity="plus"
                                                data-field="quantity">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                 </div>
                                <div class="links_Product_areas">
                                @if($products->quantity > 0)
                                <button class="btn theme-btn-one btn-black-overlay btn_sm addToCartBtn">Add To Cart</button>
                                @else
                                @endif   
                            </div>
                          </form>
                          <div class="modal_share_icons_one">
                                    <h4>SHARE THIS PRODUCT</h4>
                                    <div class="posted_icons_one">
                                        <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#!"><i class="fab fa-instagram"></i></a>
                                        <a href="#!"><i class="fab fa-twitter"></i></a>
                                        <a href="#!"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#!"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#!"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                        </div>
                      </div>
                    </div>
               <div  class="px-5"> <hr class="mt-4"></div>
                <div class="row">
                            <div class="col-md-4">
                              <div class="reviews_rating">
                             <!-- Button trigger modal -->
                            <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Rate this product
                            </button>
                              <a href="{{url('add-review/'.$products->id. '/userreview')}}" class="btn btn-link">Write a Review</a>
                            </div></div>
                            <!--//-->
                              <div class="col-md-8">
                                @foreach($reviews as $item)
                                <div class="user-review">
                                <label for="">{{$item->user->name .' '.$item->user->lname}}</label>
                                @if($item->user_id == Auth::id())
                                <a href="{{url('edit-review/'.$products->id.'/userreview')}}">Edit</a>
                                @endif
                                <br>
                                @if($item->ratings)
                                @php $user_rated=$item->ratings->stars_rated @endphp
                                    @for($i=1; $i<=$user_rated; $i++)
                                    <i class="fas fa-star checked"></i>
                                    @endfor
                                    @for($j=$user_rated+1; $j <= 5;$j++)
                                    <i class="fas fa-star"></i>
                                    @endfor
                                @endif
                                <small>Reviewed on {{$item->created_at->format('d M Y')}}</small>
                                <p class="text-justify">{{$item->user_review}}</p>
                                 </div>
                                @endforeach
                              </div>
                              </div>
                            
                            <!--//-->
             </div>
        </div>
    </section>
        
    <!-- Related Product -->
    <section id="related_product" class="pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading">
                        <h2>You Might Also Like</h2>
                    </div>
                </div>
            </div>
            <div class="row">
             @foreach($trending as $tre_nding)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="product_wrappers_one">
                        <div class="thumb">
                            <a href="{{url('product-details',$tre_nding->id)}}" class="image">
                            <img  class="img-responsive" src="{{ asset('images/products/' . $tre_nding->image) }}" />
                                <img class="hover-image" src="{{ asset('images/products/' . $tre_nding->image) }}" />
                            </a>
                            <span class="badges">
                                <span class="hot">Trending</span>
                            </span>
                            <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li><a href="{{url('product-details',$tre_nding->id)}}" class="action quickview">
                                                                <i class="fas fa-expand"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                        <div class="content">
                        <h5 class="product_title mb-2"><a href="{{url('product-details',$tre_nding->id)}}">{{$tre_nding->product_name}}</a></h5>
                            <span class="price">
                                <span class="new">{{$tre_nding->price}}</span>
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
                

            </div>
        </div>
    </section>

     <!-- Instagram Arae -->
     <section id="instagram_area_one">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading">
                        <h2>Follow Us Instagram</h2>
                        <p>Smart Africa Furniture(SAF) ni wauzaji wa furnitures bora na za kisasa Tanzania</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="instagram_post_slider owl-carousel owl-theme">
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furniture/">
                                <i class="fab fa-instagram"></i>
                                <img src="../assets/img/furniture/instagram/6.jpg" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furniture/">
                                <i class="fab fa-instagram"></i>
                                <img src="../assets/img/furniture/instagram/7.jpg" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furniture/">
                                <i class="fab fa-instagram"></i>
                                <img src="../assets/img/furniture/instagram/8.jpg" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furniture/">
                                <i class="fab fa-instagram"></i>
                                <img src="../assets/img/furniture/instagram/12.jpg" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furniture/">
                                <i class="fab fa-instagram"></i>
                                <img src="../assets/img/furniture/instagram/2.jpg" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furniture/">
                                <i class="fab fa-instagram"></i>
                                <img src="../assets/img/furniture/instagram/4.jpg" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furniture/">
                                <i class="fab fa-instagram"></i>
                                <img src="../assets/img/furniture/instagram/3.jpg" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furniture/">
                                <i class="fab fa-instagram"></i>
                                <img src="../assets/img/furniture/instagram/11.jpg" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furniture/">
                                <i class="fab fa-instagram"></i>
                                <img src="../assets/img/furniture/instagram/1.jpg" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furniture/">
                                <i class="fab fa-instagram"></i>
                                <img src="../assets/img/furniture/instagram/10.jpg" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furniture/">
                                <i class="fab fa-instagram"></i>
                                <img src="../assets/img/furniture/blog/blog1.jpg" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="https://www.instagram.com/two_in_one_quality_furniture/">
                                <i class="fab fa-instagram"></i>
                                <img src="../assets/img/furniture/blog/blog2.jpg" alt="img">
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
                        <a href="#!"><img src="../assets/img/logo.png" alt="logo"></a>
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
    <!-- Count js -->
    <script src="../assets/js/count.js"></script>
    <!-- Timer js -->
    <script src="../assets/js/nice-select.min.js"></script>
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