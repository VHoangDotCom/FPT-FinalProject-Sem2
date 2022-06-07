<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{homeController,
    profileController,
    cartController,
    checkOutController,
    dashboardController,
    categoryController,
    productController,
    productMotoController,
    BlogController,
    adminUserController,
    OrderController
};

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

//front end trang chu
Route::prefix('')->group(function () {

    Route::get('/', [homeController::class,'index'])->name('/');
    Route::get('/news', [homeController::class,'news'])->name('news');
    Route::get('/blog/{id}',[homeController::class,'blog_detail'])->name('blog_detail');
    //About Us page
    Route::get('/about_us', [homeController::class,'about_us'])->name('about_us');

    Route::get('/products', [homeController::class,'ProductPeople'])->name('products');

    Route::get('/product/{id}',[homeController::class,'detail'])->name('detail');
    Route::get('profile',[profileController::class,'index'])->name('profile');
    Route::get('my-order/{id}',[profileController::class,'showOrder'])->name('showOrder');
    Route::get('profile/edit/{id}',[profileController::class,'edit'])->name('profile.edit');
    Route::post('profile/update/{id}',[profileController::class,'update'])->name('profile.update');
    Route::get('checkout success',function (){
        return view('order.checkout_success');
    })->name('checkout_success');

});
//Cart
Route::prefix('')->group(function () {

    Route::get('cart', [cartController::class, 'Cart'])->name('Cart');
    Route::get('add-to-cart/{id}', [cartController::class, 'addToCart'])->name('add.to.cart');
    Route::get('/update-cart',[cartController::class,'updateCart'])->name('updateCart');
    Route::get('/delete-cart',[cartController::class,'deleteCart'])->name('deleteCart');
});

//checkout
Route::prefix('')->middleware('auth')->group(function () {
    Route::get('/checkout',[checkOutController::class,'index'])->name('checkout');
    Route::post('/bill/{id} ',[checkOutController::class,'checkout'])->name('order');
});

//dashboard admin
Route::prefix('')->middleware('checkAdmin')->group(function () {
    Route::get('/dashboard',[dashboardController::class,'index'])->name('home');
});

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest')
    ->name('create');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

//category
Route::prefix('')->middleware('checkAdmin')->group(function () {
    Route::resource('categories', categoryController::class);
});
//product people
Route::prefix('')->middleware('checkAdmin')->group(function () {
    Route::resource('productPeople', productController::class);
});

//product moto
Route::prefix('')->middleware('checkAdmin')->group(function () {
    Route::resource('productMoto', productMotoController::class);
});

////Redirect to the Blog Resource Controller
Route::prefix('')->middleware('checkAdmin')->group(function () {
    Route::resource('blogs', BlogController::class);
});


//admin user
Route::prefix('')->middleware('checkAdmin')->group(function () {
    Route::resource('users', adminUserController::class);
});

Route::prefix('')->middleware('checkAdmin')->group(function () {
    Route::resource('orders',OrderController::class);

});
