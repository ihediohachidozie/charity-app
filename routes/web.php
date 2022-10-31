<?php

use App\Http\Livewire\Needs;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NeedController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminNeedController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\UserprofileController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->name('dashboard');

Route::group(['middleware' => 'auth'], function () {

    #Route::get('/need-help', Needs::class)->name('needhelp');
    Route::get('/profile', [UserprofileController::class, "index"])->name('profile');
    Route::post('/profile', [UserprofileController::class, "store"])->name('profile.store');
    Route::post('/profile/password', [UserprofileController::class, "changepw"])->name('profile.pw');
    //add more Routes here

    Route::resource('needs', NeedController::class);

    Route::resource('users', AdminController::class);
    Route::resource('needhelps', AdminNeedController::class);

    # Route::get('users', [AdminController::class, 'index'])->name('admin.index');
    # Route::get('users', [AdminController::class, 'edit'])->name('admin.index');
});
Route::get('/donation-form/{id}', [DonateController::class, 'getform'])->name('donate.form');
