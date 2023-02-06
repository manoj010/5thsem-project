<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\BrandController;
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
    return view('frontend.index');
});

Route::middleware('auth')->group(function(){
    Route::get('/dashboard',[UserController::class,'UserDashboard'])->name('dashboard');
    Route::post('/user/profile/store',[UserController::class,'UserProfileStore'])->name('user.profile.store');
    Route::post('/user/password/update',[UserController::class,'UserPasswordUpdate'])->name('user.password.update');
    Route::get('/user/logout',[UserController::class,'UserLogout'])->name('user.logout');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth','role:admin')->group(function() {
    Route::get('/admin/dashboard',[AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout',[AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile',[AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store',[AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/setting',[AdminController::class, 'AdminSetting'])->name('admin.setting');
    Route::get('/admin/change/password',[AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/password/update',[AdminController::class, 'AdminPasswordUpdate'])->name('password.update');
});

Route::get('/admin/login', [AdminController::class, 'AdminLogin']);

Route::middleware('auth','role:admin')->group(function() {
    Route::controller(BrandController::class)->group(function(){
        Route::get('/all/brand','AllBrand')->name('all.brand'); 
        Route::get('/add/brand','AddBrand')->name('add.brand');
        Route::post('/store/brand','StoreBrand')->name('store.brand');
        Route::get('/edit/brand/{id}','EditBrand')->name('edit.brand');
        Route::post('/update/brand','UpdateBrand')->name('update.brand');
        Route::get('/delete/brand/{id}','DeleteBrand')->name('delete.brand');
    });
});