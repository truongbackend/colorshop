<?php

use App\Http\Middleware\admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\AuthController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\VoucherController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Client\ProductsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Client\ContactHomeController;

// use App\Http\Controllers\Client\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
|--------------------------------------------------------------------------
| Web admin
|--------------------------------------------------------------------------
*/
Route::get('/home1', function () {
    return view('admin/layout');
});
// Route::get('banner', [HomeController::class, 'index'])->name('index');
Route::get('admin/dashboard', function () {
    return view('admin/dashboard/index');
});
Route::get('admin/category/show', function () {
    return view('admin/category/show');
});
Route::get('/home', function () {
    return view('client/index');
});
// Route::get('/shop', function () {
//     return view('client/product/product');
// });
Route::get('/product-details', function () {
    return view('client/product/product-details');
});
Route::get('/cart', function () {
    return view('client/cart');
});
Route::get('/checkout', function () {
    return view('client/checkout');
});
Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/register', function () {
    return view('auth/register');
});
Route::get('/new/list', function () {
    return view('admin/new/show');
});
Route::middleware([admin::class])->group(function () {
    Route::prefix('admin')->group(function(){
        Route::resource('categories', CategoryController::class);
        Route::resource('products', ProductController::class);
        Route::resource('news', NewsController::class);
        Route::resource('users',UserController::class);
        Route::resource('contact',ContactController::class);
        Route::resource('banner',BannerController::class);
        Route::resource('voucher',VoucherController::class);
        Route::resource('setting',SettingController::class);
    });
});
Route::get('/product', function () {
    return view('client/product/product');
});
Route::get('/admin/order', function () {
    return view('admin.order.show');
});
Route::get('/admin/user', function () {
    return view('admin.user.show');
});
Route::get('news', function () {
    return view('client/home/new');
});
Route::get('/home',[HomeController::class,'index']);
Route::resource('contact',ContactHomeController::class);
// //client
Route::get('/product',[ProductsController::class,'index']);
Route::get('/product/details/{id}',[ProductsController::class,'show']);
// // Route::get('home', [ProductsController::class, 'banner'])->name('banner');
// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/register', [AuthController::class, 'register'])->name('register');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// //carrt
// Route::get('/cart', [CartController::class],'index')->name('cart.index');
?>
