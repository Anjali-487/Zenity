<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\TherapistController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\MeditationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\SleepingAidController;
use App\Models\Admin;
use App\Models\Booking;
use App\Models\Order;

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

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/',[AdminController::class,'open_login']);

Route::get('/home',[AdminController::class,'home']);

Route::get('/aboutus',[AdminController::class,'about_us']);

Route::get('/support',[AdminController::class,'support_t']);

Route::get('/contactus', [AdminController::class, 'contact_us'])->name('contactus');

Route::post('/contactus/submit', [AdminController::class, 'submit_contact'])->name('contactus.submit');

Route::post('/api_getorderhis', [ApiController::class,'getOrderhistory']);

Route::resource('therapist',TherapistController::class);

Route::resource('banner',BannerController::class);

Route::resource('coupon',CouponController::class);

Route::resource('product',ProductController::class);

Route::resource('task',TaskController::class);

Route::resource('category',CategoryController::class);

Route::resource('journal',JournalController::class);

Route::resource('meditation',MeditationController::class);

Route::resource('sleepingaid',SleepingAidController::class);

Route::get('/register',[AdminController::class,'open_register']);

Route::post('/login',[AdminController::class,'login']);

Route::post('/regis',[AdminController::class,'register']);

Route::get('/forgotpass',[AdminController::class,'forgotpass']);

Route::post('/resetpass',[AdminController::class,'resetpass']);

Route::get('/logout',[AdminController::class,'logout']);

Route::get('/tlogin',[TherapistController::class,'t_open_login']);

Route::post('/t_login',[TherapistController::class,'t_login']);

Route::get('/t_home',[TherapistController::class,'t_home']);

Route::get('/order',[OrderController::class,'index']);

Route::get('/ostatus/{id}',[OrderController::class,'status']);

Route::get('/patient', [TherapistController::class, 'getUsers']);

Route::get('/viewprofile', [AdminController::class, 'open_profile_update']);

Route::post('/editprofile',[AdminController::class,'edit_profile']);

Route::post('/search', [AdminController::class, 'search']);

Route::get('/booking', function () {
    $data = Booking::get();
    return view('booking',compact('data'));
});



// Admin search result routes
// Users
Route::get('/user/{id}', [ApiController::class, 'getusers'])->name('user.show');

// Categories
Route::get('/category/{id}', [CategoryController::class,'show'])->name('category.show');

// Banners
Route::get('/banner/{id}', [BannerController::class,'show'])->name('banner.show');

// Tasks
Route::get('/task/{id}', [TaskController::class,'show'])->name('task.show');

// Orders
Route::get('/order/{id}', [OrderController::class, 'index'])->name('order.show');

// Products
Route::get('/product/{id}', [ProductController::class,'show'])->name('product.show');

// Therapists
Route::get('/therapist/{id}', [TherapistController::class,'show'])->name('therapist.show');

// Sleeping Aids
Route::get('/sleepingaid/{id}', [SleepingAidController::class,'show'])->name('sleepingaid.show');

// Meditations
Route::get('/meditation/{id}', [MeditationController::class,'show'])->name('meditation.show');

// API Route
 
Route::post('/api_register',[ApiController::class,'register_user']);
Route::post('/api_login',[ApiController::class,'login_user']);
Route::get('/api_data',[ApiController::class,'get_data']);
Route::post('/addorder',[ApiController::class,'add_order']);
Route::post('/getorder',[ApiController::class,'getOrder']);
Route::post('/updateqty',[ApiController::class,'updateQty']);
Route::post('/removeorder',[ApiController::class,'removeorder']);
Route::post('/confirmorder',[ApiController::class,'confirmorder']);
Route::post('/addbooking',[ApiController::class,'addBooking']);
Route::post('/confirmbooking',[ApiController::class,'confirmbooking']);
Route::post('/removebooking',[ApiController::class,'removebooking']);
Route::post('/api_applycoupon',[ApiController::class,'getCouponFromCode']);
Route::get('/users', [ApiController::class, 'getUsers']);
Route::post('/api_edituser',[ApiController::class,'editprofile']);
Route::post('/book_therapist',[ApiController::class,'book_therapist']);