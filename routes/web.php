<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\BookController;
use App\Models\Post;
use App\Models\Post2;
use App\Models\Post3;
use App\Http\Controllers\AdminSignupController;
use App\Http\Controllers\AdminLoginController;
use App\Models\Checkout2;
use App\Http\Controllers\SingleProfileController;

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

// Route::get('/ ', function () {
//     return view('welcome');
// })->name('home');
//fresh recommendations routes
Route::get('/', [AuthManager::class, 'home'])->name('home');




//Routes for admin signup
Route::get('/adminDisplay',[AdminSignupController::class,'adminDisplay'])->name('adminDisplay');
Route::post('/adminPost', [AdminSignupController::class, 'adminPost'])->name('adminPost');

//Routes for admin login
// Route::get('/adminLogin', [AdminLoginController::class, 'adminLogin'])->name('adminlogin');
// Route::post('/adminLogin', [AdminLoginController::class, 'adminLoginPost'])->name('adminLoginPost');



// routes/web.php or routes/admin.php

Route::get('/admindashboard', [AdminLoginController::class,'adminDashboard'])->name('admindashboard');




//Routes for login
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/registration',[ AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');


//profile route
Route::group(['middleware'=>'auth'], function(){
    Route::get('/profile', function () {
        return "Hi, Profile checking..";
});

});


//Routes for SELLING and showing Book details after posting

Route::get('/bookStore/{id}', [BookController::class, 'showAdds'])->name('showAdds');
Route::post('/bookStore', [BookController::class, 'bookStore'])->name('bookStore');
Route::get('/my-adds',[BookController::class,'showBooks'])->name('showBooks');
Route::get('/myorders',[BookController::class,'myOrders'])->name('myOrders');
Route::get('/seller-orderdetails',[BookController::class,'sellerOrders'])->name('sellerOrders');




//showing buy page routes 
Route::get('/buy/{id}', [BookController::class, 'buyShow'])->name('buyShow');


//showing buy page routes 
Route::get('/buydetails/{id}', [BookController::class, 'buyNow']);

// Display the checkout form
Route::get('/checkout/{id}', [BookController::class, 'checkout']);


// Process the form submission
Route::post('/checkoutpost', [BookController::class, 'checkoutpost'])->name('checkoutpost');





//Routes for authentication of sell  and buy before login
Route::get('/sell', [AuthManager::class, 'sell'])->name('sell');

Route::get('/buy', [AuthManager::class, 'buy'])->name('buy');



//admin routes 

Route::get('/admin', [AdminLoginController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('/admin_userdetails', [AdminLoginController::class, 'adminUserDetails'])->name('admin.userdetails');
Route::get('/admin_book_details', [AdminLoginController::class, 'adminBookDetails'])->name('admin.bookdetails');
Route::get('/order_details', [AdminLoginController::class, 'adminOrderDetails'])->name('admin.bookdetails');




Route::get('/search', [BookController::class, 'search'])->name('search');
