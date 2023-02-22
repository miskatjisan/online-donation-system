<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FoodDonateController;
use App\Http\Controllers\MoneyDonateController;
use App\Http\Controllers\ZakatDonateController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\Auth\VolenteerAuthController;

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

/* User Authentication */

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('', [AuthController::class, 'index']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// service
Route::get('services', [ServiceController::class, 'services'])->name('services');

// food donate
Route::get('food/donate', [FoodDonateController::class, 'Create'])->name('create.fooddonate');
Route::post('store/food/donate/successfully', [FoodDonateController::class, 'Store'])->name('fooddonate.store');
Route::get('food/donate/success/massage', [FoodDonateController::class, 'successmsg'])->name('success.fooddonate');
Route::get('food/donar/details', [FoodDonateController::class, 'display'])->name('display.fooddonar');
Route::get('/fooddonar/pdf', [FoodDonateController::class, 'createPDF']);

// Money donate
Route::get('money/donate', [MoneyDonateController::class, 'Create'])->name('create.moneydonate');
Route::post('store/money/donate/successfully', [MoneyDonateController::class, 'Store'])->name('moneydonate.store');
Route::get('money/donate/success/massage', [MoneyDonateController::class, 'successmsg'])->name('success.moneydonate');
Route::get('money/donar/details', [MoneyDonateController::class, 'display'])->name('display.moneydonar');
// zakat donate
Route::get('zakat/donate', [ZakatDonateController::class, 'Create'])->name('create.zakatdonate');
Route::post('store/zakat/donate/successfully', [ZakatDonateController::class, 'Store'])->name('zakatdonate.store');
Route::get('zakat/donate/success/massage', [ZakatDonateController::class, 'successmsg'])->name('success.zakatdonate');
Route::get('zakat/donar/details', [ZakatDonateController::class, 'display'])->name('display.zakatdonar');

// Media
Route::get('media', [MediaController::class, 'display'])->name('Media');

// Contact
Route::get('contact', [ContactController::class, 'Create'])->name('Contact');
Route::post('post/contact/successfully', [ContactController::class, 'Store'])->name('store.contact');

// Ticket
Route::get('buy/ticket', [TicketController::class, 'Create'])->name('create.buyticket');
Route::post('store/buy/ticket/successfully', [TicketController::class, 'Store'])->name('buyticket.store');
Route::get('ticket/donate/success/massage', [TicketController::class, 'successmsg'])->name('success.ticketdonate');
Route::get('ticket/donar/details', [TicketController::class, 'display'])->name('display.ticketdonar');

/* volenteer Authentication */
Route::get('volunteer/login', [VolenteerAuthController::class, 'login'])->name('vol-login')->middleware('volunteerLoggedIn');
Route::post('volunteer/post-login', [VolenteerAuthController::class, 'check'])->name('vol-login.post'); 
Route::get('volunteer/registration', [VolenteerAuthController::class, 'registration'])->name('vol-register');
Route::post('volunteer/post-registration', [VolenteerAuthController::class, 'Store'])->name('vol-register.post'); 
Route::get('volunteer', [VolenteerAuthController::class, 'index'])->middleware('isLoggedInVolunteer'); 
Route::get('volunteer/logout', [VolenteerAuthController::class, 'logout'])->name('vol.logout');



// admin 
//AUTHENTICATION

Route::get('admin/login',[AdminAuthController::class, 'login'])->middleware('adminLoggedIn');
Route::post('admin/check',[AdminAuthController::class, 'check'])->name('admin.check');
Route::get('admin/logout',[AdminAuthController::class, 'logout'])->name('admin.logout');
Route::get('admin',[AdminAuthController::class, 'dashboard'])->middleware('isLoggedInAdmin');

//MoneyDonate
Route::resource('admin/moneydonates', MoneyDonateController::class);
//ZakatDonate
Route::resource('admin/zakatdonates', ZakatDonateController::class);
//FoodDonate
Route::resource('admin/fooddonates', FoodDonateController::class);
//Media
Route::resource('admin/medias', MediaController::class);
//Contact
Route::resource('admin/contacts', ContactController::class);
//Ticket
Route::resource('admin/tickets', TicketController::class);