<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\SignupController;
use App\Http\Controllers\Frontend\CourseController;
use App\Http\Controllers\Frontend\ChatbotController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PaymentController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class,'index']);
Route::get('/article',[HomeController::class,'article_index']);
Route::get('/review',[HomeController::class,'review_index']);
Route::get('/guide',[CourseController::class,'guide_index']);

Route::get('/interactive',[CourseController::class,'interactive_index']);
Route::get('/real',[CourseController::class,'real_index']);

Route::get('/about',[AboutController::class,'index']);

Route::get('/signup',[SignupController::class,'index']);
Route::get('/course',[CourseController::class,'index']);
Route::post('/submit',[SignupController::class,'submit_data']);
// client
Route::get('/display',[SignupController::class,'display_data']);


Route::get('/login',[LoginController::class,'index']);
Route::post('/login_user',[LoginController::class,'login_data']);

Route::get('/contact',[ContactController::class,'index']);
Route::post('/contactus',[ContactController::class,'contact_data']);


Route::get("/edit{ep}",[SignupController::class,"data_edit"]);
Route::post("/update",[SignupController::class,"data_update"]);

Route::get("/delete{del}",[LoginController::class,"data_delete"]);

Route::get("/logout",[SignupController::class,'logout']);
Route::get('/admindisplay',[LoginController::class,'admindisplay_data']);

Route::get('/chatbot',[ChatbotController::class,'index']);
Route::post('/send-message', [ChatbotController::class, 'sendMessage'])->name('send-message');

Route::get('/changepass{cp}',[MainController::class,'changepassword']);
Route::post('/newpassword',[MainController::class,'newpassword']);

Route::get('/block{blk}',[LoginController::class,'block']);
Route::get('/unblock{ublk}',[LoginController::class,'unblock']);

// comment section
Route::get('/comment',[LoginController::class,'comment_index']);
Route::post('/commentsubmit',[LoginController::class,'comment_data']);



//payment
Route::get('/payment', [PaymentController::class, 'showPaymentPage'])->name('payment.page');
Route::post('/payment/order', [PaymentController::class, 'createOrder'])->name('payment.order');
Route::post('/payment/success', [PaymentController::class, 'handleSuccess'])->name('payment.success');
Route::post('/payment/failure', [PaymentController::class, 'handleFailure'])->name('payment.failure');



