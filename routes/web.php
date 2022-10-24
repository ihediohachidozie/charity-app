<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Needs;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

#Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', Dashboard::class)->name('dashboard');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/need-help', Needs::class)->name('needhelp');
    //add more Routes here
});
