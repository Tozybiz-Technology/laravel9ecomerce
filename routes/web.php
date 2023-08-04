<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\whmcont;
use App\Http\Controllers\admin\categoryController;
use App\Http\Controllers\admin\productController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\userController;
use App\Http\Controllers\admin\orderController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RatingController;
//use App\Http\Controllers\SocialShareController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view('/','furniture');
Route::view('about-us','about-us');
Route::view('privacy-policy','privacy-policy');
Route::view('contact-us','contact-us');
//Route::post('/contact','App\Http\Controllers\whmcont@contacts');
//Route::view('product-single','product-single');
Route::get('product-single/{id}','App\Http\Controllers\admin\productController@singleView');
//Route::view('shop','shop');
Route::get('/','App\Http\Controllers\admin\productController@productShow');
Route::get('shop','App\Http\Controllers\admin\productController@shopProduct');
Route::get('product-details/{id}','App\Http\Controllers\admin\productController@productView');
Route::get('category-details/{slug}','App\Http\Controllers\admin\categoryController@categoryView');
//Route::get('product-details/{cate_slug}/{prod_slug}','App\Http\Controllers\admin\categoryController@productView');
//Route::view('category-view','category-view');
Route::get('category-view','App\Http\Controllers\admin\categoryController@viewCategory');
Route::middleware(['auth','verified'])->group(function(){
Route::view('my-account','my-account');
Route::get('checkout', [whmcont::class,'ckeckLogin']);
Route::get('checkout', [checkoutController::class,'productCheckout']);
Route::post('add-to-cart/{id}', [cartController::class, 'addCart']);
Route::get('cart-2', [cartController::class, 'viewCart']);
Route::get('DeleteCart/{id}', [cartController::class, 'deleteCart']);
Route::post('place-order', [checkoutController::class,'placeOrder']);
Route::get('my-account', [userController::class,'myOrder']);
Route::get('view-order/{id}', [userController::class, 'viewOrder']);
Route::post('add-rating', [RatingController::class,'addRating']);
Route::get('add-review/{id}/userreview', [ReviewController::class, 'addReview']);
Route::post('add-review', [ReviewController::class, 'createReview']);
Route::get('edit-review/{id}/userreview', [ReviewController::class, 'editReview']);
Route::put('update-review', [ReviewController::class, 'updateReview']);
Route::post('proceed-to-pay', [checkoutController::class,'razorpaycheck']);
Route::get('stripe/{total}', [checkoutController::class,'stripe']);
Route::post('stripe/{total}', [checkoutController::class, 'stripePost'])->name('stripe.post');
});


/*Route::group(['middleware'=>['auth','isAdmin']], function(){
    Route::get('/vendor', function () {
        return view('admin.vendor');
    });

});*/
//Auth::routes(['verify' => true]);
Auth::routes(['verify' => true]);
Route::middleware(['auth','isAdmin'])->group(function(){
    Route::get('/admin.vendor', function () {
        return view('admin.vendor');
    });

});
Route::middleware(['auth','isAdmin'])->group(function(){
    Route::view('admin.category','admin.category');
    Route::view('admin.add-product','admin.add-product');
    Route::post('/insert-category','App\Http\Controllers\admin\categoryController@insert');
    Route::get('admin.vendor','App\Http\Controllers\admin\categoryController@viewData');
   // Route::get('admin.vendor','App\Http\Controllers\admin\productController@viewData');
    Route::get('catedit/{id}', [categoryController::class,'catEdit']);
    Route::get('catdelete/{id}', [categoryController::class,'catDelete']);
    Route::post('admin.catupdate', [categoryController::class,'catUpdate']);
    Route::post('/insert-product','App\Http\Controllers\admin\productController@insert');
    Route::get('admin.add-product', [productController::class,'add']);
    Route::get('prodedit/{id}', [productController::class,'prodEdit']);
    Route::get('proddelete/{id}', [productController::class,'proDelete']);
    Route::post('admin.product-edit', [productController::class,'prodUpdate']);
    Route::get('orderview', [orderController::class,'viewOrder']);
    Route::get('orders-view/{id}', [orderController::class,'ordersView']);
    Route::put('update-order/{id}', [orderController::class,'updateOrder']);
    Route::get('order-history', [orderController::class,'orderHistory']);
    Route::get('users', [DashboardController::class,'Users']);
    Route::get('users-view/{id}', [DashboardController::class,'viewUser']);
    Route::get('print-pdf/{id}', [orderController::class,'print_PDF']);
    });
    Route::get('product-list', [categoryController::class, 'productSearch']);
    Route::post('searchProduct', [categoryController::class, 'searchAdd']);
    //Route::get('product-details/{id}', [productController::class, 'index']);
?>





