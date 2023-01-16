<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin-login', [AdminController::class, 'index'])->name('admin.login');

Route::group(['middleware' => 'admin'], function(){
    Route::get('/admin-dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin-logout', [DashboardController::class, 'logout'])->name('admin.logout');
});


