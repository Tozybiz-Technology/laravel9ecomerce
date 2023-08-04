<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Vendor - AndShop</title>
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
    <link rel="stylesheet" href="assets/css/responsive.css" />
    
<body>
    <!-- Preloader Area -->
    <div id="preloader">
        <div id="status">
            <img src="../assets/img/loader.gif" alt="img">
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
                    <a class="navbar-brand" href="index-2.html">
                        <img src="../assets/img/logo.png" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="/" class="nav-link active">Home</a>
                            </li>
                            <li class="nav-item megamenu"><a href="shop.html" class="nav-link">Shop </a>
                            </li>
                            <li class="nav-item"><a href="about-us.html" class="nav-link">About Us</a></li>
                            <li class="nav-item"><a href="blog-gride-1.html" class="nav-link">Blog</a></li>
                            <li class="nav-item"><a href="contact-us.html" class="nav-link">Contact</a></li>
                        </ul>
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
                        <h2>Vendor</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Vendor</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="add_category_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="add_product_wrapper">
                        <div class="back_to_area">
                            <a href="admin.vendor"><i class="fas fa-long-arrow-alt-left"></i> Back To Dashboard</a>
                        </div>
                        <h3>Update Product categories</h3>
                        <form method="POST" action="/admin.catupdate" class="add_product_form" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$data['id']}}">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                        <label for="category_name">Category Name*</label>
                                        <input type="text" id="name" name="name" class="form-control"  value="{{$data['name']}}">
                                     </div>
                                <div class="col-md-6 mb-3">
                                        <label for="slug">Slug</label>
                                        <input type="text" id="slug" name="slug" class="form-control"  value="{{$data['slug']}}"> 
                                </div>
                                <div class="col-md-12 mb-3">
                                      <label for="description">Description</label>
                                        <textarea  name="description" rows="3" class="form-control">{{$data->description}}</textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                        <label for="status">Status</label>
                                        <input type="checkbox" id="mystatus" name="status" {{$data->status == '1' ? 'checked':'' }}>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="popular">Popular</label>
                                        <input type="checkbox" id="popular" name="popular" {{$data->popular == '1' ? 'checked':'' }}>
                                    </div>
                                <div class="col-md-12 mb-3">
                                        <label for="slug">Meta Title</label>
                                        <input type="text" id="meta_title" name="meta_title" class="form-control" value="{{$data['meta_title']}}">
                                </div>
                                <div class="col-md-12 mb-3">
                                        <label for="slug">Meta Keywords</label>
                                        <textarea  name="meta_keywords" rows="3" class="form-control">{{$data->meta_keywords}}</textarea>
                                    </div>
                                <div class="col-md-12 mb-3">
                                        <label for="description">Meta Description</label>
                                        <textarea  name="meta_description" id="meta_decription" rows="3" class="form-control">{{$data->meta_descrip}}</textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                        <label for="image">Image</label>
                                        @if($data->image)
                                    <img src="{{ asset('images/category/' . $data->image) }}" width="80" height="80" alt="chair"/>
                                    @endif
                                    <div class="mb-3">
                                    <input type="file" class="form-control" aria-label="file example" name="image" id="file">
                                    </div><br>
                                    </div>
                                <div class="col-md-12">
                                        <button class="theme-btn-one bg-black btn_sm">Add Category</button>
                                </div>
                            </div>
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
    <!-- Jquery -->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
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
    <script src="../assets/js/timer.js"></script>
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
    <script>
        new WOW().init();
    </script>
</body>
</html>