<?php

use App\Http\Livewire\Needs;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NeedController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AdminNeedController;
use App\Http\Controllers\SocialshareController;
use App\Http\Controllers\UserprofileController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/projects', [WelcomeController::class, 'projects'])->name('projects');
Route::get('/about-us', [WelcomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contact-us', [ContactController::class, 'contact'])->name('contact');
Route::get('/monetary', [ServicesController::class, 'monetary'])->name('monetary');
Route::get('/food', [ServicesController::class, 'food'])->name('food');
Route::get('/cloth', [ServicesController::class, 'cloth'])->name('cloth');
Route::get('/training', [ServicesController::class, 'training'])->name('training');


Route::post('/news-letter', [WelcomeController::class, 'newsletter'])->name('newsletter');
Route::post('/contact-us', [ContactController::class, 'contactus'])->name('contactus');



Route::get('/home', [HomeController::class, 'index'])->name('dashboard');

Route::group(['middleware' => 'auth'], function () {


    Route::get('/profile', [UserprofileController::class, "index"])->name('profile');
    Route::post('/profile', [UserprofileController::class, "store"])->name('profile.store');
    Route::post('/profile/password', [UserprofileController::class, "changepw"])->name('profile.pw');
    //add more Routes here

    Route::resource('needs', NeedController::class);

    Route::resource('users', AdminController::class);
    Route::resource('needhelps', AdminNeedController::class);

    Route::get('donors', [AdminController::class, 'donors'])->name('donors');

});

Route::get('/donation-form/{id}', [DonateController::class, 'getform'])->name('donate.form');
Route::post('/donation-form', [DonateController::class, 'postform'])->name('donate.store');
Route::get('need-help/{id}', [SocialshareController::class, 'show']);


