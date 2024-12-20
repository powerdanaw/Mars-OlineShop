<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderBanerController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;


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


// Route::get('/error' , function(){
//     return view('User.error');
//     });


//Auth
Route::namespace('Auth')->group(function(){
    Route::get('/register' , [AuthController::class , 'registerForm'] )->name('registerForm');
    Route::post('/register' , [AuthController::class , 'register'] )->name('register');
    Route::get('/login' , [AuthController::class , 'loginForm'] )->name('loginForm');
    Route::post('/login' , [AuthController::class , 'login'] )->name('login');
    Route::get('/logout' , [AuthController::class , 'logout'] )->name('logout');
});


//Admin
Route::prefix('Admin')->middleware([IsAdmin::class])
->group(function(){

    Route::get('/' , [AdminController::class , 'index'] )->name('Admin.index');
    
    
    //category
    Route::prefix('Category')->group(function(){

        Route::get('/Create' , [CategoryController::class , 'create'] )->name('Admin.Category.create');
        Route::post('/Create' , [CategoryController::class , 'store'] )->name('Admin.Category.store');
        Route::get('/Categories' , [CategoryController::class , 'Categories'] )->name('Admin.Category.Categories');
        Route::get('/Edit/{id}' , [CategoryController::class , 'Edit'] )->name('Admin.Category.Edit');
        Route::post('/Edit/{id}' , [CategoryController::class , 'update'] )->name('Admin.Category.update');
        Route::get('/Delete/{id}' , [CategoryController::class , 'Delete'] )->name('Admin.Category.Delete');
        Route::get('/Status/{id}' , [CategoryController::class , 'Status'] )->name('Admin.Category.Status');

    });


    //product
    Route::prefix('Product')->group(function(){

        Route::get('/Create' , [ProductController::class , 'create'] )->name('Admin.Product.create');
        Route::post('/Create' , [ProductController::class , 'store'] )->name('Admin.Product.store');
        Route::get('/Products' , [ProductController::class , 'Products'] )->name('Admin.Product.Products');
        Route::get('/Edit/{id}' , [ProductController::class , 'Edit'] )->name('Admin.Product.Edit');
        Route::post('/Edit/{id}' , [ProductController::class , 'update'] )->name('Admin.Product.update');
        Route::get('/Delete/{id}' , [ProductController::class , 'Delete'] )->name('Admin.Product.Delete');
        Route::get('/Status/{id}' , [ProductController::class , 'Status'] )->name('Admin.Product.Status');

        //images
        Route::get('/images/{product}' , [ProductController::class , 'images'] )->name('Admin.Product.images');
        Route::get('/Addimage/{id}' , [ProductController::class , 'Addimage'] )->name('Admin.Product.Addimage');
        Route::post('/Addimage/{id}' , [ProductController::class , 'saveimage'] )->name('Admin.Product.saveimage');
        Route::get('/DeleteImg/{product}/{id}' , [ProductController::class , 'DeleteImg'] )->name('Admin.Product.DeleteImg');

        //sizes
        Route::get('/sizes/{product}' , [ProductController::class , 'sizes'] )->name('Admin.Product.sizes');
        Route::get('/Addsize/{id}' , [ProductController::class , 'Addsize'] )->name('Admin.Product.Addsize');
        Route::post('/Addsize/{id}' , [ProductController::class , 'savesize'] )->name('Admin.Product.savesize');
        Route::get('/DeleteSize/{product}/{id}' , [ProductController::class , 'DeleteSize'] )->name('Admin.Product.DeleteSize');
 
        //colors
        Route::get('/colors/{product}' , [ProductController::class , 'colors'] )->name('Admin.Product.colors');
        Route::get('/Addcolor/{id}' , [ProductController::class , 'Addcolor'] )->name('Admin.Product.Addcolor');
        Route::post('/Addcolor/{id}' , [ProductController::class , 'savecolor'] )->name('Admin.Product.savecolor');
        Route::get('/DeleteColor/{product}/{id}' , [ProductController::class , 'DeleteColor'] )->name('Admin.Product.DeleteColor');

    });

    //Sliders
    Route::prefix('Slider')->group(function(){
        Route::get('/Sliders' , [SliderBanerController::class , 'Sliders'] )->name('Admin.Slider.Sliders');
        Route::get('/Create' , [SliderBanerController::class , 'create'] )->name('Admin.Slider.create');
        Route::post('/Create' , [SliderBanerController::class , 'store'] )->name('Admin.Slider.store');
        Route::get('/Delete/{id}' , [SliderBanerController::class , 'Delete'] )->name('Admin.Slider.Delete');
    });

    //baner
    Route::prefix('Baner')->group(function(){

        Route::get('/Baners' , [SliderBanerController::class , 'Baners'] )->name('Admin.Baner.Baners');
        Route::get('/BanerCreate' , [SliderBanerController::class , 'createBaner'] )->name('Admin.Baner.create');
        Route::post('/BanerCreate' , [SliderBanerController::class , 'storeBaner'] )->name('Admin.Baner.store');
        Route::get('/BanerDelete/{id}' , [SliderBanerController::class , 'DeleteBaner'] )->name('Admin.Baner.Delete');
    });

    //TextBaner
    Route::prefix('TextBaner')->group(function(){

        Route::get('/TextBaners' , [SliderBanerController::class , 'TextBaners'] )->name('Admin.TextBaner.TextBaners');
        Route::get('/TextBanerCreate' , [SliderBanerController::class , 'createTextBaner'] )->name('Admin.TextBaner.create');
        Route::post('/TextBanerCreate' , [SliderBanerController::class , 'storeTextBaner'] )->name('Admin.TextBaner.store');
        Route::get('/TextBanerDelete/{id}' , [SliderBanerController::class , 'DeleteTextBaner'] )->name('Admin.TextBaner.Delete');
    });


    //Orders
    Route::prefix('Order')->group(function(){

        Route::get('/' , [OrdersController::class , 'orders'] )->name('Admin.Order.orders');
        Route::get('/{id}' , [OrdersController::class , 'status'] )->name('Admin.Order.status');
        Route::get('/details/{id}' , [OrdersController::class , 'details'] )->name('Admin.Order.details');
    });


    //UsersList
    Route::get('/users' , [AdminController::class , 'users'] )->name('Admin.users');

    
});


//User
Route::namespace('User')->group(function(){

    Route::get('/' , [UserController::class , 'home'] )->name('home');
    
    Route::get('/product/{id}' , [UserController::class , 'product'] )->name('product');
    
    Route::get('/category/{id}' , [UserController::class , 'category'] )->name('category');
    
    Route::post('/add2cart/{id}' , [UserController::class , 'addtocart'] )->name('addtocart');
    Route::get('/CartItems' , [UserController::class , 'CartItems'] )->name('CartItems');
    Route::get('/DeleteCart/{id}' , [UserController::class , 'DeleteCart'] )->name('DeleteCart');
    
    Route::get('/information' , [UserController::class , 'information'] )->name('information');
    Route::post('/information' , [UserController::class , 'order'] )->name('order');

    Route::get('/callback' , [UserController::class , 'callback'] )->name('callback');
    Route::get('/myOrder' , [UserController::class , 'myOrder'] )->name('myOrder');

    Route::post('/payAgain/{id}' , [UserController::class , 'payAgain'] )->name('payAgain');
    Route::get('/callbackAgain/{id}' , [UserController::class , 'callbackAgain'] )->name('callbackAgain');

    Route::post('/search' , [UserController::class , 'search'] )->name('search');

});